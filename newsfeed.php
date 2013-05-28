
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>FeedMe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="static/css/bootstrap.min.css" rel="stylesheet">
    <link href="static/css/style.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#"><img src="static/img/feedme.png" width="150px" /></a>
          
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#hot">Hot</a></li>
              <li><a href="#new">New</a></li>
              <li><a href="#controversial">Controversial</a></li>
              <li><a href="#recommended">Recommended</a></li>
            </ul>
          </div>

          <div class="nav pull-right">
            <ul class="nav">
              <li class="dropdown"> 
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret large-caret"></b></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#settings">Settings</a></li>
                  <li><a href="#logout">Logout</a></li>
                </ul>
              </li>
            </ul>
            <img src="static/img/default.jpg" class="nav pull-left" id="profile-image" />
            <ul class="nav">
              <li class="up-item"><a href="#account">@user.name</a></li><br>
              <li class="up-item"><a href="#usertype">@user.type</a></li><br>
              <li class="up-item"><a href="#notification">@notification #</a></li>
            </ul>
           </div>
        </div>
      </div>
    </div>

    <div class="container-fluid" id="maincontainer">
      <div class="row-fluid">
        <div class="span1" id="thumbnail">
          <img src="static/img/default.jpg"> 
          <img src="static/img/default.jpg">
          <img src="static/img/default.jpg">
        </div>
        <div class="span8 pull-left" id="content">
          <div class="article">
            <div class="title">@Article.title</div>
            <div class="tagline">@Author.name | @Article.timestamp | @Article.articleType | @LIST(Categories.name) </div>
            <div>@Article.abstract: Synergistic visionary reinvent strategic channels visionary clicks-and-mortar back-end aggregate. Weblogs leverage embedded. </div>
          </div>
          <div class="article">
              <div class="title">@Article.title</div>
              <div class="tagline">@Author.name | @Article.timestamp | @Article.articleType | @LIST(Categories.name)</div>
              <div>@Article.abstract: Synergistic visionary reinvent strategic channels visionary clicks-and-mortar back-end aggregate. Weblogs leverage embedded. </div>
          </div>
          <div class="article">
              <div class="title">@Article.title</div>
              <div class="tagline">@Author.name | @Article.timestamp | @Article.articleType | @LIST(Categories.name)</div>
              <div>@Article.abstract: Synergistic visionary reinvent strategic channels visionary clicks-and-mortar back-end aggregate. Weblogs leverage embedded. </div>
          </div>
        </div>
        <div class="span3" id="searchspan">
          <div>
            <h4>Smart Filter</h4>
          </div>
          <form class="navbar-search">
            <input type="text" class="search-query input-large" placeholder="Search" id="searchbox">
          </form>
          <div class="clearfloats"></div>
          <div class="text-center" id="catfilter">
            stuff goes here
          </div>  
        </div>  
      </div>
      
    </div> <!-- /container -->
  </body>
</html>