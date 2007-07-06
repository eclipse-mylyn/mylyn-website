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
        		<td valign="center">
        			<br>&nbsp; 
        			<img src="/mylyn/images/downloads.gif">
        		</td>
		        <td valign="center">
		        	<p>
			        The minimal Mylyn install is a standalone Task List.  Optional Task Repository Connectors integrate the
			        Task List with bug/task/issue trackers and project management tools.  
			        Bridges focus the user interface on the active task and installing all available bridges is recommended. 
			        The preferred way of installing is via the 
					<a href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Download_Mylyn">Update Manager</a>.
					On Eclipse 3.2 use only the <i>Search for new features..</i> option.
			        </p>			        
		        </td>
		        <td valign="top">
			        <img src="/mylyn/images/install-overview.gif">
			    </td>
		    </tr>
		</table>
	</div>	
	
	<div align="left">
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
			          		<td>Developer builds and previous versions</td>
			          	</tr>
					</table>
				</td> 
			</tr> 
			<tr height=11>
			</tr>
		</table>
	</div>
	
	
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
