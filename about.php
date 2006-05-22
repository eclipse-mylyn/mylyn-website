<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "About Mylar";
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
	include("_sideMylarIs.php");
	include("_sideNews.php");
	include("_sideIncubator.php");
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<div align="center"><h1>$pageTitle</h1></div>
		<p>The goal of the Mylar project is to evolve a focused user interface
		for the Eclipse platform.  At the core of Mylar is a mechanism
		that that makes our interaction with a system explicit.
		Existing tools make the structure of the system explicit,
		and as a result overload us with irrelevant 
		information when the size of a system dwarfs 
		what we need to know to complete a task. 
		Initially the Mylar project will provide a model for 
		exposing interaction history via task contexts, user interface 
		facilities for making these contexts explicit, and support for
		Java development.</p>
		<p>Mylar has been created by <a href="http://kerstens.org/mik">Mik Kersten</a> 
		as a part of his PhD thesis, supervised by
		<a href="http://www.cs.ubc.ca/~murphy/">Gail Murphy</a> and supported by the <a href="http://www.cs.ubc.ca/labs/spl/">
		Software Practices Lab at UBC</a>, the
		<a href="https://www-927.ibm.com/ibm/cas/">IBM 
		Centre for Advanced Studies</a>, and
		<a href="http://www.nserc-crsng.gc.ca/">NSERC</a>.
		
		We are actively seeking and supporting <a href="dev.php">contributions</a> 
		in the form of code, ideas, and documentation.</p>
		
		<div class="homeitem3col">
			<h3>Legal</h3>
			<ul>
				<li><a href="doc/mylar-iplog.csv">Project IP Log</a>, described in the eclipse.org project development process <a href="http://www.eclipse.org/projects/dev_process/project-log.php">document</a></li>
			</ul>
		</div>
	<!--
		<div class="homeitem3col">
			<h3>Getting Involved</h3>
			<ul>
				<li>
                    Subscribe to and email <a href="http://dev.eclipse.org/mailman/listinfo/mylar-users">
					mylar-users@eclipse.org</a> with any questions, ideas, and documentation or
					article suggestions 
					[<a href="http://dev.eclipse.org/mhonarc/lists/mylar-users/maillist.html">archive</a>]</li>
				<li>Read the <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=%5Bdiscussion%5D&product=Mylar&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					Bugzilla discussions</a> to get a sense of the current UI design and implementation issues.</li>
				<li>Refer to the <a href="dev.php">developer page</a> for ways to contribute code and patches.</li>
			</ul>
		</div>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
	-->
	</div> 
	
	<div id="rightcolumn">
		$mylarIsSide
		$commonside
		$incubatorside
	</div>
	
	<p>&nbsp;</p>
	<p>&nbsp;</p>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
