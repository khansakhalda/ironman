<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Film</title>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.svg">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/admin.css">
    <style>
        /* Gaya CSS*/
        #judul {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .sub-berita {
            display: flex;
            gap: 10px;
        }

        #pengirim {
            color: #666;
            margin-bottom: 5px;
        }

        #tanggal {
            float: right;
            color: #666;
        }

        #isiContainer img {
            max-width: 300px;
            height: auto;
        }
    </style>
</head>
<body>
    <?php include '../../components/admin/sidenav.php' ?>
    <main>
        <h1 id="judul"><?= $data['judul'] ?></h1>
        <div class="sub-berita"></div>
        <div id='isiContainer'></div>
    </main>
    <?php include '../../components/admin/footer.php' ?>
</body>
</html>
