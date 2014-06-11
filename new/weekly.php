<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	$pageTitle 		= "Mylyn Weekly New & Noteworthy";
	$pageKeywords	= "Mylyn, Eclipse";
	$pageAuthor		= "Mik Kersten";
	
	$filename = $_SERVER['DOCUMENT_ROOT'] . "/mylyn/new/new-weekly.html";
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

<div id="midcolumn">
     $contents
</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
