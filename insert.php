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
    <h1>Tambah Data Film Iron Man</h1>
    <form name='formulir'>
    <table>
        <tr>
            <td>Nama Film</td>
            <td>:</td>
            <td>
            <input type="text" name="nama">
            </td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td>:</td>
            <td>
            <input type="text" name="deskripsi">
            </td>
        </tr>
        <tr>
            <td>Tanggal Rilis</td>
            <td>:</td>
            <td>
            <input type="date" name="tanggal_rilis" value="2000-01-01">
            </td>
        </tr>
        <tr>
            <td>Sutradara</td>
            <td>:</td>
            <td>
            <input type="text" name="sutradara">
            </td>
        </tr>
        <tr>
            <td>Box Office</td>
            <td>:</td>
            <td>
            <input type="text" name="box">
            </td>
        </tr>
        <tr>
            <td>Serial Film</td>
            <td>:</td>
            <td>
            <input type="text" name="serial">
            </td>
        </tr>
        <tr>
            <td>Genre</td>
            <td>:</td>
            <td>
            <input type="text" name="genre">
            </td>
        </tr>
        <tr>
            <td>Produser</td>
            <td>:</td>
            <td>
            <input type="text" name="produser">
            </td>
        </tr>
        <tr>
            <td>Cerita Oleh</td>
            <td>:</td>
            <td>
            <input type="text" name="ceritaoleh">
            </td>
        </tr>
        <tr>
            <td>Pemeran</td>
            <td>:</td>
            <td>
            <input type="file" name="avatar" accept="image/png, image/gif, image/jpeg" required>
            <input type="file" name="avatar" accept="image/png, image/gif, image/jpeg" required>
            <input type="file" name="avatar" accept="image/png, image/gif, image/jpeg" required>
            <input type="file" name="avatar" accept="image/png, image/gif, image/jpeg" required>
            <input type="file" name="avatar" accept="image/png, image/gif, image/jpeg" required>
            <input type="file" name="avatar" accept="image/png, image/gif, image/jpeg" required>
            <input type="file" name="avatar" accept="image/png, image/gif, image/jpeg" required>
            <input type="file" name="avatar" accept="image/png, image/gif, image/jpeg" required>
            <input type="file" name="avatar" accept="image/png, image/gif, image/jpeg" required>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
            <input type='submit' name='submit' class="insert" value='Submit'>
            </td>
        </tr>
    </table>
    </form>
    </main>
    <?php include '../../components/admin/footer.php' ?>
</body>
</html>