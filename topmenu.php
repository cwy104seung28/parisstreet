<?php if ($now != 'cart' && $now != 'home') : ?>
	<div id="preload" style="z-index: 101; position: fixed; top: 0; right: 0; bottom: 0; left: 0; background-color: #fff;"></div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
	<script>
		$("#preload").delay(500).fadeOut(500);
	</script>
<?php elseif ($now == 'home') : ?>
	<div id="index-preload" style="z-index: 101; position: fixed; top: 0; right: 0; bottom: 0; left: 0; background-color: #fbe4e7;">
		<!-- <div class="logoWrap show-for-large">
			<div class="logo up"><img src="./img/logo-up-pc.svg"></div>
			<div class="logo down"><img src="./img/logo-down-pc.svg"></div> 
		</div>-->
		<!-- <div class="logoWrap hide-for-large">
			<div class="logo up"><img src="./img/logo-up.svg"></div>
			<div class="logo down"><img src="./img/logo-down.svg"></div>
		</div> -->
		<!-- <div class="inner-logo show-for-large"><img src="./img/inner-logo-pc.svg"></div>
		<div class="inner-logo hide-for-large"><img src="./img/inner-logo.svg"></div> -->
		<div class="logoWrap">
			<svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="476.11" height="363.37" viewBox="0 0 476.11 363.37">
				<g id="c" data-name="bar">
					<g class="text">
						<path class="e" d="M163.61,209.91h-38.3v93.37h11.99v-40.15h26.45c17.23,0,30.22-11.44,30.22-26.61s-12.49-26.61-30.36-26.61Zm18.37,26.61c0,12.93-10.8,23.44-24.08,23.44h-20.6v-46.89h20.6c13.28,0,24.08,10.52,24.08,23.44Z" />
						<rect class="e" x="376.39" y="209.91" width="11.99" height="93.37" />
						<path class="e" d="M462.64,257.54l-33.61-17.93c-4.74-2.25-9.59-5.4-9.59-11.76,0-7.22,7.78-15.04,19.35-15.17,13.01,0,19.55,4.81,25.9,12.56l1.05,1.28,5.93-8.28-1.18-.68c-9.05-5.26-19.86-8.04-31.27-8.04-3.2,0-6.58,.31-10.67,.97-13.41,2.43-19.7,11.89-19.97,20.21,0,8.05,3.71,13.74,11.66,17.91l31.89,17.09c7.08,3.78,11.31,9.45,11.31,15.18,0,12.3-12.32,19.65-24.22,19.65s-21.28-10.58-23.5-15.41l-.82-1.77-6.83,7.83,.92,.81c5.11,4.53,17.84,11.71,30.23,11.71,14.4,0,23.1-4.65,27.87-8.54,5.66-4.62,9.04-10.92,9.04-16.85,0-8.95-4.66-16.13-13.47-20.76Z" />
						<path class="e" d="M260.45,277.18l-23.38-66.43-.3-.84h-9.58l-32.92,93.37h4.35l7.4-21.13c3-4.39,6.99-7.97,11.88-10.64,7.49-4.09,16.47-5.32,26.72-3.64l3,8.51h-.04l9.41,26.9h12.69l-8.97-25.6-.26-.51Zm-18.26-16.17c-9.86,.79-18.97,3.61-27.09,8.4-2.23,1.32-4.29,2.72-6.13,4.2l18.83-53.38,14.39,40.78Z" />
						<path class="e" d="M327.13,263.06c16.07-.97,27.93-12.05,27.93-26.53,0-15.67-12.49-26.61-30.36-26.61h-38.3v93.37h11.99v-40.15s7.81,.09,13.59,.15c6.4,.07,12.29,3.66,15.13,9.39,6.47,13.05,9.7,31.3,26.28,31.3,2.6,0,3.06-.52,6.31-1.43-14.78,1.75-13.61-29.45-32.56-39.49Zm-28.75-49.98h20.6c13.28,0,24.08,10.52,24.08,23.44s-10.8,23.44-24.08,23.44h-20.6v-46.89Z" />
						<path class="e" d="M0,302.82c10.63-2.08,22.56-3.24,35.17-3.24,13.5,0,26.22,1.34,37.4,3.7l.1-10.41c-13.79-.73-36.08-.83-54.05,2.23l53.57-82.62,.2-.31v-2.29H.12v3.17H57.69L0,302.82Z" />
						<path class="e" d="M103.08,303.28h-9.75v-10.5h6.13c2.41,0,3.62,1.3,3.62,3.99v6.5Z" />
						<g>
							<path class="e" d="M140.91,339.87h4.03v19.47h12.16v3.67h-16.2v-23.14Z" />
							<path class="e" d="M191.72,352.99c0,1.72-.24,3.23-.71,4.53s-1.14,2.39-2,3.26-1.9,1.52-3.12,1.95c-1.22,.43-2.59,.64-4.12,.64s-2.85-.21-4.07-.64-2.25-1.08-3.11-1.93-1.52-1.92-1.98-3.19-.69-2.74-.69-4.41v-13.32h4.03v13.16c0,2.16,.52,3.8,1.56,4.93s2.48,1.69,4.32,1.69,3.25-.54,4.29-1.62,1.56-2.69,1.56-4.83v-13.32h4.03v13.12Z" />
							<path class="e" d="M223.65,363.01l-6.08-8.76-6.11,8.76h-4.66l8.43-11.77-8.1-11.37h4.79l5.75,8.3,5.78-8.3h4.66l-8.07,11.31,8.4,11.83h-4.79Z" />
							<path class="e" d="M263.32,352.99c0,1.72-.24,3.23-.71,4.53s-1.14,2.39-2,3.26-1.9,1.52-3.12,1.95c-1.22,.43-2.59,.64-4.12,.64s-2.85-.21-4.07-.64-2.25-1.08-3.11-1.93-1.52-1.92-1.98-3.19-.69-2.74-.69-4.41v-13.32h4.03v13.16c0,2.16,.52,3.8,1.56,4.93,1.04,1.12,2.48,1.69,4.32,1.69s3.25-.54,4.29-1.62,1.56-2.69,1.56-4.83v-13.32h4.03v13.12Z" />
							<path class="e" d="M295.32,363.01l-5.7-8.07h-5.11v8.07h-4.03v-23.14h10.31c1.32,0,2.52,.17,3.59,.51,1.07,.34,1.97,.83,2.71,1.45,.74,.63,1.31,1.4,1.7,2.31s.6,1.93,.6,3.06c0,.97-.14,1.83-.41,2.59-.28,.76-.66,1.43-1.14,2.02-.49,.58-1.06,1.08-1.74,1.49-.67,.41-1.42,.72-2.23,.94l6.25,8.76h-4.79Zm-1.33-18.49c-.84-.65-2.02-.98-3.55-.98h-5.94v7.8h5.97c1.46,0,2.62-.35,3.48-1.06,.86-.71,1.29-1.66,1.29-2.86,0-1.28-.42-2.25-1.26-2.91Z" />
							<path class="e" d="M326.03,363.01h-4.1v-9.12l-9.19-14.02h4.79l6.48,10.25,6.54-10.25h4.66l-9.19,13.92v9.22Z" />
						</g>
					</g>
					<g>
						<path class="e fill" d="M207.38,.5h25.9c18.64,0,33.8,14.85,33.8,33.09v.26c-.09,11.11-7.31,21.06-18.41,25.33-4.87,1.87-28.49,11.58-41.29,27.87V.5Z" />
						<path class="e fill" d="M240.42,149.55c-8.83,0-17.13-3.44-23.37-9.68-6.24-6.24-9.67-14.55-9.67-23.38,0-6.91,2.33-13.81,6.71-19.96,11.83-16.59,38.87-27.58,51.71-30.86v64.2c0,6.68,.98,13.29,2.92,19.68h-28.31Z" />
						<path class="d line" d="M207.38,.5h25.9c18.64,0,33.8,14.85,33.8,33.09v.26c-.09,11.11-7.31,21.06-18.41,25.33-4.87,1.87-28.49,11.58-41.29,27.87V.5Z" />
						<path class="d line" d="M240.42,149.55c-8.83,0-17.13-3.44-23.37-9.68-6.24-6.24-9.67-14.55-9.67-23.38,0-6.91,2.33-13.81,6.71-19.96,11.83-16.59,38.87-27.58,51.71-30.86v64.2c0,6.68,.98,13.29,2.92,19.68h-28.31Z" />
					</g>
				</g>
			</svg>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
	<script>
		//setTimeout(function() {
		// var _tl = gsap.timeline();
		// if (window.device == 'desktop') {
		// 	_tl.add('animation').to('#index-preload .logoWrap .up', {
		// 		duration: 0.3,
		// 		x: -170,
		// 		y: -180,
		// 		ease: Back.easeInOut.config(2),
		// 	}, 'animation').to('#index-preload .logoWrap .down', {
		// 		duration: 0.3,
		// 		x: 160,
		// 		y: 165,
		// 		ease: Back.easeInOut.config(2),
		// 	}, 'animation').to('#index-preload .inner-logo', {
		// 		duration: 0.75,
		// 		opacity: 1,
		// 		ease: 'power2.out',
		// 	}, '<1.75')
		// } else {
		// 	_tl.add('animation').to('#index-preload .logoWrap .up', {
		// 		duration: 0.3,
		// 		x: -70,
		// 		y: -80,
		// 		ease: Back.easeInOut.config(2),
		// 	}, 'animation').to('#index-preload .logoWrap .down', {
		// 		duration: 0.3,
		// 		x: 60,
		// 		y: 65,
		// 		ease: Back.easeInOut.config(2),
		// 	}, 'animation').to('#index-preload .inner-logo', {
		// 		duration: 0.75,
		// 		opacity: 1,
		// 		ease: 'power2.out',
		// 	}, '<1.75')
		// }

		//}, 1200);

		$("#index-preload").delay(5000).fadeOut(500)

		$("#index-preload .bg").delay(1500).fadeOut(500)
	</script>
