<!--
<?php include("ascii.txt"); ?>
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>halcyon, Inc.</title>
    <meta name="description" content="Moving forward.">
    <meta name="keywords" content="halcyon, halcyonInc, muhammad, muzzammil, nabeel, omer">
    <meta name="author" content="halcyon, Inc.">
    <meta name="theme-color" content="<?php if(rand()%2 == 0) echo '#000000'; else echo '#f0f0f0'; ?>">
    <link rel="stylesheet" href="main.css">
    <link rel="icon" href="favicon.ico" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<div class="website">
		<div id="home" class="home">
			<canvas id="can"></canvas>
			<div id="spacer"></div>
			<h1 class="title"><span id="halcyon"></span><span id="inc"></span></h1>
			<h2 id="tag">Moving forward.</h2>
			<div id="nav" class="nav">
				<span id="about">about</span> |
				<span id="team">team</span> |
				<span id="projects">work</span> |
				<span id="hire">hire</span>
			</div>
		</div>
		<div class="about">
			<h1>About Halcyon</h1>
			<p>
				Halcyon Incorporated was co-founded on 25<sup>th</sup> of April, 2017 by two friends with the initial idea of being a common platform to share their projects with the world.
			</p>
		</div>
		<div id="space"></div>
		<div class="team">
			<h1>The Team</h1>
			<div id="space"></div>
			<div class="founder" id="mm">
				<h2>Muhammad Muzzammil</h2>
				<h4>Co-Founder</h4>
				<p>A student, web developer & a programmer. Fan of technology, programming, graphics designing, naruto(!!) and, of course, coffee (&lt3).</p>
				<a class="button" id="web" href="http://muzzammil.xyz/?r=halcyoninc.xyz" target="_blank">Visit Website</a>
			</div>
			<div class="founder" id="no">
				<h2>Nabeel Omer</h2>
				<h4>Co-Founder</h4>
				<p>A systems programmer and an undergraduate student. Plans to get a PhD in Computer Science. Apart from Computer Science he likes Mountain Biking, Lego, Neuroscience, and Genetics.</p>
				<a class="button" id="web" href="https://nabeelomer.me/?fromHalcyon" target="_blank">Visit Website</a>
			</div>
		</div>
		<div id="space"></div>
		<div class="work">
			<h1>Our Work</h1>
			<div id="deck">
				<a href="https://halcyoninc.xyz/UnixTimestamp/?halcyon" target="_blank"><div class="card rand<?php echo rand(1, 5);?>"> <span id="unixtimestamp">Unix Timestamp</span></div></a>
				<a href="http://www.muzzammil.xyz/reader/?halcyon" target="_blank"><div class="card rand<?php echo rand(1, 5);?>"> <span id="reader">Reader</span></div></a>
				<a href="http://www.muzzammil.xyz/disguise/?halcyon" target="_blank"><div class="card rand<?php echo rand(1, 5);?>"> <span id="disguise">Disguise</span></div></a>
				<a href="http://www.muzzammil.xyz/git/OctoCSS/?halcyon" target="_blank"><div class="card rand<?php echo rand(1, 5);?>"> <span id="octocss">OctoCSS</span></div></a>
				<a href="https://github.com/nabeelomer/mailshell" target="_blank"><div class="card rand<?php echo rand(1, 5);?>"> <span id="mailshell">MailShell</span></div></a>
				<a href="https://github.com/muhammadmuzzammil1998/worst-js" target="_blank"><div class="card rand<?php echo rand(1, 5);?>"> <span id="worstjs">worst-js</span></div></a>
				<a href="https://github.com/muhammadmuzzammil1998/personal-website" target="_blank"><div class="card rand<?php echo rand(1, 5);?>"> <span id="personalwebsite">personal-website</span></div></a>
				<a href="https://github.com/muhammadmuzzammil1998/RandomTheme" target="_blank"><div class="card rand<?php echo rand(1, 5);?>"> <span id="randomtheme">RandomTheme</span></div></a>
				<a href="http://muzzammil.xyz/git/bing/?halcyon" target="_blank"><div class="card rand<?php echo rand(1, 5);?>"> <span id="binghomepageapi">BingHomepageAPI</span></div></a>
				<a href="https://github.com/nabeelomer/benchmarker" target="_blank"><div class="card rand<?php echo rand(1, 5);?>"> <span id="benchmarker">Benchmarker</span></div></a>
				<a href="https://github.com/muhammadmuzzammil1998/BingWallpaper" target="_blank"><div class="card rand<?php echo rand(1, 5);?>"> <span id="bingwallpaperwin">BingWallpaper (Windows)</span></div></a>
				<a href="http://muzzammil.xyz/smarttext/?halcyon" target="_blank"><div class="card rand<?php echo rand(1, 5);?>"> <span id="SmartText">SmartText</span></div></a>
				<a href="https://github.com/nabeelomer/BingWallpapers" target="_blank"><div class="card rand<?php echo rand(1, 5);?>"> <span id="bingwallpaperlin">BingWallpaper (Ubuntu)</span></div></a>
				<a href="https://nabeelomer.me/?halcyon&libkernel" target="_blank"><div class="card rand<?php echo rand(1, 5);?>"> <span id="libkernel">libKernel</span></div></a>
				<a href="https://nabeelomer.me/?halcyon&coffeec" target="_blank"><div class="card rand<?php echo rand(1, 5);?>"> <span id="coffeec">coffee-c</span></div></a>
			</div><br><br>
		</div>
		<div class="hire">
			<h1>Hire Us</h1>
			<h2>Contact us at: <a id="mail" href="mailto:contact@halcyoninc.xyz">contact@halcyoninc.xyz</a></h2>
		</div>
		<div id="i"></div>
	</div>
	<script src="main.js"></script>
</body>
</html>