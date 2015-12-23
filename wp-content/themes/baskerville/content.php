<div class="post-header">
<h2><p class="numero-post">&#9644; 01 &#9644;</p></h2>

<p>&nbsp;</p>
	
    <h2 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    
    <?php if( is_sticky() ) { ?> <span class="sticky-post"><?php _e('Sticky post', 'baskerville'); ?></span> <?php } ?>
    
</div> <!-- /post-header -->

<?php if ( has_post_thumbnail() ) : ?>

	<div class="featured-media">
	
		<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">
		
			<?php the_post_thumbnail('post-thumbnail'); ?>
			
		</a>
				
	</div> <!-- /featured-media -->
		
<?php endif; ?>
									                                    	    
<div class="post-excerpt">
	    		            			            	                                                                                            
	<?php the_excerpt('100'); ?>

</div> <!-- /post-excerpt -->

<?php// baskerville_meta(); ?>
            
<div class="clear"></div>