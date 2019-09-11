<html>
    <head>
        <title>Detail Pendaftar Intermedia</title>
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
                <div class="my-3 my-md-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card card-profile">
                                    <div class="card-header" style="background-image: url(<?= base_url(); ?>assets/admin/uploads/partner/<?= $tampil->logo ?>)">
                                    </div>
                                    <div class="card-body text-center">
<!--                                            <span class="avatar avatar-xxl mr-5" style="background-image: url()"></span>-->
                                        <!--                                            <div class="media-body">-->
                                        <h4 style="margin-top:0px"><?= $tampil->nama ?></h4>
                                        <p style="margin-top:0px"><?= $tampil->email ?></p>
                                        <!--                                            </div>-->
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Detail Data <?= $tampil->idPartner ?></h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-12">
                                                <table>
                                                    <tr>
                                                        <td></td>
                                                        <td>ID Anggota</td>
                                                        <td style="padding: 10px">: <?= $tampil->idPartner ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Nama</td>
                                                        <td style="padding: 10px">: <?= $tampil->nama ?></td>
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
                                                        <td>No Hp </td>
                                                        <td style="padding: 10px">: <?= $tampil->nohp ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Keterangan  </td>
                                                        <td style="padding: 10px">: <?= $tampil->keterangan ?></td>
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
        </div>
    </body>
</html>
