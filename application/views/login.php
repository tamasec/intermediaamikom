<html>
    <head>
        <title>Intermedia Admin Login</title>
        <?php
        $this->load->view('admin/header');
        ?>
    </head>
    <body>
        <div class="page">
            <div class="page-single">
                <div class="container">
                    <div class="row">
                        <div class="col col-login mx-auto">

                            <form class="card" action="<?= base_url(); ?>executive/login" method="post">
                                <div class="card-body p-6">
                                    <div class="card-title">
                                        <div class="text-center mb-6">
                                            Login User Intermedia
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">ID Anggota</label>
                                        <input type="text" class="form-control" name="idA" placeholder="Masukkan ID anggota anda">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Masukkan Password anda">
                                    </div>
                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-primary btn-block">Log - In</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </body>
</html>