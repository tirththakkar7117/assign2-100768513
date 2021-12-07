<?php
/**
 * Template Name: Front Page Template
 *
*/
/**
 */

get_header();
?>

<main id="site-content" role="main">
    
	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content/content-page');
		}
		if( is_front_page() ) {

			custom_post_wp_query();
		
		}
	}
	

?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>