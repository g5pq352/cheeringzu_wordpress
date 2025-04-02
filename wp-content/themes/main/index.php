<?php
/*
Template Name: news
*/

// Pods 查詢
$works = pods('new', [
    'limit' => 3,
]);

$architectural = pods('architectural', [
    'limit' => -1,
]);

$index_project = pods('index_project', [
    'limit' => -1,
]);

// $pods_architectural = pods('architectural', $post_id); // 取得 Pods 物件
// $architectural_content = $pods_architectural->field('architectural_content');
// $architectural_cover = $pods_architectural->field('architectural_cover');
// $architectural_author = $pods_architectural->field('architectural_author');
?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body>
	<?php include 'topmenu.php'; ?>

	<div class="loading">
		<div class=""></div>
		<div class="fixed w-full h-full top-0 left-0 bg-[#f2f2f2] z-50">
			<div class="absolute tf"><img src="<?= get_template_directory_uri() ?>/images/loading-logo.svg"></div>
		</div>
	</div>

	<section class="relative" id="index-cutscene">
		<div class="fixed w-full h-screen top-0 left-0 -z-10">
			<ul class="fix-bg">
				<!-- <li class="w-full"><img src="<?= get_template_directory_uri() ?>/images/index-bg-fix-1.jpg"></li>
				<li class="w-full"><img src="<?= get_template_directory_uri() ?>/images/index-bg-fix-2.jpg"></li>
				<li class="w-full"><img src="<?= get_template_directory_uri() ?>/images/index-bg-fix-3.jpg"></li> -->
				<li class="w-full h-screen">
					<video src="https://video.server-goods-design.com/Items/0b01216340a3673f24023c8f86af7de6/Download?api_key=38d4304de9ed4c27993b94ec0517c665" playsinline muted class="absolute inset-0 img-cover h-screen [&.active]:z-20 [&.fading-out]:z-10" id="videoPlayer1"></video>
					<video src="https://video.server-goods-design.com/Items/e3ecf60db625670706ca4d46b849a21b/Download?api_key=38d4304de9ed4c27993b94ec0517c665" playsinline muted class="absolute inset-0 img-cover h-screen [&.active]:z-20 [&.fading-out]:z-10" id="videoPlayer4"></video>
				</li>
				<li class="w-full h-screen">
					<video src="https://video.server-goods-design.com/Items/c18139259d2cf082f2cf08535ebdef85/Download?api_key=38d4304de9ed4c27993b94ec0517c665" playsinline muted class="absolute inset-0 img-cover h-screen [&.active]:z-20 [&.fading-out]:z-10" id="videoPlayer2"></video>
					<video src="https://video.server-goods-design.com/Items/c18139259d2cf082f2cf08535ebdef85/Download?api_key=38d4304de9ed4c27993b94ec0517c665" playsinline muted class="absolute inset-0 img-cover h-screen [&.active]:z-20 [&.fading-out]:z-10" id="videoPlayer5"></video>
				</li>
				<li class="w-full h-screen">
					<video src="https://video.server-goods-design.com/Items/28efd5f9bcfbf9d4ac1d3c5966ff22fb/Download?api_key=38d4304de9ed4c27993b94ec0517c665" playsinline muted class="absolute inset-0 img-cover h-screen [&.active]:z-20 [&.fading-out]:z-10" id="videoPlayer3"></video>
					<video src="https://video.server-goods-design.com/Items/28efd5f9bcfbf9d4ac1d3c5966ff22fb/Download?api_key=38d4304de9ed4c27993b94ec0517c665" playsinline muted class="absolute inset-0 img-cover h-screen [&.active]:z-20 [&.fading-out]:z-10" id="videoPlayer6"></video>
				</li>
			</ul>
		</div>

		<div class="relative">
			<div class="h-screen relative">
				<div class="absolute bottom-8 right-[66px] lg:right-6">
					<div class="text-[15px] text-[#595757] mb-4 lg:writing-vertical-mobile lg:text-[13px]">SCROLL</div>
					<div class="relative">
						<div class="w-px h-[96px] mx-auto bg-[#aaaaaa]"></div>
						<div class="absolute h-full bg-[#074f83] w-[3px] tf-x -ml-[1px] scroll-down bottom-0"></div>
					</div>
				</div>
			</div>
			<div class="relative pt-72 pb-72 xl:zoom-80">
				<div class="relative z-10 flex justify-between pl-32 pr-[68px] lg:block lg:px-9">
					<div class="text-[47px] text-[#5b5b5b] tracking-wider lg:text-[19px] lg:mb-[60px] lg:tracking-normal">「想想宅-自由 舒適 有溫度的家」 </div>
					<div class="">
						<div class="text-[25px] text-[#595757] tracking-wider leading-[2] mb-16 lg:text-[14px] lg:tracking-wide lg:mb-12">
							「想」不僅是一次思考，<br>
							它是創造與建構美好生活的起源。<br>
							我們熱愛自由奔放的創意，<br>
							設計出既美觀又實用的空間。
						</div>
						<div class=""><svg width="249.67" height="20.11" viewBox="0 0 249.67 20.11" class="arrow-hover inline-block lg:max-w-[140px] lg:h-auto">
							<line y1="14.89" x2="249.67" y2="14.89" style="fill: none; stroke: #595757; stroke-miterlimit: 10; stroke-width: .79px;"/>
							<rect x="184.33" y="9.16" width="62.02" height="1.8" transform="translate(418.02 83.52) rotate(-162.75)" style="fill: #115992;"/>
						</svg></div>
					</div>
				</div>

				<div class="absolute bottom-0 left-0 w-full h-full bg-gradient-to-t from-[#efefef]"></div>
			</div>
		</div>
	</section>

	<section class="relative bg-[#efefef]" id="indexScroll">
		<!-- <div class="h-screen"></div> -->
		<div class="h-[25vh]"></div>

		<div class="w-full flex justify-between items-end bg-[#efefef] pb-[84px] pl-[44px] pr-[108px] xl:zoom-80 lg:flex-col lg:pl-0 lg:pr-0 lg:items-start lg:pb-7" id="indexScroll-start">
			<div class="flex items-center lg:flex-col order-1 lg:order-2 lg:items-start lg:px-8">
				<div class="-mr-32 lg:mr-0 lg:mb-3">
					<div class="">
						<!-- <svg width="102.67" height="159" viewBox="0 0 102.67 159">
							<rect x="52.78" y="30.62" width="49.52" height="95.49" style="fill: #fffcdb;"/>
							<g>
								<polyline points="1 1 80.32 1.87 101.67 29.85" style="fill: none; stroke: #115992; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2px;"/>
								<line x1="80.07" y1="2.7" x2="80.07" y2="29.61" style="fill: none; stroke: #115992; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2px;"/>
								<g>
								    <line x1="52.25" y1="29.29" x2="52.74" y2="126.04" style="fill: none; stroke: #115992; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2px;"/>
								    <polygon points="1 1 1 158 52.74 126.04 101.67 126.04 101.67 29.85 52.25 29.29 1 1" style="fill: none; stroke: #115992; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2px;"/>
								</g>
								<g>
								  <line x1="81.72" y1="126.04" x2="91.42" y2="158" style="fill: none; stroke: #115992; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2px;"/>
								  <polyline points="1 158 91.42 158 101.67 126.04" style="fill: none; stroke: #115992; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2px;"/>
								</g>
							</g>
						</svg> -->

						<!-- <video muted src="<?= get_template_directory_uri() ?>/images/logo-move.mp4" class="w-[322px]" id="logo-move"></video> -->
						<div class=""><img src="<?= get_template_directory_uri() ?>/images/logo-move.gif" class="w-[322px] lg:w-[140px]" id="logo-move"></div>
					</div>
				</div>
				<div class="text-[89px] font-en leading-none text-[#5b5b5b] lg:text-[32px]">
					<div class="flex kv-text">
						<div class="kv-item mr-[60px] lg:mr-5">NEW</div>
						<div class="kv-item">PROJECT</div>
					</div>
					<div class="flex kv-text">
						<div class="kv-item mr-[60px] lg:mr-5">GINKGO</div>
						<div class="kv-item">MANSION</div>
					</div>
				</div>
			</div>
			<div class="max-w-[350px] lg:max-w-[240px] order-2 lg:order-1 lg:px-8 lg:ml-auto">
				<div class="kv-text text-[#5b5b5b] flex justify-between mb-10 lg:block lg:mb-4">
					<div class="text-[22px] tracking-wide mr-10 lg:text-[14px] lg:mb-2">最新建案</div>
					<div class="text-[46px] tracking-wider leading-none lg:text-[25px]">澄亦實築</div>
				</div>
				<div class="kv-text text-[15px] lg:text-[12px]">
					<div class="text-justify lg:text-left lg:mb-3">I believe that the way people live can be directed a little by architecture. </div>
					<div class="text-right">– Tadao Ando</div>
				</div>
			</div>
		</div>

		<!-- {
        	en: 'CHEERING ZU',
        	en_color: `#fff`,
        	ch: `澄亦實築`,
        	ch_color: `#fff`,
        	content: `誠邑築建設 最奢侈的生活尺度<br>銀杏大道 校園雙首席  27-38坪`,
        	content_color: `#fff`,
        	bg: `<?= get_template_directory_uri() ?>/images/index-slider-1.jpg`,
        	bg_mobile: `<?= get_template_directory_uri() ?>/images/index-slider-1-mobile.jpg`,
        	bg_color: `bg-gradient-to-t from-black`,
        	link: `<?= home_url() ?>/projects/澄亦實築-澄玥`,
        }, {
        	en: 'PURE GINKGO',
        	en_color: `#005188`,
        	ch: `科博藏金，有杏同行`,
        	ch_color: `#595757`,
        	content: `「誠邑築建設」 邀請您一起想想，理想家的藍圖`,
        	content_color: `#595757`,
        	bg: `<?= get_template_directory_uri() ?>/images/index-slider-2.jpg`,
        	bg_mobile: `<?= get_template_directory_uri() ?>/images/index-slider-2-mobile.jpg`,
        	bg_color: `bg-gradient-to-t from-white`,
        	link: `<?= home_url() ?>/projects/澄亦實築-澄玥`,
        }, {	
        	en: 'CHEERING ZU',
        	en_color: `#fff`,
        	ch: `澄亦實築`,
        	ch_color: `#fff`,
        	content: `誠邑築建設 最奢侈的生活尺度<br>銀杏大道 校園雙首席  27-38坪`,
        	content_color: `#fff`,
        	bg: `<?= get_template_directory_uri() ?>/images/index-slider-1.jpg`,
        	bg_mobile: `<?= get_template_directory_uri() ?>/images/index-slider-1-mobile.jpg`,
        	bg_color: `bg-gradient-to-t from-black`,
        	link: `<?= home_url() ?>/projects/澄亦實築-澄玥`,
        } -->

		<div class="relative w-full">
			<div class="relative" v-scope="{
	            posts: [
	            	<?php foreach($index_project->rows as $key => $work) { ?>
	            	<?php
	            	$pods = pods('index_project', $work->ID);
	            	$color = $pods->field('index_project_color') == 'black' ? '#595757' : '#fff';
	            	$bgcolor = $pods->field('index_project_color') == 'black' ? 'bg-gradient-to-t from-white' : 'bg-gradient-to-t from-black';
	            	?>
			            {
			            	en: '<?= esc_html($pods->field('index_project_en')) ?>',
			            	en_color: `<?= $color ?>`,
			            	ch: `<?= esc_html($work->post_title) ?>`,
			            	ch_color: `<?= $color ?>`,
			            	content: `<?= esc_html(nl2br($pods->field('index_project_content'))) ?>`,
			            	content_color: `<?= $color ?>`,
			            	bg: `<?= esc_url(get_image_url($work->ID, 'index_project_cover')); ?>`,
			            	bg_mobile: `<?= esc_url(get_image_url($work->ID, 'index_project_covermobile')); ?>`,
			            	bg_color: `<?= $bgcolor ?>`,
			            	link: `<?= $pods->field('index_project_link')['guid'] ?>`,
			            },
		        	<?php } ?>
	            ]
        	}" v-on:vue:mounted="projectsListHandler($el)">
	        	<ul class="projectsList relative mouse-arrow">
					<li v-for="(p,i) in posts" class="relative w-full h-screen list-none"><a :href="p.link">
						<div class="h-full lg:hidden" :style="'background: url('+p.bg+') center center/cover no-repeat;'"></div>
						<div class="h-full relative lg:block" :style="'background: url('+p.bg_mobile+') center center/cover no-repeat;'">
							<div class="absolute bottom-0 w-full h-[60vh] block opacity-90" :class="p.bg_color"></div>
						</div>
						<div class="absolute tf-y right-[15vh] min-w-[584px] mt-[100px] xl:zoom-80 lg:max-w-[260px] lg:ml-0 lg:mt-0 lg:min-w-full lg:px-8 lg:tf-auto lg:bottom-[15vh] lg:right-auto">
							<div class="text-[30px] font-en mb-8 lg:text-[13px] lg:mb-0" :style="'color:'+p.en_color">{{p.en}}</div>
							<div class="text-[57px] tracking-widest mb-4 text-white lg:text-[26px] lg:tracking-wide" :style="'color:'+p.ch_color">{{p.ch}}</div>
							<div class="text-[26px] text-white tracking-wide lg:text-[14px]" v-html="p.content" :style="'color:'+p.content_color"></div>
						</div>
					</a></li>
				</ul>

				<div class="absolute right-10 bottom-10 lg:right-auto lg:tf-x">
					<ul class="projects-dots flex justify-center space-x-4 xl:zoom-70">
						<li v-for="p in posts" class="w-2 h-2 bg-[#727171] cursor-pointer [&.current]:bg-white" :class="p.dots_color_mobile"></li>
					</ul>
				</div>

				<div class="projects-prev absolute tf-y left-10 group lg:hidden"><svg width="137.15" height="40" viewBox="0 0 137.15 3.28" class="cursor-pointer transition-all duration-300 group-hover:-translate-x-3">
					<line y1="1.51" x2="137.15" y2="1.51" style="fill: none; stroke: #fff; stroke-miterlimit: 10; stroke-width: .75px;"/>
					<line x1="54.85" y1="1.64" y2="1.64" style="fill: none; stroke: #fff; stroke-miterlimit: 10; stroke-width: 3.28px;"/>
				</svg></div>
				<div class="projects-next absolute tf-y right-10 group lg:hidden">
					<svg width="137.15" height="40" viewBox="0 0 137.15 3.28" class="cursor-pointer transition-all duration-300 group-hover:translate-x-3">
						<line x1="137.15" y1="1.77" y2="1.77" style="fill: none; stroke: #fff; stroke-miterlimit: 10; stroke-width: .75px;"/>
						<line x1="82.3" y1="1.64" x2="137.15" y2="1.64" style="fill: none; stroke: #fff; stroke-miterlimit: 10; stroke-width: 3.28px;"/>
					</svg>
				</div>
			</div>
			
			<div class="absolute top-0 left-0 w-full h-screen bg-[#5b5b5b]" id="indexScroll-bg"></div>
		</div>
	</section>

	<!-- <section class="relative bg-[#efefef]" id="indexScroll">
		<div class="absolute z-10 top-0 left-0 w-full flex justify-between items-end bg-[#efefef] pt-[280px] pb-[84px] pl-[44px] pr-[108px] h-screen" id="indexScroll-start">
			<div class="flex items-center">
				<div class="mr-[74px]">
					<div class=""><svg width="102.67" height="159" viewBox="0 0 102.67 159">
						<rect x="52.78" y="30.62" width="49.52" height="95.49" style="fill: #fffcdb;"/>
						<g>
							<polyline points="1 1 80.32 1.87 101.67 29.85" style="fill: none; stroke: #115992; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2px;"/>
							<line x1="80.07" y1="2.7" x2="80.07" y2="29.61" style="fill: none; stroke: #115992; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2px;"/>
							<g>
							    <line x1="52.25" y1="29.29" x2="52.74" y2="126.04" style="fill: none; stroke: #115992; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2px;"/>
							    <polygon points="1 1 1 158 52.74 126.04 101.67 126.04 101.67 29.85 52.25 29.29 1 1" style="fill: none; stroke: #115992; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2px;"/>
							</g>
							<g>
							  <line x1="81.72" y1="126.04" x2="91.42" y2="158" style="fill: none; stroke: #115992; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2px;"/>
							  <polyline points="1 158 91.42 158 101.67 126.04" style="fill: none; stroke: #115992; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2px;"/>
							</g>
						</g>
					</svg></div>
				</div>
				<div class="text-[89px] font-en leading-none text-[#5b5b5b]">
					<div class="flex">
						<div class="mr-[60px]">NEW</div>
						<div>PREJECT</div>
					</div>
					<div class="flex">
						<div class="mr-[60px]">JINGKO</div>
						<div>MANSION</div>
					</div>
				</div>
			</div>
			<div class="max-w-[350px]">
				<div class="text-[#5b5b5b] flex justify-between mb-10">
					<div class="text-[22px] tracking-wide mr-10">最新建案</div>
					<div class="text-[46px] tracking-wider leading-none">澄亦實築</div>
				</div>
				<div class="text-[15px]">
					<div class="text-justify">I believe that the way people live can be directed a little by architecture. </div>
					<div class="text-right">– Tadao Ando</div>
				</div>
			</div>
		</div>

		<div class="relative top-0 left-0 w-full">
			<div class="relative">
				<div v-scope="{
		            posts: [{
		            	title: `澄亦實築`,
		            	content: `誠邑築建設 最奢侈的生活尺度<br>銀杏大道 校園雙首席  27-38坪`,
		            	bg: `<?= get_template_directory_uri() ?>/images/index-slider-1.jpg`,
		            }, {
		            	title: `科博藏金，有杏同行`,
		            	content: `「誠邑築建設」 邀請您一起想想，理想家的藍圖`,
		            	bg: `<?= get_template_directory_uri() ?>/images/index-slider-2.jpg`,
		            }, {	
		            	title: `澄亦實築`,
		            	content: `誠邑築建設 最奢侈的生活尺度<br>銀杏大道 校園雙首席  27-38坪`,
		            	bg: `<?= get_template_directory_uri() ?>/images/index-slider-1.jpg`,
		            }]
		        }" class="sticky top-0" v-on:vue:mounted="indexScrollHandler($el)">
		        	<ul class="relative">
						<li v-for="(p,i) in posts" class="relative w-full h-screen list-none">
							<div class="h-full" :style="'background: url('+p.bg+') center center/cover no-repeat;'"></div>
							<div class="absolute tf min-w-[584px] ml-[250px] mt-[100px] text-[#595757]">
								<div class="text-[57px] tracking-wider mb-4">{{p.title}}</div>
								<div class="text-[26px]" v-html="p.content"></div>
							</div>
						</li>
					</ul>
				</div>

				<div class="h-[58vh]" id="indexScrollHeight"></div>
				<div class="h-screen" id="indexScrollHeight"></div>
			</div>

			<div class="absolute tf-y left-10"></div>
			<div class="absolute tf-y right-10"></div>

			<div class=""></div>

			<div class="absolute top-0 left-0 w-full h-screen bg-[#5b5b5b]" id="indexScroll-bg"></div>
		</div>
	</section> -->
	

	<section class="bg-[#efefef]">
		<div class="pt-[222px] mb-[512px] xl:zoom-80 lg:mb-0 lg:pt-32">
			<div class="flex mb-5 lg:block">
				<div class="shrink-0 w-[51vw] lg:w-full lg:hidden">
					<ul class="designerPics relative w-full" v-scope="{
			            posts: [
				            <?php foreach ($architectural->rows as $work) { ?>
					            {
					            	pic: `<?= esc_url(get_image_url($work->ID, 'architectural_cover')); ?>`,
					            },
					        <?php } ?>
			            ]
		        	}">
						<li v-for="p in posts" class="w-full"><img :src="p.pic"></li>
					</ul>
				</div>
				<div class="flex flex-col justify-between pl-5 lg:block lg:px-8 lg:mb-10">
					<div class="flex text-[114px] text-[#5b5b5b] leading-[1.2] relative -top-8 lg:text-[38px]">ARCHITECTURAL<br>PLANNING</div>
					<ul class="designerContent relative text-[#595757] pl-[225px] pr-[116px] lg:pl-[40%] lg:pr-0" v-scope="{
			            posts: [
				            <?php foreach ($architectural->rows as $work) { ?>
			            	<?php $pods = pods('architectural', $work->ID); ?>
					            {
					            	title: `<?= esc_html($work->post_title) ?>`,
					            	content: `<?= wp_kses_post(nl2br($pods->field('architectural_content'))) ?>`,
					            	link: `javascript:;`,
					            },
					        <?php } ?>
			            ]
		        	}">
						<li v-for="p in posts" class="w-full">
							<div class="text-[33px] mb-10 lg:text-[19px] lg:mb-5">{{p.title}}</div>
							<div class="text-[18px] leading-[2.2] lg:text-[14px]" v-html="p.content"></div>
							<div class="mt-[70px] lg:mt-6"><a :href="p.link"><svg width="249.67" height="20.11" viewBox="0 0 249.67 20.11" class="arrow-hover lg:max-w-[140px] lg:h-auto">
								<line y1="14.89" x2="249.67" y2="14.89" style="fill: none; stroke: #595757; stroke-miterlimit: 10; stroke-width: .79px;"/>
								<rect x="184.33" y="9.16" width="62.02" height="1.8" transform="translate(418.02 83.52) rotate(-162.75)" style="fill: #115992;"/>
							</svg></a></div>
						</li>
					</ul>
				</div>
			</div>
			<div class="relative" v-scope="{
	            posts: [
		            <?php foreach ($architectural->rows as $work) { ?>
		            <?php $pods = pods('architectural', $work->ID); ?>
			            {
			            	ch: `<?= esc_html($pods->field('architectural_ch')) ?>`,
			            	en: `<?= esc_html($pods->field('architectural_en')) ?>`,
			            	company: `<?= esc_html($pods->field('architectural_company')) ?>`,
			            	job: `<?= esc_html($pods->field('architectural_job')) ?>`,
			            	pic: `<?= esc_url(get_image_url($work->ID, 'architectural_author')); ?>`,
			            },
		            <?php } ?>
	            ]
        	}" v-on:vue:mounted="designerHandler($el)">
        		<ul class="designerPics relative w-full hidden lg:block mb-3" v-scope="{
		            posts: [{
		            	pic: `<?= get_template_directory_uri() ?>/images/index-pic-1.jpg`,
		            }, {
		            	pic: `<?= get_template_directory_uri() ?>/images/index-pic-1-2.jpg`,
		            }, {
		            	pic: `<?= get_template_directory_uri() ?>/images/index-pic-1.jpg`,
		            }]
	        	}">
					<li v-for="p in posts" class="w-full"><img :src="p.pic"></li>
				</ul>
				<ul class="designerList lg:max-w-[50%] lg:ml-auto lg:mr-9">
					<li v-for="p in posts" class="flex w-full lg:block">
						<div class="shrink-0 w-[51vw] relative text-right">
							<div class="relative inline-block">
								<ul class="">
									<li><img :src="p.pic"></li>
								</ul>
							</div>
						</div>
						<div class="flex items-end pl-5 lg:pl-0">
							<div class="pl-[225px] text-[#595757] lg:pl-0">
								<div class="text-[18px] tracking-normal mb-3">
									<span class="lg:block lg:text-xs">{{p.company}}</span>
									<span class="text-[32px] tracking-wide mx-3 lg:mx-0 lg:text-[24px]">{{p.ch}}</span>
									<span>{{p.job}}</span>
								</div>
								<div class="text-[18px] font-en lg:hidden">{{p.en}}</div>
							</div>
						</div>
					</li>
				</ul>
				<div class="relative lg:flex lg:items-center lg:justify-center lg:w-full lg:mt-10">
					<div class="designer-prev hidden lg:block"><svg width="52.17" height="9" viewBox="0 0 52.17 3">
						<line x1="14.76" y1="1.51" x2="52.17" y2="1.51" style="fill: none; stroke: gray; stroke-miterlimit: 10; stroke-width: .75px;"/>
						<line x1="24.84" y1="1.5" y2="1.5" style="fill: none; stroke: #074f83; stroke-miterlimit: 10; stroke-width: 3px;"/>
					</svg></div>

					<ul class="in-dots absolute left-[300px] bottom-[5px] flex justify-center space-x-4 lg:static lg:mx-20">
						<li v-for="p in posts" class="w-2 h-2 bg-[#727171] cursor-pointer [&.current]:bg-[#005188]"></li>
					</ul>

					<div class="designer-next hidden lg:block"><svg width="52.17" height="9" viewBox="0 0 52.17 3">
						<line x1="37.41" y1="1.49" y2="1.49" style="fill: none; stroke: gray; stroke-miterlimit: 10; stroke-width: .75px;"/>
						<line x1="27.33" y1="1.5" x2="52.17" y2="1.5" style="fill: none; stroke: #074f83; stroke-miterlimit: 10; stroke-width: 3px;"/>
					</svg></div>
				</div>
			</div>
		</div>

		<div class="relative lg:mt-40 lg:pt-20" id="galleryAnchor">
			<div class="lg:text-left lg:px-8 hidden lg:block" id="galleryItem-mobile">
				<div class="item-1 transition-all duration-300 text-[#5b5b5b] text-[114px] leading-none mb-8 xl:zoom-80 lg:text-[53px] lg:mb-1">GALLERY</div>
				<div class="item-2 transition-all duration-300 text-[#005188] text-[23px] xl:zoom-80 lg:text-[15px]">LIFE AND ART</div>
			</div>

			<div class="relative">
				<!-- <div class="absolute -top-64 right-0 text-right mr-[192px]">
					<div class="w-[112px] h-[112px] bg-[#cadde5] inline-block"></div>
				</div> -->
				<div class="flex justify-between ml-[110px] mr-[148px] mt-20 lg:ml-0 lg:block lg:mr-0 lg:text-right">
					<div class="relative z-20 lg:text-left lg:px-8 lg:hidden" id="galleryItem">
						<div class="item-1 transition-all duration-300 text-[#5b5b5b] text-[114px] leading-none mb-8 xl:zoom-80 lg:text-[53px] lg:mb-1">GALLERY</div>
						<div class="item-2 transition-all duration-300 text-[#005188] text-[23px] xl:zoom-80 lg:text-[15px]">LIFE AND ART</div>
					</div>

					<div class=""><img src="<?= get_template_directory_uri() ?>/images/index-mask-mobile.png" class="hidden lg:block"></div>

					<div class="lg:bg-[#cadde5] lg:pt-20">
						<div class="relative xl:zoom-80 lg:px-8 lg:inline-block lg:mb-20">
							<div class="absolute -left-20 -top-[64px] lg:left-7 lg:-top-6"><svg width="114.75" height="113.93" viewBox="0 0 114.75 113.93" class="lg:max-w-[40px] lg:h-auto">
								<rect x="-1.68" y="17.36" width="118.12" height="6.56" transform="translate(-3.54 17.94) rotate(-17.25)" style="fill: #005188;"/>
								<rect x="-24.36" y="66.23" width="94.65" height=".76" transform="translate(89.57 43.64) rotate(90)" style="fill: #474747;"/>
							</svg></div>
							<div class="max-w-[480px] text-[#595757]">
								<div class="flex items-end text-[57px] tracking-wider leading-none mb-10 lg:text-[19px] lg:tracking-wide lg:mb-4 lg:justify-end">
									<div class="">誠邑築</div>
									<div class="text-[35px] mx-8 lg:text-[14px] lg:mx-2">X</div>
									<div class="">楊淳淳</div>
								</div>
								<div class="text-[32px] tracking-normal lg:text-[14px]">獨家藝術贈禮，傳遞心意與品味</div>
							</div>
						</div>
					</div>
				</div>
			</div>
					
			<div class="relative pt-[900px] overflow-hidden xl:zoom-80 lg:pt-0">
				<div class="absolute top-32 right-0 w-full lg:hidden" id="index-mask">
					<div id="mask-up" class="absolute left-0 top-0 bg-[#efefef] w-full h-full z-10"></div>
					<img src="<?= get_template_directory_uri() ?>/images/index-mask.svg" class="max-w-none">
				</div>
				<div class="absolute bg-[#cadde5] w-full h-full right-0" id="index-mask-bg"></div>

				<div class="relative pl-[110px] pb-[552px] z-10 lg:pl-[35%] lg:pr-8 lg:pb-0">
					<div class="flex justify-end mr-[116px] lg:block lg:mr-0">
						<!-- <div class="">
							<div class="text-[#5b5b5b] text-[114px] leading-none mb-8">GALLERY</div>
							<div class="text-[#005188] text-[23px]">LIFE AND ART</div>
						</div> -->
						<div class="" data-r='{"y": 30}'><img src="<?= get_template_directory_uri() ?>/images/index-pic-3.jpg"></div>
					</div>
					<div class="flex mt-[194px] mr-[194px] lg:block lg:mr-0 lg:mt-5 lg:pb-[144px]">
						<div class="shrink-0" data-r='{"y": 30}' id="galleryChange"><img src="<?= get_template_directory_uri() ?>/images/index-pic-4.jpg"></div>
						<div class="hidden lg:block mt-5" data-r='{"y": 30}'><img src="<?= get_template_directory_uri() ?>/images/index-pic-5.jpg"></div>
						<div class="relative pl-[258px] mt-[76px] lg:pl-0">
							<div class="text-[#595757]" data-r='{"y": 30}'>
								<div class="text-[33px] tracking-[2px] mb-10 lg:text-[19px]">溫馨樸實的創作方式。</div>
								<div class="text-[18px] leading-[2.2] lg:text-[14px]">淳淳用創作紀錄生活中的點點滴滴，也學習去了解這些文化背景代表的意涵。透過兒時回憶和生活中的各種物件，能帶給大家共鳴與美好回憶。</div>
								<div class="mt-[70px] lg:text-right lg:mt-12"><a href="<?= home_url() ?>/gallery"><svg width="249.67" height="20.11" viewBox="0 0 249.67 20.11" class="arrow-hover lg:inline-block lg:max-w-[140px] lg:h-auto">
									<line y1="14.89" x2="249.67" y2="14.89" style="fill: none; stroke: #595757; stroke-miterlimit: 10; stroke-width: .79px;"/>
									<rect x="184.33" y="9.16" width="62.02" height="1.8" transform="translate(418.02 83.52) rotate(-162.75)" style="fill: #115992;"/>
								</svg></a></div>
							</div>
							<div class="absolute -bottom-[150px] lg:hidden" data-r='{"y": 30}'><img src="<?= get_template_directory_uri() ?>/images/index-pic-5.jpg"></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="relative mt-[452px] pb-[368px] xl:zoom-80 lg:mt-[94px] lg:pb-[92px]">
			<div class="flex pl-[110px] pr-[118px] lg:block lg:px-8">
				<div class="mr-[272px] lg:mr-0">
					<div class="">
						<div class="text-[#5b5b5b] text-[114px] leading-none mb-8 lg:text-[53px] lg:mb-1">NEWS</div>
						<div class="text-[#005188] text-[23px] lg:text-[15px]">OUR DESIGN</div>
					</div>
				</div>
				<div class="flex-auto mt-5 lg:mt-[52px]">
					<ul v-scope="{
			            posts: [
				            <?php foreach ($works->rows as $work) :
			           		$date = get_post_published_date($work->ID);
	    					$cat = get_post_category_name($work->ID, 'new_category');
				           	?>
					           	{
					            	date: `<?= $date ?>`,
					            	title: `<?= esc_html($work->post_title) ?>`,
					            	cat: `<?= esc_html($cat); ?>`,
					            	link: `<?= esc_url(get_permalink($work->ID)) ?>`,
					            },
				           	<?php endforeach; ?>
			            ]
			        }">
						<li v-for="(p,i) in posts"><a :href="p.link" class="flex justify-between items-center text-[#595757] px-8 pt-[58px] pb-9 border-b border-[#878787] transition-all duration-500 hover:bg-[#fffcdb] lg:px-0 lg:py-7" :class="{
							'border-t': i == 0
						}">
							<div class="flex items-center lg:block">
								<div class="font-num font-light text-[13px] mr-[110px] lg:flex lg:items-center lg:mb-3">
									<div class="">{{p.date}}</div>
									<div class="clip-cat shrink-0 inline-block tracking-wide text-white bg-[#088282] text-[13px] pl-4 pr-2 py-0 ml-2 hidden lg:block">{{p.cat}}</div>
								</div>
								<div class="text-[25px] pr-10 lg:text-[15px]">{{p.title}}</div>
							</div>
							<div class="clip-cat shrink-0 inline-block tracking-wide text-white bg-[#088282] py-1 pl-7 pr-3 lg:hidden">{{p.cat}}</div>
						</a></li>
					</ul>

					<div class="text-right mt-[70px]"><a href="<?= home_url() ?>/new" class="inline-block"><svg width="249.67" height="20.11" viewBox="0 0 249.67 20.11" class="arrow-hover lg:max-w-[140px] lg:h-auto">
						<line y1="14.89" x2="249.67" y2="14.89" style="fill: none; stroke: #595757; stroke-miterlimit: 10; stroke-width: .79px;"/>
						<rect x="184.33" y="9.16" width="62.02" height="1.8" transform="translate(418.02 83.52) rotate(-162.75)" style="fill: #115992;"/>
					</svg></a></div>
				</div>
			</div>
		</div>

		<div class="relative h-[200vh] lg:px-8 lg:h-auto" id="contact-change">
			<div class="sticky top-0 xl:zoom-80 lg:absolute lg:top-auto lg:bottom-[75vh]">
				<div class="absolute tf-x top-[25vh] z-10 ml-[220px] xl:top-[35vh] lg:hidden">
					<svg width="1251.04" height="634.81" viewBox="0 0 1251.04 634.81">
						<polyline points="0 512.35 1251.04 634.81 673.15 408.1 0 512.35" style="fill: #fffcdb;"/>
						<g>
							<polyline points="17.79 .33 550.91 3.18 694.41 94.43" style="fill: none; stroke: #115992; stroke-miterlimit: 10; stroke-width: .5px;" class="contact-line"/>
							<line x1="549.25" y1="5.86" x2="549.25" y2="93.62" style="fill: none; stroke: #115992; stroke-miterlimit: 10; stroke-width: .5px;" class="contact-line"/>
							<g>
								<line x1="362.25" y1="92.58" x2="365.53" y2="408.1" style="fill: none; stroke: #115992; stroke-miterlimit: 10; stroke-width: .5px;" class="contact-line"/>
								<polygon points="17.79 .33 17.79 512.35 365.53 408.1 694.41 408.1 694.41 94.43 362.25 92.58 17.79 .33" style="fill: none; stroke: #115992; stroke-miterlimit: 10; stroke-width: .5px;" class="contact-line"/>
							</g>
							<g>
								<line x1="560.32" y1="408.1" x2="625.52" y2="512.35" style="fill: none; stroke: #115992; stroke-miterlimit: 10; stroke-width: .5px;"/>
								<polyline points="17.79 512.35 625.52 512.35 694.41 408.1" style="fill: none; stroke: #115992; stroke-miterlimit: 10; stroke-width: .5px;"/>
							</g>
						</g>
					</svg>
					<div class="ball-items">
						<div class="ball-container absolute overflow-hidden top-0 left-0 w-[700px] h-[520px]">
							<div class="ball contact-ball absolute left-[292px] top-[184px] w-[146px] h-[146px] bg-[#115992] rounded-full"></div>
						</div>
					</div>
				</div>

				<div class="absolute top-[31vh] hidden lg:block">
					<svg width="310.23" height="249.22" viewBox="0 0 310.23 249.22">
						<g>
						<polyline points="112.59 147.07 0 249.22 289.97 147.2 309.73 117.6 111.57 147.07" style="fill: #fffcdb;"/>
						</g>
						<g>
						<g>
						<polyline points="113.12 .32 268.23 1.14 309.98 27.37" style="fill: none; opacity: .3; stroke: #115992; stroke-miterlimit: 10; stroke-width: 1px;" class="contact-line"/>
						<line x1="267.75" y1="1.92" x2="267.75" y2="27.14" style="fill: none; opacity: .3; stroke: #115992; stroke-miterlimit: 10; stroke-width: 1px;" class="contact-line"/>
						<g style="opacity: .3;">
						<line x1="213.34" y1="26.84" x2="214.29" y2="117.52" style="fill: none; stroke: #115992; stroke-miterlimit: 10; stroke-width: 1px;" class="contact-line"/>
						<polygon points="113.12 .32 113.12 147.48 214.29 117.52 309.98 117.52 309.98 27.37 213.34 26.84 113.12 .32" style="fill: none; stroke: #115992; stroke-miterlimit: 10; stroke-width: 1px;" class="contact-line"/>
						</g>
						<g style="opacity: .3;">
						<line x1="270.97" y1="117.52" x2="289.94" y2="147.48" style="fill: none; stroke: #115992; stroke-miterlimit: 10; stroke-width: 1px;" class="contact-line"/>
						<polyline points="113.12 147.48 289.94 147.48 309.98 117.52" style="fill: none; stroke: #115992; stroke-miterlimit: 10; stroke-width: 1px;" class="contact-line"/>
						</g>
						</g>
						</g>
					</svg>

					<div class="ball-items">
						<div class="ball-container absolute overflow-hidden top-0 right-0 w-[198px] h-[148px]">
							<div class="ball contact-ball absolute right-0 top-1 w-[24px] h-[24px] bg-[#115992] rounded-full"></div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="h-screen lg:h-auto lg:mb-28" id="indexChange">
				<div class="ml-[110px] xl:zoom-80 lg:ml-0">
					<div class="mb-[376px] lg:mb-[74px]">
						<div class="text text-[#5b5b5b] text-[114px] leading-none mb-8 lg:text-[53px] lg:mb-1">CONTACT</div>
						<div class="text text-[#005188] text-[23px] lg:text-[15px]">OUR DESIGN</div>
					</div>
					<div class="hidden lg:block lg:mb-16">
						<div class="text text-[#5b5b5b] text-[36px] tracking-wider mb-12 lg:text-[19px] lg:mb-4">一起想想，理想家的藍圖</div>
						<div class="text text-[#595757] text-[22px] text-justify tracking-wide lg:text-[14px]">
							歡迎聯繫我們，<br>了解更多理想住宅購買資訊，<br>讓我們幫助您實現家的夢想！
						</div>
					</div>
					<div class="">
						<nav class="text inline-block space-y-8 text-[25px] text-[#595757] lg:block">
							<a href="" class="fi-hover flex items-center pb-3 pr-9 chg-border group lg:pr-3 lg:pb-6">
								<div class="w-[132px] lg:w-[90px]"><svg width="85" height="67" viewBox="0 0 84.18 66.59" class="transition-all duration-500 group-hover:scale-110 lg:max-w-[50px] lg:h-auto">
								<circle cx="17.86" cy="17.86" r="17.36" style="fill: none; stroke-linecap: round; stroke-linejoin: round;" class="stroke-[#115992] stroke-chg-white"/>
								<circle cx="52.81" cy="35.21" r="31.37" class="fill-[#115992] fill-chg-white transition-all duration-300 group-hover:!fill-[#599cad]"/>
								<g>
								<path d="M52.4,34.35c0,.28,0,.57,0,.85,0,1.54-.01,3.07,0,4.61,0,.62-.23,.91-.86,.86-.24-.02-.49-.02-.73,0-.52,.03-.72-.21-.72-.72,0-3.15,.01-6.31,0-9.46,0-.52,.2-.68,.71-.73,.97-.09,1.65,.17,2.23,1.04,1.06,1.59,2.25,3.09,3.39,4.63,.19,.25,.39,.49,.75,.93,.07-.52,.14-.81,.15-1.1,.01-1.54,.05-3.07,0-4.61-.03-.95,.54-.87,1.16-.87,.59,0,1.11-.06,1.09,.84-.04,3.07-.03,6.14,0,9.22,0,.62-.22,.83-.85,.86-.86,.04-1.45-.19-1.96-.94-1.14-1.66-2.39-3.26-3.6-4.88-.16-.21-.33-.4-.5-.6-.09,.02-.17,.05-.26,.07Z" class="fill-[#efefef] fill-chg-blue transition-all duration-500 group-hover:!fill-white"/>
								<path d="M61.59,35.17c0-1.51,.02-3.02,0-4.53-.01-.6,.15-.89,.81-.87,1.86,.03,3.72,.03,5.58,0,.66-.01,.82,.27,.82,.87,0,1.35,.02,1.35-1.31,1.35-.94,0-1.89,.02-2.83,0-1-.02-.7,.7-.76,1.24-.06,.59,.16,.82,.77,.8,1.1-.04,2.21,0,3.32-.02,.59-.01,.85,.22,.81,.81-.01,.13,0,.27,0,.4q0,1.08-1.06,1.09c-1.02,0-2.05,.03-3.07,0-.87-.03-.75,.55-.76,1.08-.01,.54-.05,1.03,.76,1,1.1-.04,2.21,.01,3.32-.02,.58-.01,.88,.17,.82,.78,0,.05,0,.11,0,.16q.02,1.35-1.3,1.35c-1.67,0-3.34-.02-5.02,.01-.68,.01-.9-.24-.88-.9,.03-1.54,.01-3.07,.01-4.61Z" class="fill-[#efefef] fill-chg-blue transition-all duration-500 group-hover:!fill-white"/>
								<path d="M36.85,35.21c0-1.51,.03-3.02-.01-4.53-.02-.72,.26-.99,.94-.92,.19,.02,.38,.02,.57,0,.59-.05,.81,.21,.8,.81-.02,2.29,.01,4.58-.02,6.87,0,.69,.21,.97,.92,.94,1.05-.05,2.1,.03,3.15-.02,.77-.04,1.04,.27,.95,.99-.02,.19,0,.38,0,.57,.01,.5-.21,.75-.73,.75-1.97,0-3.93,0-5.9,0-.55,0-.68-.29-.67-.77,.01-1.56,0-3.13,0-4.69Z" class="fill-[#efefef] fill-chg-blue transition-all duration-500 group-hover:!fill-white"/>
								<path d="M45.9,35.2c0-1.51,.02-3.02-.01-4.53-.01-.65,.19-.97,.87-.9,.24,.02,.49,.01,.73,0,.52-.02,.71,.22,.71,.73-.01,3.13-.01,6.26,0,9.38,0,.54-.18,.77-.75,.79-1.55,.05-1.55,.07-1.55-1.51,0-1.32,0-2.64,0-3.96Z" class="fill-[#efefef] fill-chg-blue transition-all duration-500 group-hover:!fill-white"/>
								</g>
								</svg></div>
								<div class="w-[140px] text-center lg:text-[15px] lg:text-left lg:w-full">誠意即時通</div>
							</a>
							<a href="" class="fi-hover flex items-center pb-3 pr-9 chg-border group lg:pr-3 lg:pb-6">
								<div class="w-[132px] lg:w-[90px]"><svg width="91.54" height="74.93" viewBox="0 0 91.54 74.93" class="transition-all duration-500 group-hover:scale-110 lg:max-w-[50px] lg:h-auto">
									<path d="M91.04,32.99l-36.15,41.44S1.87,42.01,50.37,.5l40.67,32.49" style="fill: none; stroke-linecap: round; stroke-linejoin: round;" class="stroke-[#115992] stroke-chg-white"/>
									<path d="M0,32.02L23.54,5.04s34.52,21.11,2.94,48.14L0,32.02" class="fill-[#115992] fill-chg-white transition-all duration-300 group-hover:!fill-[#599cad]"/>
									<path d="M22.79,26.48c.04,.17,.07,.31,.1,.45,.11,.56,.27,1.11,.45,1.65,.35,1.06,.74,2.1,1.22,3.1,.36,.76,.72,1.52,1.08,2.28,.08,.16,.17,.32,.26,.49,.06-.01,.11-.02,.16-.03,.23-.08,.45-.17,.68-.24,.27-.09,.54-.17,.82-.24,.2-.05,.4-.08,.61-.09,.15-.01,.31,0,.46,.02,.35,.05,.6,.24,.78,.54,.54,.93,1.09,1.85,1.64,2.77,.12,.2,.24,.4,.36,.6,.15,.24,.25,.5,.28,.78,.04,.36-.03,.68-.25,.97-.31,.42-.64,.81-1.03,1.16-.3,.27-.63,.5-1,.67-.81,.39-1.64,.45-2.5,.22-.76-.2-1.43-.58-2.05-1.05-.66-.5-1.24-1.09-1.77-1.72-.76-.91-1.42-1.89-2-2.93-1.42-2.54-2.44-5.23-3-8.09-.21-1.09-.34-2.19-.33-3.31,0-.71,.07-1.42,.23-2.11,.14-.59,.34-1.16,.66-1.69,.51-.84,1.23-1.4,2.18-1.64,.62-.16,1.24-.17,1.87-.1,.2,.02,.39,.06,.58,.09,.37,.06,.67,.25,.88,.56,.15,.22,.25,.46,.31,.72,.29,1.28,.57,2.55,.86,3.83,.04,.16,.05,.32,.02,.48-.03,.2-.13,.37-.26,.53-.11,.14-.25,.26-.4,.37-.22,.16-.45,.3-.69,.42-.31,.15-.62,.29-.94,.43-.09,.04-.19,.08-.28,.12Z" class="fill-[#efefef] fill-chg-blue transition-all duration-500 group-hover:!fill-white"/>
								</svg></div>
								<div class="w-[140px] text-center lg:text-[15px] lg:text-left lg:w-full">預約賞屋</div>
							</a>
							<a href="" class="fi-hover flex items-center pb-3 pr-9 chg-border group lg:pr-3 lg:pb-6">
								<div class="w-[132px] lg:w-[90px]"><svg width="73.71" height="73.67" viewBox="0 0 73.71 73.67" class="transition-all duration-500 group-hover:scale-110 lg:max-w-[50px] lg:h-auto">
									<path d="M0,33.05s0,.02,0,.04c0,17.47,14.16,31.63,31.63,31.63s31.63-14.16,31.63-31.63c0-.01,0-.02,0-.04H0Z" style="fill: none; stroke-linecap: round; stroke-linejoin: round;" class="stroke-[#115992] stroke-chg-white"/>
									<path d="M73.71,36.83C73.71,16.5,57.24,.02,36.91,0V73.67c20.32-.02,36.79-16.5,36.79-36.83Z" class="fill-[#115992] fill-chg-white transition-all duration-300 group-hover:!fill-[#599cad]"/>
									<path d="M61.46,25.34l.12,3.69s-3.99-.95-4.2,1.7v3.28h4.08l-.77,4.2h-3.37v10.42h-4.59v-10.38h-3.69v-4.23h3.78s-2.35-10.95,8.64-8.68Z" class="fill-[#efefef] fill-chg-blue transition-all duration-500 group-hover:!fill-white"/>
								</svg></div>
								<div class="w-[140px] text-center lg:text-[15px] lg:text-left lg:w-full">購屋粉絲團</div>
							</a>
						</nav>
					</div>
				</div>
				<div class="absolute max-w-[462px] top-[250px] right-32 xl:zoom-80 xl:right-20 lg:hidden">
					<div class="text text-[#5b5b5b] text-[36px] tracking-wider mb-12 lg:text-[19px]">一起想想，理想家的藍圖</div>
					<div class="text text-[#595757] text-[22px] text-justify tracking-wide lg:text-[14px]">歡迎聯繫我們，了解更多理想住宅購買資訊，讓我們幫助您實現家的夢想！</div>
				</div>
			</div>
			<div class="relative h-screen pt-[426px] pl-[110px] pb-[100px] lg:pl-0 lg:pt-0 lg:h-auto lg:pb-10">
				<div class="h-full text-white xl:zoom-80">
					<div class="mb-20 lg:mb-9"><img src="<?= get_template_directory_uri() ?>/images/footer-logo.svg" class="lg:hidden"><img src="<?= get_template_directory_uri() ?>/images/footer-logo-mobile.svg" class="hidden lg:block"></div>
					<ul class="mb-12 lg:mb-10">
						<li class="flex items-center">
							<div class="text-[23px] font-bold font-en mr-8 lg:text-[14px]">T</div>
							<div class="font-num text-[28px] font-medium lg:text-[17px]">04-2252-5619</div>
						</li>
						<li class="flex items-center">
							<div class="text-[23px] font-bold font-en mr-8 lg:text-[14px]">E</div>
							<div class="font-en text-[20px] lg:text-[14px]">SERVICE@CHEERINGZU.COM</div>
						</li>
						<li class="flex items-center">
							<div class="text-[23px] font-bold font-en mr-8 lg:text-[14px]">A</div>
							<div class="text-[18px] tracking-wide lg:text-[14px]">台中市西屯區市政北一路355號</div>
						</li>
					</ul>
					<nav class="flex items-center space-x-5 lg:space-x-3 lg:mb-[360px]">
						<a href="" class="group transition-all duration-500 hover:scale-110"><svg width="43.46" height="43.46" viewBox="0 0 43.46 43.46" class="lg:max-w-[34px] lg:h-auto">
							<circle cx="21.73" cy="21.73" r="21.73" class="fill-white transition-all duration-300 group-hover:fill-[#599cad]"/>
							<path d="M15.43,19.15h2.89s-1.11-8.5,5.64-8.59c0,0,3.19-.14,4.08,.29v3.82s-4.3-.94-4.76,1.86l.05,2.76,4.47-.14-.71,4.2h-3.73v9.51s-4.59,.31-5.08-.43v-8.93l-2.84-.06v-4.3Z" class="fill-[#115992] transition-all duration-300 group-hover:fill-white"/>
						</svg></a>
						<a href="" class="group transition-all duration-500 hover:scale-110"><svg width="43.45" height="43.45" viewBox="0 0 43.45 43.45" class="lg:max-w-[34px] lg:h-auto">
							<circle cx="21.73" cy="21.73" r="21.73" class="fill-white transition-all duration-300 group-hover:fill-[#599cad]"/>
							<g>
							<path d="M21.89,20.93c0,.26,0,.52,0,.78,0,1.41-.01,2.81,0,4.22,0,.57-.21,.83-.79,.79-.22-.02-.44-.01-.67,0-.48,.03-.66-.19-.66-.66,0-2.89,.01-5.78,0-8.66,0-.48,.18-.62,.65-.67,.89-.08,1.52,.16,2.04,.95,.97,1.46,2.06,2.83,3.11,4.24,.17,.23,.36,.45,.69,.85,.07-.47,.13-.74,.13-1.01,.01-1.41,.04-2.82,0-4.22-.03-.87,.5-.8,1.06-.8,.54,0,1.01-.05,1,.77-.04,2.81-.02,5.63,0,8.44,0,.57-.2,.76-.78,.79-.79,.04-1.33-.18-1.8-.86-1.05-1.52-2.19-2.98-3.29-4.47-.14-.19-.31-.37-.46-.55-.08,.02-.16,.05-.24,.07Z" class="fill-[#115992] transition-all duration-300 group-hover:fill-white"/>
							<path d="M30.31,21.68c0-1.38,.02-2.77,0-4.15-.01-.55,.13-.81,.74-.8,1.7,.03,3.41,.03,5.11,0,.61-.01,.75,.25,.75,.8,0,1.24,.01,1.24-1.2,1.24-.86,0-1.73,.02-2.59,0-.91-.02-.65,.64-.7,1.14-.06,.54,.15,.75,.71,.73,1.01-.04,2.03,0,3.04-.02,.54-.01,.78,.2,.74,.74-.01,.12,0,.25,0,.37q0,.99-.97,1c-.94,0-1.88,.03-2.82,0-.8-.03-.68,.5-.69,.99-.01,.49-.04,.94,.69,.91,1.01-.04,2.03,0,3.04-.02,.53-.01,.81,.16,.75,.72,0,.05,0,.1,0,.15q.02,1.24-1.19,1.24c-1.53,0-3.06-.02-4.59,.01-.62,.01-.82-.22-.81-.82,.03-1.41,0-2.82,0-4.22Z" class="fill-[#115992] transition-all duration-300 group-hover:fill-white"/>
							<path d="M7.64,21.72c0-1.38,.03-2.76-.01-4.15-.02-.66,.24-.91,.87-.84,.17,.02,.35,.02,.52,0,.54-.04,.74,.19,.73,.74-.02,2.1,.01,4.2-.02,6.29,0,.64,.19,.89,.85,.86,.96-.04,1.93,.03,2.89-.02,.7-.04,.95,.24,.87,.91-.02,.17,0,.35,0,.52,.01,.46-.2,.68-.66,.68-1.8,0-3.6,0-5.4,0-.51,0-.62-.27-.62-.7,.01-1.43,0-2.86,0-4.29Z" class="fill-[#115992] transition-all duration-300 group-hover:fill-white"/>
							<path d="M15.93,21.71c0-1.38,.02-2.77,0-4.15-.01-.6,.17-.89,.8-.83,.22,.02,.44,.01,.67,0,.48-.02,.65,.2,.65,.67-.01,2.86-.01,5.73,0,8.59,0,.49-.16,.71-.68,.72-1.42,.04-1.42,.06-1.42-1.38,0-1.21,0-2.42,0-3.63Z" class="fill-[#115992] transition-all duration-300 group-hover:fill-white"/>
							</g>
						</svg></a>
						<a href="" class="group transition-all duration-500 hover:scale-110"><svg width="43.45" height="43.45" viewBox="0 0 43.45 43.45" class="lg:max-w-[34px] lg:h-auto">
							<circle cx="21.73" cy="21.73" r="21.73" class="fill-white transition-all duration-300 group-hover:fill-[#599cad]"/>
							<path d="M18.52,18.87c.12,.17,.23,.31,.33,.46,.39,.57,.84,1.11,1.3,1.63,.9,1.02,1.84,1.99,2.86,2.88,.77,.67,1.54,1.35,2.31,2.03,.17,.15,.35,.28,.53,.42,.06-.04,.12-.07,.16-.11,.22-.2,.43-.41,.65-.6,.26-.23,.52-.46,.8-.67,.2-.15,.41-.28,.63-.4,.16-.09,.34-.15,.52-.2,.41-.11,.79-.03,1.14,.23,1.06,.77,2.12,1.54,3.18,2.31,.23,.17,.46,.34,.69,.5,.28,.2,.52,.44,.69,.74,.22,.38,.29,.78,.19,1.21-.14,.62-.33,1.22-.6,1.8-.21,.44-.47,.86-.79,1.23-.71,.82-1.62,1.29-2.69,1.45-.95,.14-1.88,.04-2.81-.19-.98-.24-1.91-.62-2.82-1.07-1.29-.65-2.5-1.43-3.65-2.31-2.82-2.15-5.25-4.68-7.26-7.6-.77-1.12-1.44-2.29-1.97-3.54-.34-.8-.61-1.62-.76-2.47-.13-.73-.18-1.47-.08-2.21,.17-1.18,.7-2.16,1.65-2.89,.61-.48,1.31-.79,2.05-1.01,.23-.07,.46-.12,.7-.18,.45-.11,.87-.04,1.26,.2,.28,.17,.5,.39,.7,.66,.94,1.29,1.87,2.58,2.81,3.87,.12,.16,.21,.33,.26,.52,.06,.24,.03,.48-.04,.71-.06,.22-.15,.42-.27,.61-.17,.29-.36,.55-.57,.8-.28,.32-.56,.62-.84,.93-.08,.09-.17,.18-.25,.27Z" class="fill-[#115992] transition-all duration-300 group-hover:fill-white"/>
						</svg></a>
					</nav>
					<div class="tracking-normal mt-10">
						<div class="text-sm lg:text-xs">©CHeerING ZU RIGHTS RESERVED</div>
						<div class="text-xs opacity-40 zoom-90">SITE BY <a href="javascript:;">很好設計 GOODS DESIGN</a></div>
					</div>
				</div>
				<div class="absolute tf-x top-[25vh] z-10 ml-[230px] opacity-0 xl:zoom-80 lg:hidden">
					<svg width="1251.04" height="634.81" viewBox="0 0 1251.04 634.81">
						<polyline points="0 512.35 1251.04 634.81 673.15 408.1 0 512.35" style="fill: #fffcdb;"/>
						<g>
							<polyline points="17.79 .33 550.91 3.18 694.41 94.43" style="fill: none; stroke: #115992; stroke-miterlimit: 10; stroke-width: .5px;" class="contact-line"/>
							<line x1="549.25" y1="5.86" x2="549.25" y2="93.62" style="fill: none; stroke: #115992; stroke-miterlimit: 10; stroke-width: .5px;" class="contact-line"/>
							<g>
								<line x1="362.25" y1="92.58" x2="365.53" y2="408.1" style="fill: none; stroke: #115992; stroke-miterlimit: 10; stroke-width: .5px;" class="contact-line"/>
								<polygon points="17.79 .33 17.79 512.35 365.53 408.1 694.41 408.1 694.41 94.43 362.25 92.58 17.79 .33" style="fill: none; stroke: #115992; stroke-miterlimit: 10; stroke-width: .5px;" class="contact-line"/>
							</g>
							<circle cx="365.53" cy="250.34" r="73.14" style="fill: #115992;" class="contact-ball"/>
							<g>
								<line x1="560.32" y1="408.1" x2="625.52" y2="512.35" style="fill: none; stroke: #115992; stroke-miterlimit: 10; stroke-width: .5px;"/>
								<polyline points="17.79 512.35 625.52 512.35 694.41 408.1" style="fill: none; stroke: #115992; stroke-miterlimit: 10; stroke-width: .5px;"/>
							</g>
						</g>
					</svg>
				</div>
				<div class="absolute right-20 bottom-[100px] backtotop z-10 xl:zoom-80 lg:-right-3 lg:bottom-5"><img src="<?= get_template_directory_uri() ?>/images/backtotop.svg" class="lg:max-w-[36px]"></div>
			</div>
		</div>
	</section>

	<!-- <?php include 'footer.php'; ?> -->
