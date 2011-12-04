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

<?php include 'includes/main-nav.php'; ?>

	<!-- #main-nav close -->

		<article class="clearfix">
			<h2>Git Windows Installation</h2>
			<p>I installed using the standard Windows installer from <a href="http://code.google.com/p/msysgit/downloads/list?can=3">http://code.google.com/p/msysgit/downloads/list?can=3</a>. I chose option 1 and 2, choosing to use Git Bash as my command line tool. </p>
			<p>I am starting with what looks like a <a href="http://kylecordes.com/2008/git-windows-go">good practical tutorial</a> from Kyle Cordes. I installed Git, selecting Git Bash as the command line interface. In Windows, it integrates with Explorer so all you have to do is select the Git Bash Here option from the Explorer right-click menu  to open the Bash command box.</p>
			<ul>
				<li>Create an <a href="http://en.wikipedia.org/wiki/Secure_Shell">SSH key</a> with <ital>ssh-keygen -C "username@email.com" -t rsa</ital>.</li>
				<li>Accept the default location to store the key file location (C:\Documents and Settings\<ital>user</ital>\.ssh\id_rsa. </li>
				<li>Enter a password. My password is "GameOn554". Bash doesn't show you any characters while you type here so you'll thing there's an error. There's not, so don't just start entering junk characters like I did. Just enter your password and confirm when prompted.</li>
				<li>
    		<p></p>
				
    		<div id="links">
			<h5>Links</h5>
				<ul>
					<li><a href="http://www.git-scm.com">Git Home</a></li>
					<li><a href="http://www.youtube.com/user/MichaelMarner">Michael Marner's Git Tutorials on YouTube</a></li>
					<li>There's an extensive discussion of Git on StackOverflow at <a href="http://stackoverflow.com/questions/315911/git-for-beginners-the-definitive-practical-guide#323764">http://stackoverflow.com/questions/315911/git-for-beginners-the-definitive-practical-guide#323764</a>. It includes posts on a variety of implementation topics.</li>
				</ul>
			</div>
			
		<div id="note">
			<h5>Notes:</h5>
			<p></p>
		</div>
				
		</article>

				


		
	</div><!-- #page-wrap close-->
	
	
	
</body>
		