<?php                                                              require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");  require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");   require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");   $App   = new App();  $Nav  = new Nav();  $Menu   = new Menu();    include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

  # Begin: page-specific settings.  Change these.
  $pageTitle     = "Eclipse Mylyn Open Source Project";
  $pageKeywords  = "Mylyn, Eclipse, Tasks, Bugs, Focus, UI";
  $pageAuthor    = "Mik Kersten";

  # Add page-specific Nav bars here
  # Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
  # $Nav->addNavSeparator("My Page Links",   "downloads.php");
  # $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
  # $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);
  # End: page-specific settings
  #

$html = <<<EOHTML

<div id="maincontent">
  <div id="midcolumn">
    <div class="row" >
      <div class="col-sm-24 col-md-24 col-lg-24">
        Mylyn is the task and application lifecycle management (ALM) framework for Eclipse.<br><br>It provides:
        <ul>
          <li><b>The revolutionary task-focused interface</b>
            <br><i>Realigns the IDE around tasks so that you see only the code that's relevant</i>
            <br>&nbsp;
          <li><b>A task management tool for developers</b>
            <br><i>Averaging 1 million downloads/month, Mylyn is the most popular IDE tool for ALM</i>
            <br>&nbsp;
          </li>
          <li><b>A broad ecosystem of Agile and ALM integrations</b>
            <br><i>Dozens of extensions integrate Mylyn with ALM and developer collaboration tools</i>
            <br>&nbsp;
          </li>
        </ul>
        Mylyn's <a href="http://en.wikipedia.org/wiki/Task-focused_interface">task-focused interface
        <img border="0" src="/mylyn/images/external-link.png"></a>
        reduces information overload and makes multitasking easy.
        Mylyn makes tasks a first class part of the IDE, integrates rich and offline editing for
        ALM tools, and monitors your programming activity to create a "task context" that
        focuses your workspace and automatically links all relevant artifacts to the task-at-hand.
        This puts the information you need at your fingertips and improves productivity by reducing
        information overload, facilitating multitasking and easing the sharing of expertise.
        <br>
        <table border="0" cellpadding="5">
          <tr height=9>
          <tr>
            <td width=20></td>
            <td><a href="/mylyn/downloads"><img border=0 src="images/downloads.gif"></a></td>
            <td>
              <table border="0" cellpadding="0">
                <tr>
                  <td><font size=+1><a href="/mylyn/downloads">Downloads</a></font></td>
                </tr>
                <tr>
                  <td>
                    Get the latest and greatest Mylyn release.
                    <!-- <b><a href="/mylyn/new"><img src="images/star.png"/> What's new</a></b>? -->
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td width=20></td>
            <td><a href="/mylyn/support"><img border=0 src="images/community.jpg"></a></td>
            <td>
              <table border="0" cellpadding="0">
                <tr>
                  <td><font size=+1><a href="/mylyn/support">Support</a></font></td>
                </tr>
                <tr>
                  <td>Find support and interact with users and developers.</td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td width=20></td>
            <td><a href="/mylyn/start"><img border=0 src="images/reference.png"></a></td>
            <td>
              <table border="0" cellpadding="0">
                <tr>
                  <td><font size=+1><a href="/mylyn/start">Get Started</a></font></td>
                </tr>
                <tr>
                  <td>Resources for new users, links to tutorials and articles.</td>
                </tr>
              </table>
            </td>
          </tr>
          <tr height="10"></tr>
        </table>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="news-list">
          <h2>Releases</h2>
          <div class="news_item">
            <div class="news_item_date">2019/06/28</div>
            <div class="news_item_title"><a href="new/showVersion.php?version=new-3.25.html"><img src="images/star.png"/>Mylyn 3.25 released</a></div>
            <div class="news_item_description">Mylyn 3.25 released</div>
          </div>
          <div class="news_item">
            <div class="news_item_date">2018/06/27</div>
            <div class="news_item_title"><a href="new/showVersion.php?version=new-3.24.html">Mylyn 3.24 released</a></div>
            <div class="news_item_description">Mylyn 3.24 released as part of Eclipse Photon</div>
          </div>
          <div class="news_item">
            <div class="news_item_date">2017/06/28</div>
            <div class="news_item_title"><a href="new/showVersion.php?version=new-3.23.html">Mylyn 3.23 released</a></div>
            <div class="news_item_description">Mylyn 3.23 released as part of Eclipse Oxygen</div>
          </div>
          <div class="news_view_all">&gt; <a href="new/all.php">View all Release Notes</a></div>
        </div>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="news-list">
          <h2>News</h2>
          <div class="news_item">
            <div class="news_item_date">2011/06/28</div>
            <div class="news_item_title"><a href="http://jaxenter.com/mik-kersten-jaxconf-2011-36569.html" target="_new">
              Mik Kersten on Eclipse Indigo and new features in Mylyn 3.6<img border="0" src="/mylyn/images/external-link.png"></a>
            </div>
          </div>
          <div class="news_item">
            <div class="news_item_date">2011/06/22</div>
            <div class="news_item_title"><a href="http://tasktop.com/resources/videos/git-gerrit-hudson-one-mylyn" target="_new">
              Git, Gerrit, Hudson and one Mylyn to rule them all<img border="0" src="/mylyn/images/external-link.png"></a>
            </div>
            <div class="news_item_description">presentation by Steffen Pingel and Benjamin Muskalla</div>
          </div>
          <div class="news_item">
            <div class="news_item_date">2010/09/16</div>
            <div class="news_item_title"><a target="_new" href="http://tasktop.com/blog/eclipse/mylyn-top-level-eclipse-project">
              Mylyn promoted to top-level Eclipse project<img border="0" src="/mylyn/images/external-link.png"></a>
            </div>
          </div>
          <div class="news_item">
            <div class="news_item_date">2008/07/30</div>
            <div class="news_item_title"><a href="http://tasktop.com/resources/videos/mylyn/webcast-mylyn-3.0.html">
              Mylyn 3.0: Code at the Speed of Thought<img border="0" src="/mylyn/images/external-link.png"></a>
            </div>
            <div class="news_item_description">webcast by Mik Kersten (Tasktop)</div>
          </div>
          <div class="news_view_all">&gt; <a href="news/index.php">News Archive</a></div>
        </div>
      </div>
    </div>
  </div>
  <div id="rightcolumn">
    <p align="left">
      <a href="http://marketplace.eclipse.org/content/mylyn">
      <img src="/mylyn/images/star.png" border="0"/>
      Star Mylyn as favorite on Marketplace</a>
    </p>
    <p align="left">
      <a href="images/mylyn-3.1-screenshot.png"><img alt="Mylyn 3.1 Screenshot" border=0 src="images/tasklist-splash-3.1.png" class="img-responsive"></a>
      <br>&nbsp;
    <div style="margin-top:0px;">
      <iframe width="260" height="160" src="http://www.youtube.com/embed/l2-kZGe_FS8" frameborder="0" allowfullscreen></iframe>
    </div>
    <br>&nbsp;
    </p>
    <p align="left">
    <div style="margin-top:0px;" align="left" id="twtr-search-widget"></div>
    <script src="http://widgets.twimg.com/j/1/widget.js"></script>
    <link href="http://widgets.twimg.com/j/1/widget.css" type="text/css" rel="stylesheet">
    <script>
      new TWTR.Widget({
        search: '#mylyn',
        id: 'twtr-search-widget',
        loop: true,
        title: 'What\'s being said about...',
        subject: 'Mylyn',
        width: 278,
        height: 255,
        theme: {
          shell: {
            background: '#5b5993',
            color: '#ffffff'
          },
          tweets: {
            background: '#ffffff',
            color: '#444444',
            links: '#333366'
          }
        }
      }).render().start();
    </script>
    <small>Follow: <a href="http://twitter.com/mik_kersten">Mik Kersten</a> (lead), <a href="http://twitter.com/WikiText">WikiText</a></small>
    </p>
  </div>
</div>
EOHTML;

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
    $Theme->generatePage();