</body>

<?php include 'script.php'; ?>
</html>

<script>
gsap.delayedCall(.1, function () {
	if(device != 'mobile'){

		var maskAnim = gsap.timeline({
			scrollTrigger: {
				trigger: "#index-mask",
				start: 'top 100%',
				end: '75% 100%',
				scrub: .2,
				// markers: true,
			}
		})

		maskAnim.fromTo("#index-mask", {
			width: "50%",
		},{
			width: "100%",
			ease: "none",
		}, "<");
		maskAnim.fromTo("#index-mask-bg", {
			width: "50%",
		},{
			width: "100%",
			ease: "none",
		}, "<");

		var maskAnimBg = gsap.timeline({
			scrollTrigger: {
				trigger: "#index-mask",
				start: 'top 100%',
				end: '75% 100%',
				scrub: .2,
				// markers: true,
			}
		})
	
		maskAnimBg.fromTo("#mask-up", {
			width: "0%",
		},{
			duration: 3,
			width: "0%",
			ease: "none",
		}, "<");

	}
})


$(function(){
	gsap.delayedCall(1, function () {
		$(".loading").fadeOut(1000)
	})
})

$(document).ready(function () {
	if(device == 'mobile'){
    	var videos = ['#videoPlayer4', '#videoPlayer5', '#videoPlayer6'];
	}else{
    	var videos = ['#videoPlayer1', '#videoPlayer2', '#videoPlayer3'];
	}

    var durations = [9, 8, 8]; // 每個影片的播放秒數
    var currentVideo = 0;

    function playNextVideo() {
        var currentElement = $(videos[currentVideo]);
        var nextIndex = (currentVideo + 1) % videos.length;
        var nextElement = $(videos[nextIndex]);

        // 當前影片淡出，下一個影片淡入
        currentElement.addClass('fading-out');
        gsap.to(currentElement, {
            opacity: 0,
            duration: 1,
            onComplete: function () {
                currentElement.removeClass('active fading-out'); // 完全淡出後重置
                currentElement[0].pause();
                currentElement[0].currentTime = 0;
            }
        });

        // 播放並淡入下一個影片
        nextElement.addClass('active');
        nextElement[0].play();
        gsap.to(nextElement, {
            opacity: 1,
            duration: 1,
            delay: 0,
            onComplete: function () {
                // 設置延遲時間後播放下一影片
                gsap.delayedCall(durations[nextIndex], playNextVideo);
            }
        });

        // 更新影片索引
        currentVideo = nextIndex;
    }

    // 初始化所有影片為透明
    videos.forEach(function (videoSelector) {
        gsap.set($(videoSelector), { opacity: 0 });
    });

    // 初始化第一個影片
    var firstVideo = $(videos[currentVideo]);
    firstVideo.addClass('active'); // 設定第一個影片為最上層
    firstVideo[0].play();
    gsap.to(firstVideo, {
        opacity: 1,
        duration: 1,
        onComplete: function () {
            // 設置延遲時間後播放下一影片
            gsap.delayedCall(durations[currentVideo], playNextVideo);
        }
    });
});


