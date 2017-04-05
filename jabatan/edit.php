<?php include ('../header1.php'); ?>
	<h2>SJS MALANG</h2>
	
	<a href="index.php"><h2>Kembali</h2></a>
	
	<h3>Edit Data Partner</h3>
	
	<?php
	//proses mengambil data ke database untuk ditampilkan di form edit berdasarkan siswa_id yg didapatkan dari GET id -> edit.php?id=siswa_id
	
	
	
	//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
	$id = $_GET['id'];
	
	//melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
	$show = mysql_query("SELECT * FROM JABATAN WHERE ID_JABATAN='$id'");
	
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
				<td>Id Jabatan</td>
				<td>:</td>
				<td><input type="text" name="ID_JABATAN" value="<?php echo $data['ID_JABATAN']; ?>"  required></td>
			</tr>
			
			
			<tr>
				<td>Nama Jabatan</td>
				<td>:</td>
				<td>
					<select name="NAMA_JABATAN" required>
						<option value="">Pilih Nama Jabatan</option>	
						<option value="MANAGER"<?php if($data['ID_JABATAN'] == 'MANAGER'){ echo 'selected'; } ?>    >MANAGER</option>
						<option value="KEPALA BENGKEL"<?php if($data['ID_JABATAN'] == 'KEPALA BENGKEL'){ echo 'selected'; } ?>    >KEPALA BENGKEL</option>
						<option value="MEKANIK VARIASI"<?php if($data['ID_JABATAN'] == 'MEKANIK VARIASI'){ echo 'selected'; } ?>    >MEKANIK VARIASI</option>
						<option value="MEKANIK AC"<?php if($data['ID_JABATAN'] == 'MEKANIK AC'){ echo 'selected'; } ?>    >MEKANIK AC</option>
						<option value="KACA FILM"<?php if($data['ID_JABATAN'] == 'KACA FILM"'){ echo 'selected'; } ?>    >KACA FILM</option>
						<option value="ANTI KARAT"<?php if($data['ID_JABATAN'] == 'ANTI KARAT'){ echo 'selected'; } ?>    >ANTI KARAT</option>
						<option value="MARKETING"<?php if($data['ID_JABATAN'] == 'MARKETING'){ echo 'selected'; } ?>    >MARKETING</option>
						<option value="ADMIN"<?php if($data['ID_JABATAN'] == 'ADMIN'){ echo 'selected'; } ?>    >ADMIN</option>
						<option value="SECURITY"<?php if($data['ID_JABATAN'] == 'SECURITY'){ echo 'selected'; } ?>    >SECURITY</option>
						<option value="CHECKLIST"<?php if($data['ID_JABATAN'] == 'CHECKLIST'){ echo 'selected'; } ?>    >CHECKLIST</option>
						<option value="GUDANG"<?php if($data['ID_JABATAN'] == 'GUDANG'){ echo 'selected'; } ?>    >GUDANG</option>
						<option value="SOPIR"<?php if($data['ID_JABATAN'] == 'SOPIR'){ echo 'selected'; } ?>    >SOPIR</option>
						<option value="PENAGIHAN"<?php if($data['ID_JABATAN'] == 'PENAGIHAN'){ echo 'selected'; } ?>    >PENAGIHAN</option>
						<option value="BEKLEED"<?php if($data['ID_JABATAN'] == 'BEKLEED'){ echo 'selected'; } ?>    >BEKLEED</option>
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
