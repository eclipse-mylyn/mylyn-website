<?php
	$file = 'contributor.inc';
	function extractCommitter($url, $committerArray)
	{
		$committerReviews = file_get_contents($url);
		$start=	substr($committerReviews, strpos($committerReviews, "<h3>Committers</h3>"));
		$committerList =substr($start,19, strpos($start, "</div>"));
		$lines = explode('</li>', strip_tags($committerList, '<li>'));
		foreach($lines as $line) {
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
	// negate the assigned_to clauses in committerList
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

	$resolutionPart = "bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&classification=Mylyn&resolution=FIXED"; 
	$committerpart = "&j_top=OR" . $committerList;
	$url= "https://bugs.eclipse.org/bugs/report.cgi?"
		. $resolutionPart
		. $committerpart
		. "&x_axis_field=assigned_to_realname&width=1024&height=600&action=wrap&ctype=csv&format=table";
	$content = file_get_contents($url);
	$lines = explode($lines_seperator, $content);
	$sort_ord = array();
	$sort_rec = array();
	foreach($lines as $line) {
		$fields = explode($field_seperator, $line);
		if (is_array($fields) == true) {
			if ($fields[1]> 0) {
				$sort_ord[] = $fields[1];
				$sort_rec[] = $fields;
			}
		}
	}
	$htmlDynamic = '<div class="col-sm-8 col-md-8 col-lg-8"><div class="news-list"> <h2>Committers</h2>'
				 . '<br>Sorted by number of bugs resolved.<br>';
	$htmlDynamic = $htmlDynamic . '<table class="table table-striped" id="user_list_sort" border="1"><tbody><tr><th>Name</th><th>Bugs</th></tr>';
	array_multisort($sort_ord, SORT_NUMERIC, SORT_DESC, $sort_rec);
	foreach($sort_rec as $sort_recfields) {
		$htmlDynamic = $htmlDynamic . '<tr><td>' .str_replace('"','',$sort_recfields[0])
					. ' </td><td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?action=wrap&amp;'
					. str_replace('&','&amp;', $resolutionPart)
					. "&amp;assigned_to_realname=".urlencode(str_replace('"','',$sort_recfields[0])).'">'
					.	$sort_recfields[1].'</a></td></tr>';
	}

	$htmlDynamic = $htmlDynamic . '</table>';
		$url= "https://bugs.eclipse.org/bugs/report.cgi?"
			. str_replace('&j_top=OR','&j_top=AND', $resolutionPart . $committerpart)
			. $committerNotList
			. "&x_axis_field=assigned_to_realname&width=1024&height=600&action=wrap&ctype=csv&format=table";

	$content = file_get_contents($url);
	$lines = explode($lines_seperator, $content);
	$sort_ord = array();
	$sort_rec = array();
	foreach($lines as $line) {
		$fields = explode($field_seperator, $line);
		if (is_array($fields) == true) {
			if ($fields[1]> 2 && $fields[0] !== "\" \"") {
				$sort_ord[] = $fields[1];
				$sort_rec[] = $fields;
			}
		}
	}
	
	$maxLines = sizeof($sort_rec);
	$xx = $maxLines / 2;
	$maxLinesHalf = round($xx, 0 ,PHP_ROUND_HALF_DOWN);
	if ($maxLinesHalf * 2 <> $maxLines) {
	$maxLinesHalf = $maxLinesHalf +1;
	}
	$htmlDynamic = $htmlDynamic . '</div> </div>';
	$htmlDynamic = $htmlDynamic . '<div class="col-sm-8 col-md-8 col-lg-8"><div class="news-list"> <h2>Contributors</h2> First '.$maxLinesHalf.
				 '<br>Sorted by number of bugs resolved.<br>';
	$htmlDynamic = $htmlDynamic . '<table class="table table-striped" id="user_list_sort" border="1"><tbody><tr><th>Name</th><th>Bugs</th></tr>';
	array_multisort($sort_ord, SORT_NUMERIC, SORT_DESC, $sort_rec);
	$idx=0;
	foreach($sort_rec as $sort_recfields) {
		$htmlDynamic = $htmlDynamic . '<tr><td>' .str_replace('"','',$sort_recfields[0])
					. ' </td><td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?action=wrap&amp;'
					. str_replace('&','&amp;',str_replace('&j_top=OR','&j_top=AND', $resolutionPart))
					. "&amp;assigned_to_realname=".urlencode(str_replace('"','',$sort_recfields[0])).'">'
					. $sort_recfields[1].'</a></td></tr>';
		$idx = $idx + 1;
		if ($idx== $maxLinesHalf) {
			$htmlDynamic = $htmlDynamic .'</table></div> </div><div class="col-sm-8 col-md-8 col-lg-8"><div class="news-list"> <h2>Contributors</h2>continued '
						. '<br>Sorted by number of bugs resolved.<br>';
			 $htmlDynamic = $htmlDynamic . '<table class="table table-striped" id="user_list_sort" border="1"><tbody><tr><th>Name</th><th>Bugs</th></tr>';
			}
		}
		$htmlDynamic = $htmlDynamic . '</table></div> </div><div class="row" >'
					. '<div class="col-sm-24 col-md-24 col-lg-24">';
	$htmlDynamic = $htmlDynamic . '<i>Page generated	' . date("Y/m/d h:i:sa")."
				. The list of committers may be incomplete.</i>";

	file_put_contents($file, $htmlDynamic);
?>