// var $autoslider = $(".fix-bg").flickity({
//     "draggable": false,
//     "prevNextButtons": false,
//     "pageDots": false,
//     "wrapAround": true,
//     "imagesLoaded": true,
//     "fade": true,
//     "cellAlign": "center",
//     "adaptiveHeight": true,
//     "arrowShape": "",
//     "autoPlay": 10000,
//     "pauseAutoPlayOnHover": false
// });


$("body").on('mouseleave, click', function(e) { 
    // $autoslider.flickity('playPlayer')
})

function projectsListHandler(el){	
	// var _flick_total = $("ul", el).length
	var $carousel = $(".projectsList", el).flickity({
        "prevNextButtons": false,
        "pageDots": false,
        "wrapAround": true,
        "imagesLoaded": true,
        "fade": true,
        "cellAlign": "center",
        "adaptiveHeight": true,
        "arrowShape": "",
        "autoPlay": 4000,
        "pauseAutoPlayOnHover": false
    });

    var flkty = $carousel.data('flickity');
	var cellElements = $carousel.flickity('getCellElements');

	$(".projects-dots li").first().addClass("current")
	$(".projects-dots li").on("click", function () {
		$carousel.flickity('select', $(this).index())
	})
	$carousel.on( 'change.flickity', function( event, index ) {
		$(".projects-dots li").eq(index).addClass("current").siblings().removeClass("current")
	});

	$(".projects-prev", el).on("click", function(){
		$carousel.flickity('previous');
	});
	$(".projects-next", el).on("click", function(){
		$carousel.flickity('next');
	});
}
function designerHandler(el){
	// var _flick_total = $("ul", el).length
	var $carousel = $(".designerList", el).flickity({
        "prevNextButtons": false,
        "pageDots": false,
        "wrapAround": true,
        "imagesLoaded": true,
        "fade": true,
        "cellAlign": "center",
        "adaptiveHeight": true,
        "arrowShape": "",
        "autoPlay": 4000,
        "pauseAutoPlayOnHover": false
    });

    var flkty = $carousel.data('flickity');
	var cellElements = $carousel.flickity('getCellElements');

	$(".in-dots li").first().addClass("current")
	$(".in-dots li").on("click", function () {
		$carousel.flickity('select', $(this).index())
	})

	$(".designer-prev").on("click", function () {
		$carousel.flickity('previous');
	})
	$(".designer-next").on("click", function () {
		$carousel.flickity('next');
	})

	var $pics = $(".designerPics").flickity({
		"draggable": false,
        "prevNextButtons": false,
        "pageDots": false,
        "wrapAround": true,
        "imagesLoaded": true,
        "fade": true,
        "cellAlign": "center",
        "adaptiveHeight": true,
        "arrowShape": "",
        "autoPlay": false,
        "pauseAutoPlayOnHover": false
    });

    var $Contents = $(".designerContent").flickity({
		"draggable": false,
        "prevNextButtons": false,
        "pageDots": false,
        "wrapAround": true,
        "imagesLoaded": true,
        "fade": true,
        "cellAlign": "center",
        "adaptiveHeight": true,
        "arrowShape": "",
        "autoPlay": false,
        "pauseAutoPlayOnHover": false
    });

	$carousel.on( 'change.flickity', function( event, index ) {
		$pics.flickity('select', index);
		$Contents.flickity('select', index);
		$(".in-dots li").eq(index).addClass("current").siblings().removeClass("current")
	});
}

