<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= isset($title) ? 'Evenire - ' . $title : NULL ?></title>
    <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/colors/blue.css" id="theme" rel="stylesheet">
    <?php isset($stylesheets) ? $this->load->view($stylesheets) : NULL ?>
</head>

<body class="fix-header fix-sidebar card-no-border">
  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
      <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header">
          <a class="navbar-brand" href="index.html">
            <!-- Logo icon -->
            <b>
              <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
              <!-- Dark Logo icon -->
              <!--<img src="<?= base_url() ?>assets/images/logo-icon.png" alt="homepage" class="dark-logo" /> -->

              <!-- Light Logo icon -->
              <!--<img src="<?= base_url() ?>assets/images/logo-light-icon.png" alt="homepage" class="light-logo" /> -->
            </b>
            <!--End Logo icon -->
            <!-- Logo text -->
            <span>
            <!-- dark Logo text -->
            <img src="<?= base_url() ?>assets/images/logo-text2.png" alt="homepage" class="dark-logo" />
            <!-- Light Logo text -->
           <!-- <img src="<?= base_url() ?>assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> -->
          </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse">
          <!-- ============================================================== -->
          <!-- toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav mr-auto mt-md-0 ">
            <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
            <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="icon-arrow-left-circle ti-menu"></i></a> </li>
          </ul>
          <ul class="navbar-nav my-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?= base_url() ?>assets/images/users/1.jpg" alt="user" class="profile-pic"></a>
              <div class="dropdown-menu dropdown-menu-right animated flipInY">
                <ul class="dropdown-user">
                  <li>
                    <div class="dw-user-box">
                      <div class="u-img"><img src="<?= base_url() ?>assets/images/users/1.jpg" alt="user"></div>
                      <div class="u-text">
                        <h4></h4>
                    </div>
                  </li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#"><i class="ti-email"></i> Mail</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <?php $this->load->view('layouts/sidebar') ?>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
      <!-- ============================================================== -->
      <!-- Container fluid  -->
      <!-- ============================================================== -->
      <div class="container-fluid">
        <div class="row page-titles">
          <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0"><?= isset($title) ? $title : NULL ?></h3>
            <small><?= isset($sub_title) ? $sub_title : NULL ?></small>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <?php $this->load->view($content) ?>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Container fluid  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- footer -->
      <!-- ============================================================== -->
      <footer class="footer text-center">
        © 2019 Evenire by Team Tabudot
      </footer>
      <!-- ============================================================== -->
      <!-- End footer -->
      <!-- ============================================================== -->
    </div>
  <!-- ============================================================== -->
  <!-- End Page wrapper  -->
  <!-- ============================================================== -->
  </div>
  <script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/bootstrap/js/popper.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>assets/js/jquery.slimscroll.js"></script>
  <script src="<?= base_url() ?>assets/js/waves.js"></script>
  <script src="<?= base_url() ?>assets/js/sidebarmenu.js"></script>
  <script src="<?= base_url() ?>assets/vendor/sticky-kit-master/dist/sticky-kit.min.js"></script>
  <script src="<?= base_url() ?>assets/js/custom.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/flot/jquery.flot.js"></script>
  <script src="<?= base_url() ?>assets/vendor/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/styleswitcher/jQuery.style.switcher.js"></script>
  <script src="<?= base_url() ?>assets/vendor/chartist-js/dist/chartist.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/echarts/echarts-all.js"></script>
  <script src="<?= base_url() ?>assets/vendor/toast-master/js/jquery.toast.js"></script>
  <script src="<?= base_url() ?>assets/js/toastr.js"></script>
  <?php isset($scripts) ? $this->load->view($scripts) : NULL ?>
</body>

</html>
