<?php
session_start();
    $con= mysqli_connect('localhost','root');
    if($con){
        echo "Connection Successfully";
    }
    else
    {
        echo "No Connection";
    }
    mysqli_select_db($con,'flipkart-clone');
    $name = $_POST['username'];
    $pass = $_POST['password'];
    
    $quer= "select * from `user-data` where username = '$name' AND password = '$pass'";
    $result = mysqli_query($con,$quer);
    $num = mysqli_num_rows($result);
    if($num==1){
        header("location: SIS.php");
    }
    else{
        echo '<script>alert("Enter Your Credentials Carefully")</script>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Flipkart</title>
    <lnk rel="icon" href="images/flipkart_icon.png" type="image/x-icon">
    <lnk rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baD1411NQApFmC26EwAOH8WgZ15MYYxFfc+NcPb1dKGj75k" crossorigin="anonymous">
    <link rel="stylesheet" href="login-style.css">
    <script src="login.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>
    <form class="containter" action="" method="POST" onsubmit="return validateForm()">
        <div class="box">
            <div class="row">
                <div class="col-sm-5 col-xs-1 box1">
                    <div class="inline-text">
                        <p><h1>Login</h1>
                        Get Acess to your orders, 
                            Wishlist and 
                            Recommendations
                        </p>
                    </div>
                </div>
                <div class="col-sm-5 col-xs-1 box2">
                    <div class="user-id user-data">
                        <input type="email" name="username" id="email" required>
                        <label>Enter email/Mobile Number</label>
                    </div>
                    
                    <div class="user-id user-data">
                        <input type="password" name="password" id="password" required>
                        <label>Enter Password</label>
                    </div>
                    <div class="user-id">
                        <p>By continuing, you agree to Flipkart's term of use and Privacy Policy.</p>
                    </div>
                    <span><a href="#">Forget ?</a></span>
                    <div class="user-id button">
                        <input type="submit" name="" id="" value="login" onclick="">
                    </div>
                    <div class="user-id">
                        <p>OR</p>
                    </div>
                    <div class="user-id button">
                        <input type="reset" name="" id="" value="Request OTP">
                    </div>
                    <div class="user-id">
                        <p class="footer"><a href="#">New to Flipkart? create an account</a></p>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script src="validate.js"></script>
</body>
</html>
