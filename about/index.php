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
			<h3>History</h3>
			<ul>
				<li>
					Mylyn was created by <a target="_blank" href="http://en.wikipedia.org/wiki/Mik_Kersten">Mik Kersten<img border="0" src="/mylyn/images/external-link.png"></a> as a part of his PhD thesis, supervised by Gail Murphy at the Software Practices Lab at UBC.  Tasktop Technologies was founded by the creators of Mylyn in order to lead the open source project, provide commercial support and extensions, and enable the rapidly growing ecosystem of tools built on Mylyn.
				</li>
				<li>
					Background on Mylyn technology, including research papers, is available at <a target="_blank" href="http://www.tasktop.com/mylyn/resources">tasktop.com<img border="0" src="/mylyn/images/external-link.png"></a>. 
				</li>
			</ul>
		</div>
	
		<div class="homeitem3col">
			<h3>Legal</h3>
			<ul>
				<li><a href="http://www.eclipse.org/legal/epl-v10.html">License:</a> Eclipse Public License (EPL), <a href="http://www.eclipse.org/legal/eplfaq.php">FAQ</a></li>
				<li><a href="/mylyn/doc/mylyn-iplog.csv">Project IP log</a>: described in the eclipse.org project development process <a href="http://www.eclipse.org/projects/dev_process/project-log.php">document</a></li>
			</ul>
		</div>
		
		<div class="homeitem3col">
			<h3>Release Reviews</h3>
			<ul>
				<li><a href="/mylyn/publications/2011-03-mylyn-3.5-release-review.ppt"><img border=0 src="/mylyn/images/icon-ppt.gif"> Mylyn 3.5 release review</a></li>
				<li><a href="/mylyn/publications/2010-06-mylyn-3.4-release-review.ppt"><img border=0 src="/mylyn/images/icon-ppt.gif"> Mylyn 3.4 release review</a></li>
				<li><a href="/mylyn/publications/2009-10-mylyn-3.3-release-review.ppt"><img border=0 src="/mylyn/images/icon-ppt.gif"> Mylyn 3.3 release review</a></li>
				<li><a href="/mylyn/publications/2009-06-mylyn-3.2-release-review.ppt"><img border=0 src="/mylyn/images/icon-ppt.gif"> Mylyn 3.2 release review</a></li>
				<li><a href="/mylyn/publications/2009-03-mylyn-3.1-release-review.ppt"><img border=0 src="/mylyn/images/icon-ppt.gif"> Mylyn 3.1 release review</a></li>
				<li><a href="/mylyn/publications/2008-06-mylyn-3.0-release-review.ppt"><img border=0 src="/mylyn/images/icon-ppt.gif"> Mylyn 3.0 release review</a></li>
				<li><a href="/mylyn/publications/2008-02-mylyn-2.3-release-review.ppt"><img border=0 src="/mylyn/images/icon-ppt.gif"> Mylyn 2.3 release review</a></li>
				<li><a href="/mylyn/publications/2007-12-mylyn-2.2-release-review.ppt"><img border=0 src="/mylyn/images/icon-ppt.gif"> Mylyn 2.2 release review</a></li>
				<li><a href="/mylyn/publications/2007-10-mylyn-2.1-release-review.ppt"><img border=0 src="/mylyn/images/icon-ppt.gif"> Mylyn 2.1 release review</a></li>
				<li><a href="/mylyn/publications/2007-06-mylyn-2.0-release-review.ppt"><img border=0 src="/mylyn/images/icon-ppt.gif"> Mylyn 2.0 release review</a></li>
				<li><a href="/mylyn/publications/2006-11-mylar-1.0-release-review.ppt"><img border=0 src="/mylyn/images/icon-ppt.gif"> Mylar 1.0 release review</a></li>
				<li><a href="/mylyn/publications/2005-05-mylar-creation-review.ppt"><img border=0 src="/mylyn/images/icon-ppt.gif"> Mylar project creation review</a> and <a href="/mylyn/publications/2005-04-mylar-proposal.html">Project Proposal</a> (May 2005)</li>
			</ul>
		</div>
		
		<div class="homeitem3col">
			<h3>Historical Presentations</h3>
			<ul>
				<li>
					<a href="/mylyn/presentations/2007-12-mylyn-webinar.ppt"><img border=0 src="/mylyn/images/icon-ppt.gif"></a>
					<a href="http://live.eclipse.org/node/412"><img border=0 src="/mylyn/images/icon-presentation.gif"></a> 
                    <a href="http://live.eclipse.org/node/412">Webcast on Mylyn 2.2</a> by Mik Kersten (Dec 2007, 50 min)
                </li>
				<li>
		            <a href="/mylyn/presentations/2007-06-mylyn-talk.ppt"><img border=0 src="/mylyn/images/icon-ppt.gif">
	            	Mylyn 2.0 Talk</a> (June 2006)
	            </li>
	            <li>
		            <a href="/mylyn/presentations/2007-04-mylyn-tutorial.ppt"><img border=0 src="/mylyn/images/icon-ppt.gif">
	            	Mylyn 2.0 Tutorial</a> (last updated April 2006)
	            </li>
				<li>
		            <a href="/mylyn/publications/2006-03-mylar-eclipsecon.ppt"><img border=0 src="/mylyn/images/icon-ppt.gif">
	            	Mylar: a Task Focused UI for Eclipse</a> (EclipseCon talk, Mar 2006)
	            </li>			
	            <li>
	            	<a href="/mylyn/publications/2005-03-mylar-eclipsecon-web.ppt"><img border=0 src="/mylyn/images/icon-ppt.gif">
	            	Mylar: a degree-of-interest model for Eclipse</a> (EclipseCon talk, Mar 2005)
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
