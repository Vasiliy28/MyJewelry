<?php
/**
 * jewelry functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package jewelry
 */

if (!function_exists('jewelry_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function jewelry_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on jewelry, use a find and replace
         * to change 'jewelry' to the name of your theme in all the template files.
         */
        load_theme_textdomain('jewelry', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');


        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        /*
         * Enable support for Post Formats.
         * See https://developer.wordpress.org/themes/functionality/post-formats/
         */
        add_theme_support('post-formats', array(
            'aside',
            'image',
            'video',
            'quote',
            'link',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('jewelry_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));
    }
endif; // jewelry_setup
add_action('after_setup_theme', 'jewelry_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function jewelry_content_width()
{
    $GLOBALS['content_width'] = apply_filters('jewelry_content_width', 640);
}

add_action('after_setup_theme', 'jewelry_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function jewelry_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'jewelry'),
        'id' => 'sidebar-1',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'jewelry_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function jewelry_scripts()
{
    /*Scripts*/
    wp_register_script( 'myScript', get_template_directory_uri() . '/js/myScript.js', array('jquery'), "1", true);
    wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js',array('jquery'),'1',true);
    wp_register_script('scrollTop', get_template_directory_uri() . '/js/scrollTop.js', array('jquery'), '1',true);

    /*Style*/
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '1', false);
    wp_register_style('bootstrap-theme', get_template_directory_uri() . '/css/bootstrap-theme.min.css', array(), '1', false);
    wp_register_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '1', false);
    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), '1', false);
    wp_register_style('fonts', get_template_directory_uri() . '/css/fonts.css', array(), '1', false);
    wp_register_style('ourStory', get_template_directory_uri() . '/css/ourStory.css', array(), '1', false);
    wp_register_style('ourServices', get_template_directory_uri() . '/css/ourServices.css', array(), '1', false);
    wp_register_style('contactUs', get_template_directory_uri() . '/css/contactUs.css', array(), '1', false);
    wp_register_style('blog', get_template_directory_uri() . '/css/blog.css', array(), '1', false);
    wp_register_style('home', get_template_directory_uri() . '/css/home.css', array(), '1', false);
    $styles = array('bootstrap',
        'bootstrap-theme',
        'font-awesome',
        'main', 'fonts',
        'ourStory',
        'ourServices',
        'contactUs',
        'blog',
        'home');

    wp_register_style('myMedia', get_template_directory_uri() . '/css/myMedia.css', array($styles), '1', false);


    wp_enqueue_style('bootstrap');
    wp_enqueue_style('bootstrap-theme');
    wp_enqueue_style('font-awesome');
    wp_enqueue_style('main');
    wp_enqueue_style('fonts');

    if (is_page('our-story')) {
        wp_enqueue_style('ourStory');
    };

    if (is_page('our-services')) {
        wp_enqueue_style('ourServices');
    };
    if (is_page('contact-us') || is_page('form-regestration')) {
        wp_enqueue_style('contactUs');
    };
    if (is_page('blog') || is_single()) {
        wp_enqueue_style('blog');
    };


    if (is_page('home')) {

        wp_enqueue_script( 'myScript');
        wp_enqueue_style('home');
    }
    wp_enqueue_script( 'bootstrap');
    wp_enqueue_script('scrollTop');
    wp_enqueue_style('myMedia');

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'jewelry_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';




function the_choose_page()
{
    if (is_page('our-story')) {
        return $p = 'page-our-story';
    }

    if (is_page('our-services')) {
        return $p = 'page-our-service';
    }
    if (is_page('contact-us')) {
        return $p = 'page-contact-us';
    }

    if (is_page('form-regestration')) {
        return $p = 'page-reg';
    } else return $p = 'page';

}


function the_user_loggeted()
{
    if (is_user_logged_in()) {
        echo '<div class="userActive">
                                <a href="#" class="iconAccount">My account</a>

                                <a href="#" class="iconBag" >My bag - &pound;0.00</a>
                            </div>';
    } else {
        echo '
		<div class="userOff">
                                <a href="https://wordpress/form-regestration/">Регистрация</a>
                                <a id="login-ajax" href="#" data-toggle="modal" data-target="#myModal">Войти</a>
                            </div>
		';
    }
}


function commentJew($comment,$args, $depth){
    $GLOBALS['comment'] = $comment; ?>
<li id="li-comment-<?php comment_ID() ?>">
    <article id="comment-<?php comment_ID(); ?>" class="commentTemp">
        <figure>
            <?php if ($args['avatar_size'] != 0) echo get_avatar($comment, $args['avatar_size']); ?>
            <figcaption>
                <?php echo get_comment_author_link() ?>
            </figcaption>
        </figure>

        <?php comment_text() ?>
        <?php if ($comment->comment_approved == '0') : ?>
            <em>Ваш комментарий ожидает проверки.</em>
            <br/>
        <?php endif; ?>

        <footer>
            <a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)) ?>"><?php printf(get_comment_date('F j, Y')) ?></a>
            <?php comment_reply_link(array_merge($args, array(
                'depth' => $depth,
                'max_depth' => $args['max_depth'],
                'reply_text' => 'Reply'))) ?>

            <?php edit_comment_link('(Edit)', '  ', '') ?>
        </footer>
    </article>
<?php }



function arphabet_widgets_init() {

    register_sidebar( array(
        'name'          => 'Home right sidebar',
        'id'            => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );




//  Ajax Login
function ajax_login_init(){

    /* Подключаем скрипт для авторизации */
    wp_register_script('ajax-login-script', get_template_directory_uri() . '/js/ajax_form.js', array('jquery'),0,true );
    wp_enqueue_script('ajax-login-script');

    /* Локализуем параметры скрипта */
    wp_localize_script( 'ajax-login-script', 'ajax_login_object', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'redirecturl' => $_SERVER['REQUEST_URI'],
        'loadingmessage' => __('Идет проверка данных...')
    ));

// Разрешаем запускать функцию ajax_login() пользователям без привелегий
    add_action( 'wp_ajax_nopriv_ajaxlogin', 'ajax_login' );
}

// Выполняем авторизацию только если пользователь не вошел
if (!is_user_logged_in()) {
    add_action('init', 'ajax_login_init');
}






function ajax_login(){

// Первым делом проверяем параметр безопасности
    check_ajax_referer( 'ajax-login-nonce', 'security' );

// Получаем данные из полей формы и проверяем их
    $info = array();
    $info['user_login'] = $_POST['username'];
    $info['user_password'] = $_POST['password'];
    $info['remember'] = $_POST['rememberme'];

    $user_signon = wp_signon( $info, false );
    if ( is_wp_error($user_signon) ){
        echo json_encode(array('loggedin'=>false, 'message'=>__('Неправильный логин или пароль!')));
    } else {
        echo json_encode(array('loggedin'=>true, 'message'=>__('Отлично! Идет перенаправление...')));
    }

    die();
}

if ( function_exists( 'register_nav_menus' ) )
{
    register_nav_menus(
        array(
            'custom-menu'=>__('Custom menu'),
        )
    );
}

if ( function_exists( 'register_nav_menus' ) )
{
    register_nav_menus(
        array(
            'item-menu'=>__('Item menu'),
        )
    );
}

if ( ! defined( 'WPCF7_AUTOP' ) ) {
    define( 'WPCF7_AUTOP', false );
}

function the_breadcrumb()
{
    if (is_page('home')) {
        return;
    }

    $home = get_option('home');
    $linkBlog = get_permalink(14);

    $wrapperBefore = '<article class="breadcrumbJew">';
    $wrapperAfter = '</article>';
    $headerBefore = '<header>' . '<h3>';
    $headerAfter = '</h3>' . '</header>';
    $before = '<ul>';
    $after = '</ul>';
    $titleHeder = the_title($headerBefore, $headerAfter, false);
    $currentPage = the_title('', '', false);
    if (is_page()) {
        $crumbs = $wrapperBefore .
            $titleHeder .
            $before .
            '<li><a href="' . $home . '">home</a></li>' .
            '<li class="active">' . $currentPage . '</li>' .
            $after .
            $wrapperAfter;
        echo $crumbs;
        return;
    }
    if (is_category() || is_single()) {
        $crumbs = $wrapperBefore .
            $titleHeder .
            $before .
            '<li><a href="' . $home . '">home</a></li>' .
            '<li><a href="' . $linkBlog . '">blog</a></li>' .
            '<li class="active">' . $currentPage . '</li>' .
            $after .
            $wrapperAfter;
        echo $crumbs;
        return;
    }

}
function customCommentForm(){
    $commenter = wp_get_current_commenter();
    $req = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );

        $fields =  array(
            'before'=>'<fieldset class="form-horizontal">',
            'author' => '<div class="form-group">' . '<div class="col-md-6"> ' .
                '<input id="author" class="form-control"  name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"'.'placeholder="Name"' . $aria_req  .' /></div></div>',
            'email'  => '<div class="form-group">' . '<div class="col-md-6"> ' .
                '<input id="email" class="form-control" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . 'placeholder="Email"'.$aria_req . ' /></div></div>',
            'url' => '<div class="form-group">' . '<div class="col-md-6"> ' .
                '<input id="url" name="url" class="form-control" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .'" size="30"'. 'placeholder="WebSite"' .' /></div></div>',);

    if(!(is_user_logged_in())){
        $fields['comment_field']='<div class="form-group">' . '<div class="col-md-6"> '.
            '<textarea id="comment" class="form-control" name="comment" cols="45" rows="8"  aria-required="true" required="required" placeholder="Messege"></textarea></div></div>';
    }

        $comments_args = array(

            'fields' =>  $fields,
            'comment_field'=>'',
            'title_reply_before'   => '<header>'.'<h1 id="reply-title" class="comment-reply-title">',
            'title_reply_after'    => '</h1>'.'</header',
            'comment_notes_before' => ' ',
            'comment_notes_after'  => ' ',
            'submit_button'        => '<input name="%1$s" class="btn btn-default  type="submit" id="%2$s" class="%3$s" value="%4$s" />',
            'submit_field'         => '<div class="form-group">'.'<div class="col-md-6">%1$s %2$s</div>'.'</div>'.'</fieldset>',
            'after'=>'</fieldset>',
        );
    if(is_user_logged_in()){
        $comments_args['comment_field']='<fieldset class="form-horizontal">'.'<div class="form-group">' . '<div class="col-md-6"> '.
            '<textarea id="comment" class="form-control" name="comment" cols="45" rows="8"  aria-required="true" required="required" placeholder="Messege"></textarea></div></div>';
    }

    return $comments_args;

}







