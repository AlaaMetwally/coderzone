<div class="post-header">
	<?php if ( get_the_title() ) : ?>
		
		<h2 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

	<?php endif; ?>
    
    <?php if ( is_sticky() ) echo '<span class="sticky-post">' . __( 'Sticky post', 'baskerville' ) . '</span>'; ?>
    
</div><!-- .post-header -->

<?php if ( has_post_thumbnail() ) : ?>

	<div class="featured-media">
	
		<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
		
			<?php the_post_thumbnail( 'post-thumbnail' ); ?>
			
		</a>
				
	</div><!-- .featured-media -->
      		<?php else : ?>
        <div class="featured-media">
	
		<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                    <img src="<?php echo get_site_url();?>/wp-content/themes/baskerville/logo.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" width="600" height="399">
			
		</a>
				
	</div><!-- .featured-media -->
<?php endif; ?>
									                                    	    
<div class="post-excerpt">
    
	<?php the_excerpt( 100 ); ?>

</div><!-- .post-excerpt -->

<?php baskerville_meta(); ?>
            
<div class="clear"></div>