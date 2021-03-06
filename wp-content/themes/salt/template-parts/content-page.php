<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package salt
 */

?>
<?php
 $id = get_the_ID() % 2 == 0 ? 'even' : 'odd'; ?>
	
<article id="post-<?php echo $id ?>" <?php post_class(); ?>>
	<?php
            $gallery = get_post_gallery();
            $content = strip_shortcode_gallery( get_the_content() );                                        
            $content = str_replace( ']]>', ']]&gt;', apply_filters( 'the_content', $content ) ); 
    ?>


        
	<header class="entry-header">
	  <?php	if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="image-wraper">
			<p class="subtitle fancy"><span>te koop</span></p>
		<?php
	      	
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					the_post_thumbnail( 'full' );
				}
		?>
		</div>
		<div class="salt-content">
		<div id="content">
            <?php echo $content; ?>
        </div> <!-- id="content" -->

        <div id="gallery">
            <?php echo $gallery; ?>
        </div> <!-- id="gallery" -->
		  </div>
		 
		 
		  <?php
          
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'salt' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
   
	<footer class="entry-footer">
	  	<?php salt_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->


