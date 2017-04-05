<?php include ('../header1.php'); ?>

	<h2>SJS MALANG</h2>
	<a href="index.php"><h2>Kembali</h2></a>
	
	<h3>Edit Data Karyawan</h3>
	
	<form action="tambah-proses.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>Id Jabatan</td>
				<td>:</td>
				<td><input type="text" name="ID_JABATAN" required></td>
			</tr>
			


			<tr>
				<td>Nama Jabatan</td>
				<td>:</td>
				<td>
					<select name="NAMA_JABATAN" required>
						<option value="">Pilih Jabatan</option>
						<option value="MANAGER">MANAGER</option>
						<option value="KEPALA BENGKEL">KEPALA BENGKEL</option>
						<option value="MEKANIK VARIASI">MEKANIK VARIASI</option>
						<option value="MEKANIK AC">MEKANIK AC</option>
						<option value="KACA FILM">KACA FILM</option>
						<option value="ANTI KARAT">ANTI KARAT</option>
						<option value="MARKETING">MARKETING</option>
						<option value="ADMIN">ADMIN</option>
						<option value="SECURITY">SECURITY</option>
						<option value="CHECKLIST">CHECKLIST</option>
						<option value="GUDANG">GUDANG</option>
						<option value="SOPIR">SOPIR</option>
						<option value="PENAGIHAN">PENAGIHAN</option>
						<option value="BEKLEED">BEKLEED</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
