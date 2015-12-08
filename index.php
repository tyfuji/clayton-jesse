<!DOCTYPE html>
<html>
	<head>
		<title>White Lotus is a Rapper</title>
		<style>

			body {
				color: #222;
				font-family: Calibre;
				font-weight: 400;
				min-height: 320px;
			}

			a {
				text-decoration: none;
			}

			p {
				margin: 0;
			}

			h1, h2, h3, h4, h5, h6 {
				margin: 0;
			}

			.video-bg {
				position: absolute;
				overflow: hidden;
				top: 48px;
				right: 24px;
				bottom: 24px;
				left: 24px;
			}
			.video-bg video {
				position: absolute;
				left: 50%;
				transform: translateX(-50%);
				height: 100%;
				width: auto;
			}

			@media screen and (min-aspect-ratio: 16/10) {
				.video-bg video {
					width: 100%;
					height: auto;
				}
			}

			.logo {
				width: 80px;
				height: auto;
				position: absolute;
				top: 32px;
				left: 12px;
				z-index: 1;
			}

			nav.page-nav {
				position: absolute;
				font-family: Pitch;
				text-transform: uppercase;
				letter-spacing: .02em;
				font-size: 13px;
				top: 32px;
				right: 0px;
				z-index: 1;
				width: 270px;
				font-weight: bold;
			}

			nav.page-nav a {
				color: #1662b8;
			}

			nav.page-nav a:hover {
				color: #093f7d;
			}

			nav.page-nav ul {
				margin: 0;
				overflow: hidden;
				list-style-type: none;
			}

			nav.page-nav ul li {
				display: inline-block;
				text-align: left;
				padding: 0 12px;
				box-sizing: border-box;
				position: relative;
			}

			nav.page-nav ul li:after {
				content: "";
				display: block;
				position: absolute;
				top: 0;
				right: -6px;
				bottom: 0;
				width: 4px;
				background: url("/assets/image/dots.svg");
				background-size: 100% 100%;
				opacity: .3;
			}

			nav.page-nav ul li:nth-child(2n):after {
				display: none;
			}

			@media (min-width: 400px) {
				nav.page-nav {
					top: 28px;
					width: 300px;
					font-size: 16px;
				}
			}

			@media (min-width: 640px) {
				nav.page-nav {
					top: 26px;
					width: 360px;
					font-size: 19px;
				}
			}

			@media (min-width: 800px) {
				nav.page-nav {
					top: 30px;
					width: 720px;
					font-size: 24px;
				}
				nav.page-nav ul li:nth-child(2n):after {
					display: block;
				}
				nav.page-nav ul li:nth-child(4):after {
					display: none;
				}
			}

			a.alert {
				display: block;
				position: absolute;
				background: rgba(255,255,255,.6);
				color: #222;
				padding: 12px;
				right: 0;
				bottom: 0;
				left: 0;
				z-index: 1;
				font-size: 15px;
				cursor: pointer;
			}

			a.alert:hover {
				background: rgba(255,255,255,.8);
			}

			.media {
				display: table;
			}

			.media .left, .media .right {
				display: table-cell;
				font-family: Pitch;
				vertical-align: middle;
			}

			.media .left {
				padding-right: 12px;
			}

			.calling-cover {
				display: block;
				width: 80px;
				height: auto;
			}

			.calling-titling {
				width: 140px;
				height: auto;
			}

			@media (min-width: 400px) {
				.calling-titling {
					width: 180px;
				}
			}

			.title {
				position: absolute;
				top: 40%;
				left: 50%;
				height: 200px;
				width: 320px;
				transform: translate(-50%,-50%);
				z-index: 1;
			}

			.title h1, .title h6 {
				font-weight: 400;
			}

			.title .segment-1, .title .segment-2, .title .segment-3, .title .segment-4 {
				color: rgba(255,255,255,.9);
				position: absolute;
				font-size: 48px;
			}
			.title .segment-1 {
				top: 0;
				left: 10%;
			}
			.title .segment-2 {
				color: rgba(255,255,255,.8);
				top: 10%;
				left: 55%;
			}
			.title .segment-3 {
				color: rgba(255,255,255,.7);
				top: 23%;
				left: 32%;
				font-size: 28px;
			}
			.title .segment-4 {
				color: rgba(255,255,255,.8);
				top: 35%;
				right: 10%;
				font-size: 54px;
			}

			.title .segment-5 {
				position: absolute;
				top: 65%;
				left: 10%;
			}

			@media (min-width: 640px) {
				.title .segment-1, .title .segment-2, .title .segment-3, .title .segment-4 {
					font-size: 64px;
				}

				.title .segment-1 {
					left: -2%;
				}

				.title .segment-3 {
					font-size: 34px;
					left: 28%;
					top: 28%;
				}

				.title .segment-4 {
					font-size: 72px;
					right: -10%;
				}
			}

			@media (min-width: 960px) {
				.title .segment-1, .title .segment-2, .title .segment-3, .title .segment-4 {
					font-size: 102px;
				}

				.title .segment-1 {
					left: -20%;
				}

				.title .segment-2 {
					left: 75%;
				}

				.title .segment-3 {
					font-size: 42px;
					left: 35%;
					top: 42%;
				}

				.title .segment-4 {
					font-size: 72px;
					top: 55%;
					right: -10%;
				}

				.title .segment-5 {
					top: 100%;
				}
			}

			.title .title__list {
				width: 240px;
				color: white;
				font-size: 20px;
				list-style-type: none;
				padding: 0;
				font-family: Pitch;
			}

			.title .title__list a {
				color: white;
				text-decoration: underline;
			}
			
			.title .title__list a:hover {
				background: white;
				color: #1662b8;
				text-decoration: none;
				padding: 0px 4px;
				margin: 0px -4px;
			}

			.title .title__list small {
				text-transform: uppercase;
				font-size: 15px;
				border-radius: 3px;
				padding: 0 4px;
				color: white;
				border: 1px solid white;
				border-radius: 3px;
			}

			.title .title__list li + li {
				margin-top: 4px;
			}

			@media (min-width: 800px) {
				.title .title__list {
					width: 320px;
					font-size: 24px;
				}
			}
		</style>
	</head>
	<body>

		<!-- Generator: Adobe Illustrator 19.1.0, SVG Export Plug-In  -->
		<svg class="logo" version="1.1"
			 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
			 x="0px" y="0px" width="506.7px" height="207.7px" viewBox="0 0 506.7 207.7" style="enable-background:new 0 0 506.7 207.7;"
			 xml:space="preserve">
		<defs>
		</defs>
		<path d="M84.7,80.2c-4.3-7.3-3.8-13-1.4-18.9c1.4-3.5,1.9-7.7,1.9-11.7c0.1-7.3,3.9-12.4,8.3-17.1c2.1-2.2,5.3-1.8,8.4-0.7
			c5.6,2,11.1,4.3,16.8,5.6c7.8,1.8,15.7,2.8,23.5,4.1c1.9,0.3,3.8,0.6,5.7,1c4.6,1,9.2,2.6,13.8,3.1c6.9,0.7,13.5,2.4,20.2,4.2
			c6,1.6,7.6,0,6.2-5.9c-0.8-3.2-1.6-6.4-2.9-9.4c-2.6-6.4-1.1-11,5.2-11.8c4.4-0.5,10-0.6,13.7,1.7c7.9,4.8,16,5.2,24.3,6.4
			c4.9,0.7,9.4,0.9,13.4-1.5c1.8-1.1,3.6-2.6,4.7-4.5c3.9-6.6,7.3-13.6,11.4-20.2c1.3-2.1,3.6-4.5,5.8-4.7c3.2-0.3,4.4,3.6,5.3,6.1
			c1.6,4.3,2.4,8.8,3.5,13.2c0.3,1.3,0.4,2.6,0.9,3.8c3.6,8.4,7.7,10.5,15.8,7.7c5.2-1.8,10.2-4.1,15.1-6.7c5.1-2.7,10-5.5,16.2-5.5
			c6.3,0,10.4,3.3,11.2,9.5c0.7,5,0.7,9.8-1.6,14.2c-1.3,2.5-2.2,5.7,0.4,8.4c2.3,2.4,5.3,2.7,8.4,1.8c10.9-3,21.8-6.3,33-8.6
			c7.3-1.4,15-1.4,22.6-1.6c3.5-0.1,6.5-0.5,9.6-1.8c5.4-2.3,11.3-3.7,17-5.4c1.3-0.4,2.9-0.2,4.4,0c2.3,0.3,5.1-0.2,6.3,2.6
			c1.3,3-0.2,5.4-2,7.4c-2.2,2.4-4.4,4.7-6.7,7c-4.4,4.5-6.2,10.1-5.8,16.9c0.1,2.2-0.8,4.5-1.3,6.7c-0.5,2.3,0.4,3.8,2.7,4.4
			c0.8,0.2,1.7,0.4,2.6,0.4c13.1-0.6,26.2-0.7,37.5-7.7c6.3-3.9,13.9-6,20.7-9.1c2.6-1.2,4.8-3,7.3-4.2c3.3-1.6,6.5-3.3,10-4.3
			c3.6-1,5.3,0.2,7.2,4c1.7,3.5,4.4,7,1.3,10.7c-0.4,0.5-0.4,1.7-0.2,2.4c1.9,5.1-1,7.7-4.1,10.6c-3.2,2.9-7.4,5.8-8.4,9.7
			c-1.5,5.6-5.4,9-8,13.4c-5.2,8.8-10.9,17-17.7,24.5c-4.6,5-8.2,11-12.4,16.4c-1.3,1.8-2.5,4.1-4.3,5c-8.3,4-13.1,11.9-20.3,17.2
			c-0.8,0.6-1.4,1.6-2.3,1.9c-11.1,3.9-18.6,13.6-30,16.9c-1,0.3-1.9,0.8-2.9,1c-11.3,1.8-22.5,4.1-33.9,5.3
			c-8.5,0.9-17.3,0.6-25.9,0.3c-6.1-0.2-12.4-1.5-18.5-2.1c-6.7-0.6-12.6,1.7-17.4,5.4c-7.1,5.6-15.5,8-24.3,9.3
			c-7.2,1-14.6,1.1-22.2-0.5c-3.5-0.7-7.2-0.4-10.7,0.1c-14.3,2-27.9-0.8-40.7-9.8c-1.5-1-3.1-1.7-4.6-2.7c-6.3-4.3-11.7-3.8-16.8,0.6
			c-3.8,3.3-8.7,3.1-13.7,2.4c-6.8-0.9-13.6-1.6-20.4-2.6c-4.2-0.6-8.5-1.3-12.7-2.2c-5.5-1.1-11-2.3-16.5-3.6
			c-2.1-0.5-4.2-1.3-6.1-2.3c-6.9-3.7-13.6-7.6-20.5-11.2c-10.9-5.9-20.3-13.7-28.5-23.1c-0.9-1-1.9-2-3-2.7c-9.5-6-16-15-23.3-23.2
			c-1.8-2-3.4-4.2-5.2-6.2c-6.8-7.1-12.1-15-15.1-24.2c-0.6-1.8-1.6-3.7-2.8-5.3C4.2,81.3,2,70.5,0.1,59.8c-0.6-3.1,0.8-6.7,2.1-9.6
			c1.6-3.6,6.2-4.5,9.8-2.1c6.6,4.5,13,9.4,19.6,13.9c10,6.8,20,13.5,31.3,17.5c1.6,0.6,3.7,1.2,5,0.7C72.9,78.5,78.1,79,84.7,80.2z
			 M264.2,195.3c7.4-2.4,14.8-4.8,22.1-7.3c0.7-0.2,1.4-0.9,1.8-1.6c3.7-5.8,9.5-9.3,15.2-12.8c7.6-4.5,11.2-11.8,13.6-20.1
			c1.5-5.1,2.6-10.4,3.7-15.7c0.3-1.6-0.1-3.4,0.2-5c1.8-10.1-5.9-19.5-5.5-29.5c0-1.1-1-2.4-1.8-3.5c-6.4-9.7-13.2-19.1-21.9-27
			c-2.9-2.7-5.2-6.2-7.6-9.4c-4.2-5.5-8.1-11.2-12.6-16.5c-2.8-3.3-5.4-6.5-6.1-10.8c-0.3-1.6-1.5-3.2-2.5-4.6c-1.8-2.5-4.1-2.5-6.1-1
			c-0.9,0.7-1.6,1.8-2.3,2.8c-3.1,4.5-6.2,9-9.2,13.5c-5.2,7.9-12.2,13.9-18.9,20.3c-2.7,2.6-5.6,5-7,9c-0.9,2.5-3.4,4.7-5.8,5.9
			c-11.7,5.7-21.1,13.7-27.7,25c-4.3,7.3-4.1,16-5.5,24.1c-0.2,1,0.2,2.2,0.7,3.2c1.8,3.5,1.4,6.7,0.3,9.9c-1,2.9-1.1,5.7,1.3,8.5
			c1.1,1.3,1.7,3.1,2.5,4.7c8,16.9,21.7,27.5,38.2,34.9c2.1,0.9,4.6,0.6,6.9,0.8c3.6,0.2,7.2,0.2,10.8,0.6
			C248.7,194.6,256.4,196.5,264.2,195.3z M378.5,181.8c6-2.8,12.1-5.1,17.7-8.3c9.6-5.6,18.7-12.1,28.3-17.8c6.6-4,13.7-7.4,18.3-13.7
			c3.5-4.9,7.8-8.7,12.8-11.8c2-1.2,3.9-3.1,4.8-5.2c2.8-6.8,7-12.3,12.3-17.2c3.5-3.2,6.9-7,8.9-11.3c4.8-10.3,10-20.1,19.1-26.9
			c0.5-0.4,0.9-0.8,1.2-1.3c0.9-1.5,1.4-3.4-0.6-4.4c-0.9-0.5-2.7,0.1-3.7,0.8c-1,0.6-1.3,2.1-2.3,2.7c-6.4,3.8-12.9,7.5-19.5,11.1
			c-1.2,0.7-2.8,0.8-4.2,1c-2.6,0.5-5.5,0.4-7.9,1.4c-8.9,3.4-18.1,5.5-27.8,6.1c-2.7,0.2-5.1,1.6-7.7,2.2c-3.8,0.9-7.6,2.2-11.5,2.4
			c-8.6,0.4-17.4,0.1-26,0.3c-2.2,0.1-4.4,0.9-6.2,1.9c-5.9,3.1-11.4,7.2-17.7,9.6c-9.3,3.6-18.9,6.4-24.1,15.8
			c-0.7,1.2-1.9,2.1-3,2.9c-2.1,1.6-2.7,3.8-2.8,6.5c-0.3,8.5-0.8,16.9-1.5,25.4c-0.2,2-1.1,4-1.9,5.8c-2.4,5.2-5,10.3-7.2,15.5
			c-1.3,3.1-0.6,4.9,2.8,6c2.5,0.8,4.7,3,7.9,1.6c1.8-0.8,4.8,0.9,7.2,0.9c2.3,0.1,4.6-1,6.9-0.5C360.5,185,368.8,179.2,378.5,181.8z
			 M174.6,175.8c-3.7-10.6-6.8-21.1-11-31.3c-2.1-5-2.9-9.8-2.1-14.4c0.8-4.6-0.6-7.5-4.3-10c-2.6-1.7-5.2-3.4-8-4.5
			c-6.7-2.7-13.9-4.4-20.2-7.9c-7.2-4-14.3-6.9-22.2-7.2c-4.7-0.2-9.4-0.6-14.1-0.9C86,99,79.5,98,73.1,94.9c-2.5-1.2-5.4-1.5-8.1-2.2
			c-3.8-1-7.6-1.7-11.3-2.9c-6.3-2-12.4-4.4-18.7-6.4c-4.2-1.4-7.6,0.1-7.1,3.3c0.6,4,1.7,8.1,3.5,11.7c2.3,4.5,5.5,8.7,8.6,12.8
			c3.3,4.5,6.7,9,10.5,13c5.8,6,12.2,11.3,18.1,17.2c12.2,12.3,26.8,20,42.6,25.3c13.9,4.7,27.9,8.9,41.9,13.1c2,0.6,4.3,1,6.2,0.6
			C164.5,179.1,169.5,177.4,174.6,175.8z M107.5,53.4c-2.2,5.1-2.5,10-1.8,14.9c1.1,7.4,4.3,14,11.9,17.3c6,2.7,11.9,5.9,18.5,6.6
			c2.2,0.2,4.4,1.7,6.5,2.9c5.4,3.1,10.6,6.6,16,9.6c3.8,2.1,6.1,1.5,8.8-1.7c3.5-4.2,7.2-8.2,10.6-12.5c2.3-2.8,4.1-6.1,6.5-8.8
			c4-4.5,3.1-9.8-2.4-13.4c-8.8-5.7-18-7.9-27.8-7.5c-3.6,0.1-7.2,0-10.8-0.7c-8.3-1.6-16.5-3.7-24.7-5.4
			C115.1,54.1,111.5,53.9,107.5,53.4z M404.4,53.9c-3.2-0.2-5.3-0.6-7.2-0.5c-2.3,0.2-4.4,1-6.7,1.3c-9.9,1.4-19.7,3.7-29.1,0.8
			c-4.1,1.1-7.5,1.9-10.8,2.8c-1.6,0.4-3.3,0.5-4.7,1.3c-6.1,3.8-12.1,7.9-18.2,11.7c-5.6,3.5-7,9-4,15.7c0.6,1.4,1,2.9,1.7,4.3
			c2.8,5.3,4.3,11.1,9.1,15.4c4.2,3.8,6.3,4.4,9.6,0.8c5.5-6,11.7-11.1,18.7-15.3c8.2-5,16.6-9.4,26.6-10.7c1.4-0.2,3.2-0.3,4.2-1.1
			c2.3-2,6.5-2.5,6.2-6.8c-0.4-4.9,0.8-9.2,3-13.2C403.4,59,403.5,57.1,404.4,53.9z M308.9,60.1c1-5.1,1.8-9.8,2.8-14.4
			c0.3-1.4,1.1-2.7,1.2-4.2c0.1-2.2-1.7-3.8-3.8-3.3c-4.6,1.1-9.3,2.1-13.7,3.6c-4.8,1.6-5.5,4.8-1.6,8.7
			C298,54.7,302.3,59.3,308.9,60.1z M225.1,45.3c-5.5-3.6-9.9-4.5-14.3-3.6c-1.5,0.3-3.8,2.3-3.6,3.4c0.4,2.8,1.7,5.8,3.3,8.2
			c0.5,0.8,3.9,0.8,5.1-0.1C218.8,51.2,221.4,48.5,225.1,45.3z"/>
		</svg>

		<nav class="page-nav">
			<ul>
				<li>
					<a href="#">Twitter</a>
				</li>
				<li>
					<a href="#">Instagram</a>
				</li>
				<li>
					<a href="#">Tour</a>
				</li>
				<li>
					<a href="#">Purchase Album</a>
				</li>
			</ul>
		</nav>

		<div class="title">
			<h1 class="segment-1">Clayton </h1>
			<h6 class="segment-2">Jesse</h6>
			<h6 class="segment-3">makes</h6>
			<h6 class="segment-4">music.</h6>
			<ul class="segment-5 title__list">
				<li><a href="#">White Lotus</a> <small>Rap</small></li>
				<li><a href="#">Clemence</a> <small>Experimental</small></li>
				<li><a href="#">Jolean</a> <small>Don’t know</small></li>
			</ul>
		</div>

		<a class="alert" href="#">
			<div class="media">
				<div class="left">
					<img class="calling-cover" src="/assets/image/calling-cover.jpg" alt=": Calling :" />	
				</div>
				<div class="right">
					<!-- Generator: Adobe Illustrator 19.1.0, SVG Export Plug-In  -->
					<svg class="calling-titling" version="1.1"
						 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
						 x="0px" y="0px" width="91.3px" height="28.4px" viewBox="0 0 91.3 28.4" style="enable-background:new 0 0 91.3 28.4;"
						 xml:space="preserve">
					<style type="text/css">
						.st0{fill:url(#SVGID_1_);}
						.st1{fill:url(#SVGID_2_);}
					</style>
					<defs>
					</defs>
					<linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="1.52" y1="6.2891" x2="91.2287" y2="23.5015">
						<stop  offset="0" style="stop-color:#2068B2"/>
						<stop  offset="1" style="stop-color:#4E5F79"/>
					</linearGradient>
					<path class="st0" d="M1.9,3.6c1,0,1.9,0.8,1.9,1.9S2.9,7.3,1.9,7.3c-1,0-1.8-0.8-1.8-1.9S0.9,3.6,1.9,3.6z M1.9,8.9
						c1,0,1.9,0.8,1.9,1.9c0,1.1-0.8,1.9-1.9,1.9c-1,0-1.8-0.8-1.8-1.9C0.1,9.7,0.9,8.9,1.9,8.9z M14.5,0c3.1,0,4.9,1.8,5.3,4.3h-3.2
						c-0.3-0.9-1-1.5-2.1-1.5c-1.7,0-2.7,1.5-2.7,3.5c0,2,1,3.5,2.7,3.5c1.1,0,1.8-0.6,2.1-1.5h3.2c-0.4,2.5-2.2,4.3-5.3,4.3
						c-3.4,0-5.9-2.6-5.9-6.3C8.6,2.6,11,0,14.5,0z M27.8,0.2l4.7,12.3h-3.3l-0.9-2.4h-4.5L23,12.5h-3.2l4.7-12.3H27.8z M24.9,7.5h2.5
						L26.1,4L24.9,7.5z M33.6,0.2h3.2v9.5h5.5v2.8h-8.7V0.2z M43.8,0.2H47v9.5h5.5v2.8h-8.7V0.2z M57.2,12.5H54V0.2h3.2V12.5z M69.9,12.5
						h-2.6l-5.1-7.2v7.2H59V0.2h3L66.8,7V0.2h3.1V12.5z M77.7,8.3V5.9h5.1v1.2c0,3.4-2.2,5.5-5.5,5.5c-3.6,0-6.1-2.6-6.1-6.3
						c0-3.7,2.5-6.3,6-6.3c3.2,0,5,1.8,5.4,4.3h-3.3c-0.3-0.9-1-1.5-2.2-1.5c-1.8,0-2.8,1.5-2.8,3.5c0,2.1,1.1,3.5,2.8,3.5
						c1.2,0,2-0.6,2.3-1.5H77.7z M89.5,3.6c1,0,1.9,0.8,1.9,1.9s-0.8,1.9-1.9,1.9c-1,0-1.8-0.8-1.8-1.9S88.4,3.6,89.5,3.6z M89.5,8.9
						c1,0,1.9,0.8,1.9,1.9c0,1.1-0.8,1.9-1.9,1.9c-1,0-1.8-0.8-1.8-1.9C87.6,9.7,88.4,8.9,89.5,8.9z M2.9,19.7v0.9
						c-1.1,0.3-2.1,1.4-2.1,3.1c0,1.6,0.9,2.8,2.1,3.1v0.9C1.1,27,0,25.5,0,23.6S1.1,20.1,2.9,19.7z M6.5,26.6v-0.4
						c-0.2,0.2-0.7,0.4-1.2,0.4c-1,0-1.8-0.6-1.8-1.5c0-0.9,0.8-1.5,1.8-1.5c0.5,0,1,0.2,1.2,0.4v-0.6c0-0.6-0.4-1-1-1
						c-0.5,0-0.8,0.2-1,0.7H3.6c0.2-0.8,0.9-1.3,1.8-1.3c1.1,0,1.8,0.6,1.8,1.7v3.2H6.5z M6.5,24.9c-0.1-0.4-0.6-0.6-1.1-0.6
						c-0.6,0-1.1,0.3-1.1,0.8c0,0.6,0.6,0.8,1.1,0.8c0.5,0,1-0.2,1.1-0.6V24.9z M14.9,25.5l1-3.6h0.8l-1.4,4.7h-0.8l-1-3.6l-1,3.6h-0.8
						l-1.4-4.7h0.8l1,3.6l1-3.6H14L14.9,25.5z M17.7,19.7h0.8v2.8c0.3-0.4,0.8-0.7,1.4-0.7c1.1,0,1.7,0.7,1.7,1.7v3.1h-0.8v-3
						c0-0.7-0.3-1.1-1-1.1c-0.6,0-1,0.4-1.2,0.9v3.2h-0.8V19.7z M23.3,21c-0.3,0-0.5-0.2-0.5-0.5c0-0.3,0.2-0.5,0.5-0.5
						c0.3,0,0.5,0.2,0.5,0.5C23.8,20.7,23.6,21,23.3,21z M23.7,26.6h-0.8v-4.7h0.8V26.6z M25.3,22.6h-0.8v-0.7h0.8v-1.2h0.8v1.2h1.1v0.7
						h-1.1v2.8c0,0.5,0.2,0.7,0.6,0.7c0.2,0,0.5-0.1,0.6-0.2v0.7c-0.2,0.1-0.5,0.2-0.7,0.2c-0.8,0-1.3-0.4-1.3-1.3V22.6z M32.2,25.2
						c-0.2,0.9-0.8,1.5-1.9,1.5c-1.3,0-2.2-1-2.2-2.5c0-1.4,0.9-2.5,2.2-2.5c1.3,0,2,0.9,2,2.3v0.3h-3.3c0,1,0.6,1.6,1.4,1.6
						c0.6,0,1-0.3,1.2-0.8H32.2z M28.9,23.8h2.5c0-0.7-0.4-1.3-1.2-1.3C29.5,22.5,29,23,28.9,23.8z M34.1,26.6h-0.8v-6.9h0.8V26.6z
						 M37.4,26.7c-1.3,0-2.2-1-2.2-2.5c0-1.5,0.9-2.5,2.2-2.5c1.3,0,2.2,1,2.2,2.5C39.5,25.7,38.7,26.7,37.4,26.7z M37.4,22.5
						c-0.9,0-1.4,0.7-1.4,1.8c0,1,0.5,1.8,1.4,1.8c0.9,0,1.4-0.7,1.4-1.8C38.7,23.2,38.2,22.5,37.4,22.5z M40.9,22.6h-0.8v-0.7h0.8v-1.2
						h0.8v1.2h1.1v0.7h-1.1v2.8c0,0.5,0.2,0.7,0.6,0.7c0.2,0,0.5-0.1,0.6-0.2v0.7c-0.2,0.1-0.5,0.2-0.7,0.2c-0.8,0-1.3-0.4-1.3-1.3V22.6z
						 M47.8,26.6H47V26c-0.3,0.4-0.8,0.7-1.4,0.7c-1.1,0-1.7-0.7-1.7-1.7v-3.1h0.8v3c0,0.7,0.3,1.1,1,1.1c0.6,0,1-0.4,1.2-0.9v-3.2h0.8
						V26.6z M49.6,25.3c0.1,0.5,0.6,0.7,1.1,0.7c0.6,0,1-0.2,1-0.7c0-0.3-0.2-0.5-0.7-0.7l-0.9-0.2c-0.7-0.2-1.1-0.5-1.1-1.2
						c0-0.8,0.7-1.4,1.7-1.4c1,0,1.7,0.5,1.8,1.3h-0.8c-0.1-0.4-0.5-0.7-1-0.7c-0.5,0-0.9,0.2-0.9,0.7c0,0.3,0.2,0.5,0.7,0.6l0.9,0.2
						c0.8,0.2,1.2,0.7,1.2,1.3c0,0.9-0.7,1.4-1.8,1.4c-1,0-1.8-0.5-1.9-1.4H49.6z M60.8,21.8c1,0,1.5,0.7,1.5,1.7v3.1h-0.8v-3
						c0-0.7-0.3-1.1-0.9-1.1c-0.5,0-0.9,0.3-1,0.8v3.3h-0.8v-3c0-0.7-0.3-1.1-0.9-1.1c-0.5,0-0.9,0.3-1,0.8v3.3H56v-4.7h0.8v0.6
						c0.2-0.4,0.7-0.7,1.3-0.7c0.6,0,1.1,0.3,1.3,0.8C59.6,22.1,60.1,21.8,60.8,21.8z M64,21c-0.3,0-0.5-0.2-0.5-0.5
						c0-0.3,0.2-0.5,0.5-0.5c0.3,0,0.5,0.2,0.5,0.5C64.5,20.7,64.3,21,64,21z M64.4,26.6h-0.8v-4.7h0.8V26.6z M68,24.2l1.8,2.5h-0.9
						l-1.3-1.8l-1.3,1.8h-0.9l1.7-2.4l-1.7-2.3h0.9l1.2,1.7l1.2-1.7h0.9L68,24.2z M70.9,22.6h-0.8v-0.7h0.8v-1.2h0.8v1.2h1.1v0.7h-1.1
						v2.8c0,0.5,0.2,0.7,0.6,0.7c0.2,0,0.5-0.1,0.6-0.2v0.7c-0.2,0.1-0.5,0.2-0.7,0.2c-0.8,0-1.3-0.4-1.3-1.3V22.6z M76.6,26.6v-0.4
						c-0.2,0.2-0.7,0.4-1.2,0.4c-1,0-1.8-0.6-1.8-1.5c0-0.9,0.8-1.5,1.8-1.5c0.5,0,1,0.2,1.2,0.4v-0.6c0-0.6-0.4-1-1-1
						c-0.5,0-0.8,0.2-1,0.7h-0.8c0.2-0.8,0.9-1.3,1.8-1.3c1.1,0,1.8,0.6,1.8,1.7v3.2H76.6z M76.6,24.9c-0.1-0.4-0.6-0.6-1.1-0.6
						c-0.6,0-1.1,0.3-1.1,0.8c0,0.6,0.6,0.8,1.1,0.8c0.5,0,1-0.2,1.1-0.6V24.9z M79.5,28.4h-0.8v-6.5h0.8v0.6c0.2-0.3,0.7-0.7,1.3-0.7
						c1.4,0,2.1,1.2,2.1,2.5s-0.7,2.5-2.1,2.5c-0.6,0-1.1-0.3-1.3-0.7V28.4z M79.5,25.2c0.2,0.5,0.7,0.8,1.2,0.8c0.9,0,1.4-0.7,1.4-1.7
						c0-1-0.5-1.7-1.4-1.7c-0.5,0-1,0.3-1.2,0.8V25.2z M87.9,25.2c-0.2,0.9-0.8,1.5-1.9,1.5c-1.3,0-2.2-1-2.2-2.5c0-1.4,0.9-2.5,2.2-2.5
						c1.3,0,2,0.9,2,2.3v0.3h-3.3c0,1,0.6,1.6,1.4,1.6c0.6,0,1-0.3,1.2-0.8H87.9z M84.6,23.8h2.5c0-0.7-0.4-1.3-1.2-1.3
						C85.2,22.5,84.7,23,84.6,23.8z M88.5,27.5v-0.9c1.1-0.3,2.1-1.4,2.1-3.1c0-1.6-0.9-2.8-2.1-3.1v-0.9c1.7,0.5,2.9,2,2.9,3.9
						S90.2,27,88.5,27.5z"/>
					</svg>

					<p>Stream for free. $20 download.</p>
				</div>
			</div>
		</a>

		<div class="video-bg">
			<video autoplay loop>
				<source src="/assets/video/calling.mp4" type="video/mp4">
			</video>
		</div>

	</body>
</html>