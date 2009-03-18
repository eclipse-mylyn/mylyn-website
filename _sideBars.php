<?php

    $side_announce = <<<EOHTML
		<div class="sideitem">
			<h6>Announce List</h6>
			 <ul><li>
				<a href="http://dev.eclipse.org/mailman/listinfo/mylyn-announce">Sign up</a> to get notified of Mylyn releases.
			  </li></ul>
		</div>   
EOHTML;
	
		$side_vote = <<<EOHTML
		<div class="sideitem">
			<h6>Support Mylyn on Plugin Central</h6>
			 <div style="margin-top:10px; margin-left:10px;">
			 <form method="post" action="http://www.eclipseplugincentral.com/Web_Links.html">
				<!--
				<a href="http://www.eclipseplugincentral.com/Web_Links-index-req-viewlink-cid-587.html">
				Vote on EPIC: </a>&nbsp; -->
				<select name="rating">
				<option selected>10</option>
				<option>9</option>
				<option>8</option>
				<option>7</option>
				<option>6</option>
				<option>5</option>
				<option>4</option>
				<option>3</option>
				<option>2</option>
				<option>1</option>
				</select><input type="hidden" name="ratinglid" value="560"><input type="hidden" name="ratinguser" value="outside"><input type="hidden" name="req" value="addrating">&nbsp;<input type="submit" value="  Vote  ">
				</form>
				</div>
		</div>
EOHTML;
	
	$side_dev = <<<EOHTML
		<div class="sideitem">
			<h6>Developer Links</h6>
			<ul>
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=%5Bdiscussion%5D&product=Mylar&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					Bugzilla discussions</a><br>&nbsp;
				</li>
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylar&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=helpwanted&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					Bugs marked helpwanted</a><br>&nbsp;
				</li>
				<li><a href="http://www.eclipse.org/eclipse/development/index.php">Eclipse development</a><br>&nbsp;
				</li>
			</ul>
		</div>
EOHTML;

    $side_mylynIs = <<<EOHTML
		<div class="sideitem">
			<h6>What is Mylyn?</h6>
			<p>
			The Myelin substance accelerates our 
			thoughts by making neurons much more efficient at conducting electricity. The Mylyn name 
			is a tribute to this substance, as many users claim that our tools increase efficiency 
			to the point where we can <i>code at the speed of thought</i>.  The
			project was <a href="http://www.eclipse.org/mylyn/rename.php">previously called Mylar</a>.
			</p>
		</div>
EOHTML;

	
?>