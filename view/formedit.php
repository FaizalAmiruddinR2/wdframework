<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Mahasiswa <?php echo $data->nama ?></title>
</head>
<body>
	<form action="../save/<?php echo $data->id ?>" method="post">
		<h1>Edit Mahasiswa</h1>
		NRP <br>
		<input type="number" name="nrp" value="<?php echo $data->nrp ?>"><br>
		Nama <br>
		<input type="text" name="nama" value="<?php echo $data->nama ?>"><br>
		Jurusan <br>
		<input type="text" name="jurusan" value="<?php echo $data->jurusan ?>"><br>
		<input type="submit" value="Save"> <input type="reset" value="Reset">
	</form>
</body>
</html>