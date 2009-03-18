<?php
    $side_vote = <<<EOHTML
		<div class="sideitem">
			<h6>Support Mylyn on EPIC</h6>
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
				</select><input type="hidden" name="ratinglid" value="560"><input type="hidden" name="ratinguser" value="outside"><input type="hidden" name="req" value="addrating">
				<input type="submit" value="Vote">
				</form>
				</div>
		</div>
EOHTML

?>