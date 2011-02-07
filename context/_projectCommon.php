<?php

	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/
	# Optional: defaults to system theme 
	$theme = "Nova";
	

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	$Nav->setLinkList(array());
	$Nav->addNavSeparator("Mylyn", 	"/mylyn/");
	$Nav->addCustomNav("About", "/projects/project_summary.php?projectid=mylyn.context", "_self", 3);
	$Nav->addCustomNav("Plan", "/projects/project-plan.php?projectid=mylyn.context", "_self", 3);
	
	$pageKeywords	= "eclipse, mylyn, context, bugzilla, trac";
	$pageAuthor		= "Steffen Pingel";
	$pageTitle 		= "Mylyn Context";

	$Menu->setMenuItemList(array());
	$Menu->addMenuItem("Mylyn", "/mylyn/", "_self");
	$Menu->addMenuItem("About", "/projects/project_summary.php?projectid=mylyn.context", "_self");
	$Menu->addMenuItem("Plan", "/projects/project-plan.php?projectid=mylyn.context", "_self");
	
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="style.css"/>' . "\n\t");
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="style2.css"/>' . "\n\t");
	
	$App->Promotion = TRUE;
?>
