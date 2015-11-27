<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Pharma Emerging</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicons/favicon-32x32.png" sizes="32x32">
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="0" />


  <!-- Le styles -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.6.6/jquery.fullPage.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800,600,700' rel='stylesheet' type='text/css'>
  <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

  <?php wp_head(); ?>

</head>
<body>

  <div id="header">
    <div class="container-fluid">

      <div class="row">

        <div class="col-xs-12 col-sm-5 col-md-4">
          <a class="brand" title="PHARMA EMERGING" href="#Home"
          style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/pharma_emerging/logo.svg );">
          </a>
        </div>

        <div class="col-xs-10 col-xs-offset-1 col-sm-7 col-sm-offset-0 col-md-8">
          <div class="row buttons social_networks">

            <div class="col-xs-3 col-sm-6 col-md-9 button_item">
              <button type="button" class=" collapsed"data-toggle="collapse" data-target="#collapse-menu">
                <span class="sr-only">toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="col-xs-3 col-sm-2 col-md-1 button_item">
              <a href="<?php //the_field('twitter', 30 );?>" target="_blank">
                <div style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/social_networks/twitter.svg );">
                </div>
              </a>
            </div>
            <div class="col-xs-3 col-sm-2 col-md-1 button_item">
              <a href="<?php //the_field('instagram', 30 );?>" target="_blank">
                <div style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/social_networks/instagram.svg );">
                </div>
              </a>
            </div>
            <div class="col-xs-3 col-sm-2 col-md-1 button_item">
              <a href="<?php //the_field('facebook', 30 );?>" target="_blank">
                <div style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/social_networks/facebook.svg );">
                </div>
              </a>
            </div>


          </div>
        </div>

        <div class="col-xs-12 col-md-8">
          <nav class="navbar navbar-default">

            <div class="collapse navbar-collapse" id="collapse-menu">
              <ul class="nav navbar-nav">
                <li data-menuanchor="Home"><a href="#Home">HOME</a></li>
                <li data-menuanchor="Who"><a href="#Who">WHO WE ARE?</a></li>
                <li data-menuanchor="Service"><a href="#Service">SERVICE</a></li>
                <li data-menuanchor="Contact"><a href="#Contact">CONTACT US</a></li>
              </ul>
            </div><!-- Collapse -->

          </nav>
        </div>


      </div>
    </div>

  </div>

  <div class="container-fluid">
    <div id="fullpage">
