<!DOCTYPE html>
<html lang="en">

    <head>

        <?php $this->load->view('assets/css'); ?>

    </head>

    <body class="index-page sidebar-collapse">
        <!-- Navbar -->
        <?php $this->load->view('assets/navbar_blank'); ?>
        <!-- End Navbar -->

        <div class="wrapper">

            <div class="main">
                <!--
                 ==================================================
                     Global Page header Section Start
                 ================================================== -->
                <section class="global-page-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="block">
                                    <h2>Tentang Intermedia</h2>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--
                ==================================================
                    Sekilas intermedia
                ================================================== -->
                <section class="company-description">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s" >
                                <img src="<?php echo base_url() ?>assets/user/images/intermedia.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="col-md-6">
                                <div class="block">
                                    <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">Sekilas Intermedia</h3>
                                    <p  class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                                        <?php echo $tentang->informasi ?>
                                    </p>
                                    <p class="wow fadeInUp" data-wow-delay=".7s" data-wow-duration="500ms">Tujuan UKM Intermedia yakni: </p>
                                    <p  class="wow fadeInUp" data-wow-delay=".7s" data-wow-duration="500ms">
                                        <?php echo $tentang->tujuan ?>
                                    </p>
                                    <p class="wow fadeInUp" data-wow-delay=".7s" data-wow-duration="500ms">
                                        Motto Intermedia adalah "<strong><?php echo $tentang->motto ?></strong>"<br>
                                        Asas Intermedia adalah "<strong><?= $tentang->asas ?></strong>"
                                    </p>
                                    <p class="wow fadeInUp" data-wow-delay=".7s" data-wow-duration="500ms">
                                        <a href="<?= base_url(); ?>tartib">Tata Tertib Intermedia</a>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--
                ==================================================
                    Media partner
                ================================================== -->
<!--                <section id="clients" class="section-tabs">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="subtitle text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay=".3s">Media partner</h2>
                                <p class="subtitle-des text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay=".5s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, error.</p>
                                <div id="clients-logo" class="owl-carousel">
                                    <div>
                                        <img src="<?php echo base_url() ?>assets/user/images/clients/logo-1.jpg" alt="">
                                    </div>
                                    <div>
                                        <img src="<?php echo base_url() ?>assets/user/images/clients/logo-2.jpg" alt="">
                                    </div>
                                    <div>
                                        <img src="<?php echo base_url() ?>assets/user/images/clients/logo-3.jpg" alt="">
                                    </div>
                                    <div>
                                        <img src="<?php echo base_url() ?>assets/user/images/clients/logo-4.jpg" alt="">
                                    </div>
                                    <div>
                                        <img src="<?php echo base_url() ?>assets/user/images/clients/logo-5.jpg" alt="">
                                    </div>
                                    <div>
                                        <img src="<?php echo base_url() ?>assets/user/images/clients/logo-1.jpg" alt="">
                                    </div>
                                    <div>
                                        <img src="<?php echo base_url() ?>assets/user/images/clients/logo-2.jpg" alt="">
                                    </div>
                                    <div>
                                        <img src="<?php echo base_url() ?>assets/user/images/clients/logo-3.jpg" alt="">
                                    </div>
                                    <div>
                                        <img src="<?php echo base_url() ?>assets/user/images/clients/logo-4.jpg" alt="">
                                    </div>
                                    <div>
                                        <img src="<?php echo base_url() ?>assets/user/images/clients/logo-5.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>-->
                <!--
                ==================================================
                    Form contact
                ================================================== -->
                <section id="contact-section">
                    <div class="container">
                        <div class="row">
                            <!--                            <div class="col-md-6">
                                                            <div class="block">
                                                                <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Contact With Me</h2>
                                                                <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, ea!
                                                                    consectetur adipisicing elit. Dolore, ea!
                                                                </p>
                                                                <div class="contact-form">
                                                                    <form id="contact-form" method="#" action="#" role="form">
                            
                                                                        <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                                                            <input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
                                                                        </div>
                            
                                                                        <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                                                            <input type="email" placeholder="Your Email" class="form-control" name="email" id="email" >
                                                                        </div>
                            
                                                                        <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                                                            <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
                                                                        </div>
                            
                                                                        <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.2s">
                                                                            <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>
                                                                        </div>
                            
                                                                        <div id="success" class="success">
                                                                            Thank you. The Mailman is on His Way :)
                                                                        </div>
                            
                                                                        <div id="error" class="error">
                                                                            Sorry, don't know what happened. Try later :(
                                                                        </div>
                            
                                                                        <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                                                                            <input type="submit" id="contact-submit" class="btn btn-default btn-send" value="Send Message">
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>-->
                            <div class="col-md-12">
                                <div class="map-area">
                                    <h2 class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Temukan Kami</h2>

                                    <div class="map">
                                        <iframe src="https://maps.google.com/maps?q=Stmik%20Amikom%20alan%20Letjen%20Pol%20Sumarto%2C%20Purwanegara%2C%20North%20Purwokerto%2C%20Karangjambu%2C%20Purwanegara%2C%20Purwokerto%20Tim.%2C%20Banyumas%20Regency%2C%20Jawa%20Tengah%2053127&t=&z=15&ie=UTF8&iwloc=&output=embed"" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row address-details">
                            <div class="col-md-4">
                                <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                                    <i class="ion-ios-location-outline" style="color: green"></i>
                                    <h5>Jalan Letjen Pol Sumarto, Purwanegara, North Purwokerto, Karangjambu, Purwanegara, Purwokerto Tim., Banyumas Regency, Jawa Tengah 53127</h5>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="email wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                                    <i class="ion-ios-email-outline " style="color: green"></i>
                                    <p>admin@intermediaamikom.org</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="phone wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                                    <i class="ion-ios-telephone-outline" style="color: green"></i>
                                    <p>085882119003</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div id="footer">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 text-left">
                                    <h4><strong>Developer Team</strong></h4>
                                    <ul>
                                        <li><p>Yoga Willy Utomo</p></li>
                                        <li><p>Faiz Ichsan Jaya</p></li>
                                        <li><p>Trian damai</p></li>
                                        <li><p>Zaenur rochman</p></li>
                                    </ul>
                                </div>
                                <div class="col-md-4 text-left">
                                    <h4><strong>DIVISI</strong></h4>
                                    <ul>
                                        <li><p>Pemrograman</p></li>
                                        <li><p>Multimedia</p></li>
                                        <li><p>Jaringan</p></li>
                                    </ul>
                                </div>
                                <div class="col-md-4 text-left">
                                    <h4><strong>Media Sosial</strong></h4>
                                    <ul>
                                        <li><p>admin@intermediaamikom.com</li>
                                        <li><p>@intermediaamikom_pwt</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>



                <?php $this->load->view('assets/footer'); ?>
            </div>
    </body>
    <?php $this->load->view('assets/js'); ?>




</html>
