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
          
        The goal of the Mylar 
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
		implementation for Java development.&nbsp; A 
		driving goal of the implementation is to make 
		Mylar easy for the eclipse.org community to 
		build on and extend. If you are interested in 
		becoming involved with development or in sharing 
		ideas please subscribe to the
		<a href="http://dev.eclipse.org/mailman/listinfo/mylar-dev">
		developer list</a>.&nbsp;<br>&nbsp; <br>
		Mylar was created as part of Mik Kersten's PhD project, supervised by
		Gail Murphy, the <a href="http://www.cs.ubc.ca/labs/spl/">
		Software Practices Lab at UBC</a>, the
		<a href="https://www-927.ibm.com/ibm/cas/">IBM 
		Centre for Advanced Studies</a>, and
		<a href="http://www.nserc-crsng.gc.ca/">NSERC</a>.
		The project is currently a volunteer effort, and <a href="dev.php">soliciting
		contributors.</a>
		<br>
		<b>
		<i>
		<font color="#6F7A92">&nbsp; <br>
		</font>&quot;</i>mylar<i>&quot; </i> is</b><br>
		a) An aluminized film used to avoid blindness 
		when staring at a solar eclipse<br>
		b) A user interface and interaction skin used to 
		avoid information blindness when staring at 
		Eclipse
		<hr class="clearer" />
	</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
