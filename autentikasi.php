<?php
session_start();
include ('koneksi.php');
$username = $_POST ['username'];
$password = $_POST ['password'];

$sql = "SELECT * from akun where username='$username' and password='$password'";
$query = mysqli_query ($conn,$sql);
if(mysqli_num_rows($query)==1){
  header ('Location:daftarfilm.php');
  $user = mysqli_fetch_array($query);
  $_SESSION['username'] = $user['username'];
  $_SESSION['role'] = $user['role'];
}
else if($username == '' || $password ==''){
    header ('Location:signin.php?error=2');
}
else{
    header ('Location:signin.php?error=1');
}

?>