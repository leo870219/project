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
<script src="scripts/1.js"></script>
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
	  </section>

  <section id="bk-second">
    <div class="container-fluid ">
      <div class="row ">

        <div id="bk-second-menu" class="col-lg-9  text-center">
        <img id="menu-img" class="img-fluid" src="images\menu.png">
        
        <div class="row text-center">

          <div class="col-lg">  
            <img src="images\1.png" class="img-fluid pic">
            <div class="row">
            <div class="col-lg"><p class="title">滷肉便當</p></div>
            <div class="d-none"><p>60</p><p>1</p></div>
            </div>
            <div class="row justify-content-center">
            <a class="btn bg-success text-white" data-toggle="modal" data-target="#go"  onclick="on(this)"><i class="fas fa-shopping-cart"></i>請選擇點餐</a>
            </div>
          </div>

          <div class="col-lg">
            <img src="images\2.png" class="img-fluid pic">
            <div class="row">
            <div class="col-lg"><p class="title">特製便當</p></div>
            <div class="d-none"><p>80</p><p>2</p></div>
            </div>
            <div class="row justify-content-center">
            <a class="btn bg-success text-white" data-toggle="modal" data-target="#go"  onclick="on(this)"><i class="fas fa-shopping-cart"></i>請選擇點餐</a>
            </div>
          </div>

          <div class="col-lg">
            <img src="images\3.png" class="img-fluid pic">
            <div class="row">
            <div class="col-lg"><p class="title">花枝捲飯</p></div>
            <div class="d-none"><p>85</p><p>3</p></div>
            </div>
            <div class="row justify-content-center">
            <a class="btn bg-success text-white" data-toggle="modal" data-target="#go"  onclick="on(this)"><i class="fas fa-shopping-cart"></i>請選擇點餐</a>
            </div>
          </div>
        </div>

        <div class="row  text-center">
          <div class="col-lg">
            <img src="images\4.png" class="img-fluid pic">
            <div class="row">
            <div class="col-lg"><p class="title">蝦捲飯</p></div>
            <div class="d-none"><p>85</p><p>4</p></div>
            </div>
            <div class="row justify-content-center">
            <a class="btn bg-success text-white" data-toggle="modal" data-target="#go"  onclick="on(this)"><i class="fas fa-shopping-cart"></i>請選擇點餐</a>
            </div>
          </div>

          <div class="col-lg">
            <img src="images\5.png" class="img-fluid pic">
            <div class="row">
            <div class="col-lg"><p class="title">滷排骨飯</p></div>
            <div class="d-none"><p>80</p><p>5</p></div>
            </div>
            <div class="row justify-content-center">
            <a class="btn bg-success text-white" data-toggle="modal" data-target="#go"  onclick="on(this)"><i class="fas fa-shopping-cart"></i>請選擇點餐</a>
            </div>
          </div>

          <div class="col-lg">
            <img src="images\6.png" class="img-fluid pic">
            <div class="row">
            <div class="col-lg"><p class="title">炸雞腿飯</p></div>
            <div class="d-none"><p>85</p><p>6</p></div>
            </div>
            <div class="row justify-content-center">
            <a class="btn bg-success text-white" data-toggle="modal" data-target="#go"  onclick="on(this)"><i class="fas fa-shopping-cart"></i>請選擇點餐</a>
            </div>          
          </div>
        </div>

        <div class="row  text-center">
          <div class="col-lg">
            <img src="images\7.png" class="img-fluid pic">
            <div class="row">
            <div class="col-lg"><p class="title">鱈魚飯</p></div>
            <div class="d-none"><p>100</p><p>7</p></div>
            </div>
            <div class="row justify-content-center">
            <a class="btn bg-success text-white" data-toggle="modal" data-target="#go"  onclick="on(this)"><i class="fas fa-shopping-cart"></i>請選擇點餐</a>
            </div>
          </div>

          <div class="col-lg">
            <img src="images\8.png" class="img-fluid pic">
            <div class="row">
            <div class="col-lg"><p class="title">炸排骨飯</p></div>
            <div class="d-none"><p>80</p><p>8</p></div>
            </div>
            <div class="row justify-content-center">
            <a class="btn bg-success text-white" data-toggle="modal" data-target="#go"  onclick="on(this)"><i class="fas fa-shopping-cart"></i>請選擇點餐</a>
            </div>          
          </div>

          <div class="col-lg">
            <img src="images\9.png" class="img-fluid pic">
            <div class="row">
            <div class="col-lg"><p class="title">香雞排飯</p></div>
            <div class="d-none"><p>85</p><p>9</p></div>
            </div>
            <div class="row justify-content-center">
            <a class="btn bg-success text-white" data-toggle="modal" data-target="#go"  onclick="on(this)"><i class="fas fa-shopping-cart"></i>請選擇點餐</a>
            </div>          
          </div>
        </div>

        <div class="row  text-center">
          <div class="col-lg">
            <img src="images\10.png" class="img-fluid pic">
            <div class="row">
            <div class="col-lg"><p class="title">雙捲飯</p></div>
            <div class="d-none"><p>85</p><p>10</p></div>
            </div>
            <div class="row justify-content-center">
            <a class="btn bg-success text-white" data-toggle="modal" data-target="#go"  onclick="on(this)"><i class="fas fa-shopping-cart"></i>請選擇點餐</a>
            </div>          
          </div>

          <div class="col-lg">
            <img src="images\11.png" class="img-fluid pic">
            <div class="row">
            <div class="col-lg"><p class="title">三寶飯</p></div>
            <div class="d-none"><p>85</p><p>11</p></div>
            </div>
            <div class="row justify-content-center">
            <a class="btn bg-success text-white" data-toggle="modal" data-target="#go"  onclick="on(this)"><i class="fas fa-shopping-cart"></i>請選擇點餐</a>
            </div>          
          </div>

          <div class="col-lg">
            <img src="images\12.png" class="img-fluid pic">
            <div class="row">
            <div class="col-lg"><p  class="title">招牌飯</p></div>
            <div class="d-none"><p>85</p><p>12</p></div>
            </div>
            <div class="row justify-content-center">
            <a class="btn bg-success text-white" data-toggle="modal" data-target="#go"  onclick="on(this)"><i class="fas fa-shopping-cart"></i>請選擇點餐</a>
            </div>          
          </div>
        </div>
      </div>

       <!-- The Modal -->
        <div class="modal fade" id="go">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <p class="modal-title">您選擇的餐點:<input type="text" size="6"  readonly="readonly" id="selectedMeal" name="selectedMeal"></p>
          <button type="button" class="close" data-dismiss="modal" onclick="hidePopup()">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="row ">
            <div class="col-lg-6">
            <label>飯量</label>
            </div>
            <div class="col-lg-6">
            <select id="meals"  class="form-control" name="meals" size="1" class="font6"><option value="正常">正常<option value="飯多">飯多<option value="飯少">飯少</select>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 ">
            <label>滷汁</label>
            </div>
            <div class="col-lg-6">
            <select id="marinade"  class="form-control" name="marinade" size="1" class="font6"><option value="正常">正常<option value="不汁">不汁<option value="汁少">汁少<option value="汁多">汁多<option value="只汁">只汁<option value="只滷肉">只滷肉</select>
            </div>
          </div>  
          <div class="row">
            <div class="col-lg-6">
            <label>加料</label>
            </div>
            <div class="col-lg-6">
            <select id="feed "  class="form-control" name="feed " size="1" class="font6"><option value="不加">不加 <option value="加蛋">加蛋</select>
            </div>
          </div>  
          <div class="row">
            <div class="col-lg-6 ">
            <label>加辣</label>
            </div>
            <div class="col-lg-6">
            <select id="spicy"  class="form-control" name="spicy" size="1" class="font6"><option value="不加">不加 <option value="加">加</select>
            </div>
          </div>  
          <div class="row">
            <div class="col-lg-6 ">
            <label>是否要切</label>
            </div>
            <div class="col-lg-6">
            <select id="cut"  class="form-control" name="cut" size="1" class="font6"><option value="切">切<option value="不切">不切</select>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 ">
            <label>數量</label>
            </div>
            <div class="col-lg-6">
            <select id="amount"  class="form-control" name="amount" size="1"class="font6" onchange="subTotal()"><option value="1">1<option value="2">2<option value="3">3<option value="4">4
            <option value="5">5<option value="6">6<option value="7">7<option value="8">8<option value="9">9<option value="10">10</select>
            </div>
            </div>
            <div class="row">
            <div class="col-lg-6 ">
            <label>小計</label>
            </div>
            <div class="col-lg-6">
            <input type="text" class="form-control " size="6"  readonly="readonly" id="subTotal" name="subTotal" style="background-color:white">
            <input type="text" id="price" class="d-none">
            <input type="text" id="picture" class="d-none">
            </div>
            <div class="col-lg-12">
            <button type="button" class="btn bg-primary text-white" data-dismiss="modal" onclick="ShoppingCart('Sidebar');">加入購物車</button>
            </div> 
            </div>
            </div>
          </div>
          </div> 
          </div>
              
        <div id="side1" class="col-lg-3">
          <form action="checklist.php" method="post">
            <p class="title">購物車:</p class="title">
        <div class="table-responsive" id="Sidebar"></div>
        <div class="col-lg" id="Sidebar1" >
        <button class="btn bg-primary text-white" type="submit" style="display:none;" id="orderButton"  >訂購<span id="bill" class="badge"></span></button>
        <input id="total" name="total" type="text" class="d-none">
        </div>

        <div id="php" style="display:none">
        取餐方式:<input type="text" name="takeway" value="<?php echo $takeway?>"></br>
        取餐日期:<input type="text" name="time" value="<?php echo $time?>"></br>
        取餐時間:<input type="text" name="ti" value="<?php echo $ti?>"></br>
        訂購人姓名:<input type="text" name="name" value="<?php echo $name?>"></br>
        訂購人電話:<input type="text" name="phone" value="<?php echo $phone?>"></br>
        <input type="text" name="path" value="<?php echo $path?>"></br>
        訂購人電子郵件:<input type="text" name="mail" value="<?php echo $mail?>"></br>
        <div  <?php if ($takeway == "外帶") {echo "style=\"display:none\"";}?>">
        外送餐點地址:<input type="text" name="address" value="<?php echo $path.$address?>"></div>
        </div>

        </form>
        </div>
        </div> 
      </div>
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
              <a href="booking.html">線上訂餐</a>
            </div>
          </nav>
          <div class="col">
            <p>聯絡我們</p>
            <p>台中市北區北平路二段68之1號<br>tel:(04)2291-8106</p>
          </div>
        </div>
      </div>
    </footer>

</body>
</html>

