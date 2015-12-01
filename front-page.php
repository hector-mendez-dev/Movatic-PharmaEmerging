<?php get_header(); ?>

<?php
  $intro = strtoupper( get_field( 'intro' ) );
?>

    <div id="intro" class="section-row">
      <div class="section-cell">

        <div class="content">
          <div class="container-fluid">

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

  <div class="row">
    <div class="col-xs-12">

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
