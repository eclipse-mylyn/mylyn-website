<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Selected Publications";
	$pageKeywords	= "Mylar, Eclipse";
	$pageAuthor		= "Mik Kersten";
		
	# Paste your HTML content between the EOHTML markers!	
	include("_sideMylarIs.php");
	include("_sideNews.php");
	include("_sideIncubator.php");
	$html = <<<EOHTML

<div id="maincontent">
	<div align="center"><h1>$pageTitle</h1></div>
	
	
	<div id="midcolumn">
		
		<div class="homeitem3col">
			<h3>Presentations</h3>
			<ul>
	            <li>
	            	March 2006, EclipseCon talk: 
	            	<a href="publications/2006-03-mylar-eclipsecon.ppt">
	            	Mylar: a Task Focused UI for Eclipse [PPT]</a>
	            </li>
	            <li>
	            	March 2005, EclipseCon talk: 
	            	<a href="publications/2005-03-mylar-eclipsecon-web.ppt">
	            	Mylar: a degree-of-interest model for Eclipse [PPT]</a>
	            </li>
			</ul> 
		</div>
		
		<div class="homeitem3col">
			<h3>Publications</h3>
			<ul>
	            <li>
	            	March 2005, IEEE Software article: 
	            	Murphy, Kersten and Findlater. <a href="publications/2005-03-mylar-aosd-web.ppt">
	            	How are Java software developers using the Eclipse IDE?</a>&nbsp;
					<a href="publications/2006-07-mylar-ieee.pdf"><img border=0 src="images/icon-pdf.gif"></a>
	            </li>
				<li>
	                May 2005, eclipse.org 
	                <a href="publications/2005-04-mylar-proposal.html">
	                Project creation review</a>
	                <a href="publications/2005-05-mylar-creation-review.ppt">
					[PPT]</a>
	            </li>
	            <li>
	            	March 2005, AOSD research paper: 
	            	<a href="publications/2005-03-mylar-aosd-web.ppt">
	            	Mylar: a degree-of-interest model for IDEs [PPT]</a>&nbsp;
					<a href="publications/2005-03-mylar-aosd.pdf">[PDF]</a>
	            </li>
			</ul> 
		</div>
		<p>
		
		Also see <a href="http://wiki.eclipse.org/index.php/Mylar_Related_Research_Projects">Related Research Projects</a>
		for links to other research papers related to Mylar.
		</p>
		<p>* <font size=-2>Copyright: © 2006 IEEE. Personal use of this material is permitted. However, permission to reprint/republish
		this material for advertising or promotional purposes or for creating new collective works for resale or redistribution
		to servers or lists, or to reuse any copyrighted component of this work in other works must be obtained from the IEEE.</font>
		</p>
	
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
