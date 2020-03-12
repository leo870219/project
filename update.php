<?php
    include("connMysqlObj.php");
	if(isset($_POST["action"])&&($_POST["action"]=="update")){
		$sql_query = "UPDATE list SET Name=?,Phone=?,Takeway=?,Date=?,Time=?,Address=?,Mail=?,Meals=?,Size=?,Marinade=?,Ad=?,Spicy=?,Cut=?,Amount=?,Total=? WHERE cNumber=?";
		$stmt = $db_link -> prepare($sql_query);
		$stmt -> bind_param("sssssssssssssssi", $_POST["Name"], $_POST["Phone"], $_POST["Takeway"], $_POST["Date"], $_POST["Time"], $_POST["Address"], $_POST["Mail"], $_POST["Meals"], $_POST["Size"], $_POST["Marinade"], $_POST["Ad"], $_POST["Spicy"], $_POST["Cut"], $_POST["Amount"],$_POST["Total"],$_POST["cNumber"]);
		$stmt -> execute();
		$stmt -> close();
		$db_link -> close();
		//重新導向回到主畫面
		header("Location: data.php");
	}
	$sql_select = "SELECT cNumber, Name, Phone, Takeway, Date, Time, Address, Mail, Meals,Size,Marinade,Ad,Spicy,Cut,Amount,Total FROM list WHERE cNumber = ?";
	$stmt = $db_link -> prepare($sql_select);
	$stmt -> bind_param("i", $_GET["id"]);
	$stmt -> execute();
	$stmt -> bind_result($cNumber,$Name, $Phone, $Takeway, $Date, $Time, $Address, $Mail, $Meals, $Size, $Marinade, $Ad, $Spicy, $Cut, $Amount,$Total);
	$stmt -> fetch();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>龍品訂單管理系統</title>
</head>
<body>
<h1 align="center">龍品訂單管理系統 - 修改資料</h1>
<p align="center"><a href="data.php">回主畫面</a></p>
<form action="" method="post" name="formFix" id="formFix">
  <table border="1" align="center" cellpadding="4">
    <tr>
      <th>欄位</th><th>資料</th>
    </tr>
    <tr>
      <td>姓名</td><td><input type="text" name="Name" id="Name" value="<?php echo $Name;?>"></td>
    </tr>
    <tr>
      <td>電話</td><td>
      <input type="tel" pattern="(\d{4}-\d{6})"  title="例:0987-654321" name="Phone" id="Phone" value="<?php echo $Phone;?>"></td>
    </tr>
    <tr>
      <td>取餐方式</td><td>
          <input type="radio" onclick="delivery()" name="Takeway"  value="外送" <?php if($Takeway=="外送") echo "checked";?>> 外送
	      <input type="radio" onclick="takeout()" name="Takeway" value="外帶" <?php if($Takeway=="外帶") echo "checked"?>>外帶</td>
    </tr>
    <tr>
      <td>取餐日期</td><td><input type="text" name="Date" id="Date" value="<?php echo $Date;?>"></td>
    </tr>
    <tr>
      <td>取餐時間</td><td><input type="text" name="Time" id="Time" value="<?php echo $Time;?>"></td>
    </tr>
    <tr>
      <td>外送地址</td><td><input type="text" name="Address" id="Address" value="<?php echo $Address;?>"></td>
    <tr>
      <td>電子郵件</td><td><input type="text" name="Mail" id="Mail" value="<?php echo$Mail;?>"></td>
    </tr>
    <tr>
      <td>餐點名稱</td><td><input type="text" name="Meals" id="Meals" value="<?php echo $Meals;?>"></td>
    </tr>
    <tr>
      <td>飯量</td><td><input type="text" name="Size" id="Size" value="<?php echo $Size;?>"></td>
    </tr>
    <tr>
      <td>滷汁</td><td><input type="text" name="Marinade" id="Marinade" value="<?php echo $Marinade;?>"></td>
    </tr>
    <tr>
      <td>加料</td><td><input type="text" name="Ad" id="Ad" value="<?php echo $Ad;?>"></td>
    </tr>
    <tr>
      <td>加辣</td><td><input type="text" name="Spicy" id="Spicy" value="<?php echo $Spicy;?>"></td>
    </tr>
    <tr>
      <td>是否要切</td><td><input type="text" name="Cut" id="Cut" value="<?php echo $Cut?>"></td>
    </tr>
    <tr>
      <td>數量</td><td><input type="text" name="Amount" id="Amount" value="<?php echo $Amount;?>"></td>
    </tr>
    <tr>
      <td>總金額</td><td><input type="text" name="Total" id="Total" value="<?php echo $Total;?>"></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
      <input name="cNumber" type="hidden" value="<?php echo $cNumber;?>">
      <input name="action" type="hidden" value="update">
      <input type="submit" name="button" id="button" value="更新資料">
      <input type="reset" name="button2" id="button2" value="重新填寫">
      </td>
    </tr>
  </table>
</form>
</body>
</html>
<?php 
	$stmt -> close();
	$db_link -> close();
?>