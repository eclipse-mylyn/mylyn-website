<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	# 
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Mylar Download Archives";
	$pageKeywords	= "Mylar, Eclipse";
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
	
		<div class="homeitem3col">
			<h3>2.2 Weekly Build Update Sites<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylar_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<br><i>Weekly builds are production quality, but subject to UI changes.</i>
			<ul>
				<li>
					<b>download.eclipse.org/tools/mylyn/update/weekly/e3.3</b>&nbsp;&nbsp;(Eclipse 3.3)
				</li>
				<li>
					<b>download.eclipse.org/tools/mylyn/update/weekly/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4)
				</li>
				<li>
					<b>download.eclipse.org/tools/mylyn/update/weekly/extras</b>&nbsp;&nbsp;(Eclipse 3.3 and 3.4)
				</li>
				<!--
					<li>Headless Tasks Framework: <a href="http://www.eclipse.org/downloads/download.php?file=/technology/mylar/update-site/mylar-lib-2.0M3.zip&r=1">mylar-lib-2.0M3.zip</a>
				-->
			</ul>
		</div>

		<!--
		<div class="homeitem3col">
			<h3>Dev Build Sites<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylar_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<b>download.eclipse.org/tools/mylyn/update/dev/e3.3</b>&nbsp;&nbsp;(Eclipse 3.3)
					<br><i>Dev builds are production quality, but subject to UI changes.</i>
				</li>
				<li>
					<b>download.eclipse.org/tools/mylyn/update/dev/extras</b>&nbsp;&nbsp;(Eclipse 3.3)
				</li>
			</ul>
		</div>
		-->
		
	    <div class="homeitem3col" style="margin-left:40px; width:90%">
			<h3>2.1 Milestone Update Sites</h3> 
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update/milestone/mylyn-2.1M1-e3.4.zip&r=1">
						<img border=0 src="/mylyn/images/icon-save.gif"></a>
					&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update/milestone/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4M1 and 3.3)
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update/milestone/mylyn-2.1M1-e3.4.zip&r=1">
						<img border=0 src="/mylyn/images/icon-save.gif"></a>
						&nbsp;&nbsp;<b>download.eclipse.org/tools/mylyn/update/milestone/extras</b>&nbsp;&nbsp;(Eclipse 3.4M1 and 3.3)
	        		<br>
					<font size=-1>JIRA Connector, Generic Issue Tracker Connector, UI Usage Reporting</font>
	        	</li>
			</ul>	
		</div>
		
        <div class="homeitem3col">
			<h3>2.0 Update Sites Archives<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylar_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.0M3/mylar-site-2.0M3-e3.3.zip&r=1">
						<img border=0 src="/mylyn/images/icon-zip.gif"></a>
                    <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.0M3/mylar-src-2.0M3-e3.3.zip&r=1">
                    	<img border=0 src="/mylyn/images/icon-source.gif"></a>
					<b>2.0M3: download.eclipse.org/tools/mylyn/update-archive/2.0M3/e3.3</b> (Eclipse 3.3M6)
	        	<br> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.0M3/mylar-site-2.0M3-e3.2.zip&r=1">
						<img border=0 src="/mylyn/images/icon-zip.gif"></a>
                    <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.0M3/mylar-src-2.0M3-e3.2.zip&r=1">
                    	<img border=0 src="/mylyn/images/icon-source.gif"></a>
					<b>2.0M3: download.eclipse.org/tools/mylyn/update-archive/2.0M3/e3.2</b> (Eclipse 3.2)
	        	</li>
			</ul>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.0M2/mylar-site-2.0M2-e3.3.zip&r=1">
						<img border=0 src="/mylyn/images/icon-zip.gif"></a>
                    <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.0M2/mylar-src-2.0M2-e3.3.zip&r=1">
                    	<img border=0 src="/mylyn/images/icon-source.gif"></a>
					<b>2.0M2: download.eclipse.org/tools/mylyn/update-archive/2.0M2/e3.3</b> (Eclipse 3.3M6)
	        	<br> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.0M2/mylar-site-2.0M2-e3.2.zip&r=1">
						<img border=0 src="/mylyn/images/icon-zip.gif"></a>
                    <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.0M2/mylar-src-2.0M2-e3.2.zip&r=1">
                    	<img border=0 src="/mylyn/images/icon-source.gif"></a>
					<b>2.0M2: download.eclipse.org/tools/mylyn/update-archive/2.0M2/e3.2</b> (Eclipse 3.2)
	        	</li>
			</ul>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.0M1/mylar-site-2.0M1-e3.3.zip&r=1">
						<img border=0 src="/mylyn/images/icon-zip.gif"></a>
                    <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.0M1/mylar-src-2.0M1-e3.3.zip&r=1">
                    	<img border=0 src="/mylyn/images/icon-source.gif"></a>
					<b>2.0M1: download.eclipse.org/tools/mylyn/update-archive/2.0M1/e3.3</b> (Eclipse 3.3M6)
	        	<br> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.0M1/mylar-site-2.0M1-e3.2.zip&r=1">
						<img border=0 src="/mylyn/images/icon-zip.gif"></a>
                    <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/2.0M1/mylar-src-2.0M1-e3.2.zip&r=1">
                    	<img border=0 src="/mylyn/images/icon-source.gif"></a>
					<b>2.0M1: download.eclipse.org/tools/mylyn/update-archive/2.0M1/e3.2</b> (Eclipse 3.2)
	        	</li> 
			</ul>
		</div>
        
        <div class="homeitem3col">
			<h3>1.0 Update Site Archives</h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/1.0.1/mylar-site-1.0.1-e3.3.tgz&r=1">
						<img border=0 src="/mylyn/images/icon-zip.gif"></a>
                    <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/1.0.1/mylar-src-1.0.1-e3.3.zip&r=1">
                    	<img border=0 src="/mylyn/images/icon-source.gif"></a>
					<b>1.0.1: download.eclipse.org/tools/mylyn/update-archive/1.0.1/e3.3</b> (Eclipse 3.3M4)
	        	<br> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/1.0.1/mylar-site-1.0.1-e3.2.tgz&r=1">
						<img border=0 src="/mylyn/images/icon-zip.gif"></a>
                    <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive/1.0.1/mylar-src-1.0.1-e3.2.zip&r=1">
                    	<img border=0 src="/mylyn/images/icon-source.gif"></a>
					<b>1.0.1: download.eclipse.org/tools/mylyn/update-archive/1.0.1/e3.2</b> (Eclipse 3.2)
	        	</li>
			</ul>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive0.6/mylar-site-0.6.0-e3.1.tgz&r=1">
						<img border=0 src="/mylyn/images/icon-zip.gif"></a>
                    <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archive0.6/mylar-src-0.6.0-e3.1.zip&r=1">
                    	<img border=0 src="/mylyn/images/icon-source.gif"></a>	
					<b>0.6.0: download.eclipse.org/tools/mylyn/update-archive0.6/e3.1</b> (Eclipse 3.1) 
	        	</li>
	        </ul>
	        <ul>
				<li>
					<b>Older: download.eclipse.org/technology/mylar/update-site-archive/0.x.x/e3.x</b>
				</li>
			</ul>
		</div>
 
        <div class="homeitem3col">
			<h3>Other <a title="More Info" href="http://wiki.eclipse.org/index.php/Mylar_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					Headless Tasks Framework: <a href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update-archivemylar-lib-2.0M2.zip&r=1">mylar-lib-2.0M2.zip</a>
				</li>
			</ul>
		</div>
		<p>&nbsp;</p>
	</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
