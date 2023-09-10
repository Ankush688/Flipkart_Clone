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
    $name = $_POST['email'];
    $pass = $_POST['password'];
    
    $quer= "select * from `user-data` where username = '$name' && password = '$pass'";
    $result = mysqli_query($con,$quer);
    $num = mysqli_num_rows($result);
    if($num==1){
        echo "Duplicate Data";
    }
    else{
        $querr = "insert into `user-data`(username,password) values('$name','$pass')";
        mysqli_query($con,$querr);
    }
    
    header('location:login-flipkart.php');
?>