<?php include ('../header1.php'); ?>

	
	<h2>SJS MALANG</h2>
	
	<a href="index.php"><h2>Kembali</h2></a>


<?php

if(isset($_POST['simpan'])){
	
	
	$id					= $_POST['id'];
	$ID_JABATAN		= $_POST['ID_JABATAN'];	//membuat variabel $nis dan datanya dari inputan NIS
	$NAMA_JABATAN		= $_POST['NAMA_JABATAN'];

	//melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE siswa_id='$id' <- diambil dari inputan hidden id
	$update = mysql_query("UPDATE JABATAN SET ID_JABATAN='$ID_JABATAN', NAMA_JABATAN='$NAMA_JABATAN' WHERE ID_JABATAN='$id'") or die(mysql_error());
	//jika query update sukses
	if($update){
		
		echo 'Data berhasil di simpan! ';		//Pesan jika proses simpan sukses
		echo '<a href="edit.php?id='.$ID_JABATAN.'"></a>';	//membuat Link untuk kembali ke halaman edit
		
	}else{
		
		echo 'Gagal menyimpan data! ';		//Pesan jika proses simpan gagal
		echo '<a href="edit.php?id='.$ID_JABATAN.'"></a>';	//membuat Link untuk kembali ke halaman edit
		
	}

}else{	//jika tidak terdeteksi tombol simpan di klik

	//redirect atau dikembalikan ke halaman edit
	echo '<script>window.history.back()</script>';

}
?>