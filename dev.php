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


	include("_sideDev.php");
    include($App->getProjectCommon());   
	$projectInfo = new ProjectInfo("technology.mylar");
	
	$pageTitle 		= "Mylar Contributors";
	$pageKeywords	= "Mylar, Eclipse";
	$pageAuthor		= "Mik Kersten";	
?>

<div id="maincontent">
	<div id="midcolumn">
		<div align="center"><h1><?= $pageTitle ?></h1></div>

        <p>A key goal of the Mylar project is to make Mylar easy for the eclipse.org 
        community to build on and extend.
        At this stage the implementation is evolving rapidly, 
        and slowly stabilizing initial APIs and extension points. If you plan on extending 
		Mylar we suggest that you bring this up as a discussion on
		<a href="mailto:mylar-dev@eclipse.org">mylar-dev@eclipse.org</a>.
		Development is done in a transarent XP style, with weekly planning messages 
		sent to the mylar-dev list. Every task that results in code or resource 
		modification should correspond to a bugzilla report to show up in the plan.  The weekly plan 
		is sent out each Monday, if you would like a task included mark the report P2 or higher.</p>

		<div class="homeitem3col">
			<h3>Contributor Resources</h3>
			<ul>
				<li>Mailing list: <a href="http://dev.eclipse.org/mailman/listinfo/mylar-dev">
					mylar-dev@eclipse.org:</a> contributor discussions 
					<a href="http://dev.eclipse.org/mhonarc/lists/mylar-dev/maillist.html">[archive]</a>
				</li>
				<li>CVS repository: <a href="http://dev.eclipse.org/viewcvs/indextech.cgi/org.eclipse.mylar/">web interface</a></li>
				
			</ul>
		</div>  

		<div class="homeitem3col">
			<h3>Conventions</h3>
			<ul>
				<li><b>Development:</b> use the latest version of Mylar for development
				and <a href="http://www.cs.wustl.edu/icse05/ConferenceProgram/InvitedTalks/GammaKeynote.pdf">
				consume your own output</a>.</li>
				<li><b>Bugzilla:</b> priorities are P1: do this week, P2: should do 
				this week, P3: considered for next week, P4/5: requires user input.</li>
				<li><b>Code:</b> conventions are documented on <a href="http://dev.eclipse.org/conventions.html">dev.eclipse.org</a>
				and checked into each project's .settings folder.</li>
				<li><b>Patches</b>: see the <a href="doc/devref.php">Reference</a> page.</li>
			</ul>
		</div>  
	
		<p>&nbsp;</p>
		<p>&nbsp;</p>
	</div>
			
	<div id="rightcolumn">
		<!--
		<div class="sideitem"> 
          <h6>Dashboard</h6>
          <div align="center">
           bugs: <?= $projectInfo->dashboard_bugs_lights() ?><br/>
           newsgroup: <?= $projectInfo->dashboard_news_lights() ?><br/>&nbsp;
          </div>
        </div>
        -->
        <?= $devside ?>
	</div>
</div>

<?php
    $html = ob_get_contents();
    ob_end_clean();
    $App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
	