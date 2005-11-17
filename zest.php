<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Zest: The Eclipse Visualization Toolkit";
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
		<div align="center"><h1>$pageTitle</h1></div>
       <p >
		<strong>Zest: The Eclipse Visualization Toolkit,</strong> is a set of 
		visualization components built for Eclipse.  
		Zest is a component of the Mylar project that 
		can be used independently of the Mylar IDE 
		support. The entire Zest library has been
		developed in SWT and integrates seamlessly within Eclipse because of its
		recognized design.   Zest has been modeled after JFace, and all the Zest views
		conform to the same standards and conventions as existing Eclipse views.  This
		means that the providers, actions and listeners used within existing
		applications can be leveraged within Zest.  Many of the Zest views are being
		developed using the Graphical Editing Framework (GEF).  
		Zest is a visualization toolkit with  a growing
		number of views, all of which aim to be easy to program against. 
		Currently we are developing the following views:
		
		<div class="homeitem">
			<h3>Zest Views</h3>
			<ul>
				<li>
					Spring Graph Viewer: A dynamic graph viewer that renders nodes and edges.                    
                </li>
				<li>
                    Static Graph Viewer: A static graph viewer that renders nodes and edges.
                </li>
				<li>
                    Nested Graph Viewer: A static graph viewer that renderes nodes and edges.  Nodes
                    can be nested within their parents and navigation supports diving / zooming.
                </li>
                <li>
                	Timeline Viewer: A viewer to render timelines in a Gantt Chart Fashion.
                </li>
                
                
			</ul>
		</div>  
		
		<p>The Zest project also contains a graph layout package which can be used 
		independently.  The graph layout package can be used within existing
		Java applications (SWT or AWT) to provider layout locations for a set of
		entities and relationships.  We currently support the following layout 
		algorithms:</p>
		<UL>
		<LI>Spring Layout Algorithm</li>
		<LI>Fade Layout Algorithm</li>
		<LI>Tree Layout Algorithm</li>
		<LI>Radial Layout Algorithm</li>
		<LI>Grid Layout Algorithm</li>
		</ul>

        <div class="homeitem">
			<h3>Flash Demos</h3>
			<ul>
				<li>
                    <a href="http://eclipse.org/mylar/doc/demo/mylar-demo-04.html">Getting started</a> (v0.4, 3.5 min, 8.7 MB)
                </li>
				<li>
                    <a href="http://eclipse.org/mylar/doc/demo/mylar-demo-04-reports.html">Working with tasks and Bugzilla reports </a> (v0.4, 3.5 min, 6 MB)
                </li>
				<li>
                    <a href="http://eclipse.org/mylar/doc/demo/mylar-demo-03-search.html">Using Active views</a> (v0.3, 2 min, 3 MB)
                </li>
			</ul>
		</div>        
            
        <div class="homeitem">
			<h3>Presentations and Publications</h3>
			<ul>
				<li>
                    May 2005, eclipse.org 
                    <a href="publications/2005-04-mylar-proposal.html">
                    Project creation review [HTML proposal]</a>
                    <a href="publications/2005-05-mylar-creation-review.ppt">
					[PPT&nbsp;presentation]</a>
                </li>
                <li>
                	March 2005, EclipseCon talk: 
                	<a href="publications/2005-03-mylar-eclipsecon-web.ppt">
                	Mylar: a degree-of-interest model for Eclipse [PPT&nbsp;presentation]</a>
                </li>
                <li>
                	March 2005, AOSD talk: 
                	<a href="publications/2005-03-mylar-aosd-web.ppt">
                	Mylar: a degree-of-interest model for IDEs [PPT&nbsp;presentation]</a>&nbsp;
					<a href="publications/2005-03-mylar-aosd.pdf">[PDF&nbsp;paper]</a>
                </li>
			</ul> 
		</div>       
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
