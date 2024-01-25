<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD DATA Mata Pelajaran - SMK Negeri 3 Yogyakarta</title>
    <link rel='shortcut icon' href='favicon.ico' type='image/x-icon' />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
<h2 class="mt-5 text-center">CRUD DATA Jadwal - SMK Negeri 3 Yogyakarta</h2>
        <br/>
        <br/>
        <br/>
        <h3>TAMBAH DATA MAPEL</h3>
        <form method="post" action="tambah_mapel_aksi.php">
            <div class="form-group">
                <label for="mata_pelajaran">Mata Pelajaran</label>
                <input type="text" class="form-control" name="mata_pelajaran">
            </div>
            <button type="submit" class="btn btn-primary mt-4">SIMPAN</button>
            <a href="index.php" class="btn btn-secondary mt-4">KEMBALI</a>
        </form>
        <br/>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Mata Pelajaran</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM tbl_mata_pelajaran";
                $result = $koneksi->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id_mata_pelajaran"] . "</td>";
                        echo "<td>" . $row["mata_pelajaran"] . "</td>";
                        echo '<td><a class="btn btn-warning" href="edit_mata_pelajaran.php?id_mata_pelajaran=' . $row["id_mata_pelajaran"] . '">EDIT</a> <a class="btn btn-danger" href="hapus_mata_pelajaran.php?id=' . $row["id_mata_pelajaran"] . '">HAPUS</a></td>';
                        echo "</tr>";
                    };
                } else {
                    echo "Tidak ada data.";
                }
                ?>
            </tbody>
        </table>
    </div>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
