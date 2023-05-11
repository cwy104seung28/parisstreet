$(window).on("resize", function() {
	if ($(this).width() > 1025) {
		if (window.device == 'mobile') {
			location.reload()
		}
		window.device = 'desktop';
	} else {
		// if (window.device == 'desktop') {
		// 	location.reload()
		// }
		window.device = 'mobile';
	}
}).trigger("resize")






window.lazySizesConfig = window.lazySizesConfig || {};
lazySizesConfig.preloadAfterLoad = true;


// after all load callback
$('img.lazyload').on('load', function() {
	var _p = document.querySelectorAll('img.lazyload').length
	if (_p % 5 == 0) {
		ScrollTrigger.refresh();
	}
});







// $("a").not("[href='javascript:;']").not("[href^='tel:']").not("[target='_blank']").not("[data-fancybox]").not("[data-share]").not("[onclick^='window.open']").on("click", function(e) {
// 	e.preventDefault()

// 	$("#preload").fadeIn(500, () => {
// 		location.href = $(this).attr('href')

// 		var _goto = $(this).attr('href').split("#");
// 		var _gotoName = _goto[0].split("/").pop();

// 		var _now = location.href.split("#");
// 		var _nowName = _now[0].split("/").pop();

// 		if (_gotoName == _nowName) {
// 			gsap.delayedCall(0.1, function() {
// 				location.reload()
// 			});
// 		}
// 	})
// })



// 解決 safari hitory.back() reload 問題
$(window).on("pageshow", function(event) {
	if (event.originalEvent.persisted) {
		window.location.reload()
	}
});



$("#preload").delay(500).fadeOut(500)





if (navigator.appVersion.indexOf("Mac") != -1) {
	$("body").get(0).style.setProperty('--lock', "15px");
} else {
	$("body").get(0).style.setProperty('--lock', "17px");
}



var videoLoad = (function() {
	var vids = document.getElementsByTagName("video");

	for (let el of vids) {
		el.addEventListener("canplaythrough", function() {
			this.classList.add("is-show")
			this.play()
		})

		el.load();
	}
})()






// 1個變好多個
$(".marquee").each(function(i, el) {
	$(el).append($(el).contents().clone())
	$(el).append($(el).contents().clone())
	$(el).append($(el).contents().clone())
})




// $(".hamburger-area").on("click", function() {
// 	$(".topmenu-preload").addClass("is-show")
// 	$(".topmenuWrap").addClass("is-show")

// 	$(".amazeWrap .marquee").addClass("is-show")
// })

$(".topmenuWrap .close").on("click", function() {
	$(".topmenu-preload").removeClass("is-show")
	$(".topmenuWrap").removeClass("is-show")
})

$(".list-area .class").click(function() {
	$(".class-list").toggleClass("is-show");
});
$(".profile").click(function() {
	// $(".member-area").addClass("is-show");
	$(".login-area").addClass("is-show");
	$("html").addClass("is-locked");
});
$(".member-area .close").click(function() {
	$(".member-area").removeClass("is-show");
	$("html").removeClass("is-locked");
});


$(".step-1 li").click(function() {
	$(".step-2").addClass("is-show");
});
$(".step-2 li").click(function() {
	$(".step-3").addClass("is-show");
});

$(".loginWrap .login").on("click", function() {
	$(".login-area").removeClass("is-show")
	$(".member-area").addClass("is-show");
})



$(".scroll").on("click", function() {
	gsap.to(window, {
		duration: 1.2,
		scrollTo: $(window).height(),
		ease: 'power2.inOut',
	});
})






$.fn.BtnHover = function() {
	return this.each(function() {
		var $this = $(this)
		var _w = $this.width()
		var _h = $this.height()

		var deFault = {
			friction: $this.data("friction") || .3
		};

		function mouseEnter() {
			// TweenMax.to($this, .3, {
			// 	scale: 1.15,
			// 	opacity: 1,
			// });
		}

		function mouseLeave() {
			gsap.to($(".box", this), .3, {
				scale: 1,
				x: 0,
				y: 0,
			});

			gsap.to($(".text", this), .3, {
				scale: 1,
				x: 0,
				y: 0,
			});
		}


		function mouseMoving(e) {
			var x = e.offsetX;
			var y = e.offsetY;

			var mx = x - _w / 2
			var my = y - _h / 2

			gsap.to($(".box", this), .1, {
				scale: 0.9,
				x: mx * deFault.friction,
				y: my * deFault.friction,
				ease: 'none'
			});

			gsap.to($(".text", this), .1, {
				scale: 1.1,
				x: mx * deFault.friction * 0.6,
				y: my * deFault.friction * 0.6,
				ease: 'none'
			});
		}

		$this.on("mousemove", mouseMoving);
		$this.on("mouseenter", mouseEnter);
		$this.on("mouseleave", mouseLeave);
	});
};

$("[data-friction]").BtnHover()




$(".ryder-split").each(function(i, el) {
	gsap.from(el, {
		scrollTrigger: {
			trigger: el,
			start: "top 80%",
			end: "bottom 50%",
			toggleActions: "play none play none",
		},
		duration: .5,
		opacity: 0,
		y: 30,
		ease: "power1.out",
		onComplete: function() {
			gsap.from(el, {
				duration: .1,
				opacity: 0,
				repeat: 1,
			})
		}
	});
})





$("[data-r]").each(function(i, el) {

	if (device == 'mobile' && $(el).data("mobile-r") != undefined) {
		var _p = $(el).data("mobile-r")
	} else {
		var _p = $(el).data("r")
	}

	var _st_default = {
		trigger: el,
		start: "top 80%",
		end: "bottom 0%",
		toggleActions: "play none play none",
		// markers: true,
	}

	var _st = Object.assign(_st_default, _p.scrollTrigger)

	var _t = $(el).offset().top
	var _hook = $(window).height() * _st.start.replace(/[^0-9]/g, '') / 100

	if (_t <= _hook) {
		_p.delay = (_p.delay != undefined) ? _p.delay += 1 : 1
	}

	delete _p.scrollTrigger

	var _setting = {
		scrollTrigger: _st,
		duration: 1.2,
		// opacity: 0,
		ease: "power2.out",
	}

	if (_p != '' && "stagger" in _p) {
		var $el = $(el).children()
	} else {
		var $el = el
	}

	var _obj = Object.assign(_setting, _p);

	gsap.from($el, _obj);
})





// gsap.from('.index-bannerWrap .logo', {
// 	duration: 1,
// 	opacity: 0,
// 	// scaleX: 2,
// 	onUpdate: function () {
// 		var _p = this.progress()

// 		this._targets.forEach(function (el, i) {

// 			$("img", el).css({
// 				filter: `drop-shadow(${40 * (1 - _p) * Math.sin(_p * 4)}px ${40 * (1 - _p) * Math.cos(_p * 4)}px 6px #fff)`
// 			})
// 		})
// 	}
// })