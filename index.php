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
        		Mylyn is the task and application lifecycle management (ALM) framework for Eclipse.  It provides:
        		<table>
        		<tr>
        			<td width="20">&nbsp;</td>
        			<td>
		        		<ul>
		        			<li><b>The revolutionary task-focused interface</b>
		        				<br><i>Realigns the IDE around tasks so that you see only the code that's relevant</i>
		        				<br>&nbsp;
		        			<li><b>A task management tool for developers</b>
		        				<br><i>Averaging 1 million downloads/month, Mylyn is the most popular IDE tool for ALM</i>
		        				<br>&nbsp;
		        			</li>
		        			<li><b>A broad ecosystem of Agile and ALM integrations</b>
		        				<br><i>Dozens of extensions integrate Mylyn with ALM and developer collaboration tools</i>
		        				<br>&nbsp;
		        			</li>
		        		</ul>
		        	</td>
		        </table>
				Mylyn's <a href="http://en.wikipedia.org/wiki/Task-focused_interface">task-focused interface
				<img border="0" src="/mylyn/images/external-link.png"></a> 
				reduces information overload and makes multitasking easy.  
				Mylyn makes tasks a first class part of the IDE, integrates rich and offline editing for
				ALM tools, and monitors your programming activity to create a "task context" that 
				focuses your workspace and automatically links all relevant artifacts to the task-at-hand.
				This puts the information you need at your fingertips and improves productivity by reducing 
				information overload, facilitating multitasking and easing the sharing of expertise.
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
	          		<tr height="10"></tr>
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
		            		<a target="_new" href="https://www2.gotomeeting.com/register/363663715">
		           			<img src="images/star.png"/>&nbsp;&nbsp;Webinar: Integrating IBM Rational Team Concert with HP Quality Center using Tasktop<img border="0" src="/mylyn/images/external-link.png"></a>, <i>Jan 20, 2011 8:00 AM – 9:00 AM PST</i>
	            		</li>
						<li>
		            		<a target="_new" href="https://www2.gotomeeting.com/register/851194155">
		           			<img src="images/star.png"/>&nbsp;&nbsp;Webinar: An Introduction to Mylyn 3.5<img border="0" src="/mylyn/images/external-link.png"></a>, <i>February 24, 2011 9:00 AM – 10:00 AM PST</i>
	            		</li>
						<li>
		            		<a href="new/">
		           			Mylyn 3.4.2 released</a> <i>Sep 24, 2010</i>
	            		</li>
						<li>
		            		<a target="_new" href="http://tasktop.com/blog/eclipse/mylyn-top-level-eclipse-project">
		           			Mylyn promoted to top-level Eclipse project<img border="0" src="/mylyn/images/external-link.png"></a>, <i>Sep 16, 2010</i>
	            		</li>
	            		
						<li>
							<a href="http://live.eclipse.org/node/573">
								 <a href="http://live.eclipse.org/node/573">
								 	Mylyn 3.0: Code at the Speed of Thought</a></font>
								 	webcast by Mik Kersten (Tasktop) <i>July 30, 2008</i>
						</li>
	            		<!--
						<li>
							<a href="http://www.zend.com/en/company/news/event/webinar-code-at-the-speed-of-thought-with-task-focused-programming">
		           			<img src="images/star.png"/>&nbsp;&nbsp;Webinar</a> ï¿½ Code at the Speed of Thought with Task-focused Programming. Join Mik Kersten, creator and lead of the Eclipse Mylyn project and CEO of Tasktop Technologies, and Roy Ganor, Zend Studio and PDT Project Lead for an introduction to task-focused PHP programming. April 15th, 2010. <a href="http://www.zend.com/en/company/news/event/webinar-code-at-the-speed-of-thought-with-task-focused-programming">View details and register</a>
						</li>
						<li>
							<table style="vertical-align:top; margin-top:0;">
							<tr style="vertical-align:top"><td style="vertical-align:top">
		            		<a href="http://event.on24.com/r.htm?e=188674&s=1&k=4690DB5DA995CA264747D73872922FC1&partnerref=tasktop">
		           			<img src="images/star.png"/>&nbsp;&nbsp;Register</a> for the CollabNet Conference and visit the Tasktop booth to learn more about Mylyn-powered Eclipse integration for TeamForge and ScrumWorks Pro
		           			</td><td>
		           			<a href="http://event.on24.com/r.htm?e=188674&s=1&k=4690DB5DA995CA264747D73872922FC1&partnerref=tasktop"><img src="images/collabnet-wide.png" style="float:right; margin-right: 3px;"/></a>
		           			</td>
		           			</table>
	            		</li>
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
							RedMonkTV: JIRA Connector for Mylyn</a> by Mik Kersten and Michael Cotï¿½ (Dec. 13, 2007, 20 min)
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
	  			<p align="left"><a href="http://marketplace.eclipse.org/content/mylyn">
						<img src="/mylyn/images/star.png" border="0"/>
						Star Mylyn as favorite on Marketplace</a></p>
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
