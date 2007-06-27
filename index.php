<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Mylyn Open Source Project";
	$pageKeywords	= "Mylar, Eclipse";
	$pageAuthor		= "Mik Kersten";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);
	# End: page-specific settings
	
	include("_sideCommon.php");
	include("_sideFeedback.php");
	include("_sideNews.php");
	$html = <<<EOHTML
  
<div id="maincontent">
	<div id="midcolumn">
	  	<div align="left">
			<table border="0" cellpadding="4">
	          <tr>
	            <td valign="top">
					Eclipse Mylyn is a task-focused UI that reduces information overload and makes multi-tasking easy.  
					It does this by making tasks a first class part of Eclipse, and integrating rich and offline editing for
					repositories such as Bugzilla, Trac, and JIRA.  Once your tasks are integrated, Mylyn monitors your work activity to identify information relevant to the task-at-hand, and uses this task context to focus the Eclipse UI on the interesting information, hide the uninteresting, and automatically find what's related. This puts the information you need to get work done at your fingertips and improves productivity by reducing searching, scrolling, and navigation. By making task context explicit Mylyn also facilitates multitasking, planning, reusing past efforts, and sharing expertise.
			  		<br>&nbsp;<br>
					
					<table border="0" cellpadding="4">
						<tr>
			          		<td><a href="/mylyn/downloads"><img border=0 src="images/downloads.gif">Downloads: get the latest and greatest</a></td>
			          	</tr> 	 
				        <tr>
			          		<td><a href="/mylyn/community"><img border=0 src="images/community.jpg">Community: get help and interact with other users and developers</a>
			          		
			          			<form method="post" action="http://www.eclipseplugincentral.com/Web_Links.html">
								<a href="http://www.eclipseplugincentral.com/Web_Links-index-req-viewlink-cid-587.html">Rate and Comment via EPIC</a>
								<select name="rating">
								<option selected>10</option>
								<option>9</option>
								<option>8</option>
								<option>7</option>
								<option>6</option>
								<option>5</option>
								<option>4</option>
								<option>3</option>
								<option>2</option>
								<option>1</option>
								</select>
								<input type="hidden" name="ratinglid" value="560">
								<input type="hidden" name="ratinguser" value="outside">
								<input type="hidden" name="req" value="addrating">
								<input type="submit" value="Submit">
								</form>
			          		</td>
			          	</tr>
			         </table>
			  	</td>
			  	<td valign="top">
	        		<table border="0" cellpadding="0">
						<tr>
	          	    	  <td>
			          		<a href="images/mylyn-2.0.png"><img border=0 src="images/tasklist-splash.jpg"></a>
			          	  </td>
			          	</tr>
			        </table>
	          	</td>
	          </tr>
	        </table>
        </div>
        <!--
			<div class="homeitem3col">
				<h3>Community</h3>
				<ul>
					<li>
		                <a href="news://news.eclipse.org/eclipse.tools.mylyn"> 
						users newsgroup:</a> users discussions and support
						<a href="http://dev.eclipse.org/newslists/news.eclipse.tools.mylyn/maillist.html">[archive]</a>
						<a href="http://dev.eclipse.org/newslists/news.eclipse.technology.mylar/maillist.html">[old archive]</a></li>
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
					<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=%5Bdiscussion%5D&product=Mylar&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
						Bugzilla discussions</a> of ideas, enhancements, and UI issues.</li>
				</ul>
				</div> 
		
		<div align="left">
			<p>&nbsp</p>
		</div>
		-->
	
	</div>
	<div id="rightcolumn">
		$commonside
		$newsside
	</div>
</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
