<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Mylar Archive";
	$pageKeywords	= "Mylar, Eclipse";
	$pageAuthor		= "Mik Kersten";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);
	# End: page-specific settings
	
	include("_sideCommon.php");
	include("_sideNews.php");
	include("_sideIncubator.php");
	$html = <<<EOHTML
  
<div id="maincontent">
	<div id="midcolumn">
		<div align="center"><h1>$pageTitle</h1></div>
		
		<div class="homeitem3col">
			<h3>News & Blogs Archive</h3>
			<ul>
				<li>Peter Hendriks: <a href="http://blogs.infosupport.com/peterhe/archive/2006/05/12/6051.aspx">
				Eclipse Mylar: Less is More</a>
				<span class="dates">(May 12, 2006)</span></li>
				
				<li>Riyad Kalla: <a href="http://www.eclipsezone.com/articles/mylar/">
				Revolutionize your productivity with Eclipse Mylar</a>
				<span class="dates">(Apr. 10, 2006)</span></li>

				<li>Eugene Kuleshov: <a href="http://jroller.com/page/eu?entry=jira_support_in_mylar">
				Jira support in Mylar</a>
				<span class="dates">(Feb. 23, 2006)</span></li>
				
				<li>Ryan Markel: <a href="http://blog.platinumsolutions.com/node/15">
				Mylar Technology Project — Eclipse Just Got Easier</a>
				<span class="dates">(Jan. 16, 2006)</span></li>
								
				<li>Haranguing Garden: <a href="http://chambery.subfire.org/wordpress/?p=38">
				Jira support in Mylar</a>
				<span class="dates">(Jan. 11, 2006)</span></li>
								
				<li> Gedanken Verloren: <a href="http://www.jroller.com/page/musk?entry=eclipse_killer_plugin_mylar">
				Eclipse Killer Plugin Mylar</a>
				<span class="dates">(Nov. 14, 2005)</span></li>
				
				<li>Kirill Grouchnikov: <a href="http://weblogs.java.net/blog/kirillcool/archive/2005/11/mylar_a_very_us.html">
				A very useful Eclipse plugin</a>
				<span class="dates">(Nov. 7, 2005)</span></li>
				
				<li>Eugene Kuleshov: <a href="http://jroller.com/page/eu?entry=the_most_addictive_eclipse_plugin">The most addictive Eclipse plugin ever</a>
				<span class="dates">(Nov. 1, 2005)</span></li>
				
				<li>Ed Burnette: <a href="http://www.eclipsezone.com/eclipse/forums/t20933.html">Mylar is the next killer app for Eclipse</a>
				<span class="dates">(July 28, 2005)</span></li>
							
				
			</ul>
		</div> 				

		<div class="homeitem3col">
			<h3>Event Archive</h3>
			<ul>
				<li>Mylar BoF at <a href="http://www.eclipsecon.org">EclipseCon 2006</a>, March 21, Grand Ballroom, Santa Clara Convention Center, Santa Clara, USA</li>

				<li>First public release, 0.4, <span class="dates">(Oct. 28, 2005)</span></li>
				
				<li>Eclipse.org project created, <span class="dates">(June 13, 2005)</span></li>
				
				<li>First user study preview release, <span class="dates">(July 11, 2005)</span></li>
			</ul>
		</div> 
	</div> 

	<div id="rightcolumn">
		$commonside
		$newsside
		$incubatorside
	</div>
</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
