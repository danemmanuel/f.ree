<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Land.io UI Kit | Codrops</title>
    <meta name="description" content="A free HTML template and UI Kit built on Bootstrap" />
    <meta name="keywords" content="free html template, bootstrap, ui kit, sass" />
    <meta name="author" content="Peter Finlan and Taty Grassini Codrops" />
    <link rel="apple-touch-icon" sizes="57x57" href="../img/favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../img/favicon/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../img/favicon/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../img/favicon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../img/favicon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../img/favicon/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../img/favicon/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../img/favicon/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="../img/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="../img/favicon/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="../img/favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="../img/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="../img/favicon/manifest.json">
    <link rel="shortcut icon" href="../img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#663fb5">
    <meta name="msapplication-TileImage" content="img/favicon/mstile-144x144.png">
    <meta name="msapplication-config" content="img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#663fb5">
    <!-- Only needed Bootstrap bits + custom CSS in one file -->
    <link rel="stylesheet" href="../css/landio.css">
  </head>

  <body class="bg-faded p-t-2">
    <div class="container">
      <h3 class="p-y-1 text-xs-center">Entrar na sua conta<strong> Free</strong></h3>
    </div>

    <!-- WHITE navigation
    ================================================== -->

  

    <hr class="invisible">


    <div class="container">
      <div class="row">
        <div class="col-md-6 col-xl-6">

          <!-- Forms
          ================================================== -->

          <div class="form-group has-icon-left form-control-name">
            <label class="sr-only" for="inputName">Your name</label>
            <input type="text" class="form-control form-control-lg" id="inputName" placeholder="Your name">
          </div>
          <div class="form-group has-icon-left form-control-email">
            <label class="sr-only" for="inputEmail">Email address</label>
            <input type="email" class="form-control form-control-lg" id="inputEmail" placeholder="Email address" autocomplete="off">
          </div>
          <div class="form-group has-icon-left form-control-phone">
            <label class="sr-only" for="inputEmail">Telefone</label>
            <input type="number" class="form-control form-control-lg" id="inputPhone" placeholder="Telefone" autocomplete="off">
          </div>
          <div class="form-group has-icon-left form-control-password">
            <label class="sr-only" for="inputPassword">Enter a password</label>
            <input type="password" class="form-control form-control-lg" id="inputPassword" placeholder="Enter a password" autocomplete="off">
          </div>

          <!-- Buttons
          ================================================== -->

          <button type="submit" class="btn btn-primary btn-block">Sign up for free!</button>
          <hr class="invisible">

          <hr class="invisible">
        </div>
        <div class="col-md-6 col-xl-4">

          <!-- SOCIAL buttons
          ================================================== -->

          <a href="#" class="btn btn-social btn-block bg-facebook">
            <span class="icon-facebook"></span> Login with Facebook
          </a>
          <hr class="invisible">
          <a href="#" class="btn btn-social btn-block bg-twitter">
            <span class="icon-twitter"></span> Login with Twitter
          </a>
          <hr class="invisible">
          <a href="#" class="btn btn-social btn-block bg-google">
            <span class="icon-google"></span> Login with Google
          </a>
          <hr class="invisible">
          <a href="#" class="btn btn-social btn-block bg-linkedin">
            <span class="icon-linkedin"></span> Login with LinkedIn
          </a>

          <hr class="invisible">

          <div class="text-xs-center">

            <!-- SOCIAL icon buttons
            ================================================== -->

            <a href="#" class="btn btn-social btn-social-icon btn-social-facebook">
              <span class="icon-facebook"></span>
            </a>
            <a href="#" class="btn btn-social btn-social-icon btn-social-twitter">
              <span class="icon-twitter"></span>
            </a>
            <a href="#" class="btn btn-social btn-social-icon btn-social-google">
              <span class="icon-google"></span>
            </a>
            <a href="#" class="btn btn-social btn-social-icon btn-social-linkedin">
              <span class="icon-linkedin"></span>
            </a>
          </div>

          <hr class="invisible">

        </div>

        <div class="clearfix hidden-xl-up"></div>

        <div class="col-md-4">

          <!-- Chart
          ================================================== -->

          <div class="card card-chart">
            <div id="chart-holder" class="center-block" data-active="90%">
              <canvas id="chart-area" class="center-block" width="200" height="200"></canvas>
            </div>
            <ul class="list-group">
              <li class="list-group-item complete">
                <span class="label pull-xs-right">324</span>
                <span class="icon-status status-completed"></span> Completed
              </li>
              <li class="list-group-item">
                <span class="label pull-xs-right">34</span>
                <span class="icon-status status-backlog"></span> In backlog
              </li>
              <li class="list-group-item">
                <span class="label pull-xs-right">20</span>
                <span class="icon-status status-noticket"></span> Without ticket
              </li>
            </ul>
          </div>

          <hr class="invisible">

        </div>

        <div class="clearfix hidden-md-up"></div>

        <div class="col-md-8 col-xl-6 col-xl-offset-3">

          <!-- User Card
          ================================================== -->

          <div class="card card-inverse card-social text-xs-center">
            <div class="card-block has-gradient">
              <img src="img/face5.jpg" height="90" width="90" alt="Avatar" class="img-circle">
              <h5 class="card-title">Joel Fisher</h5>
              <h6 class="card-subtitle">hey@joelfisher.com</h6>
              <button type="submit" class="btn btn-secondary-outline btn-sm">Follow</button>
            </div>
            <div class="card-block container">
              <div class="row">
                <div class="col-md-4 card-stat">
                  <h4>149 <small class="text-uppercase">Shots</small></h4>
                </div>
                <div class="col-md-4 card-stat">
                  <h4>1,763 <small class="text-uppercase">Follows</small></h4>
                </div>
                <div class="col-md-4 card-stat">
                  <h4>324 <small>D/Ls</small></h4>
                </div>
              </div>
            </div>
          </div>

          <hr class="invisible">

        </div>
      </div>
    </div>

    <section class="section-news" style="padding-bottom:2rem;">
      <div class="container">
        <h3 class="sr-only">News</h3>

        <!-- News
        ================================================== -->

        <div class="bg-inverse">
          <div class="row">
            <div class="col-md-6 p-r-0">
              <figure class="has-light-mask m-b-0 image-effect">
                <img src="https://images.unsplash.com/photo-1442328166075-47fe7153c128?q=80&fm=jpg&w=1080&fit=max" alt="Article thumbnail" class="img-fluid">
              </figure>
            </div>
            <div class="col-md-6 p-l-0">
              <article class="center-block">
                <span class="label label-info">Featured article</span>
                <br>
                <h5><a href="#">Design studio with product designer Peter Finlan <span class="icon-arrow-right"></span></a></h5>
                <p class="m-b-0">
                  <a href="#"><span class="label label-default text-uppercase"><span class="icon-tag"></span> Design Studio</span></a>
                  <a href="#"><span class="label label-default text-uppercase"><span class="icon-time"></span> 1 Hour Ago</span></a>
                </p>
              </article>
            </div>
          </div>
        </div>
      </div>
    </section>

    <h4 class="m-y-2 text-xs-center">Video JS</h4>

    <!-- Video JS
    ================================================== -->

    <video id="demo_video" class="video-js vjs-default-skin vjs-big-play-centered" controls poster="img/video-poster.jpg" data-setup='{}'>
      <source src="http://vjs.zencdn.net/v/oceans.mp4" type='video/mp4'>
      <source src="http://vjs.zencdn.net/v/oceans.webm" type='video/webm'>
    </video>

    <hr class="invisible">

    <h4 class="m-y-2 text-xs-center">Vimeo (Bootstrap modal)</h4>

    <!-- VIMEO video
    ================================================== -->

    <figure class="has-light-mask">
      <a class="icon-play-button" href="#videoModal" data-toggle="modal" data-target="#videoModal">
        <span class="icon-play"></span>
      </a>
      <img class="img-fluid img-fluid-custom" src="img/video-poster.jpg" alt="Video poster">
    </figure>

    <hr class="invisible">

    <h4 class="m-y-2 text-xs-center">YouTube (Bootstrap modal)</h4>

    <!-- YOUTUBE video
    ================================================== -->

    <figure class="has-light-mask">
      <a id="youtube-trigger" class="icon-play-button" href="#" data-toggle="modal" data-target="#youtubeModal" data-video="http://www.youtube.com/embed/loFtozxZG0s">
        <span class="icon-play"></span>
      </a>
      <img class="img-fluid img-fluid-custom" src="img/video-poster.jpg" alt="Video poster">
    </figure>

    <hr class="invisible">

    <!-- WHITE Footer
    ================================================== -->

    <footer class="section-footer bg-white" role="contentinfo">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-5">
            <div class="media">
              <div class="media-left">
                <span class="media-object icon-logo display-1"></span>
              </div>
              <small class="media-body media-bottom">
                &copy; Land.io 2015. <br>
                Designed by Peter Finlan, developed by Taty Grassini, exclusively for Codrops.
              </small>
            </div>
          </div>
          <div class="col-md-6 col-lg-7">
            <ul class="nav nav-inline">
              <li class="nav-item">
                <a class="nav-link" href="./index-carousel.html"><small>NEW</small> Slides<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active"><a class="nav-link" href="ui-elements.html">UI Kit</a></li>
              <li class="nav-item"><a class="nav-link" href="https://github.com/tatygrassini/landio-html" target="_blank">GitHub</a></li>
              <li class="nav-item"><a class="nav-link scroll-top" href="#totop">Back to top <span class="icon-caret-up"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <hr class="invisible">

    <!-- DARK footer
    ================================================== -->

    <footer class="section-footer bg-inverse" role="contentinfo">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-5">
            <div class="media">
              <div class="media-left">
                <span class="media-object icon-logo display-1"></span>
              </div>
              <small class="media-body media-bottom">
                &copy; Land.io 2015. <br>
                Designed by Peter Finlan, developed by Taty Grassini, exclusively for Codrops.
              </small>
            </div>
          </div>
          <div class="col-md-6 col-lg-7">
            <ul class="nav nav-inline">
              <li class="nav-item">
                <a class="nav-link" href="./index-carousel.html"><small>NEW</small> Slides<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active"><a class="nav-link" href="ui-elements.html">UI Kit</a></li>
              <li class="nav-item"><a class="nav-link" href="https://github.com/tatygrassini/landio-html" target="_blank">GitHub</a></li>
              <li class="nav-item"><a class="nav-link scroll-top" href="#totop">Back to top <span class="icon-caret-up"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- video modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
      <div class="modal-dialog modal-video" role="document">
        <div class="modal-content">
          <!-- 16:9 aspect ratio -->
          <div class="embed-responsive embed-responsive-16by9">
            <iframe id="vimeo-play" src="https://player.vimeo.com/video/98330466?color=6c59b4&byline=0&portrait=0&badge=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>

    <!-- video modal -->
    <div class="modal fade" id="youtubeModal" tabindex="-1" role="dialog" aria-labelledby="youtubeModal" aria-hidden="true">
      <div class="modal-dialog modal-video" role="document">
        <div class="modal-content">
          <!-- 16:9 aspect ratio -->
          <div class="embed-responsive embed-responsive-16by9">
            <iframe id="youtube-play" class="embed-responsive-item" src="" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/landio.min.js"></script>
  </body>
</html>
