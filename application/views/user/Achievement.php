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
                                    <h2>Prestasi Intermedia</h2>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--==============================================
                    Prestasi
                ==================================================-->
                <section id="gallery" class="gallery">
                    <div class="container">
                        <div class="row">
                            <?php
                                foreach($pencapaian as $pc){
                            ?>
                            <div class="col-sm-4 col-xs-12">
                                <figure class="wow fadeInLeft animated portfolio-item animated" data-wow-duration="500ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 0ms; -webkit-animation-delay: 0ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                                    <div class="img-wrapper">
                                        <img width="100%" height="300px" src="<?php echo base_url()?>assets/admin/uploads/pencapaian/<?= $pc['foto'] ?>" class="img-responsive" alt="this is a title">
                                        <div class="overlay">
                                            <div class="buttons">
                                                <a rel="gallery" class="fancybox" href="<?php echo base_url()?>assets/admin/uploads/pencapaian/<?= $pc['foto'] ?>"><?= $pc['juara']?></a>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </section>
                <!--
                ==================================================
                Call To Action Section Start
                ================================================== -->
<!--                <section id="call-to-action">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="block">
                                    <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">SO WHAT YOU THINK ?</h1>
                                        <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis,<br>possimus commodi, fugiat magnam temporibus vero magni recusandae? Dolore, maxime praesentium.</p>
                                        <a href="contact.html" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Contact With Me</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>-->



                <?php $this->load->view('assets/footer'); ?>
            </div>
    </body>
    <?php $this->load->view('assets/js'); ?>




</html>
