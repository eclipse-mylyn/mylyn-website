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
        <div align="left">
	        <table border="0">
	        	<tr>
	        		<td valign="top"><p>
			        <img src="images/feature.gif">
			       		Archive of previous Eclipse Mylar releases.
			        </td>
			    </tr>
			</table>
		</div>
        <div class="homeitem3col">
			<h3>2.0M2 Update Sites <a title="More Info" href="http://wiki.eclipse.org/index.php/Mylar_User_Guide#Installation"><img border=0 src="images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/technology/mylar/update-site/mylar-site-2.0M2-e3.3.zip&r=1">
						<img border=0 src="images/icon-zip.gif"></a>
                    <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/technology/mylar/update-site/mylar-src-2.0M2-e3.3.zip&r=1">
                    	<img border=0 src="images/icon-source.gif"></a>
					<b>http://download.eclipse.org/technology/mylar/update-site/e3.3</b> (Eclipse 3.3M6)
	        	</li>
			</ul>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/technology/mylar/update-site/mylar-site-2.0M2-e3.2.zip&r=1">
						<img border=0 src="images/icon-zip.gif"></a>
                    <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/technology/mylar/update-site/mylar-src-2.0M2-e3.2.zip&r=1">
                    	<img border=0 src="images/icon-source.gif"></a>
					<b>http://download.eclipse.org/technology/mylar/update-site/e3.2</b> (Eclipse 3.2)
	        	</li>
			</ul>
		</div>
        
        <div class="homeitem3col">
			<h3>1.0 Update Sites</h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/technology/mylar/update-site/1.0/mylar-site-1.0.1-e3.3.tgz&r=1">
						<img border=0 src="images/icon-zip.gif"></a>
                    <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/technology/mylar/update-site/1.0/mylar-src-1.0.1-e3.3.zip&r=1">
                    	<img border=0 src="images/icon-source.gif"></a>
					http://download.eclipse.org/technology/mylar/update-site/1.0/e3.3 (Eclipse 3.3M4)
	        	</li>
			</ul>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/technology/mylar/update-site/1.0/mylar-site-1.0.1-e3.2.tgz&r=1">
						<img border=0 src="images/icon-zip.gif"></a>
                    <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/technology/mylar/update-site/1.0/mylar-src-1.0.1-e3.2.zip&r=1">
                    	<img border=0 src="images/icon-source.gif"></a>
					http://download.eclipse.org/technology/mylar/update-site/1.0/e3.2 (Eclipse 3.2)
	        	</li>
			</ul>
		</div>

        <div class="homeitem3col">
			<h3>0.x Archive Sites</h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/technology/mylar/update-site/0.6/mylar-site-0.6.0-e3.1.tgz&r=1">
						<img border=0 src="images/icon-zip.gif"></a>
                    <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/technology/mylar/update-site/0.6/mylar-src-0.6.0-e3.1.zip&r=1">
                    	<img border=0 src="images/icon-source.gif"></a>	
					0.6.0: http://download.eclipse.org/technology/mylar/update-site/0.6/e3.1 (Eclipse 3.1) 
	        	</li>
				<li>Older: http://download.eclipse.org/technology/mylar/update-site-archive/0.x.x/e3.x</li>
			</ul>
		</div>
 
        <div class="homeitem3col">
			<h3>Dev Builds <a title="More Info" href="http://wiki.eclipse.org/index.php/Mylar_User_Guide#Installation"><img border=0 src="images/icon-help.gif"></a></h3>
			<ul>
				<li>
					3.3M7: http://download.eclipse.org/technology/mylar/update-site/dev/e3.3
				</li>
				<li>
					3.2: http://download.eclipse.org/technology/mylar/update-site/dev/e3.2
				</li>
				<li>Headless Tasks Framework: <a href="http://www.eclipse.org/downloads/download.php?file=/technology/mylar/update-site/mylar-lib-2.0M2.zip&r=1">mylar-lib-2.0M2.zip</a>
			</ul>
		</div>

       	<div align="left">
			<b>Supported platforms</b>: <a href="http://java.sun.com/j2se/1.5.0/download.jsp">JRE 5.0</a> or later required.
			<br>
		    <b>Supported repositories</b>: 
		    <a href="http://www.bugzilla.org/">Bugzilla</a> 2.18 and later, <a href="http://trac.edgewall.org/">Trac</a> 0.9 and later, <a href="http://www.atlassian.com/software/jira/">JIRA</a> 3.3.3 and later.
		</div> 
		<p>&nbsp;</p>
	</div>

	<div id="rightcolumn">
		$commonside
		$feedbackside
		$sideSubscribe
	</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
