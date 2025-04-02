<?php
// 獲取當前文章相關資料
$post_id = get_the_ID();

// 文章分類
$cat = get_post_category_name($post_id, 'new_category');

$title = get_the_title($post_id); // 文章標題
$date = get_post_published_date($post_id); // 發布日期

// $thumbnail_url = get_image_url($post_id, 'news_image'); // 特色圖片
// $thumbnail_alt = get_image_alt($post_id, 'news_image'); // 特色圖片

?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body>
	<?php include 'topmenu.php'; ?>

	<div class="bg-[#efefef] pt-[270px] pb-[252px] xl:zoom-80 lg:pt-[72px] lg:pb-[160px]">
		<div class="max-w-[1505px] mx-auto relative lg:px-7">
			<div class="max-w-[1100px]">
				<div class="flex items-center mb-12">
					<div class="clip-cat inline-block text-[20px] tracking-wide text-white bg-[#088282] py-1 pl-7 pr-3 lg:text-xs lg:pl-5 lg:pr-2"><?= esc_html($cat) ?></div>
					<div class="w-[158px] h-px bg-[#595757] mx-3 lg:w-[86px]"></div>
					<div class="font-num text-[#898989] text-[22px] lg:text-sm"><?= $date ?></div>
				</div>
				<div class="text-[#595757] text-[45px] tracking-wide lg:text-[19px]"><?= esc_html($title); ?></div>
				<div class="content mt-[120px] text-justify leading-relaxed tracking-normal lg:text-[14px] lg:mt-[64px]">
					<?= the_content(); ?>
					<!-- <div class="mb-[150px] lg:mb-[64px]">
						<div class="mb-[64px]"><img src="<?= get_template_directory_uri() ?>/images/news-d-1.jpg"></div>
						<div class="">隨著舊台中市進入「全面5字頭」時代，近期推案重心逐漸回歸機能、支撐性俱佳的市中心，其中在科博館、中國附醫兩大引擎的加持下，北區吸引了不少品牌建商布局推案，推案量創下多年來新高，業者稱，房市由自住客當道，地段、品牌、品質兼備的住宅，才能夠獲得青睞。</div>
					</div>
					<div class="text-justify">
						北區生活環境優異，品牌建商大舉回歸。<br>
						<br>
						台中北區為指名度頗高的醫療、文教聚落，雖開發趨於飽和，每年推案量都不多，但在近年「危老條例」頒布後，北區的發展迎來新曙光，不少幼兒園、汽車旅館紛紛被建商收購，自2022年起，每年推案都開始量增超過1百億，不僅大型基地開發案增多，知名品牌建商更紛紛搶進。<br>
						<br>
						誠邑築建設總經理沈瑞興直言，2021年底央行針對土融管制趨嚴，但危老案件受政府支持，放貸條件寬容，直接讓危老案大行其道，台中目前已核准的危老案有615件，居全台第二，對許多規模中等、講究品質的建商而言，規劃危老建案，是目前打造理想住宅為數不多的方式。<br>
						<br>
						其中機能成熟、環境優異的北區，向來都是品牌、甚至豪宅建商鍾愛的地段，也是危老建案的重點戰場，近兩年已推案或持續購地布局的，包括誠邑築、長安、磐鈺、惠宇、麗晨、以及聯聚旗下理仁建設，清一色都是台中知名品牌，已公開建案銷況多優異，也印證極強的區域競爭力。<br>
						<br>
						<br>
						<br>
						<img src="<?= get_template_directory_uri() ?>/images/news-d-2.jpg">
						<br>
						<br>
						<br>
						當地指標案「澄亦實築」銷況佳。<br>
						<br>
						由誠邑築建設推出的「澄亦實築」尤其獲得青睞，該案位於健行國小第一排，規劃「澄玥」、「澄杏」兩座社區，一樓無店面，並於開放式庭園種下日本銀杏大道，公設走極簡白派風、住宅方正戶戶邊間，精緻且均質，目前全案已銷售近8成。<br>
						<br>
						沈瑞興指出，由於該案鄰近中國附醫，已售戶有超過5成都是醫師等醫療相關的族群，「醫界菁英收入不受景氣影響，較長工時也讓就近購屋、租屋成為常態，誠邑築就是相中這塊地近醫院的潛力，加上能同享育德、科博綠地的悠閒，無論是置產或自住都很具競爭力。」
					</div> -->
				</div>
				<div class="text-right mt-[220px] lg:text-center lg:mt-[140px]">
					<div class="inline-block">
						<a href="javascript:;" onclick="history.back()" class="flex items-center">
						<span class="font-en text-[#595757] text-[15px] font-light tracking-normal mr-4">BACK VIEW ALL NEWS</span>
						<span class="mb-3 lg:mb-0">
							<svg width="249.67" height="20.11" viewBox="0 0 249.67 20.11" class="lg:hidden">
								<line y1="14.89" x2="249.67" y2="14.89" style="fill: none; stroke: #595757; stroke-miterlimit: 10; stroke-width: .79px;"/>
								<rect x="184.33" y="9.16" width="62.02" height="1.8" transform="translate(418.02 83.52) rotate(-162.75)" style="fill: #115992;"/>
							</svg>
							<svg width="53.32" height="14.73" viewBox="0 0 53.32 14.73" class="hidden lg:block">
								<line y1="9.88" x2="53.32" y2="9.88" style="fill: none; stroke: #595757; stroke-miterlimit: 10; stroke-width: .79px;"/>
								<line x1="28.99" y1=".88" x2="52.73" y2="13.86" style="fill: none; stroke: #115992; stroke-miterlimit: 10; stroke-width: 2px;"/>
							</svg>
						</span>
					</a></div>
				</div>
			</div>
			<div class="absolute top-0 right-0 h-full lg:hidden">
				<div class="sticky top-20 flex flex-col items-center xl:top-40">
					<div class="text-[#595757] text-[26px] font-medium border-b-2 border-[#005188] pb-3 mb-10">SHARE</div>
					<nav class="space-y-3">
						<a href="javascript:;" class="block basic-hover"><svg width="45.2" height="45.2" viewBox="0 0 45.2 45.2">
							<circle cx="22.6" cy="22.6" r="22.6" style="fill: #005188;"/>
							<path d="M15.81,20.86h2.62s-1.01-7.71,5.12-7.8c0,0,2.89-.13,3.7,.27v3.47s-3.9-.85-4.32,1.69l.05,2.5,4.05-.13-.64,3.82h-3.38v8.63s-4.16,.28-4.61-.39v-8.11l-2.58-.06v-3.9Z" style="fill: #fff;"/>
						</svg></a>
						<a href="javascript:;" class="block basic-hover"><svg width="45.2" height="45.2" viewBox="0 0 45.2 45.2">
							<circle cx="22.6" cy="22.6" r="22.6" style="fill: #005188;"/>
							<g>
							<path d="M22.22,33.31c-2.02,0-4.05,0-6.07,0-2.29,0-3.75-1.46-3.75-3.77,0-4.04,0-8.08,0-12.12,0-2.35,1.44-3.78,3.77-3.79,1.3,0,2.6,0,3.9,0,.81,0,1.31,.44,1.3,1.12,0,.68-.5,1.1-1.32,1.1-1.3,0-2.6,0-3.9,0-1.02,0-1.51,.49-1.51,1.51,0,4.04,0,8.08,0,12.12,0,1.15,.45,1.58,1.6,1.58,4.01,0,8.02,0,12.03,0,1.18,0,1.62-.44,1.62-1.63,0-1.77,0-3.55,0-5.32,0-.49,.13-.91,.6-1.15,.74-.37,1.6,.1,1.62,.94,.03,2.08,.08,4.16-.02,6.23-.08,1.81-1.63,3.14-3.52,3.16-2.12,.02-4.24,0-6.36,0Z" style="fill: #fff;"/>
							<path d="M16.68,26.44c.11-4.99,2.55-8.49,6.95-10.71,1.91-.96,3.94-1.55,6.04-1.91,.48-.08,.72-.23,.67-.75-.05-.43,.03-.84,.48-1.07,.45-.23,.81-.03,1.17,.21,1.79,1.2,3.59,2.39,5.38,3.59,.78,.52,.77,1-.01,1.53-1.74,1.17-3.49,2.33-5.23,3.5-.4,.27-.79,.57-1.31,.3-.5-.26-.49-.73-.47-1.2,0-.31-.07-.5-.43-.53-2.5-.15-4.97-.06-7.3,1-2.81,1.27-4.33,3.57-5.15,6.43-.06,.2-.08,.42-.16,.61-.07,.15-.21,.27-.32,.41-.09-.16-.24-.32-.27-.49-.04-.3-.01-.61-.01-.91Z" style="fill: #fff;"/>
							</g>
						</svg></a>
						<a href="javascript:;" class="block basic-hover"><svg width="45.2" height="45.2" viewBox="0 0 45.2 45.2">
							<circle cx="22.6" cy="22.6" r="22.6" style="fill: #005188;"/>
							<g>
							<path d="M34.81,16.4c-.03,2.04-.61,3.5-1.79,4.71-1.43,1.45-2.86,2.9-4.32,4.32-2.42,2.36-6.44,2.37-8.74,.06-.51-.52-.64-1.19-.34-1.74,.3-.56,.95-.85,1.57-.66,.26,.08,.51,.25,.72,.43,1.62,1.33,3.48,1.26,4.98-.21,1.33-1.31,2.66-2.63,3.97-3.96,1.5-1.51,1.56-3.64,.15-5.07-1.4-1.42-3.56-1.38-5.08,.11-.64,.63-1.27,1.27-1.92,1.9-.64,.62-1.47,.66-2.03,.13-.6-.57-.6-1.4,.05-2.07,.76-.78,1.5-1.59,2.32-2.29,2.05-1.75,4.39-2.11,6.82-.99,2.39,1.1,3.54,3.1,3.63,5.36Z" style="fill: #fff;"/>
							<path d="M21.02,18.04c1.53,.02,2.96,.55,4.17,1.65,.69,.63,.78,1.47,.24,2.08-.53,.61-1.35,.61-2.09,0-1.69-1.38-3.55-1.29-5.09,.25-1.31,1.3-2.62,2.6-3.92,3.92-1.49,1.51-1.53,3.67-.1,5.07,1.41,1.39,3.53,1.34,5.03-.11,.64-.63,1.27-1.28,1.92-1.9,.69-.67,1.49-.71,2.08-.14,.59,.58,.54,1.43-.14,2.13-.66,.67-1.33,1.35-2.01,2-2.47,2.39-6.37,2.4-8.79,.03-2.48-2.43-2.58-6.3-.18-8.81,1.47-1.54,2.99-3.03,4.52-4.51,1.18-1.13,2.63-1.66,4.36-1.67Z" style="fill: #fff;"/>
							</g>
						</svg></a>
					</nav>
				</div>
			</div>
		</div>
		
	</div>

	<?php include 'footer.php'; ?>
</body>

<?php include 'script.php'; ?>
</html>

<script>
if(device != 'mobile'){
	// $(".content img").addClass("img-cover")
	$("img.alignnone").addClass("img-cover")
}
</script>