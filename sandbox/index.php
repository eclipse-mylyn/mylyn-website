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
		<div align="center"><h1>$pageTitle</h1></div>
			<table border="0" cellpadding="4">
              <tr>
                <td width="20%">
                	<img border=0 src="../images/screenshot-mylar-small.gif">
               	</td>
                <td width="50%">
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
				<td>
                	&nbsp;&nbsp;&nbsp;
               	</td>
              </tr>
            </table>
          
        <h3>Community</h3>
        		<table border="0" cellpadding="4>
                      <tr>
                        <td>
						Please report bugs and feature requests to
						<a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Mylar">
						Bugzilla</a>.<table cellSpacing="4" cellPadding="3" width="100%" border="0" bordercolor="#111111" id="table2">
                      	<tr>
                        <td bgcolor="#F4F5F7">
                        <a href="mailto:mylar-users@eclipse.org">
						mylar-announce@eclipse.org</a></td>
                        <td class="smallParagraph" align="left" valign="top" bgcolor="#F4F5F7">
                        release and event announcements, low traffic mailing 
						list</td>
                        <td bgcolor="#F4F5F7">
                        <a href="http://dev.eclipse.org/mailman/listinfo/mylar-announce">subscribe/unsubscribe</a></td>
                        <td class="smallParagraph" align="left" valign="top" bgcolor="#F4F5F7">
                        <a href="http://dev.eclipse.org/mhonarc/lists/mylar-announce/maillist.html">
						archive</a></td>
                      	</tr>
						<tr>
                        <td bgcolor="#F4F5F7">
                        <a href="mailto:mylar-users@eclipse.org">
						mylar-users@eclipse.org</a></td>
                        <td class="smallParagraph" align="left" valign="top" bgcolor="#F4F5F7">
                        user discussions, questions, and suggestions</td>
                        <td class="smallParagraph" align="left" valign="top" bgcolor="#F4F5F7">
                        <a href="http://dev.eclipse.org/mailman/listinfo/mylar-users">subscribe/unsubscribe</a></td>
                        <td class="smallParagraph" align="left" valign="top" bgcolor="#F4F5F7">
                        <a href="http://dev.eclipse.org/mhonarc/lists/mylar-users/maillist.html">
						archive</a></td>
                      	</tr>
                      	<tr>
                        <td bgcolor="#F4F5F7">
                        <a href="mailto:mylar-dev@eclipse.org">
						mylar-dev@eclipse.org</a></td>
                        <td width="*" class="smallParagraph" align="left" valign="top" bgcolor="#F4F5F7">
                        developer discussions, higher traffic mailing list</td>
                        <td width="10%" class="smallParagraph" align="left" valign="top" bgcolor="#F4F5F7">
                        <a href="http://dev.eclipse.org/mailman/listinfo/mylar-dev">subscribe/unsubscribe</a></td>
                        <td width="10%" class="smallParagraph" align="left" valign="top" bgcolor="#F4F5F7">
                        <a href="http://dev.eclipse.org/mhonarc/lists/mylar-dev/maillist.html">
						archive</a></td>
                      </tr>
                  </table></td>
				</tr>
                </table>
        </div>
		<div class="homeitem" id="rightcolumn">
			<h3>News & blogs</h3>
			<ul>
				<li><a href="#">First public release</a><span class="dates"> (October 28, 2005)</span></li>
				<li>Ed Burnette: <a href="http://www.eclipsezone.com/eclipse/forums/t20933.html">Mylar is the next killer app for Eclipse..</a><span class="dates"> (July 2005)</span></li>
				<li><a href="#">User study preview release</a><span class="dates"> (July 11, 2005)</span></li>
				<li><a href="#">Eclipse.org project created</a><span class="dates"> (June 13, 2005)</span></li>
			</ul>
		</div>
		<hr class="clearer" />
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
