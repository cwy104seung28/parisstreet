<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollToPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>
<?php if ($now != 'cart' && $now != 'home') : ?>
	<div id="preload" style="z-index: 101; position: fixed; top: 0; right: 0; bottom: 0; left: 0; background-color: #F6F1EC;"></div>
	<script>
		$("#preload").delay(500).fadeOut(500);
	</script>
<?php elseif ($now == 'home') : ?>
	<div id="index-preload" style="z-index: 101; position: fixed; top: 0; right: 0; bottom: 0; left: 0; background-color: #F6F1EC;">
		<div class="logoWrap show-for-large">
			<div class="logo up"><img src="./img/logo-up-pc.svg"></div>
			<div class="logo down"><img src="./img/logo-down-pc.svg"></div>
		</div>
		<div class="logoWrap hide-for-large">
			<div class="logo up"><img src="./img/logo-up.svg"></div>
			<div class="logo down"><img src="./img/logo-down.svg"></div>
		</div>
		<div class="inner-logo show-for-large"><img src="./img/inner-logo-pc.svg"></div>
		<div class="inner-logo hide-for-large"><img src="./img/inner-logo.svg"></div>
	</div>
	<script>
		$("#index-preload .logoWrap").delay(1000).addClass('is-show')

		setTimeout(function() {
			var _tl = gsap.timeline();
			if (window.device == 'desktop') {
				_tl.add('animation').to('#index-preload .logoWrap .up', {
					duration: 0.3,
					x: -170,
					y: -180,
					ease: Back.easeInOut.config(2),
				}, 'animation').to('#index-preload .logoWrap .down', {
					duration: 0.3,
					x: 160,
					y: 165,
					ease: Back.easeInOut.config(2),
				}, 'animation').to('#index-preload .inner-logo', {
					duration: 0.75,
					opacity: 1,
					ease: 'power2.out',
				}, '<1.75')
			} else {
				_tl.add('animation').to('#index-preload .logoWrap .up', {
					duration: 0.3,
					x: -70,
					y: -80,
					ease: Back.easeInOut.config(2),
				}, 'animation').to('#index-preload .logoWrap .down', {
					duration: 0.3,
					x: 60,
					y: 65,
					ease: Back.easeInOut.config(2),
				}, 'animation').to('#index-preload .inner-logo', {
					duration: 0.75,
					opacity: 1,
					ease: 'power2.out',
				}, '<1.75')
			}
		}, 1200);

		$("#index-preload").delay(5000).fadeOut(500)

		$("#index-preload .bg").delay(1500).fadeOut(500)
	</script>
