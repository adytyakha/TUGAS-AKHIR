<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <?php include 'componen/head.php'; ?>
    <link rel="stylesheet" href="bootstrap/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="bootstrap/assets/css/style.css">
        <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li >
                        <a href="index.php"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                     <li class="active">
                        <a href="ktp.php"><i class="menu-icon fa ti-id-badge"></i>KTP </a>
                    </li>
                    <li class="menu-title">AKUN</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>USER</a>
                        <ul class="sub-menu children dropdown-menu">                            
                            <li><i class="fa fa-users"></i><a href="akun.php">DATA USER</a></li>
                       

                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>DAFTAR E-KTP</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-credit-card"></i><a href="ektp.php">DATA E-KTP</a></li>
                         
                        </ul>
                    </li>
                 
                    <li class="menu-title">HISTORI</li><!-- /.menu-title -->

                     <li class>
                        <a href="histori.php"><i class="menu-icon fa fa-history"></i>HISTORI </a>
                    </li>
                     <li class>
                        <a href="sigout.html"><i class="menu-icon fa fa-sign-out"></i>KELUAR </a>
                    </li>

                  
                
                  

                   
                  
                   
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="images/logo12.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">3</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-check"></i>
                                    <p>Server #1 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-info"></i>
                                    <p>Server #2 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-warning"></i>
                                    <p>Server #3 overloaded.</p>
                                </a>
                            </div>
                        </div>

                       
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                           

                            <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
      

 <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                   
                                    <li><a href="#">AKUN</a></li>
                                    <li class="active">Edit Akun</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

           
 <div class="content">
            <div class="animated fadeIn">

    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong>Edit Akun</strong>
                            </div>
                            <div class="card-body card-block">

                                 

  <?php
    include 'setting/database.php';
    $id = $_GET['id_akun'];
    $query = mysqli_query($koneksi,"SELECT * FROM akun WHERE id_akun='$id'");
    while($data = mysqli_fetch_array($query)){
        ?>
                                <form action="setting/editakunn.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">ID</label></div>
                                       <div class="col-12 col-md-9"><input type="text" id="id_akun" name="id_akun" value="<?php echo $data['id_akun']; ?>" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">KK</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="kk" name="kk" value="<?php echo $data['kk']; ?>"  class="form-control"required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Lengkap</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nama_lengkap" name="nama_lengkap" value="<?php echo $data['nama_lengkap']; ?>"  class="form-control" required></div>
                                    </div>
                                         <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">email</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="email" name="email" value="<?php echo $data['email']; ?>" class="form-control"required></div>
                                    </div>
                                         <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Username</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="username" name="username" value="<?php echo $data['username']; ?>" class="form-control"required></div>
                                    </div>
                                         <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Password</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="password" name="password" value="<?php echo $data['password']; ?>" class="form-control"required></div>
                                    </div>


                                     <span><a href="ktp.php"><button type="button" class="btn btn-warning btn-sm"><i class="fa fa-arrow-circle-left"></i> Kembali</button></a></span>

                                      <button type="submit" class="btn btn-success btn-sm" name="submit" id="sumbit">
                                    <i class="fa fa-save (alias)"></i> Submit
                                </button>
                                   
                            </div>



 

                            <div class="card-footer">
                               
                            </div>
                        </form> 
                    <?php } ?>



                            </div>

                        </div>
                  
                    </div>
                </div>
            </div>



        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2019 E-Ktp Online
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://adytya_kha.com">adytya_kha</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
   <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="assets/js/main.js"></script>

    <!--Local Stuff-->

</body>
</html>
