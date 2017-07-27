<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package salt
 */

get_header(); ?>

<main id="main" class="site-main">
	<div id="front-page" class="content-area">
       <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
		<?php
		$query = new WP_Query('category_name=front-page&posts_per_page=1');
		
		if ( have_posts() ) :

			if ( is_home() && is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;
    

			/* Start the Loop */
			
			while ( $query->have_posts() ) : $query->the_post();
               
           	    get_template_part( 'template-parts/content', 'front-momentum' );
			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

	</div><!-- #primary -->
	<section id="below">
		
	</section>
	<section id="spice">
			<?php
		$spaceQuery = new WP_Query('category_name=space&posts_per_page=1');
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;


			/* Start the Loop */
			
			while ( $spaceQuery->have_posts() ) : $spaceQuery->the_post();
               
           	    get_template_part( 'template-parts/content', 'space' );
			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

	</section>
	<section id="under-spice">
		<?php echo do_shortcode('[advps-slideshow optset="3"]'); ?>
		<p class="subtitle space-fancy"><span>Salt kijkappartement</span></p>
	</section>
	<section id="over-salt">
		

           <?php get_template_part( 'template-parts/content', 'over-salt' ); ?>

          <div class="subscribe">
          	
          	<?php echo do_shortcode('[mc4wp_form id="60"]'); ?>
          	
          </div>
	</section>
 </main><!-- #main -->

<?php




get_footer();