<?php endif ?>
<div id="topmenu">
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
										<path d="M0,3.17H4.93c.33,0,.61,.22,.69,.53l5.02,19.03h13.75" style="fill: none; stroke: #e0c3c4; stroke-miterlimit: 10; stroke-width: 2.01px;" />
										<circle cx="11.04" cy="25.14" r="2.41" style="fill: none; stroke: #e0c3c4; stroke-miterlimit: 10; stroke-width: 2.01px;" />
										<circle cx="24.39" cy="25.14" r="2.41" style="fill: none; stroke: #e0c3c4; stroke-miterlimit: 10; stroke-width: 2.01px;" />
										<polygon points="6.61 7.43 28.64 7.43 25.86 18.9 9.63 18.9 6.61 7.43" style="fill: none; stroke: #e0c3c4; stroke-miterlimit: 10; stroke-width: 2.01px;" />
										<line x1="14.1" y1="7.43" x2="15.14" y2="18.9" style="fill: none; stroke: #e0c3c4; stroke-miterlimit: 10; stroke-width: 2.01px;" />
										<g>
											<line x1="13.98" y1="7.43" x2="15.03" y2="18.9" style="fill: none; stroke: #e0c3c4; stroke-miterlimit: 10; stroke-width: 2.01px;" />
											<line x1="21.27" y1="7.43" x2="20.22" y2="18.9" style="fill: none; stroke: #e0c3c4; stroke-miterlimit: 10; stroke-width: 2.01px;" />
										</g>
										<line x1="8.12" y1="13.16" x2="27.25" y2="13.16" style="fill: none; stroke: #e0c3c4; stroke-miterlimit: 10; stroke-width: 2.01px;" />
									</g>
									<circle cx="25.99" cy="6.95" r="6.41" style="fill: #9e3147; stroke: #fff; stroke-miterlimit: 10; stroke-width: 1.08px;" />
									<path d="M27.46,5.24c-.4-.36-.74-.54-1.19-.54-.51,0-.78,.18-.78,.67,0,.98,2.9,.93,2.9,3,0,1.06-.57,1.89-1.72,2.14v1.15h-1.13v-1.09c-.65-.08-1.43-.37-1.96-.85l.75-1.16c.57,.44,1.05,.64,1.55,.64,.6,0,.86-.23,.86-.71,0-1.05-2.89-1.08-2.89-3.05,0-1.1,.63-1.86,1.68-2.08v-1.14h1.13v1.12c.71,.11,1.22,.45,1.64,.91l-.85,.99Z" style="fill: #fff;" />
								</g>
							</svg>
							<div class="text">購物車</div>
						</a>
					</div>
					<div class="arrow">
						<svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="6.97" height="3.32" viewBox="0 0 6.97 3.32">
							<g id="c" data-name="圖層 1">
								<polygon points="6.97 0 3.48 3.32 0 0 6.97 0" style="fill: #e0c3c4;" />
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
		<div class="close"><img src="./img/menu-close.svg" alt=""></div>
	</div>
	<div class="member-area">
		<div class="profile-area">
			<div class="flex-container profile">
				<div class="photo"><img src="./img/photo.png"></div>
				<div class="info-area flex-container align-middle">
					<div class="name">gooddesign6656</div>
					<div class="pen show-for-large"><img src="./img/pen-pc.svg"></div>
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
		<div class="close"><img src="./img/menu-close.svg" alt=""></div>
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
		<div class="close"><img src="./img/menu-close.svg" alt=""></div>
	</div>
	<div class="class-container step-1">
		<ul class="class">
			<li>
				<a href="javascript:;">
					皮包
					<img src="./img/small-arrow-pink.svg">
				</a>
			</li>
			<li>
				<a href="javascript:;">
					鞋款
					<img src="./img/small-arrow-pink.svg">
				</a>
			</li>
			<li>
				<a href="javascript:;">
					香水
					<img src="./img/small-arrow-pink.svg">
				</a>
			</li>
			<li>
				<a href="javascript:;">
					飾品配件
					<img src="./img/small-arrow-pink.svg">
				</a>
			</li>
			<li>
				<a href="javascript:;">
					彩妝
					<img src="./img/small-arrow-pink.svg">
				</a>
			</li>
			<li>
				<a href="javascript:;">
					其他
					<img src="./img/small-arrow-pink.svg">
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
					<img src="./img/small-arrow-pink.svg">
				</a>
			</li>
			<li>
				<a href="javascript:;">
					男士
					<img src="./img/small-arrow-pink.svg">
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
					<img src="./img/small-arrow-pink.svg">
				</a>
			</li>
			<li>
				<a href="species.php">
					後揹包
					<img src="./img/small-arrow-pink.svg">
				</a>
			</li>
			<li>
				<a href="species.php">
					皮夾
					<img src="./img/small-arrow-pink.svg">
				</a>
			</li>
			<li>
				<a href="species.php">
					旅行袋
					<img src="./img/small-arrow-pink.svg">
				</a>
			</li>
		</ul>
		<div class="deco hide-for-large"><img src="./img/menu-bg.svg"></div>
		<div class="back hide-for-large" data-back="3"><img src="./img/back.svg"></div>
	</div>
