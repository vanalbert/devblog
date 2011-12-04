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
			<h2>Notepad++</h2>
			<p>Notepad++ was my editor of choice until I started working with Dreamweaver which has excellent out-of-the-box code complete for HTML, CSS, PHP and other scripting languages. But as I move more into open-source, it looks like I'll be working with Notepad++ which requires some configuration.</p>
			<p>I'll first try HTML Tidy, which has a large userbase. HTML Tidy installs by default as a NPP plugin but requires a configuration file to work correctly:</p>

			<ul>
				<li>Get the configuration file at <a href="http://sourceforge.net/apps/mediawiki/notepad-plus/index.php?title=HTML_Tidy">http://sourceforge.net/apps/mediawiki/notepad-plus/index.php?title=HTML_Tidy</a>.</li>
				<li>Create a text file in the plugins\NPPTextFX folder of your Notepad++ install</li>
				<li>Paste the configuration into the text file and save as tidycfg.ini. </li>
				<li>Choose TextFX => Refresh Menu from TidyCFG.INI. </li>
				<li>Check the /plugins/API folder for existence of the XML file containing the keywords for the language you want to autocomplete for.</li>
				<li>Check the root folder for Langs.xml and make sure the languages you want to autocomplete for are present.</li>
				<li>Select the language you want to autocomplete for in the Language menu.</li>
				<li>Select Settings => Preferences and check the desired options under Auto-Complete.</li>	
				<li></li>
			</ul>

 
    		<p>NP's autocomplete function doesn't autoclose any open tags like Dreamweaver by default. To enable it:</p>

			<ul>
				<li>Choose TextFX =>TextFX Settings.</li>
				<li>Choose Autoclose XML/HTML Tag.</li>
			</ul>
			
			<p>Notepad++ also has a macro function. It, too, required some non-intuitive tweaking to work for me. Also, the controls for managing macros are in a non-intuitive place. </p>
			<ul>
				<li>Choose Settings => Shortcut Mapper </li>
				<li>Select the macro you want to edit or delete from the list and right-click.</li>
			</ul>
			<p>It's a good idea to record and store your macros all at once rather than creating macros on the fly. You need to turn off any autocomplete or autoclose functions you're using before macro recording. NP doesn't track autocompleted or autoclosed input during macro recording. Turning these options off and on while recording macros quickly gets tiresome.</p>

	
				
    		<div id="links">
			<h5>Links</h5>
				<ul>
					<li><a href="http://sourceforge.net/apps/mediawiki/notepad-plus/index.php?title=HTML_Tidy">HTML Tidy</a></li>
					<li><a href="http://notepad-plus-plus.org/">Notepad++ Home</a></li>
				</ul>
			</div>
			
		<div id="note">
			<h5>Notes:</h5>
			<p></p>
		</div>
				
		</article>

				


		
	</div><!-- #page-wrap close-->
	
	
	
</body>
		