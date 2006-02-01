<?php
        require_once($_SERVER['DOCUMENT_ROOT']."/eclipse.org-common/system/app.class.php");   
        require_once($_SERVER['DOCUMENT_ROOT']."/eclipse.org-common/system/nav.class.php");   
        require_once($_SERVER['DOCUMENT_ROOT']."/eclipse.org-common/system/menu.class.php");  
        require_once($_SERVER['DOCUMENT_ROOT']."/projects/common/bug.class.php");
        require_once($_SERVER['DOCUMENT_ROOT']."/projects/common/project-info.class.php");    

    $App    = new App();    $Nav    = new Nav();    $Menu   = new Menu();   

    include($App->getProjectCommon());   
	$projectInfo = new ProjectInfo("technology.mylar");
    
    $dashboard1 = $projectInfo->dashboard_bugs_lights();
    #$dashboardBugs = $projectInfo->dashboard_bugs_lights();
  	#$dashboardNewsgroup = $projectInfo->dashboard_news_lights();
    
	$pageTitle 		= "Test Page";
	$pageKeywords	= "Mylar, Eclipse";
	$pageAuthor		= "Mik Kersten";
		
$html = <<<EOHTML
<div id="maincontent">
	<div id="midcolumn">
		$pageTitle
	</div>
	
	<div id="rightcolumn">
		
		<div class="sideitem">
			<h6>Developer Links</h6>
			<ul>
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=%5Bdiscussion%5D&product=Mylar&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					Bugzilla discussions</a> of ideas, enhancements, and UI issues.
					<br>&nbsp;
				</li>
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylar&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=helpwanted&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					Bugzilla reports marked helpwanted</a> are a starting point for those interested in contributing
					<br>&nbsp;
				</li>
				<li><a href="http://www.eclipse.org/eclipse/development/index.php">Eclipse development page</a> documents
					conventions and resources.<br>&nbsp;
				</li>
			</ul>
		</div>
		
		<div class="sideitem"> 
          <h6>Dashboard</h6>
          <div align="center">
           bugs: $dashboard1<br/>
          </div>
        </div>
	</div>
</div>
EOHTML;
    $App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
