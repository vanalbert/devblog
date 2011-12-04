<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<!-- Design by V. Albert/Hexage Designs 2010 -->
<title>Development Toolchest</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="x-ua-compatible" content="IE=8" />
<meta name="description" content="Van Albert - Comprehensive Digital Services" />
<meta name="keywords" content="development, tools, implementation, localization" />
<meta name="author" content="F. Van Edelblut" />
<link rel="stylesheet" type="text/css" media="screen,projection" href="./css/style-screen.css" />
<!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" media="screen,projection" href="./css/style-screen_ie6.css" />
<![endif]-->
<link href="greybox/gb_styles.css" rel="stylesheet" type="text/css" media="all" />
<script src="javascripts/scripts.js" type="text/javascript"></script>
<script src="javascripts/prototype.js" type="text/javascript"></script>
<script src="javascripts/scriptaculous.js" type="text/javascript"></script>
<script type="text/javascript">var GB_ROOT_DIR = "./greybox/";</script>
<script type="text/javascript" src="greybox/AJS.js"></script>
<script type="text/javascript" src="greybox/AJS_fx.js"></script>
<script type="text/javascript" src="greybox/gb_scripts.js"></script>
<script type="text/javascript" src="static_files/help.js"></script>
<!-- IE opacity filters for IE/Scriptaculous fade must be declared in CCs for for CSS validity -->
<!--[if IE 8]>
<style>
h1, h3, h4, li {
filter:alpha(opacity=99);
}
</style>
<![endif]-->
</head>

<body>
	<div id="page-wrap">
		
		<header class="clearfix">
			<h1>Development Toolchest</h1>
			<h3>Development Topics</h3>
			
		</header>

<?php include('..includes/main-nav.php'); ?>

	<!-- Main navigation bar, in tab style no drop-down list of menu items. Submenus will be placed on the landing pages for each of the links below -->
	<div id="main-nav">
		<ul id="menu-main">
			<li><a href="index.php"><span>Home</span></a></li>
			<li><a href="drupal.php"><span>Drupal</span></a></li>
			<li><a href="git.php"><span>Git</span></a></li>
			<li><a href="dita.php"><span>DITA</span></a></li>
			<li><a href="xslt.php"><span>XSLT</span></a></li>
			<li><a href="glossary.php"><span>Glossary</span></a></li>
		</ul>
	</div>

	<!-- #main-nav close -->


		<article class="clearfix">
			<h2>XAMPP</h2>
			<p>XAMPP Virtual Host </p>
			<p>To set up a virtual host on your localhost server:</p>
			<ul>
				<li>Modify the virtual hosts file in XAMPP installation</li>
				<li>Modify the hosts file in the operating system</li>
				<li>Reboot the machine</li>
			</ul>
			<p>Notes:</p>
    		<p>The OS has to read the hosts file to define the virtual host. Rebooting is the only way to ensure this, I think. Restarting the Apache server or XAMPP won't do the trick. </p>
			<p>PHP won't run from a local file. If you have any PHP such as menus or headers referenced to a separate Include file, you must run the site from the localhost. I have wasted two hours on this today even though I've done it several times before.</p>	
    		<div id="links">
			<h5>Links</h5>
				<ul>
					<li><a href="#"></a></li>
					<li><a href="#"></li>
				</ul>
			</div>
			
		<div id="note">
			<h5>Notes:</h5>
			<p>The Virtual Hosts file in XAMPP is here: <a href="C:\xampp\apache\conf\httpd.conf">C:\xampp\apache\conf\httpd.conf</a>.</p>
			<p>The Windows hosts file is here: <a href="C:\Windows\system32\drivers\etc">C:\xampp\apache\conf\httpd.conf</a
		</div>
				
		</article>

				

		
	</div><!-- #page-wrap close-->
	
	
	
</body>
		