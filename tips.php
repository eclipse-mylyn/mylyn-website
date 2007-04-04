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
  <div id="midcolumn" style="width:95%">        
        <div class="homeitem3col">
			<h3>Task List Tips</h3>
			<ul>
				<li>If a task is stuck with outgoing changes or a mid-air collision occurrs use the <i>Synchronize</i> 
				action or <i>Mark -> Clear Outgoing</i>.
	        	</li>       
	        	<li>The Task List can be restored via its view menu -> Restore Tasks from History...	        
	        	</li>	
			</ul>
		</div>
		
		 <div class="homeitem3col">
			<h3>Task Context Tips</h3>
			<ul>
				<li>If a task change set disappears deactivate and reactive the task to refresh.</li>
				<li>When checking out a new project, deactivate the active task. Otherwise all newly created files will become interesting.</li>
			</ul>
		</div>
		
		   <div class="homeitem">
			<h3>Shortcuts</h3>
			<b>&nbsp;Task List view</b>
			<ul>
				<li><code>Ctrl+C</code>: copy taks/query URL and description</li>
				<li><code>Ctrl+F</code>: find</li>
				<li><code>Insert</code>: new personal task</li>
    			<li><code>F5</code>: synchronize selected</li> 
    			<li>When dragging URLs to the Task List: in Mozilla/Firefox just drag, in Internet Explorer <code>Ctrl+drag</code></li>
			</ul>
			<b>&nbsp;General</b>			
			<ul>
				<li><code>Alt+click</code> or <code>Alt+RightArrow</code>: show all children of an element in a focused view, then click to select. Hold down alt to keep drilling in, click on whitespace in view to show all root elements.</li> 
				<li><code>Ctrl+Shift+Alt+RightArrow</code> Quick Context View</li> 
				<li><code>Ctrl+F9</code>: activate task dialog</li>
				<li><code>Ctrl+Shift+F9</code>: deactivate task</li>
				<li><code>Ctrl+F12</code>: open task dialog</li>
				<li><code>Ctrl+Shift+F12</code>: open repository task dialog</li>
			</ul>
			<b>&nbsp;Interest manipulation</b>			
			<ul>
				<li><code>Ctrl+Shift+Up</code>: mark as landmark</li>
				<li><code>Ctrl+Shift+Down</code>: mark less interesting</li>			
			</ul>
			<b>&nbsp;Useful Eclipse shortcuts</b>			
			<ul>
				<li><code>Alt+Shift+Q, K</code>: show ''Task List'' view</li>
				<li><code>Ctrl+F10</code>: invoke view menu or ruler menu in editor</li>			
			</ul>
		</div>
		
		<div class="homeitem">
			<h3>UI Legend (Ctrl+Alt+Shift+?)</h3>
			<div align="center"><img src="images/ui-legend.gif"></div>
		</div>
	</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
