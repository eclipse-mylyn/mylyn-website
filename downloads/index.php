<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "Mylyn Downloads";
	$pageKeywords	= "Mylyn, Eclipse";
	$pageAuthor		= "Mik Kersten";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#

	# Paste your HTML content between the EOHTML markers!

	include("../_sideBars.php");

$html = <<<EOHTML
<div class="maincontent">
  <div id="midcolumn">
	  <div>
    	<p>
        The minimal Mylyn install is a standalone Task List.  Optional Task Repository Connectors integrate the
        Task List with bug/task/issue trackers and project management tools.
        Bridges focus the user interface on the active task and installing all available bridges is recommended.
        The preferred way of installing is via "Help/Install New Software".
        </p>
    </div>

	<div>
		<table border="0" cellpadding="3">
			<tr>
				<td><a href="http://wiki.eclipse.org/index.php/Mylyn_Extensions"><img border=0 src="/mylyn/images/plugin.png"></a></td>
				<td>
				<table border="0" cellpadding="0">
						<tr>
						<td><font size=+0><a href="http://wiki.eclipse.org/index.php/Mylyn_Extensions">Extensions</a></font></td>
						</tr>
						<tr><td>Additional Connectors and Bridges</td></tr>
					</table>
				</td>
				<td><a href="https://github.com/eclipse-mylyn"><img border=0 src="/mylyn/images/bug-report.png"></a></td>
				<td>
					<table border="0" cellpadding="0">
						<tr>
						<td><font size=+0><a href="https://github.com/eclipse-mylyn">Support</a></font></td>
						</tr>
						<tr><td>Community and commercial support</td></tr>
					</table>
				</td>
				<td><a href="/mylyn/downloads/archive.php"><img border=0 src="/mylyn/images/archives.gif"></a></td>
				<td>
					<table border="0" cellpadding="0">
						<tr>
						<td><span style="white-space: nowrap"><font size=+0><a href="/mylyn/downloads/archive.php">Older Downloads</a></font></span></td>
						</tr>
						<tr><td>Download archive and support for older Eclipse versions starting from Eclipse 3.2</td></tr>
					</table>
				</td>
			</tr>
		</table>
	</div>

	<!-- Release -->
		 <div class="homeitem3col">
		 	<h3>Downloads <a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn/FAQ#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<br>&nbsp;&nbsp;&nbsp;<a href="http://www.eclipse.org/mylyn/new">
			<ul>
				<li>
					<a title="All Downloads" href="https://download.eclipse.org/mylyn/updates/">
						<img border=0 src="/mylyn/images/icon-save.gif"> https://download.eclipse.org/mylyn/updates/
					</a>
				</li>
			</ul>
		</div>


	<!--
	<div align="center">
		<font color="#444444">All downloads are provided under the terms and conditions of the <a href="https://www.eclipse.org/legal/epl-2.0/faq.php">Eclipse Foundation
					Software User Agreement</a> unless otherwise specified.</font>
	</div>
	-->
	</div>
	<div id="rightcolumn">
	  $side_vote
		$side_announce
		<!--
		<div class="sideitem">
			<h6>New Users</h6>
			<p style="padding-left: 5px;">You can download Eclipse with Mylyn in most of the <a href="http://www.eclipse.org/downloads/">Eclipse Bundles</a>,
			then look for updates using the sites below.  <br><b>Eclipse 3.2 users</b>: use the <a href="http://www.eclipse.org/mylyn/builds">Mylyn 2.0 release</a>.</p>
		</div>
		<div class="sideitem">
			<h6>License</h6>
			<p style="padding-left: 5px;">All downloads are provided under the terms and conditions of the <a href="/legal/epl/notice.php">Eclipse Foundation
			Software User Agreement</a> unless otherwise specified.</p>
		</div>
		<div class="sideitem">
			<h6>Support Mylyn</h6>
			<p style="padding-left: 5px; text-align: center;"><form method="post" action="http://www.eclipseplugincentral.com/Web_Links.html">
			<a href="http://www.eclipseplugincentral.com/Web_Links-index-req-viewlink-cid-587.html">
			Vote on EPIC</a><br>
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
			</form><br>&nbsp;</p>
		</div>-->
	</div>
</div>

EOHTML;

	# Generate the web page
    $Theme = $App->getThemeClass();
    $Theme = $App->getThemeClass($theme);
    $Theme->setNavPosition('left');
    $Theme->setNav($Nav);
    $Theme->setMenu($Menu);
    $Theme->setPageAuthor($pageAuthor);
    $Theme->setPageKeywords($pageKeywords);
    $Theme->setPageTitle($pageTitle);
    $Theme->setHtml($html);
    $Theme->setBreadcrumb($Breadcrumb);
    $Theme->generatePage();?>
