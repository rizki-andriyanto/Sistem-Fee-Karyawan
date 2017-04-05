
<?php include ('../header1.php'); ?>

	<h2>SJS MALANG</h2>
	<a href="index.php"><h2>Kembali</h2></a>
	
	<h3>Tambah Data Pegawai</h3>
	
	<form action="tambah-proses.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>NIP</td>
				<td>:</td>
				<td><input type="text" name="NIP" required></td>
			</tr>
			<tr>
				<td>ID PARTNER</td>
				<td>:</td>
				<td><input type="text" name="ID_PARTNER" required></td>
			</tr>
			<tr>
				<td>ID JABATAN</td>
				<td>:</td>
				<td><input type="text" name="ID_JABATAN" required></td>
			</tr>
			
			<tr>
				<td>NAMA</td>
				<td>:</td>
				<td><input type="text" name="NAMA_PEGAWAI" required></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
				<select name="JK_PEGAWAI" required>
					<option value="">Pilih Jenis Kelamin</option>
					<option value="LAKI-LAKI">Laki-Laki</option>
					<option value="PEREMPUAN">Perempuan</option>
				</select>
				

				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="ALAMAT_PEGAWAI" required></td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td>:</td>
				<td><input type="text" name="TEMPAT_LAHIR_PEGAWAI" required></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="date" name="TANGGAL_LAHIR_PEGAWAI" required></td>
			</tr>
			<tr>
				<td>Status Perkawinan</td>
				<td>:</td>
				<td><input type="text" name="STATUS_NIKAH_PEGAWAI" required></td>
			</tr>




			
			
			
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
