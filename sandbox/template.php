<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Denis Roy
	# Date:			2005-06-16
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Sample Phoenix web page using the new templates";
	$pageKeywords	= "Type, page, keywords, here";
	$pageAuthor		= "Type your name here";
	
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
		<table border="0" cellpadding="4">
          <tr>
          	<td valign="top"><img border=0 src="../images/screenshot-mylar-small.gif"></td>
          	<td valign="top">&nbsp;</td>
            <td valign="top">
				<p>Mylar is an information focusing UI 
				layer seamlessly integrated over Eclipse.  It makes 
				working with very large workspaces much easier by 
				monitoring your interaction with Eclipse, and creating a 
				context from the subset of the system that is relevant 
				to the task at hand. Once explicit, this <i>task 
				context</i> drives the Eclipse UI to highlight the 
				interesting elements, filter out the uninteresting, and 
				actively search for related information. The result is 
				a significant reduction in the amount of scrolling, 
				navigating, and searching required to complete a task.&nbsp; 
				Mylar’s facilities for working with task contexts also 
				facilitate task planning, context switching, reusing 
				past efforts, and sharing expertise.</p>
		  	</td>
          </tr>
        </table>

		<div class="homeitem">
			<h3>User Community</h3>
			<ul>
				<li>
                    <a href="http://dev.eclipse.org/mailman/listinfo/mylar-announce">
					mylar-announce@eclipse.org:</a> releases and events
                    [<a href="http://dev.eclipse.org/mhonarc/lists/mylar-announce/maillist.html">archive</a>]</li>
				<li>
                    <a href="http://dev.eclipse.org/mailman/listinfo/mylar-users">
					mylar-users@eclipse.org</a> discussions
					[<a href="http://dev.eclipse.org/mhonarc/lists/mylar-users/maillist.html">archive</a>]</li>
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=%5Bdiscussion%5D&product=Mylar&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					Bugzilla discussions</a> of ideas, enhancements, and UI issues.</li>
				<li><a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Mylar">
					Submit bug reports</a> for problems and enhancement requests.</li>
			</ul>
		</div>

		<div class="homeitem">
			<h3>Events</h3>
			<ul>
				<li>
                    <a href="http://canuck.gda.itesm.mx/eclipsezilla/show_bug.cgi?id=41">
                    Mylar tutorial</a> proposed for EclipseCon 2006
                    <a href="http://canuck.gda.itesm.mx/eclipsezilla/show_bug.cgi?id=41">(vote here)</a></li>
				<li>
                    <a href="http://canuck.gda.itesm.mx/eclipsezilla/show_bug.cgi?id=164">
                    Mylar talk</a> proposed for EclipseCon 2006
                    <a href="http://canuck.gda.itesm.mx/eclipsezilla/show_bug.cgi?id=164">(vote here)</a></li>
			</ul>
		</div>
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>New to Eclipse?</h6>
			<ul>
				<li><a href="#">Community Resources</a></li>
				<li><a href="#">News Corner</a></li>
				<li><a href="#">Newsgroup</a></li>
				<li><a href="#">Registration</a></li>
				<li><a href="#">Downloads</a></li>
				<li><a href="#">Legal</a></li>
				<li><a href="#">Eclipse Roadmap</a></li>
				<li><a href="#">Document</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Project Links</h6>
			<ul>
				<li><a href="#">Business Intelligence and Reporting</a></li>
				<li><a href="#">Platform</a></li>
				<li><a href="#">Technology Project</a></li>
				<li><a href="#">Test &amp; Performance Tools Platform</a></li>
				<li><a href="#">Web Tools</a></li>
				<li><a href="#">Project Proposals</a></li>
				<li><img src="images/jdj.jpg" width="40" height="42" class="inset" /><a href="#">Cast your vote for Eclipse</a></li>
				<li><a href="#">Eclipse wins Jolt Award</a><br /><img src="images/jolt.jpg" width="100" height="68" /></li>
			</ul>
		</div>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
