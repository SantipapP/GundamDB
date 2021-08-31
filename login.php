<?php
    session_start();
    include('connect.php');

    $username = $_POST['username'];
    $password = $_POST['password'];



    $sql = "SELECT * FROM admin WHERE username = '$username' AND pass = '$password' ";
    $result =mysqli_query($connect,$sql);

    if (mysqli_num_rows($result) == 1){
        $_SESSION['username'] = $username;
        header("location: main.php");
    }else{
        echo "รหัสผิดไอ้โง่";
    }

?>