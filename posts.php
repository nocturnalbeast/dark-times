<?php theme_include('header'); ?>

<hr>

<div class="content-wrapper bg-third padding-top">

    <?php if(has_posts()): ?>
    
        <?php posts(); ?>
        
            <div class="content">
      
            <p class="post-metadata">Written <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time> by <?php echo article_author('real_name'); ?></p>
      
            <a href="<?php echo article_url(); ?>"><h2 class="h2"><?php echo article_title(); ?></h2></a>
          
            <div class="post-content"><?php echo article_html(); ?></div>
      
            </div>
      
        <?php $i = 0; while(posts()): ?>
        
	    <?php $bg = sprintf('background: hsl(215, 28%%, %d%%);', round(((++$i / posts_per_page()) * 20) + 20)); ?>
	    
            <hr>
			
			<div class="content">
      
            <p class="post-metadata">Written <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time> by <?php echo article_author('real_name'); ?></p>
      
            <a href="<?php echo article_url(); ?>"><h2 class="h2"><?php echo article_title(); ?></h2></a>
          
            <div class="post-content"><?php echo article_html(); ?></div>
      
            </div>

        <?php endwhile; ?>   
                 
</div>
  
    <?php if(has_pagination()): ?>
  
    <div class="section-padding center pages pagination">
  
       <nav> 
   
           <item style="float:left;"><?php echo posts_next('← Newer'); ?></item>
           
           <item style="float:right;"><?php echo posts_prev('Prev →'); ?></item>
       
       </nav>
   
    </div>
  
    <?php endif; ?>

	    <?php else: ?>
	    
		    <p>Looks like you have some writing to do!</p>
		    
	    <?php endif; ?>
	
<?php theme_include('footer'); ?>