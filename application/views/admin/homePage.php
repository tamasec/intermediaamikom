<html>
    <head>
        <title>Admin Page</title>
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

                <div class="my-3 my-md-5">
                    <div class="container">
                        <div class="page-header">
                            <h1 class="page-title">
                                Beranda
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card card-profile">
                                    <div class="card-header" style="background-image: url(<?= base_url(); ?>assets/admin/demo/photos/eberhard-grossgasteiger-311213-500.jpg);">
                                    </div>
                                    <div class="card-body text-center">
                                        <?php
                                        if ($this->session->userdata('data')->foto == '' && $this->session->userdata('data')->jk == 'Laki - Laki') {
                                            ?>
                                            <img class="card-profile-img" src="<?= base_url(); ?>assets/images/user_m.png">
                                            <?php
                                        } elseif ($this->session->userdata('data')->foto == '' && $this->session->userdata('data')->jk == 'Perempuan') {
                                            ?>
                                            <img class="card-profile-img" src="<?= base_url(); ?>assets/images/user_f.png">
                                            <?php
                                        } else {
                                            ?>
                                            <img class="card-profile-img" src="<?= base_url(); ?>assets/admin/uploads/anggota/images/<?= $this->session->userdata('data')->foto?> ">
                                            <?php }
                                        ?>
                                        <h3 class="mb-3"><?= $this->session->userdata('data')->nama_lengkap; ?></h3>
                                        <p class="mb-4">
                                            <?= $this->session->userdata('data')->email; ?>
                                        </p>
                                        <a href="<?= base_url(); ?>executive/pengurus/divisi" class="btn btn-outline-primary btn-sm">
                                            Divisi <?= $divisi->nama_divisi; ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Aktifitas Posting</h3>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table card-table table-striped table-vcenter">
                                            <thead>
                                                <tr>
                                                    <th class="w-1">No.</th>
                                                    <th>Judul</th>
                                                    <th>Kategori</th>
                                                    <th>Tanggal</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $this->load->view('admin/footer');
            ?>
        </div>

    </body>
</html>