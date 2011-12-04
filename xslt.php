<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<!-- Design by V. Albert/Hexage Designs 2010 -->
<title>DITA Localization Primer</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="x-ua-compatible" content="IE=8" />
<meta name="description" content="Van Albert - Comprehensive Digital Services" />
<meta name="keywords" content="DITA, implementation, localization" />
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
			<h1>DITA Toolchest</h1>
			<h3>XSLT Topics</h3>
			
		</header>

<?php include 'includes/main-nav.php'; ?>

	<!-- #main-nav close -->
	
		<article class="clearfix">
			<h2>XSLT Books And Tutorials</h2>
			<p>Dimitre's picks for XSLT learners: books, tutorials and blogs. </p>
			<div id="links">
				<h5>Links</h5>
				<ul>
					<li><a href="http://stackoverflow.com/questions/339930/any-good-xslt-tutorial-book-blog-site-online">Any good XSLT tutorial/book/blog/site online</a></li>
				</ul>
			</div>
			
			<div id="note">
				<h5>Notes:</h5>
				<p></p>
			</div>
		</article>

		<article class="clearfix">
			<h2>Procedural Vs. Declarative</h2>
			<p>This is a very good discussion of the XSLT vs scripting languages, specifically with the implementation of apply-templates as opposed to for-each. Read it again.</p>
			<div id="links">
				<h5>Links</h5>
				<ul>
					<li><a href="http://stackoverflow.com/questions/333463/cant-stop-thinking-about-xslt-in-procedural-terms-help-with-apply-templates">Can't stop thinking about XSLT in procedural terms… help with apply-templates</a></li>
				</ul>
			</div>
			
			<div id="note">
				<h5>Notes:</h5>
				<p>Links to interesting blogs in this post.</p>
			</div>
		</article>

		<article class="clearfix">
			<h2>Using XSLT Instead Of Scripts</h2>
			<p>XSLT provides the ability to make changes targeting specific nodes and metadata. Writing S+R scripts to do this would be complex and error-prone. See Dimitre Novatchev's solution in this SO topic for an example of changing extensions from .xml to .dita.</p>
			<div id="links">
				<h5>Links</h5>
				<ul>
					<li><a href="http://stackoverflow.com/questions/4044842/changing-file-extensions-within-a-xml-file">Changing file extensions within a XML file</a></li>
				</ul>
			</div>
		</article>
		
		<article  class="clearfix">
			<h2>Replacing Content Within One XML Node Using XSLT</h2>
			<p>Dimitre Novatchev's solution to a transform targeted to a specific section in the XML. </p>
			<div id="links">
				<h5>Links</h5>
				<ul>
					<li><a href="http://stackoverflow.com/questions/3310272/xslt-an-xml-such-that-everything-is-the-same-except-one-section">XSLT an XML such that everything is the same except one section</a></li>
				</ul>
			</div>
			
		</article>
		
		<article>		
			<h2>Tools And Techniques For Searching XML: XALAN, Lucene and XPath</h2>
			<p>Recommends XALAN for specific types of searches and Lucene for others, also notes that simpler searches can be done by loading the documents could into a DOM and searching using XPath. This article also notes that XSLT functionality is built into the JAVA libraries. </p>
			<div id="links">
				<h5>Links</h5>
				<ul>
					<li><a href="http://stackoverflow.com/questions/2077659/search-xml-files-with-xalan-in-java">Search XML Files With Xalan in Java</a></li>
				</ul>
			</div>
			
		</article>
				
		<article class="clearfix">
			<h2>Daisy-Chaining XSLT Transformations From Separate XSLT Documents</h2>
			<p>This SO post contains an example of running XSLT transforms sequentially as well as a discussion of modular transforms and inheritance issues with multiple XSLT transforms. The poster's goal is a docbook=>dita transformation. Answers from Dimitre Novatchev and Alejandro. </p>
			<div id="links">
				<h5>Links</h5>
				<ul>
					<li><a href="http://stackoverflow.com/questions/3919753/combining-xsl-documents">Combining XSL Documents</a></li>
				</ul>
			</div>
			

		</article>
		
		<article class="clearfix">
			<h2>Pros And Cons Of XSL</h2>
			<p>Excellent SO summary of the limitations of XSL, and when to know when to quit and move to a procedural programming language. </p>
			<div id="links">
				<h5>Links</h5>
				<ul>
					<li><a href="http://stackoverflow.com/questions/78716/is-xslt-worth-it">Is XSL Worth It?</a></li>
					<li><a href="http://stackoverflow.com/questions/2854583/xslt-good-choice-for-web-framework">XSLT A Good Choice For Web Framework</a></li>
				</ul>
			</div>
			
			<div id="note">
				<h5>Notes:</h5>
				<p>Reread this thoroughly. Check out the reference to <a href="http://en.wikipedia.org/wiki/Hype_cycle">hype cycle</a>.</p>
			</div>
		</article>
		
		<article class="clearfix">
			<h2>Using AVT (Attribute-Value-Template) instead of for-each to specify element name </h2>
			<p>In this example Dimitre demonstrates using <strong>xsl:template match=</strong> instead of for-each statements to target statically unknown elements for transformation. Note also the use of curly brackets instead of quote to target values.</p>
			<div id="links">
				<h5>Links</h5>
				<ul>
					<li><a href="http://stackoverflow.com/questions/4708551/xslvalue-of-used-as-xslelement-name">xsl:value-of used as xsl:element name</a></li>
				</ul>
			</div>

		</article>
		
		<article class="clearfix">
			<h2>Defining Variables for XML Attribute Values In XSLT Using XPath </h2>
			<p>This is an example of how to get the value from an attribute in an XML file and put it in a variable. It shows how different this paradigm is from the procedural and how the XML tree can be used to directly access specific values without procedural code. Dimitre's explanation of the code in terms of the tree is very helpful.</p>
			<div id="links">
				<h5>Links</h5>
				<ul>
					<li><a href="#"http://stackoverflow.com/questions/4707591/how-do-i-store-xml-attribute-with-the-xml-value-passing-some-test-in-a-xsl-vari</a>How do I store XML attribute (with the XML value passing some test) in a XSL variable?</li>
				</ul>
			</div>
			
			<div id="note">
				<h5>Notes: Take a look also at the second answer. Check out the use of the period as opposed to the text() function.</h5>
				<p></p>
			</div>
		</article>
		
		<article class="clearfix">
			<h2>Dealing With Internal Tags Within XML Elements</h2>
			<p>This topic seems to be more complex that one would imagine, that is,  converting XML to HTML while retaining internal formatting tags such as italic and bold. The big takeaway here is that using CDATA to represent any markup at all is problematic. Dimitre points out that that xsl:value-of instruction only outputs a string, so any tags are stripped out, including any formatting tags. Therefore, note the difference between value-of and copy-of. copy-of copies the element's content verbatim, including any descendent nodes. value-of takes only the text value, not any descendent nodes, at least that's how I understand this. </p>
			<div id="links">
				<h5>Links</h5>
				<ul>
					<li><a href="http://stackoverflow.com/questions/4707571/how-can-you-deal-with-embedded-xml-tags-in-xslt">How can you deal with embedded XML tags in XSLT?</a></li>
				</ul>
			</div>
			
			<div id="note">
				<h5>Notes: </h5>
				<p>There is a nasty SO exchange between etranger and Dimitre here about the function of CDATA.</p>
			</div>
		</article>
		
		<article class="clearfix">
			<h2>Referencing An XML File From Within An XSLT</h2>
			<p>Dimitre's answer demonstrates how any XML can be inserted at any position in any other XML file using XSLT. This would be very useful when generating xml:tm from standard DITA content. It demonstrated how to embed the XML you want to reference in the XSL file itself as well as how to reference it from an external file.</p>
			<blockquote>Remember: Any XML can be embedded into an XSLT stylesheet, provided it is wrapped into a namespaced element (the namespace not the XSLT namespace) and this wrapping element is at the global level (a child of the <xsl:stylesheet> (top) element).</blockquote>
			<div id="links">
				<h5>Links</h5>
				<ul>
					<li><a href="http://stackoverflow.com/questions/4703312/including-an-xml-file-in-an-xml-xsl-file">Including an XML file in an XML/XSL file</a></li>
				</ul>
			</div>
			
			<div id="note">
				<h5>Notes:</h5>
				<p>There is also an answer that describes how to insert text as a general external entity and why this is not recommended practice. Kind of answers some of the questions I had about how to deal with repetitive content. It works but here's Alessandro's response:</p>
				<blockquote>It's not a bad answer, but this is not "referencing/loading" but replacement in the surface syntax rarer than in the logical abstraction.</blockquote>
			</div>
		</article>
		
		<article class="clearfix">
			<h2>Testing For Empty Node Vs. Existence Of A Node Vs. Node Containing Whitespace</h2>
			<p>This article demonstrates the different ways to test for existence or emptiness, including whitespace. A tutorial in itself, as usual from Dimitre.</p>
			<div id="links">
				<h5>Links</h5>
				<ul>
					<li><a href="http://stackoverflow.com/questions/4694480/check-if-a-node-exists-using-xslt">Check if a node exists using XSLT</a></li>
				</ul>
			</div>
		</article>
		
		<article class="clearfix">
			<h2>Escaping Characters in XHTML or HTML Output of an XML File</h2>
			<p>This is a complex topic: how to output script and style tags from an XML file so they don't get converted to HTML entities and are correctly interpreted by the browser. The bottom line is:</p>
			<blockquote>With the html serialization method, script content doesn't get escaped.</blockquote>
			<p>Which begs the question about details of the html serialization method...</p>
			<div id="links">
				<h5>Links</h5>
				<ul>
					<li><a href="http://stackoverflow.com/questions/4693220/unescape-during-xslt-transform">Unescape during XSLT transform</a></li>
				</ul>
			</div>
		</article>
		
		<article class="clearfix">
			<h2>Splitting An XML File Into Separate Files</h2>
			<p>Describes splitting an XML file into separate files based on the first character of an element value, for instance, by alphabetization. Michael Kay's answer uses the for-each-group instruction but doesn't say how this differs from for-each. </p>
			<div id="links">
				<h5>Links</h5>
				<ul>
					<li><a href="http://stackoverflow.com/questions/4685335/split-xml-file-based-on-first-character-of-a-string">Split XML file based on first character of a string</a></li>
				</ul>
			</div>

		</article>
		
		<article class="clearfix">
			<h2>Append XML Files To Other XML Files Using XSLT</h2>
			<p>Describes merging XML documents with the usual elegant examples by Dimitre.</p>
			<div id="links">
				<h5>Links</h5>
				<ul>
					<li><a href="http://stackoverflow.com/questions/4689279/write-at-the-end-of-an-xml">Write at the end of an xml</a></li>
				</ul>
			</div>
			
			<div id="note">
				<h5>Notes:</h5>
				<p>Apparently not all XSLT processors are created equal, see the reference in this post that one must refer to the processor's documentation for instructions:</p>
				<blockquote>The URLs of all wanted XML documents must be passed externally via a parameter to the transformation. It is vendor-dependent how to pass a parameter to the transformation. You need to read the documentation provided for your particular XSLT processor.</blockquote>
			</div>
		</article>

		<article class="clearfix">
			<h2>Sorting With XSL</h2>
			<p>This post has two issues: padding and sorting date values that aren't MMDDYYYY and sorting in general. Complex topic here, long post, answers by Dimitre and Alessandro.</p>
			<div id="links">
				<h5>Links</h5>
				<ul>
					<li><a href="http://stackoverflow.com/questions/4694204/xslt-1-0-sorting-by-concating-portions-of-date-string">XSLT 1.0: Sorting by concating portions of date string</a></li>
				</ul>
			</div>
			
			<div id="note">
				<h5>Notes:</h5>
				<p></p>
			</div>
		</article>


	</div><!-- #page-wrap close-->
	
	
	
</body>
	