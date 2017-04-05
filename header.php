<?php 
  include('koneksi.php'); 
  
  $url = "http://localhost:8080/SJS_FEE/"; 
?>


<html lang="en">
<head>
  <title>SJSMalang</title>
  <!-- Bootstrap -->

    <link href="<?php echo $url; ?>assets/css/bootstrap.min.css" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <script src="../../assets/js/jquery-2.2.4.min.js"></script>
  <script src="../../assets/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">SJS Malang</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-hand-right"></span> Bonusanku<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="tambah.php">Catat Bonusan</a></li>
            <li><a href="index.php">Lihat Bonusan</a></li>
             <li><a href="alldata.php">Lihat Semua Bonusan</a></li>
          </ul>


        </li>
        <li>

        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <span class="glyphicon glyphicon-wrench"></span> Admin<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../../pegawai/index.php">Data Pegawai</a></li>
            <li><a href="../../partner/index.php">Data Partner</a></li>
            <li><a href="../../jabatan/index.php">Data Jabatan</a></li>
            <li><a href="../../bonusan/index.php">Data Bonusan</a></li>
            <li><a href="../../detail_bonusan/index.php">Data Detail Bonusan</a></li>
            <li><a href="../../data_akses/index.php">Data Akses</a></li>
          </ul>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="../../user/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>

