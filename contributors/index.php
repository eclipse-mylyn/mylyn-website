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
	  $field_seperator = ",";
  $lines_seperator = "\n";
  $content = file_get_contents("https://bugs.eclipse.org/bugs/report.cgi?bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&classification=Mylyn&f1=assigned_to&f2=assigned_to&f3=assigned_to&f4=assigned_to&f5=assigned_to&f6=assigned_to&f7=assigned_to&f8=assigned_to&o1=notequals&o2=notequals&o3=notequals&o4=notequals&o5=notequals&o6=notequals&o7=notsubstring&o8=notequals&resolution=FIXED&v1=eclipse%40Frank-Becker.de&v2=steffen.pingel%40tasktop.com&v3=david.green%40tasktop.com&v4=mik.kersten%40tasktop.com&v5=robert.elves%40tasktop.com&v6=shawn.minto%40tasktop.com&v7=mylyn-inbox&v8=r4e-triaged%40eclipse.org&x_axis_field=assigned_to_realname&width=1024&height=600&action=wrap&ctype=csv&format=table");
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
  $htmlDynamic = '<br><br>  sorted list (count descending)<br>';
  $htmlDynamic = $htmlDynamic . '<table id="user_list_sort" border="1"><tbody><tr><td>Name</td><td>Count</td></tr>';
  array_multisort($sort_ord, SORT_NUMERIC, SORT_DESC, $sort_rec);
  foreach($sort_rec as $sort_recfields) {
    $htmlDynamic = $htmlDynamic . '<tr><td>'.str_replace('"','',$sort_recfields[0]).' </td><td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?action=wrap&amp;bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;classification=Mylyn&amp;f1=assigned_to&amp;f2=assigned_to&amp;f3=assigned_to&amp;f4=assigned_to&amp;f5=assigned_to&amp;f6=assigned_to&amp;f7=assigned_to&amp;f8=assigned_to&amp;o1=notequals&amp;o2=notequals&amp;o3=notequals&amp;o4=notequals&amp;o5=notequals&amp;o6=notequals&amp;o7=notsubstring&amp;o8=notequals&amp;resolution=FIXED&amp;v1=eclipse%40Frank-Becker.de&amp;v2=steffen.pingel%40tasktop.com&amp;v3=david.green%40tasktop.com&amp;v4=mik.kersten%40tasktop.com&amp;v5=robert.elves%40tasktop.com&amp;v6=shawn.minto%40tasktop.com&amp;v7=mylyn-inbox&amp;v8=r4e-triaged%40eclipse.org&amp;assigned_to_realname='.urlencode(str_replace('"','',$sort_recfields[0])).'">'. $sort_recfields[1].'</a></td></tr>';
  }
  $htmlDynamic = $htmlDynamic . '</table>';
		
	$htmlDynamic = "<br><brTest<br><br>";
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

$html= $htmlStart . $htmlDynamic . $htmlEnd;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
