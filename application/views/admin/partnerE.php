<html>
    <head>
        <title>Dashboard - Acara Intermedia</title>
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
                            Tambah Media Partner Intermedia
                        </h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <form class="card" action="<?= base_url(); ?>executive/PartnerController/prosesEdit/<?= $mp->idPartner ?>" method="post" enctype="multipart/form-data">
                                <div class="card-body p-6">
                                    <div class="card-title">
                                        Media Partner Intermedia
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Nama</label>
                                        <input type="text" class="form-control" value="<?= $mp->nama ?>" placeholder="Masukkan Nama Media Partner" name="nama" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Alamat</label>
                                        <textarea class="form-control" placeholder="Masukkan Alamat Media Partner" name="alamat"><?= $mp->alamat ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" value="<?= $mp->email ?>" placeholder="Masukkan Email Aktif" name="email" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">No Hp</label>
                                        <input type="number" class="form-control" value="<?= $mp->nohp ?>" placeholder="Masukkan Nomor Handphone Aktif" name="nohp" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Keterangan</label>
                                        <textarea class="form-control" placeholder="Masukkan Keterangan Media Partner" name="keterangan"><?= $mp->keterangan ?></textarea>
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