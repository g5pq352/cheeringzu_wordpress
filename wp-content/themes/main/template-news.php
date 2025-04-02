<?php
/*
Template Name: news
*/

// 獲取分類
$cats = pods('new_category', [
    'limit' => -1,
]);

// // Pods 查詢
// $works = pods('new', [
//     'limit' => -1, // 每頁顯示 6 篇
// ]);

// 修正 paged 抓不到的問題
$paged = max(1, get_query_var('paged'));
$per_page = 6;
$offset = ($paged - 1) * $per_page;

// 抓總筆數
$wp_query = new WP_Query([
    'post_type'      => 'new',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
]);
$total = $wp_query->found_posts;

// 再用 Pods 抓資料
$works = pods('new', [
    'limit'  => $per_page,
    'offset' => $offset,
]);

$total_pages = ceil($total / $per_page);
$current_url = trailingslashit(get_permalink(get_the_ID()));


function your_svg_prev() {
	ob_start();
	?>
	<svg width="137.15" height="19" viewBox="0 0 137.15 3" class="lg:hidden">	
		<line y1="1.37" x2="137.15" y2="1.37" style="fill: none; stroke: #595757; stroke-miterlimit: 10; stroke-width: .75px;"/>
		<line x1="54.85" y1="1.5" y2="1.5" style="fill: none; stroke: #005188; stroke-miterlimit: 10; stroke-width: 3px;"/>
	</svg>
	<svg width="52.17" height="19" viewBox="0 0 52.17 3" class="hidden lg:block">
		<line x1="14.76" y1="1.51" x2="52.17" y2="1.51" style="fill: none; stroke: gray; stroke-miterlimit: 10; stroke-width: .75px;"/>
		<line x1="24.84" y1="1.5" y2="1.5" style="fill: none; stroke: #074f83; stroke-miterlimit: 10; stroke-width: 3px;"/>
	</svg>
	<?php
	return ob_get_clean();
}

function your_svg_next() {
	ob_start();
	?>
	<svg width="137.15" height="19" viewBox="0 0 137.15 3" class="lg:hidden">
		<line x1="137.15" y1="1.63" y2="1.63" style="fill: none; stroke: #595757; stroke-miterlimit: 10; stroke-width: .75px;"/>
		<line x1="82.3" y1="1.5" x2="137.15" y2="1.5" style="fill: none; stroke: #005188; stroke-miterlimit: 10; stroke-width: 3px;"/>
	</svg>
	<svg width="52.17" height="19" viewBox="0 0 52.17 3" class="hidden lg:block">
		<line x1="37.41" y1="1.49" y2="1.49" style="fill: none; stroke: gray; stroke-miterlimit: 10; stroke-width: .75px;"/>
		<line x1="27.33" y1="1.5" x2="52.17" y2="1.5" style="fill: none; stroke: #074f83; stroke-miterlimit: 10; stroke-width: 3px;"/>
	</svg>
	<?php
	return ob_get_clean();
}



