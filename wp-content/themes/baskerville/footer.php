<div class="footer section medium-padding bg-graphite">
	
	<div class="section-inner row customfooterwidth">
	
		<?php if ( is_active_sidebar( 'footer-a' ) ) : ?>
		
			<div class="column column-1 one-third">
			
				<div class="widgets">
		
					<?php dynamic_sidebar( 'footer-a' ); ?>
										
				</div>
				
			</div><!-- .column-1 -->
			
		<?php else : ?>
		
			<div class="column column-1 one-third">
			
				<div class="widgets">
			
					<div id="search" class="widget widget_search">
					
						<div class="widget-content">
						
							<h3 class="widget-title"><?php _e( 'Search form', 'baskerville' ); ?></h3>
			                <?php get_search_form(); ?>
			                
						</div>
						
	                </div>
									
				</div>
				
			</div><!-- .column-1 -->
			
		<?php endif; ?>
			
		<?php if ( is_active_sidebar( 'footer-b' ) ) : ?>
		
			<div class="column column-2 one-third">
			
				<div class="widgets">
		
					<?php dynamic_sidebar( 'footer-b' ); ?>
										
				</div><!-- .widgets -->
				
			</div><!-- .column-2 -->
			
		<?php else : ?>
		
			<div class="column column-2 one-third">
			
				<div class="widgets">
				
					<div class="widget widget_recent_entries">
					
						<div class="widget-content">
						
							<h3 class="widget-title"><?php _e( 'Latest posts', 'baskerville' ); ?></h3>
							
							<ul>
				                <?php
									$args = array( 
										'numberposts' => '5', 
										'post_status' => 'publish' 
									);
									$recent_posts = wp_get_recent_posts( $args );
									foreach( $recent_posts as $recent ){
										echo '<li><a href="' . get_permalink( $recent["ID"] ) . '" title="' . esc_attr( $recent["post_title"] ) . '" >' .  $recent["post_title"] . '</a></li>';
									}
								?>
							</ul>
			                
						</div>
						
	                </div>
									
				</div><!-- .widgets -->
				
			</div><!-- .column-2 -->
			
		<?php endif; ?>
							
		<?php if ( is_active_sidebar( 'footer-c' ) ) : ?>
		
			<div class="column column-3 one-third">
		
				<div class="widgets">
		
					<?php dynamic_sidebar( 'footer-c' ); ?>
										
				</div><!-- .widgets -->
				
			</div>
			
		<?php else : ?>
		
			<div class="column column-3 one-third">
			
				<div id="meta" class="widget widget_text">

					<div class="widget-content">
					
						<h3 class="widget-title"><?php _e( "Text widget", "baskerville" ); ?></h3>
						<p><?php _e( "These widgets are displayed because you haven't added any widgets of your own yet. You can do so at Appearance > Widgets in the WordPress settings.", "baskerville" ); ?></p>
		                
					</div>

                </div>
								
			</div>
			
		<?php endif; ?><!-- .footer-c -->
		
		<div class="clear"></div>
	
	</div><!-- .footer-inner -->

</div><!-- .footer -->

<div class="credits section bg-dark-footer small-padding">

	<div class="credits-inner section-inner">

		<p class="credits-left fleft">
		
			&copy; <?php echo date("Y") ?> <a href="<?php echo home_url(); ?>" title="coderzone">CoderZone</a>
		
		</p>
                <div style="text-align: center">
<a href="https://twitter.com/CoderZone3" style="text-decoration: none" class="footera">
<img title="Twitter" alt="Twitter" src="https://socialmediawidgets.files.wordpress.com/2014/03/01_twitter.png" width="55" height="35" />
</a>
<a href="https://www.pinterest.com/alaametwally48/code-zone/" style="text-decoration: none">
<img title="Pinterest" alt="Pinterest" src="https://socialmediawidgets.files.wordpress.com/2014/03/13_pinterest.png" width="55" height="35" />
</a>
<a href="https://www.facebook.com/groups/1520522838076686/" style="text-decoration: none">
<img title="Facebook" alt="Facebook" src="https://socialmediawidgets.files.wordpress.com/2014/03/02_facebook.png" width="55" height="35" />
</a>
<a href="https://www.linkedin.com/in/coder-zone-news-bb5568164/" style="text-decoration: none">
<img title="LinkedIn" alt="LinkedIn" src="https://socialmediawidgets.files.wordpress.com/2014/03/07_linkedin.png" width="55" height="35" />
</a>
<a href="https://www.instagram.com/coderzone3/?hl=en" style="text-decoration: none">
<img title="Instagram" alt="RSS" src="https://socialmediawidgets.files.wordpress.com/2014/03/10_instagram.png" width="55" height="35" />
</a>


	<p class="credits-right fright">
			
<a class="tothetop" title="<?php _e( 'To the top', 'baskerville' ); ?>" href="#"><?php _e( 'Up', 'baskerville' ); ?> &uarr;</a>
			
		</p>
</div>
	
		
		<div class="clear"></div>
	
	</div><!-- .credits-inner -->
	
</div><!-- .credits -->

<?php wp_footer(); ?>
<script>
window.addEventListener("load", function () {
    setTimeout(function myFunction(){
  document.getElementsByClassName("shr-badge__button")[0].remove();
}, 5000);
}, false);
</script>
</body>
</html>