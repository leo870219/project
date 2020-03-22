<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles/css.css" media="screen" type="text/css" />
	<link rel="stylesheet" href="styles/w3.css">
	<link href="https://fonts.googleapis.com/css?family=Armata&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-ajax-downloader@1.1.0/src/ajaxdownloader.min.js"></script>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<script src="scripts/1.js"></script>
	<title>線上訂餐</title>
</head>

<body>
	<section id="intro">
		<div class="container">
			<div class="navbar navbar-expand-md">
				<a class="navbar-brand" href="#">
					<img src="images/logo.png" alt="logo" style="width:130px;">
				</a>
				<button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
					<span class="fas fa-bars"></span>
				</button>
				<div class="collapse navbar-collapse " id="collapsibleNavbar">
					<ul class="navbar-nav ">
						<a class="navbar-brand" href="index.html"></a>
						<ul class="navbar-nav ">
							<li class="nav-item">
								<a class="nav-link" href="index.html">關於龍品</a></li>
							<li class="nav-item">
								<a class="nav-link" href="product.html">產品介紹</a></li>
							<li class="nav-item">
								<a class="nav-link" href="booking.html">線上訂餐</a>
							<li>
						</ul>
				</div>
			</div>
		</div>
	</section>

	<section id="bkok-second">
		<div class="container">
			<h1 class="text-center ">感謝您的訂購，五秒後將自動回到首頁</h1>
			<script>
				setTimeout("location.href='index.html'", 5000)
			</script>
			<?php
			$takeway = $_POST["takeway"];
			$time = $_POST["time"];
			$ti = $_POST["ti"];
			$name = $_POST["name"];
			$phone = $_POST["phone"];
			$mail = $_POST["mail"];
			$address = $_POST["address"];
			$a = $_POST["a"];
			$b = $_POST["b"];
			$c = $_POST["c"];
			$d = $_POST["d"];
			$e = $_POST["e"];
			$f = $_POST["f"];
			$g = $_POST["g"];
			$total = $_POST['total'];
			$a = implode(',', $a);
			$b = implode(',', $b);
			$c = implode(',', $c);
			$d = implode(',', $d);
			$e = implode(',', $e);
			$f = implode(',', $f);
			$g = implode(',', $g);
			$servername = "us-cdbr-iron-east-04.cleardb.net";
			$username = "b586927e7e8dad";
			$password = "624a5963";
			$db_name = "heroku_d483171ce082cb3";

			$db_link = new mysqli($servername, $username, $password, $db_name);

			if ($db_link->connect_error != "") {
			} else {
				$db_link->query("set names'utf8'");

				$sql = "INSERT INTO odlist (Name,Phone,Takeway,Date,Time,Address,Mail,Meals,Size,Marinade,Ad,Spicy,Cut,Amount,Total)VALUES('$_POST[name]','$_POST[phone]','$_POST[takeway]','$_POST[time]','$_POST[ti]','$_POST[address]','$_POST[mail]','$a','$b','$c','$d','$e','$f','$g','$total')";

				if ($db_link->query($sql) === TRUE) {
				} else {
					echo "Error: " . $sql . "<br>" . $db_link->error;
				}
				$db_link->close();
			}

			?>
		</div>
	</section>

	<section id="latest">
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<img class="img-fluid" src="images/logo1.png">
					</div>
					<div class="col-md-4">
						<h3>連結</h3>
						<a href="index.html">關於龍品</a>
						<a href="product.html">產品介紹</a>
						<a href="booking.html">線上訂餐</a>
					</div>
					<div class="col-md-4">
						<h3>聯絡我們</h3>
						<p>台中市北區北平路二段68之1號<br>tel:(04)-2291-8106</p>
					</div>
				</div>
		</footer>
	</section>
	</div>
</body>

</html>