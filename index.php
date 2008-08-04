<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

# Begin: page-specific settings.  Change these. 
$pageTitle 		= "Eclipse Mylyn Open Source Project";
$pageKeywords	= "Mylyn, Eclipse, Tasks, Bugs, Focus, UI";
$pageAuthor		= "Mik Kersten";
	
$html = <<<EOHTML

<div id="maincontent">
<div id="midcolumn" style="width:93%">
	<table border="0" cellpadding="5">
     	<tr> 
      		<td valign="top">
	          	<a href="images/mylyn-2.0.png"><img alt="Mylyn 2.0 Screenshot" border=0 src="images/tasklist-splash.jpg"></a>
      		</td>
      		<td>
        	<td valign="top">
				Mylyn is a Task-Focused Interface for Eclipse that reduces information overload and makes multi-tasking easy.  
				It does this by making tasks a first class part of Eclipse, and integrating rich and offline editing for
				repositories such as Bugzilla, Trac, and JIRA.  Once your tasks are integrated, Mylyn monitors your work 
				activity to identify information relevant to the task-at-hand, and uses this task context to focus the 
				Eclipse UI on the interesting information, hide the uninteresting, and automatically find what's related. 
				This puts the information you need to get work done at your fingertips and improves productivity by reducing 
				searching, scrolling, and navigation. By making task context explicit Mylyn also facilitates multitasking, 
				planning, reusing past efforts, and sharing expertise.

				<table border="0" cellpadding="5">
					<tr height=9>	 
	          		<tr>
						<td width=20></td>
						<td><a href="/mylyn/community"><img border=0 src="images/community.jpg"></a></td>
						<td>
							<table border="0" cellpadding="0">
								<tr>
				          			<td><font size=+1><a href="/mylyn/community">Community</a></font></td>
								</tr>
								<tr>
					          		<td>Get help and interact with users and developers</td>
					          	</tr>
							</table>
						</td>
	          		</tr>
	          		<tr>
						<td width=20></td>
						<td><a href="/mylyn/downloads"><img border=0 src="images/downloads.gif"></a></td>
						<td>
							<table border="0" cellpadding="0">
								<tr>
				          			<td><font size=+1><a href="/mylyn/downloads">Downloads</a></font></td>
								</tr>
								<tr>
					          		<td>Get the latest and greatest Mylyn release</td>
					          	</tr>
							</table>
						</td>
	          		</tr> 
	          		<tr height=11>
	          		</tr>
	         	</table>
	         	
				<div class="homeitem3col">
					<h3>News</h3>
					<ul>
						<li>
							<table cellspacing="0" cellpadding="0>
								<tr>
									<td><a href="http://live.eclipse.org/node/573">
										<img border=0 src="/mylyn/images/ECLP_webinar.gif">
										</a>
									</td>
									<td>
								 		<font size="+1"><a href="http://live.eclipse.org/node/573">
								 			Webcast: Mylyn 3.0: Code at the Speed of Thought</a></font>
								 			<br>by Mik Kersten (Tasktop Technologies) <i>July 30, 2008</i>
								 		</font>
								 	</td>
								 </tr>
							</table>
		                </li>
						<li>
		            		<a href="http://tasktop.com/blog/?p=32">
		           			Mylyn 3.0 released with Ganymede!</a> <i>June 25, 2008</i>
	            		</li>
						<li>
		            		<a href="http://www.ibm.com/developerworks/java/library/j-mylyn1/">
		           			Mylyn 2.0 tutorial articles</a>, developerWorks <i>Aug. 14, 2007</i>
	            		</li>
	            		
						<!--
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
							RedMonkTV: JIRA Connector for Mylyn</a> by Mik Kersten and Michael Coté (Dec. 13, 2007, 20 min)
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

				&nbsp;&nbsp;<form method="post" action="http://www.eclipseplugincentral.com/Web_Links.html">
					<a href="http://www.eclipseplugincentral.com/Web_Links-index-req-viewlink-cid-587.html">
					<img border=0 src="/mylyn/images/icon-presentation.gif">&nbsp;Comment on Mylyn at EPIC</a>
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
				</font>
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
