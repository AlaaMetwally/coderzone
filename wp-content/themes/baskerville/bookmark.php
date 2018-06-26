<?php /* Template Name: bookmark */ ?>

<?php if ( is_user_logged_in() ) { ?>

<?php get_header(); ?>

<div class="wrapper section medium-padding">
 					
	<div class="section-inner">
		<div class="content center">
            
				<div class="post">
					<div class="post-header">
                                            				
					    <?php the_title( '<h1 class="post-title" style="margin-top:50px">', '</h1>' ); ?>
                                            	    
				    </div><!-- .post-header -->
                                    <div style="margin:30px 30px;">
                                    <?php the_clear_favorites_button($site_id, $text); ?></div>
			<?php
the_user_favorites_list($user_id, $site_id, $include_links = true,
$filters = true, $include_button = true,
$include_thumbnails = true, $thumbnail_size = 'thumbnail',
$include_excerpt = true);
?>								
				</div><!-- .featured-media -->
			<div class="clear"></div>
			
		</div><!-- .content -->
			
		
		<div class="clear"></div>
	
	</div><!-- .section-inner -->

</div><!-- .wrapper -->
								
<?php get_footer(); ?>

<?php }else{ header("Location: http://localhost/wordpress");
} ?>


