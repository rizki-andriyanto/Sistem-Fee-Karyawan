<?php include ('../header1.php'); ?>

	
	<h2>SJS MALANG</h2>
	
	<a href="index.php"><h2>Kembali</h2></a>

<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
	
	
	//jika tombol tambah benar di klik maka lanjut prosesnya

	$userid		= $_POST['userid'];	
	$nama		= $_POST['nama'];	
	$email		= $_POST['email'];	
	$password	= $_POST['password'];
	
	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysql_query("INSERT INTO anggota VALUES('$userid', '$nama', '$email', '$password')") or die(mysql_error());
	
	//jika query input sukses
	if($input){
		
		echo 'Data berhasil di tambahkan! ';		//Pesan jika proses tambah sukses
		echo '<a href="tambah.php"></a>';	//membuat Link untuk kembali ke halaman tambah
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="tambah.php"></a>';	//membuat Link untuk kembali ke halaman tambah
		
	}

}else{	//jika tidak terdeteksi tombol tambah di klik

	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';

}
?>