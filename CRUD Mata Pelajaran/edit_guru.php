<!DOCTYPE html>
<html>
<head>
    <title>Edit Nama Guru - SMK Negeri 3 Yogyakarta</title>
    <link rel='shortcut icon' href='favicon.ico' type='image/x-icon' />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="mt-5 text-center">Edit Nama Guru - SMK Negeri 3 Yogyakarta</h2>
        <br/>
        <br/>
        <br/>
        <?php
        include 'koneksi.php';

        if (isset($_GET['id_guru'])) {
            $id_guru = $_GET['id_guru'];

            $query = "SELECT * FROM tbl_guru WHERE id_guru = $id_guru";
            $result = mysqli_query($koneksi, $query);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $nama_guru = $row['nama_guru'];
            } else {
                echo "Data Guru tidak ditemukan.";
                exit;
            }
        } else {
            echo "ID Guru tidak valid.";
            exit;
        }
        ?>

        <form method="post" action="edit_guru_aksi.php">
            <input type="hidden" name="id_guru" value="<?php echo $id_guru; ?>">
            <div class="form-group">
                <label for="nama_guru">Nama Guru</label>
                <input type="text" class="form-control" name="nama_guru" value="<?php echo $nama_guru; ?>">
            </div>
            <button type="submit" class="btn btn-primary mt-4">SIMPAN</button>
            <a href="index.php" class="btn btn-secondary mt-4">KEMBALI</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
