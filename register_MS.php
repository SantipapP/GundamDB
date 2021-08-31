<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        header('location: index.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: index.php');
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
        <div class="login">
            ยินดีต้อนรับคุณ : <?php echo $_SESSION['username'];?>
            <p><a href="logout.php" style="color: red;">Logout</a></p>
        </div>
    </div>

</body>
</html>