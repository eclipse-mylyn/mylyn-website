<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "About Mylyn";
	$pageKeywords	= "Mylyn, Eclipse";
	$pageAuthor		= "Mik Kersten";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	include("../_sideBars.php");
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
	
		<div class="homeitem3col">
			<h3>Legal</h3>
			<ul>
				<li><a href="http://www.eclipse.org/legal/epl-v20.html">License:</a> Eclipse Public License (EPL), <a href="https://www.eclipse.org/legal/epl-2.0/faq.php">FAQ</a></li>
				<li><a href="/mylyn/doc/mylyn-iplog.csv">Project IP log</a>: described in the eclipse.org project development process <a href="https://www.eclipse.org/projects/dev_process/project-log.php">document</a></li>
			</ul>
		</div>
		
		<div class="homeitem3col">
			<h3>Release Reviews</h3>
			<ul>
				<li><a href="https://projects.eclipse.org/projects/tools.mylyn/governance"><img border=0 src="/mylyn/images/icon-ppt.gif">Visit the project page for release reviews</a></li>
			</ul>
		</div>
		
		<div class="homeitem3col">
			<h3>Historical Presentations</h3>
			<ul>
				<li>
					<a href="/mylyn/presentations/2007-12-mylyn-webinar.ppt"><img border=0 src="/mylyn/images/icon-ppt.gif"></a>
					<a href="http://live.eclipse.org/node/412"><img border=0 src="/mylyn/images/icon-presentation.gif"></a> 
                    <a href="http://live.eclipse.org/node/412">Webcast on Mylyn 2.2</a> by Mik Kersten
                </li>
				<li>
		            <a href="/mylyn/presentations/2007-06-mylyn-talk.ppt"><img border=0 src="/mylyn/images/icon-ppt.gif">
	            	Mylyn 2.0 Talk</a>
	            </li>
	            <li>
		            <a href="/mylyn/presentations/2007-04-mylyn-tutorial.ppt"><img border=0 src="/mylyn/images/icon-ppt.gif">
	            	Mylyn 2.0 Tutorial</a>
	            </li>
				<li>
		            <a href="/mylyn/publications/2006-03-mylar-eclipsecon.ppt"><img border=0 src="/mylyn/images/icon-ppt.gif">
	            	Mylar: a Task Focused UI for Eclipse</a>
	            </li>			
	            <li>
	            	<a href="/mylyn/publications/2005-03-mylar-eclipsecon-web.ppt"><img border=0 src="/mylyn/images/icon-ppt.gif">
	            	Mylar: a degree-of-interest model for Eclipse</a>
	            </li>
			</ul> 
		</div>
			
	</div> 

	<p>&nbsp;</p>
	<p>&nbsp;</p>
	
	<div id="rightcolumn">
		$mylynIsSide
		<!-- $sidePhase-->
		$side_vote
		$side_announce
		$side_mylynIs
	</div>

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
