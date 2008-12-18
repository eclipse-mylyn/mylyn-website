<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Getting Started";
	$pageKeywords	= "Mylyn, Eclipse";
	$pageAuthor		= "Mik Kersten";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);
	
	include("_sideCommon.php");
		
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<!--	<div align="center"><h1>$pageTitle</h1></div> -->
        <div class="homeitem3col">
			<h3>Getting Started</h3> 
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
						 			<br>by Mik Kersten (Tasktop Technologies) webcast on Eclipse Live [August 2008]
						 			<br>Provides a 45 minute overview of the tool and technology, along with demos of the key features.
						 		</font>
						 	</td>
						 </tr>
					</table>
				</li>
				<li>
		            <a href="http://www.tasktop.com/mylyn/"><img border=0 src="/mylyn/images/icon-webdoc.gif">
		           	Quick Reference Guide</a> [September 2008]
	            </li>
				<li>
		            <a href="http://www.tasktop.com/mylyn/mylyn-2.0-part1.php"><img border=0 src="/mylyn/images/icon-webdoc.gif">
		           	Mylyn 2.0, Part1: Integrated task management</a> by Mik Kersten [August 2007]
	            </li>
	            <li> 
		            <a href="http://www.tasktop.com/mylyn/mylyn-2.0-part2.php"><img border=0 src="/mylyn/images/icon-webdoc.gif">
		           	Mylyn 2.0, Part 2: Automated context management</a> by Mik Kersten [August 2007]
	            </li>
	            <li>
		            <a href="http://www.wakaleo.com/java-power-tools"><img border=0 src="/mylyn/images/icon-webdoc.gif">
		           Java Power Tools</a> by John Ferguson Smart [2008]
	            </li>
	            <!--
	            <li>
                    <a href="http://live.eclipse.org/node/412"><img border=0 src="/mylyn/images/icon-flash.gif">
					Getting Started with Mylyn 2.2</a> by Mik Kersten (56 min, December 2007)
                </li>
                -->
			</ul>
		</div> 
		
		
		<div class="homeitem3col">
			<h3>Selected Articles</h3>
			<ul>
				<li>
		            <a href="http://www.ibm.com/developerworks/java/library/j-mylyn1/"><img border=0 src="/mylyn/images/icon-webdoc.gif">
		           	Mylyn 2.0, Part 1: Integrated task management</a> by Mik Kersten (Aug 2007)
	            </li>
	            <li>
		            <a href="http://www.ibm.com/developerworks/java/library/j-mylyn2/"><img border=0 src="/mylyn/images/icon-webdoc.gif">
		           	Mylyn 2.0, Part 2: Automated context management</a> by Mik Kersten (Aug 2007)
	            </li>
	            <li>
            		<a href="http://www.devx.com/opensource/Article/35218?trk=DXRSS_LATEST"><img border=0 src="/mylyn/images/icon-webdoc.gif">
           			Mylyn 2.0 Keeps You Focused on the Task at Hand</a> by John Ferguson Smart (Aug 17, 2007)
        		</li>
				<li>
		            <a href="http://eclipse.sys-con.com/read/336896.htm"><img border=0 src="/mylyn/images/icon-webdoc.gif">
		           	Five Reasons to Love [Mylyn]</a> by Wayne Beaton (Feb 2007)
	            </li>
			</ul> 
		</div>
		
		
		     

        <div class="homeitem3col">
			<h3>Extensions</h3> 
			<ul>
				<li>
		            <a href="http://www.ibm.com/developerworks/java/library/j-mylyn1/?ca=dgr-eclipse-1"><img border=0 src="/mylyn/images/icon-webdoc.gif">
		           	Bugzilla</a>: the Mylyn 2.0, Part 1 article provides a getting started guide
	            </li>
	            <li> 
		            <a href="http://confluence.atlassian.com/display/JIRAEXT/Mylyn"><img border=0 src="/mylyn/images/icon-webdoc.gif">
		           JIRA</a> the Atlassian page provides a getting started guide
	            </li>
	            <ul>
				<li>
		         WikiText help for getting started is available after installing WikiText from within the Eclipse help under <i>Mylyn->WikiText User Guide->Getting Started</i>.
	            </li>
			</ul>
			</ul>
		</div> 
		
		<p>	
		<br>&nbsp;	
		For questions about using Mylyn see the <a href="/mylyn/support">Support Page</a>.
        </p>
		

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
