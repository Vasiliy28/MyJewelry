<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package jewelry
 */

get_header(); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12 post">
                <div class="singlePost">
                    <?php while (have_posts()) : the_post(); ?>

                        <?php get_template_part('template-parts/content', 'single'); ?>
                        <div class="like">
                            <div id="fb-root"></div>


                            <div class="fb-like" data-layout="button_count"
                                 -action="like" data-show-faces="true"
                                 data-share="false" data-colorscheme="light"></div>

                            <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>

                            <!-- ???????? ???? ??? ? ????????? ???????? ??? ??????????????? ????? ??????????? ????? ???????? ?????. -->
                            <script src="https://apis.google.com/js/platform.js" async defer>
                                {
                                    lang: 'ru'
                                }
                            </script>

                            <!-- ????????? ???? ??? ????, ??? ?????? ???????????? ?????? +1. -->
                            <div class="g-plusone"></div>
                        </div>

                        <div class="row">
                            <div class="col-md-9">
                                <article class="relotedPostJew">
                                    <?php wp_related_posts() ?>
                                </article>

                            </div>
                        </div>


                        <?php if (comments_open() || get_comments_number()) {
                            comments_template();
                        }
                        ?>


                    <?php endwhile; // End of the loop. ?>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>


<?php
