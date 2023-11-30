<?php
$ambilurl = explode('/', $_SERVER['REQUEST_URI']); 
$ambilslash = $ambilurl[count($ambilurl)-2];
if ($ambilslash == 'admin') {
    $menu = 'Dashboard';  
} elseif ($ambilslash == 'profil') {
    $menu = 'Profil';
} elseif ($ambilslash == 'informasi') {
    $menu = 'Data Film Iron Man';
} elseif ($ambilslash == 'berita') {
    $menu = 'Data Film Iron Man';
} elseif ($ambilslash == 'pengguna') {
    $menu = 'Manajemen Akun';
}
?>

<header>
    <h2><?= $menu ?></h2>
    <a href="/admin/profil/index.php?id=<?= isset($_SESSION['penggunaID']) ? $_SESSION['penggunaID'] : '' ?>">  
    </a>
</header>