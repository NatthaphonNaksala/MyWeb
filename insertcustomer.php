<!DOCTYPE html>
<html long="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>เพิ่มข้อมูลลูกค้า</title>

    <style>
        .position{
            background-color: skyblue;
            padding: 1%;
            margin-left: 32%;
            margin-right: 25%;
            margin-top: 5%;
            border: solid 5px powderblue;
        }
        .h3{
            margin-left: 40%;
        }    
        .back{
            margin-left: 48%;
        }
        .img{
            margin-left: 38%;
            width: 200px;
            height: 180px;
        }
    
    </style>
    <div class="position" >
    <h2 class="h3">เพิ่มข้อมูลลูกค้า</h2>
    <img class="img" src="customer.jpg" alt="" >


<form action="insertcustomersucces.php" method="GET">
<p>
<label for="CustomerId">รหัสลูกค้า</label>
<input type="text" name="CustomerId" id="CustomerId" value=""/>
</p>
<p>
<label for="CustomerName">ชื่อลูกค้า</label>
<input type="text" name="CustomerName" id="CustomerName" value="" />
</p>
<p>
<label for="Location">ที่อยู่</label>
<input type="text" name="Location" id="Location" value="" />
</p>
<p>
<label for="Email">Email</label>
<input type="text" name="Email" id="Email" value="" />
</p>
<p>
<label for="DataOfBirth">วันเดือนปีเกิด</label>
<input type="date" name="DataOfBirth" id="DataOfBirth" value="y" />
</p>
<p>
<label for="CDate">C-Date</label>
<input type="date" name="CDate" id="CDate" value="" />
</p>
<p>
<label for="ModDate">Mod-Date</label>
<input type="date" name="ModDate" id="ModDate" value="" />
</p>
<label for="Postcode">รหัสไปรษณีย์</label>
<input type="text" name="Postcode" id="Postcode" value="" />
</p>
<p>
    <input type="submit"  value="บันทึก">
</p>
</form>
<a class="back" href="selectCus.php">ย้อนกลับ</a>

</div>
</html>