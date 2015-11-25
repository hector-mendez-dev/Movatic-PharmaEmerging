<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Magnolia Gift</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicons/favicon-32x32.png" sizes="32x32">
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="0" />


  <!-- Le styles -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/fullPage/2.6.6/jquery.fullPage.min.css" rel="stylesheet">
  <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

  <?php wp_head(); ?>

</head>
<body>

  <div id="navbar">
      <div class="container">

        <div class="social_networks">
          <a href="<?php the_field('twitter', 30 );?>" target="_blank"
          style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/redes/twitter_logo_blanco.svg );">
          </a>
          <a href="<?php the_field('instagram', 30 );?>" target="_blank"
          style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/redes/instagram_logo_blanco.svg );">
          </a>
          <a href="<?php the_field('facebook', 30 );?>" target="_blank"
          style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/redes/facebook_logo_blanco.svg );">
          </a>
        </div>




        <div class="row">
          <div class="col-xs-12">
              <nav class="navbar navbar-default">

                      <div class="collapse navbar-collapse" id="collapse-menu">
                        <ul class="nav navbar-nav">
                          <li id="que_ofrecemos"><a href="<?php echo esc_url( home_url('/')) ?>">HOME</a></li>
                          <li id="catalogo"><a href="<?php echo get_page_link(50); ?>">WHO WE ARE?</a></li>
                          <li id="como_pedir"><a href="<?php echo get_page_link(10); ?>">SERVICE</a></li>
                          <li id="hacer_pedido"><a href="<?php echo get_page_link(113); ?>">CONTACT US</a></li>
                        </ul>
                      </div><!-- Collapse -->


                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-menu">
                    <span class="sr-only">toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>

              </nav>
            </div>

          </div>
        </div>
      </div>

  <div class="container">
    <div id="fullpage">
