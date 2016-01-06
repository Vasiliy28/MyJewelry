<?php if (!is_user_logged_in()) {
?>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a href="https://wordpress/wp-login.php?loginFacebook=1&redirect=https://wordpress" onclick="window.location = 'https://wordpress/wp-login.php?loginFacebook=1&redirect='+window.location.href; return false;">
                        <span><i class="fa fa-facebook"></i></span>
                        Login with Facebook
                    </a>
                    <a href="#">
                        <span><i class="fa fa-google-plus"></i></span>
                        Login with Google
                    </a>
                </div>
                <div class="modal-body">
                    <form id="login" action="login" method="post" class="form-horizontal">
                        <p class="status_login"></p>

                        <div class="form-group">
                            <div class="col-md-12">
                                <span class="form-control-feedback"><i class="fa fa-user"></i></span>

                                <input id="username" class="form-control" placeholder="Name" type="text"
                                       name="username"/>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                            <span class="form-control-feedback"><i class="fa fa-key"></i>
                                </i></span>
                                <input id="password" class="form-control" placeholder="Password" type="password"
                                       name="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input name="rememberme" type="checkbox" id="my-rememberme" checked="checked"
                                       value="forever"/>
                                <label for="my-rememberme">Remember</label>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input class="btn btn-default" type="submit" value="sing in" name="submit">
                            </div>
                        </div>

                        <div class="link_group">
                            <a class="lost_pass_link" href="<?php bloginfo('url'); ?>/wp-login.php?action=lostpassword">Forgot your username?</a>
                            <a class="lost_pass_link" href="<?php bloginfo('url'); ?>/wp-login.php?action=lostpassword">Forgot your password
                                ?</a>
                            <a class="lost_pass_link" href="<?php bloginfo('url'); ?>/form-regestration/">Create an account</a>
                        </div>
                        <?php wp_nonce_field('ajax-login-nonce', 'security'); ?>
                    </form>

                </div>

                <div class="modal-footer">


                </div>
            </div>

        </div>
    </div>

    <!-- Modal
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <heager>
                    <div class="modal-header">
                    </div>
                </heager>
                <article>
                    <div class="modal-body">
                        <form class="form-horizontal" id="login" action="login" method="post">
                            <p class="status_login"></p>

                            <div class="line">
                                <i class="icon-user"></i>
                                <input id="username" class="input_text" type="text" placeholder="Ваш логин"
                                       name="username"/>
                            </div>
                            <div class="line">
                                <i class="icon-key"></i>
                                <input id="password" class="input_text" type="password" placeholder="Ваш пароль"
                                       name="password"/>
                            </div>
                            <div class="line">
                                <input name="rememberme" type="checkbox" id="my-rememberme" checked="checked"
                                       value="forever"/>
                            </div>
                            <div class="line cf">
                                <input class="submit_button" type="submit" value="Войти" name="submit">

                                <div class="login_link">
                                    <a class="reg_link" href="<?php bloginfo('url'); ?>/wp-login.php?action=register">Регистрация</a>
                                    /
                                    <a class="lost_pass_link"
                                       href="<?php bloginfo('url'); ?>/wp-login.php?action=lostpassword">Забыли пароль?</a>
                                </div>
                            </div>
                            <?php wp_nonce_field('ajax-login-nonce', 'security'); ?>
                        </form>
                    </div>
                </article>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>

                </div>
            </div>
        </div>
    </div> -->

    <?php } ?>




