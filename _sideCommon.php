<?php
    $sideCommon = <<<EOHTML
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Support Mylyn</h6>
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
				</select>&nbsp;<input type="hidden" name="ratinglid" value="560"><input type="hidden" name="ratinguser" value="outside"><input type="hidden" name="req" value="addrating"><input type="submit" value="Vote on EPIC">
				</form>
		</div>
		</div>    

		<div class="sideitem">
			<h6>Announce List</h6>
			 <ul><li>
				<a href="http://dev.eclipse.org/mailman/listinfo/mylyn-announce">Get notified</a> of Mylyn releases.
			  </li></ul>
		</div>    
	</div>
EOHTML

?>