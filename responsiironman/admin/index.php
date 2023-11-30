
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Admin @infoberkoh</title>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.svg">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/admin_header.css">
    <style>
        h1 {
            margin-bottom: 1rem;
        }
        .counter {
            display: flex;
            gap: 0.5rem;
            margin-bottom: 2rem;
        }
        .box {
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            padding: 1rem;
            padding-right: 7rem;
            width: fit-content;
        }
        .penduduk {
            background: #e1e7f8;
        }
        .berita {
            background: #f8e1ef;
        }
        .pengaduan {
            background: #f8ece1;
        }
        .akun {
            background: #eeeeee;
        }
        .head {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 600;
        }
        .body {
            font-size: 2rem;
            font-weight: 700;
        }
        .about {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        .about p {
            line-height: 2;
            text-align: justify;
        }
    </style>
</head>
<body>
    <?php include '../components/admin/sidenav.php' ?>
    <main>
        <?php include '../components/admin/header.php' ?>
        <h1>Selamat Datang, Admin!</h1>
        
        <div class="about">
            <img src="../assets/images/foto-berkoh.png">
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Terima kasih tak terhingga</p>
        </div>
    </main>
    <?php include '../components/admin/footer.php' ?>
</body>
</html>