// 優化內容截取功能
function truncate_content($content, $limit = 200) {
    $content = strip_tags($content); // 去除 HTML 標籤
    if (mb_strlen($content, 'utf8') > $limit) {
        $truncated = mb_substr($content, 0, $limit, 'utf8');
        // 確保不截斷單詞，嘗試回退到最近的空白字符
        $last_space = mb_strrpos($truncated, ' ', 0, 'utf8');
        if ($last_space !== false) {
            $truncated = mb_substr($truncated, 0, $last_space, 'utf8');
        }
        return $truncated . ' ......';
    }
    return $content;
}
?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body>
	<?php include 'topmenu.php'; ?>

	<div class="bg-[#efefef] xl:zoom-90">
		<div class="max-w-[1505px] mx-auto pt-[270px] pb-[252px] xl:max-w-[1100px] lg:px-7 lg:pt-[72px] lg:pb-[162px]">
			<div class="flex justify-between mb-[152px] lg:block lg:mb-32">
				<div class="relative h-max">
					<div class="absolute -left-[146px] tf-y lg:-left-2">
						<div class=""><img src="<?= get_template_directory_uri() ?>/images/logo-move.gif" class="w-[322px] xl:w-[280px] lg:w-[80px]" id="logo-move"></div>
					</div>
					<div class="relative bt-move font-en text-[#5b5b5b] text-[114px] lg:text-[52px] lg:pl-9">NEWS</div>
				</div>
				<div class="lg:mt-5">
					<ul class="space-y-4 lg:flex lg:items-center lg:space-y-0 lg:space-x-5">
						<li class="relative pr-[50px] group lg:shrink-0 lg:pr-5 current"><a href="<?= home_url() ?>/new">
							<span class="relative z-10 text-[#595757] text-[21px] font-medium tracking-normal font-en transition-all duration-300 group-hover:text-white group-[&.current]:text-white lg:text-[14px]">ALL</span>
							<span class="absolute left-0 tf-y bg-[#005188] w-0 h-full transition-all duration-300 group-hover:w-full group-[&.current]:w-full"></span>
						</a></li>
						<?php foreach($cats->rows as $c) : ?>
							<li class="relative pr-[50px] group lg:shrink-0 lg:pr-5"><a href="<?= esc_url(get_term_link($c->slug, 'new_category')) ?>"> 
								<span class="relative z-10 text-[#595757] text-[21px] font-medium tracking-normal font-en transition-all duration-300 group-hover:text-white group-[&.current]:text-white lg:text-[14px]"><?= esc_html($c->name) ?></span>
								<span class="absolute left-0 tf-y bg-[#005188] w-0 h-full transition-all duration-300 group-hover:w-full group-[&.current]:w-full"></span>
							</a></li>
						<?php endforeach ?>
					</ul>
				</div>
			</div>

			<div class="">
				<div class="">
					<ul v-scope="{
			            posts: [
				           	<?php foreach ($works->rows as $work) :
			           		$date = get_post_published_date($work->ID);
        					$cat = get_post_category_name($work->ID, 'new_category');
				           	?>
				            {
				            	pic: '<?= esc_url(get_image_url($work->ID, 'new_cover')); ?>',
				            	alt: '<?= get_image_alt($work->ID, 'new_cover') ?>',
				            	cat: `<?= esc_html($cat); ?>`,
				            	date: `<?= $date ?>`,
				            	title: `<?= esc_html($work->post_title) ?>`,
				            	intro: `隨著舊台中市進入「全面5字頭」時代，近期推案重心逐漸回歸機能、支撐性俱佳的市中心，其中在科博館、中國附醫兩大引擎的...`,
				            	link: '<?= esc_url(get_permalink($work->ID)) ?>',
				            },
				            <?php endforeach; ?>
			            ]
			        }" class="grid grid-cols-3 gap-y-[105px] gap-x-[144px] xl:gap-x-[104px] lg:block lg:space-y-20">
						<li v-for="p in posts" class="mouse-arrow"><a :href="p.link">
							<div class="mb-[26px]"><img :src="p.pic" :alt="p.alt"></div>
							<div class="flex items-center mb-7 lg:justify-between">
								<div class="clip-cat inline-block text-[14px] tracking-wide text-white bg-[#088282] py-1 pl-7 pr-3 lg:text-xs lg:pl-5 lg:pr-2">{{p.cat}}</div>
								<div class="w-[104px] h-px bg-[#595757] mx-3 lg:w-[94px]"></div>
								<div class="font-num text-[#898989] text-[13px]">{{p.date}}</div>
							</div>
							<div class="text-[#595757] mb-12">
								<div class="text-[21px] font-medium tracking-wide mb-7 lg:text-[19px]">{{p.title}}</div>
								<div class="text-[14px] font-light tracking-normal text-justify" v-html="p.intro"></div>
							</div>
							<div class="text-right"><a href="" class="inline-block">
								<svg width="249.67" height="20.11" viewBox="0 0 249.67 20.11" class="arrow-hover lg:hidden">
									<line y1="14.89" x2="249.67" y2="14.89" style="fill: none; stroke: #595757; stroke-miterlimit: 10; stroke-width: .79px;"/>
									<rect x="184.33" y="9.16" width="62.02" height="1.8" transform="translate(418.02 83.52) rotate(-162.75)" style="fill: #005188;"/>
								</svg>
								<svg width="102.38" height="14.73" viewBox="0 0 102.38 14.73" class="hidden lg:block">
									<g>
									<line x1="49.06" y1="9.88" x2="102.38" y2="9.88" style="fill: none; stroke: #595757; stroke-miterlimit: 10; stroke-width: .79px;"/>
									<line x1="78.06" y1=".88" x2="101.79" y2="13.86" style="fill: none; stroke: #115992; stroke-miterlimit: 10; stroke-width: 2px;"/>
									</g>
									<g>
									<path d="M6.44,7.22V3.54h-.13l-2.45,5.98L1.42,3.54h-.13V13.04H0V1.42H1.8L3.85,6.55h.1L6,1.42h1.73V13.04h-1.28V7.22Z" style="fill: #3e3a39;"/>
									<path d="M13.85,13.25c-.71,0-1.32-.14-1.83-.41-.51-.27-.93-.66-1.27-1.17s-.58-1.14-.73-1.88-.23-1.59-.23-2.55,.08-1.79,.23-2.54c.16-.75,.4-1.38,.73-1.89s.75-.9,1.27-1.17c.51-.27,1.12-.41,1.83-.41s1.32,.14,1.83,.41c.51,.27,.93,.66,1.27,1.17s.58,1.14,.73,1.89c.16,.75,.23,1.6,.23,2.54s-.08,1.8-.23,2.55c-.16,.74-.4,1.37-.73,1.88s-.76,.9-1.27,1.17c-.51,.27-1.12,.41-1.83,.41Zm0-1.22c.47,0,.86-.09,1.18-.28,.32-.18,.59-.44,.8-.77,.21-.33,.36-.74,.46-1.21,.09-.47,.14-1,.14-1.59v-1.9c0-.58-.05-1.1-.14-1.58-.09-.48-.25-.88-.46-1.22s-.48-.59-.8-.77c-.32-.18-.72-.27-1.18-.27s-.86,.09-1.18,.27c-.32,.18-.59,.44-.8,.77s-.36,.74-.46,1.22-.14,1-.14,1.58v1.9c0,.59,.05,1.12,.14,1.59,.09,.47,.25,.87,.46,1.21,.21,.33,.48,.59,.8,.77,.32,.18,.72,.28,1.18,.28Z" style="fill: #3e3a39;"/>
									<path d="M21.75,13.04h-1.4V1.42h4.23c1.08,0,1.9,.29,2.46,.88,.57,.59,.85,1.41,.85,2.46,0,.94-.24,1.7-.73,2.26-.49,.57-1.2,.89-2.13,.98l2.96,5.03h-1.56l-2.83-4.96h-1.85v4.96Zm2.8-6.14c.59,0,1.05-.15,1.37-.44,.33-.29,.49-.71,.49-1.26v-.87c0-.54-.16-.96-.49-1.26-.33-.29-.79-.44-1.37-.44h-2.8V6.9h2.8Z" style="fill: #3e3a39;"/>
									<path d="M30.34,13.04V1.42h7.16v1.22h-5.76v3.91h5.56v1.21h-5.56v4.06h5.76v1.22h-7.16Z" style="fill: #3e3a39;"/>
									</g>
								</svg>
							</a></div>
						</a></li>
					</ul>
				</div>

				<div class="news-paper flex justify-center mt-[220px] lg:mt-[110px]">
					<div class="flex items-center">

						<!-- 上一頁 -->
						<?php if ($paged > 1): ?>
						<a href="<?= esc_url($current_url . 'page/' . ($paged - 1) . '/') ?>" class="prev mr-[112px] lg:mr-10">
							<!-- 你的 SVG 畫面保留 -->
							<?= your_svg_prev(); ?>
						</a>
						<?php else: ?>
						<span class="prev mr-[112px] lg:mr-10 opacity-30 pointer-events-none">
							<?= your_svg_prev(); ?>
						</span>
						<?php endif; ?>

						<!-- 頁碼 -->
						<nav class="space-x-9 lg:space-x-4">
							<?php for ($i = 1; $i <= $total_pages; $i++): ?>
								<a href="<?= esc_url($current_url . ($i > 1 ? 'page/' . $i . '/' : '')) ?>"
								   class="relative inline-block w-2 h-2 bg-[#727171] [&.current]:bg-[#005188] group <?= ($i === $paged) ? 'current' : '' ?>">
									<span class="font-ch font-light text-[15px] absolute tf-x -bottom-9 <?= ($i === $paged) ? 'font-medium' : '' ?>">
										<?= $i ?>
									</span>
								</a>
							<?php endfor; ?>
						</nav>

						<!-- 下一頁 -->
						<?php if ($paged < $total_pages): ?>
						<a href="<?= esc_url($current_url . 'page/' . ($paged + 1) . '/') ?>" class="next ml-[112px] lg:ml-10">
							<?= your_svg_next(); ?>
						</a>
						<?php else: ?>
						<span class="next ml-[112px] lg:ml-10 opacity-30 pointer-events-none">
							<?= your_svg_next(); ?>
						</span>
						<?php endif; ?>

					</div>
				</div>


				<!-- <div class="news-paper flex justify-center mt-[220px] lg:mt-[110px]">
					<div class="flex items-center">
						<a href="" class="prev mr-[112px] lg:mr-10">
							<svg width="137.15" height="3" viewBox="0 0 137.15 3" class="lg:hidden">	
								<line y1="1.37" x2="137.15" y2="1.37" style="fill: none; stroke: #595757; stroke-miterlimit: 10; stroke-width: .75px;"/>
								<line x1="54.85" y1="1.5" y2="1.5" style="fill: none; stroke: #005188; stroke-miterlimit: 10; stroke-width: 3px;"/>
							</svg>
							<svg width="52.17" height="3" viewBox="0 0 52.17 3" class="hidden lg:block">
								<line x1="14.76" y1="1.51" x2="52.17" y2="1.51" style="fill: none; stroke: gray; stroke-miterlimit: 10; stroke-width: .75px;"/>
								<line x1="24.84" y1="1.5" y2="1.5" style="fill: none; stroke: #074f83; stroke-miterlimit: 10; stroke-width: 3px;"/>
							</svg>
						</a>

						<nav class="space-x-9 lg:space-x-4">
							<a href="" class="relative inline-block w-2 h-2 bg-[#727171] [&.current]:bg-[#005188] group current">
								<span class="font-ch font-light text-[15px] absolute tf-x -bottom-9 group-[&.current]:font-medium">1</span>
							</a>
							<a href="" class="relative inline-block w-2 h-2 bg-[#727171] [&.current]:bg-[#005188] group">
								<span class="font-ch font-light text-[15px] absolute tf-x -bottom-9 group-[&.current]:font-medium">2</span>
							</a>
							<a href="" class="relative inline-block w-2 h-2 bg-[#727171] [&.current]:bg-[#005188] group">
								<span class="font-ch font-light text-[15px] absolute tf-x -bottom-9 group-[&.current]:font-medium">3</span>
							</a>
							<a href="" class="relative inline-block w-2 h-2 bg-[#727171] [&.current]:bg-[#005188] group">
								<span class="font-ch font-light text-[15px] absolute tf-x -bottom-9 group-[&.current]:font-medium">4</span>
							</a>
						</nav>

						<a href="" class="next ml-[112px] lg:ml-10">
							<svg width="137.15" height="3" viewBox="0 0 137.15 3" class="lg:hidden">
								<line x1="137.15" y1="1.63" y2="1.63" style="fill: none; stroke: #595757; stroke-miterlimit: 10; stroke-width: .75px;"/>
								<line x1="82.3" y1="1.5" x2="137.15" y2="1.5" style="fill: none; stroke: #005188; stroke-miterlimit: 10; stroke-width: 3px;"/>
							</svg>
							<svg width="52.17" height="3" viewBox="0 0 52.17 3" class="hidden lg:block">
								<line x1="37.41" y1="1.49" y2="1.49" style="fill: none; stroke: gray; stroke-miterlimit: 10; stroke-width: .75px;"/>
								<line x1="27.33" y1="1.5" x2="52.17" y2="1.5" style="fill: none; stroke: #074f83; stroke-miterlimit: 10; stroke-width: 3px;"/>
							</svg>
						</a>
					</div>
				</div> -->
			</div>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>

<?php include 'script.php'; ?>
</html>

<script>
gsap.set(".bt-move", {
	x: -20,
    opacity: 0,
});
gsap.delayedCall(1.5, function () {
	gsap.to(".bt-move", 1, {
        x: 0,
        opacity: 1,
        ease: 'power2.out',
    });
})
</script>