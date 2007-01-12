<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Selected Publications";
	$pageKeywords	= "Mylar, Eclipse";
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
			<h3>Selected Articles</h3>
			<ul>
				<li>
		            <a href="http://www-128.ibm.com/developerworks/java/library/j-mylar1/"><img border=0 src="images/icon-webdoc.gif">
		           	Task Focused Programming with Mylar, Part 1: Integrated task management for Eclipse</a> by Mik Kersten (Oct 2006)
	            </li>
	            <li>
		            <a href="http://www-128.ibm.com/developerworks/java/library/j-mylar2/index.html"><img border=0 src="images/icon-webdoc.gif">
		           	Task Focused Programming with Mylar, Part 2: Automated context management for Eclipse</a> by Mik Kersten (Oct 2006)
	            </li>
	            <li>
					<a href="http://wbeaton.blogspot.com/2006/12/five-reasons-to-love-mylar-part-one.html"><img border=0 src="images/icon-webdoc.gif">
					Five Reasons to Love Mylar: Part One</a>
					by Wayne Beaton <span class="dates">(Dec 7, 2006)</span>, 
					<a href="http://wbeaton.blogspot.com/2006/12/five-reasons-to-love-mylar-part-two.html">
					Part Two</a> <span class="dates">(Dec 8, 2006)</span>,
					<a href="http://wbeaton.blogspot.com/2006/12/five-reasons-to-love-mylar-part-three.html">
					Part Three</a> <span class="dates">(Dec 11, 2006)</span>,
					<a href="http://wbeaton.blogspot.com/2006/12/five-reasons-to-love-mylar-part-four.html">
					Part Four </a><span class="dates">(Dec 11, 2006)</span>, 
					<a href=""http://wbeaton.blogspot.com/2006/12/five-reasons-to-love-mylar-part-five.html">
					Part Five </a><span class="dates">(Dec 13, 2006)</span><br>
				</li> 
			</ul> 
		</div>
			
		<div class="homeitem3col">
			<h3>Selected Presentations</h3>
			<ul>
				<li>
                    <a href="http://adobedev.adobe.acrobat.com/p46246963"><img border=0 src="images/icon-flash.gif">
					Webinar: Task-Focused Programming with Mylar</a> by Mik Kersten (56 min, Oct 2006)
                </li>
	            <li>
		            <a href="http://drdobbs.com/dept/opensource/196602830"><img border=0 src="images/icon-podcast.gif">
	            	Eclipsing Information Overload</a> Mik Kersten interviewed by Jonathan Erickson (Dr.Dobbs Podcast, Dec 2006)
	            </li>
	            <li>
		            <a href="publications/2006-03-mylar-eclipsecon.ppt"><img border=0 src="images/icon-ppt.gif">
	            	Mylar: a Task Focused UI for Eclipse</a> (EclipseCon talk, Mar 2006)
	            </li>			
	            <li>
		            <a href="publications/2006-03-mylar-eclipsecon.ppt"><img border=0 src="images/icon-ppt.gif">
	            	Mylar: a Task Focused UI for Eclipse</a> (EclipseCon talk, Mar 2006)
	            </li>
	            <li>
	            	<a href="publications/2005-03-mylar-eclipsecon-web.ppt"><img border=0 src="images/icon-ppt.gif">
	            	Mylar: a degree-of-interest model for Eclipse</a> (EclipseCon talk, Mar 2005)
	            </li>
			</ul> 
		</div>
		
		<div class="homeitem3col">
			<h3>Research Papers</h3>
			<ul>
				<!--
	            <li>
		            <a href="publications/2006-07-mylar-ieee.pdf"><img border=0 src="images/icon-pdf.gif">
	            	How are Java software developers using the Eclipse IDE?</a> by Murphy, Kersten and Findlater. 
	            	(July 2006, IEEE Software article<a href="#ieee-copyright">*</a>)
	            </li>
	            -->
	            <li>
		            <a href="publications/2006-11-mylar-fse.ppt"><img border=0 src="images/icon-ppt.gif"></a>
		            <a href="publications/2006-11-mylar-fse.pdf"><img border=0 src="images/icon-pdf.gif">
		            Using task context to improve programmer productivity</a> by Mik Kersten and Gail Murphy (Nov 2006, <a href="http://www.cs.uoregon.edu/fse-14/">Foundations of Software Engineering</a> conference paper)
	            </li>
	            <li>
		            <a href="publications/2006-11-mylar-cscw.ppt"><img border=0 src="images/icon-ppt.gif"></a>
		            <a href="publications/2006-11-mylar-cscw.pdf"><img border=0 src="images/icon-pdf.gif">
		            WYSIWYN: Using Task Focus to Ease Collaboration</a> by Mik Kersten, Rob Elves and Gail Murphy (Nov 2006, <a href="http://software-research.ca/social-se/">CSCW</a> workshop paper)
	            </li>
	            <li>
		            <a href="publications/2005-03-mylar-aosd-web.ppt"><img border=0 src="images/icon-ppt.gif"></a>
		            <a href="publications/2005-03-mylar-aosd.pdf"><img border=0 src="images/icon-pdf.gif">
		            Mylar: a degree-of-interest model for IDEs</a> by Mik Kersten and Gail Murphy (Mar 2005, <a href="http://aosd.net/2005/index.php">AOSD</a> conference paper)
	            </li>
			</ul> 
		</div>
		<p>
		
		For all publications see the <a href="http://www.eclipse.org/mylar/archive.php">Archive page</a>.
		
		Also see <a href="http://wiki.eclipse.org/index.php/Mylar_Related_Research_Projects">related research projects</a>
		for links to other papers related to Mylar.
		</p>
		<!--
		<p><a name="ieee-copyright">*</a> <font size=-3>Copyright: © 2006 IEEE. Personal use of this material is permitted. However, permission to reprint/republish this material for advertising or promotional purposes or for creating new collective works for resale or redistribution to servers or lists, or to reuse any copyrighted component of this work in other works must be obtained from the IEEE.</font></p>
		-->
	</div>
	</div>
	
	<div id="rightcolumn">
		$newsside
	</div>
		
	
	<p>&nbsp;</p>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
