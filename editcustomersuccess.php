<!DOCTYPE html>
<html long="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>แก้ไขข้อมูลลูกค้าสำเร็จ</title>

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

$sql_update="UPDATE Customer SET CustomerId='$_GET[CustomerId]',CustomerName='$_GET[CustomerName]',Location='$_GET[Location]',
Email='$_GET[Email]',DataOfBirth='$_GET[DataOfBirth]',CDate='$_GET[CDate]',ModDate='$_GET[ModDate]',Postcode='$_GET[Postcode]'
 WHERE CustomerId='$_GET[CustomerId]' ";

$result= mysqli_query( $objConnect, $sql_update);

if(!$result) {
echo "Can't Update!!!<br>";
} else {
echo "Success <br>";
echo "<br>";
echo "<a href='selectCus.php'>กลับสู่หน้าหลัก</a>";
}
?>
</div>
</html>