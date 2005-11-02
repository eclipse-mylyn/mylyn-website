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
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<div align="center"><h1>$pageTitle</h1></div>
        
        <table>
        	<tr>
        		<td><img src="images/feature.gif"></td>
        	</tr>
        	<tr>
        		<td>	
		        The Mylar features can be downloaded using the following update sites.  Please note that an updated Mylar
		        release is made available almost every Friday, so check for updates often or turn
		        on automatic updates to ensure that you are using the latest.</td>
		    </tr>
		</table>
        
        <div class="homeitem3col">
			<h3>Mylar 0.4.0</h3>
			<ul>
	        	<li>Eclipse 3.2 update site: <b>download.eclipse.org/technology/mylar/update-site/e3.2</b></li>
	        	<li>Eclipse 3.1 update site: <b>download.eclipse.org/technology/mylar/update-site/e3.1</b></li>
	        	<li><a href="doc/new.html">New & Noteworthy</a></li>
			</ul>
		</div>
		
		<h3>Supported Platforms</h3>
		<p>Mylar supports Eclipse 3.1 and the latest Eclipse 3.2 milestone release.&nbsp; 
		At this time Mylar <i>only runs in a Java 5 VM</i></p>
		
		<h3>Known Limitations</h3>
		<p><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106678">Bug 106678</a>&nbsp; 
		The Package Explorer hierarchical layout is not supported properly yet and 
		will show uninteresting elements when enabled.</p>
		
		<p><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=102663">Bug 
		102663</a>&nbsp; Multiple workbench windows are not supported and Mylar will 
		not work properly if you have more than one window open.</p>
		
		<p><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=102848">Bug 
		102848</a>&nbsp; You can only set one bugzilla repository per workspace.&nbsp; </p>
	
		<hr class="clearer" />
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
