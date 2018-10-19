<?php get_header(); ?>



	<div class='quadradinhos'><span class='laranja'>&#9632;</span><span class='marrom'>&#9632;</span><span class='bege'>&#9632;</span></div>
	<h2><?php the_title(); ?></h2>

	<div id="container" class="pagewp clear">
                <div id="content" role="main" class="principal">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="texto">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->


<?php endwhile; ?>

			</div><!-- #content -->
        </div><!-- #container -->

<?php get_footer(); ?>
