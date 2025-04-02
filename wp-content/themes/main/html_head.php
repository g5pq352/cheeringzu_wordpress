<title>誠邑築建設</title>

<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php if (has_site_icon()) : ?>
<link rel="icon" href="<?php echo get_site_icon_url(); ?>" sizes="32x32">
<link rel="icon" href="<?php echo get_site_icon_url(); ?>" sizes="192x192">
<link rel="apple-touch-icon" href="<?php echo get_site_icon_url(); ?>">
<meta name="msapplication-TileImage" content="<?php echo get_site_icon_url(); ?>">
<?php else : ?>
    <!-- 默認圖示 -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/default-favicon.png" sizes="32x32">
<?php endif; ?>

<!-- <link rel="author" href="mailto:ts01173166@gmail.com"> -->
<!-- <link rel="author" href="tel:+886987710168"> -->

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="keywords" Content="關鍵詞1,關鍵詞2,關鍵詞3">

<?php
if (is_singular()) {
    $desc = get_the_excerpt();
} else {
    $desc = get_bloginfo('description'); // 網站全局描述
}
?>
<meta name="description" content="<?php echo esc_attr($desc); ?>">


<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/stylesheets/style.css?t=0403">

<?php wp_head(); ?>