<?php
        require_once($_SERVER['DOCUMENT_ROOT'] .
"/eclipse.org-common/system/app.class.php");   
        require_once($_SERVER['DOCUMENT_ROOT']
."/eclipse.org-common/system/nav.class.php");   
        require_once($_SERVER['DOCUMENT_ROOT']
."/eclipse.org-common/system/menu.class.php");  
        require_once($_SERVER['DOCUMENT_ROOT']
."/projects/common/bug.class.php");
        require_once($_SERVER['DOCUMENT_ROOT']
."/projects/common/project-info.class.php");    

        $App    = new App();    $Nav    = new Nav();    $Menu   = new Menu();   
        ob_start();

        include($App->getProjectCommon());   

                $projectInfo = new ProjectInfo("mylar");

?>
<div id="maincontent">
	<div id="midcolumn">
               <div class="sideitem"> 
                  <h6>Dashboard</h6>
                  <div align="center">
                   <?= $projectInfo->dashboard_liveness() ?><br/>
                   <?= $projectInfo->dashboard_bugs_lights() ?><br/>
                   <?= $projectInfo->dashboard_news_lights() ?>
                  </div>
                 </div>
	</div>
</div>

<?php
        // Generating the eclipse look-n-feel

        $html = ob_get_contents();
        ob_end_clean();

        # Generate the web page
        $App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords,
$pageTitle, $html);

?>
