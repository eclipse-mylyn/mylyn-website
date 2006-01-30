<?php
	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/ 
	$theme = "Phoenix";

	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	
	$Nav->setLinkList(array()); 
	
#	$Nav->addNavSeparator("Mylar", 	"/mylar/index.php");
#	$Nav->addCustomNav("About", 			"/mylar/about.php", 	"_self", 1);
#	$Nav->addCustomNav("Bugs", 				"/mylar/bugs.php",		"_self", 1);
#	$Nav->addCustomNav("Downloads", 		"/mylar/dl.php",		"_self", 1);
#	$Nav->addNavSeparator("Documentation", 	"/mylar/doc.php", 		"_self", 1);
#	$Nav->addCustomNav("New & Noteworthy", 	"/mylar/doc/new.php", 	"_self", 1);
#	$Nav->addCustomNav("FAQ", 				"/mylar/doc/faq.php", 	"_self", 1);
#	$Nav->addNavSeparator("Developers", 	"/mylar/dev.php", 		"_self", 1);
#	$Nav->addCustomNav("Dev FAQ", 			"/mylar/doc/devfaq.php", 	"_self", 1);
	
	$Nav->addNavSeparator("AJDT", 	"/mylar/index.php");
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;About", "/mylar/about.php", "_self", 1);
#	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Team", "/mylar/team.php", 	"_self", 1);
#	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Plans", "/mylar/plans.php", 	"_self", 1);

	$Nav->addNavSeparator("Users", "", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Getting Started", 	"/mylar/doc.php", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Downloads", 	"/mylar/dl.php", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Bugs", "/mylar/bugs.php", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;FAQ", "/mylar/faq.php", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;New & Noteworthy", "/mylar/new.ph", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Newsgroup", "http://www.eclipse.org/newsportal/thread.php?group=eclipse.technology.ajdt", "_self", 1);

	$Nav->addNavSeparator("Developers", "", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;Contributing", "/mylar/dev.php", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;Contributing", "/mylar/devfaq.php", 	"_self", 1);
?>


