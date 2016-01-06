<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jewelry
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php
        wp_title(' ',' ',false);
        ?></title>

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <!-- Bootstrap -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <![endif]-->

    <?php wp_head(); ?>
</head>
<body>
<?php get_template_part('login'); ?>


<header class="headerPage">
    <header>
        <div class="container">
            <div class="row ">
                <div class="col-xs-12">
                    <nav class="pageNav">
                        <?php
                        if (function_exists('wp_nav_menu'))
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'custom-menu',
                                    'fallback_cb' => 'custom_menu',
                                    'container' => 'ul',

                                    'menu_class' => 'page')
                            );
                        else custom_menu();
                        ?>
                    </nav>
                </div>

            </div>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="row ">
                <article>
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                        <div class="col-xs-12 col-sm-5 col-lg-4">

                            <div class="brend"><p>cardiff</p></div>

                        </div>
                        <div class="col-xs-12 col-sm-7 col-lg-8">

                            <div class="phoneDaly">
                                <div class="phone">
                                    <p> call now:</p>

                                    <p>02920 2045 8899</p>
                                </div>
                                <div class="daly">
                                    <p>Hours: 9am-5pm Tues-Sat; Closed Sun-Mon</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </article>
                <aside>
                    <div class="col-xs-12 col-md-3 col-lg-3">
                        <div class="searchAccount">

                            <div class="formSearch">
                                <form id="sb-search" class="sb-search " method="get">
                                    <input class="sb-search-input" placeholder="search" type="search" value=""
                                           name="search" id="search">
                                    <input class="sb-search-submit" type="submit" value="">
                                    <span class="sb-icon-search"></span>
                                </form>
                            </div>

                            <div class="account">
                                <?php the_user_loggeted() ?>
                            </div>
                        </div>

                    </div>
            </div>
            </aside>
        </div>
        </div>

    </section>
    <footer>
        <div class="container">

            <div class="row">
                <div class="col-sm-12">

                    <nav class="itemNav">
                        <header class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target="#nav-respons">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </header>
                        <article class="collapse navbar-collapse" id="nav-respons">
                            <?php
                            if (function_exists('wp_nav_menu'))
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'item-menu',
                                        'fallback_cb' => 'item-menu',
                                        'container' => 'ul',

                                    )
                                );

                            ?>
                        </article>
                    </nav>
                </div>
            </div>
        </div>
    </footer>
</header>


<section class="wrapperBreadcrumd">
    <div class="container">
            <?php the_breadcrumb();?>
    </div>
</section>












