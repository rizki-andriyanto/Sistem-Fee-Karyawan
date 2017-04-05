<?php include ('../header1.php'); ?>
	<h2>SJS MALANG</h2>
	
	<a href="index.php"><h2>Kembali</h2></a>
	<h3>Edit Data Karyawan</h3>
	
	<?php
	//proses mengambil data ke database untuk ditampilkan di form edit berdasarkan siswa_id yg didapatkan dari GET id -> edit.php?id=siswa_id
	
	
	
	//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
	$id = $_GET['id'];
	
	//melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
	$show = mysql_query("SELECT * FROM PEGAWAI WHERE NIP='$id'");
	
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
				<td>NIP</td>
				<td>:</td>
				<td><input type="text" name="NIP" value="<?php echo $data['NIP']; ?>" required></td>	<!-- value diambil dari hasil query -->
			</tr>

			<tr>
				<td>ID PARTNER</td>
				<td>:</td>
				<td><input type="text" name="ID_PARTNER" value="<?php echo $data['ID_PARTNER']; ?>" required></td>	<!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>ID JABATAN</td>
				<td>:</td>
				<td><input type="text" name="ID_JABATAN" value="<?php echo $data['ID_JABATAN']; ?>" required></td>	<!-- value diambil dari hasil query -->
			</tr>







			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="NAMA_PEGAWAI" size="30" value="<?php echo $data['NAMA_PEGAWAI']; ?>" required></td> <!-- value diambil dari hasil query -->
			</tr>
			

<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
				<select name="JK_PEGAWAI" required>
					
					<option value="LAKI-LAKI"<?php if($data['JK_PEGAWAI'] == 'LAKI-LAKI'){ echo 'selected'; } ?>>LAKI-LAKI</option>
					<option value="PEREMPUAN"<?php if($data['JK_PEGAWAI'] == 'PEREMPUAN'){ echo 'selected'; } ?>>PEREMPUAN</option>
				</select>
				

				</td>
			</tr>


			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="ALAMAT_PEGAWAI" size="30" value="<?php echo $data['ALAMAT_PEGAWAI']; ?>" required></td> <!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td>:</td>
				<td><input type="text" name="TEMPAT_LAHIR_PEGAWAI" size="30" value="<?php echo $data['TEMPAT_LAHIR_PEGAWAI']; ?>" required></td>
				</td>
			</tr>
<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="text" name="TANGGAL_LAHIR_PEGAWAI" size="30" value="<?php echo $data['TANGGAL_LAHIR_PEGAWAI']; ?>" required></td>

				</td>
			</tr>
			<tr>
				<td>STATUS NIKAH</td>
				<td>:</td>
				<td><input type="text" name="STATUS_NIKAH_PEGAWAI" size="30" value="<?php echo $data['STATUS_NIKAH_PEGAWAI']; ?>" required></td>
				</td>
			</tr>

			
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
