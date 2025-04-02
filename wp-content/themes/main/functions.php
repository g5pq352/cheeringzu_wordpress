<?php
/**
 * Main functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Main
 * @since Main 1.0
 */

add_filter('show_admin_bar', '__return_false');

// add_action('wp_enqueue_scripts', 'remove_block_css_all', 100);
// function remove_block_css_all() {
//     // Gutenberg block 样式
//     wp_dequeue_style('wp-block-library');
//     wp_dequeue_style('wp-block-library-theme');
//     wp_dequeue_style('global-styles');
//     wp_dequeue_style('classic-theme-styles');
//     remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
//     remove_action('wp_footer', 'wp_enqueue_global_styles', 1);
//     remove_action('wp_enqueue_scripts', 'wp_enqueue_block_support_styles');
// }

// 抓分類
function get_post_category_name($post_id, $taxonomy = '', $default = '未分類') {
    if (!$post_id || empty($taxonomy)) return $default; // 如果 ID 無效或未提供 taxonomy，返回預設分類名稱
    $terms = wp_get_post_terms($post_id, $taxonomy); // 取得該文章的分類
    if (!empty($terms) && !is_wp_error($terms)) {
        return $terms[0]->name; // 返回第一個分類名稱
    }
    return $default; // 如果沒有分類，返回預設值
}

// 抓日期
function get_post_published_date($post_id, $format = 'M.d.Y') {
    if (!$post_id) return ''; // 如果 ID 無效，返回空字串
    $post_date = get_post_field('post_date', $post_id); // 取得發佈日期 (格式: YYYY-MM-DD HH:MM:SS)
    if (!$post_date) return ''; // 防止空值報錯
    return date($format, strtotime($post_date)); // 轉換為指定格式
}

// 抓自訂欄位
function get_pods_field($post_type, $post_id, $field_name) {
    if (!$post_type || !$post_id || !$field_name) {
        return ''; // 避免錯誤，若參數不完整則回傳空字串
    }

    $pod = pods($post_type, $post_id); // 獲取 Pods 物件
    if ($pod) {
        return $pod->display($field_name); // 抓取指定欄位值
    }
    
    return ''; // 如果找不到 Pods 物件，回傳空值
}

// 抓圖片
function get_image_url($object_id, $meta_key, $size = 'full') {
    if (empty($object_id) || empty($meta_key)) {
        return null;
    }

    $file_meta = get_term_meta($object_id, $meta_key, true);
    if (empty($file_meta)) {
        $file_meta = get_post_meta($object_id, $meta_key, true);
    }

    if (is_numeric($file_meta)) {
        // 如果要求 full，才優先回傳原圖
        if ($size === 'full' && function_exists('wp_get_original_image_url')) {
            $original = wp_get_original_image_url($file_meta);
            if ($original) return $original;
        }

        // 回傳指定尺寸的圖片網址
        $image_url = wp_get_attachment_image_url($file_meta, $size);
        if ($image_url) return $image_url;

        // fallback 到原圖
        if (function_exists('wp_get_original_image_url')) {
            return wp_get_original_image_url($file_meta);
        }

        return wp_get_attachment_url($file_meta); // 最後保險一層
    }

    if (filter_var($file_meta, FILTER_VALIDATE_URL)) {
        return $file_meta;
    }

    return null;
}

// 抓圖片alt
function get_image_alt($post_id, $meta_key = '') {
    if (empty($post_id)) {
        return ''; // 確保提供了 post ID
    }

    $image_id = '';

    // 1️⃣ 如果有提供 meta_key，就從 post_meta 取得圖片 ID
    if (!empty($meta_key)) {
        $image_id = get_post_meta($post_id, $meta_key, true);
    }

    // 2️⃣ 如果沒有指定 meta_key，則假設 post_id 本身就是圖片 ID
    if (empty($image_id) || !is_numeric($image_id)) {
        $image_id = $post_id; // 直接當作圖片 ID
    }

    // 3️⃣ 嘗試抓取 `_wp_attachment_image_alt`
    $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true);

    // 4️⃣ 如果 `alt` 為空，則回退到圖片標題
    if (empty($alt_text)) {
        $alt_text = get_the_title($image_id);
    }

    // 5️⃣ 如果標題也沒有，則回退到圖片描述（post_content）
    if (empty($alt_text)) {
        $attachment_post = get_post($image_id);
        $alt_text = !empty($attachment_post->post_content) ? $attachment_post->post_content : '';
    }

    return esc_attr($alt_text); // 轉義確保安全
}


function custom_new_rewrite_rules() {
    add_rewrite_rule(
        '^new/page/([0-9]+)/?$',
        'index.php?pagename=new&paged=$matches[1]',
        'top'
    );
}
add_action('init', 'custom_new_rewrite_rules', 20); // 延後執行

function custom_new_category_rewrite() {
    add_rewrite_rule(
        '^new-category/([^/]+)/page/([0-9]+)/?$',
        'index.php?taxonomy=new_category&term=$matches[1]&paged=$matches[2]',
        'top'
    );
}
add_action('init', 'custom_new_category_rewrite', 20);

// add_action('wp_loaded', function () {
//     global $wp_rewrite;

//     $rules = $wp_rewrite->rules;

//     if (is_array($rules)) {
//         echo '<h2>🚀 rewrite 規則中包含 "new-category" 的項目：</h2>';
//         echo '<pre>';
//         foreach ($rules as $pattern => $rewrite) {
//             if (str_contains($pattern, 'new-category')) {
//                 echo $pattern . ' => ' . $rewrite . "\n";
//             }
//         }
//         echo '</pre>';
//     } else {
//         echo '<p>⚠️ 規則仍未初始化</p>';
//     }

//     exit;
// });



// add_action('init', function () {
//     flush_rewrite_rules(); // 只在測試階段使用
// });

// add_filter('wpcf7_posted_data', function ($posted_data) {
//     if (!empty($posted_data['your-name'])) {
//         $posted_data['your-subject'] = $posted_data['your-name']; // 将 your-name 的值设置为 your-subject
//     }
//     return $posted_data;
// });

function fl_map_meta_cap($meta_caps){
    $meta_caps = array(
        'flamingo_edit_contact' => 'delete_pages',
        'flamingo_edit_contacts' => 'delete_pages',
        'flamingo_delete_contact' => 'delete_pages',
        'flamingo_delete_contacts' => 'delete_pages', //May not be a thing???
        'flamingo_edit_inbound_message' => 'delete_pages',
        'flamingo_edit_inbound_messages' => 'delete_pages',
        'flamingo_delete_inbound_message' => 'delete_pages',
        'flamingo_delete_inbound_messages' => 'delete_pages',
        'flamingo_spam_inbound_message' => 'delete_pages',
        'flamingo_unspam_inbound_message' => 'delete_pages');

    return $meta_caps;
}
add_filter('flamingo_map_meta_cap', 'fl_map_meta_cap');