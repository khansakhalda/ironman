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
    <!-- <img class="IronMan3PhaseTwo20131"
        style="width: 240px; height: 359.82px; left: 1142px; top: 154px; position: absolute; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px"
        src='<?php echo $row["nama_film"]; ?>' />
    <img class="Download131"
        style="width: 240px; height: 355.43px; left: 871px; top: 154px; position: absolute; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px"
        src="https://s3-alpha-sig.figma.com/img/d7ac/2343/fbf68502260185cb8d9791377a3e419d?Expires=1701648000&Signature=fDZOyCfRpJKMpKf0dvP6h7jdcOcXRfe6nlxD4w4lgrE1bk~rMg7mdKcez-nk7hBdV80uxKkPDCePFjgkXCxTDURxTrtxuY99WNPnALOWyBRTmNpwDdK7YDQ4UxsKP8CGIwMQEffbcEJKsOqUu8rvbKybPfWdPPCDpe-TnafNVXcCso3pFi-QJF1iKFyFe9xuGBeeEJwiJekQN3UWj702rdJT8g6-7HSToKLPRor4cKrRQpvI~LMs5b7T8fUstWJ3UyRQo7auib00LQO5fH27y~v3YI4CEmYQakJnB3sN0MXsCwxCnJma6qRRKfGSERbJ9T9-APLEV99GDfPtoENdyg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" />
    <img class="Download141"
        style="width: 240px; height: 355px; left: 58px; top: 585px; position: absolute; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px"
        src="https://s3-alpha-sig.figma.com/img/a584/5883/aa7b731df91f60dda8f2db30ec4b4276?Expires=1701648000&Signature=Bc5jTu5X~bBN1MBTq~vP73Ybap~6FmfRYCwB7Rv3ZKSfHHMeuEEhUgbKWvIgvdPAHP48REL6al78SUjDyHpdWmawzxzz03xH31T3TQ~OxfgH0FpBprWvgqqna05KsTOMT04ByqoowAwu3M0OqgOLWKdOSktNdgMSyuBcJ91aAccCNs5SlgHN3DRk4lUAtseaxgTnscrD65sXinDVoEv2QRBMvwaVG1I~GDIFYJBJcdQq64p~1DN5fdFZtZlGYHh~kSBkA8Fe3N2DfJwq8c1RkQyWIOSR-8iMPOIJ4H9WFWiyNcQEYlE0njLMuEU3PaZmk2E1zMeivs0YrdC3D0-Eow__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" /> -->
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

    <!-- <div class="AvangersAgeOfUltron2015"
        style="width: 180px; height: 32px; left: 58px; top: 960px; position: absolute; color: rgba(255, 255, 255, 0.60); font-size: 15px; font-family: Inder; font-weight: 400; word-wrap: break-word">
        Avangers : Age of Ultron (2015)</div>
    <div class="CaptainAmerikaCivilWar2016"
        style="width: 194px; height: 32px; left: 329px; top: 961px; position: absolute; color: rgba(255, 255, 255, 0.60); font-size: 15px; font-family: Inder; font-weight: 400; word-wrap: break-word">
        Captain Amerika : Civil War (2016)</div>
    <div class="SpiderManHomecomming2017"
        style="width: 212px; height: 32px; left: 600px; top: 959px; position: absolute; color: rgba(255, 255, 255, 0.60); font-size: 15px; font-family: Inder; font-weight: 400; word-wrap: break-word">
        Spider-Man : Homecomming (2017)</div>
    <div class="AvangerInfinityWar2018"
        style="width: 212px; height: 32px; left: 871px; top: 959px; position: absolute; color: rgba(255, 255, 255, 0.60); font-size: 15px; font-family: Inder; font-weight: 400; word-wrap: break-word">
        Avanger : Infinity War (2018)</div>
    <div class="AvangerEndGame2019"
        style="width: 212px; height: 32px; left: 1142px; top: 958px; position: absolute; color: rgba(255, 255, 255, 0.60); font-size: 15px; font-family: Inder; font-weight: 400; word-wrap: break-word">
        Avanger : End Game (2019)</div>
    <div class="TheIncredibleHulk2008"
        style="width: 203px; height: 32px; left: 329px; top: 535px; position: absolute; color: rgba(255, 255, 255, 0.60); font-size: 15px; font-family: Inder; font-weight: 400; word-wrap: break-word">
        The Incredible Hulk (2008)</div>
    <div class="IronMan22010"
        style="width: 203px; height: 32px; left: 600px; top: 536px; position: absolute; color: rgba(255, 255, 255, 0.60); font-size: 15px; font-family: Inder; font-weight: 400; word-wrap: break-word">
        Iron Man 2 (2010)</div>
    <div class="TheAvengers2012"
        style="width: 148px; height: 17px; left: 871px; top: 534px; position: absolute; color: rgba(255, 255, 255, 0.60); font-size: 15px; font-family: Inder; font-weight: 400; word-wrap: break-word">
        The Avengers (2012)</div>
    <div class="IronMan32013"
        style="width: 148px; height: 21px; left: 1142px; top: 534px; position: absolute; color: rgba(255, 255, 255, 0.60); font-size: 15px; font-family: Inder; font-weight: 400; word-wrap: break-word">
        Iron Man 3 (2013) </div>  -->
    <!-- <img class="B10393c07e4f8dd1ef419a36eed2e6071"
        style="width: 50px; height: 80.52px; left: 695px; top: 26px; position: absolute"
        src="https://s3-alpha-sig.figma.com/img/3ed9/c625/e0ccef474f2796491910badf8272fbb3?Expires=1701648000&Signature=Pt1cOYQAi6JOXvVWD774V7jp9cNYwzEzQdN1aBLvE2DeYpNosZcirXNuQGWBSpNsxSmk4nuWZkmWnBCJwsH4bXVi-GoRrAbBcbvWxpctF~uOWcCnZ~DmNcdO2HifzXQACdBYLZrgxV2yOh0k-VxdOaiPUd65b7xM~GO6kw4fn57H6Ztiq-PDdOTJjQ8qNTpA-Wo5mrM3xmbtOQ~9TJsIaEb~w0pIquUXckrJx0YYLVpfe7eLBwn6NRIpmL~Tt2mJvm5y43fD03ZtbCstQzKar~1htddYbsHhRNilthqv-7a9uv7SRJPhFmS0d8l-MxrwGhl1Gkt~9J0Aq1EzQQTSRw__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" /> -->
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
    <!-- <img class="CaptainAmericaCivilWar20161500X22221"
        style="width: 240px; height: 355.43px; left: 329px; top: 585px; position: absolute; border-radius: 10px"
        src="https://s3-alpha-sig.figma.com/img/f4e4/dcfd/8556f9087dfdc1e3ee0233758dd4146d?Expires=1701648000&Signature=gjELCb8yVTXGw5sjz57nRbzG6JRdl6JvnQ-ixeM9S6gvBzXt7HmpV~L5m5r5Vuft4eW86a~M87Sh-gnRsEJF-yvMrXAHpqZQoxILVWzK8ur-8Ve3tJSik1X-WG2DamxPa3NUBHjLYwFBLtpCNMJ7t1GamtQQHW7u-91cnelhGlcatO81mEg9tyIRuNEShHimtDhOxc-p-meueQIbZoZDL2I4YVOWe2SV7IO4792XYTagzqez7byvREggKurwQPgfJVnAT8uIiAid~ec7hE27tnE2lQt4zsEezLSQYBmTrJOTi1mq8qNoL~LoGvUjqfL9YY7rAF3JQsLiSLQ0kc4FqA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" />
    <img class="Download161"
        style="width: 240px; height: 355.92px; left: 600px; top: 585px; position: absolute; border-radius: 10px"
        src="https://s3-alpha-sig.figma.com/img/766b/8f09/bb698861bf930c64873bb22e5fe108f0?Expires=1701648000&Signature=gJO0DAxWT0~lb1kHfoVFqm7eePsoCeYKZwPY9kJAaMVpYTRDP84lYUmQ2UCaO0Tl-hr7wbYrSs7W8lpjL6KnCs62ktA9TECUsDwJcCE6x0AJoktMTtuPqNET-b~X8doqJDsohxHtsHOB0fKcRzBz0d3cs5C1rhhwTIMlHu9fFIriq10vDLAuMQUVQNyzGaDOCCAV32dIEyeR7SQwlvCSfisiurPg3CakT2v4lRMOFvKW~L7RzI2nGxxsQYB-nopDCiefnM4cD8wXonugvfupyd9cl4R4QbKaxvrQ757qrypk9DxuHZgNrNEECtOEj7DqwezlRjLmS93mFCRLx~LKGA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" /> -->
    <!-- <div class="Component12" style="width: 240px; height: 355.11px; left: 600px; top: 155px; position: absolute">
        <img class="IronMan2MoviePoster20101"
            style="width: 240px; height: 355.11px; left: 0px; top: 0px; position: absolute; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px"
            src="https://via.placeholder.com/240x355" /> 
    </div> -->
    <!-- <img class="Component2"
        style="width: 240px; height: 356px; left: 329px; top: 154px; position: absolute; border-radius: 10px"
        src="https://via.placeholder.com/240x356" /> -->
    <!-- <img class="Component1"
        style="width: 240px; height: 342px; left: 58px; top: 155px; position: absolute; border-radius: 10px"
        src="https://via.placeholder.com/240x342" /> -->
    <!-- <img class="Download201"
        style="width: 240px; height: 356px; left: 871px; top: 585px; position: absolute; border-radius: 10px"
        src="https://s3-alpha-sig.figma.com/img/96ea/ec76/2f4ae6acc39e738d65aa4f243b29fc6d?Expires=1701648000&Signature=PHGyHFoXc~1Dtkh3N5D20vMbddQUQj4EHcLMPYTCAGlIoe9JsWyGN4lkjyCFJ1bKt6bYNVZ6UnFyK~RIknL6lq74DFZvvBAQXlP-Tbi6It7SP5aLb4cP1KBxsatWR6cp0EuN6JA5A2za58O1SzhrWhvZrEsToXyqJ3P5F1brxJo-5Bcs0ye5dbIdPiwZX7BXyKF-3wX97~XJEIgwd52sQyTFEFzEwFMakudqbQHfmQcG11pDgZviF2~yCif-WCtdohXBm3QLdr0Mk3NA14LGqX5mUfX67lAEf93PzuajfbFhqcmj9kGuy7U3iBaTkckccZeH9ijRzwqffPt0bWElEw__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" /> -->
    <!-- <img class="AvengersEndGameNewPoster1"
        style="width: 240px; height: 355.43px; left: 1142px; top: 585px; position: absolute; border-radius: 10px"
        src="https://s3-alpha-sig.figma.com/img/1a79/90bf/488092ce28c361569af69e386f85b75b?Expires=1701648000&Signature=ob4ouHc5Psb0PfAG4HnKB9pDofYpfUlbfP~s0gSeVXhkAhJOSB9ADTUlqN~9j9KalyxQqJQpDuF6Lzw6QwBKRhezf4FXfUzlbBLUqBdEzqfdA41b6MZL70eD5Yfo3pjkxabSp6y8n6Kehi5I-lqbtLeUhuATnOfGvTbmnV28~xVIPmKaXTcWGiFt6ZxKIgLXSPGFyE~5-i8K~uJqTG0PoBM5yyIDDWjn4SBM4DwWmJm9EenEdBoJ9~GDXgLyFFXKMWLqn-UMAt6uMVAtDKA5YUBRsXgI7Dc7Pgj2Sq-EAPeqeaOl1jO5NY2Obx6tULUYyZS0vlszq43ceucHgppSNQ__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" /> -->
</div>
</body>

</html>