<?php
$host = 'localhost';
$dbname = 'if0_35856773_mata_pelajaran';
$username = 'if0_35856773';
$password = 'KnixdmyZmP';
$koneksi = mysqli_connect($host, $username, $password, $dbname);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>