$(".kv-text").ryderCool({
	hook: 0.9,
	enter(el){
		gsap.delayedCall(1, function () {
			$(el).addClass("start")
		})
		// var _video = $('#logo-move')[0]
		// _video.play()

		// $(_video).on('ended', function() {
		// 	$(el).addClass("start")
	    // });

		// $(el).addClass("start")
		// gsap.to($("#indexScroll-bg"), {
		// 	height: "0%",
		// 	duration: 2,
		// 	ease: 'expo.inOut',
		// })
	}
})

ScrollTrigger.create({
    trigger: '#indexScroll-bg',
    start: 'top 75%',
    end: 'top 50%',
    // markers: true,
    onEnter: (self) => {
    	gsap.to($("#indexScroll-bg"), {
			height: "0%",
			duration: 2,
			ease: 'power1.inOut',
		})
    },
});


setTimeout( () => {
	if(device == 'mobile'){
		// ScrollTrigger.create({
		//     trigger: '#galleryAnchor',
		//     start: 'top 25%',
		//     end: 'bottom 75%',
		//     pin: "#galleryItem-mobile",
		//     markers: true,
		// });
	}else{
		ScrollTrigger.create({
		    trigger: '#galleryAnchor',
		    start: 'top 25%',
		    end: 'bottom 75%',
		    pin: "#galleryItem",
		    // markers: true,
		    onToggle: (self) => {

		    },
		    onUpdate: (self) => {
		        
		    }
		});
	}
	ScrollTrigger.create({
	    trigger: '#galleryChange',
	    start: 'top 35%',
	    end: 'bottom 35%',
	    // markers: true,
	    onToggle: (self) => {
	    	if(self.isActive){
	    		$("#galleryItem .item-1, #galleryItem .item-2").addClass("text-white")
	    	}else{
	    		$("#galleryItem .item-1, #galleryItem .item-2").removeClass("text-white")
	    	}
	    },
	    onUpdate: (self) => {
	        
	    }
	});

}, 100)



