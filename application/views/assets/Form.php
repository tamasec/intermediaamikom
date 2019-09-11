<?php $this->load->view('assets/partikelcss'); ?>
<header id="main-header" class="large-header">
        <canvas id="demo-canvas"></canvas>
        <div class="main-title ">
          <section class="moduler wrapper_404">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="text-center">
                          <?php if ($status == "dibuka") { ?>
                            <h1 class="wow fadeInUp animated cd-headline slide" style="color: green;" data-wow-delay=".4s" >Hey,</h1>
                              <h3 class="wow fadeInUp animated" data-wow-delay=".6s">Pendaftaran Anggota UKM Intermedia masih dibuka nih guys!</h3>
                              <p class="wow fadeInUp animated" data-wow-delay=".9s"><i id="demo"></i></p>
                              <p id="daemo" style="font-size:40px; font-family:monospace;"></p>
                              <center id="daftarnya"><a href="<?php echo base_url()?>daftar" class="btn btn-dafault btn-home wow fadeInUp animated" data-wow-delay=".6s">Ayo, daftar sekarang!</a></center>
                          <?php } else if ($status == "belum") { ?>
                            <h1 class="wow fadeInUp animated cd-headline slide" style="color: green;" data-wow-delay=".4s" >Eh!</h1>
                              <h3 class="wow fadeInUp animated" data-wow-delay=".6s">Pendaftaran Anggota UKM Intermedia belum dibuka nih. Stay tune, ya!</h3>
                              <!-- <p class="wow fadeInUp animated" data-wow-delay=".9s">Tinggal </p> -->
                              <p id="daemo" style="font-size:40px; font-family:monospace;"></p>
                              <!-- <a href="<?php echo base_url()?>daftar" class="btn btn-dafault btn-home wow fadeInUp animated" data-wow-delay=".6s">Kuy</a> -->
                              <?php } else { ?>
                            <h1 class="wow fadeInUp animated cd-headline slide" style="color: green;" data-wow-delay=".4s" >Yaahh,</h1>
                              <h3 class="wow fadeInUp animated" data-wow-delay=".6s">Pendaftaran Anggota UKM Intermedia sudah ditutup :(</h3>
                              <!-- <p class="wow fadeInUp animated" data-wow-delay=".9s">Tinggal </p> -->
                              <p id="daemo" style="font-size:40px; font-family:monospace;"></p>
                              <!-- <a href="<?php echo base_url()?>daftar" class="btn btn-dafault btn-home wow fadeInUp animated" data-wow-delay=".6s">Kuy</a> -->
                          <?php } ?>
                          </div>
                      </div>
                  </div>
              </div>
          </section>

          </div>

 </header>
<?php $this->load->view('assets/particlejs'); ?>
