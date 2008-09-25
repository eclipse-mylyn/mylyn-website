<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Bugs";
	$pageKeywords	= "Mylyn, Eclipse";
	$pageAuthor		= "Mik Kersten";
		
    #require_once($_SERVER['DOCUMENT_ROOT']."/eclipse.org-common/system/app.class.php");   
    #require_once($_SERVER['DOCUMENT_ROOT']."/eclipse.org-common/system/nav.class.php");   
	#require_once($_SERVER['DOCUMENT_ROOT']."/eclipse.org-common/system/menu.class.php");  
	#require_once($_SERVER['DOCUMENT_ROOT']."/projects/common/bug.class.php");
	#require_once($_SERVER['DOCUMENT_ROOT']."/projects/common/project-info.class.php");    
	#require_once($_SERVER['DOCUMENT_ROOT']."/projects/common/project_bugs.class.php");

	#$votesBugs = new ProjectBugs("tools.mylyn");
	#$votesEnhancements = new ProjectBugs("tools.mylyn", 2);
	

    #$App    = new App();    $Nav    = new Nav();    $Menu   = new Menu();   
    #ob_start();
    #include($App->getProjectCommon());

	include("_sideCommon.php");	
	$html = <<<EOHTML

<div id="maincontent">

	<a href="../community/index.php">Moved to the Community Page</a>

</div>



EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
