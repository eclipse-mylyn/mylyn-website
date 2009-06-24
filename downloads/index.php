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

	<div id="rightcolumn">
		$side_vote
		$side_announce
	</div>

	<div style="margin-top:30px; margin-left:40px; width:75%">
    	<p>
        The minimal Mylyn install is a standalone Task List.  Optional Task Repository Connectors integrate the
        Task List with bug/task/issue trackers and project management tools.  
        Bridges focus the user interface on the active task and installing all available bridges is recommended. 
        The preferred way of installing is via 
		<a href="http://wiki.eclipse.org/index.php/Mylyn/FAQ#Installation">Eclipse</a>.
        </p>
    </div>

	<div style="border:none; margin-left:40px; width:75%;">
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
				<td><a href="/mylyn/builds/"><img border=0 src="/mylyn/images/archives.gif"></a></td>
				<td>
					<table border="0" cellpadding="0"> 
						<tr> 
			      			<td><font size=+0><a href="/mylyn/builds">Older Downloads</a></font></td>
						</tr>
						<tr><td>Download archive and support for Eclipse 3.2</td></tr>
					</table>
				</td> 
			</tr> 
		</table>
	</div>
	
	<!-- Release -->
		 <div class="homeitem3col" style="margin-left:40px; width:75%">
			<h3>3.2 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn/FAQ#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3> 
			<br>&nbsp;&nbsp;&nbsp;<a href="http://www.eclipse.org/mylyn/new"><img src="/mylyn/images/star.png"/> New & Noteworthy</a> (Released 2009-06-24). Requires <a href="http://java.sun.com/j2se/1.5.0/download.jsp">JRE 5.0</a>. Supports <a href="http://www.bugzilla.org/">Bugzilla</a> 2.18 and later.				
			<ul> 
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update/mylyn-3.2-e3.4.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4/3.5, <a href="http://www.eclipse.org/downloads/">Galileo Packages</a>)
				</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update/mylyn-3.2-e3.3.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update/e3.3</b>&nbsp;&nbsp;(Eclipse 3.3)
				</li>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update/mylyn-3.2-extras.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update/extras</b>&nbsp;&nbsp;(Eclipse 3.3, 3.4, 3.5)
					<br>
					<font size=-1>Trac 0.9 and 0.10, JIRA 3.4 and later</font>
				</li>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update/mylyn-3.2-incubator.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update/incubator</b>&nbsp;&nbsp;(Eclipse 3.3, 3.4, 3.5)
					<br> 
					<font size=-1>Web Templates Connector, XPlanner 0.7 and later, UI Usage Reporting, UI Experiments</font>
				</li>
			</ul>
		</div>
	
	
		<div class="homeitem3col" style="margin-left:40px; width:75%">
	    	<a name="weekly"></a>
			<h3>3.3 Weekly Builds&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn/FAQ#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3> 
			<br>&nbsp;&nbsp;&nbsp;<a href="http://www.eclipse.org/mylyn/new/weekly.php"> New & Noteworthy</a> Weekly (Wednesdays) builds are production quality, but subject to UI changes.
			<ul> 
				<li>
					<b>download.eclipse.org/tools/mylyn/update/weekly/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4, 3.5, 3.6)
				</li>
				<li>
					<b>download.eclipse.org/tools/mylyn/update/weekly/extras</b>&nbsp;&nbsp;(Eclipse 3.4, 3.5, 3.6)
				</li>
				<li>
					<b>download.eclipse.org/tools/mylyn/update/weekly/incubator</b>&nbsp;&nbsp;(Eclipse 3.5 and 3.4)
				</li>
			</ul>
		</div>
		
		<div class="homeitem3col" style="margin-left:40px; width:75%">
			<h3>WikiText Standalone&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn/FAQ#WikiText"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3> 
			
			<br>&nbsp;&nbsp;&nbsp;Ant tasks and APIs for parsing wiki markup to HTML, Docbook, DITA, and Eclipse Help.				
			<ul>
					<li>
						<a title="Latest Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update/weekly/mylyn-wikitext-standalone-latest.zip">
							<img border=0 src="/mylyn/images/icon-save.gif">
						</a>
						&nbsp;&nbsp;<b>Download WikiText Standalone (latest)</b>
		        	</li>
			</ul>	
		</div>
		
		<!-- Commercial -->
		 <div class="homeitem3col" style="margin-left:40px; width:75%">
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
	
	<!--	
	<div id="rightcolumn" style="padding-right: 20px">
		<div class="sideitem">
				<h6>New Users</h6>
			<p style="padding-left: 5px;">You can download Eclipse with Mylyn in most of the <a href="http://www.eclipse.org/downloads/">Eclipse Bundles</a>, 
				        then look for updates using the sites below.  <br><b>Eclipse 3.2 users</b>: use the <a href="http://www.eclipse.org/mylyn/builds">Mylyn 2.0 release</a>.
				        </p> 
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
		</div>
	</div>
	-->
		

	<div align="homeitem3col" style="width:85%">&nbsp;</div>
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
