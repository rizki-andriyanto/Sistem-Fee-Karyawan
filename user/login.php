












<html>
<head>
<title>Login </title>
</head>

<?php
session_start();
if( isset($_SESSION['userid']) ) {
    header('location:index.php'); 
}
require_once('koneksi.php');
?> 

<link rel="stylesheet" href="style.css">
<form action="proseslogin.php" method="post">
<div class="body"></div>
    <div class="grad"></div>
    <div class="header">
      <div>SJS<span>Malang</span></div>
    </div>
    <br>
    <div class="login">
        <input type="text" placeholder="userid" name="userid"><br>
        <input type="password" placeholder="password" name="password"><br>
        <input type="submit" name="Login" value="Login">
    </div>

    </form>
</table>
</body>
</html>







