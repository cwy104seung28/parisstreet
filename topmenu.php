<div id="preload" style="z-index: 69; position: fixed; top: 0; right: 0; bottom: 0; left: 0; background-color: #000;"></div>
<div class="topmenu">
	<div class="text-area">
		<a href="./index.php">
			<div class="en">PARIS STREET</div>
			<div class="ch">巴黎街精品代購</div>
		</a>
	</div>
	<ul class="list-area">
		<li>女士</li>
		<li>男士</li>
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
		<li class="profile"><img src="./img/member.svg"></li>
	</ul>
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
<?php include 'script.php'; ?>
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