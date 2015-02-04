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
	function extractCommitter($url, $committerArray)
	{
		$committerReviews = file_get_contents($url);
		$start=	substr($committerReviews, strpos($committerReviews, "<h3>Committers</h3>"));
		$committerList =substr($start,19, strpos($start, "</div>"));
		$lines = explode('</li>', strip_tags($committerList, '<li>'));
		foreach($lines as $line) {
		 $debug =  $debug . $line . "<br>";
			if (strlen($line)>3) {
				$actualCommitter = substr($line, strpos($line, ">")+1);
				// need to hardcode committers whose email doesn't contain all the words in their name because using assigned_to_realname doesn't work
				if($actualCommitter === "Torkild U. Resheim") {
					$actualCommitter = "torkildr";
				} else if($actualCommitter === "Jacques Bouthillier") {
					$actualCommitter = "lmcbout@gmail.com";
				}
				if (!in_array( $actualCommitter, $committerArray)) {
					$committerArray[] = $actualCommitter;
				}
			}
		}
		return $committerArray;
	}

	# Paste your HTML content between the EOHTML markers!
	$htmlStart = <<<EOHTML
<div id="maincontent">

	<div id="midcolumn">
		<div class="homeitem3col">
EOHTML;
	$htmlEnd = <<<EOHTML
	   </div> 
	</div> 
	
	<div id="rightcolumn">
		$commonside
		$side_vote
		$side_announce
	</div>
</div>
EOHTML;
 $debug = "start<br>";
 		$committerReviews = file_get_contents("https://projects.eclipse.org/projects/mylyn.tasks/who");
		$start=	substr($committerReviews, strpos($committerReviews, "<h3>Committers</h3>"));
		$committerList =substr($start,19, strpos($start, "</ul></div>"));
		$lines = explode('</li>', strip_tags($committerList, '<li>'));
//		$debug =  $debug . "<!-- ". $committerList . "--><br>";
		foreach($lines as $line) {
			if (strlen($line)>3) {
				$actualCommitter = substr($line, strpos($line, ">")+1);
		 $debug =  $debug . $actualCommitter . "<br>";
		 }
		}
 
//	$committerArray =extractCommitter("https://projects.eclipse.org/projects/mylyn/who", array());

$htmlDynamic = " Hallo Test 2 <br><br>". $debug." <br><br>";
$html= $htmlStart . $htmlDynamic .$htmlEnd;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>