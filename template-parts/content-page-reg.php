<?php require get_template_directory() . '/form-reg.php'?>

<div class="container">
    <div class="row">
        <div class="col-md-12 contactForm">
            <form class="form-horizontal" action="<?php $_SERVER['REQUEST_URI'] ?>" method="post" style="margin-top: 20px;">
                <fieldset>
                    <div class="form-group">
                        <div class="col-md-6 " style="padding-right: 0px;">
                            <span class="form-control-feedback"><i class="fa fa-user"></i></span>
                            <input class="form-control" placeholder="Name" type="text" name="username" value="">
                        </div>

                    </div>
                    <div class="form-group">
                        <div class="col-md-6" style="padding-right: 0px;">
                            <span class=" form-control-feedback"><i class="fa fa-envelope"></i></span>
                            <input class="form-control" placeholder="Email" type="email" name="email" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <span class="form-control-feedback"><i class="fa fa-phone "></i></span>
                            <input class="form-control" placeholder="Password" type="password" name="password" value="">
                        </div>

                    </div>


                    <div class="form-group col-md-6">
                        <div class="buttons">
                            <input type="submit" name="submit" class="btn btn-default btn-sm" value="Register"/>
                        </div>
                    </div>
                </fieldset>
            </form>
            <?php echo do_shortcode("[cr_custom_registration]");?>

        </div>
    </div>

</div>




