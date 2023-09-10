<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flipkart-Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="signup-style.css">
    <script src="validate.js"></script>
</head>
<body>
    <form class="container" action="register.php" method="POST" onsubmit="return validateForm()">
        <div class="box">
            <div class="row">
                <div class="col-sm-5 col-xs-1 box1">
                    <div class="inline-text">
                        <h1>Looks like you're <br>
                            new here!</h1>
                        <p>
                            Sign up with your <br>
                            mobile number to get started
                        </p>
                    </div>
                </div>
                <div class="col-sm-5 col-xs-1 box2">
                    <div class="user-id user-data">
                        <input type="email" name="email" id="email" required="">
                        <label>Enter Email</label>
                    </div>
                    <div class="user-id user-data">
                        <input type="password" name="password" id="password" required="">
                        <label>Enter password</label>
                    </div>
                    <div class="user-id">
                        <p>By continuing, you agree to Flipkart's term of use and Privacy Policy.</p>
                    </div>
                    <span><a href="#">Forget ?</a></span>
                    <div class="user-id button">
                        <input type="submit" name="" id="" value="Sign-up" onclick="validate()">
                    </div>
                    <div class="user-id button">
                        <input type="reset" name="" id="" value="Existing User? Log In">
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>