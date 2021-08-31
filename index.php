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
                <input type="text" name="username" id="username">
                <label for="password">รหัสผ่าน</label>
                <input type="password" name="password" id="password">
                <button type="submit" name="login" class="btn">ลงชื่อเข้าใช้</button>
            </div>
            <div class="regis">
                <p>ยังไม่ได้เป็นสมาชิกนะ : <a href="register.php">สมัครสมาชิก</a></p>
            </div>
        </form>
    </div>
</body>
</html>