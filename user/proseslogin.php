<body bgcolor="orange">

<?php
session_start();
require_once ('koneksi.php');
$user = $_POST['userid'];
$pass = $_POST['password'];
$cekuser = mysql_query("SELECT * FROM anggota WHERE userid = '$user'");
$jumlah = mysql_num_rows($cekuser);
$hasil = mysql_fetch_array($cekuser);
if ( $jumlah == 0 ) {
    echo 'User ID Belum Terdaftar!<br/>';
   echo '<a href="login.php">'; 
        echo '<br>'.'<font size="5">'." Kembali".'</font>'.'</a>';
} else {
    if ( $pass <> $hasil['password'] ) {
        echo 'Password Salah!<br/>';
        echo '<a href="login.php">'; 
        echo '<br>'.'<font size="5">'." Kembali".'</font>'.'</a>';
    } else {
        $_SESSION['userid'] = $user;
        header('location:index.php');
    }
}
?>