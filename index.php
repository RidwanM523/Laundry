<!DOCTYPE html>
<html>
<head>
	<title>Laundry RM</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<h1>Laundry RM</h1>
		<form action="proses.php" method="POST">
			<label for="nama">Nama : </label>
			<input type="text" name="nama" required>
			<br><br>
			<label for="alamat">Alamat : </label>
			<input type="text" name="alamat" required></input>
			<br><br>
			<label for="barang">Jenis Barang : </label>
			<select name="barang">
				<option value="Pilih">--- Pilih ---</option>
				<option value="Baju">Baju</option>
				<option value="Celana">Celana</option>
				<option value="Jaket">Jaket</option>
				<option value="Sprei">Sprei</option>
				<option value="Karpet">Karpet</option>
			</select>
			<br><br>
			<label for="berat">Berat (kg) : </label>
			<input type="number" name="berat" required>
			<br><br>
			<label for="bayar">Pembayaran : </label>
			<input type="number" name="bayar" required>
			<br><br>
			<input type="submit" value="Submit">
		</form>
		<div class="harga">
			<h2>List Harga</h2>
			<table>
				<tr>
					<th>No.</th>
					<th>Jenis Barang</th>
					<th>Harga/kg</th>
				</tr>
				<tr>
					<td>1.</td>
					<td>Baju</td>
					<td>Rp. 10.000/kg</td>
				</tr>
				<tr>
					<td>2.</td>
					<td>Celana</td>
					<td>Rp. 12.000/kg</td>
				</tr>
				<tr>
					<td>3.</td>
					<td>Jaket</td>
					<td>Rp. 15.000/kg</td>
				</tr>
				<tr>
					<td>4.</td>
					<td>Sprei</td>
					<td>Rp. 20.000/kg</td>
				</tr>
				<tr>
					<td>5.</td>
					<td>Karpet</td>
					<td>Rp. 25.000/kg</td>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>