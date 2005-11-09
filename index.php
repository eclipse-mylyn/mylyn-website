<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Mylar Technology Project";
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
          	<td valign="top"><img border=0 src="images/screenshot-mylar-small.gif"></td>
          	<td valign="top">&nbsp;</td>
            <td valign="top">
				<p>Mylar is an information focusing user interface 
				seamlessly integrated with Eclipse.  It makes 
				working with very large workspaces much easier by 
				monitoring your interaction with Eclipse, and creating a 
				context from the subset of the system that is relevant 
				to the task at hand. Once explicit, this <i>task 
				context</i> drives the Eclipse UI to highlight the 
				interesting elements, filter out the uninteresting, and 
				actively search for related information. The result is 
				a significant reduction in the amount of scrolling, 
				navigating, and searching required to complete a task.&nbsp; 
				Mylar�s facilities for working with task contexts also 
				facilitate task planning, context switching, reusing 
				past efforts, and sharing expertise.</p>
				<p><i>Please note that the Mylar site uses the still experimental
				<a href="http://eclipse.org/phoenix/">Phoenix infrastructure<a></i>.</p>
		  	</td>
          </tr>
        </table>

		<div class="homeitem">
			<h3>User Community</h3>
			<ul>
				<li>
                    <a href="http://dev.eclipse.org/mailman/listinfo/mylar-announce">
					mylar-announce@eclipse.org:</a> releases and events 
					[<a href="http://dev.eclipse.org/mhonarc/lists/mylar-dev/maillist.html">archive</a>]</li>
				<li>
                    <a href="http://dev.eclipse.org/mailman/listinfo/mylar-users">
					mylar-users@eclipse.org:</a> questions discussions
					[<a href="http://dev.eclipse.org/mhonarc/lists/mylar-users/maillist.html">archive</a>]</li>
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=%5Bdiscussion%5D&product=Mylar&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					Bugzilla discussions</a> of ideas, enhancements, and UI issues.</li>
				<li><a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Mylar">
					Submit bug reports</a> for problems and enhancement requests.</li>
			</ul>
		</div>

		<div class="homeitem">
			<h3>Events</h3>
			<ul>
				<li>
                    <a href="http://canuck.gda.itesm.mx/eclipsezilla/show_bug.cgi?id=41">
                    Mylar tutorial</a> proposed for EclipseCon 2006
                    <a href="http://canuck.gda.itesm.mx/eclipsezilla/show_bug.cgi?id=41">(vote here)</a></li>
				<li>
                    <a href="http://canuck.gda.itesm.mx/eclipsezilla/show_bug.cgi?id=164">
                    Mylar talk</a> proposed for EclipseCon 2006
                    <a href="http://canuck.gda.itesm.mx/eclipsezilla/show_bug.cgi?id=164">(vote here)</a></li>
			</ul>
		</div> 
	</div> 

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Latest Release</h6>
			<ul>
				<li><a href="dl.php">Mylar 0.4.1</a><span class="dates"> 
				<br>(Nov. 4, 2005)</span><br>&nbsp;</li>
				<li>Mylar 0.4.2 scheduled<br>
				for Nov. 14th<span class="dates"></li>
			</ul> 
		</div> 
		<div class="sideitem">
			<h6>News & Blogs</h6>
			<ul>
				<li>Kirill Grouchnikov: <a href="http://weblogs.java.net/blog/kirillcool/archive/2005/11/mylar_a_very_us.html">
				A very useful Eclipse plugin</a>
				<br><span class="dates">(Nov. 7, 2005)</span><br>&nbsp;</li>
				<li>Eugene Kuleshov: <a href="http://jroller.com/page/eu?entry=the_most_addictive_eclipse_plugin">The most addictive Eclipse plugin ever</a>
				<br><span class="dates">(Nov. 1, 2005)</span><br>&nbsp;</li>
				<li>First public release<br><span class="dates">(Oct. 28, 2005)</span><br>&nbsp;</li>
				<li>Ed Burnette: <a href="http://www.eclipsezone.com/eclipse/forums/t20933.html">Mylar is the next killer app for Eclipse</a>
				<br><span class="dates">(July 28, 2005)</span><br>&nbsp;</li>
				<li>First user study preview release<br><span class="dates">(July 11, 2005)</span><br>&nbsp;</li>
				<li>Eclipse.org project created<br><span class="dates">(June 13, 2005)</span></li>
			</ul>
		</div>
	</div>
</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
