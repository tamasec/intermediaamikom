<html>
    <head>
        <title>Detail Profile</title>
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
                                                <form action="<?php echo base_url(); ?>executive/edit/profile/<?= $tampil->idAnggota ?>" method="post" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label class="form-label">ID Anggota</label>
                                                        <input class="form-control" value="<?= $tampil->idAnggota ?>" placeholder="ID Anggota" type="text" name="idAnggota" required="required">
                                                    </div>
                                                    <?php
                                                    if ($tampil->noAnggota == "") {
                                                        echo "";
                                                    } else {
                                                        ?>
                                                        <div class="form-group">
                                                            <label class="form-label">No Anggota</label>
                                                            <input class="form-control" value="<?= $tampil->noAnggota ?>" placeholder="ID Anggota" type="text" name="noA" required="required">
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>
                                                    <div class="form-group">
                                                        <label class="form-label">Nama Lengkap</label>
                                                        <input class="form-control" value="<?= $tampil->nama_lengkap ?>" placeholder="Masukkan nama lengkap" type="text" name="nama" required="required">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label">NIM</label>
                                                        <input class="form-control" value="<?= $tampil->nim ?>" placeholder="Masukkan Nim" type="text" name="nim" required="required">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label">Email</label>
                                                        <input class="form-control" value="<?= $tampil->email ?>" placeholder="Masukkan Email" type="email" name="email" required="required">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label">Jenis Kelamin</label>
                                                        <select name="jk" class="form-control">
                                                            <option value="Laki - Laki" <?php if ($tampil->jk == "Laki - Laki") { ?>selected<?php } ?>>Laki - Laki</option>
                                                            <option value="Perempuan" <?php if ($tampil->jk == "Perempuan") { ?>selected<?php } ?>>Perempuan</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label">Tanggal Lahir</label>
                                                        <input class="form-control" type="date"  value="<?= $tampil->ttl ?>" name="ttl" required="required">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label">Alamat</label>
                                                        <textarea class="form-control" placeholder="Masukkan Alamat Lengkap" name="alamat" required="required"><?= $tampil->alamat ?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label">Angkatan</label>
                                                        <input class="form-control" value="<?= $tampil->angkatan ?>" placeholder="Masukkan Angkatan" type="text" name="angkatan" required="required">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label">No Handphone</label>
                                                        <input class="form-control" value="<?= $tampil->noHp ?>" placeholder="Masukkan No Handphone aktif" type="number" name="noHp" required="required">
                                                    </div>
<!--                                                    <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Your Email (e@a.x)">
                                                        <span class="label-input100">Foto *</span>
                                                        <input type="file" name="foto" id="file-6" style="opacity:0;" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" multiple accept="image/*" />
                                                        <label for="file-6"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span></span></label>
                                                    </div>-->
                                                    <div class="form-group">
                                                        <label class="form-label">Foto : </label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="foto" name="foto" accept="image/*">
                                                            <label class="custom-file-label" for="customFile">
                                                                <?php
                                                                if ($tampil->foto == "") {
                                                                    echo "Belum ada Foto";
                                                                } else {
                                                                    echo $tampil->foto;
                                                                }
                                                                ?></label>
                                                        </div>
                                                    </div>
                                                    <div class="form-footer">
                                                        <button class="btn btn-primary btn-block" type="submit">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--                            </form>-->
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
