<?php
include "../../../koneksi.php";
if(isset($_POST['input'])){
    $id = $_POST['id'];
    $nama_film = $_POST['nama_film'];
    $foto_tmp = $_FILES['pemeran']['tmp_name'];
    $foto = $_FILES['foto_film']['name'];
    if($foto!=''){
        $upload = 'images/'.$foto;
        move_uploaded_file($foto_tmp, $upload);
    }
    $insert = "INSERT INTO daftar_film(nama_film,foto_film) 
    values('$nama_film','$upload')";
    $query = mysqli_query($conn,$insert);
    if($query){
        ?>
        <script>
            alert('Data berhasil ditambahkan!');
            document.location='index.php';
        </script>
        <?php
    }
}
?>
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
    <h1>Data Film</h1>
    <form action='<?php $_SERVER['PHP_SELF']; ?>' method='POST' enctype='multipart/form-data'>
    <table>
        <tr>
            <td>Nama Film</td>
            <td>:</td>
            <td>
            <input type="text" name="nama_film">
            </td>
        </tr>
        <tr>
            <td>Foto Film</td>
            <td>:</td>
            <td>
            <input type="file" name="foto_film">
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
            <input type='submit' name='input' value='Insert Data'>
            </td>
        </tr>
    </table>
    </form>
    </main>
</body>
</html>