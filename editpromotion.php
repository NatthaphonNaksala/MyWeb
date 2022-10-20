<!DOCTYPE html>
<html long="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>แก้ไขโปรโมชั่น</title>
    
    <style>
        .position{
            background-color: skyblue;
            padding: 2%;
            margin-left: 32%;
            margin-right: 25%;
            margin-top: 5%;
            border: solid 5px powderblue;
        }
        .h3{
            margin-left: 45%;
        }
        .img{
        width: 600px; height: 200px;
        padding: 1%;
        margin-left: 10%;
         }
     
    </style>
    <div class="position" >
    <h2 class="h3">แก้ไขโปรโมชั่น</h2>
    <img class="img" src="promotion.jpg" alt="">
<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
mysqli_select_db( $objConnect, "DBProduct");
mysqli_query($objConnect, "SET NAMES utf8");

$sql = "SELECT * FROM Promotion WHERE PromotionId ='$_GET[PromotionId]'";
$result =mysqli_query($objConnect ,$sql);
$data = mysqli_fetch_array($result, MYSQLI_BOTH)
?>  

<form method="GET" action="editpromotionsuccess.php">
<p>
<label for="PromotionId">รหัสโปรโมชั่น</label>
<input type="text" name="PromotionId" id="PromotionId" value="<?=$data['PromotionId'];?>"/>
</p>
<p>
<label for="Promotionname">ชื่อโปรโมชั่น</label>
<input type="text" name="Promotionname" id="Promotionname" value="<?=$data['Promotionname'];?>"/>
</p>
<p>
<label for="Cdate">C-date</label>
<input type="date" name="Cdate" id="Cdate" value="<?=$data['Cdate'];?>" />
</p>
<p>
<label for="Moddate">MoD-Date</label>
<input type="date" name="Moddate" id="Moddate" value="<?=$data['Moddate'];?>" />
</p>

<p>
    <input type="submit" value="บันทึก" >
</p>
</form>
<a class="h3" href="promotion.php">ย้อนกลับ</a>
</div>
</html>