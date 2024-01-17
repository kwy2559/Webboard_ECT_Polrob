<?php
    session_start();
    if(isset($_SESSION['id'])){
        header("location:index.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <title>Login</title>
    <h1 style="text-align: center;">สมัครสมาชิก</h1>
    <hr>
    <from>
        <table style="border: 2px solid black; width: 40%;" align="center">
            <tr><td colspan="2" style="background-color: #6CD2FE">กรอกข้อมูล</td></tr>
            <tr><td>ชื่อบัญชี : </td><td><input type="text"name="login" size="30" required></td></tr>
            <tr><td>รหัสผ่าน : </td><td><input type="password"name="pwd"size="30" required></td></tr>
            <tr><td>ชื่อ-นามสกุล : </td><td><input type="text"name="fname-lname" size="30" required></td></tr>
            <tr><td></td><td><input type="radio" name="gender" value="m">ชาย</td></tr><br>
            <tr><td>เพศ : </td><td><input type="radio" name="gender" value="w">หญิง</td></tr><br>
            <tr><td></td><td><input type="radio" name="gender" value="n">อื่นๆ</td></tr><br>
            <tr><td>อีเมล : </td><td><input type="email"name="email" size="30" required></td></tr>
            <tr><td align="center" colspan="2"><input type="submit"value="สมัครสมาชิก"></td></tr>
        </table>
    </from>
    <br>
    <div align="center"><a href="index.php">กลับไปหน้าหลัก</a></div>
</head>
<body>
    
</body>
</html>