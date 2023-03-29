<div id="preload" style="z-index: 100; position: fixed; top: 0; right: 0; bottom: 0; left: 0; background-color: #000;"></div>
<div class="topmenu">
	<div class="left-area">
		<div class="text-area">
			<a href="./index.php">
				<div class="en">PARIS STREET</div>
				<div class="ch">巴黎街精品代購</div>
			</a>
		</div>
		<ul class="list-area show-for-large">
			<li><a href="./index.php">首頁</a></li>
			<!-- <li><a href="javascript:;">女士</a></li>
			<li><a href="javascript:;">男士</a> </li> -->
			<li><a href="javascript:;">珍藏</a></li>
			<li class="class">類別<img src="./img/arrow.svg">
				<ul class="class-list">
					<li>最新上架</li>
					<li>手提包</li>
					<li>化妝包</li>
					<li>後背包</li>
					<li>旅行包</li>
					<li>配件</li>
				</ul>
			</li>
			<!-- <li class="profile"><img src="./img/member.svg"></li> -->
		</ul>
	</div>
	<div class="right-area">
		<ul class="other-area show-for-large">
			<li><img src="./img/search.svg"></li>
			<li><img src="./img/cart.svg"></li>
			<li class="profile"><img src="./img/member.svg"></li>
		</ul>
		<ul class="list-area hide-for-large">
			<!-- <li>女士</li>
			<li>男士</li> -->
			<!-- <li class="class">類別<img src="./img/arrow-mobile.svg">
				<ul class="class-list">
					<li>最新上架</li>
					<li>手提包</li>
					<li>化妝包</li>
					<li>後背包</li>
					<li>旅行包</li>
					<li>配件</li>
				</ul>
			</li> -->
			<li class="profile"><img src="./img/member-mobile.svg"></li>
		</ul>
	</div>
</div>
<div class="member-area">
	<div class="profile-area">
		<div class="close">
			<img class="show-for-large" src="./img/close.svg">
			<img class="hide-for-large" src="./img/close-mobile.svg">
		</div>
		<div class="photo"><img src="./img/photo.png"></div>
		<div class="info-area">
			<div class="name">gooddesign6656</div>
			<div class="edit">
				<img class="show-for-large" src="./img/edit.svg">
				<img class="hide-for-large" src="./img/edit-mobile.svg">
				<span>編輯帳戶資訊</span>
			</div>
		</div>
		<div class="logout show-for-large">
			<a href="javascript:;">
				<div class="title">登出</div>
			</a>
		</div>
	</div>
	<ul class="setting-area">
		<li>
			<div class="title-area">
				<img class="show-for-large" src="./img/notice.svg">
				<img class="hide-for-large" src="./img/notice-mobile.svg">
				<div class="title">通知</div>
			</div>
			<a href="javascript:;"><img src="./img/go.svg"></a>
		</li>
		<li>
			<div class="title-area">
				<img class="show-for-large" src="./img/add.svg">
				<img class="hide-for-large" src="./img/add-mobile.svg">
				<div class="title">我的珍藏</div>
			</div>
			<a href="javascript:;"><img src="./img/go.svg"></a>
		</li>
		<!-- <li>
			<div class="title-area">
				<img class="show-for-large" src="./img/setting.svg">
				<img class="hide-for-large" src="./img/setting-mobile.svg">
				<div class="title">設定</div>
			</div>
			<a href="javascript:;"><img src="./img/go.svg"></a>
		</li>
		<li>
			<div class="title-area">
				<img class="show-for-large" src="./img/caption.svg">
				<img class="hide-for-large" src="./img/caption-mobile.svg">
				<div class="title">說明</div>
			</div>
			<a href="javascript:;"><img src="./img/go.svg"></a>
		</li> -->

	</ul>
	<ul class="social-area">
		<li>
			<img src="./img/fb.svg" alt="">
		</li>
		<li>
			<img src="./img/ig.svg" alt="">
		</li>
		<li>
			<img src="./img/line.svg" alt="">
		</li>
	</ul>
	<div class="logout hide-for-large">
		<a href="javascript:;">
			<div class="title">登出</div>
		</a>
	</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>

<script>
	
	$(".list-area .class").click(function() {
		$(".class-list").toggleClass("is-show");
	});
	$(".profile").click(function() {
		$(".member-area").addClass("is-show");
		$("html").addClass("is-locked");
	});
	$(".member-area .close").click(function() {
		$(".member-area").removeClass("is-show");
		$("html").removeClass("is-locked");
	});
</script>