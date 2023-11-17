<?php
include "koneksi.php";
if(isset($_POST['input'])){
    $id = $_POST['id'];
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
    if($poster!=''){
        $upload = 'images/'.$poster;
        move_uploaded_file($_FILES["poster"]["tmp_name"], $upload);
    }
    $insert = "insert into film(id,judul,deskripsi,tgl_rilis,sutradara,box_office,serial_film,gendre,produser,penulis,poster) 
    values('$id','$judul','$deskripsi','$tgl_rilis','$sutradara','$box_office','$serial_film','$gendre','$produser','$penulis','$upload')";
    $query = mysqli_query($conn,$insert);
    if($query){
        ?>
        <script>
            alert('Data berhasil ditambahkan!');
            document.location='viewfilm.php';
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
            <input type="text" name="judul"/>
        </td>
    </tr>
    <tr>
        <td>Poster</td>
        <td>
            <input type='file' name='poster'  accept=".jpg, .png"/>
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
            <input type="date" name="tgl_rilis"/>
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
        <td>Gendre</td>
        <td>
            <input type="text" name="gendre"/>
        </td>
       
    </tr>
    <tr>
        <td>Produser</td>
        <td>
            <input type="text" name="produser"  />
        </td>
       
    </tr>
    <tr>
        <td>Penulis</td>
        <td>
            <input type="text" name="penulis"/>
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