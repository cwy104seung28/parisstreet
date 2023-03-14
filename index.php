<!DOCTYPE html>
<html>

<head>
	<?php include 'html_head.php'; ?>
</head>

<body>
	<?php include 'topmenu.php'; ?>
	<div class="banner-area">
		<div class="banner-text">
			<span class="en">LOUIS VUITTON&emsp;X</span>&emsp;草間彌生
		</div>
		<div class="other-text">
			<span class="en">PAINTED DOTS ・ INFINITY DOTS ・ METAL DOTS ・</span>
			男士系列...
		</div>
	</div>
	<ul class="other-list">
		<li>
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
	<div class="content-area">
		<div class="content">
			<div class="title">熱門品牌</div>
			<ul class="carousel" data-flickity>
				<li class="carousel-cell"><img src="./img/brand1.png"></li>
				<li class="carousel-cell"><img src="./img/brand2.png"></li>
				<li class="carousel-cell"><img src="./img/brand3.png"></li>
			</ul>
		</div>
		<div class="content">
			<div class="title">瀏覽紀錄</div>
			<ul class="carousel" data-flickity>
				<li class="carousel-cell"><img src="./img/browse1.png"></li>
				<li class="carousel-cell"><img src="./img/browse2.png"></li>
				<li class="carousel-cell"><img src="./img/browse3.png"></li>
			</ul>
		</div>
		<div class="content">
			<div class="title">新品上架</div>
			<ul class="carousel" data-flickity>
				<li class="carousel-cell"><img src="./img/new1.png"></li>
				<li class="carousel-cell"><img src="./img/new2.png"></li>
				<li class="carousel-cell"><img src="./img/new3.png"></li>
			</ul>
		</div>
		<div class="content">
			<div class="title">情人節送禮推薦</div>
			<ul class="carousel" data-flickity>
				<li class="carousel-cell"><img src="./img/valentine1.png"></li>
				<li class="carousel-cell"><img src="./img/valentine2.png"></li>
				<li class="carousel-cell"><img src="./img/valentine3.png"></li>
			</ul>
		</div>
		<div class="content top-rank">
			<div class="title">本日熱銷Top 10</div>
			<ul class="carousel" data-flickity>
				<li class="carousel-cell">
					<div class="rank">1</div>
					<img src="./img/top1.png">
				</li>
				<li class="carousel-cell">
					<div class="rank">2</div>
					<img src="./img/top2.png">
				</li>
				<li class="carousel-cell">
					<div class="rank">3</div>
					<img src="./img/top3.png">
				</li>
			</ul>
		</div>
		<div class="content">
			<div class="title">名人實著款</div>
			<ul class="carousel" data-flickity>
				<li class="carousel-cell"><img src="./img/idol1.png"></li>
				<li class="carousel-cell"><img src="./img/idol2.png"></li>
				<li class="carousel-cell"><img src="./img/idol3.png"></li>
			</ul>
		</div>
	</div>
	<div class="member-area">
		<div class="profile-area">
			<div class="close"><img src="./img/close.svg"></div>
			<div class="photo"><img src="./img/photo.png"></div>
			<div class="info-area">
				<div class="name">gooddesign6656</div>
				<div class="edit"><img src="./img/edit.svg"><span>編輯帳戶資訊</span>
				</div>
			</div>
		</div>
		<ul class="setting-area">
			<li>
				<div class="title-area">
					<img src="./img/notice.svg" alt="">
					<div class="title">通知</div>
				</div>
				<a href="javascript:;"><img src="./img/go.svg"></a>
			</li>
			<li>
				<div class="title-area">
					<img src="./img/add.svg" alt="">
					<div class="title">加入收藏</div>
				</div>
				<a href="javascript:;"><img src="./img/go.svg"></a>
			</li>
			<li>
				<div class="title-area">
					<img src="./img/setting.svg" alt="">
					<div class="title">設定</div>
				</div>
				<a href="javascript:;"><img src="./img/go.svg"></a>
			</li>
			<li>
				<div class="title-area">
					<img src="./img/caption.svg" alt="">
					<div class="title">說明</div>
				</div>
				<a href="javascript:;"><img src="./img/go.svg"></a>
			</li>

		</ul>
		<div class="logout">
			<a href="javascript:;">
				<div class="title">登出</div>
			</a>
		</div>

	</div>
	<div class="fix-mobile">
		<ul class="list-area">
			<li>
				<img src="./img/home.svg" alt="">
				<div class="text">首頁</div>
			</li>
			<li>
				<img src="./img/collection.svg" alt="">
				<div class="text">加入珍藏</div>
			</li>
			<li>
				<img src="./img/search.svg" alt="">
				<div class="text">搜尋</div>
			</li>
			<li>
				<img src="./img/cart.svg" alt="">
				<div class="text">購物車</div>
			</li>
		</ul>
	</div>
</body>

<?php include 'script.php'; ?>

</html>
<script>
	var $carousel = $('.carousel').flickity({
		"prevNextButtons": false,
		"pageDots": false,
		"wrapAround": true,
		"autoPlay": false,
		"cellAlign": "left",
		"imagesLoaded": true,
		// "adaptiveHeight": true,
		"arrowShape": "",
		// "watchCSS": true,
	})
	$(window).on("scroll", function() {
		var _scrollTop = $(this).scrollTop();

		if (_scrollTop >= 100) {
			$(".topmenu").addClass("is-show")
		} else {
			$(".topmenu").removeClass("is-show")
		}
	}).trigger("scroll");

	$(".profile").click(function() {
		$(".member-area").addClass("is-show");
		$("html").addClass("is-locked");
	});
	$(".member-area .close").click(function() {
		$(".member-area").removeClass("is-show");
		$("html").removeClass("is-locked");
	});
</script>