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
<form name='formulir' method='post' action='<?php $_SERVER['PHP_SELF']; ?>' enctype="multipart/form-data">
<table align='center' border='0'>
<tr>
        <td>Judul</td>
        <td>
            <input type="text" name="judul" value='<?php echo $hasil['judul']; ?>'>
        </td>
    </tr>
    <tr>
        <td>Poster</td>
        <td>
            <input type='file' name='poster' readonly>
            <span>Poster saat ini: <?php echo $current_poster; ?></span>
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
            <input type="date" name="tgl_rilis"   value='<?php echo $hasil['tgl_rilis']; ?>'>
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
        <td>Gendre</td>
        <td>
            <input type="text" name="gendre"    value='<?php echo $hasil['gendre']; ?>'>
        </td>
       
    </tr>
    <tr>
        <td>Produser</td>
        <td>
            <input type="text" name="produser"    value='<?php echo $hasil['produser']; ?>'>
        </td>
       
    </tr>
    <tr>
        <td>Penulis</td>
        <td>
            <input type="text" name="penulis"    value='<?php echo $hasil['penulis']; ?>'>
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