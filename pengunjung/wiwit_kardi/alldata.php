<!DOCTYPE html>
<html>
<head>
	<title>BONUSAN MEKANIK VARIASI</title>
</head>
<p>
<body bgcolor="orange">
<table cellpadding="10" cellspacing="0" border="5">
		<tr bgcolor="red">
			<span align="center"><th ><marquee bgcolor="red"><font size="50" color="white">BONUSANKU </font></marquee></th></tr></span>

	




	<span align="center"><h1><font color="red" size="100">"SUMBER JAYA SAKTI MALANG"</h1></span></font>

	
	<a href="index.php"><h2><li>Home</li></h2></a>
	
 <td bgcolor="orange">

	
	
	<table cellpadding="35" cellspacing="0" border="15">
		<tr bgcolor="red">

			<th>No.</th>
			
			<th>Nama Partner</th>
			<th>Tanggal Pemasangan</th>
			<th>Nama Mobil</th>
			<th>No. Rangka/Polisi</th>
			<th>Nama Pemasangan</th>
			<th>Poin Pemasangan</th>
			
			

			

		</tr>
		
		<?php
		
		//iclude file koneksi ke database
		include('koneksi.php');
		
		
		//query ke database dg SELECT table karyawan diurutkan berdasarkan NIS paling besar
		$query = mysql_query("SELECT ID_DETAIL_BONUSAN,NAMA_PARTNER,DATE,MOBIL,RANGPOL,NAMA_BONUSAN,POIN_BONUSAN
 		FROM DETAIL_BONUSAN INNER JOIN PARTNER ON DETAIL_BONUSAN.ID_PARTNER=PARTNER.ID_PARTNER INNER JOIN BONUSAN ON 
 		DETAIL_BONUSAN.ID_BONUSAN=BONUSAN.ID_BONUSAN WHERE NAMA_PARTNER='WIWIT-KARDI' ORDER BY DATE " ) or die(mysql_error());
		


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
					
					
					
					
					$no++;	//menambah jumlah nomor urut
				}
			}
			
			
			?>
			</table>
		</td>
	</body>
</html>


