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
            document.location='signin.php';
        </script>
        <?php
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <style>
        /* Text Styles */
    
        /* Sign In */
        .SignIn {
            color: rgba(255, 255, 255, 0.60);
            font-size: 30px;
            font-family: Inder;
            font-weight: 400;
            word-wrap: break-word;
        }
    
        /* Sign Up */
        .SignUp {
            color: white;
            font-size: 30px;
            font-family: Inder;
            font-weight: 400;
            word-wrap: break-word;
        }
    
        /* First Name */
        .FirstName {
            color: rgba(255, 255, 255, 0.60);
            font-size: 20px;
            font-family: Inder;
            font-weight: 400;
            word-wrap: break-word;
        }

        /* Last Name */
        .LastName {
            color: rgba(255, 255, 255, 0.60);
            font-size: 20px;
            font-family: Inder;
            font-weight: 400;
            word-wrap: break-word;
        }

        /* Confirm Password */
        .ConfirmPassword {
            color: rgba(255, 255, 255, 0.60);
            font-size: 20px;
            font-family: Inder;
            font-weight: 400;
            word-wrap: break-word;
        }

        /* I agree to the terms of use */
        .IAgreeToThe {
            color: rgba(255, 255, 255, 0.60);
            font-size: 15px;
            font-family: Inder;
            font-weight: 400;
            word-wrap: break-word;
        }

        /* Terms of Use */
        .TermsOfUse {
            color: white;
            font-size: 15px;
            font-family: Inder;
            font-weight: 400;
            word-wrap: break-word;
        }
    
        /* Password */
        .Password {
            color: rgba(255, 255, 255, 0.60);
            font-size: 20px;
            font-family: Inder;
            font-weight: 400;
            word-wrap: break-word;
        }
    
        /* Username */
        .Username {
            color: rgba(255, 255, 255, 0.60);
            font-size: 20px;
            font-family: Inder;
            font-weight: 400;
            word-wrap: break-word;
        }
    
        /* Sign Up Button */
        .SignUpButton {
            color: white;
            font-size: 30px;
            font-family: Inder;
            font-weight: 400;
            word-wrap: break-word;
        }
    
        /* Layout */
        body {
            width: 100%;
            height: 100%;
            position: relative;
            background: #000;
            margin: 0;
        }


        /* Elements */
        .Login {
            width: 100%;
            height: 100%;
            position: relative;
            background: black;
        }
    
        .Group12 {
            width: 449px;
            height: 669px;
            left: 496px;
            top: 177px;
            position: absolute;
        }
    
        /* ... (Other elements) ... */
    
        .Group34 {
            width: 350px;
            height: 57px;
            left: 543px;
            top: 712px;
            position: absolute;
        }

        .Rectangle15 {
            width: 350px;
            height: 57px;
            left: 0px;
            top: 0px;
            position: absolute;
            background: #676464;
            border-radius: 10px;
        }

        .SignUpButton {
            color: white;
            font-size: 30px;
            font-family: Inder;
            font-weight: 400;
            word-wrap: break-word;
        }

        .Rectangle16 {
            width: 20px;
            height: 20px;
            left: 543px;
            top: 660px;
            position: absolute;
            background: black;
            border: 2px white solid;
        }

        input {
            width: 100%;
            height: 33px;
            padding: 5px;
            margin-bottom: 15px;
            border: 1px solid transparent;
            border-radius: 5px;
            box-sizing: border-box;
            color: #fff;
            background-color: rgba(0, 0, 0, 0.5);
        }

.Checkbox {
    position: absolute;
    width: 16px;
    height: 16px;
    z-index: 1;
    cursor: pointer;
}

.CheckboxLabel {
    position: absolute;
    width: 16px;
    height: 16px;
    background: black;
    border: 2px black;
    cursor: pointer;
}
    </style>

