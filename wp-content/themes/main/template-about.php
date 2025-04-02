<?php
/*
Template Name: about
*/

// 獲取分類
$cats = pods('team_category', [
    'limit' => -1,
    'orderby' => 't.name', // 注意加上 t.
    'order'   => 'ASC',
]);
?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>

	<style>
	.fade-enter-active, .fade-leave-active {
	  transition: opacity 0.5s;
	}
	.fade-enter, .fade-leave-to {
	  opacity: 0;
	}
    /*.fp-scroller{
	    transition-timing-function: cubic-bezier(0.46, 0.03, 0.52, 0.96) !important;
    	transition-duration: 200ms !important;
    }*/
	</style>
</head>

<body>
	<?php include 'topmenu.php'; ?>

	<div id="fullpage" class="lg:hidden">
		<div class="aboutCats fixed top-0 z-10 opacity-0 hidden transition-all duration-500 xl:zoom-90">
			<div class="guideList w-max absolute top-[35vh] left-[64px] group">
				<div class="inline-block text-[#595757] text-[26px] font-en font-medium pb-[14px] border-b-2 border-[#005188] mb-8 group-[&.is-white]:text-white group-[&.is-white]:border-white">ABOUT</div>
				<ul class="space-y-[26px]" id="whereList">
					<li class="relative cursor-pointer group">
						<span class="relative text-[21px] text-[#595757] font-medium tracking-wide z-10 group-[&.is-white]:text-white">想想宅</span>
						<span class="absolute left-0 tf-y w-full h-full bg-[#005188] opacity-0 group-[&.current]:opacity-100 group-[&.is-white]:bg-white"></span>
					</li>
					<li class="relative cursor-pointer group">
						<span class="relative text-[21px] text-[#595757] font-medium tracking-wide z-10 group-[&.is-white]:text-white">董事長介紹</span>
						<span class="absolute left-0 tf-y w-full h-full bg-[#005188] opacity-0 group-[&.current]:opacity-100"></span>
					</li>
					<li class="relative cursor-pointer group">
						<span class="relative text-[21px] text-[#595757] font-medium tracking-wide z-10 group-[&.is-white]:text-white">團隊介紹</span>
						<span class="absolute left-0 tf-y w-full h-full bg-[#005188] opacity-0 group-[&.current]:opacity-100"></span>
					</li>
				</ul>
			</div>
		</div>

		<section class="section h-screen bg-[#efefef] relative lg:h-full lg:overflow-hidden">
			<div class="flex justify-between pt-20 px-[230px] xl:zoom-80 lg:px-0 lg:block lg:pt-[72px] lg:pb-[230px] lg:px-6">
				<div class="relative h-max">
					<div class="absolute -left-[146px] tf-y lg:-left-2">
						<!-- <img src="<?= get_template_directory_uri() ?>/images/contact-logo.svg"> -->

						<!-- <video muted src="<?= get_template_directory_uri() ?>/images/logo-move.mp4" class="w-[322px]" id="logo-move"></video> -->
						<div class=""><img src="<?= get_template_directory_uri() ?>/images/logo-move.gif" class="w-[322px] xl:w-[280px] lg:w-[80px]" id="logo-move"></div>
					</div>
					<div class="relative bt-move font-en text-[#5b5b5b] text-[114px] lg:text-[52px] lg:pl-9">ABOUT</div>
				</div>
				<div class="lg:mt-[174px]">
					<div class="text-[46px] text-[#5b5b5b] tracking-wider mb-[210px] lg:text-[25px] lg:mb-7">實踐你理想中家的藍圖</div>
					<div class="relative">
						<div class="text-[#5b5b5b] text-[33px] font-en lg:text-[19px]">
							DREAM YOUR DREAM<br>
							LIVE YOUR LIFE
						</div>
						<div class="road absolute left-1 top-[90%] h-0 overflow-hidden lg:left-0">
							<svg width="1040.98" height="380.32" viewBox="0 0 1040.98 380.32" class="">
								<polygon points="272.28 1.62 1040.98 375.52 534.37 380.32 0 0 272.28 1.62" style="fill: #e8e6d9;"/>
							</svg>
						</div>
					</div>
				</div>
			</div>
			
			<div class="absolute bottom-8 right-[66px] xl:zoom-80 lg:right-6 lg:bottom-4">
				<div class="text-[15px] text-[#595757] mb-4 lg:writing-vertical-mobile lg:text-[13px]">SCROLL</div>
				<div class="relative">
					<div class="w-px h-[96px] mx-auto bg-[#aaaaaa]"></div>
					<div class="absolute h-full bg-[#074f83] w-[3px] tf-x -ml-[1px] scroll-down bottom-0"></div>
				</div>
			</div>
		</section>

		<section class="section about-item-1 h-screen relative bg-[#cadde5] lg:h-full lg:overflow-hidden" data-where="0">
			<div class="flex items-start justify-center lg:justify-end lg:pt-40 lg:pr-6">
				<div class="relative xl:zoom-80">
					<div class="triangle lg:hidden"></div>
					<div class="triangle-mobile hidden lg:block"></div>

					<ul class="text absolute flex items-center left-[58px] tf-y text-[26px] text-[#474747] space-x-6 lg:text-[13px] lg:writing-vertical lg:space-x-0 lg:space-y-5 lg:tf-x lg:left-0">
						<li># 破框思考</li>
						<li># 勇於挑戰</li>
						<li># 好奇心態</li>
					</ul>

					<div class="airplane lg:hidden">
		                <img src="<?= get_template_directory_uri() ?>/images/about-deco-2.svg" class="max-w-none" />
		            </div>

		            <div class="airplane hidden lg:block">
						<svg width="98.23" height="131.07" viewBox="0 0 98.23 131.07">
							<polygon points="44.08 0 98.23 112.34 0 112.34 44.08 0" style="fill: #f2f2f2;"/>
							<g>
							<polygon points="44.59 .82 56.71 113.55 44.87 130.42 44.59 .82" style="fill: #b1b3b5;"/>
							<polygon points="44.25 1.47 33.2 114.31 45.19 131.07 44.25 1.47" style="fill: #d7d8da;"/>
							</g>
						</svg>
		            </div>
				</div>
			</div>

			<div class="absolute flex items-center bottom-[90px] left-[410px] lg:bottom-auto lg:top-16 lg:left-8">
				<div class="text-[#595757] text-[116px] leading-none font-thin lg:text-[52px]">想</div>
				<div class="ml-12 mt-5 lg:ml-6 lg:mt-0"><svg width="136.33" height="63.8" viewBox="0 0 136.33 63.8" class="arrow-hover lg:w-[64px] lg:h-auto">
					<rect x="-1.42" y="48.15" width="139.17" height="1.13" transform="translate(145 82.12) rotate(167.95)" style="fill: #474747;"/>
					<rect x="-1.58" y="20.73" width="140.47" height="4.08" transform="translate(127.47 64.89) rotate(-162.75)" style="fill: #005188;"/>
				</svg></div>
			</div>

			<div class="absolute right-32 bottom-[90px] font-light lg:static lg:h-screen lg:flex lg:flex-col lg:justify-center lg:px-9">
				<div class="text-[#474747] text-[33px] font-en mb-2 lg:text-[19px]">
					FREEDOM<br class="lg:hidden">
					IS CREATIVITY
				</div>
				<div class="text-[#595757] text-[46px] tracking-wide mb-6 lg:text-[25px]">自由是創造力</div>
				<div class="text-[#474747] tracking-normal max-w-[480px] lg:text-[14px] lg:max-w-[280px]">
					「想」不僅是一次思考，它是創造與建構美好生活的起源。<br>
					<br class="hidden lg:block">
					我們熱愛自由奔放的創意，設計出既美觀又實用的空間。 
				</div>
			</div>
		</section>

	    <section class="section about-item-2 h-screen relative bg-[#e8e6d9] lg:h-full lg:overflow-hidden">
	    	<div class="relative flex items-start justify-center lg:pt-20 lg:justify-start lg:pl-12">
				<div class="relative xl:zoom-80">
					<div class="book relative">
						<svg width="293.45" height="547.29" viewBox="0 0 293.45 547.29" class="bg-[#e8e6d9] relative z-10 lg:w-[180px] lg:h-auto">
							<polygon points="244.96 63.64 246.65 547.29 248.48 547.29 246.79 62.93 246.79 62.22 7.27 0 0 0 244.96 63.64" style="fill: #fff;"/>
							<polygon points="248.71 60.29 250.4 543.94 252.23 543.94 250.54 59.58 250.54 58.88 23.91 0 16.63 0 248.71 60.29" style="fill: #fff;"/>
							<polygon points="252.46 56.94 254.15 540.6 255.98 540.59 254.28 56.23 254.28 55.53 40.54 0 33.27 0 252.46 56.94" style="fill: #fff;"/>
							<polygon points="256.21 53.59 257.89 537.25 259.72 537.24 258.03 52.88 258.03 52.18 57.18 0 49.9 0 256.21 53.59" style="fill: #fff;"/>
							<g class="book-pages">
								<polygon points="259.95 50.25 261.64 533.9 263.47 533.89 261.78 49.54 261.78 48.83 73.81 0 66.54 0 259.95 50.25" style="fill: #fff;"/>
								<polygon points="263.7 46.9 265.39 530.55 267.22 530.55 265.53 46.19 265.52 45.48 90.45 0 83.17 0 263.7 46.9" style="fill: #fff;"/>
								<polygon points="267.45 43.55 269.14 527.2 270.96 527.2 269.27 42.84 269.27 42.13 107.08 0 99.81 0 267.45 43.55" style="fill: #fff;"/>
								<polygon points="271.19 40.2 272.88 523.86 274.71 523.85 273.02 39.49 273.02 38.79 123.72 0 116.44 0 271.19 40.2" style="fill: #fff;"/>
								<polygon points="274.94 36.85 276.63 520.51 278.46 520.5 276.77 36.14 276.76 35.44 140.35 0 133.08 0 274.94 36.85" style="fill: #fff;"/>
								<polygon points="278.69 33.51 280.38 517.16 282.2 517.15 280.51 32.79 280.51 32.09 156.99 0 149.71 0 278.69 33.51" style="fill: #fff;"/>
								<polygon points="282.44 30.16 284.12 513.81 285.95 513.81 284.26 29.45 284.26 28.74 173.62 0 166.35 0 282.44 30.16" style="fill: #fff;"/>
								<polygon points="286.18 26.81 287.87 510.46 289.7 510.46 288.01 26.1 288.01 25.39 190.25 0 182.98 0 286.18 26.81" style="fill: #fff;"/>
								<polygon points="289.93 23.46 291.62 507.12 293.45 507.11 291.76 22.75 291.75 22.05 206.89 0 199.62 0 289.93 23.46" style="fill: #fff;"/>
							</g>
						</svg>

						<div class="absolute right-0 -bottom-[68px] z-10 lg:-bottom-[2.65rem]"><img src="<?= get_template_directory_uri() ?>/images/about-deco-5.svg"></div>

						<div class="page absolute top-[34px] -right-[192px] w-[293px] h-[452px] rotate-[24deg] lg:top-3 lg:w-[162px] lg:h-[262px] lg:-right-[92px]">
							<div class="absolute right-[18px] -top-[14px] -rotate-[24deg] z-10 lg:w-8 lg:right-2 lg:-top-2"><img src="<?= get_template_directory_uri() ?>/images/about-deco-4.svg"></div>
							<div class="item bg-white w-full h-full">
								<ul class="absolute text-[21px] text-[#474747] top-24 right-7 lg:text-[13px] lg:top-12">
									<li># 嚴謹務實</li>
									<li># 細緻規劃</li>
									<li># 接軌趨勢</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="absolute flex items-center bottom-[90px] left-[410px] xl:zoom-80 lg:bottom-auto lg:top-16 lg:left-8">
				<div class="text-[#595757] text-[116px] leading-none font-thin lg:text-[52px]">想</div>
				<div class="ml-12 mt-5 lg:ml-6 lg:mt-0"><svg width="136.33" height="63.8" viewBox="0 0 136.33 63.8" class="arrow-hover lg:w-[64px] lg:h-auto">
					<rect x="-1.42" y="48.15" width="139.17" height="1.13" transform="translate(145 82.12) rotate(167.95)" style="fill: #474747;"/>
					<rect x="-1.58" y="20.73" width="140.47" height="4.08" transform="translate(127.47 64.89) rotate(-162.75)" style="fill: #005188;"/>
				</svg></div>
			</div>

			<div class="absolute right-32 bottom-[90px] font-light xl:zoom-80 lg:static lg:h-screen lg:flex lg:flex-col lg:justify-center lg:px-9">
				<div class="text-[#474747] text-[33px] font-en mb-2 lg:text-[19px]">
					COMFORT<br class="lg:hidden">
					IS THOUGHTFULNESS.
				</div>
				<div class="text-[#595757] text-[46px] tracking-wide mb-6 lg:text-[25px]">舒適是深思熟慮</div>
				<div class="text-[#474747] tracking-normal max-w-[480px] lg:text-[14px] lg:max-w-[280px]">
					「想」不僅是一場過程，它是經過細緻的規劃與周全的考量。<br>
					<br class="hidden lg:block">
					在專業與法規的架構內滿足顧客對於家的期待，並隨著住居型態持續進化。 
				</div>
			</div>
		</section>

	    <section class="section about-item-3 h-screen relative bg-[#005188] overflow-hidden lg:h-full lg:overflow-hidden">
	    	<div class="relative h-full flex items-end justify-center lg:pt-[160px] lg:-ml-24">
				<div class="relative overflow-hidden xl:zoom-80">
			        <!-- 靜止的 SVG 陰影 -->
			        <svg width="571.61" height="758.96" viewBox="0 0 571.61 758.96" class="lg:w-[358px] lg:h-auto">
			            <polygon points="464.76 758.96 571.61 576.73 571.61 0 270.25 0 270.25 572.97 0 758.96 464.76 758.96" style="fill: #e8e6d9;"/>
			        </svg>

			        <ul class="absolute text-[21px] text-[#474747] top-[30px] right-8 lg:text-[13px]">
			            <li># 鄰里關係</li>
			            <li># 永續設計</li>
			            <li># 共享空間</li>
			        </ul>

			        <!-- 門 -->
			        <div class="container absolute top-0 right-0 h-[573px] w-[302px] lg:h-[372px] lg:w-[192px]">
			            <div class="door absolute w-full h-full bg-[#005188] origin-right z-10"></div>
			        </div>

			        <!-- 陰影 (光影效果) -->
			        <div class="slanted-box"></div>
			    </div>
		    </div>

		    <div class="absolute flex items-center bottom-[90px] left-[410px] xl:zoom-80 lg:bottom-auto lg:top-16 lg:left-8">
				<div class="text-white text-[116px] leading-none font-thin lg:text-[52px]">宅</div>
				<div class="ml-12 mt-5 lg:ml-6 lg:mt-0"><svg width="136.33" height="63.8" viewBox="0 0 136.33 63.8" class="arrow-hover lg:w-[64px] lg:h-auto">
					<rect x="-1.42" y="48.15" width="139.17" height="1.13" transform="translate(145 82.12) rotate(167.95)" style="fill: #ffffff;"/>
					<rect x="-1.58" y="20.73" width="140.47" height="4.08" transform="translate(127.47 64.89) rotate(-162.75)" style="fill: #ffffff;"/>
				</svg></div>
			</div>

		    <div class="absolute right-32 bottom-[90px] font-light xl:zoom-80 lg:static lg:h-screen lg:flex lg:flex-col lg:justify-center lg:px-9">
				<div class="text-white text-[33px] font-en mb-2 lg:text-[19px]">
					WARMTH FROM<br>
					A DREAM HOME
				</div>
				<div class="text-white text-[46px] tracking-wide mb-6 lg:text-[25px]">溫度來自理想居所</div>
				<div class="text-white tracking-normal max-w-[480px] lg:text-[14px] lg:max-w-[280px]">
					「宅」不僅是家的概念，而是從心思考到逐步實踐的居所，<br>
					<br class="hidden lg:block">
					讓「我家」變「大家」，融合共享精神打造永續生活空間 。 
				</div>
			</div>
		</section>

	    <section class="section free-scroll">
			<div class="pl-[410px] pt-[364px] mb-[270px] xl:zoom-80 lg:pl-0 lg:mb-[180px] lg:pt-[116px]" data-where="1">
				<div class="flex mb-[112px] lg:px-8 lg:mb-10">
					<div class="relative mr-[396px] lg:mr-0">
						<div class="absolute -top-[80px] -left-[60px] lg:-top-[50px] lg:-left-6">
							<div class="text-[18px] text-[#595757] font-medium ml-5 lg:text-[14px]">董事長</div>
							<div class="absolute"><svg width="188.1" height="127.39" viewBox="0 0 188.1 127.39" class="lg:w-[80px] lg:h-auto">
								<rect x="-3.41" y="28.75" width="194.93" height="6.56" transform="translate(-5.27 29.33) rotate(-17.25)" style="fill: #005188;"/>
								<rect x="-19.7" y="84.34" width="85.33" height=".76" transform="translate(107.69 61.76) rotate(90)" style="fill: #474747;"/>
							</svg></div>
						</div>
						<div class="text-[49px] text-[#595757] text-light tracking-wider lg:text-[19px]">沈瑞興</div>
					</div>
					<ul class="-mt-[94px] space-y-3 tracking-normal text-[#595757] text-[18px]">
						<li>磐鈺建設股份有限公司 總經理</li>
						<li>總太地產開發股份有限公司 總經理</li>
						<li>高章營造股份有限公司 工務協理</li>
						<li>岩界設計工程顧問有限公司 工務經理</li>
					</ul>
				</div>

				<div class="">
					<div class="mb-[115px] lg:mb-[60px]"><img src="<?= get_template_directory_uri() ?>/images/about-pic-1.jpg"></div>
					<div class="flex pr-[264px] lg:block lg:px-8">
						<div class="shrink-0 text-[33px] text-[#595757] mr-[266px] lg:text-[18px] lg:mr-0 lg:mb-10">
							持續把好想法構築成家，<br>
	  						讓對的人找到對的房子。	
						</div>
						<div class="flex-auto text-justify text-[18px] leading-[2.2] text-[#595757] lg:text-[14px]">沈董所期許的建築不僅僅是居住空間，而是能夠對台中、甚至台灣帶來深遠影響，跳脫既有框架，賦予建築生命力，一直是沈董對自己的期許：「讓我們不被原本的思維給設限。」台灣的居住習慣正在轉變，人們逐漸追求更高的生活品質，不再僅限於實用的空間，而是需要一個舒適、美學兼具的生活空間。</div>
					</div>
				</div>
			</div>

			<div class="xl:zoom-80">
				<div class="triangle-area relative -mb-1">
					<div class="relative" id="about-mask">
						<div class="flex items-start absolute right-0 top-[120px] lg:top-[50px]">
							<div class="item-1"></div>
							<div class="item-2"></div>
						</div>
						<div class="item-3"></div>
					</div>
				</div>

				<div class="pl-[410px] pb-[318px] bg-[#e8e6d9] lg:pl-0 lg:overflow-hidden lg:pb-[172px]" data-where="2">
					<div class="mb-[346px] lg:mb-[160px]">
						<div class="font-en text-[114px] text-[#5b5b5b] mb-16 lg:text-[33px] lg:px-8">OUR TEAM</div>
						<div class="mb-[115px] lg:mb-[60px]"><img src="<?= get_template_directory_uri() ?>/images/about-pic-2.jpg"></div>
						<div class="flex pr-[264px] lg:block lg:px-8">
							<div class="shrink-0 text-[33px] text-[#595757] mr-[266px] lg:text-[18px] lg:mr-0 lg:mb-10">
								我們都是幸褔的「供給者」<br>
		  						連結彼此，「共享」包羅萬象 。
							</div>
							<div class="flex-auto text-justify text-[18px] leading-[2.2] text-[#595757] lg:text-[14px]">「誠邑築」夢想起步，打造不同凡「想」的好宅，對潛力地段、建築美學、共享空間、生活品質全面想法轉化為實際做法，要讓「對的人找到對的房子」。</div>
						</div>
					</div>

					<div class="lg:px-12" v-scope="Teams({
						now: <?= $cats->rows[0]->term_id ?>,
						cats: [
							<?php foreach($cats->rows as $c) : ?>
								{
									cid: <?= $c->term_id ?>,
									title: '<?= esc_html($c->name) ?>',
								},
							<?php endforeach ?>
						],
			            posts: [
				            <?php foreach($cats->rows as $c) { ?>
				            {
				            	cat: <?= $c->term_id ?>,
				            	lists: [
			            		<?php
				            	$works = pods('team', [
								    'limit' => -1,
								    'where' => "team_category.term_id = $c->term_id" // 只篩選屬於當前分類的內容
								]);
				            	?>
					            	<?php foreach ($works->rows as $work) { ?>
						            	{
						            		pic: `<?= esc_url(get_image_url($work->ID, 'team_cover')); ?>`,
										    job: `<?= esc_html(get_pods_field('team', $work->ID, 'team_job')) ?>`,
										    title: `<?= esc_html($work->post_title) ?>`,
										    content: `<?= esc_html(get_pods_field('team', $work->ID, 'team_content')) ?>`,
						            	},
						            <?php } ?>
				            	]
				            },
				            <?php } ?>
			            ]
		        	})" v-on:vue:mounted="mounted"></div>

					<template id="teams-template">
						<div class="relative pl-[86px] mb-[248px] lg:pl-0 lg:mb-20">
							<div class="absolute -left-[22px] bottom-0 lg:-left-7"><svg width="188.1" height="127.39" viewBox="0 0 188.1 127.39" class="lg:w-[80px] lg:h-auto">
								<rect x="-3.41" y="28.75" width="194.93" height="6.56" transform="translate(-5.27 29.33) rotate(-17.25)" style="fill: #005188;"/>
								<rect x="-19.7" y="84.34" width="85.33" height=".76" transform="translate(107.69 61.76) rotate(90)" style="fill: #474747;"/>
							</svg></div>
							<ul class="flex items-center space-x-16 lg:space-x-6">
								<li v-for="c in cats" class="relative cursor-pointer group" :class="{
									'current': c.cid == now,
								}" v-on:click="changeCat(c.cid)">
									<span class="relative z-10 text-[26px] text-[#595757] transition-all duration-300 group-[&.current]:text-white group-hover:text-white lg:text-[14px]">{{c.title}}</span>
									<span class="absolute left-0 tf-y bg-[#005188] w-0 h-full transition-all duration-300 group-hover:w-full group-[&.current]:w-full"></span>
								</li>
							</ul>
						</div>

						<div class="teams-items max-w-[1200px]">
							<article v-for="(post,i) in posts" v-show="post.cat == now" class="grid grid-cols-3 gap-x-16 gap-y-52 lg:block lg:space-y-[90px]">
								<div v-for="p in (post.lists)" class="text-[#595757]">
									<div class="mb-32 lg:mb-12"><img :src="p.pic"></div>
									<div class="text-[18px] font-medium tracking-normal mb-4 lg:text-[14px]">{{p.job}}</div>
									<div class="text-[33px] font-light tracking-wide mb-16 lg:text-[19px] lg:mb-8">{{p.title}}</div>
									<div class="text-[18px] font-light tracking-normal space-y-3 lg:text-[14px]" v-html="p.content"></div>
									<!-- <ul class="text-[18px] font-light tracking-normal space-y-3 lg:text-[14px]">
										<li v-for="experience in (p.jobs)">
											<span>{{experience.item}}</span>
											<span class="font-medium">{{experience.imp}}</span>
										</li>
									</ul> -->
								</div>
							</article>
						</div>
					</template>
				</div>
			</div>

			<?php include 'footer.php'; ?>
		</section>
	</div>

	<div id="fullpage-mobile" class="hidden lg:block">
		<section class="section h-screen bg-[#efefef] relative lg:h-full lg:overflow-hidden">
			<div class="flex justify-between pt-[270px] px-[230px] xl:zoom-80 lg:px-0 lg:block lg:pt-[72px] lg:pb-[230px] lg:px-6">
				<div class="relative h-max">
					<div class="absolute -left-[146px] tf-y lg:-left-2">
						<!-- <img src="<?= get_template_directory_uri() ?>/images/contact-logo.svg"> -->

						<!-- <video muted src="<?= get_template_directory_uri() ?>/images/logo-move.mp4" class="w-[322px]" id="logo-move"></video> -->
						<div class=""><img src="<?= get_template_directory_uri() ?>/images/logo-move.gif" class="w-[322px] xl:w-[280px] lg:w-[80px]" id="logo-move"></div>
					</div>
					<div class="relative bt-move font-en text-[#5b5b5b] text-[114px] lg:text-[52px] lg:pl-9">ABOUT</div>
				</div>
				<div class="lg:mt-[150px]">
					<div class="text-[46px] text-[#5b5b5b] tracking-wider mb-[210px] lg:text-[25px] lg:mb-7">實踐你理想中家的藍圖</div>
					<div class="relative">
						<div class="text-[#5b5b5b] text-[33px] font-en lg:text-[19px]">
							DREAM YOUR DREAM<br>
							LIVE YOUR LIFE
						</div>
						<div class="road absolute left-1 top-[90%] h-0 overflow-hidden lg:left-0">
							<svg width="1040.98" height="380.32" viewBox="0 0 1040.98 380.32" class="lg:max-w-[660px] lg:h-auto">
								<polygon points="272.28 1.62 1040.98 375.52 534.37 380.32 0 0 272.28 1.62" style="fill: #e8e6d9;"/>
							</svg>
						</div>
					</div>
				</div>
			</div>
			
			<div class="absolute bottom-8 right-[66px] xl:zoom-80 lg:right-6 lg:bottom-4">
				<div class="text-[15px] text-[#595757] mb-4 lg:writing-vertical-mobile lg:text-[13px]">SCROLL</div>
				<div class="relative">
					<div class="w-px h-[96px] mx-auto bg-[#aaaaaa]"></div>
					<div class="absolute h-full bg-[#074f83] w-[3px] tf-x -ml-[1px] scroll-down bottom-0"></div>
				</div>
			</div>
		</section>

		<section class="section about-item-1 h-screen relative bg-[#cadde5] lg:overflow-hidden" data-where="0">
			<div class="flex items-start justify-center lg:justify-end lg:items-end lg:h-full lg:pr-6">
				<div class="relative xl:zoom-80">
					<div class="triangle lg:hidden"></div>
					<div class="triangle-mobile hidden lg:block"></div>

					<ul class="text absolute flex items-center left-[58px] tf-y text-[26px] text-[#474747] space-x-6 lg:text-[13px] lg:writing-vertical lg:space-x-0 lg:space-y-5 lg:tf-x lg:left-0">
						<li># 破框思考</li>
						<li># 勇於挑戰</li>
						<li># 好奇心態</li>
					</ul>

					<div class="airplane lg:hidden">
		                <img src="<?= get_template_directory_uri() ?>/images/about-deco-2.svg" class="max-w-none" />
		            </div>

		            <div class="airplane hidden lg:block">
						<svg width="98.23" height="131.07" viewBox="0 0 98.23 131.07">
							<polygon points="44.08 0 98.23 112.34 0 112.34 44.08 0" style="fill: #f2f2f2;"/>
							<g>
							<polygon points="44.59 .82 56.71 113.55 44.87 130.42 44.59 .82" style="fill: #b1b3b5;"/>
							<polygon points="44.25 1.47 33.2 114.31 45.19 131.07 44.25 1.47" style="fill: #d7d8da;"/>
							</g>
						</svg>
		            </div>
				</div>
			</div>

			<div class="absolute flex items-center bottom-[90px] left-[410px] lg:bottom-auto lg:top-16 lg:left-8">
				<div class="text-[#595757] text-[116px] leading-none font-thin lg:text-[52px]">想</div>
				<div class="ml-12 mt-5 lg:ml-6 lg:mt-0"><svg width="136.33" height="63.8" viewBox="0 0 136.33 63.8" class="arrow-hover lg:w-[64px] lg:h-auto">
					<rect x="-1.42" y="48.15" width="139.17" height="1.13" transform="translate(145 82.12) rotate(167.95)" style="fill: #474747;"/>
					<rect x="-1.58" y="20.73" width="140.47" height="4.08" transform="translate(127.47 64.89) rotate(-162.75)" style="fill: #005188;"/>
				</svg></div>
			</div>
		</section>

		<section class="section h-screen relative bg-[#cadde5] lg:px-9 lg:overflow-hidden">
			<div class="font-light h-full flex flex-col justify-center px-9">
				<div class="text-[#474747] text-[33px] font-en mb-2 lg:text-[19px]">
					FREEDOM<br class="lg:hidden">
					IS CREATIVITY
				</div>
				<div class="text-[#595757] text-[46px] tracking-wide mb-6 lg:text-[25px]">自由是創造力</div>
				<div class="text-[#474747] tracking-normal max-w-[480px] lg:text-[14px] lg:max-w-[280px]">
					「想」不僅是一次思考，它是創造與建構美好生活的起源。<br>
					<br class="hidden lg:block">
					我們熱愛自由奔放的創意，設計出既美觀又實用的空間。 
				</div>
			</div>
		</section>

	    <section class="section about-item-2 h-screen relative bg-[#e8e6d9] lg:h-full lg:overflow-hidden">
	    	<div class="relative flex items-start justify-center lg:pt-20 lg:justify-start lg:pl-12">
				<div class="relative xl:zoom-80">
					<div class="book relative">
						<svg width="293.45" height="547.29" viewBox="0 0 293.45 547.29" class="bg-[#e8e6d9] relative z-10 lg:w-[180px] lg:h-auto">
							<polygon points="244.96 63.64 246.65 547.29 248.48 547.29 246.79 62.93 246.79 62.22 7.27 0 0 0 244.96 63.64" style="fill: #fff;"/>
							<polygon points="248.71 60.29 250.4 543.94 252.23 543.94 250.54 59.58 250.54 58.88 23.91 0 16.63 0 248.71 60.29" style="fill: #fff;"/>
							<polygon points="252.46 56.94 254.15 540.6 255.98 540.59 254.28 56.23 254.28 55.53 40.54 0 33.27 0 252.46 56.94" style="fill: #fff;"/>
							<polygon points="256.21 53.59 257.89 537.25 259.72 537.24 258.03 52.88 258.03 52.18 57.18 0 49.9 0 256.21 53.59" style="fill: #fff;"/>
							<g class="book-pages">
								<polygon points="259.95 50.25 261.64 533.9 263.47 533.89 261.78 49.54 261.78 48.83 73.81 0 66.54 0 259.95 50.25" style="fill: #fff;"/>
								<polygon points="263.7 46.9 265.39 530.55 267.22 530.55 265.53 46.19 265.52 45.48 90.45 0 83.17 0 263.7 46.9" style="fill: #fff;"/>
								<polygon points="267.45 43.55 269.14 527.2 270.96 527.2 269.27 42.84 269.27 42.13 107.08 0 99.81 0 267.45 43.55" style="fill: #fff;"/>
								<polygon points="271.19 40.2 272.88 523.86 274.71 523.85 273.02 39.49 273.02 38.79 123.72 0 116.44 0 271.19 40.2" style="fill: #fff;"/>
								<polygon points="274.94 36.85 276.63 520.51 278.46 520.5 276.77 36.14 276.76 35.44 140.35 0 133.08 0 274.94 36.85" style="fill: #fff;"/>
								<polygon points="278.69 33.51 280.38 517.16 282.2 517.15 280.51 32.79 280.51 32.09 156.99 0 149.71 0 278.69 33.51" style="fill: #fff;"/>
								<polygon points="282.44 30.16 284.12 513.81 285.95 513.81 284.26 29.45 284.26 28.74 173.62 0 166.35 0 282.44 30.16" style="fill: #fff;"/>
								<polygon points="286.18 26.81 287.87 510.46 289.7 510.46 288.01 26.1 288.01 25.39 190.25 0 182.98 0 286.18 26.81" style="fill: #fff;"/>
								<polygon points="289.93 23.46 291.62 507.12 293.45 507.11 291.76 22.75 291.75 22.05 206.89 0 199.62 0 289.93 23.46" style="fill: #fff;"/>
							</g>
						</svg>

						<div class="absolute right-0 -bottom-[68px] z-10 lg:-bottom-[2.65rem]"><img src="<?= get_template_directory_uri() ?>/images/about-deco-5.svg"></div>

						<div class="page absolute top-[34px] -right-[192px] w-[293px] h-[452px] rotate-[24deg] lg:top-3 lg:w-[162px] lg:h-[262px] lg:-right-[92px]">
							<div class="absolute right-[18px] -top-[14px] -rotate-[24deg] z-10 lg:w-8 lg:right-2 lg:-top-2"><img src="<?= get_template_directory_uri() ?>/images/about-deco-4.svg"></div>
							<div class="item bg-white w-full h-full">
								<ul class="absolute text-[21px] text-[#474747] top-24 right-7 lg:text-[13px] lg:top-12">
									<li># 嚴謹務實</li>
									<li># 細緻規劃</li>
									<li># 接軌趨勢</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="absolute flex items-center bottom-[90px] left-[410px] xl:zoom-80 lg:bottom-auto lg:top-16 lg:left-8">
				<div class="text-[#595757] text-[116px] leading-none font-thin lg:text-[52px]">想</div>
				<div class="ml-12 mt-5 lg:ml-6 lg:mt-0"><svg width="136.33" height="63.8" viewBox="0 0 136.33 63.8" class="arrow-hover lg:w-[64px] lg:h-auto">
					<rect x="-1.42" y="48.15" width="139.17" height="1.13" transform="translate(145 82.12) rotate(167.95)" style="fill: #474747;"/>
					<rect x="-1.58" y="20.73" width="140.47" height="4.08" transform="translate(127.47 64.89) rotate(-162.75)" style="fill: #005188;"/>
				</svg></div>
			</div>
		</section>

		<section class="section h-screen relative bg-[#e8e6d9] lg:px-9 lg:overflow-hidden">
			<div class="font-light h-full flex flex-col justify-center px-9">
				<div class="text-[#474747] text-[33px] font-en mb-2 lg:text-[19px]">
					COMFORT<br class="lg:hidden">
					IS THOUGHTFULNESS.
				</div>
				<div class="text-[#595757] text-[46px] tracking-wide mb-6 lg:text-[25px]">舒適是深思熟慮</div>
				<div class="text-[#474747] tracking-normal max-w-[480px] lg:text-[14px] lg:max-w-[280px]">
					「想」不僅是一場過程，它是經過細緻的規劃與周全的考量。<br>
					<br class="hidden lg:block">
					在專業與法規的架構內滿足顧客對於家的期待，並隨著住居型態持續進化。 
				</div>
			</div>
		</section>

	    <section class="section about-item-3 h-screen relative bg-[#005188] overflow-hidden lg:h-full lg:overflow-hidden">
	    	<div class="relative flex items-end justify-center lg:h-full lg:-ml-4">
				<div class="relative overflow-hidden xl:zoom-80">
			        <!-- 靜止的 SVG 陰影 -->
			        <svg width="571.61" height="758.96" viewBox="0 0 571.61 758.96" class="lg:w-[358px] lg:h-auto">
			            <polygon points="464.76 758.96 571.61 576.73 571.61 0 270.25 0 270.25 572.97 0 758.96 464.76 758.96" style="fill: #e8e6d9;"/>
			        </svg>

			        <ul class="absolute text-[21px] text-[#474747] top-[30px] right-8 lg:text-[13px]">
			            <li># 鄰里關係</li>
			            <li># 永續設計</li>
			            <li># 共享空間</li>
			        </ul>

			        <!-- 門 -->
			        <div class="container absolute top-0 right-0 h-[573px] w-[302px] lg:h-[372px] lg:w-[192px]">
			            <div class="door absolute w-full h-full bg-[#005188] origin-right z-10"></div>
			        </div>

			        <!-- 陰影 (光影效果) -->
			        <div class="slanted-box"></div>
			    </div>
		    </div>

		    <div class="absolute flex items-center bottom-[90px] left-[410px] xl:zoom-80 lg:bottom-auto lg:top-16 lg:left-8">
				<div class="text-white text-[116px] leading-none font-thin lg:text-[52px]">宅</div>
				<div class="ml-12 mt-5 lg:ml-6 lg:mt-0"><svg width="136.33" height="63.8" viewBox="0 0 136.33 63.8" class="arrow-hover lg:w-[64px] lg:h-auto">
					<rect x="-1.42" y="48.15" width="139.17" height="1.13" transform="translate(145 82.12) rotate(167.95)" style="fill: #ffffff;"/>
					<rect x="-1.58" y="20.73" width="140.47" height="4.08" transform="translate(127.47 64.89) rotate(-162.75)" style="fill: #ffffff;"/>
				</svg></div>
			</div>
		</section>

		<section class="section h-screen relative bg-[#005188] lg:px-9 lg:overflow-hidden">
			<div class="font-light h-full flex flex-col justify-center px-9">
				<div class="text-white text-[33px] font-en mb-2 lg:text-[19px]">
					WARMTH FROM<br>
					A DREAM HOME
				</div>
				<div class="text-white text-[46px] tracking-wide mb-6 lg:text-[25px]">溫度來自理想居所</div>
				<div class="text-white tracking-normal max-w-[480px] lg:text-[14px] lg:max-w-[280px]">
					「宅」不僅是家的概念，而是從心思考到逐步實踐的居所，<br>
					<br class="hidden lg:block">
					讓「我家」變「大家」，融合共享精神打造永續生活空間 。 
				</div>
			</div>
		</section>

	    <section class="section free-scroll xl:zoom-80">
			<div class="pl-[410px] pt-[364px] mb-[270px] lg:pl-0 lg:mb-[180px] lg:pt-[116px]" data-where="1">
				<div class="flex mb-[112px] lg:px-8 lg:mb-10">
					<div class="relative mr-[396px] lg:mr-0">
						<div class="absolute -top-[80px] -left-[60px] lg:-top-[50px] lg:-left-6">
							<div class="text-[18px] text-[#595757] font-medium ml-5 lg:text-[14px]">董事長</div>
							<div class="absolute"><svg width="188.1" height="127.39" viewBox="0 0 188.1 127.39" class="lg:w-[80px] lg:h-auto">
								<rect x="-3.41" y="28.75" width="194.93" height="6.56" transform="translate(-5.27 29.33) rotate(-17.25)" style="fill: #005188;"/>
								<rect x="-19.7" y="84.34" width="85.33" height=".76" transform="translate(107.69 61.76) rotate(90)" style="fill: #474747;"/>
							</svg></div>
						</div>
						<div class="text-[49px] text-[#595757] text-light tracking-wider lg:text-[19px]">沈瑞興</div>
					</div>
					<ul class="-mt-[52px] space-y-1 tracking-normal text-[#595757] text-[12px] ml-5">
						<li>磐鈺建設股份有限公司 總經理</li>
						<li>總太地產開發股份有限公司 總經理</li>
						<li>高章營造股份有限公司 工務協理</li>
						<li>岩界設計工程顧問有限公司 工務經理</li>
					</ul>
				</div>

				<div class="">
					<div class="mb-[115px] lg:mb-[60px]"><img src="<?= get_template_directory_uri() ?>/images/about-pic-1.jpg"></div>
					<div class="flex pr-[264px] lg:block lg:px-8">
						<div class="shrink-0 text-[33px] text-[#595757] mr-[266px] lg:text-[18px] lg:mr-0 lg:mb-10">
							持續把好想法構築成家，<br>
	  						讓對的人找到對的房子。	
						</div>
						<div class="flex-auto text-justify text-[18px] leading-[2.2] text-[#595757] lg:text-[14px]">沈董所期許的建築不僅僅是居住空間，而是能夠對台中、甚至台灣帶來深遠影響，跳脫既有框架，賦予建築生命力，一直是沈董對自己的期許：「讓我們不被原本的思維給設限。」台灣的居住習慣正在轉變，人們逐漸追求更高的生活品質，不再僅限於實用的空間，而是需要一個舒適、美學兼具的生活空間。</div>
					</div>
				</div>
			</div>

			<div class="">
				<div class="triangle-area relative -mb-1">
					<div class="relative" id="about-mask">
						<div class="flex items-start absolute right-0 top-[120px] lg:top-[50px]">
							<div class="item-1"></div>
							<div class="item-2"></div>
						</div>
						<div class="item-3"></div>
					</div>
				</div>

				<div class="pl-[410px] pb-[318px] bg-[#e8e6d9] lg:pl-0 lg:overflow-hidden lg:pb-[172px]" data-where="2">
					<div class="mb-[346px] lg:mb-[160px]">
						<div class="font-en text-[114px] text-[#5b5b5b] mb-16 lg:text-[33px] lg:px-8">OUR TEAM</div>
						<div class="mb-[115px] lg:mb-[60px]"><img src="<?= get_template_directory_uri() ?>/images/about-pic-2.jpg"></div>
						<div class="flex pr-[264px] lg:block lg:px-8">
							<div class="shrink-0 text-[33px] text-[#595757] mr-[266px] lg:text-[18px] lg:mr-0 lg:mb-10">
								我們都是幸褔的「供給者」<br>
		  						連結彼此，「共享」包羅萬象 。
							</div>
							<div class="flex-auto text-justify text-[18px] leading-[2.2] text-[#595757] lg:text-[14px]">「誠邑築」夢想起步，打造不同凡「想」的好宅，對潛力地段、建築美學、共享空間、生活品質全面想法轉化為實際做法，要讓「對的人找到對的房子」。</div>
						</div>
					</div>

					<div class="lg:px-12" v-scope="Teams({
						now: <?= $cats->rows[0]->term_id ?>,
						cats: [
							<?php foreach($cats->rows as $c) : ?>
								{
									cid: <?= $c->term_id ?>,
									title: '<?= esc_html($c->name) ?>',
								},
							<?php endforeach ?>
						],
			            posts: [
				            <?php foreach($cats->rows as $c) { ?>
				            {
				            	cat: <?= $c->term_id ?>,
				            	lists: [
			            		<?php
				            	$works = pods('team', [
								    'limit' => -1,
								    'where' => "team_category.term_id = $c->term_id" // 只篩選屬於當前分類的內容
								]);
				            	?>
					            	<?php foreach ($works->rows as $work) { ?>
						            	{
						            		pic: `<?= esc_url(get_image_url($work->ID, 'team_cover')); ?>`,
										    job: `<?= esc_html(get_pods_field('team', $work->ID, 'team_job')) ?>`,
										    title: `<?= esc_html($work->post_title) ?>`,
										    content: `<?= esc_html(get_pods_field('team', $work->ID, 'team_content')) ?>`,
						            	},
						            <?php } ?>
				            	]
				            },
				            <?php } ?>
			            ]
		        	})" v-on:vue:mounted="mounted"></div>

					<template id="teams-template-mobile">
						<div class="relative pl-[86px] mb-[248px] lg:pl-0 lg:mb-20">
							<div class="absolute -left-[22px] bottom-0 lg:-left-7"><svg width="188.1" height="127.39" viewBox="0 0 188.1 127.39" class="lg:w-[80px] lg:h-auto">
								<rect x="-3.41" y="28.75" width="194.93" height="6.56" transform="translate(-5.27 29.33) rotate(-17.25)" style="fill: #005188;"/>
								<rect x="-19.7" y="84.34" width="85.33" height=".76" transform="translate(107.69 61.76) rotate(90)" style="fill: #474747;"/>
							</svg></div>
							<ul class="flex items-center space-x-16 lg:space-x-6">
								<li v-for="(c,i) in cats" class="relative cursor-pointer group" :class="{
									'current': c.cid == now,
								}" v-on:click="changeCat(c.cid)">
									<span class="relative z-10 text-[26px] text-[#595757] group-[&.current]:text-white group-hover:text-white lg:text-[14px]">{{c.title}}</span>
									<span class="absolute left-0 top-0 bg-[#005188] w-full h-full opacity-0 group-[&.current]:opacity-100 group-hover:opacity-100"></span>
								</li>
							</ul>
						</div>

						<div class="teams-items max-w-[880px]">
							<article v-for="(post,i) in posts" v-show="post.cat == now" class="grid grid-cols-2 gap-x-10 gap-y-52 lg:block lg:space-y-[90px]">
								<div v-for="p in (post.lists)" class="text-[#595757]">
									<div class="mb-32 lg:mb-12"><img :src="p.pic"></div>
									<div class="text-[18px] font-medium tracking-normal mb-4 lg:text-[14px]">{{p.job}}</div>
									<div class="text-[33px] font-light tracking-wide mb-16 lg:text-[19px] lg:mb-8">{{p.title}}</div>
									<ul class="text-[18px] font-light tracking-normal space-y-3 lg:text-[14px]">
										<li v-for="experience in (p.jobs)">
											<span>{{experience.item}}</span>
											<span class="font-medium">{{experience.imp}}</span>
										</li>
									</ul>
								</div>
							</article>
						</div>
					</template>
				</div>
			</div>

			<?php include 'footer.php'; ?>
		</section>
	</div>

