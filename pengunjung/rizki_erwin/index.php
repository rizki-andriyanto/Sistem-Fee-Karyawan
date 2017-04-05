<?php include('../../header.php'); ?>
<?php session_start();
if ( !isset($_SESSION['userid']) ) {
      header('location:login.php'); 
}
else { 
    $user = $_SESSION['userid']; 
}

$query = mysql_query("SELECT * FROM anggota WHERE userid = '$user'");
$hasil = mysql_fetch_array($query);
?>


<?php

echo '<b>'.'<h2>'."Selamat Datang ".'</h2>'.'</font>';
?>
<h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="glyphicon glyphicon-user"></span> </h1>
<?php
echo '&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'<a href="index.php">'.'<b>'."( ".$hasil['nama']." )".'</a>'.'<br>'; 

 ?> 
 <br>

 




<link rel="stylesheet" href="style.css">

<canvas id="town" width="700" height="500"></canvas>

<script type="text/javascript">

var canvas = document.getElementById("town"),
ctx = canvas.getContext("2d"),
W = canvas.width,
H = canvas.height,
maxParticles = 25,
maxParticleSize = 8,
minParticleSize = 2,
maxMove = 1,
angle = 0,
particles = [];
	for (var i = 0; i < maxParticles; i++) {
		particles.push({
			x: Math.random() * W, 
			y: Math.random() * H, 
			wh: Math.random() * maxParticleSize + minParticleSize
		})
	}
	
function draw() {
    ctx.clearRect(0, 0, W, H);
    ctx.beginPath();
		for (var i = 0; i < maxParticles; i++) {
			var p = particles[i];
			ctx.moveTo(p.x, p.y);
      ctx.rect(p.x, p.y, p.wh, p.wh);
      var radgrad = ctx.createRadialGradient(p.x + p.wh/2,p.y + p.wh/2,0,p.x + p.wh/2,p.y + p.wh/2,p.wh/2);
  radgrad.addColorStop(0, 'rgba(255, 255, 255, 1)');
  radgrad.addColorStop(0.5, 'rgba(255, 255, 255, .8)');
  radgrad.addColorStop(1, 'rgba(255,255,255,0)');
      ctx.fillStyle = radgrad;
      ctx.fill();
		}
		update();
	}
	
	function update() {
		angle += 0.01;
		for (var i = 0; i < maxParticles; i++) {
			var p = particles[i];
			p.y += Math.cos(angle) + p.wh/4;
			p.x += Math.sin(angle) * 2;
			if (p.x > W+maxMove || p.x < -maxMove || p.y > H) {
				if (i%3 > 0) {
					particles[i] = {x: Math.random() * W, y: -(maxMove), wh: p.wh };
				} else {
					if (Math.sin(angle) > 0) {
						particles[i] = {x: -maxMove, y: Math.random()*H, wh: p.wh };
					} else {
						particles[i] = {x: W+maxMove, y: Math.random()*H, wh: p.wh };
					}
				}
			}
		}
  requestAnimationFrame(draw);
	}
draw();	

</script>






