<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">                
    <link rel="stylesheet" href="style-table.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">


    <title>โปรโมชั่น</title> 
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
            width: 700px; height: 300px;
            margin-left: 12%;
        }
        .back{ 
            margin-left: 77%;
        }
       
    </style> -->
    <style>
        .bg{
            background-color: skyblue;
        }
        .topic{
            margin-left: 46%;
        }
        .img{   
            background-color: skyblue;
            margin-left: 25%;
            margin-right: 20%;
        }
        .img-1{   
            margin: 20px;
        }
        .back{
            margin-left: 79%;
        }

    </style>

    </head>
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
         </div>
          </nav>
        </header>

    <body class="bg">
    <br>
    <div class="img">
    <div class="alert alert-dismissible alert-light">
        <h3 class="topic">โปรโมชั่น</h3>
        <img class="img-1" src="promotion.jpg" alt="" width="980px" height="300px">
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
echo "<br>";
$sql = "SELECT * FROM Promotion";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){    
        echo "<br>"." รหัสโปรโมชั่น : "."<a href='editpromotion.php?PromotionId=$row[PromotionId]'>".$row["PromotionId"]."</a>"."<br>".
        "ชื่อโปรโมชั่น : ".  $row["Promotionname"]. "<br>".
        "C-Date : ".     $row["Cdate"]."<br>".
        "Mod-Date : ".   $row["Moddate"]."<hr>"."<br>";
    }

}
else {
    echo "0 results"."<br>";
    }
    echo "<a  href='insertpromotion.php'>เพิ่มโปรโมชั่น</a>";  
    $conn->close();

?>
<a class="back"  href='main.html'>กลับหน้าหลัก</a>

</div>
<br>
</body>
</html>