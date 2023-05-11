<?php
$now = 'home';
?>
<!DOCTYPE html>
<html>

<head>
	<?php include 'html_head.php'; ?>
</head>

<body>
	<?php include 'topmenu.php'; ?>
	<div class="ads-container is-show">
		<div class="ads-area">
			<div class="content">
				<a href="javacript:;" target="_blank">
					<img src="./img/ads-pic.jpg" alt="">
				</a>
			</div>
			<div class="close">
				<img class="show-for-large" src="./img/ads-close.svg" alt="">
				<img class="hide-for-large" src="./img/ads-close-mobile.svg" alt="">
			</div>
		</div>
	</div>
	<div class="banner-area">
		<!-- <ul class="banner-carousel">
			<li class="carousel-cell">
				<a href="./banner_detail.php">
					<img src="./img/banner.png" class="show-for-large">
					<img src="./img/banner-mobile.png" class="hide-for-large">
				</a>
			</li>
			<li class="carousel-cell">
				<a href="./banner_detail.php">
					<img src="./img/banner-2.jpg" class="show-for-large">
					<img src="./img/banner-2-mobile.png" class="hide-for-large">
				</a>
			</li>
		</ul> -->
		<div class="swiper mySwiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<a href="./banner_detail.php">
						<img src="./img/banner.png" class="show-for-large">
						<img src="./img/banner-mobile.png" class="hide-for-large">
					</a>
				</div>
				<div class="swiper-slide">
					<a href="./banner_detail.php">
						<img src="./img/banner-2.png" class="show-for-large">
						<img src="./img/banner-2-mobile.png" class="hide-for-large">
					</a>
				</div>
			</div>
			<div class="swiper-pagination"></div>
		</div>
		<div class="listWrap">
			<div class="banner-text flex-container align-center">
				<span class="en">LOUIS VUITTON&emsp;X</span>&emsp;草間彌生
			</div>
			<div class="other-text">
				<span class="en">PAINTED DOTS ・ INFINITY DOTS ・ METAL DOTS ・</span>
				男士系列...
			</div>
			<ul class="other-list show-for-large">
				<li style="opacity: 0; pointer-events: none;">
					<img src="./img/add.svg" alt="">
					<div class="text">加入珍藏</div>
				</li>
				<li>
					<img src="./img/buy.svg" alt="">
					<div class="text">立即選購</div>
				</li>
				<li>
					<img src="./img/list.svg" alt="">
					<div class="text">相關文章</div>
				</li>
			</ul>

			<ul class="other-list hide-for-large">
				<li style="opacity: 0; pointer-events: none;">
					<img src="./img/add-mobile.svg" alt="">
					<div class="text">加入珍藏</div>
				</li>
				<li>
					<img src="./img/buy-mobile.svg" alt="">
					<div class="text">立即選購</div>
				</li>
				<li>
					<img src="./img/list-mobile.svg" alt="">
					<div class="text">相關文章</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="content-area">
		<div class="content circle">
			<div class="title">熱門品牌</div>
			<ul class="carousel" data-flickity>
				<li class="carousel-cell">
					<a href="./brand.php">
						<img src="./img/brand-new-1.jpg">
						<div class="text-area">
							<div class="en small">LOUIS<br>VUITTON</div>
						</div>
						<!-- <img src="./img/brand1.png"> -->
						<!-- <div class="new">新品上架</div> -->
					</a>
				</li>
				<li class="carousel-cell">
					<a href="./brand.php">
						<img src="./img/brand-new-2.jpg">
						<div class="text-area">
							<div class="en small">CHANEL</div>
						</div>
						<!-- <img src="./img/brand2.png"> -->
					</a>
				</li>
				<li class="carousel-cell">
					<a href="./brand.php">
						<img src="./img/brand-new-3.jpg">
						<div class="text-area">
							<div class="en small">GUCCI</div>
						</div>
						<!-- <img src="./img/brand3.png"> -->
					</a>
				</li>
				<li class="carousel-cell">
					<a href="./brand.php">
						<img src="./img/brand-new-4.jpg">
						<div class="text-area">
							<div class="en small">BURBERRY</div>
						</div>
						<!-- <img src="./img/brand4.png"> -->
					</a>
				</li>
				<li class="carousel-cell">
					<a href="./brand.php">
						<img src="./img/brand-new-1.jpg">
						<div class="text-area">
							<div class="en small">LOUIS<br>VUITTON</div>
						</div>
						<!-- <img src="./img/brand5.png"> -->
					</a>
				</li>
				<li class="carousel-cell">
					<a href="./brand.php">
						<img src="./img/brand-new-2.jpg">
						<div class="text-area">
							<div class="en">CHANEL</div>
						</div>
						<!-- <img src="./img/brand6.png"> -->
					</a>
				</li>
			</ul>
		</div>
		<div class="content">
			<div class="title">瀏覽紀錄</div>
			<ul class="carousel" data-flickity>
				<li class="carousel-cell">
					<a href="./shop_detail.php">
						<img src="./img/browse1.png">
						<div class="text-area">
							<div class="en">LV</div>
							<div class="en small">BOULOGNE</div>
						</div>
					</a>
				</li>
				<li class="carousel-cell">
					<a href="./shop_detail.php">
						<img src="./img/browse2.png">
						<div class="text-area">
							<div class="en">CHANEL</div>
							<div class="ch">迷你相機包</div>
						</div>
					</a>
				</li>
				<li class="carousel-cell">
					<a href="./shop_detail.php">
						<img src="./img/browse3.png">
						<div class="text-area">
							<div class="en">CHANEL</div>
							<div class="ch">小型後背包</div>
						</div>
					</a>
				</li>
				<li class="carousel-cell">
					<a href="./shop_detail.php">
						<img src="./img/browse1.png">
						<div class="text-area">
							<div class="en">LV</div>
							<div class="en small">BOULOGNE</div>
						</div>
					</a>
				</li>
				<li class="carousel-cell">
					<a href="./shop_detail.php">
						<img src="./img/browse2.png">
						<div class="text-area">
							<div class="en">CHANEL</div>
							<div class="ch">迷你相機包</div>
						</div>
					</a>
				</li>
				<li class="carousel-cell">
					<a href="./shop_detail.php">
						<img src="./img/browse3.png">
						<div class="text-area">
							<div class="en">CHANEL</div>
							<div class="ch">迷你相機包</div>
						</div>
					</a>
				</li>
			</ul>
		</div>
		<div class="content">
			<div class="title">新品上架</div>
			<ul class="carousel" data-flickity>
				<li class="carousel-cell">
					<a href="./shop_detail.php">
						<img src="./img/new1.png">
						<div class="text-area">
							<div class="en">LV</div>
							<div class="en small">BOULOGNE</div>
						</div>
						<div class="new">新品上架</div>
					</a>
				</li>
				<li class="carousel-cell">
					<a href="./shop_detail.php">
						<img src="./img/new2.png">
						<div class="text-area">
							<div class="en">CHANEL</div>
							<div class="ch">迷你相機包迷你相機包迷你相機包迷你相機包迷你相機包迷你相機包</div>
						</div>
						<div class="new">新品上架</div>
					</a>
				</li>
				<li class="carousel-cell">
					<a href="./shop_detail.php">
						<img src="./img/new3.png">
						<div class="text-area">
							<div class="en">CHANEL</div>
							<div class="ch">小型後背包</div>
						</div>
					</a>
				</li>
				<li class="carousel-cell">
					<a href="./shop_detail.php">
						<img src="./img/new1.png">
						<div class="text-area">
							<div class="en">LV</div>
							<div class="en small">BOULOGNE</div>
						</div>
					</a>
				</li>
				<li class="carousel-cell">
					<a href="./shop_detail.php">
						<img src="./img/new2.png">
						<div class="text-area">
							<div class="en">CHANEL</div>
							<div class="ch">迷你相機包</div>
						</div>
					</a>
				</li>
				<li class="carousel-cell">
					<a href="./shop_detail.php">
						<img src="./img/new3.png">
						<div class="text-area">
							<div class="en">CHANEL</div>
							<div class="ch">小型後背包</div>
						</div>
					</a>
				</li>
			</ul>
		</div>
		<div class="content">
			<div class="title">情人節送禮推薦</div>
			<ul class="carousel" data-flickity>
				<li class="carousel-cell">
					<a href="./shop_detail.php">
						<img src="./img/valentine1.png">
						<div class="text-area">
							<div class="en">LV</div>
							<div class="en small">BOULOGNE</div>
						</div>
						<div class="new">新品上架</div>
					</a>
				</li>
				<li class="carousel-cell">
					<a href="./shop_detail.php">
						<img src="./img/valentine2.png">
						<div class="text-area">
							<div class="en">CHANEL</div>
							<div class="ch">迷你相機包</div>
						</div>
					</a>
				</li>
				<li class="carousel-cell">
					<a href="./shop_detail.php">
						<img src="./img/valentine3.png">
						<div class="text-area">
							<div class="en">CHANEL</div>
							<div class="ch">小型後背包</div>
						</div>
					</a>
				</li>
				<li class="carousel-cell">
					<a href="./shop_detail.php">
						<img src="./img/valentine1.png">
						<div class="text-area">
							<div class="en">LV</div>
							<div class="en small">BOULOGNE</div>
						</div>
					</a>
				</li>
				<li class="carousel-cell">
					<a href="./shop_detail.php">
						<img src="./img/valentine2.png">
						<div class="text-area">
							<div class="en">CHANEL</div>
							<div class="ch">迷你相機包</div>
						</div>
					</a>
				</li>
				<li class="carousel-cell">
					<a href="./shop_detail.php">
						<img src="./img/valentine3.png">
						<div class="text-area">
							<div class="en">CHANEL</div>
							<div class="ch">小型後背包</div>
						</div>
					</a>
				</li>
			</ul>
		</div>
		<div class="content top-rank">
			<div class="title">本日熱銷Top 10</div>
			<ul class="carousel" data-flickity>
				<li class="carousel-cell">
					<a href="./shop_detail.php">
						<div class="rank">1</div>
						<img src="./img/top1.png">
						<div class="new">新品上架</div>
					</a>
				</li>
				<li class="carousel-cell">
					<a href="./shop_detail.php">
						<div class="rank">2</div>
						<img src="./img/top2.png">
					</a>

				</li>
				<li class="carousel-cell">
					<a href="./shop_detail.php">
						<div class="rank">3</div>
						<img src="./img/top3.png">
					</a>
				</li>
				<li class="carousel-cell">
					<a href="./shop_detail.php">
						<div class="rank">4</div>
						<img src="./img/top1.png">
					</a>
				</li>
				<li class="carousel-cell">
					<a href="./shop_detail.php">
						<div class="rank">5</div>
						<img src="./img/top2.png">
					</a>

				</li>
				<li class="carousel-cell">
					<a href="./shop_detail.php">
						<div class="rank">6</div>
						<img src="./img/top3.png">
					</a>
				</li>
				<li class="carousel-cell">
					<a href="./shop_detail.php">
						<div class="rank">7</div>
						<img src="./img/top1.png">
					</a>
				</li>
				<li class="carousel-cell">
					<a href="./shop_detail.php">
						<div class="rank">8</div>
						<img src="./img/top2.png">
					</a>

				</li>
				<li class="carousel-cell">
					<a href="./shop_detail.php">
						<div class="rank">9</div>
						<img src="./img/top3.png">
					</a>
				</li>
				<li class="carousel-cell">
					<a href="./shop_detail.php">
						<div class="rank">10</div>
						<img src="./img/top3.png">
					</a>
				</li>
			</ul>
		</div>
		<div class="content">
			<div class="title">名人實著款</div>
			<ul class="carousel" data-flickity>
				<li class="carousel-cell">
					<a href="./shop_detail.php">
						<img src="./img/idol1.png">
						<div class="text-area">
							<div class="en">LV</div>
							<div class="en small">BOULOGNE</div>
						</div>
					</a>
				</li>
				<li class="carousel-cell">
					<a href="./shop_detail.php">
						<img src="./img/idol2.png">
						<div class="text-area">
							<div class="en">CHANEL</div>
							<div class="ch">迷你相機包</div>
						</div>
					</a>
				</li>
				<li class="carousel-cell">
					<a href="./shop_detail.php">
						<img src="./img/idol3.png">
						<div class="text-area">
							<div class="en">CHANEL</div>
							<div class="ch">小型後背包</div>
						</div>
					</a>
				</li>
				<li class="carousel-cell">
					<a href="./shop_detail.php">
						<img src="./img/idol1.png">
						<div class="text-area">
							<div class="en">LV</div>
							<div class="en small">BOULOGNE</div>
						</div>
					</a>
				</li>
				<li class="carousel-cell">
					<a href="./shop_detail.php">
						<img src="./img/idol2.png">
						<div class="text-area">
							<div class="en">CHANEL</div>
							<div class="ch">迷你相機包</div>
						</div>
					</a>
				</li>
				<li class="carousel-cell">
					<a href="./shop_detail.php">
						<img src="./img/idol3.png">
						<div class="text-area">
							<div class="en">CHANEL</div>
							<div class="ch">小型後背包</div>
						</div>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<?php include 'fix_mobile.php'; ?>
