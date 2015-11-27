<?php get_header(); ?>

<?php
  $intro = get_field( 'intro' );
?>

<div class="section intro">
  <div class="row">
    <div class="col-xs-6 col-xs-offset-3">
      <img class="img-responsive"
          src="<?php// echo get_template_directory_uri(); ?>/assets/img/que_ofrecemos/que_ofrecemos.svg"  alt="¿Qué ofrecemos?">
    </div>
    <div class="col-xs-10 col-xs-offset-1">
      <p><?php //echo get_field('que_ofrecemos'); ?></p>
    </div>
  </div>
</div>


<?php get_footer(); ?>
