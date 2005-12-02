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
        		<td valign="top"><img src="images/feature.gif"></td>
        		<td>&nbsp;</td>
        		<td>	
		        Mylar features can be downloaded using the following update sites. 
		        Turning on automatic updates is recommended.  
		        Archive updates sites can be found by replacing "update-site" in the URL below
		        with the archive version (e.g. .../update-site-archive/0.4.0/e3.2).</td>
		    </tr>
		</table>
        
        <div class="homeitem3col">
			<h3>Mylar 0.4</h3>
			<ul>
	        	<li>Eclipse 3.2M3 update site: <b>download.eclipse.org/technology/mylar/update-site/e3.2</b></li>
	        	<li>Eclipse 3.1.x update site: <b>download.eclipse.org/technology/mylar/update-site/e3.1</b></li>
	        	<li><a href="doc/new.html">New & Noteworthy</a></li>
			</ul>
		</div>
		
		<h3>Supported Platforms</h3>
		<p>Mylar releases support Eclipse 3.1 and the latest Eclipse 3.2M milestone release
		(<b>3.2M2 is no longer supported,
		<a href="http://download.eclipse.org/eclipse/downloads/drops/S-3.2M3-200511021600/index.php">
		get 3.2M3</a></b>).&nbsp; 
		At this time Mylar <b>only runs in a Java 5 VM</b>.  See the FAQ entry if you
		have any <a href="doc/faq.html#install-failure">trouble installing Mylar</a>.</p>

		<h3>Expectations</h3>
		
		Mylar 0.4 is a work in progress and targeted at early adopters.  The technology and 
		user interface are evolving 
		rapidly based on user community feedback.  New releases are 
		made available weekly, and contain fixes for any major issues or suggested improvements
		reported the previous week.  
		Please <a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Mylar">
		submit bug reports</a> for any problems and enhancement requests, or check
		the list of <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=specific&order=relevance+desc&bug_status=__open__&product=Mylar&content=">
		open reports</a> to add your comments.  
		Bugzilla priorities of P1 and P2 indicate items scheduled for the next release.
		
		<h4>Key Limitations</h4>
				
		<p>Bugzilla Client: customized Bugzilla server installations may not work.  
		Refer to the New & Noteworthy for work-arounds on adding custom queries and working
		with reports using the embedded browser.  Bugzilla 2.20 support is still preliminary.</p>

		<p><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106678">Bug 106678</a>&nbsp; 
		The Package Explorer hierarchical layout is not supported properly yet and 
		will show uninteresting elements when enabled.</p>
		
		<p><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=102663">Bug 
		102663</a>&nbsp; Multiple workbench windows are not supported and Mylar may 
		not capture context correctly if you have more than one window open.</p>
		
		<p><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=102848">Bug 
		102848</a>&nbsp; You can only set one bugzilla repository per workspace.&nbsp; </p>
		
		<p>&nbsp;</p>

	</div>
		<div id="rightcolumn">
		$commonside
	</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
