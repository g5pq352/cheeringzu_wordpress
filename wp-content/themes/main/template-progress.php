<?php
/*
Template Name: progress
*/
?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body class="bg-[#efefef]">
	<?php include 'topmenu.php'; ?>

	<div class="mt-[220px] mb-[610px] xl:zoom-80 lg:mt-[70px] lg:mb-[242px]">
		<div class="pl-[210px] lg:px-6">
			<div class="relative mb-[400px] lg:mb-[130px]">
				<div class="absolute -left-[146px] tf-y lg:-left-2">
					<!-- <img src="<?= get_template_directory_uri() ?>/images/contact-logo.svg"> -->
					<div class=""><img src="<?= get_template_directory_uri() ?>/images/logo-move.gif" class="w-[322px] xl:w-[280px] lg:w-[80px]" id="logo-move"></div>
				</div>
				<div class="font-en bt-move text-[#5b5b5b] text-[114px] lg:text-[52px] lg:pl-9">PROGRESS</div>
			</div>
		</div>

		<div class="max-w-[774px] mx-auto lg:text-center"><a href="https://85060160c.formosa-building.com.tw/">
			<div class="w-full text-center border border-[#727171] text-[53px] text-[#595757] tracking-wide py-9 lg:text-[15px] lg:py-5 lg:max-w-[60%] lg:mx-auto">
				查詢工程進度
			</div>
		</a></div>
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