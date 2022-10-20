<!DOCTYPE html>
<html long="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>แก้ไขสินค้า</title>

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
    <h2 class="h3">แก้ไขสินค้า</h2>
    <img class="img" src="product.jpg" alt="">

<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
mysqli_select_db( $objConnect, "DBProduct");
mysqli_query($objConnect, "SET NAMES utf8");

$sql = "SELECT * FROM Product WHERE ProductID ='$_GET[ProductID]'";
$result =mysqli_query($objConnect ,$sql);
$data = mysqli_fetch_array($result, MYSQLI_BOTH)

?>  

<form method="GET" action="editproductsuccess.php">
<p>
<label for="ProductID">รหัสสินค้า</label>
<input type="text" name="ProductID" id="ProductID" value="<?=$data['ProductID'];?>"/>
</p>
<p>
<label for="ProductName">ชื่อสินค้า</label>
<input type="text" name="ProductName" id="ProductName" value="<?=$data['ProductName'];?>"/>
</p>
<p>
<label for="ProductPrice">ราคาสินค้า</label>
<input type="text" name="ProductPrice" id="ProductPrice" value="<?=$data['ProductPrice'];?>" />
</p>
<p>
<label for="CDate">C-Date</label>
<input type="date" name="CDate" id="CDate" value="<?=$data['CDate'];?>" />
</p>
<p>
<label for="ModDate">Mod-Date</label>
<input type="date" name="ModDate" id="ModDate" value="<?=$data['ModDate'];?>" />
</p>
<p>
<label for="Deleted">Deleted</label>
<input type="text" name="Deleted" id="Deleted" value="<?=$data['Deleted'];?>" />
</p>

<p>
    <input type="submit" value="บันทึก" >
</p>
</form>
<a class="h3" href="product.php">ย้อนกลับ</a>
    
    </div>
</html>