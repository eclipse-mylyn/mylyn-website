<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Zest Screenshot Gallery";
	$pageKeywords	= "Mylar, Eclipse, Zest, Visualization";
	$pageAuthor		= "Ian Bull";
	
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
		<div class="homeitem3col">
		<h3>Information</h3>
		<ul>
		<li>
			<B>Layout Algorithms:</B> The layout package is framework and a set of example layouts
			that can be used independently of Zest in SWT and Swing applications. 
			The layout package uses a facade to provide a single, easy to use, API for all
                        algorithms in the package. By implementing a node and edge interface, any graph
                        model can be adapted to use this package.  The package has proven especially useful
                        for GEF developers.
                </li>
		<li>
			<B>Zest Viewers: </B> The Zest viewers are JFace compliant graph based
                        visualization tools written entirely in SWT (and GEF). Because of Zest's recognized
                        design, existing content and label providers can be leveraged to create a 
                        consistent looking, lightweight, graph based interface for your Eclipse plugin or 
                        RCP application.				
                </li>        
                <li> 
                        <B>Bugs and Requests: </B> Like Mylar, we use the bug tracking software bugzilla at Eclipse.org.
                        Please report bugs and feature requests for Zest through this interface.  For a list
                        of current Zest issues, please refer to this query. <P>
			If you find a Zest viewer that does not behave the way a JFace viewer does, this is considered
                        a bug, please open a bug report against it.
                </li>
  		<li>    <B>Contact: </B> Zest is currently being developed by the Chisel Group at the University
                                  of Victoria.  For more information, please feel free to contact
                                  <A HREF="http://www.ianbull.com">Ian Bull</A>.
                </li>
 		<li>
			Currently the viewers and layout package are only available from our CVS repository.<BR>
			Create a new CVS location: <I>dev.eclipse.org/cvsroot/technology</I><BR>
                        <B>Checkout:</B> <BR>
			&nbsp;&nbsp;&nbsp;<I>mylar/sandbox/org.eclipse.mylar.zest.layouts</I><BR>
			&nbsp;&nbsp;&nbsp;<I>mylar/sandbox/org.eclipse.mylar.zest.core</I><BR>
                </li>
		</ul>
		</div>  
	</div>
	
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
