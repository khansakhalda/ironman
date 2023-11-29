<?php
include "koneksi.php";
$upd = $_GET['upd'];

$nama_film = $_POST['nama_film'];
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
    move_uploaded_file($_FILES["foto_film"]["tmp_name"], $target_file);
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
        document.location='viewdaftarfilm.php';
        </script>
		<?php
	}
}

$sql = "select * from daftar_film where id='$upd' ";
$query = mysqli_query($conn,$sql);
$hasil = mysqli_fetch_array($query);
if($hasil['id']!=""){
	?>
<form name='formulir' method='post' action='<?php $_SERVER['PHP_SELF']; ?>' enctype="multipart/form-data">
<table align='center' border='0'>
<tr>
        <td>Nama Film</td>
        <td>
            <input type="text" name="nama_film" value='<?php echo $hasil['nama_film']; ?>'>
        </td>
    </tr>
    <tr>
        <td>Foto</td>
        <td>
            <input type='file' name='foto_film' readonly>
            <span>foto saat ini: <?php echo $current_foto; ?></span>
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
	<?php
}

?>