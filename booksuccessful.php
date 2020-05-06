<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles/css.css" media="screen" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-ajax-downloader@1.1.0/src/ajaxdownloader.min.js"></script>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<script src="scripts/orderInformation.js"></script>
	<title>線上訂餐</title>
</head>

<body>
<header>
		<nav class="navbar navbar-expand-md navbar-light">
		  <div class="container-fluid">
			<a class="navbar-brand" href="index.html">
			  <img src="images/logo.png" width="100" height="80" class="d-inline-block align-top" alt="龍品快餐店">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
			  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
			  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item active">
				  <a class="nav-link" href="index.html">關於龍品</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="product.html">產品介紹</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="booking.html">線上訂餐</a>
				</li>
			  </ul>
			  <span class="navbar-text">
					<a class="text-muted nav-link" href="https://www.facebook.com/%E9%BE%8D%E5%93%81%E5%BF%AB%E9%A4%90%E5%BA%97-300982883289665/?ref=br_rs"><i class="fab fa-facebook-square"></i></i>Facebook</a>				
			  </span>
			</div>
		  </div>
		</nav>
	  </header>

	<section id="bkok-second">
		<div class="container">
			<h3 class="text-center ">感謝您的訂購，五秒後將自動回到首頁</h3>
			<script> setTimeout("location.href='index.html'", 5000); </script>
			<?php
			$takeway = $_POST["takeway"];
			$time = $_POST["time"];
			$ti = $_POST["ti"];
			$name = $_POST["name"];
			$phone = $_POST["phone"];
			$mail = $_POST["mail"];
			$address = $_POST["address"];
			$selectedMeal = $_POST['selectedMeal'];
			$meals = $_POST['meals'];
			$marinade = $_POST['marinade'];
			$feed = $_POST['feed'];
			$spicy = $_POST['spicy'];
			$cut = $_POST['cut'];
			$amount = $_POST['amount'];
			$total = $_POST['total'];
			$selectedMeal = implode(',', $selectedMeal);
			$meals = implode(',', $meals);
			$marinade = implode(',', $marinade);
			$feed = implode(',', $feed);
			$spicy = implode(',', $spicy);
			$cut = implode(',', $cut);
			$amount = implode(',', $amount);
			$servername = "us-cdbr-iron-east-04.cleardb.net";
			$username = "b586927e7e8dad";
			$password = "624a5963";
			$db_name = "heroku_d483171ce082cb3";

			$db_link = new mysqli($servername, $username, $password, $db_name);

			if ($db_link->connect_error != "") {
			} else {
				$db_link->query("set names'utf8'");

				$sql = "INSERT INTO odlist (Name,Phone,Takeway,Date,Time,Address,Mail,Meals,Size,Marinade,Ad,Spicy,Cut,Amount,Total)VALUES('$_POST[name]','$_POST[phone]','$_POST[takeway]','$_POST[time]','$_POST[ti]','$_POST[address]','$_POST[mail]','$selectedMeal','$meals','$marinade','$feed','$spicy','$cut','$amount','$total')";

				if ($db_link->query($sql) === TRUE) {
				} else {
					echo "Error: " . $sql . "<br>" . $db_link->error;
				}
				$db_link->close();
			}

			?>
		</div>
	</section>
    <footer>
      <div class="container">
        <div class="row">
          <nav class="col-4">
            <p>連結</p>
            <div class="btn-group-vertical">
              <a href="index.html">關於龍品</a>
              <a href="product.html">產品介紹</a>
              <a href="orderInformation.html">線上訂餐</a>
            </div>
          </nav>
          <div class="col">
            <p>聯絡我們</p>
            <p>台中市北區北平路二段68之1號<br>tel:(04)2291-8106</p>
          </div>
        </div>
      </div>
    </footer>
	</div>
</body>

</html>