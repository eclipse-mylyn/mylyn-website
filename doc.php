<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Mylar Documentation";
	$pageKeywords	= "Mylar, Eclipse";
	$pageAuthor		= "Mik Kersten";
	
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
	<div id="all">
		<div align="center"><h1>$pageTitle</h1></div>
          
        <p>Mylar documentation is distributed with the release, but will soon be made available 
        online as well.<p>
        
        <p><b><i>The flash videos are stale and will be updated by November 4th</b></i>.  
        Check the <a href="doc/new.html">New & Noteworthy</a> for documentation of the latest features.<p>

        <div class="homeitem">
			<h3>Flash Demos</h3>
			<ul>
				<li>
                    <a href="http://eclipse.org/mylar/doc/demo/mylar-demo-03.html">Getting started with Mylar</a> (5 min)
                </li>
				<li>
                    <a href="http://eclipse.org/mylar/doc/demo/mylar-demo-03-search.html">Using Active views</a> (2 min)
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

		<hr class="clearer" />
		
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
