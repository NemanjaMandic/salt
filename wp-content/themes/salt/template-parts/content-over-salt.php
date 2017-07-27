 <?php 
    query_posts("page_id=11");
    while ( have_posts() ) : the_post()
?>
<div class="over-salt">
<div class="over-salt-image">
     <?php the_post_thumbnail(); ?>
</div>
<div class="over-salt-text">
  <h1><a href="<?php echo the_permalink(); ?>"><?php echo get_the_title(); ?></a></h1>
    
    <?php the_excerpt(); ?> 
</div>
 </div>   

	<p class="subtitle oversalt-fancy"><span>design. build. live.</span></p>
<?php
    endwhile; 
    wp_reset_query();
?> 