<?php
include "../../../koneksi.php";
if(isset($_POST['input'])){
    $id = $_POST['id'];
    $nama_film = $_POST['nama_film'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal_rilis = $_POST['tanggal_rilis'];
    $sutradara = $_POST['sutradara'];
    $box_office = $_POST['box_office'];
    $serial_film = $_POST['serial_film'];
    $genre = $_POST['genre'];
    $produser = $_POST['produser'];
    $cerita_oleh = $_POST['cerita_oleh'];
    $pemeran_tmp = $_FILES['pemeran']['tmp_name'];
    $pemeran = $_FILES['pemeran']['name'];
    if($pemeran!=''){
        $upload = 'images/'.$pemeran;
        move_uploaded_file($pemeran_tmp, $upload);
    }
    $insert = "INSERT INTO deskripsi_film(id,nama_film,deskripsi,tanggal_rilis,sutradara,box_office,serial_film,genre,produser,cerita_oleh,pemeran) 
    values('$id','$nama_film','$deskripsi','$tanggal_rilis','$sutradara','$box_office','$serial_film','$genre','$produser','$cerita_oleh','$upload')";
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
    <h1>Tambah Data Film Iron Man</h1>
    <form action='<?php $_SERVER['PHP_SELF']; ?>' method='POST' enctype='multipart/form-data'>
    <!-- <form name='formulir'> -->
    <table>
        <tr>
            <td>Nama Film</td>
            <td>:</td>
            <td>
            <input type="text" name="nama_film">
            </td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td>:</td>
            <td>
                <textarea name="deskripsi" id="" cols="30" rows="10"></textarea>
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
            <input type="text" name="cerita_oleh">
            </td>
        </tr>
        <tr>
            <td>Pemeran</td>
            <td>:</td>
            <td>
            <input type="file" name="pemeran" accept="image/png, image/gif, image/jpeg">
            <!-- <input type="file" name="pemeran" accept="image/png, image/gif, image/jpeg">
            <input type="file" name="pemeran" accept="image/png, image/gif, image/jpeg">
            <input type="file" name="pemeran" accept="image/png, image/gif, image/jpeg">
            <input type="file" name="pemeran" accept="image/png, image/gif, image/jpeg">
            <input type="file" name="pemeran" accept="image/png, image/gif, image/jpeg">
            <input type="file" name="pemeran" accept="image/png, image/gif, image/jpeg">
            <input type="file" name="pemeran" accept="image/png, image/gif, image/jpeg">
            <input type="file" name="pemeran" accept="image/png, image/gif, image/jpeg"> -->
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
            <input type='submit' name='inp  ut' class="insert" value='Submit'>
            </td>
        </tr>
    </table>
    </form>
    </main>
    <?php include '../../components/admin/footer.php' ?>
</body>
</html>