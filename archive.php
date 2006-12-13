<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Mylar Archive";
	$pageKeywords	= "Mylar, Eclipse";
	$pageAuthor		= "Mik Kersten";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);
	# End: page-specific settings
	
	include("_sideCommon.php");
	include("_sideNews.php");
	include("_sideIncubator.php");
	$html = <<<EOHTML
  
<div id="maincontent">
  <div id="midcolumn" style="width:78%">
  		<div class="homeitem3col">
			<h3>News Archive</h3>
			<ul>
				<li>
					Eclipse Foundation: <a href="http://home.businesswire.com/portal/site/google/index.jsp?ndmViewId=news_view&newsId=20061212005142&newsLang=en">
					Eclipse Mylar Introduces Major New Innovation for Developer Productivity</a>
					<span class="dates">(Dec 12, 2006)</span><br>
				</li>
				<li>
					John K. Waters, Application Development Trends: <a href="http://www.adtmag.com/article.aspx?id=19805">
					Too Much Information? Eclipse UI Tool Focuses on Tasks</a>
					<span class="dates">(Dec 11, 2006)</span><br>
				</li>
				<li>
					Paul Krill, InfoWorld: <a href="http://www.infoworld.com/article/06/12/11/HNmylar_1.html">
					Eclipse clears developer clutter - Mylar task manager is readied</a>
					<span class="dates">(Dec 11, 2006)</span><br>
				</li>
				<li>
					Peter Coffee, InfoWorld: <a href="http://www.eweek.com/article2/0%2C1895%2C2070968%2C00.asp">
					Framing the SOA Scene - Task-centered tools and virtual stacks combine to let developers compose a better picture</a>
					<span class="dates">(Dec 11, 2006)</span><br>
				</li>
				<li>
					Antone Gonsalves, InformationWeek: <a href="http://www.informationweek.com/software/showArticle.jhtml?articleID=196603112&subSection=Open+Source">
					Eclipse Challenges Visual Studio.Net In Europe, Other Regions </a>
					<span class="dates">(Dec 11, 2006)</span><br>
				</li>
				<li>
					Daniel Spiewak, EclipseZone: <a href="http://www.eclipsezone.com/eclipse/forums/t85560.rhtml">
					Task Based Development</a>
					<span class="dates">(Dec 4, 2006)</span><br>
				</li>
				<li>
					Edward J. Correia, SD Times: <a href="http://www.sdtimes.com/article/special-20061015-01.html">
					What's Cooking at Eclipse</a>
					<span class="dates">(Oct 15, 2006)</span>
				</li>
				<li>
					Rob Thornton, InfoQ: <a href="http://www.infoq.com/news/mylar">
					Changing the way you work with Mylar</a>
					<span class="dates">(Oct 12, 2006)</span>
				</li> 
				<li>
					R.J. Lorimer, EclipseZone: <a href="http://www.eclipsezone.com/eclipse/forums/t75928.html">Mylar: the Forgotten Feature?</a>
					<span class="dates">(Jul 9, 2006)</span>
				</li>
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>Blogs Archive</h3>		
			<ul>				
				<li>
					Eugene Kuleshov: <a href="http://jroller.com/page/eu?entry=big_secret_of_mylar_s">
					Big secret of Mylar's easy to use dialogs. / Eclipse</a>
					<span class="dates">(Dec 13, 2006)</span>
				</li> 
				<li>
					Jimisola Laursen: <a href="http://www.jimisola.com/2006/12/12/mylar-10-released/">
					Mylar 1.0 released</a>
					<span class="dates">(Dec 12, 2006)</span>
				</li> 
				<li>
					Gedanken Verloren: <a href="http://jroller.com/page/musk?entry=revisiting_mylar_1_0_0">
					Revisiting Mylar 1.0.0</a>
					<span class="dates">(Dec 12, 2006)</span>
				</li>
				<li>
					James Cooley: <a href="http://james.cooley.ie/2006/12/12/1165943520000.html">
					Mylar 1.0 - efficient multi-tasking for large projects</a>
					<span class="dates">(Dec 12, 2006)</span>
				</li> 			
				<li>
					Brett Cannon: <a href="http://sayspy.blogspot.com/2006/12/mylar-10-released-for-eclipse.htmll">
					Mylar 1.0 released for Eclipse</a>
					<span class="dates">(Dec 12, 2006)</span>
				</li> 			
				<li>
					Mark Watson: <a href="http://mark-watson.blogspot.com/2006/12/eclipse-mylar-automating-context.html">
					Eclipse Mylar: automating context manangement for work tasks</a>
					<span class="dates">(Dec 12, 2006)</span>
				</li> 			
				<li>
					David Peterson: <a href="http://www.oreillynet.com/xml/blog/2006/12/hello_mylar_eclipse_clears_awa.html?CMP=OTC-TY3388567169&ATT=Hello+Mylar+Eclipse+Clears+Away+Clutter+Integrates+Task-Oriented+Approach">
					Hello, Mylar! (Eclipse Clears Away Clutter; Integrates Task-Oriented Approach)</a>
					<span class="dates">(Dec 11, 2006)</span>
				</li> 	
				<li>
					Wayne Beaton: <a href="http://wbeaton.blogspot.com/2006/12/five-reasons-to-love-mylar-part-one.html">
					Five Reasons to Love Mylar: Part One</a>
					<span class="dates">(Dec 7, 2006)</span>
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="http://wbeaton.blogspot.com/2006/12/five-reasons-to-love-mylar-part-two.html">
					Part Two</a>
					<span class="dates">(Dec 8, 2006)</span>
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="http://wbeaton.blogspot.com/2006/12/five-reasons-to-love-mylar-part-three.html">
					Part Three</a>
					<span class="dates">(Dec 11, 2006)</span><br>
				</li> 
				<li>
					Wayne Beaton: <a href="http://wbeaton.blogspot.com/2006/12/mylar-two-weeks-later.html">
					Mylar Two Weeks Later</a>
					<span class="dates">(Dec 6, 2006)</span>
				</li> 
				<li>
					Wayne Beaton: <a href="http://wbeaton.blogspot.com/2006/11/you-must-try-mylar.html">
					You must try Mylar</a>
					<span class="dates">(Nov 23, 2006)</span>
				</li>
				<li>
					Eugene Kuleshov: <a href="http://jroller.com/page/eu?entry=mylar_has_turned_one">
					Mylar has turned One!</a>
					<span class="dates">(Oct 30, 2006)</span>
				</li>	
				<li>
					Litrik: <a href="http://litrik.blogspot.com/2006/10/commit-comment-templates-in-mylar-080.html">
					Commit comment templates in Mylar 0.8.0</a>
					<span class="dates">(Oct 27, 2006)</span>
				</li>	
				<li>
					Blaine Buxton: <a href="http://blog.blainebuxton.com/2006/10/eclipse-mylar.html">
					Eclipse Mylar I'm in love.  This is just too gorgeous.</a>
					<span class="dates">(Oct 11, 2006)</span>
				</li>
				<li>
					(in Russian)<a href="http://www.novemberain.com/blog/?p=1016">
					Mylar: The next level of working with pleasure in Eclipse</a>
					<span class="dates">(Sep 28, 2006)</span>
				</li>
				<li>
					Eugene Kuleshov: <a href="http://jroller.com/page/eu?entry=linking_mylar_with_google_code">
					Link Mylar with Google Code Hosting...</a>
					<span class="dates">(Aug 4, 2006)</span><br>
				</li>
				<li>
					Peter Hendriks: <a href="http://blogs.infosupport.com/peterhe/archive/2006/05/12/6051.aspx">
					Eclipse Mylar: Less is More</a>
					<span class="dates">(May 12, 2006)</span>
				</li>
				<li>
					Eugene Kuleshov: <a href="http://swik.net/Eclipse/Euxx/Mylar's+ultra-fast+release+cycles/c4nm">
					Mylar's ultra-fast release cycles</a>
					<span class="dates">(Apr. 8, 2006)</span>
				</li>

				<li>Eugene Kuleshov: <a href="http://jroller.com/page/eu?entry=jira_support_in_mylar">
				Jira support in Mylar</a>
				<span class="dates">(Feb. 23, 2006)</span></li>
				
				<li>Ryan Markel: <a href="http://blog.platinumsolutions.com/node/15">
				Mylar Technology Project — Eclipse Just Got Easier</a>
				<span class="dates">(Jan. 16, 2006)</span></li>
								
				<li>Haranguing Garden: <a href="http://chambery.subfire.org/wordpress/?p=38">
				Jira support in Mylar</a>
				<span class="dates">(Jan. 11, 2006)</span></li>
								
				<li> Gedanken Verloren: <a href="http://www.jroller.com/page/musk?entry=eclipse_killer_plugin_mylar">
				Eclipse Killer Plugin Mylar</a>
				<span class="dates">(Nov. 14, 2005)</span></li>
				
				<li>Kirill Grouchnikov: <a href="http://weblogs.java.net/blog/kirillcool/archive/2005/11/mylar_a_very_us.html">
				A very useful Eclipse plugin</a>
				<span class="dates">(Nov. 7, 2005)</span></li>
				
				<li>Eugene Kuleshov: <a href="http://jroller.com/page/eu?entry=the_most_addictive_eclipse_plugin">The most addictive Eclipse plugin ever</a>
				<span class="dates">(Nov. 1, 2005)</span></li>
				
				<li>Ed Burnette: <a href="http://www.eclipsezone.com/eclipse/forums/t20933.html">Mylar is the next killer app for Eclipse</a>
				<span class="dates">(July 28, 2005)</span></li>
							
			</ul>
		</div> 				

		<div class="homeitem3col">
			<h3>Publications Archive</h3>
			<ul>
				<li>
		            <a href="http://www-128.ibm.com/developerworks/java/library/j-mylar1/"><img border=0 src="images/icon-webdoc.gif">
		           	Task Focused Programming with Mylar, Part 1: Integrated task management for Eclipse</a> by Mik Kersten (Oct 2006)
	            </li>
	            <li>
		            <a href="http://www-128.ibm.com/developerworks/java/library/j-mylar2/index.html"><img border=0 src="images/icon-webdoc.gif">
		           	Task Focused Programming with Mylar, Part 2: Automated context management for Eclipse</a> by Mik Kersten (Oct 2006)
	            </li>
	            <li>
		            <a href=" http://www.eclipsezone.com/articles/mylar/"><img border=0 src="images/icon-webdoc.gif">
		           	Revolutionize your productivity with Eclipse Mylar</a> by Riyad Kalla (Apr 2006)
	            </li>
	            <li>
		            <a href="publications/2005-05-mylar-creation-review.ppt"><img border=0 src="images/icon-ppt.gif"></a>
		            <a href="publications/2005-04-mylar-proposal.html"><img border=0 src="images/icon-webdoc.gif">
		            Mylar project creation proposal and review</a> (May 2005)
	            </li>
			</ul>
		</div> 

		<div class="homeitem3col">
			<h3>Event Archive</h3>
			<ul>
				<li>
	                <a href="http://www.cs.uoregon.edu/fse-14/prelim-program.html">
	                 Using Task Context to Improve Programmer Productivity</a> by Mik Kersten and Gail Murphy (Nov 7, 10:00am PST)
	            </li>
				<li>
	                <a href="http://www.eclipsecon.org/2006/Sub.do?id=164">
	                Mylar Talk</a> at EclipseCon 2006, March 20-23, Santa Clara, USA
	            </li>
			
				<li>Mylar BoF at <a href="http://www.eclipsecon.org">EclipseCon 2006</a>, Grand Ballroom, Santa Clara Convention Center, Santa Clara, USA</li>, <span class="dates">(Mar. 21, 2006)</span>

				<li>First public release, 0.4, <span class="dates">(Oct. 28, 2005)</span></li>
				
				<li>Eclipse.org project created, <span class="dates">(June 13, 2005)</span></li>
				
				<li>First user study preview release, <span class="dates">(July 11, 2005)</span></li>
			</ul>
		</div> 

		<div class="homeitem3col">
			<h3>UI Archive</h3>
			<ul>
				<li>
                    <a href="http://eclipse.org/mylar/doc/demo/mylar-demo-04.html"><img border=0 src="images/icon-flash.gif">&nbsp;
					Mylar 0.4 overview flash video</a> (3.5 min, 8.7 MB)
                </li>
				<li>
                    <a href="http://eclipse.org/mylar/doc/demo/mylar-demo-04-reports.html"><img border=0 src="images/icon-flash.gif">&nbsp;
                    Mylar 0.4 Bugzilla integration flash video</a> (v0.4, 3.5 min, 6 MB)
                </li>
				<li>
                    <a href="http://eclipse.org/mylar/doc/demo/mylar-demo-03-search.html"><img border=0 src="images/icon-flash.gif">&nbsp;
                    Mylar 0.3 Active views video</a> (v0.3, 2 min, 3 MB)
                </li>
			</ul>
		</div>
	</div>
</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
