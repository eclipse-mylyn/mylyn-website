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

<div id="midcolumn" style="width:93%">
        <div align="left">
	        <table border="0"> 
	        	<tr>
	        		<td valign="top">
	        			<img src="/mylyn/images/downloads.gif">
	        		</td>
			        <td>
				        The minimal Mylyn install is a standalone Task List.  <a href="start.php">Connectors</a> integrate the
				        Task List with bug/task/issue repositories, and the Focused UI reduces information overload by focusing
				        Eclipse views and editors on task context.  We recommend that you use the
				        Eclipse Update Manager to <a href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Download_Mylyn">install Mylyn</a>.
						Use only the <i>USearch for new features..</i>option when installing with Eclispe 3.2.
				    </td>
				</tr>
				<tr>
					<td colspan=2>  
				        <p><a href="http://wiki.eclipse.org/index.php/Mylyn_Extensions">See the Mylyn Extensions Page</a> for additional downloads.
				        New to Eclipse?  Get <a href="http://java.sun.com/javase/downloads/index.jsp">Java</a>, then 
				        install <a href="http://download.eclipse.org/eclipse/downloads/drops/R-3.2.1-200609210945/">Eclipse 3.2</a>
				        and use <i>Help -> Software Updates -> Search for new..</i> with the update site listed below.
			        </td>
			    </tr>
			</table>
		</div>
        <div class="homeitem">
			<h3>2.0 Update Sites</h3> 
			<br>&nbsp;&nbsp;Requirements: <a href="http://java.sun.com/j2se/1.5.0/download.jsp">JRE 5.0</a>, <a href="http://www.bugzilla.org/">Bugzilla</a> 2.18 and later, <a href="http://trac.edgewall.org/">Trac</a> 0.9 and later				
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update/mylyn-2.0.0-e3.3.zip&r=1">
						<img border=0 src="/mylyn/images/icon-save.gif"></a>
					<!--
                    <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update/mylyn-src-2.0.0-e3.3.zip&r=1">
                    	<img border=0 src="/mylyn/images/icon-source.gif"></a>
                    -->
					<b>download.eclipse.org/tools/mylyn/update/e3.3</b> (Eclipse 3.3)
	        	</li>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update/mylyn-2.0.0-e3.2.zip&r=1">
						<img border=0 src="/mylyn/images/icon-save.gif"></a>
					<!--
                    <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/update/mylyn-src-2.0.0-e3.2.zip&r=1">
                    	<img border=0 src="/mylyn/images/icon-source.gif"></a> 
                    -->
					<b>download.eclipse.org/tools/mylyn/update/e3.2</b> (Eclipse 3.2)
	        	</li>
			</ul>	
		</div>
		<div class="homeitem">
			<h3>Extras</h3>
			<ul>
				<li> 
					<b>download.eclipse.org/tools/mylyn/update/extras</b>
					<br>
					JIRA Connector, Generic Issue Tracker Connector, UI Usage Reporting
	        	</li>
			</ul>
			<!--
			<h3>2.0M3 Update Sites<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/technology/mylar/update-site/mylar-site-2.0M3-e3.3.zip&r=1">
						<img border=0 src="/mylyn/images/icon-zip.gif"></a>
                    <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/technology/mylar/update-site/mylar-src-2.0M3-e3.3.zip&r=1">
                    	<img border=0 src="/mylyn/images/icon-source.gif"></a>
					<b>http://download.eclipse.org/technology/mylar/update-site/e3.3</b> (Eclipse 3.3RC)
	        	</li>
			</ul>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/technology/mylar/update-site/mylar-site-2.0M3-e3.2.zip&r=1">
						<img border=0 src="/mylyn/images/icon-zip.gif"></a>
                    <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/technology/mylar/update-site/mylar-src-2.0M3-e3.2.zip&r=1">
                    	<img border=0 src="/mylyn/images/icon-source.gif"></a>
					<b>http://download.eclipse.org/technology/mylar/update-site/e3.2</b> (Eclipse 3.2)
	        	</li>
			</ul>
		-->
		</div>
 
 		<!--
        <div class="homeitem3col">
			<h3>Dev Builds <a title="More Info" href="http://wiki.eclipse.org/index.php/Mylar_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					3.3M7: http://download.eclipse.org/technology/mylar/update-site/dev/e3.3
				</li>
				<li>
					3.2: http://download.eclipse.org/technology/mylar/update-site/dev/e3.2 
				</li>
				<li>Headless Tasks Framework: <a href="http://www.eclipse.org/downloads/download.php?file=/technology/mylar/update-site/mylar-lib-2.0M3.zip&r=1">mylar-lib-2.0M3.zip</a>
			</ul>
		</div>
		-->

		<table border="0" cellpadding="5">
			<tr height=9>	 
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
				<td><a href="/mylyn/downloads/archive.php"><img border=0 src="/mylyn/images/archives.gif"></a></td>
				<td>
					<table border="0" cellpadding="0"> 
						<tr>
		          			<td><font size=+0><a href="/mylyn/downloads/archive.php">Archives</a></font></td>
						</tr>
						<tr>
			          		<td>Get older and unsupported Mylyn releases</td>
			          	</tr>
					</table>
				</td>
	  		</tr> 
	  		<tr height=11>
	  		</tr>
	 	</table>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
