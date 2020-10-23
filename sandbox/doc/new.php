<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	$pageTitle 		= "Mylar New & Noteworthy";
	$pageKeywords	= "Mylar, Eclipse";
	$pageAuthor		= "Mik Kersten";
	
	$filename = $_SERVER['DOCUMENT_ROOT'] . "/mylar/doc/new.html";
    $dataFile = fopen( $filename, "r" ) ;
    if ( $dataFile )  {
    	while (!feof($dataFile))   {
        	$contents .= fgets($dataFile, 4096);
    	}
    	fclose($dataFile);
    } else  {
    	die( "fopen failed for $filename" ) ;
    }

	# Paste your HTML content between the EOHTML markers!	
	
	include("_sideCommon.php");
		
	$html = <<<EOHTML

<div id="fullCol">
     $contents
</div>
</div>


EOHTML;

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
    $Theme->generatePage();
?>
