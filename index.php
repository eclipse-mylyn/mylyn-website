<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

# Begin: page-specific settings.  Change these. 
$pageTitle 		= "Eclipse Mylyn Open Source Project";
$pageKeywords	= "Mylyn, Eclipse";
$pageAuthor		= "Mik Kersten";
	
$html = <<<EOHTML
  
<div id="midcolumn" style="width:92%">
  	<div align="left">
		<table border="0" cellpadding="0>
         	<tr>
          		<td valign="top" aligh=left>
		          	<a href="images/mylyn-2.0.png"><img border=0 src="images/tasklist-splash.jpg"></a>
          		</td>
            	<td valign="top">
            		<p>
					Mylyn is a Task-Focused UI for Eclipse that reduces information overload and makes multi-tasking easy.  
					It does this by making tasks a first class part of Eclipse, and integrating rich and offline editing for
					repositories such as Bugzilla, Trac, and JIRA.  Once your tasks are integrated, Mylyn monitors your work activity to identify information relevant to the task-at-hand, and uses this task context to focus the Eclipse UI on the interesting information, hide the uninteresting, and automatically find what's related. This puts the information you need to get work done at your fingertips and improves productivity by reducing searching, scrolling, and navigation. By making task context explicit Mylyn also facilitates multitasking, planning, reusing past efforts, and sharing expertise.
					</p>
					
		  		</td>
          	</tr>
        </table>
	</div>
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

		<li>
			<a href="http://eclipsecon.org/2007"><img border=0 src="images/logo-eclipsecon.gif"></a>
		<br>				
			<a href="http://www.eclipsecon.org/2007/index.php?not_accepted=0&page=sub/&id=3855&conference=2007">
			Task-focused programming with Mylar</a> talk by Mik Kersten and Rob Elves (March 6, 11:10-12:00)
		</li>
		<li>	
			<a href="http://www.eclipsecon.org/2007/index.php?not_accepted=0&page=sub/&id=3897&conference=2007">
			Mylar, XPlanner and Scrum</a> short talk by Ravi Kumar and Karl Ewald (March 6, 13:40-13:50)
		</li>
		<li>
			<a href="http://www.eclipsecon.org/2007/index.php?page=sub/&id=3829&conference=2007">
			The 2006 Google Summer of Code at Eclipse</a> panel with Philippe Ombredanne, Francois Granade,
			Remy Chi Jian Suen, Steffen Pingel and Mik Kersten (March 6, 13:30-14:20)
		</li>
		<li>
			<a href="http://www.eclipsecon.org/2007/index.php?not_accepted=0&page=sub/&id=4190&conference=2007">
			Mylar BOF</a> organized by the Mylar Committers (March 6, 19:30-20:45)
		</li>
		<li>
			<a href="http://www.eclipsecon.org/2007/index.php?page=sub/&id=4293">
			Task-Focused Desktop BOF</a> organized by Mik Kersten and Rob Elves (March 6, 20:45-22:00)
		</li>
		<li>
			<a href="http://eclipsezilla.eclipsecon.org/show_bug.cgi?id=4282">
			Mylar - Collaboration through Task Contexts</a> poster presented by Rob Elves (March 7, 17:20-19:30)
		</li>
		<li>
			<a href="http://www.eclipsecon.org/2007/index.php?not_accepted=0&page=sub/&id=3999&conference=2007">
			Team version control mashup with Mylar</a> short talk by Eugene Kuleshov (March 8, 11:50-12:00)	
		</li>
		<li>
			<a href="http://www.eclipsecon.org/2007/index.php?not_accepted=0&page=sub/&id=4221&conference=2007">
			Usability and User Interface Best Practices in Eclipse</a> panel with Bob Fraser, Mik Kersten and others tba 
			(March 8, 13:30-14:20)	
		</li>
		<li>
			<a href="http://eclipse.org/mylar/doc/release-1.0.php">Mylar 1.0 released</a> (Dec 11, 2006)
		</li>
	-->
							

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
