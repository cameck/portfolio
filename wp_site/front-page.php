<?php
/**
 * Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?>
<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Cameron Eckelberry - Full Stack Web Developer</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,400italic' rel='stylesheet' type='text/css'>
  <link rel="icon"
      type="image/png"
      href="http://www.cameroneckelberry.com/wp-content/uploads/2016/06/favicon.png">

  <link rel="stylesheet" href="http://www.cameroneckelberry.com/wp-content/themes/2016-child/css/home.css" type="text/css" media="screen" />
</head>
<body id="home">

  <nav class="navbar bg-faded navbar-fixed-top">
    <ul class="nav navbar-nav">
      <li class="nav-item">
        <a class="nav-link anchor-link" href="#home">Cameron Eckelberry</a>
      </li>
      <li class="nav-item">
        <a class="nav-link anchor-link" href="#contact">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link anchor-link" href="#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/blog/">Blog</a>
      </li>
    </ul>
  </nav>
  <div class="container-fluid" id="hero">
    <svg viewBox="0 0 800 600">
      <symbol id="s-text">
        <text text-anchor="middle" x="50%" y="35%" class="text--line">Cameron Eckelberry</text>
        <text text-anchor="middle" x="50%" y="68%" class="text--line2">Full Stack Dev</text>
      </symbol>

      <g class="g-ants">
        <use xlink:href="#s-text"
        class="text-copy"></use>
        <use xlink:href="#s-text"
        class="text-copy"></use>
        <use xlink:href="#s-text"
        class="text-copy"></use>
        <use xlink:href="#s-text"
        class="text-copy"></use>
        <use xlink:href="#s-text"
        class="text-copy"></use>
      </g>
    </svg>
  </div>
  <div class="container-fluid" id="about">
    <div class="col-md-6">
      <article id="about-me">
        <h1>About Me</h1>
        <p>
          <!-- start slipsum code -->
          Hello, my name is Cameron. I'm a Junior Full-Stack Ruby on Rails Developer based in Florida.
          I live in the St. Pete/Tampa Area in Florida.
          It's hot here. So, I stay inside and make digital things.

        </p>
      </article>
    </div>
    <div class="col-md-6">
      <article>
        <h1>Latest Projects</h1>

        <div class="card card-inverse card-first text-xs-center">
          <div class="card-block">
            <blockquote class="card-blockquote">
              <a href="http://emojisentiment.com/" target="_blank">
                <p><span>#EmojiSentiment</span>
                    <img src="http://www.cameroneckelberry.com/wp-content/uploads/2016/05/heat.png"
                     alt="Emoji Heart" width="16" height="16" class="alignnone size-full wp-image-139" /></p>
                <footer>View it <cite title="Source Title">Here</cite></footer></a>
              </blockquote>
            </div>
          </div>

          <div class="card card-inverse card-second text-xs-center">
            <div class="card-block">
              <blockquote class="card-blockquote">
                <a href="http://smip.co" target="_blank">
                  <p>SMIP</p>
                  <footer>View it <cite title="Source Title">Here</cite></footer></a>
                </blockquote>
              </div>
            </div>

            <div class="card card-inverse card-third text-xs-center">
              <div class="card-block">
                <blockquote class="card-blockquote">
                  <a href="http://www.southerncaliforniaswimmingpools.com/" target="_blank">
                    <p>Southern California Swimming Pools</p>
                    <footer>View it <cite title="Source Title"> Here</cite></footer></a>
                  </blockquote>
                </div>
              </div>

            </article>
          </div>
        </div>

      <div class="container-fluid" id="contact">
        <h1>Let's get in Touch</h1>
        <hr />
        <div class="col-md-6" id="contact-form">
            <div id="contact-header">
                <h3>Contact</h3>
            </div>
            <?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 5 ); } ?>
        </div>
        <div class="col-md-6" id="contact-data">


          <div class="card">
            <img class="card-img-top" src="http://www.cameroneckelberry.com/wp-content/uploads/2016/06/optim_cameron_wedding_drawing.jpg" alt="Drawing of Cameron Eckelberry">
            <div class="card-block">
              <h4 class="card-title">Cameron Eckelberry</h4>
              <h6>Jr. Full Stack Developer</h6>
              <p>
                <a href="mailto:me@cameroneckelberry.com" target="_blank">me@cameroneckelberry.com</a>
              </p>
              <a href="https://github.com/cameck" target="_blank"><i class="fa fa-github fa-2x" aria-hidden="true"></i></a>  <a href="https://twitter.com/digitalberrybot" target="_blank"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a> <a href="https://linkedin.com/cameck" target="_blank"> <i class="fa fa-linkedin fa-2x" aria-hidden="true"></i> </a>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid" id="footer">

        <footer>
          <p>
            ©<?php echo date("Y"); ?> Cameron Eckelberry - Full Stack Developer
          </p>

          <!-- jQuery first, then Bootstrap JS. -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.2/js/tether.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
          <script src="http://www.cameroneckelberry.com/wp-content/themes/2016-child/js/scripts.js"></script>

        </footer>
      </div>
    </body>
