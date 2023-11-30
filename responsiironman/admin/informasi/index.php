<?php
include "koneksi.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    if($id !=""){
        $row = mysqli_fetch_array(mysqli_query($conn,"select * from daftar_film where id= '$id' "));
        $hapus = "delete from daftar_film where id= '$id' ";
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
    <title>Daftar Film</title>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.svg">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/admin.css">
    <link rel="stylesheet" href="../../css/admin_index.css">
    <link rel="stylesheet" href="../../css/admin_header.css">
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
                <th>Foto Film</th>
                <th>Aksi</th>
            </tr>
            <?php
       $no = 1;
       $sql = "select * from daftar_film order by id desc ";
       $query = mysqli_query($conn,$sql);
       while($row = mysqli_fetch_array($query)){
        echo "
        <tr >
            <td>$no</td>
            <td>$row[nama_film]</td>
            <td><img src='$row[foto_film]' width='115' height='150'></td>
            <td style='display: flex; gap: 5px; justify-content: center;'>
                <a class='delete' href='detail.php?id=$row[deskripsiID]'>
                    <img src='../../assets/images/detail.svg'>
                </a>
                <a class='update' href='update.php?id=$row[deskripsiID]'>
                    <img src='../../assets/images/edit.svg'>
                </a> 
                <a class='delete' href='?id=$row[deskripsiID]'>
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