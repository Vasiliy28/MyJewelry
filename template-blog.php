<?php
/*
 * Template name: Blog
 *
 */


get_header(); ?>


<?php

$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'posts_per_page' => get_option('posts_per_page'),
    'paged' => $current_page
);
query_posts($args);

$wp_query->is_archive = true;
$wp_query->is_home = false;


?>

<div class="container">
    <div class="row">
        <div class="col-md-9 post">
            <div class="singlePost">
                <?php if (have_posts()) : ?>

                    <?php if (is_home() && !is_front_page()) : ?>

                    <?php endif; ?>

                    <?php /* Start the Loop */ ?>
                    <?php
                    while (have_posts()) : the_post();


                        /*
                         * Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part('template-parts/content', get_post_format());
                        // If comments are open or we have at least one comment, load up the comment template.
                        if (comments_open() || get_comments_number()) {
                            comments_template('',true);
                        }

                    endwhile;
                    ?>


                    <?php the_posts_navigation(); ?>

                <?php else : ?>

                    <?php get_template_part('template-parts/content', 'none'); ?>

                <?php endif; ?>
            </div>
        </div>
        <div class="col-md-3 sitebar">
            <?php get_sidebar();?>
        </div>
    </div>


</div>


<?php get_footer(); ?>

