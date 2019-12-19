<?php
$takeway=$_POST["takeway"];
$time=$_POST["time"];
$ti=$_POST["ti"];
$name=$_POST["name"];
$phone=$_POST["phone"];
$mail=$_POST["mail"];
$address=$_POST["address"];
$a=$_POST["a"];
$b=$_POST["b"];
$c=$_POST["c"];
$d=$_POST["d"];
$e=$_POST["e"];
$f=$_POST["f"];
$g=$_POST["g"];

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die(" 連接失敗 " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "感謝您的訂購";
    $sql_query="INSERT INTO orderlist (Name,Phone,Takeway,Date,Time,Address,Mail,Meals,Size,Marinade,Ad,Spicy,Cut,Amount),VALUES(?,?,?,?,?,?,?,?,?,?,?,?.?.?)";
    $stmt=$db_link->prepare($sql_query);
    $stmt->bind_param("",$name,$phone,$takeway,$ti,$time,$address,$mail,$a,$b,$c,$d,$e,$f,$g,$h);
    $stmt ->execute();
    $stmt ->close();
    $db_linl->close();
} else {
    echo "資料庫建立失敗: " . $conn->error;
}


?>