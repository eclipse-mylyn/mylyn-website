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
		
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<div align="center"><h1>$pageTitle</h1></div>
        
        <table>
        	<tr>
        		<td valign="top"><img src="images/feature.gif"></td>
        		<td>&nbsp;</td>
        		<td>	
		        Mylar features can be downloaded using the following update sites.  Notable
		        changes are in the <a href="doc/new.php">New & Noteworthy</a>.</td>
		    </tr>
		</table>
        
        <div class="homeitem3col">
			<h3>Mylar 0.4</h3>
			<ul>
	        	<li>Eclipse 3.1.x Update Site: <b>download.eclipse.org/technology/mylar/update-site/e3.1</b></li>
	        	<li>Eclipse 3.2M5 Update Site: <b>download.eclipse.org/technology/mylar/update-site/e3.2</b></li>
			</ul>
		</div>

        <div class="homeitem3col">
			<h3>Developer Builds and Archives</h3>
			<ul>
				<li>Latest Dev Build (3.2M5): <b>download.eclipse.org/technology/mylar/update-site/dev</b></li>
				<li>Archives: download.eclipse.org/technology/mylar//update-site-archive/0.4.x/e3.x)</li>
			</ul>
		</div>
		
		<h3>Supported Platforms</h3>
		<p>Mylar releases support Eclipse 3.1 and the latest Eclipse 3.2 milestone release
		(<b>3.2M4 is no longer supported,
		<a href="http://download.eclipse.org/eclipse/downloads/">
		get 3.2M5</a></b>).&nbsp; 
		Mylar <b>only runs in a Java 5 VM</b>.  See <a href="doc/faq.php#install-failure">FAQ</a> if you
		have any trouble installing Mylar.  Mylar is developed on Windows; refer to the following queries for open bugs
		with: 
			<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=anywordssubstr&short_desc=linux+gtk&product=Mylar&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
			Linux</a>, 
			<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=anywordssubstr&short_desc=mac&product=Mylar&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
			MacOS</a>.
		There are no additional system performance requirements, but see the FAQ for <a href="http://www.eclipse.org/mylar/doc/faq.php#performance-summary">performance details</a>.</p>

		<h4>Install</h4>
		
		<table border=0>
			<tr>
			  <td>
		Mylar can be installed as a standalone Task List only for managing personal tasks, with the Focused UI support for the Eclipse SDK,
		and with one or more task repository connectors.  Note that installing the JIRA Connector involves downloading a feature
		from <a href="http://jira-dashboard.tigris.org">jira-dashboard.tigris.org</a>.
		     </td>
		     <td>
		<img src="/mylar/images/install-overview.gif">
		     </td>
		    </tr>
		</table>

		<h4>Expectations</h4>
		
		Mylar 0.4 is a work in progress and targeted at <b>early adopters</b>.  The technology and 
		user interface are evolving rapidly based on user community feedback.  New builds are 
		made available weekly, and contain fixes for key issues reported the previous week.
		
		<h4>Key Limitations</h4>
				
		<p>Bugzilla Client: customized Bugzilla server installations may not work.  
		Refer to the New & Noteworthy for work-arounds on adding custom queries and working
		with reports using the embedded browser.</p>

		<p><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106678">Bug 106678</a>&nbsp; 
		The Package Explorer hierarchical layout is not supported properly yet and 
		will show uninteresting elements when enabled.</p>
		
		<p><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=102663">Bug 
		102663</a>&nbsp; Multiple workbench windows are not supported and Mylar may 
		not capture context correctly if you have more than one window open.</p>
		
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
