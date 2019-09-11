<html>
    <head>
        <title>Dashboard - Tentang Intermedia</title>
        <link rel="icon" href="<?= base_url(); ?>assets/user/img/logo.png" type="image/x-icon"/>
        <?php
        $this->load->view('Admin/header');
        ?>
    </head>
    <body>
        <div class="page">
            <div class="page-main">
                <?php
                $this->load->view('Admin/nav');
                ?>
                <!--                <div class="my-3 my-md-5">-->
                <div class="container">
                    <div class="page-header">
                        <h1 class="page-title">
                            Form Tentang Intermedia
                        </h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <form class="card" action="<?= base_url(); ?>executive/TentangController/prosesTambah" method="post">
                                <div class="card-body p-6">
                                    <div class="card-title">
                                        Tentang Intermedia
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Informasi</label>
                                        <textarea class="form-control" placeholder="Apa itu Intermedia?" name="informasi" required="required"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Sejarah</label>
                                        <textarea class="form-control" placeholder="Sejarah Intermedia" name="sejarah"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Visi</label>
                                        <textarea class="form-control" placeholder="Visi Intermedia" name="visi"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Misi</label>
                                        <textarea class="form-control" placeholder="Misi Intermedia" name="misi"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Motto</label>
                                        <textarea class="form-control" placeholder="Motto Intermedia" name="motto"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Tujuan</label>
                                        <textarea class="form-control" placeholder="Tujuan Intermedia" name="tujuan"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Asas</label>
                                        <textarea class="form-control" placeholder="Asas Intermedia" name="asas"></textarea>
                                    </div>
                                    <div class="form-footer">
                                        <button class="btn btn-primary btn-block" type="submit">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <!--                </div>-->

            <?php
            $this->load->view('Admin/footer');
            ?>
        </div>
    </body>
</html>