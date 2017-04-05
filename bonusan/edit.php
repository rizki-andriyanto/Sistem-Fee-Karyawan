<?php include ('../header1.php'); ?>
	<h2>SJS MALANG</h2>
	
	<a href="index.php"><h2>Kembali</h2></a>
	
	<h3>Edit Data Bonusan</h3>
	
	<?php
	//proses mengambil data ke database untuk ditampilkan di form edit berdasarkan siswa_id yg didapatkan dari GET id -> edit.php?id=siswa_id
	
	//include atau memasukkan file koneksi ke database
	
	
	//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
	$id = $_GET['id'];
	
	//melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
	$show = mysql_query("SELECT * FROM BONUSAN WHERE ID_BONUSAN='$id'");
	
	//cek apakah data dari hasil query ada atau tidak
	if(mysql_num_rows($show) == 0){
		
		//jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
		echo '<script>window.history.back()</script>';
		
	}else{
	
		//jika data ditemukan, maka membuat variabel $data
		$data = mysql_fetch_assoc($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
	
	}
	?>
	
	<form action="edit-proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">	<!-- membuat inputan hidden dan nilainya adalah siswa_id -->
		<table cellpadding="3" cellspacing="0">
			
			<tr>
				<td>Nama Bonusan</td>
				<td>:</td>
				<td><input type="text" name="NAMA_BONUSAN" size="30" value="<?php echo $data['NAMA_BONUSAN']; ?>" required></td> <!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>POIN</td>
				<td>:</td>
				<td><input type="text" name="POIN_BONUSAN" size="30" value="<?php echo $data['POIN_BONUSAN']; ?>" required></td> <!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>