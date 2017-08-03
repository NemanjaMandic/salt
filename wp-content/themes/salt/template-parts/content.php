<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package salt
 */

?>
 <?php $id = get_the_ID() % 2 == 0 ? 'even-blog' : 'odd-blog'; ?>

<article id="post-<?php echo $id; ?>" <?php post_class(); ?>>
	<header class="entry-header">
		
	
	 <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title( '<h1 class="entry-title">',' </h1>' ); ?></a>
	 <span class="entry-date"><?php echo get_the_date(); ?></span>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="post-text-wrapper">
			<?php the_excerpt(); ?>
		</div>
          <?php if(has_post_thumbnail()): ?>
           <div class="post-image-wrapper">
           	<?php the_post_thumbnail('medium_large' ); ?> 
           </div>
           
           <?php
           endif;
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'salt' ),
				'after'  => '</div>',
			) );
		?>
		
		
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'salt' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
