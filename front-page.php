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
                $loop = new WP_Query( array(
                  'post_type' => 'benefit',
                  'posts_per_page' => -1,
                  'orderby' => 'menu_order',
                  'order' => 'ASC'
                ) );
              ?>
              <?php
                while ( $loop->have_posts() ) : $loop->the_post(); ?>
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

  </div>
</div>

<div id="service" class="section">

  <div class="row">
    <div class="col-xs-12">

    </div>
  </div>

</div>

<div id="contact_us" class="section">

  <div class="row">
    <div class="col-xs-12">

    </div>
  </div>

</div>



<?php get_footer(); ?>
