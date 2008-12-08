<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Mylyn Downloads";
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
	
	include("/mylyn/_sideCommon.php");
	include("/mylyn/_sideFeedback.php");
	include("/mylyn/_sideSubscribe.php");
		
$html = <<<EOHTML


	
	
	<div style="margin-left:10px; margin-top:20pt;">
        	<!--<div style="float:right; margin-right: 30pt;"><img src="/mylyn/images/install-overview.gif"/></div>-->
        		<!-- <img style="margin:20px;" src="/mylyn/images/downloads.gif" align="left"/> -->
				<div style="margin-top:30pt;margin-left: 40pt; width: 70%">
		        	<p>
			        The minimal Mylyn install is a standalone Task List.  Optional Task Repository Connectors integrate the
			        Task List with bug/task/issue trackers and project management tools.  
			        Bridges focus the user interface on the active task and installing all available bridges is recommended. 
			        The preferred way of installing is via the 
					<a href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation">Update Manager (instructions available)</a>.
			        </p>
			        <p>
					</font>
    			</div>
    			
				
					<div class="sideitem" style="clear: right; float: right;">
					<h6>New Users</h6>
					<p style="padding-left: 5px;">You can download Eclipse with Mylyn in most of the <a href="http://www.eclipse.org/downloads/">Eclipse Bundles</a>, 
					        then look for updates using the sites below.  <br><b>Eclipse 3.2 users</b>: use the <a href="http://www.eclipse.org/mylyn/builds">Mylyn 2.0 release</a>.
					        </p>
					</div>
					
					<div class="sideitem" style="clear: right; float: right;"> 
					<h6>License</h6>
					<p style="padding-left: 5px;">All downloads are provided under the terms and conditions of the <a href="/legal/epl/notice.php">Eclipse Foundation
			Software User Agreement</a> unless otherwise specified.</p>
					</div>
					
				<div class="sideitem" style="clear: right; float: right;">
				<h6><img border=0 src="/mylyn/images/icon-presentation.gif"> Support Mylyn</h6>
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
					</form></p>
				</div>
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
						<tr><td>Community and commercial support resources</td></tr>
					</table>
				</td>
				<td><a href="/mylyn/builds/"><img border=0 src="/mylyn/images/archives.gif"></a></td>
				<td>
					<table border="0" cellpadding="0"> 
						<tr> 
			      			<td><font size=+0><a href="/mylyn/builds">Older Downloads</a></font></td>
						</tr>
						<tr><td>Eclipse 3.2 and 3.3 based distributions</td></tr>
					</table>
				</td> 
			</tr> 
		</table>
	</div>
	
	<!-- Release -->
		 <div class="homeitem3col" style="margin-left:40px; width:75%">
			<h3>3.0.3 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn/User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3> 
			<br>&nbsp;&nbsp;&nbsp;<a href="http://www.eclipse.org/mylyn/new">New & Noteworthy</a> (Released 2008-10-15). Requires <a href="http://java.sun.com/j2se/1.5.0/download.jsp">JRE 5.0</a>. Supports <a href="http://www.bugzilla.org/">Bugzilla</a> 2.18 and later.				
			<ul> 
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update/mylyn-3.0.3-e3.4.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4, <a href="http://www.eclipse.org/epp/ganymede.php">EPP Packages</a>)
				</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update/mylyn-3.0.3-e3.3.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update/e3.3</b>&nbsp;&nbsp;(Eclipse 3.3)
				</li>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update/mylyn-3.0.3-extras.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update/extras</b>&nbsp;&nbsp;(Eclipse 3.3 and 3.4)
					<br>
					<font size=-1>Trac 0.9 and 0.10, JIRA 3.3.3 and later</font>
				</li>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update/mylyn-3.0.3-incubator.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update/incubator</b>&nbsp;&nbsp;(Eclipse 3.3 and 3.4)
					<br> 
					<font size=-1>Web Templates (Generic Web Connector), XPlanner 0.7 and later, UI Usage Reporting, UI Experiments</font>
				</li>
			</ul>
		</div>
	
	
		<div class="homeitem3col" style="margin-left:40px; width:75%">
	    	<a name="weekly"></a>
			<h3>3.x Weekly Builds&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn/User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3> 
			<br>&nbsp;&nbsp;&nbsp;<a href="http://www.eclipse.org/mylyn/new/new-weekly.html">New & Noteworthy</a> Weekly (Wednesdays) builds are production quality, but subject to UI changes.
			<ul> 
				<li>
					<b>download.eclipse.org/tools/mylyn/update/weekly/e3.4</b>&nbsp;&nbsp;(Eclipse 3.5 and 3.4)
				</li>
				<li> 
					<b>download.eclipse.org/tools/mylyn/update/weekly/e3.3</b>&nbsp;&nbsp;(Eclipse 3.3)
				</li>
				<li>
					<b>download.eclipse.org/tools/mylyn/update/weekly/extras</b>&nbsp;&nbsp;(Eclipse 3.5, 3.4 and 3.3)
				</li>
				<li>
					<b>download.eclipse.org/tools/mylyn/update/weekly/incubator</b>&nbsp;&nbsp;(Eclipse 3.5, 3.4 and 3.3)
				</li>
			</ul>
		</div>
		
		<div class="homeitem3col" style="margin-left:40px; width:75%">
			<h3>WikiText Stand-Alone (Incubation)&nbsp;<a title="More Info" href="http://wiki.eclipse.org/Mylyn/Incubator/WikiText"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3> 
			
			<br>&nbsp;&nbsp;&nbsp;Ant tasks and APIs for parsing wiki markup to HTML, Docbook, DITA, and Eclipse Help.				
			<ul>
					<li>
						<a title="Latest Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update/weekly/mylyn-wikitext-standalone-latest_incubation.zip">
							<img border=0 src="/mylyn/images/icon-save.gif">
						</a>
						&nbsp;&nbsp;<b>Download Wikitext Standalone (latest)</b>
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
				      			<td><font size=+0><a href="http://tasktop.com">Tasktop</a></font></td> 
							</tr>
							<tr><td>Numerous connectors and productivity features, supported by the creators of Mylyn.</td></tr>
						</table>
					</td>
					<td><a href="http://www.codegear.com/products/jbuilder"><img border=0 src="/mylyn/images/embarcadero.png"></a></td>
					<td>&nbsp;</td>
					<td>
						<table border="0" cellpadding="0"> 
							<tr> 
				      			<td><font size=+0><a href="http://www.codegear.com/products/jbuilder">JBuilder</a></font></td>
							</tr>
							<tr><td>Includes the XPlanner connector, supported by Embarcadero.</td></tr>
						</table>
					</td> 
				</tr> 
			</table>
		</div>
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
		<h6><img border=0 src="/mylyn/images/icon-presentation.gif"> Support Mylyn</h6>
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
			</form></p>
		</div>
	</div>
	-->
		

	<!--<div align="homeitem3col" style="width:85%">&nbsp;</div>--> 
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
