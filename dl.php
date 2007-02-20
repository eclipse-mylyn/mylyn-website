<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Mylar Downloads";
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
		<!--
		<div align="center">
			<h1>$pageTitle</h1>
		</div>
		-->
        
        <div align="left">
	        <table border="0">
	        	<tr>
	        		<td valign="top"><p>
			        <img src="images/feature.gif">
			        The minimal Mylar install is a standalone Task List.  <a href="start.php">Connectors</a> integrate the
			        Task List with bug/task/issue repositories, and the Focused UI reduces information overload by focusing
			        Eclipse views and editors on task context.  We recommend that you use the
			        Eclipse Update Manager to <a href="http://wiki.eclipse.org/index.php/Mylar_User_Guide#Download_Mylar">install Mylar</a>.
					<i><b>Use only the "Search for new features.."</i></b> option when installing.
			        <p><b>New to Eclipse?</b> Get <a href="http://java.sun.com/javase/downloads/index.jsp">Java</a>, then 
			        install <a href="http://download.eclipse.org/eclipse/downloads/drops/R-3.2.1-200609210945/">Eclipse 3.2</a>
			        and use <i>Help -> Software Updates -> Search for new..</i> with the update site listed below.
			        </td>
			     <td>
					<img src="/mylar/images/install-overview.gif">
			     </td>
			    </tr>
			</table>
		</div>
        
        <div class="homeitem3col">
			<h3>Update Sites</h3>
			<ul>
				<li>Eclispe 3.3M5: <b>http://download.eclipse.org/technology/mylar/update-site/e3.3</b>
	        		<a href="http://www.eclipse.org/downloads/download.php?file=/technology/mylar/update-site/mylar-site-2.0M1-e3.3.tgz&r=1">&nbsp;[zip]</a>
	        		<a href="http://www.eclipse.org/downloads/download.php?file=/technology/mylar/src-archive/mylar-src-2.0M1-e3.3.zip&r=1">&nbsp;[src]</a>
	        	</li>
			</ul>
			<ul>
				<li>Eclipse 3.2: <b>http://download.eclipse.org/technology/mylar/update-site/e3.2</b>
	        		<a href="http://www.eclipse.org/downloads/download.php?file=/technology/mylar/update-site/mylar-site-2.0M1-e3.2.tgz&r=1">&nbsp;[zip]</a>
	        		<a href="http://www.eclipse.org/downloads/download.php?file=/technology/mylar/src-archive/mylar-src-2.0M1-e3.2.zip&r=1">&nbsp;[src]</a>
	        	</li>
			</ul>
		</div>
        
        <div class="homeitem3col">
			<h3>1.0 Archive Sites</h3>
			<ul>
				<li>
					<a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/technology/mylar/update-site/1.0/mylar-site-1.0.1-e3.3.tgz&r=1">
						<img border=0 src="images/icon-zip.gif"></a>
                    <a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/technology/mylar/src-archive/1.0/mylar-src-1.0.1-e3.3.zip&r=1">
                    	<img border=0 src="images/icon-source.gif"></a>
					Eclipse 3.3M4: <b>http://download.eclipse.org/technology/mylar/update-site/1.0/e3.3</b>
	        	</li>
			</ul>
			<ul>
				<li>Eclipse 3.2: <b>http://download.eclipse.org/technology/mylar/update-site/1.0/e3.2</b>
	        		<a href="http://www.eclipse.org/downloads/download.php?file=/technology/mylar/update-site/1.0/mylar-site-1.0.1-e3.2.tgz&r=1">&nbsp;[zip]</a>
	        		<a href="http://www.eclipse.org/downloads/download.php?file=/technology/mylar/src-archive/1.0/mylar-src-1.0.1-e3.2.zip&r=1">&nbsp;[src]</a>
	        	</li>
			</ul>
		</div>

        <div class="homeitem3col">
			<h3>0.x Archive Sites</h3>
			<ul>
				<li>Eclipse 3.1: <b>http://download.eclipse.org/technology/mylar/update-site/e3.1</b> (Mylar 0.6.0) 
	        		<a href="http://www.eclipse.org/downloads/download.php?file=/technology/mylar/update-site/mylar-site-0.6.0-e3.1.tgz&r=1">&nbsp;[zip]</a>
	        	</li>
				<li>Archive versions: http://download.eclipse.org/technology/mylar/update-site-archive/0.x.x/e3.x)</li>
			</ul>
		</div>
 
        <div class="homeitem3col">
			<h3>Dev Builds<a alt="More Info" href="http://wiki.eclipse.org/index.php/Mylar_User_Guide#Releases"><img border=0 src="images/icon-help.gif"></a></h3>
			<ul>
				<li>Eclipse 3.3M5: <b>http://download.eclipse.org/technology/mylar/update-site/dev/e3.3</b>
				&nbsp;<a href="http://wiki.eclipse.org/index.php/Mylar_User_Guide#Releases"><img alt="More Info" border=0 src="images/icon-help.gif"></a></li>
				<li>Eclipse 3.2: <b>http://download.eclipse.org/technology/mylar/update-site/dev/e3.2</b>
				&nbsp;<a alt="More Info" href="http://wiki.eclipse.org/index.php/Mylar_User_Guide#Releases"><img border=0 src="images/icon-help.gif"></a></li>
				<li>Headless Tasks Framework: <a href="http://www.eclipse.org/downloads/download.php?file=/technology/mylar/update-site/mylar-lib-0.9.0.zip&r=1">mylar-lib-1.0.0.zip</a>
			</ul>
		</div>

       	<div align="left">
			<b>Supported platforms</b>: <b><a href="http://java.sun.com/j2se/1.5.0/download.jsp">JRE 5.0</a> or later required</b>.
			<br>
		    <b>Supported repositories</b> <a href="users.php"><img alt="More Info" border=0 src="images/icon-help.gif"></a>: 
		    <a href="http://www.bugzilla.org/">Bugzilla</a> 2.18 and later, <a href="http://trac.edgewall.org/">Trac</a> 0.9 and later, <a href="http://www.atlassian.com/software/jira/">JIRA</a> 3.1.1 and later.
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
