<?php include ('../header1.php'); ?>

	
	<h2>SJS MALANG</h2>
	
	<a href="index.php"><h2>Kembali</h2></a>

<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
	
	
	
	//jika tombol tambah benar di klik maka lanjut prosesnya

	$ID_JABATAN		= $_POST['ID_JABATAN'];	//membuat variabel $nis dan datanya dari inputan NIS
	
	$NAMA_JABATAN		= $_POST['NAMA_JABATAN'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap

	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysql_query("INSERT INTO JABATAN VALUES('$ID_JABATAN' ,'$NAMA_JABATAN')") or die(mysql_error());
	
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