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
	<div id="midcolumn">
		<div class="row" >
			<div class="col-sm-24 col-md-24 col-lg-24">
				<h3>Videos!!!</h3> 
				<ul>
					<li style="list-style-type: none;">
						<table cellspacing="0" cellpadding="0">
							<tr>
								<td><a href="http://live.eclipse.org/node/573">
									<img border=0 src="/mylyn/images/ECLP_webinar.gif"></a>
								</td>
								<td width="10>"</td>
								<td>
							 		<font size="+1"><a href="https://www.youtube.com/watch?v=2wp32Ow_OmE">
							 				Mylyn 3.0: Code at the Speed of Thought</a></font>
							 			<br>by Mik Kersten (Tasktop Technologies) webcast on Eclipse Live (August 2008)
							 			<br>Provides a 45 minute overview of the tool and technology, along with demos of the key features.
							 		</font>
							 	</td>
							 </tr>
						</table>
					</li>
					<li>
					<a href="http://tasktop.com/resources/videos/w-jax/kersten-keynote-high-resolution.html">
					Less is More: Redefining the "I" of the IDE</a> W-JAX keynote by Mik Kersten. 
					Conceptual overview of Mylyn and the task-focused interface <i>(November 6, 2008)</i>
					</li>
				</ul>
	
				<h3>Getting Started</h3> 
				<ul>
					<li>
						<a href="http://www.tasktop.com/mylyn/">
						Mylyn Quick Reference Guide<img border="0" src="/mylyn/images/external-link.png"></a> by Tasktop Technologies (September 2008)
					</li>
					<li>
						<a href="http://www.tasktop.com/mylyn/">
						EclipseCon Mylyn Tutorial<img border="0" src="/mylyn/images/external-link.png"></a> by Tasktop Technologies (March 2009)
					</li>
					<li>
						<img border="0" src="/mylyn/images/star.png"/>Mylyn 2.0  by Mik Kersten (August 2007)
						<ul>
						<a href="http://www.tasktop.com/mylyn/mylyn-2.0-part1.php">
						Part1: Integrated task management<img border="0" src="/mylyn/images/external-link.png"></a>
						</ul>
						<ul>
						<a href="http://www.tasktop.com/mylyn/mylyn-2.0-part2.php">
						Part 2: Automated context management<img border="0" src="/mylyn/images/external-link.png"></a>
						</ul>
					</li>

					<!--
					<li>
						<a href="http://www.tasktop.com/mylyn/mylyn-2.0-part1.php"><img border="0" src="/mylyn/images/star.png"/>
						Mylyn 2.0, Part1: Integrated task management<img border="0" src="/mylyn/images/external-link.png"></a> by Mik Kersten (August 2007)
					</li>
					<li> 
						<a href="http://www.tasktop.com/mylyn/mylyn-2.0-part2.php"><img border="0" src="/mylyn/images/star.png"/>
						Mylyn 2.0, Part 2: Automated context management<img border="0" src="/mylyn/images/external-link.png"></a> by Mik Kersten (August 2007)
					</li>
					-->
				</ul>
	
				<h3>Documentation Portals</h3> 
				<ul>
					<li>
						<a href="http://wiki.eclipse.org/index.php/Mylyn/User_Guide">Mylyn User Guide</a>: feature reference on Eclipsepedia
					<li>
						<a href="http://help.tasktop.com/">Tasktop Portal<img border="0" src="/mylyn/images/external-link.png"></a> documentation on Mylyn and third-party Mylyn Connectors
					</li>
				</ul>
	
				<h3>Selected Publications</h3>
				<ul>
					<li>
						<!--a href="http://www.wakaleo.com/java-power-tools" link no longer valid 14/10/16 -->
						Java Power Tools book by John Ferguson Smart, includes section on Mylyn (2008)
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
	
			<p>&nbsp;</p>
		</div>
	</div>

	<div id="rightcolumn">
		$side_vote
		$side_announce
		$commonside	
	</div>

</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
