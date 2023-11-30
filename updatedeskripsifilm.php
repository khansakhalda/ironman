<?php
include "koneksi.php";
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
$pemeran = $_FILES['pemeran']['name'];
$update = $_POST['update'];

// Mendapatkan data pemeran saat ini dari database
$sql_current_pemeran = "SELECT pemeran FROM deskripsi_film WHERE id='$upd'";
$query_current_pemeran = mysqli_query($conn, $sql_current_pemeran);
$hasil_current_pemeran = mysqli_fetch_array($query_current_pemeran);
$current_pemeran = ($hasil_current_pemeran['pemeran'] !== null) ? $hasil_current_pemeran['pemeran'] : "images/";


if ($pemeran != '') {
    // Set nama file target sesuai format yang diinginkan
    $target_file = 'images/' . basename($pemeran);
    move_uploaded_file($_FILES["pemeran"]["tmp_name"], $target_file);
} else {
    // Jika pemeran tidak diubah, gunakan pemeran saat ini
    $target_file = $current_pemeran;
}



if(isset($update)){
	$update="update deskripsi_film set nama_film='$nama_film', deskripsi='$deskripsi', tanggal_rilis='$tanggal_rilis',
    sutradara='$sutradara', box_office='$box_office', serial_film='$serial_film', genre='$genre',
    produser='$produser', cerita_oleh='$cerita_oleh', pemeran='$target_file' where id='$upd'";
	$query = mysqli_query($conn,$update);
	if($query){
		?>
		<script>alert('Data Berhasil Diubah!'); 
        document.location='viewdeskripsifilm.php';
        </script>
		<?php
	}
}

$sql = "select * from deskripsi_film where id='$upd' ";
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
        <td>Pemeran</td>
        <td>
            <input type='file' name='pemeran' readonly>
            <span>Pememran saat ini: <?php echo $current_pemeran; ?></span>
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