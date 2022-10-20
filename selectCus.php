<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">                
    <link rel="stylesheet" href="style-table.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">


    <title>ข้อมูลลูค้า</title> 
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
            width: 300px; height: 300px;
            margin-left: 35%;
        }
        .back{ 
            margin-left: 77%;
        }
       
    </style> -->
    <style>
          .topic{
            margin-left: 35%;
        }
        .img{   
          
            margin-left: 35%;
            margin-right: 30%;
        }
        .btn{
            margin-left: 30%;
        }
        .bg{
          background-color: skyblue;
        }
        .bg-1{
          margin-left: 28%;

        }
        /* .bg-1{
          background-color: deepskyblue;
          padding-left: 20%;
          padding-right: 20%;

        } */
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
          </nav>
        </header>


<div class="img">
     <h3 class="topic">ข้อมูลลูกค้า</h3>
     <div class="alert alert-dismissible alert-light">
        <img src="customer.jpg" alt="" width="600px" height="400px">
    </div>
</div> 

    <body class="bg">

      <div class="bg-1">
    <?php 
include "connect.php"; 
?>

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

$sql = "SELECT * FROM Customer";
$result = $conn->query($sql);
if ($result->num_rows > 0){  
echo "<table border='5px'>";
echo"<thead class='thead-dark'>";
echo "<tr bgcolor='pink'>";   echo "<th width='200px'>รหัสลูกค้า "; echo "</th>";echo "<th> ชื่อลูกค้า: ";echo "</th>"; echo "<th> ที่อยู่"; echo "</th>" ; echo "<th> E-mail "; echo "</th>" ;
echo "</th>" ; echo "<th> วันเดือนปีเกิด "; echo "</th>" ; echo "<th> C-Date "; echo "</th>" ; echo "<th> Mod-Date "; echo "</th>" ; echo "<th> Postcode "; echo "</th>" ;
echo "</tr>";
    
while($row = $result->fetch_assoc()){    
//echo " รหัสลูกค้า : "."<a href='editcustomer.php?CustomerId=$row[CustomerId]'>".$row["CustomerId"]."</a>"."<br>".


echo "<td><a href='editcustomer.php?CustomerId=$row[CustomerId]'>".$row["CustomerId"]."</td>"."</a><td>"."</a>".$row["CustomerName"]."</td>"."<td>".$row["Location"]."</td>"
."<td>".$row["Email"]."</td>"."<td>".$row["DataOfBirth"]."</td>"."<td>".$row["CDate"]."</td>"."<td>".$row["ModDate"]."</td>"."<td>".$row["Postcode"]."</td>";
echo "</tr>"."<br>"; 
echo"</thead>";

    }      
echo "</table>"."<br>"."<br>";

}
else {
    echo "0 results"."<br>";
    }
    $conn->close();
?>

</div>
</body>
<div class="form-group">
    <a href="insertcustomer.php" class="btn btn-success" role="button" aria-pressed="true">เพิ่มข้อมูลลูกค้า</a>
    <a href="main.html" class="btn btn-primary">กลับสู่หน้าหลัก</a>
    </div>
    <br>

</html>






