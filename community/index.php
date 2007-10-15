<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Mylyn Community";
	$pageKeywords	= "Mylyn, Eclipse";
	$pageAuthor		= "Mik Kersten";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);
	
	include("_sideCommon.php");
		
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<!--	<div align="center"><h1>$pageTitle</h1></div> -->
		<div class="homeitem3col">
			<h3>Newsgroup</h3>
			<ul>
				<table border="0"> 
	        		<tr>
	        		<td valign="top">
	        			<a href="/mylyn/bugs"><img border="0" src="/mylyn/images/community.jpg"></a>
	        		</td>
			        <td>
				        The Mylyn Newsgroup is the main forum for user questions and support.
				    </td> 
					</tr>
				</table>
				<li>
	                <a href="news://news.eclipse.org/eclipse.tools.mylyn">, 
					News Reader Access</a> for instructions see the <a href="http://wiki.eclipse.org/index.php/Webmaster_FAQ#How_do_I_access_the_Eclipse_newsgroups.3F">Webmaster FAQ</a>
				</li>
				<li>
					<a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.tools.mylyn">Web Access</a>,
					registration is <a href="http://www.eclipse.org/newsgroups/register.php">required</a>. 
				</li>
				<li>
					<a href="http://dev.eclipse.org/newslists/news.eclipse.tools.mylyn/maillist.html">Archive</a>, 
					<a href="http://dev.eclipse.org/newslists/news.eclipse.technology.mylar/maillist.html">Mylar Archive</a>
				</li>
			</ul>
		</div>

		<div class="homeitem3col">
			<h3>Mailing Lists</h3>
			<table border="0"> 
        		<tr>
        		<td valign="top">
        			&nbsp;&nbsp;&nbsp;<a href="/mylyn/bugs"><img border="0" src="/mylyn/images/image-email.gif"></a>
        		</td>
		        <td>
			       	We recommend that all users subscribe to the low traffic announce mailing list.  Contributors
			       	should subscribe to the dev mailing list and those building on Mylyn to the integrators
			       	mailing list.
			    </td> 
				</tr>
			</table>
			<ul> 
				<li>
	                <a href="http://dev.eclipse.org/mailman/listinfo/mylyn-announce">
					mylyn-announce@eclipse.org:</a> major releases and events
					<a href="http://dev.eclipse.org/mhonarc/lists/mylyn-announce/maillist.html">[archive]</a>
					<a href="http://dev.eclipse.org/mhonarc/lists/mylar-announce/maillist.html">[old archive]</a></li>
				<li>
	                <a href="http://dev.eclipse.org/mailman/listinfo/mylyn-integrators">
					mylyn-integrators@eclipse.org:</a> developer discussions and planning
					<a href="http://dev.eclipse.org/mhonarc/lists/mylyn-integrators/maillist.html">[archive]</a></li>
				<li>
	                <a href="http://dev.eclipse.org/mailman/listinfo/mylyn-dev">
					mylyn-dev@eclipse.org:</a> developer discussions and planning
					<a href="http://dev.eclipse.org/mhonarc/lists/mylyn-dev/maillist.html">[archive]
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
				        <p>The preferred way of reporting and discussing defects and enhancement requests is via <a href="/mylyn/bugs">Bug Reports</a>.
				    </td> 
				</tr>
			</table>
		</div>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
