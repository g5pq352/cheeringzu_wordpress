<?php
/*
Template Name: gallery
*/

// 獲取分類
$cats = pods('gallery_category', [
    'limit' => -1,
]);

// Pods 查詢
$works = pods('gallery', [
	'limit' => -1
]); // 抓全部

$first = null;
$rest = [];

if ($works->total() > 0) {
    $rows = $works->rows;

    $first = $rows[0];            // 第一筆
    $rest = array_slice($rows, 1); // 從第 2 筆開始取出剩下的
}

// 優化內容截取功能
function truncate_content($content, $limit = 75) {
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

	<template id="refract-template">
		<div class="refract-area lg:pt-[104px]">
			<div class="flex justify-between lg:block">
				<div class="">
					<div class="text-[#5b5b5b] text-[114px] font-en lg:text-[40px]">GALLERY</div>
					<div class="text-[#005188] text-[23px] tracking-normal lg:text-[12px]">LIFE AND ART</div>
				</div>
				<!-- <div class="h-max">
					<ul class="cats font-en text-[#595757] text-[21px] flex justify-end space-x-4 mt-10 mb-6 lg:justify-start lg:space-x-4 lg:text-[14px] lg:mb-[82px]">
						<li class="pl-7 hover:bg-[#115992] hover:text-white [&.current]:bg-[#115992] [&.current]:text-white current lg:pl-0"><a href="javascript:;">ALL</a></li>
						<li class="pl-7 hover:bg-[#115992] hover:text-white [&.current]:bg-[#115992] [&.current]:text-white lg:pl-0"><a href="javascript:;">NEWS</a></li>
					</ul>
					<ul class="years font-en text-[#808080] flex space-x-4 lg:hidden">
						<li class="relative group current"><a href="javascript:;">
							<span class="font-num font-bold text-[#808080] group-[&.current]:text-[#115992] group-hover:text-[#115992]">2024</span>
							<span class="absolute bottom-0 left-0 w-full h-px bg-[#115992] opacity-0 group-[&.current]:opacity-100 group-hover:opacity-100"></span>
						</a></li>
						<li class="relative group"><a href="javascript:;">
							<span class="font-num font-bold text-[#808080] group-[&.current]:text-[#115992] group-hover:text-[#115992]">2023</span>
							<span class="absolute bottom-0 left-0 w-full h-px bg-[#115992] opacity-0 group-[&.current]:opacity-100 group-hover:opacity-100"></span>
						</a></li>
						<li class="relative group"><a href="javascript:;">
							<span class="font-num font-bold text-[#808080] group-[&.current]:text-[#115992] group-hover:text-[#115992]">2022</span>
							<span class="absolute bottom-0 left-0 w-full h-px bg-[#115992] opacity-0 group-[&.current]:opacity-100 group-hover:opacity-100"></span>
						</a></li>
						<li class="relative group"><a href="javascript:;">
							<span class="font-num font-bold text-[#808080] group-[&.current]:text-[#115992] group-hover:text-[#115992]">2021</span>
							<span class="absolute bottom-0 left-0 w-full h-px bg-[#115992] opacity-0 group-[&.current]:opacity-100 group-hover:opacity-100"></span>
						</a></li>
						<li class="relative group"><a href="javascript:;">
							<span class="font-num font-bold text-[#808080] group-[&.current]:text-[#115992] group-hover:text-[#115992]">2020</span>
							<span class="absolute bottom-0 left-0 w-full h-px bg-[#115992] opacity-0 group-[&.current]:opacity-100 group-hover:opacity-100"></span>
						</a></li>
						<li class="relative group"><a href="javascript:;">
							<span class="font-num font-bold text-[#808080] group-[&.current]:text-[#115992] group-hover:text-[#115992]">2019</span>
							<span class="absolute bottom-0 left-0 w-full h-px bg-[#115992] opacity-0 group-[&.current]:opacity-100 group-hover:opacity-100"></span>
						</a></li>
					</ul>
				</div> -->
			</div>
			<div class="mt-[175px] mb-[145px] lg:mt-0 lg:mb-32"><a href="<?= esc_url(get_permalink($first->ID)) ?>" class="flex mouse-arrow lg:block">
				<div class="max-w-[458px] mr-[202px] lg:mr-0 lg:max-w-full lg:mb-3">
					<div class="font-en font-num text-[#b5b5b6] text-[18px] tracking-normal mb-6 lg:text-[12px] lg:mb-2"><?= get_post_category_name($first->ID, 'gallery_category') ?>.<?= get_post_published_date($first->ID) ?></div>
					<div class="text-[#5b5b5b] text-[33px] tracking-wide mb-9 lg:text-[19px] lg:mb-3"><?= esc_html($first->post_title); ?></div>
					<div class="text-[#5b5b5b] text-[18px] tracking-[2px] text-justify lg:text-[14px]"><?= wp_kses_post(truncate_content(get_pods_field('gallery', $first->ID, 'gallery_content1'))) ?></div>
				</div>
				<div class="flex-auto"><img src="<?= esc_url(get_image_url($first->ID, 'gallery_cover', 'large')); ?>"></div>
			</a></div>
			<div class="">
				<div class="flex justify-between mb-[180px] lg:block lg:mb-20">
					<div class="w-[458px] mr-[202px] lg:mr-0 lg:w-full lg:mb-16">
						<div class="font-en text-[#5b5b5b] font-light text-[73px] lg:text-[36px]">IMAGINATION</div>
						<div class="font-en text-[#115992] font-bold text-[18px] tracking-normal lg:text-[12px]">ILLUSTRATION</div>
					</div>
					<div class="flex-auto h-max">
						<ul class="cats font-en text-[#595757] text-[21px] flex justify-end space-x-4 mt-10 mb-6 lg:justify-start lg:space-x-4 lg:text-[14px] lg:mb-[82px]">
							<li class="pl-7 hover:bg-[#115992] hover:text-white [&.current]:bg-[#115992] [&.current]:text-white current lg:pl-0"><a href="javascript:;">ALL</a></li>
							<?php foreach($cats->rows as $c) : ?>
								<li class="pl-7 hover:bg-[#115992] hover:text-white [&.current]:bg-[#115992] [&.current]:text-white lg:pl-0">
									<a href="<?= esc_url(get_term_link($c->slug, 'gallery_category')) ?>"><?= esc_html($c->name) ?></a>
								</li>
							<?php endforeach ?>
						</ul>
						<!-- <ul class="years font-en text-[#808080] flex space-x-4 lg:hidden">
							<li class="relative group current"><a href="javascript:;">
								<span class="font-num font-bold text-[#808080] group-[&.current]:text-[#115992] group-hover:text-[#115992]">2024</span>
								<span class="absolute bottom-0 left-0 w-full h-px bg-[#115992] opacity-0 group-[&.current]:opacity-100 group-hover:opacity-100"></span>
							</a></li>
							<li class="relative group"><a href="javascript:;">
								<span class="font-num font-bold text-[#808080] group-[&.current]:text-[#115992] group-hover:text-[#115992]">2023</span>
								<span class="absolute bottom-0 left-0 w-full h-px bg-[#115992] opacity-0 group-[&.current]:opacity-100 group-hover:opacity-100"></span>
							</a></li>
							<li class="relative group"><a href="javascript:;">
								<span class="font-num font-bold text-[#808080] group-[&.current]:text-[#115992] group-hover:text-[#115992]">2022</span>
								<span class="absolute bottom-0 left-0 w-full h-px bg-[#115992] opacity-0 group-[&.current]:opacity-100 group-hover:opacity-100"></span>
							</a></li>
							<li class="relative group"><a href="javascript:;">
								<span class="font-num font-bold text-[#808080] group-[&.current]:text-[#115992] group-hover:text-[#115992]">2021</span>
								<span class="absolute bottom-0 left-0 w-full h-px bg-[#115992] opacity-0 group-[&.current]:opacity-100 group-hover:opacity-100"></span>
							</a></li>
							<li class="relative group"><a href="javascript:;">
								<span class="font-num font-bold text-[#808080] group-[&.current]:text-[#115992] group-hover:text-[#115992]">2020</span>
								<span class="absolute bottom-0 left-0 w-full h-px bg-[#115992] opacity-0 group-[&.current]:opacity-100 group-hover:opacity-100"></span>
							</a></li>
							<li class="relative group"><a href="javascript:;">
								<span class="font-num font-bold text-[#808080] group-[&.current]:text-[#115992] group-hover:text-[#115992]">2019</span>
								<span class="absolute bottom-0 left-0 w-full h-px bg-[#115992] opacity-0 group-[&.current]:opacity-100 group-hover:opacity-100"></span>
							</a></li>
						</ul> -->
					</div>
				</div>
				<div class="max-w-[840px] ml-auto">
					<ul v-scope="{
			            posts: [
				            <?php foreach ($rest as $work): ?>
				            <?php 
				            $date = get_post_published_date($work->ID);
        					$cat = get_post_category_name($work->ID, 'gallery_category');
				            ?>
					            {
					            	pic: '<?= esc_url(get_image_url($work->ID, 'gallery_cover')); ?>',
					            	cat: `<?= esc_html($cat); ?>`,
					            	date: `<?= $date ?>`,
					            	title: `<?= esc_html($work->post_title) ?>`,
					            	link: '<?= esc_url(get_permalink($work->ID)) ?>',
					            },
					        <?php endforeach ?>
			            ]
			        }" class="grid grid-cols-2 gap-x-6 gap-y-12 lg:block lg:space-y-7">
						<li v-for="p in posts" class="mouse-arrow"><a :href="p.link">
							<div class="mb-7"><img :src="p.pic"></div>
							<div class="flex">
								<div class="flex-auto text-[#595757] text-[17px] text-justify mr-[78px] lg:text-[14px] lg:mr-10">{{p.title}}</div>
								<div class="shrink-0 text-right">
									<div class="clip-cat inline-block text-[12px] tracking-normal text-white bg-[#088282] py-1 pl-7 pr-3 mb-1 lg:text-[12px]">{{p.cat}}</div>
									<div class="font-en text-[#898989] text-[13px] font-num">{{p.date}}</div>
								</div>
							</div>
						</a></li>
					</ul>
				</div>
			</div>
		</div>
	</template>

	<div class="h-[100vh]"></div>

	<div class="gallery">
		<div id="refract-space"></div>

		<div class="scene inset-0">
			<div class="cube">
				<div class="cube__face cube__face--back main">
					<div class="relative xl:zoom-80" v-scope="Refract({})"></div>
				</div>
				<div class="cube__face cube__face--top top">
					<div class="relative top-[calc(100%+88px)] origin-top xl:zoom-80" v-scope="Refract({})"></div>
				</div>
				<div class="cube__face cube__face--bottom bottom">
					<div class="relative bottom-[calc(100%+88px)] origin-bottom xl:zoom-80" v-scope="Refract({})"></div>
				</div>
			</div>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>

<?php include 'script.php'; ?>
</html>

<script>
$(document).ready(function() {
	$(".cube__face").each(function(i, el){
		var $catsList = $(".cats", el);
		var $listItems = $catsList.children("li").get().reverse();
		$catsList.empty().append($listItems);
	})
});

function Refract({}) {
	return {
		$template: '#refract-template',
		mounted(el) {}
	}
}

$(window).on("load", function () {

	// let h = $(".refract-area").outerHeight(true)
	const _h = device == 'mobile' ? $(this).height()*0.8 : $(this).height()*0.8
	let h = $(".refract-area").outerHeight(true) - _h
	$("#refract-space").css("height", h)
	$(window).trigger("scroll")
})


$(window).on("scroll", function () {
	let scrollTop = $(this).scrollTop()
	let windowH = $(this).height()
	// let off = windowH * 0.1
	let off = windowH * 1

	let y = scrollTop - windowH + off

	gsap.set(".refract-area", {
		y: -y,
	});
})
</script>