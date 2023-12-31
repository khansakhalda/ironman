<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background: black; /* Set the background color to black */
        }

        /* Global Styles */
        html,
        body {
            width: 100%;
            height: 100%;
        }

        /* Text Styles */
        .SignIn,
        .SignUp,
        .Hamasif12345,
        .Password,
        .Username {
            font-size: 30px;
            font-family: Inder;
            font-weight: 400;
            word-wrap: break-word;
        }

        .SignUp,
        .Username,
        .Password {
            color: rgba(255, 255, 255, 0.60);
        }

        .Hamasif12345,
        .Password {
            color: rgba(255, 255, 255, 0.80);
            font-size: 25px;
        }

        /* Colors */
        .SignIn,
        .Line8,
        .Password,
        .SignIn-Button {
            color: white;
        }

        .Line8,
        .Line9,
        .Line10 {
            border: 3px white solid;
        }

        .SignIn-Button {
            background: #676464;
            border-radius: 10px;
        }

        /* Layout */
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

        /* Add other styles as needed for Rectangle11, Rectangle12, Rectangle13, Rectangle14, and Download191 */
.Rectangle11,
.Rectangle12,
.Rectangle13,
.Rectangle14 {
    width: 449px;
    height: 669px;
    left: 0;
    top: 0;
    position: absolute;
    background: black;
    border-radius: 20px;
}

.Rectangle11 {
    box-shadow: 25px 25px 25px;
    border: 5px white solid;
    filter: blur(25px);
}

.Rectangle12 {
    border: 7px rgba(255, 255, 255, 0.60) solid;
}

.Rectangle13,
.Rectangle14 {
    box-shadow: 25px 25px 25px;
    border: 5px white solid;
    filter: blur(25px);
}

img.Download191 {
    width: 449px;
    height: 669px;
    left: 0;
    top: 0;
    position: absolute;
}

input {
            width: 100%;
            height: 33px;
            padding: 5px;
            margin-bottom: 15px;
            border: 1px solid transparent; /* Set border color to transparent */
            border-radius: 5px;
            box-sizing: border-box;
            color: #fff;
            background-color: rgba(0, 0, 0, 0.5);
        }
        
        
    </style>

<script>
    // Function to handle the Sign In button click
    function signIn() {
        // Retrieve the username and password values
        var username = document.querySelector('.Hamasif12345').value;
        var password = document.querySelector('.Password').value;

        // Example: Check if both username and password are not empty
        if (username.trim() !== '' && password.trim() !== '') {
            console.log('Username:', username);
            console.log('Password:', password);
            // Add your authentication logic here
            // You can redirect to another page or perform additional actions
        } else {
            console.log('Please enter both username and password');
        }
    }
</script>
</head>

<body>
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
            src="https://s3-alpha-sig.figma.com/img/ae3f/487d/f883e129a3ebc0977d6ba5f6af05fd05?Expires=1701043200&Signature=CUiNWIFylxvIs4VemRhXE7-WYmPX1hCmYBsvjF7R4WLIFCoZkqdGYqmS3bh1hEJki3oz5egxbSx1yru-aVDKKAH0vS~t98FTYHz6-1cmf4-KPnV6PlGySnAL~ao1SRfH~19~OQ6SHZnEXoSNYPTp0HpwH-n6W8e02-XXfYJMvmTDXxTuCexV4E32uKIIykH2SgOM2Y2CsDt91psg2hLRdGyuXTDH1-4kFks2rSve3Xk2RJRs9lhGPXuhv1Q2gIFQ01kot~is0vIfkpGtm7EDddGuJOgbcR5InhNbvHRdUuJiGYxKuEc1o2~12rgcTkiMmXR-McZm8Klxv2cQ-gcsPQ__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" />
    </div>
    <div class="SignIn"
        style="width: 103px; height: 33px; left: 543px; top: 272px; position: absolute; color: rgba(255, 255, 255, 0.60); font-size: 30px; font-family: Inder; font-weight: 400; word-wrap: break-word">
        <a href="signin.html" style="text-decoration: none; color: rgba(255, 255, 255, 0.60);">Sign In</a>
    </div>
    <div class="SignUp"
        style="width: 132px; height: 33px; left: 680px; top: 275px; position: absolute; color: white; font-size: 30px; font-family: Inder; font-weight: 400; word-wrap: break-word">
        <a href="signup.html" style="text-decoration: none; color: white;">Sign Up</a>
    </div>
    <div class="Hamasif12345"
        style="width: 210px; height: 33px; left: 543px; top: 431px; position: absolute; color: rgba(255, 255, 255, 0.80); font-size: 25px; font-family: Inder; font-weight: 400; word-wrap: break-word">
        </div>
    <div
        style="width: 151px; height: 33px; left: 543px; top: 565px; position: absolute; color: rgba(255, 255, 255, 0.80); font-size: 25px; font-family: Inder; font-weight: 400; word-wrap: break-word">
        </div>
    <div class="Username"
        style="width: 110px; height: 33px; left: 543px; top: 398px; position: absolute; color: rgba(255, 255, 255, 0.60); font-size: 20px; font-family: Inder; font-weight: 400; word-wrap: break-word">
        Username</div>
        <input type="text" class="Hamasif12345" 
            style="width: 210px; height: 33px; left: 543px; top: 431px; position: absolute; font-size: 25px;">
        <input type="password" class="Password" 
            style="width: 210px; height: 33px; left: 543px; top: 565px; position: absolute; font-size: 25px;">
    <div class="Line8"
        style="width: 103px; height: 0px; left: 540px; top: 319px; position: absolute; border: 3px white solid"></div>
    <div class="Line9"
        style="width: 350px; height: 0px; left: 543px; top: 474px; position: absolute; border: 3px rgba(255, 255, 255, 0.40) solid">
    </div>
    <div class="Password"
        style="width: 110px; height: 33px; left: 543px; top: 532px; position: absolute; color: rgba(255, 255, 255, 0.60); font-size: 20px; font-family: Inder; font-weight: 400; word-wrap: break-word">
        Password</div>
    <div class="Line10"
        style="width: 350px; height: 0px; left: 543px; top: 608px; position: absolute; border: 3px rgba(255, 255, 255, 0.40) solid">
    </div>
    <div class="Rectangle15"
        style="width: 350px; height: 57px; left: 543px; top: 684px; position: absolute; background: #676464; border-radius: 10px">
    </div>
    <div class="SignIn" onclick="signIn()"
        style="width: 96px; height: 33px; left: 672px; top: 693px; position: absolute; color: white; font-size: 30px; font-family: Inder; font-weight: 400; word-wrap: break-word">
        <a href="daftarfilm.html" style="text-decoration: none; color: white;">Sign In</a>
    </div>
</div>
</body>

</html>
