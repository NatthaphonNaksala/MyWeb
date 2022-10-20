<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
mysqli_select_db( $objConnect, "DBProduct");
mysqli_query($objConnect, "SET NAMES utf8");

$sql = "SELECT * FROM Invoice WHERE Iid ='$_GET[Iid]'";
$result =mysqli_query($objConnect ,$sql);
$data = mysqli_fetch_array($result, MYSQLI_BOTH)
?>  

<form method="GET" action="editsuccess.php">
<p>
<label for="Iid">รหัสใบเสร็จที่จะแก้ไข</label>
<input type="text" name="Iid" id="Iid" value="<?=$data['Iid'];?>"/>
</p>
<p>
<label for="CustomerId">รหัสลูกค้าที่ต้องการแก้ไข</label>
<input type="text" name="CustomerId" id="CustomerId" value="<?=$data['CustomerId'];?>"/>
</p>
<p>
<label for="CartId">ตะกร้าสินค้าที่จะแก้ไข</label>
<input type="text" name="CartId" id="CartId" value="<?=$data['CartId'];?>" />
</p>

<p>
    <input type="submit" value="แก้ไข" >
</p>
</form>

</p>