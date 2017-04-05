

<?php include ('../../header.php'); ?>

	<h2>SJS MALANG</h2>
	<a href="index.php"><h2>Kembali</h2></a>
	
	<h2>Silakan Tambahkan Data Pemasangan Anda</h2>
	
	<form action="tambah-proses.php" method="post">
		<table cellpadding="20" cellspacing="0">
		
			
			

			<tr>
				<td>Nama Partner Kerja</td>
				<td>:</td>
				<td>

					
					<?php 
					

					echo "<select name='ID_PARTNER'> <option value=0 selected>Pilih Nama Partner</option>";
					$tampil=mysql_query('SELECT * FROM PARTNER WHERE NAMA_PARTNER="RIZKI-ERWIN"');
					while ($pilih=mysql_fetch_array($tampil)) {
					echo "<option value=$pilih[ID_PARTNER]>$pilih[NAMA_PARTNER]</option>";

					}
					echo"</select>";

					 ?>
				</td>
			</tr>

			<tr>
				<td>Tanggal Pemasangan</td>
				<td>:</td>
				<td><input type="date" name="DATE" required></td>

			</tr>
			
			<tr>
				<td>Nama Mobil</td>
				<td>:</td>
				<td><input type="text" name="MOBIL" required></td>
			</tr>
			<tr>
				<td>No Rangka/Polisi</td>
				<td>:</td>
				<td><input type="text" name="RANGPOL" required></td>
			</tr>
			<tr>
			
 			</tr>

			<tr>
				<td>Nama Pemasangan</td>
				<td>:</td>
				<td>

					
					<?php 
				

					echo "<select name='ID_BONUSAN'> <option value=0 selected>Pilih Pemasangan</option>";
					$tampil=mysql_query('SELECT * FROM BONUSAN');
					while ($pilih=mysql_fetch_array($tampil)) {
					echo "<option value=$pilih[ID_BONUSAN]>$pilih[NAMA_BONUSAN]</option>";

					}
					
					 ?>
				</td>
				
			</tr>
			

			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>

			


			
			
			
			