<?php include ('../header1.php'); ?>

	
	<h2>SJS MALANG</h2>
	
	<a href="index.php"><h2>Kembali</h2></a>

<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
	
	
	//jika tombol tambah benar di klik maka lanjut prosesnya

	$NIP				= $_POST['NIP'];
	$ID_PARTNER				= $_POST['ID_PARTNER'];
	$ID_JABATAN		= $_POST['ID_JABATAN'];	
	
	$NAMA_PEGAWAI				= $_POST['NAMA_PEGAWAI'];
	$JK_PEGAWAI				= $_POST['JK_PEGAWAI'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$ALAMAT_PEGAWAI				= $_POST['ALAMAT_PEGAWAI'];
	$TEMPAT_LAHIR_PEGAWAI		= $_POST['TEMPAT_LAHIR_PEGAWAI'];
	$TANGGAL_LAHIR_PEGAWAI		= $_POST['TANGGAL_LAHIR_PEGAWAI'];
	$STATUS_NIKAH_PEGAWAI		= $_POST['STATUS_NIKAH_PEGAWAI'];

	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysql_query("INSERT INTO PEGAWAI VALUES('$NIP','$ID_PARTNER' ,'$ID_JABATAN','$NAMA_PEGAWAI','$JK_PEGAWAI','$ALAMAT_PEGAWAI','$TEMPAT_LAHIR_PEGAWAI','$TANGGAL_LAHIR_PEGAWAI','$STATUS_NIKAH_PEGAWAI')  ") or die(mysql_error());
	
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