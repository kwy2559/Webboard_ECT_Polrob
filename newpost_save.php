<?php 
session_start();
$top = $_POST['topic'];
$con = $_POST['comment'];
$cat_id = $_POST['category'];
$user_id = $_SESSION['user_id'];

$conn=new PDO("mysql:hos=localhost;dbname=webbord;charset=utf8","root","");
$sql="INSERT INTO post (title, content, post_data, cat_id, user_id)
VALUE ('$top','$con',NOW(),'$cat_id','$user_id')";
$conn->exec($sql);
$conn=null;
header("location:index.php");
die();
?>