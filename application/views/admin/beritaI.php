<html>
    <head>
        <title>Dashboard - Berita Intermedia</title>
        <link rel="icon" href="<?= base_url(); ?>assets/user/img/logo.png" type="image/x-icon"/>
        <?php
        $this->load->view('admin/header');
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
                            Tambah Berita Intermedia
                        </h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <form class="card" action="<?= base_url(); ?>executive/BeritaController/prosesTambah" method="post" enctype="multipart/form-data">
                                <div class="card-body p-6">
                                    <div class="card-title">
                                        Berita Intermedia
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Judul Berita</label>
                                        <input type="text" class="form-control" placeholder="Masukkan judul berita" name="judul" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Isi Berita</label>
                                        <textarea class="form-control" placeholder="Masukkan isi berita" name="isi"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Foto</label>
                                        <input type="file" name="foto" class="form-control" accept="image/*">
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