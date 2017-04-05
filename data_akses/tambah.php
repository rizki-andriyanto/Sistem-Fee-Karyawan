<?php include ('../header1.php'); ?>

	<h2>SJS MALANG</h2>
	<a href="index.php"><h2>Kembali</h2></a>
	
	<h3>Tambah Data Partner</h3>
	
	<form action="tambah-proses.php" method="post">
		<table cellpadding="8" cellspacing="0">
			<tr>
				<td>User Id</td>
				<td>:</td>
				<td><input type="text" name="userid" required></td>
			</tr>
			
				
			<tr>
				<td>NAMA</td>
				<td>:</td>
				<td><input type="text" name="nama" required></td>
			</tr>
			<tr>
				<td>E-mail</td>
				<td>:</td>
				<td><input type="text" name="email" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="text" name="password" required></td>
			</tr>

			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
