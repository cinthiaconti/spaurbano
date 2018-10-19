<?php get_header(); ?>


	<div class='quadradinhos'><span class='laranja'>&#9632;</span><span class='marrom'>&#9632;</span><span class='bege'>&#9632;</span></div>
	<h2>Blog</h2>

    <div id="container">
    
    <div id="content" role="main"  class="singlewp">

        <?php if (have_posts())
            while (have_posts()) : the_post(); ?>
<div>
					<h3><?php the_title(); ?></h3>
 		<div class='data'>
                <?php the_time(get_option('date_format')); ?>
                    </div>
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                       
                        <div class="texto">
                            <?php the_content(); ?>
                        </div>
                        <?php wp_link_pages(array('before' => '<div class="page-link">' . __('Pages:', 'twentyten'), 'after' => '</div>')); ?>
                    </div><!-- .entry-content -->

                    <?php if (get_the_author_meta('description')) : // If a user has filled out their description, show a bio on their entries   ?>
                        <div id="entry-author-info">
                            <div id="author-avatar">
                                <?php echo get_avatar(get_the_author_meta('user_email'), apply_filters('twentyten_author_bio_avatar_size', 60)); ?>
                            </div><!-- #author-avatar -->
                            <div id="author-description">
                                <h2><?php printf(esc_attr__('About %s', 'twentyten'), get_the_author()); ?></h2>
                                <?php the_author_meta('description'); ?>
                                <div id="author-link">
                                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                        <?php printf(__('View all posts by %s <span class="meta-nav">&rarr;</span>', 'twentyten'), get_the_author()); ?>
                                    </a>
                                </div><!-- #author-link	-->
                            </div><!-- #author-description -->
                        </div><!-- #entry-author-info -->
                    <?php endif; ?>

                    <div class="entry-utility">
                        <?php //twentyten_posted_in(); ?>
                        <?php edit_post_link(__('Edit', 'twentyten'), '<span class="edit-link">', '</span>'); ?>
                    </div><!-- .entry-utility -->
                </div><!-- #post-## -->




            <?php endwhile; // end of the loop.  ?>

    </div><!-- #content -->
</div><!-- #container -->


<?php get_footer(); ?>
