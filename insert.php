<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Film Iron Man</title>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.svg">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/admin.css">
    <link rel="stylesheet" href="../../css/admin_data.css">
</head>
<body>
    <?php include '../../components/admin/sidenav.php' ?>
    <main>
    <h1>Data Film Iron Man</h1>
    <form name='formulir' method='POST' 
action='<?php $_SERVER['PHP_SELF']; ?>'>
    <table>
        <tr>
            <td>Nama Film</td>
            <td>:</td>
            <td>
            <input type="text" name="nama">
            </td>
        </tr>
        <tr>
            <td>Foto Film</td>
            <td>:</td>
            <td>
            <input type="file" name="avatar" accept="image/png, image/gif, image/jpeg" required>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
            <input type='submit' name='insert' value='Insert Data'>
            </td>
        </tr>
    </table>
    </form>
    </main>
</body>
</html>