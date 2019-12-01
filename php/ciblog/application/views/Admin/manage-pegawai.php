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
                                                <th style="width: 3%;">kode</th><!-- 
                                                <th style="width: 3%;">username</th>
                                                <th style="width: 3%;">password</th> -->
                                                <th style="width: 3%;">nama</th>
                                                <th style="width: 5%; text-align: center;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data as $dt) : ?>
                                                <tr>
                                                    <td><?= $dt->kode ?></td>

                                                    <!-- <?php 

                                                        if(strcmp($this->session->userdata('kode'), $dt -> kode) == 0){
                                                        ?>
                                                        <td><?= $dt->username ?></td>
                                                        <?php
                                                        }else{
                                                        ?>
                                                        <td>
                                                        <?php
                                                        for ($index = 0; $index < strlen($dt->username); $index++) {
                                                            echo '*';
                                                        }
                                                        ?>
                                                        </td>
                                                        <?php
                                                    }
                                                    ?>
                                                    
                                                    <?php 

                                                        if(strcmp($this->session->userdata('kode'), $dt -> kode) == 0){
                                                        ?>
                                                        <td><?= $dt->password ?></td>
                                                        <?php
                                                        }else{
                                                        ?>
                                                        <td>
                                                        <?php
                                                        for ($index = 0; $index < strlen($dt->password); $index++) {
                                                            echo '*';
                                                        }
                                                        ?>
                                                        </td>
                                                        <?php
                                                    }
                                                    ?> -->
                                                    <td><?= $dt->nama ?></td>
                                                    <td style="text-align: center;"> 

                                                        <?php if(strcmp($this->session->userdata('kode'), $dt -> kode) == 0){
                                                        ?>
                                                            
                                                        <form method="post" action="<?php echo base_url() ?>admin/manage_pegawai/edit_pegawai">
                                                        <button type="submit" class="btn btn-small" style="background-color: white;color: #337ab7">
                                                            <i class="fa fa-edit"></i> Ganti Password
                                                        </button>
                                                        <a onclick="deleteConfirm('<?php echo site_url('admin/manage_pegawai/delete/' . $dt->kode) ?>')" href="#!" class="btn btn-small text-danger">
                                                            <i class="fa fa-trash"></i> Hapus
                                                        </a>
                                                        </form>
                                                        <?php } ?>
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