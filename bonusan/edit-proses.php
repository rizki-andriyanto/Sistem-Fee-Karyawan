<?php include ('../header1.php'); ?>

	
	<h2>SJS MALANG</h2>
	
	<a href="index.php"><h2>Kembali</h2></a>




<?php
//mulai proses edit data

//cek dahulu, jika tombol simpan di klik
if(isset($_POST['simpan'])){
	
	//inlcude atau memasukkan file koneksi ke database
	
	
	$id										= $_POST['id'];

	$NAMA_BONUSAN							= $_POST['NAMA_BONUSAN'];	
	$POIN_BONUSAN							= $_POST['POIN_BONUSAN'];

	//melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE siswa_id='$id' <- diambil dari inputan hidden id
	$update = mysql_query("UPDATE BONUSAN SET ID_BONUSAN='$id',NAMA_BONUSAN= '$NAMA_BONUSAN', POIN_BONUSAN='$POIN_BONUSAN' WHERE ID_BONUSAN='$id'") or die(mysql_error());
	//jika query update sukses
	if($update){
		
		echo 'Data berhasil di simpan ! ';		//Pesan jika proses simpan sukses
		echo '<a href="edit.php?id='.$id.'"></a>';	//membuat Link untuk kembali ke halaman edit
		
	}else{
		
		echo 'Gagal menyimpan data ! ';		//Pesan jika proses simpan gagal
		echo '<a href="edit.php?id='.$id.'"></a>';	//membuat Link untuk kembali ke halaman edit
		
	}

}else{	//jika tidak terdeteksi tombol simpan di klik

	//redirect atau dikembalikan ke halaman edit
	echo '<script>window.history.back()</script>';

}
?>