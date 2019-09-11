<html>
    <head>
        <title>Dashboard - Edit Acara</title>
        <link rel="icon" href="<?= base_url(); ?>assets/user/img/logo.png" type="image/x-icon"/>
        <?php
        $this->load->view('admin/header');
        ?>
    </head>
    <body>
        <div class="page">
            <div class="page-single">
                <!--<?php
                //$this->load->view('Admin/nav');
                ?>-->
                <div class="container text-center">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <form class="card" action="<?= base_url(); ?>executive/AcaraController/prosesEdit/<?= $acara->idEvent; ?>" method="post" enctype="multipart/form-data">
                                <div class="card-body p-6">
                                    <div class="card-title">
                                        Edit Data Acara
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label text-left">Juara</label>
                                        <input class="form-control" placeholder="Masukkan nama lengkap" type="text" name="judul" value="<?= $acara->judul; ?>" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label text-left">Keterangan</label>
                                        <textarea class="form-control" placeholder="Masukkan Username" type="text"  name="isi"><?= $acara->isi; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label text-left">Foto</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="berkas" name="gambar" accept="image/*">
                                            <label class="custom-file-label" for="customFile"><?php echo $acara->gambar ?></label>
                                        </div>
                                    </div>
                                    <div class="form-footer">
                                        <button class="btn btn-primary btn-block" type="submit">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <a class="btn btn-primary" href="<?= base_url(); ?>executive/acara">
                        <i class="fe fe-arrow-left mr-2"></i>Kembali
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>