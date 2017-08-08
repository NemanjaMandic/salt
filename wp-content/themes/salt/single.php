<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package salt
 */

get_header(); ?>
<?php $id = get_the_ID() % 2 == 0 ? 'even' : 'odd'; ?>
	<div id="primary" class="content-area">
		<main id="main-<?php echo $id ?>" class="site-main">
	
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );

		

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
          <section id="monkey">
          	
      <?php
		  if($id == "even"){ ?>
		  
 	  <div class="monkey-stuff">
			    <h2>Hebt u interesse en wilt u meer informatie? Aarzel niet om ons te contacteren.</h2>
			 		<p><a href="#"><strong>T +32 (0)50 53 93 96 </strong></a>  voor een afspraak of meer info <a href="#"><strong>info@salt-projects.be</strong></a> over onze projecten.</p>
			
           <?php
			   // echo $gallery;
			}else{
				echo "<h1>Da, al karinu </h1>";
			} ?>
	</div>
</section>
<div class="subscribe">
          	
    <?php echo do_shortcode('[mc4wp_form id="60"]'); ?>
          	
</div>

		</main><!-- #main -->
		<div class="nav-links">
			<div class="nav-previous child">
				<?php previous_post_link('<strong><span class="hover-left">%link</span></strong>'); ?>
			</div>
			<div class="nav-next child">
				 <?php next_post_link('<strong><span class="hover-right">%link</span></strong>'); ?>
			</div>
			   
		</div>
		 
		
	</div><!-- #primary -->
 
<?php
//get_sidebar();
get_footer();
