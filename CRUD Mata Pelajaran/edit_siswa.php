<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Murid - SMK Negeri 3 Yogyakarta</title>
    <link rel='shortcut icon' href='favicon.ico' type='image/x-icon' />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="mt-5 text-center">Edit Data Murid - SMK Negeri 3 Yogyakarta</h2>
        <br/>
        <br/>
        <br/>
        <?php
        include 'koneksi.php';

        if (isset($_GET['id_siswa'])) {
            $id_siswa = $_GET['id_siswa'];

            // Query untuk mengambil data murid berdasarkan ID
            $query = "SELECT * FROM tbl_siswa WHERE id_siswa = $id_siswa";
            $result = mysqli_query($koneksi, $query);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $nama_siswa = $row['nama_siswa'];
            } else {
                echo "Data Siswa tidak ditemukan.";
                exit;
            }
        } else {
            echo "ID Siswa tidak valid.";
            exit;
        }
        ?>

        <form method="post" action="edit_siswa_aksi.php">
            <input type="hidden" name="id_siswa" value="<?php echo $id_siswa; ?>">
            <div class="form-group">
                <label for="nama_murid">Nama Murid</label>
                <input type="text" class="form-control" name="nama_murid" value="<?php echo $nama_siswa; ?>">
            </div>
            <button type="submit" class="btn btn-primary mt-4">SIMPAN</button>
            <a href="index.php" class="btn btn-secondary mt-4">KEMBALI</a>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
