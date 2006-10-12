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
		<!--	<div align="center"><h1>$pageTitle</h1></div> -->
          
        <p>For questions about using Mylar see the <a href="users.php">Users page</a>.
         
        <div class="homeitem3col">
			<h3>Getting started</h3> 
			<ul>
				<li>
		            <a href="http://www-128.ibm.com/developerworks/java/library/j-mylar1/"><img border=0 src="images/icon-webdoc.gif">
		           	Task Focused Programming with Mylar, Part 1: Integrated task management for Eclipse</a> by Mik Kersten (Oct 2006)
	            </li>
	            <li>
		            <a href="http://www-128.ibm.com/developerworks/java/library/j-mylar2/index.html"><img border=0 src="images/icon-webdoc.gif">
		           	Task Focused Programming with Mylar, Part 2: Automated context management for Eclipse</a> by Mik Kersten (Oct 2006)
	            </li>
				<li>
                    <a href="http://eclipse.org/mylar/doc/demo/mylar-demo-04.html"><img border=0 src="images/icon-flash.gif">
					Overview flash video</a> (out-of-date v0.4, 3.5 min, 8.7 MB)
                </li>
				<li>
                    <a href="http://eclipse.org/mylar/doc/demo/mylar-demo-04.html"><img border=0 src="images/icon-flash.gif">
					Overview flash video</a> (out-of-date v0.4, 3.5 min, 8.7 MB)
                </li>
                <!--
				<li>
                    <a href="http://eclipse.org/mylar/doc/demo/mylar-demo-04-reports.html">Working with tasks and Bugzilla reports </a> (v0.4, 3.5 min, 6 MB)
                </li>
				<li>
                    <a href="http://eclipse.org/mylar/doc/demo/mylar-demo-03-search.html">Using Active views</a> (v0.3, 2 min, 3 MB)
                </li>
                -->
			</ul>
		</div>      
		
		<p>In addition to providing personal task management and support for task contexts, Mylar has the following 
		task/issue/bug/report repository integration.  The deeper the integration, the better and more streamlined
		the user experienece.</p>

        <div class="homeitem3col">
			<h3>Levels of Repository Integration</h3>
			<ul>
				<li>
                    Web only: Reports linked via drag-and-drop, editing via embedded 
					browser, </td> 
					<br><a href="http://www.eclipse.org/mylar/doc/faq.php#repositories-unsupported">(any web-based repository)</a>
                </li>
				<li>
                    Query support: Repository queries in task list view
                    <br><a href="dl.php">(currently Bugzilla, Trac, and JIRA)</a>
                </li>
				<li>
                    Full integration: Authoring of reports within native Eclipse editor, 
				offline editing, incoming/outgoing status, compare and 
				change notifications. </td>
	            <td class="smallParagraph" align="left" valign="top" bgcolor="#F1F3F5">
	            <br><a href="dl.php">(currently Bugzilla and Trac)</a>
                </li>
			</ul>
		</div> 
		
		<p>
		<a href="bugs.php">
		<img border=0 src="images/vote.gif"> Vote for a connector</a>
		if your repository is not supported, or file a new request if not listed.
		</p>
		<p>&nbsp;</p>
	</div>
	
	<div id="rightcolumn">
		$commonside
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
