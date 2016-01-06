<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jewelry
 */

?>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 contactInfo">
                <h1>Contact info</h1>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d178580.1068590248!2d34.43191744999999!3d45.624424649999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2s!4v1447851243920" width="95%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>

                <div class="info">
                    <ul>
                        <li>
                            Angeliques Jewellers
                            88 Albany Rd, Cardiff
                            CF24 3RS
                        </li>
                        <li>
                            Telephone: 02920 2045 8899
                        </li>
                        <li>
                            E-mail: info@angeliquesjewellers.com
                        </li>
                        <li>
                            Opening Hours:
                            <ul>
                                <li>Tuesday - Saturday: 9am - 5pm</li>
                                <li>Sunday: Closed</li>
                                <li>Monday: Closed</li>
                            </ul>
                        </li>
                    </ul>
                </div>


            </div>
            <div class="col-md-6 contactForm">
                <h1>Contact form</h1>
                <?php echo do_shortcode('[contact-form-7 id="28" title="Контактная форма 1"]') ?>

                <!--<form class="form-horizontal">
                     <fieldset>
                         <div class="form-group">
                             <div class="col-md-6">
                                 <span class="form-control-feedback"><i class="fa fa-user"></i></span>
                                 <input class="form-control" placeholder="Name" type="text">
                             </div>
                             <div class="col-md-6">
                                 <span class=" form-control-feedback"><i class="fa fa-envelope"></i></span>
                                 <input class="form-control" placeholder="Email" type="email">
                             </div>
                         </div>
                         <div class="form-group">
                             <div class="col-md-6">
                                 <span class="form-control-feedback"><i class="fa fa-phone "></i></span>
                                 <input class="form-control" placeholder="Phone" type="tel">
                             </div>
                             <div class="col-md-6">
                                 <span class="form-control-feedback"><i class="fa fa-question-circle "></i></span>
                                 <input class="form-control" placeholder="Enquiry:" type="text">
                             </div>
                         </div>
                         <div class="form-group">
                             <div class="col-md-12">
                                 <span class="form-control-feedback"><i class="fa fa-pencil "></i></span>
                                 <textarea class="form-control" rows="5" placeholder="Messege"></textarea>
                             </div>
                         </div>
                         <div class="form-group">
                             <div class="buttons">
                                 <button type="reset" class="btn btn-primary btn-sm">clear</button>
                                 <button type="submit" class="btn btn-default btn-sm">send</button>
                             </div>
                         </div>
                     </fieldset>
                 </form>-->
            </div>


        </div>

    </div>
</div>
