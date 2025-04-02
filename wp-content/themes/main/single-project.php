<?php
// 獲取當前文章相關資料
$post_id = get_the_ID();

$title = get_the_title($post_id); // 文章標題
$date = get_post_published_date($post_id); // 發布日期

$pods = pods('project', $post_id); // 取得 Pods 物件
$slider1 = $pods->field('project_slider1'); // 取得 "project_slider1" 圖片欄位
$slider2 = $pods->field('project_slider2'); // 取得 "project_slider2" 圖片欄位
$file3 = $pods->field('project_file3'); // 取得 "project_slider2" 圖片欄位

$project_group_title = $pods->field('project_group_title'); // 取得 "project_group_title" 欄位
$project_target_title = $pods->field('project_target_title'); // 取得 "project_target_title" 欄位
$project_std_title = $pods->field('project_std_title'); // 取得 "project_std_title" 欄位
?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body class="bg-[#efefef] lg:bg-white">
	<?php include 'topmenu.php'; ?>

	<div class="relative flex lg:block lg:mt-28">
		<div class="sticky top-0 h-screen w-[45.521vw] shrink-0 lg:relative lg:w-full lg:h-[60vh]" style="background: url('<?= esc_url(get_image_url($post_id, 'project_file0')); ?>') center center / cover">
			<div class="absolute left-8 bottom-9 z-10 hidden lg:block">
				<div class="text-[13px] text-[#005188] font-en"><?= esc_html($pods->field('project_en')) ?></div>
				<div class="text-[26px] text-[#5b5b5b] tracking-widest"><?= esc_html($pods->field('project_ch')) ?></div>
			</div>
			<div class="absolute w-full bottom-0 bg-gradient-to-t from-white opacity-90 h-[30vh] hidden lg:block"></div>
		</div>
		<div class="px-[155px] pt-[352px] pb-[198px] xl:zoom-80 lg:px-8 lg:pt-[58px] lg:pb-0">
			<div class="mb-[500px] lg:mb-[140px]">
				<div class="lg:hidden">
					<div class="text-[30px] text-[#005188] font-en"><?= esc_html($pods->field('project_en')) ?></div>
					<div class="text-[80px] text-[#5b5b5b] tracking-widest mb-[238px]"><?= esc_html($pods->field('project_ch')) ?></div>
				</div>
				<div class="text-[28px] text-[#595757] tracking-wide lg:text-[21px]">
					<?= wp_kses_post(nl2br($pods->field('project_data1'))) ?>
				</div>
			</div>

			<div class="">
				<div class="text-[30px] text-[#005188] font-en mb-[60px] lg:text-[15px] lg:mb-4">DETAIL</div>
				<ul v-scope="{
		            posts: [{
		            	title: `基地位置`,
		            	content: `<?= esc_html($pods->field('project_data2')) ?>`,
		            }, {
		            	title: `基地面積`,
		            	content: `<?= esc_html($pods->field('project_data3')) ?>`,
		            },{
		            	title: `房數規劃`,
		            	content: `<?= esc_html($pods->field('project_data4')) ?>`,
		            },{
		            	title: `規劃層數`,
		            	content: `<?= esc_html($pods->field('project_data5')) ?>`,
		            },{
		            	title: `結構工程`,
		            	content: `<?= esc_html($pods->field('project_data6')) ?>`,
		            }]
		        }" class="grid grid-cols-3 gap-y-[108px] gap-x-20 mb-[195px] lg:block lg:mb-[58px]">
					<li v-for="(p,i) in posts" class="text-[#595757] tracking-normal lg:flex lg:items-center lg:space-y-2">
						<div class="text-[19px] font-bold mb-4 lg:text-[14px] lg:mb-0 lg:mr-7">{{p.title}}</div>
						<div class="text-[18px] lg:text-[14px]">{{p.content}}</div>
					</li>
				</ul>
			</div>
			<div class="">
				<div class="text-[30px] text-[#005188] font-en mb-10 lg:text-[15px] lg:mb-4">DESIGN</div>
				<div class="text-[18px] text-[#595757] tracking-normal leading-[2.2] text-justify lg:text-[14px]"><?= wp_kses_post(nl2br($pods->field('project_data7'))) ?></div>
			</div>
		</div>
	</div>

	<div class="border-b border-[#595757] mt-[140px] mb-[86px] mx-[102px] lg:my-20 lg:mx-8 hidden lg:block"></div>

	<div class="mt-[410px] mb-[246px] xl:zoom-80 lg:mb-20 lg:mt-20">
		<div class="flex justify-between px-32 lg:block lg:px-8">
			<div class="max-w-[530px] lg:max-w-full lg:mb-20">
				<div class="text-[#5b5b5b]">
					<div class="text-[114px] font-en leading-none mb-[70px] lg:text-[53px] lg:mb-10"><?= esc_html($pods->field('project_data8')) ?></div>
					<div class="text-[32px] tracking-wide mb-7 lg:text-[19px] lg:mb-4"><?= esc_html($pods->field('project_data9')) ?></div>
				</div>
				<div class="text-[18px] tracking-normal leading-[2.2] text-justify lg:text-[14px]"><?= wp_kses_post(nl2br($pods->field('project_data10'))) ?></div>
			</div>
			<div class="lg:pl-[15vh]"><img src="<?= esc_url(get_image_url($post_id, 'project_file1')); ?>"></div>
		</div>
	</div>

	<div class="relative" v-scope="{
        posts: [
	        <?php foreach ($slider1 as $image) { 
	        $image_url = wp_get_attachment_url($image['ID'], 'full'); 
        	$image_title = get_image_alt($image['ID']);
    		?>
		        {
		        	title: `<?= esc_attr($image_title) ?>`,
		        	pic: `<?= esc_url($image_url) ?>`,
		        },
	        <?php } ?>
        ]
	}" v-on:vue:mounted="paraHandler($el)">
		<div class="">
			<ul class="paraList h-screen lg:h-[50vh]">
				<li v-for="p in posts" class="relative w-full h-full" :style="'background: url('+ p.pic +') center center / cover'">
					<div class="absolute right-52 bottom-20 text-[#595757] text-[18px] tracking-normal border-b border-[#595757] lg:text-[14px] lg:left-8 lg:bottom-8 lg:hidden">{{p.title}}</div>
				</li>
			</ul>
			<ul class="in-dots absolute right-10 bottom-[90px] flex justify-center space-x-4 lg:right-auto lg:tf-x lg:-bottom-8">
				<li v-for="p in posts" class="w-2 h-2 bg-[#727171] cursor-pointer [&.current]:bg-[#005188]"></li>
			</ul>
		</div>
	</div>

	<div class="mt-[272px] xl:zoom-80 lg:px-8 lg:mt-[92px]">
		<div class="flex justify-between pl-[130px] lg:block lg:pl-0">
			<div class="flex flex-col justify-between pr-[268px] lg:pr-0">
				<div class="tracking-normal lg:hidden">
					<div class="text-[#5b5b5b] text-[33px] mb-8 lg:text-[19px]"><?= esc_html($pods->field('project_data11')) ?></div>
					<div class="text-[#595757] text-[18px] leading-[2.2] text-justify lg:text-[14px]"><?= wp_kses_post(nl2br($pods->field('project_data12'))) ?></div>
				</div>
				<div class=""><img src="<?= get_template_directory_uri() ?>/images/projects-deco-1.png"></div>
			</div>
			<div class="lg:hidden">
				<div class="mb-3"><img src="<?= esc_url(get_image_url($post_id, 'project_file2')); ?>"></div>
				<div class=""><?= get_image_alt($post_id, 'project_file2'); ?></div>
			</div>
		</div>
	</div>

	<div class="border-b border-[#595757] mt-[140px] mb-[86px] mx-[102px] lg:mt-[86px] lg:mx-8"></div>

	<div class="px-[130px] xl:zoom-80 lg:px-8">
		<div class="flex justify-between lg:flex-col">
			<div class="shrink-0 order-1 lg:order-2">
				<div class="space-y-5 lg:hidden">
					<?php foreach ($file3 as $image) { 
			        $image_url = wp_get_attachment_url($image['ID'], 'full'); 
		        	$image_title = get_image_alt($image['ID']);
		    		?>
				        <div class="">
							<div class="mb-3"><img src="<?= esc_url($image_url) ?>"></div>
							<div class=""><?= esc_attr($image_title) ?></div>
						</div>
			        <?php } ?>

					<!-- <div class="">
						<div class="mb-3"><img src="<?= get_template_directory_uri() ?>/images/projects-deco-3.jpg"></div>
						<div class="">頂樓公共區</div>
					</div>
					<div class="">
						<div class="mb-3"><img src="<?= get_template_directory_uri() ?>/images/projects-deco-4.jpg"></div>
						<div class="">花羽交誼廳</div>
					</div> -->
				</div>
				<div class="hidden relative lg:block pb-10" v-scope="{
			        posts: [
			        	'<?= get_template_directory_uri() ?>/images/projects-deco-3.jpg',
			        	'<?= get_template_directory_uri() ?>/images/projects-deco-4.jpg',
			        	'<?= get_template_directory_uri() ?>/images/projects-deco-3.jpg',
			        	'<?= get_template_directory_uri() ?>/images/projects-deco-4.jpg'
			        ]}">
					<ul class="natureList">
						<li v-for="p in posts" class="w-full"><img :src="p" class="img-cover"></li>
					</ul>

					<ul class="nature-dots absolute tf-x bottom-0 flex justify-center space-x-4">
						<li v-for="p in posts" class="w-2 h-2 bg-[#727171] cursor-pointer [&.current]:bg-[#005188]"></li>
					</ul>
				</div>
			</div>
			<div class="flex flex-col justify-between pl-[268px] lg:pl-0 order-2 lg:order-1">
				<div class="tracking-normal lg:mb-[74px]">
					<div class="text-[#5b5b5b] text-[33px] mb-8 lg:text-[19px]"><?= esc_html($pods->field('project_data13')) ?></div>
					<div class="text-[#595757] text-[18px] leading-[2.2] text-justify lg:text-[14px]"><?= wp_kses_post(nl2br($pods->field('project_data14'))) ?></div>
				</div>
			</div>
		</div>
	</div>

	<div class="border-b border-[#595757] mt-[140px] mb-[86px] mx-[102px] lg:mt-[86px] lg:mx-8"></div>

	<div class="mb-[260px] xl:zoom-80 lg:px-8 lg:mb-[92px]">
		<div class="flex justify-between items-end px-32 lg:block lg:px-0">
			<div class="">
				<div class="mb-[240px] lg:mb-[74px]">
					<div class="text-[114px] text-[#5b5b5b] font-en leading-none mb-5 lg:text-[35px] lg:mb-2"><?= esc_html($pods->field('project_data15')) ?></div>
					<div class="text-[31px] text-[#005188] lg:text-[14px]"><?= esc_html($pods->field('project_data16')) ?></div>
				</div>
				<div class="max-w-[530px]">
					<div class="text-[#5b5b5b]">
						<div class="text-[32px] tracking-wide mb-7 lg:text-[19px]"><?= esc_html($pods->field('project_data17')) ?></div>
					</div>
					<div class="text-[18px] tracking-normal leading-[2.2] text-justify lg:text-[14px]"><?= wp_kses_post(nl2br($pods->field('project_data18'))) ?></div>
				</div>
			</div>
			<div class="lg:pl-[15vh] lg:mt-20"><img src="<?= esc_url(get_image_url($post_id, 'project_file4')); ?>"></div>
		</div>
	</div>

	<div class="relative" v-scope="{
        posts: [
        	<?php foreach ($slider2 as $image) { 
	        $image_url = wp_get_attachment_url($image['ID'], 'full'); 
        	$image_title = get_image_alt($image['ID']);
    		?>
		        {
		        	title: `<?= esc_attr($image_title) ?>`,
		        	pic: `<?= esc_url($image_url) ?>`,
		        },
	        <?php } ?>
        ]
	}" v-on:vue:mounted="paraHandler($el)">
		<div class="">
			<ul class="paraList h-screen lg:h-[50vh]">
				<li v-for="p in posts" class="relative w-full h-full" :style="'background: url('+ p.pic +') center center / cover'">
					<div class="absolute right-52 bottom-20 text-[#595757] text-[18px] tracking-normal border-b border-[#595757] lg:hidden">{{p.title}}</div>
				</li>
			</ul>
			<ul class="in-dots absolute right-10 bottom-[90px] flex justify-center space-x-4 lg:right-auto lg:tf-x lg:-bottom-8">
				<li v-for="p in posts" class="w-2 h-2 bg-[#727171] cursor-pointer [&.current]:bg-[#005188]"></li>
			</ul>
		</div>
	</div>

	<div class="max-w-[1650px] mx-auto mt-[144px] mb-[315px] xl:px-32 xl:mb-20 lg:px-8 lg:mb-[92px] lg:mt-[92px]">
		<div class="mb-[184px] xl:zoom-80 lg:mb-[72px]">
			<div class="text-[114px] text-[#5b5b5b] font-en leading-none mb-5 lg:text-[35px] lg:mb-2"><?= esc_html($pods->field('project_data19')) ?></div>
			<div class="text-[31px] text-[#005188] lg:text-[14px]"><?= esc_html($pods->field('project_data20')) ?></div>
		</div>
		<div class="" v-scope="{
	        posts: [
	        <?php foreach($project_group_title as $key => $group) { ?>
	        <?php
	        $project_group_company = $pods->field('project_group_company');
	        $project_group_job = $pods->field('project_group_job');
	        $project_group_content = $pods->field('project_group_content');
	        $project_group_image = $pods->field('project_group_image');
	        ?>
		        {
		        	ch: `<?= esc_html($group) ?>`,
	            	company: `<?= esc_html($project_group_company[$key]) ?>`,
	            	job: `<?= esc_html($project_group_job[$key]) ?>`,
	            	content: `<?= wp_kses_post($project_group_content[$key]) ?>`,
		        	pic: `<?= esc_url($project_group_image[$key]['guid']) ?>`,
		        	bg: `<?= esc_url($project_group_image[$key]['guid']) ?>`
		        },
	    	<?php } ?>
	        ]
		}" v-on:vue:mounted="projectsFancyHandler($el)">
			<div class="relative">
				<ul class="projectsFancyList flex xl:zoom-80 lg:block">
					<li v-for="(p, i) in posts" class="cursor-pointer pb-10 px-[64px] mouse-arrow lg:px-0 lg:w-full lg:max-w-[60%] lg:mr-5" :class="{
						'pl-0': i==0,
						'border-x border-[#808080] lg:border-0': i== 1,
						'pr-0': i==2,
					}">
						<div class="mb-7 lg:mb-5"><img :src="p.pic" class="img-cover"></div>
						<div class="text-[14px] text-[#595757] tracking-normal mb-3">
							<span class="lg:block">{{p.company}}</span>
							<span class="text-[20px] tracking-wide mx-3 lg:mx-0">{{p.ch}}</span>
							<span>{{p.job}}</span>
						</div>
					</li>
				</ul>

				<ul class="fancy-dots absolute tf-x bottom-0 justify-center space-x-2 hidden lg:flex">
					<li v-for="(p, i) in posts" class="w-2 h-2 bg-[#727171] cursor-pointer [&.current]:bg-[#005188]"></li>
				</ul>
			</div>
	
			<div class="manList fixed left-0 top-0 bg-[#efefef] w-full h-screen z-50 transition-all duration-300 pointer-events-none opacity-0 lg:h-[calc(var(--vh,1vh)*100)]">		
				<article v-for="(p, i) in posts" class="fixed left-0 top-0 w-full h-screen bg-[#efefef] transition-all duration-300 pointer-events-none opacity-0 lg:h-[calc(var(--vh,1vh)*100)]">
					<div class="flex h-full lg:block">
						<div class="w-[58vw] px-[132px] pt-52 lg:w-full lg:h-full lg:px-0 lg:pt-0 lg:overflow-y-auto">
							<div class="w-full h-[50vh] hidden lg:block" :style="'background: url('+ p.bg +') center center / cover'"></div>
							<div class="max-w-[600px] mx-auto xl:zoom-80 lg:pt-7 lg:px-8 lg:pb-32 lg:overflow-y-auto">
								<div class="mb-[68px] lg:mb-0">
									<div class="text-[#595757] mb-20 lg:block lg:mb-10">
										<div class="hidden lg:block text-[14px] mb-2">{{p.company}}</div>
										<div class="flex justify-between items-end lg:items-center">
											<div class="text-[65px] font-light leading-none lg:text-[20px] lg:tracking-normal">{{p.ch}}</div>
											<div class="text-[18px] lg:text-[14px] lg:-mb-2">
												<span class="mr-4 lg:hidden">{{p.company}}</span>
												<span class="lg:ml-2">{{p.job}}</span>
											</div>
										</div>
									</div>
									<div class="text-justify text-[18px] leading-[2.2] tracking-normal lg:text-[14px] lg:leading-normal" v-html="p.content"></div>
								</div>
								<div class="text-right -mr-10 lg:hidden"><img src="<?= get_template_directory_uri() ?>/images/projects-deco-1.png" class="inline-block"></div>
							</div>
						</div>
						<div class="w-[42vw] relative lg:w-full">
							<div class="w-full h-full lg:hidden" :style="'background: url('+ p.bg +') center center / cover'"></div>
							<div class="absolute left-0 bottom-0 bg-[#115992] w-full h-[104px] flex items-center justify-between px-[64px] xl:zoom-80 lg:h-[74px] lg:px-8">
								<div class="fancy-prev cursor-pointer group"><svg width="137.15" height="19" viewBox="0 0 137.15 3.28" class="cursor-pointer transition-all duration-300 group-hover:-translate-x-3 lg:max-w-[52px] lg:h-auto">
									<line y1="1.51" x2="137.15" y2="1.51" style="fill: none; stroke: #fff; stroke-miterlimit: 10; stroke-width: .75px;"/>
									<line x1="54.85" y1="1.64" y2="1.64" style="fill: none; stroke: #fff; stroke-miterlimit: 10; stroke-width: 3.28px;"/>
								</svg></div>
								<div class="fancyClose cursor-pointer">
									<div class="projects-close">
										<span></span>
										<span></span>
									</div>
								</div>
								<div class="fancy-next cursor-pointer group"><svg width="137.15" height="19" viewBox="0 0 137.15 3.28" class="cursor-pointer transition-all duration-300 group-hover:translate-x-3 lg:max-w-[52px] lg:h-auto">
									<line x1="137.15" y1="1.77" y2="1.77" style="fill: none; stroke: #fff; stroke-miterlimit: 10; stroke-width: .75px;"/>
									<line x1="82.3" y1="1.64" x2="137.15" y2="1.64" style="fill: none; stroke: #fff; stroke-miterlimit: 10; stroke-width: 3.28px;"/>
								</svg></div>
							</div>
						</div>
					</div>
				</article>
			</div>	
		</div>
	</div>

	<div class="border-b border-[#595757] mt-[140px] mb-[86px] mx-[102px] lg:my-20 lg:mx-8 hidden lg:block"></div>

	<section class="h-screen relative overflow-hidden lg:h-auto" id="lifeFunctionWrap">
		<div class="inline-flex h-screen lg:block lg:h-auto" id="lifeFunctionWrap-item">
            <div class="relative pt-[115px] pl-[100px] xl:zoom-80 lg:px-8 lg:pt-0">
                <div class="mb-[220px] lg:mb-[64px]">
					<div class="text-[114px] text-[#5b5b5b] font-en leading-none w-max mb-5 lg:text-[35px] lg:mb-2"><?= esc_html($pods->field('project_data21')) ?></div>
					<div class="text-[23px] text-[#115992] lg:text-[14px]"><?= esc_html($pods->field('project_data22')) ?></div>
				</div>
                <div class="max-w-[456px] lg:mb-20">
                	<div class="text-[33px] text-[#5b5b5b] tracking-wide mb-[54px] lg:text-[19px] lg:mb-6">
                		<?= wp_kses_post(nl2br($pods->field('project_data23'))) ?>
                	</div>
                	<div class="text-[18px] text-[#595757] tracking-normal leading-[2.2] text-justify lg:text-[14px]"><?= wp_kses_post(nl2br($pods->field('project_data24'))) ?></div>
                </div>
            </div>
        	<div class="relative pl-[61px] pt-[382px] pr-32 lg:pl-8 lg:pr-0 lg:pt-0 lg:pb-16" v-scope="{
		        posts: [
			        <?php foreach($project_target_title as $key => $group) { ?>
			        <?php
			        $project_target_intro = $pods->field('project_target_intro');
			        $project_target_time = $pods->field('project_target_time');
			        ?>
				        {
				        	time: `<?= esc_html($project_target_time[$key]) ?>`,
				        	transportation: '<?= esc_html($group) ?>',
				        	location: `<?= esc_html($project_target_intro[$key]) ?>`,
				        },
			    	<?php } ?>
		        ]

			}">
            	<ul class="flex space-x-[78px] lg:block" id="lifeList">
            		<li v-for="p in posts" class="lg:w-[200px] lg:mr-10">
            			<div class="relative w-[420px] h-[420px] border border-[#5b5b5b] rounded-full flex flex-col items-center justify-center tracking-normal xl:zoom-80 lg:w-[200px] lg:h-[200px]">
            				<div class="absolute tf lg:w-full">
								<svg width="423" height="423" viewBox="0 0 424 424" class="draw lg:w-full lg:h-auto">
							        <path d="M 211.5,1 A 210,210 0 1,1 211.5,422.9 A 210,210 0 1,1 211.5,1" fill="none" stroke="#115992" stroke-width="3"/>
							    </svg>
							</div>
            				<div class="relative flex items-end mb-3">
            					<div class="font-num font-light text-[201px] leading-none mr-8 lg:text-[86px] lg:mr-3"><span class="countup" :data-time="p.time">0</span></div>
            					<div class="text-[#595757] text-[18px] lg:text-[14px]">min</div>
            				</div>
            				<div class="text-[#898989] text-[22px] mb-2 lg:text-xs">{{p.transportation}}</div>
            				<div class="text-[#595757] text-[25px] lg:text-base">{{p.location}}</div>
            			</div>
            		</li>
            	</ul>

            	<ul class="life-dots absolute tf-x bottom-0 justify-center space-x-2 hidden lg:flex">
					<li v-for="p in posts" class="w-2 h-2 bg-[#727171] cursor-pointer [&.current]:bg-[#005188]"></li>
				</ul>
            </div>
        </div>
	</section>


	<section class="h-screen mt-[100px] lg:h-auto">
		<div class="flex items-center justify-center xl:zoom-80"><img src="<?= get_template_directory_uri() ?>/images/map.jpg"></div>
	</section>

	<section class="mt-[268px] xl:zoom-80 lg:mt-[88px] lg:px-8">
		<div class="max-w-[1650px] mx-auto">
			<div class="mb-[334px] lg:mb-[70px]">
				<div class="text-[114px] text-[#5b5b5b] font-en leading-none w-max mb-5 lg:text-[35px] lg:mb-2"><?= esc_html($pods->field('project_data25')) ?></div>
				<div class="text-[23px] text-[#115992] lg:text-[14px]"><?= esc_html($pods->field('project_data26')) ?></div>
			</div>
			<div class="">
				<div class="text-[33px] text-[#5b5b5b] tracking-wide mb-[96px] lg:text-[19px] lg:mb-[52px]"><?= esc_html($pods->field('project_data27')) ?></div>
				<div class="relative space-y-7 lg:pb-16" v-scope="{
			        posts: [
				        <?php foreach($project_std_title as $key => $group) { ?>
				        <?php
				        $project_std_intro = $pods->field('project_std_intro');
				        $project_std_image = $pods->field('project_std_image');
				        $image_alt = get_image_alt($project_std_image[$key]['ID']);
				        ?>
					        {
					        	title: `<?= esc_html($group) ?>`,
					        	content: `<?= wp_kses_post($project_std_intro[$key]) ?>`,
					        	pic: `<?= esc_url($project_std_image[$key]['guid']) ?>`,
					        	alt: `<?= esc_attr($image_alt) ?>`,
					        	
					        },
				    	<?php } ?>
			        ]
				}">
					<ul class="featuresList grid grid-cols-4 gap-x-32 gap-y-8 lg:block">
						<li v-for="p in posts" class="relative group lg:w-full lg:max-w-[60%] lg:mr-12">
							<div class="absolute w-full h-full flex flex-col justify-center bg-[#dddfe2] px-[44px] opacity-0 transition-all duration-300 group-hover:opacity-100 lg:px-0 lg:group-hover:opacity-0">
								<div class="text-[#5b5b5b] text-[25px] mb-7">{{p.title}}</div>
								<div class="text-[#595757] text-[18px] text-justify leading-loose" v-html="p.content"></div>
							</div>
							<div class="mb-6 lg:mb-4"><img :src="p.pic" :alt="p.alt"></div>
							<div class="text-[25px] text-[#5b5b5b] tracking-wide lg:text-[18px]">{{p.title}}</div>
						</li>
					</ul>
					<ul class="features-dots absolute tf-x bottom-0 justify-center space-x-2 hidden lg:flex">
						<li v-for="p in posts" class="w-2 h-2 bg-[#727171] cursor-pointer [&.current]:bg-[#005188]"></li>
					</ul>
					<!-- <ul v-scope="{
				        posts: [{
				        	title: `STUDOR 排水系統`,
				        	pic: `<?= get_template_directory_uri() ?>/images/std-5.jpg`,
				        	logo: `<?= get_template_directory_uri() ?>/images/std-logo-1.png`,
				        }, {
				        	title: `YKK 氣密窗`,
				        	pic: `<?= get_template_directory_uri() ?>/images/std-6.jpg`,
				        	logo: `<?= get_template_directory_uri() ?>/images/std-logo-1.png`,
				        }, {
				        	title: `VAF 智慧氣流潔淨系統`,
				        	pic: `<?= get_template_directory_uri() ?>/images/std-7.jpg`,
				        	logo: `<?= get_template_directory_uri() ?>/images/std-logo-1.png`,
				        }, {
				        	title: `世界精品瑪摩麗磁 磁磚`,
				        	pic: `<?= get_template_directory_uri() ?>/images/std-8.jpg`,
				        	logo: `<?= get_template_directory_uri() ?>/images/std-logo-1.png`,
				        }]
					}" class="grid grid-cols-4 gap-x-32">
						<li v-for="p in posts" class="group">
							<div class="relative mb-6">
								<div class="absolute w-full h-full flex flex-col justify-center px-[44px] opacity-0 transition-all duration-300 group-hover:opacity-100">
									<div class="absolute bg-[#dddfe2] top-0 left-0 w-full h-full opacity-0 transition-all duration-300 group-hover:opacity-90"></div>
									<div class="relative z-10">
										<div class="h-[180px]"><img :src="p.logo"></div>
										<div class="text-[#5b5b5b] text-[20px] text-center mb-7">{{p.title}}</div>
									</div>
								</div>
								<div class=""><img :src="p.pic"></div>
							</div>
							<div class="text-[25px] text-[#5b5b5b] tracking-wide transition-all duration-300 group-hover:opacity-0">{{p.title}}</div>
						</li>
					</ul> -->
				</div>
			</div>
		</div>
	</section>

	<div class="border-b border-[#595757] mt-[140px] mb-[86px] mx-[102px] lg:my-20 lg:mx-8 hidden lg:block"></div>

	<section class="mt-[284px] mb-[294px] lg:px-8 lg:mt-[84px] lg:mb-[160px]">
		<div class="max-w-[1650px] mx-auto xl:max-w-[1300px]">
			<div class="relative pl-[118px] mb-[292px] xl:zoom-80 lg:pl-[50px] lg:mb-[64px]">
				<div class="text-[#595757] text-[50px] tracking-normal lg:text-[22px]">預約賞屋</div>
				<div class="absolute left-0 -top-[64px] lg:-top-[26px]"><svg width="114.75" height="113.93" viewBox="0 0 114.75 113.93" class="lg:max-w-[54px] lg:h-auto">
					<rect x="-1.68" y="17.36" width="118.12" height="6.56" transform="translate(-3.54 17.94) rotate(-17.25)" style="fill: #005188;"/>
					<rect x="-24.36" y="66.23" width="94.65" height=".76" transform="translate(89.57 43.64) rotate(90)" style="fill: #474747;"/>
				</svg></div>
			</div>
			<div class="max-w-[1140px] ml-auto xl:max-w-[900px]">
				<div class="text-[20px] text-[#595757] mb-[70px] lg:mb-12"><span class="text-[#115992] text-[32px] font-archivo relative top-2 mr-2 lg:text-[24px] lg:top-[6px]">*</span>為必填資訊</div>
				<form action="javascript:;" method="post" id="contactForm">
					<div class="grid grid-cols-2 gap-x-[150px] mb-[72px] lg:block lg:mb-0">
						<div class="item flex items-center border-b border-[#595757] lg:block lg:mb-7">
							<div class="shrink-0 text-[#a5a4a4] tracking-normal mr-5 lg:text-[14px] lg:mb-2"><span class="text-[#115992] text-[32px] font-archivo relative top-2 mr-2 lg:text-[24px] lg:top-[6px]">*</span>姓名<span class="ml-2">NAME</span></div>
							<div class="flex-auto">
								<input type="text" name="name" class="w-full h-8 bg-[#efefef] lg:px-1">
							</div>
						</div>
						<div class="item flex items-center border-b border-[#595757] lg:block lg:mb-7">
							<div class="shrink-0 text-[#a5a4a4] tracking-normal mr-5 lg:text-[14px] lg:mb-2"><span class="text-[#115992] text-[32px] font-archivo relative top-2 mr-2 lg:text-[24px] lg:top-[6px]">*</span>詢問類別<span class="ml-2">Inquiry</span></div>
							<div class="flex-auto pr-36 lg:pr-0">
								<select name="" id="" class="w-full h-8 bg-[#efefef] lg:px-1">
									<option value=""></option>
									<option value="">1</option>
								</select>
							</div>
						</div>
					</div>
					<div class="grid grid-cols-2 gap-x-[150px] mb-[72px] lg:block lg:mb-0">
						<div class="item flex items-center border-b border-[#595757] lg:block lg:mb-7">
							<div class="shrink-0 text-[#a5a4a4] tracking-normal mr-5 lg:text-[14px] lg:mb-2"><span class="text-[#115992] text-[32px] font-archivo relative top-2 mr-2 lg:text-[24px] lg:top-[6px]">*</span>電子信箱<span class="ml-2">E-MAIL</span></div>
							<div class="flex-auto">
								<input type="text" name="name" class="w-full h-8 bg-[#efefef] lg:px-1">
							</div>
						</div>
						<div class="item flex items-center border-b border-[#595757] lg:block lg:mb-7">
							<div class="shrink-0 text-[#a5a4a4] tracking-normal mr-5 lg:text-[14px] lg:mb-2"><span class="text-[#115992] text-[32px] font-archivo relative top-2 mr-2 lg:text-[24px] lg:top-[6px]">*</span>建案類別<span class="ml-2">Project</span></div>
							<div class="flex-auto pr-36 lg:pr-0">
								<select name="" id="" class="w-full h-8 bg-[#efefef] lg:px-1">
									<option value=""></option>
									<option value="">1</option>
								</select>
							</div>
						</div>
					</div>
					<div class="grid grid-cols-2 gap-x-[150px] mb-[72px] lg:block lg:mb-0">
						<div class="item flex items-center border-b border-[#595757] lg:block lg:mb-7">
							<div class="shrink-0 text-[#a5a4a4] tracking-normal mr-5 lg:text-[14px] lg:mb-2"><span class="text-[#115992] text-[32px] font-archivo relative top-2 mr-2 lg:text-[24px] lg:top-[6px]">*</span>連絡時段<span class="ml-2">Time</span></div>
							<div class="flex-auto pr-36 lg:pr-0">
								<select name="" id="" class="w-full h-8 bg-[#efefef] lg:px-1">
									<option value=""></option>
									<option value="">1</option>
								</select>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="text-[#a5a4a4] tracking-normal mb-5"><span class="text-[#115992] text-[32px] font-archivo relative top-2 mr-2 lg:text-[24px] lg:top-[6px]">*</span>留言內容<span class="ml-2">Message</span></div>
						<textarea name="" id="" class="w-full h-[170px] bg-[#efefef] border-b border-[#595757] lg:h-[94px] lg:p-1"></textarea>
					</div>

					<div class="mt-[120px] flex justify-between xl:zoom-90 lg:block lg:mt-9">
						<div class="privacy-items lg:mb-10">
							<input type="checkbox" name="privacy" id="p1">
							<label for="p1" class="text-[20px] text-[#595757] tracking-normal font-light lg:text-base">隱私權聲明確認</label>
						</div>
						<div class="lg:text-right">
							<button class="w-[474px] text-center border border-[#727171] text-[21px] text-[#595757] font-en font-bold py-9 hover:bg-[#005188] hover:text-white transition-all duration-300 lg:w-[196px] lg:py-4 lg:text-[18px] lg:bg-[#efefef]">
								SEND
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>

	<?php include 'footer.php'; ?>
