<header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url('kepala_cabang/dashboard') ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>JR</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Jasa </b>Raharja</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <span style="line-height:50px; color:#fff; font-family: Helvetica Neue,Helvetice, Arial, sans-serif; font-size:20px; text-align:center; width: 230px;"><?php echo $this->session->userdata('nama_regional') ?></span>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url('assets/upload/image/default.png') ?>" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $this->session->userdata('nama') ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url('assets/upload/image/default.png') ?>" class="img-circle" alt="User Image">
                    <p>
                      <?php echo $this->session->userdata('nama') ?>
                      <small><?php echo date('d M Y')?></small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo base_url('kepala_cabang/profile') ?>" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url('login/logout')?>" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                    <div>
                      <a href="<?php echo base_url('kepala_cabang/profile/password') ?>" class="btn btn-default btn-flat btn-md">Ubah Password</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>