<?php
include "koneksi.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    if($id !=""){
        $row = mysqli_fetch_array(mysqli_query($conn,"select * from film where id= '$id' "));
        $hapus = "delete from film where id= '$id' ";
        $query = mysqli_query($conn, $hapus);
        if($query){
            ?>
            <script>
                alert("Data berhasil dihapus!");
            </script>
            <?php
        }
    }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Film Iron Man</title>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.svg">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/admin.css">
    <link rel="stylesheet" href="../../css/admin_index.css">
    <link rel="stylesheet" href="../../css/admin_header.css">
    <style>
        td img {
            max-width: 300px;
            height: auto;
        }
    </style>

</head>
<body>
<?php include '../../components/admin/sidenav.php'; ?>
    <main>
    <?php include '../../components/admin/header.php' ?>
        <a class="insert" href="insert.php">
            <img src="../../assets/images/circle-add.svg">
            Tambah Data
        </a>
        <table>
            <tr>
                <th>No</th>
                <th>Nama Film</th>
                <th>Tanggal Rilis</th>
                <th>Sutradara</th>
                <th>Box Office</th>
                <th>Serial Film</th>
                <th>Genre</th>
                <th>Prosedur</th>
                <th>Cerita Oleh</th></th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
            <?php
       $no = 1;
       $sql = "select * from film order by id desc ";
       $query = mysqli_query($conn,$sql);
       while($row = mysqli_fetch_array($query)){
        echo "
        <tr >
            <td>$no</td>
            <td>$row[judul]</td>
            <td><img src='$row[poster]' width='115' height='150'></td>
            <td>$row[deskripsi]</td>
            <td>$row[tgl_rilis]</td>
            <td>$row[sutradara]</td>
            <td>$row[box_office]</td>
            <td>$row[serial_film]</td>
            <td>$row[gendre]</td>
            <td>$row[produser]</td>
            <td>$row[penulis]</td>
            <td>
            <a class='update' href=''>
                <img src='../../assets/images/edit.svg'>
            </a> 
            <a class='delete' href=''>
                <img src='../../assets/images/delete.svg'>
            </a>
            </td>
        </tr>
        ";
        $no++;
       }
       ?>
        </table>
    </main>
    <?php include '../../components/admin/footer.php' ?>
</body>
</html>