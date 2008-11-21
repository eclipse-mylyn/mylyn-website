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



<div id="rightcolumn">
		<div class="sideitem">
				<h6>Announce List</h6>
			<p style="padding-left: 5px;">	We recommend that all users subscribe to the low traffic <a href="http://dev.eclipse.org/mailman/listinfo/mylyn-announce">announce mailing list</a>.</p> 
		</div>
</div>

<div id="maincontent">
	<div id="midcolumn">
		<!--	<div align="center"><h1>$pageTitle</h1></div> -->
		<div class="homeitem3col">
			<h3>Community Support</h3>
			<table border="0"> 
        		<tr>
        		<td valign="top">
        			&nbsp;&nbsp;&nbsp;&nbsp;<a href="/mylyn/bugs"><img border="0" src="/mylyn/images/bug-report.png"></a>
        		</td>
		        <td>
			        Mylyn users can support each other using the community channels listed below.  Mylyn committers prioritize critical bug fixes and framework and API improvements.
			    </td> 
				</tr>
			</table>
			<ul>
				<li>
					<a href="news://news.eclipse.org/eclipse.tools.mylyn">Newsgroup</a>: user discussions, see <a href="http://wiki.eclipse.org/index.php/Webmaster_FAQ#How_do_I_access_the_Eclipse_newsgroups.3F">Webmaster FAQ</a> for subscribing.
				</li>
				<li>
					<a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.tools.mylyn">Web Access</a>,
					registration is <a href="http://www.eclipse.org/newsgroups/register.php">required</a>. 
				</li>
				<!--<li>
					<a href="http://dev.eclipse.org/newslists/news.eclipse.tools.mylyn/maillist.html">Archive</a>, 
					<a href="http://dev.eclipse.org/newslists/news.eclipse.technology.mylar/maillist.html">Old Archive</a>
				</li>-->
			</ul>
			
				        <p style="padding-left: 30px;">The preferred way of reporting and discussing defects and enhancement requests is via 
				        Bugzilla. The <a href="/mylyn/downloads">The Mylyn Bugzilla 
				        Connector</a> is the recommened way to submit bugs.</p>
				        
				        <p style="padding-left: 30px;"><a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Mylyn">Submit a bug via web interface.</a> Please manually 
				        <a href="https://bugs.eclipse.org/bugs/query.cgi?product=Mylyn">search for duplicates first.</a> For defects provide steps 
				        on how to reproduce. For enhancements please outline a use case.</p> 
				    
			<ul>
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&bug_severity=blocker&bug_severity=critical&bug_severity=major&bug_severity=normal&emailtype1=substring&email1=&emailtype2=notregexp&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
				<img border=0 src="/mylyn/images/query.gif">&nbsp;&nbsp;All open bugs with severity of normal or higher</a> 
				</li>
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&bug_severity=minor&bug_severity=trivial&bug_severity=enhancement&emailtype1=substring&email1=&emailtype2=notregexp&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					<img border=0 src="/mylyn/images/query.gif">&nbsp;&nbsp;All open bugs marked enhancement, minor, or trivial</a> 
				</li>
				
				<!--<li>
				<img border=0 src="/mylyn/images/query.gif">&nbsp;&nbsp;Connectors: 
				<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&component=Bugzilla&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=notregexp&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">Bugzilla</a>,
				<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&component=Jira&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=notregexp&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">JIRA</a>,   
				<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&component=Trac&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=notregexp&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">Trac</a>, 
				<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&component=XPlanner&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=notregexp&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">XPlanner</a>
				</li>-->
				
			</ul>
				
				<p style="padding-left: 30px;">
				  You can vote for any bug by using the <i>Vote for this bug</i> link on the bug report.
				</p>

			<ul>
				<li>
				  Vote for
				  <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=anywordssubstr&short_desc=%5Bconnector%5D&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
				  task repository connectors</a>
				</li>
				<li>
				  Vote for
				  <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=anywordssubstr&short_desc=%5Bbridge%5D&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
				  structure bridges</a>
				</li>
			</ul> 
				    
				    
				    
		</div>

		<p>&nbsp;</p>
		
		<div class="homeitem3col">
			<h3>Commercial Support</h3>
			<ul>
				<li>
					<b>Mylyn</b>: Tasktop Technologies via <a href="http://tasktop.com/products/">Tasktop Pro</a>.
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
					<b>XPlanner Connector</b>: <a href="http://www.embarcadero.com/">Embarcadero Technologies</a>
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
