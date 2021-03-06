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
  <div id="mask" onclick="toogleMenu();"></div>
  </div>

    <div id="home" class="section">

        <div id="header">

            <div class="container-fluid">
              <div class="content">
                <div class="row">

                  <div class="col-xs-10 col-xs-offset-1 col-sm-5 col-sm-offset-0 col-md-4">
                    <div id="logo">
                      <a class="brand" title="PHARMA EMERGING" href="#home"
                      style="background-image: url( <?php echo get_template_directory_uri(); ?>/assets/img/pharma_emerging/logo.svg );">
                      </a>
                    </div>
                  </div>

                  <div class="col-xs-10 col-xs-offset-1 col-sm-7 col-sm-offset-0 col-md-8">
                    <div class="row buttons social_networks">

                      <div class="col-xs-3 col-sm-6 col-md-6 button_item">
                        <button type="button" onclick="toogleMenu();">
                          <span class="sr-only">toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                      </div>
                      <div class="col-xs-3 col-sm-2 col-md-2 button_item">
                        <a href="<?php the_field('twitter', 47 );?>" target="_blank">
                          <div style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/social_networks/twitter.svg );">
                          </div>
                        </a>
                      </div>
                      <div class="col-xs-3 col-sm-2 col-md-2 button_item">
                        <a href="<?php the_field('linkedin', 47 );?>" target="_blank">
                          <div style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/social_networks/linkedin.svg );">
                          </div>
                        </a>
                      </div>
                      <div class="col-xs-3 col-sm-2 col-md-2 button_item">
                        <a href="<?php the_field('facebook', 47 );?>" target="_blank">
                          <div style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/social_networks/facebook.svg );">
                          </div>
                        </a>
                      </div>

                    </div>
                  </div>

                  <div class="nav-col col-xs-12 col-md-8">
                    <nav class="navbar navbar-default">

                      <div class="" id="transition-menu">
                        <ul id="menu" class="nav navbar-nav">
                          <li>
                            <a href="#home" onclick="toogleMenu();">HOME</a></li>
                          <li>
                            <a href="#who_we_are" onclick="toogleMenu();">WHO WE ARE?</a></li>
                          <li>
                            <a href="#service" onclick="toogleMenu();">SERVICE</a></li>
                          <li>
                            <a href="#contact_us" onclick="toogleMenu();">CONTACT US</a></li>
                        </ul>
                      </div>
                      <!-- Collapse -->

                    </nav>
                  </div>


                </div>
              </div>
            </div>
          </div>
