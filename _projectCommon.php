<?php
	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/ 
	$theme = "Lazarus";

	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	
	$Nav->setLinkList(array());
	$branding = <<<EOBRANDING
<STYLE TYPE="text/css">
  .sideitem { border-width: 1px 1px; }
  body { font-size: small; }
  #midcolumn { margin-top: 5px; }
</STYLE>

<div id="branding">
<center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img border=0 src="/mylar/images/mylar-banner.gif"></center>
</div>
EOBRANDING;
	$Menu->setProjectBranding($branding);
	
	$Nav->addNavSeparator("Mylar", 	"/mylar/index.php");
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;About", "/mylar/about.php", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Team", "/mylar/team.php", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Plan", "/mylar/plan.php", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Publications", "/mylar/publications.php", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Archive", "/mylar/archive.php", 	"_self", 1);

	$Nav->addNavSeparator("Users", "/mylar/users.php", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Getting Started", "/mylar/start.php", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;New & Noteworthy", "/mylar/doc/new.php", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Downloads", "/mylar/dl.php", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Bugs", "/mylar/bugs.php", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;FAQ (wiki)", "http://wiki.eclipse.org/index.php/Mylar_FAQ", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;User Guide (wiki)", "http://wiki.eclipse.org/index.php/Mylar_User_Guide", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Tips & Tricks", "/mylar/tips.php", "_self", 1);

	$Nav->addNavSeparator("Developers (wiki)", "http://wiki.eclipse.org/index.php/Mylar", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;Contributing", "http://wiki.eclipse.org/index.php/Mylar_Contributor_Reference", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;Integrating", "http://wiki.eclipse.org/index.php/Mylar_Integrator_Reference", 	"_self", 1);
?>


