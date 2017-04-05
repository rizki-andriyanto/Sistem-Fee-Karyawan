<!DOCTYPE html>
<html>
<head>
	<title>Proses Edit</title>
</head>
</html>



<?php
//mulai proses edit data

//cek dahulu, jika tombol simpan di klik
if(isset($_POST['simpan'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$id									= $_POST['id'];	//membuat variabel $id dan datanya dari inputan hidden id
	$ID_PARTNER								= $_POST['ID_PARTNER'];
	$DATE									= $_POST['DATE'];
	$MOBIL									= $_POST['MOBIL'];
	$RANGPOL								= $_POST['RANGPOL'];
	$ID_BONUSAN								= $_POST['ID_BONUSAN'];

	//melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE siswa_id='$id' <- diambil dari inputan hidden id
	$update = mysql_query("UPDATE DETAIL_BONUSAN SET ID_PARTNER='$ID_PARTNER', DATE='$DATE', MOBIL= '$MOBIL', RANGPOL='$RANGPOL', ID_BONUSAN='$ID_BONUSAN' WHERE ID_DETAIL_BONUSAN='$id'") or die(mysql_error());
	//jika query update sukses
	if($update){
		
		echo '<body bgcolor="orange">'.'<h2>'.'Data Berhasil Di Simpan! '.'</h2>'.'</body>';		//Pesan jika proses simpan sukses
		echo '<a href="edit.php?id='.$id.'"><h2>Kembali</h2></a>';	//membuat Link untuk kembali ke halaman edit
		echo '<a href="index.php?"><h2>Home</h2></a>';
	}else{
		
		echo 'Gagal Menyimpan Data! ';		//Pesan jika proses simpan gagal
		echo '<a href="edit.php?id='.$id.'">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
	}

}else{	//jika tidak terdeteksi tombol simpan di klik

	//redirect atau dikembalikan ke halaman edit
	echo '<script>window.history.back()</script>';

}
?>