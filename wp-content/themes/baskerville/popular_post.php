<?php /* Template Name: CustomPageT1 */ ?>
<?php get_header(); ?>
<div class="wrapper section medium-padding">
    <?php
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $total_post_count = wp_count_posts();
    $published_post_count = $total_post_count->publish;
    $total_pages = ceil($published_post_count / $posts_per_page);
    ?>
    <div class="page-title section-inner">
            <h5>Popular Posts</h5>
            
        </div>       
        <div class="popular-post">															                    
        <?php if (have_posts()) : ?>
            <div class="posts" style="position: relative; height: 474.75px;">
                <?php while (have_posts()) : the_post(); ?>
                    <?php
                    wp_reset_postdata();
                    $args = array(
                        'title_by_words' => 1,
                        'title_length' => 25,
                        'thumbnail_width' => 550,
                        'excerpt_length' => 55,
                        'stats_category' => 1,
                        'stats_taxonomy' => 1,
                        'stats_date' => 1,
                        'stats_comments' => 1,
                        'post_html' => '
<div class="post-container" style="width:33.3%">
                            <div id="post-{pid}" class="post-{pid} post type-post status-publish format-standard hentry">
                                <div class="post-header">
      <div class="post-title" style="font-size:1.25em">                          
{title}
</div>
</div>
                                    <div class="featured-media wpp-image">{thumb}</div><br>
                                        <span class="wpp-meta post-stats" style="padding-left: 20px;">{stats}</span>						    				    		
                                            <div class="post-excerpt">
                                                <p>{summary}
                                                    <a class="more-link" href="{url}">Continue Reading →</a>                                                
                                                </p>
                                            </div>
                                    <div class="post-meta">
                        <a class="post-date" href="{url}">{date}</a>
                        <a href="{url}" class="post-comments">{comments}</a>
			<div class="clear"></div>
                                    </div>
                            </div>
                            <div class="clear"></div>
                        </div>'
                    );
                    wpp_get_mostpopular($args);
                    ?>
    <?php endwhile; ?>
            <?php endif; ?>
        </div><!-- .posts -->
    </div><!-- .content -->
<?php if ($wp_query->max_num_pages > 1) : ?>
        <div class="archive-nav section-inner">

            <div class="clear"></div>
        </div><!-- .post-nav archive-nav -->
<?php endif; ?>
         <div class="clear"></div>
</div><!-- .wrapper -->
<?php get_footer(); ?>