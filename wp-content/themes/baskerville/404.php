<?php get_header(); ?>

<div class="wrapper section medium-padding">

	<div class="section-inner">

		<div class="content center">
		
			<div class="post">
			
				<div class="post-header">
				        
		        	<h2 class="post-title"><?php _e('Error 404', 'baskerville'); ?></h2>
		        	
		        </div>
			                                                	            
		        <div class="post-content">
		        	            
		            <p><?php _e("La url que digitó no se encuentra asociada a nuestra página web. ", 'baskerville') ?></p>
		            <p><?php _e("Redireccionamos automáticamente al home del sitio. ", 'baskerville') ?></p>
		            <p>&nbsp;</p>
		            <p><?php _e("Gracias. ", 'baskerville') ?></p>
		            


		            <?php// get_search_form(); ?>
		            
		        </div> <!-- /post-content -->
		        
			</div> <!-- /post -->
		
		</div> <!-- /content -->
		
		<?php //  get_sidebar(); ?>
		
		<div class="clear"></div>
		
	</div> <!-- /section-inner -->

</div> <!-- /wrapper -->

<?php get_footer(); ?>


<script language="JavaScript" type="text/javascript">

var pagina="http://www.umayor.cl"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 4000);

</script>