</head>
<body>
<form action='<?php $_SERVER['PHP_SELF']; ?>' name=
'input' method='post' enctype='multipart/form-data'>
<div class="Login" style="width: 100%; height: 100%; position: relative; background: black">
    <div class="Group12" style="width: 449px; height: 780px; left: 496px; top: 177px; position: absolute">
        <div class="Rectangle11"
            style="width: 449px; height: 669px; left: 0px; top: 0px; position: absolute; background: black; box-shadow: 25px 25px 25px; border-radius: 20px; border: 5px white solid; filter: blur(25px)">
        </div>
        <div class="Rectangle12"
            style="width: 449px; height: 669px; left: 0px; top: 0px; position: absolute; background: black; border-radius: 20px; border: 7px rgba(255, 255, 255, 0.60) solid">
        </div>
        <div class="Rectangle13"
            style="width: 449px; height: 669px; left: 0px; top: 0px; position: absolute; background: black; box-shadow: 25px 25px 25px; border-radius: 20px; border: 5px white solid; filter: blur(25px)">
        </div>
        <div class="Rectangle14"
            style="width: 449px; height: 669px; left: 0px; top: 0px; position: absolute; background: black; box-shadow: 25px 25px 25px; border-radius: 20px; border: 5px white solid; filter: blur(25px)">
        </div>
        <img class="Download191" style="width: 449px; height: 669px; left: 0px; top: 0px; position: absolute"
            src="assets/images/bgsign.png" />
    </div>
    <div class="SignIn"
        style="width: 103px; height: 33px; left: 543px; top: 272px; position: absolute; color: rgba(255, 255, 255, 0.60); font-size: 30px; font-family: Inder; font-weight: 400; word-wrap: break-word">
        <a href="signin.php" style="text-decoration: none; color: rgba(255, 255, 255, 0.60);">Sign In</a>
    </div>
    <div class="SignUp"
        style="width: 132px; height: 33px; left: 680px; top: 275px; position: absolute; color: white; font-size: 30px; font-family: Inder; font-weight: 400; word-wrap: break-word">
        <a href="signup.php" style="text-decoration: none; color: white;">Sign Up</a>
    </div>

    <div class="FirstName"
        style="width: 110px; height: 33px; left: 543px; top: 368px; position: absolute; color: rgba(255, 255, 255, 0.60); font-size: 20px; font-family: Inder; font-weight: 400; word-wrap: break-word">
        First Name</div>
    <div class="LastName"
        style="width: 110px; height: 33px; left: 730px; top: 368px; position: absolute; color: rgba(255, 255, 255, 0.60); font-size: 20px; font-family: Inder; font-weight: 400; word-wrap: break-word">
        Last Name</div>
        
        <input type="text"  name="first_name" class="FirstName"
        style="width: 160px; height: 33px; left: 543px; top: 400px; position: absolute; font-size: 25px;">
    
        <input type="text" name="last_name" class="LastName"
        style="width: 160px; height: 33px; left: 730px; top: 400px; position: absolute; font-size: 25px;">

        <input type="text" name="username" class="Username"
        style="width: 210px; height: 33px; left: 540px; top: 470px; position: absolute; font-size: 25px;">

        <input type="password" name="password" class="Password"
        style="width: 210px; height: 33px; left: 540px; top: 540px; position: absolute; font-size: 25px;">
        
        <input type="password" name="password" class="ConfirmPassword"
        style="width: 210px; height: 33px; left: 540px; top: 610px; position: absolute; font-size: 25px;">

    <div class="Line8"
        style="width: 115px; height: 0px; left: 678px; top: 318.50px; position: absolute; border: 3px white solid">
    </div>
    <div class="Line13"
        style="width: 157px; height: 0px; left: 543px; top: 437px; position: absolute; border: 3px rgba(255, 255, 255, 0.40) solid">
    </div>
    <div class="Line12"
        style="width: 163px; height: 0px; left: 730px; top: 437px; position: absolute; border: 3px rgba(255, 255, 255, 0.40) solid">
    </div>
    <div class="ConfirmPassword"
        style="width: 175px; height: 33px; left: 543px; top: 582px; position: absolute; color: rgba(255, 255, 255, 0.60); font-size: 20px; font-family: Inder; font-weight: 400; word-wrap: break-word">
        Confirm Password</div>

    <input type="checkbox" id="agreeCheckbox" class="Checkbox" style="top: 658px; left: 543px;">
    <label for="agreeCheckbox" class="CheckboxLabel" style="top: 660px; left: 563px;"></label>

    <div class="IAgreeToThe"
        style="width: 103px; height: 20px; left: 576px; top: 660px; position: absolute; color: rgba(255, 255, 255, 0.60); font-size: 15px; font-family: Inder; font-weight: 400; word-wrap: break-word">
        I agree to the </div>
    <div class="TermsOfUse"
        style="width: 103px; height: 20px; left: 659px; top: 660px; position: absolute; color: white; font-size: 15px; font-family: Inder; font-weight: 400; word-wrap: break-word">
        terms of use</div>
    <div class="Line14"
        style="width: 350px; height: 0px; left: 543px; top: 643px; position: absolute; border: 3px rgba(255, 255, 255, 0.40) solid">
    </div>
    <div class="Password"
        style="width: 175px; height: 33px; left: 543px; top: 513px; position: absolute; color: rgba(255, 255, 255, 0.60); font-size: 20px; font-family: Inder; font-weight: 400; word-wrap: break-word">
        Password</div>
    <div class="Line16"
        style="width: 350px; height: 0px; left: 543px; top: 574px; position: absolute; border: 3px rgba(255, 255, 255, 0.40) solid">
    </div>
    <div class="Username"
        style="width: 175px; height: 33px; left: 543px; top: 445px; position: absolute; color: rgba(255, 255, 255, 0.60); font-size: 20px; font-family: Inder; font-weight: 400; word-wrap: break-word">
        Username</div>
    <div class="Line15"
        style="width: 350px; height: 0px; left: 543px; top: 506px; position: absolute; border: 3px rgba(255, 255, 255, 0.40) solid">
    </div>
    
    <div class="Group34" style="width: 350px; height: 57px; left: 543px; top: 712px; position: absolute">
        <div class="Rectangle15" style="width: 350px; height: 57px; left: 0px; top: 0px; position: absolute; background: #676464; border-radius: 10px"></div>
    
        <div class="SignUp" onclick="validateAndShowModal()" style="width: 110px; height: 33px; left: 122px; top: 9px; position: absolute; color: white; font-size: 30px; font-family: Inder; font-weight: 400; word-wrap: break-word">
        <input type="submit" name="input" value='Sign Up'/>  
        </div>
        
        <!-- Success Modal -->
        <div id="successModal" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; border: 2px solid #333; border-radius: 10px; text-align: center;">
            <p>Register Berhasil!</p>
            <button onclick="redirectToSignIn()">OK</button>
        </div>
        
    </div>
