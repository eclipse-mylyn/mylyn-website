<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	# 
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Mylyn Download Archives";
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
	
	include("_sideCommon.php");
	include("_sideFeedback.php");
	include("_sideMylarIs.php");
	include("_sideSubscribe.php");
		
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">  
		<p>Go back to the <a href="/mylyn/downloads/">Mylyn Downloads Page</a>.</p> See a <a href="http://wiki.eclipse.org/Mylyn/FAQ#What_versions_of_Eclipse_are_supported.3F">listing of supported Eclipse version</a> and <a>included sub-projects</a>.
		
		<p>All downloads are provided under the terms and conditions of the <a href="/legal/epl/notice.php">Eclipse Foundation
		Software User Agreement</a> unless otherwise specified.</p>
		
		<div class="homeitem3col">
			<h3>3.12.0 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.12.0/v20140609-1648/mylyn-3.12.0.v20140609-1648.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.12.0/v20140609-1648</b>&nbsp;&nbsp;(Eclipse 3.8, 4.3 and 4.4)
	        	</li>
			</ul>
		</div>
		
		<div class="homeitem3col">
			<h3>3.11.0 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.11.0/v20140314-2044/mylyn-3.11.0.v20140314-2044.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.11.0/v20140314-2044</b>&nbsp;&nbsp;(Eclipse 3.8, 4.3 and 4.4M2)
	        	</li>
			</ul>
		</div>

		<div class="homeitem3col">
			<h3>3.10.0 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.10.0/v20131025-2037/mylyn-3.10.0.v20131025-2037.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.10.0/v20131025-2037</b>&nbsp;&nbsp;(Eclipse 3.8, 4.3 and 4.4M2)
	        	</li>
			</ul>
		</div>

		<div class="homeitem3col">
			<h3>3.9.2 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.9.2/v20140211-0100/mylyn-3.9.2.v20140211-0100.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.9.2/v20140211-0100</b>&nbsp;&nbsp;(Eclipse 3.8, 4.2 and 4.3)
	        	</li>
			</ul>
		</div>

		<div class="homeitem3col">
			<h3>3.9.1 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.9.1/v20130917-0100/mylyn-3.9.1.v20130917-0100.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.9.1/v20130917-0100</b>&nbsp;&nbsp;(Eclipse 3.8, 4.2 and 4.3)
	        	</li>
			</ul>
		</div>

		<div class="homeitem3col">
			<h3>3.9.0 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.9.0/v20130612-0100/mylyn-3.9.0.v20130612-0100.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.9.0/v20130612-0100</b>&nbsp;&nbsp;(Eclipse 3.8, 4.2 and 4.3)
	        	</li>
			</ul>
		</div>

		<div class="homeitem3col">
			<h3>3.8.4 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.8.4/v20130429-0100/mylyn-3.8.4.v20130429-0100.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.8.4/v20130429-0100</b>&nbsp;&nbsp;(Eclipse 3.7, 3.8 and 4.2)
	        	</li>
			</ul>
		</div>

		<div class="homeitem3col">
			<h3>3.8.3 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.8.3/v20130107-0100/mylyn-3.8.3.v20130107-0100.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.8.3/v20130107-0100</b>&nbsp;&nbsp;(Eclipse 3.7, 3.8 and 4.2)
	        	</li>
			</ul>
		</div>

		<div class="homeitem3col">
			<h3>3.8.2 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.8.2/v20120916-1200/mylyn-3.8.2.v20120916-1200.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.8.2/v20120916-1200</b>&nbsp;&nbsp;(Eclipse 3.7, 3.8 and 4.2)
	        	</li>
			</ul>
		</div>

		<div class="homeitem3col">
			<h3>3.8.1 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.8.1/v20120725-0100/mylyn-3.8.1.v20120725-0100.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.8.1/v20120725-0100</b>&nbsp;&nbsp;(Eclipse 3.7, 3.8 and 4.2)
	        	</li>
			</ul>
		</div>

		<div class="homeitem3col">
			<h3>3.8.0 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.8.0/v20120612-0600/mylyn-3.8.0.v20120612-0600.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.8.0/v20120612-0600</b>&nbsp;&nbsp;(Eclipse 3.7, 3.8 and 4.2)
	        	</li>
			</ul>
		</div>

		<div class="homeitem3col">
			<h3>3.7.1 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.7.1/v20120425-0100/mylyn-3.7.1.v20120425-0100.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.7.1/v20120425-0100</b>&nbsp;&nbsp;(Eclipse 3.6 and 3.7)
	        	</li>
			</ul>
		</div>

		<div class="homeitem3col">
			<h3>3.7.0 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.7.0/v20120319-0200/mylyn-3.7.0.v20120319-0200.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.7.0/v20120319-0200</b>&nbsp;&nbsp;(Eclipse 3.6 and 3.7)
	        	</li>
			</ul>
		</div>

		<div class="homeitem3col">
			<h3>3.6.5 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.6.5/v20120215-0100/mylyn-3.6.5.v20120215-0100.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.6.5/v20120215-0100</b>&nbsp;&nbsp;(Eclipse 3.5, 3.6 and 3.7)
	        	</li>
			</ul>
		</div>

		<div class="homeitem3col">
			<h3>3.6.4 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.6.4/v20111118-0100/mylyn-3.6.4.v20111118-0100.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.6.4/v20111118-0100</b>&nbsp;&nbsp;(Eclipse 3.5, 3.6 and 3.7)
	        	</li>
			</ul>
		</div>

		<div class="homeitem3col">
			<h3>3.6.3 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.6.3/v20111026-0100/mylyn-3.6.3.v20111026-0100.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.6.3/v20111026-0100</b>&nbsp;&nbsp;(Eclipse 3.5, 3.6 and 3.7)
	        	</li>
			</ul>	
		</div>

		<div class="homeitem3col">
			<h3>3.6.2 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.6.2/v20110908-0706/mylyn-3.6.2.v20110908-0706.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.6.2/v20110908-0706</b>&nbsp;&nbsp;(Eclipse 3.5, 3.6 and 3.7)
	        	</li>
			</ul>	
		</div>

		<div class="homeitem3col">
			<h3>3.6.1 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.6.1/v20110728-0200/mylyn-3.6.1.v20110728-0200.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.6.1/v20110728-0200</b>&nbsp;&nbsp;(Eclipse 3.5, 3.6 and 3.7)
	        	</li>
			</ul>	
		</div>

		<div class="homeitem3col">
			<h3>3.6.0 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.6.0/v20110608-1400/mylyn-3.6.0.v20110608-1400.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.6.0/v20110608-1400</b>&nbsp;&nbsp;(Eclipse 3.5, 3.6 and 3.7)
	        	</li>
			</ul>	
		</div>

		<div class="homeitem3col">
			<h3>3.5.1 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.5.1/v20110422-0200/mylyn-3.5.1.v20110422-0200.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.5.1/v20110422-0200</b>&nbsp;&nbsp;(Eclipse 3.5, 3.6 and 3.7M6)
	        	</li>
			</ul>	
		</div>

		<div class="homeitem3col">
			<h3>3.5.0 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.5.0/v20110316-0100/mylyn-3.5.0.v20110316-0100.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.5.0/v20110316-0100</b>&nbsp;&nbsp;(Eclipse 3.5, 3.6 and 3.7M6)
	        	</li>
			</ul>	
		</div>

		<div class="homeitem3col">
			<h3>3.4.3 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.4.3/v20110204-0608/mylyn-3.4.3.v20110204-0608-e3.4.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.4.3/v20110204-0608/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4, 3.5 and 3.6)
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.4.3/v20110204-0608/mylyn-3.4.3.v20110204-0608-incubator.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.4.3/v20110204-0608/incubator</b>&nbsp;&nbsp;(Eclipse 3.4, 3.5 and 3.6)
	        		<br>
					<font size=-1>Web Templates Connector, XPlanner Connector, UI Usage Reporting, WikiText Sandbox and UI Experiments</font>
	        	</li>
			</ul>	
		</div>

		<div class="homeitem3col">
			<h3>3.4.2 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.4.2/v20100916-0100/mylyn-3.4.2.v20100916-0100-e3.4.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.4.2/v20100916-0100/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4, 3.5 and 3.6)
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.4.2/v20100916-0100/mylyn-3.4.2.v20100916-0100-incubator.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.4.2/v20100916-0100/incubator</b>&nbsp;&nbsp;(Eclipse 3.4, 3.5 and 3.6)
	        		<br>
					<font size=-1>Web Templates Connector, XPlanner Connector, UI Usage Reporting, WikiText Sandbox and UI Experiments</font>
	        	</li>
			</ul>	
		</div>

		<div class="homeitem3col">
			<h3>3.4.1 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.4.1/v20100804-0100/mylyn-3.4.1.v20100804-0100-e3.4.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.4.1/v20100804-0100/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4, 3.5 and 3.6)
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.4.1/v20100804-0100/mylyn-3.4.1.v20100804-0100-incubator.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.4.1/v20100804-0100/incubator</b>&nbsp;&nbsp;(Eclipse 3.4, 3.5 and 3.6)
	        		<br>
					<font size=-1>Web Templates Connector, XPlanner Connector, UI Usage Reporting, WikiText Sandbox and UI Experiments</font>
	        	</li>
			</ul>	
		</div>

		<div class="homeitem3col">
			<h3>3.4.0 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.4.0/v20100608-0100/mylyn-3.4.0.v20100608-0100-e3.4.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.4.0/v20100608-0100/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4, 3.5 and 3.6)
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.4.0/v20100608-0100/mylyn-3.4.0.v20100608-0100-incubator.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.4.0/v20100608-0100/incubator</b>&nbsp;&nbsp;(Eclipse 3.4, 3.5 and 3.6)
	        		<br>
					<font size=-1>Web Templates Connector, XPlanner Connector, UI Usage Reporting, WikiText Sandbox and UI Experiments</font>
	        	</li>
			</ul>	
		</div>

		<div class="homeitem3col">
			<h3>3.3.3 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.3.3/v20100330-0100/mylyn-3.3.3.v20100330-0100-e3.4.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.3.3/v20100330-0100/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4, 3.5 and 3.6M5)
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.3.3/v20100330-0100/mylyn-3.3.3.v20100330-0100-extras.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.3.3/v20100330-0100/extras</b>&nbsp;&nbsp;(Eclipse 3.4, 3.5 and 3.6M5)
	        		<br>
					<font size=-1>Trac and JIRA Connector</font>
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.3.3/v20100330-0100/mylyn-3.3.3.v20100330-0100-incubator.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.3.3/v20100330-0100/incubator</b>&nbsp;&nbsp;(Eclipse 3.4, 3.5 and 3.6M5)
	        		<br>
					<font size=-1>Web Templates Connector, XPlanner Connector, UI Usage Reporting and UI Experiments</font>
	        	</li>
			</ul>	
		</div>

		<div class="homeitem3col">
			<h3>3.3.2 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.3.2/v20100222-0100/mylyn-3.3.2.v20100222-0100-e3.4.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.3.2/v20100222-0100/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4, 3.5 and 3.6M5)
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.3.2/v20100222-0100/mylyn-3.3.2.v20100222-0100-extras.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.3.2/v20100222-0100/extras</b>&nbsp;&nbsp;(Eclipse 3.4, 3.5 and 3.6M5)
	        		<br>
					<font size=-1>Trac and JIRA Connector</font>
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.3.2/v20100222-0100/mylyn-3.3.2.v20100222-0100-incubator.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.3.2/v20100222-0100/incubator</b>&nbsp;&nbsp;(Eclipse 3.4, 3.5 and 3.6M5)
	        		<br>
					<font size=-1>Web Templates Connector, XPlanner Connector, UI Usage Reporting and UI Experiments</font>
	        	</li>
			</ul>	
		</div>
		
		<div class="homeitem3col">
			<h3>3.3.1 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.3.1/v20091215-0000/mylyn-3.3.1.v20091215-0000-e3.4.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.3.1/v20091215-0000/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4, 3.5 and 3.6M4)
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.3.1/v20091215-0000/mylyn-3.3.1.v20091215-0000-extras.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.3.1/v20091215-0000/extras</b>&nbsp;&nbsp;(Eclipse 3.4, 3.5 and 3.6M4)
	        		<br>
					<font size=-1>Trac and JIRA Connector</font>
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.3.1/v20091215-0000/mylyn-3.3.1.v20091215-0000-incubator.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.3.1/v20091215-0000/incubator</b>&nbsp;&nbsp;(Eclipse 3.4, 3.5 and 3.6M4)
	        		<br>
					<font size=-1>Web Templates Connector, XPlanner Connector, UI Usage Reporting and UI Experiments</font>
	        	</li>
			</ul>	
		</div>

		<div class="homeitem3col">
			<h3>3.3.0 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.3.0/v20091015-0500/mylyn-3.3.0.v20091015-0500-e3.4.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.3.0/v20091015-0500/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4, 3.5 and 3.6M2)
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.3.0/v20091015-0500/mylyn-3.3.0.v20091015-0500-extras.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.3.0/v20091015-0500/extras</b>&nbsp;&nbsp;(Eclipse 3.4, 3.5 and 3.6M2)
	        		<br>
					<font size=-1>Trac and JIRA Connector</font>
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.3.0/v20091015-0500/mylyn-3.3.0.v20091015-0500-incubator.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.3.0/v20091015-0500/incubator</b>&nbsp;&nbsp;(Eclipse 3.4, 3.5 and 3.6M2)
	        		<br>
					<font size=-1>Web Templates Connector, XPlanner Connector, UI Usage Reporting and UI Experiments</font>
	        	</li>
			</ul>	
		</div>

		<div class="homeitem3col">
			<h3>3.2.3 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.2.3/v20100217-0100/mylyn-3.2.3.v20100217-0100-e3.4.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.2.3/v20100217-0100/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4 and 3.5)
	        	</li>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.2.3/v20100217-0100/mylyn-3.2.3.v20100217-0100-e3.3.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.2.3/v20100217-0100/e3.3</b>&nbsp;&nbsp;(Eclipse 3.3)
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.2.3/v20100217-0100/mylyn-3.2.3.v20100217-0100-extras.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.2.3/v20100217-0100/extras</b>&nbsp;&nbsp;(Eclipse 3.3, 3.4 and 3.5)
	        		<br>
					<font size=-1>Trac and JIRA Connector</font>
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.2.3/v20100217-0100/mylyn-3.2.3.v20100217-0100-incubator.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.2.3/v20100217-0100/incubator</b>&nbsp;&nbsp;(Eclipse 3.3, 3.4 and 3.5)
	        		<br>
					<font size=-1>Web Templates Connector, XPlanner Connector, UI Usage Reporting and UI Experiments</font>
	        	</li>
			</ul>	
		</div>

		<div class="homeitem3col">
			<h3>3.2.2 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.2.2/v20090912-0400/mylyn-3.2.2.v20090912-0400-e3.4.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.2.2/v20090912-0400/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4 and 3.5)
	        	</li>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.2.2/v20090912-0400/mylyn-3.2.2.v20090912-0400-e3.3.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.2.2/v20090912-0400/e3.3</b>&nbsp;&nbsp;(Eclipse 3.3)
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.2.2/v20090912-0400/mylyn-3.2.2.v20090912-0400-extras.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.2.2/v20090912-0400/extras</b>&nbsp;&nbsp;(Eclipse 3.3, 3.4 and 3.5)
	        		<br>
					<font size=-1>Trac and JIRA Connector</font>
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.2.2/v20090912-0400/mylyn-3.2.2.v20090912-0400-incubator.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.2.2/v20090912-0400/incubator</b>&nbsp;&nbsp;(Eclipse 3.3, 3.4 and 3.5)
	        		<br>
					<font size=-1>Web Templates Connector, XPlanner Connector, UI Usage Reporting and UI Experiments</font>
	        	</li>
			</ul>	
		</div>

		<div class="homeitem3col">
			<h3>3.2.1 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.2.1/v20090722-0200/mylyn-3.2.1.v20090722-0200-e3.4.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.2.1/v20090722-0200/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4 and 3.5)
	        	</li>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.2.1/v20090722-0200/mylyn-3.2.1.v20090722-0200-e3.3.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.2.1/v20090722-0200/e3.3</b>&nbsp;&nbsp;(Eclipse 3.3)
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.2.1/v20090722-0200/mylyn-3.2.1.v20090722-0200-extras.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.2.1/v20090722-0200/extras</b>&nbsp;&nbsp;(Eclipse 3.3, 3.4 and 3.5)
	        		<br>
					<font size=-1>Trac and JIRA Connector</font>
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.2.1/v20090722-0200/mylyn-3.2.1.v20090722-0200-incubator.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.2.1/v20090722-0200/incubator</b>&nbsp;&nbsp;(Eclipse 3.3, 3.4 and 3.5)
	        		<br>
					<font size=-1>Web Templates Connector, XPlanner Connector, UI Usage Reporting and UI Experiments</font>
	        	</li>
			</ul>	
		</div>

		<div class="homeitem3col">
			<h3>3.2.0 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.2.0/v20090617-0100/mylyn-3.2.0.v20090617-0100-e3.4.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.2.0/v20090617-0100/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4 and 3.5)
	        	</li>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.2.0/v20090617-0100/mylyn-3.2.0.v20090617-0100-e3.3.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.2.0/v20090617-0100/e3.3</b>&nbsp;&nbsp;(Eclipse 3.3)
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.2.0/v20090617-0100/mylyn-3.2.0.v20090617-0100-extras.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.2.0/v20090617-0100/extras</b>&nbsp;&nbsp;(Eclipse 3.3, 3.4 and 3.5)
	        		<br>
					<font size=-1>Trac and JIRA Connector</font>
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.2.0/v20090617-0100/mylyn-3.2.0.v20090617-0100-incubator.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.2.0/v20090617-0100/incubator</b>&nbsp;&nbsp;(Eclipse 3.3, 3.4 and 3.5)
	        		<br>
					<font size=-1>Web Templates Connector, XPlanner Connector, UI Usage Reporting and UI Experiments</font>
	        	</li>
			</ul>	
		</div>
		
		<div class="homeitem3col">
			<h3>3.1.1 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.1.1/v20090411-0400/mylyn-3.1.1.v20090411-0400-e3.4.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.1.1/v20090411-0400/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4)
	        	</li>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.1.1/v20090411-0400/mylyn-3.1.1.v20090411-0400-e3.3.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.1.1/v20090411-0400/e3.3</b>&nbsp;&nbsp;(Eclipse 3.3)
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.1.1/v20090411-0400/mylyn-3.1.1.v20090411-0400-extras.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.1.1/v20090411-0400/extras</b>&nbsp;&nbsp;(Eclipse 3.4 and 3.3)
	        		<br>
					<font size=-1>Trac and JIRA Connector</font>
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.1.1/v20090411-0400/mylyn-3.1.1.v20090411-0400-incubator.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.1.1/v20090411-0400/incubator</b>&nbsp;&nbsp;(Eclipse 3.4 and 3.3)
	        		<br>
					<font size=-1>Web Templates Connector, XPlanner Connector, UI Usage Reporting and UI Experiments</font>
	        	</li>
			</ul>	
		</div>
		
		<div class="homeitem3col">
			<h3>3.1.0 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.1.0/v20090315-1500/mylyn-3.1.0.v20090315-1500-e3.4.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.1.0/v20090315-1500/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4)
	        	</li>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.1.0/v20090315-1500/mylyn-3.1.0.v20090315-1500-e3.3.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.1.0/v20090315-1500/e3.3</b>&nbsp;&nbsp;(Eclipse 3.3)
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.1.0/v20090315-1500/mylyn-3.1.0.v20090315-1500-extras.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.1.0/v20090315-1500/extras</b>&nbsp;&nbsp;(Eclipse 3.4 and 3.3)
	        		<br>
					<font size=-1>Trac and JIRA Connector</font>
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.1.0/v20090315-1500/mylyn-3.1.0.v20090315-1500-incubator.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.1.0/v20090315-1500/incubator</b>&nbsp;&nbsp;(Eclipse 3.4 and 3.3)
	        		<br>
					<font size=-1>Web Templates Connector, XPlanner Connector, UI Usage Reporting and UI Experiments</font>
	        	</li>
			</ul>	
		</div>

		<div class="homeitem3col">
			<h3>3.0.5 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.0.5/v20090218-1800/mylyn-3.0.5.v20090218-1800-e3.4.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.0.5/v20090218-1800/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4)
	        	</li>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.0.5/v20090218-1800/mylyn-3.0.5.v20090218-1800-e3.3.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.0.5/v20090218-1800/e3.3</b>&nbsp;&nbsp;(Eclipse 3.3)
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.0.5/v20090218-1800/mylyn-3.0.5.v20090218-1800-extras.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.0.5/v20090218-1800/extras</b>&nbsp;&nbsp;(Eclipse 3.4 and 3.3)
	        		<br>
					<font size=-1>Trac and JIRA Connector</font>
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.0.5/v20090218-1800/mylyn-3.0.5.v20090218-1800-incubator.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.0.5/v20090218-1800/incubator</b>&nbsp;&nbsp;(Eclipse 3.4 and 3.3)
	        		<br>
					<font size=-1>Web Templates Connector, XPlanner Connector, UI Usage Reporting and UI Experiments</font>
	        	</li>
			</ul>	
		</div>

		<div class="homeitem3col">
			<h3>3.0.4 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.0.4/v20090122-1000/mylyn-3.0.4.v20090122-1000-e3.4.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.0.4/v20090122-1000/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4)
	        	</li>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.0.4/v20090122-1000/mylyn-3.0.4.v20090122-1000-e3.3.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.0.4/v20090122-1000/e3.3</b>&nbsp;&nbsp;(Eclipse 3.3)
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.0.4/v20090122-1000/mylyn-3.0.4.v20090122-1000-extras.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.0.4/v20090122-1000/extras</b>&nbsp;&nbsp;(Eclipse 3.4 and 3.3)
	        		<br>
					<font size=-1>Trac and JIRA Connector</font>
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.0.4/v20090122-1000/mylyn-3.0.4.v20090122-1000-incubator.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.0.4/v20090122-1000/incubator</b>&nbsp;&nbsp;(Eclipse 3.4 and 3.3)
	        		<br>
					<font size=-1>Web Templates Connector, XPlanner Connector, UI Usage Reporting and UI Experiments</font>
	        	</li>
			</ul>	
		</div>

		<div class="homeitem3col">
			<h3>3.0.3 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.0.3/v20081015-1500/mylyn-3.0.3.v20081015-1500-e3.4.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.0.3/v20081015-1500/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4)
	        	</li>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.0.3/v20081015-1500/mylyn-3.0.3.v20081015-1500-e3.3.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.0.3/v20081015-1500/e3.3</b>&nbsp;&nbsp;(Eclipse 3.3)
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.0.3/v20081015-1500/mylyn-3.0.3.v20081015-1500-extras.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.0.3/v20081015-1500/extras</b>&nbsp;&nbsp;(Eclipse 3.4 and 3.3)
	        		<br>
					<font size=-1>Trac and JIRA Connector</font>
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.0.3/v20081015-1500/mylyn-3.0.3.v20081015-1500-incubator.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.0.3/v20081015-1500/incubator</b>&nbsp;&nbsp;(Eclipse 3.4 and 3.3)
	        		<br>
					<font size=-1>Web Templates Connector, XPlanner Connector, UI Usage Reporting and UI Experiments</font>
	        	</li>
			</ul>	
		</div>

		<div class="homeitem3col">
			<h3>3.0.2 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.0.2/v20080918-1100/mylyn-3.0.2.v20080918-1100-e3.4.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.0.2/v20080918-1100/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4)
	        	</li>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.0.2/v20080918-1100/mylyn-3.0.2.v20080918-1100-e3.3.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.0.2/v20080918-1100/e3.3</b>&nbsp;&nbsp;(Eclipse 3.3)
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.0.2/v20080918-1100/mylyn-3.0.2.v20080918-1100-extras.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.0.2/v20080918-1100/extras</b>&nbsp;&nbsp;(Eclipse 3.4 and 3.3)
	        		<br>
					<font size=-1>Trac and JIRA Connector</font>
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.0.2/v20080918-1100/mylyn-3.0.2.v20080918-1100-incubator.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.0.2/v20080918-1100/incubator</b>&nbsp;&nbsp;(Eclipse 3.4 and 3.3)
	        		<br>
					<font size=-1>Web Templates Connector, XPlanner Connector, UI Usage Reporting and UI Experiments</font>
	        	</li>
			</ul>	
		</div>

		<div class="homeitem3col">
			<h3>3.0.1 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.0.1/v20080721-2100/mylyn-3.0.1.v20080721-2100-e3.4.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.0.1/v20080721-2100/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4)
	        	</li>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.0.1/v20080721-2100/mylyn-3.0.1.v20080721-2100-e3.3.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.0.1/v20080721-2100/e3.3</b>&nbsp;&nbsp;(Eclipse 3.3)
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.0.1/v20080721-2100/mylyn-3.0.1.v20080721-2100-extras.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.0.1/v20080721-2100/extras</b>&nbsp;&nbsp;(Eclipse 3.4 and 3.3)
	        		<br>
					<font size=-1>Trac and JIRA Connector</font>
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.0.1/v20080721-2100/mylyn-3.0.1.v20080721-2100-incubator.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.0.1/v20080721-2100/incubator</b>&nbsp;&nbsp;(Eclipse 3.4 and 3.3)
	        		<br>
					<font size=-1>Web Templates Connector, XPlanner Connector, UI Usage Reporting and UI Experiments</font>
	        	</li>
			</ul>	
		</div>

		<div class="homeitem3col">
			<h3>3.0.0 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.0.0/v20080619-1900/mylyn-3.0.0.v20080619-1900-e3.4.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.0.0/v20080619-1900/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4)
	        	</li>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.0.0/v20080619-1900/mylyn-3.0.0.v20080619-1900-e3.3.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.0.0/v20080619-1900/e3.3</b>&nbsp;&nbsp;(Eclipse 3.3)
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.0.0/v20080619-1900/mylyn-3.0.0.v20080619-1900-extras.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.0.0/v20080619-1900/extras</b>&nbsp;&nbsp;(Eclipse 3.4 and 3.3)
	        		<br>
					<font size=-1>Trac and JIRA Connector</font>
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.0.0/v20080619-1900/mylyn-3.0.0.v20080619-1900-incubator.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/3.0.0/v20080619-1900/incubator</b>&nbsp;&nbsp;(Eclipse 3.4 and 3.3)
	        		<br>
					<font size=-1>Web Templates Connector, XPlanner Connector, UI Usage Reporting and UI Experiments</font>
	        	</li>
			</ul>	
		</div>

		<div class="homeitem3col">
			<h3>2.3.2 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/2.3.2/v20080402-2100/e3.4/mylyn-2.3.2.v20080402-2100-e3.4.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/2.3.2/v20080402-2100/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4M6)
	        	</li>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/2.3.2/v20080402-2100/e3.3/mylyn-2.3.2.v20080402-2100-e3.3.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/2.3.2/v20080402-2100/e3.3</b>&nbsp;&nbsp;(Eclipse 3.3)
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/2.3.2/v20080402-2100/extras/mylyn-2.3.2.v20080402-2100-extras.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/2.3.2/v20080402-2100/extras</b>&nbsp;&nbsp;(Eclipse 3.4M6 and 3.3)
	        		<br>
					<font size=-1>Incubation components and connectors for JIRA, XPlanner and Generic Issue Trackers</font>
	        	</li>
			</ul>	
		</div>

		<div class="homeitem3col">
			<h3>2.3.1 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/2.3.1/v20080312-1300/e3.4/mylyn-2.3.1.v20080312-1300-e3.4.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/2.3.1/v20080312-1300/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4M5)
	        	</li>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/2.3.1/v20080312-1300/e3.3/mylyn-2.3.1.v20080312-1300-e3.3.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/2.3.1/v20080312-1300/e3.3</b>&nbsp;&nbsp;(Eclipse 3.3)
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/2.3.1/v20080312-1300/extras/mylyn-2.3.1.v20080312-1300-extras.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/2.3.1/v20080312-1300/extras</b>&nbsp;&nbsp;(Eclipse 3.4M5 and 3.3)
	        		<br>
					<font size=-1>Incubation components and connectors for JIRA, XPlanner and Generic Issue Trackers</font>
	        	</li>
			</ul>	
		</div>

		<div class="homeitem3col">
			<h3>2.3.0 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/2.3.0/mylyn-2.3.0-e3.4.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/2.3.0/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4M5)
	        	</li>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/2.3.0/mylyn-2.3.0-e3.3.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/2.3.0/e3.3</b>&nbsp;&nbsp;(Eclipse 3.3)
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/2.3.0/mylyn-2.3.0-extras.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/2.3.0/extras</b>&nbsp;&nbsp;(Eclipse 3.4M5 and 3.3)
	        		<br>
					<font size=-1>Incubation components and connectors for JIRA, XPlanner and Generic Issue Trackers</font>
	        	</li>
			</ul>	
		</div>

		<div class="homeitem3col">
			<h3>2.2 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/2.2.0/mylyn-2.2.0-e3.4.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/2.2.0/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4M5)
	        	</li>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/2.2.0/mylyn-2.2.0-e3.3.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/2.2.0/e3.3</b>&nbsp;&nbsp;(Eclipse 3.3)
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/2.2.0/mylyn-2.2.0-extras.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/2.2.0/extras</b>&nbsp;&nbsp;(Eclipse 3.4M5 and 3.3)
	        		<br>
					<font size=-1>Incubation components and connectors for JIRA, XPlanner and Generic Issue Trackers</font>
	        	</li>
			</ul>	
		</div>
		
		<div class="homeitem3col">
			<h3>2.1 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Mylyn_User_Guide#Installation"><img border=0 src="/mylyn/images/icon-help.gif"></a></h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/2.1.0/mylyn-2.1-e3.4.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/2.1.0/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4M2)
	        	</li>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/2.1.0/mylyn-2.1-e3.3.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/2.1.0/e3.3</b>&nbsp;&nbsp;(Eclipse 3.3)
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/2.1.0/mylyn-2.1-extras.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>archive.eclipse.org/mylyn/drops/2.1.0/extras</b>&nbsp;&nbsp;(Eclipse 3.4M2 and 3.3)
	        		<br>
					<font size=-1>Incubation components and connectors for JIRA, XPlanner and Generic Issue Trackers</font>
	        	</li>
			</ul>	
		</div>	
		
		<div class="homeitem3col"> 
			<h3>2.1 Milestones</h3> 
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/2.1M1/mylyn-2.1M1-e3.4.zip">
						<img border=0 src="/mylyn/images/icon-save.gif"></a>
					&nbsp;&nbsp;2.1M1: <b>archive.eclipse.org/mylyn/drops/2.1M1/e3.4</b>&nbsp;&nbsp;(Eclipse 3.4M1 and 3.3)
	        	</li>
				<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/2.1M1/mylyn-2.1M1-e3.4.zip">
						<img border=0 src="/mylyn/images/icon-save.gif"></a>
						&nbsp;&nbsp;2.1M1: <b>archive.eclipse.org/mylyn/drops/2.1M1/extras</b>&nbsp;&nbsp;(Eclipse 3.4M1 and 3.3)
	        		<br>
					<font size=-1>JIRA Connector, Generic Issue Tracker Connector, UI Usage Reporting</font>
	        	</li>
			</ul>	
		</div>
		
		<div class="homeitem3col"> 
			<h3>2.0 Release (supports Eclipse 3.2)</h3> 
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/2.0.0/mylyn-2.0.0-e3.3.zip">
						<img border=0 src="/mylyn/images/icon-save.gif"></a>
					<!--
	                <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/2.0.0/mylyn-src-2.0.0-e3.3.zip">
	                	<img border=0 src="/mylyn/images/icon-source.gif"></a>
	                -->
					&nbsp;&nbsp;2.0.0: <b>archive.eclipse.org/mylyn/drops/2.0.0/e3.3</b>&nbsp;&nbsp;(Eclipse 3.3)
	        	</li>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/2.0.0/mylyn-2.0.0-e3.2.zip">
						<img border=0 src="/mylyn/images/icon-save.gif"></a>
					<!--
	                <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/2.0.0/mylyn-src-2.0.0-e3.2.zip">
	                	<img border=0 src="/mylyn/images/icon-source.gif"></a> 
	                -->
					&nbsp;&nbsp;2.0.0: <b>archive.eclipse.org/mylyn/drops/2.0.0/e3.2</b>&nbsp;&nbsp;(Eclipse 3.2)
	        	</li>
	        	<li> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/2.0.0/mylyn-2.0.0-extras.zip">
						<img border=0 src="/mylyn/images/icon-save.gif"></a>
						&nbsp;&nbsp;2.0.0: <b>archive.eclipse.org/mylyn/drops/2.0.0/extras</b>&nbsp;&nbsp;(Eclipse 3.3 and 3.2) 
					<br>
					<font size=-1>JIRA Connector, Generic Issue Tracker Connector, UI Usage Reporting</font>
					<br><i>JIRA users: the recommended JIRA Connector versions is 2.1, after installing <a href="http://confluence.atlassian.com/display/JIRAEXT/Mylyn#Mylyn-e3.2">update to that version</a>.</i>
	        	</li>
			</ul>	
		</div>
		
        <div class="homeitem3col">
			<h3>2.0 Milestones</h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/2.0M3/mylar-site-2.0M3-e3.3.zip">
						<img border=0 src="/mylyn/images/icon-zip.gif"></a>
                    <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/2.0M3/mylar-src-2.0M3-e3.3.zip">
                    	<img border=0 src="/mylyn/images/icon-source.gif"></a>
					2.0M3: <b>archive.eclipse.org/mylyn/drops/2.0M3/e3.3</b> (Eclipse 3.3M6)
	        	<br> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/2.0M3/mylar-site-2.0M3-e3.2.zip">
						<img border=0 src="/mylyn/images/icon-zip.gif"></a>
                    <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/2.0M3/mylar-src-2.0M3-e3.2.zip">
                    	<img border=0 src="/mylyn/images/icon-source.gif"></a>
					2.0M3: <b>archive.eclipse.org/mylyn/drops/2.0M3/e3.2</b> (Eclipse 3.2)
	        	</li>
			</ul>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/2.0M2/mylar-site-2.0M2-e3.3.zip">
						<img border=0 src="/mylyn/images/icon-zip.gif"></a>
                    <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/2.0M2/mylar-src-2.0M2-e3.3.zip">
                    	<img border=0 src="/mylyn/images/icon-source.gif"></a>
					2.0M2: <b>archive.eclipse.org/mylyn/drops/2.0M2/e3.3</b> (Eclipse 3.3M6)
	        	<br> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/2.0M2/mylar-site-2.0M2-e3.2.zip">
						<img border=0 src="/mylyn/images/icon-zip.gif"></a>
                    <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/2.0M2/mylar-src-2.0M2-e3.2.zip">
                    	<img border=0 src="/mylyn/images/icon-source.gif"></a>
					2.0M2: <b>archive.eclipse.org/mylyn/drops/2.0M2/e3.2</b> (Eclipse 3.2)
	        	</li>
			</ul>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/2.0M1/mylar-site-2.0M1-e3.3.zip">
						<img border=0 src="/mylyn/images/icon-zip.gif"></a>
                    <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/2.0M1/mylar-src-2.0M1-e3.3.zip">
                    	<img border=0 src="/mylyn/images/icon-source.gif"></a>
					2.0M1: <b>archive.eclipse.org/mylyn/drops/2.0M1/e3.3</b> (Eclipse 3.3M6)
	        	<br> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/2.0M1/mylar-site-2.0M1-e3.2.zip">
						<img border=0 src="/mylyn/images/icon-zip.gif"></a>
                    <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/2.0M1/mylar-src-2.0M1-e3.2.zip">
                    	<img border=0 src="/mylyn/images/icon-source.gif"></a>
					2.0M1: <b>archive.eclipse.org/mylyn/drops/2.0M1/e3.2</b> (Eclipse 3.2)
	        	</li> 
			</ul>
		</div>
        
        <div class="homeitem3col">
			<h3>1.0 Release</h3>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/1.0.1/mylar-site-1.0.1-e3.3.tgz">
						<img border=0 src="/mylyn/images/icon-zip.gif"></a>
                    <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/1.0.1/mylar-src-1.0.1-e3.3.zip">
                    	<img border=0 src="/mylyn/images/icon-source.gif"></a>
					1.0.1: <b>archive.eclipse.org/mylyn/drops/1.0.1/e3.3</b> (Eclipse 3.3M4)
	        	<br> 
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/1.0.1/mylar-site-1.0.1-e3.2.tgz">
						<img border=0 src="/mylyn/images/icon-zip.gif"></a>
                    <a title="Source Code" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/1.0.1/mylar-src-1.0.1-e3.2.zip">
                    	<img border=0 src="/mylyn/images/icon-source.gif"></a>
					1.0.1: <b>archive.eclipse.org/mylyn/drops/1.0.1/e3.2</b> (Eclipse 3.2)
	        	</li>
			</ul>
			<ul>
				<li>
					<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/0.6/mylar-site-0.6.0-e3.1.tgz">
						<img border=0 src="/mylyn/images/icon-zip.gif"></a>
					0.6.0: <b>archive.eclipse.org/mylyn/drops/0.6/e3.1</b> (Eclipse 3.1) 
	        	</li>
	        </ul>
	        <ul>
				<li>
					Older: <b>archive.eclipse.org/technology/mylar/update-site-archive/0.x.x/e3.x</b>
				</li>
			</ul>
		</div>
		
		
 		<div class="homeitem3col"> 
			<a name="baseline"></a><h3>API Baselines (for contributors)</h3> 
			<ul>
				<li> 
					<a title="Mylyn 3.12.0" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.12.0/mylyn-3.12.0-api.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>Mylyn 3.12.0 API Baseline</b>
				</li>
				<li> 
					<a title="Mylyn 3.11.0" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.11.0/mylyn-3.11.0-api.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>Mylyn 3.11.0 API Baseline</b>
				</li>
				<li> 
					<a title="Mylyn 3.10.0" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.10.0/mylyn-3.10.0-api.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>Mylyn 3.10.0 API Baseline</b>
				</li>
				<li> 
					<a title="Mylyn 3.9.0" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.9.0/mylyn-3.9.0-api.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>Mylyn 3.9.0 API Baseline</b>
				</li>
				<li> 
					<a title="Mylyn 3.8.0" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.8.0/mylyn-3.8.0-api.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>Mylyn 3.8.0 API Baseline</b>
				</li>
				<li> 
					<a title="Mylyn 3.7.0" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.7.0/mylyn-3.7.0-api.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>Mylyn 3.7.0 API Baseline</b>
				</li>
				<li> 
					<a title="Mylyn 3.6.0" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.6.0/mylyn-3.6.0-api.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>Mylyn 3.6.0 API Baseline</b>
				</li>
				<li> 
					<a title="Mylyn 3.5.0" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.5.0/mylyn-3.5.0-api.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>Mylyn 3.5.0 API Baseline</b>
				</li>
				<li> 
					<a title="Mylyn 3.4.0" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.4.0/mylyn-3.4.0-api.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>Mylyn 3.4.0 API Baseline</b>
				</li>
				<li> 
					<a title="Mylyn 3.3.0" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.3.0/mylyn-3.3.0-api.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>Mylyn 3.3.0 API Baseline</b>
				</li>
				<li> 
					<a title="Mylyn 3.2.0" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.2.0/mylyn-3.2.0-api.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>Mylyn 3.2.0 API Baseline</b>
				</li>
				<li> 
					<a title="Mylyn 3.1.0" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.1.0/mylyn-3.1.0-api.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>Mylyn 3.1.0 API Baseline</b>
				</li>
				<li> 
					<a title="Mylyn 3.0.0" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/3.0.0/mylyn-3.0.0-api.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>Mylyn 3.0.0 API Baseline</b>
				</li>
				<li>
					<a title="Mylyn 2.3.2" href="http://www.eclipse.org/downloads/download.php?file=/mylyn/drops/2.3.2/mylyn-2.3.2-api.zip">
						<img border=0 src="/mylyn/images/icon-save.gif">
					</a>
					&nbsp;&nbsp;<b>Mylyn 2.3.2 API Baseline</b>
	        	</li>
	        </ul>
		</div>
 	
	</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
