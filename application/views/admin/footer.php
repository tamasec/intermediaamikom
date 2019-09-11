<footer class="footer">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-auto">

            </div>
            <div class="col-auto">

            </div>
        </div>
    </div>
    <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
        Copyright © 2018 . Theme by codecalm.net All rights reserved.
    </div>
</footer>
<script type="text/javascript" src="<?php echo site_url('assets/admin/plugins/ckeditor/ckeditor.js'); ?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/admin/plugins/ckfinder/ckfinder.js'); ?>"></script>
<!--<script src="<?= base_url(); ?>assets/admin/js/vendors/jquery-3.2.1.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/js/vendors/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/plugins/summernote/summernote.js"></script>
<script type="text/javascript">
    $('#editordata').summernote({
        height: 200,
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['insert', ['picture']]
        ],
//set callback image tuk upload ke serverside
        callbacks: {
            onImageUpload: function (files) {
                uploadFile(files[0]);
            }
        }

    });

    function uploadFile(file) {
        data = new FormData();
        data.append("file", file);

        $.ajax({
            data: data,
            type: "POST",
            url: "<?php echo base_url(); ?>summer/saveGambar",
            cache: false,
            contentType: false,
            processData: false,
            success: function (url) {
                console.log(url);
                $('#editordata').summernote("insertImage", url);
            }
        });
    }
</script>-->
