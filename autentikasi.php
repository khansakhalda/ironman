<?php
session_start();
include ('koneksi.php');

function redirectToSignIn($errorCode) {
    $location = 'signin.php';
    if ($errorCode) {
        $location .= '?error=' . $errorCode;
    }
    header("Location: $location");
    exit();
}

function authenticateUser($conn, $username, $password) {
    $sql = "SELECT * FROM akun WHERE username='$username' AND password='$password'";
    $query = mysqli_query($conn, $sql);

    if (mysqli_num_rows($query) == 1) {
        $user = mysqli_fetch_array($query);
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];

        if ($user['role'] == 'admin') {
            header('Location: responsiironman/admin/berita/index.php');
        } else {
            header('Location: daftarfilm.php');
        }
        exit();
    } elseif ($username == '' || $password == '') {
        redirectToSignIn(2); // Error code 2: Username or password is empty
    } else {
        redirectToSignIn(1); // Error code 1: Invalid username or password
    }
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    authenticateUser($conn, $username, $password);
}
?>
