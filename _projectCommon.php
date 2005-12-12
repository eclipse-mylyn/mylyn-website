<?php

	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/ 
	$theme = "Phoenix";

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	$Nav->addNavSeparator("Mylar Technology Project", 	"index.php");
	$Nav->addCustomNav("About", 		"about.php", 	"_self", 2);
	$Nav->addCustomNav("Downloads", 	"dl.php",	"_self", 2);
	$Nav->addCustomNav("Developers", 	"dev.php", 	"_self", 2);
	$Nav->addCustomNav("Documentation", "doc.php", 	"_self", 2);
?>
