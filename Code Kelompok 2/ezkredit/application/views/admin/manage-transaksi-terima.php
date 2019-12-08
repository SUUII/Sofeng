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
    <title>Manage Transaksi</title>

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

</head>


<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Start header and footer here -->
        <!-- ============================================================== -->
        <?php
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        ?>


        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">


                    <div class="row">
                        <div class="col-xs-12">
                            <div class="page-title-box">
                                <h4 class="page-title">Manage Transaksi </h4>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                <div class="table-responsive">
                                    <?php
                                    if ($this->session->flashdata('success')) {
                                        $flash = $this->session->flashdata('success');
                                        ?>
                                        <div class="alert alert-success" role="alert">
                                            <?= $flash ?>
                                        </div>
                                    <?php } ?>
                                    <table class="table table-colored table-centered table-inverse m-0" border="1">
                                        <thead>
                                            <tr>
                                                <th style="width: 3%;">kode</th>
                                                <th style="width: 3%;">token</th>
                                                <th style="width: 3%;">nominal</th>
                                                <th style="width: 3%;">tanggal</th>
                                                <th style="width: 3%;">kode pegawai</th>
                                                <th style="width: 3%;">deskripsi</th>
                                                <th style="width: 5%; text-align: center;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data as $dt) : ?>
                                                <tr>
                                                    <td><?= $dt->kode ?></td>
                                                    <td><?= $dt->token ?></td>
                                                    <td><?= $dt->nominal ?></td>
                                                    <td><?= $dt->tanggal ?></td>
                                                    <td><?= $dt->kode_pegawai ?></td>
                                                    <td><?= $dt->deskripsi ?></td>
                                                    <td style="text-align: center;"> 
                                                        <a href="<?php echo site_url('admin/manage_transaksi/detail/' . $dt->kode) ?>" class="btn btn-small">
                                                            <i class="fa fa-info"></i> Detail
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>



                </div> <!-- container -->

            </div> <!-- content -->

            <?php
            $this->load->view('admin/templates/footer');
            ?>

        </div>

        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->



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