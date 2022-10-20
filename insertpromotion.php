<!DOCTYPE html>
<html long="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>เพิ่มโปรโมชั่น</title>

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
    <h2 class="h3">เพิ่มโปรโมชั่น</h2>
    <img class="img" src="promotion.jpg" alt="">

<form action="insertpromotionsucces.php" method="GET">

<p>
<label for="PromotionId">รหัสโปรโมชั่น</label>
<input type="text" name="PromotionId" id="PromotionId" value=""/>
</p>
<p>
<label for="Promotionname">ชื่อโปรโมชั่น</label>
<input type="text" name="Promotionname" id="Promotionname" value=""/>
</p>
<p>
<label for="Cdate">C-date</label>
<input type="date" name="Cdate" id="Cdate" value="" />
</p>
<p>
<label for="Moddate">MoD-Date</label>
<input type="date" name="Moddate" id="Moddate" value="" />
</p>


<p>
    <input type="submit" value="บันทึก">
</p>
</form>
<a class="h3" href="promotion.php">ย้อนกลับ</a>


</html>