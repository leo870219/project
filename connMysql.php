<?php 
	//資料庫主機設定
	$db_host = "localhost";
	$db_username = "root";
	$db_password = "";
	$db_name="mydb";
	//連線伺服器
	$db_link = @mysqli_connect($db_host, $db_username, $db_password,$db_name);
	if (!$db_link) die("資料連結失敗！");
	//設定字元集與編碼
	mysqli_query($db_link, "SET NAMES utf8");
?>

<?php 
if(isset($_POST["action"])&&($_POST["action"]=="update")){
	include("connMysql.php");
	if (!@mysqli_select_db($db_link, "mydb")) die("資料庫選擇失敗！");
	$sql_query = "UPDATE order1 SET Name=?,Phone=?,Takeway=?,Date=?,Time=?,Address=?,Mail=?,Meals=?,Size=?,Marinade=?,Ad=?,Spicy=?,Cut=?,Amount=?";
	$sql_query .= "'".$_POST["Name"]."',";
	$sql_query .= "'".$_POST["Phone"]."',";
	$sql_query .= "'".$_POST["Takeway"]."',";
	$sql_query .= "'".$_POST["Date"]."',";
  $sql_query .= "'".$_POST["Time"]."')";
  $sql_query .= "'".$_POST["Address"]."',";
	$sql_query .= "'".$_POST["Mail"]."',";
	$sql_query .= "'".$_POST["Meals"]."',";
	$sql_query .= "'".$_POST["Size"]."',";
	$sql_query .= "'".$_POST["Marinade"]."',";
  $sql_query .= "'".$_POST["Ad"]."')";
  $sql_query .= "'".$_POST["Spicy"]."',";
	$sql_query .= "'".$_POST["Cut"]."',";
	$sql_query .= "'".$_POST["Amount"]."')";
	mysqli_query($db_link, $sql_query);
	//重新導向回到主畫面
	header("Location: data.php");
}