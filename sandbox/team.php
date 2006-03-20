<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Mylar Team";
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
	<div id="midcolumn">
		<div align="center"><h1>$pageTitle</h1></div>


		<div class="homeitem3col">
			<h3>Committers</h3>
			<ul>
				<li>
                    <a href="http://kerstens.org/mik">Mik Kersten, project lead.
                </li>
                <li>
                	Gail Murphy</a>
                </li>
                <li>
                	Robert Elves (pending approval).
                </li>
			</ul> 
		</div>

		<div class="homeitem3col">
			<h3>Committers</h3>
			<ul>
				<li>
                    Mik Kersten, project lead.
                </li>
                <li>
                	Gail Murphy</a>
                </li>
                <li>
                	Robert Elves (pending approval).
                </li>
			</ul> 
		</div>

		<p>&nbsp;</p>
		<p>&nbsp;</p>



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
