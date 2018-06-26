<?php get_header(); ?>

<div class=" medium-padding">

	<div class="page-title section-inner">
		
		<?php if ( is_day() ) : ?>
			<h5><?php _e( 'Date', 'baskerville' ); ?></h5> <h3><?php echo get_the_date(); ?></h3>

		<?php elseif ( is_month() ) : ?>
			<h5><?php _e( 'Month', 'baskerville' ); ?></h5> <h3><?php echo get_the_date('F Y'); ?></h3>

		<?php elseif ( is_year() ) : ?>
			<h5><?php _e( 'Year', 'baskerville' ); ?></h5> <h3><?php echo get_the_date('Y'); ?></h3>

		<?php elseif ( is_category() ) : ?>
        <div class="subscribe">
    <?php 
if (is_category(4))  //android
{ ?>
<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
#mc_embed_signup {
    clear:left; 
    font:14px Helvetica,Arial,sans-serif;
    background: #fdfdfd;
    padding-left: 2%;
    
}
#mc_embed_signup input.button {
    display: block;
    width: 35%;
    margin: 0 0 10px 0;
    min-width: 90px;
    background: #7fd3d7;
    width:10%;
}
#mc_embed_signup input.email {
    width: 35%;
}
#mc_embed_signup .button:hover {
    background: #51c3c6;
}
#mc_embed_signup label {
    color: #e0972f;
}
</style>
<div id="mc_embed_signup">
<form action="https://news.us18.list-manage.com/subscribe/post?u=def84adea808281e1abf7c756&amp;id=b94c1dbf68" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<label for="mce-EMAIL">Subscribe to our mailing list</label>
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_def84adea808281e1abf7c756_b94c1dbf68" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->
<?php } ?>



<?php 
if (is_category(5))  //ios
{ ?>

<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
#mc_embed_signup {
    clear:left; 
    font:14px Helvetica,Arial,sans-serif;
    background: #fdfdfd;
    padding-left: 2%;
   
}
#mc_embed_signup input.button {
    display: block;
    width: 35%;
    margin: 0 0 10px 0;
    min-width: 90px;
    background: #7fd3d7;
    width:10%;
}
#mc_embed_signup input.email {
    width: 35%;
}
#mc_embed_signup .button:hover {
    background: #51c3c6;
}
#mc_embed_signup label {
    color: #e0972f;
}
</style>
<div id="mc_embed_signup">
<form action="https://news.us18.list-manage.com/subscribe/post?u=def84adea808281e1abf7c756&amp;id=f811a3c880" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<label for="mce-EMAIL">Subscribe to our mailing list</label>
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_def84adea808281e1abf7c756_f811a3c880" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->


<?php } ?>



<?php 
if (is_category(12))  // bash Scripting 
{ ?>

<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
#mc_embed_signup {
    clear:left; 
    font:14px Helvetica,Arial,sans-serif;
    background: #fdfdfd;
    padding-left: 2%;
    
}
#mc_embed_signup input.button {
    display: block;
    width: 35%;
    margin: 0 0 10px 0;
    min-width: 90px;
    background: #7fd3d7;
    width:10%;
}
#mc_embed_signup input.email {
    width: 35%;
}
#mc_embed_signup .button:hover {
    background: #51c3c6;
}
#mc_embed_signup label {
    color: #e0972f;
}
</style>
<div id="mc_embed_signup">
<form action="https://news.us18.list-manage.com/subscribe/post?u=def84adea808281e1abf7c756&amp;id=97953fadc7" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<label for="mce-EMAIL">Subscribe to our mailing list</label>
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_def84adea808281e1abf7c756_97953fadc7" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->


<?php } ?>

<?php
if (is_category(11))  // redhat 
{ ?>

<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
#mc_embed_signup {
    clear:left; 
    font:14px Helvetica,Arial,sans-serif;
    background: #fdfdfd;
    padding-left: 2%;
    
}
#mc_embed_signup input.button {
    display: block;
    width: 35%;
    margin: 0 0 10px 0;
    min-width: 90px;
    background: #7fd3d7;
    width:10%;
}
#mc_embed_signup input.email {
    width: 35%;
}
#mc_embed_signup .button:hover {
    background: #51c3c6;
}
#mc_embed_signup label {
    color: #e0972f;
}
</style>
<div id="mc_embed_signup">
<form action="https://news.us18.list-manage.com/subscribe/post?u=def84adea808281e1abf7c756&amp;id=413b7047e2" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<label for="mce-EMAIL">Subscribe to our mailing list</label>
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_def84adea808281e1abf7c756_413b7047e2" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->

