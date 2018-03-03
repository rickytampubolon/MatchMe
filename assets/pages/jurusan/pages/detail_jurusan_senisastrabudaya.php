
<?php


if(isset($_GET['nama'])){
  $id = $_GET['nama'];
}

?>

<!DOCTYPE html>

<html>
<head>
<title>Match Me</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/smooth-scroll.js"></script>
    <script src="../js/lightbox.min.js"></script>
    <script src="../js/main.js"></script>

    <link rel="stylesheet" type="text/css" href="../layout/styles/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../layout/styles/main.css">
    <link rel="stylesheet" type="text/css" href="../layout/styles/responsive.css">
    <link rel="stylesheet" media="screen" href="../layout/styles/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../layout/styles/animate.css">
    <link rel="stylesheet" type="text/css" href="../layout/styles/lightbox.css">


</head>
<body data-spy="scroll" data-offset="20" data-target="#navbar">
<!-- Nav Menu Section -->
<div class="logo-menu">
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="50">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header col-md-3">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img alt="MatchMe" src="../images/logo.png" id="logo-other"></a>
    </div>

    <div class="collapse navbar-collapse" id="navbar">
        <ul class="nav navbar-nav">
        <li><a href="index.php#home"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="index.php#services"><i class="fa fa-cogs"></i> Services</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Info Jurusan </a>
          <ul class="dropdown-menu">
            <li><a href="../pages/teknik.php"> Teknik</a></li>
            <li><a href="../pages/peternakan.php"> Peternakan</a></li>
            <li><a href="../pages/pendidikan.php"> Pendidikan</a></li>
            <li><a href="../pages/senisastrabudaya.php"> Seni, Sastra, & Budaya</a></li>
            <li><a href="../pages/sosial.php"> Sosial</a></li>
            <li><a href="#"> Bahasa</a></li>
            <li><a href="#"> Lain-lain</a></li>
            <li><a href="#"> Semua Jurusan</a></li>
          </ul>
        </li>
        <li><a href="tes.php"><i class="fa fa-home"></i> Tes</a></li>
        <li><a href="index.php#about"><i class="fa fa-info"></i> About</a></li>
        <li><a href="index.php#contact"><i class="fa fa-envelope"></i> Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
    <?php
    if(empty($_SESSION['username']) || !isset($_SESSION['matchme'])) {
?>
    <li><a href="login.php">Masuk</a></li>
    <li><a href="register.php">Daftar</a></li>    

<?php
}
?>

<?php
    if(!empty($_SESSION['username']) && isset($_SESSION['matchme'])) {
       if($_SESSION['role'] == 0){
?>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hai, <b><?php echo $_SESSION['username']; ?></b> <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> Profil</a></li>
        <li><a href="action/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign Out</a></li>
      </ul>
    </li>
<?php
}
}
?>
  </ul>
    </div>

  </div>
</nav>
</div>
<!-- Nav Menu Section End -->

<div class="wrapper row3">
  <main class="hoc container clear"> 
 
    <div class="sidebar one_quarter first"> 
     
      <h4>Kategori Jurusan</h4>
      <nav class="sdb_holder">
        <ul>
          <li><a href="../../../pages/teknik.php">Teknik</a></li>
          <li><a href="../../../pages/peternakan.php">Peternakan</a></li>
          <li><a href="../../../pages/pendidikan.php">Pendidikan</a></li>
          <li><a href="../../../pages/senisastrabudaya.php">Seni Sastra & Budaya</a></li>
          <li><a href="../../../pages/sosial.php">Sosial</a></li>
          <li><a href="../../../pages/ekonomi.php">Ekonomi & Bisnis</a></li>
          <li><a href="../../../pages/pertanian.php">Pertanian</a></li>
          <li><a href="../../../pages/kesehatan.php">Kesehatan</a></li>
          <li><a href="../../../pages/mipa.php">MIPA</a></li>
            
        </ul>
      </nav>
      
    </div>
   
    <div class="content three_quarter"> 
      
      <?php
// buat koneksi dengan MySQL, gunakan database: webmaster
$link = mysqli_connect("localhost", "root", "", "matchme");
 
// jalankan query
$id=$_GET['nama'];
$result = mysqli_query($link, "SELECT * FROM senisastrabudaya where  `nama`=$id"  );


$row=mysqli_fetch_array($result,MYSQLI_ASSOC)
    ?>
    
      <h1><?php echo $row["nama"]?></h1>
      <img class="imgl borderedbox inspace-5" src="<?php echo $row["gambar2"]?>" alt="" >
      <p><?php echo $row["para1"]?></p>
      <p><?php echo $row["para2"]?></p>
      <p><?php echo $row["para3"]?></p>

    <?php
  
?>


      
      
      </div>
   
   
  </main>
</div>



<div id="copyright">
<div class="container-fluid">
<div class="col-md-12"><p>© Match Me 2017 All right reserved. Design & Developed by <a href="../../index.php">MatchMe Team</a></p></div>
</div>
</div>
<!-- Copyright Section End-->




</body>
</html>