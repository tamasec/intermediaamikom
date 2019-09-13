<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Gabung Intermedia</title>
        <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/user/img/logo.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/user/images/icons/favicon.ico"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/user/vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/user/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/user/fonts/iconic/css/material-design-iconic-font.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/user/vendor/animate/animate.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/user/vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/user/vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/user/vendor/select2/select2.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/user/vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/user/vendor/noui/nouislider.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/user/css/util.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/user/css/main.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/admin/css/dashboard.css">
        <!--===============================================================================================-->
    </head>
    <style>
        .js .inputfile {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }

        .inputfile + label {
            max-width: 80%;

            /* 20px */

            text-overflow: ellipsis;
            white-space: nowrap;
            cursor: pointer;
            display: inline-block;
            overflow: hidden;
            padding: 0.625rem 1.25rem;
            /* 10px 20px */
        }

        .no-js .inputfile + label {
            display: none;
        }

        .inputfile:focus + label,
        .inputfile.has-focus + label {
            outline: 1px dotted #000;
            outline: -webkit-focus-ring-color auto 5px;
        }

        .inputfile + label * {
            /* pointer-events: none; */
            /* in case of FastClick lib use */
        }

        .inputfile + label svg {
            width: 1em;
            height: 1em;
            vertical-align: middle;
            fill: currentColor;
            margin-top: -0.25em;
            /* 4px */
            margin-right: 0.25em;
            /* 4px */
        }


        /* style 1 */

        .inputfile-1 + label {
            color: #f1e5e6;
            background-color: #d3394c;
        }

        .inputfile-1:focus + label,
        .inputfile-1.has-focus + label,
        .inputfile-1 + label:hover {
            background-color: #722040;
        }


        /* style 2 */

        .inputfile-2 + label {
            color: #d3394c;
            border: 2px solid currentColor;
        }

        .inputfile-2:focus + label,
        .inputfile-2.has-focus + label,
        .inputfile-2 + label:hover {
            color: #722040;
        }


        /* style 3 */

        .inputfile-3 + label {
            color: #d3394c;
        }

        .inputfile-3:focus + label,
        .inputfile-3.has-focus + label,
        .inputfile-3 + label:hover {
            color: #722040;
        }


        /* style 4 */

        .inputfile-4 + label {
            color: #d3394c;
        }

        .inputfile-4:focus + label,
        .inputfile-4.has-focus + label,
        .inputfile-4 + label:hover {
            color: #722040;
        }

        .inputfile-4 + label figure {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #d3394c;
            display: block;
            padding: 20px;
            margin: 0 auto 10px;
        }

        .inputfile-4:focus + label figure,
        .inputfile-4.has-focus + label figure,
        .inputfile-4 + label:hover figure {
            background-color: #722040;
        }

        .inputfile-4 + label svg {
            width: 100%;
            height: 100%;
            fill: #f1e5e6;
        }


        /* style 5 */

        .inputfile-5 + label {
            color: #d3394c;
        }

        .inputfile-5:focus + label,
        .inputfile-5.has-focus + label,
        .inputfile-5 + label:hover {
            color: #722040;
        }

        .inputfile-5 + label figure {
            width: 100px;
            height: 135px;
            background-color: #28a745;
            display: block;
            position: relative;
            padding: 30px;
            margin: 0 auto 10px;
        }

        .inputfile-5:focus + label figure,
        .inputfile-5.has-focus + label figure,
        .inputfile-5 + label:hover figure {
            background-color: #722040;
        }

        .inputfile-5 + label figure::before,
        .inputfile-5 + label figure::after {
            width: 0;
            height: 0;
            content: '';
            position: absolute;
            top: 0;
            right: 0;
        }

        .inputfile-5 + label figure::before {
            border-top: 20px solid #dfc8ca;
            border-left: 20px solid transparent;
        }

        .inputfile-5 + label figure::after {
            border-bottom: 20px solid #722040;
            border-right: 20px solid transparent;
        }

        .inputfile-5:focus + label figure::after,
        .inputfile-5.has-focus + label figure::after,
        .inputfile-5 + label:hover figure::after {
            border-bottom-color: #d3394c;
        }

        .inputfile-5 + label svg {
            width: 100%;
            height: 100%;
            fill: #f1e5e6;
        }


        /* style 6 */

        .inputfile-6 + label {
            color: #d3394c;
        }

        .inputfile-6 + label {
            border: 1px solid #d3394c;
            background-color: #f1e5e6;
            padding: 0;
        }

        .inputfile-6:focus + label,
        .inputfile-6.has-focus + label,
        .inputfile-6 + label:hover {
            border-color: #722040;
        }

        .inputfile-6 + label span,
        .inputfile-6 + label strong {
            padding: 0.625rem 1.25rem;
            /* 10px 20px */
        }

        .inputfile-6 + label span {
            width: 200px;
            min-height: 2em;
            display: inline-block;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            vertical-align: top;
        }

        .inputfile-6 + label strong {
            height: 100%;
            color: #f1e5e6;
            background-color: #d3394c;
            display: inline-block;
        }

        .inputfile-6:focus + label strong,
        .inputfile-6.has-focus + label strong,
        .inputfile-6 + label:hover strong {
            background-color: #722040;
        }

        @media screen and (max-width: 50em) {
            .inputfile-6 + label strong {
                display: block;
            }
        }

    </style>
    <body>


        <div class="container-contact100">
            <div class="wrap-contact100">
                <form class="contact100-form validate-form" action="<?= base_url(); ?>daftar/kirim" method="post" enctype="multipart/form-data">
                    <span class="contact100-form-title">
                        Bergabunglah bersama INTERMEDIA!
                    </span>
                    <?php if ($this->session->tempdata('pesan') != "") { ?>
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert"></button>
                            <?php echo $this->session->tempdata('pesan'); ?>
                        </div>
                    <?php } ?>
                    <div class="wrap-input100 validate-input bg1">
                        <span class="label-input100">Nama Lengkap *</span>
                        <input class="input100" type="text" name="nama" placeholder="misal: Tarjo Romadhona" required="required" value="<?= ($this->session->tempdata('nama') != "" ? $this->session->tempdata('nama') : ""); ?>">
                    </div>

                    <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
                        <span class="label-input100">Email Aktif *</span>
                        <input class="input100" type="text" name="email" placeholder="misal: john.doe@example.com"  required="required" value="<?= ($this->session->tempdata('email') != "" ? $this->session->tempdata('email') : ""); ?>">
                    </div>

                    <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
                        <span class="label-input100">Nomor HP/WA Aktif *</span>
                        <input class="input100" type="text" name="phone" placeholder="misal: 0821xxxxxxxx" required="required" maxlength="13" value="<?= ($this->session->tempdata('no') != "" ? $this->session->tempdata('no') : ""); ?>">
                    </div>
                    <div class="wrap-input100  bg1 rs1-wrap-input100" >
                        <span class="label-input100">Tanggal Lahir *</span>
                        <input class="input100" type="date" name="tl" value="<?= ($this->session->tempdata('ttl') != "" ? $this->session->tempdata('ttl') : ""); ?>">
                    </div>
                    <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" required="required">
                        <span class="label-input100">Jenis Kelamin *</span>
                        <div>
                            <select class="js-select2" name="jk" required="required">
                                <option value="Laki - Laki">Laki - Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>
                    </div>
                    <div class="wrap-input100 input100-select bg1">
                        <span class="label-input100">Jurusan *</span>
                        <div>
                            <select class="js-select2" name="jurusan" required="required">
                                <option>Silahkan Pilih</option>
                                <?php
                                foreach ($listJ as $jur) {
                                    ?>
                                    <option value="<?= $jur['idJurusan'] ?>"><?= $jur['nama_jurusan'] ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>
                    </div>
                    <div class="wrap-input100 input100-select bg1">
                        <span class="label-input100">Divisi *</span>
                        <div>
                            <select class="js-select2" name="divisi" required="required">
                                <option>Silahkan Pilih</option>
                                <?php
                                foreach ($listD as $div) {
                                    ?>
                                    <option value="<?= $div['idDivisi'] ?>"><?= $div['nama_divisi'] ?></option>
                                <?php } ?>
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>
                    </div>

                    <div class="wrap-input100 validate-input bg0 rs1-alert-validate">
                        <span class="label-input100">Alamat Lengkap *</span>
                        <textarea class="input100" name="alamat" placeholder="misal: Jalan Kenangan Nomor 69 RT 14 RW 02 Desa Februari Kecamatan Barbar Kota Meikarta" required="required"><?= ($this->session->tempdata('alamat') != "" ? $this->session->tempdata('alamat') : ""); ?></textarea>
                    </div>

                    <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
                        <span class="label-input100">Foto (JPG, JPEG, PNG) *</span>
                        <input type="file" name="foto" id="file-6" style="opacity:0;" class="inputfile inputfile-5" accept="image/*"/>
                        <label for="file-6"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span name="fotonama"></span></label>
                        
                    </div>
                    <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
                        <span class="label-input100">CV (PDF) *</span>
                        <input type="file" name="cv" id="file-7" style="opacity:0;" class="inputfile inputfile-5" accept="application/pdf"/>
                        <label for="file-7"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span name="cvnama"></span></label>
                        
                    </div>
                    <div class="wrap-input100 validate-input bg1" data-validate="Mohon form nama diisi">
                        <span class="label-input100">Note *</span><br>
                        <h5>Foto harus formal dan maksimal ukuran 512 KB</h5>
                        <h5>CV maksimal ukuran 1 MB</h5><br>
                        <h5>Untuk Contoh CV dapat didownload di bawah</h5>
                        <a class="btn btn-success" href="<?= base_url(); ?>assets/user/images/cv.jpg" target="_blank">Download</a>
                        <h5>Untuk informasi lebih lanjut, kamu bisa menghubungi:</h5>
                        <h5><a class="btn btn-info" href="tel:+6285740470462">Dhandi: +62 857-4047-0462</a></h5>
                    </div>

                    <div class="container-contact100-form-btn">
                        <button class="contact100-form-btn">
                            <span>
                                Submit
                                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>



        <!--===============================================================================================-->
        <script src="<?php echo base_url() ?>assets/user/vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url() ?>assets/user/vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url() ?>assets/user/vendor/bootstrap/js/popper.js"></script>
        <script src="<?php echo base_url() ?>assets/user/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url() ?>assets/user/vendor/select2/select2.min.js"></script>
        <script>
            $(".js-select2").each(function () {
                $(this).select2({
                    minimumResultsForSearch: 20,
                    dropdownParent: $(this).next('.dropDownSelect2')
                });


                $(".js-select2").each(function () {
                    $(this).on('select2:close', function (e) {
                        if ($(this).val() == "- Pilih -") {
                            $('.js-show-service').slideUp();
                        } else {
                            $('.js-show-service').slideUp();
                            $('.js-show-service').slideDown();
                        }
                    });
                });
            })
        </script>
        <script>
            /*
             By Osvaldas Valutis, www.osvaldas.info
             Available for use under the MIT License
             */

            'use strict';
            
            (function (document, window, index)
            {
                $('input[name=nama]').on('keypress', function (event) {
                    var regex = new RegExp("^[a-zA-Z\\s']+$");
                    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
                    if (!regex.test(key)) {
                    event.preventDefault();
                    return false;
                    }
                });
                $('input[name=phone]').on('keypress', function (event) {
                    var regex = new RegExp("^[0-9]+$");
                    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
                    if (!regex.test(key)) {
                    event.preventDefault();
                    return false;
                    }
                });
                $('textarea').on('keypress', function (event) {
                    var regex = new RegExp("^[a-zA-Z\\s'.0-9/]+$");
                    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
                    if (!regex.test(key)) {
                    event.preventDefault();
                    return false;
                    }
                });
                var inputs = document.querySelectorAll('.inputfile');
                Array.prototype.forEach.call(inputs, function (input)
                {
                    var label = input.nextElementSibling,
                            labelVal = label.innerHTML;

                    $("#file-6").change(function(e) {
                        var fileExtension = ["jpg","jpeg","png"];
                        if ($.inArray($(this).val().split(".").pop().toLowerCase(), fileExtension) == -1) {
                            alert("Hanya format file berikut yang dapat diterima : " + fileExtension.join(", "));
                        } else {
                            var namafile = e.target.files[0].name;
                            var ukurfile = e.target.files[0].size;
                            if (ukurfile <= 0.512 * Math.pow(2, 20)) {
                                $("span[name=fotonama]").html(namafile);
                            } else {
                                alert("Ukuran file tersebut terlalu besar. Batas maksimum ukuran file adalah 512 KB");
                            }
                        }
                    });
                    $("#file-7").change(function(e) {
                        var fileExtension = ["pdf"];
                        if ($.inArray($(this).val().split(".").pop().toLowerCase(), fileExtension) == -1) {
                            alert("Hanya format file berikut yang dapat diterima : " + fileExtension.join(", "));
                        } else {
                            var namafile = e.target.files[0].name;
                            var ukurfile = e.target.files[0].size;
                            if (ukurfile <= 1 * Math.pow(2, 20)) {
                                $("span[name=cvnama]").html(namafile);
                            } else {
                                alert("Ukuran file tersebut terlalu besar. Batas maksimum ukuran file adalah 1 MB");
                            }
                        }
                    });
                    // input.addEventListener('change', function (e)
                    // {
                    //     var fileName = '';
                    //     //if (this.files && this.files.length > 1)
                    //     //    fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
                    //     //else
                    //         fileName = e.target.value.split('\\').pop();

                    //     if (fileName)
                    //         label.querySelector('span').innerHTML = fileName;
                    //     else
                    //         label.innerHTML = labelVal;
                    // });

                    // Firefox bug fix
                    input.addEventListener('focus', function () {
                        input.classList.add('has-focus');
                    });
                    input.addEventListener('blur', function () {
                        input.classList.remove('has-focus');
                    });
                });
            }(document, window, 0));
        </script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url() ?>assets/user/vendor/daterangepicker/moment.min.js"></script>
        <script src="<?php echo base_url() ?>assets/user/vendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url() ?>assets/user/vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->

        <!--===============================================================================================-->
        <script src="<?php echo base_url() ?>assets/user/js/main_form.js"></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-23581568-13');
        </script>

    </body>
</html>
