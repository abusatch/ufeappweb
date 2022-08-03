

<?php 

//ini_set('display_errors', '1');
//ini_set('display_startup_errors', '1');
//error_reporting(E_ALL);
if($_COOKIE['email'] == ""){ ?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin UFE | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://ufe-section-indonesie.org/ufeapp/admin/menuhome/ufe2.png" rel="shortcut icon" type="image/vnd.microsoft.icon" /> 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Admin</b> UFE</a>
  </div>
  <!-- /.login-logo -->
  
  <?php
  if(isset($_POST['login'])){
    
include('../db.php');
$pss = md5($_POST['pass']);
$nb = mysqli_query($koneksi,"select * from user where username = '$_POST[email]' and password = '$pss' and level = 'admin-ufe'");
$nb2 = mysqli_num_rows($nb);
$nb3 = mysqli_fetch_array($nb);   
if($nb2 >= 1){
setcookie("email", $_POST['email'], time()+10800);
setcookie("first_name", $nb3['first_name'], time()+10800);
setcookie("second_name", $nb3['second_name'], time()+10800);
setcookie("propic", $nb3['propic'], time()+10800);
    ?>
<script>
//alert("oke");
location="index.php";
</script> 
<?php 
}else{
  ?>
<script>
alert("password atau username salah");
//location="index.php";
</script> 
  
  <?php
}

  }

  ?>
  
  
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="pass" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button name="login" type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
<!--
      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->
<!--
      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>



<?php }else{ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | UFE</title>
  <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
      
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">


      <link href="https://ufe-section-indonesie.org/ufeapp/admin/menuhome/ufe2.png" rel="shortcut icon" type="image/vnd.microsoft.icon" /> 
  
<script src="plugins/jquery/jquery.min.js"></script>
  
  
    <!--<link rel="stylesheet" href="fashi/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="fashi/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="fashi/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="fashi/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="fashi/css/style.css" type="text/css">
    <link rel="stylesheet" href="fashi/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="fashi/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="fashi/css/slicknav.min.css" type="text/css">
    
  -->
  
  
  <?php 
//ini_set('display_errors', '1');
//ini_set('display_startup_errors', '1');
//error_reporting(E_ALL);
?>
  
  <?php 
if($_GET['p'] == ""){

?>
<script>
location = "?p=tb_dm_1";
</script>

<?php 
}
?>
  <style>
  



.hero-items .single-hero-items {
  height: 725px;
  padding-top: 210px;
}

.hero-items .single-hero-items span {
  color: #e7ab3c;
  font-size: 12px;
  font-weight: 700;
  letter-spacing: 2px;
  text-transform: uppercase;
  line-height: 28px;
  display: inline-block;
  position: relative;
  top: 50px;
  opacity: 0;
}

.hero-items .single-hero-items h1 {
  color: #252525;
  font-size: 72px;
  font-weight: 700;
  margin-bottom: 6px;
  position: relative;
  top: 50px;
  opacity: 0;
}

.hero-items .single-hero-items p {
  margin-bottom: 42px;
  position: relative;
  top: 100px;
  opacity: 0;
}

.hero-items .single-hero-items .primary-btn {
  position: relative;
  top: 100px;
  opacity: 0;
}

.hero-items .off-card {
  height: 154px;
  width: 154px;
  padding-top: 40px;
  border-radius: 50%;
  text-align: center;
  line-height: 140px;
  position: absolute;
  left: 47%;
  top: 160px;
  background: #e7ab3c;
  z-index: 1;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
  opacity: 0;
}

.hero-items .off-card:after {
  position: absolute;
  left: 5px;
  top: 5px;
  width: calc(100% - 10px);
  height: calc(100% - 10px);
  border: 2px dashed #ffffff;
  content: "";
  border-radius: 50%;
  z-index: -1;
}

.hero-items .off-card h2 {
  font-size: 32px;
  font-weight: 700;
  color: #ffffff;
  text-transform: uppercase;
}

.hero-items .off-card h2 span {
  display: block;
  font-size: 32px;
  font-weight: 700;
  color: #ffffff;
  text-transform: uppercase;
  margin-top: 6px;
}

.hero-items .owl-item.active .single-hero-items span,
.hero-items .owl-item.active .single-hero-items h1,
.hero-items .owl-item.active .single-hero-items p,
.hero-items .owl-item.active .single-hero-items .primary-btn {
  top: 0;
  opacity: 1;
}

.hero-items .owl-item.active .single-hero-items span {
  -webkit-transition: all 0.2s ease 0.2s;
  -o-transition: all 0.2s ease 0.2s;
  transition: all 0.2s ease 0.2s;
}

.hero-items .owl-item.active .single-hero-items h1 {
  -webkit-transition: all 0.4s ease 0.4s;
  -o-transition: all 0.4s ease 0.4s;
  transition: all 0.4s ease 0.4s;
}

.hero-items .owl-item.active .single-hero-items p {
  -webkit-transition: all 0.6s ease 0.6s;
  -o-transition: all 0.6s ease 0.6s;
  transition: all 0.6s ease 0.6s;
}

.hero-items .owl-item.active .single-hero-items .primary-btn {
  -webkit-transition: all 0.8s ease 0.8s;
  -o-transition: all 0.8s ease 0.8s;
  transition: all 0.8s ease 0.8s;
}

.hero-items .owl-item.active .single-hero-items .off-card {
  opacity: 1;
  -webkit-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  transform: rotate(0deg);
  -webkit-transition: all 1s ease 1s;
  -o-transition: all 1s ease 1s;
  transition: all 1s ease 1s;
}

.hero-items .owl-nav button[type=button] {
  font-size: 30px;
  position: absolute;
  left: 40px;
  top: 45%;
  color: #252525;
}

.hero-items .owl-nav button[type=button]:hover {
  color: #dfad51;
}

.hero-items .owl-nav button[type=button].owl-next {
  left: auto;
  right: 40px;
}
  
  
.partner-logo {
  background: #303030;
  padding: 38px 0;
}

.logo-carousel .logo-item {
  display: table;
}

.logo-carousel .logo-item .tablecell-inner {
  display: table-cell;
  height: 45px;
  vertical-align: middle;
}

.owl-carousel .owl-item img {
  display: block;
  width: auto;
}
  </style>
  
</head>

<body  class="hold-transition sidebar-mini layout-navbar-fixed">
<!-- Site wrapper -->
<div class="wrapper"> 
  
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
     <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- SEARCH FORM 
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>-->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu 
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">

            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
         
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
          
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
        
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
          
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
           
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li> -->
      <!-- Notifications Dropdown Menu 
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li> -->
     <!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="?p=tb_dm_1" class="brand-link elevation-4">
      <img src="dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Page</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="padding-top:10px;margin-top:0px;">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="height:60px;">
        <div class="image">
          <?php 
            if($_COOKIE['propic'] != '') {
              echo '<img src="https://ufe-section-indonesie.org/ufeapp/images/propic/'.$_COOKIE['propic'].'" class="img-circle elevation-2" alt="User Image">';
            } else {
              echo '<img src="men.png" class="img-circle elevation-2" alt="User Image">';
            }
          ?>
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_COOKIE['first_name']." ".$_COOKIE['second_name']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <!-- <li class="nav-item">
            <a href="?p=background" class="nav-link">
            <i class="nav-icon fas fa-image"></i>
              <p>
                Background
              </p>
            </a>
          </li> -->

          <li class="nav-item">
            <a href="?p=tb_actualite" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                News
              </p>
            </a>
          </li>
    
          <li class="nav-item">
            <a href="?p=espace_membre" class="nav-link">
              <i class="nav-icon fas fa-flag"></i>
              <p>
                Members Corner
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="?p=tb_ufe" class="nav-link">
            <i class="nav-icon fas fa-adjust"></i>
              <p>
                Activities
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="?p=tb_dm_1" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
              <p>
                Demarches
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="?p=moninfo" class="nav-link">
            <i class="nav-icon fas fa-globe"></i>
              <p>
                Global Information
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="?p=reginfo" class="nav-link">
            <i class="nav-icon fas fa-info"></i>
              <p>
                Regional Information
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="?p=tulisan" class="nav-link">
            <!-- <i class="nav-icon fas fa-adjust"></i> -->
            <i class="nav-icon fas fa-highlighter"></i>
              <p>
                Text Writing
              </p>
            </a>
          </li>
          



          <li class="nav-item">
            <a href="#" class="nav-link">

              <i class="nav-icon fas fa-flag"></i>
              <p>
                Article
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?p=article_active" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Release</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?p=article_waiting_confirm" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Waiting Confirmation</p>
                </a>
              </li>
       
            </ul>
          </li>

           
      
         <!-- <li class="nav-item">
            <a href="#" class="nav-link">

              <i class="nav-icon fas fa-flag"></i>
              <p>
                Tb Indonésie
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            
      <?php 
      include('../db.php');
      $ng = mysqli_query($koneksi,"select * from tb_menu where jenis = 'indonesie'");
      while($ng2 = mysqli_fetch_array($ng)){
      ?>
      <li class="nav-item">
                <a href="?p=menu&id_menu=<?php echo $ng2['id_menu']; ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p><?php echo $ng2['nama_menu']; ?></p>
                </a>
              </li>
            <?php } ?>
       
            </ul>
          </li> -->


          <!-- <li class="nav-item">
            <a href="?p=tb_france" class="nav-link">

              <i class="nav-icon fas fa-flag"></i>
              <p>
                Tb France
              </p>
            </a>
          </li> -->



<!--
    <li class="nav-item">
            <a href="#" class="nav-link">

              <i class="nav-icon fas fa-flag"></i>
              <p>
                Tb France
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            
      <?php 
      include('../db.php');
      $ng = mysqli_query($koneksi,"select * from tb_menu where jenis = 'france'");
      while($ng2 = mysqli_fetch_array($ng)){
      ?>
      <li class="nav-item">
                <a href="?p=menu&id_menu=<?php echo $ng2['id_menu']; ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p><?php echo $ng2['nama_menu']; ?></p>
                </a>
              </li>
            <?php } ?>
       
            </ul>
          </li>

  -->
      <!-- <li class="nav-item">
            <a href="?p=data_presiden" class="nav-link">
            <i class="nav-icon far fa-flag"></i>
              <p>
                Tb President
              </p>
            </a>
          </li> -->
       <!-- <li class="nav-item">
            <a href="?p=info_member" class="nav-link">
            <i class="nav-icon far fa-flag"></i>
              <p>
                Info Member
              </p>
            </a>
          </li> -->
      
         <!-- <li class="nav-item">
            <a href="#" class="nav-link">

              <i class="nav-icon fab fa-mendeley"></i>
              <p>
                Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?p=menu&id_menu=1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Menu 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?p=menu&id_menu=2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Menu 2</p>
                </a>
              </li>
   <li class="nav-item">
                <a href="?p=menu&id_menu=3" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Menu 3</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?p=menu&id_menu=4" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Menu 4</p>
                </a>
              </li>
        <li class="nav-item">
                <a href="?p=menu&id_menu=5" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Menu 5</p>
                </a>
              </li>
            </ul>
          </li> -->
      
       <li class="nav-item">
            <a href="#" class="nav-link">

              <i class="nav-icon fas fa-user-tag"></i>
              <p>
                User VIP
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?p=user_vip_belum_dikonfirmasi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Need Confirm</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?p=user_vip_sudah_dikonfirmasi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Confirmed</p>
                </a>
              </li>
   
            </ul>
          </li>
      
      
      
      
       <li class="nav-item">
            <a href="#" class="nav-link">

              <i class="nav-icon fas fa-user-shield"></i>
              <p>
                User Personal
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?p=user_personal_belum_dikonfirmasi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Need Confirm</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?p=user_personal_sudah_dikonfirmasi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Confirmed</p>
                </a>
              </li>
   
            </ul>
          </li>

                <li class="nav-item">
            <a href="#" class="nav-link">

              <i class="nav-icon fas fa-user-shield"></i>
              <p>
                Tb Banding
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?p=block_need_confirm" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Need Confirm</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?p=block_confirmed" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Confirmed</p>
                </a>
              </li>
   
            </ul>
          </li>
      
      
       <li class="nav-item">
            <a href="#" class="nav-link">

              <i class="nav-icon fas fa-dollar-sign"></i>
              <p>
                Order
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?p=order_dikonfirmasi_sedang_aktif" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sedang Aktif</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?p=order_dikonfirmasi_histori" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>History</p>
                </a>
              </li>
     <li class="nav-item">
                <a href="?p=order_menunggu_konfirmasi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Menunggu Konfirmasi</p>
                </a>
              </li>
            </ul>
          </li>
      
      
     <!--
      <li class="nav-item">
            <a href="/" class="nav-link">
            <i class="nav-icon fas fa-adjust"></i>
              <p>
                Tb Agent
              </p>
            </a>
          </li> -->
      
       
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper">
  
  
  
  <?php if($_GET['p'] == "tb_dm_1"){ ?>
  
   <div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                 <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="?p=tb_dm_1">Home</a></li>
    
              <li class="breadcrumb-item active">Demarches</li>
                            </ol>
            </div>


            <!-- <div class="col-auto">
                <a href="" data-toggle="modal" data-target="#modaltambah" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">

                        Tambah Data
                    </span>
                </a>
            </div> -->
      
      
       <div class="modal fade" id="modaltambah">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                
<?php 
if(isset($_POST['tambahproduk'])){
if(($_POST['nama']) || ($_POST['short_desc'])){

include('../db.php');
mysqli_query($koneksi,"insert into tb_menu (jenis,nama_menu,short_desc,long_desc)
values
('DEMARCHES','$_POST[nama]','$_POST[deskripsi]','$_POST[long_deskripsi]')
");

?>
<script>
alert('Data added successfully<?php echo mysqli_error($koneksi); ?>');
</script>



<?php } } ?>

      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="height:70vh;overflow:scroll;">
            
      
      <!-- <input onchange="readURLe(this);" type="file" name="image_link" class="form-control" />
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_imagee" style="width:1px;height:1px;" name="product_imagee" class="img-thumbnail">
      </center>
                <script>
  function readURLe(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_imagee')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script>  -->
  
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Name</span>
                  </div>
          
          
          <input type="hidden" name="unik" value="578866556602c6b54236d7.png" />
                
                  <input type="text" name="nama" value="" class="form-control" placeholder="Category Name" required>
                </div>
        
        <div>Short Desc</div>        
                <textarea class="form-control" name="deskripsi" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
             
             
                          <div style="margin-top:15px">Long Desc</div>        
                <textarea class="form-control" name="long_deskripsi" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" ></textarea>
             
          
        
        
        
        
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahproduk" class="btn btn-primary">Add</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
            
                                           
                   <?php 
                   include('../db.php');
                   $kj = mysqli_query($koneksi,"SELECT * from tb_menu where jenis = 'DEMARCHES' ORDER BY sort");


                   ?>                            
     <?php 
if(isset($_POST['updatekategori'])){

    
if(($_POST['nama'])){



$maxDimW = 400;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link']['tmp_name'] );
if ( $width > $maxDimW) {
    $target_filename = $_FILES['image_link']['tmp_name'];
    $fn = $_FILES['image_link']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; 
    $width = $maxDimW;
    $height = ($maxDimW / $size[0]) * $size[1];
  
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); 
}

$namaa = $_FILES['image_link']['name'];


$bgsplash = $_FILES['bgsplash']['name'];
$bgsplash3 = date('YmdHi');
$bgsplash2 = $bgsplash3.$_FILES['bgsplash']['name'];

if(!empty($bgsplash)){
    mysqli_query($koneksi,"update tb_menu set bg = '$bgsplash2' where id_menu = '$_POST[idc]'");
   

    
$maxDimWbgs = 400;
$maxDimHbgs = 500;
list($widthbgs, $heightbgs, $typebgs, $attrbgs) = getimagesize( $_FILES['bgsplash']['tmp_name'] );
if ( $widthbgs > $maxDimWbgs) {
    $target_filenamebgs = $_FILES['bgsplash']['tmp_name'];
    $fnbgs = $_FILES['bgsplash']['tmp_name'];
    $sizebgs = getimagesize( $fnbgs );
    $ratiobgs = $sizebgs[0]/$sizebgs[1]; 
    $widthbgs = $maxDimWbgs;
    $heightbgs = ($maxDimWbgs / $sizebgs[0]) * $sizebgs[1];
  
    $srcbgs = imagecreatefromstring(file_get_contents($fnbgs));
    $dstbgs = imagecreatetruecolor( $widthbgs, $heightbgs );
    imagecopyresampled($dstbgs, $srcbgs, 0, 0, 0, 0, $widthbgs, $heightbgs, $sizebgs[0],
     $sizebgs[1] );

    imagejpeg($dstbgs, $target_filenamebgs); 
}

move_uploaded_file($_FILES['bgsplash']['tmp_name'],"bg/".$bgsplash2); 


}




$bgg = $_FILES['bgg']['name'];
$bgg3 = date('YmdHi');
$bgg2 = $bgg3.$_FILES['bgg']['name'];
if(!empty($bgg)){

    mysqli_query($koneksi,"update tb_menu set bg2 = '$bgg2' where id_menu = '$_POST[idc]'");
    $maxDimWbgg = 400;
$maxDimHbgg = 500;
list($widthbgg, $heightbgg, $typebgg, $attrbgg) = getimagesize( $_FILES['bgg']['tmp_name'] );
if ( $widthbgg > $maxDimWbgg) {
    $target_filenamebgg = $_FILES['bgg']['tmp_name'];
    $fnbgg = $_FILES['bgg']['tmp_name'];
    $sizebgg = getimagesize( $fnbgg );
    $ratiobgg = $sizebgg[0]/$sizebgg[1]; 
    $widthbgg = $maxDimWbgg;
    $heightbgg = ($maxDimWbgg / $sizebgg[0]) * $sizebgg[1];
  
    $srcbgg = imagecreatefromstring(file_get_contents($fnbgg));
    $dstbgg = imagecreatetruecolor( $widthbgg, $heightbgg );
    imagecopyresampled($dstbgg, $srcbgg, 0, 0, 0, 0, $widthbgg, $heightbgg, $sizebgg[0], 
    $sizebgg[1] );
    imagejpeg($dstbgg, $target_filenamebgg); 
  
}
    move_uploaded_file($_FILES['bgg']['tmp_name'],"bg/".$bgg2); 
 
}

$deskripsi1 = str_replace("'","&petiksatu&",$_POST['deskripsi']);

if($namaa == null){
mysqli_query($koneksi,"update tb_menu set nama_menu = '$_POST[nama]',
short_desc = '$deskripsi1',
long_desc = '$_POST[long_deskripsi]',
warna = '$_POST[warna]'
where id_menu = '$_POST[idc]'
");
}else{
move_uploaded_file($_FILES['image_link']['tmp_name'],"../images/menu/".$_FILES['image_link']['name']);  
mysqli_query($koneksi,"update tb_menu set nama_menu = '$_POST[nama]',
short_desc = '$deskripsi1',
gambar2 = '$namaa',
long_desc = '$_POST[long_deskripsi]',
warna = '$_POST[warna]'
where id_menu = '$_POST[idc]'
");
}

?>

<script>
alert("Data changed successfully <?php echo mysqli_error($koneksi); ?>");
location = "https://ufe-section-indonesie.org/ufeapp/admin/?p=tb_dm_1";
</script>


<?php 
 } 
}
 ?>
    <div class="table-responsive" style="padding:5px;">
        <table class="table table-striped w-100 dt-responsive nowrap" id="dataTable">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Name</th>
                    <th>Picture</th>
                    <!-- <th>Background Splash</th>
                    <th>Background</th> -->
                    <th>Description</th>
                    <th>Color</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $no = 1;
            while($kj2 = mysqli_fetch_array($kj)){
            $idd = $kj2['id_menu'];
            ?>

                                              <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $kj2['nama_menu'] ?></td>
                            <td><img src="https://ufe-section-indonesie.org/ufeapp/images/menu/<?php echo $kj2['gambar2'] ?>" style="height:100px;" /></td>
                            <!-- <td><img src="https://ufe-section-indonesie.org/ufeapp/admin/bg/<?php echo $kj2['bg2'] ?>" style="height:100px;" /></td>
                            <td><img src="https://ufe-section-indonesie.org/ufeapp/admin/bg/<?php echo $kj2['bg2'] ?>" style="height:100px;" /></td> -->
                 <?php
                  $short_desc1 = str_replace("&petiksatu&","'",$kj2['short_desc']);
                 ?>
                                          <td><?php echo $short_desc1; ?></td>
                                          <td><?php echo $kj2['warna']; ?></td>
                            
              <td>


                                <a data-toggle="modal" data-target="#modal-lg_<?php echo $idd ?>" href="" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="?p=rincian&id=<?php echo $idd ?>" class="btn btn-primary btn-circle btn-sm">More Actions
                                &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-edit"></i></a>

                            </td>
                        </tr
                        >
            
            
        <div class="modal fade" id="modal-lg_<?php echo $idd; ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Demarches</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="overflow:scroll;height:70vh">
      
      <center>
              <img src="https://ufe-section-indonesie.org/ufeapp/images/menu/<?php echo $kj2['gambar2'] ?>"  style="width:200px;" />
      </center> 
      
    <input onchange="readURL<?php echo $idd; ?>(this);" type="file" name="image_link" class="form-control"/>
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_image<?php echo $idd; ?>" style="width:1px;height:1px;" name="product_image<?php echo $idd; ?>" class="img-thumbnail">
      </center>
                <script>
  function readURL<?php echo $idd; ?>(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_image<?php echo $idd; ?>')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script> 
  
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Menu Name</span>
                  </div>
          
          
          <input type="hidden" name="unik" value="430992371602c6b5423c26.png" />
                  <input type="hidden" name="idc" value="<?php echo $idd ?>" />
                  <input type="text" name="nama" value="<?php echo $kj2['nama_menu'] ?>" class="form-control" placeholder="Menu Name" required>
                </div>
          <div>
                Description
               </div>
               <?php 
               $short_desc1 = str_replace("&petiksatu&","'",$kj2['short_desc']);

               ?>
                <textarea class="form-control" name="deskripsi" placeholder="Place some text here"
              
                           required><?php echo $short_desc1 ?></textarea>
                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Color</span>
                  </div>
                  <input type="text" name="warna" value="<?php echo $kj2['warna'] ?>" class="form-control" placeholder="Color Theme">
                </div>

                <!-- <div></div>
                <fieldset style="margin-top:10px;text-align:center;width:100%;">
                <img id="bgsplashh<?php echo $idd; ?>" style="height:150px;" src="https://ufe-section-indonesie.org/ufeapp/admin/bg/<?php echo $kj2['bg']  ?>" />
                </fieldset>
                <div>Background Splash</div>
                <div><input class="form-control" name="bgsplash" type="file" 
                onchange="bgsplash<?php echo $idd; ?>(this)"                
                onclick="bgsplash<?php echo $idd; ?>(this)" /></div>

                <script>
                function bgsplash<?php echo $idd; ?>(input) {
                if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                $('#bgsplashh<?php echo $idd; ?>')
                .attr('src', e.target.result)
                .height(150);
                };

                reader.readAsDataURL(input.files[0]);
                }

                }
                </script>  -->


                <!-- <div></div>
                <fieldset style="margin-top:10px;text-align:center;width:100%;">
                <img id="bggg<?php echo $idd; ?>" style="height:150px;" src="https://ufe-section-indonesie.org/ufeapp/admin/bg/<?php echo $kj2['bg2']  ?>" />
                </fieldset>
                <div>Background</div>
                <div><input
                onchange="bgg<?php echo $idd; ?>(this)"
                  class="form-control" name="bgg" type="file" /></div>

                <script>
                function bgg<?php echo $idd; ?>(input) {
                if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                $('#bggg<?php echo $idd; ?>')
                .attr('src', e.target.result)
                .height(150);
                };

                reader.readAsDataURL(input.files[0]);
                }

                }
                </script>  -->
        
      </div>
            <style>
            .kluk:hover{
                  font-size:23px;  
            }
            </style>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <!--
              <a onclick="return confirm('Are you sure you want to delete this item?');" href="del_demar.php?id=<?php echo $idd ?>"><i  style="cursor:pointer;color:red;font-size:20px;font-weight:500;text-align:right;" class="far fa-times-circle kluk"></i>
        </a>
        -->
              <button type="submit" name="updatekategori" class="btn btn-primary">Save changes</button>
            </div>
      </form>
          </div>
        </div>
      </div>      
            
            
             <?php $no++;} ?>          
            
            
                                           
                                                </tbody>
    </table>
    </div>
</div>
   </div>
</div>

<?php }else if($_GET['p'] == "tb_dm_2"){ ?>   
  


  <div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
   <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="?p=tb_dm_1">Home</a></li>
    
              <li class="breadcrumb-item active">Data Demarches</li>
                            </ol>
            </div>


            <!-- <div class="col-auto">
                <a href="" data-toggle="modal" data-target="#modaltambah" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">

                        Tambah Data
                    </span>
                </a>
            </div> -->
      
      
       <div class="modal fade" id="modaltambah">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                
<?php 
if(isset($_POST['tambahproduk'])){
if(($_POST['nama']) || ($_POST['short_desc'])){

include('../db.php');
mysqli_query($koneksi,"insert into tb_menu (jenis,nama_menu,short_desc,long_desc)
values
('DEMARCHES','$_POST[nama]','$_POST[deskripsi]','$_POST[long_deskripsi]')
");

?>
<script>
alert('Data berhasil ditambahkan<?php echo mysqli_error($koneksi); ?>');
location = "https://ufe-section-indonesie.org/ufeapp/admin/?p=tb_dm_2";
</script>



<?php } } ?>

      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="height:70vh;overflow:scroll;">
            
      
      <!-- <input onchange="readURLe(this);" type="file" name="image_link" class="form-control" />
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_imagee" style="width:1px;height:1px;" name="product_imagee" class="img-thumbnail">
      </center>
                <script>
  function readURLe(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_imagee')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script>  -->
  
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Nama</span>
                  </div>
          
          
          <input type="hidden" name="unik" value="578866556602c6b54236d7.png" />
                
                  <input type="text" name="nama" value="" class="form-control" placeholder="Nama Kategori" required>
                </div>
        
        <!-- <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Kategori</span>
                  </div>
          <select name="kategori" class="form-control" required>
                  <option value="" >- kategori -</option>
                    <option value="19" >Layanan Service</option>
                    <option value="21" >Rental Mesin Fotocopy</option>
                    <option value="23" >Jual Mesin Fotocopy</option>
                    <option value="25" >Spare part</option>
                          </select>
        </div>
            <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Harga</span>
                  </div>
                  <input type="number" name="harga" value="" class="form-control" placeholder="harga" required>
                </div>
        <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Short Desc</span>
                  </div>
                  <input type="text" name="short" value="" class="form-control" placeholder="Short Desc" required>
                </div>
        
        
           -->
        <div>Short Desc</div>        
                <textarea class="form-control" name="deskripsi" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
             
             
                          <div style="margin-top:15px">Long Desc</div>        
                <textarea class="form-control" name="long_deskripsi" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" ></textarea>
             
          
        
        
        
        
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahproduk" class="btn btn-primary">Add</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
            
                                           
                   <?php 
                   include('../db.php');
                   $kj = mysqli_query($koneksi,"select * from tb_menu where jenis = 'DEMARCHES'");


                   ?>                            
     <?php 
if(isset($_POST['updatekategori'])){

    
if(($_POST['nama']) || ($_POST['deskripsi'])){


    
mysqli_query($koneksi,"update tb_menu set nama_menu = '$_POST[nama]',
short_desc = '$_POST[deskripsi]',
long_desc = '$_POST[long_deskripsi]'
where id_menu = '$_POST[idc]'
");


?>

<script>
alert("Data changed successfully <?php echo mysqli_error($koneksi); ?>");
</script>


<?php 
 } 
}
 ?>
    <div class="table-responsive" style="padding:5px;">
        <table class="table table-striped w-100 dt-responsive nowrap" id="example">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Nama</th>
                  <th>Short Desc</th>
                  
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $no = 1;
            while($kj2 = mysqli_fetch_array($kj)){
            $idd = $kj2['id_menu'];
            ?>

                                              <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $kj2['nama_menu'] ?></td>
                 
                                          <td><?php echo $kj2['short_desc'] ?></td>
                            
              <td>


                                <a data-toggle="modal" data-target="#modal-lg_<?php echo $idd ?>" href="" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a>

                                <a href="?p=rincian&id=<?php echo $idd ?>" class="btn btn-primary btn-circle btn-sm">More Actions
                                &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-edit"></i></a>


                            </td>
                        </tr
                        >
            
            
        <div class="modal fade" id="modal-lg_<?php echo $idd; ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">5. Edit Produk</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            



      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="overflow:scroll;height:70vh">
<!--      
      <center>
              <img src="gambar/18897871535f8f71b2237d2.png"  style="width:200px;" />
      </center> -->
      
    
      
      
      <!-- <input onchange="readURL<?php //echo $idd; ?>(this);" type="file" name="image_link" class="form-control"/>
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_image50" style="width:1px;height:1px;" name="product_image50" class="img-thumbnail">
      </center>
                <script>
  function readURL50(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_image50')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script> 
   -->
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Nama</span>
                  </div>
          
          
          <input type="hidden" name="unik" value="430992371602c6b5423c26.png" />
                  <input type="hidden" name="idc" value="<?php echo $idd ?>" />
                  <input type="text" name="nama" value="<?php echo $kj2['nama_menu'] ?>" class="form-control" placeholder="Nama Menu" required>
                </div>
        
        <!-- <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Kategori</span>
                  </div>
          <select name="kategori" class="form-control" required>
                  <option value="23" >Jual Mesin Fotocopy</option>
                    <option value="19" >Layanan Service</option>
                    <option value="21" >Rental Mesin Fotocopy</option>
                    <option value="25" >Spare part</option>
                          </select>
        </div> -->
            <!-- <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Harga</span>
                  </div>
                  <input type="number" name="harga" value="8000000" class="form-control" placeholder="harga" required>
                </div>
        <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Short Desc</span>
                  </div>
                  <input type="text" name="short" value="XploitSec-ID" class="form-control" placeholder="Short Desc" required>
                </div> -->
        
        
          <div>
                Short Desc
               </div>
                <textarea class="form-control" name="deskripsi" placeholder="Place some text here"
              
                           required><?php echo $kj2['short_desc'] ?></textarea>
             
             <div style="margin-top:15px;">
                           Long Desc
                </div>
                <textarea class="form-control" name="long_deskripsi" placeholder="Place some text here"
              
                          ><?php echo $kj2['long_desc'] ?></textarea>
             
             
        
        
        
        
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="updatekategori" class="btn btn-primary">Save changes</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
            
             <?php $no++;} ?>          
            
            
                                           
                                                </tbody>
          <tfoot>
                <tr>
                    <th>No. </th>
                    <th>Nama</th>
                  <th>Short Desc</th>
                  
                    <th>Opsi</th>
                </tr>
            </tfoot>
    </table>
    </div>
</div>
   </div>
</div>

<?php }else if($_GET['p'] == "tb_actualite"){ ?>
 <div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
<?php 
include('../db.php');
//$idmenuu = "MENU".$_GET['id_menu'];
//$qw = mysqli_query($koneksi,"select * from tb_menu where id_menu = '$_GET[id_menu]'");
//$qw2 = mysqli_fetch_array($qw);
?>
  <table style="width:100%;">
  <tr>
  <td>
           <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="?p=tb_dm_1">Home</a></li>
    
              <li class="breadcrumb-item active">News</li>
                            </ol>
    </td>
<td style="text-align:right;">

<span data-toggle="modal" data-target="#addnewcate" style="cursor:pointer;" class="btn btn-primary btn-sm">Add New Category +</span>
&nbsp;&nbsp;
<span data-toggle="modal" data-target="#addnewart" style="cursor:pointer;" class="btn btn-success btn-sm">Add New Actualite +</span></td>
</tr>
</table>    

 <?php 
if(isset($_POST['addtb_kategori'])){

    
if(!empty($_POST['nama_kategori'])){





$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_linkact']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_linkact']['tmp_name'];
    $fn = $_FILES['image_linkact']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_linkact']['name'];

//move_uploaded_file($_FILES['image_linkact']['tmp_name'],"../images/actualite/".$_FILES['image_linkact']['name']);


$judul1 = str_replace("'","-petiksatu-",$_POST['nama_kategori']);
$judul2 = str_replace('"',"-petikdua-",$judul1);
$deskripsi1 = str_replace("'","&petiksatu&",$_POST['deskripsiactualite']);
//$keterangan1 = str_replace("'","&petiksatu&",$_POST['keterangan']);


date_default_timezone_set('Asia/Jakarta');
$tanggal = date('Y-m-d');
$tanggal2 = date('Y-m-d H:i:s');
    
$nf = mysqli_query($koneksi,"select * from tb_kategori_artikel where nama_kategori = '$judul2'");
if(mysqli_num_rows($nf) == 0){    
    
mysqli_query($koneksi,"insert into tb_kategori_artikel
(nama_kategori,tanggal) values
('$judul2','$tanggal')
");   

?>
<script>
alert("Data has been added <?php echo mysqli_error($koneksi); ?>");
location = "?p=tb_actualite&ac=art";

</script>

<?php
}else{
  ?>
  <script>
  
  alert("Category name already exist");
  </script>
  
  <?php
}
    
  }


if($_FILES['image_linkact']['name'] == null){

?>



<?php }else{ ?>



<?php  } }?>

 <?php 
if(isset($_POST['addtb_actualite'])){

    
if(!empty($_POST['judulactualite'])){





$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_linkact']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_linkact']['tmp_name'];
    $fn = $_FILES['image_linkact']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_linkact']['name'];

move_uploaded_file($_FILES['image_linkact']['tmp_name'],"../images/actualite/".$_FILES['image_linkact']['name']);


$judul1 = str_replace("'","&petiksatu&",$_POST['judulactualite']);
$judul2 = str_replace('"',"&petikdua&",$judul1);
$deskripsi1 = str_replace("'","&petiksatu&",$_POST['deskripsiactualite']);
$deskripsi2 = str_replace('"',"&petikdua&",$deskripsi1);

//$keterangan1 = str_replace("'","&petiksatu&",$_POST['keterangan']);

    if($_FILES['image_linkact']['name'] == null){
?>
<script>
alert("Image cannot be empty");
</script>
<?php
  }else{

date_default_timezone_set('Asia/Jakarta');
$tanggal = date('Y-m-d');
$tanggal2 = date('Y-m-d H:i:s');
    
$nf = mysqli_query($koneksi,"select * from tb_actualite where tanggal2 = '$tanggal2' and visibility = '1'");
if(mysqli_num_rows($nf) == 0){    
    
mysqli_query($koneksi,"insert into tb_actualite
(judul,deskripsi, gambar, visibility, tanggal, tanggal2, url, id_kate, id_kate2) values
('$judul2','$deskripsi2','$namaa','1', '$tanggal', '$tanggal2', '$_POST[urll]', '$_POST[pil_kategori]', '$_POST[pil_kategori2]')
");   
}
    
  }


if($_FILES['image_linkact']['name'] == null){

?>

<script>
//alert("Data had been changed\nid_template-<?php echo $_POST['id_template'] ?>"+
//"\ntitle-<?php echo $_POST['judul'] ?>"+
//"\nketerangan-<?php echo $_POST['keterangan'] ?>"+
// "<?php echo mysqli_error($koneksi); ?>");
//location = "?p=tb_actualite&ac=art";

</script>

<?php }else{ 




  ?>

<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
  integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
  crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
  integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
  crossorigin=""></script>
  
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"
 integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
 crossorigin="anonymous"></script>
 <script src="https://www.gstatic.com/firebasejs/8.2.3/firebase.js"></script>
 
 
 
 
<script type="text/javascript">

 var nextkey =0;
 var config = {

    
      apiKey: "AIzaSyCLaApKgiVWIg3ylCHoM339-3zp_ilHDlQ",
  authDomain: "ufe-indonesie-f76c4.firebaseapp.com",
  databaseURL: "https://ufe-indonesie-f76c4-default-rtdb.asia-southeast1.firebasedatabase.app",
  projectId: "ufe-indonesie-f76c4",
  storageBucket: "ufe-indonesie-f76c4.appspot.com",
  messagingSenderId: "297827279494",
  appId: "1:297827279494:web:da1440b3e1fb07d752e707",
  measurementId: "G-8G1DDJS92V"

 
 };
 firebase.initializeApp(config);
 var database = firebase.database();
 
 
 
        function writeUserData(id_user, id_jadwal,id_pelanggan, nama_user,nama_pelanggan, pesan, tanggal) {
            database.ref('laporan').child("1").set({
       
        iii:tanggal,
        id_user:id_user,
      id_jadwal: id_jadwal,
      id_pelanggan: id_pelanggan,
      nama_user: nama_user,
    nama_pelanggan: nama_pelanggan,
    pesan: pesan,      
      tanggal: pesan,
      pesan2: pesan,
    tgl2: pesan
    });
    
        }
        
        
        <?php

 date_default_timezone_set('Asia/Jakarta');
  $tanggal2 = date('Y-m-d H:i:s');




?>

writeUserData("2", "2","2", "tes 1","tes 2","<?php echo $tanggal2; ?>","tes 4");
</script>




          <?php
class startSendNotification
{
  
    function sendNoti($titleNoti, $bodyNoti){

    define( 'API_ACCESS_KEY', 'AAAARVfjooY:APA91bEAKbWGNffjb80WnOsnE4U_iNWJOUhW1UqiMsnLiJXah2oFmEcn2Y5EcBvUeCWHWgAfBwmFZHhnCdKvyvrUf4m7okrNCICisXtzNyxfKu4F8FxfhXcnxPICACaUrLQJekNqYZPy');
        include('../db.php');

    $ewww = mysqli_query($koneksi,"select * from user where token_push != '' ");
while ($tyu = mysqli_fetch_array($ewww)){
  $qw[] = $tyu['token_push'];
}


$fdb = mysqli_query($koneksi,"select * from tb_actualite order by id_actualite desc");
$fdb2 = mysqli_fetch_assoc($fdb);

    $fcmMsg = array(
      'title' => $titleNoti,
      'body' => $bodyNoti,
      'icon' => 'image/look24-logo-s.png',
            'sound' => 'default',
      'image' => 'https://ufe-section-indonesie.org/ufeapp/images/actualite/'.$fdb2['gambar']
    
    );
    
    $fcmData = array(
      'halaman' => 'actualite',
      'nomor' => $fdb2['id_actualite'],
    );
    
    $fcmFields = array(
    //  'to' => "e2Ns7U3A0GI:APA91bFVM1soWWG-MrQAsjkiuxgkMdnDdZY3jKzYnhzcx4bJFblyuAdBTkiocnrJNBOWCQuieQVNoOWIttpknML46HF-zgjeEHsm9iGvZ4wfyShCKVX-BO83yLSnq4AoVhIUvqXT2sYq",
    //  'registration_ids' => $registrationIDs,
      'registration_ids' => $qw,
      'priority' => 'high',
      'notification' => $fcmMsg,
      'data' => $fcmData
    );

    $headers = array(
      'Authorization: key=' . API_ACCESS_KEY,
      'Content-Type: application/json'
    );
    
    $ch = curl_init();
    curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
    curl_setopt( $ch,CURLOPT_POST, true );
    curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
    curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
    curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
    curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fcmFields ) );
    $result = curl_exec($ch );
    curl_close( $ch );
    echo $result . "\n\n".$qw;
  }

}
?>

<?php 

$bagian = $_GET['dsafds'];
$nama = $_GET['fdfvcx'];
$tujuan = $_GET['vsde'];




// include ('koneksi3.php');

// $iu = mysqli_query($con,"select * from temanuser where idtemanuser = '$_POST[dari]'");
// $iu2 = mysqli_fetch_array($iu);


$fdb = mysqli_query($koneksi,"SELECT a.*, b.nama_kategori 
from tb_actualite a
join tb_kategori_artikel b on(a.id_kate = b.id_kategori) 
order by a.id_actualite desc
LIMIT 1
");
$fdb2 = mysqli_fetch_assoc($fdb);



$deskk1 = str_replace('\n'," ",$fdb2['judul']);
$deskk2 = str_replace("&petiksatu&","'",$deskk1);
$deskk3 = str_replace('"',"`",$deskk2);
$deskk4 = str_replace(str_split('\\/:*?"<>|'), ' ', $deskk3);
$deskk5 = trim(preg_replace('/\s\s+/', ' ', $deskk4));
$deskk6 = str_replace("<br>"," ",$deskk5);
$deskk7 = str_replace(".",".",$deskk6);

// How to use
$titleNoti = str_replace("-spasi-", " ", $deskk7);
$bodyNoti = str_replace("-spasi-", " ", $fdb2['deskripsi']);

$tgl = date('d/m/Y');
mysqli_query($koneksi,"INSERT INTO tb_notification(kategori, judul, isi, keterangan, tanggal, gambar, data, kepada, dibaca, dihapus) 
VALUES ('actualite', 'Actualités', '$titleNoti', '".$fdb2['nama_kategori']."', '$tgl', '', '".$fdb2['url']."', 'all', '-', '-')
");

$callNoti = new startSendNotification();
$callNoti->sendNoti($titleNoti, $bodyNoti);

?>


<script>
alert("Data has been added <?php echo mysqli_error($koneksi); ?>");
location = "?p=tb_actualite&ac=art";

</script>


<?php } } }?>
<div class="modal fade" id="addnewart">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
<?php 
$rt = mysqli_query($koneksi,"select * from tb_actualite where id_actualite = '$idd'");
$rt2 = mysqli_fetch_array($rt);

$judul1 = str_replace("&petiksatu&","'",$rt2['judul']);
$deskripsi1 = str_replace("&petiksatu&","'",$rt2['deskripsi']);

?>

              <h4 class="modal-title">Add New Actualite</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            



      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="overflow-y:scroll;height:70vh">

      
      
      
            
      
    <input onchange="readURLactualite(this);" type="file" name="image_linkact" class="form-control"/>
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="image_actualite" 
      style="width:1px;height:1px;" name="image_actualitee" 
      class="img-thumbnail">
      </center>
                <script>
  function readURLactualite(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#image_actualite')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script> 


<div>
    Country
    </div>
    
    <div style="margin-bottom:30px;">
    <select class="form-control" name="pil_kategori2" required>
    <?php 
    
    
    $of = mysqli_query($koneksi,"select * from tb_kategori_2 where id_kategori = '$rt2[id_kate2]'");
    $of2 = mysqli_fetch_assoc($of);
    if(mysqli_num_rows($of) == 0){
      ?>
    <option value = "">-Country-</option>
      
      <?php
    }else{
      ?>
    <option value="<?php echo $of2['id_kategori2'] ?>"><?php echo $of2['nama_kategori2'] ?></option>
      
      <?php
    }
    
    ?>
    
    <?php 
    $fk = mysqli_query($koneksi,"select * from tb_kategori_2 where id_kategori2 != '$rt2[id_kate2]'");
    while($fk2 = mysqli_fetch_array($fk)){
      ?>
      <option value="<?php echo $fk2['id_kategori2'] ?>"><?php echo $fk2['nama_kategori2'] ?></option>
      <?php
    }
    ?>
    </select>
  </div>


    <div>
    Category
    </div>
    
    <div style="margin-bottom:30px;">
    <select class="form-control" name="pil_kategori" required>
    <?php 
    
    
    $of = mysqli_query($koneksi,"select * from tb_kategori_artikel where id_kategori = '$rt2[id_kate]'");
    $of2 = mysqli_fetch_assoc($of);
    if(mysqli_num_rows($of) == 0){
      ?>
    <option value = "">-Choose Category-</option>
      
      <?php
    }else{
      ?>
    <option value="<?php echo $of2['id_kategori'] ?>"><?php echo $of2['nama_kategori'] ?></option>
      
      <?php
    }
    
    ?>
    
    <?php 
    $fk = mysqli_query($koneksi,"select * from tb_kategori_artikel where id_kategori != '$rt2[id_kate]'");
    while($fk2 = mysqli_fetch_array($fk)){
      ?>
      <option value="<?php echo $fk2['id_kategori'] ?>"><?php echo $fk2['nama_kategori'] ?></option>
      <?php
    }
    ?>
    </select>
  </div>

  
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Title</span>
                  </div>
          
          
         
          <input type="hidden" name="id_template" value="<?php echo $idd; ?>" />
                 <input name="judulactualite" class="form-control" 
         value="" required/>
                </div>
        

 <div style="margin-top:20px;">Link Web</div>
        <div style="margin-top:5px;">
           <input name="urll" class="form-control" 
         value="" />
        </div>

           <!--   <div style="margin-top:10px;padding-left:5px;">
                           Description
                </div>
  
                <textarea class="form-control" name="deskripsiactualite" placeholder="Place some text here"
              
                          required></textarea> -->
             
             
        
      
        
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="addtb_actualite" class="btn btn-primary">Add</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
      
<div class="modal fade" id="addnewcate">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">


              <h4 class="modal-title">Add New Category</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            



      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="overflow-y:scroll;height:70vh">

      
      
      
            
      
    
        
             <div style="margin-top:10px;padding-left:5px;">
                           Category Name
                </div>
<input class="form-control" name="nama_kategori" value="" required/>             
             
        
      
        
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="addtb_kategori" class="btn btn-primary">Add</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
      
      
      
      <!--
<center>
      <fieldset style="background-color:grey;width:90%;max-width:500px;align:center;">
      tessss
      </fieldset>
    </center> 
      -->
      </div>
   

             
    
            
            
                                           
                   <?php 
                   include('../db.php');
                   $kj = mysqli_query($koneksi,"select * from tb_menu where id_menu = '$_GET[id_menu]'");


                   ?>                            
    <?php 
if(isset($_POST['updatekategori_menu21'])){

    
if(($_POST['idc'])){





$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link21']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link21']['tmp_name'];
    $fn = $_FILES['image_link21']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_link21']['name'];

move_uploaded_file($_FILES['image_link21']['tmp_name'],"../images/menu/".$_FILES['image_link21']['name']);

    if($_FILES['image_link21']['name'] == null){
//mysqli_query($koneksi,"update tb_menu set nama_menu = '$_POST[nama]',
//long_desc = '$_POST[long_deskripsi]'
//where id_menu = '$_POST[idc]'
//");
  }else{
    
mysqli_query($koneksi,"update tb_menu set

gambar = '$namaa'
where id_menu = '$_POST[idc]'
");   
    
  }


if($_FILES['image_link21']['name'] == null){

?>

<script>
alert("Gambar tidak boleh kosong");
location = "?p=menu&id_menu=<?php echo $_POST['idc2'] ?>";

</script>

<?php }else{ ?>

<script>
alert("Data changed successfully <?php echo mysqli_error($koneksi); ?>");
location = "?p=menu&id_menu=<?php echo $_POST['idc2'] ?>";

</script>


<?php } ?>

<?php 
 } 
}
 ?> 

 <?php 
if(isset($_POST['deletetb_actualite'])){

    
if(!empty($_POST['id_template'])){





    
mysqli_query($koneksi,"update tb_actualite set
visibility = '0'
where id_actualite = '$_POST[id_template]'
");   
    

?>
<script>
alert("Data has been deleted <?php echo mysqli_error($koneksi); ?>");
location = "?p=tb_actualite&ac=art";

</script>


<?php 
 } 
}
 ?>

 <?php 
if(isset($_POST['updatetb_actualite'])){

    
if(!empty($_POST['judul'])){





$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link']['tmp_name'];
    $fn = $_FILES['image_link']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_link']['name'];

move_uploaded_file($_FILES['image_link']['tmp_name'],"../images/actualite/".$_FILES['image_link']['name']);


$judul1 = str_replace("'","&petiksatu&",$_POST['judul']);
$deskripsi1 = str_replace("'","&petiksatu&",$_POST['deskripsi']);
$keterangan1 = str_replace("'","&petiksatu&",$_POST['keterangan']);

date_default_timezone_set('Asia/Jakarta');
$tanggal = date('Y-m-d');
$tanggal2 = date('Y-m-d H:i:s');


    if($_FILES['image_link']['name'] == null){
mysqli_query($koneksi,"update tb_actualite set 
judul = '$judul1',
deskripsi = '$deskripsi1',
keterangan = '$keterangan1',
url = '$_POST[urll]',
tanggal_edit = '$tanggal',
id_kate = '$_POST[pil_kategori]',
id_kate2 = '$_POST[pil_kategori2]',
tanggal_edit2 = '$tanggal2'
where id_actualite = '$_POST[id_template]'
");
  }else{
    
mysqli_query($koneksi,"update tb_actualite set
judul = '$judul1',
deskripsi = '$deskripsi1',
keterangan = '$keterangan1',
gambar = '$namaa',
url = '$_POST[urll]',
tanggal_edit = '$tanggal',
id_kate = '$_POST[pil_kategori]',
id_kate2 = '$_POST[pil_kategori2]',
tanggal_edit2 = '$tanggal2'
where id_actualite = '$_POST[id_template]'
");   
    
  }


if($_FILES['image_link']['name'] == null){

?>

<script>
//alert("Data had been changed\nid_template-<?php echo $_POST['id_template'] ?>"+
//"\ntitle-<?php echo $_POST['judul'] ?>"+
//"\nketerangan-<?php echo $_POST['keterangan'] ?>"+
// "<?php echo mysqli_error($koneksi); ?>");
location = "?p=tb_actualite&ac=art";

</script>

<?php }else{ ?>

<script>
alert("Data had been changed <?php echo mysqli_error($koneksi); ?>");
location = "?p=tb_actualite&ac=art";

</script>


<?php } ?>

<?php 
 } 
}
 ?>
    <div class="table-responsive" style="padding:5px;">
        <table class="table table-striped w-100 dt-responsive nowrap" id="example">
            <thead>
                <tr>
                  <th>No. </th>
                  <th>Option</th>                   
                  <th>Country</th>   
                  <th>Category</th>              
                  <th>Title</th>
                  <th>Web link</th>
                  <th>Date</th>
                  <th>Picture</th>
                  <th></th>
                  
                </tr>
            </thead>
            <tbody>
            <?php 
            $no = 1;

      $kj = mysqli_query($koneksi,"select * from tb_actualite where  visibility = '1'
            order by id_actualite desc");
            while($kj2 = mysqli_fetch_array($kj)){
            $idd = $kj2['id_actualite'];
            ?>

                                              <tr>
                            <td><?php echo $no; ?></td>
                            <td>
                              <a data-toggle="modal" data-target="#modal-lg_<?php echo $idd ?>" href="" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a>
                              <a data-toggle="modal" data-target="#modal-lg_del<?php echo $idd ?>" href="" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash"></i></a>
                            </td>

                    <?php 

  $judul1 = str_replace("&petiksatu&","'",$kj2['judul']);
                    $deskripsi1 = str_replace("&petiksatu&","'",$kj2['deskripsi']);

$fns = mysqli_query($koneksi,"select * from tb_kategori_artikel where id_kategori = '$kj2[id_kate]'");
$fns2  = mysqli_fetch_assoc($fns);


$fnss = mysqli_query($koneksi,"select * from tb_kategori_2 where id_kategori2 = '$kj2[id_kate2]'");
$fnss2  = mysqli_fetch_assoc($fnss);
                    
                    ?>
              <td><?php echo $fnss2['nama_kategori2'] ?></td>
              <td><?php echo $fns2['nama_kategori'] ?></td>

              <td><?php echo $judul1 ?></td>
                          
                 
<td><?php echo $kj2['url']; ?></td> 
<td><?php echo $kj2['tanggal']; ?></td>       
                                    <td><img src="https://ufe-section-indonesie.org/ufeapp/images/actualite/<?php echo $kj2['gambar'] ?>"
                  style="width:50px;height:auto;" 
                  /></td>
                
                        </tr>
            
      
    <div class="modal fade" id="modal-lg_del<?php echo $idd; ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
<?php 
$rt = mysqli_query($koneksi,"select * from tb_actualite where id_actualite = '$idd'");
$rt2 = mysqli_fetch_array($rt);

$judul1 = str_replace("&petiksatu&","'",$rt2['judul']);
$deskripsi1 = str_replace("&petiksatu&","'",$rt2['deskripsi']);

?>

              <h4 class="modal-title">Delete <?php echo $judul1 ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            



      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="overflow-y:scroll;height:70vh">

      
      
      
            
      
          
         
          <input type="hidden" name="id_template" value="<?php echo $idd; ?>" />
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
       
        
              <button type="submit" name="deletetb_actualite" class="btn btn-danger">Delete</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
      
      
        <div class="modal fade" id="modal-lg_<?php echo $idd; ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
<?php 
$rt = mysqli_query($koneksi,"select * from tb_actualite where id_actualite = '$idd'");
$rt2 = mysqli_fetch_array($rt);

$judul1 = str_replace("&petiksatu&","'",$rt2['judul']);
$deskripsi1 = str_replace("&petiksatu&","'",$rt2['deskripsi']);

?>

              <h4 class="modal-title">161. Edit <?php echo $judul1 ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            



      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="overflow-y:scroll;height:70vh">

      
      
      
            
      <center>
              <img src="https://ufe-section-indonesie.org/ufeapp/images/actualite/<?php echo $kj2['gambar'] ?>"  style="width:200px;" />
      </center> 
      
    <input onchange="readURL<?php echo $idd; ?>(this);" type="file" name="image_link" class="form-control"/>
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_image<?php echo $idd; ?>" 
      style="width:1px;height:1px;" name="product_image<?php echo $idd; ?>" 
      class="img-thumbnail">
      </center>
                <script>
  function readURL<?php echo $idd; ?>(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_image<?php echo $idd; ?>')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script> 

<div>
    Country
    </div>
    
    <div style="margin-bottom:30px;">
    <select class="form-control" name="pil_kategori2" required>
    <?php 
    
    
    $of = mysqli_query($koneksi,"select * from tb_kategori_2 where id_kategori2 = '$rt2[id_kate2]'");
    $of2 = mysqli_fetch_assoc($of);
    if(mysqli_num_rows($of) == 0){
      ?>
    <option value = "">-Choose Country-</option>
      
      <?php
    }else{
      ?>
    <option value="<?php echo $of2['id_kategori2'] ?>"><?php echo $of2['nama_kategori2'] ?></option>
      
      <?php
    }
    
    ?>
    
    <?php 
    $fk = mysqli_query($koneksi,"select * from tb_kategori_2 where id_kategori2 != '$rt2[id_kate2]'");
    while($fk2 = mysqli_fetch_array($fk)){
      ?>
      <option value="<?php echo $fk2['id_kategori2'] ?>"><?php echo $fk2['nama_kategori2'] ?></option>
      <?php
    }
    ?>
    </select>
  </div>
    <div>
    Category
    </div>
    
    <div style="margin-bottom:30px;">
    <select class="form-control" name="pil_kategori" required>
    <?php 
    
    
    $of = mysqli_query($koneksi,"select * from tb_kategori_artikel where id_kategori = '$rt2[id_kate]'");
    $of2 = mysqli_fetch_assoc($of);
    if(mysqli_num_rows($of) == 0){
      ?>
    <option value = "">-Choose Category-</option>
      
      <?php
    }else{
      ?>
    <option value="<?php echo $of2['id_kategori'] ?>"><?php echo $of2['nama_kategori'] ?></option>
      
      <?php
    }
    
    ?>
    
    <?php 
    $fk = mysqli_query($koneksi,"select * from tb_kategori_artikel where id_kategori != '$rt2[id_kate]'");
    while($fk2 = mysqli_fetch_array($fk)){
      ?>
      <option value="<?php echo $fk2['id_kategori'] ?>"><?php echo $fk2['nama_kategori'] ?></option>
      <?php
    }
    ?>
    </select>
  </div>
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Title</span>
                  </div>
          
          
         
          <input type="hidden" name="id_template" value="<?php echo $idd; ?>" />
                 <input name="judul" class="form-control" 
         value="<?php echo $judul1 ?>" />
                </div>
        
             <div style="margin-top:10px;padding-left:5px;">
                           Description
                </div>
                <textarea class="form-control" name="deskripsi" placeholder="Place some text here"
              
                          ><?php echo $deskripsi1 ?></textarea>
             
             
        
        <div style="margin-top:20px;">Link Web</div>
        <div style="margin-top:5px;">
           <input name="urll" class="form-control" 
         value="<?php echo $rt2['url']; ?>" />
        </div>
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
       
        
              <button type="submit" name="updatetb_actualite" class="btn btn-primary">Save changes -</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            










            
             <?php $no++;} ?>          
            
            
                                           
                                                </tbody>
        
     <tfoot>
                <tr>
                    <th>No. </th>
          <th>Act</th>                   
          <th>Country</th>    
          <th>Category</th>                   
            
      <th>Title</th>
               
                  <th>Description</th>
          <th>Member name</th>
                   <th>Email</th>
           <th>Web link</th>
           <th>Date</th>
            <th>Pic</th>
                    
                </tr>
            </tfoot>
    </table>
    </div>
</div>
   </div>
</div>

<?php }else if($_GET['p'] == "tb_france"){ ?>
 <div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
<?php 
include('../db.php');
//$idmenuu = "MENU".$_GET['id_menu'];
//$qw = mysqli_query($koneksi,"select * from tb_menu where id_menu = '$_GET[id_menu]'");
//$qw2 = mysqli_fetch_array($qw);
?>
  <table style="width:100%;">
  <tr>
  <td>
           <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="?p=tb_dm_1">Home</a></li>
    
              <li class="breadcrumb-item active">All France</li>
                            </ol>
    </td>
<td style="text-align:right;">

<span  style="cursor:pointer;" class="btn btn-sm btn-info" onclick="listkatt()">Category List</span>
&nbsp;&nbsp;


<span data-toggle="modal" data-target="#addnewcatefrance" style="cursor:pointer;" class="btn btn-primary btn-sm">Add New Category +</span>
&nbsp;&nbsp;
<span data-toggle="modal" data-target="#addnewartfrance" style="cursor:pointer;" class="btn btn-success btn-sm">Add New +</span></td>
</tr>
</table>



<?php 

if(isset($_POST['deletetb_kategorii'])){
  
  $njf = mysqli_query($koneksi,"select * from tb_menu where id_kate = '$_POST[id_kategorii]'");
  if(mysqli_num_rows($njf) == 0){
    
    $mnd = mysqli_query($koneksi,"delete from tb_kategori_artikel where id_kategori = '$_POST[id_kategorii]'");
  ?>
  <script>
  
  location = "?p=tb_france";
  </script>
  
  <?php
  
  }else{
    ?>
    <script>
    
    alert("Kategori tidak bisa di hapus karena terdapat artikel dengan kategori ini");
    </script>
    
    
    <?php
  }
  
  ?>
  
  
  
  <?php
}

?>


<div id="listkatee" style="display:none;">

<div>
<span class="btn btn-default btn-sm" onclick="closecate()">Close </span>
</div>

<table style="width:100%;">
<tr>
<th>Category Name</th>
<th></th>
</tr>
<?php
$rhr = mysqli_query($koneksi,"select * from tb_kategori_artikel order by nama_kategori asc");
while($rhr2 = mysqli_fetch_array($rhr)){
  ?>
  <tr>
  <td><?php echo $rhr2['nama_kategori'] ?></td>
  <td style="text-align:right;"><span data-toggle="modal" data-target = "#deletekate<?php echo $rhr2['id_kategori'] ?>" class="btn btn-sm btn-danger" style="cursor:pointer;">Delete</span></td>  
  </tr>
  
  
  
  
    <div class="modal fade" id="deletekate<?php echo $rhr2['id_kategori']; ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
<?php 
$rt = mysqli_query($koneksi,"select * from tb_menu where id_menu = '$rhr2[id_kategori]'");
$rt2 = mysqli_fetch_array($rt);

$judul1 = str_replace("&petiksatu&","'",$rt2['nama_menu']);
$deskripsi1 = str_replace("&petiksatu&","'",$rt2['deskripsi']);

?>

              <h4 class="modal-title">Delete <?php echo $rhr2['nama_kategori'] ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            



      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="overflow-y:scroll;height:70vh">

      
      
      
            
      
          
         
          <input type="hidden" name="id_kategorii" value="<?php echo $rhr2['id_kategori']; ?>" />
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
       
        
              <button type="submit" name="deletetb_kategorii" class="btn btn-danger">Delete</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
      
    
  
  <?php
}
 ?>

</table>

</div>


<script>
function listkatt(){
  document.getElementById("listkatee").style.display = "block";
}
</script>

<script>
function closecate(){
document.getElementById("listkatee").style.display = "none";
  
}
</script>
    

 <?php 
if(isset($_POST['addtb_kategorifrance'])){

    
if(!empty($_POST['nama_kategorifrance'])){





$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_linkact']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_linkact']['tmp_name'];
    $fn = $_FILES['image_linkact']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_linkact']['name'];

//move_uploaded_file($_FILES['image_linkact']['tmp_name'],"../images/actualite/".$_FILES['image_linkact']['name']);


$judul1 = str_replace("'","-petiksatu-",$_POST['nama_kategorifrance']);
$judul2 = str_replace('"',"-petikdua-",$judul1);
$deskripsi1 = str_replace("'","&petiksatu&",$_POST['deskripsiactualite']);
//$keterangan1 = str_replace("'","&petiksatu&",$_POST['keterangan']);


date_default_timezone_set('Asia/Jakarta');
$tanggal = date('Y-m-d');
$tanggal2 = date('Y-m-d H:i:s');
    
$nf = mysqli_query($koneksi,"select * from tb_kategori_artikel where nama_kategori = '$judul2' and kategori = 'france'");
if(mysqli_num_rows($nf) == 0){    
    
mysqli_query($koneksi,"insert into tb_kategori_artikel
(nama_kategori,tanggal, kategori) values
('$judul2','$tanggal', 'france')
");   

?>
<script>
alert("Data has been added <?php echo mysqli_error($koneksi); ?>");
location = "?p=tb_france&ac=art";

</script>

<?php
}else{
  ?>
  <script>
  
  alert("Category name already exist");
  </script>
  
  <?php
}
    
  }


if($_FILES['image_linkactfrance']['name'] == null){

?>



<?php }else{ ?>



<?php  } }?>

 <?php 
if(isset($_POST['addtb_actualitefrance'])){

    
if(!empty($_POST['judulactualitefrance'])){





$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_linkactfrance']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_linkactfrance']['tmp_name'];
    $fn = $_FILES['image_linkactfrance']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_linkactfrance']['name'];

move_uploaded_file($_FILES['image_linkactfrance']['tmp_name'],"../images/menu/".$_FILES['image_linkactfrance']['name']);


$judul1 = str_replace("'","&petiksatu&",$_POST['judulactualitefrance']);
$deskripsi1 = str_replace("'","&petiksatu&",$_POST['deskripsiactualitefrance']);
//$keterangan1 = str_replace("'","&petiksatu&",$_POST['keterangan']);

    if($_FILES['image_linkactfrance']['name'] == null){
?>
<script>
alert("Image cannot be empty");
</script>
<?php
  }else{

date_default_timezone_set('Asia/Jakarta');
$tanggal = date('Y-m-d');
$tanggal2 = date('Y-m-d H:i:s');
    
$nf = mysqli_query($koneksi,"select * from tb_menu where tanggal2 = '$tanggal2' and jenis = 'france'");
if(mysqli_num_rows($nf) == 0){    
    
mysqli_query($koneksi,"insert into tb_menu
(jenis,nama_menu,short_desc, gambar,gambar2, gambar3, tanggal, tanggal2, id_kate) values
('france','$judul1','$deskripsi1','$namaa','$namaa','$namaa', '$tanggal', '$tanggal2', '$_POST[pil_kategori]')
");   
}
    
  }


if($_FILES['image_linkactfrance']['name'] == null){

?>

<script>
//alert("Data had been changed\nid_template-<?php echo $_POST['id_template'] ?>"+
//"\ntitle-<?php echo $_POST['judul'] ?>"+
//"\nketerangan-<?php echo $_POST['keterangan'] ?>"+
// "<?php echo mysqli_error($koneksi); ?>");
//location = "?p=tb_actualite&ac=art";

</script>

<?php }else{ ?>

<script>
alert("Data has been added <?php echo mysqli_error($koneksi); ?>");
location = "?p=tb_france&ac=art";

</script>


<?php } } }?>
<div class="modal fade" id="addnewartfrance">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
<?php 
$rt = mysqli_query($koneksi,"select * from tb_menu where id_menu = '$idd'");
$rt2 = mysqli_fetch_array($rt);

$judul1 = str_replace("&petiksatu&","'",$rt2['nama_menu']);
$deskripsi1 = str_replace("&petiksatu&","'",$rt2['short_desc']);

?>

              <h4 class="modal-title">Add New</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            



      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="overflow-y:scroll;height:70vh">

      
      <div style="margin-bottom:30px;">
    <select class="form-control" name="pil_kategori" required>
    <?php 
    
    
    $of = mysqli_query($koneksi,"select * from tb_kategori_artikel where id_kategori = '$rt2[id_kate]'");
    $of2 = mysqli_fetch_assoc($of);
    if(mysqli_num_rows($of) == 0){
      ?>
    <option value = "">-Choose Category-</option>
      
      <?php
    }else{
      ?>
    <option value="<?php echo $of2['id_kategori'] ?>"><?php echo $of2['nama_kategori'] ?></option>
      
      <?php
    }
    
    ?>
    
    <?php 
    $fk = mysqli_query($koneksi,"select * from tb_kategori_artikel where id_kategori != '$rt2[id_kate]'");
    while($fk2 = mysqli_fetch_array($fk)){
      ?>
      <option value="<?php echo $fk2['id_kategori'] ?>"><?php echo $fk2['nama_kategori'] ?></option>
      <?php
    }
    ?>
    </select>
  </div>
      
            
      
    <input onchange="readURLactualite(this);" type="file" name="image_linkactfrance" class="form-control"/>
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="image_actualite" 
      style="width:1px;height:1px;" name="image_actualitee" 
      class="img-thumbnail">
      </center>
                <script>
  function readURLactualite(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#image_actualite')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script> 
  
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Title</span>
                  </div>
          
          
         
          <input type="hidden" name="id_template" value="<?php echo $idd; ?>" />
                 <input name="judulactualitefrance" class="form-control" 
         value="" required/>
                </div>
        
             <div style="margin-top:10px;padding-left:5px;">
                           Description
                </div>
                <textarea class="form-control" name="deskripsiactualitefrance" placeholder="Place some text here"
              
                          required></textarea>
             
             
        
      
        
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="addtb_actualitefrance" class="btn btn-primary">Add</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
      
<div class="modal fade" id="addnewcatefrance">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">


              <h4 class="modal-title">Add New Category</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            



      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="overflow-y:scroll;height:70vh">

      
      
      
            
      
    
        
             <div style="margin-top:10px;padding-left:5px;">
                           Category Name
                </div>
<input class="form-control" name="nama_kategorifrance" value="" required/>             
             
        
      
        
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="addtb_kategorifrance" class="btn btn-primary">Add</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
      
      
      
      <!--
<center>
      <fieldset style="background-color:grey;width:90%;max-width:500px;align:center;">
      tessss
      </fieldset>
    </center> 
      -->
      </div>
   

             
    
            
            
                                           
                   <?php 
                   include('../db.php');
                   $kj = mysqli_query($koneksi,"select * from tb_menu where id_menu = '$_GET[id_menu]'");


                   ?>                            
    <?php 
if(isset($_POST['updatekategori_menu21'])){

    
if(($_POST['idc'])){





$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link21']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link21']['tmp_name'];
    $fn = $_FILES['image_link21']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_link21']['name'];

move_uploaded_file($_FILES['image_link21']['tmp_name'],"../images/menu/".$_FILES['image_link21']['name']);

    if($_FILES['image_link21']['name'] == null){
//mysqli_query($koneksi,"update tb_menu set nama_menu = '$_POST[nama]',
//long_desc = '$_POST[long_deskripsi]'
//where id_menu = '$_POST[idc]'
//");
  }else{
    
mysqli_query($koneksi,"update tb_menu set

gambar = '$namaa'
where id_menu = '$_POST[idc]'
");   
    
  }


if($_FILES['image_link21']['name'] == null){

?>

<script>
alert("Gambar tidak boleh kosong");
location = "?p=menu&id_menu=<?php echo $_POST['idc2'] ?>";

</script>

<?php }else{ ?>

<script>
alert("Data changed successfully <?php echo mysqli_error($koneksi); ?>");
location = "?p=menu&id_menu=<?php echo $_POST['idc2'] ?>";

</script>


<?php } ?>

<?php 
 } 
}
 ?> 

 <?php 
if(isset($_POST['deletetb_actualitefrance'])){

    
if(!empty($_POST['id_template'])){





    
mysqli_query($koneksi,"delete from tb_menu where id_menu = '$_POST[id_template]'
");   
    

?>
<script>
alert("Data has been deleted <?php echo mysqli_error($koneksi); ?>");
location = "?p=tb_france&ac=art";

</script>


<?php 
 } 
}
 ?>

 <?php 
if(isset($_POST['updatetb_actualitefrance'])){

    
if(!empty($_POST['judulfrance'])){





$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_linkfrance']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_linkfrance']['tmp_name'];
    $fn = $_FILES['image_linkfrance']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_linkfrance']['name'];

move_uploaded_file($_FILES['image_linkfrance']['tmp_name'],"../images/menu/".$_FILES['image_linkfrance']['name']);


$judul1 = str_replace("'","&petiksatu&",$_POST['judulfrance']);
$deskripsi1 = str_replace("'","&petiksatu&",$_POST['deskripsifrance']);
$keterangan1 = str_replace("'","&petiksatu&",$_POST['keteranganfrance']);

date_default_timezone_set('Asia/Jakarta');
$tanggal = date('Y-m-d');
$tanggal2 = date('Y-m-d H:i:s');


    if($_FILES['image_linkfrance']['name'] == null){
mysqli_query($koneksi,"update tb_menu set 
nama_menu = '$judul1',
short_desc = '$deskripsi1',
linkweb = '$_POST[urll]',
id_kate = '$_POST[pil_kategori]'
where id_menu = '$_POST[id_template]'
");
  }else{
    
mysqli_query($koneksi,"update tb_menu set
nama_menu = '$judul1',
short_desc = '$deskripsi1',
gambar = '$namaa',
gambar2 = '$namaa',
gambar3 = '$namaa',
linkweb = '$_POST[urll]',
id_kate = '$_POST[pil_kategori]'
where id_menu = '$_POST[id_template]'
");   
    
  }


if($_FILES['image_linkfrance']['name'] == null){

?>

<script>
//alert("Data had been changed\nid_template-<?php echo $_POST['id_template'] ?>"+
//"\ntitle-<?php echo $_POST['judul'] ?>"+
//"\nketerangan-<?php echo $_POST['keterangan'] ?>"+
// "<?php echo mysqli_error($koneksi); ?>");
location = "?p=tb_france&ac=art";

</script>

<?php }else{ ?>

<script>
alert("Data had been changed <?php echo mysqli_error($koneksi); ?>");
location = "?p=tb_france&ac=art";

</script>


<?php } ?>

<?php 
 } 
}
 ?>
    <div class="table-responsive" style="padding:5px;">
        <table class="table table-striped w-100 dt-responsive nowrap" id="example">
            <thead>
                <tr>
                    <th>No. </th>
          <th>Act</th>                   
           <th>Category</th>              
           <th>Title</th>
               
                  <th>Description</th>
           <th>Web link</th>
           <th>Date</th>
            <th>Pic</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php 
            $no = 1;

      $kj = mysqli_query($koneksi,"select * from tb_menu where jenis = 'france'
            order by id_menu desc");
            while($kj2 = mysqli_fetch_array($kj)){
            $idd = $kj2['id_menu'];
            ?>

                                              <tr>
                            <td><table style="background:transparent;width:150px;"><tr><td><?php echo $no; ?></td></tr></table></td>
                            <td>
              <table style="background:transparent;width:150px;"><tr><td>
                                <a data-toggle="modal" data-target="#modal-lg_<?php echo $idd ?>" href="" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a>
&nbsp;&nbsp;<a data-toggle="modal" data-target="#modal-lg_del<?php echo $idd ?>" href="" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash"></i></a>

</td></tr></table>
              </td>

                    <?php 

  $judul1 = str_replace("&petiksatu&","'",$kj2['nama_menu']);
                    $deskripsi1 = str_replace("&petiksatu&","'",$kj2['short_desc']);

$fns = mysqli_query($koneksi,"select * from tb_kategori_artikel where id_kategori = '$kj2[id_kate]'");
$fns2  = mysqli_fetch_assoc($fns);
                    
                    ?>
              <td><?php echo $fns2['nama_kategori'] ?></td>

              <td><?php echo $judul1 ?></td>
                          
                 <td><?php echo substr($deskripsi1,0,100); ?></td>
    
<td><?php echo $kj2['linkweb']; ?></td> 
<td><?php echo $kj2['tanggal']; ?></td>       
                                    <td><img src="https://ufe-section-indonesie.org/ufeapp/images/menu/<?php echo $kj2['gambar'] ?>"
                  style="width:50px;height:auto;" 
                  /></td>
                
                        </tr
                        >
            
      
    <div class="modal fade" id="modal-lg_del<?php echo $idd; ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
<?php 
$rt = mysqli_query($koneksi,"select * from tb_menu where id_menu = '$idd'");
$rt2 = mysqli_fetch_array($rt);

$judul1 = str_replace("&petiksatu&","'",$rt2['nama_menu']);
$deskripsi1 = str_replace("&petiksatu&","'",$rt2['short_desc']);

?>

              <h4 class="modal-title">Delete <?php echo $judul1 ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            



      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="overflow-y:scroll;height:70vh">

      
      
      
            
      
          
         
          <input type="hidden" name="id_template" value="<?php echo $idd; ?>" />
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
       
        
              <button type="submit" name="deletetb_actualitefrance" class="btn btn-danger">Delete</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
      
      
        <div class="modal fade" id="modal-lg_<?php echo $idd; ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
<?php 
$rt = mysqli_query($koneksi,"select * from tb_menu where id_menu = '$idd'");
$rt2 = mysqli_fetch_array($rt);

$judul1 = str_replace("&petiksatu&","'",$rt2['nama_menu']);
$deskripsi1 = str_replace("&petiksatu&","'",$rt2['short_desc']);

?>

              <h4 class="modal-title">162. Edit <?php echo $judul1 ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            



      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="overflow-y:scroll;height:70vh">

      
      
      
            
      <center>
              <img src="https://ufe-section-indonesie.org/ufeapp/images/menu/<?php echo $kj2['gambar'] ?>"  style="width:200px;" />
      </center> 
      
    <input onchange="readURL<?php echo $idd; ?>(this);" type="file" name="image_linkfrance" class="form-control"/>
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_image<?php echo $idd; ?>" 
      style="width:1px;height:1px;" name="product_image<?php echo $idd; ?>" 
      class="img-thumbnail">
      </center>
                <script>
  function readURL<?php echo $idd; ?>(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_image<?php echo $idd; ?>')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script> 


    <div>
    Category
    </div>
    
    <div style="margin-bottom:30px;">
    <select class="form-control" name="pil_kategori" required>
    <?php 
    
    
    $of = mysqli_query($koneksi,"select * from tb_kategori_artikel where id_kategori = '$rt2[id_kate]'");
    $of2 = mysqli_fetch_assoc($of);
    if(mysqli_num_rows($of) == 0){
      ?>
    <option value = "">-Choose Category-</option>
      
      <?php
    }else{
      ?>
    <option value="<?php echo $of2['id_kategori'] ?>"><?php echo $of2['nama_kategori'] ?></option>
      
      <?php
    }
    
    ?>
    
    <?php 
    $fk = mysqli_query($koneksi,"select * from tb_kategori_artikel where id_kategori != '$rt2[id_kate]'");
    while($fk2 = mysqli_fetch_array($fk)){
      ?>
      <option value="<?php echo $fk2['id_kategori'] ?>"><?php echo $fk2['nama_kategori'] ?></option>
      <?php
    }
    ?>
    </select>
  </div>
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Title</span>
                  </div>
          
          
         
          <input type="hidden" name="id_template" value="<?php echo $idd; ?>" />
                 <input name="judulfrance" class="form-control" 
         value="<?php echo $judul1 ?>" />
                </div>
        
             <div style="margin-top:10px;padding-left:5px;">
                           Description
                </div>
                <textarea class="form-control" name="deskripsifrance" placeholder="Place some text here"
              
                          ><?php echo $deskripsi1 ?></textarea>
             
             
        
        <div style="margin-top:20px;">Link Web</div>
        <div style="margin-top:5px;">
           <input name="urll" class="form-control" 
         value="<?php echo $rt2['linkweb']; ?>" />
        </div>
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
       
        
              <button type="submit" name="updatetb_actualitefrance" class="btn btn-primary">Save changes -</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            










            
             <?php $no++;} ?>          
            
            
                                           
                                                </tbody>
        
     <tfoot>
                <tr>
                    <th>No. </th>
          <th>Act</th>                   
    <th>Category</th>                   
            
      <th>Title</th>
               
                  <th>Description</th>
           <th>Web link</th>
           <th>Date</th>
            <th>Pic</th>
                    
                </tr>
            </tfoot>
    </table>
    </div>
</div>
   </div>
</div>

<?php }else if($_GET['p'] == "article_active"){ ?>
 <div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
<?php 
include('../db.php');
//$idmenuu = "MENU".$_GET['id_menu'];
//$qw = mysqli_query($koneksi,"select * from tb_menu where id_menu = '$_GET[id_menu]'");
//$qw2 = mysqli_fetch_array($qw);
?>
  
           <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="?p=tb_dm_1">Home</a></li>
    
              <li class="breadcrumb-item active">Active Article </li>
                            </ol>
      
      
      <!--
<center>
      <fieldset style="background-color:grey;width:90%;max-width:500px;align:center;">
      tessss
      </fieldset>
    </center> 
      -->
      </div>
   

             
    
            
            
                                           
                   <?php 
                   include('../db.php');
                   $kj = mysqli_query($koneksi,"select * from tb_menu where id_menu = '$_GET[id_menu]'");


                   ?>                            
    <?php 
if(isset($_POST['updatekategori_menu21'])){

    
if(($_POST['idc'])){





$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link21']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link21']['tmp_name'];
    $fn = $_FILES['image_link21']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_link21']['name'];

move_uploaded_file($_FILES['image_link21']['tmp_name'],"../images/menu/".$_FILES['image_link21']['name']);

    if($_FILES['image_link21']['name'] == null){
//mysqli_query($koneksi,"update tb_menu set nama_menu = '$_POST[nama]',
//long_desc = '$_POST[long_deskripsi]'
//where id_menu = '$_POST[idc]'
//");
  }else{
    
mysqli_query($koneksi,"update tb_menu set

gambar = '$namaa'
where id_menu = '$_POST[idc]'
");   
    
  }


if($_FILES['image_link21']['name'] == null){

?>

<script>
alert("Gambar tidak boleh kosong");
location = "?p=menu&id_menu=<?php echo $_POST['idc2'] ?>";

</script>

<?php }else{ ?>

<script>
alert("Data changed successfully <?php echo mysqli_error($koneksi); ?>");
location = "?p=menu&id_menu=<?php echo $_POST['idc2'] ?>";

</script>


<?php } ?>

<?php 
 } 
}
 ?> 

 <?php 
if(isset($_POST['updatetb_artikel'])){

    
if(!empty($_POST['judul'])){





$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link']['tmp_name'];
    $fn = $_FILES['image_link']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_link']['name'];

move_uploaded_file($_FILES['image_link']['tmp_name'],"../images/actualite/".$_FILES['image_link']['name']);


$judul1 = str_replace("'","&petiksatu&",$_POST['judul']);
$deskripsi1 = str_replace("'","&petiksatu&",$_POST['deskripsi']);
$keterangan1 = str_replace("'","&petiksatu&",$_POST['keterangan']);


date_default_timezone_set('Asia/Jakarta');
$tanggal = date('Y-m-d');
$tanggal2 = date('Y-m-d H:i:s');

    if($_FILES['image_link']['name'] == null){
mysqli_query($koneksi,"update tb_template set 
judul = '$judul1',
deskripsi = '$deskripsi1',
keterangan = '$keterangan1'
where id_template = '$_POST[id_template]'
");
  }else{
    
mysqli_query($koneksi,"update tb_template set
judul = '$judul1',
deskripsi = '$deskripsi1',
keterangan = '$keterangan1',
gambar = '$namaa'
where id_template = '$_POST[id_template]'
");   
    
  }


if($_FILES['image_link']['name'] == null){

?>

<script>
//alert("Data had been changed\nid_template-<?php echo $_POST['id_template'] ?>"+
//"\ntitle-<?php echo $_POST['judul'] ?>"+
//"\nketerangan-<?php echo $_POST['keterangan'] ?>"+
// "<?php echo mysqli_error($koneksi); ?>");
//alert("error <?php echo mysqli_error($koneksi); ?>");
location = "?p=article_active&ac=art";

</script>

<?php }else{ ?>

<script>
alert("Data had been changed <?php echo mysqli_error($koneksi); ?>");
location = "?p=article_active&ac=art";

</script>


<?php } ?>

<?php 
 } 
}
 ?>
    <div class="table-responsive" style="padding:5px;">
        <table class="table table-striped w-100 dt-responsive" id="example">
            <thead>
                <tr>
                    <th>No. </th>
          <th>Act</th>                   
           <th>Title</th>
               
                  <th>Description</th>
          <th>Member name</th>
                   <th>Email</th>
           <th>Web link</th>
           <th>Date</th>
            <th>Pic</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php 
            $no = 1;

      $kj = mysqli_query($koneksi,"select * from tb_template where keterangan  = 'release' 
            and visibility = '1'
            order by tanggal desc");
            while($kj2 = mysqli_fetch_array($kj)){
            $idd = $kj2['id_template'];
            ?>

                                              <tr>
                            <td><?php echo $no; ?></td>
                            <td>
              
                                <a data-toggle="modal" data-target="#modal-lg_<?php echo $idd ?>" href="" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a>


              </td>

                    <?php 
                    $judul1 = str_replace("&petiksatu&","'",$kj2['judul']);
                    $deskripsi1 = str_replace("&petiksatu&","'",$kj2['deskripsi']);
                    
                    ?>

              <td><?php echo $judul1 ?></td>
                          
                 <td><?php echo substr($deskripsi1,0,100); ?></td>
            <?php
            $ok = mysqli_query($koneksi,"select * from user where idUser = '$kj2[id_member_vip]'");
            $ok2 = mysqli_fetch_array($ok);
            ?>            
<td><?php echo $ok2['first_name']."&nbsp;".$ok2['second_name'] ?></td>
<td><?php echo $ok2['username']; ?></td>  
<td><?php echo $kj2['linkweb']; ?></td> 
<td><?php echo $kj2['tanggal']; ?></td>       
                                    <td><img src="https://ufe-section-indonesie.org/ufeapp/images/actualite/<?php echo $kj2['gambar'] ?>"
                  style="width:50px;height:auto;" 
                  /></td>
                
                        </tr
                        >
            
            
        <div class="modal fade" id="modal-lg_<?php echo $idd; ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
<?php 
$rt = mysqli_query($koneksi,"select * from tb_template where id_template = '$idd'");
$rt2 = mysqli_fetch_array($rt);

$judul1 = str_replace("&petiksatu&","'",$rt2['judul']);
$deskripsi1 = str_replace("&petiksatu&","'",$rt2['deskripsi']);

?>

              <h4 class="modal-title">16. Edit <?php echo $judul1 ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            



      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="overflow-y:scroll;height:70vh">

      
      
      
            
      <center>
              <img src="https://ufe-section-indonesie.org/ufeapp/images/actualite/<?php echo $kj2['gambar'] ?>"  style="width:200px;" />
      </center> 
      
    <input onchange="readURL<?php echo $idd; ?>(this);" type="file" name="image_link" class="form-control"/>
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_image<?php echo $idd; ?>" 
      style="width:1px;height:1px;" name="product_image<?php echo $idd; ?>" 
      class="img-thumbnail">
      </center>
                <script>
  function readURL<?php echo $idd; ?>(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_image<?php echo $idd; ?>')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script> 
  
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Title</span>
                  </div>
          
          
         
          <input type="hidden" name="id_template" value="<?php echo $idd; ?>" />
                 <input name="judul" class="form-control" 
         value="<?php echo $judul1 ?>" />
                </div>
        
             <div style="margin-top:10px;padding-left:5px;">
                           Description
                </div>
                <textarea class="form-control" name="deskripsi" placeholder="Place some text here"
              
                          ><?php echo $deskripsi1 ?></textarea>
             
             
        
        
        <select style="margin-top:10px;" class="form-control" name="keterangan">
        <option value="<?php echo $rt2['keterangan'] ?>">
        <?php echo $rt2['keterangan'] ?></option>
        <?php if($rt2['keterangan'] == "release"){ ?>
        <option value="pending">Pending</option>
        <?php }else{ ?>
        <option value="release">Release</option>
        
        <?php } ?>
        </select>
        
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="updatetb_artikel" class="btn btn-primary">Save changes-</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            










            
             <?php $no++;} ?>          
            
            
                                           
                                                </tbody>
        
     <tfoot>
                <tr>
                    <th>No. </th>
          <th>Act</th>                   
           <th>Title</th>
               
                  <th>Description</th>
          <th>Member name</th>
                   <th>Email</th>
           <th>Web link</th>
           <th>Date</th>
            <th>Pic</th>
                    
                </tr>
            </tfoot>
    </table>
    </div>
</div>
   </div>
</div>

<?php }else if($_GET['p'] == "article_waiting_confirm"){ ?>
 <div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">  
           <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="?p=tb_dm_1">Home</a></li>
    
              <li class="breadcrumb-item active">Article Waiting Confirmation </li>
                            </ol>
      </div>
   

             
    
            
            
                                           
                  
 <?php 

 
 
if(isset($_POST['updatetb_artikel'])){

    
if(!empty($_POST['judul'])){

$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link']['tmp_name'];
    $fn = $_FILES['image_link']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );
    imagejpeg($dst, $target_filename); // adjust format as needed
}

$namaa = $_FILES['image_link']['name'];
move_uploaded_file($_FILES['image_link']['tmp_name'],"../images/actualite/".$_FILES['image_link']['name']);

$judul1 = str_replace("'","&petiksatu&",$_POST['judul']);
$judul2 = str_replace('"','&petikdua&',$judul1);

$deskripsi1 = str_replace("'","&petiksatu&",$_POST['deskripsi']);
$deskripsi2 = str_replace('"','&petikdua&',$deskripsi1);

    if($_FILES['image_link']['name'] == null){
mysqli_query($koneksi,"update tb_template set 
judul = '$judul2',
deskripsi = '$deskripsi2',
keterangan = '$_POST[keterangan]'
where id_template = '$_POST[id_template]'
");
  }else{
    
mysqli_query($koneksi,"update tb_template set
judul = '$judul2',
deskripsi = '$deskripsi2',
keterangan = '$_POST[keterangan]',
gambar = '$namaa'
where id_template = '$_POST[id_template]'
");   
    
  }


if($_FILES['image_link']['name'] == null){

if($_POST['keterangan'] == "release"){
  mysqli_query($koneksi,"insert into tes_pesan (isipesan,keterangan) values ('pesan3','pesan3')");

  ?>
<!-- <script>
window.open("https://ufe-section-indonesie.org/ufeapp/tesfb2.php?from=member");
</script> -->

          <?php
class startSendNotification
{
  
    function sendNoti($titleNoti, $bodyNoti){

    define( 'API_ACCESS_KEY', 'AAAARVfjooY:APA91bEAKbWGNffjb80WnOsnE4U_iNWJOUhW1UqiMsnLiJXah2oFmEcn2Y5EcBvUeCWHWgAfBwmFZHhnCdKvyvrUf4m7okrNCICisXtzNyxfKu4F8FxfhXcnxPICACaUrLQJekNqYZPy');
        include('../db.php');

    $ewww = mysqli_query($koneksi,"select * from user where token_push != '' ");
while ($tyu = mysqli_fetch_array($ewww)){
  $qw[] = $tyu['token_push'];
}


$fdb = mysqli_query($koneksi,"select * from tb_template where id_template = '$_POST[id_template]'");
$fdb2 = mysqli_fetch_assoc($fdb);

    $fcmMsg = array(
      'title' => $titleNoti,
      'body' => $bodyNoti,
      'icon' => 'image/look24-logo-s.png',
            'sound' => 'default',
      'image' => 'https://ufe-section-indonesie.org/ufeapp/images/actualite/'.$fdb2['gambar']
    
    );
    
    $fcmFields = array(
      'registration_ids' => $qw,
      'priority' => 'high',
      'notification' => $fcmMsg
    );

    $headers = array(
      'Authorization: key=' . API_ACCESS_KEY,
      'Content-Type: application/json'
    );
    
    $ch = curl_init();
    curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
    curl_setopt( $ch,CURLOPT_POST, true );
    curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
    curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
    curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
    curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fcmFields ) );
    $result = curl_exec($ch );
    curl_close( $ch );
    echo $result . "\n\n".$qw;
  }

}
?>

<?php 

$titleNoti = str_replace("-spasi-", " ", $judul2);
$bodyNoti = str_replace("-spasi-", " ", $deskripsi2);

$callNoti = new startSendNotification();

$callNoti->sendNoti($titleNoti, $bodyNoti);

?>
  
  <?php
}else{
  mysqli_query($koneksi,"insert into tes_pesan (isipesan,keterangan) values ('pesan4','pesan4')");
}


?>

<script>
//alert("Data had been changed\nid_template-<?php echo $_POST['id_template'] ?>"+
//"\ntitle-<?php echo $_POST['judul'] ?>"+
//"\nketerangan-<?php echo $_POST['keterangan'] ?>"+
// "<?php echo mysqli_error($koneksi); ?>");
location = "?p=article_waiting_confirm&ac=art";

</script>

<?php }else{
mysqli_query($koneksi,"insert into tes_pesan (isipesan,keterangan) values ('pesan2','pesan2')");

if($_POST['keterangan'] == "release"){
  ?>
  
          <?php
class startSendNotification
{
  
    function sendNoti($titleNoti, $bodyNoti){

    define( 'API_ACCESS_KEY', 'AAAARVfjooY:APA91bEAKbWGNffjb80WnOsnE4U_iNWJOUhW1UqiMsnLiJXah2oFmEcn2Y5EcBvUeCWHWgAfBwmFZHhnCdKvyvrUf4m7okrNCICisXtzNyxfKu4F8FxfhXcnxPICACaUrLQJekNqYZPy');
        include('../db.php');

    $ewww = mysqli_query($koneksi,"select * from user where token_push != '' ");
while ($tyu = mysqli_fetch_array($ewww)){
  $qw[] = $tyu['token_push'];
}
    
$fdb = mysqli_query($koneksi,"select * from tb_template where id_template = '$_POST[id_template]'");
$fdb2 = mysqli_fetch_assoc($fdb);

    $fcmMsg = array(
      'title' => $titleNoti,
      'body' => $bodyNoti,
      'icon' => 'image/look24-logo-s.png',
            'sound' => 'default',
      'image' => 'https://ufe-section-indonesie.org/ufeapp/images/actualite/'.$fdb2['gambar']
    
    );
    
    $fcmFields = array(
      'registration_ids' => $qw,
      'priority' => 'high',
      'notification' => $fcmMsg
    );

    $headers = array(
      'Authorization: key=' . API_ACCESS_KEY,
      'Content-Type: application/json'
    );
    
    $ch = curl_init();
    curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
    curl_setopt( $ch,CURLOPT_POST, true );
    curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
    curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
    curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
    curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fcmFields ) );
    $result = curl_exec($ch );
    curl_close( $ch );
    echo $result . "\n\n".$qw;
  }

}
?>

<?php 

$titleNoti = str_replace("-spasi-", " ", $judul2);
$titleNoti = str_replace("-spasi-", " ", $deskripsi2);

$callNoti = new startSendNotification();
$callNoti->sendNoti($titleNoti, $bodyNoti);

?>

<script>
alert("Data had been changed <?php echo mysqli_error($koneksi); ?>");
location = "?p=article_waiting_confirm&ac=art";

</script>


<?php } ?>

<?php 
 } 
}
}
 ?>
    <div class="table-responsive" style="padding:5px;">
        <table class="table table-striped w-100 dt-responsive " id="example">
            <thead>
                <tr>
                    <th>No. </th>
          <th>Act</th>                   
           <th>Title</th>
               
                  <th>Description</th>
          <th>Member name</th>
                   <th>Email</th>
           <th>Web link</th>
           <th>Date</th>
            <th>Pic</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php 
            $no = 1;

      $kj = mysqli_query($koneksi,"select * from tb_template where keterangan  = 'pending' 
            and visibility = '1'
            order by tanggal desc");
            while($kj2 = mysqli_fetch_array($kj)){
            $idd = $kj2['id_template'];
            ?>

                                              <tr>
                            <td><?php echo $no; ?></td>
                            <td>
              
                                <a data-toggle="modal" data-target="#modal-lg_<?php echo $idd ?>" href="" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a>


              </td>

                <?php 
                
                $judul1 = str_replace("&petiksatu&","'",$kj2['judul']);
                $judul2 = str_replace("&petikdua&",'"',$judul1);

                $deskripsi1 = str_replace("&petiksatu&","'",$kj2['deskripsi']);
                $deskripsi2 = str_replace("&petikdua&",'"',$deskripsi1);
                
                ?>

              <td><?php echo $judul2 ?></td>
                          
                 <td><?php echo substr($deskripsi2,0,100); ?></td>
            <?php
            $ok = mysqli_query($koneksi,"select * from user where idUser = '$kj2[id_member_vip]'");
            $ok2 = mysqli_fetch_array($ok);
            ?>            
<td><?php echo $ok2['first_name']."&nbsp;".$ok2['second_name'] ?></td>
<td><?php echo $ok2['username']; ?></td>  
<td><?php echo $kj2['linkweb']; ?></td> 
<td><?php echo $kj2['tanggal']; ?></td>       
                                    <td><img src="https://ufe-section-indonesie.org/ufeapp/images/actualite/<?php echo $kj2['gambar'] ?>"
                  style="width:50px;height:auto;" 
                  /></td>
                
                        </tr
                        >
            
            
        <div class="modal fade" id="modal-lg_<?php echo $idd; ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
<?php 
$rt = mysqli_query($koneksi,"select * from tb_template where id_template = '$idd'");
$rt2 = mysqli_fetch_array($rt);
?>

              <h4 class="modal-title">Edit <?php echo $rt2['judul'] ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            



      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="overflow-y:scroll;height:70vh">

      
      
      
            
      <center>
              <img src="https://ufe-section-indonesie.org/ufeapp/images/actualite/<?php echo $kj2['gambar'] ?>"  style="width:200px;" />
      </center> 
      
    <input onchange="readURL<?php echo $idd; ?>(this);" type="file" name="image_link" class="form-control"/>
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_image<?php echo $idd; ?>" 
      style="width:1px;height:1px;" name="product_image<?php echo $idd; ?>" 
      class="img-thumbnail">
      </center>
                <script>
  function readURL<?php echo $idd; ?>(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_image<?php echo $idd; ?>')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script> 
  
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Title</span>
                  </div>
          
          
         
          <input type="hidden" name="id_template" value="<?php echo $idd; ?>" />
                 <input name="judul" class="form-control" 
         value="<?php echo $judul2 ?>" />
                </div>
        
             <div style="margin-top:10px;padding-left:5px;">
                           Description
                </div>
                <textarea class="form-control" name="deskripsi" placeholder="Place some text here"
              
                          ><?php echo $deskripsi2 ?></textarea>
             
             
        
        
        <select style="margin-top:10px;" class="form-control" name="keterangan">
        <option value="<?php echo $rt2['keterangan'] ?>">
        <?php echo $rt2['keterangan'] ?></option>
        <?php if($rt2['keterangan'] == "release"){ ?>
        <option value="pending">Pending</option>
        <?php }else{ ?>
        <option value="release">Release</option>
        
        <?php } ?>
        </select>
        
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="updatetb_artikel" class="btn btn-primary">Save changes</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            










            
             <?php $no++;} ?>          
            
            
                                           
                                                </tbody>
        
     <tfoot>
                <tr>
                    <th>No. </th>
          <th>Act</th>                   
           <th>Title</th>
               
                  <th>Description</th>
          <th>Member name</th>
                   <th>Email</th>
           <th>Web link</th>
           <th>Date</th>
            <th>Pic</th>
                    
                </tr>
            </tfoot>
    </table>
    </div>
</div>
   </div>
</div>
<?php }else if($_GET['p'] == "menu"){ ?>

  <div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
<?php 
include('../db.php');
$idmenuu = "MENU".$_GET['id_menu'];
$qw = mysqli_query($koneksi,"select * from tb_menu where id_menu = '$_GET[id_menu]'");
$qw2 = mysqli_fetch_array($qw);
?>
  
           <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="?p=tb_dm_1">Home</a></li>
    
              <li class="breadcrumb-item active"><?php echo $qw2['nama_menu'] ?> </li>
                            </ol>
      
      
      <!--
<center>
      <fieldset style="background-color:grey;width:90%;max-width:500px;align:center;">
      tessss
      </fieldset>
    </center> 
      -->
      </div>
   

             

<!--
      <div class="col-auto">
                <a href="" data-toggle="modal" data-target="#modaltambah" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">

                       14. Tambah Data
                    </span>
                </a>
            </div>
  -->   
      
       <div class="modal fade" id="modaltambah">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data (<?php echo $qw2['nama_menu'] ?>)</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                
<?php 
if(isset($_POST['tambahproduk2'])){
if(($_POST['nama'])){

include('../db.php');






$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link']['tmp_name'];
    $fn = $_FILES['image_link']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_link']['name'];


 
if($namaa == null){
mysqli_query($koneksi,"insert into tb_demar2 (id_kategori,judul,judul2,short_desc,long_desc) values
('$_POST[idc2]','$_POST[nama]','$_POST[nama2]','$_POST[short_desc]','$_POST[long_deskripsi]')
");
}else{
  
move_uploaded_file($_FILES['image_link']['tmp_name'],"../images/menu/".$_FILES['image_link']['name']);
mysqli_query($koneksi,"insert into tb_demar2 (gambar,id_kategori,judul,judul2,short_desc,long_desc) values
('$namaa','$_POST[idc2]','$_POST[nama]','$_POST[nama2]','$_POST[short_desc]','$_POST[long_deskripsi]')
"); 
}
?>
<script>
alert('Data berhasil ditambahkan<?php echo mysqli_error($koneksi); ?>');
location = "?p=rincian&id=<?php echo $_POST['idc2'] ?>";
</script>



<?php }else{
?>
<script>
alert("Failed");
</script>
<?php
}

}//else{
  ?>
<!-- <script>
alert("Failed");
</script> -->
  <?php
//}


?>

      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="height:70vh;overflow:scroll;">
            
       <input onchange="readURLe(this);" type="file" name="image_link" class="form-control" />
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_imagee" style="width:1px;height:1px;" name="product_imagee" class="img-thumbnail">
      </center>
                <script>
  function readURLe(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_imagee')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script>  
  
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Nama</span>
                  </div>

                  <input type="hidden" name="idc2" value="<?php echo $_GET['id'] ?>" />
                          
          
          <input type="hidden" name="unik" value="578866556602c6b54236d7.png" />
                
                  <input type="text" name="nama" value="" class="form-control" placeholder="Nama" required>
                </div>

                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Nama (Tablayout)</span>
                  </div>

                  <input type="text" name="nama2" value="" class="form-control" placeholder="Nama (Tablayout)" required>
                </div>

        <!-- <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Kategori</span>
                  </div>
          <select name="kategori" class="form-control" required>
                  <option value="" >- kategori -</option>
                    <option value="19" >Layanan Service</option>
                    <option value="21" >Rental Mesin Fotocopy</option>
                    <option value="23" >Jual Mesin Fotocopy</option>
                    <option value="25" >Spare part</option>
                          </select>
        </div>
            <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Harga</span>
                  </div>
                  <input type="number" name="harga" value="" class="form-control" placeholder="harga" required>
                </div>
        <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Short Desc</span>
                  </div>
                  <input type="text" name="short" value="" class="form-control" placeholder="Short Desc" required>
                </div>
        
        
           -->
        <div>Short Desc</div>        
                <textarea class="form-control" name="short_desc" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
             
             
                          <div style="margin-top:15px">Long Desc</div>        
                <textarea class="form-control" name="long_deskripsi" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" ></textarea>
             
          
        
        
        
        
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahproduk2" class="btn btn-primary">Add</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
            
                                           
                   <?php 
                   include('../db.php');
                   $kj = mysqli_query($koneksi,"select * from tb_menu where id_menu = '$_GET[id_menu]'");


                   ?>                            
    <?php 
if(isset($_POST['updatekategori_menu21'])){

    
if(($_POST['idc'])){





$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link21']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link21']['tmp_name'];
    $fn = $_FILES['image_link21']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_link21']['name'];

move_uploaded_file($_FILES['image_link21']['tmp_name'],"../images/menu/".$_FILES['image_link21']['name']);

    if($_FILES['image_link21']['name'] == null){
//mysqli_query($koneksi,"update tb_menu set nama_menu = '$_POST[nama]',
//long_desc = '$_POST[long_deskripsi]'
//where id_menu = '$_POST[idc]'
//");
  }else{
    
mysqli_query($koneksi,"update tb_menu set

gambar = '$namaa'
where id_menu = '$_POST[idc]'
");   
    
  }


if($_FILES['image_link21']['name'] == null){

?>

<script>
alert("Gambar tidak boleh kosong");
location = "?p=menu&id_menu=<?php echo $_POST['idc2'] ?>";

</script>

<?php }else{ ?>

<script>
alert("Data changed successfully <?php echo mysqli_error($koneksi); ?>");
location = "?p=menu&id_menu=<?php echo $_POST['idc2'] ?>";

</script>


<?php } ?>

<?php 
 } 
}
 ?> 

 <?php 
if(isset($_POST['updatekategori_menu'])){

    
if(($_POST['nama'])){





$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link']['tmp_name'];
    $fn = $_FILES['image_link']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_link']['name'];

move_uploaded_file($_FILES['image_link']['tmp_name'],"../images/menu/".$_FILES['image_link']['name']);

$nama1 = str_replace("'","&petiksatu&",$_POST['nama']);
$short_desc1 = str_replace("'","&petiksatu&",$_POST['short_desc']);
$long_deskripsi1 = str_replace("'","&petiksatu&",$_POST['long_deskripsi']);

    if($_FILES['image_link']['name'] == null){
mysqli_query($koneksi,"update tb_menu set 
nama_menu = '$nama1',
short_desc = '$short_desc1',
long_desc = '$long_deskripsi1'

where id_menu = '$_POST[idc]'
");
  }else{
    
mysqli_query($koneksi,"update tb_menu set 
gambar2 = '$namaa',
nama_menu = '$nama1',
short_desc = '$short_desc1',
long_desc = '$long_deskripsi1'

where id_menu = '$_POST[idc]'
");   
    
  }


if($_FILES['image_link']['name'] == null){

?>

<script>
alert("<?php echo mysqli_error($koneksi); ?>");
location = "?p=menu&id_menu=<?php echo $_POST['idc2'] ?>";

</script>

<?php }else{ ?>

<script>
alert("Data changed successfully <?php echo mysqli_error($koneksi); ?>");
location = "?p=menu&id_menu=<?php echo $_POST['idc2'] ?>";

</script>


<?php } ?>

<?php 
 } else{
   ?>
   <script>
   alert("Failed");
   </script>
   <?php
 }
}
 ?>
    <div class="table-responsive" style="padding:5px;">
        <table class="table table-striped w-100 dt-responsive nowrap" id="dataTable">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Nama</th>
               
                  <th>Short Desc</th>
          <th>Long Desc</th>
                   <th>Gambar 1</th>
            <th>Gambar 2</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $no = 1;
            while($kj2 = mysqli_fetch_array($kj)){
            $idd = $kj2['id_menu'];


            $nama_menu1 = str_replace("&petiksatu&","'",$kj2['nama_menu']);
            $short_desc1 = str_replace("&petiksatu&","'",$kj2['short_desc']);
            $long_desc1 = str_replace("&petiksatu&","'",$kj2['long_desc']);

            ?>

                                              <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $nama_menu1 ?></td>
                          
                 <td><?php echo substr($short_desc1,0,100); ?></td>
        <td><?php echo substr($long_desc1,0,100); ?></td>
                 <td><img src="https://ufe-section-indonesie.org/ufeapp/images/menu/<?php echo $kj2['gambar'] ?>"
                  style="width:50px;height:auto;" 
                  /></td>
                          <td><img src="https://ufe-section-indonesie.org/ufeapp/images/menu/<?php echo $kj2['gambar2'] ?>"
                  style="width:50px;height:auto;" 
                  /></td>
              <td>


                                <a data-toggle="modal" data-target="#modal-lg_<?php echo $idd ?>" href="" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a>

                                <a data-toggle="modal" data-target="#modal-lg_<?php echo $idd ?>21" href="" class="btn btn-primary btn-circle btn-sm"><i class="fa fa-edit"></i> Edit Ikon</a>

                            </td>
                        </tr
                        >
            
            
        <div class="modal fade" id="modal-lg_<?php echo $idd; ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
<?php 
$rt = mysqli_query($koneksi,"select * from tb_menu where id_menu = '$idd'");
$rt2 = mysqli_fetch_array($rt);
?>

              <h4 class="modal-title">91. Edit <?php echo $rt2['nama_menu'] ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            



      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="overflow:scroll;height:70vh">

      
      
      
            
      <center>
              <img src="https://ufe-section-indonesie.org/ufeapp/images/menu/<?php echo $kj2['gambar2'] ?>"  style="width:200px;" />
      </center> 
      
    <input onchange="readURL<?php echo $idd; ?>(this);" type="file" name="image_link" class="form-control"/>
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_image<?php echo $idd; ?>" style="width:1px;height:1px;" name="product_image<?php echo $idd; ?>" class="img-thumbnail">
      </center>
                <script>
  function readURL<?php echo $idd; ?>(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_image<?php echo $idd; ?>')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script> 
  
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Nama</span>
                  </div>
          
          
          <input type="hidden" name="unik" value="430992371602c6b5423c26.png" />
          <input type="hidden" name="idc2" value="<?php echo $_GET['id_menu'] ?>" />
                  <input type="hidden" name="idc" value="<?php echo $idd ?>" />
                  <input type="text" name="nama" value="<?php echo $nama_menu1 ?>" class="form-control" placeholder="Nama" required>
                </div>
        

         <div style="margin-top:15px;padding-left:5px;">
                           Short Desc
                </div>
                <textarea class="textarea"  name="short_desc" placeholder="Place some text here"
              
                          ><?php echo $short_desc1 ?></textarea>
        
             <div style="margin-top:15px;padding-left:5px;">
                           Long Desc
                </div>
                <textarea class="textarea"  name="long_deskripsi" placeholder="Place some text here"
              
                          ><?php echo $long_desc1 ?></textarea>
             
             
        
        
        
        
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="updatekategori_menu" class="btn btn-primary">Save changes</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            










        <div class="modal fade" id="modal-lg_<?php echo $idd; ?>21">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
<?php 
$rt = mysqli_query($koneksi,"select * from tb_menu where id_menu = '$idd'");
$rt2 = mysqli_fetch_array($rt);
?>

              <h4 class="modal-title">10. Edit <?php echo $rt2['nama_menu'] ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            



      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="overflow:scroll;height:70vh">

      
      
      
            
      <center>
              <img src="https://ufe-section-indonesie.org/ufeapp/images/menu/<?php echo $kj2['gambar'] ?>"  style="width:200px;" />
      </center> 
      
    <input onchange="readURL21<?php echo $idd; ?>(this);" type="file" name="image_link21" class="form-control"/>
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_image21<?php echo $idd; ?>" style="width:1px;height:1px;" name="product_image21<?php echo $idd; ?>" class="img-thumbnail">
      </center>
                <script>
  function readURL21<?php echo $idd; ?>(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_image21<?php echo $idd; ?>')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script> 
  <input type="hidden" name="idc2" value="<?php echo $_GET['id_menu'] ?>" />
                  <input type="hidden" name="idc" value="<?php echo $idd ?>" />
               
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="updatekategori_menu21" class="btn btn-primary">Save changes</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      

            
             <?php $no++;} ?>          
            
            
                                           
                                                </tbody>
        </table>
    </div>
</div>
   </div>
</div>

<?php }else if($_GET['p'] == "rincian"){ ?>


  <div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
<?php 
include('../db.php');
$qw = mysqli_query($koneksi,"select * from tb_menu where id_menu = '$_GET[id]'");
$qw2 = mysqli_fetch_array($qw);
?>


              <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="?p=tb_dm_1">Home</a></li>
              <li class="breadcrumb-item"><a href="?p=tb_dm_1">Demarches</a></li>
              <li class="breadcrumb-item active"><?php echo $qw2['nama_menu'] ?></li>
                            </ol>
            </div>


      <div class="col-auto">
                <a href="" data-toggle="modal" data-target="#modaltambah" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">
                       Add
                    </span>
                </a>
            </div>
        <div class="col-auto">
                <a href="importdata.php?p=demar2&id=<?php echo $_GET['id'] ?>"  class="btn btn-sm btn-success btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">
                       Import
                    </span>
                </a>
            </div>
      
      
       <div class="modal fade" id="modaltambah">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add (<?php echo $qw2['nama_menu'] ?>)</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                
<?php 
if(isset($_POST['tambahproduk2'])){
if(($_POST['nama'])){

include('../db.php');






$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link']['tmp_name'];
    $fn = $_FILES['image_link']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_link']['name'];


 $nama1 = str_replace("'","&petiksatu&",$_POST['nama']);
 $nama21 = str_replace("'","&petiksatu&",$_POST['nama2']);
 $short_desc1 = str_replace("'","&petiksatu&",$_POST['short_desc']);
 $long_deskripsi1 = str_replace("'","&petiksatu&",$_POST['long_deskripsi']);
if($namaa == null){
mysqli_query($koneksi,"insert into tb_demar2 (
    id_kategori,
    judul,
    judul2,
    short_desc,
    long_desc
    ) values
(
'$_POST[idc2]',
'$nama1',
'$nama21',
'$short_desc1',
'$long_deskripsi1'
)
");
}else{
  
move_uploaded_file($_FILES['image_link']['tmp_name'],"../images/menu/".$_FILES['image_link']['name']);
mysqli_query($koneksi,"insert into tb_demar2 (
    gambar,
    id_kategori,
    judul,
    judul2,
    short_desc,
    long_desc
    ) values
(
    '$namaa',
    '$_POST[idc2]',
    '$nama1',
'$nama21',
'$short_desc1',
'$long_deskripsi1'
    )
"); 
}
?>
<script>
alert('Data berhasil ditambahkan<?php echo mysqli_error($koneksi); ?>');
location = "?p=rincian&id=<?php echo $_POST['idc2'] ?>";
</script>



<?php }else{
?>
<script>
alert("Failed");
</script>
<?php
}

}//else{
  ?>
<!-- <script>
alert("Failed");
</script> -->
  <?php
//}


?>

      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="height:70vh;overflow:scroll;">
            
       <input onchange="readURLe(this);" type="file" name="image_link" class="form-control" />
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_imagee" style="width:1px;height:1px;" name="product_imagee" class="img-thumbnail">
      </center>
                <script>
  function readURLe(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_imagee')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script>  
  
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Name</span>
                  </div>

                  <input type="hidden" name="idc2" value="<?php echo $_GET['id'] ?>" />
                          
          
          <input type="hidden" name="unik" value="578866556602c6b54236d7.png" />
                
                  <input type="text" name="nama" value="" 
                  class="form-control" placeholder="Nama" required>
                </div>

                <!-- <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Name (Tablayout)</span>
                  </div>

                  <input type="text" name="nama2" value="" class="form-control" placeholder="Name (Tablayout)" required>
                </div> -->

        <!-- <div>Short Desc</div>        
                <textarea class="form-control" name="short_desc" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea> -->
             
             
                          <div style="margin-top:15px">Description</div>        
                <textarea class="textarea" name="long_deskripsi" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" ></textarea>
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahproduk2" class="btn btn-primary">Add</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
                                            
                   <?php 
                   include('../db.php');
                   $kj = mysqli_query($koneksi,"select * from tb_demar2 where id_kategori = '$_GET[id]' and visibility = '1'");


                   ?>                            
     <?php 
if(isset($_POST['updatekategori'])){

    
if(($_POST['nama']) || ($_POST['deskripsi'])){





$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link']['tmp_name'];
    $fn = $_FILES['image_link']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_link']['name'];


$nama1 = str_replace("'","&petiksatu&",$_POST['nama']);
$nama21 = str_replace("'","&petiksatu&",$_POST['nama2']);
$deskripsi1 = str_replace("'","&petiksatu&",$_POST['deskripsi']);
$long_deskripsi1 = str_replace("'","&petiksatu&",$_POST['long_deskripsi']);

move_uploaded_file($_FILES['image_link']['tmp_name'],"../images/menu/".$_FILES['image_link']['name']);

    if($_FILES['image_link']['name'] == null){
mysqli_query($koneksi,"update tb_demar2 set 
judul = '$nama1',
judul2 = '$nama21',
short_desc = '$deskripsi1',
long_desc = '$long_deskripsi1'
where id_demar = '$_POST[idc]'
");
  }else{
    
mysqli_query($koneksi,"update tb_demar2 set 
judul = '$nama1',
judul2 = '$nama21',
short_desc = '$deskripsi1',
long_desc = '$long_deskripsi1',
gambar = '$namaa'

where id_demar = '$_POST[idc]'
");   
    
  }


if($_FILES['image_link']['name'] == null){

?>

<script>
alert("Data changed successfully <?php echo mysqli_error($koneksi); ?>");
location = "?p=rincian&id=<?php echo $_POST['idc2'] ?>";

</script>

<?php }else{ ?>

<script>
alert("Data changed successfully <?php echo mysqli_error($koneksi); ?>");
location = "?p=rincian&id=<?php echo $_POST['idc2'] ?>";

</script>


<?php } ?>

<?php 
 } 
}
 ?>
    <div class="table-responsive" style="padding:5px;">
        <table class="table table-striped w-100 dt-responsive nowrap" id="dataTable">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Name</th>
                    <th>Picture</th>
                    <th>Options</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $no = 1;
            while($kj2 = mysqli_fetch_array($kj)){
            $idd = $kj2['id_demar'];
            ?>

                        <tr>
                            <td><?php echo $no; ?></td>
                            <?php 
                            $judul1 = str_replace("&petiksatu&","'",$kj2['judul']);
                            $short_desc1 = str_replace("&petiksatu&","'",$kj2['long_desc']);
                            ?>                    
                            <td><?php echo $judul1 ?></td>
                            <td><img src="https://ufe-section-indonesie.org/ufeapp/images/menu/<?php echo $kj2['gambar'] ?>" style="height:100px;" /></td>
                            <td>
                                <a data-toggle="modal" 
                                data-target="#modal-lg_<?php echo $idd ?>" 
                                href="" class="btn btn-warning btn-circle btn-sm">
                                <i class="fa fa-edit"></i></a>
                                <a href="?p=rincian2&id=<?php echo $idd ?>" 
                                class="btn btn-primary btn-circle btn-sm">More Actions
                                &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-edit"></i></a>
                                  <a onclick="return 
                                 confirm('Are you sure you want to delete this item?');" href="hapustbdemar2.php?id=<?php echo $idd ?>&idc=<?php echo $_GET['id'] ?>" class="btn btn-danger btn-circle btn-sm">Delete
                                &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-trash"></i></a>
                              </td>
                              <td><?php echo $short_desc1 ?></td>
                        </tr>
            
            
        <div class="modal fade" id="modal-lg_<?php echo $idd; ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
<?php 
$rt = mysqli_query($koneksi,"select * from tb_demar2 where id_demar = '$idd'");
$rt2 = mysqli_fetch_array($rt);
?>

              <h4 class="modal-title">Edit <?php echo $rt2['judul2'] ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            



      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="overflow:scroll;height:70vh">

      
      
      
            
      <center>
              <img src="https://ufe-section-indonesie.org/ufeapp/images/menu/<?php echo $kj2['gambar'] ?>"  style="width:200px;" />
      </center> 
      
    <input onchange="readURL<?php echo $idd; ?>(this);" type="file" name="image_link" class="form-control"/>
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_image<?php echo $idd; ?>" style="width:1px;height:1px;" name="product_image<?php echo $idd; ?>" class="img-thumbnail">
      </center>
                <script>
  function readURL<?php echo $idd; ?>(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_image<?php echo $idd; ?>')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script> 
  
                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Name</span>
                  </div>
                  <input type="hidden" name="unik" value="430992371602c6b5423c26.png" />
                  <input type="hidden" name="idc2" value="<?php echo $_GET['id'] ?>" />
                  <input type="hidden" name="idc" value="<?php echo $idd ?>" />
                  <input type="text" name="nama" value="<?php echo $judul1 ?>" class="form-control" placeholder="Name" required>
                </div>
                <!-- <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Name(Tablayout)</span>
                  </div>
                      <input type="text" name="nama2" value="<?php echo $judul21 ?>" class="form-control" placeholder="Name (Tablayout)" required>
                    </div>
                    <div>
                    Short Desc
                  </div>
                    <textarea class="form-control" name="deskripsi" placeholder="Place some text here"
              
                           required><?php echo $short_desc1 ?></textarea>
                 -->
             
             <div style="margin-top:15px;">
                           Description
                </div>
                <textarea class="textarea" name="long_deskripsi" placeholder="Place some text here"
              <?php 
              $long_desc1 = str_replace("&petiksatu&","'",$kj2['long_desc']);
              ?>
                          ><?php echo $long_desc1 ?></textarea>
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="updatekategori" class="btn btn-primary">Save changes</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
            
             <?php $no++;} ?>          
            
            
                                           
                                                </tbody>
        </table>
    </div>
</div>
   </div>
</div>

<?php }else if($_GET['p'] == "background"){ ?>

<div class="card shadow-sm border-bottom-primary">
  <div class="card-header bg-white py-3">
      <div class="row">
        
      <div class="col">
         <ol class="breadcrumb float-sm-left">
            <li class="breadcrumb-item"><a href="?p=tb_dm_1">Home</a></li>
      
            <li class="breadcrumb-item active">Background</li>
                          </ol>
          
 
          </div>
  </div>


          
          
                  
                      
                      
  
  <div class="table-responsive" style="padding:5px;">
      <table class="table table-striped w-100 dt-responsive nowrap" id="dataTable">
          <thead>
              <tr>
                  <th>No. </th>
                  <th>Bg</th>
                  <th>Bg 2</th>
                  <th>Jenis</th>
                  
                
                  <th>Opsi</th>
              </tr>
          </thead>
          <tbody>
 
          
          <?php 
          $no = 1;
          include('../db.php');
          $dw = mysqli_query($koneksi,"select * from tb_background order by keterangan asc");
          while($dw2 = mysqli_fetch_array($dw)){
          ?>
               <tr>
                          <td><?php echo $no; ?></td>
                          <td colspan="2"><img src="bg/<?php echo $dw2['gambar'] ?>" style="width:100px;" /></td>
                          <td><?php echo $dw2['keterangan'] ?></td>
                          
                          <td>
                            <span data-toggle="modal" 
                            data-target="#editbg<?php echo $dw2['id_bg'] ?>" 
                            style="cursor:pointer;" class="btn btn-primary btn-sm" >
                           Edit&nbsp;&nbsp;<i class="fa fa-edit"></i></span>
                          </td>
                      </tr
                      >
          

                      <div class="modal fade" id="editbg<?php echo $dw2['id_bg'] ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Background</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                
            <?php 
            if(isset($_POST['editbg'])){

                
$maxDimW = 1500;
$maxDimH = 3000;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link']['tmp_name'];
    $fn = $_FILES['image_link']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

date_default_timezone_set('Asia/Jakarta');
$tanggal3 = date('YmdHis');


$namaa = $_FILES['image_link']['name'];
$nama_file = $tanggal3.$_FILES['image_link']['name'];


if(empty($namaa)){

}else{
    $tanggal3 = date('YmdHis');


$namaa = $_FILES['image_link']['name'];
$nama_file = $tanggal3.$_FILES['image_link']['name'];
    mysqli_query($koneksi,"update tb_background set gambar = '$nama_file' 
    where id_bg = '$_POST[id_bg]'
    ");
    $nama_file = $tanggal3.$_FILES['image_link']['name'];
   
move_uploaded_file($_FILES["image_link"]["tmp_name"],"bg/".$nama_file); 

}

?>
<script>

alert("<?php echo $namaa; ?>");

    location = "https://ufe-section-indonesie.org/ufeapp/admin/?p=background";
//alert(<?php echo $_POST['id_bg'] ?>);
    </script>
<?php

            }
            ?>        
      <form method="POST"   enctype="multipart/form-data" >
            <div class="modal-body" style="height:50vh;overflow-y:scroll;">
            <input name="id_bg" value="<?php echo $dw2['id_bg'] ?>" type="hidden" />
         <div class="row">
             <fieldset style="width:100%;text-align:center;">
            <img id="gamber<?php echo $dw2['id_tb'] ?>" src="bg/<?php echo $dw2['gambar'] ?>" style="width:100%;max-width:150px;" /><br>
            <input type="file" onchange="readp<?php echo $dw2['id_tb'] ?>(this);" name="image_link" class="form-control" required/>
        </fieldset>
        </div>
            
        
        </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="editbg" class="btn btn-primary">Save Changes</button>
            </div>
      </form>
          </div>
        </div>
      </div>      
        



      <script>
  function readp<?php echo $dw2['id_tb'] ?>(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $("#gamber<?php echo $dw2['id_tb'] ?>")
                .attr('src', e.target.result)
                .width(150);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script>  

<?php $no++;} ?>



<?php 

$nimm = $no;
$og = mysqli_query($koneksi,"select * from tb_menu where jenis = 'DEMARCHES'");
while($og2 = mysqli_fetch_array($og)){
?>

<tr>
                          <td><?php echo $nimm; ?></td>
                          <td><img src="bg/<?php echo $og2['bg'] ?>" style="width:100px;" /></td>
                          <td><img src="bg/<?php echo $og2['bg2'] ?>" style="width:100px;" /></td>
                          
                          <td><?php echo $og2['nama_menu'] ?></td>
                          
                          <td>
                            <span data-toggle="modal" 
                            data-target="#editbgdemar<?php echo $og2['id_menu'] ?>" 
                            style="cursor:pointer;" class="btn btn-primary btn-sm" >
                           Edit&nbsp;&nbsp;<i class="fa fa-edit"></i></span>
                          </td>
                      </tr
                      >
          

                      <div class="modal fade" id="editbgdemar<?php echo $og2['id_menu'] ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Background</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                
            <?php 
            if(isset($_POST['editbgdemar'])){




                $maxDimWx = 1500;
                $maxDimHx = 3000;
                list($width2, $height2, $type2, $attr2) = getimagesize( $_FILES['image_link2']['tmp_name'] );
                if ( $width2 > $maxDimWx || $height2 > $maxDimHx ) {
                    $target_filename2 = $_FILES['image_link2']['tmp_name'];
                    $fn2 = $_FILES['image_link2']['tmp_name'];
                    $size2 = getimagesize( $fn2 );
                    $ratio2 = $size[0]/$size[1]; // width/height
                    //if( $ratio > 1) {
                        $width2 = $maxDimWx;
                        $height2 = ($maxDimWx / $size[0]) * $size[1];
                    // } else {
                    //     $width = $maxDimW*$ratio;
                    //     $height = $maxDimH;
                    // }
                    $src2 = imagecreatefromstring(file_get_contents($fn2));
                    $dst2 = imagecreatetruecolor( $width2, $height2 );
                    imagecopyresampled($dst2, $src2, 0, 0, 0, 0, $width2, $height2, $size[0],
                     $size[1] );
                
                    imagejpeg($dst2, $target_filename2); // adjust format as needed
                
                
                }
                
                date_default_timezone_set('Asia/Jakarta');
                $tanggal3 = date('YmdHis');
                
                
                $namaa2 = $_FILES['image_link2']['name'];
                
                
                
                if(empty($namaa2)){
                
                }else{
                    $nama_file2 = $tanggal3.$_FILES['image_link2']['name'];
                    mysqli_query($koneksi,"update tb_menu set bg2 = '$nama_file2' 
                where id_menu = '$_POST[id_menu]'
                ");
                move_uploaded_file($_FILES["image_link2"]["tmp_name"],"bg/".$nama_file2); 
                
                }
                









                
$maxDimW = 1500;
$maxDimH = 3000;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link']['tmp_name'];
    $fn = $_FILES['image_link']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

date_default_timezone_set('Asia/Jakarta');
$tanggal3 = date('YmdHis');


$namaa = $_FILES['image_link']['name'];



if(empty($namaa)){

}else{
    $nama_file = $tanggal3.$_FILES['image_link']['name'];
    mysqli_query($koneksi,"update tb_menu set bg = '$nama_file' 
where id_menu = '$_POST[id_menu]'
");
move_uploaded_file($_FILES["image_link"]["tmp_name"],"bg/".$nama_file); 

}

?>
<script>
    location = "https://ufe-section-indonesie.org/ufeapp/admin/?p=background";
//alert(<?php echo $_POST['id_bg'] ?>);
    </script>
<?php

            }
            ?>        
      <form method="POST"   enctype="multipart/form-data" >
            <div class="modal-body" style="height:50vh;overflow-y:scroll;">
            <input name="id_menu" value="<?php echo $og2['id_menu'] ?>" type="hidden" />
         <div class="row">
             <fieldset style="width:100%;text-align:center;">
            <img id="gamber<?php echo $og2['id_menu'] ?>" src="bg/<?php echo $og2['bg'] ?>" style="width:100%;max-width:150px;" /><br>
            <input type="file" onchange="readpp<?php echo $og2['id_menu'] ?>(this);" name="image_link" class="form-control" />
        </fieldset>

            <br>
        <fieldset style="width:100%;text-align:center;">
            <img id="gamberr<?php echo $og2['id_menu'] ?>" src="bg/<?php echo $og2['bg2'] ?>" style="width:100%;max-width:150px;" /><br>
            <input type="file" onchange="readppp<?php echo $og2['id_menu'] ?>(this);" name="image_link2" class="form-control" />
        </fieldset>
        </div>
            
        
        </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="editbgdemar" class="btn btn-primary">Save Changes</button>
            </div>
      </form>
          </div>
        </div>
      </div>      
        



      <script>
  function readpp<?php echo $og2['id_menu'] ?>(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $("#gamber<?php echo $og2['id_menu'] ?>")
                .attr('src', e.target.result)
                .width(150);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }

  function readppp<?php echo $og2['id_menu'] ?>(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $("#gamberr<?php echo $og2['id_menu'] ?>")
                .attr('src', e.target.result)
                .width(150);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script>  









<?php
$nimm++;}

?>



                                         
                                              </tbody>
      </table>
  </div>
</div>
   </div>
</div>


<?php }else if($_GET['p'] == "tulisan"){ ?>

  <div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
          
    <div class="col">
           <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="?p=tb_dm_1">Home</a></li>
    
              <li class="breadcrumb-item active">Text Writing</li>
                            </ol>
      
      
      <!--
<center>
      <fieldset style="background-color:grey;width:90%;max-width:500px;align:center;">
      tessss
      </fieldset>
    </center> 
      -->
      </div>
    </div>


      
      
          
            
            
                                           
                   <?php 
                   include('../db.php');
                   $kj = mysqli_query($koneksi,"select * from tb_tulisan order by id_tulisan asc");


                   ?>                            
    
    <div class="table-responsive" style="padding:5px;">
        <table class="table table-striped w-100 dt-responsive nowrap" id="dataTable">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Type</th>
                    
                  
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
      
           <tr>
                            <td>1</td>
                            <td>Home</td>
                            
              <td>
                                <a href="?p=home" class="btn btn-primary btn-circle btn-sm">More Actions
                                &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-edit"></i></a>
                            </td>
                        </tr
                        >
      
            <?php 
            $no = 2;
            while($kj2 = mysqli_fetch_array($kj)){
            $idd = $kj2['id_tulisan'];
            ?>

                                              <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $kj2['jenis'] ?></td>
                            
                            
              <td>


                               
                                <a href="?p=edit_tulisan&id=<?php echo $idd ?>" class="btn btn-primary btn-circle btn-sm">More Actions
                                &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-edit"></i></a>
                
                
                
                


                            </td>
                        </tr
                        >
            
            
          
            
            
             <?php $no++;} ?>          
            
            
                                           
                                                </tbody>
        </table>
    </div>
</div>
   </div>
</div>

<?php }else if($_GET['p'] == "edit_tulisan"){ ?>

 <div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">

<?php 
include('../db.php');
$oi = mysqli_query($koneksi,"select * from tb_tulisan where id_tulisan = '$_GET[id]'");
$oi2 = mysqli_fetch_array($oi);
?>
<ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="?p=tb_dm_1">Home</a></li>
      <li class="breadcrumb-item"><a href="?p=tulisan">Tulisan</a></li>
                            
              <li class="breadcrumb-item active"><?php echo $oi2['jenis'] ?></li>
                            </ol>
<!--                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    <?php //echo //$oi2['jenis'] ?>                </h4>-->
            </div>



      
      
  
            
            
                                           
                  
                  
    </div>
    <table style="width:100%;margin-top:20px;">
    <?php
    $rg = mysqli_query($koneksi,"select * from tb_tulisan where id_tulisan = '$oi2[id_tulisan]'");
$rg2 = mysqli_fetch_array($rg);
    ?>
    <tr>
    <?php if($rg2['tulisan1'] == null){}else{ ?>
    <td>
    1.
    </td>
    <td>
        <?php 
        $tulisan11 = str_replace("&petiksatu&","'",$rg2['tulisan1']);
        ?>

    <?php echo $tulisan11 ?>
    </td>
    <td>
    <span class="btn btn-primary" data-toggle="modal" data-target="#edittulisan1" style="cursor:pointer;">
    <i class="far fa-edit"></i>&nbsp;&nbsp;Edit
    </span>
    </td>




       <div class="modal fade" id="edittulisan1">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Text</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                

      <form method="POST" action="edittulisann.php"  enctype="multipart/form-data" >
            <div class="modal-body" style="height:70vh;overflow:scroll;">
      <input name="tulisan" value="tulisan1" type="hidden" />
    <input name="id_tulisan" value="<?php echo $rg2['id_tulisan'] ?>" type="hidden" />
                <textarea class="form-control" name="tulisan1" 
                placeholder="Place some text here"
                          style="width: 100%; height: 200px; 
                          font-size: 14px; line-height: 18px; border: 1px solid #dddddd; 
                          padding: 10px;" required><?php echo $tulisan11 ?></textarea>
      
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahproduk2" class="btn btn-primary">Save</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
        

    <?php } ?>
    </tr>
    <tr>
    <?php if($rg2['tulisan2'] == null){}else{ ?>
    <td>
    2.
    </td>
    <td>
    <?php echo $rg2['tulisan2'] ?>
    </td>
    <td>
    <span class="btn btn-primary" data-toggle="modal" data-target="#edittulisan2" style="cursor:pointer;">
    <i class="far fa-edit"></i>&nbsp;&nbsp;Edit
    </span>
    </td>




       <div class="modal fade" id="edittulisan2">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Text</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                

      <form method="POST" action="edittulisann.php"  enctype="multipart/form-data" >
            <div class="modal-body" style="height:70vh;overflow:scroll;">
      <input name="tulisan" value="tulisan2" type="hidden" />
    <input name="id_tulisan" value="<?php echo $rg2['id_tulisan'] ?>" type="hidden" />
                <textarea class="form-control" name="tulisan1" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required><?php echo $rg2['tulisan2'] ?></textarea>
      
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahproduk2" class="btn btn-primary">Save</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
        

    <?php } ?>
    </tr>
    <tr>
    <?php if($rg2['tulisan3'] == null){}else{ ?>
    <td>
    3.
    </td>
    <td>
    <?php echo $rg2['tulisan3'] ?>
    </td>
    <td>
    <span class="btn btn-primary" data-toggle="modal" data-target="#edittulisan3" style="cursor:pointer;">
    <i class="far fa-edit"></i>&nbsp;&nbsp;Edit
    </span>
    </td>




       <div class="modal fade" id="edittulisan3">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Text</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                

      <form method="POST" action="edittulisann.php"  enctype="multipart/form-data" >
            <div class="modal-body" style="height:70vh;overflow:scroll;">
      <input name="tulisan" value="tulisan3" type="hidden" />
    <input name="id_tulisan" value="<?php echo $rg2['id_tulisan'] ?>" type="hidden" />
                <textarea class="form-control" name="tulisan1" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required><?php echo $rg2['tulisan3'] ?></textarea>
      
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahproduk2" class="btn btn-primary">Save</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
        

    <?php } ?>
    </tr>
    <tr>
    <?php if($rg2['tulisan4'] == null){}else{ ?>
    <td>
    4.
    </td>
    <td>
    <?php echo $rg2['tulisan4'] ?>
    </td>
    <td>
    <span class="btn btn-primary" data-toggle="modal" data-target="#edittulisan4" style="cursor:pointer;">
    <i class="far fa-edit"></i>&nbsp;&nbsp;Edit
    </span>
    </td>




       <div class="modal fade" id="edittulisan4">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Text</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                

      <form method="POST" action="edittulisann.php"  enctype="multipart/form-data" >
            <div class="modal-body" style="height:70vh;overflow:scroll;">
      <input name="tulisan" value="tulisan4" type="hidden" />
    <input name="id_tulisan" value="<?php echo $rg2['id_tulisan'] ?>" type="hidden" />
                <textarea class="form-control" name="tulisan1" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required><?php echo $rg2['tulisan4'] ?></textarea>
      
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahproduk2" class="btn btn-primary">Save</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
        

    <?php } ?>
    </tr>
    <tr>
    <?php if($rg2['tulisan5'] == null){}else{ ?>
    <td>
    5.
    </td>
    <td>
    <?php echo $rg2['tulisan5'] ?>
    </td>
    <td>
    <span class="btn btn-primary" data-toggle="modal" data-target="#edittulisan5" style="cursor:pointer;">
    <i class="far fa-edit"></i>&nbsp;&nbsp;Edit
    </span>
    </td>




       <div class="modal fade" id="edittulisan5">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Text</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                

      <form method="POST" action="edittulisann.php"  enctype="multipart/form-data" >
            <div class="modal-body" style="height:70vh;overflow:scroll;">
      <input name="tulisan" value="tulisan5" type="hidden" />
    <input name="id_tulisan" value="<?php echo $rg2['id_tulisan'] ?>" type="hidden" />
                <textarea class="form-control" name="tulisan1" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required><?php echo $rg2['tulisan5'] ?></textarea>
      
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahproduk2" class="btn btn-primary">Save</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
        

    <?php } ?>
    </tr>
    <tr>
    <?php if($rg2['tulisan6'] == null){}else{ ?>
    <td>
    6.
    </td>
    <td>
    <?php echo $rg2['tulisan6'] ?>
    </td>
    <td>
    <span class="btn btn-primary" data-toggle="modal" data-target="#edittulisan6" style="cursor:pointer;">
    <i class="far fa-edit"></i>&nbsp;&nbsp;Edit
    </span>
    </td>




       <div class="modal fade" id="edittulisan6">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Text</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                

      <form method="POST" action="edittulisann.php"  enctype="multipart/form-data" >
            <div class="modal-body" style="height:70vh;overflow:scroll;">
      <input name="tulisan" value="tulisan6" type="hidden" />
    <input name="id_tulisan" value="<?php echo $rg2['id_tulisan'] ?>" type="hidden" />
                <textarea class="form-control" name="tulisan1" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required><?php echo $rg2['tulisan6'] ?></textarea>
      
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahproduk2" class="btn btn-primary">Save</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
        

    <?php } ?>
    </tr>
    <tr>
    <?php if($rg2['tulisan7'] == null){}else{ ?>
    <td>
    7.
    </td>
    <td>
    <?php echo $rg2['tulisan7'] ?>
    </td>
    <td>
    <span class="btn btn-primary" data-toggle="modal" data-target="#edittulisan7" style="cursor:pointer;">
    <i class="far fa-edit"></i>&nbsp;&nbsp;Edit
    </span>
    </td>




       <div class="modal fade" id="edittulisan7">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Text</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                

      <form method="POST" action="edittulisann.php"  enctype="multipart/form-data" >
            <div class="modal-body" style="height:70vh;overflow:scroll;">
      <input name="tulisan" value="tulisan7" type="hidden" />
    <input name="id_tulisan" value="<?php echo $rg2['id_tulisan'] ?>" type="hidden" />
                <textarea class="form-control" name="tulisan1" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required><?php echo $rg2['tulisan7'] ?></textarea>
      
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahproduk2" class="btn btn-primary">Save</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
        

    <?php } ?>
    </tr>
    <tr>
    <?php if($rg2['tulisan8'] == null){}else{ ?>
    <td>
    8.
    </td>
    <td>
    <?php echo $rg2['tulisan8'] ?>
    </td>
    <td>
    <span class="btn btn-primary" data-toggle="modal" data-target="#edittulisan8" style="cursor:pointer;">
    <i class="far fa-edit"></i>&nbsp;&nbsp;Edit
    </span>
    </td>




       <div class="modal fade" id="edittulisan8">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Text</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                

      <form method="POST" action="edittulisann.php"  enctype="multipart/form-data" >
            <div class="modal-body" style="height:70vh;overflow:scroll;">
      <input name="tulisan" value="tulisan8" type="hidden" />
    <input name="id_tulisan" value="<?php echo $rg2['id_tulisan'] ?>" type="hidden" />
                <textarea class="form-control" name="tulisan1" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required><?php echo $rg2['tulisan8'] ?></textarea>
      
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahproduk2" class="btn btn-primary">Save</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
        

    <?php } ?>
    </tr>
    <tr>
    <?php if($rg2['tulisan9'] == null){}else{ ?>
    <td>
    9.
    </td>
    <td>
    <?php echo $rg2['tulisan9'] ?>
    </td>
    <td>
    <span class="btn btn-primary" data-toggle="modal" data-target="#edittulisan9" style="cursor:pointer;">
    <i class="far fa-edit"></i>&nbsp;&nbsp;Edit
    </span>
    </td>




       <div class="modal fade" id="edittulisan9">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Text</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                

      <form method="POST" action="edittulisann.php"  enctype="multipart/form-data" >
            <div class="modal-body" style="height:70vh;overflow:scroll;">
      <input name="tulisan" value="tulisan9" type="hidden" />
    <input name="id_tulisan" value="<?php echo $rg2['id_tulisan'] ?>" type="hidden" />
                <textarea class="form-control" name="tulisan1" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required><?php echo $rg2['tulisan9'] ?></textarea>
      
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahproduk2" class="btn btn-primary">Save</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
        

    <?php } ?>
    </tr>
    <tr>
    <?php if($rg2['tulisan10'] == null){}else{ ?>
    <td>
    10.
    </td>
    <td>
    <?php echo $rg2['tulisan10'] ?>
    </td>
    <td>
    <span class="btn btn-primary" data-toggle="modal" data-target="#edittulisan10" style="cursor:pointer;">
    <i class="far fa-edit"></i>&nbsp;&nbsp;Edit
    </span>
    </td>




       <div class="modal fade" id="edittulisan10">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Text</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                

      <form method="POST" action="edittulisann.php"  enctype="multipart/form-data" >
            <div class="modal-body" style="height:70vh;overflow:scroll;">
      <input name="tulisan" value="tulisan10" type="hidden" />
    <input name="id_tulisan" value="<?php echo $rg2['id_tulisan'] ?>" type="hidden" />
                <textarea class="form-control" name="tulisan1" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required><?php echo $rg2['tulisan10'] ?></textarea>
      
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahproduk2" class="btn btn-primary">Save</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
        

    <?php } ?>
    </tr>
    <tr>
    <?php if($rg2['tulisan11'] == null){}else{ ?>
    <td>
    11.
    </td>
    <td>
    <?php echo $rg2['tulisan11'] ?>
    </td>
    <td>
    <span class="btn btn-primary" data-toggle="modal" data-target="#edittulisan11" style="cursor:pointer;">
    <i class="far fa-edit"></i>&nbsp;&nbsp;Edit
    </span>
    </td>




       <div class="modal fade" id="edittulisan11">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Text</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                

      <form method="POST" action="edittulisann.php"  enctype="multipart/form-data" >
            <div class="modal-body" style="height:70vh;overflow:scroll;">
      <input name="tulisan" value="tulisan11" type="hidden" />
    <input name="id_tulisan" value="<?php echo $rg2['id_tulisan'] ?>" type="hidden" />
                <textarea class="form-control" name="tulisan1" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required><?php echo $rg2['tulisan11'] ?></textarea>
      
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahproduk2" class="btn btn-primary">Save</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
        

    <?php } ?>
    </tr>
    <tr>
    <?php if($rg2['tulisan12'] == null){}else{ ?>
    <td>
    12.
    </td>
    <td>
    <?php echo $rg2['tulisan12'] ?>
    </td>
    <td>
    <span class="btn btn-primary" data-toggle="modal" data-target="#edittulisan12" style="cursor:pointer;">
    <i class="far fa-edit"></i>&nbsp;&nbsp;Edit
    </span>
    </td>




       <div class="modal fade" id="edittulisan12">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Text</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                

      <form method="POST" action="edittulisann.php"  enctype="multipart/form-data" >
            <div class="modal-body" style="height:70vh;overflow:scroll;">
      <input name="tulisan" value="tulisan12" type="hidden" />
    <input name="id_tulisan" value="<?php echo $rg2['id_tulisan'] ?>" type="hidden" />
                <textarea class="form-control" name="tulisan1" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required><?php echo $rg2['tulisan12'] ?></textarea>
      
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahproduk2" class="btn btn-primary">Save</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
        

    <?php } ?>
    </tr>
    <tr>
    <?php if($rg2['tulisan13'] == null){}else{ ?>
    <td>
    13.
    </td>
    <td>
    <?php echo $rg2['tulisan13'] ?>
    </td>
    <td>
    <span class="btn btn-primary" data-toggle="modal" data-target="#edittulisan13" style="cursor:pointer;">
    <i class="far fa-edit"></i>&nbsp;&nbsp;Edit
    </span>
    </td>




       <div class="modal fade" id="edittulisan13">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Text</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                

      <form method="POST" action="edittulisann.php"  enctype="multipart/form-data" >
            <div class="modal-body" style="height:70vh;overflow:scroll;">
      <input name="tulisan" value="tulisan13" type="hidden" />
    <input name="id_tulisan" value="<?php echo $rg2['id_tulisan'] ?>" type="hidden" />
                <textarea class="form-control" name="tulisan1" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required><?php echo $rg2['tulisan13'] ?></textarea>
      
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahproduk2" class="btn btn-primary">Save</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
        

    <?php } ?>
    </tr>
    <tr>
    <?php if($rg2['tulisan14'] == null){}else{ ?>
    <td>
    14.
    </td>
    <td>
    <?php echo $rg2['tulisan14'] ?>
    </td>
    <td>
    <span class="btn btn-primary" data-toggle="modal" data-target="#edittulisan14" style="cursor:pointer;">
    <i class="far fa-edit"></i>&nbsp;&nbsp;Edit
    </span>
    </td>




       <div class="modal fade" id="edittulisan14">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Text</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                

      <form method="POST" action="edittulisann.php"  enctype="multipart/form-data" >
            <div class="modal-body" style="height:70vh;overflow:scroll;">
      <input name="tulisan" value="tulisan14" type="hidden" />
    <input name="id_tulisan" value="<?php echo $rg2['id_tulisan'] ?>" type="hidden" />
                <textarea class="form-control" name="tulisan1" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required><?php echo $rg2['tulisan14'] ?></textarea>
      
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahproduk2" class="btn btn-primary">Save</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
        

    <?php } ?>
    </tr>
    <tr>
    <?php if($rg2['tulisan15'] == null){}else{ ?>
    <td>
    15.
    </td>
    <td>
    <?php echo $rg2['tulisan15'] ?>
    </td>
    <td>
    <span class="btn btn-primary" data-toggle="modal" data-target="#edittulisan15" style="cursor:pointer;">
    <i class="far fa-edit"></i>&nbsp;&nbsp;Edit
    </span>
    </td>




       <div class="modal fade" id="edittulisan15">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Text</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                

      <form method="POST" action="edittulisann.php"  enctype="multipart/form-data" >
            <div class="modal-body" style="height:70vh;overflow:scroll;">
      <input name="tulisan" value="tulisan15" type="hidden" />
    <input name="id_tulisan" value="<?php echo $rg2['id_tulisan'] ?>" type="hidden" />
                <textarea class="form-control" name="tulisan1" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required><?php echo $rg2['tulisan15'] ?></textarea>
      
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahproduk2" class="btn btn-primary">Save</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
        

    <?php } ?>
    </tr>
    <tr>
    <?php if($rg2['tulisan16'] == null){}else{ ?>
    <td>
    16.
    </td>
    <td>
    <?php echo $rg2['tulisan16'] ?>
    </td>
    <td>
    <span class="btn btn-primary" data-toggle="modal" data-target="#edittulisan16" style="cursor:pointer;">
    <i class="far fa-edit"></i>&nbsp;&nbsp;Edit
    </span>
    </td>




       <div class="modal fade" id="edittulisan16">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Text</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                

      <form method="POST" action="edittulisann.php"  enctype="multipart/form-data" >
            <div class="modal-body" style="height:70vh;overflow:scroll;">
      <input name="tulisan" value="tulisan16" type="hidden" />
    <input name="id_tulisan" value="<?php echo $rg2['id_tulisan'] ?>" type="hidden" />
                <textarea class="form-control" name="tulisan1" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required><?php echo $rg2['tulisan16'] ?></textarea>
      
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahproduk2" class="btn btn-primary">Save</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
        

    <?php } ?>
    </tr>
    <tr>
    <?php if($rg2['tulisan17'] == null){}else{ ?>
    <td>
    17.
    </td>
    <td>
    <?php echo $rg2['tulisan17'] ?>
    </td>
    <td>
    <span class="btn btn-primary" data-toggle="modal" data-target="#edittulisan17" style="cursor:pointer;">
    <i class="far fa-edit"></i>&nbsp;&nbsp;Edit
    </span>
    </td>




       <div class="modal fade" id="edittulisan17">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Text</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                

      <form method="POST" action="edittulisann.php"  enctype="multipart/form-data" >
            <div class="modal-body" style="height:70vh;overflow:scroll;">
      <input name="tulisan" value="tulisan17" type="hidden" />
    <input name="id_tulisan" value="<?php echo $rg2['id_tulisan'] ?>" type="hidden" />
                <textarea class="form-control" name="tulisan1" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required><?php echo $rg2['tulisan17'] ?></textarea>
      
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahproduk2" class="btn btn-primary">Save</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
        

    <?php } ?>
    </tr>
    <tr>  
    <?php if($rg2['tulisan18'] == null){}else{ ?>
    <td>
    18.
    </td>
    <td>
    <?php echo $rg2['tulisan18'] ?>
    </td>
    <td>
    <span class="btn btn-primary" data-toggle="modal" data-target="#edittulisan18" style="cursor:pointer;">
    <i class="far fa-edit"></i>&nbsp;&nbsp;Edit
    </span>
    </td>




       <div class="modal fade" id="edittulisan18">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Text</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                

      <form method="POST" action="edittulisann.php"  enctype="multipart/form-data" >
            <div class="modal-body" style="height:70vh;overflow:scroll;">
      <input name="tulisan" value="tulisan18" type="hidden" />
    <input name="id_tulisan" value="<?php echo $rg2['id_tulisan'] ?>" type="hidden" />
                <textarea class="form-control" name="tulisan1" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required><?php echo $rg2['tulisan18'] ?></textarea>
      
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahproduk2" class="btn btn-primary">Save</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
        

    <?php } ?>
    </tr>
    <tr>
    <?php if($rg2['tulisan19'] == null){}else{ ?>
    <td>
    19.
    </td>
    <td>
    <?php echo $rg2['tulisan19'] ?>
    </td>
    <td>
    <span class="btn btn-primary" data-toggle="modal" data-target="#edittulisan19" style="cursor:pointer;">
    <i class="far fa-edit"></i>&nbsp;&nbsp;Edit
    </span>
    </td>




       <div class="modal fade" id="edittulisan19">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Text</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                

      <form method="POST" action="edittulisann.php"  enctype="multipart/form-data" >
            <div class="modal-body" style="height:70vh;overflow:scroll;">
      <input name="tulisan" value="tulisan19" type="hidden" />
    <input name="id_tulisan" value="<?php echo $rg2['id_tulisan'] ?>" type="hidden" />
                <textarea class="form-control" name="tulisan1" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required><?php echo $rg2['tulisan19'] ?></textarea>
      
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahproduk2" class="btn btn-primary">Save</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
        

    <?php } ?>
    </tr>
    <tr>
    <?php if($rg2['tulisan20'] == null){}else{ ?>
    <td>
    20.
    </td>
    <td>
    <?php echo $rg2['tulisan20'] ?>
    </td>
    <td>
    <span class="btn btn-primary" data-toggle="modal" data-target="#edittulisan20" style="cursor:pointer;">
    <i class="far fa-edit"></i>&nbsp;&nbsp;Edit
    </span>
    </td>




       <div class="modal fade" id="edittulisan20">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Text</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                

      <form method="POST" action="edittulisann.php"  enctype="multipart/form-data" >
            <div class="modal-body" style="height:70vh;overflow:scroll;">
      <input name="tulisan" value="tulisan20" type="hidden" />
    <input name="id_tulisan" value="<?php echo $rg2['id_tulisan'] ?>" type="hidden" />
                <textarea class="form-control" name="tulisan1" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required><?php echo $rg2['tulisan20'] ?></textarea>
      
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahproduk2" class="btn btn-primary">Save</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
        

    <?php } ?>
    </tr>
    <tr>
    <?php if($rg2['tulisan21'] == null){}else{ ?>
    <td>
    21.
    </td>
    <td>
    <?php echo $rg2['tulisan21'] ?>
    </td>
    <td>
    <span class="btn btn-primary" data-toggle="modal" data-target="#edittulisan21" style="cursor:pointer;">
    <i class="far fa-edit"></i>&nbsp;&nbsp;Edit
    </span>
    </td>




       <div class="modal fade" id="edittulisan21">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Text</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                

      <form method="POST" action="edittulisann.php"  enctype="multipart/form-data" >
            <div class="modal-body" style="height:70vh;overflow:scroll;">
      <input name="tulisan" value="tulisan21" type="hidden" />
    <input name="id_tulisan" value="<?php echo $rg2['id_tulisan'] ?>" type="hidden" />
                <textarea class="form-control" name="tulisan1" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required><?php echo $rg2['tulisan21'] ?></textarea>
      
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahproduk2" class="btn btn-primary">Save</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
        

    <?php } ?>
    </tr>
    <tr>
    <?php if($rg2['tulisan22'] == null){}else{ ?>
    <td>
    22.
    </td>
    <td>
    <?php echo $rg2['tulisan22'] ?>
    </td>
    <td>
    <span class="btn btn-primary" data-toggle="modal" data-target="#edittulisan22" style="cursor:pointer;">
    <i class="far fa-edit"></i>&nbsp;&nbsp;Edit
    </span>
    </td>




       <div class="modal fade" id="edittulisan22">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Text</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                

      <form method="POST" action="edittulisann.php"  enctype="multipart/form-data" >
            <div class="modal-body" style="height:70vh;overflow:scroll;">
      <input name="tulisan" value="tulisan22" type="hidden" />
    <input name="id_tulisan" value="<?php echo $rg2['id_tulisan'] ?>" type="hidden" />
                <textarea class="form-control" name="tulisan1" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required><?php echo $rg2['tulisan22'] ?></textarea>
      
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahproduk2" class="btn btn-primary">Save</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
        

    <?php } ?>
    
    
    </tr>
</table>    
</div>
   </div>


<?php }else if($_GET['p'] == "data_presiden"){ ?>

 <div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
<?php 
include('../db.php');
$qw = mysqli_query($koneksi,"select * from tb_menu where id_menu = '$_GET[id]'");
$qw2 = mysqli_fetch_array($qw);
?>


                  <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="?p=tb_dm_1">Home</a></li>
    
              <li class="breadcrumb-item active">Data Presiden</li>
                            </ol>
            </div>


      <div class="col-auto">
                <a href="" data-toggle="modal" data-target="#modaltambah" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">

                       1. Tambah Data
                    </span>
                </a>
            </div>
      
      
       <div class="modal fade" id="modaltambah">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data (<?php echo $qw2['nama_menu'] ?>)</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                
<?php 
if(isset($_POST['tambahproduk2'])){
if(($_POST['nama'])){

include('../db.php');






$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link']['tmp_name'];
    $fn = $_FILES['image_link']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_link']['name'];


 
if($namaa == null){
mysqli_query($koneksi,"insert into tb_president (nama,deskripsi) values
('$_POST[nama]','$_POST[long_deskripsi]')
");
}else{
  
move_uploaded_file($_FILES['image_link']['tmp_name'],"../images/menu/".$_FILES['image_link']['name']);
mysqli_query($koneksi,"insert into tb_president (gambar,nama,deskripsi) values
('$namaa','$_POST[nama]','$_POST[long_deskripsi]')
"); 
}
?>
<script>
alert('Data berhasil ditambahkan<?php echo mysqli_error($koneksi); ?>');
location = "?p=data_presiden";
</script>



<?php }else{
?>
<script>
alert("Failed");
</script>
<?php
}

}//else{
  ?>
<!-- <script>
alert("Failed");
</script> -->
  <?php
//}


?>

      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="height:70vh;overflow:scroll;">
            
       <input onchange="readURLe(this);" type="file" name="image_link" class="form-control" />
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_imagee" style="width:1px;height:1px;" name="product_imagee" class="img-thumbnail">
      </center>
                <script>
  function readURLe(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_imagee')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script>  
  
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Periode</span>
                  </div>

                  <input type="hidden" name="idc2" value="<?php echo $_GET['id'] ?>" />
                          
          
          <input type="hidden" name="unik" value="578866556602c6b54236d7.png" />
                
                  <input type="text" name="nama" value="" class="form-control" placeholder="Nama" required>
                </div>

          

        <!-- <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Kategori</span>
                  </div>
          <select name="kategori" class="form-control" required>
                  <option value="" >- kategori -</option>
                    <option value="19" >Layanan Service</option>
                    <option value="21" >Rental Mesin Fotocopy</option>
                    <option value="23" >Jual Mesin Fotocopy</option>
                    <option value="25" >Spare part</option>
                          </select>
        </div>
            <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Harga</span>
                  </div>
                  <input type="number" name="harga" value="" class="form-control" placeholder="harga" required>
                </div>
        <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Short Desc</span>
                  </div>
                  <input type="text" name="short" value="" class="form-control" placeholder="Short Desc" required>
                </div>
        
        
           -->
        <div>Deskripsi</div>        
                <textarea class="form-control" name="long_deskripsi" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
             
             
             <!--             <div style="margin-top:15px">Long Desc</div>        
                <textarea class="form-control" name="long_deskripsi" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" ></textarea>
             -->
          
        
        
        
        
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahproduk2" class="btn btn-primary">Add</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
            
                                           
                   <?php 
                   include('../db.php');
                   $kj = mysqli_query($koneksi,"select * from tb_president order by id_presiden asc");


                   ?>                            
     <?php 
if(isset($_POST['update_presiden'])){

    
if(($_POST['nama']) ){





$maxDimW = 945;
$maxDimH = 1383;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link']['tmp_name'];
    $fn = $_FILES['image_link']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_link']['name'];


$longde = str_replace("'","\'",$_POST['long_deskripsi']);


    if($_FILES['image_link']['name'] == null){
mysqli_query($koneksi,"update tb_president set nama = '$_POST[nama]',
deskripsi = '$longde'
where id_presiden = '$_POST[idc]'
");
  }else{
move_uploaded_file($_FILES['image_link']['tmp_name'],"../images/menu/".$_FILES['image_link']['name']);

mysqli_query($koneksi,"update tb_president set nama = '$_POST[nama]',
gambar = '$namaa',
deskripsi = '$longde'
where id_presiden = '$_POST[idc]'
");   
    
  }


if($_FILES['image_link']['name'] == null){

?>

<script>
alert("Data changed successfully <?php echo mysqli_error($koneksi); ?>");
location = "?p=data_presiden";

</script>

<?php }else{ ?>

<script>
alert("Data changed successfully <?php echo mysqli_error($koneksi); ?>");
location = "?p=data_presiden";

</script>


<?php } ?>

<?php 
 } 
}
 ?>
    <div class="table-responsive" style="padding:5px;">
        <table class="table table-striped w-100 dt-responsive nowrap" id="dataTable">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Gambar</th>
                    <th>Periode</th>

                  <th>Deskripsi</th>
                  
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $no = 1;
            while($kj2 = mysqli_fetch_array($kj)){
            $idd = $kj2['id_presiden'];
            ?>

                                              <tr>
                            <td><?php echo $no; ?></td>
                            <td><img style="width:100px;" src="https://ufe-section-indonesie.org/ufeapp/images/menu/<?php echo $kj2['gambar'] ?>" /></td>
                            <td><?php echo $kj2['nama'] ?></td>
                 
                                          <td><?php echo substr($kj2['deskripsi'],0,100); ?></td>
                            
              <td>


                                <a data-toggle="modal" data-target="#modal-lg_<?php echo $idd ?>" href="" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a>
                
                
                
                 <a href="hapustbpresiden.php?id=<?php echo $idd ?>&idc=<?php echo $_GET['id'] ?>" class="btn btn-danger btn-circle btn-sm">Hapus
                                &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-trash"></i></a>


                            </td>
                        </tr
                        >
            
            
        <div class="modal fade" id="modal-lg_<?php echo $idd; ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
<?php 
$rt = mysqli_query($koneksi,"select * from tb_president where id_presiden = '$idd'");
$rt2 = mysqli_fetch_array($rt);
?>

              <h4 class="modal-title">123. Edit <?php echo $rt2['judul2'] ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            



      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="overflow:scroll;height:70vh">

      
      
      
            
      <center>
              <img src="https://ufe-section-indonesie.org/ufeapp/images/menu/<?php echo $kj2['gambar'] ?>"  style="width:200px;" />
      </center> 
      
    <input onchange="readURL<?php echo $idd; ?>(this);" type="file" name="image_link" class="form-control"/>
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_image<?php echo $idd; ?>" style="width:1px;height:1px;" name="product_image<?php echo $idd; ?>" class="img-thumbnail">
      </center>
                <script>
  function readURL<?php echo $idd; ?>(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_image<?php echo $idd; ?>')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script> 
  
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Periode</span>
                  </div>
          
          
          <input type="hidden" name="unik" value="430992371602c6b5423c26.png" />
          <input type="hidden" name="idc2" value="<?php echo $_GET['id'] ?>" />
                  <input type="hidden" name="idc" value="<?php echo $idd ?>" />
                  <input type="text" name="nama" value="<?php echo $kj2['nama'] ?>" class="form-control" placeholder="Nama" required>
                </div>
        


                
        <!-- <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Kategori</span>
                  </div>
          <select name="kategori" class="form-control" required>
                  <option value="23" >Jual Mesin Fotocopy</option>
                    <option value="19" >Layanan Service</option>
                    <option value="21" >Rental Mesin Fotocopy</option>
                    <option value="25" >Spare part</option>
                          </select>
        </div> -->
            <!-- <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Harga</span>
                  </div>
                  <input type="number" name="harga" value="8000000" class="form-control" placeholder="harga" required>
                </div>
        <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Short Desc</span>
                  </div>
                  <input type="text" name="short" value="XploitSec-ID" class="form-control" placeholder="Short Desc" required>
                </div> -->
        
        
      
             
             <div style="margin-top:15px;">
                           Deskripsi
                </div>
                <textarea class="form-control" name="long_deskripsi" placeholder="Place some text here"
              
                          ><?php echo $kj2['deskripsi'] ?></textarea>
             
             
        
        
        
        
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="update_presiden" class="btn btn-primary">Save changes</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
            
             <?php $no++;} ?>          
            
            
                                           
                                                </tbody>
        </table>
    </div>
</div>
   </div>
</div>

<?php }else if($_GET['p'] == "info_member"){ ?>


 <div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
<?php 
include('../db.php');
$qw = mysqli_query($koneksi,"select * from tb_menu where id_menu = '$_GET[id]'");
$qw2 = mysqli_fetch_array($qw);
?>


        <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="?p=tb_dm_1">Home</a></li>
    
              <li class="breadcrumb-item active">Info Member</li>
                            </ol>
            </div>


      <!--<div class="col-auto">
                <a href="" data-toggle="modal" data-target="#modaltambah" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">

                       1. Tambah Data
                    </span>
                </a>
            </div>
      -->
      
       <div class="modal fade" id="modaltambah">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data (<?php echo $qw2['nama_menu'] ?>)</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                
<?php 
if(isset($_POST['tambahproduk2'])){
if(($_POST['nama'])){

include('../db.php');






$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link']['tmp_name'];
    $fn = $_FILES['image_link']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_link']['name'];


 
if($namaa == null){
mysqli_query($koneksi,"insert into tb_president (nama,deskripsi) values
('$_POST[nama]','$_POST[long_deskripsi]')
");
}else{
  
move_uploaded_file($_FILES['image_link']['tmp_name'],"../images/menu/".$_FILES['image_link']['name']);
mysqli_query($koneksi,"insert into tb_president (gambar,nama,deskripsi) values
('$namaa','$_POST[nama]','$_POST[long_deskripsi]')
"); 
}
?>
<script>
alert('Data berhasil ditambahkan<?php echo mysqli_error($koneksi); ?>');
location = "?p=data_presiden";
</script>



<?php }else{
?>
<script>
alert("Failed");
</script>
<?php
}

}//else{
  ?>
<!-- <script>
alert("Failed");
</script> -->
  <?php
//}


?>

      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="height:70vh;overflow:scroll;">
            
       <input onchange="readURLe(this);" type="file" name="image_link" class="form-control" />
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_imagee" style="width:1px;height:1px;" name="product_imagee" class="img-thumbnail">
      </center>
                <script>
  function readURLe(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_imagee')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script>  
  
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Judul</span>
                  </div>

                  <input type="hidden" name="idc2" value="<?php echo $_GET['id'] ?>" />
                          
          
          <input type="hidden" name="unik" value="578866556602c6b54236d7.png" />
                
                  <input type="text" name="nama" value="" class="form-control" placeholder="Nama" required>
                </div>

          

        <!-- <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Kategori</span>
                  </div>
          <select name="kategori" class="form-control" required>
                  <option value="" >- kategori -</option>
                    <option value="19" >Layanan Service</option>
                    <option value="21" >Rental Mesin Fotocopy</option>
                    <option value="23" >Jual Mesin Fotocopy</option>
                    <option value="25" >Spare part</option>
                          </select>
        </div>
            <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Harga</span>
                  </div>
                  <input type="number" name="harga" value="" class="form-control" placeholder="harga" required>
                </div>
        <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Short Desc</span>
                  </div>
                  <input type="text" name="short" value="" class="form-control" placeholder="Short Desc" required>
                </div>
        
        
           -->
        <div>Deskripsi</div>        
                <textarea class="form-control" name="long_deskripsi" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
             
             
             <!--             <div style="margin-top:15px">Long Desc</div>        
                <textarea class="form-control" name="long_deskripsi" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" ></textarea>
             -->
          
        
        
        
        
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahproduk2" class="btn btn-primary">Add</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
            
                                           
                   <?php 
                   include('../db.php');
                   $kj = mysqli_query($koneksi,"select * from info_member ");


                   ?>                            
     <?php 
if(isset($_POST['updatekategori'])){

    
if(($_POST['nama']) ){





$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link']['tmp_name'];
    $fn = $_FILES['image_link']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_link']['name'];

move_uploaded_file($_FILES['image_link']['tmp_name'],"../images/menu/".$_FILES['image_link']['name']);

    if($_FILES['image_link']['name'] == null){
mysqli_query($koneksi,"update info_member set judul = '$_POST[nama]',
deskripsi = '$_POST[long_deskripsi]'
where id_info = '$_POST[idc]'
");
  }else{
    
mysqli_query($koneksi,"update info_member set judul = '$_POST[nama]',
gambar = '$namaa',
deskripsi = '$_POST[long_deskripsi]'
where id_info = '$_POST[idc]'
");   
    
  }


if($_FILES['image_link']['name'] == null){

?>

<script>
alert("Data changed successfully <?php echo mysqli_error($koneksi); ?>");
location = "?p=info_member";

</script>

<?php }else{ ?>

<script>
alert("Data changed successfully <?php echo mysqli_error($koneksi); ?>");
location = "?p=info_member";

</script>


<?php } ?>

<?php 
 } 
}
 ?>
    <div class="table-responsive" style="padding:5px;">
        <table class="table table-striped w-100 dt-responsive nowrap" id="dataTable">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Gambar</th>
                    <th>Judul</th>

                  <th>Deskripsi</th>
                  
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $no = 1;
            while($kj2 = mysqli_fetch_array($kj)){
            $idd = $kj2['id_info'];
            ?>

                                              <tr>
                            <td><?php echo $no; ?></td>
                            <td><img style="width:100px;" src="https://ufe-section-indonesie.org/ufeapp/images/menu/<?php echo $kj2['gambar'] ?>" /></td>
                            <td><?php echo $kj2['judul'] ?></td>
                 
                                          <td><?php echo substr($kj2['deskripsi'],0,100); ?></td>
                            
              <td>


                                <a data-toggle="modal" data-target="#modal-lg_<?php echo $idd ?>" href="" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a>

                            </td>
                        </tr
                        >
            
            
        <div class="modal fade" id="modal-lg_<?php echo $idd; ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
<?php 
$rt = mysqli_query($koneksi,"select * from info_member where id_info = '$idd'");
$rt2 = mysqli_fetch_array($rt);
?>

              <h4 class="modal-title">1. Edit <?php echo $rt2['judul'] ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            



      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="overflow:scroll;height:70vh">

      
      
      
            
      <center>
              <img src="https://ufe-section-indonesie.org/ufeapp/images/menu/<?php echo $kj2['gambar'] ?>"  style="width:200px;" />
      </center> 
      
    <input onchange="readURL<?php echo $idd; ?>(this);" type="file" name="image_link" class="form-control"/>
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_image<?php echo $idd; ?>" style="width:1px;height:1px;" name="product_image<?php echo $idd; ?>" class="img-thumbnail">
      </center>
                <script>
  function readURL<?php echo $idd; ?>(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_image<?php echo $idd; ?>')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script> 
  
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Periode</span>
                  </div>
          
          
          <input type="hidden" name="unik" value="430992371602c6b5423c26.png" />
          <input type="hidden" name="idc2" value="<?php echo $_GET['id'] ?>" />
                  <input type="hidden" name="idc" value="<?php echo $idd ?>" />
                  <input type="text" name="nama" value="<?php echo $kj2['judul'] ?>" class="form-control" placeholder="Nama" required>
                </div>
        


                
        <!-- <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Kategori</span>
                  </div>
          <select name="kategori" class="form-control" required>
                  <option value="23" >Jual Mesin Fotocopy</option>
                    <option value="19" >Layanan Service</option>
                    <option value="21" >Rental Mesin Fotocopy</option>
                    <option value="25" >Spare part</option>
                          </select>
        </div> -->
            <!-- <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Harga</span>
                  </div>
                  <input type="number" name="harga" value="8000000" class="form-control" placeholder="harga" required>
                </div>
        <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Short Desc</span>
                  </div>
                  <input type="text" name="short" value="XploitSec-ID" class="form-control" placeholder="Short Desc" required>
                </div> -->
        
        
      
             
             <div style="margin-top:15px;">
                           Deskripsi
                </div>
                <textarea class="form-control" name="long_deskripsi" placeholder="Place some text here"
              
                          ><?php echo $kj2['deskripsi'] ?></textarea>
             
             
        
        
        
        
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="updatekategori" class="btn btn-primary">Save changes</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
            
             <?php $no++;} ?>          
            
            
                                           
                                                </tbody>
        </table>
    </div>
</div>
   </div>
</div>

<?php }else if($_GET['p'] == "order_dikonfirmasi_sedang_aktif"){ ?>
<div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
<?php 
include('../db.php');
$qw = mysqli_query($koneksi,"select * from tb_menu");
$qw2 = mysqli_fetch_array($qw);
?>


                <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="?p=tb_dm_1">Home</a></li>
    
              <li class="breadcrumb-item active">Order dikonfirmasi Sedang Aktif</li>
                            </ol>
            </div>


    <!-- <div class="col-auto">
                <a href="" data-toggle="modal" data-target="#modaltambah" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">

                       1. Tambah Data
                    </span>
                </a>
            </div> -->
      
      
       <div class="modal fade" id="modaltambah">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data (<?php echo $qw2['nama_menu'] ?>)</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                
<?php 
if(isset($_POST['tambahproduk2'])){
if(($_POST['nama'])){

include('../db.php');






$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link']['tmp_name'];
    $fn = $_FILES['image_link']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_link']['name'];


 
if($namaa == null){
mysqli_query($koneksi,"insert into tb_demar2 (id_kategori,judul,judul2,short_desc,long_desc) values
('$_POST[idc2]','$_POST[nama]','$_POST[nama2]','$_POST[short_desc]','$_POST[long_deskripsi]')
");
}else{
  
move_uploaded_file($_FILES['image_link']['tmp_name'],"../images/menu/".$_FILES['image_link']['name']);
mysqli_query($koneksi,"insert into tb_demar2 (gambar,id_kategori,judul,judul2,short_desc,long_desc) values
('$namaa','$_POST[idc2]','$_POST[nama]','$_POST[nama2]','$_POST[short_desc]','$_POST[long_deskripsi]')
"); 
}
?>
<script>
alert('Data berhasil ditambahkan<?php echo mysqli_error($koneksi); ?>');
location = "?p=rincian&id=<?php echo $_POST['idc2'] ?>";
</script>



<?php }else{
?>
<script>
alert("Failed");
</script>
<?php
}

}//else{
  ?>
<!-- <script>
alert("Failed");
</script> -->
  <?php
//}


?>

      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="height:70vh;overflow:scroll;">
            
       <input onchange="readURLe(this);" type="file" name="image_link" class="form-control" />
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_imagee" style="width:1px;height:1px;" name="product_imagee" class="img-thumbnail">
      </center>
                <script>
  function readURLe(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_imagee')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script>  
  
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Nama</span>
                  </div>

                  <input type="hidden" name="idc2" value="<?php echo $_GET['id'] ?>" />
                          
          
          <input type="hidden" name="unik" value="578866556602c6b54236d7.png" />
                
                  <input type="text" name="nama" value="" class="form-control" placeholder="Nama" required>
                </div>

                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Nama (Tablayout)</span>
                  </div>

                  <input type="text" name="nama2" value="" class="form-control" placeholder="Nama (Tablayout)" required>
                </div>

        <!-- <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Kategori</span>
                  </div>
          <select name="kategori" class="form-control" required>
                  <option value="" >- kategori -</option>
                    <option value="19" >Layanan Service</option>
                    <option value="21" >Rental Mesin Fotocopy</option>
                    <option value="23" >Jual Mesin Fotocopy</option>
                    <option value="25" >Spare part</option>
                          </select>
        </div>
            <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Harga</span>
                  </div>
                  <input type="number" name="harga" value="" class="form-control" placeholder="harga" required>
                </div>
        <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Short Desc</span>
                  </div>
                  <input type="text" name="short" value="" class="form-control" placeholder="Short Desc" required>
                </div>
        
        
           -->
        <div>Short Desc</div>        
                <textarea class="form-control" name="short_desc" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
             
             
                          <div style="margin-top:15px">Long Desc</div>        
                <textarea class="form-control" name="long_deskripsi" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" ></textarea>
             
          
        
        
        
        
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahproduk2" class="btn btn-primary">Add</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
            
                                           
                   <?php 
                   include('../db.php');
                   $kj = mysqli_query($koneksi,"select * from tb_order where ket = 'sudahdibayar' and hapus = '2'
           
           order by id_order desc
           ");


                   ?>                            
     <?php 
if(isset($_POST['updatekategori'])){

    
if(($_POST['nama']) || ($_POST['deskripsi'])){





$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link']['tmp_name'];
    $fn = $_FILES['image_link']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_link']['name'];

move_uploaded_file($_FILES['image_link']['tmp_name'],"../images/menu/".$_FILES['image_link']['name']);

    if($_FILES['image_link']['name'] == null){
mysqli_query($koneksi,"update tb_demar2 set judul = '$_POST[nama]',
judul2 = '$_POST[nama2]',
short_desc = '$_POST[deskripsi]',
long_desc = '$_POST[long_deskripsi]'
where id_demar = '$_POST[idc]'
");
  }else{
    
mysqli_query($koneksi,"update tb_demar2 set judul = '$_POST[nama]',
judul2 = '$_POST[nama2]',
gambar = '$namaa',
short_desc = '$_POST[deskripsi]',
long_desc = '$_POST[long_deskripsi]'
where id_demar = '$_POST[idc]'
");   
    
  }


if($_FILES['image_link']['name'] == null){

?>

<script>
alert("Data changed successfully <?php echo mysqli_error($koneksi); ?>");
location = "?p=rincian&id=<?php echo $_POST['idc2'] ?>";

</script>

<?php }else{ ?>

<script>
alert("Data changed successfully <?php echo mysqli_error($koneksi); ?>");
location = "?p=rincian&id=<?php echo $_POST['idc2'] ?>";

</script>


<?php } ?>

<?php 
 } 
}
 ?>
    <div class="table-responsive" style="padding:5px;">
        <table class="table table-striped w-100 dt-responsive nowrap" id="example">
            <thead>
                <tr>
                    <th>No. </th>
        <th>Email</th>
      <th>Nama</th>
          <th>Masa Aktif</th>
                    <th>Nama Depan</th>
        <th>Nama Belakang</th>
<th>Harga</th>
<th>No Invoice</th>
<th>Kode Inv</th>
                  
              <!--      <th>Opsi</th> -->
                </tr>
            </thead>
            <tbody>
            <?php 
            $no = 1;
            while($kj2 = mysqli_fetch_array($kj)){
        
        $hf = mysqli_query($koneksi,"select * from user where idUser = '$kj2[id_user]'");
        $hf2 = mysqli_fetch_array($hf);
        
        
        date_default_timezone_set('Asia/Jakarta');
        $sekarang = date('Y-m-d');
        
        $vc = mysqli_query($koneksi,"select * from tb_order_aktif where id_order = '$kj2[id_order]'");
        $vc2 = mysqli_fetch_array($vc);
          $idd = $kj2['id_order'];
        if($vc2['tanggal_akhir'] <= $sekarang){}else{
        
          
            ?>

                                              <tr>
                            <td><?php echo $no; ?></td>
               <td><?php echo $hf2['username'] ?></td>
             <td><?php echo $kj2['nama_produk'] ?></td>
             
             <?php if($kj2['jenis_order'] == "memberufe"){ ?>
               <td><?php echo $hf2['masa_aktif'] ?></td>
             <?php }else{ ?>
              <td><?php echo $vc2['tanggal_akhir'] ?></td>
             <?php } ?>
                            <td><?php echo $kj2['nama_depan'] ?></td>
                       <td><?php echo $kj2['nama_belakang'] ?></td>
                 <td><?php echo number_format($kj2['harga'],0,",",".") ?></td>
                                          <td><?php echo substr($kj2['no_invoice'],4,1000) ?></td>
                            <td><?php echo substr($kj2['no_invoice'],0,3) ?></td>
                            
                        </tr
                        >
            
            
        <div class="modal fade" id="modal-lg_<?php echo $idd; ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
<?php 
$rt = mysqli_query($koneksi,"select * from tb_order where id_order = '$idd'");
$rt2 = mysqli_fetch_array($rt);
?>

              <h4 class="modal-title">1. Edit <?php echo $rt2['nama_produk'] ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            



      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="overflow:scroll;height:70vh">

      
      
      
            
      <center>
              <img src="https://ufe-section-indonesie.org/ufeapp/images/menu/<?php echo $kj2['gambar'] ?>"  style="width:200px;" />
      </center> 
      
    <input onchange="readURL<?php echo $idd; ?>(this);" type="file" name="image_link" class="form-control"/>
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_image<?php echo $idd; ?>" style="width:1px;height:1px;" name="product_image<?php echo $idd; ?>" class="img-thumbnail">
      </center>
                <script>
  function readURL<?php echo $idd; ?>(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_image<?php echo $idd; ?>')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script> 
  
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Nama</span>
                  </div>
          
          
          <input type="hidden" name="unik" value="430992371602c6b5423c26.png" />
          <input type="hidden" name="idc2" value="<?php echo $_GET['id'] ?>" />
                  <input type="hidden" name="idc" value="<?php echo $idd ?>" />
                  <input type="text" name="nama" value="<?php echo $kj2['judul'] ?>" class="form-control" placeholder="Nama" required>
                </div>
        


                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Nama (Tablayout)</span>
                  </div>
          
          
          <input type="hidden" name="unik" value="430992371602c6b5423c26.png" />
                  <input type="hidden" name="idc" value="<?php echo $idd ?>" />
                  <input type="text" name="nama2" value="<?php echo $kj2['judul2'] ?>" class="form-control" placeholder="Nama (Tablayout)" required>
                </div>
        <!-- <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Kategori</span>
                  </div>
          <select name="kategori" class="form-control" required>
                  <option value="23" >Jual Mesin Fotocopy</option>
                    <option value="19" >Layanan Service</option>
                    <option value="21" >Rental Mesin Fotocopy</option>
                    <option value="25" >Spare part</option>
                          </select>
        </div> -->
            <!-- <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Harga</span>
                  </div>
                  <input type="number" name="harga" value="8000000" class="form-control" placeholder="harga" required>
                </div>
        <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Short Desc</span>
                  </div>
                  <input type="text" name="short" value="XploitSec-ID" class="form-control" placeholder="Short Desc" required>
                </div> -->
        
        
          <div>
                Short Desc
               </div>
                <textarea class="form-control" name="deskripsi" placeholder="Place some text here"
              
                           required><?php echo $kj2['short_desc'] ?></textarea>
             
             <div style="margin-top:15px;">
                           Long Desc
                </div>
                <textarea class="form-control" name="long_deskripsi" placeholder="Place some text here"
              
                          ><?php echo $kj2['long_desc'] ?></textarea>
             
             
        
        
        
        
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="updatekategori" class="btn btn-primary">Save changes</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
            
        <?php }$no++;} ?>          
            
            
                                           
                                                </tbody>
        <tfoot>
                <tr>
                    <th>No. </th>
        <th>Email</th>
      <th>Nama</th>
          <th>Masa Aktif</th>
                    <th>Nama Depan</th>
        <th>Nama Belakang</th>
<th>Harga</th>
<th>No Invoice</th>
<th>Kode Inv</th>
                  
              <!--      <th>Opsi</th> -->
                </tr>
            </tfoot>
    </table>
    </div>
</div>
   </div>
</div>

<?php }else if($_GET['p'] == "order_dikonfirmasi_histori"){ ?>
<div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
<?php 
include('../db.php');
$qw = mysqli_query($koneksi,"select * from tb_menu");
$qw2 = mysqli_fetch_array($qw);
?>


                 <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="?p=tb_dm_1">Home</a></li>
    
              <li class="breadcrumb-item active">Riwayat Order dikonfirmasi</li>
                            </ol>
            </div>


    <!-- <div class="col-auto">
                <a href="" data-toggle="modal" data-target="#modaltambah" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">

                       1. Tambah Data
                    </span>
                </a>
            </div> -->
      
      
       <div class="modal fade" id="modaltambah">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data (<?php echo $qw2['nama_menu'] ?>)</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                
<?php 
if(isset($_POST['tambahproduk2'])){
if(($_POST['nama'])){

include('../db.php');






$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link']['tmp_name'];
    $fn = $_FILES['image_link']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_link']['name'];


 
if($namaa == null){
mysqli_query($koneksi,"insert into tb_demar2 (id_kategori,judul,judul2,short_desc,long_desc) values
('$_POST[idc2]','$_POST[nama]','$_POST[nama2]','$_POST[short_desc]','$_POST[long_deskripsi]')
");
}else{
  
move_uploaded_file($_FILES['image_link']['tmp_name'],"../images/menu/".$_FILES['image_link']['name']);
mysqli_query($koneksi,"insert into tb_demar2 (gambar,id_kategori,judul,judul2,short_desc,long_desc) values
('$namaa','$_POST[idc2]','$_POST[nama]','$_POST[nama2]','$_POST[short_desc]','$_POST[long_deskripsi]')
"); 
}
?>
<script>
alert('Data berhasil ditambahkan<?php echo mysqli_error($koneksi); ?>');
location = "?p=rincian&id=<?php echo $_POST['idc2'] ?>";
</script>



<?php }else{
?>
<script>
alert("Failed");
</script>
<?php
}

}//else{
  ?>
<!-- <script>
alert("Failed");
</script> -->
  <?php
//}


?>

      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="height:70vh;overflow:scroll;">
            
       <input onchange="readURLe(this);" type="file" name="image_link" class="form-control" />
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_imagee" style="width:1px;height:1px;" name="product_imagee" class="img-thumbnail">
      </center>
                <script>
  function readURLe(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_imagee')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script>  
  
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Nama</span>
                  </div>

                  <input type="hidden" name="idc2" value="<?php echo $_GET['id'] ?>" />
                          
          
          <input type="hidden" name="unik" value="578866556602c6b54236d7.png" />
                
                  <input type="text" name="nama" value="" class="form-control" placeholder="Nama" required>
                </div>

                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Nama (Tablayout)</span>
                  </div>

                  <input type="text" name="nama2" value="" class="form-control" placeholder="Nama (Tablayout)" required>
                </div>

        <!-- <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Kategori</span>
                  </div>
          <select name="kategori" class="form-control" required>
                  <option value="" >- kategori -</option>
                    <option value="19" >Layanan Service</option>
                    <option value="21" >Rental Mesin Fotocopy</option>
                    <option value="23" >Jual Mesin Fotocopy</option>
                    <option value="25" >Spare part</option>
                          </select>
        </div>
            <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Harga</span>
                  </div>
                  <input type="number" name="harga" value="" class="form-control" placeholder="harga" required>
                </div>
        <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Short Desc</span>
                  </div>
                  <input type="text" name="short" value="" class="form-control" placeholder="Short Desc" required>
                </div>
        
        
           -->
        <div>Short Desc</div>        
                <textarea class="form-control" name="short_desc" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
             
             
                          <div style="margin-top:15px">Long Desc</div>        
                <textarea class="form-control" name="long_deskripsi" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" ></textarea>
             
          
        
        
        
        
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahproduk2" class="btn btn-primary">Add</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
            
                                           
                   <?php 
                   include('../db.php');
                   $kj = mysqli_query($koneksi,"select * from tb_order where ket = 'sudahdibayar' and hapus = '2'
           
           order by id_order desc
           ");


                   ?>                            
     <?php 
if(isset($_POST['updatekategori'])){

    
if(($_POST['nama']) || ($_POST['deskripsi'])){





$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link']['tmp_name'];
    $fn = $_FILES['image_link']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_link']['name'];

move_uploaded_file($_FILES['image_link']['tmp_name'],"../images/menu/".$_FILES['image_link']['name']);

    if($_FILES['image_link']['name'] == null){
mysqli_query($koneksi,"update tb_demar2 set judul = '$_POST[nama]',
judul2 = '$_POST[nama2]',
short_desc = '$_POST[deskripsi]',
long_desc = '$_POST[long_deskripsi]'
where id_demar = '$_POST[idc]'
");
  }else{
    
mysqli_query($koneksi,"update tb_demar2 set judul = '$_POST[nama]',
judul2 = '$_POST[nama2]',
gambar = '$namaa',
short_desc = '$_POST[deskripsi]',
long_desc = '$_POST[long_deskripsi]'
where id_demar = '$_POST[idc]'
");   
    
  }


if($_FILES['image_link']['name'] == null){

?>

<script>
alert("Data changed successfully <?php echo mysqli_error($koneksi); ?>");
location = "?p=rincian&id=<?php echo $_POST['idc2'] ?>";

</script>

<?php }else{ ?>

<script>
alert("Data changed successfully <?php echo mysqli_error($koneksi); ?>");
location = "?p=rincian&id=<?php echo $_POST['idc2'] ?>";

</script>


<?php } ?>

<?php 
 } 
}
 ?>
    <div class="table-responsive" style="padding:5px;">
        <table class="table table-striped w-100 dt-responsive nowrap" id="example">
            <thead>
                <tr>
                    <th>No. </th>
        <th>Email</th>
      <th>Nama</th>
          <th>Masa Aktif</th>
                    <th>Nama Depan</th>
        <th>Nama Belakang</th>
<th>Harga</th>
<th>No Invoice</th>
                  
                   <!-- <th>Opsi</th> -->
                </tr>
            </thead>
            <tbody>
            <?php 
            $no = 1;
            while($kj2 = mysqli_fetch_array($kj)){
        
        $hf = mysqli_query($koneksi,"select * from user where idUser = '$kj2[id_user]'");
        $hf2 = mysqli_fetch_array($hf);
        
        
        date_default_timezone_set('Asia/Jakarta');
        $sekarang = date('Y-m-d');
        
        $vc = mysqli_query($koneksi,"select * from tb_order_aktif where id_order = '$kj2[id_order]'");
        $vc2 = mysqli_fetch_array($vc);
          $idd = $kj2['id_order'];
        //if($vc2['tanggal_akhir'] <= $sekarang){}else{
        
          
            ?>

                                              <tr>
                            <td><?php echo $no; ?></td>
               <td><?php echo $hf2['username'] ?></td>
             <td><?php echo $kj2['nama_produk'] ?></td>
             
             <?php if($kj2['jenis_order'] == "memberufe"){ ?>
               <td><?php echo $hf2['masa_aktif'] ?></td>
             <?php }else{ ?>
              <td><?php echo $vc2['tanggal_akhir'] ?></td>
             <?php } ?>
                            <td><?php echo $kj2['nama_depan'] ?></td>
                       <td><?php echo $kj2['nama_belakang'] ?></td>
                 <td><?php echo number_format($kj2['harga'],0,",",".") ?></td>
                                          <td><?php echo $kj2['no_invoice'] ?></td>
                            
                        </tr
                        >
            
            
        <div class="modal fade" id="modal-lg_<?php echo $idd; ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
<?php 
$rt = mysqli_query($koneksi,"select * from tb_order where id_order = '$idd'");
$rt2 = mysqli_fetch_array($rt);
?>

              <h4 class="modal-title">1. Edit <?php echo $rt2['nama_produk'] ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            



      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="overflow:scroll;height:70vh">

      
      
      
            
      <center>
              <img src="https://ufe-section-indonesie.org/ufeapp/images/menu/<?php echo $kj2['gambar'] ?>"  style="width:200px;" />
      </center> 
      
    <input onchange="readURL<?php echo $idd; ?>(this);" type="file" name="image_link" class="form-control"/>
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_image<?php echo $idd; ?>" style="width:1px;height:1px;" name="product_image<?php echo $idd; ?>" class="img-thumbnail">
      </center>
                <script>
  function readURL<?php echo $idd; ?>(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_image<?php echo $idd; ?>')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script> 
  
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Nama</span>
                  </div>
          
          
          <input type="hidden" name="unik" value="430992371602c6b5423c26.png" />
          <input type="hidden" name="idc2" value="<?php echo $_GET['id'] ?>" />
                  <input type="hidden" name="idc" value="<?php echo $idd ?>" />
                  <input type="text" name="nama" value="<?php echo $kj2['judul'] ?>" class="form-control" placeholder="Nama" required>
                </div>
        


                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Nama (Tablayout)</span>
                  </div>
          
          
          <input type="hidden" name="unik" value="430992371602c6b5423c26.png" />
                  <input type="hidden" name="idc" value="<?php echo $idd ?>" />
                  <input type="text" name="nama2" value="<?php echo $kj2['judul2'] ?>" class="form-control" placeholder="Nama (Tablayout)" required>
                </div>
        <!-- <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Kategori</span>
                  </div>
          <select name="kategori" class="form-control" required>
                  <option value="23" >Jual Mesin Fotocopy</option>
                    <option value="19" >Layanan Service</option>
                    <option value="21" >Rental Mesin Fotocopy</option>
                    <option value="25" >Spare part</option>
                          </select>
        </div> -->
            <!-- <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Harga</span>
                  </div>
                  <input type="number" name="harga" value="8000000" class="form-control" placeholder="harga" required>
                </div>
        <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Short Desc</span>
                  </div>
                  <input type="text" name="short" value="XploitSec-ID" class="form-control" placeholder="Short Desc" required>
                </div> -->
        
        
          <div>
                Short Desc
               </div>
                <textarea class="form-control" name="deskripsi" placeholder="Place some text here"
              
                           required><?php echo $kj2['short_desc'] ?></textarea>
             
             <div style="margin-top:15px;">
                           Long Desc
                </div>
                <textarea class="form-control" name="long_deskripsi" placeholder="Place some text here"
              
                          ><?php echo $kj2['long_desc'] ?></textarea>
             
             
        
        
        
        
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="updatekategori" class="btn btn-primary">Save changes</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
            
        <?php $no++;} ?>          
            
            
                                           
                                                </tbody>
         <tfoot>
                <tr>
                    <th>No. </th>
        <th>Email</th>
      <th>Nama</th>
          <th>Masa Aktif</th>
                    <th>Nama Depan</th>
        <th>Nama Belakang</th>
<th>Harga</th>
<th>No Invoice</th>
                  
                   <!-- <th>Opsi</th> -->
                </tr>
            </tfoot>
    </table>
    </div>
</div>
   </div>
</div>

<?php
      }else if($_GET['p'] == "order_menunggu_konfirmasi"){
 ?>
<div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
<?php 
include('../db.php');
$qw = mysqli_query($koneksi,"select * from tb_menu");
$qw2 = mysqli_fetch_array($qw);
?>


                 <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="?p=tb_dm_1">Home</a></li>
    
              <li class="breadcrumb-item active">Order menunggu konfirmasi</li>
                            </ol>
            </div>


    <!-- <div class="col-auto">
                <a href="" data-toggle="modal" data-target="#modaltambah" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">

                       1. Tambah Data
                    </span>
                </a>
            </div> -->
      
      
       <div class="modal fade" id="modaltambah">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data (<?php echo $qw2['nama_menu'] ?>)</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                
<?php 
if(isset($_POST['tambahproduk2'])){
if(($_POST['nama'])){

include('../db.php');






$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link']['tmp_name'];
    $fn = $_FILES['image_link']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_link']['name'];


 
if($namaa == null){
mysqli_query($koneksi,"insert into tb_demar2 (id_kategori,judul,judul2,short_desc,long_desc) values
('$_POST[idc2]','$_POST[nama]','$_POST[nama2]','$_POST[short_desc]','$_POST[long_deskripsi]')
");
}else{
  
move_uploaded_file($_FILES['image_link']['tmp_name'],"../images/menu/".$_FILES['image_link']['name']);
mysqli_query($koneksi,"insert into tb_demar2 (gambar,id_kategori,judul,judul2,short_desc,long_desc) values
('$namaa','$_POST[idc2]','$_POST[nama]','$_POST[nama2]','$_POST[short_desc]','$_POST[long_deskripsi]')
"); 
}
?>
<script>
alert('Data berhasil ditambahkan<?php echo mysqli_error($koneksi); ?>');
location = "?p=rincian&id=<?php echo $_POST['idc2'] ?>";
</script>



<?php }else{
?>
<script>
alert("Failed");
</script>
<?php
}

}//else{
  ?>
<!-- <script>
alert("Failed");
</script> -->
  <?php
//}


?>

      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="height:70vh;overflow:scroll;">
            
       <input onchange="readURLe(this);" type="file" name="image_link" class="form-control" />
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_imagee" style="width:1px;height:1px;" name="product_imagee" class="img-thumbnail">
      </center>
                <script>
  function readURLe(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_imagee')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script>  
  
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Nama</span>
                  </div>

                  <input type="hidden" name="idc2" value="<?php echo $_GET['id'] ?>" />
                          
          
          <input type="hidden" name="unik" value="578866556602c6b54236d7.png" />
                
                  <input type="text" name="nama" value="" class="form-control" placeholder="Nama" required>
                </div>

                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Nama (Tablayout)</span>
                  </div>

                  <input type="text" name="nama2" value="" class="form-control" placeholder="Nama (Tablayout)" required>
                </div>

        <!-- <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Kategori</span>
                  </div>
          <select name="kategori" class="form-control" required>
                  <option value="" >- kategori -</option>
                    <option value="19" >Layanan Service</option>
                    <option value="21" >Rental Mesin Fotocopy</option>
                    <option value="23" >Jual Mesin Fotocopy</option>
                    <option value="25" >Spare part</option>
                          </select>
        </div>
            <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Harga</span>
                  </div>
                  <input type="number" name="harga" value="" class="form-control" placeholder="harga" required>
                </div>
        <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Short Desc</span>
                  </div>
                  <input type="text" name="short" value="" class="form-control" placeholder="Short Desc" required>
                </div>
        
        
           -->
        <div>Short Desc</div>        
                <textarea class="form-control" name="short_desc" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
             
             
                          <div style="margin-top:15px">Long Desc</div>        
                <textarea class="form-control" name="long_deskripsi" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" ></textarea>
             
          
        
        
        
        
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahproduk2" class="btn btn-primary">Add</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
            
                                           
                   <?php 
                   include('../db.php');
                   $kj = mysqli_query($koneksi,"select * from tb_order where ket = 'menunggu' and hapus = '2'
           
           order by id_order desc
           ");


                   ?>                            
     <?php 
if(isset($_POST['updatekategori'])){

    
if(($_POST['nama']) || ($_POST['deskripsi'])){





$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link']['tmp_name'];
    $fn = $_FILES['image_link']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_link']['name'];

move_uploaded_file($_FILES['image_link']['tmp_name'],"../images/menu/".$_FILES['image_link']['name']);

    if($_FILES['image_link']['name'] == null){
mysqli_query($koneksi,"update tb_demar2 set judul = '$_POST[nama]',
judul2 = '$_POST[nama2]',
short_desc = '$_POST[deskripsi]',
long_desc = '$_POST[long_deskripsi]'
where id_demar = '$_POST[idc]'
");
  }else{
    
mysqli_query($koneksi,"update tb_demar2 set judul = '$_POST[nama]',
judul2 = '$_POST[nama2]',
gambar = '$namaa',
short_desc = '$_POST[deskripsi]',
long_desc = '$_POST[long_deskripsi]'
where id_demar = '$_POST[idc]'
");   
    
  }


if($_FILES['image_link']['name'] == null){

?>

<script>
alert("Data changed successfully <?php echo mysqli_error($koneksi); ?>");
location = "?p=rincian&id=<?php echo $_POST['idc2'] ?>";

</script>

<?php }else{ ?>

<script>
alert("Data changed successfully <?php echo mysqli_error($koneksi); ?>");
location = "?p=rincian&id=<?php echo $_POST['idc2'] ?>";

</script>


<?php } ?>

<?php 
 } 
}
 ?>
    <div class="table-responsive" style="padding:5px;">
        <table class="table table-striped w-100 dt-responsive nowrap" id="example">
            <thead>
                <tr>
                    <th>No. </th>
        <th>Action</th>
    
        <th>Email</th>
      <th>Nama</th>
          
                    <th>Nama Depan</th>
        <th>Nama Belakang</th>
<th>Harga</th>
<th>No Invoice</th>
                  
              <!--      <th>Opsi</th> -->
                </tr>
            </thead>
            <tbody>
            <?php 
            $no = 1;
            while($kj2 = mysqli_fetch_array($kj)){
        
        $hf = mysqli_query($koneksi,"select * from user where idUser = '$kj2[id_user]'");
        $hf2 = mysqli_fetch_array($hf);
        
        
        date_default_timezone_set('Asia/Jakarta');
        $sekarang = date('Y-m-d');
        
        $vc = mysqli_query($koneksi,"select * from tb_order_aktif where id_order = '$kj2[id_order]'");
        $vc2 = mysqli_fetch_array($vc);
          $idd = $kj2['id_order'];
        //if($vc2['tanggal_akhir'] <= $sekarang){}else{
        
          
            ?>

                                              <tr>
                            <td><?php echo $no; ?></td>
               <td><span data-toggle="modal" data-target="#lihatorder<?php echo $kj2['id_order'] ?>" class="badge badge-primary" style="cursor:pointer;">View</span></td>
              <td><?php echo $hf2['username'] ?></td>
             <td><?php echo $kj2['nama_produk'] ?></td>
             
            
                            <td><?php echo $kj2['nama_depan'] ?></td>
                       <td><?php echo $kj2['nama_belakang'] ?></td>
                 <td><?php echo number_format($kj2['harga'],0,",",".") ?></td>
                                          <td><?php echo $kj2['no_invoice'] ?></td>
                            
                        </tr
                        >
            
        <div class="modal fade" id="lihatorder<?php echo $kj2['id_order']; ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
<?php 
$rt = mysqli_query($koneksi,"select * from tb_menu where id_menu = '$idd'");
$rt2 = mysqli_fetch_array($rt);

$hjf = mysqli_query($koneksi,"select * from user where idUser = '$hf2[idUser]'");
$hjf2 = mysqli_fetch_assoc($hjf);
?>

              <h4 class="modal-title"><?php echo $hjf2['username']  ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            

           <?php 
           $ged = mysqli_query($koneksi,"select * from tb_pembayaran where id_order = '$kj2[id_order]'");
           $ged2 = mysqli_fetch_assoc($ged);
          
           ?> 

           <fieldset style="height:60vh;overflow-y:scroll;">

           <center>
              <img src="../images/buktipembayaran/<?php echo $ged2['gambar'] ?>" style="
              width: 100%;max-width: 400;
              "
              />


              <div id="btnkonfirm<?php echo $kj2['id_order'] ?>" style="margin-top: 20px;margin-bottom: 20px;"><span
                onclick="konfirm<?php echo $kj2['id_order'] ?>()"
               class="btn btn-primary" style="cursor:pointer;">Konfirmasi</span></div>

           </center>


           <script>
              function konfirm<?php echo $kj2['id_order'] ?>(){

        document.getElementById("btnkonfirm<?php echo $kj2['id_order'] ?>").style.visibility = "hidden";


                const url = 'https://ufe-section-indonesie.org/ufeapp/admin/tesjson.php';
    $.post("../konfirmasi_pembayaran.php",
        {
          jenis_order:"<?php echo $kj2['jenis_order'] ?>",
          id_user:"web",
          id_user2:"<?php echo $_COOKIE['email'] ?>",
          pss:"web",
          harga_asli:"<?php echo $kj2['harga'] ?>",
          id_order:"<?php echo $kj2['id_order'] ?>"
     
      },
        function(data,status){
       
if(data == "oke"){
location = "https://ufe-section-indonesie.org/ufeapp/admin/index.php?p=order_menunggu_konfirmasi"

}else if(data.indexOf('{"success":1')  >= 0){
location = "https://ufe-section-indonesie.org/ufeapp/admin/index.php?p=order_menunggu_konfirmasi"

}else{

alert(data);
  console.log(data);
  //alert(data);
}
        });   
              }

           </script>

           <div style="padding:0px 20px 20px 20px;">
            <div class="row">
              <div class="col-md-6">Nama Bank: </div>
              <div class="col-md-6"><?php echo $ged2['bank']; ?></div>              
            </div>

           </div>

                      <div style="padding:0px 20px 20px 20px;">
            <div class="row">
              <div class="col-md-6">No Rekening: </div>
              <div class="col-md-6"><?php echo $ged2['norek']; ?></div>              
            </div>

           </div>
                      <div style="padding:0px 20px 20px 20px;">
            <div class="row">
              <div class="col-md-6">Tanggal: </div>
              <div class="col-md-6"><?php echo date('H:i, d F Y', strtotime($ged2['tanggal2'])); ?></div>              
            </div>

           </div>



     <div style="padding:0px 20px 20px 20px;">
            <div class="row">
              <div class="col-md-6">Nilai: </div>
              <div class="col-md-6"><?php echo number_format($ged2['nilai'],0,".",","); ?></div>              
            </div>

           </div>



     <div style="padding:0px 20px 20px 20px;">
            <div class="row">
              <div class="col-md-6">Jenis Order: </div>
              <div class="col-md-6"><?php echo $kj2['nama_produk']; ?></div>              
            </div>

           </div>

         </fieldset>

          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            



            
        <div class="modal fade" id="modal-lg_<?php echo $idd; ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
<?php 
$rt = mysqli_query($koneksi,"select * from tb_order where id_order = '$idd'");
$rt2 = mysqli_fetch_array($rt);
?>

              <h4 class="modal-title">1. Edit <?php echo $rt2['nama_produk'] ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            



      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="overflow:scroll;height:70vh">

      
      
      
            
      <center>
              <img src="https://ufe-section-indonesie.org/ufeapp/images/menu/<?php echo $kj2['gambar'] ?>"  style="width:200px;" />
      </center> 
      
    <input onchange="readURL<?php echo $idd; ?>(this);" type="file" name="image_link" class="form-control"/>
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_image<?php echo $idd; ?>" style="width:1px;height:1px;" name="product_image<?php echo $idd; ?>" class="img-thumbnail">
      </center>
                <script>
  function readURL<?php echo $idd; ?>(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_image<?php echo $idd; ?>')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script> 
  
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Nama</span>
                  </div>
          
          
          <input type="hidden" name="unik" value="430992371602c6b5423c26.png" />
          <input type="hidden" name="idc2" value="<?php echo $_GET['id'] ?>" />
                  <input type="hidden" name="idc" value="<?php echo $idd ?>" />
                  <input type="text" name="nama" value="<?php echo $kj2['judul'] ?>" class="form-control" placeholder="Nama" required>
                </div>
        


                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Nama (Tablayout)</span>
                  </div>
          
          
          <input type="hidden" name="unik" value="430992371602c6b5423c26.png" />
                  <input type="hidden" name="idc" value="<?php echo $idd ?>" />
                  <input type="text" name="nama2" value="<?php echo $kj2['judul2'] ?>" class="form-control" placeholder="Nama (Tablayout)" required>
                </div>
        <!-- <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Kategori</span>
                  </div>
          <select name="kategori" class="form-control" required>
                  <option value="23" >Jual Mesin Fotocopy</option>
                    <option value="19" >Layanan Service</option>
                    <option value="21" >Rental Mesin Fotocopy</option>
                    <option value="25" >Spare part</option>
                          </select>
        </div> -->
            <!-- <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Harga</span>
                  </div>
                  <input type="number" name="harga" value="8000000" class="form-control" placeholder="harga" required>
                </div>
        <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Short Desc</span>
                  </div>
                  <input type="text" name="short" value="XploitSec-ID" class="form-control" placeholder="Short Desc" required>
                </div> -->
        
        
          <div>
                Short Desc
               </div>
                <textarea class="form-control" name="deskripsi" placeholder="Place some text here"
              
                           required><?php echo $kj2['short_desc'] ?></textarea>
             
             <div style="margin-top:15px;">
                           Long Desc
                </div>
                <textarea class="form-control" name="long_deskripsi" placeholder="Place some text here"
              
                          ><?php echo $kj2['long_desc'] ?></textarea>
             
             
        
        
        
        
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="updatekategori" class="btn btn-primary">Save changes</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
            
        <?php $no++;} ?>          
            
            
                                           
                                                </tbody>
<tfoot>
                <tr>
                    <th>No. </th>
       <th>Action</th>
      
        <th>Email</th>
      <th>Nama</th>
          
                    <th>Nama Depan</th>
        <th>Nama Belakang</th>
<th>Harga</th>
<th>No Invoice</th>
                  
              <!--      <th>Opsi</th> -->
                </tr>
            </tfoot>       
     </table>
    </div>
</div>
   </div>
</div>
<?php }else if($_GET['p'] == "user_personal_sudah_dikonfirmasi"){ ?>
<div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
<?php 
include('../db.php');
$qw = mysqli_query($koneksi,"select * from user where level = 'personal' and verifikasi_admin = 'belum'");
$qw2 = mysqli_fetch_array($qw);
?>


               <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="?p=tb_dm_1">Home</a></li>
    
              <li class="breadcrumb-item active">Personal user confirmed</li>
                            </ol>
            </div>

<!--
      <div class="col-auto">
                <a href="" data-toggle="modal" data-target="#modaltambah" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">

                       1. Tambah Data
                    </span>
                </a>
            </div>
  -->   
      
       <div class="modal fade" id="modaltambah">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add (<?php echo $qw2['nama_menu'] ?>)</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                
<?php 
if(isset($_POST['tambahproduk2'])){
if(($_POST['nama'])){

include('../db.php');






$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link']['tmp_name'];
    $fn = $_FILES['image_link']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_link']['name'];


 
if($namaa == null){
mysqli_query($koneksi,"insert into tb_demar2 (id_kategori,judul,judul2,short_desc,long_desc) values
('$_POST[idc2]','$_POST[nama]','$_POST[nama2]','$_POST[short_desc]','$_POST[long_deskripsi]')
");
}else{
  
move_uploaded_file($_FILES['image_link']['tmp_name'],"../images/menu/".$_FILES['image_link']['name']);
mysqli_query($koneksi,"insert into tb_demar2 (gambar,id_kategori,judul,judul2,short_desc,long_desc) values
('$namaa','$_POST[idc2]','$_POST[nama]','$_POST[nama2]','$_POST[short_desc]','$_POST[long_deskripsi]')
"); 
}
?>
<script>
alert('Data berhasil ditambahkan<?php echo mysqli_error($koneksi); ?>');
location = "?p=rincian&id=<?php echo $_POST['idc2'] ?>";
</script>



<?php }else{
?>
<script>
alert("Failed");
</script>
<?php
}

}//else{
  ?>
<!-- <script>
alert("Failed");
</script> -->
  <?php
//}


?>

      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="height:70vh;overflow:scroll;">
            
       <input onchange="readURLe(this);" type="file" name="image_link" class="form-control" />
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_imagee" style="width:1px;height:1px;" name="product_imagee" class="img-thumbnail">
      </center>
                <script>
  function readURLe(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_imagee')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script>  
  
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Name</span>
                  </div>

                  <input type="hidden" name="idc2" value="<?php echo $_GET['id'] ?>" />
                          
          
          <input type="hidden" name="unik" value="578866556602c6b54236d7.png" />
                
                  <input type="text" name="nama" value="" class="form-control" placeholder="Name" required>
                </div>

                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Name (Tablayout)</span>
                  </div>

                  <input type="text" name="nama2" value="" class="form-control" placeholder="Name (Tablayout)" required>
                </div>

        <div>Short Desc</div>        
                <textarea class="form-control" name="short_desc" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
             
             
                          <div style="margin-top:15px">Long Desc</div>        
                <textarea class="form-control" name="long_deskripsi" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" ></textarea>
             
          
        
        
        
        
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahproduk2" class="btn btn-primary">Add</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
            
                                           
                   <?php 
                   include('../db.php');
                   $kj = mysqli_query($koneksi,"select * from user where level = 'personal' and verifikasi_admin = 'sudah' order by idUser desc");


                   ?>                            
     <?php 
if(isset($_POST['updatekategori'])){

    
if(($_POST['nama']) || ($_POST['deskripsi'])){





$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link']['tmp_name'];
    $fn = $_FILES['image_link']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_link']['name'];

move_uploaded_file($_FILES['image_link']['tmp_name'],"../images/menu/".$_FILES['image_link']['name']);

    if($_FILES['image_link']['name'] == null){
mysqli_query($koneksi,"update user set verifikasi_admin = 'belum'
where idUser = '$_POST[idc]'
");
  }else{
    
mysqli_query($koneksi,"update user set verifikasi_admin = 'sudah'
where idUser = '$_POST[idc]'
");   
    
  }


if($_FILES['image_link']['name'] == null){

?>

<script>
alert("Data changed successfully <?php echo mysqli_error($koneksi); ?>");
location = "?p=user_personal_sudah_dikonfirmasi";

</script>

<?php }else{ ?>

<script>
alert("Data changed successfully <?php echo mysqli_error($koneksi); ?>");
location = "?p=rincian&id=<?php echo $_POST['idc2'] ?>";

</script>


<?php } ?>

<?php 
 } 
}
 ?>
    <div class="table-responsive" style="padding:5px;">
        <table class="table table-striped w-100 dt-responsive nowrap" id="example">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Name</th>
                    <th>Email</th>

                  <th>Company</th>
                  <th>Registration Date</th>
                  
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $no = 1;
            while($kj2 = mysqli_fetch_array($kj)){
            $idd = $kj2['idUser'];
            ?>

                                              <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $kj2['first_name'] ?> <?php echo $kj2['second_name'] ?></td>
                            <td><?php echo $kj2['username'] ?></td>
                 
                                          <td><?php echo $kj2['company'] ?></td>
                                                   <td><?php echo $kj2['tgl_daftar'] ?></td>
                            
              <td>


                                <a data-toggle="modal" data-target="#modal-lg_<?php echo $idd ?>" href="" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-eye"></i></a>

                            </td>
                        </tr
                        >
            
            
        <div class="modal fade" id="modal-lg_<?php echo $idd; ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
<?php 
$rt = mysqli_query($koneksi,"select * from user where idUser = '$idd'");
$rt2 = mysqli_fetch_array($rt);
?>

              <h4 class="modal-title">Edit <?php echo $rt2['username'] ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            



      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="overflow:scroll;height:70vh">

      
      
      
            
      <center>
              <img src="https://ufe-section-indonesie.org/ufeapp/images/propic/<?php echo $kj2['propic'] ?>"  style="width:200px;" />
      </center> 
      <!--
    <input onchange="readURL<?php echo $idd; ?>(this);" type="file" name="image_link" class="form-control"/>
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_image<?php echo $idd; ?>" style="width:1px;height:1px;" name="product_image<?php echo $idd; ?>" class="img-thumbnail">
      </center>
                <script>
  function readURL<?php echo $idd; ?>(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_image<?php echo $idd; ?>')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script> 
  -->
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Name</span>
                  </div>
          
          
          <input type="hidden" name="unik" value="430992371602c6b5423c26.png" />
          <input type="hidden" name="idc2" value="<?php echo $_GET['id'] ?>" />
                  <input type="hidden" name="idc" value="<?php echo $idd ?>" />
                  <input readonly type="text" name="nama" value="<?php echo $kj2['first_name'] ?> <?php echo $kj2['second_name'] ?>" class="form-control" placeholder="Name" required>
                </div>
        


                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Email</span>
                  </div>
          
          
                  <input type="text" name="nama2" value="<?php echo $kj2['username'] ?>" class="form-control" placeholder="" readonly required>
                </div>




                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Company</span>
                  </div>
          
          
                  <input type="text" name="nama2" value="<?php echo $kj2['company'] ?>" class="form-control" placeholder="" readonly required>
                </div>
        
        
        

                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Address</span>
                  </div>
          
          
                  <input type="text" name="nama2" value="<?php echo $kj2['alamat'] ?>" class="form-control" placeholder="" readonly required>
                </div>

        
        <?php 
        date_default_timezone_set('Asia/Jakarta');
        $hariini = date('Y-m-d');
        
        $nb = mysqli_query($koneksi,"select * from tb_order_aktif where id_user = '$idd'");
        while($nb2 = mysqli_fetch_array($nb)){
        
        if($nb2['tanggal_akhir'] <= $hariini){}else{
        
        ?>
        
         <div class="row" style="border:1px #707070 solid;border-radius:10px;margin-left:10px;margin-right:10px;margin-bottom:3px;">
            <div class="col">

               
            <?php echo $nb2['nama_kegiatan'] ?>              
            </div>


      <div class="col-auto">
             
                <?php 
        
        $st = $nb2['tanggal_akhir'];

$st = date('D, d M Y', strtotime($st . ' +0 day'));

        ?>    
            Aktif sampai: <?php echo $st ?>                            
            </div>
      </div>
        
        <?php } } ?>
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="updatekategori" class="btn btn-primary">Batalkan</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
            
             <?php $no++;} ?>          
            
            
                                           
                                                </tbody>
        <tfoot>
                <tr>
                    <th>No. </th>
                    <th>Name</th>
                    <th>Email</th>

                  <th>Company</th>
                  <th>Registration Date</th>
                  
                    <th>Options</th>
                </tr>
            </tfoot>
    </table>
    </div>
</div>
   </div>
</div>


<?php }else if($_GET['p'] == "semua_user"){ ?>
<div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
<?php 
include('../db.php');
$qw = mysqli_query($koneksi,"select * from user ");
$qw2 = mysqli_fetch_array($qw);
?>


                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Semua user                 </h4>
            </div>

<!--
      <div class="col-auto">
                <a href="" data-toggle="modal" data-target="#modaltambah" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">

                       1. Tambah Data
                    </span>
                </a>
            </div>
  -->   
      
       <div class="modal fade" id="modaltambah">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data (<?php echo $qw2['nama_menu'] ?>)</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                
<?php 
if(isset($_POST['tambahproduk2'])){
if(($_POST['nama'])){

include('../db.php');






$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link']['tmp_name'];
    $fn = $_FILES['image_link']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_link']['name'];


 
if($namaa == null){
mysqli_query($koneksi,"insert into tb_demar2 (id_kategori,judul,judul2,short_desc,long_desc) values
('$_POST[idc2]','$_POST[nama]','$_POST[nama2]','$_POST[short_desc]','$_POST[long_deskripsi]')
");
}else{
  
move_uploaded_file($_FILES['image_link']['tmp_name'],"../images/menu/".$_FILES['image_link']['name']);
mysqli_query($koneksi,"insert into tb_demar2 (gambar,id_kategori,judul,judul2,short_desc,long_desc) values
('$namaa','$_POST[idc2]','$_POST[nama]','$_POST[nama2]','$_POST[short_desc]','$_POST[long_deskripsi]')
"); 
}
?>
<script>
alert('Data berhasil ditambahkan<?php echo mysqli_error($koneksi); ?>');
location = "?p=rincian&id=<?php echo $_POST['idc2'] ?>";
</script>



<?php }else{
?>
<script>
alert("Failed");
</script>
<?php
}

}//else{
  ?>
<!-- <script>
alert("Failed");
</script> -->
  <?php
//}


?>

      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="height:70vh;overflow:scroll;">
            
       <input onchange="readURLe(this);" type="file" name="image_link" class="form-control" />
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_imagee" style="width:1px;height:1px;" name="product_imagee" class="img-thumbnail">
      </center>
                <script>
  function readURLe(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_imagee')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script>  
  
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Nama</span>
                  </div>

                  <input type="hidden" name="idc2" value="<?php echo $_GET['id'] ?>" />
                          
          
          <input type="hidden" name="unik" value="578866556602c6b54236d7.png" />
                
                  <input type="text" name="nama" value="" class="form-control" placeholder="Nama" required>
                </div>

                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Nama (Tablayout)</span>
                  </div>

                  <input type="text" name="nama2" value="" class="form-control" placeholder="Nama (Tablayout)" required>
                </div>

        <!-- <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Kategori</span>
                  </div>
          <select name="kategori" class="form-control" required>
                  <option value="" >- kategori -</option>
                    <option value="19" >Layanan Service</option>
                    <option value="21" >Rental Mesin Fotocopy</option>
                    <option value="23" >Jual Mesin Fotocopy</option>
                    <option value="25" >Spare part</option>
                          </select>
        </div>
            <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Harga</span>
                  </div>
                  <input type="number" name="harga" value="" class="form-control" placeholder="harga" required>
                </div>
        <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Short Desc</span>
                  </div>
                  <input type="text" name="short" value="" class="form-control" placeholder="Short Desc" required>
                </div>
        
        
           -->
        <div>Short Desc</div>        
                <textarea class="form-control" name="short_desc" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
             
             
                          <div style="margin-top:15px">Long Desc</div>        
                <textarea class="form-control" name="long_deskripsi" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" ></textarea>
             
          
        
        
        
        
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahproduk2" class="btn btn-primary">Add</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
            
                                           
                   <?php 
                   include('../db.php');
                   $kj = mysqli_query($koneksi,"select * from user order by idUser desc");


                   ?>                            
     <?php 
if(isset($_POST['updatekategori'])){

    
if(($_POST['nama'])){





$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link']['tmp_name'];
    $fn = $_FILES['image_link']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_link']['name'];

move_uploaded_file($_FILES['image_link']['tmp_name'],"../images/menu/".$_FILES['image_link']['name']);






    if($_FILES['image_link']['name'] == null){
mysqli_query($koneksi,"update user set verifikasi_admin = 'sudah'
where idUser = '$_POST[idc]'
");
  }else{
    
mysqli_query($koneksi,"update user set verifikasi_admin = 'sudah'
where idUser = '$_POST[idc]'
");   
    
  }


  
  
  
  
  $kg = mysqli_query($koneksi,"select * from user where idUser = '$_POST[idc]'");
  $kg2 = mysqli_fetch_array($kg);
  
    if(empty($kg2['first_name'])){
       $namanya = $kg2['username'];
  }else{
           $namanya = $kg2['first_name']." ".$kg2['second_name'];
  }
 
  
    $to = "indonesie@ufe.org,abusatch@gmail.com,".$kg2['username'];
$subject = "Compte a été confirmé";

$message = "
<html>
<head>
<title>UFE Indonésie</title>
</head>
<body>
    <fieldset style='text-align:left;border:1px solid #D1D1D1;padding:10px;border-radius:3px;max-width:600px;'>
<table style='width:100%;'>
<tr style='padding:10px 10px 10px 10px;'>
<th style='width:100%;text-align:right;'><img src='https://ufe-section-indonesie.org/pages/wp-content/uploads/2017/11/Asset-2.png' style='width:150px;'/></th>
</tr>
</table>
<table style='width:100%;border-top:1px solid #D1D1D1;margin-top:5px;'>
    <tr>
        <th></th>
    </tr>
    </table>

<p style='font-size:15px;'>Bonjour ".$namanya." <br><br>Votre compte a été approuvé par l’Administrateur
</p>
<table>

<tr>
<td style='font-size:20px;'><b>".$randd."</b></td>
</tr>
</table>
<table style='width:100%;border-top:1px solid #D1D1D1;margin-top:20px;'>
    <tr>
        <th></th>
    </tr>
    </table>
<table style='width:100%;margin-top:5px;'>
<tr><th style='font-size:20px;text-align:left;'>
UFE Section Indonésie</th></tr></table>

<table style='width:100%;'>
<tr><td style='font-size:15px;'>
Jakarta - Indonésie<br>
e-mail: indonesie@ufe.org<br>
site internet: ufe-section-indonesie.org
</td></tr></table>
</fieldset>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: UFE Indonésie<info@ufe-section-indonesie.org>' . "\r\n";
$headers .= 'Cc: abusatch@gmail.com' . "\r\n";

mail($to,$subject,$message,$headers);

        
        
        
        
        
class startSendNotification
{
  
    function sendNoti($titleNoti, $bodyNoti,$gambarrr){

    define( 'API_ACCESS_KEY', 'AAAARVfjooY:APA91bEAKbWGNffjb80WnOsnE4U_iNWJOUhW1UqiMsnLiJXah2oFmEcn2Y5EcBvUeCWHWgAfBwmFZHhnCdKvyvrUf4m7okrNCICisXtzNyxfKu4F8FxfhXcnxPICACaUrLQJekNqYZPy');
        include('../db.php');

    $ewww = mysqli_query($koneksi,"select * from user where idUser = '$_POST[idc]'");
while ($tyu = mysqli_fetch_array($ewww)){
  
  
$qw[] = $tyu['token_push'];

}
    $fcmMsg = array(
      'title' => $titleNoti,
      'body' => $bodyNoti,
            'image' => $gambarrr,
                  'sound' => 'default',
            'icon' => 'image/look24-logo-s.png'
            
//      'click_action' => $actionNoti
    );
    
    $fcmFields = array(
    //  'to' => "e2Ns7U3A0GI:APA91bFVM1soWWG-MrQAsjkiuxgkMdnDdZY3jKzYnhzcx4bJFblyuAdBTkiocnrJNBOWCQuieQVNoOWIttpknML46HF-zgjeEHsm9iGvZ4wfyShCKVX-BO83yLSnq4AoVhIUvqXT2sYq",
    //  'registration_ids' => $registrationIDs,
      'registration_ids' => $qw,
      
      'priority' => 'high',
      'notification' => $fcmMsg
    );

    $headers = array(
      'Authorization: key=' . API_ACCESS_KEY,
      'Content-Type: application/json'
    );
    
    $ch = curl_init();
    curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
    curl_setopt( $ch,CURLOPT_POST, true );
    curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
    curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
    curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
    curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fcmFields ) );
    $result = curl_exec($ch );
    curl_close( $ch );
    echo $result . "\n\n".$qw;
  }

}
$bagian = $_GET['dsafds'];
$nama = $_GET['fdfvcx'];
$tujuan = $_GET['vsde'];


// include ('koneksi3.php');

// $iu = mysqli_query($con,"select * from temanuser where idtemanuser = '$_POST[dari]'");
// $iu2 = mysqli_fetch_array($iu);


include('../db.php');

$fro = mysqli_query($koneksi,"select * from tb_actualite order by id_actualite desc");
$fro2 = mysqli_fetch_array($fro);



// How to use
$titleNoti = "Bonjour ".$namanya;
$bodyNoti = "Votre compte a été confirmé par l'administrateur";
$actionNoti = "https://medium.com/@ptuckyeagle";
$gambarrr = "https://ufe-section-indonesie.org/ufeapp/confirmed.jpeg";
$callNoti = new startSendNotification();



//$callNoti->sendNoti($titleNoti, $bodyNoti, $actionNoti);
$callNoti->sendNoti($titleNoti, $bodyNoti,$gambarrr);

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
if($_FILES['image_link']['name'] == null){

?>

<script>
alert("Data changed successfully <?php echo mysqli_error($koneksi); ?>");
location = "?p=user_personal_belum_dikonfirmasi";

</script>

<?php }else{ ?>

<script>
alert("Data changed successfully <?php echo mysqli_error($koneksi); ?>");
location = "?p=rincian&id=<?php echo $_POST['idc2'] ?>";

</script>


<?php } ?>

<?php 
 } 
}
 ?>
    <div class="table-responsive" style="padding:5px;">
        <table class="table table-striped w-100 dt-responsive nowrap" id="example">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Nama</th>
                    <th>Email</th>
          <th>Telp</th>
          <th>Kode Verif</th>
          <th>Verifikasi email</th>
                  <th>Company</th>
                  <th>Tgl Daftar</th>
          <th>Token</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $no = 1;
            while($kj2 = mysqli_fetch_array($kj)){
            $idd = $kj2['idUser'];
      $tanggal_awal = $kj2['tanggal2'];
      $tanggal_akhir = date('H:i Y-m-d', strtotime($tanggal_awal . ' +1 year'));
            ?>

                                              <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $kj2['first_name'] ?> <?php echo $kj2['second_name'] ?></td>
                            <td><?php echo $kj2['username'] ?></td>
               <td><?php echo $kj2['phone'] ?></td>
                <td><?php echo $kj2['kode_verif'] ?></td>
                 <td><?php echo $kj2['verifikasi'] ?></td>
                 
                                          <td><?php echo $kj2['company'] ?></td>
                                                     <td><?php echo $kj2['tgl_daftar'] ?></td>
                            <td><?php echo $kj2['token_push'] ?></td>
              <td>


                                <a data-toggle="modal" data-target="#modal-lg_<?php echo $idd ?>" href="" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-eye"></i></a>
         
                 <a href="kirimulangkode.php?id=<?php echo $idd ?>&p=<?php echo $_GET['p'] ?>" class="btn btn-danger btn-circle btn-sm">Kirim ulang kode
                                &nbsp;&nbsp;&nbsp;
                                <i class="far fa-paper-plane"></i></a>
  <!--              
                 <a href="hapustbdemar2.php?id=<?php //echo $idd ?>&idc=<?php //echo $_GET['id'] ?>" class="btn btn-danger btn-circle btn-sm">Hapus
                                &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-trash"></i></a>
-->

                            </td>
                        </tr
                        >
            
            
        <div class="modal fade" id="modal-lg_<?php echo $idd; ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
<?php 
$rt = mysqli_query($koneksi,"select * from user where idUser = '$idd'");
$rt2 = mysqli_fetch_array($rt);
?>

              <h4 class="modal-title">12. Edit <?php echo $rt2['username'] ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            



      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="overflow:scroll;height:70vh">

      
      
      
            
      <center>
              <img src="https://ufe-section-indonesie.org/ufeapp/images/propic/<?php echo $kj2['propic'] ?>"  style="width:200px;" />
      </center> 
      <!--
    <input onchange="readURL<?php echo $idd; ?>(this);" type="file" name="image_link" class="form-control"/>
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_image<?php echo $idd; ?>" style="width:1px;height:1px;" name="product_image<?php echo $idd; ?>" class="img-thumbnail">
      </center>
                <script>
  function readURL<?php echo $idd; ?>(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_image<?php echo $idd; ?>')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script> 
  -->
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Nama</span>
                  </div>
          
          
          <input type="hidden" name="unik" value="430992371602c6b5423c26.png" />
          <input type="hidden" name="idc2" value="<?php echo $_GET['id'] ?>" />
                  <input type="hidden" name="idc" value="<?php echo $idd ?>" />
                  <input readonly type="text" name="nama" value="<?php echo $kj2['first_name'] ?> <?php echo $kj2['second_name'] ?>" class="form-control" placeholder="Nama" required>
                </div>
        


                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Email</span>
                  </div>
          
          
                  <input type="text" name="nama2" value="<?php echo $kj2['username'] ?>" class="form-control" placeholder="" readonly required>
                </div>




                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Company</span>
                  </div>
          
          
                  <input type="text" name="nama2" value="<?php echo $kj2['company'] ?>" class="form-control" placeholder="" readonly required>
                </div>
        
        
        

                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Address</span>
                  </div>
          
          
                  <input type="text" name="nama2" value="<?php echo $kj2['alamat'] ?>" class="form-control" placeholder="" readonly required>
                </div>

        <!-- <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Kategori</span>
                  </div>
          <select name="kategori" class="form-control" required>
                  <option value="23" >Jual Mesin Fotocopy</option>
                    <option value="19" >Layanan Service</option>
                    <option value="21" >Rental Mesin Fotocopy</option>
                    <option value="25" >Spare part</option>
                          </select>
        </div> -->
            <!-- <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Harga</span>
                  </div>
                  <input type="number" name="harga" value="8000000" class="form-control" placeholder="harga" required>
                </div>
        <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Short Desc</span>
                  </div>
                  <input type="text" name="short" value="XploitSec-ID" class="form-control" placeholder="Short Desc" required>
                </div> -->
        
        <!--
          <div>
                Alamat
               </div>-->
              <!--
          <textarea class="form-control" name="deskripsi" placeholder="Place some text here"
              
                           required><?php echo $kj2['alamat'] ?></textarea>-->
             <!--
             <div style="margin-top:15px;">
                           Long Desc
                </div> -->
            <!--    <textarea class="form-control" name="long_deskripsi" placeholder="Place some text here"
              
                          ><?php echo $kj2['long_desc'] ?></textarea>
             -->
             
        
        
        
        
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="updatekategori" class="btn btn-primary">Accept</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
            
             <?php $no++;} ?>          
            
            
                                           
                                                </tbody>
        <tfoot>
                <tr>
                    <th>No. </th>
                    <th>Nama</th>
                    <th>Email</th>
          <th>Telp</th>
          <th>Kode Verif</th>
          <th>Verifikasi email</th>
                  <th>Company</th>
                  <th>Tgl Daftar</th>
          <th>Token</th>
                    <th>Opsi</th>
                </tr>
            </tfoot>
    </table>
    </div>
</div>
   </div>
</div>

<?php }else if($_GET['p'] == "block_need_confirm"){ 
include('block_need_confirm.php');

  ?>
<?php }else if($_GET['p'] == "block_confirmed"){ 
include('block_confirmed.php');

  ?>


<?php }else if($_GET['p'] == "user_personal_belum_dikonfirmasi"){ ?>
<div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
<?php 
include('../db.php');
$qw = mysqli_query($koneksi,"select * from user where level = 'personal' and verifikasi_admin = 'belum'");
$qw2 = mysqli_fetch_array($qw);
?>


               <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="?p=tb_dm_1">Home</a></li>
    
              <li class="breadcrumb-item active">Personal user not confirmed</li>
                            </ol>
            </div>

<!--
      <div class="col-auto">
                <a href="" data-toggle="modal" data-target="#modaltambah" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">

                       1. Tambah Data
                    </span>
                </a>
            </div>
  -->   
      
       <div class="modal fade" id="modaltambah">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add (<?php echo $qw2['nama_menu'] ?>)</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                
<?php 
if(isset($_POST['tambahproduk2'])){
if(($_POST['nama'])){

include('../db.php');






$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link']['tmp_name'];
    $fn = $_FILES['image_link']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_link']['name'];


 
if($namaa == null){
mysqli_query($koneksi,"insert into tb_demar2 (id_kategori,judul,judul2,short_desc,long_desc) values
('$_POST[idc2]','$_POST[nama]','$_POST[nama2]','$_POST[short_desc]','$_POST[long_deskripsi]')
");
}else{
  
move_uploaded_file($_FILES['image_link']['tmp_name'],"../images/menu/".$_FILES['image_link']['name']);
mysqli_query($koneksi,"insert into tb_demar2 (gambar,id_kategori,judul,judul2,short_desc,long_desc) values
('$namaa','$_POST[idc2]','$_POST[nama]','$_POST[nama2]','$_POST[short_desc]','$_POST[long_deskripsi]')
"); 
}
?>
<script>
alert('Data berhasil ditambahkan<?php echo mysqli_error($koneksi); ?>');
location = "?p=rincian&id=<?php echo $_POST['idc2'] ?>";
</script>



<?php }else{
?>
<script>
alert("Failed");
</script>
<?php
}

}//else{
  ?>
<!-- <script>
alert("Failed");
</script> -->
  <?php
//}


?>

      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="height:70vh;overflow:scroll;">
            
       <input onchange="readURLe(this);" type="file" name="image_link" class="form-control" />
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_imagee" style="width:1px;height:1px;" name="product_imagee" class="img-thumbnail">
      </center>
                <script>
  function readURLe(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_imagee')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script>  
  
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Name</span>
                  </div>

                  <input type="hidden" name="idc2" value="<?php echo $_GET['id'] ?>" />
                          
          
          <input type="hidden" name="unik" value="578866556602c6b54236d7.png" />
                
                  <input type="text" name="nama" value="" class="form-control" placeholder="Name" required>
                </div>

                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Name (Tablayout)</span>
                  </div>

                  <input type="text" name="nama2" value="" class="form-control" placeholder="Name (Tablayout)" required>
                </div>
        <div>Short Desc</div>        
                <textarea class="form-control" name="short_desc" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
             
             
                          <div style="margin-top:15px">Long Desc</div>        
                <textarea class="form-control" name="long_deskripsi" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" ></textarea>
             
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahproduk2" class="btn btn-primary">Add</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
            
                                           
                   <?php 
                   include('../db.php');
                   $kj = mysqli_query($koneksi,"select * from user where level = 'personal' and verifikasi_admin = 'belum' order by idUser desc");


                   ?>                            
     <?php 
if(isset($_POST['updatekategori'])){

    
if(($_POST['nama'])){





$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link']['tmp_name'];
    $fn = $_FILES['image_link']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_link']['name'];

move_uploaded_file($_FILES['image_link']['tmp_name'],"../images/menu/".$_FILES['image_link']['name']);






    if($_FILES['image_link']['name'] == null){
mysqli_query($koneksi,"update user set verifikasi_admin = 'sudah'
where idUser = '$_POST[idc]'
");
  }else{
    
mysqli_query($koneksi,"update user set verifikasi_admin = 'sudah', device_id = ''
where idUser = '$_POST[idc]'
");   
    
  }


  
  
  
  
  $kg = mysqli_query($koneksi,"select * from user where idUser = '$_POST[idc]'");
  $kg2 = mysqli_fetch_array($kg);
  
    if(empty($kg2['first_name'])){
       $namanya = $kg2['username'];
  }else{
           $namanya = $kg2['first_name']." ".$kg2['second_name'];
  }
 
  
  
    $to = "indonesie@ufe.org,abusatch@gmail.com,".$kg2['username'];
$subject = "Compte a été confirmé";

$message = "
<html>
<head>
<title>UFE Indonésie</title>
</head>
<body>
    <fieldset style='text-align:left;border:1px solid #D1D1D1;padding:10px;border-radius:3px;max-width:600px;'>
<table style='width:100%;'>
<tr style='padding:10px 10px 10px 10px;'>
<th style='width:100%;text-align:right;'><img src='https://ufe-section-indonesie.org/pages/wp-content/uploads/2017/11/Asset-2.png' style='width:150px;'/></th>
</tr>
</table>
<table style='width:100%;border-top:1px solid #D1D1D1;margin-top:5px;'>
    <tr>
        <th></th>
    </tr>
    </table>

<p style='font-size:15px;'>Bonjour ".$namanya." <br><br>Votre compte a été approuvé par l’Administrateur
</p>
<table>

<tr>
<td style='font-size:20px;'><b>".$randd."</b></td>
</tr>
</table>
<table style='width:100%;border-top:1px solid #D1D1D1;margin-top:20px;'>
    <tr>
        <th></th>
    </tr>
    </table>
<table style='width:100%;margin-top:5px;'>
<tr><th style='font-size:20px;text-align:left;'>
UFE Section Indonésie</th></tr></table>

<table style='width:100%;'>
<tr><td style='font-size:15px;'>
Jakarta - Indonésie<br>
e-mail: indonesie@ufe.org<br>
site internet: ufe-section-indonesie.org
</td></tr></table>
</fieldset>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: UFE Indonésie<indonesie@ufe.org>' . "\r\n";
$headers .= 'Cc: abusatch@gmail.com' . "\r\n";

mail($to,$subject,$message,$headers);

        
        
        
        
        
class startSendNotification
{
  
    function sendNoti($titleNoti, $bodyNoti,$gambarrr){

    define( 'API_ACCESS_KEY', 'AAAARVfjooY:APA91bEAKbWGNffjb80WnOsnE4U_iNWJOUhW1UqiMsnLiJXah2oFmEcn2Y5EcBvUeCWHWgAfBwmFZHhnCdKvyvrUf4m7okrNCICisXtzNyxfKu4F8FxfhXcnxPICACaUrLQJekNqYZPy');
        include('../db.php');

    $ewww = mysqli_query($koneksi,"select * from user where idUser = '$_POST[idc]'");
while ($tyu = mysqli_fetch_array($ewww)){
  
  
$qw[] = $tyu['token_push'];

}
    $fcmMsg = array(
      'title' => $titleNoti,
      'body' => $bodyNoti,
            'image' => $gambarrr,
                  'sound' => 'default',
            'icon' => 'image/look24-logo-s.png'
//      'click_action' => $actionNoti
    );
    
    $fcmFields = array(
    //  'to' => "e2Ns7U3A0GI:APA91bFVM1soWWG-MrQAsjkiuxgkMdnDdZY3jKzYnhzcx4bJFblyuAdBTkiocnrJNBOWCQuieQVNoOWIttpknML46HF-zgjeEHsm9iGvZ4wfyShCKVX-BO83yLSnq4AoVhIUvqXT2sYq",
    //  'registration_ids' => $registrationIDs,
      'registration_ids' => $qw,
      
      'priority' => 'high',
      'notification' => $fcmMsg
    );

    $headers = array(
      'Authorization: key=' . API_ACCESS_KEY,
      'Content-Type: application/json'
    );
    
    $ch = curl_init();
    curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
    curl_setopt( $ch,CURLOPT_POST, true );
    curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
    curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
    curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
    curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fcmFields ) );
    $result = curl_exec($ch );
    curl_close( $ch );
    echo $result . "\n\n".$qw;
  }

}
$bagian = $_GET['dsafds'];
$nama = $_GET['fdfvcx'];
$tujuan = $_GET['vsde'];


// include ('koneksi3.php');

// $iu = mysqli_query($con,"select * from temanuser where idtemanuser = '$_POST[dari]'");
// $iu2 = mysqli_fetch_array($iu);


include('../db.php');

$fro = mysqli_query($koneksi,"select * from tb_actualite order by id_actualite desc");
$fro2 = mysqli_fetch_array($fro);



// How to use
$titleNoti = "Bonjour ".$namanya;
$bodyNoti = "Votre compte a été confirmé par l'administrateur";
$actionNoti = "https://medium.com/@ptuckyeagle";
$gambarrr = "https://ufe-section-indonesie.org/ufeapp/confirmed.jpeg";
$callNoti = new startSendNotification();



//$callNoti->sendNoti($titleNoti, $bodyNoti, $actionNoti);
$callNoti->sendNoti($titleNoti, $bodyNoti,$gambarrr);

  
  
if($_FILES['image_link']['name'] == null){

?>

<script>
alert("Data changed successfully <?php echo mysqli_error($koneksi); ?>");
location = "?p=user_personal_belum_dikonfirmasi";

</script>

<?php }else{ ?>

<script>
alert("Data changed successfully <?php echo mysqli_error($koneksi); ?>");
location = "?p=rincian&id=<?php echo $_POST['idc2'] ?>";

</script>


<?php } ?>

<?php 
 } 
}
 ?>
    <div class="table-responsive" style="padding:5px;">
        <table class="table table-striped w-100 dt-responsive nowrap" id="dataTable">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Name</th>
                    <th>Email</th>
          <th>Phone</th>
          <th>Verification Code</th>
          <th>Email Verification</th>
                  <th>Company</th>
                  <th>Registration Date</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $no = 1;
            while($kj2 = mysqli_fetch_array($kj)){
            $idd = $kj2['idUser'];
      $tanggal_awal = $kj2['tanggal2'];
      $tanggal_akhir = date('H:i Y-m-d', strtotime($tanggal_awal . ' +1 year'));
            ?>

                                              <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $kj2['first_name'] ?> <?php echo $kj2['second_name'] ?></td>
                            <td><?php echo $kj2['username'] ?></td>
               <td><?php echo $kj2['phone'] ?></td>
                <td><?php echo $kj2['kode_verif'] ?></td>
                 <td><?php echo $kj2['verifikasi'] ?></td>
                 
                                          <td><?php echo $kj2['company'] ?></td>
                                                     <td><?php echo $kj2['tgl_daftar'] ?></td>
                            
              <td>


                                <a data-toggle="modal" data-target="#modal-lg_<?php echo $idd ?>" href="" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-eye"></i></a>
          
                 <a href="kirimulangkode.php?id=<?php echo $idd ?>&p=<?php echo $_GET['p'] ?>" class="btn btn-danger btn-circle btn-sm">resend code
                                &nbsp;&nbsp;&nbsp;
                                <i class="far fa-paper-plane"></i></a>
  <!--              
                 <a href="hapustbdemar2.php?id=<?php //echo $idd ?>&idc=<?php //echo $_GET['id'] ?>" class="btn btn-danger btn-circle btn-sm">Hapus
                                &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-trash"></i></a>
-->

                            </td>
                        </tr
                        >
            
            
        <div class="modal fade" id="modal-lg_<?php echo $idd; ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
<?php 
$rt = mysqli_query($koneksi,"select * from user where idUser = '$idd'");
$rt2 = mysqli_fetch_array($rt);
?>

              <h4 class="modal-title">Edit <?php echo $rt2['username'] ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            



      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="overflow:scroll;height:70vh">

      
      
      
            
      <center>
              <img src="https://ufe-section-indonesie.org/ufeapp/images/propic/<?php echo $kj2['propic'] ?>"  style="width:200px;" />
      </center> 
      <!--
    <input onchange="readURL<?php echo $idd; ?>(this);" type="file" name="image_link" class="form-control"/>
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_image<?php echo $idd; ?>" style="width:1px;height:1px;" name="product_image<?php echo $idd; ?>" class="img-thumbnail">
      </center>
                <script>
  function readURL<?php echo $idd; ?>(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_image<?php echo $idd; ?>')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script> 
  -->
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Name</span>
                  </div>
          
          
          <input type="hidden" name="unik" value="430992371602c6b5423c26.png" />
          <input type="hidden" name="idc2" value="<?php echo $_GET['id'] ?>" />
                  <input type="hidden" name="idc" value="<?php echo $idd ?>" />
                  <input readonly type="text" name="nama" value="<?php echo $kj2['first_name'] ?> <?php echo $kj2['second_name'] ?>" class="form-control" placeholder="Name" required>
                </div>
        


                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Email</span>
                  </div>
          
          
                  <input type="text" name="nama2" value="<?php echo $kj2['username'] ?>" class="form-control" placeholder="" readonly required>
                </div>




                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Company</span>
                  </div>
          
          
                  <input type="text" name="nama2" value="<?php echo $kj2['company'] ?>" class="form-control" placeholder="" readonly required>
                </div>
        
        
        

                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Address</span>
                  </div>
          
          
                  <input type="text" name="nama2" value="<?php echo $kj2['alamat'] ?>" class="form-control" placeholder="" readonly required>
                </div>
 
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>




              <button type="submit" name="updatekategori" class="btn btn-primary">Accept</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
            
             <?php $no++;} ?>          
            
            
                                           
                                                </tbody>
        </table>
    </div>
</div>
   </div>
</div>

<?php }else if($_GET['p'] == "user_vip_belum_dikonfirmasi"){ ?>
 <div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
<?php 
include('../db.php');
$qw = mysqli_query($koneksi,"select * from user where level = 'vip-admin' and verifikasi_admin = 'belum'");
$qw2 = mysqli_fetch_array($qw);
?>


          <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="?p=tb_dm_1">Home</a></li>
    
              <li class="breadcrumb-item active">VIP user not confirmed</li>
                            </ol>
            </div>

<!--
      <div class="col-auto">
                <a href="" data-toggle="modal" data-target="#modaltambah" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">

                       1. Add
                    </span>
                </a>
            </div>
  -->   
      
       <div class="modal fade" id="modaltambah">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add (<?php echo $qw2['nama_menu'] ?>)</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                
<?php 
if(isset($_POST['tambahproduk2'])){
if(($_POST['nama'])){

include('../db.php');






$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link']['tmp_name'];
    $fn = $_FILES['image_link']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_link']['name'];


 
if($namaa == null){
mysqli_query($koneksi,"insert into tb_demar2 (id_kategori,judul,judul2,short_desc,long_desc) values
('$_POST[idc2]','$_POST[nama]','$_POST[nama2]','$_POST[short_desc]','$_POST[long_deskripsi]')
");
}else{
  
move_uploaded_file($_FILES['image_link']['tmp_name'],"../images/menu/".$_FILES['image_link']['name']);
mysqli_query($koneksi,"insert into tb_demar2 (gambar,id_kategori,judul,judul2,short_desc,long_desc) values
('$namaa','$_POST[idc2]','$_POST[nama]','$_POST[nama2]','$_POST[short_desc]','$_POST[long_deskripsi]')
"); 
}
?>
<script>
alert('Data berhasil ditambahkan<?php echo mysqli_error($koneksi); ?>');
location = "?p=rincian&id=<?php echo $_POST['idc2'] ?>";
</script>



<?php }else{
?>
<script>
alert("Failed");
</script>
<?php
}

}//else{
  ?>
<!-- <script>
alert("Failed");
</script> -->
  <?php
//}


?>

      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="height:70vh;overflow:scroll;">
            
       <input onchange="readURLe(this);" type="file" name="image_link" class="form-control" />
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_imagee" style="width:1px;height:1px;" name="product_imagee" class="img-thumbnail">
      </center>
                <script>
  function readURLe(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_imagee')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script>  
  
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Name</span>
                  </div>

                  <input type="hidden" name="idc2" value="<?php echo $_GET['id'] ?>" />
                          
          
          <input type="hidden" name="unik" value="578866556602c6b54236d7.png" />
                
                  <input type="text" name="nama" value="" class="form-control" placeholder="Name" required>
                </div>

                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Name (Tablayout)</span>
                  </div>

                  <input type="text" name="nama2" value="" class="form-control" placeholder="Name (Tablayout)" required>
                </div>

        <!-- <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Kategori</span>
                  </div>
          <select name="kategori" class="form-control" required>
                  <option value="" >- kategori -</option>
                    <option value="19" >Layanan Service</option>
                    <option value="21" >Rental Mesin Fotocopy</option>
                    <option value="23" >Jual Mesin Fotocopy</option>
                    <option value="25" >Spare part</option>
                          </select>
        </div>
            <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Harga</span>
                  </div>
                  <input type="number" name="harga" value="" class="form-control" placeholder="harga" required>
                </div>
        <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Short Desc</span>
                  </div>
                  <input type="text" name="short" value="" class="form-control" placeholder="Short Desc" required>
                </div>
        
        
           -->
        <div>Short Desc</div>        
                <textarea class="form-control" name="short_desc" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
             
             
                          <div style="margin-top:15px">Long Desc</div>        
                <textarea class="form-control" name="long_deskripsi" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" ></textarea>
             
          
        
        
        
        
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahproduk2" class="btn btn-primary">Add</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
            
                                           
                   <?php 
                   include('../db.php');
                   $kj = mysqli_query($koneksi,"select * from user where level = 'vip-admin' and verifikasi_admin = 'belum' order by idUser desc");


                   ?>                            
     <?php 
if(isset($_POST['updatekategori'])){

    
if(($_POST['nama']) || ($_POST['deskripsi'])){





$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link']['tmp_name'];
    $fn = $_FILES['image_link']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_link']['name'];


$rand = rand(1000,9999);


move_uploaded_file($_FILES['image_link']['tmp_name'],"../images/menu/".$_FILES['image_link']['name']);

    if($_FILES['image_link']['name'] == null){
mysqli_query($koneksi,"update user set verifikasi_admin = 'sudah',
kode_vip = '$rand'
where idUser = '$_POST[idc]'
");
  }else{
    
mysqli_query($koneksi,"update user set verifikasi_admin = 'sudah',
kode_vip = '$rand'

where idUser = '$_POST[idc]'
");   
    
  }


  
  
  
  $kg = mysqli_query($koneksi,"select * from user where idUser = '$_POST[idc]'");
  $kg2 = mysqli_fetch_array($kg);
  
    if(empty($kg2['first_name'])){
       $namanya = $kg2['username'];
  }else{
           $namanya = $kg2['first_name']." ".$kg2['second_name'];
  }
 
  
    $to = "indonesie@ufe.org,abusatch@gmail.com,".$kg2['username'];
$subject = "Compte a été confirmé";

$message = "
<html>
<head>
<title>UFE Indonésie</title>
</head>
<body>
    <fieldset style='text-align:left;border:1px solid #D1D1D1;padding:10px;border-radius:3px;max-width:600px;'>
<table style='width:100%;'>
<tr style='padding:10px 10px 10px 10px;'>
<th style='width:100%;text-align:right;'><img src='https://ufe-section-indonesie.org/pages/wp-content/uploads/2017/11/Asset-2.png' style='width:150px;'/></th>
</tr>
</table>
<table style='width:100%;border-top:1px solid #D1D1D1;margin-top:5px;'>
    <tr>
        <th></th>
    </tr>
    </table>

<p style='font-size:15px;'>Bonjour ".$namanya." <br><br>Votre compte a été approuvé par l’Administrateur
<br><br>
Code VIP: ".$kg2['kode_vip']."
</p>
<table>

<tr>
<td style='font-size:20px;'><b>".$randd."</b></td>
</tr>
</table>
<table style='width:100%;border-top:1px solid #D1D1D1;margin-top:20px;'>
    <tr>
        <th></th>
    </tr>
    </table>
<table style='width:100%;margin-top:5px;'>
<tr><th style='font-size:20px;text-align:left;'>
UFE Section Indonésie</th></tr></table>

<table style='width:100%;'>
<tr><td style='font-size:15px;'>
Jakarta - Indonésie<br>
e-mail: indonesie@ufe.org<br>
site internet: ufe-section-indonesie.org
</td></tr></table>
</fieldset>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: UFE Indonésie<info@ufe-section-indonesie.org>' . "\r\n";
$headers .= 'Cc: abusatch@gmail.com' . "\r\n";

mail($to,$subject,$message,$headers);

        
        
        
        
        
class startSendNotification
{
  
    function sendNoti($titleNoti, $bodyNoti,$gambarrr){

    define( 'API_ACCESS_KEY', 'AAAARVfjooY:APA91bEAKbWGNffjb80WnOsnE4U_iNWJOUhW1UqiMsnLiJXah2oFmEcn2Y5EcBvUeCWHWgAfBwmFZHhnCdKvyvrUf4m7okrNCICisXtzNyxfKu4F8FxfhXcnxPICACaUrLQJekNqYZPy');
        include('../db.php');

    $ewww = mysqli_query($koneksi,"select * from user where idUser = '$_POST[idc]'");
while ($tyu = mysqli_fetch_array($ewww)){
  
  
$qw[] = $tyu['token_push'];

}
    $fcmMsg = array(
      'title' => $titleNoti,
      'body' => $bodyNoti,
            'image' => $gambarrr,
                  'sound' => 'default',
            'icon' => 'image/look24-logo-s.png'
//      'click_action' => $actionNoti
    );
    
    $fcmFields = array(
    //  'to' => "e2Ns7U3A0GI:APA91bFVM1soWWG-MrQAsjkiuxgkMdnDdZY3jKzYnhzcx4bJFblyuAdBTkiocnrJNBOWCQuieQVNoOWIttpknML46HF-zgjeEHsm9iGvZ4wfyShCKVX-BO83yLSnq4AoVhIUvqXT2sYq",
    //  'registration_ids' => $registrationIDs,
      'registration_ids' => $qw,
      
      'priority' => 'high',
      'notification' => $fcmMsg
    );

    $headers = array(
      'Authorization: key=' . API_ACCESS_KEY,
      'Content-Type: application/json'
    );
    
    $ch = curl_init();
    curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
    curl_setopt( $ch,CURLOPT_POST, true );
    curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
    curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
    curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
    curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fcmFields ) );
    $result = curl_exec($ch );
    curl_close( $ch );
    echo $result . "\n\n".$qw;
  }

}
$bagian = $_GET['dsafds'];
$nama = $_GET['fdfvcx'];
$tujuan = $_GET['vsde'];


// include ('koneksi3.php');

// $iu = mysqli_query($con,"select * from temanuser where idtemanuser = '$_POST[dari]'");
// $iu2 = mysqli_fetch_array($iu);


include('../db.php');

$fro = mysqli_query($koneksi,"select * from tb_actualite order by id_actualite desc");
$fro2 = mysqli_fetch_array($fro);



// How to use
$titleNoti = "Hello ".$kg2['username'];
$bodyNoti = "Akun Anda telah dikonfirmasi oleh Admin";
$actionNoti = "https://medium.com/@ptuckyeagle";
$gambarrr = "https://ufe-section-indonesie.org/ufeapp/berhasil.png";
$callNoti = new startSendNotification();



//$callNoti->sendNoti($titleNoti, $bodyNoti, $actionNoti);
$callNoti->sendNoti($titleNoti, $bodyNoti,$gambarrr);

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
if($_FILES['image_link']['name'] == null){

?>

<script>
alert("Data changed successfully <?php echo mysqli_error($koneksi); ?>");
location = "?p=user_vip_belum_dikonfirmasi";

</script>

<?php }else{ ?>

<script>
alert("Data changed successfully <?php echo mysqli_error($koneksi); ?>");
location = "?p=rincian&id=<?php echo $_POST['idc2'] ?>";

</script>


<?php } ?>

<?php 
 } 
}
 ?>
    <div class="table-responsive" style="padding:5px;">
        <table class="table table-striped w-100 dt-responsive nowrap" id="dataTable">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
          <th>Verification Code</th>
          <th>Email Verification</th>
          <th>VIP Code</th>
                  <th>Company</th>
                  <th>Registration Date</th>
                  
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $no = 1;
            while($kj2 = mysqli_fetch_array($kj)){
      $ps = $kj2['password']; 
            $idd = $kj2['idUser'];
            ?>

                                              <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $kj2['first_name'] ?> <?php echo $kj2['second_name'] ?></td>
                            <td><?php echo $kj2['username'] ?></td>
               <td><?php echo $kj2['phone'] ?></td>
                <td><?php echo $kj2['kode_verif'] ?></td>
                <td><?php echo $kj2['verifikasi'] ?></td>
                 <td><?php echo $kj2['kode_vip'] ?></td>
                 
                                          <td><?php echo $kj2['company'] ?></td>
                              <td><?php echo $kj2['tgl_daftar'] ?></td>
              <td>


                                <a data-toggle="modal" data-target="#modal-lg_<?php echo $idd ?>" href="" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-eye"></i></a>         
                
              
                 <a href="kirimulangkode.php?id=<?php echo $idd ?>&p=<?php echo $_GET['p'] ?>" class="btn btn-danger btn-circle btn-sm">Resend code
                                &nbsp;&nbsp;&nbsp;
                                <i class="far fa-paper-plane"></i></a>


                            </td>
                        </tr
                        >
            
            
        <div class="modal fade" id="modal-lg_<?php echo $idd; ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
<?php 
$rt = mysqli_query($koneksi,"select * from user where idUser = '$idd'");
$rt2 = mysqli_fetch_array($rt);
?>

              <h4 class="modal-title">11. Edit <?php echo $rt2['username'] ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            



      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="overflow:scroll;height:70vh">

      
      
      
            
      <center>
              <img src="https://ufe-section-indonesie.org/ufeapp/images/propic/<?php echo $kj2['propic'] ?>"  style="width:200px;" />
      </center> 
      <!--
    <input onchange="readURL<?php echo $idd; ?>(this);" type="file" name="image_link" class="form-control"/>
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_image<?php echo $idd; ?>" style="width:1px;height:1px;" name="product_image<?php echo $idd; ?>" class="img-thumbnail">
      </center>
                <script>
  function readURL<?php echo $idd; ?>(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_image<?php echo $idd; ?>')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script> 
  -->
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Name</span>
                  </div>
          
          
          <input type="hidden" name="unik" value="430992371602c6b5423c26.png" />
          <input type="hidden" name="idc2" value="<?php echo $_GET['id'] ?>" />
                  <input type="hidden" name="idc" value="<?php echo $idd ?>" />
                  <input readonly type="text" name="nama" value="<?php echo $kj2['first_name'] ?> <?php echo $kj2['second_name'] ?>" class="form-control" placeholder="Name" required>
                </div>
        


                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Email</span>
                  </div>
          
          
                  <input type="text" name="nama2" value="<?php echo $kj2['username'] ?>" class="form-control" placeholder="" readonly required>
                </div>




                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Company</span>
                  </div>
          
          
                  <input type="text" name="nama2" value="<?php echo $kj2['company'] ?>" class="form-control" placeholder="" readonly required>
                </div>
        
        
        

                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Address</span>
                  </div>
          
          
                  <input type="text" name="nama2" value="<?php echo $kj2['alamat'] ?>" class="form-control" placeholder="" readonly required>
                </div>

        <!-- <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Kategori</span>
                  </div>
          <select name="kategori" class="form-control" required>
                  <option value="23" >Jual Mesin Fotocopy</option>
                    <option value="19" >Layanan Service</option>
                    <option value="21" >Rental Mesin Fotocopy</option>
                    <option value="25" >Spare part</option>
                          </select>
        </div> -->
            <!-- <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Harga</span>
                  </div>
                  <input type="number" name="harga" value="8000000" class="form-control" placeholder="harga" required>
                </div>
        <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Short Desc</span>
                  </div>
                  <input type="text" name="short" value="XploitSec-ID" class="form-control" placeholder="Short Desc" required>
                </div> -->
        
        <!--
          <div>
                Alamat
               </div>-->
              <!--
          <textarea class="form-control" name="deskripsi" placeholder="Place some text here"
              
                           required><?php echo $kj2['alamat'] ?></textarea>-->
             <!--
             <div style="margin-top:15px;">
                           Long Desc
                </div> -->
            <!--    <textarea class="form-control" name="long_deskripsi" placeholder="Place some text here"
              
                          ><?php echo $kj2['long_desc'] ?></textarea>
             -->
             
        
        
        
        
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="updatekategori" class="btn btn-primary">Accept</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
            
             <?php $no++;} ?>          
            
            
                                           
                                                </tbody>
        </table>
    </div>
</div>
   </div>
</div>
<?php }else if($_GET['p'] == "user_vip_sudah_dikonfirmasi"){ ?>
 <div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
<?php 
include('../db.php');
$qw = mysqli_query($koneksi,"select * from user where level = 'vip-admin' and verifikasi_admin = 'sudah'");
$qw2 = mysqli_fetch_array($qw);
?>


              <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="?p=tb_dm_1">Home</a></li>
    
              <li class="breadcrumb-item active">VIP user confirmed</li>
                            </ol>
            </div>

<!--
      <div class="col-auto">
                <a href="" data-toggle="modal" data-target="#modaltambah" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">

                       1. Tambah Data
                    </span>
                </a>
            </div>
  -->   
      
       <div class="modal fade" id="modaltambah">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add (<?php echo $qw2['nama_menu'] ?>)</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                
<?php 
if(isset($_POST['tambahproduk2'])){
if(($_POST['nama'])){

include('../db.php');






$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link']['tmp_name'];
    $fn = $_FILES['image_link']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_link']['name'];


 
if($namaa == null){
mysqli_query($koneksi,"insert into tb_demar2 (id_kategori,judul,judul2,short_desc,long_desc) values
('$_POST[idc2]','$_POST[nama]','$_POST[nama2]','$_POST[short_desc]','$_POST[long_deskripsi]')
");
}else{
  
move_uploaded_file($_FILES['image_link']['tmp_name'],"../images/menu/".$_FILES['image_link']['name']);
mysqli_query($koneksi,"insert into tb_demar2 (gambar,id_kategori,judul,judul2,short_desc,long_desc) values
('$namaa','$_POST[idc2]','$_POST[nama]','$_POST[nama2]','$_POST[short_desc]','$_POST[long_deskripsi]')
"); 
}
?>
<script>
alert('Data berhasil ditambahkan<?php echo mysqli_error($koneksi); ?>');
location = "?p=rincian&id=<?php echo $_POST['idc2'] ?>";
</script>



<?php }else{
?>
<script>
alert("Failed");
</script>
<?php
}

}//else{
  ?>
<!-- <script>
alert("Failed");
</script> -->
  <?php
//}


?>

      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="height:70vh;overflow:scroll;">
            
       <input onchange="readURLe(this);" type="file" name="image_link" class="form-control" />
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_imagee" style="width:1px;height:1px;" name="product_imagee" class="img-thumbnail">
      </center>
                <script>
  function readURLe(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_imagee')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script>  
  
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Name</span>
                  </div>

                  <input type="hidden" name="idc2" value="<?php echo $_GET['id'] ?>" />
                          
          
          <input type="hidden" name="unik" value="578866556602c6b54236d7.png" />
                
                  <input type="text" name="nama" value="" class="form-control" placeholder="Name" required>
                </div>

                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Name (Tablayout)</span>
                  </div>

                  <input type="text" name="nama2" value="" class="form-control" placeholder="Name (Tablayout)" required>
                </div>

        <!-- <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Kategori</span>
                  </div>
          <select name="kategori" class="form-control" required>
                  <option value="" >- kategori -</option>
                    <option value="19" >Layanan Service</option>
                    <option value="21" >Rental Mesin Fotocopy</option>
                    <option value="23" >Jual Mesin Fotocopy</option>
                    <option value="25" >Spare part</option>
                          </select>
        </div>
            <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Harga</span>
                  </div>
                  <input type="number" name="harga" value="" class="form-control" placeholder="harga" required>
                </div>
        <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Short Desc</span>
                  </div>
                  <input type="text" name="short" value="" class="form-control" placeholder="Short Desc" required>
                </div>
        
        
           -->
        <div>Short Desc</div>        
                <textarea class="form-control" name="short_desc" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
             
             
                          <div style="margin-top:15px">Long Desc</div>        
                <textarea class="form-control" name="long_deskripsi" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" ></textarea>
             
          
        
        
        
        
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahproduk2" class="btn btn-primary">Add</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
            
                                           
                   <?php 
                   include('../db.php');
                   $kj = mysqli_query($koneksi,"select * from user where level = 'vip-admin' and verifikasi_admin = 'sudah' order by idUser desc");


                   ?>                            
     <?php 
if(isset($_POST['updatekategori'])){

    
if(($_POST['nama']) || ($_POST['deskripsi'])){





$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link']['tmp_name'];
    $fn = $_FILES['image_link']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_link']['name'];

move_uploaded_file($_FILES['image_link']['tmp_name'],"../images/menu/".$_FILES['image_link']['name']);

    if($_FILES['image_link']['name'] == null){
    
    if($_POST['membervip'] == "belum"){
mysqli_query($koneksi,"update user set verifikasi_admin = 'belum',
masa_aktif = '$_POST[masa_aktif]'


where idUser = '$_POST[idc]'
");     
    }else{
mysqli_query($koneksi,"update user set
masa_aktif = '$_POST[masa_aktif]'


where idUser = '$_POST[idc]'
");
    }
  }else{
    
mysqli_query($koneksi,"update user set verifikasi_admin = 'sudah'
where idUser = '$_POST[idc]'
");   
    
  }


if($_FILES['image_link']['name'] == null){

?>

<script>
alert("Data changed successfully <?php echo mysqli_error($koneksi); ?>");
location = "?p=user_vip_sudah_dikonfirmasi";

</script>

<?php }else{ ?>

<script>
alert("Data changed successfully <?php echo mysqli_error($koneksi); ?>");
location = "?p=rincian&id=<?php echo $_POST['idc2'] ?>";

</script>


<?php } ?>

<?php 
 } 
}
 ?>
    <div class="table-responsive" style="padding:5px;">
        <table class="table table-striped w-100 dt-responsive nowrap" id="example">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Active Period</th>
                    <th>Counter</th>
                    <th>Ket</th>
                    <th>Desc</th>
          <th>Phone</th>
          <th>Mobile</th>
          
          <th>Address</th>
          <th>Link Address</th>
          <th>City</th>
          <th>Postal ZIP</th>
          <th>Fax</th>
          <th>Website</th>
          <th>Comp Email</th>
          <th>Comp Address</th>
          <th>Comp City</th>
          <th>Comp Post Code</th>
          <th>Comp Phone</th>
          <th>Comp Fax</th>
          <th>Comp Mobile</th>
          <th>Fb</th>
          <th>Twitter</th>
          <th>IG</th>
          
          
          
          <th>VIP Code</th>

          <th>Registration Date</th>

                  <th>Company</th>
                  
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $no = 1;
            while($kj2 = mysqli_fetch_array($kj)){
            $idd = $kj2['idUser'];
            
            
            date_default_timezone_set('Asia/Jakarta');
                $hariini = date('Y-m-d'); 
        $date1 = date_create($hariini);
        $date2 = date_create($kj2['masa_aktif']);
        
        $diff = date_diff($date1, $date2);
        $selisih = $diff->format('%R%a');
            
            ?>

                                              <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $kj2['first_name'] ?> <?php echo $kj2['second_name'] ?></td>
                            <td><?php echo $kj2['username'] ?></td>
                 <td><?php echo $kj2['masa_aktif'] ?></td>
         <td><?php echo $selisih ?></td>
         <td><?php 
                 if($selisih <= 0){
                 echo "Expired";}else{ echo "Active"; }  ?></td>
         
         
         <td><?php echo $kj2['deskripsi'] ?></td>
        <td><?php echo $kj2['phone'] ?></td>
       <td><?php echo $kj2['mobile'] ?></td>
      <td><?php echo $kj2['alamat'] ?></td>
      <td><?php echo $kj2['link_alamat'] ?></td>
    <td><?php echo $kj2['kota'] ?></td>
    <td><?php echo $kj2['kodepos'] ?></td>
    <td><?php echo $kj2['fax'] ?></td>
    <td><?php echo $kj2['website'] ?></td>
    <td><?php echo $kj2['email_company'] ?></td>
    <td><?php echo $kj2['alamat_company'] ?></td>
    <td><?php echo $kj2['kota_company'] ?></td>
    <td><?php echo $kj2['kodepos_company'] ?></td>
    <td><?php echo $kj2['telp_company'] ?></td>
    <td><?php echo $kj2['fax_company'] ?></td>
    <td><?php echo $kj2['mobile_company'] ?></td>
    <td><?php echo $kj2['facebook'] ?></td>
    <td><?php echo $kj2['twitter'] ?></td>
    <td><?php echo $kj2['instagram'] ?></td> 
         
         <td><?php echo $kj2['kode_vip'] ?></td>
                 <td><?php echo $kj2['tgl_daftar'] ?></td>
                 
                                          <td><?php echo $kj2['company'] ?></td>
                            
              <td>

                                <a data-toggle="modal" data-target="#modal-lg_<?php echo $idd ?>" href="" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-eye"></i></a>         
                
  <!--              
                 <a href="hapustbdemar2.php?id=<?php //echo $idd ?>&idc=<?php //echo $_GET['id'] ?>" class="btn btn-danger btn-circle btn-sm">Hapus
                                &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-trash"></i></a>
-->

                            </td>
                        </tr
                        >
            
            
        <div class="modal fade" id="modal-lg_<?php echo $idd; ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
<?php 
$rt = mysqli_query($koneksi,"select * from user where idUser = '$idd'");
$rt2 = mysqli_fetch_array($rt);
?>

              <h4 class="modal-title">8. Edit <?php echo $rt2['username'] ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            



      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="overflow-y:scroll;height:70vh">

      
      
      
            
      <center>
              <img src="https://ufe-section-indonesie.org/ufeapp/images/propic/<?php echo $kj2['propic'] ?>"  style="width:200px;" />
      </center> 
      <!--
    <input onchange="readURL<?php echo $idd; ?>(this);" type="file" name="image_link" class="form-control"/>
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_image<?php echo $idd; ?>" style="width:1px;height:1px;" name="product_image<?php echo $idd; ?>" class="img-thumbnail">
      </center>
                <script>
  function readURL<?php echo $idd; ?>(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_image<?php echo $idd; ?>')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script> 
  -->
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Name</span>
                  </div>
          
          
          <input type="hidden" name="unik" value="430992371602c6b5423c26.png" />
          <input type="hidden" name="idc2" value="<?php echo $_GET['id'] ?>" />
                  <input type="hidden" name="idc" value="<?php echo $idd ?>" />
                  <input readonly type="text" name="nama" value="<?php echo $kj2['first_name'] ?> <?php echo $kj2['second_name'] ?>" class="form-control" placeholder="Name" required>
                </div>
        


                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Email</span>
                  </div>
          
          
                  <input type="text" name="nama2" value="<?php echo $kj2['username'] ?>" class="form-control" placeholder="" readonly required>
                </div>


                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Member VIP</span>
                  </div>
          
          <select class="form-control" name="membervip">
          <option value="sudah">Confirmed</option>
          
          <option value="belum">Batalkan</option>
          </select>
                </div>


                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Active Period</span>
                  </div>
          
          
                  <input type="date" name="masa_aktif" value="<?php echo $kj2['masa_aktif'] ?>" class="form-control" placeholder="Active Period" required>
                </div>

                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Company</span>
                  </div>
          
          
                  <input type="text" name="nama2" value="<?php echo $kj2['company'] ?>" class="form-control" placeholder="" readonly required>
                </div>
        
        
        

                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Address</span>
                  </div>
          
          
                  <input type="text" name="nama2" value="<?php echo $kj2['alamat'] ?>" class="form-control" placeholder="" readonly required>
                </div>

        <!-- <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Kategori</span>
                  </div>
          <select name="kategori" class="form-control" required>
                  <option value="23" >Jual Mesin Fotocopy</option>
                    <option value="19" >Layanan Service</option>
                    <option value="21" >Rental Mesin Fotocopy</option>
                    <option value="25" >Spare part</option>
                          </select>
        </div> -->
            <!-- <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Harga</span>
                  </div>
                  <input type="number" name="harga" value="8000000" class="form-control" placeholder="harga" required>
                </div>
        <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Short Desc</span>
                  </div>
                  <input type="text" name="short" value="XploitSec-ID" class="form-control" placeholder="Short Desc" required>
                </div> -->
        
        <!--
          <div>
                Alamat
               </div>-->
              <!--
          <textarea class="form-control" name="deskripsi" placeholder="Place some text here"
              
                           required><?php echo $kj2['alamat'] ?></textarea>-->
             <!--
             <div style="margin-top:15px;">
                           Long Desc
                </div> -->
            <!--    <textarea class="form-control" name="long_deskripsi" placeholder="Place some text here"
              
                          ><?php echo $kj2['long_desc'] ?></textarea>
             -->
             
        
        
        
        
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="updatekategori" class="btn btn-primary">Save</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
            
             <?php $no++;} ?>          
            
            
                                           
                                                </tbody>
        
              <tfoot>
                <tr>
                    <th>No. </th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Active Period</th>
                    
          <th>Desc</th>
          <th>Phone</th>
          <th>Mobile</th>
          <th>Address</th>
          <th>Link Address</th>
          <th>City</th>
          <th>Postal ZIP</th>
          <th>Fax</th>
          <th>Website</th>
          <th>Comp Email</th>
          <th>Comp Address</th>
          <th>Comp City</th>
          <th>Comp Post Code</th>
          <th>Comp Phone</th>
          <th>Comp Fax</th>
          <th>Comp Mobile</th>
          <th>Fb</th>
          <th>Twitter</th>
          <th>IG</th>
          
          
          
          <th>VIP Code</th>

          <th>Registration Date</th>

                  <th>Company</th>
                  
                    <th>Options</th>
                </tr>
            </tfoot>
    </table>
    </div>
</div>
   </div>
</div>
<?php }else if($_GET['p'] == "r2_tb_ufe"){ ?>

  <div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
    
            <div class="col">
<?php 
include('../db.php');
$qw = mysqli_query($koneksi,"select * from tb_activites_jenis where id_jenis = '$_GET[id]'");
$qw2 = mysqli_fetch_array($qw);
?>


                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    <?php echo $qw2['nama'] ?>                 </h4>
            </div>


   <!--   <div class="col-auto">
                <a href="" data-toggle="modal" data-target="#modaltambah" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">

                       8. Tambah Data
                    </span>
                </a>
            </div>
    --> 
      
       <div class="modal fade" id="modaltambah">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add (<?php echo $qw2['nama'] ?>)</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                
<?php 
if(isset($_POST['tambahproduk2'])){
if(($_POST['nama'])){

include('../db.php');






$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link']['tmp_name'];
    $fn = $_FILES['image_link']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_link']['name'];


 
if($namaa == null){
mysqli_query($koneksi,"insert into tb_creche (id_kategori,judul,judul2,short_desc,long_desc) values
('$_POST[idc2]','$_POST[nama]','$_POST[nama2]','$_POST[short_desc]','$_POST[long_deskripsi]')
");
}else{
  
move_uploaded_file($_FILES['image_link']['tmp_name'],"../images/menu/".$_FILES['image_link']['name']);
mysqli_query($koneksi,"insert into tb_demar2 (gambar,id_kategori,judul,judul2,short_desc,long_desc) values
('$namaa','$_POST[idc2]','$_POST[nama]','$_POST[nama2]','$_POST[short_desc]','$_POST[long_deskripsi]')
"); 
}
?>
<script>
alert('Data saved successfully<?php echo mysqli_error($koneksi); ?>');
location = "?p=rincian&id=<?php echo $_POST['idc2'] ?>";
</script>



<?php }else{
?>
<script>
alert("Failed");
</script>
<?php
}

}//else{
  ?>
<!-- <script>
alert("Failed");
</script> -->
  <?php
//}


?>

      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="height:70vh;overflow:scroll;">
            
       <input onchange="readURLe(this);" type="file" name="image_link" class="form-control" />
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_imagee" style="width:1px;height:1px;" name="product_imagee" class="img-thumbnail">
      </center>
                <script>
  function readURLe(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_imagee')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script>  
  
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Name</span>
                  </div>

                  <input type="hidden" name="idc2" value="<?php echo $_GET['id'] ?>" />
                          
          
          <input type="hidden" name="unik" value="578866556602c6b54236d7.png" />
                
                  <input type="text" name="nama" value="" class="form-control" placeholder="Nama" required>
                </div>

                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Name (Tablayout)</span>
                  </div>

                  <input type="text" name="nama2" value="" class="form-control" placeholder="Nama (Tablayout)" required>
                </div>

        <!-- <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Kategori</span>
                  </div>
          <select name="kategori" class="form-control" required>
                  <option value="" >- kategori -</option>
                    <option value="19" >Layanan Service</option>
                    <option value="21" >Rental Mesin Fotocopy</option>
                    <option value="23" >Jual Mesin Fotocopy</option>
                    <option value="25" >Spare part</option>
                          </select>
        </div>
            <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Harga</span>
                  </div>
                  <input type="number" name="harga" value="" class="form-control" placeholder="harga" required>
                </div>
        <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Short Desc</span>
                  </div>
                  <input type="text" name="short" value="" class="form-control" placeholder="Short Desc" required>
                </div>
        
        
           -->
        <div>Short Desc</div>        
                <textarea class="form-control" name="short_desc" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
             
             
                          <div style="margin-top:15px">Long Desc</div>        
                <textarea class="form-control" name="long_deskripsi" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" ></textarea>
             
          
        
        
        
        
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahproduk2" class="btn btn-primary">Add</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
            
                                           
                   <?php 
                   include('../db.php');
                   $kj = mysqli_query($koneksi,"select * from tb_creche");


                   ?>                            
     <?php 
if(isset($_POST['updatekategori45'])){

    
if(($_POST['nama'])){





$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link']['tmp_name'];
    $fn = $_FILES['image_link']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

date_default_timezone_set('Asia/Jakarta');
$tanggal = date('Y-m-d');


$namaa = $_FILES['image_link']['name'];


$kett1 = str_replace("'","\'",$_POST['nama']);
$kett2 = str_replace("'","\'",$_POST['ket2']);
$kett3 = str_replace("'","\'",$_POST['ket3']);
$kett4 = str_replace("'","\'",$_POST['ket4']);

//move_uploaded_file($_FILES['image_link']['tmp_name'],"../images/menu/".$_FILES['image_link']['name']);

    if($_FILES['image_link']['name'] == null){
mysqli_query($koneksi,"update tb_creche set 
harga = '$_POST[harga]',
ket1 = '$kett1',
ket2 = '$kett2',
ket3 = '$kett3',
ket4 = '$kett4',
tanggal = '$tanggal'
where id_tarif = '$_POST[idc]'
");
  }else{
    
mysqli_query($koneksi,"update tb_demar2 set judul = '$_POST[nama]',
judul2 = '$_POST[nama2]',
gambar = '$namaa',
short_desc = '$_POST[deskripsi]',
long_desc = '$_POST[long_deskripsi]'
where id_demar = '$_POST[idc]'
");   
    
  }


if($_FILES['image_link']['name'] == null){

?>

<script>
alert("Data changed successfully <?php echo mysqli_error($koneksi); ?>");
location = "?p=r2_tb_ufe&id=<?php echo $_POST['idc2'] ?>&idc=<?php echo $_POST['idc3'] ?>";

</script>

<?php }else{ ?>

<script>
alert("Data changed successfully <?php echo mysqli_error($koneksi); ?>");
location = "?p=rincian&id=<?php echo $_POST['idc2'] ?>";

</script>


<?php } ?>

<?php 
 } 
}
 ?>
    <div class="table-responsive" style="padding:5px;">
        <table class="table table-striped w-100 dt-responsive nowrap" id="dataTable">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Paket</th>
                    <th>Periode</th>

                  <th>Harga</th>
          <th>Ket 1</th>
          <th>Ket 2</th>
          <th>Ket 3</th>
          <th>Ket 4</th>
          
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $no = 1;
            while($kj2 = mysqli_fetch_array($kj)){
            $idd = $kj2['id_tarif'];
            ?>

                                              <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $kj2['paket'] ?></td>
                            <td><?php echo $kj2['periode'] ?></td>
              <td><?php echo $kj2['harga'] ?></td>
                            <td><?php echo $kj2['ket1'] ?></td>
              <td><?php echo $kj2['ket2'] ?></td>
              <td><?php echo $kj2['ket3'] ?></td>
              <td><?php echo $kj2['ket4'] ?></td>
              <td>


                                <a data-toggle="modal" data-target="#modal-lg_<?php echo $idd ?>" href="" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a>

                            </td>
                        </tr
                        >
            
            
        <div class="modal fade" id="modal-lg_<?php echo $idd; ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
<?php 
$rt = mysqli_query($koneksi,"select * from tb_demar2 where id_demar = '$idd'");
$rt2 = mysqli_fetch_array($rt);
?>

              <h4 class="modal-title">15. Edit <?php echo $rt2['judul2'] ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            



      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="overflow:scroll;height:70vh">

      
      
      
      <!--      
      <center>
              <img src="https://ufe-section-indonesie.org/ufeapp/images/menu/<?php echo $kj2['gambar'] ?>"  style="width:200px;" />
      </center> 
      
    <input onchange="readURL<?php echo $idd; ?>(this);" type="file" name="image_link" class="form-control"/>
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_image<?php echo $idd; ?>" style="width:1px;height:1px;" name="product_image<?php echo $idd; ?>" class="img-thumbnail">
      </center>
                <script>
  function readURL<?php echo $idd; ?>(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_image<?php echo $idd; ?>')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script> 

-->
  
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Ket. 1</span>
                  </div>
          
          
          <input type="hidden" name="unik" value="430992371602c6b5423c26.png" />
          <input type="hidden" name="idc2" value="<?php echo $_GET['id'] ?>" />
         <input type="hidden" name="idc3" value="<?php echo $_GET['idc'] ?>" />
                  <input type="hidden" name="idc" value="<?php echo $idd ?>" />
                  <input type="text" name="nama" value="<?php echo $kj2['ket1'] ?>" class="form-control" placeholder="Nama" required>
                </div>
        


                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Harga</span>
                  </div>
      
                  <input type="text" name="harga" value="<?php echo $kj2['harga'] ?>" class="form-control" placeholder="" required>
                </div>
        
                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Ket. 2</span>
                  </div>
      
                  <input type="text" name="ket2" value="<?php echo $kj2['ket2'] ?>" class="form-control" placeholder="" required>
                </div>
        
         <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Ket. 3</span>
                  </div>
      
                  <input type="text" name="ket3" value="<?php echo $kj2['ket3'] ?>" class="form-control" placeholder="" required>
                </div>
        
        
         <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Ket. 4</span>
                  </div>
      
                  <input type="text" name="ket4" value="<?php echo $kj2['ket4'] ?>" class="form-control" placeholder="" required>
                </div>
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="updatekategori45" class="btn btn-primary">Save changes</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
            
             <?php $no++;} ?>          
            
            
                                           
                                                </tbody>
        </table>
    </div>
</div>
   </div>
</div>

<?php }else if($_GET['p'] == "r_tb_ufe"){ ?>

<div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
<?php 
include('../db.php');
$qw = mysqli_query($koneksi,"select * from tb_activites_jenis where id_jenis = '$_GET[id]'");
$qw2 = mysqli_fetch_array($qw);

$nama1 = str_replace("&petiksatu&","'",$qw2['nama']);
?>
              <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="?p=tb_dm_1">Home</a></li>
              <li class="breadcrumb-item active"><a href="?p=tb_ufe">Activities</a></li>
              <li class="breadcrumb-item active"><?php echo $nama1 ?></li>
              </ol>
            </div>


      <div class="col-auto">
                <a href="" data-toggle="modal" data-target="#modaltambah" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">
                       Add
                    </span>
                </a>
            </div>
      
      
       <div class="modal fade" id="modaltambah">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add (<?php echo $qw2['nama'] ?>)</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                
<?php 
if(isset($_POST['tambahproduk4'])){
if(($_POST['nama'])){

include('../db.php');

$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link']['tmp_name'];
    $fn = $_FILES['image_link']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_link']['name'];

$nama1 = str_replace("'","&petiksatu&",$_POST['nama']);
$long_deskripsi1 = str_replace("'","&petiksatu&",$_POST['long_deskripsi']);
$instruktur1 = str_replace("'","&petiksatu&",$_POST['instruktur']);
$ket_instruktur1 = str_replace("'","&petiksatu&",$_POST['ket_instruktur']);


if($namaa == null){
  $sql = "INSERT INTO tb_activites (id_jenis, judul, deskripsi, instruktur, ket_instruktur) 
    values('$_POST[idc2]', '$nama1', '$long_deskripsi1', '$instruktur1', '$ket_instruktur1')";
  mysqli_query($koneksi, $sql);
}else{
  move_uploaded_file($_FILES['image_link']['tmp_name'],"../images/activites/".$_FILES['image_link']['name']);
  $sql = "INSERT INTO tb_activites (gambar, id_jenis, judul, deskripsi, instruktur, ket_instruktur) 
    values ('$namaa', '$_POST[idc2]', '$nama1', '$long_deskripsi1', '$instruktur1', '$ket_instruktur1')";
  mysqli_query($koneksi, $sql); 
}
?>
<script>
alert('Data added successfully<?php echo mysqli_error($koneksi); ?>');
location = "?p=r_tb_ufe&id=<?php echo $_POST['idc2'] ?>";
</script>
<?php }else{
?>
<script>
alert("Failed");
</script>
<?php
}

}
?>

      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="height:70vh;overflow:scroll;">
            
       <input onchange="readURLe(this);" type="file" name="image_link" class="form-control" />
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_imagee" style="width:1px;height:1px;" name="product_imagee" class="img-thumbnail">
      </center>
                <script>
  function readURLe(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_imagee')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script>  
  
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Name</span>
                  </div>

                  <input type="hidden" name="idc2" value="<?php echo $_GET['id'] ?>" />
                          
          
          <input type="hidden" name="unik" value="578866556602c6b54236d7.png" />
                
                  <input type="text" name="nama" value="" class="form-control" placeholder="Name" required>
                </div>


             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Instructor</span>
                  </div>

                  <input type="text" name="instruktur" value="" class="form-control" placeholder="Instructor" required>
                </div>
        
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Instructor Desc.</span>
                  </div>
                  <input type="text" name="ket_instruktur" value="" class="form-control" placeholder="Instructor Description" required>
                </div>             
                          <div style="margin-top:15px">Description</div>        
                <textarea class="form-control" name="long_deskripsi" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" ></textarea>

      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahproduk4" class="btn btn-primary">Add</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
            
                                           
                   <?php 
                   include('../db.php');
                   $kj = mysqli_query($koneksi,"select * from tb_activites where id_jenis = '$_GET[id]'");
 
if(isset($_POST['tambahhargaac'])) {
  if(($_POST['harga'])) {
  $keterangan = str_replace("'","&petiksatu&",$_POST['keterangan']);
  mysqli_query($koneksi," INSERT INTO tb_harga_program (id_activites, mata_uang, harga, keterangan, periode) 
    values ('$_POST[idc]', '$_POST[mata_uang]', '$_POST[harga]', '$keterangan', '$_POST[periode]')");
    ?>
    <script>
    alert("Data added successfully <?php echo mysqli_error($koneksi); ?>");
    location = "?p=r_tb_ufe&id=<?php echo $_POST['idc2'] ?>";
    </script>
    <?php
  } 
}

if(isset($_POST['tambahjadwalac'])) {
  if(($_POST['nama'])) {
  $nama1 = str_replace("'","&petiksatu&",$_POST['nama']);
  $deskripsi1 = str_replace("'","&petiksatu&",$_POST['deskripsi']);
  mysqli_query($koneksi," INSERT INTO tb_jadwal_program (id_activites, jadwal, keterangan) values ('$_POST[idc]', '$nama1', '$deskripsi1')");
    ?>
    <script>
    alert("Data added successfully <?php echo mysqli_error($koneksi); ?>");
    location = "?p=r_tb_ufe&id=<?php echo $_POST['idc2'] ?>";
    </script>
    <?php
  } 
}

if(isset($_POST['tambahnotifac'])) {
  if(($_POST['titlenotif'])) {
    class startSendNotification {
      function sendNoti($titleNoti, $bodyNoti) {
        define( 'API_ACCESS_KEY', 'AAAARVfjooY:APA91bEAKbWGNffjb80WnOsnE4U_iNWJOUhW1UqiMsnLiJXah2oFmEcn2Y5EcBvUeCWHWgAfBwmFZHhnCdKvyvrUf4m7okrNCICisXtzNyxfKu4F8FxfhXcnxPICACaUrLQJekNqYZPy');
        include('../db.php');
        $ewww = mysqli_query($koneksi,"SELECT * from user where token_push != '' ");
        while ($tyu = mysqli_fetch_array($ewww)){
          $qw[] = $tyu['token_push'];
        }

        $fcmMsg = array(
          'title' => $titleNoti,
          'body' => $bodyNoti,
          'icon' => 'image/look24-logo-s.png',
          'sound' => 'default' 
        );

        $fcmData = array(
          'halaman' => 'activities',
          'nomor' => $_POST['idc'],
        );
        
        $fcmFields = array(
          'registration_ids' => $qw,
          'priority' => 'high',
          'notification' => $fcmMsg,
          'data' => $fcmData
        );

        $headers = array(
          'Authorization: key=' . API_ACCESS_KEY,
          'Content-Type: application/json'
        );
        
        $ch = curl_init();
        curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
        curl_setopt( $ch,CURLOPT_POST, true );
        curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
        curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fcmFields ) );
        $result = curl_exec($ch );
        curl_close( $ch );
        echo $result . "\n\n".$qw;
      }
    }

    $tgl = date('d/m/Y');
    mysqli_query($koneksi,"INSERT INTO tb_notification(kategori, judul, isi, keterangan, tanggal, gambar, data, kepada, dibaca, dihapus) 
      VALUES ('activities', 'UFE Indonesié', '$_POST[titlenotif]', 'Activités', '$tgl', '', '".$_POST['idc']."', 'all', '-', '-')");
    $callNoti = new startSendNotification();
    $callNoti->sendNoti($_POST['titlenotif'], 'Activités');

    ?>
    <script>
    alert("Notification has been sent <?php echo mysqli_error($koneksi); ?>");
    location = "?p=r_tb_ufe&id=<?php echo $_POST['idc2'] ?>";
    </script>
    <?php
  } 
}
 
if(isset($_POST['updatekategori33'])){
    
if(($_POST['nama'])){

$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link']['tmp_name'];
    $fn = $_FILES['image_link']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_link']['name'];

$nama1 = str_replace("'","&petiksatu&",$_POST['nama']);
$long_deskripsi1 = str_replace("'","&petiksatu&",$_POST['long_deskripsi']);
$instruktur1 = str_replace("'","&petiksatu&",$_POST['instruktur']);
$ket_instruktur1 = str_replace("'","&petiksatu&",$_POST['ket_instruktur']);

move_uploaded_file($_FILES['image_link']['tmp_name'],"../images/activites/".$_FILES['image_link']['name']);

    if($_FILES['image_link']['name'] == null){
mysqli_query($koneksi,"update tb_activites set 

judul = '$nama1',
deskripsi = '$long_deskripsi1',
instruktur = '$instruktur1',
ket_instruktur = '$ket_instruktur1'

where id_activites = '$_POST[idc]'
");
  }else{
    
mysqli_query($koneksi,"update tb_activites set 

judul = '$nama1',
deskripsi = '$long_deskripsi1',
instruktur = '$instruktur1',
ket_instruktur = '$ket_instruktur1',

gambar = '$namaa'

where id_activites = '$_POST[idc]'
");   
    
  }


if($_FILES['image_link']['name'] == null){

?>

<script>
alert("Data changed successfully <?php echo mysqli_error($koneksi); ?>");
location = "?p=r_tb_ufe&id=<?php echo $_POST['idc2'] ?>";

</script>

<?php }else{ ?>

<script>
alert("Data changed successfully <?php echo mysqli_error($koneksi); ?>");
location = "?p=r_tb_ufe&id=<?php echo $_POST['idc2'] ?>";

</script>


<?php } ?>

<?php 
 } 
}
 ?>
 
    <div class="table-responsive" style="padding:5px;">
        <table class="table table-striped w-100 dt-responsive nowrap" id="dataTable">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Name</th>
               
                  <th>Description</th>
          
                  <th>Instructor</th>
          <th>Instructor Desc.</th>
          
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $no = 1;
            while($kj2 = mysqli_fetch_array($kj)){
            $idd = $kj2['id_activites'];
            ?>

                                              <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $kj2['judul'] ?></td>
                        
                                          <td><?php echo $kj2['deskripsi'] ?></td>
                                              <td><?php echo $kj2['instruktur'] ?></td>
                                              <td><?php echo $kj2['ket_instruktur'] ?></td>
                            
              <td>

 <a data-toggle="modal" data-target="#modal-lg_<?php echo $idd ?>" href="" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a>
 <?php if($_GET['id'] == "3"){ ?>
  <a href="?p=r2_tb_ufe&id=<?php echo $idd ?>&idc=<?php echo $_GET['id'] ?>" class="btn btn-primary btn-circle btn-sm">More Actions
                                &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-edit"></i></a>
 <?php }else{ ?>
            <a data-toggle="modal" data-target="#modal-tambah-lg_<?php echo $idd ?>" href="" class="btn btn-warning btn-circle btn-sm">
              Add Package Price +
            </a>    
            <a data-toggle="modal" data-target="#modal-tambah2-lg_<?php echo $idd ?>" href="" class="btn btn-warning btn-circle btn-sm">
              Add Schedule +
            </a>
            <a data-toggle="modal" data-target="#modal-tambah3-lg_<?php echo $idd ?>" href="" class="btn btn-success btn-circle btn-sm">
              Send Notification&nbsp;&nbsp;
              <i class="fa fa-paper-plane"></i>
            </a>
            <a onclick="return confirm('Are you sure you want to delete this item?');" href="hapustbactivites.php?id=<?php echo $idd ?>&idc=<?php echo $_GET['id'] ?>" class="btn btn-danger btn-circle btn-sm">
              Delete&nbsp;&nbsp;
              <i class="fa fa-trash"></i>
            </a>
 <?php } ?>

                            </td>
                        </tr>
        
      <div class="modal fade" id="modal-tambah3-lg_<?php echo $idd; ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Send Notification <?php echo $kj2['judul'] ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" enctype="multipart/form-data" >
                  <div class="modal-body" style="overflow:scroll;height:70vh">

                  <div class="input-group mb-3" style="margin-top:10px;">
                        <div class="input-group-prepend">
                          <span class="input-group-text" style="width:120px;">Title</span>
                        </div>
                        <input type="hidden" name="idc2" value="<?php echo $_GET['id'] ?>" />          
                        <input type="hidden" name="idc" value="<?php echo $idd ?>" />
                        <input type="text" name="titlenotif" value="Promotion - <?php echo $kj2['judul'] ?>" class="form-control" placeholder="Title" required>
                      </div>       
                </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="tambahnotifac" class="btn btn-primary">Send</button>
                  </div>
            </form>
          </div>
        </div>
      </div>


          <div class="modal fade" id="modal-tambah2-lg_<?php echo $idd; ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Schedule <?php echo $kj2['judul'] ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="overflow:scroll;height:70vh">

      
      <fieldset>
      <?php 
  $re = mysqli_query($koneksi,"select * from tb_jadwal_program where id_activites = '$idd'");
      while($re2 = mysqli_fetch_array($re)){
      ?>
       <div class="row" style="border:1px #707070 solid;border-radius:10px;margin-left:10px;margin-right:10px;margin-bottom:3px;">
            <div class="col">

               
            <?php echo $re2['jadwal'] ?> | <?php echo $re2['keterangan'] ?>              
            </div>


      <div class="col-auto">
             
                    <a href="hapusjadwalactivites.php?id=<?php echo $re2['id_jadwal'] ?>&idc=<?php echo $_GET['id'] ?>">
          <span class="icon" class="btn btn-danger-sm">
                        <i class="fa fa-trash"></i>
                    </span>
                    </a>
              
            </div>
      </div>
      
      <?php } ?>
      
      </fieldset>
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Schedule</span>
                  </div>
          
          
          <input type="hidden" name="unik" value="430992371602c6b5423c26.png" />
          <input type="hidden" name="idc2" value="<?php echo $_GET['id'] ?>" />
                  <input type="hidden" name="idc" value="<?php echo $idd ?>" />
                  <input type="text" name="nama" value="" class="form-control" placeholder="Schedule" required>
                </div>
        

        
                     <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Description</span>
                  </div>
          
          
                  <input type="text" name="deskripsi" value="" class="form-control" placeholder="Description" required>
                </div>        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahjadwalac" class="btn btn-primary">Add</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>    
        
        <div class="modal fade" id="modal-tambah-lg_<?php echo $idd; ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Package <?php echo $kj2['judul'] ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            



      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="overflow:scroll;height:70vh">

      
      <fieldset>
      <?php 
  $re = mysqli_query($koneksi,"select * from tb_harga_program where id_activites = '$idd'");
      while($re2 = mysqli_fetch_array($re)){
      ?>
       <div class="row" style="border:1px #707070 solid;border-radius:10px;margin-left:10px;margin-right:10px;margin-bottom:3px;">
            <div class="col">
              <?php echo $re2['mata_uang']." ".number_format($re2['harga'],0,',','.')." | ".$re2['keterangan']." | ".$re2['periode']." days"; ?>              
            </div>


      <div class="col-auto">
             
                    <a href="hapushargaactivites.php?id=<?php echo $re2['id_harga'] ?>&idc=<?php echo $_GET['id'] ?>">
          <span class="icon" class="btn btn-danger-sm">
                        <i class="fa fa-trash"></i>
                    </span>
                    </a>
              
            </div>
      </div>
      
      <?php } ?>
      
      </fieldset>
      <select style="margin-top:10px;" class="form-control" name="mata_uang">
        <option value="IDR">IDR</option>
        <option value="EUR">EUR</option>
        <option value="USD">USD</option>
      </select>
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Price</span>
                  </div>
          
                  <input type="hidden" name="idc2" value="<?php echo $_GET['id'] ?>" />
                  <input type="hidden" name="idc" value="<?php echo $idd ?>" />
                  <input type="number" name="harga" class="form-control" placeholder="Price" required>
                </div>
                     <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Package Name</span>
                  </div>
                  <input type="text" name="keterangan" value="" class="form-control" placeholder="Package Name" required>
                </div>
                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Period in days</span>
                  </div>
                  <input type="number" name="periode" class="form-control" placeholder="Period in days" required>
                </div>
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahhargaac" class="btn btn-primary">Add</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>    
       
       <div class="modal fade" id="modal-lg_<?php echo $idd; ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit <?php echo $kj2['judul'] ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="overflow:scroll;height:70vh">

      <center>
              <img src="https://ufe-section-indonesie.org/ufeapp/images/activites/<?php echo $kj2['gambar'] ?>"  style="width:200px;" />
      </center> 
      
    <input onchange="readURL<?php echo $idd; ?>(this);" type="file" name="image_link" class="form-control"/>
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_image<?php echo $idd; ?>" style="width:1px;height:1px;" name="product_image<?php echo $idd; ?>" class="img-thumbnail">
      </center>
                <script>
  function readURL<?php echo $idd; ?>(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_image<?php echo $idd; ?>')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script> 
  
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Name</span>
                  </div>
          
          
          <input type="hidden" name="unik" value="430992371602c6b5423c26.png" />
          <input type="hidden" name="idc2" value="<?php echo $_GET['id'] ?>" />
                  <input type="hidden" name="idc" value="<?php echo $idd ?>" />
                  <input type="text" name="nama" value="<?php echo $kj2['judul'] ?>" class="form-control" placeholder="Name" required>
                </div>
        
        
        
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Instructor</span>
                  </div>
          
          
              <input type="text" name="instruktur" value="<?php echo $kj2['instruktur'] ?>"
          class="form-control" placeholder="Instructor" required>
                </div>
        
        
        
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Instructor Desc.</span>
                  </div>
          
          
              <input type="text" name="ket_instruktur" value="<?php echo $kj2['ket_instruktur'] ?>"
          class="form-control" placeholder="Instructor Desc." required>
                </div>
        
             <div style="margin-top:15px;">
                           Description
                </div>
                <textarea class="textarea" name="long_deskripsi" placeholder="Place some text here"
              
                          ><?php echo $kj2['deskripsi'] ?></textarea>
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="updatekategori33" class="btn btn-primary">Save changes</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
            
             <?php $no++;} ?>          
            
            
                                           
                                                </tbody>
        </table>
    </div>
</div>
   </div>
</div>

<?php }else if($_GET['p'] == "rincian2"){
?>

<!-- <div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
<?php 
include('../db.php');
$qw = mysqli_query($koneksi,"select * from tb_demar2 where id_demar = '$_GET[id]' and visibility = '1'");
$qw2 = mysqli_fetch_array($qw);

$ep = mysqli_query($koneksi,"select * from tb_menu where id_menu = '$qw2[id_kategori]'");
$ep2 = mysqli_fetch_array($ep);
?>


               <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="?p=tb_dm_1">Home</a></li>
              <li class="breadcrumb-item"><a href="?p=tb_dm_1">Demarches</a></li>
              <li class="breadcrumb-item"><a href="?p=rincian&id=<?php echo $qw2['id_kategori'] ?>"><?php echo $ep2['nama_menu'] ?></a></li>
              <li class="breadcrumb-item active"><?php echo $qw2['judul2'] ?></li>
                            </ol>
            </div>


       <div class="col-auto">
                <a href="" data-toggle="modal" data-target="#modaltambah" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">

                        2. Add
                    </span>
                </a>
            </div>
    <div class="col-auto">
                <a href="importdata.php?p=demar3&id=<?php echo $_GET['id'] ?>"  class="btn btn-sm btn-success btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">

                       2. Import
                    </span>
                </a>
            </div>
      
       <div class="modal fade" id="modaltambah">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data (<?php echo $qw2['judul2'] ?>)</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div> -->
                
<?php 
if(isset($_POST['tambahproduk2'])){
if(($_POST['nama']) || ($_POST['deskripsi'])){

include('../db.php');
$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link']['tmp_name'];
    $fn = $_FILES['image_link']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_link']['name'];

$nama1 = str_replace("'","&petiksatu&",$_POST['nama']);
$deskripsi1 = str_replace("'","&petiksatu&",$_POST['deskripsi']);
$long_deskripsi1 = str_replace("'","&petiksatu&",$_POST['long_deskripsi']);

 
if($namaa == null){
mysqli_query($koneksi,"insert into tb_demar3 (
    id_kategori,
    judul,
    judul2,
    short_desc,
    long_desc,
    ket2
    ) values
(
    '$_POST[idc2]',
    '$nama1',
    '$nama1',
    '$deskripsi1',
    '$long_deskripsi1',
    '1'
    )
");
}else{
  
move_uploaded_file($_FILES['image_link']['tmp_name'],"../images/menu/".$_FILES['image_link']['name']);
mysqli_query($koneksi,"insert into tb_demar3 (
    gambar,
    id_kategori,
    judul,
    judul2,
    short_desc,
    long_desc,
    ket2
    ) values
(
    '$namaa',
    '$_POST[idc2]',
    '$nama1',
    '$nama1',
    '$deskripsi1',
    '$long_deskripsi1',
    '1'
    )
");
}



?>
<script>
alert('Data berhasil ditambahkan<?php echo mysqli_error($koneksi); ?>');
location = "?p=rincian2&id=<?php echo $_POST['idc2'] ?>";
</script>



<?php }else{
?>
<script>
alert("Failed");
</script>
<?php
}

}//else{
  ?>
<!-- <script>
alert("Failed");
</script> -->
  <?php
//}


?>

      <!-- <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="height:70vh;overflow:scroll;">
            
   <input onchange="readURLe(this);" type="file" name="image_link" class="form-control" />
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_imagee" style="width:1px;height:1px;" name="product_imagee" class="img-thumbnail">
      </center> -->
                <script>
  function readURLe(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_imagee')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script>  
  
             <!-- <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Name</span>
                  </div>

                  <input type="hidden" name="idc2" value="<?php echo $_GET['id'] ?>" />
                          
          
          <input type="hidden" name="unik" value="578866556602c6b54236d7.png" />
                
                  <input type="text" name="nama" value="" class="form-control" placeholder="Name" required>
                </div>
        <div>Short Desc</div>        
                <textarea class="form-control" name="deskripsi" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
             
             
                          <div style="margin-top:15px">Long Desc</div>        
                <textarea class="form-control" name="long_deskripsi" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" ></textarea>
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahproduk2" class="btn btn-primary">Add</button>
            </div>
      </form>
          </div>
        </div>
      </div>       -->                         
                   <?php 
                   include('../db.php');
                   $kj = mysqli_query($koneksi,"select * from tb_demar3 where id_kategori = '$_GET[id]' and visibility = '1'");


                   ?>                            
     <?php 
if(isset($_POST['updatekategori'])){

    
if(($_POST['nama']) || ($_POST['deskripsi'])){



$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link']['tmp_name'];
    $fn = $_FILES['image_link']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_link']['name'];

move_uploaded_file($_FILES['image_link']['tmp_name'],"../images/menu/".$_FILES['image_link']['name']);

$nama1 = str_replace("'","&petiksatu&",$_POST['nama']);
$deskripsi1 = str_replace("'","&petiksatu&",$_POST['deskripsi']);
$long_deskripsi1 = str_replace("'","&petiksatu&",$_POST['long_deskripsi']);


if($namaa == null){
 
mysqli_query($koneksi,"update tb_demar3 set 
judul = '$nama1',
judul2 = '$nama1',
short_desc = '$deskripsi1',
long_desc = '$long_deskripsi1'
where id_demar = '$_POST[idc]'
");
}else{
  
  
mysqli_query($koneksi,"update tb_demar3 set 
gambar = '$namaa',
judul = '$nama1',
judul2 = '$nama1',
short_desc = '$deskripsi1',
long_desc = '$long_deskripsi1'
where id_demar = '$_POST[idc]'
");
}

?>

<script>
alert("Data changed successfully <?php echo mysqli_error($koneksi); ?>");
location = "?p=rincian2&id=<?php echo $_POST['idc2'] ?>";

</script>


<?php 
 } 
}
 ?>
    <!-- <div class="table-responsive" style="padding:5px;">
        <table class="display responsive nowrap" id="dataTable23">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Options</th>
                    <th>Name</th>
                  <th>Short Desc</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $no = 1;
            while($kj2 = mysqli_fetch_array($kj)){
            $idd = $kj2['id_demar'];
            ?>

                                              <tr>
                            <td><?php echo $no; ?></td>
      <td>


                                <a data-toggle="modal" data-target="#modal-lg_<?php echo $idd ?>" href="" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a>
 <a onclick="return confirm('Are you sure you want to delete this item?');" href="hapustbdemar3.php?id=<?php echo $idd ?>&idc=<?php echo $_GET['id'] ?>" class="btn btn-danger btn-circle btn-sm">Delete
                                &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-trash"></i></a>
                            </td>                
<?php 
 $judul1 = str_replace("&petiksatu&","'",$kj2['judul']);
 $short_desc1 = str_replace("&petiksatu&","'",$kj2['short_desc']);
?>
        <td><?php echo $judul1 ?></td>
                 
                                          <td><?php echo $short_desc1 ?></td>
                            
        
                        </tr
                        >
            
            
        <div class="modal fade" id="modal-lg_<?php echo $idd; ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
<?php 
$rt = mysqli_query($koneksi,"select * from tb_demar3 where id_demar = '$idd'");
$rt2 = mysqli_fetch_array($rt);
?>

              <h4 class="modal-title">2. Edit <?php echo $rt2['judul'] ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            



      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="overflow:scroll;height:70vh">
  <center>
              <img src="https://ufe-section-indonesie.org/ufeapp/images/menu/<?php echo $kj2['gambar'] ?>"  style="width:200px;" />
      </center> 
      
    <input onchange="readURL<?php echo $idd; ?>(this);" type="file" name="image_link" class="form-control"/>
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_image<?php echo $idd; ?>" style="width:1px;height:1px;" name="product_image<?php echo $idd; ?>" class="img-thumbnail">
      </center>
                <script>
  function readURL<?php echo $idd; ?>(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_image<?php echo $idd; ?>')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script> 
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Name</span>
                  </div>
          
                  <?php 
 $judul1 = str_replace("&petiksatu&","'",$kj2['judul']);
 $short_desc1 = str_replace("&petiksatu&","'",$kj2['short_desc']);
 $long_desc1 = str_replace("&petiksatu&","'",$kj2['long_desc']);
?>          
          <input type="hidden" name="unik" value="430992371602c6b5423c26.png" />
          <input type="hidden" name="idc2" value="<?php echo $_GET['id'] ?>" />
                  <input type="hidden" name="idc" value="<?php echo $idd ?>" />
                  <input type="text" name="nama" value="<?php echo $judul1 ?>" class="form-control" placeholder="Nama" required>
                </div>    
          <div>
                Short Desc
               </div>
                <textarea class="form-control" name="deskripsi" placeholder="Place some text here"
              
                           required><?php echo $short_desc1 ?></textarea>
             
             <div style="margin-top:15px;">
                           Long Desc
                </div>
                <textarea class="form-control" name="long_deskripsi" placeholder="Place some text here"
              
                          ><?php echo $long_desc1 ?></textarea>
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="updatekategori" class="btn btn-primary">Save changes</button>
            </div>
      </form>
          </div>
        </div>
      </div>      
            
            
             <?php $no++;} ?>          
            
            
                                           
                                                </tbody>
        </table>
    </div>
</div>
   </div>
</div> -->

<div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
<?php 
include('../db.php');
$qw = mysqli_query($koneksi,"select * from tb_demar2 where id_demar = '$_GET[id]' and visibility = '1'");
$qw2 = mysqli_fetch_array($qw);
?>

  <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="?p=tb_dm_1">Home</a></li>
              <li class="breadcrumb-item"><a href="?p=tb_dm_1">Demarches</a></li>
              <li class="breadcrumb-item"><a href="?p=rincian&id=<?php echo $qw2['id_kategori'] ?>"><?php echo $ep2['nama_menu'] ?></a></li>
              <li class="breadcrumb-item active">List Agent of <?php echo $qw2['judul2'] ?></li>
                            </ol>
            </div>
<div class="col-auto">
                <a href="importdata.php?p=agent&id=<?php echo $_GET['id'] ?>"  class="btn btn-sm btn-success btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">
                      Import Agent
                    </span>
                </a>
            </div>

         <div class="col-auto">
                <a href="" data-toggle="modal" data-target="#modaltambahagent" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">
                       Add Agent
                    </span>
                </a>
            </div>
            </div>          
<?php 
if(isset($_POST['addagent'])) {
  include('../db.php');
  $maxDimW = 1000;
  $maxDimH = 500;
  list($widthq, $heightq, $typeq, $attrq) = getimagesize( $_FILES['image_liun']['tmp_name'] );
  if ( $widthq > $maxDimW || $heightq > $maxDimH ) {
      $target_filenameq = $_FILES['image_liun']['tmp_name'];
      $fnq = $_FILES['image_linkee2']['tmp_name'];
      $sizeq = getimagesize( $fnq );
      $ratioq = $sizeq[0]/$sizeq[1]; // width/height
      //if( $ratio > 1) {
          $widthq = $maxDimW;
          $heightq = ($maxDimW / $size[0]) * $size[1];
      // } else {
      //     $width = $maxDimW*$ratio;
      //     $height = $maxDimH;
      // }
      $srcq = imagecreatefromstring(file_get_contents($fnq));
      $dstq = imagecreatetruecolor( $widthq, $heightq );
      imagecopyresampled($dstq, $srcq, 0, 0, 0, 0, $widthq, $heightq,
      $sizeq[0], $sizeq[1] );
      imagejpeg($dstq, $target_filenameq); // adjust format as needed
  }
  $namaa = $_FILES['image_liun']['name'];
  $longbaru = str_replace("'","&petiksatu&",$_POST['long_desc']);
  $rating1 = $_POST['rating1'] ? $_POST['rating1'] :"0";
  $rating2 = $_POST['rating2'] ? $_POST['rating2'] :"0";
  $rating3 = $_POST['rating3'] ? $_POST['rating3'] :"0";
  if($namaa == null){
    $sql = "INSERT INTO tb_agent (id_kategori, judul, judul2, short_desc, long_desc,
      gambar, gambar2, namaagent, gmaps, alamatagent, 
      alamat2agent, kotaagent, kodeposagent, telpagent, mobileagent,
      emailagent, webagent, fbagent, twiteragent, igagent,
      waagent, telegramagent, linkedagent, youtubeagent, playstoreagent,
      appstoreagent, rating1, rating2, rating3, searching) 
      VALUES ('$_POST[idc2]', '', '', '', '$longbaru',
      '', '', '$_POST[namaagent]', '$_POST[gmaps]', '$_POST[alamatagent]',
      '', '$_POST[kotaagent]', '$_POST[kodeposagent]', '$_POST[telpagent]', '$_POST[mobileagent]',
      '$_POST[emailagent]', '$_POST[webagent]', '$_POST[fbagent]', '$_POST[twiteragent]', '$_POST[igagent]',
      '$_POST[waagent]', '$_POST[telegramagent]', '$_POST[linkedagent]', '$_POST[youtubeagent]', '$_POST[playstoreagent]',
      '$_POST[appstoreagent]', '$rating1', '$rating2', '$rating3', '$_POST[searching]')";
    mysqli_query($koneksi, $sql);
  }else{
    move_uploaded_file($_FILES['image_liun']['tmp_name'],"../images/agent/".$_FILES['image_liun']['name']);
    $sql = "INSERT INTO tb_agent (id_kategori, judul, judul2, short_desc, long_desc,
    gambar, gambar2, namaagent, gmaps, alamatagent, 
    alamat2agent, kotaagent, kodeposagent, telpagent, mobileagent,
    emailagent, webagent, fbagent, twiteragent, igagent,
    waagent, telegramagent, linkedagent, youtubeagent, playstoreagent,
    appstoreagent, rating1, rating2, rating3, searching) 
    VALUES ('$_POST[idc2]', '', '', '', '$longbaru',
    '', '$namaa', '$_POST[namaagent]', '$_POST[gmaps]', '$_POST[alamatagent]',
    '', '$_POST[kotaagent]', '$_POST[kodeposagent]', '$_POST[telpagent]', '$_POST[mobileagent]',
    '$_POST[emailagent]', '$_POST[webagent]', '$_POST[fbagent]', '$_POST[twiteragent]', '$_POST[igagent]',
    '$_POST[waagent]', '$_POST[telegramagent]', '$_POST[linkedagent]', '$_POST[youtubeagent]', '$_POST[playstoreagent]',
    '$_POST[appstoreagent]', '$rating1', '$rating2', '$rating3', '$_POST[searching]')";
    mysqli_query($koneksi, $sql);
  }

  if($_POST['isshownotif'] == '1') {
    class startSendNotification {
      function sendNoti($titleNoti, $bodyNoti, $imageNoti, $dataNomor) {
        define( 'API_ACCESS_KEY', 'AAAARVfjooY:APA91bEAKbWGNffjb80WnOsnE4U_iNWJOUhW1UqiMsnLiJXah2oFmEcn2Y5EcBvUeCWHWgAfBwmFZHhnCdKvyvrUf4m7okrNCICisXtzNyxfKu4F8FxfhXcnxPICACaUrLQJekNqYZPy');
        include('../db.php');
        $ewww = mysqli_query($koneksi,"SELECT * from user where token_push != '' ");
        while ($tyu = mysqli_fetch_array($ewww)){
          $qw[] = $tyu['token_push'];
        }

        $fcmMsg = array(
          'title' => $titleNoti,
          'body' => $bodyNoti,
          'icon' => 'image/look24-logo-s.png',
          'sound' => 'default',
          'image' => $imageNoti 
        );

        $fcmData = array(
          'halaman' => 'demar',
          'nomor' => $dataNomor,
        );
        
        $fcmFields = array(
          'registration_ids' => $qw,
          'priority' => 'high',
          'notification' => $fcmMsg,
          'data' => $fcmData
        );

        $headers = array(
          'Authorization: key=' . API_ACCESS_KEY,
          'Content-Type: application/json'
        );
        
        $ch = curl_init();
        curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
        curl_setopt( $ch,CURLOPT_POST, true );
        curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
        curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fcmFields ) );
        $result = curl_exec($ch );
        curl_close( $ch );
        echo $result . "\n\n".$qw;
      }
    }

    $idnya = mysqli_insert_id($koneksi);
    $fdb = mysqli_query($koneksi,"SELECT a.id_agent, a.id_kategori, a.judul, a.judul2, a.short_desc, a.long_desc, a.gambar, a.gambar2, a.namaagent, a.gmaps, a.alamatagent, a.alamat2agent, 
          a.kotaagent, a.kodeposagent, a.telpagent, a.mobileagent, a.emailagent, a.webagent, a.fbagent, a.twiteragent, a.igagent, a.playstoreagent,
          a.rating1, a.rating2, a.rating3, a.visibility, b.judul AS judul_kategori, b.gambar AS gambar_kategori, c.id_menu, c.nama_menu AS judul_menu, c.gambar2 AS gambar_menu
      FROM tb_agent a
      JOIN tb_demar2 b ON(a.id_kategori = b.id_demar)
      JOIN tb_menu c ON(b.id_kategori = c.id_menu)
      WHERE a.id_agent = '$idnya'");
    $fdb2 = mysqli_fetch_assoc($fdb);
    $gambar_kategori = $fdb2['gambar_kategori'] ? "https://ufe-section-indonesie.org/ufeapp/images/menu/".$fdb2['gambar_kategori'] : "";
    $tgl = date('d/m/Y');

    mysqli_query($koneksi,"INSERT INTO tb_notification(kategori, judul, isi, keterangan, tanggal, gambar, data, kepada, dibaca, dihapus) 
      VALUES ('demar', '$fdb2[judul_menu]', 'Nouveau - ".$fdb2['namaagent']."', '', '$tgl', '$gambar_kategori', '$fdb2[id_agent]', 'all', '-', '-')");
    $callNoti = new startSendNotification();
    $callNoti->sendNoti($fdb2['judul_menu'], "Nouveau - ".$fdb2['namaagent'], $gambar_kategori, $fdb2['id_agent']);
  }
  ?>
    <script>
    console.log("Data added successfully");
    alert("Data added successfully <?php echo mysqli_error($koneksi); ?>");
    location = "?p=rincian2&id=<?php echo $_POST['idc2'] ?>";
    </script> <?php
} ?>
    <div class="modal fade" id="modaltambahagent">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Agent (<?php echo $qw2['judul2'] ?>)</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        <form method="POST" enctype="multipart/form-data" >
        <div class="modal-body" style="height:70vh;overflow:scroll;">

        <fieldset style="text-align:center;width:100%;"> 
        <img id="adjaij" src="" style="width:200px;visibility:hidden;" />
        </fieldset> 

        <input 
        onchange="ffri(this);" type="file" 
        name="image_liun" class="form-control"/>
        </a>
        <div>
        Recommended image size (300*534)
        </div>

        <script>
        function ffri(input) {
        if (input.files && input.files[0]) {
        var reader = new FileReader();
        document.getElementById("adjaij").style.visibility = "visible";
        reader.onload = function (e) {
        $('#adjaij')
        .attr('src', e.target.result)
        .width("auto")
        .height(200);
        };

        reader.readAsDataURL(input.files[0]);
        }

        }
        </script> 

        <div class="input-group mb-3" style="margin-top:10px;">
        <div class="input-group-prepend">
        <span class="input-group-text" 
        style="width:120px;">Name</span>
        </div>
        <input type="hidden" name="unik" value="430992371602c6b5423c26.png" />
        <input type="hidden" name="idc2" value="<?php echo $_GET['id'] ?>" />
        <input type="hidden" name="idc" value="<?php echo $idd ?>" />
        <input type="text" name="namaagent" 
        class="form-control" placeholder="Name" required>
        </div>

        <div class="input-group mb-3" style="margin-top:10px;">
        <div class="input-group-prepend">
        <span class="input-group-text" style="width:120px;">Gmaps</span>
        </div>
        <input type="text" name="gmaps"  
        class="form-control" placeholder="Gmaps" required>
        </div>

        <div class="input-group mb-3" style="margin-top:10px;">
        <div class="input-group-prepend">
        <span class="input-group-text" style="width:120px;">
        Address</span>
        </div>
        <textarea type="text" style="height:150px;" name="alamatagent" class="form-control" required></textarea>
        </div>

        <div class="input-group mb-3" style="margin-top:10px;">
        <div class="input-group-prepend">
        <span class="input-group-text" style="width:120px;">City</span>
        </div>
        <input type="text" name="kotaagent" class="form-control" placeholder="City" required>
        </div>

        <div class="input-group mb-3" style="margin-top:10px;">
        <div class="input-group-prepend">
        <span class="input-group-text" style="width:120px;">Postal Code</span>
        </div> 
        <input type="text" name="kodeposagent" 
        class="form-control" placeholder="Postal Code">
        </div>

        <div class="input-group mb-3" style="margin-top:10px;">
        <div class="input-group-prepend">
        <span class="input-group-text" style="width:120px;">Phone</span>
        </div>
        <input type="text" name="telpagent" class="form-control" placeholder="Phone" required>
        </div>

        <div class="input-group mb-3" style="margin-top:10px;">
        <div class="input-group-prepend">
        <span class="input-group-text" style="width:120px;">Mobile</span>
        </div>
        <input type="text" name="mobileagent" class="form-control" placeholder="Mobile" >
        </div>

        <div class="input-group mb-3" style="margin-top:10px;">
        <div class="input-group-prepend">
        <span class="input-group-text" style="width:120px;">WhatsApp</span>
        </div>
        <input type="text" name="waagent" class="form-control" placeholder="WhatsApp" >
        </div>

        <div class="input-group mb-3" style="margin-top:10px;">
        <div class="input-group-prepend">
        <span class="input-group-text" style="width:120px;">Email</span>
        </div>
        <input type="text" name="emailagent" class="form-control" placeholder="Email" required>
        </div>

        <div class="input-group mb-3" style="margin-top:10px;">
        <div class="input-group-prepend">
        <span class="input-group-text" style="width:120px;">Web</span>
        </div>
        <input type="text" name="webagent" class="form-control" placeholder="Web">
        </div>

        <div class="input-group mb-3" style="margin-top:10px;">
        <div class="input-group-prepend">
        <span class="input-group-text" style="width:120px;">Telegram</span>
        </div>
        <input type="text" name="telegramagent" class="form-control" placeholder="Telegram">
        </div>

        <div class="input-group mb-3" style="margin-top:10px;">
        <div class="input-group-prepend">
        <span class="input-group-text" style="width:120px;">FB</span>
        </div>
        <input type="text" name="fbagent" class="form-control" placeholder="FB" >
        </div>

        <div class="input-group mb-3" style="margin-top:10px;">
        <div class="input-group-prepend">
        <span class="input-group-text" style="width:120px;">Twitter</span>
        </div>
        <input type="text" name="twiteragent" class="form-control" placeholder="Twitter" >
        </div>

        <div class="input-group mb-3" style="margin-top:10px;">
        <div class="input-group-prepend">
        <span class="input-group-text" style="width:120px;">IG</span>
        </div>
        <input type="text" name="igagent" class="form-control" placeholder="IG" >
        </div>

        <div class="input-group mb-3" style="margin-top:10px;">
        <div class="input-group-prepend">
        <span class="input-group-text" style="width:120px;">Youtube</span>
        </div>
        <input type="text" name="youtubeagent" class="form-control" placeholder="Youtube" >
        </div>

        <div class="input-group mb-3" style="margin-top:10px;">
        <div class="input-group-prepend">
        <span class="input-group-text" style="width:120px;">LinkedIn</span>
        </div>
        <input type="text" name="linkedagent" class="form-control" placeholder="LinkedIn" >
        </div>

        <div class="input-group mb-3" style="margin-top:10px;">
        <div class="input-group-prepend">
        <span class="input-group-text" style="width:120px;">Play Store</span>
        </div>
        <input type="text" name="playstoreagent" class="form-control" placeholder="Play Store" >
        </div>

        <div class="input-group mb-3" style="margin-top:10px;">
        <div class="input-group-prepend">
        <span class="input-group-text" style="width:120px;">App Store</span>
        </div>
        <input type="text" name="appstoreagent" class="form-control" placeholder="App Store" >
        </div>

        <div>
          Description
        </div>
        <textarea class="form-control" name="long_desc" placeholder="Place some text here" required></textarea>

        <div class="input-group mb-3" style="margin-top:10px;">
        <div class="input-group-prepend">
        <span class="input-group-text" style="width:120px;">Rating</span>
        </div>
        <input type="number" name="rating1" class="form-control" placeholder="Rating">
        </div>

        <div class="input-group mb-3" style="margin-top:10px;">
        <div class="input-group-prepend">
        <span class="input-group-text" style="width:120px;">Price Rating</span>
        </div>
        <input type="number" name="rating2" class="form-control" placeholder="Price Rating">
        </div>

        <div class="input-group mb-3" style="margin-top:10px;">
        <div class="input-group-prepend">
        <span class="input-group-text" style="width:120px;">Delicacy Rating</span>
        </div>
        <input type="number" name="rating3" class="form-control" placeholder="Delicacy Rating">
        </div>

        <div class="input-group mb-9" style="margin-top:10px;">
        <span style="padding: 15px 15px 0px 0px;">Show in search suggest</span>
        <select style="margin-top:10px;" class="form-control" name="searching">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select>
        </div>

        <div class="input-group mb-9" style="margin-top:10px;">
        <span style="padding: 15px 15px 0px 0px;">Send notification to members</span>
        <select style="margin-top:10px;" class="form-control" name="isshownotif">
          <option value="0">No</option>
          <option value="1" selected>Yes</option>
        </select>
        </div>

        </div>
        <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="addagent" class="btn btn-primary">Add</button>
        </div>
        </form>
        </div>
    </div>
  </div>      
                                                                     
     <?php 
if(isset($_POST['updateagent'])){
  if(($_POST['namaagent'])){
  $maxDimW = 700;
  $maxDimH = 500;
  list($width, $height, $type, $attr) = getimagesize( $_FILES['image_linkeex']['tmp_name'] );
  if ( $width > $maxDimW || $height > $maxDimH ) {
      $target_filename = $_FILES['image_linkeex']['tmp_name'];
      $fn = $_FILES['image_linkeex']['tmp_name'];
      $size = getimagesize( $fn );
      $ratio = $size[0]/$size[1]; // width/height
      // if( $ratio > 1) {
      //     $width = $maxDimW;
      //     $height = $maxDimH/$ratio;
      // } else {
      //     $width = $maxDimW*$ratio;
      //     $height = $maxDimH;
      // }
    
      
      $width = $maxDimW;
      $height = ($maxDimW / $size[0]) * $size[1];

      $src = imagecreatefromstring(file_get_contents($fn));
      $dst = imagecreatetruecolor( $width, $height );
      imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );
      imagejpeg($dst, $target_filename); // adjust format as needed
  }

    $namaax = $_FILES['image_linkeex']['name'];
    $longbaru = str_replace("'","&petiksatu&",$_POST['long_desc']);
    $rating1 = $_POST['rating1'] ? $_POST['rating1'] :"0";
    $rating2 = $_POST['rating2'] ? $_POST['rating2'] :"0";
    $rating3 = $_POST['rating3'] ? $_POST['rating3'] :"0";

    if($namaax == null){
      $sql = "UPDATE tb_agent SET
        long_desc = '$longbaru',
        namaagent = '$_POST[namaagent]',
        gmaps = '$_POST[gmaps]',
        alamatagent = '$_POST[alamatagent]',
        kotaagent = '$_POST[kotaagent]',
        kodeposagent = '$_POST[kodeposagent]',
        telpagent = '$_POST[telpagent]',
        mobileagent = '$_POST[mobileagent]',
        emailagent = '$_POST[emailagent]',
        webagent = '$_POST[webagent]',
        fbagent = '$_POST[fbagent]',
        twiteragent = '$_POST[twiteragent]',
        igagent = '$_POST[igagent]',
        waagent = '$_POST[waagent]',
        telegramagent = '$_POST[telegramagent]',
        linkedagent = '$_POST[linkedagent]',
        youtubeagent = '$_POST[youtubeagent]',
        appstoreagent = '$_POST[appstoreagent]',
        playstoreagent = '$_POST[playstoreagent]',
        rating1 = '$rating1',
        rating2 = '$rating2',
        rating3 = '$rating3',
        searching = '$_POST[searching]'
        where id_agent = '$_POST[idc]'";
      mysqli_query($koneksi, $sql);
    } else {
      move_uploaded_file($_FILES['image_linkeex']['tmp_name'],"../images/agent/".$_FILES['image_linkeex']['name']);
      $sql = "UPDATE tb_agent SET 
        long_desc = '$longbaru',
        namaagent = '$_POST[namaagent]',
        gambar2 = '$namaax',
        gmaps = '$_POST[gmaps]',
        alamatagent = '$_POST[alamatagent]',
        kotaagent = '$_POST[kotaagent]',
        kodeposagent = '$_POST[kodeposagent]',
        telpagent = '$_POST[telpagent]',
        mobileagent = '$_POST[mobileagent]',
        emailagent = '$_POST[emailagent]',
        webagent = '$_POST[webagent]',
        fbagent = '$_POST[fbagent]',
        twiteragent = '$_POST[twiteragent]',
        igagent = '$_POST[igagent]',
        waagent = '$_POST[waagent]',
        telegramagent = '$_POST[telegramagent]',
        linkedagent = '$_POST[linkedagent]',
        youtubeagent = '$_POST[youtubeagent]',
        appstoreagent = '$_POST[appstoreagent]',
        playstoreagent = '$_POST[playstoreagent]',
        rating1 = '$rating1',
        rating2 = '$rating2',
        rating3 = '$rating3',
        searching = '$_POST[searching]'
        where id_agent = '$_POST[idc]'";
      mysqli_query($koneksi, $sql);      
    }

    if($_POST['isshownotif'] == '1') {
      class startSendNotification {
        function sendNoti($titleNoti, $bodyNoti, $imageNoti, $dataNomor) {
          define( 'API_ACCESS_KEY', 'AAAARVfjooY:APA91bEAKbWGNffjb80WnOsnE4U_iNWJOUhW1UqiMsnLiJXah2oFmEcn2Y5EcBvUeCWHWgAfBwmFZHhnCdKvyvrUf4m7okrNCICisXtzNyxfKu4F8FxfhXcnxPICACaUrLQJekNqYZPy');
          include('../db.php');
          $ewww = mysqli_query($koneksi,"SELECT * from user where token_push != '' ");
          while ($tyu = mysqli_fetch_array($ewww)){
            $qw[] = $tyu['token_push'];
          }
  
          $fcmMsg = array(
            'title' => $titleNoti,
            'body' => $bodyNoti,
            'icon' => 'image/look24-logo-s.png',
            'sound' => 'default',
            'image' => $imageNoti 
          );
  
          $fcmData = array(
            'halaman' => 'demar',
            'nomor' => $dataNomor,
          );
          
          $fcmFields = array(
            'registration_ids' => $qw,
            'priority' => 'high',
            'notification' => $fcmMsg,
            'data' => $fcmData
          );
  
          $headers = array(
            'Authorization: key=' . API_ACCESS_KEY,
            'Content-Type: application/json'
          );
          
          $ch = curl_init();
          curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
          curl_setopt( $ch,CURLOPT_POST, true );
          curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
          curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
          curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
          curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fcmFields ) );
          $result = curl_exec($ch );
          curl_close( $ch );
          echo $result . "\n\n".$qw;
        }
      }

      $fdb = mysqli_query($koneksi,"SELECT a.id_agent, a.id_kategori, a.judul, a.judul2, a.short_desc, a.long_desc, a.gambar, a.gambar2, a.namaagent, a.gmaps, a.alamatagent, a.alamat2agent, 
            a.kotaagent, a.kodeposagent, a.telpagent, a.mobileagent, a.emailagent, a.webagent, a.fbagent, a.twiteragent, a.igagent, a.playstoreagent,
            a.rating1, a.rating2, a.rating3, a.visibility, b.judul AS judul_kategori, b.gambar AS gambar_kategori, c.id_menu, c.nama_menu AS judul_menu, c.gambar2 AS gambar_menu
        FROM tb_agent a
        JOIN tb_demar2 b ON(a.id_kategori = b.id_demar)
        JOIN tb_menu c ON(b.id_kategori = c.id_menu)
        WHERE a.id_agent = '$_POST[idc]'");
      $fdb2 = mysqli_fetch_assoc($fdb);
      $gambar_kategori = $fdb2['gambar_kategori'] ? "https://ufe-section-indonesie.org/ufeapp/images/menu/".$fdb2['gambar_kategori'] : "";
      $tgl = date('d/m/Y');
  
      mysqli_query($koneksi,"INSERT INTO tb_notification(kategori, judul, isi, keterangan, tanggal, gambar, data, kepada, dibaca, dihapus) 
        VALUES ('demar', '$fdb2[judul_menu]', 'Promotion - ".$fdb2['namaagent']."', '', '$tgl', '$gambar_kategori', '$fdb2[id_agent]', 'all', '-', '-')");
      $callNoti = new startSendNotification();
      $callNoti->sendNoti($fdb2['judul_menu'], "Promotion - ".$fdb2['namaagent'], $gambar_kategori, $fdb2['id_agent']);
    }

    ?>
    <script>
    alert("Data changed successfully <?php echo mysqli_error($koneksi); ?>");
    location = "?p=rincian2&id=<?php echo $_POST['idc2'] ?>";
    </script>
    <?php 

  } 
}
 ?>
    <div class="table-responsive" style="padding:5px;">
     
        <table class="display responsive nowrap" id="example23">
            <thead>
                <tr>
                    <th>No. </th>
<th>Options</th>    
<th>Picture</th>                   
<th>Name</th>
<th>Gmaps</th>
<th>Address</th>
<th>City</th>
<th>Postal Code</th>
<th>Phone</th>
<th>Mobile</th>
<th>Email</th>
<th>Web</th>            
</tr>
</thead>
<tbody>
            <?php 

            include('../db.php');
            $kj = mysqli_query($koneksi,"select * from tb_agent where id_kategori = '$_GET[id]' and visibility = '1'");
            $no = 1;
            while($kj2 = mysqli_fetch_array($kj)){
            $idd = $kj2['id_agent'];
            ?>

                                              <tr>
                            <td><?php echo $no; ?></td>
            <td>


                                <a data-toggle="modal" data-target="#modal-lg2_<?php echo $idd ?>" href="" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a>

         <a onclick="return confirm('Are you sure you want to delete this item?');"  href="hapustbagent.php?id=<?php echo $idd ?>&idc=<?php echo $_GET['id'] ?>" class="btn btn-danger btn-circle btn-sm">Delete
                                &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-trash"></i></a>


                            </td> 
                            <td>
                            <?php if(!empty($kj2['gambar2'])){ ?>
                            <img src="../images/agent/<?php echo $kj2['gambar2'] ?>" style="width:120px;" />
                            <?php } ?>
                            </td>
    

                      <td><?php echo $kj2['namaagent'] ?></td>
                            <td><?php echo $kj2['gmaps'] ?></td>
                            <td><?php echo $kj2['alamatagent'] ?></td>
                            <td><?php echo $kj2['kotaagent'] ?></td>
                            <td><?php echo $kj2['kodeposagent'] ?></td>
                            <td><?php echo $kj2['telpagent'] ?></td>
                            <td><?php echo $kj2['mobileagent'] ?></td>
                            <td><?php echo $kj2['emailagent'] ?></td>
                            <td><?php echo $kj2['webagent'] ?></td>
                            <td><?php echo $kj2['playstoreagent'] ?></td>
                        </tr
                        >
            
            
        <div class="modal fade" id="modal-lg2_<?php echo $idd; ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit <?php echo $kj2['namaagent'] ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            

      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="overflow:scroll;height:70vh">
            <center>
              <img id="product_imageeex<?php echo $idd ?>" src="https://ufe-section-indonesie.org/ufeapp/images/agent/<?php echo $kj2['gambar2'] ?>" style="width:200px;" />
            </center> 
       <input onchange="readURLeex<?php echo $idd; ?>(this);" type="file" name="image_linkeex" class="form-control"/>
      <div>
      Recommended image size (300*534)
      </div>

                <script>
              function readURLeex<?php echo $idd ?>(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#product_imageeex<?php echo $idd ?>')
                            .attr('src', e.target.result)
                            .width(100)
                    .height(200);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
                
              }
            </script> 


             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Name</span>
                  </div>
                  <input type="hidden" name="unik" value="430992371602c6b5423c26.png" />
                  <input type="hidden" name="idc2" value="<?php echo $_GET['id'] ?>" />
                  <input type="hidden" name="idc" value="<?php echo $idd ?>" />
                  <input type="text" name="namaagent" value="<?php echo $kj2['namaagent'] ?>" 
                  class="form-control" placeholder="Name" required>
                </div>
        
                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Gmaps</span>
                  </div>
                <input type="text" name="gmaps" value="<?php echo $kj2['gmaps'] ?>" 
                  class="form-control" placeholder="Gmaps" required>
                </div>
        
                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Address</span>
                  </div>
                  <textarea style="height:150px;" class="form-control" name="alamatagent" required><?php echo $kj2['alamatagent'] ?></textarea>
                </div>
        
                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">City</span>
                  </div>
                  <input type="text" name="kotaagent" value="<?php echo $kj2['kotaagent'] ?>" 
                  class="form-control" placeholder="City" required>
                </div>

                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Postal Code</span>
                  </div>
                <input type="text" name="kodeposagent" value="<?php echo $kj2['kodeposagent'] ?>" 
                  class="form-control" placeholder="Postal Code" >
                </div>

                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Phone</span>
                  </div>
                <input type="text" name="telpagent" value="<?php echo $kj2['telpagent'] ?>" 
                  class="form-control" placeholder="Phone" required>
                </div>

                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Mobile</span>
                  </div>
                <input type="text" name="mobileagent" value="<?php echo $kj2['mobileagent'] ?>" 
                  class="form-control" placeholder="Mobile" >
                </div>

                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">WhatsApp</span>
                  </div>
                <input type="text" name="waagent" value="<?php echo $kj2['waagent'] ?>" 
                  class="form-control" placeholder="WhatsApp" >
                </div>

                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Email</span>
                  </div>
                <input type="text" name="emailagent" value="<?php echo $kj2['emailagent'] ?>" 
                  class="form-control" placeholder="Email" required>
                </div>

                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Web</span>
                  </div>
                <input type="text" name="webagent" value="<?php echo $kj2['webagent'] ?>" 
                  class="form-control" placeholder="Web" required>
                </div>

                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Telegram</span>
                  </div>
                <input type="text" name="telegramagent" value="<?php echo $kj2['telegramagent'] ?>" 
                  class="form-control" placeholder="Telegram" >
                </div>
                
                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">FB</span>
                  </div>
                <input type="text" name="fbagent" value="<?php echo $kj2['fbagent'] ?>" 
                  class="form-control" placeholder="FB" >
                </div>

                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Twitter</span>
                  </div>   
                <input type="text" name="twiteragent" value="<?php echo $kj2['twiteragent'] ?>" 
                  class="form-control" placeholder="Twitter" >
                </div>

                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">IG</span>
                  </div>
                <input type="text" name="igagent" value="<?php echo $kj2['igagent'] ?>" 
                  class="form-control" placeholder="IG" >
                </div>

                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Youtube</span>
                  </div>
                <input type="text" name="youtubeagent" value="<?php echo $kj2['youtubeagent'] ?>" 
                  class="form-control" placeholder="Youtube" >
                </div>

                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">LinkeIn</span>
                  </div>
                <input type="text" name="linkedagent" value="<?php echo $kj2['linkedagent'] ?>" 
                  class="form-control" placeholder="LinkeIn" >
                </div>

                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Play Store</span>
                  </div>
                <input type="text" name="playstoreagent" value="<?php echo $kj2['playstoreagent'] ?>" 
                  class="form-control" placeholder="Play Store" >
                </div>

                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">App Store</span>
                  </div>
                <input type="text" name="appstoreagent" value="<?php echo $kj2['appstoreagent'] ?>" 
                  class="form-control" placeholder="App Store" >
                </div>
             
             <div style="margin-top:15px;">
                Description
                </div>
                <textarea class="form-control" name="long_desc" placeholder="Place some text here"><?php echo str_replace("&petiksatu&","'",$kj2['long_desc']); ?></textarea>

            <div class="input-group mb-3" style="margin-top:10px;">
            <div class="input-group-prepend">
            <span class="input-group-text" style="width:120px;">Rating</span>
            </div>
            <input type="number" name="rating1" value="<?php echo $kj2['rating1'] ?>" class="form-control" placeholder="Rating">
            </div>

            <div class="input-group mb-3" style="margin-top:10px;">
            <div class="input-group-prepend">
            <span class="input-group-text" style="width:120px;">Price Rating</span>
            </div>
            <input type="number" name="rating2" value="<?php echo $kj2['rating2'] ?>" class="form-control" placeholder="Price Rating">
            </div>

            <div class="input-group mb-3" style="margin-top:10px;">
            <div class="input-group-prepend">
            <span class="input-group-text" style="width:120px;">Delicacy Rating</span>
            </div>
            <input type="number" name="rating3" value="<?php echo $kj2['rating3'] ?>" class="form-control" placeholder="Delicacy Rating">
            </div>

            <div class="input-group mb-9" style="margin-top:10px;">
            <span style="padding: 15px 15px 0px 0px;">Show in search suggest</span>
            <select style="margin-top:10px;" class="form-control" name="searching">
            <?php 
              if($kj2['searching'] == '1') {
                echo '<option value="0">No</option><option value="1" selected>Yes</option>';
              } else {
                echo '<option value="0" selected>No</option><option value="1">Yes</option>';
              }
            ?>
            </select>
            </div>

            <div class="input-group mb-9" style="margin-top:10px;">
            <span style="padding: 15px 15px 0px 0px;">Send notification to members</span>
            <select style="margin-top:10px;" class="form-control" name="isshownotif">
              <option value="0" selected>No</option>
              <option value="1">Yes</option>
            </select>
            </div>

      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="updateagent" class="btn btn-primary">Save changes</button>
            </div>
      </form>
          </div>
        </div>
      </div>      
            
            
             <?php $no++;} ?>          
            
            
                                           
                                                </tbody>
        </table>
    </div>
</div>
   </div>
</div>

<?php }else if($_GET['p'] == "tb_ufe"){
?>  


   <div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
<?php 
include('../db.php');
$qw = mysqli_query($koneksi,"select * from tb_activites_jenis");
$qw2 = mysqli_fetch_array($qw);
?>


                 <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="?p=tb_dm_1">Home</a></li>
    
              <li class="breadcrumb-item active">Activities</li>
                            </ol>
            </div>

<!--
      <div class="col-auto">
                <a href="" data-toggle="modal" data-target="#modaltambah" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">

                       4. Tambah Data
                    </span>
                </a>
            </div>
  -->   
      
       <div class="modal fade" id="modaltambah">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add (<?php echo $qw2['nama'] ?>)</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                
<?php 
if(isset($_POST['tambahproduk3'])){
if(($_POST['nama'])){

include('../db.php');






$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link']['tmp_name'];
    $fn = $_FILES['image_link']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_link']['name'];


 
if($namaa == null){
mysqli_query($koneksi,"insert into tb_demar2 (id_kategori,judul,judul2,short_desc,long_desc) values
('$_POST[idc2]','$_POST[nama]','$_POST[nama2]','$_POST[short_desc]','$_POST[long_deskripsi]')
");
}else{
  
move_uploaded_file($_FILES['image_link']['tmp_name'],"../images/menu/".$_FILES['image_link']['name']);
mysqli_query($koneksi,"insert into tb_demar2 (gambar,id_kategori,judul,judul2,short_desc,long_desc) values
('$namaa','$_POST[idc2]','$_POST[nama]','$_POST[nama2]','$_POST[short_desc]','$_POST[long_deskripsi]')
"); 
}
?>
<script>
alert('Data berhasil ditambahkan<?php //echo mysqli_error($koneksi); ?>');
location = "?p=rincian&id=<?php //echo $_POST['idc2'] ?>";
</script>



<?php }else{
?>
<script>
alert("Failed");
</script>
<?php
}

}//else{
  ?>
<!-- <script>
alert("Failed");
</script> -->
  <?php
//}


?>

      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="height:70vh;overflow:scroll;">
            
       <input onchange="readURLe(this);" type="file" name="image_link" class="form-control" />
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_imagee" style="width:1px;height:1px;" name="product_imagee" class="img-thumbnail">
      </center>
                <script>
  function readURLe(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_imagee')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script>  
  
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Name</span>
                  </div>                
          
          <input type="hidden" name="unik" value="578866556602c6b54236d7.png" />
                
                  <input type="text" name="nama" value="" class="form-control" placeholder="Name" required>
                </div>     
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="tambahproduk3" class="btn btn-primary">Add</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
            
                                           
                   <?php 
                   include('../db.php');
                   $kj = mysqli_query($koneksi,"select * from tb_activites_jenis ");


                   ?>                            
     <?php 
if(isset($_POST['updatekategori22'])){

    
if(($_POST['nama'])){





$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link']['tmp_name'];
    $fn = $_FILES['image_link']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_link']['name'];

move_uploaded_file($_FILES['image_link']['tmp_name'],"../images/menu/".$_FILES['image_link']['name']);

    if($_FILES['image_link']['name'] == null){
mysqli_query($koneksi,"update tb_activites_jenis set nama = '$_POST[nama]' where id_jenis = '$_POST[idc]'
");
  }else{
    
mysqli_query($koneksi,"update tb_activites_jenis set nama = '$_POST[nama]'
where id_jenis = '$_POST[idc]'
");   
    
  }


if($_FILES['image_link']['name'] == null){

?>

<script>
alert("Data changed successfully <?php echo mysqli_error($koneksi); ?>");
location = "?p=tb_ufe";

</script>

<?php }else{ ?>

<script>
alert("Data changed successfully <?php echo mysqli_error($koneksi); ?>");
location = "?p=tb_ufe";

</script>


<?php } ?>

<?php 
 } 
}
 ?>
    <div class="table-responsive" style="padding:5px;">
        <table class="table table-striped w-100 dt-responsive nowrap" id="dataTable">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Name</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $no = 1;
            while($kj2 = mysqli_fetch_array($kj)){
            $idd = $kj2['id_jenis'];
            ?>

                                              <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $kj2['nama'] ?></td>
                          <!--  <td><?php //echo //$kj2['judul2'] ?></td>
                 
                                          <td><?php //echo //$kj2['short_desc'] ?></td>
                            -->
              <td>


                                <a data-toggle="modal" data-target="#modal-lg_<?php echo $idd ?>" href="" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a>

                                <a href="?p=r_tb_ufe&id=<?php echo $idd ?>" class="btn btn-primary btn-circle btn-sm">More Actions
                                &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-edit"></i></a>
                
                
                <!--
                 <a href="hapustbdemar2.php?id=<?php echo $idd ?>&idc=<?php echo $_GET['id'] ?>" class="btn btn-danger btn-circle btn-sm">Hapus
                                &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-trash"></i></a>
-->

                            </td>
                        </tr
                        >
            
            
        <div class="modal fade" id="modal-lg_<?php echo $idd; ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
<?php 
$rt = mysqli_query($koneksi,"select * from tb_activites_jenis where id_jenis = '$idd'");
$rt2 = mysqli_fetch_array($rt);
?>

              <h4 class="modal-title">1. Edit <?php echo $rt2['nama'] ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            



      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="overflow:scroll;height:70vh">

      
      
      <!--
            
      <center>
              <img src="https://ufe-section-indonesie.org/ufeapp/images/menu/<?php //echo $kj2['gambar'] ?>"  style="width:200px;" />
      </center> 
      
    <input onchange="readURL<?php //echo $idd; ?>(this);" type="file" name="image_link" class="form-control"/>
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_image<?php //echo $idd; ?>" style="width:1px;height:1px;" name="product_image<?php //echo $idd; ?>" class="img-thumbnail">
      </center>
                <script>
  function readURL<?php //echo $idd; ?>(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_image<?php //echo $idd; ?>')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script> 
  -->
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Name</span>
                  </div>
          
          
          <input type="hidden" name="unik" value="430992371602c6b5423c26.png" />
          <input type="hidden" name="idc2" value="<?php echo $_GET['id'] ?>" />
                  <input type="hidden" name="idc" value="<?php echo $idd ?>" />
                  <input type="text" name="nama" value="<?php echo $kj2['nama'] ?>" class="form-control" placeholder="Name" required>
                </div>
        

<!--
                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Nama (Tablayout)</span>
                  </div>
          
          
          <input type="hidden" name="unik" value="430992371602c6b5423c26.png" />
                  <input type="hidden" name="idc" value="<?php //echo $idd ?>" />
                  <input type="text" name="nama2" value="<?php //echo $kj2['judul2'] ?>" class="form-control" placeholder="Nama (Tablayout)" required>
                </div> -->
        <!-- <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Kategori</span>
                  </div>
          <select name="kategori" class="form-control" required>
                  <option value="23" >Jual Mesin Fotocopy</option>
                    <option value="19" >Layanan Service</option>
                    <option value="21" >Rental Mesin Fotocopy</option>
                    <option value="25" >Spare part</option>
                          </select>
        </div> -->
            <!-- <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Harga</span>
                  </div>
                  <input type="number" name="harga" value="8000000" class="form-control" placeholder="harga" required>
                </div>
        <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Short Desc</span>
                  </div>
                  <input type="text" name="short" value="XploitSec-ID" class="form-control" placeholder="Short Desc" required>
                </div> -->
        
        <!--
          <div>
                Short Desc
               </div> -->
               <!-- <textarea class="form-control" name="deskripsi" placeholder="Place some text here"
              
                           required><?php //echo $kj2['short_desc'] ?></textarea> -->
             <!--
             <div style="margin-top:15px;">
                           Long Desc
                </div>
                <textarea class="form-control" name="long_deskripsi" placeholder="Place some text here"
              
                          ><?php //echo $kj2['long_desc'] ?></textarea>
             
             
        
      --> 
        
        
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="updatekategori22" class="btn btn-primary">Save changes</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
            
             <?php $no++;} ?>          
            
            
                                           
                                                </tbody>
        </table>
    </div>
</div>
   </div>
</div>

<?php }else if($_GET['p'] == "espace_membre"){ ?>
 <div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
<?php 
include('../db.php');
?>
  
           <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="?p=tb_dm_1">Home</a></li>
    
              <li class="breadcrumb-item active">Members Corner</li>
                            </ol>
      
      </div>
   
                 
 <?php 

if(isset($_POST['update_membre'])){
    
if(!empty($_POST['judul'])){

$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link']['tmp_name'];
    $fn = $_FILES['image_link']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1];
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];

    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_link']['name'];

move_uploaded_file($_FILES['image_link']['tmp_name'],"../images/advert/".$_FILES['image_link']['name']);

$judul1 = str_replace("'","&petiksatu&",$_POST['judul']);
$judul2 = str_replace('"','&petikdua&',$judul1);

$deskripsi1 = str_replace("'","&petiksatu&",$_POST['deskripsi']);
$deskripsi2 = str_replace('"','&petikdua&',$deskripsi1);



    if($_FILES['image_link']['name'] == null){
mysqli_query($koneksi,"update tb_advert set 
keterangan = '$_POST[keterangan]'
where id_advert = '$_POST[id_advert]'
");
  }else{
    
mysqli_query($koneksi,"update tb_advert set
keterangan = '$_POST[keterangan]',
gambar = '$namaa'
where id_advert = '$_POST[id_advert]'
");   
    
  }

if($_FILES['image_link']['name'] == null){


?>

<?php
if($_POST['keterangan'] == "release"){
  

  ?>
  
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
  integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
  crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
  integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
  crossorigin=""></script>
  
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"
 integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
 crossorigin="anonymous"></script>
 <script src="https://www.gstatic.com/firebasejs/8.2.3/firebase.js"></script>
 
<script type="text/javascript">

 var nextkey =0;
 var config = {

    
      apiKey: "AIzaSyCLaApKgiVWIg3ylCHoM339-3zp_ilHDlQ",
  authDomain: "ufe-indonesie-f76c4.firebaseapp.com",
  databaseURL: "https://ufe-indonesie-f76c4-default-rtdb.asia-southeast1.firebasedatabase.app",
  projectId: "ufe-indonesie-f76c4",
  storageBucket: "ufe-indonesie-f76c4.appspot.com",
  messagingSenderId: "297827279494",
  appId: "1:297827279494:web:da1440b3e1fb07d752e707",
  measurementId: "G-8G1DDJS92V"

 
 };
 firebase.initializeApp(config);
 var database = firebase.database();
 
 
 
        function writeUserData(id_user, id_jadwal,id_pelanggan, nama_user,nama_pelanggan, pesan, tanggal) {
            database.ref('laporan').child("3").set({
       
        iii:tanggal,
        id_user:id_user,
      id_jadwal: id_jadwal,
      id_pelanggan: id_pelanggan,
      nama_user: nama_user,
    nama_pelanggan: nama_pelanggan,
    pesan: pesan,      
      tanggal: pesan,
      pesan2: pesan,
    tgl2: pesan
    });
    
        }
        
        
        <?php

 date_default_timezone_set('Asia/Jakarta');
  $tanggal2 = date('Y-m-d H:i:s');




?>

writeUserData("2", "2","2", "tes 1","tes 2","<?php echo $tanggal2; ?>","tes 4");
</script>

          <?php
class startSendNotification
{
  
    function sendNoti($titleNoti, $bodyNoti){

    define( 'API_ACCESS_KEY', 'AAAARVfjooY:APA91bEAKbWGNffjb80WnOsnE4U_iNWJOUhW1UqiMsnLiJXah2oFmEcn2Y5EcBvUeCWHWgAfBwmFZHhnCdKvyvrUf4m7okrNCICisXtzNyxfKu4F8FxfhXcnxPICACaUrLQJekNqYZPy');
        include('../db.php');

    $ewww = mysqli_query($koneksi,"select * from user where token_push != '' ");
while ($tyu = mysqli_fetch_array($ewww)){
  
  
$qw[] = $tyu['token_push'];

}


$fdb = mysqli_query($koneksi,"select * from tb_advert where id_advert = '$_POST[id_advert]'");
$fdb2 = mysqli_fetch_assoc($fdb);

    $fcmMsg = array(
      'title' => $titleNoti,
      'body' => $bodyNoti,
      'icon' => 'image/look24-logo-s.png',
            'sound' => 'default',
      'image' => 'https://ufe-section-indonesie.org/ufeapp/images/advert/'.$fdb2['gambar']
    
    );

    $fcmData = array(
      'halaman' => 'espace_membre',
      'nomor' => $fdb2['id_advert'],
    );
    
    $fcmFields = array(
      'registration_ids' => $qw,
      'priority' => 'high',
      'notification' => $fcmMsg,
      'data' => $fcmData
    );

    $headers = array(
      'Authorization: key=' . API_ACCESS_KEY,
      'Content-Type: application/json'
    );
    
    $ch = curl_init();
    curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
    curl_setopt( $ch,CURLOPT_POST, true );
    curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
    curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
    curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
    curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fcmFields ) );
    $result = curl_exec($ch );
    curl_close( $ch );
    echo $result . "\n\n".$qw;
  }

}

$titleNoti = str_replace("-spasi-", " ", $judul2);
$bodyNoti = str_replace("-spasi-", " ", $deskripsi2);

$fdb = mysqli_query($koneksi,"SELECT a.*, b.second_name, b.propic
  from tb_advert a
  left join user b ON(a.id_member = b.idUser)
  where a.id_advert = '$_POST[id_advert]'");
$fdb2 = mysqli_fetch_assoc($fdb);
$propic = $fdb2['propic'] ? "https://ufe-section-indonesie.org/ufeapp/images/propic/".$fdb2['propic'] : '';

$tgl = date('d/m/Y');
mysqli_query($koneksi,"INSERT INTO tb_notification(kategori, judul, isi, keterangan, tanggal, gambar, data, kepada, dibaca, dihapus) 
VALUES ('espace', 'Espace Members', '$titleNoti', '".$fdb2['second_name']."', '$tgl', '$propic', '".$fdb2['id_advert']."', 'all', '-', '-')
");

$callNoti = new startSendNotification();
$callNoti->sendNoti($titleNoti, $bodyNoti);

?>
  
  <?php
}else if($_POST['keterangan'] == "rejected") {
  ?>
  
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
  integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
  crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
  integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
  crossorigin=""></script>
  
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"
 integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
 crossorigin="anonymous"></script>
 <script src="https://www.gstatic.com/firebasejs/8.2.3/firebase.js"></script>

          <?php
class startSendNotification
{
  
    function sendNotif($titleNoti, $bodyNoti){

    define( 'API_ACCESS_KEY', 'AAAARVfjooY:APA91bEAKbWGNffjb80WnOsnE4U_iNWJOUhW1UqiMsnLiJXah2oFmEcn2Y5EcBvUeCWHWgAfBwmFZHhnCdKvyvrUf4m7okrNCICisXtzNyxfKu4F8FxfhXcnxPICACaUrLQJekNqYZPy');
        include('../db.php');

$fdb = mysqli_query($koneksi,"select * from tb_advert where id_advert = '$_POST[id_advert]'");
$fdb2 = mysqli_fetch_assoc($fdb);

    $ewww = mysqli_query($koneksi,"select * from user where idUser = '$fdb2[id_member]' ");
    while ($tyu = mysqli_fetch_array($ewww)){
      $qw[] = $tyu['token_push'];
    }

    $fcmMsg = array(
      'title' => $titleNoti,
      'body' => $bodyNoti,
      'icon' => 'image/look24-logo-s.png',
            'sound' => 'default',
      'image' => 'https://ufe-section-indonesie.org/ufeapp/images/announcement.png'
    
    );

    $fcmData = array(
      'halaman' => 'myespace',
      'nomor' => $fdb2['id_advert'],
    );
    
    $fcmFields = array(
      'registration_ids' => $qw,
      'priority' => 'high',
      'notification' => $fcmMsg,
      'data' => $fcmData
    );

    $headers = array(
      'Authorization: key=' . API_ACCESS_KEY,
      'Content-Type: application/json'
    );
    
    $ch = curl_init();
    curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
    curl_setopt( $ch,CURLOPT_POST, true );
    curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
    curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
    curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
    curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fcmFields ) );
    $result = curl_exec($ch );
    curl_close( $ch );
    echo $result . "\n\n".$qw;
  }

}
?>

<?php 

$titleNoti = str_replace("-spasi-", " ", $judul2);
$bodyNoti = str_replace("-spasi-", " ", $deskripsi2);

$fdb = mysqli_query($koneksi,"SELECT a.*
  from tb_advert a
  where a.id_advert = '$_POST[id_advert]'");
$fdb2 = mysqli_fetch_assoc($fdb);
$propic = $fdb2['propic'] ? "https://ufe-section-indonesie.org/ufeapp/images/propic/".$fdb2['propic'] : '';

$tgl = date('d/m/Y');
mysqli_query($koneksi,"INSERT INTO tb_notification(kategori, judul, isi, keterangan, tanggal, gambar, data, kepada, dibaca, dihapus) 
VALUES ('myespace', 'Espace Members', '$_POST[titlenotif]', '', '$tgl', '', '".$fdb2['id_advert']."', '".$fdb2['id_member']."', '-', '-')
");

$callNoti = new startSendNotification();
$callNoti->sendNotif($_POST['titlenotif'], $titleNoti);

}

?>

<script>
alert("Data had been changed <?php echo mysqli_error($koneksi); ?>");
location = "?p=espace_membre&ac=art";

</script>

<?php }else{

  ?>

<?php
if($_POST['keterangan'] == "release"){
  ?>
  

<script>
alert("Data had been changed <?php echo mysqli_error($koneksi); ?>");
location = "?p=espace_membre&ac=arti";

</script>

<?php } ?>

<?php 
 } 
}
}
 ?>
    <div class="table-responsive" style="padding:5px;">
        <table class="table table-striped w-100 dt-responsive " id="example">
            <thead>
                <tr>
                    <th>No. </th>
          <th>Act</th>                   
           <th>Title</th>
               
                  <th>Description</th>
          <th>Member name</th>
                   <th>Email</th>
           <th>Date</th>
            <th>Pic</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php 
            $no = 1;

      $kj = mysqli_query($koneksi,"select * from tb_advert where keterangan  = 'pending' and visibility = '1' order by tanggal desc");
            while($kj2 = mysqli_fetch_array($kj)){
            $idd = $kj2['id_advert'];
            ?>

                                              <tr>
                            <td><?php echo $no; ?></td>
                            <td>
              
                                <a data-toggle="modal" data-target="#modal-lg_<?php echo $idd ?>" href="" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a>


              </td>

                <?php 
                
                $judul1 = str_replace("&petiksatu&","'",$kj2['judul']);
                $judul2 = str_replace("&petikdua&",'"',$judul1);

                $deskripsi1 = str_replace("&petiksatu&","'",$kj2['deskripsi']);
                $deskripsi2 = str_replace("&petikdua&",'"',$deskripsi1);
                
                ?>

              <td><?php echo $judul2 ?></td>
                          
                 <td><?php echo substr($deskripsi2,0,100); ?></td>
            <?php
            $ok = mysqli_query($koneksi,"select * from user where idUser = '$kj2[id_member]'");
            $ok2 = mysqli_fetch_array($ok);
            ?>            
<td><?php echo $ok2['first_name']."&nbsp;".$ok2['second_name'] ?></td>
<td><?php echo $ok2['username']; ?></td>  
<td><?php echo $kj2['tanggal']; ?></td>       
                                    <td><img src="https://ufe-section-indonesie.org/ufeapp/images/advert/<?php echo $kj2['gambar'] ?>"
                  style="width:50px;height:auto;" 
                  /></td>
                
                        </tr
                        >
            
            
        <div class="modal fade" id="modal-lg_<?php echo $idd; ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
<?php 
$rt = mysqli_query($koneksi,"select * from tb_advert where id_advert = '$idd'");
$rt2 = mysqli_fetch_array($rt);
?>

              <h4 class="modal-title">Edit <?php echo $rt2['judul'] ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="overflow-y:scroll;height:70vh">

      <center>
              <img src="https://ufe-section-indonesie.org/ufeapp/images/advert/<?php echo $kj2['gambar'] ?>"  style="width:200px;" />
      </center> 
      
    <input onchange="readURL<?php echo $idd; ?>(this);" type="file" name="image_link" class="form-control"/>
      </a><br>
      <center>
      <i><font style="font-size:10px;">* landscape mode
      </font></i><br><img src="" id="product_image<?php echo $idd; ?>" 
      style="width:1px;height:1px;" name="product_image<?php echo $idd; ?>" 
      class="img-thumbnail">
      </center>
                <script>
  function readURL<?php echo $idd; ?>(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_image<?php echo $idd; ?>')
                .attr('src', e.target.result)
                .width(100)
        .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
    
  }
</script> 
  
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Title</span>
                  </div>
         
          <input type="hidden" name="id_advert" value="<?php echo $idd; ?>" />
                 <input name="judul" class="form-control" 
         value="<?php echo $judul2 ?>" />
                </div>
        
             <div style="margin-top:10px;padding-left:5px;">
                           Description
                </div>
                <textarea class="form-control" name="deskripsi" placeholder="Place some text here"
              
                          ><?php echo $deskripsi2 ?></textarea>
             
        <select style="margin-top:10px;" class="form-control" name="keterangan" onchange="showReasonRejected<?php echo $idd; ?>(this.value)">
        <?php 
          if($rt2['keterangan'] == "release"){
            echo '<option value="pending">Pending</option>
                  <option value="release" selected>Release</option>
                  <option value="rejected">Rejected</option>';
          }else if($rt2['keterangan'] == "rejected"){
            echo '<option value="pending">Pending</option>
                  <option value="release">Release</option>
                  <option value="rejected" selected>Rejected</option>';
          }else{
            echo '<option value="pending" selected>Pending</option>
                  <option value="release">Release</option>
                  <option value="rejected">Rejected</option>';
          }
        ?>
        </select>

        <div class="input-group mb-3" style="margin-top:10px;display:none;" id="dvReasonRejected<?php echo $idd; ?>">
            <div class="input-group-prepend">
              <span class="input-group-text" style="width:120px;">Alert Rejected</span>
            </div>
            <input type="text" name="titlenotif" value="Alerte – Votre contenu doit être révisé" class="form-control" placeholder="Reason rejected">
        </div>

        <script>
          function showReasonRejected<?php echo $idd; ?>(nilai) {
            console.log(nilai);
            if(nilai == "rejected" ) {
              $("#dvReasonRejected<?php echo $idd; ?>").show();
            } else {
              $("#dvReasonRejected<?php echo $idd; ?>").hide();
            }
          }
        </script>
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="update_membre" class="btn btn-primary">Save changes</button>
            </div>
      </form>
          </div>
        </div>
      </div>      
            
             <?php $no++;} ?>          
            
                                           
                                                </tbody>
        
     <tfoot>
                <tr>
                    <th>No.. </th>
          <th>Act.</th>                   
           <th>Title.</th>
               
                  <th>Description.</th>
          <th>Member name.</th>
                   <th>Email.</th>
           <th>Date.</th>
            <th>Pic.</th>
                    
                </tr>
            </tfoot>
    </table>
    </div>
</div>
   </div>
</div>

<?php }else if($_GET['p'] == "reginfo"){ ?>

<div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
  <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="?p=tb_dm_1">Home</a></li>
              <li class="breadcrumb-item active">Regional Information</li>
                            </ol>
            </div>
         <div class="col-auto">
                <a href="" data-toggle="modal" data-target="#modaladdreginfo" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">
                       Add
                    </span>
                </a>
            </div>
            </div>          
<?php 
if(isset($_POST['addreginfo'])) {
  include('../db.php');
  $tanggal = date('Y-m-d');
  $sql = "INSERT INTO tb_informasi (jenis, tanggal, judul, isi, isaktif) 
      VALUES ('2', '$tanggal', '$_POST[judul]', '$_POST[isi]', '$_POST[isaktif]')";
  mysqli_query($koneksi, $sql);

  if($_POST['isshownotif'] == '1') {
    class startSendNotification {
      function sendNotifi($titleNoti, $bodyNoti, $imageNoti, $dataNomor) {
        define( 'API_ACCESS_KEY', 'AAAARVfjooY:APA91bEAKbWGNffjb80WnOsnE4U_iNWJOUhW1UqiMsnLiJXah2oFmEcn2Y5EcBvUeCWHWgAfBwmFZHhnCdKvyvrUf4m7okrNCICisXtzNyxfKu4F8FxfhXcnxPICACaUrLQJekNqYZPy');
        include('../db.php');
        $ewww = mysqli_query($koneksi,"SELECT * from user where token_push != '' ");
        while ($tyu = mysqli_fetch_array($ewww)){
          $qw[] = $tyu['token_push'];
        }

        $fcmMsg = array(
          'title' => $titleNoti,
          'body' => $bodyNoti,
          'icon' => 'image/look24-logo-s.png',
          'sound' => 'default',
          'image' => $imageNoti 
        );

        $fcmData = array(
          'halaman' => 'reginfo',
          'nomor' => $dataNomor,
        );
        
        $fcmFields = array(
          'registration_ids' => $qw,
          'priority' => 'high',
          'notification' => $fcmMsg,
          'data' => $fcmData
        );

        $headers = array(
          'Authorization: key=' . API_ACCESS_KEY,
          'Content-Type: application/json'
        );
        
        $ch = curl_init();
        curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
        curl_setopt( $ch,CURLOPT_POST, true );
        curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
        curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fcmFields ) );
        $result = curl_exec($ch );
        curl_close( $ch );
        echo $result . "\n\n".$qw;
      }
    }

    $idnya = mysqli_insert_id($koneksi);
    $gambar_kategori = "https://ufe-section-indonesie.org/ufeapp/images/logo/ufe_indo.png";
    $tgl = date('d/m/Y');

    // mysqli_query($koneksi,"INSERT INTO tb_notification(kategori, judul, isi, keterangan, tanggal, gambar, data, kepada, dibaca, dihapus) 
    //   VALUES ('reginfo', 'UFE Indonesié', '$_POST[judul]', '".$_COOKIE['first_name']." ".$_COOKIE['second_name']."', '$tgl', '$gambar_kategori', '$idnya', 'all', '-', '-')");
    $callNoti = new startSendNotification();
    $callNoti->sendNotifi('UFE Indonesié', $_POST['judul'], $gambar_kategori, $idnya);
  }
  ?>
    <script>
    console.log("Data added successfully");
    alert("Data added successfully <?php echo mysqli_error($koneksi); ?>");
    location = "?p=reginfo";
    </script> <?php
} ?>
    <div class="modal fade" id="modaladdreginfo">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Regional Information</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        <form method="POST" enctype="multipart/form-data" >
        <div class="modal-body" style="height:70vh;overflow:scroll;">

        <div class="input-group mb-3" style="margin-top:10px;">
        <div class="input-group-prepend">
        <span class="input-group-text" 
        style="width:120px;">Title</span>
        </div>
        <input type="text" name="judul" value="Informations régionales pour tous les membres"
        class="form-control" placeholder="Title" required>
        </div>

        <div>
          Description
        </div>
        <textarea class="textarea" name="isi" placeholder="Place some text here" required></textarea>

        <div class="input-group mb-9" style="margin-top:10px;">
        <span style="padding: 15px 15px 0px 0px;">Is Active</span>
        <select style="margin-top:10px;" class="form-control" name="isaktif">
          <option value="0">No</option>
          <option value="1" selected>Yes</option>
        </select>
        </div>

        <div class="input-group mb-9" style="margin-top:10px;">
        <span style="padding: 15px 15px 0px 0px;">Send notification to members</span>
        <select style="margin-top:10px;" class="form-control" name="isshownotif">
          <option value="0">No</option>
          <option value="1" selected>Yes</option>
        </select>
        </div>

        </div>
        <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="addreginfo" class="btn btn-primary">Add</button>
        </div>
        </form>
        </div>
    </div>
  </div>      
                                                                     
     <?php 
if(isset($_POST['updatereginfo'])){
  if(($_POST['judul'])){
    $sql = "UPDATE tb_informasi SET
        judul = '$_POST[judul]',
        isi = '$_POST[isi]',
        isaktif = '$_POST[isaktif]'
        where id_info = '$_POST[id_info]'";
      mysqli_query($koneksi, $sql);

    if($_POST['isshownotif'] == '1') {
      class startSendNotification {
        function sendNotific($titleNoti, $bodyNoti, $imageNoti, $dataNomor) {
          define( 'API_ACCESS_KEY', 'AAAARVfjooY:APA91bEAKbWGNffjb80WnOsnE4U_iNWJOUhW1UqiMsnLiJXah2oFmEcn2Y5EcBvUeCWHWgAfBwmFZHhnCdKvyvrUf4m7okrNCICisXtzNyxfKu4F8FxfhXcnxPICACaUrLQJekNqYZPy');
          include('../db.php');
          $ewww = mysqli_query($koneksi,"SELECT * from user where token_push != '' ");
          while ($tyu = mysqli_fetch_array($ewww)){
            $qw[] = $tyu['token_push'];
          }
  
          $fcmMsg = array(
            'title' => $titleNoti,
            'body' => $bodyNoti,
            'icon' => 'image/look24-logo-s.png',
            'sound' => 'default',
            'image' => $imageNoti 
          );
  
          $fcmData = array(
            'halaman' => 'reginfo',
            'nomor' => $dataNomor,
          );
          
          $fcmFields = array(
            'registration_ids' => $qw,
            'priority' => 'high',
            'notification' => $fcmMsg,
            'data' => $fcmData
          );
  
          $headers = array(
            'Authorization: key=' . API_ACCESS_KEY,
            'Content-Type: application/json'
          );
          
          $ch = curl_init();
          curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
          curl_setopt( $ch,CURLOPT_POST, true );
          curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
          curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
          curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
          curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fcmFields ) );
          $result = curl_exec($ch );
          curl_close( $ch );
          echo $result . "\n\n".$qw;
        }
      }

      $gambar_kategori = "https://ufe-section-indonesie.org/ufeapp/images/logo/ufe_indo.png";
      $tgl = date('d/m/Y');

      // mysqli_query($koneksi,"INSERT INTO tb_notification(kategori, judul, isi, keterangan, tanggal, gambar, data, kepada, dibaca, dihapus) 
      //   VALUES ('reginfo', 'UFE Indonesié', '$_POST[judul]', '".$_COOKIE['first_name']." ".$_COOKIE['second_name']."', '$tgl', '$gambar_kategori', '$_POST[id_info]', 'all', '-', '-')");
      $callNoti = new startSendNotification();
      $callNoti->sendNotific('UFE Indonesié', $_POST['judul'], $gambar_kategori, $_POST['id_info']);
    }

    ?>
    <script>
    alert("Data changed successfully <?php echo mysqli_error($koneksi); ?>");
    location = "?p=reginfo";
    </script>
    <?php 

  } 
}
 ?>
    <div class="table-responsive" style="padding:5px;">
      <table class="display responsive nowrap" id="example23">
        <thead>
          <tr>
            <th>No. </th>
            <th>Options</th>    
            <th>Date</th>                   
            <th>Title</th>
            <th>Is Active</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          include('../db.php');
          $kj = mysqli_query($koneksi,"SELECT * from tb_informasi where jenis = '2' order by isaktif desc, id_info desc");
          $no = 1;
          while($kj2 = mysqli_fetch_array($kj)){
              $idd = $kj2['id_info'];
              ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><a data-toggle="modal" data-target="#modal-lg2_<?php echo $idd ?>" href="" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a></td> 
                <td><?php echo $kj2['tanggal'] ?></td>
                <td><?php echo $kj2['judul'] ?></td>
                <td><?php echo $kj2['isaktif'] == '1' ? "Yes" : "No"; ?></td>
                <td><?php echo $kj2['isi'] ?></td>              
              </tr>
            
              <div class="modal fade" id="modal-lg2_<?php echo $idd; ?>">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Edit Regional information</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form method="POST" enctype="multipart/form-data" >
                    <div class="modal-body" style="overflow:scroll;height:70vh">


                    <div class="input-group mb-3" style="margin-top:10px;">
                    <div class="input-group-prepend">
                      <span class="input-group-text" style="width:120px;">Title</span>
                    </div>
                    <input type="hidden" name="id_info" value="<?php echo $idd ?>" />
                    <input type="text" name="judul" value="<?php echo $kj2['judul'] ?>" 
                    class="form-control" placeholder="Name" required>
                    </div>
      
                    <div style="margin-top:15px;">
                        Description
                    </div>
                    <textarea class="textarea" name="long_desc" placeholder="Place some text here"><?php echo $kj2['isi'] ?></textarea>


                    <div class="input-group mb-9" style="margin-top:10px;">
                    <span style="padding: 15px 15px 0px 0px;">Is Active</span>
                    <select style="margin-top:10px;" class="form-control" name="isaktif">
                    <?php 
                      if($kj2['isaktif'] == '1') {
                        echo '<option value="0">No</option><option value="1" selected>Yes</option>';
                      } else {
                        echo '<option value="0" selected>No</option><option value="1">Yes</option>';
                      }
                    ?>
                    </select>
                    </div>

                    <div class="input-group mb-9" style="margin-top:10px;">
                    <span style="padding: 15px 15px 0px 0px;">Send notification to members</span>
                    <select style="margin-top:10px;" class="form-control" name="isshownotif">
                      <option value="0" selected>No</option>
                      <option value="1">Yes</option>
                    </select>
                    </div>

                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" name="updatereginfo" class="btn btn-primary">Save changes</button>
                    </div>
                  </form>
                </div>
              </div>
              </div>
             <?php $no++;} ?>          
        </tbody>
      </table>
    </div>
</div>
</div>

<?php }else if($_GET['p'] == "moninfo"){ ?>

<div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
  <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="?p=tb_dm_1">Home</a></li>
              <li class="breadcrumb-item active">Global Information</li>
                            </ol>
            </div>
         <div class="col-auto">
                <a href="" data-toggle="modal" data-target="#modaladdmoninfo" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">
                       Add
                    </span>
                </a>
            </div>
            </div>          
<?php 
if(isset($_POST['addmoninfo'])) {
  include('../db.php');
  $tanggal = date('Y-m-d');
  $sql = "INSERT INTO tb_informasi (jenis, tanggal, judul, isi, isaktif) 
      VALUES ('1', '$tanggal', '$_POST[judul]', '$_POST[isi]', '$_POST[isaktif]')";
  mysqli_query($koneksi, $sql);

  if($_POST['isshownotif'] == '1') {
    class startSendNotification {
      function sendNotifica($titleNoti, $bodyNoti, $imageNoti, $dataNomor) {
        define( 'API_ACCESS_KEY', 'AAAARVfjooY:APA91bEAKbWGNffjb80WnOsnE4U_iNWJOUhW1UqiMsnLiJXah2oFmEcn2Y5EcBvUeCWHWgAfBwmFZHhnCdKvyvrUf4m7okrNCICisXtzNyxfKu4F8FxfhXcnxPICACaUrLQJekNqYZPy');
        include('../db.php');
        $ewww = mysqli_query($koneksi,"SELECT * from user where token_push != '' ");
        while ($tyu = mysqli_fetch_array($ewww)){
          $qw[] = $tyu['token_push'];
        }

        $fcmMsg = array(
          'title' => $titleNoti,
          'body' => $bodyNoti,
          'icon' => 'image/look24-logo-s.png',
          'sound' => 'default',
          'image' => $imageNoti 
        );

        $fcmData = array(
          'halaman' => 'moninfo',
          'nomor' => $dataNomor,
        );
        
        $fcmFields = array(
          'registration_ids' => $qw,
          'priority' => 'high',
          'notification' => $fcmMsg,
          'data' => $fcmData
        );

        $headers = array(
          'Authorization: key=' . API_ACCESS_KEY,
          'Content-Type: application/json'
        );
        
        $ch = curl_init();
        curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
        curl_setopt( $ch,CURLOPT_POST, true );
        curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
        curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fcmFields ) );
        $result = curl_exec($ch );
        curl_close( $ch );
        echo $result . "\n\n".$qw;
      }
    }

    $idnya = mysqli_insert_id($koneksi);
    $gambar_kategori = "https://ufe-section-indonesie.org/ufeapp/images/logo/ufe_monde.png";
    $tgl = date('d/m/Y');

    // mysqli_query($koneksi,"INSERT INTO tb_notification(kategori, judul, isi, keterangan, tanggal, gambar, data, kepada, dibaca, dihapus) 
    //   VALUES ('moninfo', 'UFE Monde', '$_POST[judul]', 'Monde Admin', '$tgl', '$gambar_kategori', '$idnya', 'all', '-', '-')");
    $callNoti = new startSendNotification();
    $callNoti->sendNotifica('UFE Monde', $_POST['judul'], $gambar_kategori, $idnya);
  }
  ?>
    <script>
    console.log("Data added successfully");
    alert("Data added successfully <?php echo mysqli_error($koneksi); ?>");
    location = "?p=moninfo";
    </script> <?php
} ?>
    <div class="modal fade" id="modaladdmoninfo">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Global Information</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        <form method="POST" enctype="multipart/form-data" >
        <div class="modal-body" style="height:70vh;overflow:scroll;">

        <div class="input-group mb-3" style="margin-top:10px;">
        <div class="input-group-prepend">
        <span class="input-group-text" 
        style="width:120px;">Title</span>
        </div>
        <input type="text" name="judul" value="Informations globales pour tous les membres"
        class="form-control" placeholder="Title" required>
        </div>

        <div>
          Description
        </div>
        <textarea class="textarea" name="isi" placeholder="Place some text here" required></textarea>

        <div class="input-group mb-9" style="margin-top:10px;">
        <span style="padding: 15px 15px 0px 0px;">Is Active</span>
        <select style="margin-top:10px;" class="form-control" name="isaktif">
          <option value="0">No</option>
          <option value="1" selected>Yes</option>
        </select>
        </div>

        <div class="input-group mb-9" style="margin-top:10px;">
        <span style="padding: 15px 15px 0px 0px;">Send notification to members</span>
        <select style="margin-top:10px;" class="form-control" name="isshownotif">
          <option value="0">No</option>
          <option value="1" selected>Yes</option>
        </select>
        </div>

        </div>
        <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="addmoninfo" class="btn btn-primary">Add</button>
        </div>
        </form>
        </div>
    </div>
  </div>      
                                                                     
     <?php 
if(isset($_POST['updatemoninfo'])){
  if(($_POST['judul'])){
    $sql = "UPDATE tb_informasi SET
        judul = '$_POST[judul]',
        isi = '$_POST[isi]',
        isaktif = '$_POST[isaktif]'
        where id_info = '$_POST[id_info]'";
      mysqli_query($koneksi, $sql);

    if($_POST['isshownotif'] == '1') {
      class startSendNotification {
        function sendNotificat($titleNoti, $bodyNoti, $imageNoti, $dataNomor) {
          define( 'API_ACCESS_KEY', 'AAAARVfjooY:APA91bEAKbWGNffjb80WnOsnE4U_iNWJOUhW1UqiMsnLiJXah2oFmEcn2Y5EcBvUeCWHWgAfBwmFZHhnCdKvyvrUf4m7okrNCICisXtzNyxfKu4F8FxfhXcnxPICACaUrLQJekNqYZPy');
          include('../db.php');
          $ewww = mysqli_query($koneksi,"SELECT * from user where token_push != '' ");
          while ($tyu = mysqli_fetch_array($ewww)){
            $qw[] = $tyu['token_push'];
          }
  
          $fcmMsg = array(
            'title' => $titleNoti,
            'body' => $bodyNoti,
            'icon' => 'image/look24-logo-s.png',
            'sound' => 'default',
            'image' => $imageNoti 
          );
  
          $fcmData = array(
            'halaman' => 'moninfo',
            'nomor' => $dataNomor,
          );
          
          $fcmFields = array(
            'registration_ids' => $qw,
            'priority' => 'high',
            'notification' => $fcmMsg,
            'data' => $fcmData
          );
  
          $headers = array(
            'Authorization: key=' . API_ACCESS_KEY,
            'Content-Type: application/json'
          );
          
          $ch = curl_init();
          curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
          curl_setopt( $ch,CURLOPT_POST, true );
          curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
          curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
          curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
          curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fcmFields ) );
          $result = curl_exec($ch );
          curl_close( $ch );
          echo $result . "\n\n".$qw;
        }
      }

      $gambar_kategori = "https://ufe-section-indonesie.org/ufeapp/images/logo/ufe_monde.png";
      $tgl = date('d/m/Y');

      // mysqli_query($koneksi,"INSERT INTO tb_notification(kategori, judul, isi, keterangan, tanggal, gambar, data, kepada, dibaca, dihapus) 
      //   VALUES ('moninfo', 'UFE Monde', '$_POST[judul]', 'Admin Monde', '$tgl', '$gambar_kategori', '$_POST[id_info]', 'all', '-', '-')");
      $callNoti = new startSendNotification();
      $callNoti->sendNotificat('UFE Monde', $_POST['judul'], $gambar_kategori, $_POST['id_info']);
    }

    ?>
    <script>
    alert("Data changed successfully <?php echo mysqli_error($koneksi); ?>");
    location = "?p=moninfo";
    </script>
    <?php 

  } 
}
 ?>
    <div class="table-responsive" style="padding:5px;">
      <table class="display responsive nowrap" id="example23">
        <thead>
          <tr>
            <th>No. </th>
            <th>Options</th>    
            <th>Date</th>                   
            <th>Title</th>
            <th>Is Active</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          include('../db.php');
          $kj = mysqli_query($koneksi,"SELECT * from tb_informasi where jenis = '1' order by isaktif desc, id_info desc");
          $no = 1;
          while($kj2 = mysqli_fetch_array($kj)){
              $idd = $kj2['id_info'];
              ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><a data-toggle="modal" data-target="#modal-lg2_<?php echo $idd ?>" href="" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a></td> 
                <td><?php echo $kj2['tanggal'] ?></td>
                <td><?php echo $kj2['judul'] ?></td>
                <td><?php echo $kj2['isaktif'] == '1' ? "Yes" : "No"; ?></td>
                <td><?php echo $kj2['isi'] ?></td>              
              </tr>
            
              <div class="modal fade" id="modal-lg2_<?php echo $idd; ?>">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Edit Global information</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form method="POST" enctype="multipart/form-data" >
                    <div class="modal-body" style="overflow:scroll;height:70vh">


                    <div class="input-group mb-3" style="margin-top:10px;">
                    <div class="input-group-prepend">
                      <span class="input-group-text" style="width:120px;">Title</span>
                    </div>
                    <input type="hidden" name="id_info" value="<?php echo $idd ?>" />
                    <input type="text" name="judul" value="<?php echo $kj2['judul'] ?>" 
                    class="form-control" placeholder="Name" required>
                    </div>
      
                    <div style="margin-top:15px;">
                        Description
                    </div>
                    <textarea class="textarea" name="long_desc" placeholder="Place some text here"><?php echo $kj2['isi'] ?></textarea>


                    <div class="input-group mb-9" style="margin-top:10px;">
                    <span style="padding: 15px 15px 0px 0px;">Is Active</span>
                    <select style="margin-top:10px;" class="form-control" name="isaktif">
                    <?php 
                      if($kj2['isaktif'] == '1') {
                        echo '<option value="0">No</option><option value="1" selected>Yes</option>';
                      } else {
                        echo '<option value="0" selected>No</option><option value="1">Yes</option>';
                      }
                    ?>
                    </select>
                    </div>

                    <div class="input-group mb-9" style="margin-top:10px;">
                    <span style="padding: 15px 15px 0px 0px;">Send notification to members</span>
                    <select style="margin-top:10px;" class="form-control" name="isshownotif">
                      <option value="0" selected>No</option>
                      <option value="1">Yes</option>
                    </select>
                    </div>

                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" name="updatemoninfo" class="btn btn-primary">Save changes</button>
                    </div>
                  </form>
                </div>
              </div>
              </div>
             <?php $no++;} ?>          
        </tbody>
      </table>
    </div>
</div>
</div>

<?php } else if($_GET['p'] == "home") { ?>
 <div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
       
    <div class="row" >
    <div class="col">
           <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="?p=tb_dm_1">Home</a></li>
      <li class="breadcrumb-item"><a href="?p=tulisan">Tulisan</a></li>
                            
              <li class="breadcrumb-item active">Halaman Depan</li>
                            </ol>
      
      
      <!--
<center>
      <fieldset style="background-color:grey;width:90%;max-width:500px;align:center;">
      tessss
      </fieldset>
    </center> 
      -->
      </div>
    </div>
  
</div>
<div>
    <center>
      <?php 
      include('../db.php');
      $kl = mysqli_query($koneksi,"select * from tb_halaman_depan limit 1");
      $kl2 = mysqli_fetch_array($kl);
      
      
      ?>
      
      <fieldset style="margin-top:10px;background-color:white;
      height:80vh;overflow:scroll;
      width:90%;max-width:500px;">
      <image src="foto.png" style="width:100%;height:auto;" />
      <br>
      <br>
      <!--<div style="margin-left:20px;text-align:left;">
      <image src="menuhome/bon.png" style="width:100px;" />
      </div>
      <div style="margin-top:10px;margin-left:20px;color:#707070;text-align:left;margin-right:20px;">
      <?php echo $kl2['tulisan1'] ?>
      </div>-->
      <!--<div data-toggle="modal" data-target="#modal-lg" style="margin-top:0px;cursor:pointer;margin-left:20px;color:#013173;text-align:right;margin-right:20px;">
      Edit
      </div>-->   
  <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <form method="POST" action="edittulisan.php">
      <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Text2</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" style="height:70vh;overflow:scroll;">
      <input type="hidden" name="ket_tulisan" value="tulisan1" />
              <textarea id="" type="text" class="form-control" style="height:50vh;" name="tulisan"
        placeholder="place some text here" required><?php echo $kl2['tulisan1'] ?></textarea>
            </div>
      
      
          <textarea id="" class="p-3">
<div class="info-box bg-gradient-info">
  <span class="info-box-icon"><i class="far fa-bookmark"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">Bookmarks</span>
    <span class="info-box-number">41,410</span>
    <div class="progress">
      <div class="progress-bar" style="width: 70%"></div>
    </div>
    <span class="progress-description">
      70% Increase in 30 Days
    </span>
  </div>
</div>
              </textarea>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </div>
      </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
      
      
    








  <div style="margin-left:20px;text-align:left;">
  
  <table>
  <tbody>
  <tr>
  <td style="width:30%;">
      <image src="apm2.png" style="width:100px;" />
    </td>
    <td style="padding-left:10px;font-weight:100;color:#707070" valign="bottom">
      <image src="apm.png" style="width:150px;" /><br>
      Presidént UFE Indonésie
    
    </td>
    </tr> 
      </tbody>
      </table>
      
      </div>
      <div style="margin-top:10px;margin-left:20px;color:#707070;text-align:left;margin-right:20px;">
      <?php echo $kl2['tulisan8'] ?>
      </div>
      <div data-toggle="modal" data-target="#modal-lg_apm" style="margin-top:0px;cursor:pointer;margin-left:20px;color:#013173;text-align:right;margin-right:20px;">
      Edit
      </div>    
  <div class="modal fade" id="modal-lg_apm">
        <div class="modal-dialog modal-lg">
          <form method="POST" action="edittulisan.php">
      <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Text3</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" style="text-align:left;height:70vh;overflow:scroll;">
      <input type="hidden" name="ket_tulisan" value="tulisan8" />
              <textarea class="textarea" name="tulisan"
         required><?php echo $kl2['tulisan8'] ?></textarea>
            
      

      
      
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </div>
      </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
      
      
      
      

    
      
      
      
      
      <div style="margin-top:10px;margin-left:20px;margin-right:20px;">
    <table >
    <tbody>
    <tr>
    <td style="width:20%;vertical-align:center;">
    <image src="menuhome/ufe2.png" style="width:80px;" />
    <td>
    <td style="width:60%;padding-left:20px;vertical-align:center;color:#707070;font-weight:100;">
    <div style="color:#013173;font-weight:500;font-size:20px;">UFE Indonésie</div>
    <?php echo $kl2['tulisan2']; ?>
    <div data-toggle="modal" data-target="#modal-lg2" style="margin-top:0px;cursor:pointer;
    margin-left:20px;color:#013173;text-align:right;margin-right:20px;">
      Edit
      </div>    
  <div class="modal fade" id="modal-lg2">
        <div class="modal-dialog modal-lg">
          <form method="POST" action="edittulisan.php">
      <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Text4</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" style="height:70vh;overflow-y:scroll;text-align:left;">
      <input type="hidden" name="ket_tulisan" value="tulisan2" />
              <textarea type="text" class="textarea" style="height:50vh;" name="tulisan"
        placeholder="place some text here" required><?php echo $kl2['tulisan2'] ?></textarea>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </div>
      </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>    
    </td>
    <td style="width:20%;text-align:right;vertical-align:center;">
    <image src="menuhome/grupp27.png" style="width:30px;" />
    <td>
    
    
    </tr>
    <tbody>
    </table>  
      </div>
      
      
        <div style="margin-top:10px;margin-left:20px;color:#707070;text-align:left;margin-right:20px;">
      <?php echo $kl2['tulisan3'] ?>
      </div>
      <div data-toggle="modal" data-target="#modal-lg3" style="margin-top:0px;cursor:pointer;margin-left:20px;color:#013173;text-align:right;margin-right:20px;">
      Edit
      </div>    
  <div class="modal fade" id="modal-lg3">
        <div class="modal-dialog modal-lg">
          <form method="POST" action="edittulisan.php">
      <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Text</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" style="height:70vh;overflow-y:scroll;text-align:left;">
      <input type="hidden" name="ket_tulisan" value="tulisan3" />
              <textarea  type="text" class="textarea" style="height:50vh;" name="tulisan"
        placeholder="place some text here" required><?php echo $kl2['tulisan3'] ?></textarea>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </div>
      </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>    
      
      
      
      
      
      
      
      
      
      <div style="margin-top:10px;margin-left:20px;margin-right:20px;">
    <table >
    <tbody>
    <tr>
    <td style="width:20%;vertical-align:center;">
    <image src="menuhome/indo.png" style="width:80px;" />
    <td>
    <td style="width:60%;padding-left:20px;vertical-align:center;color:#707070;font-weight:100;">
    <div style="color:#6F592E;font-weight:500;font-size:20px;"><?php echo $kl2['tulisan4'] ?>
    
    </div>
    <div data-toggle="modal" data-target="#modal-lg4" style="margin-top:0px;cursor:pointer;
    margin-left:20px;color:#013173;text-align:right;margin-right:20px;">
      Edit
      </div>
    <?php echo $kl2['tulisan5']; ?>
    <div data-toggle="modal" data-target="#modal-lg5" style="margin-top:0px;cursor:pointer;
    margin-left:20px;color:#013173;text-align:right;margin-right:20px;">
      Edit
      </div>


  <div class="modal fade" id="modal-lg4">
        <div class="modal-dialog modal-lg">
          <form method="POST" action="edittulisan.php">
      <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Text</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" style="height:70vh;overflow-y:scroll;text-align:left;">
      <input type="hidden" name="ket_tulisan" value="tulisan4" />
              <textarea id="summernote4" type="text" class="textarea" style="height:50vh;" name="tulisan"
        placeholder="place some text here" required><?php echo $kl2['tulisan4'] ?></textarea>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </div>
      </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>  
      
  <div class="modal fade" id="modal-lg5">
        <div class="modal-dialog modal-lg">
          <form method="POST" action="edittulisan.php">
      <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Text</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" style="height:70vh;overflow-y:scroll;text-align:left;">
      <input type="hidden" name="ket_tulisan" value="tulisan5" />
              <textarea id="summernote5" type="text" class="textarea" style="height:50vh;" name="tulisan"
        placeholder="place some text here" required><?php echo $kl2['tulisan5'] ?></textarea>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </div>
      </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>    
    </td>
    <td style="width:20%;text-align:right;vertical-align:center;">
    <image src="menuhome/grupp27.png" style="width:30px;" />
    <td>
    
    
    </tr>
    <tbody>
    </table>  
      </div>  
      
      
      
      
      
      
      
      
      
        <div style="margin-top:10px;margin-left:20px;color:#707070;text-align:left;margin-right:20px;">
      <?php echo $kl2['tulisan6'] ?>
      </div>
      <div data-toggle="modal" data-target="#modal-lg6" style="margin-top:0px;cursor:pointer;margin-left:20px;color:#013173;text-align:right;margin-right:20px;">
      Edit
      </div>    
  <div class="modal fade" id="modal-lg6">
        <div class="modal-dialog modal-lg">
          <form method="POST" action="edittulisan.php">
      <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Text</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" style="height:70vh;overflow-y:scroll;text-align:left;">
      <input type="hidden" name="ket_tulisan" value="tulisan6" />
              <textarea id="summernote6" type="text" class="textarea" style="height:50vh;" name="tulisan"
        placeholder="place some text here" required><?php echo $kl2['tulisan6'] ?></textarea>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </div>
      </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>    
      
      
      
      
      
      
        <div style="margin-top:10px;margin-left:20px;margin-right:20px;">
    <table >
    <tbody>
    <tr>
    <td style="width:20%;vertical-align:center;">
    <image src="menuhome/bg_demarches2.png" style="width:80px;" />
    <td>
    <td style="width:60%;padding-left:20px;vertical-align:center;color:#707070;font-weight:100;">
    <div style="color:#6F592E;font-weight:500;font-size:20px;"><?php echo $kl2['tulisan9'];?></div>
    <div data-toggle="modal" data-target="#modal-lg9" style="margin-top:0px;cursor:pointer;margin-left:20px;color:#013173;text-align:right;margin-right:20px;">
      Edit
      </div>  
    <?php echo $kl2['tulisan10'] ?>&nbsp;&nbsp;<span style="color:#013173;cursor:pointer;" data-toggle="modal" data-target="#modal-lg10">Edit</span>
  <!--  <div data-toggle="modal" data-target="#modal-lg9" style="margin-top:0px;cursor:pointer;
    margin-left:20px;color:#013173;text-align:right;margin-right:20px;">
      Edit
      </div> -->
      <div class="modal fade" id="modal-lg9">
        <div class="modal-dialog modal-lg">
          <form method="POST" action="edittulisan.php">
      <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Text</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" style="height:70vh;overflow-y:scroll;text-align:left;">
      <input type="hidden" name="ket_tulisan" value="tulisan9" />
              <textarea id="summernote7" type="text" class="textarea" style="height:50vh;" name="tulisan"
        placeholder="place some text here" required><?php echo $kl2['tulisan9'] ?></textarea>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </div>
      </form>
        
        </div>
        
        
    </td>
    <td style="width:20%;text-align:right;vertical-align:center;">
    <image src="menuhome/grupp27.png" style="width:30px;" />
    <td>
    
    
    </tr>
    <tbody>
    </table>  
      </div>  
      
      
      
      
      <div class="modal fade" id="modal-lg10">
        <div class="modal-dialog modal-lg">
          <form method="POST" action="edittulisan.php">
      <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Text</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" style="height:70vh;overflow-y:scroll;text-align:left;">
      <input type="hidden" name="ket_tulisan" value="tulisan10" />
              <textarea id="summernote7" type="text" class="textarea" style="height:10vh;" name="tulisan"
        placeholder="place some text here" required><?php echo $kl2['tulisan10'] ?></textarea>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </div>
      </form>
        
        </div>
      </div>
      
      
      
      
      
        <div style="margin-top:10px;margin-left:20px;color:#707070;text-align:left;margin-right:20px;">
      <?php echo $kl2['tulisan7'] ?>
      </div>
      <div data-toggle="modal" data-target="#modal-lg7" style="margin-top:0px;cursor:pointer;margin-left:20px;color:#013173;text-align:right;margin-right:20px;">
      Edit
      </div>    
  <div class="modal fade" id="modal-lg7">
        <div class="modal-dialog modal-lg">
          <form method="POST" action="edittulisan.php">
      <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Text</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" style="height:70vh;overflow:scroll;text-align:left;">
      <input type="hidden" name="ket_tulisan" value="tulisan7" />
              <textarea id="summernote8" type="text" class="textarea" style="height:50vh;" name="tulisan"
        placeholder="place some text here" required><?php echo $kl2['tulisan7'] ?></textarea>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </div>
      </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>    
      
      </fieldset>
      
      
      
      
    </center> 
      </div>
   </div>

  <?php
} ?>
<script>
  $(function () {
   //  Summernote
    $('.textarea').summernote()
  })
</script>
   <input value="Jakarta" id="ttt" type="hidden" />
      <input value="-6.2146,106.8451" id="tttt" type="hidden" />
    <input value="139.255.197.114" type="hidden" id="tt" />
    <input value="139.255.197.114" type="hidden" id="ttss" />
    <input value="42616347" type="hidden" id="ttsss" />





 <div id="boxx"></div>
  </div>
 <footer class="main-footer">
    <strong>Copyright &copy; 2021 UFE Indonesie</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
    </div>
  </footer>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script>
$(document).ready(function() {
    $('#example23').DataTable();
} );

</script>

<!-- <script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script> -->
<script>
 // $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/chart.js/Chart.min.js"></script>
<script src="plugins/sparklines/sparkline.js"></script>
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="dist/js/adminlte.js"></script>

<script src="dist/js/demo.js"></script>

<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>


<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>


<!-- 

<script language="javascript">
//membuat document jquery
$(document).ready(function(){
  

  
   function loadLog(){
    //var oldscrolHeight = $("#boxx").attr("scrollHeight") - 20;
    var tt = document.getElementById("tt").value;
    var ttt = document.getElementById("ttt").value;
    var tttt = document.getElementById("tttt").value;
    
    $.ajax({
      
      
      
      url : "https://autofotocopy.com/chatt32.php?tt="+tt+"&kote="+ttt+"&n="+tttt,
      cache : false,
      success : function(html){
        $("#boxx").html(html); //load ke <div chatbox>
      //  var newscrollHeight = $("#boxx").attr("scrollHeight") - 20;
      //  if(newscrollHeight > oldscrollHeight){
      //    $("#boxx").animate({scrollTop: newscrollHeight}, 'normal'); //scrol otomatisnya
      //  }
      },
    });
    //alert(tt+ttt+tttt);
  }
  



  setInterval (loadLog, 1000);

  
  
});
</script> -->



<script>


/*
 * Author: Abdullah A Almsaeed
 * Date: 4 Jan 2014
 * Description:
 *      This is a demo file used only for the main dashboard (index.html)
 **/

$(function () {

  'use strict'

  // bootstrap WYSIHTML5 - text editor
  $('.textarea').summernote()

  $('.daterange').daterangepicker({
    ranges   : {
      'Today'       : [moment(), moment()],
      'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
      'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
      'Last 30 Days': [moment().subtract(29, 'days'), moment()],
      'This Month'  : [moment().startOf('month'), moment().endOf('month')],
      'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    },
    startDate: moment().subtract(29, 'days'),
    endDate  : moment()
  }, function (start, end) {
    window.alert('You chose: ' + start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
  })

  /* jQueryKnob */
  $('.knob').knob()

  // jvectormap data
  var visitorsData = {
    'US': 398, //USA
    'SA': 400, //Saudi Arabia
    'CA': 1000, //Canada
    'DE': 500, //Germany
    'FR': 760, //France
    'CN': 300, //China
    'AU': 700, //Australia
    'BR': 600, //Brazil
    'IN': 800, //India
    'GB': 320, //Great Britain
    'RU': 3000 //Russia
  }
  // World map by jvectormap
  $('#world-map').vectorMap({
    map              : 'usa_en',
    backgroundColor  : 'transparent',
    regionStyle      : {
      initial: {
        fill            : 'rgba(255, 255, 255, 0.7)',
        'fill-opacity'  : 1,
        stroke          : 'rgba(0,0,0,.2)',
        'stroke-width'  : 1,
        'stroke-opacity': 1
      }
    },
    series           : {
      regions: [{
        values           : visitorsData,
        scale            : ['#ffffff', '#0154ad'],
        normalizeFunction: 'polynomial'
      }]
    },
    onRegionLabelShow: function (e, el, code) {
      if (typeof visitorsData[code] != 'undefined')
        el.html(el.html() + ': ' + visitorsData[code] + ' new visitors')
    }
  })

  // Sparkline charts
  //var sparkline1 = new Sparkline($("#sparkline-1")[0], {width: 80, height: 50, lineColor: '#92c1dc', endColor: '#ebf4f9'});
 // var sparkline2 = new Sparkline($("#sparkline-2")[0], {width: 80, height: 50, lineColor: '#92c1dc', endColor: '#ebf4f9'});
 // var sparkline3 = new Sparkline($("#sparkline-3")[0], {width: 80, height: 50, lineColor: '#92c1dc', endColor: '#ebf4f9'});

 // sparkline1.draw([1000, 1200, 920, 927, 931, 1027, 819, 930, 1021]);
 // sparkline2.draw([515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921]);
//  sparkline3.draw([15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21]);

  // The Calender
  $('#calendar').datetimepicker({
    format: 'L',
    inline: true
  })

  // SLIMSCROLL FOR CHAT WIDGET
  $('#chat-box').overlayScrollbars({
    height: '250px'
  })

})


</script>





<!--

 <script src="fashi/js/jquery-3.3.1.min.js"></script>
    <script src="fashi/js/bootstrap.min.js"></script>
    <script src="fashi/js/jquery-ui.min.js"></script>
    <script src="fashi/js/jquery.countdown.min.js"></script>
    <script src="fashi/js/jquery.nice-select.min.js"></script>
    <script src="fashi/js/jquery.zoom.min.js"></script>
    <script src="fashi/js/jquery.dd.min.js"></script>
    <script src="fashi/js/jquery.slicknav.js"></script>
    <script src="fashi/js/owl.carousel.min.js"></script>
    <script src="fashi/js/main.js"></script>


-->










<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>

<script src="plugins/summernote/summernote-bs4.min.js"></script>
















    <!-- Page level plugins -->

   <!-- <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="https://rp.fratekindo.com/media/js/jquery.dataTables.js"></script>
    <script src="assets/vendor/datatables/responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/vendor/datatables/responsive/js/responsive.bootstrap4.min.js"></script> -->



    <script src="assets/vendor/datatables/buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/vendor/datatables/buttons/js/buttons.bootstrap4.min.js"></script>
    
    
    
    <script src="assets/vendor/datatables/jszip/jszip.min.js"></script>
    <script src="assets/vendor/datatables/pdfmake/pdfmake.min.js"></script>
    <script src="assets/vendor/datatables/pdfmake/vfs_fonts.js"></script>
    <script src="assets/vendor/datatables/buttons/js/buttons.html5.min.js"></script>
    <script src="assets/vendor/datatables/buttons/js/buttons.print.min.js"></script>
    <script src="assets/vendor/datatables/buttons/js/buttons.colVis.min.js"></script>

    <script src="assets/vendor/gijgo/js/gijgo.min.js"></script>





<script type="text/javascript">
        $(function() {
            $('.date').datepicker({
                uiLibrary: 'bootstrap4',
                format: 'yyyy-mm-dd'
            });

            var start = moment().subtract(29, 'days');
            var end = moment();

            function cb(start, end) {
                $('#tangal').val(start.format('YYYY-MM-DD') + ' - ' + end.format('YYYY-MM-DD'));
            }

            $('#tanggal').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Hari ini': [moment(), moment()],
                    'Kemarin': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    '7 hari terakhir': [moment().subtract(6, 'days'), moment()],
                    '30 hari terakhir': [moment().subtract(29, 'days'), moment()],
                    'Bulan ini': [moment().startOf('month'), moment().endOf('month')],
                    'Bulan lalu': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
                    'Tahun ini': [moment().startOf('year'), moment().endOf('year')],
                    'Tahun lalu': [moment().subtract(1, 'year').startOf('year'), moment().subtract(1, 'year').endOf('year')]
                }
            }, cb);

            cb(start, end);
        });

        $(document).ready(function() {
            var table = $('#dataTable').DataTable({
                buttons: ['copy', 'csv', 'print', 'excel', 'pdf'],
                dom: "<'row px-2 px-md-4 pt-2'<'col-md-3'l><'col-md-5 text-center'B><'col-md-4'f>>" +
                    "<'row'<'col-md-12'tr>>" +
                    "<'row px-2 px-md-4 py-3'<'col-md-5'i><'col-md-7'p>>",
                lengthMenu: [
                    [ 10, 25, 50, 100, -1],
                    [ 10, 25, 50, 100, "All"]
                ],
                columnDefs: [{
                    targets: -1,
                    orderable: false,
                    searchable: false
                }]
            });

            table.buttons().container().appendTo('#dataTable_wrapper .col-md-5:eq(0)');
      
      
      
      
      
      
      
      
      $('#example tfoot th').each( function () {
    var title = $(this).text();
    $(this).html( '<input type="text" class="form-control" placeholder="Search '+title+'" />' );
  } );

  // DataTable
  var table = $('#example').DataTable({
  
  lengthMenu: [
                    [ 5,10, 25, 50, 100, -1],
                    [ 5,10, 25, 50, 100, "All"]
                ],
  
   buttons: ['copy', 'csv', 'print', 'excel', 'pdf'],
                dom: "<'row px-2 px-md-4 pt-2'<'col-md-3'l><'col-md-5 text-center'B><'col-md-4'f>>" +
                    "<'row'<'col-md-12'tr>>" +
                    "<'row px-2 px-md-4 py-3'<'col-md-5'i><'col-md-7'p>>",
               

  
  
  
    "scrollY": 200,
    "scrollX": true,
  
    initComplete: function () {
      // Apply the search
      this.api().columns().every( function () {
        var that = this;

        $( 'input', this.footer() ).on( 'keyup change clear', function () {
          if ( that.search() !== this.value ) {
            that
              .search( this.value )
              .draw();
          }
        } );
      } );
    }
  });
      
      
      
      
      
      
            var table23 = $('#dataTable23').DataTable({
                buttons: ['copy', 'csv', 'print', 'excel', 'pdf'],
                dom: "<'row px-2 px-md-4 pt-2'<'col-md-3'l><'col-md-5 text-center'B><'col-md-4'f>>" +
                    "<'row'<'col-md-12'tr>>" +
                    "<'row px-2 px-md-4 py-3'<'col-md-5'i><'col-md-7'p>>",
                lengthMenu: [
                    [ 10, 25, 50, 100, -1],
                    [ 10, 25, 50, 100, "All"]
                ],
                columnDefs: [{
                    targets: -1,
                    orderable: false,
                    searchable: false
                }]
            });

            table23.buttons().container().appendTo('#dataTable_wrapper .col-md-5:eq(0)');
      
      var table2 = $('#dataTable2').DataTable({
                buttons: ['copy', 'csv', 'print', 'excel', 'pdf'],
                dom: "<'col-md-5 text-center'B>",
                   // "<'row'<'col-md-12'tr>>" +
                 //   "<'row px-2 px-md-4 py-3'<'col-md-5'i><'col-md-7'p>>",
                lengthMenu: [
                    [50, 100, -1],
                    [50, 100, "All"]
                ],
              //  columnDefs: [{
                //    targets: -1,
               //     orderable: false,
               //     searchable: false
              //  }]
            });

            table2.buttons().container().appendTo('#dataTable_wrapper .col-md-5:eq(0)');
      
      
      
      
        });
    </script>





</body>
</html>
<?php } ?>














