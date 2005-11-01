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
	            <td valign="top">
	            	<img border=0 src="../images/screenshot-mylar-small.gif">
	           	</td>
	            <td valign="top">
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
						past efforts, and sharing expertise.
			  	</td>
	          </tr>
	        </table>
    	</div>

		<div class="homeitem">
			<h3>User Community</h3>
			<ul>
				<li>
                    <a href="mailto:mylar-users@eclipse.org">
					mylar-announce@eclipse.org</a> release and event announcements<br>
					(<a href="http://dev.eclipse.org/mailman/listinfo/mylar-announce">subscribe/unsubscribe</a>,
                    <a href="http://dev.eclipse.org/mhonarc/lists/mylar-announce/maillist.html">archive</a>)</li>
				<li>
                    <a href="mailto:mylar-users@eclipse.org">
					mylar-users@eclipse.org</a>user discussions, questions, and suggestions(<a href="http://dev.eclipse.org/mailman/listinfo/mylar-users">subscribe/unsubscribe</a>,
					<br><a href="http://dev.eclipse.org/mhonarc/lists/mylar-users/maillist.html">archive</a>)</li>
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=%5Bdiscussion%5D&product=Mylar&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					Bugzilla report discussions</a> are used to discuss ideas, enhancements, and UI issues.</li>
			</ul>
		</div>

		<div id="rightcolumn">
			<div class="sideitem">
				<h6>Releases</h6>
				<ul>
					<li><a href="#">Mylar 0.4.0</a><span class="dates"> (October 28, 2005)</span><br>&nbsp;</li>
					<li><a href="#">Mylar 0.3.12</a><span class="dates"> (October 28, 2005)</span><br>&nbsp;</li>
				</ul>
			</div>
		</div>
		
		<div id="rightcolumn">
			<div class="sideitem">
				<h6>News</h6>
				<ul>
					<li><a href="#">First public release</a><span class="dates"> (October 28, 2005)</span><br>&nbsp;</li>
					<li>Ed Burnette: <a href="http://www.eclipsezone.com/eclipse/forums/t20933.html">Mylar is the next killer app for Eclipse..</a><span class="dates"> (July 2005)</span><br>&nbsp;</li>
					<li><a href="#">User study preview release</a><span class="dates"> (July 11, 2005)</span><br>&nbsp;</li>
					<li><a href="#">Eclipse.org project created</a><span class="dates"> (June 13, 2005)</span><br>&nbsp;</li>
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
