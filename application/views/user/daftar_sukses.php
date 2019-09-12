<!DOCTYPE html>
<html lang="en">

    <head>

        <?php $this->load->view('assets/css'); ?>

    </head>

    <body class="index-page sidebar-collapse">
        <!-- Navbar -->
        <?php $this->load->view('assets/navbar'); ?>
        <!-- End Navbar -->

        <div class="wrapper">

            <div class="main">
                <?php $this->load->view('assets/partikelcss'); ?>
                <header id="main-header" class="large-header">
                    <canvas id="demo-canvas"></canvas>
                    <div class="main-title ">
                        <section class="moduler wrapper_404">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="text-center">
                                            <h1 class="wow fadeInUp animated cd-headline slide" style="color: green;" data-wow-delay=".4s" >Selamat!</h1>
                                            <h3 class="wow fadeInUp animated" data-wow-delay=".6s">Kamu sudah terdaftar sebagai Calon Anggota Intermedia :D</h3>
                                            <p class="wow fadeInUp animated" data-wow-delay=".9s">Tunggu kabar terkait First Meet dari kami, ya!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </header>
                <?php $this->load->view('assets/particlejs'); ?>


                <?php $this->load->view('assets/footer'); ?>
            </div>
    </body>
    <?php $this->load->view('assets/js'); ?>



    <script>

        // Set the date we're counting down to
        var countDownDate = new Date("Jan 5, 2019 15:37:25").getTime();

        // Update the count down every 1 second
        var x = setInterval(function () {

            // Get todays date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="demo"
            document.getElementById("demo").innerHTML = days + "d " + hours + "h "
                    + minutes + "m " + seconds + "s ";

            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);

    </script>
</html>
