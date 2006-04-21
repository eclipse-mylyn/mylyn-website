<?php
    require_once($_SERVER['DOCUMENT_ROOT']."/eclipse.org-common/system/app.class.php");   
    require_once($_SERVER['DOCUMENT_ROOT']."/eclipse.org-common/system/nav.class.php");   
	require_once($_SERVER['DOCUMENT_ROOT']."/eclipse.org-common/system/menu.class.php");  
	require_once($_SERVER['DOCUMENT_ROOT']."/projects/common/bug.class.php");
	require_once($_SERVER['DOCUMENT_ROOT']."/projects/common/project-info.class.php");    
	require_once($_SERVER['DOCUMENT_ROOT']."/projects/common/project_bugs.class.php");
	include("_sideCommon.php");

    $App    = new App();    $Nav    = new Nav();    $Menu   = new Menu();   
    ob_start();

    include($App->getProjectCommon());   
	$projectBugs = new ProjectBugs("technology.mylar");
	
	$pageTitle 		= "Mylar Bugs";
	$pageKeywords	= "Mylar, Eclipse";
	$pageAuthor		= "Mik Kersten";	
?>


<div id="maincontent">
	<div id="midcolumn">
		<div align="center"><h1><?= $pageTitle ?></h1></div>
		<p>In part thanks to the Bugzilla integration that it provides, the
		Mylar project makes heavy use of Bugzilla for tracking bugs, planning,
		and discussing design issues.</p> 
		<div class="homeitem3col">
			<h3>Bugzilla Queries</h3>
			<ul>
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylar&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&priority=P1&priority=P2&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
				Scheduled for this week (P1 and P2)</a>
				<!--
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylar&target_milestone=0.5&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=notregexp&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
				Scheduled for next target milestone (0.5)</a>
				-->
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylar&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=notregexp&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
				All open reports</a> 
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylar&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&op_sys=Linux&op_sys=Linux-GTK&op_sys=Linux-Motif&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
				Linux-specific reports</a> 
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylar&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&op_sys=Mac+OS&op_sys=MacOS+X&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
				MacOS-specific reports</a> 
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>Submitting Bugs</h3>
			<ul>
				<li><a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Mylar">
				Submit bugzilla reports</a> for any problems or enhancement requests
				</li>
				<li>For bugs: please make sure that you provide details on how to reproduce.
				</li>
				<li>For enhancements: please provide a detailed use case for the request.
				</li>
			</ul>
		</div>
		<p>&nbsp;</p>
	</div>
	
	<p>&nbsp;</p>
	<p>&nbsp;</p>
</div>
<!--
<div id="rightcolumn"> 
	<?= $projectBugs->getAsSideHTML("Top Voted Bugs (live)") ?>
</div>
-->

<?php
    $html = ob_get_contents();
    ob_end_clean();
    $App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
