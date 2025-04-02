$(window).on("resize", function (){
	if ($(this).width() > 1025) {
		if (window.device == 'mobile') {
			location.reload()
		}
		window.device = 'desktop';
	}else{
		if (window.device == 'desktop') {
			location.reload()
		}
		window.device = 'mobile';
	}
}).trigger("resize")

$.fn.ryderCool = function(option) {
	return this.each(function() {
		var $this = $(this);

		var deFault = {
			hook: 0.9,
			repeat: false,
			enter_check: true,
			leave_check: true,
			count: 0,
			enter() {},
			leave() {}
		};

		var setting = $.extend(deFault, option);

		function ryderScrolling() {
			var scrollTop = $(window).scrollTop(),
				elementOffset = $this.offset().top,
				distance = (elementOffset - scrollTop),
				windowHeight = $(window).height(),
				breakPoint = windowHeight * setting.hook,
				leavePoint = $this.height() - windowHeight * (1 - setting.hook);

			if (distance > breakPoint || distance < -leavePoint) {

				if (setting.count >= 1) {
					setting.enter_check = setting.repeat;
				}

				setting.leave_check && setting.leave($this);
				setting.leave_check = false;

			}else if (distance < breakPoint) {

				setting.enter_check && setting.enter($this);
				setting.enter_check && setting.count++;
				setting.enter_check = false;
				setting.leave_check = true;
			}
		}

		$(window).on("scroll", ryderScrolling).trigger("scroll");
	});
};

class RyderMarquee {
	constructor(el, direct = 0) {
		this.hero = $(el).parent().get(0)
		this.wrapper = el
		this.delta = 0
		this.transform = 0
		this.step = (device == 'mobile') ? 0.4 : 0.8
		this.direct = direct % 2
		this.hover = false

		if (this.direct == 1) {
			this.wrapper.style.transform = `translate3d(-${this.wrapper.getBoundingClientRect().width / 2}px, 0, 0)`;
			this.transform = -this.wrapper.getBoundingClientRect().width / 2
		}

		// if (device != 'mobile') {
		// 	$(el).hover(() => {
		// 		this.hover = true
		// 	}, () => {
		// 		this.hover = false
		// 	})
		// }
	}

	animate() {
		if (!this.hover) {
			this.transform += this.step
		}

		if (this.direct == 1) {
			if (this.transform > 0) {
				this.transform = -this.wrapper.getBoundingClientRect().width / 2;
			}
			this.wrapper.style.transform = `translate3d(${this.transform}px, 0, 0)`;
		} else {
			if (this.transform > this.wrapper.getBoundingClientRect().width / 2) {
				this.transform = 0;
			}
			this.wrapper.style.transform = `translate3d(-${this.transform}px, 0, 0)`;
		}
	}

	render() {
		this.scrollY = $(window).scrollTop()

		const bounding = this.hero.getBoundingClientRect();
		const distance = (window.innerHeight + this.scrollY) - (bounding.top + this.scrollY);
		const percentage = distance / ((window.innerHeight + bounding.height) / 100);

		this.animate();
	}

	create() {
		gsap.ticker.add(this.render.bind(this));
	}
}

$(".marquee").each(function (i, el) {
	var $copy = $(el).contents().clone()
	$(el).append($copy)

	var ryderMarquee = new RyderMarquee(el, i).create()
})



$("[data-r]").each(function (i, el) {

	if (device == 'mobile' && $(el).data("mobile-r") != undefined) {
		var _p = $(el).data("mobile-r")
	}else{
		var _p = $(el).data("r")
	}

	var _st_default = {
		trigger: el,
		start: "top 80%",
		end: "bottom 0%",
		toggleActions: "play none play none",
		// markers: true,
	}

	var _st =  Object.assign(_st_default, _p.scrollTrigger)

	var _t = $(el).offset().top
	var _hook = $(window).height() * _st.start.replace(/[^0-9]/g, '') / 100


	if (_t <= _hook) {
		_p.delay = (_p.delay != undefined) ? _p.delay : .3
	}

	delete _p.scrollTrigger

	var _setting = {
		scrollTrigger: _st,
		duration: 1.4,
		opacity: 0,
		delay: _p.delay,
		ease: "power2.out",
	}

	if (_p != '' && "stagger" in _p){
		var $el = $(el).children()
	}else{
		var $el = el
	}

	var _obj = Object.assign(_setting, _p);

	gsap.from($el, _obj);
})

