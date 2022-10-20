<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">                
    <link rel="stylesheet" href="style-table.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">

    <title>ข้อมูลสินค้า</title> 
    <!-- <style>
        .postion{
            background-color: skyblue;
            border: solid 5px powderblue;
            margin-top: 3%;
            margin-left: 25%;
            margin-right: 25%;
            margin-bottom: 3%;
            
            padding: 15px;
        }
        .topic{
            margin-left:45%;
        }
        .img{
            width: 600px; height: 300px;
            margin-left: 20%;
        }
        .imgpro{
            padding: 5%;
            padding-top: 5%;
        }
        .text{
            margin-left: 48%;
        }
        .text2{
            margin-left: 38%;
        }
        .back{ 
            margin-left: 77%;
        }

    </style> -->
    <style>
        .img{   
            margin-left: 20%;
            margin-right: 15%;
        }
        .topic{
            margin-left: 48%;
        }
        .product{
            margin-left: 47%;
        }
        .imgpro{
            margin-left: 12%;
        }
        .bg{
            background-color: skyblue;
        }
        .back{
            margin-left: 78%;
        }
        .dt{
            margin-left: 44%;

        }
    </style>
    </head>
        
    <body class="bg">   
        
        <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
              <a class="navbar-brand" href="main.html">หน้าหลัก</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav me-auto">
                  <li class="nav-item">
                    <a class="nav-link active" href="product.php">สินค้า🛒
                      <span class="visually-hidden">(current)</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="selectCus.php">ข้อมูลลูกค้า🤵</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="promotion.php">โปรโมชั่น🏷️</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="contact.html">ติดต่อ📞</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="pay.html">การชำระเงิน💰</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="feedback.html">ความคิดเห็น✉️</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="price.html">คำนวณเงิน💸</a>
                  </li>
                </ul>
                <form class="d-flex">
                    <a class="btn btn-success my-2 my-sm-0" href="main.html">ย้อนกลับ</a>
                  </form>
              </div>
            </div>
          </nav>
        </header>
        <br>

        <h3 class="topic">ข้อมูลสินค้า</h3>

 <div class="img">
     <div class="alert alert-dismissible alert-light">
    <img src="product.jpg" alt="" width="1200px" height="400px">
    </div>
</div>  
        <div class="img">
        <div class="alert alert-dismissible alert-light">
        <h4 class="product" >สินค้า</h4>

        <a class="imgpro" href="detail-champoo.html">
        <img src="champoo.jpg" width="200" height="210">
        </a>

        <a class="imgpro" href="detail-conditioner.html">
        <img src="conditioner.jpg" width="200" height="210">
        </a>

        <a class="imgpro" href="detail-washingpowder.html">
        <img src="washing powder.jpg" width="200px" height="210px">
        </a>

        <hr>
        <p class="dt" >คลิกที่รูปภาพเพื่อดูรายละเอียด</p>
        <hr>
        
        <h5>ข้อมูลสินค้า</h5><br>
        

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DBProduct";

$conn = new mysqli($servername , $username , $password , $dbname);
if($conn->connect_error)
{
    die("connection failed" . $conn->connect_error);
}
$sql = "SELECT * FROM Product";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){    
        echo " รหัสลูกค้า : "."<a href='editproduct.php?ProductID=$row[ProductID]'>".$row["ProductID"]."</a>"."<br>".
        "ชื่อสินค้า : ".     $row["ProductName"]."<br>". 
        "ราคาสินค้า :".        $row["ProductPrice"]. "<br>".
        "CDate : ".        $row["CDate"]."<br>".
        "ModDate : ".     $row["ModDate"]. "<br>". 
        "Deleted : ".   $row["Deleted"]."<br>"."<hr>"."<br>";
    }



}
else {
    echo "0 results"."<br>";
    }
    echo "<a  href='insertproduct.php'>เพิ่มข้อมูลสินค้า</a>";  
    $conn->close();

?>
            <a class="back"  href='main.html'>กลับหน้าหลัก</a>

</div>
</body>
<br>

</html>