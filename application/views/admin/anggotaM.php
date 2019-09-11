<html>
    <head>
        <title>Dashboard - Anggota Intermedia</title>
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
                        <div class="page-header">
                            <h1 class="page-title">
                                Data Anggota Intermedia
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Table Anggota Intermedia</h3>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table card-table table-vcenter text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th class="w-1">No.</th>
                                                    <th>Id Anggota</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>Email</th>
                                                    <th>Action</th>     
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($anggota as $ad) {
                                                    ?>
                                                    <tr>
                                                        <td><?= $no++ ?></td>
                                                        <td><?= $ad['idAnggota'] ?> </td>
                                                        <td><?= $ad['nama_lengkap'] ?></td>
                                                        <td><?= $ad['email'] ?></td>
                                                        <td width="10px">
                                                            <a href="<?= base_url('executive/anggota/' . $ad['idAnggota']); ?>" class="btn btn-info">
                                                                <i class="fe fe-eye"></i> Detail
                                                            </a>
                                                            <?php
                                                            if ($jabatan->nama_jabatan == 'Koordinator') {
                                                                ?>
                                                                <a class="btn btn-primary" href="<?= base_url('Admin/Dashboard/editAdmin/' . $ad['idAnggota']) ?>">
                                                                    <i class="fe fe-edit"></i> Edit</a>
                                                                <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#modal<?php echo $ad['idAnggota']; ?>">
                                                                    <i class="fe fe-delete"></i> Delete</a>
                                                                <div class="modal fade" id="modal<?php echo $ad['idAnggota']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-danger" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title">Hapus</h4>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true"></span>
                                                                                </button>
                                                                            </div>
                                                                            <form action="<?= base_url('Admin/Dashboard/deleteAdmin/' . $ad['idAnggota']) ?>" method="post">
                                                                                <div class="modal-body">
                                                                                    <span>Apa anda yakin ingin menghapus data <?= $ad['idAnggota'] ?>?</span>
                                                                                </div>
                                                                                <input type="hidden" name="_token" value="icNnKky3mdoqVaJbrQbD9EW4LRfi6EqHsigzaoss">
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                                                    <button type="submit" class="btn btn-danger">Ya, Hapus!</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <?php
                                                            }
                                                            ?>
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
                            <?php
                            if ($jabatan->nama_jabatan == 'Koordinator') {
                                ?>
                                <div class="col-lg-6 col-xl-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                <i class="fe fe-plus"></i>  Tambah data anggota baru</h3>
                                            <div class="card-options">
                                                <a class="card-options-collapse" href="#" data-toggle="card-collapse">
                                                    <i class="fe fe-chevron-up"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!--<div class="card-alert alert alert-success mb-0">-->
                                        <?= $this->session->flashdata('pesan') ?>
                                        <!--</div>-->
                                        <div class="card-body">
                                            <form action="<?php echo base_url(); ?>executive/tambah/anggota" method="post">
                                                <div class="form-group">
                                                    <label class="form-label">ID Anggota</label>
                                                    <input type="hidden" name="idU" value="<?= $noUser ?>">
                                                    <input class="form-control" placeholder="ID Anggota" type="text" name="idA" required="required">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Nama Lengkap</label>
                                                    <input class="form-control" placeholder="Masukkan nama lengkap" type="text" name="nama" required="required">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Email</label>
                                                    <input class="form-control" placeholder="Masukkan Email" type="email" name="email" required="required">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Jenis Kelamin</label>
                                                    <select name="jk" class="form-control">
                                                        <option value="0">Pilih Jenis Kelamin</option>
                                                        <option value="Laki - Laki">Laki - Laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Divisi</label>
                                                    <select name="divisi" class="form-control">
                                                        <option value="0">Pilih Divisi</option>
                                                        <?php
                                                        foreach ($listD as $div) {
                                                            ?>
                                                            <option value="<?= $div['idDivisi'] ?>"><?= $div['nama_divisi'] ?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Jurusan</label>
                                                    <select name="jurusan" class="form-control">
                                                        <option value="0">Pilih Jurusan</option>
                                                        <?php
                                                        foreach ($listJ as $jur) {
                                                            ?>
                                                            <option value="<?= $jur['idJurusan'] ?>"><?= $jur['nama_jurusan'] ?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Jabatan</label>
                                                    <select name="jabatan" class="form-control">
                                                        <option value="0">Pilih Jabatan</option>
                                                        <?php
                                                        foreach ($listJb as $jb) {
                                                            ?>
                                                            <option value="<?= $jb['idJabatan'] ?>"><?= $jb['nama_jabatan'] ?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Password</label>
                                                    <input class="form-control" placeholder="Masukkan Password" name="password" type="password" required="required">
                                                </div>
                                                <div class="form-footer">
                                                    <button class="btn btn-primary btn-block" type="submit">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            } else {
                                echo "";
                            }
                            ?>
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