    </div>
  </div> <!-- /container -->

	<div id="footer">
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
    </div>
	</div>


    <?php wp_footer(); ?>
    <?php wp_enqueue_script("jquery"); ?>

  </body>
</html>
