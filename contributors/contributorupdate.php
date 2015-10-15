<?php
	function extractCommitter($url, $committerArray)
	{
		$committerReviews = file_get_contents($url);
		$start=	substr($committerReviews, strpos($committerReviews, "<h3>Committers</h3>"));
		$committerList =substr($start,19, strpos($start, "</ul></div"));
		$lines = explode('</li>', $committerList);
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
				// need to hardcode committers whose email doesn't contain all the words in their name because using assigned_to_realname doesn't work
				$found =0;
				for ($i = 0; $i <= count($committerArray); $i++) {
					$centry =$committerArray[$i];
					if(strcmp($actualCommitter, $centry[0])==0) {
						$found = 1;
						break;
					}
				}
				if ($found ==0) {
					$committerArray[] = array($actualCommitter, $picurl, $userName);
				}
			}
		}
		return $committerArray;
	}

	$committerArray =extractCommitter("https://projects.eclipse.org/projects/mylyn/who", array());
	$committerArray =extractCommitter("https://projects.eclipse.org/projects/mylyn.builds/who", $committerArray);
	$committerArray =extractCommitter("https://projects.eclipse.org/projects/mylyn.commons/who", $committerArray);
	$committerArray =extractCommitter("https://projects.eclipse.org/projects/mylyn.context.mft/who", $committerArray);
	$committerArray =extractCommitter("https://projects.eclipse.org/projects/mylyn.context/who", $committerArray);
	$committerArray =extractCommitter("https://projects.eclipse.org/projects/mylyn.docs/who", $committerArray);
	$committerArray =extractCommitter("https://projects.eclipse.org/projects/mylyn.docs.intent/who", $committerArray);
	$committerArray =extractCommitter("https://projects.eclipse.org/projects/mylyn.docs.vex/who", $committerArray);
	$committerArray =extractCommitter("https://projects.eclipse.org/projects/mylyn.incubator/who", $committerArray);
	$committerArray =extractCommitter("https://projects.eclipse.org/projects/mylyn.reviews/who", $committerArray);
	$committerArray =extractCommitter("https://projects.eclipse.org/projects/mylyn.reviews.r4e/who", $committerArray);
	$committerArray =extractCommitter("https://projects.eclipse.org/projects/mylyn.tasks/who", $committerArray);
	$committerArray =extractCommitter("https://projects.eclipse.org/projects/mylyn.versions/who", $committerArray);

	$field_seperator = ",";
	$lines_seperator = "\n";
	$committerList = "";
	// negate the assigned_to clauses in committerList
	$committerNotList = "";
	$committerIndex = 0;
	foreach($committerArray as $committerName) {
		if (strlen($committerName[0])>0) {
			$committerIndex++;
			$committerList = $committerList . '&f'. $committerIndex
							. '=assigned_to_realname&o'. $committerIndex
							. '=allwordssubstr&v'. $committerIndex
							. '=' . str_replace(' ', '+', $committerName[0]);
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
				$sort_ord[] = $fields[0];
				$sort_rec[] = $fields;
			}
		}
	}
	$sortCommitter_ord = array();
	$sortCommitter_rec = array();
	foreach($committerArray as $committerEntry) {
		$sortCommitter_ord[] = $committerEntry[0];
		$sortCommitter_rec[] = $committerEntry;
	}
	array_multisort($sortCommitter_ord, SORT_NUMERIC, SORT_DESC, $sortCommitter_rec);
	$sortResult_ord = array();
	$sortResult_rec = array();
	$j = 0;
	for ($i = 0; $i <= count($sortCommitter_ord) && $j <= count($sort_ord);) {
		$t1 = $sortCommitter_rec[$i][0];
		$t2 = str_replace('"','',$sort_rec[$j][0]);
		$scResult = strcmp($t1 , $t2);
		if ($scResult == 0) {
			$sortResult_ord[] = $sort_rec[$j][1];
			$sortResult_rec[] = array ($sortCommitter_rec[$i][1] , $sortCommitter_rec[$i][0] , $sort_rec[$i][1], $sortCommitter_rec[$i][2]);
			$i++;
			$j++;
		} else {if ($scResult > 0) {
				$sortResult_ord[] = $sort_rec[$j][1];
				$sortResult_rec[] = array ("" , $sort_rec[$j][0] , $sort_rec[$j][1], $sortCommitter_rec[$j][2]);
				$j++;
			} else {
				$sortResult_ord[] = 0;
				$sortResult_rec[] = array ($sortCommitter_rec[$i][1] , $sortCommitter_rec[$i][0] , 0, $sortCommitter_rec[$i][2]);
				$i++;
			}
		}
	}
	array_multisort($sortResult_ord, SORT_NUMERIC, SORT_DESC, $sortResult_rec);

	$htmlDynamic = '<div class="col-sm-10 col-md-10 col-lg-10"><div class="news-list"> <h2>Committers</h2>'
				 . '<br>Sorted by number of bugs resolved.<br>';
	$htmlDynamic = $htmlDynamic . '<table class="table table-striped" id="user_list_sort" border="1"><tbody><tr><th></th><th>Name</th><th>Bugs</th></tr>';
	array_multisort($sort_ord, SORT_NUMERIC, SORT_DESC, $sort_rec);
	foreach($sortResult_rec as $sort_recfields) {
		if (strlen($sort_recfields[0])>0) {
			if ($sort_recfields[2]> 0) {
				$htmlDynamic = $htmlDynamic . '<tr><td><a href="https://projects.eclipse.org' .$sort_recfields[3]
							 .	$sort_recfields[0].'</a></td><td>'
		 					 . str_replace('"','',$sort_recfields[1])
							 . ' </td><td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?action=wrap&amp;'
							 . str_replace('&','&amp;', $resolutionPart)
							 . "&amp;assigned_to_realname=".urlencode(str_replace('"','',$sort_recfields[1])).'">'
							 .	$sort_recfields[2].'</a></td></tr>';
			}
		}
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
	$htmlDynamic = $htmlDynamic . '<div class="col-sm-7 col-md-7 col-lg-7"><div class="news-list"> <h2>Contributors</h2> First '.$maxLinesHalf.
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
			$htmlDynamic = $htmlDynamic .'</table></div> </div><div class="col-sm-7 col-md-7 col-lg-7"><div class="news-list"> <h2>Contributors</h2>continued '
						. '<br>Sorted by number of bugs resolved.<br>';
			 $htmlDynamic = $htmlDynamic . '<table class="table table-striped" id="user_list_sort" border="1"><tbody><tr><th>Name</th><th>Bugs</th></tr>';
			}
		}
		$htmlDynamic = $htmlDynamic . '</table></div> </div><div class="row" >'
					. '<div class="col-sm-24 col-md-24 col-lg-24">';
	$htmlDynamic = $htmlDynamic . '<i>Page generated	' . date("Y/m/d h:i:sa")."
				. The list of committers may be incomplete.</i>";

	$file = 'contributor.inc';
	file_put_contents($file, $htmlDynamic);
?>