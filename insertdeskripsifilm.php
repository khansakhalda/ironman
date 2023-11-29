<?php
include "koneksi.php";
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
    $pemeran = $_FILES['pemeran']['name'];
    if($pemeran!=''){
        $upload = 'images/'.$pemeran;
        move_uploaded_file($_FILES["pemeran"]["tmp_name"], $upload);
    }
    $insert = "insert into deskripsi_film(id,nama_film,deskripsi,tanggal_rilis,sutradara,box_office,serial_film,genre,produser,cerita_oleh,pemeran) 
    values('$id','$nama_film ','$deskripsi','$tanggal_rilis','$sutradara','$box_office','$serial_film','$genre','$produser','$cerita_oleh','$upload')";
    $query = mysqli_query($conn,$insert);
    if($query){
        ?>
        <script>
            alert('Data berhasil ditambahkan!');
            document.location='viewdeskripsifilm.php';
        </script>
        <?php
    }
}
?>

<html>
<head>
</head>
<body>
    <h1>Tambah Data film</h1>
<form action='<?php $_SERVER['PHP_SELF']; ?>' name=
'insert' method='post' enctype='multipart/form-data'>
<table>
    <tr>
        <td>Judul</td>
        <td>
            <input type="text" name="nama_film"/>
        </td>
    </tr>
    <tr>
        <td>Deskripsi</td>
        <td>
            <textarea name="deskripsi" ></textarea>
        </td>
       
    </tr>
    <tr>
        <td>Tanggal Rilis</td>
        <td>
            <input type="date" name="tanggal_rilis"/>
        </td>
        
    </tr>
    <tr>
        <td>Sutradara</td>
        <td>
            <input type="text" name="sutradara"/>
        </td>
       
    </tr>
    <tr>
        <td>Box Office</td>
        <td>
            <input type="text" name="box_office"/>
        </td>
       
    </tr>
    <tr>
        <td>Serial Film</td>
        <td>
            <input type="text" name="serial_film"/>
        </td>
       
    </tr>
    <tr>
        <td>Genre</td>
        <td>
            <input type="text" name="genre"/>
        </td>
       
    </tr>
    <tr>
        <td>Produser</td>
        <td>
            <input type="text" name="produser"  />
        </td>
       
    </tr>
    <tr>
        <td>Cerita Oleh</td>
        <td>
            <input type="text" name="cerita_oleh"/>
        </td>
       
    </tr>
    <tr>
        <td>Pemeran</td>
        <td>
            <input type='file' name='pemeran' />
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" name="input" value='Tambah Data film'/>  
        </td>
    </tr>
</table>
</form>
</body>
</html>