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
	include("_sideNews.php");
		
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<div align="center"><h1>$pageTitle</h1></div>
        
        <table border="0">
        	<tr>
        	<!--
        		<td valign="top"><img src="images/feature.gif"></td>
        		<td>&nbsp;</td>
        	-->
        		<td valign="top">
		        <img src="images/feature.gif">
		        Mylar can be installed as a standalone Task List for managing personal tasks, with the Focused UI support for the Eclipse SDK
		        to reduce information overload, and with one or more task <a href="start.php">repository connectors</a>.  All features are optional
		        unless indicated otherwise.  Note that installing the JIRA Connector involves downloading a feature
				from jira-dashboard.tigris.org.  Also see the <a href="doc/new.php">New & Noteworthy</a>, and the <a href="doc/faq.php#install-failure">FAQ</a> 
				for installation trouble shooting. 
		        
		        </td>
		     <td>
		<img src="/mylar/images/install-overview.gif">
		     </td>
		    </tr>
		</table>
        
        <div class="homeitem3col">
			<h3>Mylar 0.4.x Update Sites</h3>
			<ul>
				<li>Eclipse 3.2M5: <b>download.eclipse.org/technology/mylar/update-site/e3.2</b>
	        		<a href="http://download.eclipse.org/technology/mylar/update-site/mylar-site-local-e3.2.tgz">&nbsp;[zip]</a>
	        	</li>
	        	<li>Eclipse 3.1.x: <b>download.eclipse.org/technology/mylar/update-site/e3.1</b> 
	        		<a href="http://download.eclipse.org/technology/mylar/update-site/mylar-site-local-e3.1.tgz">&nbsp;[zip]</a>
	        	</li>
			</ul>
		</div>

        <div class="homeitem3col">
			<h3>Developer Builds and Archives</h3>
			<ul>
				<li>Latest Dev Build (3.2M5): <b>download.eclipse.org/technology/mylar/update-site/dev</b></li>
				<li>Archives: download.eclipse.org/technology/mylar//update-site-archive/0.4.x/e3.x)</li>
			</ul>
		</div>

		<p><b>Supported platforms</b>: Eclipse 3.2M5 and later (our focus) and Eclipse 3.1.
		Need <a href="http://java.sun.com/j2se/1.5.0/download.jsp">JRE 5.0</a> or later.  Mylar is developed on Windows; refer to the following queries for open bugs
		with: 
			<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=anywordssubstr&short_desc=linux+gtk&product=Mylar&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
			Linux</a>, 
			<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=anywordssubstr&short_desc=mac&product=Mylar&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
			MacOS</a>.
		<!--
		There are no additional system performance requirements, but see the FAQ for <a href="http://www.eclipse.org/mylar/doc/faq.php#performance-summary">performance details</a>.</p>
		--> 
		</p>
		<p><b>Supported repositories</b>: Bugzilla 2.16-2.20 (uncustomized), JIRA 3.1.1 and later.
		</p>
		
		<b>Expectations</b>: Mylar 0.4 is a work in progress and targeted at early adopters.  The technology and 
		user interface are evolving rapidly based on user community feedback.  New builds are 
		made available weekly, and contain fixes for key issues reported the previous week.

		<p>&nbsp;</p>
	</div>

	<div id="rightcolumn">
		$commonside
		$newside
	</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
