<?php
/*
Template Name: project
*/

// Pods 查詢
$works = pods('project', [
    'limit' => -1, // 每頁顯示 6 篇
]);
?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body>
	<?php include 'topmenu.php'; ?>

	<div class="fixed w-full h-screen z-20 transition-all duration-500 hint hidden lg:block">
		<div class="absolute w-full h-full opacity-60 bg-black"></div>

		<div class="z-10 absolute tf">
			<div class="relative mb-2">
				<div class="absolute tf-x bottom-2 ml-1">
					<svg width="14.72" height="74.96" viewBox="0 0 14.72 74.96" class="go-down">
						<g>
						<line x1="2.95" y1="23.91" x2="2.95" y2="74.96" style="fill: none; stroke: #fff; stroke-miterlimit: 10;"/>
						<line x1="13.85" y1="50.22" x2=".87" y2="72.95" style="fill: none; stroke: #005188; stroke-miterlimit: 10; stroke-width: 2px;"/>
						</g>
						<rect x="2.54" y="12" width=".84" height="8.17" style="fill: #fff;"/>
						<rect x="2.54" width=".84" height="8.17" style="fill: #fff;"/>
					</svg>
				</div>
				<div class="text-center"><svg width="44" height="44" viewBox="0 0 43.81 43.81" class="inline-block">
					<circle cx="21.9" cy="21.9" r="21.9" style="fill: #fff; opacity: .71;"/>
				</svg></div>
			</div>
			<div class="text-white text-[20px]">向下滑動</div>
		</div>
	</div>

	<div class="projectsWrap relative">
		<div class="absolute bottom-[35vh] left-[146px] z-10 pointer-events-none xl:zoom-80 xl:bottom-[45vh] lg:left-5 lg:bottom-[25vh]">
			<ul v-scope="{
	            posts: [
		            <?php foreach ($works->rows as $work) : ?>
	            	<?php $pods = pods('project', $work->ID); ?>
			            {
			            	title: `<?= esc_html($work->post_title) ?>`,
					        intro: `<?= esc_html($pods->field('project_slogan')) ?>`,
					        cat: `<?= esc_html($pods->field('project_location')) ?>`,
					        into: `<?= esc_html($pods->field('project_intro0')) ?>`,
			            },
			        <?php endforeach ?>
	            ]
        	}" class="projects-head">
				<li v-for="(p,i) in posts" class="w-max opacity-0 transition-all duration-1000 [&.current]:opacity-100" :class="{
					'absolute left-0 top-0': i != 0
				}">
					<div class="text-[#5b5b5b] text-[55px] tracking-wider leading-none mb-8 lg:text-[26px] lg:mb-4">{{p.title}}</div>
					<div class="text-[#595757] text-[26px] tracking-normal mb-20 lg:hidden">{{p.intro}}</div>
					<div class="flex items-center text-[14px] lg:text-[13px]">
						<div class="clip-cat inline-block tracking-wide text-white bg-[#088282] py-1 pl-7 pr-3 mr-6 lg:pl-4 lg:pr-2 lg:mr-3">{{p.cat}}</div>
						<div class="text-[#4d4d4d]">{{p.into}}</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="">
			<!-- Slider main container -->
			<div class="swiperProjects swiper h-screen lg:h-[calc(var(--vh,1vh)*100)]">
				<!-- Additional required wrapper -->
				<ul class="swiper-wrapper max-w-[870px] mx-auto pl-[35vh] xl:pl-[60vh] lg:pl-0 lg:max-w-full">
					<!-- Slides -->
					<?php foreach ($works->rows as $work) : ?>
			            <li class="swiper-slide group">
							<div class="relative flex flex-wrap items-center h-full lg:transition-all lg:duration-1000 lg:opacity-20 lg:group-[&.swiper-slide-active]:opacity-100">
								<div class="items scale-75 group-[&.swiper-slide-active]:scale-100 transition-all duration-1000 mouse-arrow">
									<a href="<?= esc_url(get_permalink($work->ID)) ?>" class="relative block">
										<img src="<?= esc_url(get_image_url($work->ID, 'project_cover')); ?>" class="max-w-[740px] lg:hidden">
										<div class="w-[100vw] h-[60vh] hidden lg:block" style="background: url('<?= esc_url(get_image_url($work->ID, 'project_cover')); ?>') center center / cover"></div>
										<div class="absolute w-full bottom-0 bg-gradient-to-t from-white opacity-90 h-[50vh] hidden lg:block z-20"></div>
									</a>
								</div>
							</div>
						</li>
			        <?php endforeach ?>
			        
					<!-- <li class="swiper-slide group">
						<div class="relative flex flex-wrap items-center h-full lg:transition-all lg:duration-1000 lg:opacity-20 lg:group-[&.swiper-slide-active]:opacity-100">
							<div class="items scale-75 group-[&.swiper-slide-active]:scale-100 transition-all duration-1000 mouse-arrow">
								<a href="projects/澄亦實築-澄玥" class="relative block">
									<img src="<?= get_template_directory_uri() ?>/images/projects-1.jpg" class="max-w-[740px] lg:hidden">
									<div class="w-[100vw] h-[60vh] hidden lg:block" style="background: url('images/projects-1.jpg') center center / cover"></div>
									<div class="absolute w-full bottom-0 bg-gradient-to-t from-white opacity-90 h-[50vh] hidden lg:block z-20"></div>
								</a>
							</div>
						</div>
					</li>
					<li class="swiper-slide group">
						<div class="relative flex flex-wrap items-center h-full lg:transition-all lg:duration-1000 lg:opacity-20 lg:group-[&.swiper-slide-active]:opacity-100">
							<div class="items scale-75 group-[&.swiper-slide-active]:scale-100 transition-all duration-1000 mouse-arrow">
								<a href="projects/澄亦實築-澄杏" class="relative block">
									<img src="<?= get_template_directory_uri() ?>/images/projects-2.jpg" class="max-w-[740px] lg:max-w-full lg:hidden">
									<div class="w-[100vw] h-[60vh] hidden lg:block" style="background: url('images/projects-2.jpg') center center / cover"></div>
									<div class="absolute w-full bottom-0 bg-gradient-to-t from-white opacity-90 h-[50vh] hidden lg:block z-20"></div>
								</a>
							</div>
						</div>
					</li>
					<li class="swiper-slide group">
						<div class="relative flex flex-wrap items-center h-full lg:transition-all lg:duration-1000 lg:opacity-20 lg:group-[&.swiper-slide-active]:opacity-100">
							<div class="items scale-75 group-[&.swiper-slide-active]:scale-100 transition-all duration-1000 mouse-arrow">
								<a href="projects/捌零寓所" class="relative block">
									<img src="<?= get_template_directory_uri() ?>/images/projects-3.jpg" class="max-w-[740px] lg:max-w-full lg:hidden">
									<div class="w-[100vw] h-[60vh] hidden lg:block" style="background: url('images/projects-3.jpg') center center / cover"></div>
									<div class="absolute w-full bottom-0 bg-gradient-to-t from-white opacity-90 h-[50vh] hidden lg:block z-20"></div>
								</a>
							</div>
						</div>
					</li> -->
				</ul>
			</div>
		</div>
		<div class="absolute bottom-[30vh] right-[92px] z-10 pointer-events-none xl:zoom-80 lg:right-5 lg:bottom-[25vh]">
			<!-- If we need pagination -->
			<ul class="projects-pagination flex flex-col items-center font-light font-num text-[#595757]"></ul>
		</div>
	</div>

	<!-- <?php include 'footer.php'; ?> -->
