<!DOCTYPE html>
<html>
<head>
    <title>CRUD DATA Siswa - SMK Negeri 3 Yogyakarta</title>
    <link rel="icon" type="image/x-icon" href="favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .margin-custom a {
            margin-left: 55px;
        }
            
    </style>
</head>
<body>

<h2 class="p-3 text-center">CRUD DATA Jadwal - SMK Negeri 3 Yogyakarta</h2>
<div class="p-3 ms-5 margin-custom">
    <a class="btn btn-primary" href="tambah_rev.php">+ Tambah Jadwal</a>
    <a class="btn btn-primary" href="tambah_guru.php">+ Tambah Nama Guru</a>
    <a class="btn btn-primary" href="tambah_mapel.php">+ Tambah Mata Pelajaran</a>
    <a class="btn btn-primary" href="tambah_siswa.php">+ Tambah Nama Siswa</a>

</div>
<div class="container p-4">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama Guru</th>
                <th>Mata Pelajaran</th>
                <th>Nama Siswa</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include 'koneksi.php';
            $no = 1;

            $data = mysqli_query($koneksi, "SELECT jadwal.id_jadwal, tbl_mata_pelajaran.mata_pelajaran, tbl_guru.nama_guru, tbl_siswa.nama_siswa 
                    FROM jadwal
                    INNER JOIN tbl_mata_pelajaran ON jadwal.id_mata_pelajaran = tbl_mata_pelajaran.id_mata_pelajaran
                    INNER JOIN tbl_guru ON jadwal.id_guru = tbl_guru.id_guru
                    INNER JOIN tbl_siswa ON jadwal.id_siswa = tbl_siswa.id_siswa;");

            while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama_guru']; ?></td>
                    <td><?php echo $d['mata_pelajaran']; ?></td>
                    <td><?php echo $d['nama_siswa']; ?></td>
                    <td>
                        <a class="btn btn-warning" href="edit.php?id_jadwal=<?php echo $d['id_jadwal']; ?>">EDIT</a>
                        <a class="btn btn-danger" href="hapus.php?id_jadwal=<?php echo $d['id_jadwal']; ?>">HAPUS</a>
                    </td>
                </tr>
                <?php 
            }
            ?>
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
