<!DOCTYPE html>
<html long="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>เพิ่มข้อมูลลูกค้าสำเร็จ</title>

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

$sql_insert ="INSERT INTO Customer(CustomerID, CustomerName, Location,Email,DataOfBirth,CDate,ModDate,Postcode) 
VALUES ('$_GET[CustomerId]','$_GET[CustomerName]','$_GET[Location]','$_GET[Email]','$_GET[DataOfBirth]','$_GET[CDate]','$_GET[ModDate]','$_GET[Postcode]')";

$result=mysqli_query($objConnect, $sql_insert);

if(!$result) {
    echo "Can't Insert!!!<br>";
    echo "<br>";
    echo "<a href='selectCus.php'>"."กลับสู่หน้าหลัก"."</a>";
    } else {
    echo "insertion data success <br>";
    echo "<br>";
    echo "<a href='selectCus.php'>"."กลับสู่หน้าหลัก"."</a>";
    }
?>
</div>
</html>