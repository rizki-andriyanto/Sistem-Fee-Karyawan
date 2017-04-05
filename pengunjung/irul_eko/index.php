<!DOCTYPE html>
<html>
<head>
	<title>BONUSAN IRUL-EKO</title>
</head>
<p>

<link rel="stylesheet" href="style.css">
<div class="header">
<h1>
SUMBER JAYA SAKTI MALANG
</h1>
	
</div>
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
<p>
<body bgcolor="orange">

<?php 
session_start();
if ( !isset($_SESSION['userid']) ) {
    header('location:login.php'); 
}
else { 
    $usr = $_SESSION['userid']; 
}
require_once('koneksi.php');
$query = mysql_query("SELECT * FROM anggota WHERE userid = '$usr'");
$hasil = mysql_fetch_array($query);




echo '<font size="5" color="blue" >'.'<b>'."Selamat Datang, ".'</b>'.'<font color="red">'.$hasil['nama'].'</font>'; 



 ?>  
 

<table cellpadding="10" cellspacing="0" border="5">
		<tr bgcolor="red">
			<span align="center"><th ><marquee bgcolor="red"><font size="50" color="white">BONUSAN IRUL dan EKO </font></marquee></th></tr></span>

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
	


	echo '<font size="20" color="blue">'.'<b>'."Semangat Kerja Yaa!!! Untuk Bulan ".$bulan.'</b>'.' </font>';
	
	$x='';
	$deteksi=date("Y-m");
	
	
	
	include('koneksi.php');
	
	$query = mysql_query("SELECT  NAMA_PARTNER,
				SUM(POIN_BONUSAN) AS TOTAL FROM DETAIL_BONUSAN INNER JOIN PARTNER ON DETAIL_BONUSAN.ID_PARTNER=PARTNER.ID_PARTNER INNER JOIN BONUSAN ON 
				DETAIL_BONUSAN.ID_BONUSAN=BONUSAN.ID_BONUSAN WHERE NAMA_PARTNER='IRUL-EKO' and DATE LIKE
				'".$deteksi."%'" )or die(mysql_error());
		while($data = mysql_fetch_assoc($query)){

			echo '<tr>';  
			
			echo '<td bgcolor="white">'.'<span align="center">'.'<h1>'."Total : Rp ".$data['TOTAL'].",00".'<h1>'.'</span>'.'</td>';
			
			echo '</tr>';



		}

		 ?>

	<a href="tambah.php"><h2><font color="white"><li>Klik Untuk Memasukkan Data Pemasangan</li></font></h2></a>
	<a href="alldata.php"><h2><font color="white"><li>Lihat Semua Pemasangan</li></font></h2></a><br>	
	<br>
	<a href="../../user/logout.php"><h2><font color="white"><li>Logout</li></font></h2></a>
 <td bgcolor="chartreuse">

	<?php echo '<span align="center">'.'<h1>'. '<br>'."Daftar Bonusan Selama Bulan ".'<i>'."' ".$bulan." '".'</i>' .'</h1>'.'</span>';?>
	<br>
	
	<table cellpadding="35" cellspacing="0" border="15">
		<tr bgcolor="red"></br></br></br>

			<th>No.</th>
			
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
		
		//iclude file koneksi ke database
		include('koneksi.php');
		
		
		//query ke database dg SELECT table karyawan diurutkan berdasarkan NIS paling besar
		$query = mysql_query("SELECT ID_DETAIL_BONUSAN,NAMA_PARTNER,DATE,MOBIL,RANGPOL,NAMA_BONUSAN,POIN_BONUSAN
 FROM DETAIL_BONUSAN INNER JOIN PARTNER ON DETAIL_BONUSAN.ID_PARTNER=PARTNER.ID_PARTNER INNER JOIN BONUSAN ON DETAIL_BONUSAN.ID_BONUSAN=BONUSAN.ID_BONUSAN 
 WHERE NAMA_PARTNER='IRUL-EKO'  and DATE LIKE
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
					
					
					echo '<td><a href="edit.php?id='.$data['ID_DETAIL_BONUSAN'].'">Edit</a> / <a href="hapus.php?id='.$data['ID_DETAIL_BONUSAN'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	
				echo '</tr>';
					$no++;	//menambah jumlah nomor urut
				}	
			}
			
			
			?>
			</table>
		</td>
	</body>
</html>


