<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<tr>
		<td>Id</td>
		<td>Kategori</td>
	</tr>
	<?php
	foreach ($konten as $keykonten => $valuekonten) {
	?>
	<tr>
		<td><?php echo $valuekonten['id']; ?></td>
		<td><?php echo $valuekonten['kategori']; ?></td>
	</tr>
	<?php 
	}
	?>
</table>
</body>
</html>