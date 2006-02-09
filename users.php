<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Mylar Users";
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
          
        <p>Mylar documentation is currently sparse, and distributed with the release.  The flash
        videos provide an introduction to the basic features.  Currently the best 
        way to learn about Mylar is by reading the 
        <a href="/mylar/doc/new.php">New & Noteworthy</a>.<p>

        <div class="homeitem">
			<h3>Newsgroups and Mailing Lists</h3>
			<ul>
				<li>
                    <a href="news://news.eclipse.org/eclipse.technology.mylar">
					mylar newsgroup:</a> user discussions and minor release announcements
					<a href="http://dev.eclipse.org/newslists/news.eclipse.technology.mylar/maillist.html">[archive]</a></li>
				<li>
                    <a href="http://dev.eclipse.org/mailman/listinfo/mylar-announce">
					mylar-announce@eclipse.org:</a> major release and event announcements
					[<a href="http://dev.eclipse.org/mhonarc/lists/mylar-dev/maillist.html">archive</a>]</li>
				<li>
                    <a href="http://dev.eclipse.org/mailman/listinfo/mylar-dev">
					mylar-dev@eclipse.org:</a> developer discussions and planning
					<a href="http://dev.eclipse.org/mhonarc/lists/mylar-dev/maillist.html">[archive]</a></li>
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=%5Bdiscussion%5D&product=Mylar&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					Bugzilla discussions</a> of ideas, enhancements, and UI issues.</li>
			</ul>
		</div>      
            
        <div class="homeitem">
			<h3>Presentations and Publications</h3>
			<ul>
				<li>
                    May 2005, eclipse.org 
                    <a href="publications/2005-04-mylar-proposal.html">
                    Project creation review [HTML proposal]</a>
                    <a href="publications/2005-05-mylar-creation-review.ppt">
					[PPT&nbsp;presentation]</a>
                </li>
                <li>
                	March 2005, EclipseCon talk: 
                	<a href="publications/2005-03-mylar-eclipsecon-web.ppt">
                	Mylar: a degree-of-interest model for Eclipse [PPT&nbsp;presentation]</a>
                </li>
                <li>
                	March 2005, AOSD talk: 
                	<a href="publications/2005-03-mylar-aosd-web.ppt">
                	Mylar: a degree-of-interest model for IDEs [PPT&nbsp;presentation]</a>&nbsp;
					<a href="publications/2005-03-mylar-aosd.pdf">[PDF&nbsp;paper]</a>
                </li>
			</ul> 
		</div>       
	</div>
	
	<div id="rightcolumn">
		$commonside
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
