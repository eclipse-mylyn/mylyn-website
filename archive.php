<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Mylar Archive";
	$pageKeywords	= "Mylar, Eclipse";
	$pageAuthor		= "Mik Kersten";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);
	# End: page-specific settings
	
	include("_sideCommon.php");
	include("_sideNews.php");
	include("_sideIncubator.php");
	$html = <<<EOHTML
  
<div id="maincontent">
	<div id="midcolumn">
		<br>&nbsp;
		<div align="center"><h1>$pageTitle</h1></div>

		<div class="homeitem">
			<h3>Event Archive</h3>
			<ul>
				<li>
                    Mylar BoF at <a href="http://www.eclipsecon.org">EclipseCon 2006</a>, March 21, Grand Ballroom, Santa Clara Convention Center, Santa Clara, USA
                </li>
			</ul>
		</div> 
	</div> 

	<div id="rightcolumn">
		$commonside
		$newsside
		$incubatorside
	</div>
</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
