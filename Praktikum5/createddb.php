<!DOCTYPE html>
<html lang="en">
<head>
<title>Menciptakan Database</title>
</head>
<body>
<?php
require_once './koneksi.php';
$db = 'sekolah';
$res = mysql_query('CREATE DATABASE ' . $db);
if ($res) {
echo 'Database ' .$db. ' Created';
mysql_close($res);
} else {
echo mysql_error();
}
?>
</body>
</html>