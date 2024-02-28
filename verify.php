<?php
    session_start();
    if(isset($_SESSION['id'])){
        header("location:index.php");
        die();
    }
    $login=$_POST['login'];
    $pwd=$_POST['pwd'];
    $conn=new PDO("mysql:hos=localhost;dbname=webbord;charset=utf8","root","");
    $sql="SELECT * FROM user where login='$login' and password=sha1('$pwd')";
    $result=$conn->query($sql);
    if($result->rowCount()==1){
        $data=$result->fetch(PDO::FETCH_ASSOC);
        $_SESSION['username']=$data['login'];
        $_SESSION['role']=$data['role'];
        $_SESSION['user_id']=$data['id'];
        $_SESSION['id']=session_id();
        header("location:index.php");
        die();
    }else{
        $_SESSION['error']="error"; 
        header("location:login.php");
        die();
    }
    $conn=null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>
     
    
    <div style="text-align: center;">

   
    <?php
     $login =$_POST['login']; 
     $pwd = $_POST['pwd']; 
        if($login == "admin" && $pwd == "ad1234"){
            $_SESSION["username"]="admin";
            $_SESSION["role"]="a";
            $_SESSION["id"]=session_id();
            header("location:index.php");
            die();
           // echo "ยินดีต้อนรับคุณ ADMIN";
        }
        else if($login == "member" && $pwd == "mem1234"){
            $_SESSION["username"]="member";
            $_SESSION["role"]="m";
            $_SESSION["id"]=session_id();
            header("location:index.php");
            die();
           // echo "ยินดีต้อนรับคุณ MEMBER";
        }
        else{
            $_SESSION['error'] = 'error';
            header("location:login.php");
            die();
          //  echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
        }
       // echo "<a href=index.php><br>กลับไปยังหน้าหลัก</a>";
    ?>

   
</body>
</html>