<?php if($_COOKIE['email'] == ""){ ?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin UFE | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

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
setcookie("email", $_POST['email'], time()+3600);

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
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Sementara</title>
  <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
      
  
  
  
  <link rel="stylesheet" href="fashi/css/owl.carousel.min.css" type="text/css">
  
  
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
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="position: fixed;">
    <!-- Brand Logo -->
    <a href="admin.php" class="brand-link elevation-4">
      <img src="dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Halaman Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="padding-top:10px;margin-top:60px;">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="men.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.php?p=home" class="nav-link">
            <!-- <i class="nav-icon fas fa-adjust"></i> -->
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>
		  
		  		 
		  
		     <li class="nav-item">
            <a href="#" class="nav-link">

              <i class="nav-icon fas fa-flag"></i>
              <p>
                Tb Indonésie
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?p=menu&id_menu=1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Geographie</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?p=menu&id_menu=2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Demographie</p>
                </a>
              </li>
   <li class="nav-item">
                <a href="index.php?p=menu&id_menu=3" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Economie</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?p=menu&id_menu=4" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Historie</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?p=menu&id_menu=5" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Politique</p>
                </a>
              </li>
			 
            </ul>
          </li>
	
		  <li class="nav-item">
            <a href="index.php?p=data_presiden" class="nav-link">
            <i class="nav-icon far fa-flag"></i>
              <p>
                Tb President
              </p>
            </a>
          </li>
		   <li class="nav-item">
            <a href="index.php?p=info_member" class="nav-link">
            <i class="nav-icon far fa-flag"></i>
              <p>
                Info Member
              </p>
            </a>
          </li>
		  <li class="nav-item">
            <a href="index.php?p=tb_dm_1" class="nav-link">
            <i class="nav-icon fas fa-adjust"></i>
              <p>
                Tb Demarches
              </p>
            </a>
          </li>
		  <li class="nav-item">
            <a href="index.php?p=tb_ufe" class="nav-link">
            <i class="nav-icon fas fa-adjust"></i>
              <p>
                Tb UFE
              </p>
            </a>
          </li>
		  
		 
		     <li class="nav-item">
            <a href="#" class="nav-link">

              <i class="nav-icon fab fa-mendeley"></i>
              <p>
                Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?p=menu&id_menu=1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Menu 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?p=menu&id_menu=2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Menu 2</p>
                </a>
              </li>
   <li class="nav-item">
                <a href="index.php?p=menu&id_menu=3" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Menu 3</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?p=menu&id_menu=4" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Menu 4</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="index.php?p=menu&id_menu=5" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Menu 5</p>
                </a>
              </li>
            </ul>
          </li>
		  
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
                <a href="index.php?p=user_vip_belum_dikonfirmasi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Need Confirm</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?p=user_vip_sudah_dikonfirmasi" class="nav-link">
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
                <a href="index.php?p=user_personal_belum_dikonfirmasi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Need Confirm</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?p=user_personal_sudah_dikonfirmasi" class="nav-link">
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
                <a href="index.php?p=order_dikonfirmasi_sedang_aktif" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sedang Aktif</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?p=order_dikonfirmasi_histori" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>History</p>
                </a>
              </li>
     <li class="nav-item">
                <a href="index.php?p=order_menunggu_konfirmasi" class="nav-link">
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
  
  
  
 <?php if($_GET['p'] == "demar2"){ ?>
	
	 <div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
             <div class="col">
<?php 
include('../db.php');
$qw = mysqli_query($koneksi,"select * from tb_menu where id_menu = '$_GET[id]'");
$qw2 = mysqli_fetch_array($qw);
?>


                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Import <?php echo $qw2['nama_menu'] ?>                 </h4>
            </div>
</div>
<?php
//KONEKSI.. 

//error_reporting(E_ALL ^ E_DEPRECATED);
//mysql_connect($host,$username,$password);
//mysql_select_db($database);

include('../db.php');

if (isset($_POST['submit'])) {//Script akan berjalan jika di tekan tombol submit..

//Script Upload File..
    if (is_uploaded_file($_FILES['filename']['tmp_name'])) {
      //  echo "<h1>" . "File ". $_FILES['filename']['name'] ." Berhasil di Upload" . "</h1>";
      //  echo "<h2>Menampilkan Hasil Upload:</h2>";
     //   readfile($_FILES['filename']['tmp_name']);
    }
	
		if($_FILES['filename']['tmp_name'] == null){
		?>
		<script>
		alret('file tidak boleh kosong');
		</script>
		<?php
	}else if($_FILES['filename']['tmp_name'] == ""){
		?>
		<script>
		alret('file tidak boleh kosong');
		</script>
		<?php
	}else if(empty($_FILES['filename']['tmp_name'])){
		?>
		<script>
		alret('file tidak boleh kosong');
		</script>	
		<?php
	}else{
	
    //Import uploaded file to Database, Letakan dibawah sini..
    $handle = fopen($_FILES['filename']['tmp_name'], "r"); //Membuka file dan membacanya
    while (($data = fgetcsv($handle, 100000, ",")) !== FALSE) {
		
		$data0 = str_replace("'","\'",$data[0]);
		$data1 = str_replace("'","\'",$data[1]);
		$data2 = str_replace("'","\'",$data[2]);
		
        $import="INSERT into tb_demar2 (id_kategori,judul,judul2,short_desc,long_desc,gambar,visibility)
		values ('$_POST[idk]','$data0','$data1','$data2','$data2','comingsoon.png','1')"; //data array sesuaikan dengan jumlah kolom pada CSV anda mulai dari “0” bukan “1”
       $query33 = mysqli_query($koneksi,$import); //Melakukan Import
    }
	
	if($query33){
	echo "Data berhasil di import";
	?>
	<script>
	location = "index.php?p=rincian&id=<?php echo $_POST['idk'] ?>";
	</script>

<?php	
}else{
	echo "Data gagal di import, keterangan error: ".mysqli_error($koneksi)."<br><br>".$_FILES['filename']['tmp_name'];
	
}
	}

	
    fclose($handle); //Menutup CSV file
  //  echo "<br><strong>Import data selesai.</strong>";
   
}else { //Jika belum menekan tombol submit, form dibawah akan muncul.. ?>


<img style="width:100%;height:auto;" src="c1.PNG" /><br>
Langkah - langkah import:<br>
1. Siapkan data excel seperti gambar di atas<br>
2. Save data dalam format .csv<br>
3. Pilih tombol upload di bawah.

<!-- Form Untuk Upload File CSV-->
   Silahkan masukan file csv yang ingin diupload<br /> 
   <form enctype='multipart/form-data' action='' method='post'>
    Cari CSV File anda:<br />
	
	<input name="idk" value="<?php echo $_GET['id'] ?>" type="hidden" />
	<input type='file' name='filename' size='100'>
   <input type='submit' name='submit' value='Upload'></form>

<?php } mysqli_close(); //Menutup koneksi SQL?>



</div>
</div>






 <?php }else if($_GET['p'] == "demar3"){
//ini_set('display_errors', '1');
//ini_set('display_startup_errors', '1');
//error_reporting(E_ALL);

	 ?>


 <div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
              <div class="col">
<?php 
include('../db.php');
$qw = mysqli_query($koneksi,"select * from tb_demar2 where id_demar = '$_GET[id]' and visibility = '1'");
$qw2 = mysqli_fetch_array($qw);
?>


                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Import <?php echo $qw2['judul2'] ?>                 </h4>
            </div>
</div>
<?php
//KONEKSI.. 



include('../db.php');

if (isset($_POST['submit'])) {//Script akan berjalan jika di tekan tombol submit..

//Script Upload File..
    if (is_uploaded_file($_FILES['filename']['tmp_name'])) {
      //  echo "<h1>" . "File ". $_FILES['filename']['name'] ." Berhasil di Upload" . "</h1>";
      //  echo "<h2>Menampilkan Hasil Upload:</h2>";
     //   readfile($_FILES['filename']['tmp_name']);
    }
	
	
	if($_FILES['filename']['tmp_name'] == null){
		?>
		<script>
		alret('file tidak boleh kosong');
		</script>
		<?php
	}else if($_FILES['filename']['tmp_name'] == ""){
		?>
		<script>
		alret('file tidak boleh kosong');
		</script>
		<?php
		}else if(empty($_FILES['filename']['tmp_name'])){
		?>
		<script>
		alret('file tidak boleh kosong');
		</script>	
		<?php
	}else{
    //Import uploaded file to Database, Letakan dibawah sini..
    $handle = fopen($_FILES['filename']['tmp_name'], "r"); //Membuka file dan membacanya
	if($handle){
	
    while (($data = fgetcsv($handle, 100000, ",")) !== FALSE) {
		
		$data0 = str_replace("'","\'",$data[0]);
		$data1 = str_replace("'","\'",$data[1]);
		//$data2 = str_replace("'","\'",$data[2]);
		
        $import="INSERT into tb_demar3 (id_kategori,judul,judul2,short_desc,long_desc,gambar,visibility,ket2)
		values ('$_POST[idk]','$data0','$data0','$data1','$data1','comingsoon.png','1','1')"; //data array sesuaikan dengan jumlah kolom pada CSV anda mulai dari “0” bukan “1”
       $query33 = mysqli_query($koneksi,$import); //Melakukan Import
    }
	}else{
		?>
		<script>
		alert('file tidak boleh kosong');
		</script>
		<?php
	}
	if($query33){
	echo "Data berhasil di import";
	?>
	<script>
	location = "index.php?p=rincian2&id=<?php echo $_POST['idk'] ?>";
	</script>

<?php	
}else{
	echo "Data gagal di import, keterangan error: ".mysqli_error($koneksi);
	
}
	}

	//echo "ini".$_FILES['filename']['tmp_name'];
    fclose($handle); //Menutup CSV file
  //  echo "<br><strong>Import data selesai.</strong>";
   
}else { //Jika belum menekan tombol submit, form dibawah akan muncul.. ?>


<img style="width:100%;height:auto;" src="c2.PNG" /><br>
Langkah - langkah import:<br>
1. Siapkan data excel seperti gambar di atas<br>
2. Save data dalam format .csv<br>
3. Pilih tombol upload di bawah.

<!-- Form Untuk Upload File CSV-->
   Silahkan masukan file csv yang ingin diupload<br /> 
   <form enctype='multipart/form-data' action='' method='post'>
    Cari CSV File anda:<br />
	
	<input name="idk" value="<?php echo $_GET['id'] ?>" type="hidden" />
	<input type='file' name='filename' size='100'>
   <input type='submit' name='submit' value='Upload'></form>

<?php } mysqli_close($koneksi); //Menutup koneksi SQL?>



</div>
</div>




 <?php }else if($_GET['p'] == "agent"){ ?>
<div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
              <div class="col">
<?php 
include('../db.php');
$qw = mysqli_query($koneksi,"select * from tb_demar2 where id_demar = '$_GET[id]' and visibility = '1'");
$qw2 = mysqli_fetch_array($qw);
?>


                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Import agent <?php echo $qw2['judul2'] ?>                 </h4>
            </div>
</div>
<?php
//KONEKSI.. 



include('../db.php');

if (isset($_POST['submit'])) {//Script akan berjalan jika di tekan tombol submit..

//Script Upload File..
    if (is_uploaded_file($_FILES['filename']['tmp_name'])) {
      //  echo "<h1>" . "File ". $_FILES['filename']['name'] ." Berhasil di Upload" . "</h1>";
      //  echo "<h2>Menampilkan Hasil Upload:</h2>";
     //   readfile($_FILES['filename']['tmp_name']);
    }
	
	
	if($_FILES['filename']['tmp_name'] == null){
		?>
		<script>
		alret('file tidak boleh kosong');
		</script>
		<?php
	}else if($_FILES['filename']['tmp_name'] == ""){
		?>
		<script>
		alret('file tidak boleh kosong');
		</script>
		<?php
		}else if(empty($_FILES['filename']['tmp_name'])){
		?>
		<script>
		alret('file tidak boleh kosong');
		</script>	
		<?php
	}else{
    //Import uploaded file to Database, Letakan dibawah sini..
    $handle = fopen($_FILES['filename']['tmp_name'], "r"); //Membuka file dan membacanya
    
    
    
      if (is_uploaded_file($_FILES['filename']['tmp_name'])) {
        echo "<h1>" . "File ". $_FILES['filename']['name'] ." Berhasil di Upload" . "</h1>";
        echo "<h2>Menampilkan Hasil Upload:</h2>";
        readfile($_FILES['filename']['tmp_name']);
    }
    
    
	if($handle){
	
    while (($data = fgetcsv($handle, 100000, ";")) !== FALSE) {
		
		$data0 = str_replace("'","\'",$data[0]);
		$data00 = str_replace("–"," ",$data0);
		
		$data1 = str_replace("'","\'",$data[1]);
		$data11 = str_replace("–"," ",$data1);
		
		$data2 = str_replace("'","\'",$data[2]);
		$data22 = str_replace("–"," ",$data2);
		
		$data3 = str_replace("'","\'",$data[3]);
		$data33 = str_replace("–"," ",$data3);
		
		$data4 = str_replace("'","\'",$data[4]);
		$data44 = str_replace("–"," ",$data4);
		
		$data5 = str_replace("'","\'",$data[5]);
		$data55 = str_replace("–"," ",$data5);
		
		$data6 = str_replace("'","\'",$data[6]);
		$data66 = str_replace("–"," ",$data6);
		
		$data7 = str_replace("'","\'",$data[7]);
		$data77 = str_replace("–"," ",$data7);
		
		$data8 = str_replace("'","\'",$data[8]);
		$data88 = str_replace("–"," ",$data8);
		
		$data9 = str_replace("'","\'",$data[9]);
		$data99 = str_replace("–"," ",$data9);
		
		$data10 = str_replace("'","\'",$data[10]);
		$data100 = str_replace("–"," ",$data10);
		
		$data11 = str_replace("'","\'",$data[11]);
		$data111 = str_replace("–"," ",$data11);
		
		$data12 = str_replace("'","\'",$data[12]);
		$data122 = str_replace("–"," ",$data12);
		
		$data13 = str_replace("'","\'",$data[13]);
		$data133 = str_replace("–"," ",$data13);
		
		$data14 = str_replace("'","\'",$data[14]);
		$data144 = str_replace("–"," ",$data14);
		
        $import="INSERT into tb_agent (	
id_kategori,
judul,
short_desc,
long_desc,
gambar,
namaagent,
gmaps,
alamatagent,
alamat2agent,
kotaagent,
kodeposagent,
telpagent,
mobileagent,
emailagent,
webagent,
fbagent,
twiteragent,
igagent,
playstoreagent,
visibility)
		values ('$_POST[idk]','$data0','$data0','$data0','comingsoon.png','$data1',
		'$data2',
		'$data3',
		'$data4',
		'$data5',
		'$data6',
		'$data7',
		'$data8',
		'$data9',
		'$data10',
		'$data11',
		'$data12',
		'$data13',
		'$data14',
		'1')"; //data array sesuaikan dengan jumlah kolom pada CSV anda mulai dari “0” bukan “1”
       $query33 = mysqli_query($koneksi,$import); //Melakukan Import
    }
	}else{
		?>
		<script>
		alert('file tidak boleh kosong');
		</script>
		<?php
	}
	if($query33){
	echo "Data berhasil di import".mysqli_error($koneksi);
	?>
	<script>
	location = "index.php?p=rincian2&id=<?php echo $_POST['idk'] ?>";
	</script>

<?php	
}else{
	echo "Data gagal di import, keterangan error: ".mysqli_error($koneksi);
	
}
	}

	//echo "ini".$_FILES['filename']['tmp_name'];
    fclose($handle); //Menutup CSV file
  //  echo "<br><strong>Import data selesai.</strong>";
   
}else { //Jika belum menekan tombol submit, form dibawah akan muncul.. ?>


<img style="width:100%;height:auto;" src="c3.PNG" /><br><br>
Langkah - langkah import:<br><br>
1. Siapkan data excel seperti gambar di atas<br>
2. Save data dalam format .csv<br>
3. Pilih tombol upload di bawah.<br><br>

<!-- Form Untuk Upload File CSV-->
   Silahkan masukan file csv yang ingin diupload<br /><br> 
   <form enctype='multipart/form-data' action='' method='post'>
    Cari CSV File anda:<br /><br>
	
	<input name="idk" value="<?php echo $_GET['id'] ?>" type="hidden" />
	<input type='file' name='filename' >
   <input type='submit' name='submit' value='Upload'></form>

<?php } mysqli_close($koneksi); //Menutup koneksi SQL?>



</div>
</div>

 <?php } ?>

