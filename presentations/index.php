<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Selected Publications";
	$pageKeywords	= "Mylyn, Eclipse";
	$pageAuthor		= "Mik Kersten";
		
	# Paste your HTML content between the EOHTML markers!	
	include("_sideMylarIs.php");
	include("_sideNews.php");
	include("_sideCommon.php");
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<!-- <div align="center"><h3>$pageTitle</h3></div>-->
			
		<div class="homeitem3col">
			<h3>Current Slides</h3>
			<ul>
				<li>
		            <a href="/mylyn/presentations/2007-06-mylyn-talk.ppt"><img border=0 src="/mylyn/images/icon-ppt.gif">
	            	Mylyn: the Task-Focused Toolkit</a> (last updated June 2006, 1 hour talk and demo)
	            </li>
	            <li>
		            <a href="/mylyn/presentations/2007-04-mylyn-tutorial.ppt"><img border=0 src="/mylyn/images/icon-ppt.gif">
	            	Mylyn: Tutorial Materials</a> (last updated April 2006, tutorial materials)
	            </li>
			</ul> 
			&nbsp;&nbsp;For comments and questions use <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=195900">bug 195900</a>
		</div>
			
		<div class="homeitem3col">
			<h3>Selected Presentations</h3>
			<ul>
				<li>
					<a href="http://live.eclipse.org/node/325"><img border=0 src="/mylyn/images/icon-presentation.gif">
					RedMonkTV: Mylyn Conversation and Demo</a> by Mik Kersten and Michael Coté (July 2007, 18 minutes)
                </li> 
				<li>
					<a href="http://adobedev.adobe.acrobat.com/p46246963"><img border=0 src="/mylyn/images/icon-presentation.gif"></a>&nbsp;
					<a href="/mylyn/publications/2006-10-mylar-webinar.ppt"><img border=0 src="/mylyn/images/icon-ppt.gif"></a>
                    <a href="http://adobedev.adobe.acrobat.com/p46246963">Webinar: Task-Focused Programming with [Mylyn]</a> by Mik Kersten (Oct 2006, 56 min)
                </li>
	            <li>
		            <a href="http://drdobbs.com/dept/opensource/196602830"><img border=0 src="/mylyn/images/icon-podcast.gif">
	            	Eclipsing Information Overload</a> by Mik Kersten, interviewed by Jonathan Erickson (Dr.Dobbs Podcast, Dec 2006)
	            </li>
	            <li>
		            <a href="/mylyn/publications/2006-03-mylar-eclipsecon.ppt"><img border=0 src="/mylyn/images/icon-ppt.gif">
	            	[Mylyn]: a Task Focused UI for Eclipse</a> (EclipseCon talk, Mar 2006)
	            </li>			
	            <li>
	            	<a href="/mylyn/publications/2005-03-mylar-eclipsecon-web.ppt"><img border=0 src="/mylyn/images/icon-ppt.gif">
	            	[Mylyn]: a degree-of-interest model for Eclipse</a> (EclipseCon talk, Mar 2005)
	            </li>
			</ul>
			&nbsp;&nbsp;Also see <a href="http://live.eclipse.org">Eclipse Live</a> for more presentations about Eclipse and Mylyn. 
		</div>
		<p>&nbsp;</p>
	</div>
	</div>

	
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