var contactAnim = gsap.timeline({
	scrollTrigger: {
		trigger: "#contact-change",
		start: '75% 75%',
		end: '75% 75%',
		scrub: .5,
		// markers: true,
		onEnter: (self) => {
    		$("#top-logo").addClass("is-change")
    		$(".hamburger").addClass("is-change")

    		$(".fi-hover").addClass("is-change")
	    },
	    onEnterBack: (self) => {
    		$("#top-logo").removeClass("is-change")
    		$(".hamburger").removeClass("is-change")

    		$(".fi-hover").removeClass("is-change")
	    },
	}
})
contactAnim.fromTo("#contact-change", {
	backgroundColor: '#efefef',
},{
	backgroundColor: '#115992',
	duration: 1,
	ease: "none",
}, "<");
contactAnim.fromTo(".contact-ball", {
	backgroundColor: '#115992',
},{
	backgroundColor: '#599cad',
	duration: 1,
	ease: "none",
}, "<");
contactAnim.fromTo(".contact-line", {
	stroke: '#115992',
},{
	stroke: '#ffffff',
	duration: 1,
	ease: "none",
}, "<");
contactAnim.to("#indexChange .text", {
	color: '#fff',
	duration: 1,
	ease: "none",
}, "<");
contactAnim.to("#indexChange .fill-chg-white", {
	fill: '#fff',
	duration: 1,
	ease: "none",
}, "<");
contactAnim.to("#indexChange .fill-chg-blue", {
	fill: '#115992',
	duration: 1,
	ease: "none",
}, "<");
contactAnim.to("#indexChange .stroke-chg-white", {
	stroke: '#fff',
	duration: 1,
	ease: "none",
}, "<");
contactAnim.to("#indexChange .chg-border", {
	css:{
		borderBottomColor:"#fff"
	},
	duration: 1,
	ease: "none",
}, "<");


