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
  <div id="midcolumn" style="width:78%">
		<!--
		<div align="center">
			<h1>$pageTitle</h1>
		</div>
		-->
        
        <div class="homeitem3col">
			<h3>Task List Tips</h3>
			<ul>
				<li>If you wish to discard outgoing changes on a task (ie. in case of mid-air collisions), use the synchronize (F5) option in the tasklist popup menu. This will retrieve the latest data from the repository and will present a dialog indicating that your local changes will be overwritten (you may opt to keep your new comment if desired).
	        	</li>       	
				<li>The Task List can be restored from history via it's view menu -> Restore Tasks from History...	        	
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
				<li>Alt+click or Alt+RightArrow: show all children of an element in a focused view, then click to select. Hold down alt to keep drilling in, click on whitespace in view to show all root elements. Also see <a href='http://wiki.eclipse.org/index.php/Mylar_User_Guide#Keyboard_mappings_on_Linux'>keyboard mappings on Linux</a>.</li>
				<li>When dragging URLs to the Task List: in Mozilla/Firefox just drag, in Internet Explorer do <code>Ctrl+drag</code></li>
			</ul>
		</div>
		
		   <div class="homeitem3col">
			<h3>Keyboard Shortcuts</h3>
			<h4>Task List view</h4>
			<ul>
				<li><code>Ctrl+F</code>: find</li>
				<li><code>Insert</code>: new personal task</li>
    			<li><code>Delete</code>: delete selected </li>
    			<li><code>F5</code>: synchronize</li> 
			</ul>
			<h4>General</h4>			
			<ul>
				<li><code>Ctrl+F9</code>: activate task dialog</li>
				<li><code>Ctrl+Shift+F9</code>: deactivate task</li>
				<li><code>Ctrl+F12</code>: open task dialog</li>
				<li><code>Ctrl+Shift+F12</code>: open repository task dialog</li>
			</ul>
			<h4>Context manipulation</h4>			
			<ul>
				<li><code>Ctrl+Shift+Up</code>: mark as landmark</li>
				<li><code>Ctrl+Shift+Down</code>: mark less interesting</li>			
			</ul>
			<h4>Useful Eclipse shortcuts</h4>			
			<ul>
				<li><code>Alt+Shift+Q, K</code>: show ''Task List'' view</li>
				<li><code>Ctrl+F10</code>: invoke view menu or ruler menu in editor (e.g. to toggle <b>Collapse All</b> in the Task List)</li>			
			</ul>
		</div>
	</div>
	
	<div id="rightcolumn">
		<img src="images/ui-legend.gif">
	</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
