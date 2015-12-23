<!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>
		
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
																		
		<title><?php wp_title('|', true, 'right'); ?></title>
				
		<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>

		 
		<?php wp_head(); ?>

	
	</head>
	
	<body <?php body_class(); ?>>
	<!-- inicio cabecera-->
<div class="cont-header">
<div class="header1">

    <div class="inicio-info">
<!--          <div class="ini-mapa"><div class="inicio"><a href="http://www.umayor.cl/um/" title="Inicio">Inicio</a></div><div class="mapa"><a href="http://www.umayor.cl/um/mapa-de-sitio-home" title="Mapa de Sitio">Mapa de Sitio</a></div></div>
 -->        <div class="inicio-form">    
        <div class="informaciones"><img src="http://www.umayor.cl/um/images/sedeSantiago2014/informaciones-6003281000.jpg" alt="Informaciones 600 328 1000"></div>
        <div class="form-online"><a href="http://www.umayor.cl/serviciodeatencion" target="_blank"><img src="http://www.umayor.cl/um/images/sedeSantiago2014/formulario-online.jpg" alt="Formulario Online"></a></div>
        </div>
    </div>

    <div class="logo-buscador">
      <h1><a href="http://www.umayor.cl/"><img src="http://www.umayor.cl/facultad-derecho/wp-content/themes/postgrados-mayor/images/logo-universidad-mayor.png"  alt="Universidad Mayor" title="Universidad Mayor"></a></h1>
    </div>
    </div>
    </div>
 <!-- fin cabecera-->
	
		<div class="header section small-padding bg-dark bg-image" style="background-image: url(<?php if (get_header_image() != '') : ?><?php header_image(); ?><?php else : ?><?php echo get_template_directory_uri() . '/images/header.jpg'; ?><?php endif; ?>);">
		
			<div class="cover"></div>
			
			<div class="header-search-block bg-graphite hidden">
			
				<?php get_search_form(); ?>
			
			</div> <!-- /header-search-block -->
					
			<div class="header-inner section-inner">
			
				<?php if ( get_theme_mod( 'baskerville_logo' ) ) : ?>
				
					<div class="blog-logo">
					
				        <a class="logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>' rel='home'>
				        	<img src='<?php echo esc_url( get_theme_mod( 'baskerville_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'title' ) ); ?>'>
				        </a>
			        
					</div>
			
				<?php elseif ( get_bloginfo( 'description' ) || get_bloginfo( 'title' ) ) : ?>
								
						<h1 class="blog-title">
							<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'title' ) ); ?></a>
						</h1>
						
						<?php if ( get_bloginfo( 'description' ) ) { ?>
						
							<h3 class="blog-description"><?php echo esc_attr( get_bloginfo( 'description' ) ); ?></h3>
							
						<?php } ?>
										
				<?php endif; ?>
							
			</div> <!-- /header-inner -->
						
		</div> <!-- /header -->
		
		<div class="navigation section no-padding bg-dark">
		
			<div class="navigation-inner section-inner">
			
				<div class="nav-toggle fleft hidden">
					
					<div class="bar"></div>
					<div class="bar"></div>
					<div class="bar"></div>
					
					<div class="clear"></div>
					
				</div>
						
				<ul class="main-menu">
				
					<?php if ( has_nav_menu( 'primary' ) ) {
																		
						wp_nav_menu( array( 
						
							'container' => '', 
							'items_wrap' => '%3$s',
							'theme_location' => 'primary', 
							'walker' => new baskerville_nav_walker
														
						) ); } else {
					
						wp_list_pages( array(
						
							'container' => '',
							'title_li' => ''
						
						));
						
					} ?>
											
				 </ul> <!-- /main-menu -->
				 
				 <a class="search-toggle fright" href="#"></a>
				 
				 <div class="clear"></div>
				 
			</div> <!-- /navigation-inner -->
			
		</div> <!-- /navigation -->
		
		<div class="mobile-navigation section bg-graphite no-padding hidden">
					
			<ul class="mobile-menu">
			
				<?php if ( has_nav_menu( 'primary' ) ) {
																	
					wp_nav_menu( array( 
					
						'container' => '', 
						'items_wrap' => '%3$s',
						'theme_location' => 'primary', 
						'walker' => new baskerville_nav_walker
													
					) ); } else {
				
					wp_list_pages( array(
					
						'container' => '',
						'title_li' => ''
					
					));
					
				} ?>
										
			 </ul> <!-- /main-menu -->
		
		</div> <!-- /mobile-navigation -->