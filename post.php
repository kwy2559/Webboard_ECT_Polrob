<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webboard KaKKaK</title>
    <h1 style="text-align: center;">Webboard KaKKaK</h1>
    <hr>
</head>
<body>
    
    <div  style="text-align: center;">ต้องการดูกระทู้หมายเลข <?php echo $_GET['id']; ?>
    <br>
    <?php
            $id = $_GET['id'];
            if($id%2==0){
                
                echo "เป็นกระทู้หมายเลขคู่";
            }
            else{
               
                echo "เป็นกระทู้หมายเลขคี่";
            }
        ?>
        <table style="border: 2px solid black; width: 40%;" align="center">
        
        <tr style="background-color: #6CD2FE"><td>แสดงความคิดเห็น</td></tr>
        <tr><td align="center"><textarea cols="50" rows="10"></textarea></td><td>
        <tr><td align="center" colspan="2"><input type="submit"value="ส่งข้อความ"></td></tr>
        </table>
    </div><br>
    <div align="center"><a href="index.php">กลับไปยังหน้าหลัก</a></div>
</body>
</html>