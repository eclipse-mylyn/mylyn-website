<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Mylyn Downloads";
	$pageKeywords	= "Mylyn, Eclipse";
	$pageAuthor		= "Mik Kersten";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	
	include("../_sideBars.php");
		
$html = <<<EOHTML
<div class="maincontent">
  <div id="midcolumn">
	  <div>
    	<p>
        The minimal Mylyn install is a standalone Task List.  Optional Task Repository Connectors integrate the
        Task List with bug/task/issue trackers and project management tools.  
        Bridges focus the user interface on the active task and installing all available bridges is recommended. 
        The preferred way of installing is via 
		<a href="http://wiki.eclipse.org/index.php/Mylyn/FAQ#Installation">Eclipse</a>.
        </p>
    </div>

	<div>
		<table border="0" cellpadding="3"> 
			<tr>
				<td><a href="http://wiki.eclipse.org/index.php/Mylyn_Extensions"><img border=0 src="/mylyn/images/plugin.png"></a></td>
				<td>
				<table border="0" cellpadding="0">
						<tr>
			      			<td><font size=+0><a href="http://wiki.eclipse.org/index.php/Mylyn_Extensions">Extensions</a></font></td> 
						</tr>
						<tr><td>Additional Connectors and Bridges</td></tr>
					</table>
				</td>
				<td><a href="/mylyn/support"><img border=0 src="/mylyn/images/bug-report.png"></a></td>
				<td>
					<table border="0" cellpadding="0">
						<tr>
			      			<td><font size=+0><a href="/mylyn/support">Support</a></font></td> 
						</tr>
						<tr><td>Community and commercial support</td></tr>
					</table>
				</td>
				<td><a href="/mylyn/downloads/archive.php"><img border=0 src="/mylyn/images/archives.gif"></a></td>
				<td>
					<table border="0" cellpadding="0"> 
						<tr> 
			      			<td><span style="white-space: nowrap"><font size=+0><a href="/mylyn/downloads/archive.php">Older Downloads</a></font></span></td>
						</tr>
						<tr><td>Download archive and support for Eclipse 3.7, 3.6, 3.5, 3.4, 3.3 and 3.2</td></tr>
					</table>
				</td> 
			</tr> 
		</table>
	</div>
	
	<!-- Release -->
		 <div class="homeitem3col">
			<h3>3.13 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn/FAQ#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3> 
			<br>&nbsp;&nbsp;&nbsp;<a href="http://www.eclipse.org/mylyn/new"><img src="/mylyn/images/star.png"/> New & Noteworthy</a> (2014-06-25). Requires <a href="http://www.oracle.com/technetwork/java/">Java SE 6</a> or later. Supports <a href="http://www.bugzilla.org/" target="_new">Bugzilla</a>, <a href="http://trac.edgewall.org/" target="_new">Trac</a>, <a href="http://hudson-ci.org/" target="_new">Hudson</a>, <a href="http://jenkins-ci.org/" target="_new">Jenkins</a> and <a href="http://code.google.com/p/gerrit/" target="_new">Gerrit</a>.
			<ul> 
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.13.0/v20140908-2330/mylyn-3.13.0.v20140908-2330.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b><font color="#666666">http://</font>download.eclipse.org/mylyn/releases/latest</b>&nbsp;&nbsp;(Eclipse 3.8, 4.3 and 4.4)
				</li>
			</ul>
		</div>

		<div class="homeitem3col">
	    	<a name="weekly"></a>
			<h3>Snapshot Builds&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn/FAQ#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3> 
			<br>&nbsp;&nbsp;&nbsp;<a href="http://www.eclipse.org/mylyn/new/weekly.php">New & Noteworthy</a> Weekly builds are production quality, but subject to UI changes.
			<ul> 
				<li>
					<!--
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/snapshots/weekly/mylyn-latest.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					-->
					&nbsp;&nbsp;<b><font color="#666666">http://</font>download.eclipse.org/mylyn/snapshots/weekly</b>&nbsp;&nbsp;(Eclipse 4.3 or later)
				</li>
				<li>
					<!--
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/snapshots/weekly/mylyn-latest-incubator.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					-->
					&nbsp;&nbsp;<b><font color="#666666">http://</font>download.eclipse.org/mylyn/incubator/3.13</b>&nbsp;&nbsp;(Eclipse 4.3 or later)
				</li>
			</ul>
			<br>&nbsp;&nbsp;&nbsp;<a href="http://wiki.eclipse.org/Mylyn/Repositories">Additional Repository Locations</a>
		</div>

		<div class="homeitem3col">
			<h3>WikiText Standalone&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn/FAQ#WikiText"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3> 
			
			<br>&nbsp;&nbsp;&nbsp;Ant tasks and APIs for parsing wiki markup to HTML, Docbook, DITA, and Eclipse Help.				
			<ul>
					<li>
						<a title="Latest Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/snapshots/nightly/docs/wikitext-standalone-latest.zip">
							<img border=0 src="/mylyn/images/icon-save.gif">
						</a>
						&nbsp;&nbsp;<b>Download WikiText Standalone (latest)</b>
		        	</li>
			</ul>	
		</div>
		
		<!-- Commercial -->
		 <div class="homeitem3col">
				<h3>Commercial Distributions</h3> 
				<table border="0" cellpadding="3"> 
				<tr>
					<td><a href="http://tasktop.com"><img border=0 src="/mylyn/images/tasktop50px.png"></a></td>
					<td>
					<table border="0" cellpadding="0">
							<tr>
				      			<td><font size=+0><a href="http://tasktop.com">Tasktop<img border="0" src="/mylyn/images/external-link.png"></a></font></td> 
							</tr>
							<tr><td>Numerous connectors and productivity features, supported by the creators of Mylyn. Free version available.</td></tr>
						</table>
					</td>
				</tr> 
			</table>
		</div>
		

	<!--
	<div align="center">		
		<font color="#444444">All downloads are provided under the terms and conditions of the <a href="/legal/epl/notice.php">Eclipse Foundation
					Software User Agreement</a> unless otherwise specified.</font>
	</div>
	-->
	</div>
	<div id="rightcolumn">
	  $side_vote
		$side_announce
		<!--
		<div class="sideitem">
		  <h6>New Users</h6>
			<p style="padding-left: 5px;">You can download Eclipse with Mylyn in most of the <a href="http://www.eclipse.org/downloads/">Eclipse Bundles</a>, 
			then look for updates using the sites below.  <br><b>Eclipse 3.2 users</b>: use the <a href="http://www.eclipse.org/mylyn/builds">Mylyn 2.0 release</a>.</p> 
		</div>
		<div class="sideitem">
			<h6>License</h6>
			<p style="padding-left: 5px;">All downloads are provided under the terms and conditions of the <a href="/legal/epl/notice.php">Eclipse Foundation
			Software User Agreement</a> unless otherwise specified.</p>
		</div>
		<div class="sideitem">
			<h6>Support Mylyn</h6>
			<p style="padding-left: 5px; text-align: center;"><form method="post" action="http://www.eclipseplugincentral.com/Web_Links.html">
			<a href="http://www.eclipseplugincentral.com/Web_Links-index-req-viewlink-cid-587.html">
			Vote on EPIC</a><br>
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
			</select>&nbsp;<input type="hidden" name="ratinglid" value="560"><input type="hidden" name="ratinguser" value="outside"><input type="hidden" name="req" value="addrating"><input type="submit" value="Vote">
			</form><br>&nbsp;</p>
		</div>-->
	</div>
</div>
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