</div>
</div>











<footer class="main-footer">
    <strong>Copyright &copy; 2021 UFE Indonesie</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
     <!-- <b>Version</b> 3.0.1-->
    </div>
  </footer>
   <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

<!-- ./wrapper -->

<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
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
<!--
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
-->

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
			//	var newscrollHeight = $("#boxx").attr("scrollHeight") - 20;
			//	if(newscrollHeight > oldscrollHeight){
			//		$("#boxx").animate({scrollTop: newscrollHeight}, 'normal'); //scrol otomatisnya
			//	}
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

  // Make the dashboard widgets sortable Using jquery UI
  $('.connectedSortable').sortable({
    placeholder         : 'sort-highlight',
    connectWith         : '.connectedSortable',
    handle              : '.card-header, .nav-tabs',
    forcePlaceholderSize: true,
    zIndex              : 999999
  })
  $('.connectedSortable .card-header, .connectedSortable .nav-tabs-custom').css('cursor', 'move')

  // jQuery UI sortable for the todo list
  $('.todo-list').sortable({
    placeholder         : 'sort-highlight',
    handle              : '.handle',
    forcePlaceholderSize: true,
    zIndex              : 999999
  })

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

  /* Chart.js Charts */
  // Sales chart
  var salesChartCanvas = document.getElementById('revenue-chart-canvas').getContext('2d');
  //$('#revenue-chart').get(0).getContext('2d');


 

  var salesChartData = {
    labels  : ['Aug', 'Sep', 'Oct', 'Nov', 'Dec', 'Jan', 'Feb'],
    datasets: [
      {
        label               : 'Pengunjung',
        backgroundColor     : 'rgba(60,141,188,0.9)',
        borderColor         : 'rgba(60,141,188,0.8)',
        pointRadius          : false,
        pointColor          : '#3b8bba',
        pointStrokeColor    : 'rgba(60,141,188,1)',
        pointHighlightFill  : '#fff',
        pointHighlightStroke: 'rgba(60,141,188,1)',
        data                : ['13', '9', '22', '25', '26', '34', '20']
      },
      {
        label               : 'Electronics',
        backgroundColor     : 'rgba(210, 214, 222, 1)',
        borderColor         : 'rgba(210, 214, 222, 1)',
        pointRadius         : false,
        pointColor          : 'rgba(210, 214, 222, 1)',
        pointStrokeColor    : '#c1c7d1',
        pointHighlightFill  : '#fff',
        pointHighlightStroke: 'rgba(220,220,220,1)',
        data                : ['0', '0', '0', '0', '0', '0', '0']
      },
    ]
  }

  var salesChartOptions = {
    maintainAspectRatio : false,
    responsive : true,
    legend: {
      display: false
    },
    scales: {
      xAxes: [{
        gridLines : {
          display : false,
        }
      }],
      yAxes: [{
        gridLines : {
          display : false,
        }
      }]
    }
  }

  // This will get the first returned node in the jQuery collection.
  var salesChart = new Chart(salesChartCanvas, { 
      type: 'line', 
      data: salesChartData, 
      options: salesChartOptions
    }
  )

  // Donut Chart
  var pieChartCanvas = $('#sales-chart-canvas').get(0).getContext('2d')
  var pieData        = {
    labels: [
        'Instore Sales', 
        'Download Sales',
        'Mail-Order Sales', 
    ],
    datasets: [
      {
        data: [30,12,20],
        backgroundColor : ['#f56954', '#00a65a', '#f39c12'],
      }
    ]
  }
  var pieOptions = {
    legend: {
      display: false
    },
    maintainAspectRatio : false,
    responsive : true,
  }
  //Create pie or douhnut chart
  // You can switch between pie and douhnut using the method below.
  var pieChart = new Chart(pieChartCanvas, {
    type: 'doughnut',
    data: pieData,
    options: pieOptions      
  });

  // Sales graph chart
  var salesGraphChartCanvas = $('#line-chart').get(0).getContext('2d');
  //$('#revenue-chart').get(0).getContext('2d');

  var salesGraphChartData = {
    labels  : ['2011 Q1', '2011 Q2', '2011 Q3', '2011 Q4', '2012 Q1', '2012 Q2', '2012 Q3', '2012 Q4', '2013 Q1', '2013 Q2'],
    datasets: [
      {
        label               : 'Pengunjung',
        fill                : false,
        borderWidth         : 2,
        lineTension         : 0,
        spanGaps : true,
        borderColor         : '#efefef',
        pointRadius         : 3,
        pointHoverRadius    : 7,
        pointColor          : '#efefef',
        pointBackgroundColor: '#efefef',
        data                : [2666, 2778, 4912, 3767, 6810, 5670, 4820, 15073, 10687, 8432]
      }
    ]
  }

  var salesGraphChartOptions = {
    maintainAspectRatio : false,
    responsive : true,
    legend: {
      display: false,
    },
    scales: {
      xAxes: [{
        ticks : {
          fontColor: '#efefef',
        },
        gridLines : {
          display : false,
          color: '#efefef',
          drawBorder: false,
        }
      }],
      yAxes: [{
        ticks : {
          stepSize: 5000,
          fontColor: '#efefef',
        },
        gridLines : {
          display : true,
          color: '#efefef',
          drawBorder: false,
        }
      }]
    }
  }

  // This will get the first returned node in the jQuery collection.
  var salesGraphChart = new Chart(salesGraphChartCanvas, { 
      type: 'line', 
      data: salesGraphChartData, 
      options: salesGraphChartOptions
    }
  )

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
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="assets/vendor/datatables/buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/vendor/datatables/buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/vendor/datatables/jszip/jszip.min.js"></script>
    <script src="assets/vendor/datatables/pdfmake/pdfmake.min.js"></script>
    <script src="assets/vendor/datatables/pdfmake/vfs_fonts.js"></script>
    <script src="assets/vendor/datatables/buttons/js/buttons.html5.min.js"></script>
    <script src="assets/vendor/datatables/buttons/js/buttons.print.min.js"></script>
    <script src="assets/vendor/datatables/buttons/js/buttons.colVis.min.js"></script>
<!--    <script src="assets/vendor/datatables/responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/vendor/datatables/responsive/js/responsive.bootstrap4.min.js"></script>

    <script src="assets/vendor/gijgo/js/gijgo.min.js"></script>
-->




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