if(device != 'mobile'){
	var $w = new SplitText(".kv-item")
	var kvTtlAnim = gsap.timeline({
		scrollTrigger: {
			trigger: "#indexScroll-start",
			start: 'top 50%',
			end:"bottom 0%",
			scrub: true,
			// markers: true,
		}
	});
	kvTtlAnim.fromTo(".kv-item div", {
		transform:"rotateX(0deg)",
	},{
		transform:"rotateX(-180deg) translateY(0%)",
		duration:1,
		ease:"none",
	}, "<");
}


// kvTtlAnim.fromTo(".kv-item div:nth-of-type(1)", {
// 	transform:"rotateX(0deg)",
// },{
// 	transform:"rotateX(-180deg) translateY(90%)",
// 	duration:1,
// 	ease:"none",
// }, "<");
// kvTtlAnim.fromTo(".kv-item div:nth-of-type(2)", {
// 	transform:"rotateX(0deg)",
// },{
// 	transform:"rotateX(-180deg) translateY(60%)",
// 	duration:1.2,
// 	ease:"none",
// }, "<");
// kvTtlAnim.fromTo(".kv-item div:nth-of-type(3)", {
// 	transform:"rotateX(0deg)",
// },{
// 	transform:"rotateX(-180deg) translateY(30%)",
// 	duration:1.4,
// 	ease:"none",
// }, "<");
// kvTtlAnim.fromTo(".kv-item div:nth-of-type(4)", {
// 	transform:"rotateX(0deg)",
// },{
// 	transform:"rotateX(-180deg) translateY(0%)",
// 	duration:1.6,
// 	ease:"none",
// }, "<");
// kvTtlAnim.fromTo(".kv-item div:nth-of-type(5)", {
// 	transform:"rotateX(0deg)",
// },{
// 	transform:"rotateX(-180deg) translateY(30%)",
// 	duration:1.4,
// 	ease:"none",
// }, "<");
// kvTtlAnim.fromTo(".kv-item div:nth-of-type(6)", {
// 	transform:"rotateX(0deg)",
// },{
// 	transform:"rotateX(-180deg) translateY(60%)",
// 	duration:1.2,
// 	ease:"none",
// }, "<");
// kvTtlAnim.fromTo(".kv-item div:nth-of-type(7)", {
// 	transform:"rotateX(0deg)",
// },{
// 	transform:"rotateX(-180deg) translateY(90%)",
// 	duration:1,
// 	ease:"none",
// }, "<");







