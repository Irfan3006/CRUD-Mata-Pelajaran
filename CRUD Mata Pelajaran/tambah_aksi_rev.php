<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_mata_pelajaran = $_POST["id_mata_pelajaran"];
    $id_guru = $_POST["id_guru"];
    $id_siswa = $_POST["id_siswa"];

    $sql = "INSERT INTO jadwal (id_mata_pelajaran, id_guru, id_siswa) VALUES ('$id_mata_pelajaran', '$id_guru', '$id_siswa')";
    
    if ($koneksi->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}

$koneksi->close();
?>
