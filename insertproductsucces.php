<!DOCTYPE html>
<html long="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>เพิ่มข้อมูลสินค้าสำเร็จ</title>

    <style>
        .position{
            background-color: skyblue;
            padding: 2%;
            margin-left: 35%;
            margin-right: 25%;
            margin-top: 10%;
            border: solid 5px powderblue;
        }    
    
    </style>
    <div class="position" >

<?php
$objConnect=mysqli_connect("localhost","root","") or die("can't connect to database");
mysqli_select_db($objConnect,"DBProduct");
mysqli_query($objConnect ,"SET NAMES utf8");

$sql_insert ="INSERT INTO Product(ProductID,ProductName,ProductPrice,CDate,ModDate,Deleted) 
VALUES ('$_GET[ProductID]','$_GET[ProductName]','$_GET[ProductPrice]','$_GET[CDate]','$_GET[ModDate]','$_GET[Deleted]')";

$result=mysqli_query($objConnect, $sql_insert);

if(!$result) {
echo "Can't Insert!!!<br>";
echo "<br>";
echo "<a href='product.php>"."กลับสู่หน้าหลัก"."</a>";
} else {
echo "insertion data success <br>";
echo "<br>";
echo "<a href ='product.php' >"."กลับสู่หน้าหลัก"."</a>";
}
?>
</div>
</html>