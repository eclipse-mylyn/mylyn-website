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
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<div align="center"><h1>$pageTitle</h1></div>
				<b>
		<i>
		<font color="#6F7A92">&nbsp; <br>
		</font>&quot;</i>Mylar<i>&quot; </i> is</b><br>
		a) An aluminized film used to avoid blindness when staring at a solar eclipse<br>
		b) A focusing user interface used to avoid information blindness when staring at Eclipse
        <p>The goal of the Mylar 
		project is to demonstrate that modeling our 
		interaction with a system is as important as 
		modeling the structure of a system.&nbsp; 
		Current tools are built on structure models 
		alone, and overload us with irrelevant 
		information when the size of a system dwarfs 
		what we need to know to complete a task.&nbsp; 
		Initially Mylar will provide a model for 
		exposing task context, user interface 
		facilities, visualizations and a reference 
		implementation for Java development.</p>
		<p>Mylar was created as part of <a href="http://kerstens.org/mik">Mik Kersten's</a> 
		PhD project, supervised by
		<a href="http://www.cs.ubc.ca/~murphy/">Gail Murphy</a> and supported by the <a href="http://www.cs.ubc.ca/labs/spl/">
		Software Practices Lab at UBC</a>, the
		<a href="https://www-927.ibm.com/ibm/cas/">IBM 
		Centre for Advanced Studies</a>, and
		<a href="http://www.nserc-crsng.gc.ca/">NSERC</a></p>.
		<p>The project is currently a volunteer effort.  A driving goal of the implementation
		is to make Myalr easy for the eclipse.org community to build on an extend.  
		We are actively seeking and supporting contributions in the form of code,
		ideas, and documentation.</p>
		
		<div class="homeitem">
			<h3>Getting Involved</h3>
			<ul>
				<li>
                    Subscribe to and email <a href="http://dev.eclipse.org/mailman/listinfo/mylar-dev">
					mylar-dev@eclipse.org:</a> with any questions, ideas, and documentation or
					article suggestions.</li>
				<li>Read the <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=%5Bdiscussion%5D&product=Mylar&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					Bugzilla discussions</a> to get a sense of the current UI design and implementation issues.</li>
				<li>Refer to the <a href="dev.php">developer page</a> for ways to contribute code and patches.</li>
			</ul>
		</div> 
	</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
