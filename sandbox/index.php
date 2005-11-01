<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Mylar";
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
	$html = <<<EOHTML
  
<div id="maincontent">
	<div id="midcolumn">
		<div align="center"><h1>$pageTitle</h1></div>
			<table border="0" cellpadding="4">
	          <tr>
	            <td width="20%">
	            	<img border=0 src="../images/screenshot-mylar-small.gif">
	           	</td>
	            <td width="50%">
						<p class="MsoNormal">Mylar is an information focusing UI 
						layer seamlessly integrated over Eclipse.  It makes 
						working with very large workspaces much easier by 
						monitoring your interaction with Eclipse, and creating a 
						context from the subset of the system that is relevant 
						to the task at hand. Once explicit, this <i>task 
						context</i> drives the Eclipse UI to highlight the 
						interesting elements, filter out the uninteresting, and 
						actively search for related information. The result is 
						a significant reduction in the amount of scrolling, 
						navigating, and searching required to complete a task.&nbsp; 
						Mylar’s facilities for working with task contexts also 
						facilitate task planning, context switching, reusing 
						past efforts, and sharing expertise.</td>
				<td>
	            	&nbsp;&nbsp;&nbsp;
	           	</td>
	          </tr>
	        </table>
    	</div>

		<div class="homeitem">
			<h3>User Community</h3>
			<ul>
				<li>
                        <a href="mailto:mylar-users@eclipse.org">
						mylar-announce@eclipse.org</a> release and event 
				announcements, (<a href="http://dev.eclipse.org/mailman/listinfo/mylar-announce">subscribe/unsubscribe</a>,
                        <a href="http://dev.eclipse.org/mhonarc/lists/mylar-announce/maillist.html">
						archive</a>)</li>
				<li>
                        <a href="mailto:mylar-users@eclipse.org">
						mylar-users@eclipse.org</a>
                        user discussions, questions, and suggestions, (<a href="http://dev.eclipse.org/mailman/listinfo/mylar-users">subscribe/unsubscribe</a>,
                        <a href="http://dev.eclipse.org/mhonarc/lists/mylar-users/maillist.html">
						archive</a>)</li>
				<li><a href="news://news.eclipse.org/eclipse.technology.mylar">
				news://news.eclipse .org/eclipse.technology.mylar</a> not used 
				frequently (<a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.technology.mylar">simple web interface</a>,
				<a href="http://dev.eclipse.org/newslists/news.eclipse.technology.mylar/maillist.html">
			newsgroup archive</a>)</li>
			</ul>
		</div>

		<div class="homeitem">
			<h3>User Community</h3>
			<ul>
				<li>
                        <a href="mailto:mylar-users@eclipse.org">
						mylar-announce@eclipse.org</a> release and event 
				announcements, (<a href="http://dev.eclipse.org/mailman/listinfo/mylar-announce">subscribe/unsubscribe</a>,
                        <a href="http://dev.eclipse.org/mhonarc/lists/mylar-announce/maillist.html">
						archive</a>)</li>
				<li>
                        <a href="mailto:mylar-users@eclipse.org">
						mylar-users@eclipse.org</a>
                        user discussions, questions, and suggestions, (<a href="http://dev.eclipse.org/mailman/listinfo/mylar-users">subscribe/unsubscribe</a>,
                        <a href="http://dev.eclipse.org/mhonarc/lists/mylar-users/maillist.html">
						archive</a>)</li>
				<li><a href="news://news.eclipse.org/eclipse.technology.mylar">
				news://news.eclipse .org/eclipse.technology.mylar</a> not used 
				frequently (<a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.technology.mylar">simple web interface</a>,
				<a href="http://dev.eclipse.org/newslists/news.eclipse.technology.mylar/maillist.html">
			newsgroup archive</a>)</li>
			</ul>
		</div>
		
		<div id="rightcolumn">
			<div class="sideitem">
				<h6>News</h6>
				<ul>
					<li><a href="#">First public release</a><span class="dates"> (October 28, 2005)</span></li>
					<li>Ed Burnette: <a href="http://www.eclipsezone.com/eclipse/forums/t20933.html">Mylar is the next killer app for Eclipse..</a><span class="dates"> (July 2005)</span></li>
					<li><a href="#">User study preview release</a><span class="dates"> (July 11, 2005)</span></li>
					<li><a href="#">Eclipse.org project created</a><span class="dates"> (June 13, 2005)</span></li>
				</ul>
			</div>
		</div>
	</div>
	

	<hr class="clearer" />
</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
