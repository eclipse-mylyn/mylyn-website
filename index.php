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
	$html = <<<EOHTML
  
<div id="maincontent">
	<div id="midcolumn">
		<p>&nbsp;</p>
		<div align="center"><h1>$pageTitle</h1></div>
		<table border="0" cellpadding="4">
          <tr>
          	<td valign="top"><img border=0 src="images/screenshot-mylar-small.gif"></td>
          	<td valign="top">&nbsp;</td>
            <td valign="top">
				<p>
				Mylar is a task focused UI for Eclipse that makes working with very large workspaces as easy as working with small ones. It supports task management and monitors your work activity to identify information relevant to the task-at-hand. Mylar uses this task context to focus the Eclipse UI on the interesting information, hide the uninteresting, and automatically find what's related. This puts the information you need to get work done at your fingertips and improves productivity by reducing searching, scrolling, and navigation. By making task context explicit Mylar also facilitates multitasking, planning, reusing past efforts, and sharing expertise.
				</p>
				<p>
				This project is in the <a href="http://eclipse.org/projects/dev_process/validation-phase.php">Incubation Phase</a>.
				</p>
		  	</td>
          </tr>
        </table>

		<div class="homeitem">
			<h3>Community</h3>
			<ul>
				<li>
                    <a href="news://news.eclipse.org/eclipse.technology.mylar">
					mylar newsgroup:</a> user discussions and minor release announcements
					<a href="http://dev.eclipse.org/newslists/news.eclipse.technology.mylar/maillist.html">[archive]</a></li>
				<li>
                    <a href="http://dev.eclipse.org/mailman/listinfo/mylar-announce">
					mylar-announce@eclipse.org:</a> major release and event announcements
					[<a href="http://dev.eclipse.org/mhonarc/lists/mylar-dev/maillist.html">archive</a>]</li>
				<li>
                    <a href="http://dev.eclipse.org/mailman/listinfo/mylar-dev">
					mylar-dev@eclipse.org:</a> developer discussions and planning
					<a href="http://dev.eclipse.org/mhonarc/lists/mylar-dev/maillist.html">[archive]</a></li>
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=%5Bdiscussion%5D&product=Mylar&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					Bugzilla discussions</a> of ideas, enhancements, and UI issues.</li>
				<!--
				<li><a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Mylar">
					Submit bug reports</a> for problems and enhancement requests.</li>
				-->
				
			</ul>
		</div>

		<div class="homeitem">
			<h3>Events</h3>
			<ul>
				<!--
				<li>
                    <a href="http://canuck.gda.itesm.mx/eclipsezilla/show_bug.cgi?id=41">
                    Mylar tutorial</a> proposed for EclipseCon 2006
                    <a href="http://canuck.gda.itesm.mx/eclipsezilla/votes.cgi?action=show_user&bug_id=41">(vote here)</a></li>
				-->
				<li>
                    <a href="http://canuck.gda.itesm.mx/eclipsezilla/show_bug.cgi?id=164">
                    Mylar talk</a> proposed for EclipseCon 2006
                    <a href="http://canuck.gda.itesm.mx/eclipsezilla/votes.cgi?action=show_user&bug_id=164">(vote here)</a></li>
			</ul>
		</div> 
	</div> 

	<div id="rightcolumn">
		$commonside
		<div class="sideitem">
			<h6>News & Blogs</h6>
			<ul>
				<li> Gedanken Verloren: <a href="http://www.jroller.com/page/musk?entry=eclipse_killer_plugin_mylar">
				Eclipse Killer Plugin Mylar</a>
				<br><span class="dates">(Nov. 14, 2005)</span><br>&nbsp;</li>
				<li>Kirill Grouchnikov: <a href="http://weblogs.java.net/blog/kirillcool/archive/2005/11/mylar_a_very_us.html">
				A very useful Eclipse plugin</a>
				<br><span class="dates">(Nov. 7, 2005)</span><br>&nbsp;</li>
				<li>Eugene Kuleshov: <a href="http://jroller.com/page/eu?entry=the_most_addictive_eclipse_plugin">The most addictive Eclipse plugin ever</a>
				<br><span class="dates">(Nov. 1, 2005)</span><br>&nbsp;</li>
				<li>First public release<br><span class="dates">(Oct. 28, 2005)</span><br>&nbsp;</li>
				<li>Ed Burnette: <a href="http://www.eclipsezone.com/eclipse/forums/t20933.html">Mylar is the next killer app for Eclipse</a>
				<br><span class="dates">(July 28, 2005)</span><br>&nbsp;</li>
				<li>First user study preview release<br><span class="dates">(July 11, 2005)</span><br>&nbsp;</li>
				<li>Eclipse.org project created<br><span class="dates">(June 13, 2005)</span></li>
			</ul>
		</div>
	</div>
</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
