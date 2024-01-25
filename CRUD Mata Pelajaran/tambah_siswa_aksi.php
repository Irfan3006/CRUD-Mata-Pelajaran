<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari tambah.php
$nama_siswa = $_POST['nama_siswa'];


// menginput data ke database
 // Simpan data baru ke tabel tbl_mata_pelajaran

    // Simpan data baru ke tabel tbl_siswa
    $sql = "INSERT INTO tbl_siswa (nama_siswa) VALUES ('$nama_siswa')";
    $koneksi->query($sql);
    $id_siswa = $koneksi->insert_id;

    // Simpan data baru ke tabel jadwal dengan ID yang sesuai
    $sql = "INSERT INTO jadwal (id_mata_pelajaran, id_guru, id_siswa) VALUES ('$id_mata_pelajaran', '$id_guru', '$id_siswa')";
    $koneksi->query($sql);
 
// mengalihkan halaman kembali ke awal index.php
header("location:tambah_siswa.php");
 
?>