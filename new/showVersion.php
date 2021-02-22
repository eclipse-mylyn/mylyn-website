<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************

	#
	$pageTitle 		= "Mylyn New & Noteworthy";
	$pageKeywords	= "Mylyn, Eclipse";
	$pageAuthor		= "Mik Kersten";

  $version = pathinfo($_GET['version'], PATHINFO_FILENAME);
  $ext = pathinfo($_GET['version'], PATHINFO_EXTENSION);
  $filename = "";
  if (!empty($version) && $ext === 'html') {
    $filename = $_SERVER['DOCUMENT_ROOT'] . "/mylyn/new/". $version . '.html';
    $dataFile = fopen( $filename, "r" ) ;
  }

    if (!empty($dataFile))  {
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

<div id="midcolumn">
	<div class="row" >
		<div class="col-md-24">
			<div class="news_view_all"></div>
			$contents
     	</div>
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
