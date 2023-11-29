<?php
include "koneksi.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    if($id !=""){
        $row = mysqli_fetch_array(mysqli_query($conn,"select * from deskripsi_film where id= '$id' "));
        $hapus = "delete from deskripsi_film where id= '$id' ";
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
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            background-color: #F2F2F2; /* Warna latar belakang tabel deskripsi_film */
        }

        th, td {
            border: 1px solid black;
            padding: 4px; /* Padding pada sel TD */
            text-align: center; /* Teks di tengah sel TD */
        }

        th {
            background-color: #333;
            color: white;
            font-size: 20px;
        }
        td {
            font-size: 18px;
        }

        img {
            margin: 1px; /* Jarak antara gambar dengan border sel TD */
        }
    </style>
</head>
<body>
<center>
    <h1>Data deskripsi_film</h1>
    <p>
        <a href='insertdeskripsifilm.php'>Tambah Data</a>
    </p>
    <table border="1">
        <tr style="background-color: #F2F2F2; font-weight: bold;">
            <th>No</th>
            <th>Nama Film</th>
            <th>Deskripsi</th>
            <th>Tanggal Riris</th>
            <th>Sutradara</th>
            <th>Box Office</th>
            <th>Serial Film</th>
            <th>Genre</th>
            <th>Produser</th>
            <th>Cerita Oleh</th>
            <th>Pemeran</th>
            <th>Aksi</th>
        </tr>
       <?php
       $no = 1;
       $sql = "select * from deskripsi_film order by id desc ";
       $query = mysqli_query($conn,$sql);
       while($row = mysqli_fetch_array($query)){
        echo "
        <tr >
            <td>$no</td>
            <td>$row[nama_film]</td>
            <td>$row[deskripsi]</td>
            <td>$row[tanggal_rilis]</td>
            <td>$row[sutradara]</td>
            <td>$row[box_office]</td>
            <td>$row[serial_film]</td>
            <td>$row[genre]</td>
            <td>$row[produser]</td>
            <td>$row[cerita_oleh]</td>
            <td><img src='$row[pemeran]' width='115' height='150'></td>
            <td> <a href='updatedeskripsifilm.php?upd=$row[id]'> Edit </a> &nbsp;
            <a href='viewdeskripsifilm.php?id=$row[id]'> Hapus </a>
             </td>
        </tr>
        ";
        $no++;
       }
       ?>
    </table>
</center>
</body>
</html>
