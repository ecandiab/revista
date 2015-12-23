<?php 

	get_header(); 
	
	
?>

<div class="wrapper section medium-padding">
										
	<div class="section-inner">
	
		<div class="content center">
												        
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
					<?php if ($format == 'quote' || $format == 'link' || $format == 'audio' || $format == 'status' || $format == 'chat') : ?>
					
						<?php if ( has_post_thumbnail() ) : ?>
					
							<div class="featured-media">
							
								<?php the_post_thumbnail('post-image'); ?>
								
								<?php if ( !empty(get_post(get_post_thumbnail_id())->post_excerpt) ) : ?>
												
									<div class="media-caption-container">
									
										<p class="media-caption"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></p>
										
									</div>
									
								<?php endif; ?>
										
							</div> <!-- /featured-media -->
						
						<?php endif; ?>
					
					<?php endif; ?>
				
					<div class="post-header">
						
					    <h1 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
					    
					</div> <!-- /post-header -->
					
					<?php if ($format == 'link') : ?> 
					
						<div class="post-link">
						
							<?php
							
								// Fetch post content
								$content = get_post_field( 'post_content', get_the_ID() );
								
								// Get content parts
								$content_parts = get_extended( $content );
								
								echo $content_parts['main']; 
							?>
						
						</div> <!-- /post-link -->
						
					<?php elseif ($format == 'quote') : ?> 
					
						<div class="post-quote">
							
							<?php
							
								// Fetch post content
								$content = get_post_field( 'post_content', get_the_ID() );
								
								// Get content parts
								$content_parts = get_extended( $content );
								
								echo $content_parts['main']; 
								
							?>

							
						</div>
						
					<?php elseif ($format == 'gallery') : ?> 
					
						<div class="featured-media">

							<?php baskerville_flexslider('post-image'); ?>
											
						</div> <!-- /featured-media -->
						
						
					<?php elseif ($format == 'video') : ?>
					
						<?php if ($pos=strpos($post->post_content, '<!--more-->')): ?>
						
							<div class="featured-media">
							
								<?php
										
									// Fetch post content
									$content = get_post_field( 'post_content', get_the_ID() );
									
									// Get content parts
									$content_parts = get_extended( $content );
									
									// oEmbed part before <!--more--> tag
									$embed_code = wp_oembed_get($content_parts['main']); 
									
									echo $embed_code;
								
								?>
							
							</div> <!-- /featured-media -->
						
						<?php endif; ?>
				
					<?php elseif ( has_post_thumbnail() ) : ?>
					
						<div class="featured-media">
						
							<?php the_post_thumbnail('post-image'); ?>
							
							<?php if ( !empty(get_post(get_post_thumbnail_id())->post_excerpt) ) : ?>
											
								<div class="media-caption-container">
								
									<p class="media-caption"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></p>
									
								</div>
								
							<?php endif; ?>
									
						</div> <!-- /featured-media -->
					
					<?php endif; ?>
														                                    	    
					<div class="post-content">
						
						<?php 
							if ($format == 'link' || $format == 'quote' || $format == 'video') { 
								$content = $content_parts['extended'];
								$content = apply_filters('the_content', $content);
								echo $content;
							} else {
								the_content();
							}
									            			            	                                                                                            
							wp_link_pages(); 
						?>
						
						<div class="clear"></div>
									        
					</div> <!-- /post-content -->

																		
					<?php// comments_template( '', true ); ?>
												                        
			   	<?php endwhile; else: ?>
			
					<p><?php _e("We couldn't find any posts that matched your query. Please try again.", "baskerville"); ?></p>
				
				<?php endif; ?>    
		
			</div> <!-- /post -->
		
		</div> <!-- /content -->
		
		<?php// get_sidebar(); ?>
		
		<div class="clear"></div>
		
	</div> <!-- /section-inner -->

</div> <!-- /wrapper -->
		
<?php get_footer(); ?>