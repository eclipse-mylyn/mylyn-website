<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

# Begin: page-specific settings.  Change these. 
$pageTitle 		= "Eclipse Mylyn Open Source Project";
$pageKeywords	= "Mylyn, Eclipse";
$pageAuthor		= "Mik Kersten";
	
$html = <<<EOHTML
  
<div id="midcolumn" style="width:92%">
	<table border="0" cellpadding="0>
     	<tr>
      		<td valign="top">
	          	<a href="images/mylyn-2.0.png"><img border=0 src="images/tasklist-splash.jpg"></a>
      		</td>
      		<td>
      			xxx
      		</td>
      	</tr>
      	<!--
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
				<table border="0" cellpadding="10">
					<tr>
						<td width=20></td>
	          			<td><a href="/mylyn/downloads"><img border=0 src="images/downloads.gif">Downloads: get the latest and greatest</a></td>
	          		</tr> 	 
		        	<tr>
		        		<td width=20></td>
	          			<td><a href="/mylyn/community"><img border=0 src="images/community.jpg">Community: get help and interact with users and developers</a></td>
	          		</tr>
	         	</table>
				<div class="homeitem3col">
					<h3>News</h3>
					<ul>
						<li>
							Mylyn 2.0 will be part of the default Eclipse downloads as of June 29th.
						</li>
						<li>
							FAQ: <a href="rename.php">Project renamed from Mylar to Mylyn</a>, Blog: <a href="http://tasktop.com/blog/?p=6">Mylar is reborn. Long live Mylyn!</a>
						</li>
						<li>
							...
						</li>
					 </ul>	
				</div> 
	  		</td>
      	</tr>
      	-->
    </table>
</div>			

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
