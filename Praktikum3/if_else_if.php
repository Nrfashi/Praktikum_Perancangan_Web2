<!DOCTYPE html>
<html>
<head>
	<title>Seleksi if_else_if</title>
</head>
<body>

<?php
$a = 10;
$b = 5;
if ($a > $b) {
	secho 'a lebih besar dari b';
} elseif ($a == $b) {
	echo 'a sama dengan b';
} else {
	echo 'a kurang dari b';
}
?>

</body>
</html>