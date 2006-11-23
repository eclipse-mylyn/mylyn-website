<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Zest: The Eclipse Visualization Toolkit";
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
	<div id="midcolumn">
		<div align="center"><h1>$pageTitle</h1></div>
       <p >
       	<table border="0" cellpadding="4">
          <tr>
          	<td valign="top"><img border=0 src="images/zest_screen.jpg"></td>
          	<td valign="top">&nbsp;</td>
            <td valign="top">
	     <p>
		<strong>Zest: The Eclipse Visualization Toolkit,</strong> is a set of 
		visualization components built for Eclipse.  
		Zest is a component of the Mylar project that 
		can be used independently of the Mylar IDE 
		support. The entire Zest library has been
		developed in SWT and integrates seamlessly within Eclipse because of its
		recognized design.   
		<P>
		Zest has been modeled after JFace, and all the Zest views
		conform to the same standards and conventions as existing Eclipse views.  This
		means that the providers, actions and listeners used within existing
		applications can be leveraged within Zest.  
		Zest is a visualization toolkit with a growing
		number of views, all of which aim to be easy to program against. We are actively
                looking for new visualizations to include in the toolkit.
		
		<p>The Zest project also contains a graph layout package which can be used 
		independently.  The graph layout package can be used within existing
		Java applications (SWT or AWT) to provider layout locations for a set of
		entities and relationships.
		</p>
		<A HREF="http://wiki.eclipse.org/index.php/Mylar_Zest_Visualization">Please visit our Wiki for more information.</A>
  	  </td>
          </tr>
        </table>
	
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
	<div id="rightcolumn">
		$commonside
		<center>
		<a href="sandbox/zest_screenshots.php">
		<img src="images/zest_screen1_th.jpg"/><BR>
		Screenshots
		</a>
		<center>
	</div>
	<div id="rightcolumn">
		$commonside
		<div class="sideitem">
			<h6>Zest Viewers</h6>
			<ul>
				<li>Static Graph Viewer</li>
                <li>Nested Graph Viewer</li>
			</ul>
		</div>
	</div>
	<div id="rightcolumn">
		$commonside
		<div class="sideitem">
			<h6><A HREF="http://wiki.eclipse.org/index.php/Mylar_Zest_Visualization#Layout_Algorithms">Layout Algorithms</A></h6>
			<ul>
				<li>Spring Layout Algorithm</li>
                                <li>Tree Layout Algorithm</li>
                                <li>Radial Layout Algorithm</li>
                                <li>Grid Layout Algorithm</li>
			</ul>
		</div>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
