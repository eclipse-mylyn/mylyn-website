<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Mylar Documentation";
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
          
        <h3>Presentations and Publications</h3>
        		
 		<table cellSpacing="4" cellPadding="3" width="100%" border="0" bordercolor="#111111" id="table3">
          	<tr>
            <td width="8%" class="smallParagraph" align="left" valign="top" bgcolor="#F4F5F7">
            May 2005</td>
            <td width="60%" class="smallParagraph" align="left" valign="top" bgcolor="#F4F5F7">
            <a href="publications/2005-05-mylar-creation-review.ppt">Mylar eclipse.org project creation review 
			(PPT presentation)</a>&nbsp;
			<a href="publications/2005-04-mylar-proposal.html">(HTML 
			proposal)</a></td>
            <td width="30%" class="smallParagraph" align="left" valign="top" bgcolor="#F4F5F7">
            <a href="http://kerstens.org/mik">Mik Kersten</a>, 
			<a href="http://www.cs.ubc.ca/~murphy/">Gail Murphy</a> 
			and Shawn Minto</td>
          </tr>
          	<tr>
            <td class="smallParagraph" align="left" valign="top" bgcolor="#F8F3F4">
            Mar. 2005</td>
            <td class="smallParagraph" align="left" valign="top" bgcolor="#F8F3F4">
            EclipseCon 2005:
            <a href="publications/2005-03-mylar-eclipsecon-web.ppt">Mylar: a 
			degree-of-interest model for Eclipse (PPT presentation)</a></td>
            <td class="smallParagraph" align="left" valign="top" bgcolor="#F8F3F4">
            <a href="http://kerstens.org/mik">Mik Kersten</a>, 
			<a href="http://www.cs.ubc.ca/~murphy/">Gail Murphy</a> 
			and Shawn Minto</td>
          </tr>
          <tr>
            <td class="smallParagraph" align="left" valign="top" bgcolor="#F4F5F7">
            Mar. 2005</td>
            <td class="smallParagraph" align="left" valign="top" bgcolor="#F4F5F7">
            AOSD 2005:
			<a href="publications/2005-03-mylar-aosd-web.ppt">Mylar: a 
			degree-of-interest model for IDEs (PPT presentation)</a>&nbsp;
			<a href="publications/2005-03-mylar-aosd.pdf">(PDF paper)</a></td>
            <td class="smallParagraph" align="left" valign="top" bgcolor="#F4F5F7">
            <a href="http://kerstens.org/mik">Mik Kersten</a> and 
			<a href="http://www.cs.ubc.ca/~murphy/">Gail Murphy</a></td>
          </tr>
        </table>
 
 
		<hr class="clearer" />
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
