<!DOCTYPE html>
<html>
  <head>
    <title>Beranda</title>
    <link rel="shortcut icon" href="../img/test.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/edit.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <style>
    </style>
  </head>
  <body class="bg-light">
    <?php
  	session_start();
  	if($_SESSION['status']!="login"){
  		header("location:index.php");
  	}
  	?>
    <!-- navbar menu start -->
    <nav class="navbar navbar-expand-sm bg-transparent navbar-light text-dark fixed-top navposisi">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-user"></i> Hai, Admin</a>
        </li>
      </ul>
    </nav>
    <div class="sidenav">
      <a class="text-light" style="background-color: #212121;"><img src="../img/admin.png" style="width:25px;"> Adminisrator</a>
      <hr class="my-2" style="background-color: white;">
      <a class="nav-link text-light" href="beranda.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
      <button class="dropdown-btn text-light"><i class="fas fa-handshake"></i> Kebijakan &nbsp<i class="fa fa-caret-right"></i></button>
      <div class="dropdown-container">
        <a href="#" class="text-light"><i class="fas fa-question"></i> Soal</a>
        <a href="#" class="text-light"><i class="fas fa-heart"></i> Nilai</a>
      </div>
      <button class="dropdown-btn text-light"><i class="fas fa-user-circle"></i> User &nbsp<i class="fa fa-caret-right"></i></button>
      <div class="dropdown-container">
        <a href="#" class="text-light"><i class="fas fa-users"></i> User Guru</a>
        <a href="#" class="text-light"><i class="fas fa-users"></i> User Siswa</a>
      </div>
      <button class="dropdown-btn text-light"><i class="fas fa-cog"></i> Setting &nbsp<i class="fa fa-caret-right"></i></button>
      <div class="dropdown-container">
        <a href="#" class="text-light"><i class="fas fa-user-tie"></i> Administrator</a>
        <a href="#" class="text-light">Link 2</a>
      </div>
      <hr class="my-2" style="background-color: white;">
      <a class="nav-link text-light" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
      <a href="#" class="footer-posisi text-light"><small>CBT V.1 @ 2019 Adhy N</small></a>
    </div>
    <!-- Navbar Menu End -->
