 <div class="space-wraper">
<div class="images-wraper">
 <div class="first-space-image">
    <?php 
      
    if(has_post_thumbnail()): ?>
         <?php the_post_thumbnail(); ?>
   </div>
   <?php endif; ?>
   <div class="second-space-image">
          <?php if (class_exists('MultiPostThumbnails')) : 
    
            MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image');
            
            endif;
        ?>
   </div>
   </div><!--images-wraper-->
      
      
     <div class="space-text-wraper">
         <div class="space-text-heading">
             <div class="space-h2">
              <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
             </div>
         </div>
         <div class="space-text">
             <?php the_excerpt(); ?>
         </div>
       
      </div> 
</div>
<p class="subtitle fancy-white"><span>Salt kijkappartement</span></p>