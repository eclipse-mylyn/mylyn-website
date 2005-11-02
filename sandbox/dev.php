<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		
	include($App->getProjectCommon());    
	
	# All on the same line to unclutter the user's desktop'

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
		rapidly, and slowly stabilizing initial APIs and extension points. If you plan on extending 
		the tool we suggest that you bring this up as a discussion on
		<a href="mailto:mylar-dev@eclipse.org">mylar-dev@eclipse.org</a>.
		Development is done in an XP style using Mylar, with weekly planning messages 
		sent to the developer mailing list. Every task that results in code or resource 
		modification should correspond to a bugzilla report to show up in the plan.
          
		<div class="homeitem">
			<h3>Developer Community</h3>
			<ul>
				<li>
                    <a href="http://dev.eclipse.org/mailman/listinfo/mylar-dev">
					mylar-dev@eclipse.org:</a> developer discussion
                    (<a href="http://dev.eclipse.org/mhonarc/lists/mylar-dev/maillist.html">archive</a>)</li>
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylar&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=helpwanted&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					See bugzilla reports marked helpwanted</a> if you are interested in contributing</li>
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=%5Bdiscussion%5D&product=Mylar&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					See bugzilla discussions</a> to chime in on of ideas, enhancements, and UI issues.</li>
			</ul>
		</div>        

		<div class="homeitem">
			<h3>Conventions</h3>
			<ul>
				<li>Bugzilla priorities: P1: do this week, P2: should do 
				this week, P3: considered for next week, P4/5: requires user input</li>
				<li>Planning: the weekly plan is sent out each Monday, if you would 
				like a task included mark the report P2 or higher.</li>
				<li>Patches</b>: right-click the 
				corresponding project and select Team -&gt; Create 
				Patch.&nbsp; Name according to project (e.g. patch-core.txt, patch-core.tests.txt).
				</li>
				<li>Committing:
				make sure that there are no warnings, and that org.eclipse.mylar.tests.AllTests 
				passes with no console output.  Paste the bug report number and title into 
				the comment.</li>
			</ul>
		</div>     
          
		<h3>Workspace Setup</h3>
        Building Mylar feature from HEAD requires Eclipse 
		SDK 3.2M2 and JDK 1.5.&nbsp; To set up a workspace 
		for mylar development:<br>
		- Add CVS location: dev.eclipse.org 
		/home/technology<br>
		- Check out all of the projects under 
		org.eclipse.mylar (except mylar.aspectj, 
		mylar.sandbox, mylar.viz, and mylar.zest which have additional 
		dependencies)<br>
		- Everything should compile without any warnings<br>
		<br>
		Building for Eclipse 3.1 requires checking out a branch: <br>
		- Right-click the org.eclipse.mylar.java 
		project, Team -&gt; Switch to Another Branch..., then 
		Refresh the Branches and select eclipse_3_1
        		
        <p>Bugzilla support can be built independently of the Mylar UI:<br>
		- Add CVS location as above, Check out org.eclipse.mylar: bugzilla.core, bugzilla.ui, bugzilla.test, 
		mylar.tasklist, mylar.core </p>
		AspectJ support requires the 
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
 
		<hr class="clearer"/>
	</div>
</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
