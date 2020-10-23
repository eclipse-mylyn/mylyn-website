<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Mylyn Contributors";
	$pageKeywords	= "Mylyn, Eclipse";
	$pageAuthor		= "Mik Kersten";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
	# Paste your HTML content between the EOHTML markers!


	$htmlStart = <<<EOHTML
<div id="maincontent">

	<div id="midcolumn" class="no-right-sidebar">
		<div class="row" >
EOHTML;
	$htmlEnd = <<<EOHTML
		</div>
	</div>
</div>
EOHTML;

	function extractCommitter($url, $projectTitle)
	{
		$returnHtml = '<h3><a href="'. $url . '">' . $projectTitle . ' Committer</a></h3><br>';
		$committerReviews = file_get_contents($url.'/who');
		$start=	substr($committerReviews, strpos($committerReviews, "<h3>Committers</h3>"));
		$committerList =substr($start,19, strpos($start, "</ul></div"));
		$lines = explode('</li>', $committerList);
		$anzCommiter = 0;
		foreach($lines as $line) {
			if (strlen($line)>10) {
				$actualCommitter1 = substr($line, strpos($line,"<li sort=\"")+10);
				$actualCommitter = substr($actualCommitter1, 0, strpos($actualCommitter1, "\""));

				$userName0 = substr($line, strpos($line,"<a href=\"/users/")+9);
				$userName = substr($userName0, 0, strpos($userName0,"\"View user profile.")+21);

				$actpic00  = substr($line, strpos($line,"<img ")+5);
				$actpic0  = substr($actpic00, strpos($actpic00,"src=\"")+5);
				$actpic  = substr($actpic0, 0, strpos($actpic0,"\""));
				$picurl = "<img typeof=\"foaf:Image\"  height=\"30\" width=\"30\" src=\"". $actpic . "\">";
				if($actualCommitter === "") {
				continue;
				}
				if ($anzCommiter == 0) {
					$returnHtml = $returnHtml . '<table class="table table-striped" id="user_list_sort" border="1"><tbody><tr><th></th><th>Name</th><th></th><th>Name</th><th></th><th>Name</th><th></th><th>Name</th></tr>';
				}
				$anzCommiter++;
				if (($anzCommiter % 4) == 1) {
					$returnHtml = $returnHtml . '<tr>';			
				}
				$returnHtml = $returnHtml . '<td>' . '<a href="https://projects.eclipse.org' . $userName . $picurl .'</a></td><td>'. $actualCommitter . '</td>';			
				if (($anzCommiter % 4) == 0) {
					$returnHtml = $returnHtml . '</tr>';			
				}
			
			}
		}
		$returnHtml = $returnHtml . '</table>';
		return $returnHtml;
	}

	$htmlDynamic = extractCommitter("https://projects.eclipse.org/projects/mylyn/who", "Top Level");
	$htmlDynamic = $htmlDynamic . extractCommitter("https://projects.eclipse.org/projects/mylyn.builds", "Builds");
	$htmlDynamic = $htmlDynamic . extractCommitter("https://projects.eclipse.org/projects/mylyn.commons", "Commons");
	$htmlDynamic = $htmlDynamic . extractCommitter("https://projects.eclipse.org/projects/mylyn.context", "Context");
	$htmlDynamic = $htmlDynamic . extractCommitter("https://projects.eclipse.org/projects/mylyn.context.mft", "Model Focusing Tools");
	$htmlDynamic = $htmlDynamic . extractCommitter("https://projects.eclipse.org/projects/mylyn.docs", "Docs");
	$htmlDynamic = $htmlDynamic . extractCommitter("https://projects.eclipse.org/projects/mylyn.docs.intent", "Intent");
	$htmlDynamic = $htmlDynamic . extractCommitter("https://projects.eclipse.org/projects/mylyn.docs.vex", "Visual Editor for XML");
	$htmlDynamic = $htmlDynamic . extractCommitter("https://projects.eclipse.org/projects/mylyn.incubator", "Incubator");
	$htmlDynamic = $htmlDynamic . extractCommitter("https://projects.eclipse.org/projects/mylyn.reviews", "Reviews");
	$htmlDynamic = $htmlDynamic . extractCommitter("https://projects.eclipse.org/projects/mylyn.reviews.r4e", "Review for Eclipse");
	$htmlDynamic = $htmlDynamic . extractCommitter("https://projects.eclipse.org/projects/mylyn.tasks", "Tasks");
	$htmlDynamic = $htmlDynamic . extractCommitter("https://projects.eclipse.org/projects/mylyn.versions", "Versions");

	$html= $htmlStart . $htmlDynamic .$htmlEnd;

	# Generate the web page
    $Theme = $App->getThemeClass();
    $Theme = $App->getThemeClass($theme);
    $Theme->setNavPosition('left');
    $Theme->setNav($Nav);
    $Theme->setMenu($Menu);
    $Theme->setPageAuthor($pageAuthor);
    $Theme->setPageKeywords($pageKeywords);
    $Theme->setPageTitle($pageTitle);
    $Theme->setHtml($html);
    $Theme->setBreadcrumb($Breadcrumb);
    $Theme->generatePage();?>