<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Magnolia | Site Template</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"><!-- Mobile viewport optimized: j.mp/bplateviewport -->

	<link rel="stylesheet" href="<?php echo base_url();?>asset/css/style_fc95409a.css"><!-- CSS Styles -->
	<link rel="stylesheet" href="<?php echo base_url();?>asset/css/color-scheme.css"><!-- COLOR SCHEME Styles -->
	<link rel="stylesheet" href="<?php echo base_url();?>asset/css/responsive.css"><!-- RESPONSIVE CSS Styles -->
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700|Droid+Serif:400,400italic|Damion' rel='stylesheet' type='text/css'><!-- FONT-FACE KITS -->
	
	<script src="<?php echo base_url();?>asset/js/libs/modernizr-2.0.6.min.js"></script><!-- MODERNIZR JavaScript for IE -->
	
	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
	<script src="<?php echo base_url();?>asset/js/libs/jquery-1.7.1.min.js"></script>
	<!--//////
	<script>window.jQuery || document.write("<script src='./js/libs/jquery-1.7.1.min.js'>\x3C/script>")</script><!-- local fall-back if google api down -->
	<script src="<?php echo base_url();?>asset/js/plugins.js"></script>
	<script src="<?php echo base_url();?>asset/js/script.js"></script>
	<!-- end JavaScript-->

<meta charset="UTF-8"></head>

<body>


	<div id="main" role="main">
		
		<div id="header-border"></div>		
		<header>
		<div id="header-main" class="container">
			<div id="logo"><a href="./index.php.html"><img src="<?php echo base_url();?>asset/images/logo.png" alt="logo" /></a></div>

			<nav>
				<?php 
					$attributes = array('class' => 'searchform');
					echo form_open(site_url('/blog/search'), $attributes); 
				?>
					<label for="s" class="assistive-text">Search</label>
					<input type="text" class="field" name="input_search" id="s" placeholder="Search" />
					<input type="submit" class="submit" name="submit" id="searchsubmit" value="Search" />
				</form>
						
			
				<div class="clearfix"></div>
				
				<ul class="sf-menu sf-vertical">
					<li>
						<a href="./index.php.html">Home</a>
					</li>
					<li>
						<a href="./about.php.html">About</a>
					</li>
					<li>
						<a href="./styles.php.html">Styles</a>
						<ul>
							<li><a href="./styles.php.html">Page Styles</a></li>
							<li><a href="./full-width.php.html">Full width columns</a></li>
							<li><a href="./left-sidebar.php.html">Left sidebar</a></li>
							<li><a href="./right-sidebar.php.html">Right sidebar</a></li>
						</ul>
					</li>
					<li>
						<a href="./portfolio.php.html">Portfolio</a>
						<ul>
							<li><a href="./portfolio-1-column.php.html">One column portfolio</a></li>
							<li><a href="./portfolio-2-column.php.html">Two column portfolio</a></li>
							<li><a href="./portfolio.php.html">Three column portfolio</a></li>
							<li><a href="./portfolio-4-column.php.html">Four column portfolio</a></li>
							<li><a href="./portfolio-single.php.html">Portfolio Single</a></li>
						</ul>
					</li>
					<li class="current">
						<a href="./blog.php.html">Blog</a>
					</li>
					<li>
						<a href="./contact.php.html">Contact</a>
					</li>
				</ul><!-- close .sf-menu navigation -->
				<div class="clearfix"></div>
			</nav>
			
		<div class="clearfix"></div>
		</div><!-- close #header-main -->
		</header>
		
		
