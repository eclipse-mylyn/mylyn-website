<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	# 
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Mylyn Download Archives";
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
	
	include("_sideCommon.php");
	include("_sideFeedback.php");
	include("_sideMylarIs.php");
	include("_sideSubscribe.php");
		
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">  
		Back to the <a href="/mylyn/downloads/">Mylyn Downloads Page</a>
		<br>&nbsp;
		<p>All downloads are provided under the terms and conditions of the <a href="/legal/epl/notice.php">Eclipse Foundation
		Software User Agreement</a> unless otherwise specified.</p>

		<br>&nbsp;
		<div class="homeitem3col"> 
			<h3>API Baselines</h3> 
			<ul>
				<li> 
					<a title="Mylyn 3.0.0" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/3.0.0/mylyn-3.0.0-api.zip&r=1">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>Mylyn 3.0.0 API Baseline</b>
				</li>
				<li>
					<a title="Mylyn 2.3.2" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.3.2/mylyn-2.3.2-api.zip&r=1">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>Mylyn 2.3.2 API Baseline</b>
	        	</li>
	        </ul>
		</div>

		<div class="homeitem3col">
			<h3>3.0.1 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/3.0.1/v20080716-2300/mylyn-3.0.1.v20080716-2300-e3.4.zip&r=1">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update-archive/3.0.1/v20080716-2300/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4)
	        	</li>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/3.0.1/v20080716-2300/mylyn-3.0.1.v20080716-2300-e3.3.zip&r=1">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update-archive/3.0.1/v20080716-2300/e3.3</b>&nbsp;&nbsp;(Eclipse 3.3)
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/3.0.1/v20080716-2300/mylyn-3.0.1.v20080716-2300-extras.zip&r=1">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update-archive/3.0.1/v20080716-2300/extras</b>&nbsp;&nbsp;(Eclipse 3.4 and 3.3)
	        		<br>
					<font size=-1>Trac and JIRA Connector</font>
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/3.0.1/v20080716-2300/mylyn-3.0.1.v20080716-2300-incubator.zip&r=1">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update-archive/3.0.1/v20080716-2300/incubator</b>&nbsp;&nbsp;(Eclipse 3.4 and 3.3)
	        		<br>
					<font size=-1>Web Templates Connector, XPlanner Connector, UI Usage Reporting and UI Experiments</font>
	        	</li>
			</ul>	
		</div>

		<div class="homeitem3col">
			<h3>3.0.0 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/3.0.0/v20080619-1900/mylyn-3.0.0.v20080619-1900-e3.4.zip&r=1">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update-archive/3.0.0/v20080619-1900/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4)
	        	</li>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/3.0.0/v20080619-1900/mylyn-3.0.0.v20080619-1900-e3.3.zip&r=1">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update-archive/3.0.0/v20080619-1900/e3.3</b>&nbsp;&nbsp;(Eclipse 3.3)
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/3.0.0/v20080619-1900/mylyn-3.0.0.v20080619-1900-extras.zip&r=1">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update-archive/3.0.0/v20080619-1900/extras</b>&nbsp;&nbsp;(Eclipse 3.4 and 3.3)
	        		<br>
					<font size=-1>Trac and JIRA Connector</font>
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/3.0.0/v20080619-1900/mylyn-3.0.0.v20080619-1900-incubator.zip&r=1">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update-archive/3.0.0/v20080619-1900/incubator</b>&nbsp;&nbsp;(Eclipse 3.4 and 3.3)
	        		<br>
					<font size=-1>Web Templates Connector, XPlanner Connector, UI Usage Reporting and UI Experiments</font>
	        	</li>
			</ul>	
		</div>

		<div class="homeitem3col">
			<h3>2.3.2 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.3.2/v20080402-2100/e3.4/mylyn-2.3.2.v20080402-2100-e3.4.zip&r=1">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update-archive/2.3.2/v20080402-2100/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4M6)
	        	</li>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.3.2/v20080402-2100/e3.3/mylyn-2.3.2.v20080402-2100-e3.3.zip&r=1">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update-archive/2.3.2/v20080402-2100/e3.3</b>&nbsp;&nbsp;(Eclipse 3.3)
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.3.2/v20080402-2100/extras/mylyn-2.3.2.v20080402-2100-extras.zip&r=1">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update-archive/2.3.2/v20080402-2100/extras</b>&nbsp;&nbsp;(Eclipse 3.4M6 and 3.3)
	        		<br>
					<font size=-1>Incubation components and connectors for JIRA, XPlanner and Generic Issue Trackers</font>
	        	</li>
			</ul>	
		</div>

		<div class="homeitem3col">
			<h3>2.3.1 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.3.1/v20080312-1300/e3.4/mylyn-2.3.1.v20080312-1300-e3.4.zip&r=1">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update-archive/2.3.1/v20080312-1300/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4M5)
	        	</li>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.3.1/v20080312-1300/e3.3/mylyn-2.3.1.v20080312-1300-e3.3.zip&r=1">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update-archive/2.3.1/v20080312-1300/e3.3</b>&nbsp;&nbsp;(Eclipse 3.3)
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.3.1/v20080312-1300/extras/mylyn-2.3.1.v20080312-1300-extras.zip&r=1">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update-archive/2.3.1/v20080312-1300/extras</b>&nbsp;&nbsp;(Eclipse 3.4M5 and 3.3)
	        		<br>
					<font size=-1>Incubation components and connectors for JIRA, XPlanner and Generic Issue Trackers</font>
	        	</li>
			</ul>	
		</div>

		<div class="homeitem3col">
			<h3>2.3.0 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.3.0/mylyn-2.3.0-e3.4.zip&r=1">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update-archive/2.3.0/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4M5)
	        	</li>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.3.0/mylyn-2.3.0-e3.3.zip&r=1">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update-archive/2.3.0/e3.3</b>&nbsp;&nbsp;(Eclipse 3.3)
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.3.0/mylyn-2.3.0-extras.zip&r=1">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update-archive/2.3.0/extras</b>&nbsp;&nbsp;(Eclipse 3.4M5 and 3.3)
	        		<br>
					<font size=-1>Incubation components and connectors for JIRA, XPlanner and Generic Issue Trackers</font>
	        	</li>
			</ul>	
		</div>

		<div class="homeitem3col">
			<h3>2.2 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.2.0/mylyn-2.2-e3.4.zip&r=1">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update-archive/2.2.0/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4M5)
	        	</li>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.2.0/mylyn-2.2-e3.3.zip&r=1">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update-archive/2.2.0/e3.3</b>&nbsp;&nbsp;(Eclipse 3.3)
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.2.0/mylyn-2.2-extras.zip&r=1">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update-archive/2.2.0/extras</b>&nbsp;&nbsp;(Eclipse 3.4M5 and 3.3)
	        		<br>
					<font size=-1>Incubation components and connectors for JIRA, XPlanner and Generic Issue Trackers</font>
	        	</li>
			</ul>	
		</div>
		
		<div class="homeitem3col">
			<h3>2.1 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.1.0/mylyn-2.1-e3.4.zip&r=1">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update-archive/2.1.0/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4M2)
	        	</li>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.1.0/mylyn-2.1-e3.3.zip&r=1">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update-archive/2.1.0/e3.3</b>&nbsp;&nbsp;(Eclipse 3.3)
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.1.0/mylyn-2.1-extras.zip&r=1">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update-archive/2.1.0/extras</b>&nbsp;&nbsp;(Eclipse 3.4M2 and 3.3)
	        		<br>
					<font size=-1>Incubation components and connectors for JIRA, XPlanner and Generic Issue Trackers</font>
	        	</li>
			</ul>	
		</div>	
		
		<div class="homeitem3col"> 
			<h3>2.1 Milestones</h3> 
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.1M1/mylyn-2.1M1-e3.4.zip&r=1">
						<img border=0 src="/mylyn/images/icon-save.gif"></a>
					&nbsp;&nbsp;2.1M1: <b>download.eclipse.org/tools/mylyn/update-archive/2.1M1/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4M1 and 3.3)
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.1M1/mylyn-2.1M1-e3.4.zip&r=1">
						<img border=0 src="/mylyn/images/icon-save.gif"></a>
						&nbsp;&nbsp;2.1M1: <b>download.eclipse.org/tools/mylyn/update-archive/2.1M1/extras</b>&nbsp;&nbsp;(Eclipse 3.4M1 and 3.3)
	        		<br>
					<font size=-1>JIRA Connector, Generic Issue Tracker Connector, UI Usage Reporting</font>
	        	</li>
			</ul>	
		</div>
		
		<div class="homeitem3col"> 
			<h3>2.0 Release</h3> 
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.0.0/mylyn-2.0.0-e3.3.zip&r=1">
						<img border=0 src="/mylyn/images/icon-save.gif"></a>
					<!--
	                <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.0.0/mylyn-src-2.0.0-e3.3.zip&r=1">
	                	<img border=0 src="/mylyn/images/icon-source.gif"></a>
	                -->
					&nbsp;&nbsp;2.0.0: <b>download.eclipse.org/tools/mylyn/update-archive/2.0.0/e3.3</b>&nbsp;&nbsp;(Eclipse 3.3)
	        	</li>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.0.0/mylyn-2.0.0-e3.2.zip&r=1">
						<img border=0 src="/mylyn/images/icon-save.gif"></a>
					<!--
	                <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.0.0/mylyn-src-2.0.0-e3.2.zip&r=1">
	                	<img border=0 src="/mylyn/images/icon-source.gif"></a> 
	                -->
					&nbsp;&nbsp;2.0.0: <b>download.eclipse.org/tools/mylyn/update-archive/2.0.0/e3.2</b>&nbsp;&nbsp;(Eclipse 3.2)
	        	</li>
	        	<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.0.0/mylyn-2.0.0-extras.zip&r=1">
						<img border=0 src="/mylyn/images/icon-save.gif"></a>
						&nbsp;&nbsp;2.0.0: <b>download.eclipse.org/tools/mylyn/update-archive/2.0.0/extras</b>&nbsp;&nbsp;(Eclipse 3.3 and 3.2) 
					<br>
					<font size=-1>JIRA Connector, Generic Issue Tracker Connector, UI Usage Reporting</font>
					<br><i>JIRA users: the recommended JIRA Connector versions is 2.1, after installing <a href="http://confluence.atlassian.com/display/JIRAEXT/Mylyn#Mylyn-e3.2">update to that version</a>.</i>
	        	</li>
			</ul>	
		</div>
		
        <div class="homeitem3col">
			<h3>2.0 Milestones</h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.0M3/mylar-site-2.0M3-e3.3.zip&r=1">
						<img border=0 src="/mylyn/images/icon-zip.gif"></a>
                    <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.0M3/mylar-src-2.0M3-e3.3.zip&r=1">
                    	<img border=0 src="/mylyn/images/icon-source.gif"></a>
					2.0M3: <b>download.eclipse.org/tools/mylyn/update-archive/2.0M3/e3.3</b> (Eclipse 3.3M6)
	        	<br> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.0M3/mylar-site-2.0M3-e3.2.zip&r=1">
						<img border=0 src="/mylyn/images/icon-zip.gif"></a>
                    <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.0M3/mylar-src-2.0M3-e3.2.zip&r=1">
                    	<img border=0 src="/mylyn/images/icon-source.gif"></a>
					2.0M3: <b>download.eclipse.org/tools/mylyn/update-archive/2.0M3/e3.2</b> (Eclipse 3.2)
	        	</li>
			</ul>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.0M2/mylar-site-2.0M2-e3.3.zip&r=1">
						<img border=0 src="/mylyn/images/icon-zip.gif"></a>
                    <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.0M2/mylar-src-2.0M2-e3.3.zip&r=1">
                    	<img border=0 src="/mylyn/images/icon-source.gif"></a>
					2.0M2: <b>download.eclipse.org/tools/mylyn/update-archive/2.0M2/e3.3</b> (Eclipse 3.3M6)
	        	<br> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.0M2/mylar-site-2.0M2-e3.2.zip&r=1">
						<img border=0 src="/mylyn/images/icon-zip.gif"></a>
                    <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.0M2/mylar-src-2.0M2-e3.2.zip&r=1">
                    	<img border=0 src="/mylyn/images/icon-source.gif"></a>
					2.0M2: <b>download.eclipse.org/tools/mylyn/update-archive/2.0M2/e3.2</b> (Eclipse 3.2)
	        	</li>
			</ul>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.0M1/mylar-site-2.0M1-e3.3.zip&r=1">
						<img border=0 src="/mylyn/images/icon-zip.gif"></a>
                    <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.0M1/mylar-src-2.0M1-e3.3.zip&r=1">
                    	<img border=0 src="/mylyn/images/icon-source.gif"></a>
					2.0M1: <b>download.eclipse.org/tools/mylyn/update-archive/2.0M1/e3.3</b> (Eclipse 3.3M6)
	        	<br> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.0M1/mylar-site-2.0M1-e3.2.zip&r=1">
						<img border=0 src="/mylyn/images/icon-zip.gif"></a>
                    <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.0M1/mylar-src-2.0M1-e3.2.zip&r=1">
                    	<img border=0 src="/mylyn/images/icon-source.gif"></a>
					2.0M1: <b>download.eclipse.org/tools/mylyn/update-archive/2.0M1/e3.2</b> (Eclipse 3.2)
	        	</li> 
			</ul>
		</div>
        
        <div class="homeitem3col">
			<h3>1.0 Release</h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/1.0.1/mylar-site-1.0.1-e3.3.tgz&r=1">
						<img border=0 src="/mylyn/images/icon-zip.gif"></a>
                    <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/1.0.1/mylar-src-1.0.1-e3.3.zip&r=1">
                    	<img border=0 src="/mylyn/images/icon-source.gif"></a>
					1.0.1: <b>download.eclipse.org/tools/mylyn/update-archive/1.0.1/e3.3</b> (Eclipse 3.3M4)
	        	<br> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/1.0.1/mylar-site-1.0.1-e3.2.tgz&r=1">
						<img border=0 src="/mylyn/images/icon-zip.gif"></a>
                    <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/1.0.1/mylar-src-1.0.1-e3.2.zip&r=1">
                    	<img border=0 src="/mylyn/images/icon-source.gif"></a>
					1.0.1: <b>download.eclipse.org/tools/mylyn/update-archive/1.0.1/e3.2</b> (Eclipse 3.2)
	        	</li>
			</ul>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive0.6/mylar-site-0.6.0-e3.1.tgz&r=1">
						<img border=0 src="/mylyn/images/icon-zip.gif"></a>
                    <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive0.6/mylar-src-0.6.0-e3.1.zip&r=1">
                    	<img border=0 src="/mylyn/images/icon-source.gif"></a>	
					0.6.0: <b>download.eclipse.org/tools/mylyn/update-archive0.6/e3.1</b> (Eclipse 3.1) 
	        	</li>
	        </ul>
	        <ul>
				<li>
					Older: <b>download.eclipse.org/technology/mylar/update-site-archive/0.x.x/e3.x</b>
				</li>
			</ul>
		</div>
 	
 		<!--
        <div class="homeitem3col">
			<h3>Other</h3>
			<ul>
				<li>
					Headless Tasks Framework: <a href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/mylar-lib-2.0M2.zip&r=1">mylar-lib-2.0M2.zip</a>
				</li>
			</ul>
		</div>
		-->
		<p>&nbsp;</p>
	</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
