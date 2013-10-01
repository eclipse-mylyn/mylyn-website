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
		            		<a href="new/">
		           			<img src="images/star.png"/>&nbsp;&nbsp;Mylyn 3.9.1 released</a> <i>September 27, 2013</i>
	            		</li>
						<li>
		            		<a href="new/">
		           			Mylyn 3.9 released as part of Eclipse Kepler</a> <i>June 26, 2013</i>
	            		</li>
						<li>
		            		<a href="http://jaxenter.com/mik-kersten-jaxconf-2011-36569.html" target="_new">
		           			Mik Kersten on Eclipse Indigo and new features in Mylyn 3.6</a> <i>June 28, 2011</i>
	            		</li>
						<li>
		            		<a href="http://tasktop.com/resources/videos/git-gerrit-hudson-one-mylyn" target="_new">
		           			Git, Gerrit, Hudson and one Mylyn to rule them all</a> presentation by Steffen Pingel and Benjamin Muskalla <i>June 22, 2011</i>
	            		</li>
	            		<li>
		            		<a target="_new" href="http://tasktop.com/thought-leadership">
		           			Read Mik Kersten's predictions on Eclipse, Mylyn and ALM <img border="0" src="/mylyn/images/external-link.png"></a> <i>January 25th, 2011</i>
	            		</li>
						<li>
		            		<a target="_new" href="http://tasktop.com/blog/eclipse/mylyn-top-level-eclipse-project">
		           			Mylyn promoted to top-level Eclipse project<img border="0" src="/mylyn/images/external-link.png"></a> <i>Sep 16, 2010</i>
	            		</li>	            		
						<li>
							<a href="http://tasktop.com/resources/videos/mylyn/webcast-mylyn-3.0.html">
								 	Mylyn 3.0: Code at the Speed of Thought</a></font>
								 	webcast by Mik Kersten (Tasktop) <i>July 30, 2008</i>
						</li>
	            		<!--
	            		<li>
		            		<a target="_new" href="http://tasktop.com/about/webinars/index.php#may262011">
		           			Webinar: Cross-Repository Agile Planning<img border="0" src="/mylyn/images/external-link.png"></a> <i>May 26, 2011</i>
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
	  			
	  			<!--
	  			<div style="margin-top:0px;">
				<iframe width="260" height="165" src="http://www.youtube.com/embed/WBwyAyvneNo" frameborder="0" allowfullscreen></iframe>
				</div>
				-->

	  			<div style="margin-top:0px;">
				<iframe width="260" height="165" src="http://www.youtube.com/embed/l2-kZGe_FS8" frameborder="0" allowfullscreen></iframe>
				</div>
						
	  			<br>&nbsp;
	  			
	  			<div style="margin-top:0px;" align="left" id="twtr-search-widget"></div>
					<script src="http://widgets.twimg.com/j/1/widget.js"></script>
					<link href="http://widgets.twimg.com/j/1/widget.css" type="text/css" rel="stylesheet">
					<script>
					new TWTR.Widget({
					  search: '#mylyn',
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
