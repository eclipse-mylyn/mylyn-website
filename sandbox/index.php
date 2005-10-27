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
			<table border="0" cellpadding="4" width="100%">
              <tr>
                <td class=paragraph width="5%"><img border=0 src="../images/screenshot-mylar-small.gif"></td>
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
						left). 
				</td>
              </tr>
          </table>
		<div class="homeitem" id="rightcolumn">
			<h3>News & blogs</h3>
			<ul>
				<li><a href="#">Mylar 0.4 released</a> bla bla <span class="dates">October 28, 2005</span></li>
				<li><a href="http://www.eclipsezone.com/eclipse/forums/t20933.html">Mylar is the next killer app for Eclipse..</a> by Ed Burnette<span class="dates">July 2005</span></li>
			</ul>
		</div>
		<hr class="clearer" />
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
