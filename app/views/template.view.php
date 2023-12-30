<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?= $data['title'] ?> </title>
  <link rel="shortcut icon" href="<?= BASE_ASSETS ?>favicon.png" type="image/x-icon">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= BASE_ASSETS  ?>assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= BASE_ASSETS  ?>assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?= BASE_ASSETS  ?>assets/modules/bootstrap-social/bootstrap-social.css">
  <link rel="stylesheet" href="<?= BASE_ASSETS  ?>assets/modules/datatables/datatables.min.css">
  <link rel="stylesheet" href="<?= BASE_ASSETS  ?>assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= BASE_ASSETS  ?>assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= BASE_ASSETS ?>assets/modules/izitoast/css/iziToast.min.css">
  <link rel="stylesheet" href="<?= BASE_ASSETS ?>assets/modules/chocolat/dist/css/chocolat.css">




  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= BASE_ASSETS  ?>assets/css/style.css">
  <link rel="stylesheet" href="<?= BASE_ASSETS  ?>assets/css/components.css">

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">

      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Histories
              </div>
              <div class="search-item">
                <a href="#">How to hack NASA using CSS</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">Kodinger.com</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">#Stisla</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-header">
                Result
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="<?= BASE_ASSETS  ?>assets/img/products/product-3-50.png" alt="product">
                  oPhone S9 Limited Edition
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="<?= BASE_ASSETS  ?>assets/img/products/product-2-50.png" alt="product">
                  Drone X2 New Gen-7
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="<?= BASE_ASSETS  ?>assets/img/products/product-1-50.png" alt="product">
                  Headphone Blitz
                </a>
              </div>
              <div class="search-header">
                Projects
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-danger text-white mr-3">
                    <i class="fas fa-code"></i>
                  </div>
                  Stisla Admin Template
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-primary text-white mr-3">
                    <i class="fas fa-laptop"></i>
                  </div>
                  Create a new Homepage Design
                </a>
              </div>
            </div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Messages
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="<?= BASE_ASSETS  ?>assets/img/avatar/avatar-1.png" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b>
                    <p>Hello, Bro!</p>
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="<?= BASE_ASSETS  ?>assets/img/avatar/avatar-2.png" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Dedik Sugiharto</b>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="<?= BASE_ASSETS  ?>assets/img/avatar/avatar-3.png" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Agung Ardiansyah</b>
                    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="<?= BASE_ASSETS  ?>assets/img/avatar/avatar-4.png" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Ardian Rahardiansyah</b>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                    <div class="time">16 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="<?= BASE_ASSETS  ?>assets/img/avatar/avatar-5.png" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Alfa Zulkarnain</b>
                    <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-icon bg-primary text-white">
                    <i class="fas fa-code"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Template update is available now!
                    <div class="time text-primary">2 Min Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="far fa-user"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-success text-white">
                    <i class="fas fa-check"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-danger text-white">
                    <i class="fas fa-exclamation-triangle"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Low disk space. Let's clean it!
                    <div class="time">17 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="fas fa-bell"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Welcome to Stisla template!
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <img alt="image" src="<?= BASE_ASSETS  ?>assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
              <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>

      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?= BASE_PATH ?>dashboard"><i class="fas fa-code fa-lg mr-3 " style="font-size: 30px;"></i></i>Himasar</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?= BASE_PATH  ?>dashboard"><i class="fas fa-code " style="font-size: 20px;"></i></a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard </li>

            <li class="<?php echo $data['navbarDashboard'] ?? ''; ?>"><a class="nav-link" href="<?= BASE_PATH  ?>dashboard"><i class="fas fa-th-large"></i><span>Dashboard</span></a></li>

            <li class="menu-header">Database </li>
            <li class="<?php echo $data['navbarDosen'] ?? ''; ?>"><a class="nav-link" href="<?= BASE_PATH ?>dosen"><i class="fas fa-microscope"></i> <span>Dosen</span></a></li>
            <li class="<?php echo $data['navbarMHS'] ?? ''; ?>"><a class="nav-link" href="<?= BASE_PATH ?>mahasiswa"><i class="fas fa-graduation-cap"></i></i> <span>Mahasiswa</span></a></li>
            <li class="<?php echo $data['navbarJurusan'] ?? ''; ?>"><a class="nav-link" href="<?= BASE_PATH ?>jurusan"><i class="fas fa-user-graduate"></i> <span>Jurusan</span></a></li>
            <li class="<?php echo $data['navbarSemester'] ?? ''; ?>"><a class="nav-link " href="credits.html"><i class="fas fa-school"></i> <span>Semester</span></a></li>
            <li class="<?php echo $data['navbarMatakuliah'] ?? ''; ?>"><a class="nav-link" href="credits.html"><i class="fas fa-laptop-code"></i><span>Matakuliah</span></a></li>
            <li class="menu-header">Jadwal </li>
            <li class="<?php echo $data['navbarJadwal'] ?? ''; ?>"><a class="nav-link" href="credits.html"><i class="fas fa-user-clock"></i><span>Jadwal</span></a></li>
            <li class="<?php echo $data['navbarKelas'] ?? ''; ?>"><a class="nav-link" href="credits.html"><i class="fas fa-book-open"></i><span>Kelas</span></a></li>
          </ul>
        </aside>
      </div>
      <!-- -------------------------- -->
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1> <?= ucfirst($data['title'])  ?> </h1>
            <div class="section-header-breadcrumb">
              <?php
              if (isset($data['bread'])) {
                foreach ($data['bread'] as $bread) {
              ?>
                  <div class="breadcrumb-item  "><a href="<?= BASE_PATH ?><?= $bread['master'] ?>" class="text-<?= $bread['text'] ?>"><?= $bread['child'] ?></a></div>
              <?php }
              }
              ?>
            </div>
          </div>
          <?php
          $view = new View($viewName);
          $view->bind("data", $data);
          $view->render();
          ?>
        </section>
      </div>
      <!-- --------------------------------- -->
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">

        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="<?= BASE_ASSETS  ?>assets/modules/jquery.min.js"></script>
  <script src="<?= BASE_ASSETS  ?>assets/modules/popper.js"></script>
  <script src="<?= BASE_ASSETS  ?>assets/modules/tooltip.js"></script>
  <script src="<?= BASE_ASSETS  ?>assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= BASE_ASSETS  ?>assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="<?= BASE_ASSETS  ?>assets/modules/moment.min.js"></script>
  <script src="<?= BASE_ASSETS  ?>assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="<?= BASE_ASSETS ?>assets/modules/datatables/datatables.min.js"></script>
  <script src="<?= BASE_ASSETS ?>assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= BASE_ASSETS ?>assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
  <script src="<?= BASE_ASSETS ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>
  <script src="<?= BASE_ASSETS ?>assets/modules/izitoast/js/iziToast.min.js"></script>
  <script src="<?= BASE_ASSETS ?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
  <script src="<?= BASE_ASSETS ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>




  <!-- Page Specific JS File -->
  <script src="<?= BASE_ASSETS ?>assets/js/page/modules-datatables.js"></script>
  <script src="<?= BASE_ASSETS ?>assets/js/page/modules-toastr.js"></script>



  <!-- Template JS File -->
  <script src="<?= BASE_ASSETS  ?>assets/js/scripts.js"></script>
  <script src="<?= BASE_ASSETS  ?>assets/js/custom.js"></script>

  <?php
  function toaster($type = 'success', $title, $message, $position = 'topRight')
  {
    echo '
    <script>
        $(document).ready(function() {
            iziToast.' . $type . '({
                title: "' . $title . '",
                message: "' . $message . '",
                position: "' . $position . '"
            });
        });
    </script>
    ';
  }

  if (isset($_SESSION['redirect'])) {
    if ($_SESSION['redirect'] == 'success') {
      toaster('success', 'Success', 'Operation Success');
    } else  if ($_SESSION['redirect'] == 'error') {
      toaster('error', 'Error', 'Operation Failed');
    }
  }
  ?>
  <script>
    $(document).ready(function() {
      // Cek apakah session 'redirect' ada
      if (<?php echo isset($_SESSION['redirect']) ? 'true' : 'false'; ?>) {
        // Tunggu 3 detik, lalu hapus session 'redirect'
        setTimeout(function() {
          <?php unset($_SESSION['redirect']); ?>
        }, 3000);
      }
    });
  </script>

</body>

</html>