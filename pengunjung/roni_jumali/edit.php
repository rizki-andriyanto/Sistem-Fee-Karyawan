<!DOCTYPE html>
<html>
<head>
	<title>DETAIL BONUSAN</title>
</head>
<body bgcolor="orange">
	<h2>SJS MALANG</h2>
	
	<a href="index.php"><h2><li>Home</li></h2></a>  <a href="tambah.php"><h2><li>Tambah Data Pemasangan</li></h2></a>
	
	<h2>Edit Data Pemasangan Anda</h2>
	
	<?php
	//proses mengambil data ke database untuk ditampilkan di form edit berdasarkan siswa_id yg didapatkan dari GET id -> edit.php?id=siswa_id
	
	//include atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
	$id = $_GET['id'];
	
	//melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
	$show = mysql_query("SELECT * FROM DETAIL_BONUSAN WHERE ID_DETAIL_BONUSAN='$id'");
	
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
				<td>Nama Partner Kerja</td>
				<td>:</td>
				<td>

					
					<?php 
					include('koneksi.php');

					echo "<select name='ID_PARTNER'>";
					$tampil=mysql_query('SELECT * FROM PARTNER WHERE NAMA_PARTNER="RONI-JUMALI"');
					if ($pilih[ID_PARTNER]==0){
						

					}
					while ($edit=mysql_fetch_array($tampil)) {
					if ($pilih[ID_PARTNER]==$edit[ID_PARTNER]){
						echo "<option value=$edit[ID_PARTNER] selected>$edit[NAMA_PARTNER]</option>";
						}
					else{
						echo "<option value=$edit[ID_PARTNER]>$edit[NAMA_PARTNER]</option>";
					}

					}
					echo"</select>";
					?>
			
				</td>
			</tr>
			<tr>
				<td>Tanggal Pemasangan</td>
				<td>:</td>
				<td><input type="date" name="DATE" value="<?php echo $data['DATE']; ?>" required></td>
			</tr>
			
			<tr>
				<td>Nama Mobil</td>
				<td>:</td>
				<td><input type="text" name="MOBIL" value="<?php echo $data['MOBIL']; ?>" required></td>
			</tr>
			<tr>
				<td>No Rangka/Polisi</td>
				<td>:</td>
				<td><input type="text" name="RANGPOL" value="<?php echo $data['RANGPOL']; ?>" required></td>
			</tr>
			<td>Nama Pemasangan</td>
				<td>:</td>
				<td>

					
					<?php 
					include('koneksi.php');

					echo "<select name='ID_BONUSAN'>";
					$tampil=mysql_query("SELECT * FROM BONUSAN");
					if ($pilih[ID_BONUSAN]==0){
						

					}
					while ($edit=mysql_fetch_array($tampil)) {
					if ($pilih[ID_BONUSAN]==$edit[ID_BONUSAN]){
						echo "<option value=$edit[ID_BONUSAN] selected>$edit[NAMA_BONUSAN]</option>";
						}
					else{
						echo "<option value=$edit[ID_BONUSAN]>$edit[NAMA_BONUSAN]</option>";
					}

					}
					echo"</select>";
					?>
			
				</td>
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