</body>

<?php include 'script.php'; ?>
</html>

<script>
ScrollTrigger.create({
    trigger: '.about-item-3',
    start: 'top center',
    end: 'bottom center',
    // markers: true,
    onToggle: (self) => {
    	if(self.isActive){
    		$(".guideList").addClass("is-white")
    	}else{
    		$(".guideList").removeClass("is-white")
    	}
    },
    onUpdate: (self) => {
        
    }
});

var $where = $("[data-where]").get().reverse()

$(window).scroll(function() {

	var scrollTop = $(this).scrollTop()
	var _b = scrollTop + $(window).height() * 0.5

	$($where).each((i, el) => {

		var _index = el.dataset.where

		if (_b > $(el).offset().top) {
			$("#whereList li").eq(_index).addClass("current").siblings().removeClass("current")
			return false
		}else{
			$("#whereList li").removeClass("current")
		}
	})

}).trigger("scroll")


$("#whereList li").on("click", function () {
	gsap.to(window, {
		duration: 1.2,
		scrollTo: {
			y: $("[data-where=" + $(this).index() + "]"),
			// offsetY: $(window).height() * 0.2,
		},
		ease: Power2.easeInOut
	});
});


var _road_height = $(".road svg").height()
var road = gsap.timeline({
	paused: true,
}).to(".road", {
	height: _road_height,
	duration: 2.5,
	ease: "power2.inOut" // 緩和效果
})


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

	road.play()
})


