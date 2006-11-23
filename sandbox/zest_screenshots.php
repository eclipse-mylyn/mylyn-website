<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Zest Screenshot Gallery";
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
		<div class="homeitem3col">
		<h3>Zest Screenshots</h3>
		<center>
		<P>
		<BR>
		<img src="../images/zest_screen1_600.jpg"><BR>
		Plug-in Dependency Visualization (Static Graph Viewer)
		</P>
		<P>
		<BR>
		<img src="../images/zest_screen2_600.jpg"><BR>
		Family Tree (Tree Graph Viewer)
		</P>
		<P>
		<BR>
		<img src="../images/zest_screen3_600.jpg"><BR>
		Package Explorer (Nested Graph Viewer)
		</P>
		
		</center>
		</div>  
	</div>
	
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
