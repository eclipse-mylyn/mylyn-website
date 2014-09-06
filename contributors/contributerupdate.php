<?php
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
  $htmlDynamic = $htmlDynamic . '</table><br> page generated  '.date("Y/m/d h:i:sa");
  header("Pragma: public");
  header("Expires: 0");
  header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
  header("Content-Type: application/force-download");
  header( "Content-Disposition: attachment; filename=contributer.inc");
  header( "Content-Description: File Transfer");
  echo $htmlDynamic;
?>