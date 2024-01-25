<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari tambah.php
$nama_guru = $_POST['nama_guru'];



// menginput data ke database


    // Simpan data baru ke tabel tbl_guru
    $sql = "INSERT INTO tbl_guru (nama_guru) VALUES ('$nama_guru')";
    $koneksi->query($sql);
    $id_guru = $koneksi->insert_id;


    // Simpan data baru ke tabel jadwal dengan ID yang sesuai
    $sql = "INSERT INTO jadwal (id_mata_pelajaran, id_guru, id_siswa) VALUES ('$id_mata_pelajaran', '$id_guru', '$id_siswa')";
    $koneksi->query($sql);
 
// mengalihkan halaman kembali ke awal index.php
header("location:tambah_guru.php");
 
?>