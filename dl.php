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
			        Eclipse views and editors on task context.
					</p>
					We recommend that you use <a href="http://wiki.eclipse.org/index.php/Mylar_User_Guide#Download_Mylar">Eclispe's Update Manager to install Mylar</a>.
					Use only the <b><i>"Search for new features.."</i></b> option when installing, and then select the features you need, as visible to the right.
			        </td>
			     <td>
					<img src="/mylar/images/install-overview.gif">
			     </td>
			    </tr>
			</table>
		</div>
        
        <div class="homeitem3col">
			<h3>Mylar 0.9 Update Site</h3>
			<ul>
				<li>Eclipse 3.2: <b>download.eclipse.org/technology/mylar/update-site/e3.2</b>
	        		<a href="http://www.eclipse.org/downloads/download.php?file=/technology/mylar/update-site/mylar-site-0.9.1-e3.2.tgz&r=1">&nbsp;[site zip]</a>
	        	</li>
			</ul>
			<ul>
				<li>Eclispe 3.3M3: <b>download.eclipse.org/technology/mylar/update-site/e3.3</b>
	        		<a href="http://www.eclipse.org/downloads/download.php?file=/technology/mylar/update-site/mylar-site-0.9.1-e3.3.tgz&r=1">&nbsp;[site zip]</a>
	        	</li>
			</ul>
		</div>

        <div class="homeitem3col">
			<h3>Archives Sites</h3>
			<ul>
				<li>Eclipse 3.1: <b>download.eclipse.org/technology/mylar/update-site/e3.1</b> (Mylar 0.6.0) 
	        		<a href="http://www.eclipse.org/downloads/download.php?file=/technology/mylar/update-site/mylar-site-0.6.0-e3.1.tgz&r=1">&nbsp;[site zip]</a>
	        	</li>
				<li>Archive versions: download.eclipse.org/technology/mylar/update-site-archive/0.x.x/e3.x)</li>
			</ul>
		</div>

        <div class="homeitem3col">
			<h3>Developer Builds</h3>
			<ul>
				<li>Eclipse 3.3M3: <b>download.eclipse.org/technology/mylar/update-site/dev</b>
				&nbsp;<a href="http://wiki.eclipse.org/index.php/Mylar_FAQ#Development_builds">(compatibility)</a></li>
				<li>Headless Tasks Framework: <a href="http://www.eclipse.org/downloads/download.php?file=/technology/mylar/update-site/mylar-lib-0.9.0.zip&r=1">mylar-lib-0.9.0.zip</a>
			</ul>
		</div>

       	<div align="left">
			<b>Supported platforms</b>: <a href="http://www.eclipse.org/downloads/download.php?file=/eclipse/downloads/drops/R-3.2-200606291905/eclipse-SDK-3.2-win32.zip">Eclipse SDK</a> 3.2 and 3.1, <b><a href="http://java.sun.com/j2se/1.5.0/download.jsp">JRE 5.0</a> or later required</b>.
			<br>
		    <b>Supported repositories</b>: <a href="http://www.bugzilla.org/">Bugzilla</a> 2.18 and later, <a href="http://trac.edgewall.org/">Trac</a> 0.9 and later, <a href="http://www.atlassian.com/software/jira/">JIRA</a> 3.1.1 and later.
		</div> 

		<p>&nbsp;</p>
		
	</div>

	<div id="rightcolumn">
		$commonside
		$feedbackside
		$mylarIsSide
	</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
