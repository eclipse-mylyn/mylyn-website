<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Mylyn Development";
	$pageKeywords	= "Mylyn, Eclipse";
	$pageAuthor		= "Mik Kersten";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);
	
	include("../_sideBars.php");
		
	$html = <<<EOHTML

	<div id="midcolumn">
		<!--	<div align="center"><h1>$pageTitle</h1></div> -->

		<div class="homeitem3col">
			<h3>Resources</h3>
			<table border="0"> 
				<tr>
				<td valign="top">
					&nbsp;&nbsp;&nbsp;&nbsp;<img src="/mylyn/images/reference.png">
				</td>
				<td>
					Developers building on Mylyn should subscribe to the integrators mailing list. Those actively involved in the 
					development of the Mylyn project should subscribe to the dev mailing list.
				</td>
				</tr>
			</table>
			<ul> 
				<li>
					<a href="http://wiki.eclipse.org/index.php/Mylyn/Contributor_Reference">Contributor Reference</a>: 
					Getting started guide for Mylyn development
				</li>
				<li>
					<a href="http://wiki.eclipse.org/index.php/Mylyn/Integrator_Reference">Integrator Reference</a>: 
					Information for developers building on Mylyn
				</li>
				<li>
					<a href="http://wiki.eclipse.org/index.php/Mylyn">Mylyn Page on Eclipsepedia</a>: Contributor and integrator links
				</li>
				<li>
					<a href="https://www.eclipse.org/downloads/download.php?file=/mylyn/docs/2009-03-mylyn-connector-crash-course-talk.pdf">
					EclipseCon Connector Crash Course Slides (pdf)</a> <i>March 26th, 2009</i><br>
					<a href="https://www.eclipse.org/downloads/download.php?file=/mylyn/docs/workspace-connector-tutorial.zip">Workspace (zip)</a> or <a href="doc/dev/mylyn-connector-tutorial.psf">Team Project Set (psf)</a>
				</li>
				<li>
					<a href="http://www.eclipse.org/articles/">Eclipse Corner Articles</a>: General information about Eclipse and plug-in development
				</li>
			</ul>
		</div>
		
		<div class="homeitem3col">
			<h3>Mailing Lists</h3>
			<table border="0"> 
				<tr>
				<td valign="top">
					&nbsp;&nbsp;&nbsp;&nbsp;<a href="/mylyn/bugs"><img border="0" src="/mylyn/images/image-email.gif"></a>
				</td>
				<td>
					Developers building on Mylyn should subscribe to the integrators mailing list. Those actively involved in the 
					development of the Mylyn project should subscribe to the dev mailing list.
				</td> 
				</tr>
			</table>
			<ul> 
				<li>
					<a href="http://dev.eclipse.org/mailman/listinfo/mylyn-integrators">
					mylyn-integrators@eclipse.org:</a> discussion related to building on Mylyn
					<a href="http://dev.eclipse.org/mhonarc/lists/mylyn-integrators/maillist.html">[archive]</a></li>
				<li>
					<a href="http://dev.eclipse.org/mailman/listinfo/mylyn-dev">
					mylyn-dev@eclipse.org:</a> developer discussions and planning
					<a href="http://dev.eclipse.org/mhonarc/lists/mylyn-dev/maillist.html">[archive]</a>
					<a href="http://dev.eclipse.org/mhonarc/lists/mylar-dev/maillist.html">[old archive]</a></li>
			</ul>
		</div>
		
		<div class="homeitem3col">
			<h3>Bugzilla</h3>
			<table border="0"> 
				<tr>
					<td valign="top">
						<a href="/mylyn/bugs"><img border="0" src="/mylyn/images/bug-report.png"></a>
					</td>
					<td>
						<p>The preferred way of reporting and discussing defects and enhancement requests is via <a href="https://bugs.eclipse.org/bugs/">Bugzilla Reports</a>.
					</td> 
				</tr>
			</table>

			<ul>
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=bugday&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=notregexp&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
				<img border=0 src="/mylyn/images/query.gif">&nbsp;&nbsp;Open bugs relevant for getting started</a> 
				</li>
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=helpwanted&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=notregexp&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					<img border=0 src="/mylyn/images/query.gif">&nbsp;&nbsp;Open bugs targeted at community contributions</a> 
				</li>
			</ul>
		</div>
				
 		<div class="homeitem3col"> 
			<h3>Tools</h3>
			<table border="0"> 
				<tr>
					<td width="5"></td>
					<td>
						<p>A profiler license is available to committers. YourKit is kindly supporting open source projects with its full-featured
 Java Profiler. YourKit, LLC is the creator of innovative and intelligent
 tools for profiling Java and .NET applications. Take a look at YourKit's
 leading software products: <a
 href="http://www.yourkit.com/java/profiler/index.jsp">YourKit Java
 Profiler</a> and <a
 href="http://www.yourkit.com/.net/profiler/index.jsp">YourKit .NET
 Profiler</a>.</p>
					</td> 
				</tr>
			</table>
		</div>
		
		<p>&nbsp;</p>
	</div>
	<div id="rightcolumn">
		$side_vote
	<!--
			<font size=1>
			<?= $votesBugs->getAsSideHTML("Top Voted Bugs") ?>
			<?= $votesEnhancements->getAsSideHTML("Top Voted Enhancements") ?>
			</font>
		-->
	</div>

EOHTML;

	# Generate the web page
    $Theme = $App->getThemeClass();
    $Theme = $App->getThemeClass($theme);
    $Theme->setNavPosition('left');
    $Theme->setNav($Nav);
    $Theme->setMenu($Menu);
    $Theme->setPageAuthor($pageAuthor);
    $Theme->setPageKeywords($pageKeywords);
    $Theme->setPageTitle($pageTitle);
    $Theme->setHtml($html);
    $Theme->setBreadcrumb($Breadcrumb);
    $Theme->generatePage();?>