</form>
        <script>
            function showSuccessModal() {
                var modal = document.getElementById('successModal');
                modal.style.display = 'block';
            }

            function redirectToSignIn() {
                window.location.href = 'signin.php';
            }

            function validateAndShowModal() {
                    // Add validation logic here
                    var firstName = document.querySelector('.FirstName').value;
                    var lastName = document.querySelector('.LastName').value;
                    var username = document.querySelector('.Username').value;
                    var password = document.querySelector('.Password').value;
                    var confirmPassword = document.querySelector('.ConfirmPassword').value;
                    var agreeCheckbox = document.getElementById('agreeCheckbox').checked;

                    // Example: Check if required fields are not empty
                    if (firstName && lastName && username && password && confirmPassword && agreeCheckbox) {
                        // Example: Check if passwords match
                        if (password !== confirmPassword) {
                            alert("Password dan Confirm Password Tidak Sama");
                            return;
                        }

                        // All validations passed, show success modal
                        showSuccessModal();

                        // Tambahan: Sembunyikan modal berhasil setelah beberapa detik
                        var successModal = document.getElementById('successModal');
                        successModal.style.display = 'block';

                        setTimeout(function () {
                            successModal.style.display = 'none';
                        }, 3000); // 3000 milidetik (3 detik)

                    } else {
                        var failureModal = document.getElementById('failureModal');
                        failureModal.style.display = 'block';

                        // Tambahan: Sembunyikan modal gagal setelah beberapa detik
                        setTimeout(function () {
                            failureModal.style.display = 'none';
                        }, 3000); // 3000 milidetik (3 detik)
                    }
                }
        </script>
</body>
</html>