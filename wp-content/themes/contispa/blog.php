<?php
/*
  Template Name: Blog
 */
?>

<?php get_header(); ?>




	<div class='quadradinhos'><span class='laranja'>&#9632;</span><span class='marrom'>&#9632;</span><span class='bege'>&#9632;</span></div>
	<h2><?php the_title(); ?></h2>

    <?php
    $myposts = get_posts('numberposts=-1&orderby=post_date&order=DESC');
    ?>

    <div class="blogwp clear">
            
    <div class="lista">

       <div class="titulo">No nosso blog</div>
        
        <ul>
            <?php foreach ($myposts as $post) : ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endforeach; ?>
        </ul>

    </div>
                
    <?php
    $args = array('posts_per_page' => 3);
    $lastposts = get_posts($args);
    ?>


        <?php foreach ($lastposts as $post) : setup_postdata($post); ?>
    <div class='principal'>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
 		<div class='data'>
                <?php the_time(get_option('date_format')); ?>
                    </div>
            <div class="texto">
                <?php the_content(); ?>
            </div>
			    </div>
        <?php endforeach; ?>



    <div class="clear"></div>
</div>


<?php get_footer(); ?>


