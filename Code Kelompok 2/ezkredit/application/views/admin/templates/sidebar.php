<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Navigation</li>

                <li class="has_sub">
                    <a href="<?php echo base_url() ?>admin/dashboard" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span> </a>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Data Pelanggan </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo base_url() ?>admin/manage_post/adddata">Add Data</a></li>
                        <li><a href="<?php echo base_url() ?>admin/manage_post/flagnol">Belum Diperiksa</a></li>
                        <li><a href="<?php echo base_url() ?>admin/manage_post/flagsatu">Datang Ke Kantor</a></li>
                        <li><a href="<?php echo base_url() ?>admin/manage_post/flagdua">Diterima</a></li>
                        <li><a href="<?php echo base_url() ?>admin/manage_post/flagtiga">Ditolak</a></li>
                        <li><a href="<?php echo base_url() ?>admin/manage_post/lunas">Lunas</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(1);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Data Transaksi </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo base_url() ?>admin/manage_transaksi">Manage Transaksi</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(2);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Pegawai </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo base_url() ?>admin/manage_pegawai">Manage Pegawai</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->

    </div>
    <!-- Sidebar -left -->

</div>