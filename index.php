<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Mylar Technology Project";
	$pageKeywords	= "Mylar, Eclipse";
	$pageAuthor		= "Mik Kersten";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);
	# End: page-specific settings
	
	include("_sideCommon.php");
	include("_sideFeedback.php");
	include("_sideNews.php");
	$html = <<<EOHTML
  
<div id="maincontent">
	<div id="midcolumn">
	  	
	  	<div align="left">
			<table border="0" cellpadding="4">
	          <tr>
	          	<td valign="top"><img border=0 src="images/screenshot-mylar-small.gif"></td>
	          	<td valign="top">&nbsp;</td>
	            <td valign="top">
					<p>
					Mylar is a task-focused UI for Eclipse that makes working with very large workspaces as easy as working with small ones.  It makes tasks a first class part of Eclipse, and integrates
					task repositories such as Bugzilla, Trac, and JIRA.  Once your tasks are integrated, Mylar monitors your work activity to identify information relevant to the task-at-hand. Mylar uses this task context to focus the Eclipse UI on the interesting information, hide the uninteresting, and automatically find what's related. This puts the information you need to get work done at your fingertips and improves productivity by reducing searching, scrolling, and navigation. By making task context explicit Mylar also facilitates multitasking, planning, reusing past efforts, and sharing expertise.
					</p>
					<a href="images/mylar-verview.gif">Screenshot</a>
			  	</td>
	          </tr>
	        </table>
        </div>
        
		<div class="homeitem">
			<h3>Community</h3>
			<ul>
				<li>
	                <a href="news://news.eclipse.org/eclipse.technology.mylar">
					users newsgroup:</a> discussions and minor release announcements
					<a href="http://dev.eclipse.org/newslists/news.eclipse.technology.mylar/maillist.html">[archive]</a></li>
				<li>
	                <a href="http://dev.eclipse.org/mailman/listinfo/mylar-announce">
					mylar-announce@eclipse.org:</a> major release and events
					<a href="http://dev.eclipse.org/mhonarc/lists/mylar-announce/maillist.html">[archive]</a></li>
				<li>
	                <a href="http://dev.eclipse.org/mailman/listinfo/mylar-dev">
					mylar-dev@eclipse.org:</a> developer discussions and planning
					<a href="http://dev.eclipse.org/mhonarc/lists/mylar-dev/maillist.html">[archive]</a></li>
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=%5Bdiscussion%5D&product=Mylar&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					Bugzilla discussions</a> of ideas, enhancements, and UI issues.</li>
			</ul>
		</div> 
		
		<div class="homeitem">
			<h3>Events</h3>
			<ul>
				<li>
					<b><i>Mylar 1.0 is available!</i></b><br>&nbsp;<br>&nbsp;See the <a href="http://eclipse.org/mylar/doc/release-1.0.php">Release Notes</a>, (Dec 11th 2006)
				</li>
				<li>
	                <a href="http://www.eclipse.org/community/webinars2006.php">
	                Mylar Webinar</a> by Mik Kersten, (Oct 25, 2006)
	            </li>
	            <!--
				<li>
	                <a href="http://www.cs.uoregon.edu/fse-14/prelim-program.html">
	                 Using Task Context to Improve Programmer Productivity</a> by Mik Kersten and Gail Murphy (Nov 7, 10:00am PST)
	            </li>
	            -->
			</ul>
		</div> 
		<div align="left">
			<p>&nbsp</p>
		</div>
	</div>

	<div id="rightcolumn">
		$commonside
		$feedbackside
		$newsside
	</div>
</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