</body>

<?php include 'script.php'; ?>

</html>
<script>
	var $carousel = $('.carousel').flickity({
		"prevNextButtons": false,
		"pageDots": false,
		// "wrapAround": true,
		"autoPlay": false,
		"cellAlign": "left",
		"imagesLoaded": true,
		// "adaptiveHeight": true,
		"arrowShape": "",
		// "watchCSS": true,
	})
	// var $bannerCarousel = $('.banner-carousel').flickity({
	// 	"prevNextButtons": false,
	// 	"pageDots": true,
	// 	"wrapAround": true,
	// 	"autoPlay": false,
	// 	"cellAlign": "center",
	// 	"imagesLoaded": true,
	// 	// "adaptiveHeight": true,
	// 	"arrowShape": "",
	// 	// "watchCSS": true,
	// })
	$(window).on("scroll", function() {
		var _scrollTop = $(this).scrollTop();

		if (_scrollTop >= 100) {
			$(".topmenu").addClass("is-show")
		} else {
			$(".topmenu").removeClass("is-show")
		}
	}).trigger("scroll");
	
	$(".ads-container").fadeIn(300);
	$(".ads-container .close").on("click", function() {
		$(".ads-container").fadeOut(300);
		$(".ads-container").removeClass("is-show");
	});

	var swiper = new Swiper(".mySwiper", {
      pagination: {
        el: ".swiper-pagination",
      },
    });
</script>