if(device == 'mobile'){
	var airplane = gsap.timeline({
		paused: true,
		delay: .3,
	}).to(".triangle-mobile", {
	    duration: 2,
	    clipPath: "polygon(100% 100%, 65% 0%, 35% 0%, 0% 100%)", // 最終變形的 clip-path
	    ease: "power2.inOut" // 緩和效果
	})
	.from(".airplane", {
	    duration: 2,
	    top: '70%', // 飛機最終位置
	    ease: "power2.inOut" // 緩和效果
	}, "<") // 同時進行
	.from(".about-item-1 .text", {
		delay: .5,
	    duration: 1.5,
	    y: 70,
	    opacity: 0,
	    ease: "power2.inOut" // 緩和效果
	}, "<"); // 同時進行
}else{
	var airplane = gsap.timeline({
		paused: true,
		delay: .3,
	}).to(".triangle", {
	    duration: 2,
	    clipPath: "polygon(0% 0%, 100% 36%, 100% 64%, 0% 100%)", // 最終變形的 clip-path
	    ease: "power2.inOut" // 緩和效果
	})
	.from(".airplane", {
	    duration: 2,
	    left: '-2%', // 飛機最終位置
	    ease: "power2.inOut" // 緩和效果
	}, "<") // 同時進行
	.from(".about-item-1 .text", {
		delay: .5,
	    duration: 1.5,
	    x: -70,
	    opacity: 0,
	    ease: "power2.inOut" // 緩和效果
	}, "<"); // 同時進行
}


	
var books = gsap.timeline({
	paused: true,
}).from(".page", {
	duration: 1.2,
	right: 0, // 移入位置
	rotate: 0,
	opacity: 0,
	delay: .5,
	ease: "power2.inOut" // 緩和效果
}, "<"); // 同時進行


