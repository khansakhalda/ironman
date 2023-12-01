<?php
include "koneksi.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    if($id !=""){
        $row = mysqli_fetch_array(mysqli_query($conn,"select * from deskripsi_film where id= '$id' "));
    }
    }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Deskripsi Iron Man 2008</title>

    <style>
      body {
        background-color: #000;
        color: #ffffff;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-align: center;
      }

      #container {
        position: relative;
      }

      #back-link {
        position: absolute;
        top: 10px;
        left: 10px;
      }

      #play {
        position: absolute;
        top: 80px;
        left: 530px;
      }

      #play img {
        height: 200px; /* Atur tinggi gambar play */
      }

      #video {
        position: absolute;
        top: 300px;
        left: 550px;
      }

      #image {
        width: 1000px;
        height: auto;
        border-radius: 10px;
      }

      #title {
        font-size: 32px;
        font-weight: bold;
        margin-top: 20px;
        text-align: left;
      }

      #description {
        font-size: 16px;
        margin: 20px;
        text-align: left;
      }

      #details {
        display: flex;
        flex-direction: column; /* Mengatur arah fleks menjadi kolom */
        align-items: center; /* Pusatkan secara horizontal */
        margin-top: 20px;
      }

      .detail-table {
        display: table;
        margin-top: 20px;
        width: 100%; /* Atur lebar tabel */
      }

      .detail-row {
        display: table-row;
      }

      .detail-item {
        display: table-cell;
        padding: 10px;
        text-align: left;
      }

      #iron-man-image {
        width: 200px;
        height: auto;
        border-radius: 10px;
      }

      #image-container {
        display: table-cell;
        padding: 10px;
      }
    </style>
  </head>

  <body>
    <div id="container">
      <br />
      <a id="back-link" href="daftarfilm.php"
        ><img src="assets/images/deskripsileftcircle.png" height="55px"
      /></a>
      <img
        id="image"
        src="assets/images/ironmanvideo.png"
        alt="Iron Man 2008"
      />
      <a id="video" href=""
        ><img src="assets/images/trailer.png" height="55px"
      /></a>
      <a id="play" href="https://youtu.be/-CKyYV5doCI?si=ZPjmkit07ks7JCrF"
        ><img src="assets/images/play.png" height="55px"
      /></a>
      <a id="play" href="https://youtu.be/-CKyYV5doCI?si=ZPjmkit07ks7JCrF"
        ><img src="assets/images/playkuning.png" height="55px"
      /></a>
      <div id="title"> <?php echo $row['nama_film']; ?></div>
      <div id="description">
        <?php echo $row['deskripsi']; ?>
      </div>
      <div id="details">
        <div class="detail-table">
          <div class="detail-row">
            <div id="image-container">
              <!-- <img
                id="iron-man-image"
                src="../assets/images/poster.png"
                alt="Iron Man"
              /> -->
              <img src='<?php echo $row['pemeran']; ?>' width='115' height='150'>
            </div>
            <div class="detail-item">Tanggal Rilis</div>
            <div class="detail-item">:</div>
            <div class="detail-item">
            <?php echo $row['tanggal_rilis']; ?>
            </div>
          </div>
          <div class="detail-row">
            <div></div>
            <div class="detail-item">Sutradara</div>
            <div class="detail-item">:</div>
            <div class="detail-item">
            <?php echo $row['sutradara']; ?>
            </div>
          </div>
          <div class="detail-row">
            <div></div>
            <div class="detail-item">Box Office</div>
            <div class="detail-item">:</div>
            <div class="detail-item">
            <?php echo $row['box_office']; ?>
            </div>
          </div>
          <div class="detail-row">
            <div></div>
            <div class="detail-item">Serial Film</div>
            <div class="detail-item">:</div>
            <div class="detail-item">
            <?php echo $row['serial_film']; ?>
            </div>
          </div>
          <div class="detail-row">
            <div></div>
            <div class="detail-item">Genre</div>
            <div class="detail-item">:</div>
            <div class="detail-item">
            <?php echo $row['genre']; ?>
            </div>
          </div>
          <div class="detail-row">
            <div></div>
            <div class="detail-item">Produser</div>
            <div class="detail-item">:</div>
            <div class="detail-item">
            <?php echo $row['produser']; ?>
            </div>
          </div>
          <div class="detail-row">
            <div></div>
            <div class="detail-item">Cerita Oleh</div>
            <div class="detail-item">:</div>
            <div class="detail-item">
            <?php echo $row['cerita_oleh']; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
