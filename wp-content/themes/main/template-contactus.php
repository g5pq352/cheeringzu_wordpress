<?php
/*
Template Name: contactus
*/
?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body class="bg-[#efefef]">
	<?php include 'topmenu.php'; ?>

	<div class="flex pl-[228px] pr-[190px] pt-[118px] pb-[178px] xl:zoom-80 lg:block lg:px-0 lg:pt-[70px] lg:pb-0">
		<div class="mt-[145px] lg:mt-0 lg:mb-[72px] lg:px-6">
			<div class="relative mb-[238px] lg:mb-10">
				<div class="absolute -left-[146px] tf-y lg:-left-2">
					<!-- <img src="<?= get_template_directory_uri() ?>/images/contact-logo.svg"> -->
					<!-- <img src="<?= get_template_directory_uri() ?>/images/logo-move.gif" class="w-[322px]"> -->
					<!-- <video muted src="<?= get_template_directory_uri() ?>/images/logo-move.mp4" class="w-[322px]" id="logo-move"></video> -->
					<div class=""><img src="<?= get_template_directory_uri() ?>/images/logo-move.gif" class="w-[322px] xl:w-[280px] lg:w-[80px]" id="logo-move"></div>
				</div>
				<div class="relative bt-move font-en text-[#5b5b5b] text-[114px] lg:text-[52px] lg:pl-9">CONTACT</div>
			</div>
			<div class="text-[21px] text-[#595757] font-medium tracking-wide leading-relaxed lg:text-[14px]">
				歡迎聯繫我們，<br class="hidden lg:block">了解更多理想住宅購買資訊，<br>
				讓我們幫助您實現家的夢想！
			</div>
		</div>
		<div class="relative flex-auto ml-[289px] lg:ml-0">
			<div class="contact-deco-1 absolute right-[100%] top-0 z-10 w-[107px] h-full bg-[#b3cedd]"></div>
			<div class="contact-deco-2 absolute right-0 bottom-0 bg-[#e8e6d9] w-[1663px] h-[315px] xl:w-[1390px] xl:h-[275px]"></div>

			<div class="relative">
				<div class="bg-[#cadde5] py-[155px] px-[122px] xl:px-20 lg:px-8 lg:py-[90px]">
					<?= do_shortcode('[contact-form-7 id="521e6f0" title="聯絡表單 1"]'); ?>	
					<!-- <form action="javascript:;" method="POST">
						<div class="item mb-12 lg:mb-6">
							<div class="title text-[#4d4d4d] font-medium mb-5 lg:mb-3 lg:text-[15px]">建案名稱</div>
							<div class="">
								<select name="" id="" class="border-b-4 border-[#b3cedd] w-[200px] h-[42px] lg:h-8">
									<option value=""></option>
								</select>
							</div>
						</div>
						<div class="item mb-12 lg:mb-6">
							<div class="title text-[#4d4d4d] font-medium mb-5 lg:mb-3 lg:text-[15px]">姓名<span class="font-en text-[18px] ml-[18px] lg:text-[15px]">NAME</span></div>
							<div class="">
								<input type="text" name="" class="border-b-4 border-[#b3cedd] w-full h-[42px] px-2 lg:h-8">
							</div>
						</div>
						<div class="item mb-12 lg:mb-6">
							<div class="title text-[#4d4d4d] font-medium mb-5 lg:mb-3 lg:text-[15px]">電話<span class="font-en text-[18px] ml-[18px] lg:text-[15px]">PHONE</span></div>
							<div class="">
								<input type="text" name="" class="border-b-4 border-[#b3cedd] w-full h-[42px] px-2 lg:h-8">
							</div>
						</div>
						<div class="item mb-12 lg:mb-6">
							<div class="title text-[#4d4d4d] font-medium mb-5 lg:mb-3 lg:text-[15px]"><span class="font-en text-[18px] lg:text-[15px]">LINE ID</span></div>
							<div class="">
								<input type="text" name="" class="border-b-4 border-[#b3cedd] w-full h-[42px] px-2 lg:h-8">
							</div>
						</div>
						<div class="item mb-12 lg:mb-6">
							<div class="title text-[#4d4d4d] font-medium mb-5 lg:mb-3 lg:text-[15px]"><span class="font-en text-[18px] lg:text-[15px]">E-MAIL</span></div>
							<div class="">
								<input type="text" name="" class="border-b-4 border-[#b3cedd] w-full h-[42px] px-2 lg:h-8">
							</div>
						</div>
						<div class="item">
							<div class="title text-[#4d4d4d] font-medium mb-5 lg:mb-3 lg:text-[15px]"><span class="font-en text-[18px] lg:text-[15px]">MESSAGE</span></div>
							<div class="">
								<textarea name="" id="" class="border-b-4 border-[#b3cedd] w-full h-[302px] px-2 py-2 lg:h-[94px]"></textarea>
							</div>
						</div>

						<div class="mt-[120px] lg:text-center">
							<button class="w-full text-center border border-[#727171] text-[21px] text-[#595757] font-en font-bold py-9 hover:bg-[#005188] hover:text-white transition-all duration-300 bg-[#efefef] lg:text-[15px] lg:py-5 lg:max-w-[60%]">
								SUBMIT
							</button>
						</div>
					</form> -->
				</div>
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