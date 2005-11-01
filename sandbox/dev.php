<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Mylar Developers";
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
          
        Mylar is evolving 
		rapidly, and slowly stabilizing initial APIs and 
		extension points.&nbsp; If you plan on extending 
		the tool we suggest that you bring this up as a 
		discussion on
		<a href="mailto:mylar-dev@eclipse.org">
		mylar-dev@eclipse.org</a>.&nbsp; Also consider 
		looking at the bugzilla
		<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=specific&order=relevance+desc&bug_status=__open__&product=Mylar&content=[discussion]">
		discussions of new and planned features</a>.  
          
        <h3>Conventions</h3>
        
        - <b><font color="#666666">Bugzilla priorities</font></b>: P1: do this week, P2: should do 
		this week, P3: considered for next week, P4: 
		later, P5: requires user input to be 
		prioritized.<br>
		- <b><font color="#666666">Releases</font></b>: 
		a stable 
		minor-minor version number rev is planned for 
		each Friday.<br>
		- <b><font color="#666666">Patches</font></b>: right-click the 
		corresponding project and select Team -&gt; Create 
		Patch.&nbsp; Repeat for each project, naming the 
		patch accordingly (e.g. patch-core.txt, patch-core.tests.txt). 
		Please submit a unit test along with the patch.<br>
		- <b><font color="#666666">Before committing: </font></b>
		make sure that there are no warnings, and that org.eclipse.mylar.tests.AllTests 
		passes with no console output<br>
		- For handling exceptions and logging use 
		MylarPlugin.log(..) or MylarPlugin.fail(..)
          
          
        <h3>Workspace Setup</h3>
        
        Building Mylar from 
		HEAD requires Eclipse 
		SDK 3.2M2 and JDK 1.5.&nbsp; To set up a workspace 
		for mylar development:<br>
		- Add CVS location: dev.eclipse.org 
		/home/technology<br>
		- Check out all of the projects under 
		org.eclipse.mylar (EXCEPT mylar.aspectj, 
		mylar.sandbox, mylar.viz, and mylar.zest which have additional 
		dependencies)<br>
		- Everything should compile without any warnings<br>
		<br>
		To set up a workspace for development&nbsp; on 
		Eclipse 3.1: <br>
		- Right-click the org.eclipse.mylar.java 
		project, Team -&gt; Switch to Another Branch...<br>
		- Refresh the Branches and select eclipse_3_1
        		
        <h4>Bugzilla Feature</h4>
        Bugzilla support can be built independently of the Mylar UI:
		- Add CVS location as above
		- Check out org.eclipse.mylar: bugzilla.core, bugzilla.ui, bugzilla.test, tasks, core
        
        <h4>AspectJ Support</h4>
        Building 
		org.eclipse.mylar.aspectj support requires the 
		AJDT plug-ins to be installed:<br>
		- Create a fresh Eclipse (e.g. eclipse-3.1-ajdt) 
		and install the AJDT plug-in from 
		download.eclipse.org/technology/ajdt/31/dev/update<br>
		- In your original Eclipse: File -&gt; Import -&gt; 
		Existing Plug-ins, then specify the Plug-in 
		location and hit Next<br>
		- Select the following 7 plug-ins: 
		org.aspectj.ajde+runtime, 
		org.eclipse.ajdt.core+ui, 
		org.eclipse.contribution.visualiser+xref
 
		<hr class="clearer" />
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
