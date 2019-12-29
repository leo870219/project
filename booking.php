<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="styles/css.css" media="screen" type="text/css" />
<link rel="stylesheet" href="styles/w3.css">
<link href="https://fonts.googleapis.com/css?family=Armata&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-ajax-downloader@1.1.0/src/ajaxdownloader.min.js"></script>
<script src="1.js"></script>
<title>線上訂餐</title>


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
<div id="go" style="height:580px;width:700px; visibility:hidden; background-color:#405446;position:fixed;top:8em;left:28em ;border:1px solid #CCC;border:1px solid #333;padding:5px;border-radius:10px;">
<p class="font7">您選擇的餐點:<input type="text" style="outline:none;border:none;background-color:#405446;color:white" readonly="readonly" id="add" name="add"></br></br>
飯量<select id="add1" name="add1" size="1" class="font6"><option value="正常">正常<option value="飯多">飯多<option value="飯少">飯少</select></br></br>
滷汁<select id="add2" name="add2" size="1" class="font6"><option value="正常">正常<option value="不汁">不汁<option value="汁少">汁少<option value="汁多">汁多<option value="只汁">只汁<option value="只滷肉">只滷肉</select></br></br>
加料<select id="add3" name="add3" size="1" class="font6"><option value="不加">不加 <option value="加蛋">加蛋</select></br></br>
加辣<select id="add4" name="add3" size="1" class="font6"><option value="不加">不加 <option value="加">加</select></br></br>
是否要切<select id="add5" name="add5" size="1" class="font6"><option value="切">切<option value="不切">不切</select></br></br>
數量<select id="add6" name="amount" size="1"class="font6"><option value="1">1<option value="2">2<option value="3">3<option value="4">4
<option value="5">5<option value="6">6<option value="7">7<option value="8">8<option value="9">9<option value="10">10</select></p></br>
<div id="statusbar13"><button style="position:absolute;right:20px;top:5px;letter-spacing:3px;width:20px;" onclick="hidePopup();">x</button></div>
<div id="statusbar"><button style="border-radius:5px;width:100%" onclick="ShoppingCart();"><p class="font1">加入購物車</p></button></div>
	</div>

<fieldset>
	<legend><p class="font">請選擇餐點</p></legend>
	<div class="grid-container">
	<div>
     <img src="images\section1.jpg" class="pic">
	<p class="font">魯肉便當</p>
	<input type="button" class="font" style="background-color:blue" onclick="on()" value="加入購物車">
    </div>
    <div>
      <img src="images\section2.jpg"  class="pic">
	   <p class="font">特製便當</p>
	<button class="font" style="background-color:blue" onclick="on1()">加入購物車</button>
    </div>
    <div>
      <img src="images\section2.jpg"  class=" pic">
 <p class="font">花枝捲飯</p>
	<button class="font" style="background-color:blue" onclick="on2()">加入購物車</button>
      </div>	
	  </div>
	  <div class="grid-container">
    <div>
      <img src="images\section2.jpg"class="pic">
 <p class="font">蝦捲飯</p>
	<button class="font" style="background-color:blue" onclick="on3()">加入購物車</button>
    </div>
	<div>
      <img src="images\section2.jpg" class="pic">
     <p class="font">滷排骨飯</p>
	<button class="font" style="background-color:blue" onclick="on4()">加入購物車</button>
    </div>
    <div>
      <img src="images\section2.jpg"  class="pic">
	   <p class="font">炸雞腿飯</p>
	<button class="font" style="background-color:blue" onclick="on5()">加入購物車</button>
    </div>
	</div>
	<div class="grid-container">
    <div>
      <img src="images\section2.jpg" class=" pic">
	 <p class="font">鱈魚飯</p>
	<button class="font" style="background-color:blue" onclick="on6()">加入購物車</button>
 </div>
    <div>
      <img src="images\section2.jpg" class="pic">
 <p class="font">炸排骨飯</p>
	<button class="font" style="background-color:blue" onclick="on7()">加入購物車</button>
      </div>
	<div>
      <img src="images\section2.jpg" class="pic">
	  	   <p class="font">香雞排飯</p>
	<button class="font" style="background-color:blue" onclick="on8()">加入購物車</button>
    </div>
	</div>
	<div class="grid-container">
    <div>
      <img src="images\section2.jpg" class="pic">
	   <p class="font">雙捲飯</p>
	   <button class="font" style="background-color:blue" onclick="on9()">加入購物車</button>
    </div>
    <div>
      <img src="images\section2.jpg" class=" pic">
	 <p class="font">三寶飯</p>
	 <button class="font" style="background-color:blue" onclick="on10()">加入購物車</button>
 </div>
   <div>
    <img src="images\section2.jpg" class="pic">

	<p class="font">招牌飯</p>
	<button class="font" style="background-color:blue" onclick="on11()">加入購物車</button>
      </div>
    </div>
</fieldset>

</div>
<div id="side1">
<?php
$name = $_POST["username"];

switch($_POST["takeway"]){
    case "delivery":
		$takeway="外送";
        break;
    case "takeout":
		$takeway="外帶";
        break;
}
$time = $_POST["time"];
$ti = $_POST["ti"];
$path = $_POST["path"];
$phone = $_POST["usertel"];
$mail =$_POST["usermail"];
$address=$_POST["address"];
?>
<form action="checklist.php" method="post">
<fieldset >
<legend><p class="font">購物車:</p></legend>
<div id="Sidebar">
</div>

<div id="Sidebar1" >
<input  type="submit" style="display:none;width:357px;text-align: center;" id="la" value="訂購"  >
</div>
<div id="php" style="display:none">
取餐方式:<input type="text" name="takeway" value="<?php echo $takeway?>"></br>
取餐日期:<input type="text" name="time" value="<?php echo $time?>"></br>
取餐時間:<input type="text" name="ti" value="<?php echo $ti?>"></br>
訂購人姓名:<input type="text" name="name" value="<?php echo $name?>"></br>
訂購人電話:<input type="text" name="phone" value="<?php echo $phone?>"></br>
<input type="text" name="path" value="<?php echo $path?>"></br>
訂購人電子郵件:<input type="text" name="mail" value="<?php echo $mail?>"></br>
<div  style="<?php if ($takeway == "外帶") {echo "display:none";}?>">
外送餐點地址:<input type="text" name="address" value="<?php echo $path.$address?>"></div>
	</div>
</fieldset>
</form>
</div>
<div style="clear:both;background-color: #2d7a44;">
<p  style="font-family:cwTeXYen,sans-serif;color:white;font-size:25px">。地址：台中市北區北平路二段68之1號</p>
<p  style="font-family:cwTeXYen,sans-serif;color:white;font-size:25px">。備註：如餐點需訂購10份以上，請撥電話:04-2291-8106。</p>
	</div>
</div>
</body>
</html>
