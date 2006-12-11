<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Mylar Tips and Tricks";
	$pageKeywords	= "Mylar, Eclipse";
	$pageAuthor		= "Rob Elves";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	
	include("_sideCommon.php");
	include("_sideFeedback.php");
	include("_sideMylarIs.php");
		
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<!--
		<div align="center">
			<h1>$pageTitle</h1>
		</div>
		-->
        
        <div align="left">
               
        
	    <!--    <table border="0">
	        	<tr>
	        		<td valign="top"><p>
			        <img src="images/feature.gif">
			        The minimal Mylar install is a standalone Task List.  <a href="start.php">Connectors</a> integrate the
			        Task List with bug/task/issue repositories, and the Focused UI reduces information overload by focusing
			        Eclipse views and editors on task context.
					</p>
					We recommend that you use <a href="http://wiki.eclipse.org/index.php/Mylar_User_Guide#Download_Mylar">Eclispe's Update Manager to install Mylar</a>.
					<p>NOTE: Use only the <b><i>"Search for new features.."</i></b> option when installing, and then select the features you need, as visible to the right.</p>
			        </td>
			     <td>
					<img src="/mylar/images/install-overview.gif">
			     </td>
			    </tr>
			</table> -->
		</div>
        
        <div class="homeitem3col">
			<h3>Task List Tips</h3>
			<ul>
				<li>If you wish to discard outgoing changes on a task (ie. in case of mid-air collisions), use the synchronize (F5) option in the tasklist popup menu. This will retrieve the latest data from the repository and will present a dialog indicating that your local changes will be overwritten (you may opt to keep your new comment if desired).
	        	</li>	        	
			</ul>
			<ul>
				<li><li>
	        		The Task List can be restored from history via it's view menu -> Restore Tasks from History...
	        	</li>
	        	</li>
			</ul>
		</div>
		
		 <div class="homeitem3col">
			<h3>Source Repositories</h3>
			<ul>
				<li>When checking out a new project, deactivate the active task. Otherwise all newly created files will become interesting.</li>
			</ul>
		</div>

        <div class="homeitem3col">
			<h3>View Shortcuts</h3>
			<ul>
				<li>Alt+click or Alt+RightArrow: show all children of an element in a focused view, then click to select. Hold down alt to keep drilling in, click on whitespace in view to show all root elements. Also see <a href='http://wiki.eclipse.org/index.php/Mylar_User_Guide#Keyboard_and_Alt.2BClick_mappings_on_Linux'>configuration on Linux</a>.</li>
			</ul>
		</div>
		
		   <div class="homeitem3col">
			<h3>Keyboard Shortcuts</h3>
			<h4>Task List view</h4>
			<ul>
				<li>Ctrl+F: find</li>
				<li>Insert: new personal task</li>
    			<li>Delete: delete selected </li>
    			<li>F5: synchronize</li> 
			</ul>
			<p>&nbsp;</p>
			<h4>General</h4>			
			<ul>
				<li><code>Ctrl+F9</code>: activate task dialog</li>
				<li><pre>Ctrl+Shift+F9</pre>: deactivate task</li>
				<li><pre>Ctrl+F12</pre>: open task dialog</li>
				<li><pre>Ctrl+Shift+F12</pre>: open repository task dialog</li>
			</ul>
			<h4>Context manipulation</h4>			
			<ul>
				<li><pre>Ctrl+Shift+Up</pre>: mark as landmark</li>
				<li><pre>Ctrl+Shift+Down</pre>: mark less interesting</li>			
			</ul>
			<h4>Useful Eclipse shortcuts</h4>			
			<ul>
				<li><pre>Alt+Shift+Q, K</pre>: show ''Task List'' view</li>
				<li><pre>Ctrl+F10</pre>: invoke view menu or ruler menu in editor (e.g. to toggle ''Collapse All'' in ''Task List'')</li>			
			</ul>
		</div>
		
		 <div class="homeitem3col">
			<h3>Drag and drop</h3>
			<ul>
				<li>Dragging URLs to ''Task List'': in Mozilla/Firefox just drag, in Internet Explorer <pre>Ctrl+drag</pre></li>
			</ul>
		</div>
		

       <!--	<div align="left">

		</div> 
 		-->
		<p>&nbsp;</p>
		
	</div>

	<div id="rightcolumn">
		$commonside
		$feedbackside
		<!--$mylarIsSide-->
	</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
