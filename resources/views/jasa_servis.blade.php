<!DOCTYPE html>
<html>
<head>
	<title>Order Jasa  Service</title>
</head>
<body>
 
	<h2>ORDER JASA SERVICE</h2>
	<br/>
	<br/>
 
	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
		ID Service<input type="number" name="id_servis" required="required"> <br/>
		Nama Service <input type="text" name="nama_servis" required="required"> <br/>
		Deskripsi <input type="text" name="deskripsi" required="required"> <br/>
		Mekanik <input type="text" name="mekanik" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>