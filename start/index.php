<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Mylyn Getting Started";
	$pageKeywords	= "Mylyn, Eclipse";
	$pageAuthor		= "Mik Kersten";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);
	
	include("../_sideBars.php");
		
	$html = <<<EOHTML

<div id="maincontent">
	
	<div id="rightcolumn">
		$side_vote
		$side_announce
	</div>

	<div id="midcolumn">
		<div class="homeitem3col">
			<h3>Videos</h3> 
			<ul>
				<li>
					<table cellspacing="0" cellpadding="0">
						<tr>
							<td><a href="http://live.eclipse.org/node/573">
								<img border=0 src="/mylyn/images/ECLP_webinar.gif"></a>
							</td>
							<td width="10>"</td>
							<td>
						 		<font size="+1"><a href="http://live.eclipse.org/node/573">
						 			<a href="http://live.eclipse.org/node/573">
						 				Mylyn 3.0: Code at the Speed of Thought</a></font>
						 			<br>by Mik Kersten (Tasktop Technologies) webcast on Eclipse Live (August 2008)
						 			<br>Provides a 45 minute overview of the tool and technology, along with demos of the key features.
						 		</font>
						 	</td>
						 </tr>
					</table>
				</li>
				<li>
				<a href="http://live.eclipse.org/node/676">
 				Less is More: Redefining the "I" of the IDE</a> W-JAX keynote by Mik Kersten. 
 				Conceptual overview of Mylyn and the task-focused interface <i>(November 6, 2008)</i>
				</li>
			</ul>
		</div> 
	
	
        <div class="homeitem3col">
			<h3>Getting Started</h3> 
			<ul>
				<li>
		            <a href="http://www.tasktop.com/mylyn/">
		           	Mylyn Quick Reference Guide<img border="0" src="/mylyn/images/external-link.png"></a> by Tasktop Technologies (September 2008)
	            </li>
	            <li>
            		<a href="http://www.tasktop.com/mylyn/">
           			EclipesCon Mylyn Tutorial<img border="0" src="/mylyn/images/external-link.png"></a> by Tasktop Technologies (March 2009)
        		</li>
				<li>
		            <a href="http://www.tasktop.com/mylyn/mylyn-2.0-part1.php"><img border="0" src="/mylyn/images/star.png"/>
		           	Mylyn 2.0, Part1: Integrated task management<img border="0" src="/mylyn/images/external-link.png"></a> by Mik Kersten (August 2007)
	            </li>
	            <li> 
		            <a href="http://www.tasktop.com/mylyn/mylyn-2.0-part2.php"><img border="0" src="/mylyn/images/star.png"/>
		           	Mylyn 2.0, Part 2: Automated context management<img border="0" src="/mylyn/images/external-link.png"></a> by Mik Kersten (August 2007)
	            </li>
			</ul>
		</div> 

        <div class="homeitem3col">
			<h3>Documentation Portals</h3> 
			<ul>
				<li>
					<a href="http://wiki.eclipse.org/index.php/Mylyn/User_Guide">Mylyn User Guide</a>: feature reference on Eclipsepedia
				<li>
					<a href="http://help.tasktop.com/">Tasktop Portal<img border="0" src="/mylyn/images/external-link.png"></a> documentation on Mylyn and third-party Mylyn Connectors
				</li>
	            <li> 
		            <a href="http://confluence.atlassian.com/display/JIRAEXT/Mylyn">
		           Atlassian JIRA<img border="0" src="/mylyn/images/external-link.png"></a>: guide for getting started with Mylyn
	            </li>
			</ul>
		</div> 
	
		<div class="homeitem3col">
			<h3>Selected Publications</h3>
			<ul>
				<li>
		            <a href="http://www.wakaleo.com/java-power-tools">
		           Java Power Tools<img border="0" src="/mylyn/images/external-link.png"></a> book by John Ferguson Smart, includes section on Mylyn (2008)
	            </li>
				<li>
            		<a href="http://www.devx.com/opensource/Article/35218?trk=DXRSS_LATEST">
           			Mylyn 2.0 Keeps You Focused on the Task at Hand<img border="0" src="/mylyn/images/external-link.png"></a> by John Ferguson Smart (Aug 17, 2007)
        		</li>
				<li>
		            <a href="http://eclipse.sys-con.com/read/336896.htm">
		           	Five Reasons to Love [Mylyn]<img border="0" src="/mylyn/images/external-link.png"></a> by Wayne Beaton (Feb 2007)
	            </li>
				<!--
				<li>
		            <a href="http://www.ibm.com/developerworks/java/library/j-mylyn1/">
		           	Mylyn 2.0, Part 1: Integrated task management<img border="0" src="/mylyn/images/external-link.png"></a> by Mik Kersten (Aug 2007)
	            </li>
	            <li>
		            <a href="http://www.ibm.com/developerworks/java/library/j-mylyn2/">
		           	Mylyn 2.0, Part 2: Automated context management<img border="0" src="/mylyn/images/external-link.png"></a> by Mik Kersten (Aug 2007)
	            </li>
	            -->
			</ul> 
		</div>

		<!--		
		<p>In addition to providing personal task management and support for task contexts, Mylyn has the following 
		task/issue/bug/report repository integration.  The deeper the integration, the better and more streamlined
		the user experienece.</p>

        <div class="homeitem3col">
			<h3>Levels of Repository Integration</h3>
			<ul>
				<li>
                    Web only: Reports linked via drag-and-drop, editing via embedded 
					browser, 
					<a href="http://www.eclipse.org/mylar/doc/faq.php#repositories-unsupported">(any web-based repository)</a>
                </li>
				<li>
                    Query support: Repository queries in task list view
                    <a href="dl.php">(currently Bugzilla, Trac, and JIRA and web connector templates)</a>
                </li>
				<li>
                    Full integration: Authoring of reports within native Eclipse editor, 
				offline editing, incoming/outgoing status, compare and 
				change notifications.
	            <a href="dl.php">(Bugzilla, JIRA and Trac)</a>
                </li>
				<li>
				<a href="bugs.php">
				<img border=0 src="/mylyn/images/vote.gif"> Vote for a connector</a>
				if your repository is not supported, or file a new request if not listed.
				</li>
			</ul>
		</div> 
		-->
		<p>&nbsp;</p>
	</div>
	<!--
	<div id="rightcolumn">
		$commonside
	</div>
	-->
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
