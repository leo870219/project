<?php
$takeway=$_POST["takeway"];
$time=$_POST["time"];
$ti=$_POST["ti"];
$name=$_POST["name"];
$phone=$_POST["phone"];
$mail=$_POST["mail"];
$address=$_POST["address"];
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="styles/css.css" media="screen" type="text/css" />
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
				<a class="nav-link" href="booking.html" >線上訂餐</a>
			  <li>
			</ul>
		  </div>  
		  </div>
		</div>
	</section>
  
  <section id="ck-second">
    <div class=" container">
    <form action="booksuccessful.php" method="post">
    <h2 class="col-md-10 text-center">訂購資料及商品確認</h2>
      <div class="row ">
        <div class="col-md">
        <p>取餐方式</br><?php echo $takeway?></p>
        </div>
        <div class="col-md">
        <p>取餐日期</br><?php echo $time?></p>
        </div>
        <div class="col-md">
        <p>取餐時間</br><?php echo $ti?></p>
        </div>
        </div>
        <div class="row">
        <div class="col-md">
        <p>訂購人姓名</br><?php echo $name?></p>
        </div>
        <div class="col-md">
        <p>訂購人電子郵件</br><?php echo $mail?></p>
        </div>
        <div class="col-md">
        <p>訂購人電話</br><?php echo $phone?></p>
        </div>
        </div>
        <div class="row ">
        <div class="col-md-12" style="<?php if ($takeway == "外帶") {echo "display:none";}?>;">
        <p>外送餐點地址</br><?php echo $address?></p>
        </div>
      </div>
<?php
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];
$e=$_POST['e'];
$f=$_POST['f'];
$g=$_POST['g'];
$g=$_POST['h'];
$total=$_POST['total'];
echo "<div class=\"table-responsive\">";
echo "<table class=\"table\" id='a'>";
echo "<tr class='bg-dark text-white'>";
echo"<td>餐點</td>";
echo"<td >飯量</td>";
echo"<td>滷汁</td>";
echo"<td>加料</td>";
echo"<td>加辣</td>";
echo"<td>是否切</td>";
echo"<td>數量</td>";
echo"<td>金額</td>";
echo"</tr>	";  
for($i=0;$i<count($_POST['a']);$i++){ 
echo"<tr>";
echo"<td><input type=\"text\" size=\"6\" style=\"outline:none;border:none\"readonly=\"readonly\" name=\"a[]\"value=".($_POST['a'][$i])."></td>";
echo"<td><input type=\"text\" size=\"3\" style=\"outline:none;border:none\" readonly=\"readonly\" name=\"b[]\"value=".($_POST['b'][$i])."></td>";
echo"<td><input type=\"text\" size=\"5\" style=\"outline:none;border:none\" readonly=\"readonly\" name=\"c[]\"value=".($_POST['c'][$i])."></td>";
echo"<td><input type=\"text\" size=\"3\" style=\"outline:none;border:none\" readonly=\"readonly\" name=\"d[]\"value=".($_POST['d'][$i])."></td>";
echo"<td><input type=\"text\" size=\"3\" style=\"outline:none;border:none\" readonly=\"readonly\" name=\"e[]\"value=".($_POST['e'][$i])."></td>";
echo"<td><input type=\"text\" size=\"4\" style=\"outline:none;border:none\" readonly=\"readonly\" name=\"f[]\"value=".($_POST['f'][$i])."></td>";
echo"<td><input type=\"text\" size=\"4\" style=\"outline:none;border:none\" readonly=\"readonly\" name=\"g[]\"value=".($_POST['g'][$i])."></td>";
echo"<td><input type=\"text\" size=\"6\" style=\"outline:none;border:none\" readonly=\"readonly\" name=\"h[]\"value=".($_POST['h'][$i])."></td>";
echo"</tr>";
}
echo"<tr><td colspan=\"6\"></td><td>總金額</td><td><input type=\"text\" size=\"6\" style=\"outline:none;border:none\" readonly=\"readonly\" name=\"total\"value=".$total."></td></tr>";
echo "</table>";
echo "</div>"
?>
<div id="php" style="display:none">
取餐方式:<input type="text" name="takeway" value="<?php echo $takeway?>"></br>
取餐日期:<input type="text" name="time" value="<?php echo $time?>"></br>
取餐時間:<input type="text" name="ti" value="<?php echo $ti?>"></br>
訂購人姓名:<input type="text" name="name" value="<?php echo $name?>"></br>
訂購人電話:<input type="text" name="phone" value="<?php echo $phone?>"></br>
<input type="text" name="path" value="<?php echo $path?>"></br>
訂購人電子郵件:<input type="text" name="mail" value="<?php echo $mail?>"></br>
<div  style="<?php if ($takeway == "外帶") {echo "display:none";}?>">
外送餐點地址:<input type="text" name="address" value="<?php echo $address?>"></div>
	</div>
      <div id="click" class="row text-center">
        <div class="col-md ">
        <input type="button" class="btn btn-primary" onclick="window.history.back()" value="重新訂購">   
        </div>
        <div class="col-md ">
        <input  type="submit" class="btn btn-primary"  onclick=javascript:location.href="booksuccessful.php" value="確認訂購">
        </div>
      </div>
    </div>
  </form>
  </div>
</sectiton>

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
</body>
</html>