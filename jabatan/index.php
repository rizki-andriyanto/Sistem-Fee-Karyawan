<?php include('../header1.php'); ?>
	<h2>SJS MALANG</h2>
	
	

	<a href="tambah.php"><h2>Tambah Data</h2></a>
	
	<h3>Nama Jabatan</h3>
	
	<table class="table table-striped" >

			<th>No.</th>
			<th>Id Jabatan</th>
			<th>Nama Jabatan</th>
			<th>Pengaturan</th>
			
		
		
		<?php
		
		
		//query ke database dg SELECT table karyawan diurutkan berdasarkan NIS paling besar
		$query = mysql_query("SELECT * FROM JABATAN ORDER BY ID_JABATAN ASC") or die(mysql_error());
		
		//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
			
			//jika data kosong, maka akan menampilkan row kosong
			echo '<tr><td colspan="5">Tidak ada data!</td></tr>';
			
		}else{	//else ini artinya jika data hasil query ada (data di database tidak kosong)
			
			//jika data tidak kosong, maka akan melakukan perulangan while
			$no = 1 ;	//membuat variabel $no untuk membuat nomor urut
			while($data = mysql_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
				
				//menampilkan row dengan data di database
				echo '<tr>';
					echo '<td>'.$no.'</td>';
					echo '<td>'.$data['ID_JABATAN'].'</td>';	
					echo '<td>'.$data['NAMA_JABATAN'].'</td>';
					echo '<td><a href="edit.php?id='.$data['ID_JABATAN'].'"><span class="glyphicon glyphicon-edit"></span> </a> &nbsp&nbsp/&nbsp&nbsp<a href="hapus.php?id='.$data['ID_JABATAN'].'" onclick="return confirm(\'Yakin?\')"><span class="glyphicon glyphicon-trash"></span></a></td>';	//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=siswa_id
				echo '</tr>';

					

					
				
				$no++;	//menambah jumlah nomor urut setiap row
				
			}
			
		}
		?>
	</table>
