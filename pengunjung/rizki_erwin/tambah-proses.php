<?php include ('../../header.php'); ?>

	
	<h2>SJS MALANG</h2>
	
	<a href="index.php"><h2>Kembali</h2></a>


<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
	
	
	//jika tombol tambah benar di klik maka lanjut prosesnya

	
	$ID_PARTNER								= $_POST['ID_PARTNER'];
	$DATE									= $_POST['DATE'];
	$MOBIL									= $_POST['MOBIL'];
	$RANGPOL								= $_POST['RANGPOL'];
	$ID_BONUSAN								= $_POST['ID_BONUSAN'];
	
	
	
	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysql_query("INSERT INTO DETAIL_BONUSAN VALUES(NULL,'$ID_PARTNER','$DATE','$MOBIL','$RANGPOL','$ID_BONUSAN')") or die(mysql_error());
	
	//jika query input sukses
	if($input){
		
		echo '<body bgcolor="orange">'.'Data Berhasil Di Tambahkan! '.'</body>';		//Pesan jika proses tambah sukses
		
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="tambah.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}

}else{	//jika tidak terdeteksi tombol tambah di klik

	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';

}
?>