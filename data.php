<?php 
	header("Content-Type: text/html; charset=utf-8");
	include("connMysqlObj.php");
	$seldb = @mysqli_select_db($db_link, "mydb");
	if (!$seldb) die("資料庫選擇失敗！");
	$sql_query = "SELECT * FROM list";
	$result = mysqli_query($db_link, $sql_query);
	$total_records = mysqli_num_rows($result);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>龍品訂單管理系統</title>
</head>
<body>
<h1 align="center">龍品訂單管理系統</h1>
<p align="center">目前資料筆數：<?php echo $total_records;?>，<a href="add.php">新增訂單</a>。</p>
<table border="1" align="center">
  <!-- 表格表頭 -->
  <tr>
  	<th>訂單編號</th>
    <th>姓名</th>
    <th>電話</th>
    <th>取餐方式</th>
    <th>取餐日期</th>
    <th>取餐時間</th>
    <th>外送地址</th>
    <th>電子郵件</th>
	<th>餐點名稱</th>
	<th>飯量</th>
	<th>滷汁</th>
	<th>加料</th>
	<th>加辣</th>
	<th>是否要切</th>
	<th>數量</th>
	<th>總金額</th>
  </tr>
  <!-- 資料內容 -->
<?php
	while($row_result=mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>".$row_result["cNumber"]."</td>";
		echo "<td>".$row_result["Name"]."</td>";
		echo "<td>".$row_result["Phone"]."</td>";
		echo "<td>".$row_result["Takeway"]."</td>";
		echo "<td>".$row_result["Date"]."</td>";
		echo "<td>".$row_result["Time"]."</td>";
		echo "<td>".$row_result["Address"]."</td>";
		echo "<td>".$row_result["Mail"]."</td>";
		echo "<td>".$row_result["Meals"]."</td>";
		echo "<td>".$row_result["Size"]."</td>";
		echo "<td>".$row_result["Marinade"]."</td>";
		echo "<td>".$row_result["Ad"]."</td>";
		echo "<td>".$row_result["Spicy"]."</td>";
		echo "<td>".$row_result["Cut"]."</td>";
		echo "<td>".$row_result["Amount"]."</td>";
		echo "<td>".$row_result["Total"]."</td>";
		echo "<td><a href='update.php?id=".$row_result["cNumber"]."'>修改</a> ";
		echo "<a href='delete.php?id=".$row_result["cNumber"]."'>刪除</a></td>";
		echo "</tr>";
	}
?>
</table>
</body>
</html>