<?php include ('../header1.php'); ?>

	
	<h2>SJS MALANG</h2>
	
	<a href="index.php"><h2>Kembali</h2></a>

<?php

if(isset($_GET['id'])){
	
	
	
	$id = $_GET['id'];
	
	
	$cek = mysql_query("SELECT userid FROM anggota WHERE userid='$id'") or die(mysql_error());
	
	//jika data siswa tidak ada
	if(mysql_num_rows($cek) == 0){
		
		//jika data tidak ada, maka redirect atau dikembalikan ke halaman beranda
		echo '<script>window.history.back()</script>';
	
	}else{
		
		//jika data ada di database, maka melakukan query DELETE table siswa dengan kondisi WHERE siswa_id='$id'
		$del = mysql_query("DELETE FROM anggota WHERE userid='$id'");
		
		//jika query DELETE berhasil
		if($del){
			
			echo 'Data akses berhasil di hapus! ';		//Pesan jika proses hapus berhasil
			echo '<a href="index.php"></a>';	//membuat Link untuk kembali ke halaman beranda
			
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