<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Mylyn Presentations";
	$pageKeywords	= "Mylyn, Eclipse";
	$pageAuthor		= "Mik Kersten";
		
	# Paste your HTML content between the EOHTML markers!	
	include("_sideMylarIs.php");
	include("_sideNews.php");
	include("_sideCommon.php");
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">

		Moved to: <a href="http://www.eclipse.org/mylyn/about"><b>History & Legal</b></a>

		<!--
		<div class="homeitem3col">
			<h3>Selected Presentations</h3>
			<ul>
                <li>
					<a href="http://live.eclipse.org/node/442"><img border=0 src="/mylyn/images/icon-presentation.gif">
					RedMonkTV: JIRA Connector for Mylyn</a> by Mik Kersten and Michael Coté (December 2007, 20 minutes)
                </li> 
				<li>
					<a href="http://live.eclipse.org/node/325"><img border=0 src="/mylyn/images/icon-presentation.gif">
					RedMonkTV: Mylyn Conversation and Demo</a> by Mik Kersten and Michael Coté (July 2007, 18 minutes)
                </li> 
			</ul>
		</div>
		-->
		
		<!--	
		<div class="homeitem3col">
			<h3>Research Papers</h3>
			<ul>
	            <li>
		            <a href="/mylyn/publications/2006-11-mylar-fse.ppt"><img border=0 src="/mylyn/images/icon-ppt.gif"></a>
		            <a href="/mylyn/publications/2006-11-mylar-fse.pdf"><img border=0 src="/mylyn/images/icon-pdf.gif">
		            Using task context to improve programmer productivity</a> by Mik Kersten and Gail Murphy (Nov 2006, <a href="http://www.cs.uoregon.edu/fse-14/">Foundations of Software Engineering</a> conference paper)
	            </li>
	            <li>
		            <a href="/mylyn/publications/2006-11-mylar-cscw.ppt"><img border=0 src="/mylyn/images/icon-ppt.gif"></a>
		            <a href="/mylyn/publications/2006-11-mylar-cscw.pdf"><img border=0 src="/mylyn/images/icon-pdf.gif">
		            WYSIWYN: Using Task Focus to Ease Collaboration</a> by Mik Kersten, Rob Elves and Gail Murphy (Nov 2006, <a href="http://software-research.ca/social-se/">CSCW</a> workshop paper)
	            </li>
	            <li>
		            <a href="/mylyn/publications/2005-03-mylar-aosd-web.ppt"><img border=0 src="/mylyn/images/icon-ppt.gif"></a>
		            <a href="/mylyn/publications/2005-03-mylar-aosd.pdf"><img border=0 src="/mylyn/images/icon-pdf.gif">
		            Mylar: a degree-of-interest model for IDEs</a> by Mik Kersten and Gail Murphy (Mar 2005, <a href="http://aosd.net/2005/index.php">AOSD</a> conference paper)
	            </li>
			</ul> 
		<p>
		
		For more publications see the <a href="http://www.eclipse.org/mylyn/news">Archive page</a>.
		
		Also see <a href="http://wiki.eclipse.org/index.php/Mylyn_Related_Research_Projects">related research projects</a>
		for links to other papers related to Mylar.  To add a new publication <a href="http://www.eclipse.org/mylyn/bugs">file a bug</a>.
		</p>
		</div>
		-->
		
		
	</div>
	</div>
	
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
