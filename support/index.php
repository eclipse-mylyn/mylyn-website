<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Mylyn Support";
	$pageKeywords	= "Mylyn, Eclipse, Support";
	$pageAuthor		= "Mik Kersten";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);
	
	include("_sideCommon.php");
		
	$html = <<<EOHTML

<div id="maincontent">

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Announce List</h6>
			 <ul><li>
				<a href="http://dev.eclipse.org/mailman/listinfo/mylyn-announce">Get notified</a> of Mylyn releases.
			  </li></ul>
		</div>   

		<div class="sideitem">
			<h6>Newsgroup</h6>
			 <ul>
			 	<li>
					<a href="news://news.eclipse.org/eclipse.tools.mylyn">Subscribe</a> to the user discussion newsgroup
				</li>
				<li>
					<a href="http://wiki.eclipse.org/index.php/Webmaster_FAQ#How_do_I_access_the_Eclipse_newsgroups.3F">Reat the FAQ</a> for instructions on subscribing
				</li>
			 	<li>
			 		<a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.tools.mylyn">Browse posts</a> with the web interface
				</li>
			 </ul>
		</div>  
	</div>
	
	<div id="midcolumn">
		<!--	<div align="center"><h1>$pageTitle</h1></div> -->
		<div class="homeitem3col">
			<a name="community"></a><h3>Community Support for Mylyn</h3>
			<table border="0"> 
        		<tr>
        		<td valign="top">
        			&nbsp;&nbsp;&nbsp;&nbsp;<a href="/mylyn/bugs"><img border="0" src="/mylyn/images/bug-report.png"></a>
        		</td>
		        <td>    
				        <p>Submit bugs using Mylyn or the <a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Mylyn">Bugzilla web interface.</a> Please 
				        <a href="https://bugs.eclipse.org/bugs/query.cgi?product=Mylyn">search for duplicates</a> first. For defects provide steps 
				        on how to reproduce. For enhancements outline a use case.  Due to an overwhelming number of help requests, committers prioritize 
				        critical bug fixes and framework and API improvements and cannot always respond all help inquiries.  For additional help
				        see the Commercial Support resources listed below.</p> 
			    </td>
				</tr>
			</table>
			
			<ul>
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&bug_severity=blocker&bug_severity=critical&bug_severity=major&bug_severity=normal&emailtype1=substring&email1=&emailtype2=notregexp&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
				<img border=0 src="/mylyn/images/query.gif">&nbsp;&nbsp;View bugs with severity of normal or higher</a> 
				</li>
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&bug_severity=minor&bug_severity=trivial&bug_severity=enhancement&emailtype1=substring&email1=&emailtype2=notregexp&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					<img border=0 src="/mylyn/images/query.gif">&nbsp;&nbsp;View bugs marked enhancement, minor, or trivial</a> 
				</li>
				
				<li>
				  <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=anywordssubstr&short_desc=%5Bconnector%5D&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
				  <img border=0 src="/mylyn/images/icon-presentation.gif">&nbsp;&nbsp;Vote for Mylyn Connectors</a> to your task, bug, issue and source repositories
				</li>
				<li>
				  <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=anywordssubstr&short_desc=%5Bbridge%5D&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
				  <img border=0 src="/mylyn/images/icon-presentation.gif">&nbsp;&nbsp;Vote for Mylyn Bridges</a> for your programming language or framework
				</li>
			</ul> 
				
				<!--<li>
				<img border=0 src="/mylyn/images/query.gif">&nbsp;&nbsp;Connectors: 
				<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&component=Bugzilla&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=notregexp&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">Bugzilla</a>,
				<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&component=Jira&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=notregexp&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">JIRA</a>,   
				<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&component=Trac&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=notregexp&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">Trac</a>, 
				<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&component=XPlanner&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=notregexp&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">XPlanner</a>
				</li>-->
				
				<!--<li>
					<a href="http://dev.eclipse.org/newslists/news.eclipse.tools.mylyn/maillist.html">Archive</a>, 
					<a href="http://dev.eclipse.org/newslists/news.eclipse.technology.mylar/maillist.html">Old Archive</a>
				</li>-->	    
				    
		</div>

		<br>&nbsp;
		
		<div class="homeitem3col">
			<a name="commercial"></a><h3>Commercial Support for Mylyn and Connectors</h3>
			<table border="0"> 
        		<tr>
        		<td valign="top">
        			&nbsp;&nbsp;&nbsp;&nbsp;<a href="/mylyn/bugs"><img border="0" src="/mylyn/images/community.jpg"></a>
        		</td>
		        <td>
			        Commercial support is available for both Mylyn and Mylyn Connectors. 
			    </td> 
				</tr>
			</table>
			<ul>
				<li>
					<b>Mylyn</b>: Tasktop Technologies via <a href="http://tasktop.com/products/">Tasktop Pro</a>
				</li>
				<li>
					<b>Bugzilla Connector</b>: <a href="http://tasktop.com">Tasktop Technologies</a>
				</li>
				<li>
					<b>JIRA Connector</b>: <a href="http://tasktop.com">Tasktop Technologies</a>
				</li>
				<li>
					<b>Trac Connector</b>: <a href="http://tasktop.com">Tasktop Technologies</a>
				</li>
				<li>
					<b>XPlanner Connector</b>: <a href="#community">Community Supported</a>
				</li>
				
			</ul>
		</div>
		
	</div>	
	
	
	
	

</div>

<div id="rightcolumn"> 
	<font size=1>
	<?= $votesBugs->getAsSideHTML("Top Voted Bugs") ?>
	<?= $votesEnhancements->getAsSideHTML("Top Voted Enhancements") ?>
	</font>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
