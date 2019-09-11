<html>
    <head>
        <title>Dashboard - Edit Divisi</title>
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
                        <div class="col col-login mx-auto">
                            <form class="card" action="<?= base_url(); ?>executive/DivisiController/prosesEdit/<?= $divisi->idDivisi; ?>" method="post">
                                <div class="card-body p-6">
                                    <div class="card-title">
                                        Edit Data Divisi
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label text-left">Nama Divisi</label>
                                        <input class="form-control" placeholder="Masukkan nama divisi" type="text" name="nama" value="<?= $divisi->nama_divisi; ?>" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label text-left">Keterangan</label>
                                        <textarea class="form-control" placeholder="Masukkan Keterangan(optional)" type="text"  name="ket"><?= $divisi->keterangan; ?></textarea>
                                    </div>
                                    <div class="form-footer">
                                        <button class="btn btn-primary btn-block" type="submit">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <a class="btn btn-primary" href="<?= base_url(); ?>executive/divisi">
                        <i class="fe fe-arrow-left mr-2"></i>Kembali
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>