var door = gsap.timeline({
	paused: true,
}).to(".door", {
    duration: 2.5,
    rotateY: -102, // 逆時針旋轉
    transformOrigin: "right", // 旋轉支點在右側
    ease: "power3.inOut"
})
.to(".slanted-box", {
    duration: 2.5, // 動畫持續時間
    clipPath: "polygon(70% 0%, 100% 0%, 100% 100%, 100% 100%)", // 目標裁剪路徑
    ease: "power3.inOut" // 緩和效果
}, "<"); // 同時進行


if(device == 'mobile'){
	function Teams(props) {
		return {
			$template: '#teams-template-mobile',
			now: props.now,
			cats: props.cats,
			posts: props.posts,
			mounted() {
				
			},
			changeCat(i) {
				$.fn.fullpage.reBuild();

				gsap.to(".teams-items article", {
					opacity: 0,
					duration: .1,
					ease: 'none',
					onComplete: () =>{
						this.now = i

						gsap.to(".teams-items article", {
							opacity: 1,
							duration: .1,
							ease: 'none',
						})
					}
				})
			}
		}
	}

	$('#fullpage-mobile').fullpage( {
		licenseKey: 'OPEN-SOURCE-GPLV3-LICENSE',
		scrollBar: false,
	    css3: false,
	    scrollingSpeed: 1200,
		scrollOverflow: true,
		// normalScrollElements: ".free-scroll",
		onLeave: function(origin, next, direction) {
			if (next == 1) {
			}
			if (next == 2) {
				airplane.play()
			}
			if (next == 3) {
			}
			if (next == 4) {
				books.play()
			}
			if (next == 5) {
				$("#top-logo").removeClass("is-change")
				$(".hamburger").removeClass("is-change")
			}
			if (next == 6) {
				door.play()
				$("#top-logo").addClass("is-change")
				$(".hamburger").addClass("is-change")
			}
			if (next == 7) {
				$("#top-logo").addClass("is-change")
				$(".hamburger").addClass("is-change")
			}
			if (next == 8) {
				$("#top-logo").removeClass("is-change")
				$(".hamburger").removeClass("is-change")
			}
		},
		afterLoad: function(origin, destination) {
			gsap.delayedCall(.5, function () {
			    $("#topmenuWrap").removeClass("is-hide");
			})
		}
	});

	$(".backtotop").on("click", function() {
	    $.fn.fullpage.silentMoveTo(1);
	})
}else{
	function Teams(props) {
		return {
			$template: '#teams-template',
			now: props.now,
			cats: props.cats,
			posts: props.posts,
			mounted() {
				
			},
			changeCat(i) {
				$.fn.fullpage.reBuild();

				gsap.to(".teams-items article", {
					opacity: 0,
					duration: .1,
					ease: 'none',
					onComplete: () =>{
						this.now = i

						gsap.to(".teams-items article", {
							opacity: 1,
							duration: .1,
							ease: 'none',
						})
					}
				})
			}
		}
	}

	var _fullpage = $('#fullpage').fullpage( {
		scrollBar: false,
	    // css3: false,
	    scrollingSpeed: 1200,
		licenseKey: 'OPEN-SOURCE-GPLV3-LICENSE',
		scrollOverflow: true,
		// scrollOverflowReset: true,
		onLeave: function(origin, destination, direction) {
			if (destination.index == 0) {
			}
			if (destination.index+1 == 2) {
				airplane.play()

				gsap.delayedCall(.7, function () {
					$(".aboutCats").removeClass("opacity-0")
				})
			}
			if (destination.index+1 == 3) {
				books.play()
				$("#top-logo").removeClass("is-change")
				$(".hamburger").removeClass("is-change")

				gsap.delayedCall(.7, function () {
					$(".guideList").removeClass("is-white")
				})
			}
			if (destination.index+1 == 4) {
				door.play()
				$("#top-logo").addClass("is-change")
				$(".hamburger").addClass("is-change")

				gsap.delayedCall(.7, function () {
					$(".guideList").addClass("is-white")

					$(".aboutCats").removeClass("opacity-0")
				})
			}
			if (destination.index+1 == 5) {
				$("#top-logo").removeClass("is-change")
				$(".hamburger").removeClass("is-change")

				gsap.delayedCall(.7, function () {
					$(".guideList").removeClass("is-white")
				})
			}
		}
	});


	$(".backtotop").on("click", function() {
	    $.fn.fullpage.silentMoveTo(1);
	})
}
</script>