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
    $start=  substr($committerReviews, strpos($committerReviews, "<h3>Committers</h3>"));
    $committerList =substr($start,19, strpos($start, "</div>"));
    $lines = explode('</li>', strip_tags($committerList, '<li>'));
    foreach($lines as $line) {
      if (strlen($line)>3) {
        $actualCommitter = substr($line, strpos($line, ">")+1);
        if (!in_array( $actualCommitter, $committerArray)) {
          $committerArray[] = $actualCommitter;
        }
      }
    }
    return $committerArray;
}

  $field_seperator = ",";
  $lines_seperator = "\n";
  $committerArray =extractCommitter("https://projects.eclipse.org/projects/mylyn/who", array());
  $committerArray =extractCommitter("https://projects.eclipse.org/projects/mylyn.builds/who", $committerArray);
  $committerArray =extractCommitter("https://projects.eclipse.org/projects/mylyn.commons/who", $committerArray);
  $committerArray =extractCommitter("https://projects.eclipse.org/projects/mylyn.context/who", $committerArray);
  $committerArray =extractCommitter("https://projects.eclipse.org/projects/mylyn.docs/who", $committerArray);
  $committerArray =extractCommitter("https://projects.eclipse.org/projects/mylyn.incubator/who", $committerArray);
  $committerArray =extractCommitter("https://projects.eclipse.org/projects/mylyn.reviews/who", $committerArray);
  $committerArray =extractCommitter("https://projects.eclipse.org/projects/mylyn.tasks/who", $committerArray);
  $committerArray =extractCommitter("https://projects.eclipse.org/projects/mylyn.versions/who", $committerArray);

  $committerList = "";
  $committerNotList = "";
  $committerIndex = 0;
  foreach($committerArray as $committerName) {
    if (strlen($committerName)>0) {
       $committerIndex++;
       $committerList = $committerList . '&f'. $committerIndex
       				  . '=assigned_to&o'. $committerIndex
                      . '=allwordssubstr&v'. $committerIndex
       				  . '=' . str_replace(' ', '+', $committerName);
       $committerNotList = $committerNotList . '&n'. $committerIndex . '=1';
    }
  }

  $committerpart = "bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&classification=Mylyn&resolution=FIXED"
					. "&j_top=OR" . $committerList;
  $url= "https://bugs.eclipse.org/bugs/report.cgi?"
  								. $committerpart
  								. "&x_axis_field=assigned_to_realname&width=1024&height=600&action=wrap&ctype=csv&format=table";
  $content = file_get_contents($url);
  $lines = explode($lines_seperator, $content);
  $sort_ord = array();
  $sort_rec = array();
  foreach($lines as $line) {
    $fields = explode($field_seperator, $line);
    if (is_array($fields) == true) {
      if ($fields[1]> 1) {
        $sort_ord[] = $fields[1];
        $sort_rec[] = $fields;
      }
    }
  }
  $htmlDynamic = '<h1>Committer</h1>sorted list (count descending)<br>';
  $htmlDynamic = $htmlDynamic . '<table id="user_list_sort" border="1"><tbody><tr><td>Name</td><td>Count</td></tr>';
  array_multisort($sort_ord, SORT_NUMERIC, SORT_DESC, $sort_rec);
  foreach($sort_rec as $sort_recfields) {
    $htmlDynamic = $htmlDynamic . '<tr><td>' .str_replace('"','',$sort_recfields[0])
    		.' </td><td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?action=wrap&amp;'.str_replace('&','&amp;',$committerpart)
    		."&amp;assigned_to_realname=".urlencode(str_replace('"','',$sort_recfields[0])).'">'
    		. $sort_recfields[1].'</a></td></tr>';
  }

  $htmlDynamic = $htmlDynamic . '</table><br><br><br>';
    $url= "https://bugs.eclipse.org/bugs/report.cgi?"
  								. str_replace('&j_top=OR','&j_top=AND',$committerpart)
    							. $committerNotList
  								. "&x_axis_field=assigned_to_realname&width=1024&height=600&action=wrap&ctype=csv&format=table";

  $content = file_get_contents($url);
  $lines = explode($lines_seperator, $content);
  $sort_ord = array();
  $sort_rec = array();
  foreach($lines as $line) {
    $fields = explode($field_seperator, $line);
    if (is_array($fields) == true) {
      if ($fields[1]> 1) {
        $sort_ord[] = $fields[1];
        $sort_rec[] = $fields;
      }
    }
  }
  $htmlDynamic = $htmlDynamic . '<h1>Contributors</h1>sorted list (count descending)<br>';
  $htmlDynamic = $htmlDynamic . '<table id="user_list_sort" border="1"><tbody><tr><td>Name</td><td>Count</td></tr>';
  array_multisort($sort_ord, SORT_NUMERIC, SORT_DESC, $sort_rec);
  foreach($sort_rec as $sort_recfields) {
    $htmlDynamic = $htmlDynamic . '<tr><td>' .str_replace('"','',$sort_recfields[0])
    		.' </td><td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?action=wrap&amp;'
    		.str_replace('&','&amp;',str_replace('&j_top=OR','&j_top=AND',$committerpart))
    		. $committerNotList
    		."&amp;assigned_to_realname=".urlencode(str_replace('"','',$sort_recfields[0])).'">'
    		. $sort_recfields[1].'</a></td></tr>';
  }
  $htmlDynamic = $htmlDynamic . '</table>';

	# Paste your HTML content between the EOHTML markers!	
	$htmlStart = <<<EOHTML
<div id="maincontent">

	<div id="midcolumn">
		Listing ordered by number of bugs resolved.    
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

$html= $htmlStart . $htmlDynamic .$htmlEnd;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
