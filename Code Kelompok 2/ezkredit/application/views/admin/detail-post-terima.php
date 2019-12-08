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
                                <h4 class="page-title">Event </h4>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="col-sm-12" style="font-size: 18px">
                            <div class="card-box">
                                <div class="table-responsive">
                                    <div class="col-sm-2">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">token</li>
                                            <li class="list-group-item">nama</li>
                                            <li class="list-group-item">alamat</li>
                                            <li class="list-group-item">telp</li>
                                            <li class="list-group-item">email</li>
                                            <li class="list-group-item">hutang</li>
                                            <li class="list-group-item">lama</li>
                                            <li class="list-group-item">bunga</li>
                                            <li class="list-group-item">tangal_daftar</li>
                                            <li class="list-group-item">statktp</li>
                                            <li class="list-group-item">statslip</li>
                                            <li class="list-group-item">statkk</li>
                                            <li class="list-group-item">statjaminan</li>
                                            <li class="list-group-item">flag</li>
                                            <li class="list-group-item">Deskripsi</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">: <?= $data->token ?></li>
                                            <li class="list-group-item">: <?= $data->nama ?></li>
                                            <li class="list-group-item">: <?= $data->alamat ?></li>
                                            <li class="list-group-item">: <?= $data->telp ?></li>
                                            <li class="list-group-item">: <?= $data->email ?></li>
                                            <li class="list-group-item">: <?= $data->hutang ?></li>
                                            <li class="list-group-item">: <?= $data->lama ?></li>
                                            <li class="list-group-item">: <?= $data->bunga ?></li>
                                            <li class="list-group-item">: <?= $data->tangal_daftar ?></li>
                                            <li class="list-group-item">: <?php if ($data->statktp == null) {
                                                        echo '-';
                                                    } else {
                                                        if($data->statktp==0){
                                                            echo 'Belum Ditentukan';
                                                        }else if($data->statktp==1){
                                                            echo 'Diterima';
                                                        }else{
                                                            echo 'Ditolak';
                                                        }
                                                    } ?>
                                                    <div class="tampilan" style="float: right">
                                                        <a href="" class="btn btn-small">
                                                            Edit
                                                        </a>
                                                        <a onclick="deleteConfirm('')" href="#!" class="btn btn-small text-danger">
                                                            Reset
                                                        </a>
                                                        <a href="<?php echo site_url('admin/Manage_post/foto/' . $data->token).'/1'?>" class="btn btn-small">
                                                            Detail
                                                        </a>
                                                    </div>            
                                            </li>
                                            <li class="list-group-item">: <?php if ($data->statslip == null) {
                                                        echo '-';
                                                    } else {
                                                        if($data->statslip==0){
                                                            echo 'Belum Ditentukan';
                                                        }else if($data->statslip==1){
                                                            echo 'Diterima';
                                                        }else{
                                                            echo 'Ditolak';
                                                        }
                                                    } ?>
                                                    <div class="tampilan" style="float: right">
                                                        <a href="" class="btn btn-small">
                                                            Edit
                                                        </a>
                                                        <a onclick="deleteConfirm('')" href="#!" class="btn btn-small text-danger">
                                                            Reset
                                                        </a>
                                                        <a href="<?php echo site_url('admin/Manage_post/foto/' . $data->token).'/2'?>" class="btn btn-small">
                                                            Detail
                                                        </a>
                                                    </div>
                                            </li>
                                            <li class="list-group-item">: <?php if ($data->statkk == null) {
                                                        echo '-';
                                                    } else {
                                                        if($data->statkk==0){
                                                            echo 'Belum Ditentukan';
                                                        }else if($data->statkk==1){
                                                            echo 'Diterima';
                                                        }else{
                                                            echo 'Ditolak';
                                                        }
                                                    } ?>
                                                    <div class="tampilan" style="float: right">
                                                        <a href="" class="btn btn-small">
                                                            Edit
                                                        </a>
                                                        <a onclick="deleteConfirm('')" href="#!" class="btn btn-small text-danger">
                                                            Reset
                                                        </a>
                                                        <a href="<?php echo site_url('admin/Manage_post/foto/' . $data->token).'/3'?>" class="btn btn-small">
                                                            Detail
                                                        </a>
                                                    </div>
                                            </li>
                                            <li class="list-group-item">: <?php if ($data->statjaminan == null) {
                                                        echo '-';
                                                    } else {
                                                        if($data->statjaminan==0){
                                                            echo 'Belum Ditentukan';
                                                        }else if($data->statjaminan==1){
                                                            echo 'Diterima';
                                                        }else{
                                                            echo 'Ditolak';
                                                        }
                                                    } ?>
                                                    <div class="tampilan" style="float: right">
                                                        <a href="" class="btn btn-small">
                                                            Edit
                                                        </a>
                                                        <a onclick="deleteConfirm('')" href="#!" class="btn btn-small text-danger">
                                                            Reset
                                                        </a>
                                                        <a href="<?php echo site_url('admin/Manage_post/foto/' . $data->token).'/4'?>" class="btn btn-small">
                                                            Detail
                                                        </a>
                                                    </div>
                                            </li>        
                                            <li class="list-group-item">: <?php if ($data->flag == null) {
                                                        echo '-';
                                                    } else {
                                                        if($data->flag==0){
                                                            echo 'Belum Ditentukan';
                                                        }else if($data->flag==1){
                                                            echo 'Diterima';
                                                        }else{
                                                            echo 'Ditolak';
                                                        }
                                                    } ?>
                                                    <div class="tampilan" style="float: right">
                                                        <a href="" class="btn btn-small">
                                                            Edit
                                                        </a>
                                                        <a onclick="deleteConfirm('')" href="#!" class="btn btn-small text-danger">
                                                            Reset
                                                        </a>
                                                        <a href="<?php echo site_url('admin/Manage_post/detail/' . $data->token) ?>" class="btn btn-small">
                                                            Detail
                                                        </a>
                                                    </div>        
                                            </li>
                                            <li class="list-group-item">: <?= $data->deskripsi ?></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-5">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <img width="100%" class="img-fluid" src="<?= base_url()?>assets/images/upload/pelanggan/<?= $data->token ?>.jpg" alt="">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- container -->
                    <?php if($penanda == 1){ ?>
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
                                <?php foreach ($transaksi as $dt) : ?>
                                    <tr>
                                        <td><?= $dt->kode ?></td>
                                        <td><?= $dt->token ?></td>
                                        <td><?= $dt->nominal ?></td>
                                        <td><?= $dt->tanggal ?></td>
                                        <td><?= $dt->kode_pegawai ?></td>
                                        <td><?= $dt->deskripsi ?></td>
                                        <td style="text-align: center;"> 
                                            <a href="<?php echo site_url('admin/manage_transaksi/formedit/' . $dt->kode) ?>" class="btn btn-small">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
                                            <a onclick="deleteConfirm('<?php echo site_url('admin/manage_transaksi/delete/' . $dt->kode) ?>')" href="#!" class="btn btn-small text-danger">
                                                <i class="fa fa-trash"></i> Hapus
                                            </a>
                                            <a href="<?php echo site_url('admin/manage_transaksi/detail/' . $dt->kode) ?>" class="btn btn-small">
                                                <i class="fa fa-info"></i> Detail
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <?php } ?>
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