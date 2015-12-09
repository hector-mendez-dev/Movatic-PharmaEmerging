<?php get_header(); ?>

<?php
  $intro = strtoupper( get_field( 'intro' ) );
  $who_we_are = get_field( 'who_we_are' );
?>

    <div id="home-intro" class="section-row">
      <div class="section-cell">

        <div class="container-fluid">
          <div class="content">

            <div class="row">
              <div class="col-xs-12">
                <div>
                  <p><?php echo $intro; ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div><!-- section-table -->
</div><!-- section -->

<div id="who_we_are" class="section">
  <div class="container-fluid">
    <div class="menu_spacer"></div>

    <div class="intro content">
      <div class="row">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1">
          <div class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1">
              <h1>WHO WE ARE?</h1>
            </div>
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-7 col-lg-offset-3">
              <p class="ruler"></p>
              <p><?php echo $who_we_are; ?></p>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="alliance">
      <div class="row floating_panels">
        <div class="left col-xs-1 col-sm-2 col-lg-3">
        </div>
        <div class="right col-xs-3 col-xs-offset-9 col-sm-4 col-sm-offset-8 col-md-3 col-md-offset-9">
        </div>
      </div>
      <div class="content">
        <div class="row">
          <div class="col-xs-12 col-sm-10 col-sm-offset-1">
            <div class="row">
              <div class="col-xs-12">
                <h2>ALLIANCE</h2>
              </div>

              <?php
                $loop_benefit = new WP_Query( array(
                  'post_type' => 'benefit',
                  'posts_per_page' => -1,
                  'orderby' => 'menu_order',
                  'order' => 'ASC'
                ) );
              ?>
              <?php
                while ( $loop_benefit->have_posts() ) : $loop_benefit->the_post(); ?>
              <?php
                $benefit = get_field( 'benefit' );
              ?>

              <div class="col-xs-12 col-sm-6 col-lg-5 col-lg-offset-1">
                <div class="sh benefit">
                  <p class="ruler"></p>
                  <p><?php echo $benefit; ?></p>
                </div>
              </div>

              <?php endwhile; wp_reset_query(); ?>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="service_value">
      <div class="container-fluid">
        <div class="pic">
        </div>

        <div class="sv_items">
          <div class="row">
            <div class="col-xs-12">
              <div class="content">
                <h2>SERVICE AND ADDED VALUE</h2>
              </div>
            </div>
            <div class="col-xs-12">
              <div class="items_list">
                <div class="row">

              <?php
                $loop_sv_item = new WP_Query( array(
                  'post_type' => 'sv_item',
                  'posts_per_page' => -1,
                  'orderby' => 'menu_order',
                  'order' => 'ASC'
                ) );
              ?>
              <?php
                while ( $loop_sv_item->have_posts() ) : $loop_sv_item->the_post(); ?>
              <?php
                $sv_item_icon = get_field( 'sv_item_icon' );
                $sv_item_text = get_field( 'sv_item_text' );
              ?>

              <div class="col-xs-12 col-sm-6 col-lg-3">
                <div class="sh sv_item">
                  <div class="circle"></div>
                  <div class="content">
                    <div class="icon"
                      style="background-image: url(<?php echo $sv_item_icon; ?>); ">
                    </div>
                    <div class="text">
                      <p><?php echo $sv_item_text; ?></p>
                    </div>

                  </div>
                </div>
              </div>

              <?php endwhile; wp_reset_query(); ?>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<div id="service" class="section">

  <div class="service_products section-table">

    <div class="section-row">
      <div class="section-cell">

        <div class="container-fluid">
          <div class="menu_spacer"></div>

          <div class="row">
            <div class="col-xs-12">
              <div class="content">
                <h1>SERVICE PRODUCTS</h1>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div id="service-slider" class="section-row">
      <div class="section-cell">
        <div class="container-fluid">

          <div class="row">
            <div class="col-xs-12">
              <div id="slider">
                <div id="slider_index">
                  <div class="index slide_button" >•</div>
                </div>

                <div class="row">
                  <div class="col-xs-12">
                    <div class="wrapper">
                      <div class="row sp_slides">

      <?php
        $loop_slide = new WP_Query( array(
          'post_type' => 'slide',
          'posts_per_page' => -1,
          'orderby' => 'menu_order',
          'order' => 'ASC'
        ) );
      ?>
      <?php
        while ( $loop_slide->have_posts() ) : $loop_slide->the_post(); ?>
      <?php
        $title = get_field( 'title' );
        $content = get_field( 'content' );
      ?>

      <div class="col-xs-12 sp_slide">
        <div class="row">
          <div class="col-xs-12">
            <div class="content">
              <p class="title"><?php echo $title; ?></p>
              <div class="text"><?php echo $content; ?></div>
            </div>
          </div>
        </div>
      </div>

      <?php endwhile; wp_reset_query(); ?>

                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>

</div>

<div id="contact_us" class="section">
  <div class="contact">
    <div class="container-fluid">
      <div class="menu_spacer"></div>

      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <div class="contact">
            <div class="content">
              <div class="form">
                <?php
                  if( function_exists( 'ninja_forms_display_form' ) ) {
                    ninja_forms_display_form( 1 );
                  }
                ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6">
          <div class="data">
            <div class="row">
              <div class="col-xs-12">
                <div class="content">
                  <div class="card">

                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>

    </div>
  </div>

</div>



<?php get_footer(); ?>
