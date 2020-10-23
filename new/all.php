<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

# Begin: page-specific settings.  Change these.
$pageTitle 		= "Eclipse Mylyn Open Source Project";
$pageKeywords	= "Mylyn, Eclipse, Tasks, Bugs, Focus, UI";
$pageAuthor		= "Mik Kersten";

$versions = array(
				array(
					 "date" => "2020/09/16"
					, "title" => "<a href=\"showVersion.php?version=new-3.25.html\"><img src=\"../images/star.png\"/>Mylyn 3.25.2 released</a>"
					, "description" => "Mylyn 3.25.2 released"
				)
				, array(
					 "date" => "2020/06/03"
					, "title" => "<a href=\"showVersion.php?version=new-3.25.html\">Mylyn 3.25.1 released</a>"
					, "description" => "Mylyn 3.25.1 released"
				)
				, array(
					 "date" => "2019/06/28"
					, "title" => "<a href=\"showVersion.php?version=new-3.25.html\">Mylyn 3.25.0 released</a>"
					, "description" => "Mylyn 3.25 released"
				)
				, array(
					 "date" => "2018/06/27"
					, "title" => "<a href=\"showVersion.php?version=new-3.24.html\">Mylyn 3.24.1 released</a>"
					, "description" => "Mylyn 3.24 released as part of Eclipse Photon"
				)
				, array(
					 "date" => "2017/06/28"
					, "title" => "<a href=\"showVersion.php?version=new-3.23.html\">Mylyn 3.23.1 released</a>"
					, "description" => "Mylyn 3.23 released as part of Eclipse Oxygen"
				)
				,  array(
					 "date" => "2017/04/07"
					, "title" => "<a href=\"showVersion.php?version=new-3.22.html\">Mylyn 3.22 released</a>"
				)
				,  array(
					 "date" => "2016/10/07"
					, "title" => "<a href=\"showVersion.php?version=new-3.21.html\">Mylyn 3.21 released</a>"
				)
				,  array(
					 "date" => "2016/06/22"
					, "title" => "<a href=\"showVersion.php?version=new-3.20.html\">Mylyn 3.20 released</a>"
					, "description" => "Mylyn 3.20 released as part of Eclipse Neon"
				)
				,  array(
					 "date" => "2016/04/15"
					, "title" => "<a href=\"showVersion.php?version=new-3.19.html\">Mylyn 3.19 released</a>"
				)
				,  array(
					 "date" => "2016/01/8"
					, "title" => "<a href=\"showVersion.php?version=new-3.18.html\">Mylyn 3.18 released</a>"
				)
				, array(
					 "date" => "2015/10/2"
					, "title" => "<a href=\"showVersion.php?version=new-3.17.html\">Mylyn 3.17 released</a>"
					, "description" => "Mylyn 3.17 released as part of Eclipse Mars.1"
				)
				, array(
					 "date" => "2015/06/26"
					, "title" => "<a href=\"showVersion.php?version=new-3.16.html\">Mylyn 3.16 released</a>"
					, "description" => "Mylyn 3.16 released as part of Eclipse Mars"
				)
				, array(
					 "date" => "2015/04/10"
					, "title" => "<a href=\"showVersion.php?version=new-3.15.html\">Mylyn 3.15 released</a>"
				)
				, array(
					 "date" => "2015/01/9"
					, "title" => "<a href=\"showVersion.php?version=new-3.14.html\">Mylyn 3.14 released</a>"
				)
				, array(
					 "date" => "2014/09/26"
					, "title" => "<a href=\"showVersion.php?version=new-3.13.html\">Mylyn 3.13 released</a>"
					, "description" => "Mylyn 3.13 released as part of Eclipse Luna SR1"
				)
				, array(
					 "date" => "2014/06/25"
					, "title" => "<a href=\"showVersion.php?version=new-3.12.html\">Mylyn 3.12 released</a>"
					, "description" => "Mylyn 3.12 released as part of Eclipse Luna"
				)
				, array(
					 "date" => "2014/03/26"
					, "title" => "<a href=\"showVersion.php?version=new-3.11.html\">Mylyn 3.11 released</a>"
				)
				, array(
					 "date" => "2013/11/06"
					, "title" => "<a href=\"showVersion.php?version=new-3.10.html\">Mylyn 3.10 released</a>"
				)
				, array(
					 "date" => "2013/06/26"
					, "title" => "<a href=\"showVersion.php?version=new-3.9.html\">Mylyn 3.9 released</a>"
					, "description" => "Mylyn 3.9 released as part of Eclipse Kepler"
				)
				, array(
					 "date" => "2012/06/27"
					, "title" => "<a href=\"showVersion.php?version=new-3.8.html\">Mylyn 3.8 released</a>"
					, "description" => "Mylyn 3.8 released as part of Eclipse Juno"
				)
				, array(
					 "date" => "2011/06/22"
					, "title" => "<a href=\"showVersion.php?version=new-3.6.html\">Mylyn 3.6 released</a>"
					, "description" => "Mylyn 3.6 released as part of Eclipse Indigo"
				)
				, array(
					 "date" => "2011/03/16"
					, "title" => "<a href=\"showVersion.php?version=new-3.5.html\">Mylyn 3.5 released</a>"
				)
				, array(
					 "date" => "2010/06/23"
					, "title" => "<a href=\"showVersion.php?version=new-3.4.html\">Mylyn 3.4 released</a>"
					, "description" => "Mylyn 3.4 released as part of Eclipse Helios"
				)
				, array(
					 "date" => "2009/10/26"
					, "title" => "<a href=\"showVersion.php?version=new-3.3.html\">Mylyn 3.3 released</a>"
				)
				, array(
					 "date" => "2009/06/24"
					, "title" => "<a href=\"showVersion.php?version=new-3.2.html\">Mylyn 3.2 released</a>"
					, "description" => "Mylyn 3.2 released as part of Eclipse Galileo"
				)
				, array(
					 "date" => "2009/03/17"
					, "title" => "<a href=\"showVersion.php?version=new-3.1.html\">Mylyn 3.1 released</a>"
				)
				, array(
					 "date" => "2008/06/25"
					, "title" => "<a href=\"showVersion.php?version=new-3.0.html\">Mylyn 3.0 released</a>"
					, "description" => "Mylyn 3.0 released as part of Eclipse Ganymede"
				)
				, array(
					 "date" => "2008/02/27"
					, "title" => "<a href=\"showVersion.php?version=new-2.3.html\">Mylyn 2.3 released</a>"
					, "description" => "Mylyn 2.3 released as part of Eclipse Europa SR2"
				)
				, array(
					 "date" => "2007/12/19"
					, "title" => "<a href=\"showVersion.php?version=new-2.2.html\">Mylyn 2.2 released</a>"
				)
				, array(
					 "date" => "2007/08/27"
					, "title" => "<a href=\"showVersion.php?version=new-2.1M.html\">Mylyn 2.1M1 released</a>"
				)
				, array(
					 "date" => "2007/05/14"
					, "title" => "<a href=\"showVersion.php?version=new-2.0M3.html\">Mylyn 2.0M3 released</a>"
				)
				, array(
					 "date" => "2007/02/16"
					, "title" => "<a href=\"showVersion.php?version=new-2.0M1.html\">Mylyn 2.0M1 released</a>"
				)
				, array(
					 "date" => "2006/06/29"
					, "title" => "<a href=\"showVersion.php?version=new-2.0.html\">Mylyn 2.0 released</a>"
					, "description" => "Mylyn 3.0 released as part of Eclipse Callisto"
				)

				 );