</body>

<?php include 'script.php'; ?>
</html>

<script>
gsap.set(".go-down", {
	opacity: 0,
	y: -20,
})
gsap.to(".go-down", {
	repeat: -1,
	y: 0,
	opacity: 1,
	duration: 1.2,
})

function initProjectListSliders() {
	var windowHeight = $(window).height();
	var itemsHeight = $(".swiperProjects .items").height()

    const swiper = new Swiper('.swiper', {
        preloadImages: !0,
        updateOnImagesReady: !0,
        speed: 1000,
        allowTouchMove: !0,
        simulateTouch: !1,
        // loop: hasMultipleSlides,
        loopAdditionalSlides: 10,
        spaceBetween: -`${windowHeight - itemsHeight}`,
        initialSlide: 0,
        mousewheel: {
            forceToAxis: !0,
            invert: 0,
            sensitivity: 2,
        },
        hashNavigation: {
            replaceState: !0,
            watchState: !0,
        },
        direction: "vertical",
        effect: "slide",
        pagination: {
            el: ".projects-pagination",
            type: "custom",
            renderCustom: function(swiper, current, total) {
                var currentSlideCount = current;
                var totalSlideCount = total;
                if (currentSlideCount < 10)
                    currentSlideCount = "0" + currentSlideCount;
                if (totalSlideCount < 10)
                    totalSlideCount = "0" + totalSlideCount;
                return (`<div class="swiper-pagination-current text-[54px] lg:text-[25px]">${currentSlideCount}</div>` + `<div class="swiper-pagination-progress-bar"><img src='<?= get_template_directory_uri() ?>/images/projects-bar.svg' class="lg:w-5"></div>` + `<div class="swiper-pagination-total text-[25px] lg:text-[14px]">${totalSlideCount}</div>`)
            },
            dynamicBullets: !1,
            hideOnClick: !1,
        },
        on: {
            init: () => {
                setTimeout( () => {
                    $(".projects-head li").eq(0).addClass("current")
                }, 100)
            },
            slideChange: function () {
		        $(".projects-head li").eq(this.activeIndex).addClass("current").siblings().removeClass("current")
		    },
        },
        breakpoints: {},
    });

   if(device == 'mobile'){
	   	gsap.delayedCall(2, function () {
			$(".hint").addClass("opacity-0 pointer-events-none")
		})

   		swiper.allowSlideNext = false;
        swiper.allowSlidePrev = false;

		$(".projectsWrap").swipe( {
			//Generic swipe handler for all directions
			swipe: (event, direction, distance, duration, fingerCount, fingerData) => {
				if(direction == 'up'){
					swiper.allowSlideNext = true;

					swiper.slideNext();

					swiper.allowSlideNext = false;
				}else if(direction == 'down'){
					swiper.allowSlidePrev = true;

					swiper.slidePrev();

					swiper.allowSlidePrev = false;
				}
			}
		});
	}
}
initProjectListSliders()
</script>