<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "simbat";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Gagal koneksi database: " . mysqli_connect_error());
}
?>
