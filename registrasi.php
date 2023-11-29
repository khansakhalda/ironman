<?php
include "koneksi.php";

if(isset($_POST['input'])){
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = 'pengunjung';

    $insert = "insert into akun(first_name, last_name, username, password, role)
    values('$first_name','$last_name', '$username', '$password', '$role')";
    $query = mysqli_query($conn,$insert);
    if($query){
        ?>
        <script>
            alert('Registrasi Berhasil, Silahkan Log In!');
            document.location='viewakun.php';
        </script>
        <?php
    }
}
?>
<html>
<head>
</head>
<body>
    <h1>Tambah Akun</h1>
<form action='<?php $_SERVER['PHP_SELF']; ?>' name=
'input' method='post' enctype='multipart/form-data'>
<table>
    <tr>
        <td>Firt Name</td>
        <td>
            <input type="text" name="first_name"/>
        </td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td>
            <input type="text" name="last_name"/>
        </td>
    </tr>
    <tr>
        <td>Username</td>
        <td>
            <input type="text" name="username"/>
        </td>
    </tr>
    <tr>
        <td>Password</td>
        <td>
            <input type="password" name="password"/>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" name="input" value='Tambah Data'/>  
        </td>
    </tr>
</table>
</form>
</body>
</html>