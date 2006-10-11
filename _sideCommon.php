<?php
    $commonside = <<<EOHTML
	<div class="sideitem">
		<h6>Latest</h6>
		<ul>
			<li>
				<a href="doc/new.php">Mylar 0.7.0</a>
				<span class="dates">(Sep 29)</span>
			</li>
			<li>
				<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=anywordssubstr&short_desc=%5Bconnector%5D&product=Mylar&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
				Vote</a> for connectors
			</li>
			<!--
			<li>
				<a href="http://www.eclipseplugincentral.com/Web_Links-index-req-ratelink-lid-560.html">
				Comment on Mylar</a> at EPIC
			</li>
			-->
			
			<li>
			 <form method="post" action="Web_Links.html">
						<a href="http://www.eclipseplugincentral.com/Web_Links-index-req-viewlink-cid-587.html">Rate Mylar at EPIC</a>
						<br>
						
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
								</select>

							<input type="hidden" name="ratinglid" value="560">
							<input type="hidden" name="ratinguser" value="outside">
							<input type="hidden" name="req" value="addrating">
							<input type="submit" value="Submit">
				</form>
			</li>
			
			<!--
			<li>
			 <form method="post" action="Web_Links.html">
				<table align="left" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td align="left">
							<a href="http://www.eclipseplugincentral.com/Web_Links-index-req-viewlink-cid-587.html">Rate Mylar at EPIC</a>
						</td>
					</tr>
					<tr><td>
						<table border="0" cellspacing="0" cellpadding="0" align="left">
							<tr><td valign="top">
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
								</select>
							</td>
							<td valign="top">
							<input type="hidden" name="ratinglid" value="560">
							<input type="hidden" name="ratinguser" value="outside">
							<input type="hidden" name="req" value="addrating">
							<input type="submit" value="Submit">
							</td>
							</tr></table>
						</td>
					</tr>
				</table>
				</form>
			</li>
			-->
		</ul> 
	</div> 
EOHTML

?>