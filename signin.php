<?php
    session_start();
    echo "Successfully Logged In";
    $con=mysqli_connect('localhost','root');
    if($con){
        echo "Connection Successfully";
    }
    else{
        echo "No Connection";
    }
    mysqli_select_db($con,'FLIPKART CLONE');
    $name=$_POST['email'];
    $pass=$_POST['password'];
    
    $quer-"select * from user-data where username-'$name' && password-'$pass'";
    $result=mysqli_query($con, $quer);
    $num=mysqli_num_rows($result);
    if($num==1)
    {
        $_SESSION['username']=$name;
        header('Location:index.html');
    }
    else{
        header('Location:login-flipkart.html');
    }
?>