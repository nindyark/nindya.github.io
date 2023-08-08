<!DOCTYPE html>
<html>
<head>
	<title>pemesanan</title>
</head>
<body>
	<form action="" method="post">
		<table border="0" align="center">
			<tr><th colspan="2"><h1> From Pemesanan Nasi Kotak</h1></th></tr>
			<td><img src="RPL.png" width="90"></td>
			<tr><td> Cabang :</td>
			<td><select name="cabang">
				<option value="pilih"> bebas pilih </option>
				<option value="bandung"> bandung </option>
				<option value="jakarta"> jakarta </option>
				<option value="majalengka"> majalengka </option></select>
			</td></tr>
			<tr><td> Nama Pelanggan : </td><td><input type="text" name="nama" id="nama"></td></tr><br>
			<tr><td> Nomor hp : </td><td><input type="text" name="PhoneNumber" id="PhoneNumber"></td></tr><br>
			<tr><td> Jumlah kotak : </td><td><input type="text" name="quantity" id="jumlahktk"></td></tr><br>
			<tr><td><input type="submit" name="pesan" value="pesan"></td></tr><br>
		</table>
	</form>
	<?php
	if (isset($_POST['submit'])) {
		$cabang = $_POST['cabang'];
		$nama = $_POST['nama'];
		$PhoneNumber = $_POST['PhoneNumber'];
		$quantity = $_POST['quantity'];

		echo "Pesan Anda Telah Diterima :<br>";
		echo "Cabang :". $cabang . "<br>";
		echo "nama :". $nama . "<br>";
		echo "PhoneNumber :". $PhoneNumber . "<br>";
		echo "jumlahktk :". $quantity . "<br>";
	}
	?>
</body>
</html>