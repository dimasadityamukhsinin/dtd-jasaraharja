<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">PETUNJUK</li>

            <!-- MENU DASHBOARD -->
            <li><a href="<?php echo base_url('admin/dashboard') ?>"><i class="fa fa-dashboard text-aqua"></i> <span>DASHBOARD</span></a></li>
                        
            <!-- MENU MASTER DATA -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>MASTER DATA</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url('admin/total_data') ?>"><i class="fa fa-angle-right"></i> <span>Total Data</span></a></li>
                <li><a href="<?php echo base_url('admin/belum_diproses') ?>"><i class="fa fa-angle-right"></i> <span>Belum Diproses</span></a></li>
                <li><a href="<?php echo base_url('admin/sudah_diproses') ?>"><i class="fa fa-angle-right"></i> <span>On Progress</span></a></li>
                <li><a href="<?php echo base_url('admin/selesai')?>"><i class="fa fa-angle-right"></i> Selesai</a></li>                
              </ul>
            </li>

            <!-- MENU MASTER DATA KAPAL -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>MASTER DATA KAPAL</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url('admin/kapal/total_data') ?>"><i class="fa fa-angle-right"></i> <span>Total Data</span></a></li>
                <li><a href="<?php echo base_url('admin/kapal/belum_diproses') ?>"><i class="fa fa-angle-right"></i> <span>Belum Diproses</span></a></li>
                <li><a href="<?php echo base_url('admin/kapal/sudah_diproses') ?>"><i class="fa fa-angle-right"></i> <span>On Progress</span></a></li>
                <li><a href="<?php echo base_url('admin/kapal/selesai')?>"><i class="fa fa-angle-right"></i> Selesai</a></li>                
              </ul>
            </li>

            <!-- MENU MASTER AKUN -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-user"></i> <span>MASTER AKUN</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url('admin/kasubag')?>"><i class="fa fa-angle-right"></i> Akun Kasubag</a></li>
                <li><a href="<?php echo base_url('admin/staff')?>"><i class="fa fa-angle-right"></i> Akun Staff</a></li>  
                <li><a href="<?php echo base_url('admin/petugas')?>"><i class="fa fa-angle-right"></i> Akun Petugas</a></li><li><a href="<?php echo base_url('admin/kepala_cabang')?>"><i class="fa fa-angle-right"></i> Akun Kepala Cabang</a></li>
              </ul>
            </li>

            <!-- MENU MASTER SAMSAT -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-group"></i> <span>MASTER SAMSAT</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url('admin/grafik_pencapaian')?>"><i class="fa fa-angle-right"></i> Grafik Pencapaian</a></li>
                <li><a href="<?php echo base_url('admin/anggaran_samsat')?>"><i class="fa fa-angle-right"></i> Anggaran Samsat</a></li>
              </ul>
            </li>
            
         
            <!-- MENU KONFIGURASI -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-wrench"></i> <span>KONFIGURASI</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url('admin/konfigurasi') ?>"><i class="fa fa-angle-right"></i> <span>Konfigurasi Umum</span></a></li>
                <li><a href="<?php echo base_url('admin/konfigurasi/gambar') ?>"><i class="fa fa-angle-right"></i> <span>Konfigurasi Gambar</span></a></li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <?php echo $title ?>
          </h1>
          <!-- <ol class="breadcrumb">
            <li><a href="<?php echo base_url('admin/dashboard') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          </ol> -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-body">