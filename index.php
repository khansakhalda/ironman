<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Film Iron Man</title>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.svg">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/admin.css">
    <link rel="stylesheet" href="../../css/admin_index.css">
    <link rel="stylesheet" href="../../css/admin_header.css">
    <style>
        td img {
            max-width: 300px;
            height: auto;
        }
    </style>

</head>
<body>
<?php include '../../components/admin/sidenav.php'; ?>
    <main>
    <?php include '../../components/admin/header.php' ?>
        <a class="insert" href="insert.php">
            <img src="../../assets/images/circle-add.svg">
            Tambah Data
        </a>
        <table>
            <tr>
                <th>No</th>
                <th>Nama Film</th>
                <th>Tanggal Rilis</th>
                <th>Sutradara</th>
                <th>Box Office</th>
                <th>Serial Film</th>
                <th>Genre</th>
                <th>Prosedur</th>
                <th>Cerita Oleh</th></th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a class='update' href=''>
                            <img src='../../assets/images/edit.svg'>
                        </a> 
                        <a class='delete' href=''>
                            <img src='../../assets/images/delete.svg'>
                        </a>
                    </td>
                </tr>
        </table>
    </main>
    <?php include '../../components/admin/footer.php' ?>
</body>
</html>