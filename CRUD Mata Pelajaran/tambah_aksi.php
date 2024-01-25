<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form tambah_rev.php
$mata_pelajaran = $_POST['mata_pelajaran'];
$nama_guru = $_POST['nama_guru'];
$nama_siswa = $_POST['nama_siswa'];

// Ambil ID dari tabel mata pelajaran berdasarkan nama yang dipilih
$query_mapel = "SELECT id_mata_pelajaran FROM tbl_mata_pelajaran WHERE mata_pelajaran = '$mata_pelajaran'";
$result_mapel = mysqli_query($koneksi, $query_mapel);
$data_mapel = mysqli_fetch_array($result_mapel);
$id_mata_pelajaran = $data_mapel['id_mata_pelajaran'];

// Ambil ID dari tabel guru berdasarkan nama yang dipilih
$query_guru = "SELECT id_guru FROM tbl_guru WHERE nama_guru = '$nama_guru'";
$result_guru = mysqli_query($koneksi, $query_guru);
$data_guru = mysqli_fetch_array($result_guru);
$id_guru = $data_guru['id_guru'];

// Ambil ID dari tabel siswa berdasarkan nama yang dipilih
$query_siswa = "SELECT id_siswa FROM tbl_siswa WHERE nama_siswa = '$nama_siswa'";
$result_siswa = mysqli_query($koneksi, $query_siswa);
$data_siswa = mysqli_fetch_array($result_siswa);
$id_siswa = $data_siswa['id_siswa'];

// menginput data ke database
// Simpan data baru ke tabel jadwal dengan ID yang sesuai
$sql = "INSERT INTO jadwal (id_mata_pelajaran, id_guru, id_siswa) VALUES ('$id_mata_pelajaran', '$id_guru', '$id_siswa')";
$koneksi->query($sql);

// mengalihkan halaman kembali ke awal index.php
header("location:index.php");
?>
