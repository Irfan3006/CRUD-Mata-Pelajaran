<!DOCTYPE html>
<html>
<head>
    <title>Edit Mata Pelajaran - SMK Negeri 3 Yogyakarta</title>
    <link rel='shortcut icon' href='favicon.ico' type='image/x-icon' />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="mt-5 text-center">Edit Mata Pelajaran - SMK Negeri 3 Yogyakarta</h2>
        <br/>
        <br/>
        <br/>
            <?php
            include 'koneksi.php';

            if (isset($_GET['id_mata_pelajaran'])) {
                $id_mata_pelajaran = $_GET['id_mata_pelajaran'];

                $query = "SELECT * FROM tbl_mata_pelajaran WHERE id_mata_pelajaran = $id_mata_pelajaran";
                $result = mysqli_query($koneksi, $query);

                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $nama_mata_pelajaran = $row['mata_pelajaran'];
                } else {
                    echo "ID Mata Pelajaran tidak valid.";
                    exit;
                }
            } else {
                echo "Maaf, ID Mata Pelajaran tidak valid.";
                exit;
            }
            ?>

        <form method="post" action="edit_mata_pelajaran_aksi.php">
        <input type="hidden" name="id_mata_pelajaran" value="<?php echo $id_mata_pelajaran; ?>">
            <div class="form-group">
                <label for="nama_mata_pelajaran">Nama Mapel</label>
                <input type="text" class="form-control" name="nama_mata_pelajaran" value="<?php echo $nama_mata_pelajaran; ?>">
            </div>
        <button type='submit' class='btn btn-primary mt-4'>UPDATE</button>
        <a href="index.php" class="btn btn-secondary mt-4">KEMBALI</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>