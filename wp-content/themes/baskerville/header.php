<!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>
		
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
						 
		<?php wp_head(); ?>
<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "3dd84062-df98-4881-ab41-c01f8d5114e7",
    });
  });
</script>
</head>
	
<body <?php body_class(); ?>>
<?php wd_slider(3); ?>
		<?php $background_image_url = get_header_image() ? get_header_image() : get_template_directory_uri() . '/images/header.jpg'; ?>
		
		<div class="navigation section no-padding bg-dark">
		
			<div class="navigation-inner section-inner">
			
				<div class="nav-toggle fleft hidden">
					
					<div class="bar"></div>
					<div class="bar"></div>
					<div class="bar"></div>
					
					<div class="clear"></div>
					
				</div>
						
				<ul class="main-menu">
				
					<?php 
					
					if ( has_nav_menu( 'primary' ) ) {

						$nav_args = array( 
							'container' 		=> '', 
							'items_wrap' 		=> '%3$s',
							'theme_location' 	=> 'primary', 
							'walker' 			=> new baskerville_nav_walker,
						);
																		
						wp_nav_menu( $nav_args ); 

					} else {

						$list_pages_args = array(
							'container' => '',
							'title_li' 	=> '',
						);
					
						wp_list_pages( $list_pages_args );
						
					} 
					
					?>
 <?php
if ( is_user_logged_in() ) {
echo '<li  class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children has-children"><a href="#" class="menu-image-title-after"><span class="menu-image-title">Your Profile</span></a>';
}else{
echo '<li  class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children has-children"><a href="#" class="menu-image-title-after"><span class="menu-image-title">Login/Register</span></a>';
}?>

<ul class="sub-menu">
    <?php
if ( is_user_logged_in() ) {
    echo '<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="http://localhost/wordpress/index.php/bookmark/"><span class="menu-image-title">BookMark</span></a></li>'; 
    echo '<li  class="menu-item menu-item-type-taxonomy menu-item-object-category "><a href="#" class="popmake-2349"><span class="menu-image-title">EditProfile</span></a></li>';
    echo '<li  class="menu-item menu-item-type-taxonomy menu-item-object-category "><a href="#" class="popmake-2380"><span class="menu-image-title">Invite Your Friends</span></a></li>';

    echo do_shortcode('[wppb-logout]');
} else {
    echo '<li  class="menu-item menu-item-type-taxonomy menu-item-object-category "><a href="#" class="popmake-2345"><span class="menu-image-title">Login</span></a></li>';
    echo '<li  class="menu-item menu-item-type-taxonomy menu-item-object-category "><a href="#" class="popmake-2347"><span class="menu-image-title">Register</span></a></li>';
}
?>

</ul>

				 </ul><!-- .main-menu -->
				 
				
                               
				 <div class="clear"></div>
				 
			</div><!-- .navigation-inner -->
			
		</div><!-- .navigation -->
		
		<div class="mobile-navigation section bg-graphite no-padding hidden">
			
			<ul class="mobile-menu">
			
				<?php

				if ( has_nav_menu( 'primary' ) ) {
																	
					wp_nav_menu( $nav_args ); 

				} else {
				
					wp_list_pages( $list_pages_args );
					
				} 
				
				?>
										
			 </ul><!-- .main-menu -->
		
                         
		</div><!-- .mobile-navigation -->
 
   
