<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>線上訂餐</title>
<link rel="stylesheet" href="styles/css.css"/>
<link rel="stylesheet" href="styles/w3.css">
<link href="https://fonts.googleapis.com/css?family=Armata&display=swap" rel="stylesheet">
<script src="1.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
	<div>
	<nav class="navbar navbar-expand-md  navbar-dark" style="background-color: #2d7a44;">
<img src="images/logo.png" class="img-fluid" alt="logo" style="width:200px;height:75px;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
     <a class="navbar-brand" href="index.html">       
        </a>
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link" href="index.html" style ="font-size: 30px;font-family:cwTeXYen,sans-serif;color:white">關於龍品</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="product.html" style ="font-size: 30px;font-family:cwTeXYen,sans-serif;color:white">產品介紹</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="booking.html" style ="font-size: 30px;font-family:cwTeXYen,sans-serif;color:white">線上訂餐</a>
          </li>
        </ul>
  </div>  
</nav>
			<div id="body">
			<p  style="font-family:cwTeXYen,sans-serif;color:black;font-size:40px;margin:6em 0 6.5em 17em">感謝您的訂購</p>
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

$a= implode(',', $a);
$b= implode(',', $b);
$c= implode(',', $c);
$d= implode(',', $d);
$e= implode(',', $e);
$f= implode(',', $f);
$g= implode(',', $g);
$servername = "localhost";
$username = "root";
$password = "";
$db_name="mydb";
// Create connection
$db_link = new mysqli($servername, $username, $password,$db_name);
// Check connection
if ($db_link->connect_error!="") {
    echo" 連接失敗 " ;
}
else{
	$db_link->query("set names'utf8'");

	$sql="INSERT INTO order1 (Name,Phone,Takeway,Date,Time,Address,Mail,Meals,Size,Marinade,Ad,Spicy,Cut,Amount)VALUES('$_POST[name]','$_POST[phone]','$_POST[takeway]','$_POST[time]','$_POST[ti]','$_POST[address]','$_POST[mail]','$a','$b','$c','$d','$e','$f','$g')";

	if ($db_link->query($sql) === TRUE) {

	} else {
		echo "Error: " . $sql . "<br>" . $db_link->error;
	}
	$db_link->close();
}

?>
			</div>	
   			 <div id="Footer">
<p  style="font-family:cwTeXYen,sans-serif;color:white;font-size:25px">。地址：台中市北區北平路二段68之1號</p>
<p  style="font-family:cwTeXYen,sans-serif;color:white;font-size:25px">。備註：如餐點需訂購10份以上，請撥電話:04-2291-8106。</p>
			</div>
</div>
</body>
</html>