$("[data-depth]").each(function (i, el) {
	gsap.to(el, {
		scrollTrigger: {
			trigger: el,
			start: "top top",
			end: "bottom top",
			scrub: true,
		},
		y: `${$(window).height() * el.dataset.depth}px`,
     	ease: "none",
	});
})


$("#preload").delay(100).fadeOut(500)



var _scrollLast = 0
$(window).on("scroll", () => {
	var _scrollTop = $(window).scrollTop()
	var _allBottom = $("body").height() - $(window).height() - 100

	if (_scrollTop < 0 || _scrollTop > _allBottom) {
		return false;
	}

	if (_scrollTop > _scrollLast) {
		$("#topmenuWrap").addClass("is-hide")
	} else {
		$("#topmenuWrap").removeClass("is-hide")
	}

	_scrollLast = _scrollTop
})

$(".backtotop").on("click", function () {
	gsap.to(window, {
		duration: 1.2,
		scrollTo: 0,
		ease: Power2.easeInOut,
	});
})

$(".footerWrap").ryderCool({
	hook: 0.5,
	repeat: true,
	enter(el){
		$("#top-logo").addClass("is-hide")
	},
	leave(el){
		$("#top-logo").removeClass("is-hide")
	},
})

$(".hamburger").on("click", function(){
	$(this).toggleClass("is-open")
	$("#menuOpenWrap").toggleClass("pointer-events-none opacity-0")
})

function menuHandler(el){

	$("#menuList", el).find("li").on("mouseenter", (e) => {
		var _this = $(e.currentTarget).index()
	    $("#bgList", el).find("li").eq(_this).removeClass("opacity-0").siblings().addClass("opacity-0")
	});


	// $("#menuList", el).find("li").on("mouseenter", (e) => {

	// 	// var _this = $(e.currentTarget).index()

	// 	console.log(_this)



	// 	// $("#bgList", el).find("li").eq(_this).removeClass("opacity-0").siblings().addClass("opacity-0")

	// },function(){

	// });

}


function randomBallHandler() {
    const ballItems = document.querySelectorAll('.ball-items'); // 获取所有的 .ball-items

    ballItems.forEach(item => {
        const container = item.querySelector('.ball-container'); // 获取该 ball-items 内的 container
        const ball = item.querySelector('.contact-ball'); // 获取该 ball-items 内的球

        if (!container || !ball) return; // 如果 container 或 ball 不存在，则跳过

        let velocityX = device == 'mobile' ? 1.2 : 2;  // X轴上的速度
        let velocityY = device == 'mobile' ? 1.2 : 2;  // Y轴上的速度

        function moveBall() {
            const ballRect = ball.getBoundingClientRect();
            const containerRect = container.getBoundingClientRect();

            // 检测碰撞容器的边缘，反转速度
            if (ballRect.left <= containerRect.left || ballRect.right >= containerRect.right) {
                velocityX = -velocityX;
            }
            if (ballRect.top <= containerRect.top || ballRect.bottom >= containerRect.bottom) {
                velocityY = -velocityY;
            }

            // 使用 GSAP 动画移动球
            gsap.to(ball, {
                x: "+=" + velocityX,  
                y: "+=" + velocityY,
                duration: 0.005,
                ease: "none",
                onComplete: moveBall
            });
        }

        // **独立的 scale 呼吸动画**
        function animateBreathing() {
            gsap.to(ball, {
                scale: 0.3, // 放大
                duration: 3, // 1 秒完成
                ease: "none",
                yoyo: true, // 反向动画（缩小回来）
                repeat: -1 // 无限循环
            });
        }

        // 初始化移动
        moveBall();
        animateBreathing();
    });
}

// gsap.to(".contact-ball", {
//     scale: 0.5, // 放大
//     duration: 4, // 1 秒完成
//     ease: "none",
//     yoyo: true, // 反向动画（缩小回来）
//     repeat: -1 // 无限循环
// });


// 调用函数，启动动画
// randomBallHandler();


