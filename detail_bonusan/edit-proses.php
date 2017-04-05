<?php include ('../header1.php'); ?>

	
	<h2>SJS MALANG</h2>
	
	<a href="index.php"><h2>Kembali</h2></a>


<?php
//mulai proses edit data

//cek dahulu, jika tombol simpan di klik
if(isset($_POST['simpan'])){
	
	
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