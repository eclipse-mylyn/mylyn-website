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
	
	include("../_sideBars.php");
		
	$html = <<<EOHTML

<div id="maincontent">

	<div id="rightcolumn">
		$side_vote
		$side_announce
		<!--
		<font size=1>
			<?= $votesBugs->getAsSideHTML("Top Voted Bugs") ?>
			<?= $votesEnhancements->getAsSideHTML("Top Voted Enhancements") ?>
		</font>
		-->
	</div>
	
	<div id="midcolumn">

		<div class="homeitem3col">
			<a name="community"></a><h3>Community Newsgroup</h3>
			<table border="0"> 
				<tr height="10" colspan="2"></tr>
        		<tr>
        		<td width="80" align="center" valign="top" >
        			&nbsp;&nbsp;&nbsp;&nbsp;<a href="/mylyn/bugs"><img border="0" src="/mylyn/images/community.jpg"></a>
        		</td>
        		 <td>    
					<p>The Mylyn Newsgroup is intended for the user community discussions on Mylyn usage and troubleshooting.
					Developers extending Mylyn should refer to the <a href="../developers/">Development</a> page.</p> 
			    </td>
				</tr>
			</table>
			 <ul>
				 <li>
			 		<a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.tools.mylyn">Browse newsgroup posts</a> using the web interface
				</li>
			 	<li>
					<a href="news://news.eclipse.org/eclipse.tools.mylyn">Subscribe</a> to the newsgroup with your news reader.
					<a href="http://wiki.eclipse.org/index.php/Webmaster_FAQ#How_do_I_access_the_Eclipse_newsgroups.3F">See the FAQ</a> for instructions on subscribing
				</li>
			 </ul>				    
		</div>

		<div class="homeitem3col">
			<a name="community"></a><h3>Open Source Support for Mylyn</h3>
			<table border="0"> 
        		<tr height="10" colspan="2"></tr>
        		<tr>
        		<td width="80" align="center" valign="center">
        			<a href="/mylyn/bugs"><img border="0" src="/mylyn/images/bug-report.png"></a>
        		</td>
		        <td>    
				        <p>Submit bugs using Mylyn or the <a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Mylyn">Bugzilla web interface.</a> Please 
				        <a href="https://bugs.eclipse.org/bugs/query.cgi?product=Mylyn">search for duplicates</a> first. For defects provide steps 
				        on how to reproduce. For enhancements outline a use case.  Due to an overwhelming number of requests, committers prioritize 
				        critical bug fixes and framework and API improvements and cannot respond all inquiries.  For additional help
				        see the resources listed below.</p> 
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
				  <img border=0 src="/mylyn/images/icon-presentation.gif">&nbsp;&nbsp;Vote for Mylyn Bridges</a> for your programming language and documents
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

		<div class="homeitem3col">
			<a name="commercial"></a><h3>Commercial Support for Mylyn and Connectors</h3>
			<table border="0"> 
        		<tr height="10" colspan="2"></tr>
        		<tr>
        		<td width="80" align="centre" valign="bottom">
        			&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://tasktop.com/support"><img border=0 src="/mylyn/images/tasktop50px.png"></a>
        		</td>
		        <td>
			        <a href="http://tasktop.com/support">Tasktop Technologies<img border="0" src="/mylyn/images/external-link.png"></a>, 
			        the creators of Mylyn, provide training, support, and customization services
			        to help teams and enterprises adopt task-focused programming.  Consulting services include Mylyn connector
			        creation, certification, and porting, as well as support for older Eclipse and Mylyn versions. The 
			        <a href="http://tasktop.com/connectors/">Tasktop Certified<img border="0" src="/mylyn/images/external-link.png"></a> Connector program 
			        includes support for all non-incubation Mylyn connectors and numerous commercial connectors.
			    </td> 
				</tr>
			</table>
			 <ul>
				 <li>
			 		<a href="http://marketplace.eclipse.org/search/apachesolr_search/mylyn?filters=tid:34">Browse for Mylyn Training and Consulting</a> on the Eclipse Marketplace
				</li>
			 </ul>				    
			
			<!--
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
			-->
		</div>
		<p>&nbsp;</p>
	</div>		

</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
