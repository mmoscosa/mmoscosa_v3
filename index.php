<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>mmoscosa</title>

	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="apple-touch-fullscreen" content="yes" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/main.css">

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span3 well hidden-phone" id="navigation">
				<div id="idCard">
					<?php
						$email = "mmoscosa@gmail.com";
						$grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) );
					?>
					<img src="<?php echo $grav_url;?>" alt="gravayar" title="Martin Moscosa" class="img-circle avatar"/>
					<h3>Martin Moscosa</h3>
					<p>Web Project Manager & Developer. <br/><span>Seeking new and challenging opportunities</span></p>
					<ul id="social">
						<li><a href="http://twitter.com/mmoscosa" target="_blank" title="Twitter mmoscosa"><i class="icon-twitter"></i></a></li>
						<li><a href="https://www.linkedin.com/in/mmoscosa" target="_blank" title="LinkedIn Martin Moscosa"><i class="icon-linkedin"></i></a></li>
						<li><a href="https://www.facebook.com/mmoscosa.web" target="_blank" title="Facebook mmoscosa"><i class="icon-facebook"></i></a></li>
						<!-- <li><a href="http://pinterest.com/mmoscosa/" target="_blank" title=""><i class="icon-pinterest"></i></a></li> -->
						<li><a href="https://github.com/mmoscosa" target="_blank" title="Github mmoscosa"><i class="icon-github-alt"></i></a></li>
						<li><a href="https://plus.google.com/u/0/114388949394787888641" target="_blank" title="Google+ mmoscosa"><i class="icon-google-plus"></i></a></li>
					</ul>
				</div>
				<nav>
					<ul>
						<a href="#"><li id="active" class="first">Home</li></a>
						<!-- <a href="#"><li>Portfolio</li></a>
						<a href="#"><li>Blog</li></a>
						<a href="#"><li>Photos</li></a>
						<a href="#"><li>Contact</li></a> -->
					</ul>
				</nav>
				<footer>
					<small>mmoscosa.com &copy; <?php echo date('Y');?></small>
				</footer>
			</div>
			<div class="span8 offset3">
				<div id="content-for-layout"></div>
			</div>
		</div>
	</div>
	<footer class="main visible-phone">
		<small>mmoscosa.com &copy; <?php echo date('Y');?></small>
	</footer>
</body>
</html>
