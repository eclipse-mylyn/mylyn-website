<?php
    $feedbackside = <<<EOHTML
	<div class="sideitem">
		<h6>Feedback</h6>
		<font size=2>
		<!--
		<a href="bugs.php">Vote for connectors</a>
		<br>
		-->
		<form method="post" action="http://www.eclipseplugincentral.com/Web_Links.html">
			<a href="http://www.eclipseplugincentral.com/Web_Links-index-req-viewlink-cid-587.html">Comment via EPIC</a>
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
			<input type="submit" value="Rate">
			</form>
		</font>
	</div> 
EOHTML

?>