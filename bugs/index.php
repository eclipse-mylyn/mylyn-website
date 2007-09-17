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
	$votesBugs = new ProjectBugs("tools.mylyn");
	$votesEnhancements = new ProjectBugs("tools.mylyn", 2);
	
	$pageTitle 		= "Mylyn Bugs";
	$pageKeywords	= "Mylyn, Eclipse";
	$pageAuthor		= "Mik Kersten";	
?>


<div id="maincontent">
	<div id="midcolumn">
		<div class="homeitem3col">
			<h3>New Bugs</h3>
			<ul>
				<li>The <a href="dl.php">The Mylyn Bugzilla Connector</a> is the preferred way to submit bugs, since it has automatic duplicate detection.  
				</li>
				<li><a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Mylyn">
				<img border=0 src="/mylyn/images/task-repository-new.gif">&nbsp;The Bugzilla Web Interface</a> can also be used.  Please manually search
				for duplicates first.  For defects provide details on how to reproduce.  For enhancements please outline a use case.
				</li>
			</ul>
		</div>
		 
		<div class="homeitem3col">
			<h3>Queries</h3>
			<ul>
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&component=Bugzilla&component=Core&component=Doc&component=Java&component=Jira&component=Monitor&component=Tasks&component=Trac&component=UI&component=Web&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&bug_severity=blocker&bug_severity=critical&bug_severity=major&bug_severity=normal&emailtype1=substring&email1=&emailtype2=notregexp&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
				<img border=0 src="/mylyn/images/query.gif">&nbsp;&nbsp;All open bugs with severity of normal or higher</a> 
				</li>
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&component=Bugzilla&component=Core&component=Doc&component=Java&component=Jira&component=Monitor&component=Tasks&component=Trac&component=UI&component=Web&component=XML&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&bug_severity=minor&bug_severity=trivial&bug_severity=enhancement&emailtype1=substring&email1=&emailtype2=notregexp&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					<img border=0 src="/mylyn/images/query.gif">&nbsp;&nbsp;All open bugs marked enhancement, minor, or trivial</a> 
				</li>
				
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&component=Bugzilla&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=notregexp&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
				<img border=0 src="/mylyn/images/query.gif">&nbsp;&nbsp;Connector: Bugzilla</a> 
				</li>
				
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&component=Jira&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=notregexp&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
				<img border=0 src="/mylyn/images/query.gif">&nbsp;&nbsp;Connector: JIRA</a> 
				</li>
				
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&component=Trac&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=notregexp&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
				<img border=0 src="/mylyn/images/query.gif">&nbsp;&nbsp;Connector: Trac</a> 
				</li>
				
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=anywordssubstr&short_desc=linux+gtk+motif&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
				<img border=0 src="/mylyn/images/query.gif">&nbsp;&nbsp;OS: Linux</a> 
				</li>
				
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=anywordssubstr&short_desc=mac&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
				<img border=0 src="/mylyn/images/query.gif">&nbsp;&nbsp;OS: Mac</a> 
				</li>
			</ul>
		</div>
		
		<div class="homeitem3col">
			<h3>Voting</h3>
			<ul>
				<li>
				  You can vote for any bug by using the <i>Vote for this bug</i> link on the bug report.
				</li>
				<li>
				  Vote for
				  <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=anywordssubstr&short_desc=%5Bconnector%5D&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
				  task repository connectors</a>
				</li>
				<li>
				  Vote for
				  <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=anywordssubstr&short_desc=%5Bbridge%5D&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
				  structure bridges</a>
				</li>
			</ul>
		</div>
		
		<p>&nbsp;</p>
	</div>
	
</div>
<div id="rightcolumn"> 
	<font size=1>
	<?= $votesBugs->getAsSideHTML("Top Voted Bugs") ?>
	<?= $votesEnhancements->getAsSideHTML("Top Voted Enhancements") ?>
	</font>
</div>

<?php
    $html = ob_get_contents();
    ob_end_clean();
    $App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
