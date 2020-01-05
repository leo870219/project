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
<script src="1.js"></script>
<title>線上訂餐</title>

</head>
<body>

  <section id="intro">
    <div class="container">
      <div class="navbar navbar-expand-md">
      <img src="images/logo1.png" class="img-fluid" alt="logo">
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
  </section>

  <section id="bk-second">
    <div class="container-fluid ">
      <div class="row ">
        <div class="col-md-9  text-center">
        <img id="menu-img" class="img-fluid" src="images\menu.png">
        <div class="row text-center">
          <div class="col-md">
            <img src="images\1.png" class="img-fluid pic">
            <h3>滷肉便當</h3>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#go"  onclick="on()">加入購物車</button>
          </div>
          <div class="col-md">
            <img src="images\1.png" class="img-fluid pic">
            <h3>特製便當</h3>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#go"  onclick="on1()">加入購物車</button>
          </div>
          <div class="col-md">
            <img src="images\1.png" class="img-fluid pic">
            <h3>花枝捲飯</h3>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#go"  onclick="on2()">加入購物車</button>
          </div>
        </div>

        <div class="row  text-center">
          <div class="col-md">
            <img src="images\1.png" class="img-fluid pic">
            <h3>蝦捲飯</h3>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#go"  onclick="on3()">加入購物車</button>
          </div>
          <div class="col-md">
            <img src="images\1.png" class="img-fluid pic">
            <h3>滷排骨飯</h3>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#go"  onclick="on4()">加入購物車</button>
          </div>
          <div class="col-md">
            <img src="images\1.png" class="img-fluid pic">
            <h3>炸雞腿飯</h3>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#go"  onclick="on5()">加入購物車</button>
          </div>
        </div>

        <div class="row  text-center">
          <div class="col-md">
            <img src="images\1.png" class="img-fluid pic">
            <h3>鱈魚飯</h3>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#go"  onclick="on6()">加入購物車</button>
          </div>
          <div class="col-md">
            <img src="images\1.png" class="img-fluid pic">
            <h3>炸排骨飯</h3>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#go"  onclick="on7()">加入購物車</button>
          </div>
          <div class="col-md">
            <img src="images\1.png" class="img-fluid pic">
            <h3>香雞排飯</h3>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#go"  onclick="on8()">加入購物車</button>
          </div>
        </div>

        <div class="row  text-center">
          <div class="col-md">
            <img src="images\1.png" class="img-fluid pic">
            <h3>雙捲飯</h3>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#go"  onclick="on9()">加入購物車</button>
          </div>
          <div class="col-md">
            <img src="images\1.png" class="img-fluid pic">
            <h3>三寶飯</h3>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#go"  onclick="on10()">加入購物車</button>
          </div>
          <div class="col-md">
            <img src="images\1.png" class="img-fluid pic">
            <h3>招牌飯</h3>
            <button type="button" class="btn btn-primary" data-toggle="modal"  data-target="#go" onclick="on11()">加入購物車</button>
          </div>
        </div>
      </div>

       <!-- The Modal -->
        <div class="modal fade" id="go">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h3 class="modal-title">您選擇的餐點:<input type="text" readonly="readonly" id="add" name="add"></h3>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="row ">
            <div class="col-md-6 text-left">
            <p>飯量</p>
            </div>
            <div class="col-md-6">
            <select id="add1" name="add1" size="1" class="font6"><option value="正常">正常<option value="飯多">飯多<option value="飯少">飯少</select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 text-left">
            <p>滷汁</p>
            </div>
            <div class="col-md-6">
            <select id="add2" name="add2" size="1" class="font6"><option value="正常">正常<option value="不汁">不汁<option value="汁少">汁少<option value="汁多">汁多<option value="只汁">只汁<option value="只滷肉">只滷肉</select>
            </div>
          </div>  
          <div class="row">
            <div class="col-md-6 text-left">
            <p>加料</p>
            </div>
            <div class="col-md-6">
            <select id="add3" name="add3" size="1" class="font6"><option value="不加">不加 <option value="加蛋">加蛋</select>
            </div>
          </div>  
          <div class="row">
            <div class="col-md-6 text-left">
            <p>加辣</p>
            </div>
            <div class="col-md-6">
            <select id="add4" name="add3" size="1" class="font6"><option value="不加">不加 <option value="加">加</select>
            </div>
          </div>  
          <div class="row">
            <div class="col-md-6 text-left">
            <p>是否要切</p>
            </div>
            <div class="col-md-6">
            <select id="add5" name="add5" size="1" class="font6"><option value="切">切<option value="不切">不切</select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 text-left">
            <p>數量</p>
            </div>
            <div class="col-md-6">
            <select id="add6" name="amount" size="1"class="font6"><option value="1">1<option value="2">2<option value="3">3<option value="4">4
            <option value="5">5<option value="6">6<option value="7">7<option value="8">8<option value="9">9<option value="10">10</select></p>
            </div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="ShoppingCart('Sidebar');">加入購物車</button>
          </div> 
        </div>
          </div>
          </div> 
          </div>
              
        <div id="side1" class="col-md-3">
          <form action="checklist.php" method="post">
            <h3>購物車:</h3>
        <div id="Sidebar"></div>
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

        </form>
        </div>
        </div> 
      </div>
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

</body>
</html>

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

