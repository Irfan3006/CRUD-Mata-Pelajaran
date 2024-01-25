<!DOCTYPE html>
<html>
<head>
    <title>Edit Jadwal - SMK N 3 Yogyakarta</title>
    <link rel='shortcut icon' href='favicon.png' type='image/x-iegericon' />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Edit Data Jadwal - SMK Negeri 3 Yogyakarta</h2>
        <br/>
        <?php
        include 'koneksi.php';

        if(isset($_GET['id_jadwal'])) {
            $id_jadwal = $_GET['id_jadwal'];

            // Ambil data jadwal berdasarkan ID
            $query = "SELECT * FROM jadwal WHERE id_jadwal = $id_jadwal";
            $result = mysqli_query($koneksi, $query);

            if(mysqli_num_rows($result) == 1) {
                $data = mysqli_fetch_array($result);
            }
            else {
                echo "Data jadwal tidak ditemukan.";
                exit;
            }
        }
        ?>

        <form action="update.php" method="post">
            <input type="hidden" name="id_jadwal" value="<?php echo $data['id_jadwal']; ?>">
            
            <div class="form-group">
                <label for="mapel">Mapel:</label>
                <select class="form-control" name="mapel">
                    <?php
                    // Ambil data mata pelajaran dari tabel tbl_mata_pelajaran
                    $query_mapel = "SELECT id_mata_pelajaran, mata_pelajaran FROM tbl_mata_pelajaran";
                    $result_mapel = mysqli_query($koneksi, $query_mapel);
                    while ($row_mapel = mysqli_fetch_array($result_mapel)) {
                        $selected = $data['id_mata_pelajaran'] == $row_mapel['id_mata_pelajaran'] ? 'selected' : '';
                        echo '<option value="' . $row_mapel['id_mata_pelajaran'] . '" ' . $selected . '>' . $row_mapel['mata_pelajaran'] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <br>

            <div class="form-group">
                <label for="guru">Guru:</label>
                <select class="form-control" name="guru">
                    <?php
                    // Ambil data guru dari tabel tbl_guru
                    $query_guru = "SELECT id_guru, nama_guru FROM tbl_guru";
                    $result_guru = mysqli_query($koneksi, $query_guru);
                    while ($row_guru = mysqli_fetch_array($result_guru)) {
                        $selected = $data['id_guru'] == $row_guru['id_guru'] ? 'selected' : '';
                        echo '<option value="' . $row_guru['id_guru'] . '" ' . $selected . '>' . $row_guru['nama_guru'] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <br>

            <div class="form-group">
                <label for="siswa">Siswa:</label>
                <select class="form-control" name="siswa">
                    <?php
                    // Ambil data siswa dari tabel tbl_siswa
                    $query_siswa = "SELECT id_siswa, nama_siswa FROM tbl_siswa";
                    $result_siswa = mysqli_query($koneksi, $query_siswa);
                    while ($row_siswa = mysqli_fetch_array($result_siswa)) {
                        $selected = $data['id_siswa'] == $row_siswa['id_siswa'] ? 'selected' : '';
                        echo '<option value="' . $row_siswa['id_siswa'] . '" ' . $selected . '>' . $row_siswa['nama_siswa'] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <br>

            <input type="submit" class="btn btn-primary" value="Simpan Perubahan">
            <a class="btn btn-secondary" href="index.php">Cancel</a>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>