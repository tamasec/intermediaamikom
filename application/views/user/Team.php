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
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>About Developer</h2>
                            <ol class="breadcrumb">

                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!--=================================
=            404 Section            =
==================================-->
<section class="moduler wrapper_404">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h1 class="wow fadeInUp animated cd-headline slide" style="color: green;" data-wow-delay=".4s" >404</h1>
                    <h2 class="wow fadeInUp animated" data-wow-delay=".6s">Opps! Coming soon</h2>

                    <a href="./index.php" class="btn btn-dafault btn-home wow fadeInUp animated" data-wow-delay="1.1s">Home</a>

                </div>
            </div>
        </div>
    </div>
</section>

            <!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
            <section id="call-to-action">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">SO WHAT YOU THINK ?</h1>
                                <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">punya pertanyaan,<br>possimus commodi, fugiat magnam temporibus vero magni recusandae? Dolore, maxime praesentium.</p>
                                <a href="./About.php" class="btn  btn-home wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Contact With Me</a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!--
            ==================================================
            Footer Section Start
            ================================================== -->



<?php $this->load->view('assets/footer'); ?>
            </div>
    </body>
    <?php $this->load->view('assets/js'); ?>




</html>
