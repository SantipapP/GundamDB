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
    <div class="register">
        <h2>ลงทะเบียน</h2>
    </div>
    <form action="insert_pilot.php" method="POST" class="content">
        <div class="input-group">
            <label for="p_name">ชื่อ - นามสกุล</label>
            <input type="text" name="p_name">
        </div>
        <div class="input_group">
            <label for="">วัน / เดือน / ปี เกิด<br></label>
            <select name="date[]">
                <option value="0">วัน
                <option value="1">1                 
                <option value="2">2
                <option value="3">3
                <option value="4">4
                <option value="5">5                 
                <option value="6">6
                <option value="7">7
                <option value="8">8
                <option value="9">9                 
                <option value="10">10
                <option value="11">11
                <option value="12">12
                <option value="13">13                
                <option value="14">14
                <option value="15">15
                <option value="16">16
                <option value="17">17                 
                <option value="18">18
                <option value="19">19
                <option value="20">20
                <option value="21">21                
                <option value="22">22
                <option value="23">23
                <option value="24">24
                <option value="25">25                 
                <option value="26">26
                <option value="27">27
                <option value="28">28
                <option value="29">29                 
                <option value="30">30
                <option value="31">31
            </select>
            <select name="date[]">
                <option value="0">เดือน
                <option value="JAN">JAN                 
                <option value="FEB">FEB
                <option value="MAR">MAR
                <option value="APR">APR
                <option value="MAY">MAY                 
                <option value="JUN">JUN
                <option value="JUL">JUL
                <option value="AUG">AUG
                <option value="SEP">SEP               
                <option value="OCT">OCT
                <option value="NOV">NOV
                <option value="DEC">DEC
            </select>
            <select name="date[]">
                <option value="0">ปี
                <option value="0001">0001
                <option value="0002">0002
                <option value="0003">0003
                <option value="0004">0004
                <option value="0005">0005
                <option value="0006">0006
                <option value="0007">0007
                <option value="0008">0008
                <option value="0009">0009
                <option value="0010">0010
                <option value="0011">0011
                <option value="0012">0012
                <option value="0013">0013
                <option value="0014">0014
                <option value="0015">0015
                <option value="0016">0016
                <option value="0017">0017
                <option value="0018">0018
                <option value="0019">0019
                <option value="0020">0020
                <option value="0021">0021
                <option value="0022">0022
                <option value="0023">0023
                <option value="0024">0024
                <option value="0025">0025
                <option value="0026">0026
                <option value="0027">0027
                <option value="0028">0028
                <option value="0029">0029
                <option value="0030">0030
                <option value="0031">0031
                <option value="0032">0032
                <option value="0033">0033
                <option value="0034">0034
                <option value="0035">0035
                <option value="0036">0036
                <option value="0037">0037
                <option value="0038">0038
                <option value="0039">0039
                <option value="0040">0040
                <option value="0041">0041
                <option value="0042">0042
                <option value="0043">0043
                <option value="0044">0044
                <option value="0045">0045
                <option value="0046">0046
                <option value="0047">0047
                <option value="0048">0048
                <option value="0049">0049
                <option value="0050">0050
                <option value="0051">0051
                <option value="0052">0052
                <option value="0053">0053
                <option value="0054">0054
                <option value="0055">0055
                <option value="0056">0056
                <option value="0057">0057
                <option value="0058">0058
                <option value="0059">0059
                <option value="0060">0060
                <option value="0061">0061
                <option value="0062">0062
                <option value="0063">0063
                <option value="0064">0064
                <option value="0065">0065
                <option value="0066">0066
                <option value="0067">0067
                <option value="0068">0068
                <option value="0069">0069
                <option value="0070">0070
                <option value="0071">0071
                <option value="0072">0072
                <option value="0073">0073
                <option value="0074">0074
                <option value="0075">0075
                <option value="0076">0076
                <option value="0077">0077
                <option value="0078">0078
                <option value="0079">0079
                <option value="0080">0080
                <option value="0081">0081
                <option value="0082">0082
                <option value="0083">0083
                <option value="0084">0084
                <option value="0085">0085
                <option value="0086">0086
                <option value="0087">0087
                <option value="0088">0088
                <option value="0089">0089
                <option value="0090">0090
                <option value="0091">0091
                <option value="0092">0092
                <option value="0093">0093
                <option value="0094">0094
                <option value="0095">0095
                <option value="0096">0096
                <option value="0097">0097
                <option value="0098">0098
                <option value="0099">0099
                <option value="0100">0100
            </select>  
            <select name="date[]" id="">
                <option value="N/A">N/A</option>
                <option value="U.C.">Universal Century</option>
                <option value="C.E.">Cosmic Era</option>
            </select>
        </div>
        <div class="">
            <br>
            <label for="">เพศ</label>
            <input type="radio" name="gender" id="" value="Male">Male
            <input type="radio" name="gender" id="" value="Male">Female
        </div>
        <div class="input-group">
            <label for="">ประเภท</label>
            <select name="species" id="">
                <option value="N/A">N/A</option>
                <option value="Human">Human</option>
            </select>
        </div>
        <div class="input-group">
            <label for="">เผ่าพันธ์</label>
            <select name="geneticType" id="">
                <option value="N/A">N/A</option>
                <option value="New-Type">New-Type</option>
            </select>
        </div>
        <div class="input-group">
            <label for="">บทบาท</label>
            <select name="occuption" id="">
                <option value="N/A">N/A</option>
                <option value="MobileSuitPilot">Mobile Suit Pilot</option>
            </select>
        </div>
        <div class="input-group">
            <label for="">Series</label>
            <select name="p_series" id="">
                <option value="N/A">N/A</option>
                <option value="MobileSuitGundam">Mobile Suit Gundam</option>
            </select>
        </div>
        <div class="input-group">
            <button type="submit" name="reg_pilot" class="btn">บันทึกข้อมูล</button>
            <button type="reset" name="resetF" class="rebtn">ล้างข้อมูล</button>
        </div>
    </form>
</body>
</html>