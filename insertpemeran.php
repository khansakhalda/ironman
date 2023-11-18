<?php
include "koneksi.php";
if(isset($_POST['input'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $foto = $_FILES['foto']['name'];
    if($foto!=''){
        $upload = 'images/'.$foto;
        move_uploaded_file($_FILES["foto"]["tmp_name"], $upload);
    }
    $insert = "insert into pemeran(id,nama,foto) 
    values('$id','$nama','$upload')";
    $query = mysqli_query($conn,$insert);
    if($query){
        ?>
        <script>
            alert('Data berhasil ditambahkan!');
            document.location='viewpemeran.php';
        </script>
        <?php
    }
}
?>

<html>
<head>
</head>
<body>
    <h1>Tambah Data pemeran</h1>
<form action='<?php $_SERVER['PHP_SELF']; ?>' name=
'insert' method='post' enctype='multipart/form-data'>
<table>
    <tr>
        <td>Nama</td>
        <td>
            <input type="text" name="nama"/>
        </td>
    </tr>
    <tr>
        <td>foto</td>
        <td>
            <input type='file' name='foto'  accept=".jpg, .png"/>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" name="input" value='Tambah Data pemeran'/>  
        </td>
    </tr>
</table>
</form>
</body>
</html>