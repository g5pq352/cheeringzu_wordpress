<?php
// 獲取當前文章相關資料
$post_id = get_the_ID();

// 文章分類
$cat = get_post_category_name($post_id, 'gallery_category');

$title = get_the_title($post_id); // 文章標題
$date = get_post_published_date($post_id); // 發布日期


// Pods 查詢
$works = pods('gallery', [
    'limit' => -1,
    'where' => "t.ID != $post_id"
]);

$first = null;
$rest = [];

if ($works->total() > 0) {
    $rows = $works->rows;

    $first = $rows[0];                  // 第一筆
    $rest = array_slice($rows, 1, 3);   // 取第 2~4 筆（最多 3 筆）
}

?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body>
	<?php include 'topmenu.php'; ?>
	<!-- https://www.engineshopagency.com/ -->

	<template id="refract-template">
		<div class="refract-area">
			<div class="relative max-w-[620px] mb-[56px]">
				<div class="absolute lg:top-10"><svg width="98.23" height="97.53" viewBox="0 0 98.23 97.53" class="lg:max-w-[40px] lg:h-auto">
					<rect x="-1.44" y="14.87" width="101.11" height="5.61" transform="translate(-3.03 15.36) rotate(-17.25)" style="fill: #115992;"/>
					<rect x="-20.85" y="56.69" width="81.03" height=".65" transform="translate(76.68 37.36) rotate(90)" style="fill: #474747;"/>
				</svg></div>
				<div class="pt-[57px] pl-[57px] lg:pl-[26px]">
					<div class="text-[#595757] text-[50px] tracking-wider mb-5 lg:text-[19px]"><?= esc_html($title); ?></div>
					<div class="font-en font-num text-[#b5b5b6] text-[25px] tracking-normal lg:text-[12px]"><?= esc_html($cat) ?>.<?= $date ?></div>
				</div>
			</div>
			<div class="max-w-[700px] ml-auto text-[#595757] text-[18px] tracking-normal leading-loose text-justify mb-[46px] lg:text-[14px]"><?= wp_kses_post(get_pods_field('gallery', $post_id, 'gallery_content1')) ?></div>
			<div class="tracking-normal leading-loose mb-[164px] lg:mb-[56px] lg:text-[14px]"><?= wp_kses_post(get_pods_field('gallery', $post_id, 'gallery_content2')) ?></div>
			<div class="mb-[164px] lg:mb-[56px]">
				<div class="text-[#115992] font-en text-[18px] font-bold tracking-normal mb-4 lg:text-[12px]">POINT</div>
				<div class="text-[#5b5b5b] text-[33px] tracking-wide lg:text-[19px]"><?= esc_html(get_pods_field('gallery', $post_id, 'gallery_head')) ?></div>
			</div>
			<div class="max-w-[700px] ml-auto text-[#595757] text-[18px] tracking-normal leading-loose text-justify lg:text-[14px]"><?= wp_kses_post(get_pods_field('gallery', $post_id, 'gallery_content3')) ?></div>
		</div>
	</template>

	<div class="h-[100vh]"></div>

	<div class="gallery detail">
		<div id="refract-space"></div>

		<div class="scene inset-0">
			<div class="cube">
				<div class="cube__face cube__face--back main">
					<div class="relative max-w-[1700px] mx-auto xl:zoom-80" v-scope="Refract({})"></div>
				</div>
				<div class="cube__face cube__face--top top">
					<div class="relative top-[calc(100%+88px)] origin-top max-w-[1700px] mx-auto xl:zoom-80" v-scope="Refract({})"></div>
				</div>
				<div class="cube__face cube__face--bottom bottom">
					<div class="relative bottom-[calc(100%+88px)] origin-bottom max-w-[1700px] mx-auto xl:zoom-80" v-scope="Refract({})"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="bg-[#f2f2f2] relative z-10 xl:zoom-80">
		<div class="max-w-[1600px] mx-auto pt-[70px] pb-[42px] lg:pt-[56px] lg:pl-8">
			<div class="mb-20 lg:mb-10">
				<div class="text-[#5b5b5b] text-[114px] font-en lg:text-[26px]">OTHER EXHIBITIONS</div>
				<div class="text-[#005188] text-[23px] tracking-normal lg:text-[14px]">LIFE AND ART</div>
			</div>
			<div class="">
				<ul class="otherList grid lg:hidden">
					<li class="border-r border-[#808080] pr-[94px]"><a href="<?= esc_url(get_permalink($first->ID)) ?>">
						<div class="mb-9 rounded-[180px] overflow-hidden">
							<div class="w-full h-[43.5vh]" style="background: url('<?= esc_url(get_image_url($first->ID, 'gallery_cover')); ?>') center center / cover;"></div>
						</div>
						<div class="text-[#595757] text-[18px] tracking-normal mb-4 max-w-[230px]"><?= esc_html($first->post_title); ?></div>
						<div class="flex items-center">
							<div class="clip-cat inline-block text-[12px] text-white bg-[#088282] py-2 pl-6 pr-2"><?= get_post_category_name($first->ID, 'gallery_category') ?></div>
							<div class="w-20 h-px bg-[#595757] mx-3"></div>
							<div class="font-num text-[#595757] text-[13px]"><?= get_post_published_date($first->ID) ?></div>
						</div>
					</a></li>
					<?php foreach($rest as $work) { ?>
					<?php 
		            $date = get_post_published_date($work->ID);
					$cat = get_post_category_name($work->ID, 'gallery_category');
		            ?>
						<li class="px-16"><a href="<?= esc_url(get_permalink($work->ID)) ?>">
							<div class="flex flex-col justify-end h-full">
								<div class="mb-16 rounded-[180px] overflow-hidden">
									<div class="w-full h-[30vh]" style="background: url('<?= esc_url(get_image_url($work->ID, 'gallery_cover')); ?>') center center / cover;"></div>
								</div>
								<div class="font-en text-[#115992] text-[15px] font-bold tracking-normal mb-3 opacity-0">NEW</div>
								<div class="text-[#595757] text-[18px] tracking-normal text-justify mb-4"><?= esc_html($work->post_title) ?></div>
								<div class="flex items-center">
									<div class="clip-cat inline-block text-[12px] text-white bg-[#088282] py-2 pl-6 pr-2"><?= esc_html($cat); ?></div>
									<div class="w-20 h-px bg-[#595757] mx-3"></div>
									<div class="font-num text-[#595757] text-[13px]"><?= $date ?></div>
								</div>
							</div>
						</a></li>
					<?php } ?>
					<!-- <li class="border-r border-[#808080]">
						<div class="mb-9"><img src="<?= get_template_directory_uri() ?>/images/gallery-other-1.jpg" class="rounded-[180px]"></div>
						<div class="text-[#595757] text-[18px] tracking-normal mb-4 max-w-[230px]">家，一直是指引心之所向的地方 X Hanna</div>
						<div class="flex items-center">
							<div class="clip-cat inline-block text-[12px] text-white bg-[#088282] py-2 pl-6 pr-2">HIGHLIGHTS</div>
							<div class="w-20 h-px bg-[#595757] mx-3"></div>
							<div class="font-num text-[#595757] text-[13px]">JUN.28.2024</div>
						</div>
					</li>
					<li class="px-16">
						<div class="flex flex-col justify-end h-full">
							<div class="mb-16"><img src="<?= get_template_directory_uri() ?>/images/gallery-other-2.jpg" class="rounded-[180px]"></div>
							<div class="font-en text-[#115992] text-[15px] font-bold tracking-normal mb-3">NEW</div>
							<div class="text-[#595757] text-[18px] tracking-normal text-justify mb-4">每一次的創作都是探索自己內在的力量 x 手路</div>
							<div class="flex items-center">
								<div class="clip-cat inline-block text-[12px] text-white bg-[#088282] py-2 pl-6 pr-2">HIGHLIGHTS</div>
								<div class="w-20 h-px bg-[#595757] mx-3"></div>
								<div class="font-num text-[#595757] text-[13px]">JUN.28.2024</div>
							</div>
						</div>
					</li>
					<li class="px-16 border-l border-[#808080]">
						<div class="flex flex-col justify-end h-full">
							<div class="mb-16"><img src="<?= get_template_directory_uri() ?>/images/gallery-other-3.jpg" class="rounded-[180px]"></div>
							<div class="font-en text-[#115992] text-[15px] font-bold tracking-normal mb-3 opacity-0">NEW</div>
							<div class="text-[#595757] text-[18px] tracking-normal text-justify mb-4">朝那些現實和奇想之間的微妙地帶探索 X 川貝母</div>
							<div class="flex items-center">
								<div class="clip-cat inline-block text-[12px] text-white bg-[#088282] py-2 pl-6 pr-2">HIGHLIGHTS</div>
								<div class="w-20 h-px bg-[#595757] mx-3"></div>
								<div class="font-num text-[#595757] text-[13px]">JUN.28.2024</div>
							</div>
						</div>
					</li>
					<li class="px-16 border-l border-[#808080]">
						<div class="flex flex-col justify-end h-full">
							<div class="mb-16"><img src="<?= get_template_directory_uri() ?>/images/gallery-other-4.jpg" class="rounded-[180px]"></div>
							<div class="font-en text-[#115992] text-[15px] font-bold tracking-normal mb-3 opacity-0">NEW</div>
							<div class="text-[#595757] text-[18px] tracking-normal text-justify mb-4">我一直在畫圖，無非是從一開始的畫筆換成刻刀 X 沐然</div>
							<div class="flex items-center">
								<div class="clip-cat inline-block text-[12px] text-white bg-[#088282] py-2 pl-6 pr-2">HIGHLIGHTS</div>
								<div class="w-20 h-px bg-[#595757] mx-3"></div>
								<div class="font-num text-[#595757] text-[13px]">JUN.28.2024</div>
							</div>
						</div>
					</li> -->
				</ul>

				<ul class="otherList hidden lg:block">
					<?php foreach($works->rows as $work) { ?>
					<?php 
		            $date = get_post_published_date($work->ID);
					$cat = get_post_category_name($work->ID, 'gallery_category');
		            ?>
			            <li class="w-full max-w-[70%] mr-[52px]"><a href="<?= esc_url(get_permalink($work->ID)) ?>">
							<div class="mb-9 rounded-[180px] overflow-hidden">
								<div class="w-full h-[40vh]" style="background: url('<?= esc_url(get_image_url($work->ID, 'gallery_cover')); ?>') center center / cover;"></div>
							</div>
							<div class="font-en text-[#115992] text-[15px] font-bold tracking-normal mb-3">NEW</div>
							<div class="flex">
								<div class="text-[#595757] text-[13px] tracking-normal pr-7"><?= esc_html($work->post_title) ?></div>
								<div class="">
									<div class="clip-cat inline-block text-[12px] text-white bg-[#088282] py-1 pl-4 pr-2 mb-1"><?= esc_html($cat); ?></div>
									<div class="font-num text-[#595757] text-[12px]"><?= $date ?></div>
								</div>
							</div>
						</a></li>
					<?php } ?>
					<!-- <li class="w-full max-w-[70%] mr-[52px]">
						<div class="mb-9"><img src="<?= get_template_directory_uri() ?>/images/gallery-other-1.jpg" class="rounded-[180px]"></div>
						<div class="font-en text-[#115992] text-[15px] font-bold tracking-normal mb-3">NEW</div>
						<div class="flex">
							<div class="text-[#595757] text-[13px] tracking-normal pr-7">家，一直是指引心之所向的地方 X Hanna</div>
							<div class="">
								<div class="clip-cat inline-block text-[12px] text-white bg-[#088282] py-1 pl-4 pr-2 mb-1">ARTALKS</div>
								<div class="font-num text-[#595757] text-[12px]">JUN.28.2024</div>
							</div>
						</div>
					</li>
					<li class="w-full max-w-[70%] mr-[52px]">
						<div class="flex flex-col justify-end h-full">
							<div class="mb-9"><img src="<?= get_template_directory_uri() ?>/images/gallery-other-2.jpg" class="rounded-[180px]"></div>
							<div class="font-en text-[#115992] text-[15px] font-bold tracking-normal mb-3">NEW</div>
							<div class="flex">
								<div class="text-[#595757] text-[13px] tracking-normal pr-7">每一次的創作都是探索自己內在的力量</div>
								<div class="">
									<div class="clip-cat inline-block text-[12px] text-white bg-[#088282] py-1 pl-4 pr-2 mb-1">ARTALKS</div>
									<div class="font-num text-[#595757] text-[12px]">JUN.28.2024</div>
								</div>
							</div>
						</div>
					</li>
					<li class="w-full max-w-[70%] mr-[52px]">
						<div class="flex flex-col justify-end h-full">
							<div class="mb-9"><img src="<?= get_template_directory_uri() ?>/images/gallery-other-3.jpg" class="rounded-[180px]"></div>
							<div class="font-en text-[#115992] text-[15px] font-bold tracking-normal mb-3">NEW</div>
							<div class="flex">
								<div class="text-[#595757] text-[13px] tracking-normal pr-7">朝那些現實和奇想之間的微妙地帶探索</div>
								<div class="">
									<div class="clip-cat inline-block text-[12px] text-white bg-[#088282] py-1 pl-4 pr-2 mb-1">ARTALKS</div>
									<div class="font-num text-[#595757] text-[12px]">JUN.28.2024</div>
								</div>
							</div>
						</div>
					</li>
					<li class="w-full max-w-[70%] mr-[52px]">
						<div class="flex flex-col justify-end h-full">
							<div class="mb-9"><img src="<?= get_template_directory_uri() ?>/images/gallery-other-4.jpg" class="rounded-[180px]"></div>
							<div class="font-en text-[#115992] text-[15px] font-bold tracking-normal mb-3">NEW</div>
							<div class="flex">
								<div class="text-[#595757] text-[13px] tracking-normal pr-7">我一直在畫圖，無非是從一開始的畫筆</div>
								<div class="">
									<div class="clip-cat inline-block text-[12px] text-white bg-[#088282] py-1 pl-4 pr-2 mb-1">ARTALKS</div>
									<div class="font-num text-[#595757] text-[12px]">JUN.28.2024</div>
								</div>
							</div>
						</div>
					</li> -->
				</ul>
			</div>
			<div class="text-right mt-20 lg:text-left lg:border-t lg:border-[#115992] lg:mt-12 lg:pt-20 lg:mr-8">
				<div class="inline-block">
					<a href="javascript:;" onclick="history.back()" class="flex items-center">
					<span class="font-en text-[#595757] text-[15px] font-light tracking-normal mr-4 lg:text-[17px]">BACK VIEW ALL</span>
					<span class="mb-3 lg:mb-0">
						<div class="lg:hidden">
							<svg width="249.67" height="20.11" viewBox="0 0 249.67 20.11" class="arrow-hover">
								<line y1="14.89" x2="249.67" y2="14.89" style="fill: none; stroke: #595757; stroke-miterlimit: 10; stroke-width: .79px;"/>
								<rect x="184.33" y="9.16" width="62.02" height="1.8" transform="translate(418.02 83.52) rotate(-162.75)" style="fill: #115992;"/>
							</svg>
						</div>
						<div class="hidden lg:block">
							<svg width="53.32" height="14.73" viewBox="0 0 53.32 14.73" class="arrow-hover">
								<line y1="9.88" x2="53.32" y2="9.88" style="fill: none; stroke: #595757; stroke-miterlimit: 10; stroke-width: .79px;"/>
								<line x1="28.99" y1=".88" x2="52.73" y2="13.86" style="fill: none; stroke: #115992; stroke-miterlimit: 10; stroke-width: 2px;"/>
							</svg>
						</div>
					</span>
				</a></div>
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


	if(device == 'mobile'){
		var $carousel = $(".otherList").flickity({
	        "prevNextButtons": false,
	        "pageDots": false,
	        "wrapAround": true,
	        "imagesLoaded": true,
	        "fade": false,
	        "cellAlign": "left",
	        "adaptiveHeight": true,
	        "arrowShape": "",
	        "autoPlay": 4000,
	        "pauseAutoPlayOnHover": false
	    });
	}
});

function Refract({}) {
	return {
		$template: '#refract-template',
		mounted(el) {}
	}
}

$(window).on("load", function () {
	// let h = $(".refract-area").outerHeight(true)
	let h = $(".refract-area").outerHeight(true) - ($(this).height()*0.6)
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