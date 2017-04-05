<?php include ('../../header.php'); ?>

	
	<h2>SJS MALANG</h2>
	
	<a href="index.php"><h2>Kembali</h2></a>


<?php
//memulai proses hapus data

//cek dahulu, apakah benar URL sudah ada GET id -> hapus.php?id=siswa_id
if(isset($_GET['id'])){
	
	
	
	//membuat variabel $id yg bernilai dari URL GET id -> hapus.php?id=siswa_id
	$id = $_GET['id'];
	
	//cek ke database apakah ada data siswa dengan siswa_id='$id'
	$cek = mysql_query("SELECT ID_DETAIL_BONUSAN FROM DETAIL_BONUSAN WHERE ID_DETAIL_BONUSAN='$id'") or die(mysql_error());
	
	//jika data siswa tidak ada
	if(mysql_num_rows($cek) == 0){
		
		//jika data tidak ada, maka redirect atau dikembalikan ke halaman beranda
		echo '<script>window.history.back()</script>';
	
	}else{
		
		//jika data ada di database, maka melakukan query DELETE table siswa dengan kondisi WHERE siswa_id='$id'
		$del = mysql_query("DELETE FROM DETAIL_BONUSAN WHERE ID_DETAIL_BONUSAN='$id'");
		
		//jika query DELETE berhasil
		if($del){
			
			echo '<body bgcolor="orange">'.'Data Pemasangan Berhasil Di Hapus! '.'</body>';		//Pesan jika proses hapus berhasil
		
			
			
		}else{
			
			echo 'Gagal menghapus data! ';		//Pesan jika proses hapus gagal
			echo '<a href="index.php"></a>';	//membuat Link untuk kembali ke halaman beranda
		
		}
		
	}
	
}else{
	
	//redirect atau dikembalikan ke halaman beranda
	echo '<script>window.history.back()</script>';
	
}
?>