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
        <form action="login.php" method="POST">
            <div class="login">
                <label for="username">ชื่อผู้ใช้</label>
                <input type="text" name="username" id="">
                <label for="password">รหัสผ่าน</label>
                <input type="password" name="password" id="">
                <button type="submit" name="login" class="btn">ลงชื่อเข้าใช้</button>
            </div>
            <div class="regis">
                <p>ยังไม่ได้เป็นสมาชิก : <a href="register.php">สมัครสมาชิก</a></p>
            </div>
        </form>
    </div>
    <div class="register">
        <h2>ลงทะเบียน</h2>
    </div>
    <form action="insert_admin.php" method="POST" class="content">
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label for="password_1">Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label for="password_2">Confirm Password</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <button type="submit" name="reg_user" class="btn">ลงทะเบียน</button>
        </div>
    </form>
    
</body>
</html>