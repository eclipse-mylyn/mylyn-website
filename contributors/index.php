<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Mylyn Contributors";
	$pageKeywords	= "Mylyn, Eclipse";
	$pageAuthor		= "Mik Kersten";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#

	# Paste your HTML content between the EOHTML markers!
	$htmlStart = <<<EOHTML
<div id="maincontent">

	<div id="midcolumn" class="no-right-sidebar">
		<div class="row" >
EOHTML;
	$htmlEnd = <<<EOHTML
		</div>
	</div>
</div>
EOHTML;

if($_SERVER['HTTP_HOST'] == 'staging.eclipse.org') {
  $htmlDynamic = file_get_contents('https://hudson.eclipse.org/mylyn/job/mylyn-update-contributors-staging/lastSuccessfulBuild/artifact/contributor.inc');
} else if($_SERVER['HTTP_HOST'] == 'websitetest.local') {
  $htmlDynamic = file_get_contents('./contributor.inc');
} else {
  $htmlDynamic = file_get_contents('https://hudson.eclipse.org/mylyn/job/mylyn-update-contributors/lastSuccessfulBuild/artifact/contributor.inc');
}

$html= $htmlStart. $htmlDynamic .$htmlEnd;

	# Generate the web page
    $Theme = $App->getThemeClass();
    $Theme = $App->getThemeClass($theme);
    $Theme->setNavPosition('left');
    $Theme->setNav($Nav);
    $Theme->setMenu($Menu);
    $Theme->setPageAuthor($pageAuthor);
    $Theme->setPageKeywords($pageKeywords);
    $Theme->setPageTitle($pageTitle);
    $Theme->setHtml($html);
    $Theme->setBreadcrumb($Breadcrumb);
    $Theme->generatePage();?>
