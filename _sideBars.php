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
			<h6>Support Mylyn</h6>
			<table>
				<tr>
					<td width="5">&nbsp;</td>
					<td>
						<a href="http://marketplace.eclipse.org/content/mylyn">
						<img src="/mylyn/images/star.png" border="0"/>
						Star Mylyn as favorite on Eclipse Marketplace</a>
					</td>
				</tr>
			</table>
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
			<ul>
			<li>
				The Myelin substance accelerates our 
				thoughts by making neurons much more efficient at conducting electricity.
			</li>
			<li>The Mylyn name 
				is a tribute to this substance, as many users claim that our tools increase efficiency 
				to the point where we can <i>code at the speed of thought</i>.
			</li>
			<li>
				The project was <a href="http://www.eclipse.org/mylyn/rename.php">previously called Mylar</a>.
			</li>
		</div>
EOHTML;

	
?>