<?php include ('../header1.php'); ?>
	<h2>SJS MALANG</h2>
	
	<a href="index.php"><h2>Kembali</h2></a>
	
	<h3>Edit Data Partner</h3>
	
	<?php
	//proses mengambil data ke database untuk ditampilkan di form edit berdasarkan siswa_id yg didapatkan dari GET id -> edit.php?id=siswa_id
	
	
	//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
	$id = $_GET['id'];
	
	//melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
	$show = mysql_query("SELECT * FROM PARTNER WHERE ID_PARTNER='$id'");
	
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
				<td>ID PARTNER</td>
				<td>:</td>
				<td><input type="text" name="ID_PARTNER" value="<?php echo $data['ID_PARTNER']; ?>" required></td>	<!-- value diambil dari hasil query -->
			</tr>
			



<tr>
				<td>NAMA PARTNER</td>
				<td>:</td>
				<td>
					<select name="NAMA_PARTNER" required>
						<option value="">Pilih Nama Partner</option>
						<option value="RIZKI-ERWIN"<?php if($data['ID_PARTNER'] == 'RIZKI-ERWIN'){ echo 'selected'; } ?>>RIZKI-ERWIN</option>
						<option value="RONI-JUMALI"<?php if($data['ID_PARTNER'] == 'RONI-JUMALI'){ echo 'selected'; } ?>>RONI-JUMALI</option>
						<option value="IDRIS-FANDI"<?php if($data['ID_PARTNER'] == 'IDRIS-FANDI'){ echo 'selected'; } ?>>IDRIS-FANDI</option>
						<option value="IRUL-EKO"<?php if($data['ID_PARTNER'] == 'IRUL-EKO'){ echo 'selected'; } ?>>IRUL-EKO</option>
						<option value="WIWIT-KARDI"<?php if($data['ID_PARTNER'] == 'WIWIT-KARDI'){ echo 'selected'; } ?>>WIWIT-KARDI</option>
						<option value="KOSONG"<?php if($data['ID_PARTNER'] == ''){ echo 'selected'; } ?>>TANPA PARTNER</option>
						
					</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
