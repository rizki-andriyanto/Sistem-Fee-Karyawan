<?php include ('../header1.php'); ?>

	
	<h2>SJS MALANG</h2>
	
	<a href="index.php"><h2>Kembali</h2></a>


<?php
//mulai proses edit data

//cek dahulu, jika tombol simpan di klik
if(isset($_POST['simpan'])){
	
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$id	=$_POST['id'];
	$NIP				= $_POST['NIP'];	//membuat variabel $nis dan datanya dari inputan NIS
	$ID_PARTNER				= $_POST['ID_PARTNER'];
	$ID_JABATAN				= $_POST['ID_JABATAN'];
	$NAMA_PEGAWAI				= $_POST['NAMA_PEGAWAI'];
	$JK_PEGAWAI					= $_POST['JK_PEGAWAI'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$ALAMAT_PEGAWAI				= $_POST['ALAMAT_PEGAWAI'];
	$TEMPAT_LAHIR_PEGAWAI		= $_POST['TEMPAT_LAHIR_PEGAWAI'];
	$TANGGAL_LAHIR_PEGAWAI		= $_POST['TANGGAL_LAHIR_PEGAWAI'];
	$STATUS_NIKAH_PEGAWAI		= $_POST['STATUS_NIKAH_PEGAWAI'];

	//melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE siswa_id='$id' <- diambil dari inputan hidden id
	$update = mysql_query("UPDATE PEGAWAI SET ID_PARTNER='$ID_PARTNER', ID_PARTNER='$ID_PARTNER',ID_JABATAN='$ID_JABATAN',NAMA_PEGAWAI='$NAMA_PEGAWAI', JK_PEGAWAI= '$JK_PEGAWAI', ALAMAT_PEGAWAI='$ALAMAT_PEGAWAI', TEMPAT_LAHIR_PEGAWAI='$TEMPAT_LAHIR_PEGAWAI',TANGGAL_LAHIR_PEGAWAI='$TANGGAL_LAHIR_PEGAWAI', STATUS_NIKAH_PEGAWAI='$STATUS_NIKAH_PEGAWAI' WHERE NIP='$id'") or die(mysql_error());
	//jika query update sukses
	if($update){
		
		echo 'Data berhasil di simpan! ';		//Pesan jika proses simpan sukses
		echo '<a href="edit.php?id='.$id.'"></a>';	//membuat Link untuk kembali ke halaman edit
		
	}else{
		
		echo 'Gagal menyimpan data! ';		//Pesan jika proses simpan gagal
		echo '<a href="edit.php?id='.$id.'"></a>';	//membuat Link untuk kembali ke halaman edit
		
	}

}else{	//jika tidak terdeteksi tombol simpan di klik

	//redirect atau dikembalikan ke halaman edit
	echo '<script>window.history.back()</script>';

}
?>