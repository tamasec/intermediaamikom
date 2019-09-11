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
<!--                <section class="global-page-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="block">
                                    <h2>Tentang Intermedia</h2>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>-->
                <!--
                ==================================================
                    Sekilas intermedia
                ================================================== -->
                <section class="company-description">
                    <div class="container">
                        <div class="row">
                            <!--                            <div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s" >
                                                            <img src="<?php echo base_url() ?>assets/user/images/intermedia.jpg" alt="" class="img-responsive">
                                                        </div>-->
                            <div class="col-md-12">
                                <div class="block">
                                    <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">Tata Tertib Intermedia</h3>
                                    <p class="subtitle text-center">Pasal 1</p><br>
                                    <p class="wow fadeInUp text-left" data-wow-delay=".5s" data-wow-duration="500ms">
                                        Anggota INTERMEDIA adalah setiap mahasiswa yang terdaftar melalui seleksi Intermedia dan sah menjadi mahasiswa STMIK AMIKOM Purwokerto.
                                    </p>
                                    <br>
                                    <p class="subtitle text-center">Pasal 2</p><br>
                                    <p class="wow fadeInUp text-left" data-wow-delay=".5s" data-wow-duration="500ms">
                                        Syarat Nomor Anggota Intermedia adalah :<br><br>

                                        1. Aktif dalam keorganisasian INTERMEDIA selama satu periode penuh.<br>
                                        2. Wajib mengikuti kegiatan Latihan Dasar Kepemimpinan (LDK) internal maupun eksternal dengan menyertakan sertifikat.
                                    </p>
                                    <p class="subtitle text-center">Pasal 3</p><br>
                                    <p class="wow fadeInUp text-left" data-wow-delay=".5s" data-wow-duration="500ms">
                                        Keanggotaan INTERMEDIA dapat dinyatakan hilang karena :<br><br>

                                        1. Meninggal dunia.<br>
                                        2. Keluar dari STMIK AMIKOM Purwokerto.<br>
                                        3. Berstatus sebagai mahasiswa pasif (cuti).<br>
                                        4. Dikeluarkan dari Intermedia.<br>
                                        5. Mengundurkan diri.
                                    </p>
                                    <p class="subtitle text-center">Pasal 4</p><br>
                                    <p class="wow fadeInUp text-left" data-wow-delay=".5s" data-wow-duration="500ms">
                                        Hak dan Kewajiban<br><br>

                                        1. Setiap anggota INTERMEDIA berhak mengeluarkan aspirasi dan berpartisipasi dalam setiap kegiatan INTERMEDIA STMIK AMIKOM Purwokerto.<br>
                                        2. Setiap anggota INTERMEDIA berhak diperlakukan sama dan memiliki hak memilih dan dipilih.<br>
                                        3. Mendapatkan informasi tentang kegiatan keorganisasian INTERMEDIA.<br>
                                        4. Wajib mentaati semua peraturan yang berlaku.<br>
                                        5. Setiap anggota INTERMEDIA wajib memiliki kartu anggota dan nomor anggota.
                                    </p>
                                    <p class="subtitle text-center">Pasal 5</p><br>
                                    <p class="wow fadeInUp text-left" data-wow-delay=".5s" data-wow-duration="500ms">
                                        Kode Etik<br><br>

                                        1. Setiap anggota INTERMEDIA STMIK AMIKOM Purwokerto wajib mentaati segala ketentuan AD/ART INTERMEDIA dan segala peraturan yang berlaku di lingkungan INTERMEDIA STMIK AMIKOM Purwokerto.<br>
                                        2. Setiap anggota INTERMEDIA STMIK AMIKOM Purwokerto wajib menjaga dan memelihara nama baik INTERMEDIA dan almamater STMIK AMIKOM Purwokerto.<br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
        <section>
            <div id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 text-left">
                            <h4><strong>Developer Team</strong></h4>
                            <ul>
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
