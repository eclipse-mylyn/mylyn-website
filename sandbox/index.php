<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Mylar";
	$pageKeywords	= "Mylar, Eclipse";
	$pageAuthor		= "Mik Kersten";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>Open Source Community</h2>
			<table border="0" cellpadding="4" width="100%">
              <tr>
                <td class=paragraph width="5%"><img border=0 src="images/screenshot-mylar-small.gif"></td>
                <td class=paragraph width="40%">
						<p class="smallParagraph">
						The goal of the Mylar Technology project is to 
						help the Eclipse UI scale gracefully to very 
						large workspaces.&nbsp; Currently Eclipse views 
						can quickly become overloaded 
						with elements unrelated to the task at 
						hand.&nbsp; Mylar monitors programming activity, 
						actively searches for related elements, and 
						extends the Eclipse UI to focus on the elements 
						of interest (e.g. by filtering uninteresting 
						nodes from the Package Explorer, visible to the 
						left). Currently the best way to 
				get an overview of the tool and technology is by looking at the
						<a href="publications/2005-03-mylar-eclipsecon-web.ppt">EclipseCon 
				presentation</a>.<p class="smallParagraph">
						<b>
						<font color="#6F7A92">Availability:</font></b> 
						the preview release is still underway, and involves 
						participating in a user study to help us improve 
						the usability of the tool before making it 
						generally available from eclipse.org.
						<a href="mailto:mylar@cs.ubc.ca?subject=please notify me of the mylar pre-release">
						L</a><b><span style="font-weight: 400"><a href="mailto:mylar@cs.ubc.ca?subject=please notify me of the mylar pre-release">et us know</a> if you 
						would like an invitation to participate.</span></b></td>
                <td class=smallParagraph width="30%" align="right" valign="top">
				<table id="table4" borderColor="#111111" cellSpacing="4" cellPadding="3" border="0">
					<tr>
						<td class="smallParagraph" vAlign="top" align="left" bordercolor="#F1F3F5" colspan="2" bgcolor="#F8F3F4">
						<b>
        				<font color="#666666">news and blogs</font></b></td>
					</tr>
					<tr>
						<td class="smallParagraph" vAlign="top" align="left" width="30" bordercolor="#F1F3F5">
						<font color="#888888"><i>Oct.</i></font></td>
						<td class="smallParagraph" vAlign="top" align="left" width="*" bgColor="#F4F5F7" bordercolor="#F1F3F5">
						<font color="#888888"><i>Planned public release (v0.4)</i></font></td>
					</tr>
					<tr>
						<td class="smallParagraph" vAlign="top" align="left" width="30" bordercolor="#F1F3F5">
						Sep.</td>
						<td class="smallParagraph" vAlign="top" align="left" width="*" bgColor="#F4F5F7" bordercolor="#F1F3F5">
						Preview release continues (v0.3.7)</td>
					</tr>
					<tr>
						<td class="smallParagraph" vAlign="top" align="left" width="30" bordercolor="#F1F3F5">
						Aug.</td>
						<td class="smallParagraph" vAlign="top" align="left" width="*" bgColor="#F4F5F7" bordercolor="#F1F3F5">
						<a href="http://eclipse.org/mylar/zest.html">
						Zest</a> component created</td>
					</tr>
					<tr>
						<td class="smallParagraph" vAlign="top" align="left" width="30" bordercolor="#F1F3F5" rowspan="3">
						July</td>
						<td class="smallParagraph" vAlign="top" align="left" width="*" bgColor="#F4F5F7" bordercolor="#F1F3F5">
						<a href="http://www.eclipsezone.com/eclipse/forums/t20933.html">Mylar is the next killer app for Eclipse..</a></td>
					</tr>
					<tr>
						<td class="smallParagraph" vAlign="top" align="left" width="*" bgColor="#F4F5F7" bordercolor="#F1F3F5">
						<a href="http://www.eclipsezone.com/forums/thread.jspa?messageID=91847719&#91847719">
						Bugzilla plug-ins</a></td>
					</tr>
					<tr>
						<td class="smallParagraph" vAlign="top" align="left" width="*" bgColor="#F4F5F7" bordercolor="#F1F3F5">
						<b><span style="font-weight: 400">Preview started (v0.3.1)</span></b></td>
					</tr>
					<tr>
						<td class="smallParagraph" vAlign="top" align="left" width="30">
						June</td>
						<td class="smallParagraph" vAlign="top" align="left" width="*" bgColor="#F4F5F7">
						Eclipse.org project created</td>
					</tr>
					</table>
				</td>
              </tr>
          </table>
		<div class="homeitem">
			<h3>Community News</h3>
			<ul>
				<li><a href="#">Eclipse Magazin, Volume 3 - Titelthema: Eclipse Rich Clients</a>. Zudem stellt das Eclipse Magazin seine <a href="#">'Eclipse Plug-in Collection'</a> vor, die ab sofort online verf&uuml;gbar ist. <span class="dates">02/05/05</span></li>
				<li><a href="#">Eclipse Magazin, Volume 3 - Titelthema: Eclipse Rich Clients</a>. Zudem stellt das Eclipse Magazin seine <a href="#">'Eclipse Plug-in Collection'</a> vor, die ab sofort online verf&uuml;gbar ist. <span class="dates">02/05/05</span></li>
				<li><a href="#">Eclipse Magazin, Volume 3 - Titelthema: Eclipse Rich Clients</a>. Zudem stellt das Eclipse Magazin seine <a href="#">'Eclipse Plug-in Collection'</a> vor, die ab sofort online verf&uuml;gbar ist. <span class="dates">02/05/05</span></li>
				<li><a href="#">Eclipse Magazin, Volume 3 - Titelthema: Eclipse Rich Clients</a>. Zudem stellt das Eclipse Magazin seine <a href="#">'Eclipse Plug-in Collection'</a> vor, die ab sofort online verf&uuml;gbar ist. <span class="dates">02/05/05</span></li>
			</ul>
		</div>
		<hr class="clearer" />
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>New to Eclipse?</h6>
			<ul>
				<li><a href="#">Community Resources</a></li>
				<li><a href="#">News Corner</a></li>
				<li><a href="#">Newsgroup</a></li>
				<li><a href="#">Registration</a></li>
				<li><a href="#">Downloads</a></li>
				<li><a href="#">Legal</a></li>
				<li><a href="#">Eclipse Roadmap</a></li>
				<li><a href="#">Document</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Project Links</h6>
			<ul>
				<li><a href="#">Business Intelligence and Reporting</a></li>
				<li><a href="#">Platform</a></li>
				<li><a href="#">Technology Project</a></li>
				<li><a href="#">Test &amp; Performance Tools Platform</a></li>
				<li><a href="#">Web Tools</a></li>
				<li><a href="#">Project Proposals</a></li>
				<li><img src="images/jdj.jpg" width="40" height="42" class="inset" /><a href="#">Cast your vote for Eclipse</a></li>
				<li><a href="#">Eclipse wins Jolt Award</a><br /><img src="images/jolt.jpg" width="100" height="68" /></li>
			</ul>
		</div>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