$col1 = "<div class=\"col-md-12\">";
$col2 = "<div class=\"col-md-12\">";
$idx = 1;
foreach(array_values($versions) as $version){
	if(is_array($version)){
		$col = "<div class=\"news_item\">\n<div class=\"news_item_date\">" . $version["date"] . "</div>\n";
		$col = $col . "<div class=\"news_item_title\">" . $version["title"] . "</div>\n";
		if ($version["description"]) {
			$col = $col . "<div class=\"news_item_description\">" . $version["description"] . "</div>";
		} else {
			$col = $col . "<div class=\"news_item_description\">&nbsp</div>";
		}
		$col = $col  . "</div>\n";
		if($idx == 1) {
			$col1 = $col1 . $col;
			$idx = 2;
		} else {
			$col2 = $col2 . $col;
			$idx = 1;
		}
	}
}
$col1 = $col1 . "</div>\n";
$col2 = $col2 . "</div>\n";

$html = <<<EOHTML
<div id="maincontent">
<div id="midcolumn" class="no-right-sidebar">
	<div class="row" >
		<div class="col-md-24">
			<div class="news-list"> <h2>Releases</h2>
		<div class="row" >
EOHTML;
	$html = $html . $cola. $col1 . $col2 . "</div></div></div>";

	# EclipseCon banner
	$App->Promotion = TRUE;

	# Generate the web page
    $Theme = $App->getThemeClass();
    $Theme = $App->getThemeClass($theme);
    $Theme->setNavPosition('left');
    $Theme->setNav($Nav);
    $Theme->setMenu($Menu);
    $Theme->setPageAuthor($pageAuthor);
    $Theme->setPageKeywords($pageKeywords);
    $Theme->setPageTitle($pageTitle);
    $Theme->setHtml($html);
    $Theme->setBreadcrumb($Breadcrumb);
    $Theme->generatePage();?>
