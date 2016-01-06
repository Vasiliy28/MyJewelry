<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jewelry
 */
?>

<footer>
    <section class="wrapperFooter">
        <div class="container">
            <section class="row">
                <article class="col-xs-6 col-sm-4">
                    <div class="footerLinks">
                        <div class="col-xs-6">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Our Story</a></li>
                                <li><a href="#">Our Sevices</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Vist Us</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Blog</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-6">
                            <ul>
                                <li><a href="#">Compare</a></li>
                                <li><a href="#">Wishlist</a></li>
                                <li><a href="#">Delivery</a></li>
                            </ul>
                        </div>
                    </div>
                </article>
                <article class="col-xs-6 col-sm-4">
                    <div class="newsletter">
                        <h3>newsletter:</h3>

                        <p>Sing up to get exclusive offers from our
                            favorite brands and to be well up in the news.</p>
                        <?php echo do_shortcode('[nsu_form]') ?>
                    </div>
                </article>
                <article class="col-xs-12 col-sm-4">
                    <div class="footerIcons">
                        <h3>COME SAY HELLO:</h3>

                        <div class="iconsGroup">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </article>
            </section>
            <footer class="row">
                <div class="col-xs-12 col-md-7">
                    <div class="footerAbout">
                        <p>&acute;comapny name&acute; is trading under the name &acute;registered company name&acute; <a
                                href="#">www.ourwebsite.co.uk</a>
                            All Rights Reserved. Company No. 1234567, VAT No. GB123456789</p>
                    </div>
                </div>
            </footer>

        </div>
    </section>

</footer>
<a id="gotop" class="scrollTop" href="#" "></a>
<?php wp_footer() ?>
</body>
</html>
