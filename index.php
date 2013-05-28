
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
                <img src="static/img/default.jpg" class="nav pull-left" id="profile-image" />
                <ul class="nav">
                   <li class="up-item"><a href="#account">Jacob Vickers</a></li><br>
                   <li class="up-item"><a href="#usertype">User</a></li><br>
                   <li class="up-item"><a href="#notification">Notifications: 0</a></li>
                </ul>
                <ul class="nav">
                  <li class="dropdown"> 
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret large-caret"></b></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#userpage">User Center</a></li>
                      <li><a href="#settings">Settings</a></li>
                      <li><a href="#logout">Logout</a></li>
                    </ul>
                  </li>
                </ul>
            </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span9" id="content">
          <article>
            <h1>Computers See Faces in the Clouds, Just Like You</h1>
            <h3>Kelsey Campbell-Dollaghan 05/27/2013 4:00PM</h3>
            <p>Humans are all about pattern recognition: we want—and maybe need?—to believe that there’s order and meaning behind everything we see and do in life. The future is divined in teacups, superstitions are put on random objects, and—of course—we see ourselves in everything around us. Like the sky.</p>

            <p>Shinseungback Kimyonghun, a Seoul-based tech art collective, focus largely on computer vision, so most of their work take the form of script, with results that often verge on poetic. Their latest project, Cloud Face, uses facial recognition to capture wisps and puffs of vapor that—for a brief instant—converge to form the likeness of a human face.</p>

            <p>Speaking over email today, the artists explained that the idea came about after they attempted to capture real human faces using a webcam strung to the end of fishing rod, hanging out a window. It returned a fair number of human visages—but it also picked up trees, grass, and random inanimate objects that the software recognized as human-enough. “I looked up in the sky and thought ‘What if I use this error and have it find faces in clouds?’,” Kim Yong Hun remembers. “The discovery of the error led me to explore computer’s vision itself.”</p>

            <p>So the duo set out to build a system that would capture cloud faces automatically. They built a custom script using Processing and the OpenCV facial detection library, and set up a DSLR pointed at the sky, which transmitted images to a computer where the program was running. Then, they sat back and let the magic happen:</p>

            <blockquote>As soon as I opened my eyes in the morning I would check out the sky if it had a 'proper' pattern for face detection... The faces used in the 'Cloud Face' composition were selected by us manually. That means the faces are agreed upon as face by the computer vision and our vision.</blockquote>

            <p>They ended up capturing over 150,000 images of the sky—in which their script detected 1,000 faces. Which isn’t a bad ratio, considering the odds?</p>

            <p>Cloud Faces builds on research being done by scientists who are interested in why—and how—our brains are so good at seeing faces in things like clouds, toast, and rotting wood. A 2007 article in The New York Times spoke to several scientists working on facial recognition, at least one of whom argued that it represents a crucial piece of human evolution:</p>

            <blockquote>Dr. Sinha of M.I.T. says that whether the hair-trigger response to faces is innate or learned, it represents a critical evolutionary adaptation, one that dwarfs side effects like seeing Beelzebub in a crumpled tissue. “The information faces convey is so rich — not just regarding another person’s identity, but also their mental state, health and other factors,” he said. “It’s extremely beneficial for the brain to become good at the task of face recognition and not to be very strict in its inclusion criteria. The cost of missing a face is higher than the cost of declaring a nonface to be a face.”</blockquote>

            <p>So before you tell Shinseungback Kimyonghun to get their heads out of the clouds, consider this: they're just forwarding the project of human evolution—albeit with the help of a piece of script.</p>
          </article>
        </div>
        
        <ul class="thumbnails">
          <div class="span3">
            <div class="thumbnail" style="overflow:hidden;">
              <h4>@import Article.title</h4>
              <img src="http://fpoimg.com/100x100" alt="" class="pull-left">
              <p>@import Article.abstract to provide
              content for this section that can
              help entice the user to read the
              article.
              </p>
              <p class="pull-right">Relevancy Score --> ###</p>
            </div>
            <div class="thumbnail" style="overflow:hidden;">
              <h4>@import Article.title</h4>
              <img src="http://fpoimg.com/100x100" alt="" class="pull-left">
              <p>@import Article.abstract to provide
              content for this section that can
              help entice the user to read the
              article.
              </p>
              <p class="pull-right">Relevancy Score --> ###</p>
            </div>
            <div class="thumbnail" style="overflow:hidden;">
              <h4>@import Article.title</h4>
              <img src="http://fpoimg.com/100x100" alt="" class="pull-left">
              <p>@import Article.abstract to provide
              content for this section that can
              help entice the user to read the
              article.
              </p>
              <p class="pull-right">Relevancy Score --> ###</p>
            </div>
          </div>
        </ul>
        
      </div>
      
    </div> <!-- /container -->

    <script type="text/javascript" src="static/js/jquery-2.0.0.js"></script>
    <script type="text/javascript" src="static/js/bootstrap.min.js"></script>

  </body>
</html>