<?php
	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/ 
	$theme = "Phoenix";

<!--
	require_once($_SERVER['DOCUMENT_ROOT'] . "/projects/common/project-info.class.php");
	$projectInfo = new ProjectInfo("technology.mylar");
	$projectInfo->generate_common_nav( $Nav );
-->

	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	$Nav->addNavSeparator("Mylar Technology Project", 	"/mylar/index.php");
	$Nav->addCustomNav("About", 			"/mylar/about.php", 	"_self", 1);
	$Nav->addCustomNav("Downloads", 		"/mylar/dl.php",		"_self", 1);
	$Nav->addCustomNav("Developers", 		"/mylar/dev.php", 		"_self", 1);
	$Nav->addNavSeparator("Documentation", 	"/mylar/doc.php", 		"_self", 1);
	$Nav->addCustomNav("New & Noteworthy", 	"/mylar/doc/new.php", 	"_self", 1);
	$Nav->addCustomNav("FAQ", 				"/mylar/doc/faq.php", 	"_self", 1);
?>
