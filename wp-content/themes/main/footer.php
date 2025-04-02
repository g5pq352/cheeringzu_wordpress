<footer class="relative z-10 footerWrap xl:zoom-80">
    <div class="relative h-screen pt-[426px] pl-[110px] pb-[100px] bg-[#115992] xl:h-full lg:pt-[52px] lg:px-8 lg:pb-5 lg:h-full">
    	<ul class="">
    		<li></li>
    	</ul>

		<div class="absolute tf-x top-[25vh] z-10 ml-[220px] xl:top-[35vh] lg:hidden">
			<svg width="1251.04" height="634.81" viewBox="0 0 1251.04 634.81">
				<polyline points="0 512.35 1251.04 634.81 673.15 408.1 0 512.35" style="fill: #fffcdb;"/>
				<g>
					<polyline points="17.79 .33 550.91 3.18 694.41 94.43" style="fill: none; stroke: #ffffff; stroke-miterlimit: 10; stroke-width: .5px;"/>
					<line x1="549.25" y1="5.86" x2="549.25" y2="93.62" style="fill: none; stroke: #ffffff; stroke-miterlimit: 10; stroke-width: .5px;"/>
					<g>
						<line x1="362.25" y1="92.58" x2="365.53" y2="408.1" style="fill: none; stroke: #ffffff; stroke-miterlimit: 10; stroke-width: .5px;"/>
						<polygon points="17.79 .33 17.79 512.35 365.53 408.1 694.41 408.1 694.41 94.43 362.25 92.58 17.79 .33" style="fill: none; stroke: #ffffff; stroke-miterlimit: 10; stroke-width: .5px;"/>
					</g>
					<g>
						<line x1="560.32" y1="408.1" x2="625.52" y2="512.35" style="fill: none; stroke: #115992; stroke-miterlimit: 10; stroke-width: .5px;"/>
						<polyline points="17.79 512.35 625.52 512.35 694.41 408.1" style="fill: none; stroke: #115992; stroke-miterlimit: 10; stroke-width: .5px;"/>
					</g>
				</g>
			</svg>
			<div class="ball-items">
				<div class="ball-container absolute overflow-hidden top-0 left-0 w-[700px] h-[520px]">
					<div class="ball contact-ball absolute left-[292px] top-[184px] w-[146px] h-[146px] bg-[#599cad] rounded-full"></div>
				</div>
			</div>
		</div>

		<div class="h-full text-white">
			<div class="absolute right-[116px] top-[108px] z-50 lg:hidden">
				<ul v-scope="{
		            posts: [{
		            	title: `ABOUT`,
		            	link: `<?= home_url() ?>/about`,
		            }, {
		            	title: `PROJECTS`,
		            	link: `<?= home_url() ?>/project`,
		            }, {
		            	title: `GALLERY`,
		            	link: `<?= home_url() ?>/gallery`,
		            }, {
		            	title: `NEWS`,
		            	link: `<?= home_url() ?>/news`,
		            }, {
		            	title: `CONTACTUS`,
		            	link: `<?= home_url() ?>/contactus`,
		            }]
	        	}">
					<li v-for="p in posts"><a :href="p.link">
						<div class="text-white font-en text-[56px] leading-none">{{p.title}}</div>
					</a></li>
				</ul>
			</div>
				
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
			<nav class="flex items-center space-x-5 lg:space-x-3">
				<a href="" class="group transition-all duration-500 hover:scale-110"><svg width="43.46" height="43.46" viewBox="0 0 43.46 43.46" class="lg:max-w-[32px] lg:h-auto">
					<circle cx="21.73" cy="21.73" r="21.73" class="fill-white transition-all duration-300 group-hover:fill-[#599cad]"/>
					<path d="M15.43,19.15h2.89s-1.11-8.5,5.64-8.59c0,0,3.19-.14,4.08,.29v3.82s-4.3-.94-4.76,1.86l.05,2.76,4.47-.14-.71,4.2h-3.73v9.51s-4.59,.31-5.08-.43v-8.93l-2.84-.06v-4.3Z" class="fill-[#115992] transition-all duration-300 group-hover:fill-white"/>
				</svg></a>
				<a href="" class="group transition-all duration-500 hover:scale-110"><svg width="43.45" height="43.45" viewBox="0 0 43.45 43.45" class="lg:max-w-[32px] lg:h-auto">
					<circle cx="21.73" cy="21.73" r="21.73" class="fill-white transition-all duration-300 group-hover:fill-[#599cad]"/>
					<g>
					<path d="M21.89,20.93c0,.26,0,.52,0,.78,0,1.41-.01,2.81,0,4.22,0,.57-.21,.83-.79,.79-.22-.02-.44-.01-.67,0-.48,.03-.66-.19-.66-.66,0-2.89,.01-5.78,0-8.66,0-.48,.18-.62,.65-.67,.89-.08,1.52,.16,2.04,.95,.97,1.46,2.06,2.83,3.11,4.24,.17,.23,.36,.45,.69,.85,.07-.47,.13-.74,.13-1.01,.01-1.41,.04-2.82,0-4.22-.03-.87,.5-.8,1.06-.8,.54,0,1.01-.05,1,.77-.04,2.81-.02,5.63,0,8.44,0,.57-.2,.76-.78,.79-.79,.04-1.33-.18-1.8-.86-1.05-1.52-2.19-2.98-3.29-4.47-.14-.19-.31-.37-.46-.55-.08,.02-.16,.05-.24,.07Z" class="fill-[#115992] transition-all duration-300 group-hover:fill-white"/>
					<path d="M30.31,21.68c0-1.38,.02-2.77,0-4.15-.01-.55,.13-.81,.74-.8,1.7,.03,3.41,.03,5.11,0,.61-.01,.75,.25,.75,.8,0,1.24,.01,1.24-1.2,1.24-.86,0-1.73,.02-2.59,0-.91-.02-.65,.64-.7,1.14-.06,.54,.15,.75,.71,.73,1.01-.04,2.03,0,3.04-.02,.54-.01,.78,.2,.74,.74-.01,.12,0,.25,0,.37q0,.99-.97,1c-.94,0-1.88,.03-2.82,0-.8-.03-.68,.5-.69,.99-.01,.49-.04,.94,.69,.91,1.01-.04,2.03,0,3.04-.02,.53-.01,.81,.16,.75,.72,0,.05,0,.1,0,.15q.02,1.24-1.19,1.24c-1.53,0-3.06-.02-4.59,.01-.62,.01-.82-.22-.81-.82,.03-1.41,0-2.82,0-4.22Z" class="fill-[#115992] transition-all duration-300 group-hover:fill-white"/>
					<path d="M7.64,21.72c0-1.38,.03-2.76-.01-4.15-.02-.66,.24-.91,.87-.84,.17,.02,.35,.02,.52,0,.54-.04,.74,.19,.73,.74-.02,2.1,.01,4.2-.02,6.29,0,.64,.19,.89,.85,.86,.96-.04,1.93,.03,2.89-.02,.7-.04,.95,.24,.87,.91-.02,.17,0,.35,0,.52,.01,.46-.2,.68-.66,.68-1.8,0-3.6,0-5.4,0-.51,0-.62-.27-.62-.7,.01-1.43,0-2.86,0-4.29Z" class="fill-[#115992] transition-all duration-300 group-hover:fill-white"/>
					<path d="M15.93,21.71c0-1.38,.02-2.77,0-4.15-.01-.6,.17-.89,.8-.83,.22,.02,.44,.01,.67,0,.48-.02,.65,.2,.65,.67-.01,2.86-.01,5.73,0,8.59,0,.49-.16,.71-.68,.72-1.42,.04-1.42,.06-1.42-1.38,0-1.21,0-2.42,0-3.63Z" class="fill-[#115992] transition-all duration-300 group-hover:fill-white"/>
					</g>
				</svg></a>
				<a href="" class="group transition-all duration-500 hover:scale-110"><svg width="43.45" height="43.45" viewBox="0 0 43.45 43.45" class="lg:max-w-[32px] lg:h-auto">
					<circle cx="21.73" cy="21.73" r="21.73" class="fill-white transition-all duration-300 group-hover:fill-[#599cad]"/>
					<path d="M18.52,18.87c.12,.17,.23,.31,.33,.46,.39,.57,.84,1.11,1.3,1.63,.9,1.02,1.84,1.99,2.86,2.88,.77,.67,1.54,1.35,2.31,2.03,.17,.15,.35,.28,.53,.42,.06-.04,.12-.07,.16-.11,.22-.2,.43-.41,.65-.6,.26-.23,.52-.46,.8-.67,.2-.15,.41-.28,.63-.4,.16-.09,.34-.15,.52-.2,.41-.11,.79-.03,1.14,.23,1.06,.77,2.12,1.54,3.18,2.31,.23,.17,.46,.34,.69,.5,.28,.2,.52,.44,.69,.74,.22,.38,.29,.78,.19,1.21-.14,.62-.33,1.22-.6,1.8-.21,.44-.47,.86-.79,1.23-.71,.82-1.62,1.29-2.69,1.45-.95,.14-1.88,.04-2.81-.19-.98-.24-1.91-.62-2.82-1.07-1.29-.65-2.5-1.43-3.65-2.31-2.82-2.15-5.25-4.68-7.26-7.6-.77-1.12-1.44-2.29-1.97-3.54-.34-.8-.61-1.62-.76-2.47-.13-.73-.18-1.47-.08-2.21,.17-1.18,.7-2.16,1.65-2.89,.61-.48,1.31-.79,2.05-1.01,.23-.07,.46-.12,.7-.18,.45-.11,.87-.04,1.26,.2,.28,.17,.5,.39,.7,.66,.94,1.29,1.87,2.58,2.81,3.87,.12,.16,.21,.33,.26,.52,.06,.24,.03,.48-.04,.71-.06,.22-.15,.42-.27,.61-.17,.29-.36,.55-.57,.8-.28,.32-.56,.62-.84,.93-.08,.09-.17,.18-.25,.27Z" class="fill-[#115992] transition-all duration-300 group-hover:fill-white"/>
				</svg></a>
			</nav>
			<div class="relative hidden lg:inline-block mt-[68px] mb-[44px]">
				<svg width="310.23" height="249.22" viewBox="0 0 310.23 249.22">
					<g>
					<polyline points="112.59 147.07 0 249.22 289.97 147.2 309.73 117.6 111.57 147.07" style="fill: #fffcdb;"/>
					</g>
					<g>
					<g>
					<polyline points="113.12 .32 268.23 1.14 309.98 27.37" style="fill: none; opacity: .3; stroke: #ffffff; stroke-miterlimit: 10; stroke-width: 1px;" class="contact-line"/>
					<line x1="267.75" y1="1.92" x2="267.75" y2="27.14" style="fill: none; opacity: .3; stroke: #ffffff; stroke-miterlimit: 10; stroke-width: 1px;" class="contact-line"/>
					<g style="opacity: .3;">
					<line x1="213.34" y1="26.84" x2="214.29" y2="117.52" style="fill: none; stroke: #ffffff; stroke-miterlimit: 10; stroke-width: 1px;" class="contact-line"/>
					<polygon points="113.12 .32 113.12 147.48 214.29 117.52 309.98 117.52 309.98 27.37 213.34 26.84 113.12 .32" style="fill: none; stroke: #ffffff; stroke-miterlimit: 10; stroke-width: 1px;" class="contact-line"/>
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
						<div class="ball contact-ball absolute right-0 top-1 w-[24px] h-[24px] bg-[#599cad] rounded-full"></div>
					</div>
				</div>
			</div>
			<div class="tracking-normal mt-10">
				<div class="text-sm lg:text-xs">©CHeerING ZU RIGHTS RESERVED</div>
				<div class="text-xs opacity-40 zoom-90">SITE BY <a href="javascript:;">很好設計 GOODS DESIGN</a></div>
			</div>
		</div>
		<div class="absolute tf-x top-[25vh] z-10 ml-[230px] opacity-0 lg:hidden">
			<svg width="1251.04" height="634.81" viewBox="0 0 1251.04 634.81">
				<polyline points="0 512.35 1251.04 634.81 673.15 408.1 0 512.35" style="fill: #fffcdb;"/>
				<g>
					<polyline points="17.79 .33 550.91 3.18 694.41 94.43" style="fill: none; stroke: #115992; stroke-miterlimit: 10; stroke-width: .5px;"/>
					<line x1="549.25" y1="5.86" x2="549.25" y2="93.62" style="fill: none; stroke: #115992; stroke-miterlimit: 10; stroke-width: .5px;"/>
					<g>
						<line x1="362.25" y1="92.58" x2="365.53" y2="408.1" style="fill: none; stroke: #115992; stroke-miterlimit: 10; stroke-width: .5px;"/>
						<polygon points="17.79 .33 17.79 512.35 365.53 408.1 694.41 408.1 694.41 94.43 362.25 92.58 17.79 .33" style="fill: none; stroke: #115992; stroke-miterlimit: 10; stroke-width: .5px;"/>
					</g>
					<circle cx="365.53" cy="250.34" r="73.14" style="fill: #115992;" class="contact-ball"/>
					<g>
						<line x1="560.32" y1="408.1" x2="625.52" y2="512.35" style="fill: none; stroke: #115992; stroke-miterlimit: 10; stroke-width: .5px;"/>
						<polyline points="17.79 512.35 625.52 512.35 694.41 408.1" style="fill: none; stroke: #115992; stroke-miterlimit: 10; stroke-width: .5px;"/>
					</g>
				</g>
			</svg>
		</div>
		<div class="absolute right-20 bottom-[100px] backtotop z-10 lg:right-5 lg:bottom-5"><img src="<?= get_template_directory_uri() ?>/images/backtotop.svg" class="lg:max-w-[36px]"></div>
	</div>
</footer>