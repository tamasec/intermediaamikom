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
                <div class="my-3 my-md-5">
                    <div class="container">
                        <div class="page-header">
                            <h1 class="page-title">
                                Data Media Partner Intermedia
                            </h1>
                        </div>
                        <a class="btn btn-primary mb-5" href="<?= base_url(); ?>executive/tambah/partner">Tambah Data</a>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Table Media Partner Intermedia</h3>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table card-table table-vcenter text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th class="w-1">No.</th>
                                                    <th>Nama</th>
<!--                                                    <th>Divisi</th>-->
                                                    <th>Alamat</th>
                                                    <th>Email</th>
                                                    <th>No Hp</th>
                                                    <th>Action</th>     
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($mp as $ad) {
                                                    ?>
                                                    <tr>
                                                        <td><?= $no++ ?></td>
                                                        <td><?= $ad['nama'] ?> </td>
                                                        <td><?= $ad['alamat'] ?></td>
                                                        <td><?= $ad['email'] ?></td>
                                                        <td><?= $ad['nohp'] ?></td>
                                                        <td>
                                                            <a href="<?= base_url('executive/partner/detail/' . $ad['idPartner']); ?>" class="btn btn-info">
                                                                <i class="fe fe-eye"></i> Detail
                                                            </a>
                                                            <a class="btn btn-primary" href="<?= base_url('executive/edit/partner/' . $ad['idPartner']) ?>">
                                                                <i class="fe fe-edit"></i> Edit</a>
                                                            <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#modal<?php echo $ad['idPartner']; ?>">
                                                                <i class="fe fe-delete"></i> Delete</a>
                                                            <div class="modal fade" id="modal<?php echo $ad['idPartner']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-danger" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title">Hapus</h4>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true"></span>
                                                                            </button>
                                                                        </div>
                                                                        <form action="<?= base_url('executive/hapus/partner/' . $ad['idPartner']) ?>" method="post">
                                                                            <div class="modal-body">
                                                                                <span>Apa anda yakin ingin menghapus data <?= $ad['idPartner'] ?>?</span>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                                                <button type="submit" class="btn btn-danger">Ya, Hapus!</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <?php
            $this->load->view('Admin/footer');
            ?>
        </div>
    </body>
</html>