<?php
require_once './include/Mobile_Detect.php';
$detect = new Mobile_Detect;
if (!$detect->isMobile()) {
    include 'landing.php';
    exit;
}
?>

<!DOCTYPE html>

<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport"
		content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui, viewport-fit=cover">
	<meta name="apple-mobile-web-app-capabdale" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="theme-color" content="#2196f3">
	<title>Applibrary.org - Get tweaked apps and games</title>
	<link rel="stylesheet" href="assets/framework7/css/framework7.min.css">
	<link rel="stylesheet" href="assets/css/icons.css">
	<link rel="stylesheet" href="assets/css/app.css">
	<style type="text/css">
		.sideloadIcon {
			-webkit-animation: breathing 3s ease-out infinite normal;
			animation: breathing 3s ease-out infinite normal;
		}


		@-webkit-keyframes breathing {
			0% {
				-webkit-transform: scale(0.9);
				transform: scale(0.9);
			}

			25% {
				-webkit-transform: scale(1);
				transform: scale(1);
			}

			60% {
				-webkit-transform: scale(0.9);
				transform: scale(0.9);
			}

			100% {
				-webkit-transform: scale(0.9);
				transform: scale(0.9);
			}
		}

		@keyframes breathing {
			0% {
				-webkit-transform: scale(0.9);
				-ms-transform: scale(0.9);
				transform: scale(0.9);
			}

			25% {
				-webkit-transform: scale(1);
				-ms-transform: scale(1);
				transform: scale(1);
			}

			60% {
				-webkit-transform: scale(0.9);
				-ms-transform: scale(0.9);
				transform: scale(0.9);
			}

			100% {
				-webkit-transform: scale(0.9);
				-ms-transform: scale(0.9);
				transform: scale(0.9);
			}
		}

		.cover {
			z-index: 900;
			background: #1d1d27;
			position: absolute;
			width: 100%;
			height: 100%;
			opacity: 0;
			animation: fade-out 3s;
		}

		.cover #icon {
			--size: 100px;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			width: var(--size);
			animation: zoom-in 1.5s;
			animation-delay: 1.5s;
		}

		@keyframes zoom-in {
			50% {
				width: var(--size);
			}

			60% {
				width: calc(var(--size) * 0.9);
			}

			100% {
				width: 250%;
			}
		}

		@keyframes fade-out {

			0%,
			85% {
				opacity: 1;
			}

			100% {
				opacity: 0;
			}
		}

		.content {
			width: 100%;
		}

		ul {
			position: absolute;
		}

		.anim {
			-webkit-animation-delay: 2.5s !important;
			animation-delay: 2.5s !important;
		}

		.app-info,
		.download-text,
		.locker-link,
		.required-text {
			display: none;
		}

		li {
			position: relative;
			display: block;
			margin-bottom: 5px;
			-webkit-animation: fadeIn 0.5s linear;
			animation: fadeIn 0.5s linear;
			-webkit-animation-fill-mode: both;
			animation-fill-mode: both;
		}

		/*@-webkit-keyframes fadeIn {
				0% {
					opacity: 0;
					top: 100px;
				}
				75% {
					opacity: 0.5;
					top: 0px;
				}
				100% {
					opacity: 1;
				}
			}*/
		.md .list .item-footer {
			color: #fff;
		}

		.bookIcon {
			/*-webkit-animation: breathing 4s ease-out infinite normal;*/
			/*animation: breathing 4s ease-out infinite normal;*/
		}

		.appText {
			margin-top: 10px;
			animation: move 2s linear infinite;
			background-image: linear-gradient(to right, #fe8a71, #f6cd61, #3da4ab, #0e9aa7, #fe8a71);
			background-size: 200% auto;
			font-size: 40px;
			font-weight: 700;
			letter-spacing: 1px;
			-webkit-background-clip: text;
			-webkit-text-fill-color: transparent;
		}

		@keyframes move {
			to {
				background-position: 200% center;
			}
		}
	</style>
</head>

<body class="theme-dark">
	<div id="app">
		<div class="cover">
			<p id="shoutz"></p>
			<img src="./assets/images/logo.svg" alt="stc" id="icon">
		</div>
		<div class="statusbar"></div>
		<div class="views tabs ios-edges">
			<div id="view-home" class="view view-main tab tab-active">
				<div class="page" data-name="home">
					<div class="searchbar-backdrop"></div>
					<div class="page-content" style="background-color: #1d1d27">
						<div class="block">
							<center>
								<img src="./assets/images/book.svg" width="60px" class="bookIcon">
								<h1 class="appText" style="
									margin-top: 10px;
									animation: move 2s linear infinite;
									background-image: linear-gradient(to right, #fe8a71, #f6cd61, #3da4ab, #0e9aa7, #fe8a71);
									background-size: 200% auto;
									font-size: 40px;
									font-weight: 700;
									letter-spacing: 1px;
									-webkit-background-clip: text;
									-webkit-text-fill-color: transparent;">
									Applibrary
								</h1>
							</center>
						</div>
						<form class="searchbar" style="background-color: #1d1d27;">
							<div class="searchbar-inner" style="padding: 0 8px;">
								<div class="searchbar-input-wrap" style="height: 32px;">
									<input type="search" placeholder="Search" class="" style="background-color: #15151e; color: #fff;">
									<i class="searchbar-icon" style="
										width: 13px;
										height: 13px;
										position: absolute;
										top: 50%;
										margin-top: -6px;
										background-size: 13px 13px;
										z-index: 40;
										left: 8px;
										">
									</i>
									<span class="input-clear-button"></span>
								</div>
								<span class="searchbar-disable-button"
									style="color: rgb(255, 255, 255);display: block;margin-right: 0px;pointer-events: auto;opacity: 1;margin-left: 8px;">Cancel</span>
							</div>
						</form>
						<div class="list" style="margin:0!important;">
							<ul id="app_list">
								<li class="">
									<a href="#" class="external item-link item-content " data-abc="true">
										<div class="item-media"><img src="./assets/images/1.png" id="appimag" class="lazy lazy-fade-in"
												width="42px" height="42px" style="border-radius: 10px;"></div>
										<div class="item-inner ">
											<div class="item-title">
												<span class="locker-link">https://apps.apple.com/us/app/aquapark-io/id1453989822</span>
												<div class="item-header developer-name">Voodoo</div>
												<span class="app-name">aquapark.io </span>
												<span class="app-info">App Info</span>
												<span class="required-text">Injection Required</span>
												<span class="download-text">Injecting</span>
												<div class="item-footer description">Click to be redirected to App Store.</div>
											</div>
											<div class="item-after"></div>
										</div>
									</a>
								</li>
								<li class="">
									<a href="#" class="external item-link item-content " data-abc="true">
										<div class="item-media"><img src="./assets/images/2.png" id="appimag" class="lazy lazy-fade-in"
												width="42px" height="42px" style="border-radius: 10px;"></div>
										<div class="item-inner ">
											<div class="item-title">
												<span class="locker-link">https://apps.apple.com/us/app/color-bump-3d/id1445450568</span>
												<div class="item-header developer-name">Good Job Games</div>
												<span class="app-name">Color Bump 3D</span>
												<span class="app-info">App Info</span>
												<span class="required-text">Download Required</span>
												<span class="download-text">Downloading</span>
												<div class="item-footer description">Click to be redirected to App Store.</div>
											</div>
											<div class="item-after"></div>
										</div>
									</a>
								</li>
								<li class="">
									<a href="#" class="external item-link item-content " data-abc="true">
										<div class="item-media"><img src="./assets/images/3.png" id="appimag" class="lazy lazy-fade-in"
												width="42px" height="42px" style="border-radius: 10px;"></div>
										<div class="item-inner ">
											<div class="item-title">
												<span class="locker-link">https://apps.apple.com/us/app/mario-kart-tour/id1293634699</span>
												<div class="item-header developer-name">Nintendo Co., Ltd.</div>
												<span class="app-name">Mario Kart Tour</span>
												<span class="app-info">App Info</span>
												<span class="required-text">Verification Required</span>
												<span class="download-text">Verifying</span>
												<div class="item-footer description">Click to be redirected to App Store.</div>
											</div>
											<div class="item-after"></div>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/framework7/js/framework7.min.js"></script>
	<script src="assets/js/sideload.js"></script>
</body>

</html>
