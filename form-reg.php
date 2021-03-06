



<?php
/*
  Plugin Name: Custom Registration
  Plugin URI: http://code.tutsplus.com
  Description: Updates user rating based on number of posts.
  Version: 1.0
  Author: Agbonghama Collins
  Author URI: http://tech4sky.com
 */



function registration_form($username, $password, $email)
{
    ( isset( $_POST['username'] ) ? $username : null );
    ( isset( $_POST['email']) ? $email : null ) ;
    ( isset( $_POST['password'] ) ? $password : null );
}


function registration_validation($username, $password, $email)
{
    global $reg_errors;
    $reg_errors = new WP_Error;

    if (empty($username) || empty($password) || empty($email)) {
        $reg_errors->add('field', 'Required form field is missing');
    }

    if (4 > strlen($username)) {
        $reg_errors->add('username_length', 'Username too short. At least 4 characters is required');
    }

    if (username_exists($username))
        $reg_errors->add('user_name', 'Sorry, that username already exists!');
    if (!validate_username($username)) {
        $reg_errors->add('username_invalid', 'Sorry, the username you entered is not valid');
    }
    if (5 > strlen($password)) {
        $reg_errors->add('password', 'Password length must be greater than 5');
    }

    if (!is_email($email)) {
        $reg_errors->add('email_invalid', 'Email is not valid');
    }
    if (email_exists($email)) {
        $reg_errors->add('email', 'Email Already in use');
    }

    if (is_wp_error($reg_errors)) {

        foreach ($reg_errors->get_error_messages() as $error) {

            echo '<div>';
            echo '<strong>ERROR</strong>:';
            echo $error . '<br/>';
            echo '</div>';



        }

    }
}

function complete_registration()
{
    global $reg_errors, $username, $password, $email;
    if (1 > count($reg_errors->get_error_messages())) {
        $userdata = array(
            'user_login' => $username,
            'user_email' => $email,
            'user_pass' => $password,

        );
        $user = wp_insert_user($userdata);
        echo 'Registration complete. Goto <a href="' . get_site_url() . '/wp-login.php">login page</a>.';
    }
}

function custom_registration_function()
{
    if (isset($_POST['submit'])) {
        registration_validation(
            $_POST['username'],
            $_POST['password'],
            $_POST['email']

        );

// sanitize user form input
        global $username, $password, $email;
        $username = sanitize_user($_POST['username']);
        $password = esc_attr($_POST['password']);
        $email = sanitize_email($_POST['email']);


// call @function complete_registration to create the user
// only when no WP_error is found
        complete_registration(
            $username,
            $password,
            $email

        );
    }

    registration_form(
        $username,
        $password,
        $email

    );
}

// Register a new shortcode: [cr_custom_registration]


// The callback function that will replace [book]


add_shortcode('cr_custom_registration', 'custom_registration_shortcode');

function custom_registration_shortcode()
{
    ob_start();
    custom_registration_function();
    return ob_get_clean();
}



