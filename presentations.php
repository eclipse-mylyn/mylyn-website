<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Mylar Presentations";
	$pageKeywords	= "Mylar, Eclipse";
	$pageAuthor		= "Mik Kersten";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);
		
	# Paste your HTML content between the EOHTML markers!	
	include("_sideMylarIs.php");
	include("_sideNews.php");
	include("_sideIncubator.php");
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<div align="center"><h1>$pageTitle</h1></div>
		
		<div class="homeitem3col">
			<h3>Presentations and Publications</h3>
			<ul>
                <li>
                	March 2006, EclipseCon talk: 
                	<a href="publications/2006-03-mylar-eclipsecon.ppt">
                	Mylar: a Task Focused UI for Eclipse [PPT]</a>
                </li>
				<li>
                    May 2005, eclipse.org 
                    <a href="publications/2005-04-mylar-proposal.html">
                    Project creation review</a>
                    <a href="publications/2005-05-mylar-creation-review.ppt">
					[PPT]</a>
                </li>
                <li>
                	March 2005, EclipseCon talk: 
                	<a href="publications/2005-03-mylar-eclipsecon-web.ppt">
                	Mylar: a degree-of-interest model for Eclipse [PPT]</a>
                </li>
                <li>
                	March 2005, AOSD talk: 
                	<a href="publications/2005-03-mylar-aosd-web.ppt">
                	Mylar: a degree-of-interest model for IDEs [PPT]</a>&nbsp;
					<a href="publications/2005-03-mylar-aosd.pdf">[PDF]</a>
                </li>
			</ul> 
		</div>
	</div> 
	
	<div id="rightcolumn">
		$commonside
	</div>
	
	<p>&nbsp;</p>
	<p>&nbsp;</p>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
