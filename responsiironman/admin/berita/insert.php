<?php
include "../../koneksi.php";
if(isset($_POST['input'])){
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $tgl_rilis = $_POST['tgl_rilis'];
    $sutradara = $_POST['sutradara'];
    $box_office = $_POST['box_office'];
    $serial_film = $_POST['serial_film'];
    $gendre = $_POST['gendre'];
    $produser = $_POST['produser'];
    $penulis = $_POST['penulis'];
    $poster = $_FILES['poster']['name'];
    if($poster!=''){
        $upload = 'images/'.$poster;
        move_uploaded_file($_FILES["poster"]["tmp_name"], $upload);
    }
    $insert = "insert into film(id,judul,deskripsi,tgl_rilis,sutradara,box_office,serial_film,gendre,produser,penulis,poster) 
    values('$id','$judul','$deskripsi','$tgl_rilis','$sutradara','$box_office','$serial_film','$gendre','$produser','$penulis','$upload')";
    $query = mysqli_query($conn,$insert);
    if($query){
        ?>
        <script>
            alert('Data berhasil ditambahkan!');
            document.location='viewfilm.php';
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
    <h1>Tambah Data Film Iron Man</h1>
    <form name='formulir'>
    <table>
        <tr>
            <td>Nama Film</td>
            <td>:</td>
            <td>
            <input type="text" name="judul">
            </td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td>:</td>
            <td>
            <input type="text" name="poster">
            </td>
        </tr>
        <tr>
            <td>Tanggal Rilis</td>
            <td>:</td>
            <td>
            <input type="date" name="tgl_rilis" value="2000-01-01">
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
            <input type="text" name="box_office">
            </td>
        </tr>
        <tr>
            <td>Serial Film</td>
            <td>:</td>
            <td>
            <input type="text" name="serial_film">
            </td>
        </tr>
        <tr>
            <td>Genre</td>
            <td>:</td>
            <td>
            <input type="text" name="gendre">
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
            <input type="text" name="penulis">
            </td>
        </tr>
        <tr>
            <td>Pemeran</td>
            <td>:</td>
            <td>
            <input type="file" name="poster" accept="image/png, image/gif, image/jpeg">
            <input type="file" name="poster" accept="image/png, image/gif, image/jpeg">
            <input type="file" name="poster" accept="image/png, image/gif, image/jpeg">
            <input type="file" name="poster" accept="image/png, image/gif, image/jpeg">
            <input type="file" name="poster" accept="image/png, image/gif, image/jpeg">
            <input type="file" name="poster" accept="image/png, image/gif, image/jpeg">
            <input type="file" name="avatar" accept="image/png, image/gif, image/jpeg">
            <input type="file" name="avatar" accept="image/png, image/gif, image/jpeg">
            <input type="file" name="avatar" accept="image/png, image/gif, image/jpeg">
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