</div>

<!-- <script>

	// new Vue({
	// 	el: '#topmenu',
	// 	data: {
	// 		open: 0,
	// 		login: 0,
	// 		edit: 0,
	// 	},
	// 	computed: {},
	// 	methods: {
	// 		loginHandler(i) {
	// 			this.login = i;
	// 		},
	// 		editHandler(i) {
	// 			this.edit = i;
	// 		},
	// 		// topmenuHandler() {
	// 		// 	if(this.open == 0){
	// 		// 		this.open = 1;
	// 		// 	}
	// 		// 	else{
	// 		// 		this.open = 0;
	// 		// 	}

	// 		// }
	// 		topmenuHandler(i) {
	// 			this.open = i;
	// 		}
	// 		// catClick(i) {
	// 		// 	this.open = i;
	// 		// 	console.log(open);
	// 		// }
	// 	},
	// 	filters: {},
	// 	mounted() {
	// 		$(".hamburger-area").click(function() {
	// 			// $(".step-1").toggleClass("is-show");
	// 			$("html").toggleClass("is-locked");
	// 		});
	// 		$(".profile").click(function() {
	// 			// $(".login-area").toggleClass("is-show")
	// 			$("html").addClass("is-locked");
	// 		});
	// 		$(".profile-area .profile").click(function() {
	// 			$("html").addClass("is-locked");
	// 			// $(".member-profile-area").toggleClass("is-show")
	// 		});


	// 		$(".step-1 li").click(function() {
	// 			$(".step-2").addClass("is-show");
	// 			$(".step-3").removeClass("is-show");
	// 		});
	// 		$(".step-2 li").click(function() {
	// 			$(".step-3").addClass("is-show");
	// 		});
	// 		$('.class-container .back').each(function(i, el) {
	// 			$(el).on("click", function() {
	// 				var _back = $(this).data('back');
	// 				$(`.step-${_back}`).removeClass('is-show')
	// 			})
	// 		})
	// 		$('.cart-select').niceSelect();
	// 	},
	// 	updated() {},
	// })
</script> -->