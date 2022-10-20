<!DOCTYPE html>
<html long="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>แก้ไขโปรโมชั่นสำเร็จ</title>

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
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
$db = mysqli_select_db($objConnect, "DBProduct");
mysqli_query($objConnect, "SET NAMES utf8");

$sql_update="UPDATE Promotion SET PromotionId='$_GET[PromotionId]',Promotionname='$_GET[Promotionname]',Cdate='$_GET[Cdate]',
Moddate='$_GET[Moddate]' WHERE PromotionId='$_GET[PromotionId]' ";

$result= mysqli_query( $objConnect, $sql_update);

if(!$result) {
echo "Can't Update!!!<br>";
} else {
echo "Success <br>";
echo "<br>";
echo "<a href='promotion.php'>กลับสู่หน้าหลัก</a>";
}
?>
</div>
</html>