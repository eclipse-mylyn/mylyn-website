<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

# Begin: page-specific settings.  Change these. 
$pageTitle 		= "Eclipse Mylyn Open Source Project";
$pageKeywords	= "Mylyn, Eclipse, Tasks, Bugs, Focus, UI";
$pageAuthor		= "Mik Kersten";
	
$html = <<<EOHTML

<div id="maincontent">
<div id="midcolumn" style="width:97%">
	<table border="0" cellpadding="5">
     	<tr> 
        	<td width="80%" valign="top">
        		Mylyn is the task and application lifecycle management (ALM) framework for Eclipse.  Mylyn provides:
        		<ul>
        			<li><b>The revolutionary task-focused interface</b>
        				<br>Re-aligns the IDE around tasks to make it easier to multitask on large code bases.
        			<li><b>A task management tool for developers</b>
        				<br>Averaging 1 million downloads per month, Mylyn is the most popular IDE tool for ALM.
        			</li>
        			<li><b>A broad ecosystem of Agile and ALM integrations</b>
        				<br>With dozens of extensions, Mylyn is integrated with most ALM and developer collaboration tools.
        			</li>
        		<!--
				Mylyn's <a href="http://en.wikipedia.org/wiki/Task-focused_interface">task-focused interface<img border="0" src="/mylyn/images/external-link.png"></a> 
				for Eclipse reduces information overload and makes multitasking easy.  
				It does this by making tasks a first class part of Eclipse, integrating rich and offline editing for
				popular task repositories, and re-aligning the IDE and ALM tools around tasks.  Mylyn then monitors your
				activity to identify relevant information, and uses the resulting "task context" to focus your workspace
				and automatically link activities with source code, SCM systems and other ALM artifacts.
				This puts the information you need at your fingertips and improves productivity by reducing 
				searching, scrolling and navigation. By making task context explicit, Mylyn also facilitates multitasking, 
				planning, reusing past efforts, and sharing expertise.
        		<!--
				Mylyn is a <a href="http://en.wikipedia.org/wiki/Task-focused_interface">task-focused interface<img border="0" src="/mylyn/images/external-link.png"></a> 
				for Eclipse that reduces information overload and makes multi-tasking easy.  
				It does this by making tasks a first class part of Eclipse, and integrating rich and offline editing for
				repositories such as Bugzilla, Trac, and JIRA.  Once your tasks are integrated, Mylyn monitors your work 
				activity to identify relevant information, and uses this task context to focus the 
				user interface on the task-at-hand.
				This puts the information you need at your fingertips and improves productivity by reducing 
				searching, scrolling, and navigation. By making task context explicit Mylyn also facilitates multitasking, 
				planning, reusing past efforts, and sharing expertise.-->
				
				<table border="0" cellpadding="5">
					<tr height=9>	 
	          		<tr>
						<td width=20></td>
						<td><a href="/mylyn/downloads"><img border=0 src="images/downloads.gif"></a></td>
						<td>
							<table border="0" cellpadding="0">
								<tr>
				          			<td><font size=+1><a href="/mylyn/downloads">Downloads</a></font></td>
								</tr>
								<tr>
					          		<td>Get the latest and greatest Mylyn release.  
					          		<!-- <b><a href="/mylyn/new"><img src="images/star.png"/> What's new</a></b>? -->
					          		</td>
					          	</tr>
							</table>
						</td>
	          		</tr>
	          		
	          		<tr>
						<td width=20></td>
						<td><a href="/mylyn/support"><img border=0 src="images/community.jpg"></a></td>
						<td>
							<table border="0" cellpadding="0">
								<tr>
				          			<td><font size=+1><a href="/mylyn/support">Support</a></font></td>
								</tr>
								<tr>
					          		<td>Find support and interact with users and developers.</td>
					          	</tr>
							</table>
						</td>
	          		</tr>

	          		<tr>
						<td width=20></td>
						<td><a href="/mylyn/start"><img border=0 src="images/reference.png"></a></td>
						<td>
							<table border="0" cellpadding="0">
								<tr>
				          			<td><font size=+1><a href="/mylyn/start">Get Started</a></font></td>
								</tr>
								<tr>
					          		<td>Resources for new users, links to tutorials and articles.</td>
					          	</tr>
							</table>
						</td>
	          		</tr>
	          		<tr height="15"></tr>
	         	</table>
	         	
	         	<!--
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<form method="post" action="http://www.eclipseplugincentral.com/Web_Links.html">
					<a href="http://www.eclipseplugincentral.com/Web_Links-index-req-viewlink-cid-587.html">
					&nbsp;&nbsp;Support Mylyn on Plugin Central</a>
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
					</select>&nbsp;<input type="hidden" name="ratinglid" value="560"><input type="hidden" name="ratinguser" value="outside"><input type="hidden" name="req" value="addrating"><input type="submit" value="Vote">
					</form>
	         	--> 
	         	
	         	<div class="homeitem3col">
					<h3>News</h3>
					<ul>
						<li>
		            		<a target="_new" href="http://www.sdtimes.com/link/34178">
		           			<img src="images/star.png"/>&nbsp;&nbsp;SD Times: Eclipse creates new sub-projects for Mylyn<img border="0" src="/mylyn/images/external-link.png"></a> by David Rubinstein, <i>March 8, 2010</i>
	            		</li>
						<li>
		            		<a href="new/">
		           			<img src="images/star.png"/>&nbsp;&nbsp;Mylyn 3.3.2 released</a> <i>Feb 23, 2010</i>
	            		</li>
						<li>
		            		<a target="_new" href="http://tasktop.com/blog/tasktop/agile-task-management-tasktop-16-mylyn-33">
		           			Mylyn 3.3 released<img border="0" src="/mylyn/images/external-link.png"></a> <i>Oct 26, 2009</i>
	            		</li>
	            		<!--
						<li>
		            		<a target="_new" href="http://www.ddj.com/development-tools/220100341">
		           			<img src="images/star.png"/>&nbsp;&nbsp;Dr.Dobb's: Newest ALM tools keep developers focused and on task<img border="0" src="/mylyn/images/external-link.png"></a> by Jonathan Erickson, <i>September 30, 2009</i>
	            		</li>
	            		-->
						<li>
		            		<a target="_new" href="http://www.eweek.com/c/a/Application-Development/Tasktop-Updates-Mylyn-Tasktop-Tools-for-Eclipse-Galileo-134393/">
		           			eWeek: Tasktop Updates Mylyn, Tasktop Tools for Eclipse Galileo<img border="0" src="/mylyn/images/external-link.png"></a> <i>June 25, 2009</i>
	            		</li>
	            		<!--
						<li>
							<a target="_new" href="http://www.heise.de/developer/Taskverwaltung-mit-Mylyn-3-2-und-Tasktop-1-5--/news/meldung/140802">
		           			Heise: Taskverwaltung mit Mylyn 3.2 und Tasktop 1.5<img border="0" src="/mylyn/images/external-link.png"></a></font>&nbsp;&nbsp;<i>June 24, 2009</i>
	            		</li>
	            		-->
	            		<li>
	            		<a href="http://live.eclipse.org/node/676">
								 	Less is More: Redefining the "I" of the IDE</a></font>
								 	by Mik Kersten (Tasktop). Keynote webcast discussing Mylyn and the task-focused interface, <i>February 17, 2009</i>
	            		</li>
						<!--
	            		<li>
	            			<a href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/docs/2009-03-mylyn-connector-crash-course-talk.pdf">
		           			EclipseCon Connector Crash Course Slides (pdf)</a> <i>March 26th, 2009</i><br>
		           			<a href="http://www.eclipse.org/downloads/download.php?file=/tools/mylyn/docs/workspace-connector-tutorial.zip">Workspace (zip)</a> or <a href="doc/dev/mylyn-connector-tutorial.psf">Team Project Set (psf)</a>
	            		</li>
						<li>
		            		<a href="http://www.eweek.com/c/a/Application-Development/Tasktop-Upgrades-Mylyn-Tasktop-Offerings-480768/">
		           			eWeek: Tasktop Upgrades Mylyn, Tasktop Offerings</a> <i>March 20th, 2009</i>
	            		</li>
						<li>
							<table cellspacing="0" cellpadding="0">
								<tr>
									<td><a href="http://live.eclipse.org/node/676">
										<img border=0 src="/mylyn/images/ECLP_webinar.gif"></a>
									</td>
									<td width="10>"</td>
									<td>
								 		<a href="http://live.eclipse.org/node/676">
								 				Less is More: Redefining the "I" of the IDE</a></font>
								 			by Mik Kersten (Tasktop). Webcast of W-JAX keynote discussing Mylyn and the task-focused interface, <i>February 17, 2009</i>
								 	</td>
								 </tr>
							</table>
						</li>
						<li>
		            		<a href="http://eclipse.org/mylyn/downloads/">
		           			Mylyn 3.0.5 released</a> <i>Feb 18, 2009</i>
	            		</li>
	            		-->
						<li>
							<a href="http://live.eclipse.org/node/573">
								 <a href="http://live.eclipse.org/node/573">
								 	Mylyn 3.0 Webcast: Code at the Speed of Thought</a></font>
								 	by Mik Kersten (Tasktop) <i>July 30, 2008</i>
						</li>
						<!--
						<li>
		            		<a href="http://tasktop.com/blog/eclipse/tasktop-14-and-eclipse-mylyn-31-released">
		           			&nbsp;&nbsp; Mylyn 3.1 released!</a> <i>March 17th, 2009</i>
	            		</li>
						<li>
		            		<a href="http://tasktop.com/blog/?p=32">
		           			Mylyn 3.0 released with Ganymede!</a> <i>June 25, 2008</i>
	            		</li>
						<li>
		            		<a href="http://www.ibm.com/developerworks/java/library/j-mylyn1/">
		           			Mylyn 2.0 tutorial articles</a>, developerWorks <i>Aug. 14, 2007</i>
	            		</li>
						<li>
		            		<a href="http://wiki.eclipse.org/index.php/Mylyn/Extensions">
		           			See the Mylyn Extensions listing</a> for available connectors
	            		</li>
						<li>
							<a href="http://live.eclipse.org/node/412">Webinar: Mylyn 2.2</a> by Mik Kersten (Dec. 19, 2007, 50 min)
		                </li>
						<li>
							Mylyn becomes part of the <a href="http://www.eclipse.org/downloads/">default Eclipse 3.3/Europa downloads</a> (June 29)
						</li>
							            		<li>
		            		<a href="http://www.devx.com/opensource/Article/35218?trk=DXRSS_LATEST"><img border=0 src="/mylyn/images/icon-webdoc.gif">
		           			Mylyn 2.0 Keeps You Focused on the Task at Hand</a> by John Ferguson Smart (Aug. 17, 2007)
	            		</li>
								                <li>
							<a href="http://live.eclipse.org/node/442"><img border=0 src="/mylyn/images/icon-presentation.gif">
							RedMonkTV: JIRA Connector for Mylyn</a> by Mik Kersten and Michael Cot� (Dec. 13, 2007, 20 min)
		                </li>
						<li>
							June 18: Mylyn graduates from the Technology to the <a href="http://www.eclipse.org/projects/">Tools project</a>.
						</li> 
						<li>
							June 11: <a href="http://tasktop.com/blog/?p=6">Mylar is reborn. Long live Mylyn!</a>  Read the <a href="rename.php">Rename FAQ</a>.
						</li>
						-->
					 </ul>	
				</div> 
	  		</td>
	  		<td width="5">&nbsp;</td>
	  		<td valign="top" align="center" width="*">
	  			<a href="images/mylyn-3.1-screenshot.png"><img alt="Mylyn 3.1 Screenshot" border=0 src="images/tasklist-splash-3.1.png"></a>
	  			<br>&nbsp;
	  			<div align="left" id="twtr-search-widget"></div>
					<script src="http://widgets.twimg.com/j/1/widget.js"></script>
					<link href="http://widgets.twimg.com/j/1/widget.css" type="text/css" rel="stylesheet">
					<script>
					new TWTR.Widget({
					  search: 'mylyn',
					  id: 'twtr-search-widget',
					  loop: true,
					  title: 'What\'s being said about...',
					  subject: 'Mylyn',
					  width: 278,
					  height: 255,
					  theme: {
					    shell: {
					      background: '#5b5993',
					      color: '#ffffff'
					    },
					    tweets: {
					      background: '#ffffff',
					      color: '#444444',
					      links: '#333366'
					    }
					  }
					}).render().start();
					</script>
					<font size=-1>Follow: <a href="http://twitter.com/mik_kersten">Mik Kersten</a> (lead), <a href="http://twitter.com/WikiText">WikiText</a></font>
      		</td>
      	</tr>
    </table>
</div>
</div>			

EOHTML;

	# EclipseCon banner
	$App->Promotion = TRUE;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
