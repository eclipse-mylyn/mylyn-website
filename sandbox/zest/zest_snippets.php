<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Zest Snippets";
	$pageKeywords	= "Mylar, Eclipse, Zest, Visualization";
	$pageAuthor		= "Ian Bull";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="maincontent">

		<div id="midcolumn">
		<H1><A HREF="http://www.eclipse.org/mylar/zest.php">Zest</a>  -> Zest Snippets</H1>
		Click on a snippet to see the code
		
		
		<div class="homeitem3col">


		<h3>Zest Snippets</h3>
		<BR>
		<ul>
		<li>
		<H2>SWT Style Snippets</H2>
		<A HREF="GraphSnippet1.html">1. Simple graph with 3 nodes and 3 edges</A><BR>
		<A HREF="GraphSnippet2.html">2. Simple graph with 3, self loops and images</A><BR>
		<A HREF="GraphSnippet3.html">3. Simple graph with a selection listener</A><BR>
		<A HREF="GraphSnippet4.html">4. Simple graph with a custom tooltip on the conncetions</A><BR>
		</li>
		<li>
		<H2>JFace Viewer Style Snippets</H2>
		<A HREF="GraphJFaceSnippet1.html">1. Simple graph using the IGraphEntityContentProvider</A><BR>
		<A HREF="GraphJFaceSnippet2.html">2. Simple graph using the IGraphContentProvider</A><BR>
		<A HREF="GraphJFaceSnippet3.html">3. GraphViewer which uses a file to read the graph</A> (<A HREF="SimpleGraph.sgf">Simple Graph File</A>)<BR>
		<A HREF="GraphJFaceSnippet4.html">4. Simple graph with a selection listener</A> <BR>
		</li>
		
		</ul>
		</div>  
	</div>
	
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