// $(document).ready(function() {
// var $cursor = $('.custom-cursor');
// var mouseX = 0, mouseY = 0;
// var lastX = 0, lastY = 0, speedX = 0, speedY = 0;
// var stretchFactor = 1; // 拉伸因子

// // 初始化游标的位置和状态
// gsap.set($cursor, { xPercent: -50, yPercent: -50 });

// // 监听鼠标移动事件
// $(document).mousemove(function(e) {
// mouseX = e.pageX;
// mouseY = e.pageY;

// // 计算鼠标移动的速度
// speedX = Math.abs(mouseX - lastX);
// speedY = Math.abs(mouseY - lastY);

// // 更新上一次鼠标的位置
// lastX = mouseX;
// lastY = mouseY;

// // 调整拉伸效果，使其更加明显
// stretchFactor = Math.min(4, Math.max(1, speedX / 20)); // 控制拉伸比例，范围1到4倍

// gsap.to($cursor, {
// x: mouseX,
// y: mouseY,
// width: 20 * stretchFactor,  // 增大宽度
// height: 20 / stretchFactor, // 高度减小
// duration: 0.8,
// ease: "power2.out"
// });
// });

// // 鼠标进入按钮或链接时，改变游标大小和颜色
// $('a, button').on('mouseenter', function() {
// gsap.to($cursor, {
// scale: 2,
// backgroundColor: 'rgba(255, 0, 0, 0.7)',
// duration: 0.3,
// ease: "power2.out"
// });
// });

