<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- App title -->
    <title>Detail Post</title>

    <!-- Summernote css -->
    <link href="<?php echo base_url() ?>assets1/plugins/summernote/summernote.css" rel="stylesheet" />

    <!-- Select2 -->
    <link href="<?php echo base_url() ?>assets1/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

    <!-- Jquery filer css -->
    <link href="<?php echo base_url() ?>assets1/plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets1/plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />

    <!-- App css -->
    <link href="<?php echo base_url() ?>assets1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets1/css/core.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets1/css/components.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets1/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets1/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets1/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets1/css/responsive.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets1/plugins/switchery/switchery.min.css">
    <script src="<?php echo base_url() ?>assets1/js/modernizr.min.js"></script>
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 -->
 <style type="text/css">
     .noselect {
  -webkit-touch-callout: none; /* iOS Safari */
    -webkit-user-select: none; /* Safari */
     -khtml-user-select: none; /* Konqueror HTML */
       -moz-user-select: none; /* Old versions of Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none; /* Non-prefixed version, currently
                                  supported by Chrome, Opera and Firefox */
}
 </style>
</head>
<div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="page-title-box">
                                <h4 class="page-title">Event </h4>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
					  <div class="row">
                        <div class="col-sm-12" style="font-size: 18px">
                            <div class="card-box">
                                <div class="table-responsive"><br>
								&nbsp &nbsp &nbsp <img src="<?php echo base_url(); ?>assets/images/logo1.png" alt="Mobirise" title="" style="height: 3.5rem"><br><br>



										      <div class="col-sm-3">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Status KTP</li>
                                                <li class="list-group-item">Status Slip</li>
                                                <li class="list-group-item">Status KK</li>
                                                <li class="list-group-item">Status Jaminan</li>
                                                <br><br>
                                                <li class="list-group-item">Detail </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">:<?php if($data -> statktp == 1){ ?> Diterima <?php }
																			else if($data -> statktp == 2){ ?> Ditolak<?php } ?> </li>
                                                <li class="list-group-item">:<?php if($data -> statslip == 1){ ?> Diterima<?php }
																			else if($data -> statslip == 2){ ?> Ditolak<?php } ?></li>
                                                <li class="list-group-item">:<?php if($data -> statkk == 1){ ?> Diterima<?php }
																			else if($data -> statkk == 2){ ?> Ditolak<?php } ?></li>
                                                <li class="list-group-item">:<?php if($data -> statjaminan == 1){ ?> Diterima<?php }
																			else if($data -> statjaminan == 2){ ?> Ditolak<?php } ?></li>
												<br><br>
												<li class="list-group-item">: Silahkan Datang Kekantor!!</li>
                                            </ul>
                                        </div>
										<div class="col-sm-4"> 
											<ul class="list-group list-group-flush">
											<li class="list-group-item"><img src="<?php echo base_url(); ?>assets/images/deal.png" alt="Mobirise" title="" style="height: 25.0rem"></li>
										</div>
	                              </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- container -->
										


	<script>
        function deleteConfirm(url) {
            if (confirm("Apakah anda yakin menghapus event ini ?")) {
                window.location.href = url;
            }
        }
		</script>
		<!-- jQuery  -->
    <script src="<?php echo base_url() ?>assets1/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets1/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets1/js/detect.js"></script>
    <script src="<?php echo base_url() ?>assets1/js/fastclick.js"></script>
    <script src="<?php echo base_url() ?>assets1/js/jquery.blockUI.js"></script>
    <script src="<?php echo base_url() ?>assets1/js/waves.js"></script>
    <script src="<?php echo base_url() ?>assets1/js/jquery.slimscroll.js"></script>
    <script src="<?php echo base_url() ?>assets1/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url() ?>assets1/plugins/switchery/switchery.min.js"></script>

    <!--Summernote js-->
    <script src="<?php echo base_url() ?>assets1/plugins/summernote/summernote.min.js"></script>
    <!-- Select 2 -->
    <script src="<?php echo base_url() ?>assets1/plugins/select2/js/select2.min.js"></script>
    <!-- Jquery filer js -->
    <script src="<?php echo base_url() ?>assets1/plugins/jquery.filer/js/jquery.filer.min.js"></script>

    <!-- page specific js -->
    <script src="<?php echo base_url() ?>assets1/pages/jquery.blog-add.init.js"></script>

    <!-- App js -->
    <script src="<?php echo base_url() ?>assets1/js/jquery.core.js"></script>
    <script src="<?php echo base_url() ?>assets1/js/jquery.app.js"></script>
    <script src="<?php echo base_url() ?>assets1/plugins/switchery/switchery.min.js"></script>

    <!--Summernote js-->
    <script src="<?php echo base_url() ?>assets1/plugins/summernote/summernote.min.js"></script>

</body>

</html>