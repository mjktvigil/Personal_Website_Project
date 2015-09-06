<?php require_once('../lib/head-utils.php'); ?>

<!-------- HEADER -------->
<header>
  <?php require_once('../lib/header.php'); ?>
</header>


<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="online designer portfolio" />
    <meta name="author" content="marie jt vigil" />
    <title>jtdesignsolutions.com</title>
    <!-- Bootstrap Latest compiled and minified CSS -->
    <link type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap and Font-awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Optional Bootstrap theme -->
    <link type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
    <!-- bootstrap.min.css -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- start Custom CSS Files -->
    <!-- custom css -->
    <link href='https://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
    <link href="../css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="../css/flexslider.css" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet" />
    <link href="../css/colors.css" rel="stylesheet" />
    <!-- browser tab icon -->
    <link rel="shortcut icon" href="../img/ico/favicon.ico">
    <!-- end Custom CSS Files-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- [if lt IE 9]>-->
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script type="text/javascript" src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script type="text/javascript" src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!--[endif]-->
    <!-- js-cookie -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/js-cookie/2.0.2/js.cookie.min.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
    <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
    <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/additional-methods.min.js"></script>
    <!-- Latest compiled and minified Bootstrap JavaScript, all compiled plugins included -->
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- Load angular and angular route via CDN -->
    <script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js"></script>
    <script type="text/javascript"  src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-route.js"></script>
  </head>
  <body>
    <div id="wrapper">
      <!-- Start header -->
      <header>
        <div class="navbar navbar-default navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php"><span><img class="logo" src="../img/logos/jt-design-solutions-logo-tag.png" alt="jt design solutions" title="jt design solutions" /></span></a>
            </div>
            <div class="navbar-collapse collapse ">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                </li>
                <li><a href="../our-story/index.php">Our story</a></li>
                <li><a href="../chat-with-us/index.php">Chat with us</a></li>
              </ul>
            </div>
          </div>
        </div>
      </header>
      <!-- End header -->
      <!-- Start top-line -->
      <div class="top-line container-fluid">
        <div class="row">
        </div>
      </div>
      <!-- .bottom-line .container-fluid -->
      <!-- End top-line -->
      <!-- Start slider -->
      <section id="featured">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- Slider -->
              <div id="main-slider" class="flexslider">
                <ul class="slides">
                  <li>
                    <img src="../img/slides/1.jpg" alt="" />
                    <div class="flex-caption">
                      <h3>?Title?</h3>
                      <p>Duis fermentum auctor ligula ac malesuada. Mauris et metus odio, in pulvinar urna</p>
                    </div>
                  </li>
                  <li>
                    <img src="../img/slides/2.jpg" alt="" />
                    <div class="flex-caption">
                      <h3>?Title?</h3>
                      <p>Sodales neque vitae justo sollicitudin aliquet sit amet diam curabitur sed fermentum.</p>
                    </div>
                  </li>
                  <li>
                    <img src="../img/slides/3.jpg" alt="" />
                    <div class="flex-caption">
                      <h3>?Title?</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit donec mer lacinia.</p>
                    </div>
                  </li>
                </ul>
              </div><!-- main-slider -->
            </div><!-- col-lg-12 -->
          </div>
        </div>
      </section><!-- #featured -->
      <!-- End slider -->
      <!-- Start Headline-intro Content -->
      <section class="intro">
        <div class="container">
          <article class="post-content">
            <h2>Title</h2>
            <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam</p>
          </article>
          <!-- .post-content -->
        </div>
      </section><!-- .intro -->
      <!-- End Headline-intro Content -->
      <!-- Start 3 Column Content -->
      <section id="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="row">
                <!-- Start Box 1 -->
                <div class="col-lg-4">
                  <div class="box">
                    <div class="box-top box-one-top">
                      <a href="../inbound-marketing/index.php">InBound Marketing</a>
                    </div>
                    <div class="">
                      <img src="../img/works/1.jpg" alt="???" title="???" />
                    </div>
                    <div class="box-gray">
                      <h4 class="aligncenter">?Title?</h4>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                      </p>
                    </div>
                  </div><!-- .box -->
                  <div class="box-one-line">
                  </div>
                </div><!-- .col-lg-4 -->
                <!-- End Box 1 -->
                <!-- Start Box 2 -->
                <div class="col-lg-4">
                  <div class="box">
                    <div class="box-top box-two-top">
                      <a href="../outbound-marketing/index.php">OutBound Marketing</a>
                    </div>
                    <div class="">
                      <img src="../img/works/2.jpg" alt="???" title="???" />
                    </div>
                    <div class="box-gray">
                      <h4 class="aligncenter">?Title?</h4>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                      </p>
                    </div>
                  </div><!-- .box -->
                  <div class="box-two-line">
                  </div>
                </div><!-- .col-lg-4 -->
                <!-- End Box 2 -->
                <!-- Start Box 3 -->
                <div class="col-lg-4">
                  <div class="box">
                    <div class="box-top box-three-top">
                      <a href="../cognitive-marketing/index.php">Cognitive Marketing</a>
                    </div>
                    <div class="">
                      <img src="../img/works/3.jpg" alt="???" title="???" />
                    </div>
                    <div class="box-gray">
                      <h4 class="aligncenter">?Title?</h4>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                      </p>
                    </div>
                  </div><!-- .box -->
                  <div class="box-three-line">
                  </div>
                </div><!-- .col-lg-4 -->
                <!-- End Box 3 -->
              </div>
            </div>
          </div><!-- .container -->
        </div><!-- .container -->
      </section><!-- #content -->
      <!-- End 3 Column Content-->
      <!-- Start bottom-line -->
      <div class="bottom-line container-fluid">
        <div class="row">
        </div>
      </div>
      <!-- End bottom-line -->
      <!-- Start Footer -->
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <div class="widget">
                <h5 class="widgetheading">Let us know&hellip;</h5>
                <p>
                  <a class="" href="mailto:marie@jtdesignsolutions.com" title="Email">  Problems with this site?</a>
                </p>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="widget">
                <h5 class="widgetheading">Pages</h5>
                <ul class="link-list">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="../our-story/index.php">Our Story</a></li>
                  <li><a href="../chat-with-us/index.php">Chat with us</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="widget">
                <h5 class="widgetheading">Portfolios</h5>
                <ul class="link-list">
                  <li><a href="../inbound-marketing/index.php">Inbound Marketing</a></li>
                  <li><a href="../outbound-marketing/index.php">Outbound Marketing</a></li>
                  <li><a href="../cognitive-marketing/index.php">Cognitive Marketing</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="widget">
                <h5 class="widgetheading">Follow us&hellip;</h5>
                <ul class="social-network">
                <li><a href="#" data-placement="top" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.linkedin.com/in/mariejtvigil" data-placement="top" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="https://plus.google.com/u/0/111062279938596830993/posts" data-placement="top" title="Google plus" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="https://github.com/" data-placement="top" title="GitHub" target="_blank"><i class="fa-github-alt"></i></a></li>
                <!--<li><a href="#" data-placement="top" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#" data-placement="top" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                  </ul>-->
                <div class="clear">
                  <!--for added whitespace and color between footer and subfooter-->
                </div>
              </div>
            </div>
          </div>
        </div><!-- .container -->
        <div id="sub-footer">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="copyright">
                  <p>
                    <span>&copy; 2015 jt design solutions&mdash;all right reserved by </span><a href="#" target="">marie jt vigil</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div><!-- #sub-footer -->
      </footer><!-- End Footer -->
    </div><!-- #wrapper -->
    <a href="#" class="scrollup"><i class="fa fa-angle-up active">  Going up!</i></a>
    <!--    javascript    ================================================== -->
    <!-- Placed at the end of the document so the pages loads faster -->
    <script src="../lib/sendemail.php"></script> 
    <script src="../js/jquery.js"></script>
    <script src="../js/jquery.easing.1.3.js"></script>
    <script src="../js/jquery.fancybox.pack.js"></script>
    <script src="../js/jquery.fancybox-media.js"></script>
    <script src="../js/prettify.js"></script>
    <script src="../js/portfolio/jquery.quicksand.js"></script>
    <script src="../js/portfolio/setting.js"></script>
    <script src="../js/jquery.flexslider.js"></script>
    <script src="../js/animate.js"></script>
	 <script src="../js/validate.js"></script
    <script src="../js/custom.js"></script>
  </body>
</html>

<footer>
  <?php require_once('../lib/footer.php'); ?>
</footer>