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
	include("../_sideMylarIs.php");
	include("_sideFeedback.php");
	include("_sidePhase.php");
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
	
		<div class="homeitem3col">
			<h3>History</h3>
			<ul>
				<li>
					Mylyn was created by <a href="http://tasktop.com/blog">Mik Kersten</a> as a part of his PhD thesis, supervised by Gail Murphy at the Software Practices Lab at UBC.  Tasktop Technologies was founded by the creators of Mylyn in order to lead the open source project, provide commercial support and extensions, and enable the rapidly growing ecosystem of tools built on Mylyn.
				</li>
				<li>
					Background information on Mylyn technology including <a href="http://www.tasktop.com/resources/technology/">research papers</a> and other resources is available. 
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
			<h3>Project Reviews</h3>
			<ul>
				<li><a href="/mylyn/publications/2008-02-mylyn-2.3-release-review.ppt">Mylyn 2.3 release review</a></li>
				<li><a href="/mylyn/publications/2007-12-mylyn-2.2-release-review.ppt">Mylyn 2.2 release review</a></li>
				<li><a href="/mylyn/publications/2007-10-mylyn-2.1-release-review.ppt">Mylyn 2.1 release review</a></li>
				<li><a href="/mylyn/publications/2007-06-mylyn-2.0-release-review.ppt">Mylyn 2.0 release review</a></li>
				<li><a href="/mylyn/publications/2006-11-mylar-1.0-release-review.ppt">Mylar 1.0 release review</a></li>
				<li><a href="/mylyn/publications/2005-05-mylar-creation-review.ppt">Mylar project creation review</a> and <a href="/mylyn/publications/2005-04-mylar-proposal.html">Project Proposal</a> (May 2005)</li>
			</ul>
		</div>
	</div> 

	<p>&nbsp;</p>
	<p>&nbsp;</p>
	
	<div id="rightcolumn">
		<?php print $mylarIsSide ?>
		$sidePhase
	</div>

</div>





EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
