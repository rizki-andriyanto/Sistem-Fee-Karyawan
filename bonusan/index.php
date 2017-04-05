 <?php include ('../header1.php'); ?>

	<h2>SJS MALANG</h2>
	
	<a href="tambah.php"><h2>Tambah Data</h2></a>
	
	<h3>Nama Kategori Bonusan</h3>
	
	<table class="table table-striped" >
		
			<th>ID Bonusan</th>
			<th>Nama Bonusan</th>
			<th>Poin</th>
			<th>Pengaturan</th>
			
			
		
		
		<?php
		//iclude file koneksi ke database
		
		
		//query ke database dg SELECT table karyawan diurutkan berdasarkan NIS paling besar
		$query = mysql_query("SELECT * FROM BONUSAN  ORDER BY ID_BONUSAN ASC") or die(mysql_error());
		
		//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
			
			//jika data kosong, maka akan menampilkan row kosong
			echo '<tr><td colspan="5">Tidak ada data!</td></tr>';
			
		}else{	//else ini artinya jika data hasil query ada (data di database tidak kosong)
			
			//jika data tidak kosong, maka akan melakukan perulangan while
			
			while($data = mysql_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
				
				//menampilkan row dengan data di database
				echo '<tr>';
					
					echo '<td>'.$data['ID_BONUSAN'].'</td>';
					echo '<td>'.$data['NAMA_BONUSAN'].'</td>';
					echo '<td>'.$data['POIN_BONUSAN'].'</td>';
					echo '<td><a href="edit.php?id='.$data['ID_BONUSAN'].'">Edit</a> / <a href="hapus.php?id='.$data['ID_BONUSAN'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=siswa_id
				echo '</tr>';
					
					
			
				
			}
			
		}
		?>
	</table>
