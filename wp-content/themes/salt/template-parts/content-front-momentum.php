<section id="momentum">
    <div class="momentum-image">
    <?php 
      
    if(has_post_thumbnail()): ?>
                   <?php the_post_thumbnail(); ?>
   </div>
   <?php endif; ?>
   
      <p class="subtitle fancy"><span>te koop</span></p>
      <div class="momentum-resize">
     <div class="momentum-text-wraper">
        
         <div class="momentum-text-heading">
             <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
         </div>
         <div class="momentum-text">
             <?php the_excerpt(); ?>
         </div>
       
      </div> 
      </div>
     
</section>