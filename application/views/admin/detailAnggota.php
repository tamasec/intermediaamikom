<html>
    <head>
        <title>Detail Pendaftar Intermedia</title>
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
                <div class="my-3 my-md-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <span class="avatar avatar-xxl mr-5" style="background-image: url(<?= base_url(); ?>assets/admin/uploads/anggota/images/<?= $tampil->foto ?>)"></span>
                                            <div class="media-body">
                                                <h4 style="margin-top:0px"><?= $tampil->nama_lengkap ?></h4>
                                                <p style="margin-top:0px"><?= $tampil->email ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--                                <div class="card">
                                                                    <div class="card-header">
                                                                        <h3 class="card-title">Curriculum Vitae</h3>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <div class="media">
                                                                            <div class="col">
                                                                                <a class="btn btn-success" href="#">Lihat CV</a>
                                                                            </div>
                                                                            <p style="margin:10px"><?= $tampil->cv ?></p>
                                                                            <div class="col">
                                                                                <a class="btn btn-danger" href="#">Print Detail</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                
                                                                </div>-->
                            </div>
                            <div class="col">
                                <!--                                <div class="page-header">
                                                                    <h1 class="page-title">
                                                                        Detail Data Pendaftar Intermedia
                                                                    </h1>
                                                                </div>-->
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Detail Data <?= $tampil->idAnggota ?></h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-12">
                                                <table>
                                                    <tr>
                                                        <td></td>
                                                        <td>ID Anggota</td>
                                                        <td style="padding: 10px">: <?= $tampil->idAnggota ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Divisi</td>
                                                        <td style="padding: 10px">: <?= $tampil->nama_divisi ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Jenis Kelamin  </td>
                                                        <td style="padding: 10px">: <?= $tampil->jk ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Tanggal Lahir  </td>
                                                        <td style="padding: 10px">: <?= $tampil->ttl ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Alamat  </td>
                                                        <td style="padding: 10px">: <?= $tampil->alamat ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Email  </td>
                                                        <td style="padding: 10px">: <?= $tampil->email ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>No Hp  </td>
                                                        <td style="padding: 10px">: <?= $tampil->noHp ?></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </body>
</html>
