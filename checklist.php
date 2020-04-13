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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script src="scripts/1.js"></script>
<title>線上訂餐</title>
</head>

<body>
<section id="intro">
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
	  </section>
  
  <section id="ck-second">
    <div class=" container">
    <form action="booksuccessful.php" method="post">
    <p class="col-md-10 text-center title">訂購資料及商品確認</p>
      <div class="row ">
        <div class="col">
        <p>取餐方式</br><?php echo $takeway?></p>
        </div>
        <div class="col">
        <p>取餐日期</br><?php echo $time?></p>
        </div>
        <div class="col">
        <p>取餐時間</br><?php echo $ti?></p>
        </div>
        </div>
        <div class="row">
        <div class="col-4">
        <p>訂購人姓名</br><?php echo $name?></p>
        </div>
        <div class="col">
        <p>訂購人電子郵件</br><?php echo $mail?></p>
		</div>
		</div>
		<div class="row ">
        <div class="col-4">
        <p>訂購人電話</br><?php echo $phone?></p>
        </div>
        <div class="col" <?php if ($takeway == "外帶") {echo "style=\"display:none\"";}?>;">
        <p>外送餐點地址</br><?php echo $address?></p>
      </div>
      </div>
<?php
$selectedMeal=$_POST['selectedMeal'];
$meals=$_POST['meals'];
$marinade=$_POST['marinade'];
$feed=$_POST['feed'];
$spicy=$_POST['spicy'];
$cut=$_POST['cut'];
$amount=$_POST['amount'];
$sum=$_POST['sum'];
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
for($i=0;$i<count($_POST['selectedMeal']);$i++){ 
echo"<tr>";
echo"<td><input type=\"text\" size=\"6\" style=\"outline:none;border:none\"readonly=\"readonly\" name=\"selectedMeal[]\"value=".($_POST['selectedMeal'][$i])."></td>";
echo"<td><input type=\"text\" size=\"3\" style=\"outline:none;border:none\" readonly=\"readonly\" name=\"meals[]\"value=".($_POST['meals'][$i])."></td>";
echo"<td><input type=\"text\" size=\"5\" style=\"outline:none;border:none\" readonly=\"readonly\" name=\"marinade[]\"value=".($_POST['marinade'][$i])."></td>";
echo"<td><input type=\"text\" size=\"3\" style=\"outline:none;border:none\" readonly=\"readonly\" name=\"feed[]\"value=".($_POST['feed'][$i])."></td>";
echo"<td><input type=\"text\" size=\"3\" style=\"outline:none;border:none\" readonly=\"readonly\" name=\"spicy[]\"value=".($_POST['spicy'][$i])."></td>";
echo"<td><input type=\"text\" size=\"4\" style=\"outline:none;border:none\" readonly=\"readonly\" name=\"cut[]\"value=".($_POST['cut'][$i])."></td>";
echo"<td><input type=\"text\" size=\"4\" style=\"outline:none;border:none\" readonly=\"readonly\" name=\"amount[]\"value=".($_POST['amount'][$i])."></td>";
echo"<td><input type=\"text\" size=\"6\" style=\"outline:none;border:none\" readonly=\"readonly\" name=\"sum[]\"value=".($_POST['sum'][$i])."></td>";
echo"</tr>";
}
echo"<tr><td colspan=\"5\"></td><td colspan=\"2\">總金額</td><td><input type=\"text\" size=\"6\" style=\"outline:none;border:none\" readonly=\"readonly\" name=\"total\"value=".$total."></td></tr>";
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
<div  <?php if ($takeway == "外帶") {echo "style=\"display:none\"";}?>">
外送餐點地址:<input type="text" name="address" value="<?php echo $address?>"></div>
	</div>
      <div id="click" class="row justify-content-around  text-center">
        <div class="col ">
        <input type="button" class="btn btn-primary" onclick="window.history.back()" value="重新訂購">   
        </div>
        <div class="col ">
        <input  type="submit" class="btn btn-primary"  onclick=javascript:location.href="booksuccessful.php" value="確認訂購">
        </div>
      </div>
    </div>
  </form>
  </div>
</section>

<section id="index-latest">
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-4">
            <p>連結</p>
            <div class="btn-group-vertical">
              <a href="index.html">關於龍品</a>
              <a href="product.html">產品介紹</a>
              <a href="booking.html">線上訂餐</a>
            </div>
          </div>
          <div class="col">
            <p>聯絡我們</p>
            <p>台中市北區北平路二段68之1號<br>tel:(04)2291-8106</p>
          </div>
        </div>
      </div>
    </footer>
  </section>


</body>
</html>