<?php get_header(); ?>

   
<div class="wrapper section medium-padding">

	<?php
	$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
	$total_post_count = wp_count_posts();
	$published_post_count = $total_post_count->publish;
	$total_pages = ceil( $published_post_count / $posts_per_page );
	
	if ( 1 < $paged ) : ?>

		
		<div class="clear"></div>
	
	<?php endif; ?>

	<div class="content section-inner">
         
		<?php get_sidebar(); ?>																                    
		<?php if ( have_posts() ) : ?>
		
			<div class="posts" style="width:70%">
					
		    	<?php while ( have_posts() ) : the_post(); ?>
		    	
		    		<div class="post-container">
		    	
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			    	
				    		<?php get_template_part( 'content', get_post_format() ); ?>
				    				    		
			    		</div><!-- .post -->
		    		
		    		</div>
		    			        		            
		        <?php endwhile; ?>
	        	                    
			<?php endif; ?>
			
		</div><!-- .posts -->
							<?php if(function_exists('wp_paginate')) {
  wp_paginate('range=1&anchor=2&nextpage=Next&previouspage=Previous');
} ?>
	
	</div><!-- .content -->
	
			
	<div class="clear"></div>

</div><!-- .wrapper -->
<?php get_footer(); ?>