<?php include ('../header1.php'); ?>

	<h2>SJS MALANG</h2>
	<a href="index.php"><h2>Kembali</h2></a>
	
	<h3>Tambah Data Partner</h3>
	
	<form action="tambah-proses.php" method="post">
		<table cellpadding="8" cellspacing="0">
			<tr>
				<td>ID Partner</td>
				<td>:</td>
				<td><input type="text" name="ID_PARTNER" required></td>
			</tr>
			
				
			<tr>
				<td>NAMA PARTNER</td>
				<td>:</td>
				<td>
					<select name="NAMA_PARTNER" required>
						<option value="">Pilih Nama Partner</option>
						<option value="RIZKI-ERWIN">RIZKI-ERWIN</option>
						<option value="RONI-JUMALI">RONI-JUMALI</option>
						<option value="IDRIS-FANDI">IDRIS-FANDI</option>
						<option value="IRUL-EKO">IRUL-EKO</option>
						<option value="WIWIT-KARDI">WIWIT-KARDI</option>
						<option value="KOSONG">TANPA PARTNER</option>

						
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
