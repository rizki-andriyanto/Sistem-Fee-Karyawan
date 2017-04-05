<?php include ('../../header.php'); ?>
<br><br>
	
<table cellpadding="10" cellspacing="0" border="5">
		
			<br><marquee bgcolor="red"><font size="100" ><b>BONUSANKU</b> 
			</font></marquee></th></tr>

	
	<table class="table table-striped" >

			<th>No.</th>
			
			<th>Nama Partner</th>
			<th>Tanggal Pemasangan</th>
			<th>Nama Mobil</th>
			<th>No. Rangka/Polisi</th>
			<th>Nama Pemasangan</th>
			<th>Poin Pemasangan</th>
	
		<?php
		
		
		
		
		$query = mysql_query("SELECT ID_DETAIL_BONUSAN,NAMA_PARTNER,DATE,MOBIL,RANGPOL,NAMA_BONUSAN,POIN_BONUSAN
 		FROM DETAIL_BONUSAN INNER JOIN PARTNER ON DETAIL_BONUSAN.ID_PARTNER=PARTNER.ID_PARTNER INNER JOIN BONUSAN ON DETAIL_BONUSAN.ID_BONUSAN=BONUSAN.ID_BONUSAN WHERE NAMA_PARTNER='RIZKI-ERWIN' ORDER BY DATE " ) or die(mysql_error());
		


		//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
			
			//jika data kosong, maka akan menampilkan row kosong
			echo '<tr><td colspan="9">Tidak ada data!</td></tr>';
			
		}else{	//else ini artinya jika data hasil query ada (data di database tidak kosong)
			
			//jika data tidak kosong, maka akan melakukan perulangan while
			$no = 1 ;	//membuat variabel $no untuk membuat nomor urut
			while($data = mysql_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
			
			
			
				//menampilkan row dengan data di database
					
						
				echo '<tr  bgcolor="greenyellow">';
					
					

					
					echo '<td>'.$no.'</td>';
					echo '<td>'.$data['NAMA_PARTNER'].'</td>';
				
					echo '<td>'.date('d-m-Y', strtotime($data['DATE'])).'</td>';
					echo '<td>'.$data['MOBIL'].'</td>';
					echo '<td>'.$data['RANGPOL'].'</td>';
					echo '<td>'.$data['NAMA_BONUSAN'].'</td>';
					echo '<td>'.$data['POIN_BONUSAN'].'</td>';
				echo '</tr>';
					
					
					
					$no++;	//menambah jumlah nomor urut
				}
			}
			
			
			?>
			</table>
		

