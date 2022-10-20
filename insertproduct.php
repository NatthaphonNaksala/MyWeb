<!DOCTYPE html>
<html long="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>เพิ่มสินค้า</title>

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
     
    </style>
    <div class="position" >
    <h2 class="h3">เพิ่มสินค้า</h2>
    <img src="product.jpg" alt="" width="690px" hight="400px">

<form action="insertproductsucces.php" method="GET">
<p>
<label for="ProductID">รหัสสินค้า</label>
<input type="text" name="ProductID" id="ProductID" value=""/>
</p>
<p>
<label for="ProductName">ชื่อสินค้า</label>
<input type="text" name="ProductName" id="ProductName" value=""/>
</p>
<p>
<label for="ProductPrice">ราคาสินค้า</label>
<input type="text" name="ProductPrice" id="ProductPrice" value="" />
</p>
<p>
<label for="CDate">C-Date</label>
<input type="date" name="CDate" id="CDate" value="" />
</p>
<p>
<label for="ModDate">Mod-Date</label>
<input type="date" name="ModDate" id="ModDate" value="" />
</p>
<p>
<label for="Deleted">Deleted</label>
<input type="text" name="Deleted" id="Deleted" value="y" />
</p>
<p>
    <input type="submit" value="บันทึก">
</p>

</form>
<a class="h3" href="product.php">ย้อนกลับ</a>
    </div>

</html>