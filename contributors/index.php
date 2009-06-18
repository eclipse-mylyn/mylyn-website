<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Mylyn Contributors";
	$pageKeywords	= "Mylyn, Eclipse";
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
	<div id="rightcolumn">
		<!--
		<font size=1>
			<?= $votesBugs->getAsSideHTML("Top Voted Bugs") ?>
			<?= $votesEnhancements->getAsSideHTML("Top Voted Enhancements") ?>
		</font>
		-->
	</div>

	<div id="midcolumn">
		Listing ordered by number of bugs resolved.  <i>Last updated: 20009-06-18</i>  
		<div class="homeitem3col">
		    <h3>Committers</h3> 
		    <br>&nbsp;&nbsp;For commit statistics see the <a href="http://dash.eclipse.org/dash/commits/web-app/summary.cgi?login=y&year=x&top=tools&project=tools.mylyn&company=individual">Commits Explorer</a>
			<ul>
				<li>
                    <a href="http://tasktop.com/blog"><img border=0 src="/mylyn/images/sites/tasktop.png"></a> Mik Kersten, <a href="http://tasktop.com/blog">Tasktop</a>: Project Lead <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailassigned_to1=1&emailtype1=regexp&email1=mik.kersten%7Cmylyn-inbox&emailassigned_to2=1&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
                    [2197 bugs]</a>
                </li>
				<li>
					<a href="http://tasktop.com"><img border=0 src="/mylyn/images/sites/tasktop.png"></a> Steffen Pingel, <a href="http://tasktop.com">Tasktop</a>: Tasks API, Trac Connector<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailassigned_to1=1&emailtype1=substring&email1=steffen.pingel%40tasktop.com&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					[1218 bugs]</a>
				</li>
				<li>
                	<a href="http://tasktop.com"><img border=0 src="/mylyn/images/sites/tasktop.png"></a> Rob Elves, <a href="http://tasktop.com">Tasktop</a>: Tasks API, Bugzilla Connector<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailassigned_to1=1&emailtype1=substring&email1=robert.elves%40tasktop.com&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
                	[1187 bugs]</a>
                </li>
				<li> 
					<a href="http://greensopinion.blogspot.com/"><img border=0 src="/mylyn/images/sites/independent.gif"></a> David Green, <a href="http://greensopinion.blogspot.com/">independent</a>: WikiText
					<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailassigned_to1=1&emailtype1=substring&email1=dgreen99%40gmail.com&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					[303 bugs]</a>
				</li>
				<li> 
					<a href="http://tasktop.com"><img border=0 src="/mylyn/images/sites/tasktop.png"></a> Shawn Minto, <a href="http://tasktop.com">Tasktop</a>: Context API
					<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailassigned_to1=1&emailtype1=substring&email1=shawn.minto%40tasktop.com&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					[219 bugs]</a>
				</li>
				<li> 
					<a href="http://www.Frank-Becker.de"><img border=0 src="/mylyn/images/sites/independent.gif"></a> Frank Becker, <a href="http://www.Frank-Becker.de">independent</a>: Bugzilla Connector
					<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailassigned_to1=1&emailtype1=substring&email1=Frank%40Frank-Becker.de&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					[126 bugs]</a>
				</li> 
			</ul> 
		</div>

		<div class="homeitem3col">
			<h3>Active Contributors</h3>
			<br>&nbsp;&nbsp;For contributions below 4 bugs see the <a href="/mylyn/new">New & Noteworthy</a> credits and the <a href="http://www.eclipse.org/mylyn/doc/mylyn-iplog.csv">Mylyn IP Log</a>
			<ul>
				<li>
					<img border=0 src="/mylyn/images/sites/independent.gif"> Hiroyuki Inaba, independent
					<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailassigned_to1=1&emailtype1=substring&email1=hiroyuki.inaba%40gmail.com&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					[33 bugs]</a>
				</li>			
				<li> 
					<a href="http://code.google.com/soc/2008/"><img border=0 src="/mylyn/images/sites/google.png"></a> Jingwen Ou, <a href="http://code.google.com/soc/2008/">Google Summer of Code</a>
					<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailassigned_to1=1&emailtype1=substring&email1=jingweno%40cs.ubc.ca&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					[24 bugs]</a>
				</li>
				<li> 
					<a href="http://www.fold1.com"><img border=0 src="/mylyn/images/sites/fold1.png"></a> Maarten Meijer, <a href="http://www.fold1.com">Fold1</a>
					<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailassigned_to1=1&emailtype1=substring&email1=mm105%40xs4all.nl&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					[19 bugs]</a> 
				</li>
				<li> 
					<a href="http://tasktop.com"><img border=0 src="/mylyn/images/sites/tasktop.png"></a> Leo Dos Santos, <a href="http://tasktop.com">Tasktop</a>
					<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailassigned_to1=1&emailtype1=substring&email1=leo.dos.santos%40tasktop.com&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					[16 bugs]</a>
				</li>
				<li>
					<a href="http://www.cs.ubc.ca/labs/spl/"><img border=0 src="/mylyn/images/sites/ubc.png"></a> George Lindholm, <a href="http://www.ubc.ca">University of British Columbia</a>: contributing monitor improvements
					<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailassigned_to1=1&emailtype1=substring&email1=George.Lindholm%40ubc.ca&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					[5 bugs]</a>
				</li>				
			</ul> 
		</div>
		
		<div class="homeitem3col">
			<h3>Past Contributors</h3>
			<br>&nbsp;&nbsp;For contributions below 4 bugs see the <a href="/mylyn/new">New & Noteworthy</a> credits and the <a href="http://www.eclipse.org/mylyn/doc/mylyn-iplog.csv">Mylyn IP Log</a>
			<ul>
				<li>
					<a href="http://www.jroller.com/page/eu"></a>&nbsp;&nbsp;&nbsp;&nbsp;Eugene Kuleshov, <a href="http://www.jroller.com/page/eu">independent</a>: Generic Web Connector owner <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailassigned_to1=1&emailtype1=substring&email1=eu%40&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					[175 bugs]</a>
				</li>
				<li> 
					<a href="http://www.codegear.com/"><img border=0 src="/mylyn/images/sites/codegear.png"></a> Helen Bershadskaya, <a href="http://www.codegear.com/">CodeGear</a>: XPlanner component owner
					<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailassigned_to1=1&emailtype1=substring&email1=hbershadskaya%40gmail.com&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					[57 bugs]</a>
				</li>				
				<li>
					<a href="http://www.willianmitsuda.com/"><img border=0 src="/mylyn/images/sites/independent.gif"></a> Willian Mitsuda, <a href="http://www.willianmitsuda.com/">independent</a>: numerous Tasks UI improvements
					<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailassigned_to1=1&emailtype1=substring&email1=wmitsuda%40gmail.com&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					[44 bugs]</a>
				</li>
				<li>
					<a href="http://www.cs.ubc.ca/labs/spl/"><img border=0 src="/mylyn/images/sites/ubc.png"></a> Ken Sueda, <a href="http://www.cs.ubc.ca/labs/spl/">Univerity of British Columbia SPL</a>: contributed to initial Task List implementation, last active 2005-09-19
					<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailassigned_to1=1&emailtype1=substring&email1=ksueda&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					[39 bugs]</a>
				</li>
				<li>
					<a href="http://www.cs.ubc.ca/labs/spl/"><img border=0 src="/mylyn/images/sites/ubc.png"></a> Meghan Allen, <a href="http://www.cs.ubc.ca/labs/spl/">University of British Columbia SPL</a>: contributing monitor improvements
					<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailassigned_to1=1&emailtype1=substring&email1=meghan_allen&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					[27 bugs]</a>
				</li>
				<li>
					<a href="http://code.google.com/soc/"><img border=0 src="/mylyn/images/sites/google.png"></a> Jeff Pound, <a href="http://code.google.com/soc/2007/">Google Summer of Code</a>: 
					provided enhancements to Bugzilla Connector, last active 2006-09-06
					<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailassigned_to1=1&emailtype1=substring&email1=jeff.bagu%40gmail.com&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					[19 bugs]</a>
				</li>
				<li>
					<a href="http://eclipse.org/mylyn/contribotors"><img border=0 src="/mylyn/images/sites/independent.gif"></a> Wesley Coelho, independent: contributed initial Jira UI, last active 2005-12-05
					<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailassigned_to1=1&emailtype1=substring&email1=wes.coelho&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					[18 bugs]</a>
				</li>
				<li>
					<a href="http://eclipse.org/mylyn/contributors"><img border=0 src="/mylyn/images/sites/independent.gif"></a> Brock Janiczak, independent: contributed Jira API
					<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailassigned_to1=1&emailtype1=substring&email1=brockj%40&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					[13 bugs]</a>
				</li>
				<li>
					<a href="http://www.cs.ubc.ca/l"><img border=0 src="/mylyn/images/sites/ubc.png"></a> Leah Findlater, <a href="http://www.cs.ubc.ca/">Univerity of British Columbia</a>: contributed monitor improvements, last active 2006-05-04
				 	<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailassigned_to1=1&emailtype1=substring&email1=lkf%40cs.ubc.ca&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					[12 bugs]</a>
				</li>
				<li> 
					<a href="http://code.google.com/soc/2007/"><img border=0 src="/mylyn/images/sites/google.png"></a> Xiaoyang Guan, <a href="http://code.google.com/soc/2007/">Google Summer of Code</a>
					<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailassigned_to1=1&emailtype1=substring&email1=xbugzilla%40gmail.com&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					[11 bugs]</a>
				</li>
				<li>
					<a href="http://eclipse.org/mylyn/contributors"><img border=0 src="/mylyn/images/sites/independent.gif"></a> Raphael Ackermann, independent <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailassigned_to1=1&emailtype1=substring&email1=raphael.ackermann%40gmail.com&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					[9 bugs]</a>
				</li>
				<li> 
					<a href="http://code.google.com/soc/2007/"><img border=0 src="/mylyn/images/sites/google.png"></a> Balazs Brinkus, <a href="http://code.google.com/soc/2007/">Google Summer of Code</a>
					<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailassigned_to1=1&emailtype1=substring&email1=balazs.brinkus%40gmail.com&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					[9 bugs]</a>
				</li>	
				<li>
					<a href="http://www.cs.ubc.ca/labs/spl/"><img border=0 src="/mylyn/images/sites/ubc.png"></a> Nathan Hapke, <a href="http://www.cs.ubc.ca/labs/spl/">University of British Columbia SPL</a>
					<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailassigned_to1=1&emailtype1=substring&email1=nhapke%40cs.ubc.ca&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					[7 bugs]</a>
				</li>
				<li> 
					<a href="http://code.google.com/soc/2007/"><img border=0 src="/mylyn/images/sites/google.png"></a> Jevgeni Holodkov, <a href="http://code.google.com/soc/2007/">Google Summer of Code</a>
					<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailassigned_to1=1&emailtype1=substring&email1=jevgeni.holodkov%40gmail.com&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					[5 bugs]</a>
				</li>
				<li> 
					<a href="http://www.cs.ubc.ca/labs/spl/"><img border=0 src="/mylyn/images/sites/ubc.png"></a> John Anvik, <a href="http://www.cs.ubc.ca/labs/spl/">University of British Columbia SPL</a>
					<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailassigned_to1=1&emailtype1=substring&email1=janvik%40cs.ubc.ca&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					[5 bugs]</a>
				</li>
				<li> 
					<a href="http://www.cs.ubc.ca/labs/spl/"><img border=0 src="/mylyn/images/sites/ubc.png"></a> Brian de Alwis, <a href="http://www.cs.ubc.ca/labs/spl/">University of British Columbia SPL</a>
					<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylyn&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailassigned_to1=1&emailtype1=substring&email1=bsd%40cs.ubc.ca&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					[5 bugs]</a>
				</li>
				<li>
                	<a href="http://tasktop.com"><img border=0 src="/mylyn/images/sites/ubc.png"></a> Gail Murphy (<a href="http://tasktop.com">Tasktop</a>): co-creator of Mylyn
                </li>
			</ul> 
		</div>
		<p>&nbsp;</p>
	</div> 
	
	<div id="rightcolumn">
		$commonside
	</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