<?php endif ?>
<div id="app">
	<div class="topmenu">
		<div class="left-area">
			<div class="hamburger-area">
				<img src="./img/hamburger-pc.svg" class="show-for-large">
				<img src="./img/hamburger.svg" class="hide-for-large">
			</div>
			<div class="text-area">
				<a href="./index.php">
					<img src="./img/new-logo-pc.svg" class="show-for-large">
					<img src="./img/new-logo.svg" class="hide-for-large">
				</a>
			</div>
		</div>
		<div class="right-area">
			<ul class="other-area show-for-large">
				<li class="collection">
					<a href="./collection.php">
						<svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="28.28" height="26.22" viewBox="0 0 28.28 26.22">
							<g id="c" data-name="bar">
								<path class="d" d="M14.13,26.22l-1.22-1.12c-.48-.44-.95-.88-1.43-1.31-.82-.73-1.65-1.46-2.48-2.18-1.37-1.2-2.73-2.4-4.08-3.62-1.26-1.14-2.69-2.55-3.65-4.4C.61,12.33,.23,10.97,.09,9.43c-.12-1.31-.19-2.71,.27-4.11C1.29,2.49,3.29,.7,6.14,.17c3.18-.6,5.86,.47,7.99,3.17C15.53,1.52,17.28,.43,19.36,.1c3.63-.59,7.87,1.45,8.69,5.88,.76,4.1-.4,7.79-3.35,10.66-1.15,1.12-2.36,2.2-3.53,3.25-.45,.4-.9,.81-1.35,1.21-1.11,1-2.22,2-3.33,3l-2.36,2.12ZM7.79,1.58c-.44,0-.89,.04-1.36,.13-2.28,.43-3.82,1.81-4.58,4.1-.37,1.11-.3,2.28-.19,3.48,.12,1.33,.45,2.5,1.01,3.57,.85,1.63,2.15,2.92,3.31,3.96,1.35,1.21,2.71,2.41,4.07,3.6,.83,.73,1.66,1.45,2.48,2.19,.49,.43,.97,.88,1.46,1.33l.16,.15,1.29-1.16c1.11-1,2.22-2,3.33-3,.45-.41,.91-.81,1.36-1.22,1.16-1.04,2.36-2.11,3.48-3.2,2.59-2.53,3.57-5.64,2.9-9.25-.65-3.48-4.01-5.07-6.89-4.61-1.78,.29-3.23,1.23-4.42,2.89l-1.08,1.54-.75-1.13c-.06-.09-.11-.17-.17-.25-1.5-2.1-3.28-3.13-5.4-3.13Z" />
							</g>
						</svg>
						<div class="text">加入珍藏</div>
					</a>
				</li>
				<li class="search">
					<a href="search.php">
						<svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="27.61" height="27.87" viewBox="0 0 27.61 27.87">
							<g id="c" data-name="bar">
								<g>
									<circle class="d" cx="12.96" cy="12.96" r="11.95" transform="translate(-2.64 22.58) rotate(-76.67)" />
									<line class="d" x1="21.27" y1="21.54" x2="26.9" y2="27.16" />
								</g>
							</g>
						</svg>
						<div class="text">搜尋</div>
					</a>
				</li>
				<li class="inquiry">
					<div class="no-link">
						<svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="29.92" height="26.4" viewBox="0 0 29.92 26.4">
							<g id="c" data-name="bar">
								<g>
									<path class="d" d="M0,1.01H4.93c.33,0,.61,.22,.69,.53l5.02,19.03h13.75" />
									<circle class="d" cx="11.04" cy="22.98" r="2.41" />
									<circle class="d" cx="24.39" cy="22.98" r="2.41" />
									<polygon class="d" points="6.61 5.27 28.64 5.27 25.86 16.74 9.63 16.74 6.61 5.27" />
									<line class="d" x1="14.1" y1="5.27" x2="15.14" y2="16.74" />
									<g>
										<line class="d" x1="13.98" y1="5.27" x2="15.03" y2="16.74" />
										<line class="d" x1="21.27" y1="5.27" x2="20.22" y2="16.74" />
									</g>
									<line class="d" x1="8.12" y1="11" x2="27.25" y2="11" />
								</g>
							</g>
						</svg>
						<div class="text">詢價車</div>
					</div>
					<div class="link">
						<a href="inquiry.php">
							<svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="29.92" height="26.4" viewBox="0 0 29.92 26.4">
								<g id="c" data-name="bar">
									<g>
										<path class="d" d="M0,1.01H4.93c.33,0,.61,.22,.69,.53l5.02,19.03h13.75" />
										<circle class="d" cx="11.04" cy="22.98" r="2.41" />
										<circle class="d" cx="24.39" cy="22.98" r="2.41" />
										<polygon class="d" points="6.61 5.27 28.64 5.27 25.86 16.74 9.63 16.74 6.61 5.27" />
										<line class="d" x1="14.1" y1="5.27" x2="15.14" y2="16.74" />
										<g>
											<line class="d" x1="13.98" y1="5.27" x2="15.03" y2="16.74" />
											<line class="d" x1="21.27" y1="5.27" x2="20.22" y2="16.74" />
										</g>
										<line class="d" x1="8.12" y1="11" x2="27.25" y2="11" />
									</g>
								</g>
							</svg>
							<div class="text">詢價車</div>
						</a>
					</div>
					<div class="cart-link">
						<a href="./cart.php">
							<svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="32.94" height="28.56" viewBox="0 0 32.94 28.56">
								<g id="c" data-name="bar">
									<g>
										<path d="M0,3.17H4.93c.33,0,.61,.22,.69,.53l5.02,19.03h13.75" style="fill: none; stroke: #e95529; stroke-miterlimit: 10; stroke-width: 2.01px;" />
										<circle cx="11.04" cy="25.14" r="2.41" style="fill: none; stroke: #e95529; stroke-miterlimit: 10; stroke-width: 2.01px;" />
										<circle cx="24.39" cy="25.14" r="2.41" style="fill: none; stroke: #e95529; stroke-miterlimit: 10; stroke-width: 2.01px;" />
										<polygon points="6.61 7.43 28.64 7.43 25.86 18.9 9.63 18.9 6.61 7.43" style="fill: none; stroke: #e95529; stroke-miterlimit: 10; stroke-width: 2.01px;" />
										<line x1="14.1" y1="7.43" x2="15.14" y2="18.9" style="fill: none; stroke: #e95529; stroke-miterlimit: 10; stroke-width: 2.01px;" />
										<g>
											<line x1="13.98" y1="7.43" x2="15.03" y2="18.9" style="fill: none; stroke: #e95529; stroke-miterlimit: 10; stroke-width: 2.01px;" />
											<line x1="21.27" y1="7.43" x2="20.22" y2="18.9" style="fill: none; stroke: #e95529; stroke-miterlimit: 10; stroke-width: 2.01px;" />
										</g>
										<line x1="8.12" y1="13.16" x2="27.25" y2="13.16" style="fill: none; stroke: #e95529; stroke-miterlimit: 10; stroke-width: 2.01px;" />
									</g>
									<circle cx="25.99" cy="6.95" r="6.41" style="fill: #e95529; stroke: #fff; stroke-miterlimit: 10; stroke-width: 1.08px;" />
									<path d="M27.46,5.24c-.4-.36-.74-.54-1.19-.54-.51,0-.78,.18-.78,.67,0,.98,2.9,.93,2.9,3,0,1.06-.57,1.89-1.72,2.14v1.15h-1.13v-1.09c-.65-.08-1.43-.37-1.96-.85l.75-1.16c.57,.44,1.05,.64,1.55,.64,.6,0,.86-.23,.86-.71,0-1.05-2.89-1.08-2.89-3.05,0-1.1,.63-1.86,1.68-2.08v-1.14h1.13v1.12c.71,.11,1.22,.45,1.64,.91l-.85,.99Z" style="fill: #fff;" />
								</g>
							</svg>
							<div class="text">購物車</div>
						</a>
					</div>
					<div class="arrow">
						<svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="6.97" height="3.32" viewBox="0 0 6.97 3.32">
							<g id="c" data-name="圖層 1">
								<polygon points="6.97 0 3.48 3.32 0 0 6.97 0" style="fill: #e95529;" />
							</g>
						</svg>
					</div>
				</li>
				<li class="profile"><img src="./img/member.svg"></li>
			</ul>
			<ul class="list-area hide-for-large">
				<li class="profile"><img src="./img/member-mobile.svg"></li>
			</ul>
		</div>
	</div>
	<div class="login-area flex-container">
		<div class="loginWrap">
			<div class="title">登入會員</div>
			<div class="login flex-container align-middle">
				<img src="./img/line.svg">
				連結至LINE登入會員
				<img src="./img/small-arrow-white.svg">
			</div>
		</div>
		<ul class="social-area flex-container align-center-middle">
			<li>
				<img class="show-for-large" src="./img/fb-pc.svg">
				<img class="hide-for-large" src="./img/fb.svg">
			</li>
			<li>
				<img class="show-for-large" src="./img/ig-pc.svg">
				<img class="hide-for-large" src="./img/ig.svg">
			</li>
			<li>
				<img class="show-for-large" src="./img/line-pc.svg">
				<img class="hide-for-large" src="./img/line.svg">
			</li>
		</ul>
	</div>
	<div class="member-area">
		<div class="profile-area">

			<div class="flex-container profile">
				<div class="photo"><img src="./img/photo.png"></div>
				<div class="info-area flex-container align-middle">
					<div class="name">gooddesign6656</div>
					<div class="pen show-for-large"><img src="./img/pen-pc.svg"></div>
					<!-- <div class="edit">
					<img class="show-for-large" src="./img/edit.svg">
					<img class="hide-for-large" src="./img/edit-mobile.svg">
					<span>編輯帳戶資訊</span>
				</div> -->
				</div>
			</div>
			<div class="logout show-for-large">
				<a href="javascript:;">
					<div class="title">登出</div>
				</a>
			</div>
		</div>
		<div class="setting-area flex-container">
			<ul class="settingWrap">
				<li>
					<a href="./question.php">
						<div class="setting">
							<div class="title-area">
								<img class="show-for-large" src="./img/question-pc.svg">
								<img class="hide-for-large" src="./img/question-black.svg">
								<div class="title">常見問題</div>
							</div>
							<div class="show-for-large"><img src="./img/go-pc.svg"></div>
						</div>
					</a>
				</li>
				<li>
					<a href="collection.php">
						<div class="setting">
							<div class="title-area">
								<img class="show-for-large" src="./img/heart-pc.svg">
								<img class="hide-for-large" src="./img/heart-black.svg">
								<div class="title">我的珍藏</div>
							</div>
							<div class="show-for-large"><img src="./img/go-pc.svg"></div>
						</div>
					</a>
				</li>
				<li>
					<a href="./tracking.php">
						<div class="setting">
							<div class="title-area">
								<img class="show-for-large" src="./img/tracking-pc.svg">
								<img class="hide-for-large" src="./img/tracking.svg">
								<div class="title">訂單查詢</div>
							</div>
							<div class="show-for-large"><img src="./img/go-pc.svg"></div>
						</div>
					</a>
				</li>
			</ul>
			<ul class="social-area show-for-large">
				<li>
					<img src="./img/fb-pc.svg">
				</li>
				<li>
					<img src="./img/ig-pc.svg">
				</li>
				<li>
					<img src="./img/line-pc.svg">
				</li>
			</ul>

		</div>
		<ul class="social-area hide-for-large">
			<li>
				<img src="./img/fb-grey.svg">
			</li>
			<li>
				<img src="./img/ig-grey.svg">
			</li>
			<li>
				<img src="./img/line-grey.svg">
			</li>
		</ul>
		<div class="logout hide-for-large">
			<a href="javascript:;">
				<div class="title">登出</div>
			</a>
		</div>
	</div>
	<div class="member-profile-area">
		<form action="">
			<div class="item photo flex-container align-middle">
				<div class="photo">
					<img src="./img/photo.png">
					<div class="camera show-for-large"><img src="./img/camera-pc.svg"></div>
				</div>

				<div class="camera hide-for-large"><img src="./img/camera.svg"></div>
				<div class="submit show-for-large">
					<a href="./step-2.php"> 確認送出</a>
				</div>
			</div>
			<div class="formWrap">
				<div class="title-area">
					<div class="title">會員資料</div>
					<div class="note">*為必填</div>
				</div>
				<div class="flexWrap">
					<div class="area-1">
						<div class="item flex-container align-middle">
							<div class="title">*姓名</div>
							<div><input type="text" name="" id="" placeholder=""></div>
						</div>
						<div class="item no-border">
							<div class="title">*性別</div>
							<div class="flex-container">
								<div class="item flex-container align-middle no-border no-margin">
									<input type="radio" id="male" name="gender" value="male" />
									<label for="male">男</label>
								</div>
								<div class="item flex-container align-middle no-border no-margin">
									<input type="radio" id="female" name="gender" value="female" />
									<label for="female">女</label>
								</div>
							</div>
						</div>
						<div class="item no-border">
							<div class="title">生日</div>
							<div class="flex-container">
								<div class="year flex-container">
									<select name="" id="" class="cart-select">
										<option value=""></option>
										<option value="">1998</option>
										<option value="">1999</option>
										<option value="">2000</option>
									</select>
									年
								</div>
								<div class="month flex-container">
									<select name="" id="" class="cart-select">
										<option value=""></option>
										<option value="">1</option>
										<option value="">2</option>
										<option value="">3</option>
										<option value="">4</option>
										<option value="">5</option>
										<option value="">6</option>
										<option value="">7</option>
										<option value="">8</option>
										<option value="">9</option>
										<option value="">10</option>
										<option value="">11</option>
										<option value="">12</option>
									</select>
									月
								</div>
								<div class="day flex-container">
									<select name="" id="" class="cart-select">
										<option value=""></option>
										<option value="">1</option>
										<option value="">2</option>
										<option value="">3</option>
										<option value="">4</option>
										<option value="">5</option>
										<option value="">6</option>
										<option value="">7</option>
										<option value="">8</option>
										<option value="">9</option>
										<option value="">10</option>
										<option value="">11</option>
										<option value="">12</option>
										<option value="">13</option>
										<option value="">14</option>
										<option value="">15</option>
										<option value="">16</option>
										<option value="">17</option>
										<option value="">18</option>
										<option value="">19</option>
										<option value="">20</option>
										<option value="">21</option>
										<option value="">22</option>
										<option value="">23</option>
										<option value="">24</option>
										<option value="">25</option>
										<option value="">26</option>
										<option value="">27</option>
										<option value="">28</option>
										<option value="">29</option>
										<option value="">30</option>
										<option value="">31</option>
									</select>
									日
								</div>
							</div>
						</div>
					</div>
					<div class="area-2">
						<div class="item flex-container align-middle">
							<div class="title">*電話</div>
							<div><input type="text" name="" id="" placeholder=""></div>
						</div>
						<div class="item flex-container align-middle pc-margin">
							<div class="title">*地址</div>
							<div><input type="text" name="" id="" placeholder=""></div>
						</div>
						<div class="item flex-container align-middle">
							<div class="title">*E-Mail</div>
							<div><input type="text" name="" id="" placeholder=""></div>
						</div>
					</div>
				</div>
				<label class="flex-container new-information" for="check-customer">
					<div class="check-area">
						<input type="checkbox" id="check-customer">
						<span class="checkmark"></span>
					</div>
					願意收到電子報及最新優惠資訊
				</label>
				<div class="submit hide-for-large">
					<a href="./step-2.php"> 確認送出</a>
				</div>
			</div>
		</form>
	</div>
	<div class="class-container step-1">
		<ul class="class">
			<li>
				<a href="javascript:;">
					皮包
					<img src="./img/small-arrow-orange.svg">
				</a>
			</li>
			<li>
				<a href="javascript:;">
					鞋款
					<img src="./img/small-arrow-orange.svg">
				</a>
			</li>
			<li>
				<a href="javascript:;">
					香水
					<img src="./img/small-arrow-orange.svg">
				</a>
			</li>
			<li>
				<a href="javascript:;">
					飾品配件
					<img src="./img/small-arrow-orange.svg">
				</a>
			</li>
			<li>
				<a href="javascript:;">
					彩妝
					<img src="./img/small-arrow-orange.svg">
				</a>
			</li>
			<li>
				<a href="javascript:;">
					其他
					<img src="./img/small-arrow-orange.svg">
				</a>
			</li>
		</ul>
		<div class="deco"><img src="./img/menu-bg.svg"></div>
		<div class="back hide-for-large" data-back="1"><img src="./img/back.svg"></div>
	</div>
	<div class="class-container step-2">
		<ul class="class">
			<li>
				<a href="javascript:;">
					女士
					<img src="./img/small-arrow-orange.svg">
				</a>
			</li>
			<li>
				<a href="javascript:;">
					男士
					<img src="./img/small-arrow-orange.svg">
				</a>
			</li>
		</ul>
		<div class="deco hide-for-large"><img src="./img/menu-bg.svg"></div>
		<div class="back hide-for-large" data-back="2"><img src="./img/back.svg"></div>
	</div>
	<div class="class-container step-3">
		<ul class="class">
			<li>
				<a href="species.php">
					手提包
					<img src="./img/small-arrow-orange.svg">
				</a>
			</li>
			<li>
				<a href="species.php">
					後揹包
					<img src="./img/small-arrow-orange.svg">
				</a>
			</li>
			<li>
				<a href="species.php">
					皮夾
					<img src="./img/small-arrow-orange.svg">
				</a>
			</li>
			<li>
				<a href="species.php">
					旅行袋
					<img src="./img/small-arrow-orange.svg">
				</a>
			</li>
		</ul>
		<div class="deco hide-for-large"><img src="./img/menu-bg.svg"></div>
		<div class="back hide-for-large" data-back="3"><img src="./img/back.svg"></div>
	</div>
