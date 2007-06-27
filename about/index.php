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
	include("_sideMylarIs.php");
	include("_sideFeedback.php");
	include("_sidePhase.php");
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<br>&nbsp;
		<div class="homeitem3col">
			<h3>About Mylyn</h3>
			<ul>
				<li>
					A history and credits of Mylyn (prefiously named Mylar) are listed in the <a href="http://eclipse.org/mylar/doc/release-1.0.php">About Mylar 1.0</a>
				</li>
				<li>
					The goal of the Mylyn project is to evolve a focused user interface
					and task management for the Eclipse platform.  At the core of Mylyn is a mechanism
					that that makes our interaction with a system explicit.
					Existing tools make the structure of the system explicit,
					and as a result overload us with irrelevant 
					information when the size of a system dwarfs 
					what we need to know to complete a task.
					<!-- 
					Initially the Mylyn project will provide a model for 
					exposing interaction history via task contexts, user interface 
					facilities for making these contexts explicit, and support for
					Java development.-->
				</li>
				<li>
					Mylyn was created by <a href="http://kerstens.org/mik">Mik Kersten</a> 
					as a part of his PhD thesis, supervised by
					<a href="http://www.cs.ubc.ca/~murphy/">Gail Murphy</a> and initially supported by the <a href="http://www.cs.ubc.ca/labs/spl/">
					Software Practices Lab at UBC</a>, the
					<a href="https://www-927.ibm.com/ibm/cas/">IBM 
					Centre for Advanced Studies</a>, and
					<a href="http://www.nserc-crsng.gc.ca/">NSERC</a>.
				</li>
			</ul>
		</div>
		
		<div class="homeitem3col">
			<h3>Legal</h3>
			<ul>
				<li><a href="http://www.eclipse.org/legal/epl-v10.html">License:</a> Eclipse Public License (EPL), <a href="http://www.eclipse.org/legal/eplfaq.php">FAQ</a></li>
			</ul>
			<ul>
				<li><a href="doc/mylyn-iplog.csv">Project IP log</a>: described in the eclipse.org project development process <a href="http://www.eclipse.org/projects/dev_process/project-log.php">document</a></li>
			</ul>
		</div>
	</div> 
	
	<div id="rightcolumn">
		$mylarIsSide
		$sidePhase
	</div>
	
	<p>&nbsp;</p>
	<p>&nbsp;</p>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
