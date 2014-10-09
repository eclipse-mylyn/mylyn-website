<?php																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Mylyn Calendar";
	$pageKeywords	= "Mylyn, Eclipse";
	$pageAuthor		= "Mik Kersten";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);
	# End: page-specific settings
	#

	include("../_sideBars.php");	
	include("_sideCommon.php");

	$html = <<<EOHTML
<div id="maincontent">
	<div id="midcolumn">
		<div class="row" >
			<div class="col-sm-24 col-md-18 col-lg-15">
				<iframe src="http://www.google.com/calendar/embed?src=kq3ed9c0latktst29lrl8nffu0%40group.calendar.google.com&ctz=America/Vancouver"
						style="border: 0;min-height:500px;min-width:550px" frameborder="0" scrolling="no"></iframe>
			</div>
			<div class="col-sm-24 col-md-6 col-lg-9">
				$side_vote
				$side_announce
				$commonside
			</div>
		</div>
	</div>
</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
