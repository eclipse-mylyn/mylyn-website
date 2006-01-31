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
	include("_sideCommon.php");
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<div align="center"><h1>$pageTitle</h1></div>

        <p>A key goal of the Mylar project is to make Mylar easy for the eclipse.org 
        community to build on and extend.
        At this stage the implementation is evolving rapidly, 
        and slowly stabilizing initial APIs and extension points. If you plan on extending 
		Mylar we suggest that you bring this up as a discussion on
		<a href="mailto:mylar-dev@eclipse.org">mylar-dev@eclipse.org</a>.
		Development is done in a transarent XP style, with weekly planning messages 
		sent to the mylar-dev list. Every task that results in code or resource 
		modification should correspond to a bugzilla report to show up in the plan.  The weekly plan 
		is sent out each Monday, if you would like a task included mark the report P2 or higher.</p>

		<div class="homeitem3col">
			<h3>Developer Resources</h3>
			<ul>
				<li>Mailing list: <a href="http://dev.eclipse.org/mailman/listinfo/mylar-dev">
					mylar-dev@eclipse.org:</a> developer discussions 
					<a href="http://dev.eclipse.org/mhonarc/lists/mylar-dev/maillist.html">[archive]</a>
				</li>
				<li>CVS repository: <a href="http://dev.eclipse.org/viewcvs/indextech.cgi/org.eclipse.mylar/">web interface</a></li>
				
			</ul>
		</div>  

		<div class="homeitem3col">
			<h3>Conventions</h3>
			<ul>
				<li><b>Development:</b> use the latest version of Mylar for development
				and <a href="http://www.cs.wustl.edu/icse05/ConferenceProgram/InvitedTalks/GammaKeynote.pdf">
				consume your own output</a>.</li>
				<li><b>Bugzilla:</b> priorities are P1: do this week, P2: should do 
				this week, P3: considered for next week, P4/5: requires user input.</li>
				<li><b>Code:</b> conventions are documented on <a href="http://dev.eclipse.org/conventions.html">dev.eclipse.org</a>
				and checked into each project's .settings folder.  Change your default formatter's line wrap to 160.
				Format code using Source menu -> Format.</li>
				<li><b>Patches</b>: right-click the corresponding project and select Team -&gt; Create 
				Patch.&nbsp; Name according to project (e.g. patch-core.tests.txt), and attach
				to a bug report. Patches should come with a test case, and are typically applied 
				within a few days of submission.</li>
				<li><b>Committing:</b> enure no warnings, and that org.eclipse.mylar.tests.AllTests 
				passes with no console output.</li> 
			</ul>
		</div>  
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		     
	<!--          
		<h4>Workspace Setup</h4>
        - Building Mylar feature from HEAD requires Eclipse 
		SDK 3.2M3 and JDK 1.5.&nbsp; <br>
		- Add CVS location: dev.eclipse.org 
		/home/technology<br>
		- Check out all of the projects under 
		org.eclipse.mylar (except mylar.aspectj, 
		mylar.sandbox, mylar.viz, and mylar.zest which have additional 
		dependencies)<br>
		
		<h4>Building from HEAD</h4>
		- Associate the J2SE-1.5 with your installed JRE on the Execution Environments preference page.
        <br>

		<h4>Building the Eclipse 3.1 Branch</h4>
		- Right-click the org.eclipse.mylar.java, mylar.ide, and mylar.xml
		project, Team -&gt; Switch to Another Branch..., then 
		Refresh the Branches and select e_3_1
        
        <h4>Building the Bugzilla Client</h4>
        - Bugzilla support can be built independently of the Mylar UI:<br>
		- Add CVS location as above, Check out org.eclipse.mylar: bugzilla.core, bugzilla.ui, bugzilla.test, 
		mylar.tasklist, mylar.core
		
		<br>&nbsp;
		<h4>Building AspectJ Support</h4>
		AspectJ support requires the 
		AJDT plug-ins to be installed:<br>
		- Create a fresh Eclipse (e.g. eclipse-3.1-ajdt) and install the AJDT plug-in from 
		download.eclipse.org/technology/ajdt/31/dev/update<br>
		- In your original Eclipse: File -&gt; Import -&gt; Existing Plug-ins, then specify the Plug-in 
		location and hit Next<br>
		- Select the following 7 plug-ins: 
		org.aspectj.ajde+runtime, 
		org.eclipse.ajdt.core+ui, 
		org.eclipse.contribution.visualiser+xref
	-->
	</div>
	
	<div id="rightcolumn">
		$commonside
		 <div class="sideitem">
		 
		  <h6>Dashboard</h6>
		  <div align="center">
		   <?= $projectInfo->dashboard_liveness() ?><br/>
		   <?= $projectInfo->dashboard_bugs_lights() ?><br/>
		   <?= $projectInfo->dashboard_news_lights() ?>
		  </div>
		 </div>
		
		<div class="sideitem">
			<h6>Developer Links</h6>
			<ul>
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=%5Bdiscussion%5D&product=Mylar&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					Bugzilla discussions</a> of ideas, enhancements, and UI issues.
					<br>&nbsp;
				</li>
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylar&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=helpwanted&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					Bugzilla reports marked helpwanted</a> are a starting point for those interested in contributing
					<br>&nbsp;
				</li>
				<li><a href="http://www.eclipse.org/eclipse/development/index.php">Eclipse development page</a> documents
					conventions and resources.<br>&nbsp;
				</li>
			</ul>
		</div>
	</div>
</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
