<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>線上訂餐</title>
<link rel="stylesheet" href="styles/css.css" media="screen" type="text/css" />
<link rel="stylesheet" href="styles/w3.css">
<link href="https://fonts.googleapis.com/css?family=Armata&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>

<body>
    <div>
	<div id="header">
				<img src="images/logo.png "   style="width:30%; height:100px;float:right; " />
				<a href="index.html" style ="position: absolute; bottom: 0; left:20px; top: 35px;font-size: 35px;font-family:cwTeXYen,sans-serif;color:white"><b>關於龍品</b></a>
			
				<a href="product.html" style="position: absolute; bottom: 0; left: 180px; top: 35px; font-size: 35px;  height: 45px;font-family:cwTeXYen,sans-serif;color:white"><b>產品介紹</b></a>
			
				<a href="booking.html" style="position: absolute; bottom: 0; left: 340px; top: 35px;font-size: 35px;font-family:cwTeXYen,sans-serif;color:white"><b>線上訂餐</b></a>
			</div>
<?php
$takeway=$_POST["takeway"];
$time=$_POST["time"];
$ti=$_POST["ti"];
$name=$_POST["name"];
$phone=$_POST["phone"];
$mail=$_POST["mail"];
$address=$_POST["address"];
?>

<div class="content">
<form action="booksuccessful.php" method="post">
    <div>
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
<table class="font11" border="0">  
    <tr>
        <td></td>
        <td style="height:75px;">
        <p style="font-size:45px;font-family:cwTeXYen,sans-serif;">訂購資料及商品確認</p>
        </td>
        <td></td>
    </tr>
    <tr>
        <td style="height:150px;width:40%;">取餐方式:</br><?php echo $takeway?></td>
        <td style="width:40%">取餐日期:</br><?php echo $time?></td>
        <td style="width:30%">取餐時間:</br><?php echo $ti?></td>
    </tr>
    <tr>
        <td style="height:100px;">訂購人姓名:</br><?php echo $name?></td>
        <td >訂購人電話:</br><?php echo $phone?></td>
        <td>訂購人電子郵件:</br><?php echo $mail?></td>
    </tr>
    <tr style="<?php if ($takeway == "外帶") {echo "display:none";}?>;height:150px;">
        <td colspan="3">
        外送餐點地址:</br><?php echo $address?>
        </td>
    </tr>
    </table>
</div >
<?php
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];
$e=$_POST['e'];
$f=$_POST['f'];
$g=$_POST['g'];
echo "<div>";
echo "<table id='a' class='table' border='0'>";
    echo "<tr  style='background-color:black ;font-family:cwTeXYen,sans-serif;color:white;font-size:25px'>";
    echo"<td colspan='2' style='text-align:center'>餐點名稱</td>";
    echo"<td style=\"text-align:center\">飯量</td>";
    echo"<td style=\"text-align:center\">滷汁</td>";
    echo"<td style=\"text-align:center\">加料</td>";
    echo"<td style=\"text-align:center\">加辣</td>";
    echo"<td style=\"text-align:center\">是否要切</td>";
    echo"<td style=\"text-align:center\">數量</td>";
    echo"</tr>	";  
for($i=0;$i<count($_POST['a']);$i++){
    
    echo"<tr style=\"font-family:cwTeXYen,sans-serif;font-size:25px\">";
    echo"<td style=\"width:200px\"><img src=\"images/1.jpg\" style=\"width:200px; height:175px;\"></td> ";
    echo"<td style=\"text-align:center; line-height:170px\"><input type=\"text\" style=\"outline:none;border:none\" readonly=\"readonly\" name=\"a[]\"value=".($_POST['a'][$i])."></td>";
    echo"<td style=\"text-align:center; line-height:170px\"><input type=\"text\" style=\"outline:none;border:none\" readonly=\"readonly\" name=\"b[]\"value=".($_POST['b'][$i])."></td>";
    
    echo"<td style=\"text-align:center; line-height:170px\"><input type=\"text\" style=\"outline:none;border:none\" readonly=\"readonly\" name=\"c[]\"value=".($_POST['c'][$i])."></td>";
    echo"<td style=\"text-align:center; line-height:170px\"><input type=\"text\" style=\"outline:none;border:none\" readonly=\"readonly\" name=\"d[]\"value=".($_POST['d'][$i])."></td>";
    echo"<td style=\"text-align:center; line-height:170px\"><input type=\"text\" style=\"outline:none;border:none\" readonly=\"readonly\" name=\"e[]\"value=".($_POST['e'][$i])."></td>";
    echo"<td style=\"width:110px;text-align:center; line-height:170px\"><input type=\"text\" style=\"outline:none;border:none\" readonly=\"readonly\" name=\"f[]\"value=".($_POST['f'][$i])."></td>";
    echo"<td style=\"text-align:center; line-height:170px\"><input type=\"text\" style=\"outline:none;border:none\" readonly=\"readonly\" name=\"g[]\"value=".($_POST['g'][$i])."></td>";
    echo"</tr>";

}
echo "</table>";
echo "</div>"

?>

<button style="margin:1em 0 1em 5em" class="font2" onclick="window.history.go(-1)">重新訂購</button>
<input style="margin:1em 0 1em 13em" class="font2"  type="submit" onclick=javascript:location.href="booksuccessful.php" value="確認訂購">
</form>
</div>
</div>
<div id="Footer">
<p  style="font-family:cwTeXYen,sans-serif;color:white;font-size:25px">。地址：台中市北區北平路二段68之1號</p>
<p  style="font-family:cwTeXYen,sans-serif;color:white;font-size:25px">。備註：如餐點需訂購10份以上，請撥電話:04-2291-8106。</p>
    </div>
</div>
</body>
</html>