<?php } ?>


<?php
if (is_category(6))  // js & angular 
{ ?>


<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
#mc_embed_signup {
    clear:left; 
    font:14px Helvetica,Arial,sans-serif;
    background: #fdfdfd;
    padding-left: 2%;
    
}
#mc_embed_signup input.button {
    display: block;
    width: 35%;
    margin: 0 0 10px 0;
    min-width: 90px;
    background: #7fd3d7;
    width:10%;
}
#mc_embed_signup input.email {
    width: 35%;
}
#mc_embed_signup .button:hover {
    background: #51c3c6;
}
#mc_embed_signup label {
    color: #e0972f;
}
</style>
<div id="mc_embed_signup">
<form action="https://news.us18.list-manage.com/subscribe/post?u=def84adea808281e1abf7c756&amp;id=d96928eb94" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<label for="mce-EMAIL">Subscribe to our mailing list</label>
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_def84adea808281e1abf7c756_d96928eb94" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->

<?php } ?>



<?php
if (is_category(13))  // php & laravel
{ ?>

<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
#mc_embed_signup {
    clear:left; 
    font:14px Helvetica,Arial,sans-serif;
    background: #fdfdfd;
    padding-left: 2%;
    
}
#mc_embed_signup input.button {
    display: block;
    width: 35%;
    margin: 0 0 10px 0;
    min-width: 90px;
    background: #7fd3d7;
    width:10%;
}
#mc_embed_signup input.email {
    width: 35%;
}
#mc_embed_signup .button:hover {
    background: #51c3c6;
}
#mc_embed_signup label {
    color: #e0972f;
}
</style>
<div id="mc_embed_signup">
<form action="https://news.us18.list-manage.com/subscribe/post?u=def84adea808281e1abf7c756&amp;id=6507701799" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<label for="mce-EMAIL">Subscribe to our mailing list</label>
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_def84adea808281e1abf7c756_6507701799" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->


<?php } ?>



<?php
if (is_category(7))  // python & django
{ ?>


<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
#mc_embed_signup {
    clear:left; 
    font:14px Helvetica,Arial,sans-serif;
    background: #fdfdfd;
    padding-left: 2%;
   
}
#mc_embed_signup input.button {
    display: block;
    width: 35%;
    margin: 0 0 10px 0;
    min-width: 90px;
    background: #7fd3d7;
    width:10%;
}
#mc_embed_signup input.email {
    width: 35%;
}
#mc_embed_signup .button:hover {
    background: #51c3c6;
}
#mc_embed_signup label {
    color: #e0972f;
}
</style>
<div id="mc_embed_signup">
<form action="https://news.us18.list-manage.com/subscribe/post?u=def84adea808281e1abf7c756&amp;id=719f03ce5a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<label for="mce-EMAIL">Subscribe to our mailing list</label>
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_def84adea808281e1abf7c756_719f03ce5a" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->


<?php } ?>

                  </div> 
		 <h3><?php echo single_cat_title( '', false ); ?></h3>

                       
		<?php elseif ( is_tag() ) : ?>
			<h5><?php _e( 'Tag', 'baskerville' ); ?></h5> <h3><?php echo single_tag_title( '', false ); ?></h3>

		<?php elseif ( is_author() ) : ?>
			<?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); ?>
			<h5><?php _e( 'Author', 'baskerville' ); ?></h5> <h3><?php echo $curauth->display_name; ?></h3>

		<?php else : ?>
			<h5><?php _e( 'Archive', 'baskerville' ); ?></h5>

		<?php endif;

		$tag_description = tag_description();

		if ( ! empty( $tag_description ) ) {
			echo apply_filters( 'tag_archive_meta', '<div class="tag-archive-meta">' . $tag_description . '</div>' );
		}

		?>
		
	</div><!-- .page-title -->
	
	<div class="content section-inner">
           
		<?php if ( have_posts() ) : ?>
	
<div class="posts">
			
				<?php while ( have_posts() ) : the_post(); ?>
				
<div class="post-container" style="width:33.3%">
				
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
							<?php get_template_part( 'content', get_post_format() ); ?>
							
							<div class="clear"></div>
							
						</div><!-- .post -->
					
					</div>
					
				<?php endwhile; ?>
							
			</div><!-- .posts -->
						
				<?php if(function_exists('wp_paginate')) {
				     wp_paginate('range=1&anchor=2&nextpage=Next&previouspage=Previous');

} ?>
					
		<?php endif; ?>
	</div><!-- .content -->

</div><!-- .wrapper -->

<?php get_footer(); ?>