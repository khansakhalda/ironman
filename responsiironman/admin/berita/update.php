<?php
include "../../../koneksi.php";
$upd = $_GET['upd'];

$nama_film = $_POST['nama_film'];
$deskripsi = $_POST['deskripsi'];
$tanggal_rilis = $_POST['tanggal_rilis'];
$sutradara = $_POST['sutradara'];
$box_office = $_POST['box_office'];
$serial_film = $_POST['serial_film'];
$genre = $_POST['genre'];
$produser = $_POST['produser'];
$cerita_oleh = $_POST['cerita_oleh'];
$poster_tmp = $_FILES['poster']['tmp_name'];
$poster = $_FILES['poster']['name'];
$update = $_POST['update'];

// Mendapatkan data poster saat ini dari database
$sql_current_poster = "SELECT poster FROM deskripsi_film WHERE id='$upd'";
$query_current_poster = mysqli_query($conn, $sql_current_poster);
$hasil_current_poster = mysqli_fetch_array($query_current_poster);
$current_poster = ($hasil_current_poster['poster'] !== null) ? $hasil_current_poster['poster'] : "images/";


if ($poster != '') {
    // Set nama file target sesuai format yang diinginkan
    $target_file = 'images/' . basename($poster);
    move_uploaded_file($poster_tmp, $target_file);
} else {
    // Jika poster tidak diubah, gunakan poster saat ini
    $target_file = $current_poster;
}



if(isset($update)){
	$update="UPDATE deskripsi_film SET nama_film='$nama_film', deskripsi='$deskripsi', tanggal_rilis='$tanggal_rilis',
    sutradara='$sutradara', box_office='$box_office', serial_film='$serial_film', genre='$genre',
    produser='$produser', cerita_oleh='$cerita_oleh', poster='$target_file' WHERE id='$upd'";
	$query = mysqli_query($conn,$update);
	if($query){
		?>
		<script>alert('Data Berhasil Diubah!'); 
        document.location='index.php';
        </script>
		<?php
	}
}

$sql = "SELECT * FROM deskripsi_film WHERE id='$upd' ";
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
        <form name='formulir' action='<?php $_SERVER['PHP_SELF']; ?>' method='POST' enctype='multipart/form-data'>
                <table border='0'>
                <tr>
                        <td>Nama Film</td>
                        <td>
                            <input type="text" name="nama_film" value='<?php echo $hasil['nama_film']; ?>'>
                        </td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td>
                            <textarea name="deskripsi" ><?php echo $hasil['deskripsi']; ?></textarea>
                        </td>
                    
                    </tr>
                    <tr>
                        <td>Tanggal Rilis</td>
                        <td>
                            <input type="date" name="tanggal_rilis"   value='<?php echo $hasil['tanggal_rilis']; ?>'>
                        </td>
                        
                    </tr>
                    <tr>
                        <td>Sutradara</td>
                        <td>
                            <input type="text" name="sutradara"  value='<?php echo $hasil['sutradara']; ?>'>
                        </td>
                    
                    </tr>
                    <tr>
                        <td>Box Office</td>
                        <td>
                            <input type="text" name="box_office"   value='<?php echo $hasil['box_office']; ?>'>
                        </td>
                    
                    </tr>
                    <tr>
                        <td>Serial Film</td>
                        <td>
                            <input type="text" name="serial_film"   value='<?php echo $hasil['serial_film']; ?>'>
                        </td>
                    
                    </tr>
                    <tr>
                        <td>Genre</td>
                        <td>
                            <input type="text" name="genre"    value='<?php echo $hasil['genre']; ?>'>
                        </td>
                    
                    </tr>
                    <tr>
                        <td>Produser</td>
                        <td>
                            <input type="text" name="produser"    value='<?php echo $hasil['produser']; ?>'>
                        </td>
                    
                    </tr>
                    <tr>
                        <td>Cerita Oleh</td>
                        <td>
                            <input type="text" name="cerita_oleh"    value='<?php echo $hasil['cerita_oleh']; ?>'>
                        </td>
                    
                    </tr>
                    <tr>
                        <td>poster</td>
                        <td>
                            <input type='file' name='poster' readonly>
                            <span>Pememran saat ini: <?php echo $current_poster; ?></span>
                        </td>
                    </tr>
                    <tr>
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
<?php
}

?>