</body>

<?php include 'script.php'; ?>
</html>

<script>
function paraHandler(el){
	// var _flick_total = $("ul", el).length
	var $carousel = $(".paraList", el).flickity({
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

    var flkty = $carousel.data('flickity');
	var cellElements = $carousel.flickity('getCellElements');

	$(".in-dots", el).find("li").first().addClass("current")
	$(".in-dots", el).find("li").on("click", function () {
		$carousel.flickity('select', $(this).index())
	})
	$carousel.on( 'change.flickity', function( event, index ) {
		$(".in-dots", el).find("li").eq(index).addClass("current").siblings().removeClass("current")
	});
}

function projectsFancyHandler(el){

	class projectsFancy {
		constructor(item, setting) {
			this.$items = $(".projectsFancyList", el).children()
			this.$fancys = $(".manList", el).children()
			this._total = this.$items.length
			this._now = 0
			this._prev = -1
			this._next = -1

			Object.assign(this, setting)

			this.init()
		}
		init() {
			this.$items.on("click", (e) => {
				$("body").addClass("overflow-hidden")

				$(".manList").removeClass("pointer-events-none opacity-0")

				this._now = $(e.currentTarget).index()
				this.$fancys.eq(this._now).removeClass("pointer-events-none opacity-0").siblings().addClass("pointer-events-none opacity-0")
			})

			$(".fancyClose").on("click", (e) => {
				$("body").removeClass("overflow-hidden")

				$(".manList").addClass("pointer-events-none opacity-0")

				this.$fancys.addClass("pointer-events-none opacity-0")
			})

			$(".fancy-prev").on("click", (e) => {
				this.prev()
			})
			$(".fancy-next").on("click", (e) => {
				this.next()
			})
		}
		prev() {
			this._prev = (this._now - 1 + this._total) % this._total
			this._now = this._prev

			this.$fancys.eq(this._now).removeClass("pointer-events-none opacity-0").siblings().addClass("pointer-events-none opacity-0")
		}
		next() {
			this._next = (this._now + 1 + this._total) % this._total
			this._now = this._next

			this.$fancys.eq(this._now).removeClass("pointer-events-none opacity-0").siblings().addClass("pointer-events-none opacity-0")
		}
	}

	$fancy = new projectsFancy({})
}

gsap.set(".draw path", {
	drawSVG: '0% 0%',
});
function horizonHandler(el) {
	var _start = true

    if($(this).width() > 1025 && $(this).width() < 1441){
        var _x = $("#lifeFunctionWrap-item").outerWidth(true) - $(window).outerWidth(true)
    }else{
        var _x = $("#lifeFunctionWrap-item").outerWidth(true) - $(window).outerWidth(true)
    }


    var _tl = gsap.timeline({
        paused: 0,
    }).to("#lifeFunctionWrap-item", {
        x: -_x,
        ease: 'none'
    })
    

    if (_x > 0) {
        ScrollTrigger.create({
            toggleActions: "play pause resume reverse",
            trigger: '#lifeFunctionWrap',
            start: "top 0%",
            end: `+=${_x}`,
            pin: '#lifeFunctionWrap',
            pinSpace: false,
            scrub: true,
            animation: _tl,
            // markers: true,
            onUpdate: (self) => {
                let $contact = $("#lifeList")
                let m = $(window).width() / 2
                $contact.children().each(function(i, el) {
                    let x = $(el).offset().left
                    if (x - m <= 0) {
                    	if(_start){
		            		$(".countup").each(function(i, el) {
								var _to = $(el).data("time")
								$(el).text(0)

								new CountUp(el, 0, _to, 0, 3, {
									separator: '',
								}).start()
							})

							$(".draw path").each(function(i, el) {
								gsap.to(el, {
									duration: 1.5,
									drawSVG: '0% 65%',
								});
							})
							_start = false
		            	}
                    }
                })
            },
        });
    }
}

$(function(){
	gsap.delayedCall(.3, function () {
	    horizonHandler('#lifeFunctionWrap');
	})

	if(device == 'mobile'){
		var $carousel_nature = $(".natureList").flickity({
	        "prevNextButtons": false,
	        "pageDots": false,
	        "wrapAround": true,
	        "imagesLoaded": true,
	        "fade": false,
	        "cellAlign": "left",
	        "adaptiveHeight": true,
	        "arrowShape": "",
	        "autoPlay": false,
	        "pauseAutoPlayOnHover": false
	    });

	    $(".nature-dots").find("li").first().addClass("current")
	    $(".nature-dots").find("li").on("click", function () {
			$carousel_nature.flickity('select', $(this).index())
		})
		$carousel_nature.on( 'change.flickity', function( event, index ) {
			$(".nature-dots").find("li").eq(index).addClass("current").siblings().removeClass("current")
		});

		var $carousel_team = $(".projectsFancyList").flickity({
	        "prevNextButtons": false,
	        "pageDots": false,
	        "wrapAround": true,
	        "imagesLoaded": true,
	        "fade": false,
	        "cellAlign": "left",
	        "adaptiveHeight": true,
	        "arrowShape": "",
	        "autoPlay": false,
	        "pauseAutoPlayOnHover": false
	    });

	    $(".fancy-dots").find("li").first().addClass("current")
	    $(".fancy-dots").find("li").on("click", function () {
			$carousel_team.flickity('select', $(this).index())
		})
		$carousel_team.on( 'change.flickity', function( event, index ) {
			$(".fancy-dots").find("li").eq(index).addClass("current").siblings().removeClass("current")
		});

	    var $carousel_life = $("#lifeList").flickity({
	        "prevNextButtons": false,
	        "pageDots": false,
	        "wrapAround": true,
	        "imagesLoaded": true,
	        "fade": false,
	        "cellAlign": "left",
	        "adaptiveHeight": true,
	        "arrowShape": "",
	        "autoPlay": false,
	        "pauseAutoPlayOnHover": false
	    });

	    $(".life-dots").find("li").first().addClass("current")
	    $(".life-dots").find("li").on("click", function () {
			$carousel_life.flickity('select', $(this).index())
		})
		$carousel_life.on( 'change.flickity', function( event, index ) {
			$(".life-dots").find("li").eq(index).addClass("current").siblings().removeClass("current")
		});

		$('#lifeList').ryderCool({
			hook: 0.7,
			enter: function (el) {
				$(".countup").each(function(i, el) {
					var _to = $(el).data("time")
					$(el).text(0)

					new CountUp(el, 0, _to, 0, 3, {
						separator: '',
					}).start()
				})
				$(".draw path").each(function(i, el) {
					gsap.to(el, {
						duration: 1.5,
						drawSVG: '0% 65%',
					});
				})
			}
		})

	    var $carousel_features = $(".featuresList").flickity({
	        "prevNextButtons": false,
	        "pageDots": false,
	        "wrapAround": true,
	        "imagesLoaded": true,
	        "fade": false,
	        "cellAlign": "left",
	        "adaptiveHeight": true,
	        "arrowShape": "",
	        "autoPlay": false,
	        "pauseAutoPlayOnHover": false
	    });

	    $(".features-dots").find("li").first().addClass("current")
	    $(".features-dots").find("li").on("click", function () {
			$carousel_features.flickity('select', $(this).index())
		})
		$carousel_features.on( 'change.flickity', function( event, index ) {
			$(".features-dots").find("li").eq(index).addClass("current").siblings().removeClass("current")
		});


	}
})
</script>