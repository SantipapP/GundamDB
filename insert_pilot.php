<?php
    require('connect.php');

    $pname = $_POST["p_name"];
    $birthdate = implode("-",$_POST["date"]);
    $gender = $_POST["gender"];
    $species = $_POST["species"];
    $geneticType = $_POST["geneticType"];
    $occupation = $_POST["occuption"];
    $series = $_POST["p_series"];


    // echo $pname;
    // echo $birthdate;
    // echo $gender;
    // echo $species;
    // echo $geneticType;
    // echo $occupation;

    $sql = "INSERT INTO tbl_pilot(p_name,p_birth,p_gender,p_species,p_geneticType,p_occupation,p_series) VALUE ('$pname','$birthdate','$gender','$species','$geneticType','$occupation','$series')";

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
    <a href="main.php"><h2>กลับหน้าหลัก</h2></a>
    </div>
</body>
</html>