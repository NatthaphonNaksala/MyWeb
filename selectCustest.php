<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">                
    <link rel="stylesheet" href="style-table.css">
    <link rel="stylesheet" href="style.css">

    <title>ข้อมูลลูค้า</title> 
    <style>
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
       
    </style>
    </head>
    <body class="postion">
        <h2 class="topic">ข้อมูลลูกค้า</h2>
        <img class="img" src="customer.jpg" alt="">
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
    while($row = $result->fetch_assoc()){    
        echo " รหัสลูกค้า : "."<a href='editcustomer.php?CustomerId=$row[CustomerId]'>".$row["CustomerId"]."</a>"."<br>".
        "ชื่อลูกค้า : ".     $row["CustomerName"]."<br>". 
        "สถานที่ : ".        $row["Location"]. "<br>".
        "Email : ".        $row["Email"]."<br>".
        "วันเดือนปีเกิด : ".   $row["DataOfBirth"]."<br>". 
        "CDate : ".       $row["CDate"]. "<br>". 
        "ModDate : ".     $row["ModDate"]. "<br>". 
        "รหัสไปรษณีย์ : ".   $row["Postcode"]."<br>"."<hr>"."<br>";
    }

}
else {
    echo "0 results"."<br>";
    }
    echo "<a  href='insertcustomer.php'>เพิ่มข้อมูลลูกค้า</a>";  
    $conn->close();

?>
</body>

    <a class="back"  href='main.html'>กลับหน้าหลัก</a>

</html>