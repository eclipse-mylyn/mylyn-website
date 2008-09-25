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
<center>
<a href="http://eclipse.org/mylyn/about"><img border=0 src="/mylyn/images/banner-mylyn.gif"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</center>
</div>
EOBRANDING;
	$Menu->setProjectBranding($branding);
	
	$Nav->addNavSeparator("Mylyn", 	"/mylyn/index.php");
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;About This Project", "/projects/project_summary.php?projectid=tools.mylyn", "", 1  );
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Details", "/mylyn/about", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Contributors", "/mylyn/contributors", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Presentations", "/mylyn/presentations", 	"_self", 1); 
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Publications", "/mylyn/publications", 	"_self", 1);

	$Nav->addNavSeparator("Users", "/mylyn/start", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Get Started", "/mylyn/start", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Downloads", "/mylyn/downloads", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Community", "/mylyn/community", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;New & Noteworthy", "/mylyn/new", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;FAQ (wiki)", "http://wiki.eclipse.org/index.php/Mylyn/FAQ", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;User Guide (wiki)", "http://wiki.eclipse.org/index.php/Mylyn/User_Guide", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Extensions (wiki)", "http://wiki.eclipse.org/index.php/Mylyn/Extensions", "_self", 1);

	$Nav->addNavSeparator("Integrators", "http://wiki.eclipse.org/index.php/Mylyn", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;Development", "/mylyn/developers", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;Contributing (wiki)", "http://wiki.eclipse.org/index.php/Mylyn/Contributor_Reference", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;Integrating (wiki)", "http://wiki.eclipse.org/index.php/Mylyn/Integrator_Reference", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;Plan (wiki)", "http://wiki.eclipse.org/index.php/Mylyn/Plan/3.1", 	"_self", 1);	
?>


