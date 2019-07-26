<?php
/*
 * Template Name: My Custom Child Theme
 */
?>
<?php get_header('custom'); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) :
        the_post();
        
          if ( comments_open() || get_comments_number() ) :
              comments_template();
          endif;

			endwhile; 
			?>

		</main>
	</section>
<?php
get_footer('custom');
