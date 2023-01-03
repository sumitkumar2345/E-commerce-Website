<?php
    session_start();
    header('Location:login-flipkart.html');
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
        echo "Duplicate Data";
    }
    else{
        $quer="insert into userdata(username, password) values('$name','$pass')";
        mysql_query($con, $querr);
    }
?>