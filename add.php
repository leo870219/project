<?php 
if(isset($_POST["action"])&&($_POST["action"]=="add")){
	include("connMysqlObj.php");
  $sql_query = "INSERT INTO list (Name,Phone,Takeway,Date,Time,Address,Mail,Meals,Size,Marinade,Ad,Spicy,Cut,Amount,Total)VALUES (?, ?, ?, ? ,? ,?, ?, ?, ? ,? ,?,?,?,?,?)";
	$stmt = $db_link -> prepare($sql_query);
	$stmt -> bind_param("sssssssssssssss", $_POST["Name"], $_POST["Phone"], $_POST["Takeway"], $_POST["Date"], $_POST["Time"], $_POST["Address"], $_POST["Mail"], $_POST["Meals"], $_POST["Size"], $_POST["Marinade"], $_POST["Ad"], $_POST["Spicy"], $_POST["Cut"], $_POST["Amount"], $_POST["Total"]);
	$stmt -> execute();
	$stmt -> close();
	$db_link -> close();
	//重新導向回到主畫面
	header("Location: data.php");
}	
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>龍品訂單管理系統</title>
</head>
<body>
<h1 align="center">龍品訂單管理系統 - 新增資料</h1>
<p align="center"><a href="data.php">回主畫面</a></p>
<form action="" method="post" name="formAdd" id="formAdd">
  <table border="1" align="center" cellpadding="4">
    <tr>
      <th>欄位</th><th>資料</th>
    </tr>
    <tr>
      <td>姓名</td><td><input type="text" name="Name" id="Name"></td>
    </tr>
    <tr>
      <td>電話</td><td>
      <input type="tel" pattern="(\d{4}-\d{6})"  title="例:0987-654321" name="Phone" id="Phone">
      </td>
    </tr>
    <tr>
      <td>取餐方式</td><td>
          <input type="radio"  name="Takeway"  value="delivery">外送
	      <input type="radio"  name="Takeway" value="takeout">外帶</td>
    </tr>
    <tr>
      <td>取餐日期</td><td><input type="text" name="Date" id="Date"></td>
    </tr>
    <tr>
      <td>取餐時間</td><td><input type="text" name="Time" id="Time"></td>
    </tr>
    <tr>
      <td>外送地址</td><td><input type="text" name="Address" id="Address"></td>
    </tr>
    <tr>
      <td>電子郵件</td><td><input type="text" name="Mail" id="Mail"></td>
    </tr>
    <tr>
      <td>餐點名稱</td><td><input type="text" name="Meals" id="Meals"></td>
    </tr>
    <tr>
      <td>飯量</td><td><input type="text" name="Size" id="Size"></td>
    </tr>
    <tr>
      <td>滷汁</td><td><input type="text" name="Marinade" id="Marinade"></td>
    </tr>
    <tr>
      <td>加料</td><td><input type="text" name="Ad" id="Ad"></td>
    </tr>
    <tr>
      <td>加辣</td><td><input type="text" name="Spicy" id="Spicy"></td>
    </tr>
    <tr>
      <td>是否要切</td><td><input type="text" name="Cut" id="Cut"></td>
    </tr>
    <tr>
      <td>數量</td><td><input type="text" name="Amount" id="Amount"></td>
    </tr>
    <tr>
      <td>總金額</td><td><input type="text" name="Total" id="Total"></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
      <input name="action" type="hidden" value="add">
      <input type="submit" name="button" id="button" value="新增資料">
      <input type="reset" name="button2" id="button2" value="重新填寫">
      </td>
    </tr>
  </table>
</form>
</body>
</html>