<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Getting Started";
	$pageKeywords	= "Mylar, Eclipse";
	$pageAuthor		= "Mik Kersten";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);
	
	include("_sideCommon.php");
		
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<div align="center"><h1>$pageTitle</h1></div>
          
        <p>Mylar documentation is currently sparse, and distributed with the release.  The flash
        videos provide an introduction to the basic features.  The best 
        way to learn more is by reading the 
        <a href="/mylar/doc/new.php">New & Noteworthy</a>.<p>
        <p>For questions, please see the <a href="users.php">Users page</a> for information on the newsgroup and mailing list.</p>
        
        <div class="homeitem3col">
			<h3>Flash Demos</h3>
			<ul>
				<li>
                    <a href="http://eclipse.org/mylar/doc/demo/mylar-demo-04.html">Getting started</a> (v0.4, 3.5 min, 8.7 MB)
                </li>
				<li>
                    <a href="http://eclipse.org/mylar/doc/demo/mylar-demo-04-reports.html">Working with tasks and Bugzilla reports </a> (v0.4, 3.5 min, 6 MB)
                </li>
				<li>
                    <a href="http://eclipse.org/mylar/doc/demo/mylar-demo-03-search.html">Using Active views</a> (v0.3, 2 min, 3 MB)
                </li>
			</ul>
		</div>      
			<p>In addition to providing personal task management and support for task contexts, Mylar has the following 
			task/issue/bug/report repository integration:</p>

        <div class="homeitem3col">
			<h3>Levels of Repository Integration</h3>
			<ul>
				<li>
                    Web linking only: Reports linked via drag-and-drop, editing via embedded 
					browser</td> 
					<br><a href="http://www.eclipse.org/mylar/doc/faq.php#repositories-unsupported">(any web-based repository)</a>
                </li>
				<li>
                    Query support: Repository queries in task list view
                    <br><a href="dl.php">(currently JIRA and Bugzilla)</a>
                </li>
				<li>
                    Full integration: Authoring of reports within native Eclipse editor, 
				offline editing, incoming/outgoing status, compare and 
				notifications. </td>
	            <td class="smallParagraph" align="left" valign="top" bgcolor="#F1F3F5">
	            <br><a href="dl.php">(currently Bugzilla only)</a>
                </li>
			</ul>
		</div> 
	</div>
	
	
	<div id="rightcolumn">
		$commonside
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