</div>

<!-- <?php include 'script.php'; ?> -->
<script>
	// $('.cart-select').niceSelect();

	$(".hamburger-area").click(function() {
		$(".step-1").toggleClass("is-show");
		$("html").toggleClass("is-locked");
	});
	$(".profile").click(function() {
		$(".login-area").toggleClass("is-show")
		$("html").addClass("is-locked");
	});
	$(".profile-area .profile").click(function() {
		$("html").addClass("is-locked");
		$(".member-profile-area").toggleClass("is-show")
	});


	$(".step-1 li").click(function() {
		$(".step-2").addClass("is-show");
		$(".step-3").removeClass("is-show");
	});
	$(".step-2 li").click(function() {
		$(".step-3").addClass("is-show");
	});
	$('.class-container .back').each(function(i, el) {
		$(el).on("click", function() {
			var _back = $(this).data('back');
			$(`.step-${_back}`).removeClass('is-show')
		})
	})
	// new Vue({
	// 	el: '#app',
	// 	data: {
	// 		open: 0,
	// 	},
	// 	computed: {

	// 	},
	// 	methods: {
	// 		catClick(i) {
	// 			this.open = i;
	// 			console.log(open);
	// 		}
	// 	},
	// 	filters: {},
	// 	mounted() {

	// 	},
	// 	updated() {},
	// })
</script>