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
                <div class="my-3 my-md-5">
                    <div class="container">
                        <div class="page-header">
                            <h1 class="page-title">
                                Informasi Intermedia
                            </h1>

                        </div>
                        <!--                        <div class="col">-->
                        <a class="btn btn-primary mb-5" href="<?= base_url(); ?>executive/tambah/tentang">Tambah Data</a>
                        <!--</div>-->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Tentang Intermedia</h3>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table card-table table-vcenter text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th class="w-1">No.</th>
                                                    <th>Asas</th>
                                                    <th>Moto</th>
                                                    <th>Action</th>     
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($intermedia as $ad) {
                                                    ?>
                                                    <tr>
                                                        <td><?= $no++ ?></td>
                                                        <td><?= $ad['asas'] ?> </td>
                                                        <td><?= $ad['motto'] ?></td>
                                                        <td>
                                                            <a class="btn btn-primary" href="<?= base_url('executive/edit/tentang/' . $ad['id']) ?>">
                                                                <i class="fe fe-edit"></i> Edit</a>
                                                            <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#modal<?php echo $ad['id']; ?>">
                                                                <i class="fe fe-delete"></i> Delete</a>
                                                            <div class="modal fade" id="modal<?php echo $ad['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-danger" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title">Hapus</h4>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true"></span>
                                                                            </button>
                                                                        </div>
                                                                        <form action="<?= base_url('executive/hapus/tentang/' . $ad['id']) ?>" method="post">
                                                                            <div class="modal-body">
                                                                                <span>Apa anda yakin ingin menghapus data <?= $ad['id'] ?>?</span>
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