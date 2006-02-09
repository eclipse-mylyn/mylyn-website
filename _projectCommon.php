<?php
	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/ 
	$theme = "Phoenix";

	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	
	$Nav->setLinkList(array());
	
	$Nav->addNavSeparator("Mylar", 	"/mylar/index.php");
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;About", "/mylar/about.php", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Team", "/mylar/team.php", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Plan", "/mylar/plan.php", 	"_self", 1);

	$Nav->addNavSeparator("Users", "/mylar/users.php", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Getting Started", "/mylar/start.php", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Downloads", "/mylar/dl.php", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Bugs", "/mylar/bugs.php", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;FAQ", "/mylar/doc/faq.php", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;New & Noteworthy", "/mylar/doc/new.php", "_self", 1);

	$Nav->addNavSeparator("Cotnributors", "/mylar/dev.php", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;Dev FAQ", "/mylar/doc/devfaq.php", 	"_self", 1);
?>


