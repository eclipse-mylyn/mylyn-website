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
        	<div style="float:right; margin-right: 30pt;"><img src="/mylyn/images/install-overview.gif"/></div>
        		<img style="margin:20px;" src="/mylyn/images/downloads.gif" align="left"/>
				<div style="margin-top:30pt;margin-left: 70pt;">
		        	<p>
			        The minimal Mylyn install is a standalone Task List.  Optional Task Repository Connectors integrate the
			        Task List with bug/task/issue trackers and project management tools.  
			        Bridges focus the user interface on the active task and installing all available bridges is recommended. 
			        The preferred way of installing is via the 
					<a href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation">Update Manager (instructions available)</a>.
			        </p>
			        <p>
		        	<b>New users</b>: you can download Eclipse with Mylyn in most of the <a href="http://www.eclipse.org/downloads/">Eclipse Bundles</a>, 
			        then look updates using the sites below.
			        </p>
			        <b>Eclipse 3.2 users</b>: use the <a href="http://www.eclipse.org/mylyn/builds">Mylyn 2.0 release</a>.
			        </p>
				<p>All downloads are provided under the terms and conditions of the <a href="/legal/epl/notice.php">Eclipse Foundation
				Software User Agreement</a> unless otherwise specified.</p>
    			</div>
	</div>		

    <div class="homeitem3col" style="margin-left:40px; width:90%">
		<h3>3.0 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn/User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3> 
		<br>&nbsp;&nbsp;&nbsp;<a href="http://www.eclipse.org/mylyn/new">New & Noteworthy</a> (Released 2008-06-25). Requires <a href="http://java.sun.com/j2se/1.5.0/download.jsp">JRE 5.0</a>. Supports <a href="http://www.bugzilla.org/">Bugzilla</a> (2.18 and later).				
		<ul> 
			<li>
				<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update/mylyn-3.0.0-e3.4.zip&r=1">
					<img border=0 src="/mylyn/images/icon-save.gif">
				</a>
				<b>download.eclipse.org/tools/mylyn/update/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4, <a href="http://www.eclipse.org/epp/ganymede.php">EPP Bundle</a>)
			</li>
			<li> 
				<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update/mylyn-3.0.0-e3.3.zip&r=1">
					<img border=0 src="/mylyn/images/icon-save.gif">
				</a>
				<b>download.eclipse.org/tools/mylyn/update/e3.3</b>&nbsp;&nbsp;(Eclipse 3.3)
			</li>
			<li>
				<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update/mylyn-3.0.0-extras.zip&r=1">
					<img border=0 src="/mylyn/images/icon-save.gif">
				</a>
				<b>download.eclipse.org/tools/mylyn/update/extras</b>&nbsp;&nbsp;(Eclipse 3.3 and 3.4)
				<br>
				<font size=-1>Trac (0.9, 0.10), JIRA (3.3.3 and later)</font>
			</li>
			<li>
				<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update/mylyn-3.0.0-incubator.zip&r=1">
					<img border=0 src="/mylyn/images/icon-save.gif">
				</a>
				<b>download.eclipse.org/tools/mylyn/update/incubator</b>&nbsp;&nbsp;(Eclipse 3.3 and 3.4)
				<br>
				<font size=-1>Web Templates, XPlanner (0.7 and later), UI Usage Reporting, UI Experiments</font>
			</li>
		</ul>
	</div>

    <!--
    <div class="homeitem3col" style="margin-left:40px; width:90%">
		<h3>3.x Weekly Builds&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn/User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3> 
		<br>&nbsp;&nbsp;&nbsp;<a href="http://www.eclipse.org/mylyn/new/new-dev.html">New & Noteworthy</a> (Released every Wednesday).  Weekly builds are production quality, but subject to UI changes.
		<ul> 
			<li>
				<b>download.eclipse.org/tools/mylyn/update/weekly/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4)
			</li>
			<li> 
				<b>download.eclipse.org/tools/mylyn/update/weekly/e3.3</b>&nbsp;&nbsp;(Eclipse 3.3)
			</li>
			<li>
				<b>download.eclipse.org/tools/mylyn/update/weekly/extras</b>&nbsp;&nbsp;(Eclipse 3.3 and 3.4)
				<br>
				<font size=-1>Trac Connector, JIRA Connector</font>
			</li>
			<li>
				<b>download.eclipse.org/tools/mylyn/update/weekly/incubator</b>&nbsp;&nbsp;(Eclipse 3.3 and 3.4)
				<br>
				<font size=-1>Web Templates Connector, XPlanner Connector, UI Usage Reporting, UI Experiments</font>
			</li>
		</ul>
	</div>
	-->
	<div class="homeitem3col" style="margin-left:40px; width:90%">
		<h3>2.3.2 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylar_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3> 
		
		<br>&nbsp;&nbsp;&nbsp;<a href="http://www.eclipse.org/mylyn/new">New & Noteworthy</a> (Released 2008-03-12). Requires <a href="http://java.sun.com/j2se/1.5.0/download.jsp">JRE 5.0</a>. Supports <a href="http://www.bugzilla.org/">Bugzilla</a> 2.18 and later, <a href="http://trac.edgewall.org/">Trac</a> 0.9 and later.				
		<ul>
			<li>
				<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update/mylyn-2.3.2-e3.4.zip&r=1">
					<img border=0 src="/mylyn/images/icon-save.gif">
				</a>
				&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4M6)
        	</li>
			<li>
				<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update/mylyn-2.3.2-e3.3.zip&r=1">
					<img border=0 src="/mylyn/images/icon-save.gif">
				</a>
				&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update/e3.3</b>&nbsp;&nbsp;(Eclipse 3.3)
        	</li>
			<li> 
				<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update/mylyn-2.3.2-extras.zip&r=1">
					<img border=0 src="/mylyn/images/icon-save.gif">
				</a>
				&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update/extras</b>&nbsp;&nbsp;(Eclipse 3.4M6 and 3.3)
        		<br>
				<font size=-1>Incubation components and connectors for JIRA, XPlanner and Generic Issue Trackers</font>
        	</li>
		</ul>	
	</div>
	
	<div class="homeitem3col" style="margin-left:40px; width:90%">
		<h3>Extensions</h3>
		<!--
		<br>&nbsp;&nbsp;&nbsp;For additional features use the following update sites, noting the feature descriptions before installing.
		-->
		<ul>
        	<li>
        		<a href="http://wiki.eclipse.org/index.php/Mylyn_Extensions"><img border=0 src="/mylyn/images/icon-plugin.gif">
        		&nbsp;&nbsp;Third Party Update Sites</a>: additional Connectors and Bridges 
			</li>
		</ul>
	</div>


	<div align="homeitem3col" style="width:95%">&nbsp;</div>  

	<div class="homeitem3col" style="width:95%; border:none; margin-left:0px">
		<table border="0" cellpadding="3"> 
			<tr>
				<td width=15></td>
				<td><a href="/mylyn/bugs"><img border=0 src="/mylyn/images/bug-report.png"></a></td>
				<td>
					<table border="0" cellpadding="0">
						<tr>
			      			<td><font size=+0><a href="/mylyn/bugs">Bugs</a></font></td> 
						</tr>
						<tr>
			          		<td>Report bugs and enhancement requests</td>
			          	</tr>
					</table>
				</td>
				<td width=20></td> 
				<td><a href="/mylyn/builds/"><img border=0 src="/mylyn/images/archives.gif"></a></td>
				<td>
					<table border="0" cellpadding="0"> 
						<tr> 
			      			<td><font size=+0><a href="/mylyn/builds">Archives and other builds</a></font></td>
						</tr>
						<tr>
			          		<td>Mylyn 2.0 and older versions, Sandbox</td> 
			          	</tr>
					</table>
				</td> 
			</tr> 
		</table>
		<br>&nbsp;
	</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
