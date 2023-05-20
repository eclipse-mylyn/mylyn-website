<?php
	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/ 
	$theme = "solstice";

	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	
	$Nav->setLinkList(array());
	$branding = <<<EOBRANDING
<STYLE TYPE="text/css">
  .sideitem { border-width: 1px 1px; }
  body { font-size: small; }
  #midcolumn { margin-top: 5px; }
</STYLE>

<div id="branding">
<center>
<a href="http://eclipse.org/mylyn/about"><img border=0 src="/mylyn/images/banner-mylyn.gif"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</center>
</div>
EOBRANDING;
	$Menu->setProjectBranding($branding);
	
	$Nav->addNavSeparator("Mylyn", 	"/mylyn/index.php");
	$Nav->addCustomNav("About", "/projects/project_summary.php?projectid=mylyn", "", 1  );
	//$Nav->addCustomNav("Calendar", "/mylyn/calendar", 	"_self", 1);
	//$Nav->addCustomNav("Contributors", "/mylyn/contributors", 	"_self", 1);
	$Nav->addCustomNav("<span style='white-space: nowrap'>History &amp; Legal</span>", "/mylyn/about", "_self", 1);
	//$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Presentations", "/mylyn/presentations", 	"_self", 1); 
	//$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Publications", "/mylyn/publications", 	"_self", 1);

	$Nav->addNavSeparator("Users", "/mylyn/start", "_self", 1);
	$Nav->addCustomNav("Get Started", "/mylyn/start", 	"_self", 1);
	$Nav->addCustomNav("Support", "/mylyn/support", 	"_self", 1);
	$Nav->addCustomNav("Downloads", "/mylyn/downloads", 	"_self", 1);
	$Nav->addCustomNav("<span style='white-space: nowrap;letter-spacing:-1px;'>New & Noteworthy</span>", "/mylyn/new", "_self", 1);
	$Nav->addCustomNav("FAQ (wiki)", "http://wiki.eclipse.org/index.php/Mylyn/FAQ", "_self", 1);
	$Nav->addCustomNav("<span style='white-space: nowrap;letter-spacing:-1px;'>User Guide (wiki)</span>", "http://wiki.eclipse.org/index.php/Mylyn/User_Guide", "_self", 1);
	$Nav->addCustomNav("<span style='white-space: nowrap;letter-spacing:-1px;'>Extensions (wiki)</span>", "http://wiki.eclipse.org/index.php/Mylyn/Extensions", "_self", 1);

	$Nav->addNavSeparator("Integrators", "/mylyn/developers", "_self", 1);
	$Nav->addCustomNav("Development", "/mylyn/developers", 	"_self", 1);
	$Nav->addCustomNav("<span style='white-space: nowrap;letter-spacing:-1px;'>Contributing (wiki)</span>", "http://wiki.eclipse.org/index.php/Mylyn/Contributor_Reference", 	"_self", 1);
	$Nav->addCustomNav("<span style='white-space: nowrap;letter-spacing:-1px;'>Integrating (wiki)</span>", "http://wiki.eclipse.org/index.php/Mylyn/Integrator_Reference", 	"_self", 1);
	//$Nav->addCustomNav("Plan", "https://projects.eclipse.org/projects/mylyn/documentation", 	"_self", 1);

	$App->SetGoogleAnalyticsTrackingCode("UA-6100912-1");
?>