// // 鼠标离开按钮或链接时，恢复游标样式
// $('a, button').on('mouseleave', function() {
// gsap.to($cursor, {
// scale: 1,
// backgroundColor: 'rgba(0, 0, 0, 0.7)',
// duration: 0.3,
// ease: "power2.out"
// });
// });
// });

// $(document).ready(function() { 
//     var $cursor = $('.custom-cursor');
//     var mouseX = 0, mouseY = 0;
//     var lastX = 0, lastY = 0, speedX = 0, speedY = 0;
//     var stretchFactor = 1; // 拉伸因子

//     // 初始化游标位置
//     gsap.set($cursor, { xPercent: -50, yPercent: -50 });

//     // 监听鼠标移动事件
//     $(document).mousemove(function(e) {
//         // 使用 clientX 和 clientY 获取鼠标相对于视口的坐标
//         mouseX = e.clientX;
//         mouseY = e.clientY;

//         // 计算鼠标移动的速度
//         speedX = Math.abs(mouseX - lastX);
//         speedY = Math.abs(mouseY - lastY);

//         // 更新上一次鼠标的位置
//         lastX = mouseX;
//         lastY = mouseY;

//         // 调整拉伸效果
//         stretchFactor = Math.min(3, Math.max(1, speedX / 20)); // 控制拉伸比例，范围 1 到 3 倍

//         // 更新游标位置和拉伸效果
//         gsap.to($cursor, {
//             x: mouseX,
//             y: mouseY,  // 不再添加滚动偏移，保持与鼠标同步
//             width: 20 * stretchFactor,  // 宽度基于速度拉伸
//             height: 20 / stretchFactor, // 高度与宽度成反比缩小
//             duration: 0.8,
//             ease: "power2.out"
//         });
//     });

//     // 鼠标进入按钮或链接时，改变游标大小和颜色
//     $('a, button').on('mouseenter', function() {
//         mouseMore()
//     });

//     // 鼠标离开按钮或链接时，恢复游标样式
//     $('a, button').on('mouseleave', function() {
//         gsap.to($cursor, {
//             scale: 1,
//             backgroundColor: '#599cad',
//             duration: 0.3,
//             ease: "power2.out"
//         });
//     });


//     function mouseMore() {
//     	gsap.to($cursor, {
//             scale: 2,
//             backgroundColor: 'rgba(255, 0, 0, 0.7)',
//             duration: 0.3,
//             ease: "power2.out"
//         });
//     }
// });
</script>