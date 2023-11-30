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

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Inder', sans-serif;
            background: #000;
        }

        .DaftarFilm {
            width: 100%;
            height: 100%;
            position: relative;
            background: #000;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            gap: 20px; /* Tambahkan gap untuk memberi ruang antar elemen grid */
        }

        .Login, .Deskripsi, .Pemeran, .Film {
            color: white;
            font-size: 20px;
            font-family: Inder;
            font-weight: 400;
            word-wrap: break-word;
        }

        .FilmTitle {
            font-size: 15px;
            font-family: Inder;
            font-weight: 400;
            word-wrap: break-word;
            color: rgba(255, 255, 255, 0.60);
            margin-top: 500px; /* Ubah margin untuk memberikan ruang antara judul dan poster */
        }

        .MoviePoster {
            width: 240px;
            height: 355px;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 10px;
            margin-top: -400px; /* Ubah margin untuk memberikan ruang antara poster dan judul berikutnya */
        }

        /* Add more movie-specific styles as needed */

        .IronMan2008 {
            display: flex;
            flex-direction: column;
            align-items: center;
            color: rgba(255, 255, 255, 0.60);
            font-size: 15px;
            font-family: Inder;
            font-weight: 400;
        }

        .DeskripsiSection {
            color: #FFFFFF;
            font-size: 20px;
            font-family: Inder;
            font-weight: 400;
            word-wrap: break-word;
        }

        .PemeranSection {
            color: #FFFFFF;
            font-size: 20px;
            font-family: Inder;
            font-weight: 400;
            word-wrap: break-word;
            
        }

        .FilmSection {
            color: #FFFFFF;
            font-size: 20px;
            font-family: Inder;
            font-weight: 400;
            word-wrap: break-word;
            
        }
    </style>

    </head>
    
<body>
<div class="DaftarFilm" style="width: 100%; height: 100%; position: relative; background: black">
    <div class="Login"
        style="width: 66px; height: 23px; left: 1121px; top: 54px; position: absolute; color: white; font-size: 20px; font-family: Inder; font-weight: 400; word-wrap: break-word">
        <a href="signup.php" style="text-decoration: none; color: white;">Login</a></div>
        <?php
        $sql = "SELECT * FROM daftar_film ORDER BY id DESC";
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query)) {
            echo "
            <div class='IronMan2008'>
                <div class='FilmTitle'>
                    " . (isset($row['nama_film']) ? $row['nama_film'] : 'Nama Film Tidak Tersedia') . "
                </div>
                <img class='MoviePoster' src='" . (isset($row['foto_film']) ? $row['foto_film'] : 'https://via.placeholder.com/240x342') . "' />
            </div>";
        }
        ?>
    <div class="Deskripsi"
        style="width: 88px; height: 25px; left: 463px; top: 54px; position: absolute; color: white; font-size: 20px; font-family: Inder; font-weight: 400; word-wrap: break-word">
        <a href="deskripsi.php" style="text-decoration: none; color: white;">Deskripsi</a></div>
    <img class="B10393c07e4f8dd1ef419a36eed2e6071"
        style="width: 50px; height: 80.52px; left: 695px; top: 26px; position: absolute"
        src="https://s3-alpha-sig.figma.com/img/3ed9/c625/e0ccef474f2796491910badf8272fbb3?Expires=1701648000&Signature=Pt1cOYQAi6JOXvVWD774V7jp9cNYwzEzQdN1aBLvE2DeYpNosZcirXNuQGWBSpNsxSmk4nuWZkmWnBCJwsH4bXVi-GoRrAbBcbvWxpctF~uOWcCnZ~DmNcdO2HifzXQACdBYLZrgxV2yOh0k-VxdOaiPUd65b7xM~GO6kw4fn57H6Ztiq-PDdOTJjQ8qNTpA-Wo5mrM3xmbtOQ~9TJsIaEb~w0pIquUXckrJx0YYLVpfe7eLBwn6NRIpmL~Tt2mJvm5y43fD03ZtbCstQzKar~1htddYbsHhRNilthqv-7a9uv7SRJPhFmS0d8l-MxrwGhl1Gkt~9J0Aq1EzQQTSRw__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" />
    <div class="Pemeran"
        style="width: 88px; height: 25px; left: 889px; top: 54px; position: absolute; color: white; font-size: 20px; font-family: Inder; font-weight: 400; word-wrap: break-word">
        <a href="pemeran.php" style="text-decoration: none; color: white;">Pemeran</a></div>
    <div class="Film"
        style="width: 49px; height: 25px; left: 270px; top: 54px; position: absolute; color: white; font-size: 20px; font-family: Inder; font-weight: 400; word-wrap: break-word">
        Film </div>
</div>
</body>

</html>