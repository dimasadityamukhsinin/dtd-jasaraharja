<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">PETUNJUK</li>

            <!-- MENU DASHBOARD -->
            <li><a href="<?php echo base_url('kasubag/dashboard') ?>"><i class="fa fa-dashboard text-aqua"></i> <span>DASHBOARD</span></a></li>
                        
            <!-- MENU MASTER DATA -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>MASTER DATA</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url('kasubag/total_data') ?>"><i class="fa fa-angle-right"></i> <span>Total Data</span></a></li>
                <li><a href="<?php echo base_url('kasubag/belum_diproses') ?>"><i class="fa fa-angle-right"></i> <span>Belum Diproses</span></a></li>
                <li><a href="<?php echo base_url('kasubag/sudah_diproses') ?>"><i class="fa fa-angle-right"></i> <span>Sudah Diproses</span></a></li>
                <li><a href="<?php echo base_url('kasubag/selesai')?>"><i class="fa fa-angle-right"></i> Selesai</a></li>                
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
            <li><a href="<?php echo base_url('kasubag/dashboard') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          </ol> -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-body">