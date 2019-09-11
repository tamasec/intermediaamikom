
<div class="header py-4">
    <div class="container">
        <div class="d-flex">
            <a class="header-brand" href="#">
                <img src="<?= base_url(); ?>assets/admin/images/logoInmed.png" class="header-brand-img" alt="tabler logo">
            </a>
            <div class="d-flex order-lg-2 ml-auto">
                <div class="dropdown d-none d-md-flex">
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a href="#" class="dropdown-item d-flex">
                            <span class="avatar mr-3 align-self-center" style="background-image: url(<?= base_url(); ?>assets/admin/demo/faces/male/41.jpg)"></span>
                        </a>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                        <?php
                        if ($this->session->userdata('data')->foto == '' && $this->session->userdata('data')->jk == 'Laki - Laki') {
                            ?>
                            <span class="avatar" style="background-image: url(<?= base_url(); ?>assets/images/user_m.png)"></span>
                            <?php
                        } else if ($this->session->userdata('data')->foto == '' && $this->session->userdata('data')->jk == 'Perempuan') {
                            ?>
                            <span class="avatar" style="background-image: url(<?= base_url(); ?>assets/images/user_f.png)"></span>
                            <?php
                        } else {
                            ?>
                            <span class="avatar" style="background-image: url(<?= base_url(); ?>assets/admin/uploads/anggota/images/<?= $this->session->userdata('data')->foto?>)"></span>
                            <?php } ?>
                            <span class="ml-2 d-none d-lg-block">
                                <span class="text-default"><?= $this->session->userdata('data')->nama_lengkap ?></span>
                                <small class="text-muted d-block mt-1"><?= $jabatan->nama_jabatan ?></small>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="<?= base_url(); ?>executive/profile/<?= $this->session->userdata('data')->idAnggota ?>">
                                <i class="dropdown-icon fe fe-user"></i> Profil
                            </a>
                            <!--                                <a class="dropdown-item" href="#">
                                                                <i class="dropdown-icon fe fe-settings"></i> Settings
                                                            </a>-->
                            <a class="dropdown-item" href="<?= base_url(); ?>executive/logout">
                                <i class="dropdown-icon fe fe-log-out"></i> Sign out
                            </a>
                        </div>
                    </div>
                </div>
                <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                    <span class="header-toggler-icon"></span>
                </a>
            </div>
        </div>
    </div>
    <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 ml-auto">
                    <form class="input-icon my-3 my-lg-0">
                        <input type="search" class="form-control header-search" placeholder="Search&hellip;" tabindex="1">
                        <div class="input-icon-addon">
                            <i class="fe fe-search"></i>
                        </div>
                    </form>
                </div>
                <div class="col-lg order-lg-first">
                    <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>executive" class="nav-link <?php if (current_url() == base_url() . 'executive') { ?> active <?php } ?>">
                                <i class="fe fe-home"></i>Beranda
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>executive/anggota" class="nav-link <?php if (current_url() == base_url() . 'executive/anggota') { ?> active <?php } ?>">
                                <i class="fe fe-user"></i>Anggota
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>executive/berita" class="nav-link <?php if (current_url() == base_url() . 'executive/berita') { ?> active <?php } ?>">
                                <i class="fe fe-info"></i>Berita
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>executive/acara" class="nav-link <?php if (current_url() == base_url() . 'executive/acara') { ?> active <?php } ?>">
                                <i class="fe fe-book-open"></i>Acara
                            </a>
                        </li>
                        <?php
                        if ($jabatan->nama_jabatan == 'Anggota') {
                            echo "";
                        } else {
                            ?>
                            <li class="nav-item">
                                <a href="<?= base_url(); ?>executive/pencapaian" class="nav-link <?php if (current_url() == base_url() . 'executive/pencapaian') { ?> active <?php } ?>">
                                    <i class="fe fe-award"></i>Pencapaian
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url(); ?>executive/pendaftaran" class="nav-link <?php if (current_url() == base_url() . 'executive/pendaftaran') { ?> active <?php } ?>">
                                    <i class="fe fe-user-plus"></i>Pendaftaran
                                </a>
                            </li>
                            <?php
                        }
                        ?>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>executive/pengurus/divisi" class="nav-link <?php if (current_url() == base_url() . 'executive/pengurus/divisi') { ?> active <?php } ?>">
                                <i class="fe fe-database"></i>Divisi
                            </a>
                        </li>
                        <?php
                        if ($jabatan->nama_jabatan == 'Ketua' || $jabatan->nama_jabatan == 'Koordinator') {
                            ?>
                            <li class="nav-item">
                                <a class="nav-link icon <?php if (current_url() == base_url() . 'executive/tentang') { ?> active <?php } else if (current_url() == base_url() . 'executive/jurusan') { ?> active <?php } else if (current_url() == base_url() . 'executive/divisi') { ?> active <?php } else if (current_url() == base_url() . 'executive/jabatan') { ?> active <?php } ?>" data-toggle="dropdown">
                                    <i class="fe fe-bell"></i>Lain Lain
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a href="<?= base_url(); ?>executive/tentang" class="dropdown-item d-flex">
                                        Tentang
                                    </a>
                                    <a href="<?= base_url(); ?>executive/jurusan" class="dropdown-item d-flex">
                                        Jurusan
                                    </a>
                                    <a href="<?= base_url(); ?>executive/divisi" class="dropdown-item d-flex">
                                        Divisi
                                    </a>
                                    <a href="<?= base_url(); ?>executive/jabatan" class="dropdown-item d-flex">
                                        Jabatan
                                    </a>
                                    <a href="<?= base_url(); ?>executive/partner" class="dropdown-item d-flex">
                                        Media Partner
                                    </a>
                                </div>
                            </li>
                        <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>