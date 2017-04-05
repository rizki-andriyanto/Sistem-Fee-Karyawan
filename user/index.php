<?php include('../header1.php'); ?>

<br><br>
  <a href="logout.php"><h2>Logout</h2></a>
  
<?php
session_start();
if ( !isset($_SESSION['userid']) ) {
    header('location:login.php'); 
}
else { 
    $usr = $_SESSION['userid']; 
}
require_once('koneksi.php');
$query = mysql_query("SELECT * FROM anggota WHERE userid = '$usr'");
$hasil = mysql_fetch_array($query);

 






	// jika level admin
	if ($_SESSION['userid'] == "sjs1")
   {   
   	header('location:../pengunjung/rizki_erwin/index.php');
   }
   
// jika kondisi level user maka akan diarahkan ke halaman lain
   else if ($_SESSION['userid'] == "sjs2")
   {
       header('location:../pengunjung/roni_jumali/index.php');
   }

   else if ($_SESSION['userid'] == "sjs3")
   {
       header('location:../pengunjung/idris_fandi/index.php');
   }
   else if ($_SESSION['userid'] == "sjs4")
   {
       header('location:../pengunjung/irul_eko/index.php');
   }
   else if ($_SESSION['userid'] == "sjs5")
   {
       header('location:../pengunjung/wiwit_kardi/index.php');
   }
   else if ($_SESSION['userid'] == "sjs6")
   {
       header('location:../pengunjung/manager/index.php');
   }
?>