<table cellpadding="10" cellspacing="0" border="5">
		
			<br><marquee bgcolor="red"><font size="100" ><b>BONUSAN RIZKI & ERWIN</b> 
			</font></marquee></th></tr>&nbsp
	<?php 
	function bulan($bln){
		$bulan=$bln;
	Switch ($bulan){
		case 1:$bulan="Januari";
		Break;
		case 2:$bulan="Februari";
		Break;
		case 3:$bulan="Maret";
		Break;
		case 4:$bulan="April";
		Break;
		case 5:$bulan="Mei";
		Break;
		case 6:$bulan="Juni";
		Break;
		case 7:$bulan="Juli";
		Break;
		case 8:$bulan="Agustus";
		Break;
		case 9:$bulan="September";
		Break;
		case 10:$bulan="Oktober";
		Break;
		case 11:$bulan="November";
		Break;
		case 12:$bulan="Desember";
		Break;
		}
		return $bulan;
	}
	$bulan=bulan(date("m"));
	


	echo '<font size="20" color="red">'.'<center>'.'<b>'."Semangat Kerja Untuk Bulan ".$bulan." !!!".'</b>'.' </font>';
	
	$x='';
	$deteksi=date("Y-m");
	
	
	
	$query = mysql_query("SELECT  NAMA_PARTNER,
				SUM(POIN_BONUSAN) AS TOTAL FROM DETAIL_BONUSAN INNER JOIN PARTNER ON DETAIL_BONUSAN.ID_PARTNER=PARTNER.ID_PARTNER INNER JOIN BONUSAN ON 
				DETAIL_BONUSAN.ID_BONUSAN=BONUSAN.ID_BONUSAN WHERE NAMA_PARTNER='RIZKI-ERWIN' and DATE LIKE
				'".$deteksi."%'" )or die(mysql_error());
		while($data = mysql_fetch_assoc($query)){

			echo '<br>'.'&nbsp'.'<td bgcolor="red">';

	 echo '<h1>'."Bonusan Di Bulan ".'<b>'.$bulan.'</b>' .'</h1>';
	
	

			echo '<td bgcolor="white" >'.'&nbsp'.'<h1>'."Total : Rp ".$data['TOTAL'].",00".'<h1>'.'</td>';
			
			echo '</tr>';



		}

		 ?>


	
	
 
	<table class="table table-hover" >




<br>
	<br>
		<tr	class="danger"> <th >No.</th>
			
			<th>Nama Partner</th>
			<th>Tanggal Pemasangan</th>
			<th>Nama Mobil</th>
			<th>No. Rangka/Polisi</th>
			<th>Nama Pemasangan</th>
			<th>Poin Pemasangan</th>
			<th>Tanda Tangan</th>
			

			<th>Pengaturan</th>
		</tr>
	
		<?php
		
		
	
		
		
		
		$query = mysql_query("SELECT ID_DETAIL_BONUSAN,NAMA_PARTNER,DATE,MOBIL,RANGPOL,NAMA_BONUSAN,POIN_BONUSAN
 FROM DETAIL_BONUSAN INNER JOIN PARTNER ON DETAIL_BONUSAN.ID_PARTNER=PARTNER.ID_PARTNER INNER JOIN BONUSAN ON DETAIL_BONUSAN.ID_BONUSAN=BONUSAN.ID_BONUSAN 
 WHERE NAMA_PARTNER='RIZKI-ERWIN'  and DATE LIKE
				'".$deteksi."%' " ) or die(mysql_error());
		


		//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
			
			//jika data kosong, maka akan menampilkan row kosong
			echo '<tr><td colspan="9">Tidak ada data!</td></tr>';
			
		}else{	//else ini artinya jika data hasil query ada (data di database tidak kosong)
			
			//jika data tidak kosong, maka akan melakukan perulangan while
			$no = 1 ;	//membuat variabel $no untuk membuat nomor urut
			while($data = mysql_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
			
			
				//menampilkan row dengan data di database
					echo '<tr  bgcolor="orange">';
					echo '<td>'.$no.'</td>';
					
					
					echo '<td>'.$data['NAMA_PARTNER'].'</td>';
			
					echo '<td>'.date('d-m-Y', strtotime($data['DATE'])).'</td>';
					echo '<td>'.$data['MOBIL'].'</td>';
					echo '<td>'.$data['RANGPOL'].'</td>';
					echo '<td>'.$data['NAMA_BONUSAN'].'</td>';
					echo '<td>'.$data['POIN_BONUSAN'].'</td>';
					echo '<td>'.$x.'</td>';
					
					
					echo '<td><a href="edit.php?id='.$data['ID_DETAIL_BONUSAN'].'"><span class="glyphicon glyphicon-edit"></span> Edit</a>&nbsp&nbsp / <a href="hapus.php?id='.$data['ID_DETAIL_BONUSAN'].'" onclick="return confirm(\'Yakin?\')">&nbsp&nbsp <span class="glyphicon glyphicon-trash"></span> Hapus</a></td>';	
				echo '</tr>';
					$no++;	
				}	
			}
			
			
			?>
	