<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbnm = "db_penjualan";
$conn = mysqli_connect ($host, $user, $pass, $dbnm);
if (!$conn) {
die ("Database tidak dapat dibuka");
}
?>