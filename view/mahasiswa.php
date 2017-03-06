<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<ul>
	<?php foreach ($data as $value) { ?>
		<li><?php echo $value->nama ?></li>
	<?php } ?>
	</ul>
</body>
</html>