<html>
    <head>
        <title>Dashboard - Acara Intermedia</title>
        <link rel="icon" href="<?= base_url(); ?>assets/user/img/logo.png" type="image/x-icon"/>
        <?php
        $this->load->view('admin/header');
        ?>
    </head>
    <body>
        <div class="page">
            <div class="page-main">
                <?php
                $this->load->view('admin/nav');
                ?>
                <!--                <div class="my-3 my-md-5">-->
                <div class="container">
                    <div class="page-header">
                        <h1 class="page-title">
                            Tambah Acara Intermedia
                        </h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <form class="card" action="<?= base_url(); ?>executive/AcaraController/prosesTambah" method="post" enctype="multipart/form-data">
                                <div class="card-body p-6">
                                    <div class="card-title">
                                        Acara Intermedia
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Judul Acara</label>
                                        <input type="text" class="form-control" placeholder="Masukkan judul acara" name="judul" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Isi Acara</label>
                                        <textarea class="form-control" id="editor" placeholder="Masukkan isi acara" name="isi"></textarea>
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
            $this->load->view('admin/footer');
            ?>
        </div>
    </body>
</html>