<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

# Begin: page-specific settings.  Change these. 
$pageTitle 		= "Eclipse Mylyn Open Source Project";
$pageKeywords	= "Mylyn, Eclipse, Tasks, Bugs, Focus, UI";
$pageAuthor		= "Mik Kersten";
	
$html = <<<EOHTML

<div id="midcolumn" style="width:93%">
	<table border="0" cellpadding="5">
     	<tr> 
      		<td valign="top">
	          	<a href="images/mylyn-2.0.png"><img border=0 src="images/tasklist-splash.jpg"></a>
      		</td>
      		<td>
        	<td valign="top">
        		<p>
				Mylyn is a Task-Focused UI for Eclipse that reduces information overload and makes multi-tasking easy.  
				It does this by making tasks a first class part of Eclipse, and integrating rich and offline editing for
				repositories such as Bugzilla, Trac, and JIRA.  Once your tasks are integrated, Mylyn monitors your work 
				activity to identify information relevant to the task-at-hand, and uses this task context to focus the 
				Eclipse UI on the interesting information, hide the uninteresting, and automatically find what's related. 
				This puts the information you need to get work done at your fingertips and improves productivity by reducing 
				searching, scrolling, and navigation. By making task context explicit Mylyn also facilitates multitasking, 
				planning, reusing past efforts, and sharing expertise.
				</p>
				<table border="0" cellpadding="5">
					<tr>
						<td width=20></td>
						<td><a href="/mylyn/downloads"><img border=0 src="images/downloads.gif"></a></td>
						<td>
							<table border="0" cellpadding="0">
								<tr>
				          			<td><h3><a href="/mylyn/downloads">Downloads</a></h3></td>
								</tr>
								<tr>
					          		<td>Get the latest and greatest</td>
					          	</tr>
							</table>
						</td>
	          		</tr> 	 
	          		<tr>
						<td width=20></td>
						<td><a href="/mylyn/downloads"><img border=0 src="images/community.jpg"></a></td>
						<td>
							<table border="0" cellpadding="0">
								<tr>
				          			<td><h2><a href="/mylyn/downloads">Community</a></h2></td>
								</tr>
								<tr>
					          		<td>get help and interact with users and developers</td>
					          	</tr>
							</table>
						</td>
	          		</tr>
	          		<tr height=8>
	          		</tr>
	         	</table>
				<div class="homeitem3col">
					<h3>News</h3>
					<ul>
						<li>
							<a href="http://www.eclipse.org/europa/">Europa</a> and Mylyn 2.0 are coming June 29th!
						</li>
						<li>
							Mylyn will be packaged as part of the <a href="http://www.eclipse.org/downloads/indexProto.php">default Eclipse downloads</a>.
						</li>
						<li>
							<a href="http://tasktop.com/blog/?p=6">Mylar is reborn. Long live Mylyn!</a>  Read the <a href="rename.php">Rename FAQ</a>.
						</li>
					 </ul>	
				</div> 
	  		</td>
      		</td>
      	</tr>
    </table>
</div>			

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
