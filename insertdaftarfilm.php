<?php
include "koneksi.php";
if(isset($_POST['input'])){
    $id = $_POST['id'];
    $nama_film = $_POST['nama_film'];
    $foto = $_FILES['foto_film']['name'];
    if($foto!=''){
        $upload = 'images/'.$foto;
        move_uploaded_file($_FILES["foto_film"]["tmp_name"], $upload);
    }
    $insert = "insert into daftar_film(id,nama_film,foto_film) 
    values('$id','$nama_film','$upload')";
    $query = mysqli_query($conn,$insert);
    if($query){
        ?>
        <script>
            alert('Data berhasil ditambahkan!');
            document.location='viewdaftarfilm.php';
        </script>
        <?php
    }
}
?>

<html>
<head>
</head>
<body>
    <h1>Tambah Data Daftar Film</h1>
<form action='<?php $_SERVER['PHP_SELF']; ?>' name=
'insert' method='post' enctype='multipart/form-data'>
<table>
    <tr>
        <td>Nama Film</td>
        <td>
            <input type="text" name="nama_film"/>
        </td>
    </tr>
    <tr>
        <td>Foto Film</td>
        <td>
            <input type='file' name='foto_film'  accept=".jpg, .png"/>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" name="input" value='Tambah Data Daftar_Film'/>  
        </td>
    </tr>
</table>
</form>
</body>
</html>