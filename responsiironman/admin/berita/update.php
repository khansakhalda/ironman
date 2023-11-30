<?php
include "koneksi.php";
$upd = $_GET['upd'];

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
$update = $_POST['update'];

// Mendapatkan data poster saat ini dari database
$sql_current_poster = "SELECT poster FROM film WHERE id='$upd'";
$query_current_poster = mysqli_query($conn, $sql_current_poster);
$hasil_current_poster = mysqli_fetch_array($query_current_poster);
$current_poster = ($hasil_current_poster['poster'] !== null) ? $hasil_current_poster['poster'] : "images/";


if ($poster != '') {
    // Set nama file target sesuai format yang diinginkan
    $target_file = 'images/' . basename($poster);
    move_uploaded_file($_FILES["poster"]["tmp_name"], $target_file);
} else {
    // Jika poster tidak diubah, gunakan poster saat ini
    $target_file = $current_poster;
}



if(isset($update)){
	$update="update film set judul='$judul', deskripsi='$deskripsi', tgl_rilis='$tgl_rilis',
    sutradara='$sutradara', box_office='$box_office', serial_film='$serial_film', gendre='$gendre',
    produser='$produser', penulis='$penulis', poster='$target_file' where id='$upd'";
	$query = mysqli_query($conn,$update);
	if($query){
		?>
		<script>alert('Data Berhasil Diubah!'); 
        document.location='viewfilm.php';
        </script>
		<?php
	}
}

$sql = "select * from film where id='$upd' ";
$query = mysqli_query($conn,$sql);
$hasil = mysqli_fetch_array($query);
if($hasil['id']!=""){
	?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Film Iron Man</title>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.svg">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/admin.css">
    <link rel="stylesheet" href="../../css/admin_data.css">
</head>
<body>
    <?php include '../../components/admin/sidenav.php' ?>
    <main>
        <h1>Edit Data Film Iron Man</h1>
            <form name='formulir'>
                <input type="hidden" name="deskrisifilmID">
                <table border='0'>
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
<?php
}

?>