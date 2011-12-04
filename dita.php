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
			<h2>DITA Open Toolkit</h2>
			<p>The DITA Open Toolkit, or DITA-OT for short, is a set of Java-based, open source tools that provide processing for DITA maps and topic content. Outputs to a variety of formats, including XHTML, HTML Help, ODF (Open Document Format, coming in DITA 1.52), and PDF. Can be used to migrate HTML to DITA. </p>
			<p>Requires preprocessing: <blockquote>A pre-process is done before the main transformation. The input of the pre-process is dita files (maps and topics) and the output of the pre-process is often referred to as "normalized" dita files. The pre-process stage resolves several common DITA behaviors, such as resolving conref attributes, resolving keyref values, and adding links based on the hierarchy and relationship tables in a map. The normalized dita files are in a temporary directory. Most DITA transforms should use this common pre-process setup.</blockquote></p>
			<p>Includes transformation for HTML Help: <blockquote>map2htmlhelp (map2hhc.xsl map2hhp.xsl)
    This transform generates hhc and hhp file for the compilation of Html Help.</blockquote></p>
    		<p><blockquote><strong>Ant</strong> is a Java-based, open source tool provided by the Apache Foundation to declare a sequence of build actions. It is well suited for development builds as well as document builds. The "Full Easy Install" version of the toolkit ships with a copy of Ant. DITA provides a set of XSLT scripts for producing different types of documentation, such as help output in Eclipse, Java Help and HTML Help, XHTML pages, and PDF. The DITA-OT uses Ant to manage these scripts, as well as to manage additional intermediate steps written in Java.</blockquote> </p>
				
    		<div id="links">
			<h5>Links</h5>
				<ul>
					<li><a href="http://dita-ot.sourceforge.net/">DITA Open Toolkit</a></li>
					<li><a href="http://stackoverflow.com/questions/1575982/programmatically-convert-dita-to-framemaker/">StackOverflow post on DITA/Framemaker</a></li>
				</ul>
			</div>
			
		<div id="note">
			<h5>Notes:</h5>
			<p>DITA-OT is a Java app. TMK there is currently no .NET-based app for processing DITA content.</p>
		</div>
				
		</article>

				

		<article class="clearfix">
			<h2>DITA And Framemaker</h2>
			<p><blockquote>FrameMaker 8.0 features an improvement of the DITA starter kit that was introduced in FrameMaker 7.2. DITA (Darwin Information Typing Architecture) is a standard method of handling structured content that can be used in any XML environment. In FrameMaker 8.0 you get some start applications based on DITA, which makes it easy to start authoring DITA based documentation. This tutorial demonstrates how you can generate DITA based content.</blockquote></p>
				
			<div id="links">
				<h5>Links</h5>
				<ul>
					<li><a href="http://help.adobe.com/en_US/FrameMaker/8.0/05h/dita.php/">Adobe DITA/Framemaker Integration Page</a></li>
					<li><a href="http://stackoverflow.com/questions/1575982/programmatically-convert-dita-to-framemaker/">StackOverflow post on DITA/Framemaker</a></li>
				</ul>
			</div>
				
		</article>	
		
		<article>
			<h2>DITA and JavaScript</h2>
			<p>There appears to be some issues with running JavaScript on the output side from within a DITA document.</p>
			<div id="links">
				<h5>Links</h5>
				<ul>
					<li><a href="http://help.adobe.com/en_US/FrameMaker/8.0/05h/dita.php/">StackOverflow post on DITA and JavaScript</a></li>
				</ul>
			</div>
		</article>
				
		<article>
			<h2>PHP Tools For Validating XML Against A Schema</h2>
			<p>Answer from StackOverflow post: <blockquote>Use DOM or XMLReader and then use their respective methods to validate XML against a schema</blockquote></p>
			<div id="links">
				<h5>Links</h5>
				<ul>
					<li><a href="http://stackoverflow.com/questions/3658444/validate-dita-in-php">StackOverflow: Validate XML In PHP</a></li>
					<li><a href="http://de.php.net/manual/en/domdocument.schemavalidate.php">DOMDocument::schemaValidate</a></li>
					<li><a href="http://de.php.net/manual/en/xmlreader.setschema.php"></a>XMLReader::setSchema</li>
				</ul>
			</div>
		</article>	
		
		<article>
			<h2>DITA And Help Formats</h2>
			<p>This is a huge topic that needs thorough research. Good places to start are in the links.</p>
			<div id="links">
				<h5>Links</h5>
				<ul>
					<li><a href="http://stackoverflow.com/questions/1131/windows-help-files-what-are-the-options">SO post on Help systems...very informative</a></li>
					 <li><a href="http://en.wikipedia.org/wiki/Microsoft_Compiled_HTML_Help">Wikipedia Article on MS Help systems including HTML Help</a></li>
					 <li><a href="http://www.help-info.de/en/Help_Info_AP_Help/longhorn_maml_example.htm">Discussion Of MAML With Examples And Comparisons</a></li>
					 <li><a href="http://tech.dir.groups.yahoo.com/group/dita-users/message/11231">MAML-DITA Transforms On Yahoo.DitaUsers Group</a></li>
				</ul>
			</div>
		</article>
		
		<article class="clearfix">
			<h2>DITA/PowerPoint Integration</h2>
			<p>Macros and overview of issues surrounding DITA/PPTX conversion.</p>
			<div id="links">
				<h5>Links</h5>
				<ul>
					<li><a href="http://tech.groups.yahoo.com/group/dita-users/message/21384">Yahoo DITA Users: Suggestions regarding converting DITA to Power Point presentation</a></li>
				</ul>
			</div>
		</article>
				
		<article class="clearfix">
			<h2>Using &lt;shortdesc&gt; in DITA Topics </h2>
			<p>Good summary of using the shortdesc element to distinguish topics from one another.</p>
			<div id="links">
				<h5>Links</h5>
				<ul>
					<li><a href="http://tech.groups.yahoo.com/group/dita-users/message/21383">What to put in <shortdesc> without repeating the Title? </a></li>
					<li><a href=" http://svdig.ditamap.com/Shortdesc.ppt">IBM Presentation On Use Of shortdesc element</a></li>
				</ul>
			</div>
			
		</article>

		<article class="clearfix">
			<h2>Outputting A Graphic In PDF To Use As Cover Page</h2>
			<p>Suggestions for and issues in outputting a cover page in PDF using OTK. Some samples for integrating CSS instructions in metadata.</p>
			<div id="links">
				<h5>Links</h5>
				<ul>
					<li><a href="http://tech.groups.yahoo.com/group/dita-users/message/19098">Best way to generate a pretty PDF cover page with the OTK </a></li>
				</ul>
			</div>
			
			<div id="note">
				<h5>Notes:</h5>
				<p>The user here is using Trisoft, for some reason this PDF needs to be generated outside the Trisoft repo.</p>
			</div>
		</article>
		
		<article class="clearfix">
			<h2>DITA-OT performance with Trisoft</h2>
			<p>Performance issues and system configuration for rendering output.</p>
			<div id="links">
				<h5>Links</h5>
				<ul>
					<li><a href="http://tech.groups.yahoo.com/group/dita-users/message/18213">DITA-OT performance</a></li>
				</ul>
			</div>

		</article>
		
		<article class="clearfix">
			<h2>Formatting Command Line Code Examples Without Using HTML Tags</h2>
			<p>This DITA usergroup topic covers how to mix bold and italic formatting in a command line sample. There's a link to a DITA domain specifically for this and a note that there are issues with this domain rendering to PDF.</p>
			<div id="links">
				<h5>Links</h5>
				<ul>
					<li><a href="http://tech.groups.yahoo.com/group/dita-users/message/21395">Need Recommendation for DITA element</a></li>
				</ul>
			</div>

		</article>
		
		<article class="clearfix">
			<h2>Browser-Based DITA Editors</h2>
			<p>Dita user groups discussion of currently available browser-based DITA/XML editing tools. There is a link in this topic to a blog listing all the available tools.</p>
			<div id="links">
				<h5>Links</h5>
				<ul>
					<li><a href="http://tech.groups.yahoo.com/group/dita-users/message/21387">Browser-based & WYSIWYG DITA Editor </a></li>
				</ul>
			</div>
			
			<div id="note">
				<h5>Notes:</h5>
				<p>How does the browser get around security issues to write to files?</p>
			</div>
		</article>
		
		<article class="clearfix">
			<h2>Specialization: Expand/Collapse Code Samples</h2>
			<p>There is a reference in this topic to a code snippet that does this, probably a JavaScript script. This might be useful, keep an eye out for it.</p>
			<div id="links">
				<h5>Links</h5>
				<ul>
					<li><a href="http://tech.groups.yahoo.com/group/dita-users/message/21393">To specialize or not to specialize... </a></li>
				</ul>
			</div>	
		</article>
		
		<article class="clearfix">
			<h2>DITA Specialization And Configuration Tutorials</h2>
			<p>These tutorials by Eliot Kimber are prepublished content for the upcoming XMLPress book <a href="http://xmlpress.net/publications/dita/practitioners/">DITA For Practitioners</a> and have a good overview of DITA specialization.</p>
			<div id="links">
				<h5>Links</h5>
				<ul>
					<li><a href="http://www.xiruss.org/tutorials/dita-specialization/">DITA Configuration and Specialization Tutorials</a></li>
				</ul>
			</div>
		</article>
		
		<article class="clearfix">
			<h2>Tool: DITA DTD Generator</h2>
			<p>Kimber writes in <a href="http://www.xiruss.org/tutorials/dita-specialization/">DITA Configuration and Specialization Tutorials</a>:</p>
			<blockquote>As an implementation activity, the creation of new document type shells is an entirely mechanical process that anyone can perform even if they have no knowledge of DTD or XSD syntax. These tutorials demonstrate the mechanical process. Likewise, because the process is entirely mechanical (meaning it requires no creative thought or invention), it can be automated, as it has been by Jarno Elovirta and his DITA DTD Generator (http://dita-generator.appspot.com/)</blockquote>
			<div id="links">
				<h5>Links</h5>
				<ul>
					<li><a href="http://dita-generator.appspot.com/">DITA DTD Generator</a></li>
				</ul>
			</div>
			
			<div id="note">
				<h5>Notes:</h5>
				<p></p>
			</div>
		</article>
		
	</div><!-- #page-wrap close-->
	
	
	
</body>
		