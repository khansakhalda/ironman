<?php
include "../../../koneksi.php";
$upd = $_GET['upd'];

$nama_film = $_POST['nama_film'];
$foto_tmp = $_FILES['foto_film']['tmp_name'];
$foto = $_FILES['foto_film']['name'];
$update = $_POST['update'];

// Mendapatkan data foto saat ini dari database
$sql_current_foto = "SELECT foto_film FROM daftar_film WHERE id='$upd'";
$query_current_foto = mysqli_query($conn, $sql_current_foto);
$hasil_current_foto = mysqli_fetch_array($query_current_foto);
$current_foto = ($hasil_current_foto['foto_film'] !== null) ? $hasil_current_foto['foto_film'] : "images/";


if ($foto != '') {
    // Set nama file target sesuai format yang diinginkan
    $target_file = 'images/' . basename($foto);
    move_uploaded_file($foto_tmp, $target_file);
} else {
    // Jika foto tidak diubah, gunakan foto saat ini
    $target_file = $current_foto;
}



if(isset($update)){
	$update="update daftar_film set nama_film='$nama_film', foto_film='$target_file' where id='$upd'";
	$query = mysqli_query($conn,$update);
	if($query){
		?>
		<script>alert('Data Berhasil Diubah!'); 
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
    <title>Edit Data Film</title>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.svg">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/admin.css">
    <link rel="stylesheet" href="../../css/admin_data.css">
</head>
<body>
    <?php include '../../components/admin/sidenav.php' ?>
    <main>
        <h1>Edit Data Film</h1>
        <form name='formulir' action='<?php $_SERVER['PHP_SELF']; ?>' method='POST' enctype='multipart/form-data'>
                <table border='0'>
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
                        <input type='file' name='foto_film' readonly>
                            <span>Pememran saat ini: <?php echo $current_foto; ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type='submit' name='update' value='Update Data'>
                        </td>
                    </tr>
                </table>
            </form>
    </main>
    <?php include '../../components/admin/footer.php' ?>
</body>
</html>
