<?php
        require_once($_SERVER['DOCUMENT_ROOT']."/eclipse.org-common/system/app.class.php");   
        require_once($_SERVER['DOCUMENT_ROOT']."/eclipse.org-common/system/nav.class.php");   
        require_once($_SERVER['DOCUMENT_ROOT']."/eclipse.org-common/system/menu.class.php");  
        require_once($_SERVER['DOCUMENT_ROOT']."/projects/common/bug.class.php");
        require_once($_SERVER['DOCUMENT_ROOT']."/projects/common/project-info.class.php");    

    $App    = new App();    $Nav    = new Nav();    $Menu   = new Menu();   
    ob_start();

    include($App->getProjectCommon());   
	$projectInfo = new ProjectInfo("technology.mylar");
    
    #$dashboard1 = $projectInfo->dashboard_liveness();
    #$dashboard2 = $projectInfo->dashboard_bugs_lights();
    
	$pageTitle 		= "Test Page";

?>
<div id="maincontent">
	<div id="midcolumn">
		<?= $pageTitle ?> 
	</div>
	
	<div id="rightcolumn">
		<div class="sideitem"> 
          <h6>Dashboard</h6>
          <div align="center">
		   liveness: <?= $projectInfo->dashboard_liveness() ?><br/>
           bugs: <?= $projectInfo->dashboard_bugs_lights() ?><br/>
          </div>
        </div>
	</div>
</div>

<?php
        $html = ob_get_contents();
        ob_end_clean();
    $App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
