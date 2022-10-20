<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">     
            <link rel="stylesheet" href="style-table.css">
            <link rel="stylesheet" href="style.css">
            <title>วิธีชำระเงิน</title>
            <style>
                .postion{
                    background-color: skyblue;
                    border: solid 5px powderblue;
                    margin-top: 3%;
                    margin-left: 25%;
                    margin-right: 25%;
                    padding: 15px;
                }
                .h2{
                    margin-left: 46%;
                }
                .back{
                    margin-left: 49%;

                }
                .form{
                    margin-left: 5%;
                    padding: 3%;
                }
                .img{
                    width: 500px;
                    height: 300px;
                    margin-left: 25%;

                }
               
            </style>
                </head>    
        <body class="postion"> 
        <h2 class="h2" >ราคาสินค้า</h2>
        <img class="img"  src="cost.jpg" alt="">
        <br><br>
<?php
    $price = $_GET["price"];
    $unit = $_GET["unit"];

    $total = $price*$unit;
    $vat =$total*0.07;
    $net =$total*$vat;


    echo "ราคาสินค้าต่อชิ้น : $price <br>";
    echo "จำนวนชิ้นที่ซื้อ  : $unit <br>";
    echo "ราคารวม      : $total <br>";
    echo "ภาษีมูลค่าเพิ่ม  : $vat <br>";
    echo "ราคาสุทธิ      : $net <br>";
?>
      <a class="back" href="price.html">ย้อนกลับ</a>

</body> 
</html>