class Cursor {
    constructor(item, setting) {
        this.$cursor = $('.custom-cursor');
        this.$cursorItem = $('.custom-cursor .cursor');
        this.$cursorArrow = $('.custom-cursor .arrow');
        this.mouseX = 0;
        this.mouseY = 0;
        this.lastX = 0;
        this.lastY = 0;
        this.speedX = 0;
        this.speedY = 0;
        this.stretchFactor = 1; // 拉伸因子

        Object.assign(this, setting);

        // 尝试捕获鼠标当前位置
        this.setInitialCursorPosition();

        this.init();
    }

    // 当前鼠标位置默认位置为屏幕中心
    setInitialCursorPosition() {
        gsap.set(this.$cursor, { x: window.innerWidth / 2, y: window.innerHeight / 2, xPercent: -50, yPercent: -50 });
    }

    init() {
        // 监听鼠标移动事件，使用箭头函数来保持正确的上下文
        $(document).mousemove((e) => {
        	$(this.$cursor).removeClass("opacity-0")

            // 使用 clientX 和 clientY 获取鼠标相对于视口的坐标
            this.mouseX = e.clientX;
            this.mouseY = e.clientY;

            // 计算鼠标移动的速度
            this.speedX = Math.abs(this.mouseX - this.lastX);
            this.speedY = Math.abs(this.mouseY - this.lastY);

            // 更新上一次鼠标的位置
            this.lastX = this.mouseX;
            this.lastY = this.mouseY;

            // 调整拉伸效果
            this.stretchFactor = Math.min(2, Math.max(1, this.speedX / 20)); // 控制拉伸比例，范围 1 到 3 倍

            // 更新游标位置和拉伸效果
            gsap.to(this.$cursor, {
                x: this.mouseX - 10,
                y: this.mouseY - 10,  // 不再添加滚动偏移，保持与鼠标同步
                duration: 0.8,
                ease: "power2.out"
            });

            // // 更新游标位置和拉伸效果
            // gsap.to(this.$cursorItem, {
            //     width: 20 * this.stretchFactor,  // 宽度基于速度拉伸
            //     height: 20 / this.stretchFactor, // 高度与宽度成反比缩小
            //     duration: 0.8,
            //     ease: "power2.out"
            // });
        });

        // 鼠标离开按钮或链接时，恢复游标样式
        $(document).on("mouseleave", "a, button, .mouse-arrow, input, select, textarea", () => {
            this.mouseMoreLeave();
        });

        // 鼠标进入圖片时，改变游标大小和颜色
        $(document).on("mouseenter", ".mouse-arrow", () => {
		    this.mouseMoreEnterArrow();
		});

		// 鼠标进入圖片时，改变游标大小和颜色
        $(document).on("mouseenter", "input, select, textarea", () => {
		    this.mouseMoreEnterOpacity();
		});
    }


    mouseMoreEnter() {
        gsap.to(this.$cursorItem, {
            scale: 2,
            backgroundColor: 'rgba(255, 0, 0, 0.7)',
            duration: 0.3,
            ease: "power2.out"
        });
    }

    mouseMoreEnterArrow() {
    	$(".cursor-arrow").removeClass("opacity-0")

        gsap.to(this.$cursorItem, {
            scale: 4,
            backgroundColor: '#088282',
            duration: 0.3,
            ease: "power2.out"
        });
    }

    mouseMoreEnterOpacity() {
        gsap.to(this.$cursorItem, {
            opacity: 0,
            duration: 0.3,
            ease: "power2.out"
        });
    }

    mouseMoreLeave() {
        $(".cursor-arrow").addClass("opacity-0")
    	
        gsap.to(this.$cursorItem, {
            scale: 1,
            backgroundColor: '#599cad',
            opacity: 1,
            duration: 0.3,
            ease: "power2.out"
        });
    }
}

// 实例化 Cursor 类
let $cursor = new Cursor({});


$(function(){
	randomBallHandler()
})


const lenis = new Lenis()

lenis.on('scroll', (e) => {
})

lenis.on('scroll', ScrollTrigger.update)

gsap.ticker.add((time)=>{
	lenis.raf(time * 1000)
})
gsap.ticker.lagSmoothing(0)


// First we get the viewport height and we multiple it by 1% to get a value for a vh unit
let vh = window.innerHeight * 0.01;
// Then we set the value in the --vh custom property to the root of the document
document.documentElement.style.setProperty('--vh', `${vh}px`);

function setVH() {
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
}

// 监听窗口变化，动态更新 vh
window.addEventListener('resize', setVH);
setVH(); // 初始调用