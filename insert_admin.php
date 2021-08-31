<?php
    include('connect.php');

    $username = $_POST['username'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];
    $status =  "Administrator";

    if(empty($username)){
        echo '<script language="javascript">';
        echo 'alert("กรุณาใส่ Username")';
        echo '</script>';
    }
    if(empty($password_1) or empty($password_2)){
        echo '<script language="javascript">';
        echo 'alert("กรุณาใส่ Password")';
        echo '</script>';
    }
    if($password_1 !== $password_2){
        echo '<script language="javascript">';
        echo 'alert("กรุณาใส่ Password ให้ตรงกัน")';
        echo '</script>';
    }

    $sql = "INSERT INTO admin(username,pass,stat) VALUES ('$username','$password_1','$status')";
    $result = mysqli_query($connect,$sql); 
    if($result){
        echo '<script language="javascript">';
        echo 'alert("บันทึกข้อมูลสำเร็จ")';
        echo '</script>';
        
    }else{
        echo mysqli_error($connect);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
    <a href="index.php"><h2>กลับหน้าแรก</h2></a>
    </div>
</body>
</html>