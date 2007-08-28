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
        	<div style="float:right; margin-right: 30pt; margin-left: 10pt;"><img src="/mylyn/images/install-overview.gif"/></div>
        		<img style="margin:20px;" src="/mylyn/images/downloads.gif" align="left"/>
				<div>
		        	<p>
			        The minimal Mylyn install is a standalone Task List.  Optional Task Repository Connectors integrate the
			        Task List with bug/task/issue trackers and project management tools.  
			        Bridges focus the user interface on the active task and installing all available bridges is recommended. 
			        The preferred way of installing is via the 
					<a href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Download">Update Manager (instructions available)</a>.
					On Eclipse 3.2 use only the <i>Search for new features..</i> option.
			        </p>			        
    			</div>
	</div>	

    <div class="homeitem3col" style="margin-left:50px; width:93%">
		<h3>Mylyn 2.1 Milestone Update Sites</h3> 
		<ul>
			<li>
				<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update/mylyn-2.1M1-e3.4.zip&r=1">
					<img border=0 src="/mylyn/images/icon-save.gif"></a>
				&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4M1 and 3.3)
        	</li>
			<li> 
				<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update/mylyn-2.1M1-e3.4.zip&r=1">
					<img border=0 src="/mylyn/images/icon-save.gif"></a>
					&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update/e3.4/extras</b>&nbsp;&nbsp;(Eclipse 3.4M1 and 3.3)
        	</li>
		</ul>	
	</div>
	
    <div class="homeitem3col" style="margin-left:50px; width:93%">
		<h3>Mylyn 2.0 Update Sites</h3> 
		<br>&nbsp;&nbsp;&nbsp;Requires: <a href="http://java.sun.com/j2se/1.5.0/download.jsp">JRE 5.0</a>.  Supports: <a href="http://www.bugzilla.org/">Bugzilla</a> 2.18 and later, <a href="http://trac.edgewall.org/">Trac</a> 0.9 and later				
		<ul>
			<li>
				<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update/mylyn-2.0.0-e3.3.zip&r=1">
					<img border=0 src="/mylyn/images/icon-save.gif"></a>
				<!--
                <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update/mylyn-src-2.0.0-e3.3.zip&r=1">
                	<img border=0 src="/mylyn/images/icon-source.gif"></a>
                -->
				&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update/e3.3</b>&nbsp;&nbsp;(Eclipse 3.3)
        	</li>
			<li>
				<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update/mylyn-2.0.0-e3.2.zip&r=1">
					<img border=0 src="/mylyn/images/icon-save.gif"></a>
				<!--
                <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update/mylyn-src-2.0.0-e3.2.zip&r=1">
                	<img border=0 src="/mylyn/images/icon-source.gif"></a> 
                -->
				&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update/e3.2</b>&nbsp;&nbsp;(Eclipse 3.2)
        	</li>
		</ul>	
	</div>

	<div class="homeitem3col" style="margin-left:50px; width:93%">
		<h3>Mylyn 2.0 Extensions</h3>
		<br>&nbsp;&nbsp;&nbsp;For additional features use the following update sites. 
		<ul>
			<li> 
				<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update/mylyn-2.0.0-extras.zip&r=1">
					<img border=0 src="/mylyn/images/icon-save.gif"></a>
					&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update/extras</b>&nbsp;&nbsp;(Eclipse 3.3 and 3.2) 
				<br>
				<font size=-1>JIRA Connector, Generic Issue Tracker Connector, UI Usage Reporting</font>
        	</li>
        	<li>
        		<a href="http://wiki.eclipse.org/index.php/Mylyn_Extensions"><img border=0 src="/mylyn/images/icon-plugin.gif">
        		&nbsp;&nbsp;Third Party Update Sites</a>: additional connectors and bridges 
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
				<td><a href="/mylyn/downloads/builds.php"><img border=0 src="/mylyn/images/archives.gif"></a></td>
				<td>
					<table border="0" cellpadding="0"> 
						<tr> 
			      			<td><font size=+0><a href="/mylyn/downloads/builds.php">Other Builds</a></font></td>
						</tr>
						<tr>
			          		<td>Weekly dev builds and older versions</td>
			          	</tr>
					</table>
				</td> 
			</tr> 
		</table>
		<p>
			&nbsp;
		</p>
	</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
