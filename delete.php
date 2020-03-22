<?php
include("connMysqlObj.php");
if (isset($_POST["action"]) && ($_POST["action"] == "delete")) {
  $sql_query = "DELETE FROM order WHERE cNumber=?";
  $stmt = $db_link->prepare($sql_query);
  $stmt->bind_param("i", $_POST["cNumber"]);
  $stmt->execute();
  $stmt->close();
  $db_link->close();
  //重新導向回到主畫面
  header("Location: data.php");
}
$sql_select = "SELECT cNumber, Name, Phone, Takeway, Date, Time, Address, Mail, Meals,Size,Marinade,Ad,Spicy,Cut,Amount,Total FROM order WHERE cNumber = ?";
$stmt = $db_link->prepare($sql_select);
$stmt->bind_param("i", $_GET["id"]);
$stmt->execute();
$stmt->bind_result($cNumber, $Name, $Phone, $Takeway, $Date, $Time, $Address, $Mail, $Meals, $Size, $Marinade, $Ad, $Spicy, $Cut, $Amount, $Total);
$stmt->fetch();
?>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>龍品訂單管理系統</title>
</head>

<body>
  <h1 align="center">龍品訂單管理系統 - 刪除資料</h1>
  <p align="center"><a href="data.php">回主畫面</a></p>
  <form action="" method="post" name="formDel" id="formDel">
    <table border="1" align="center" cellpadding="4">
      <tr>
        <th>欄位</th>
        <th>資料</th>
      </tr>
      <tr>
        <td>姓名</td>
        <td><?php echo $Name; ?></td>
      </tr>
      <tr>
        <td>電話</td>
        <td><?php echo $Phone; ?></td>
      </tr>
      <tr>
        <td>取餐方式</td>
        <td>
          <?php
          if ($Takeway == "delivery") {
            echo "外送";
          } else {
            echo "外帶";
          }; ?></td>
      </tr>
      <tr>
        <td>取餐日期</td>
        <td><?php echo $Date; ?></td>
      </tr>
      <tr>
        <td>取餐時間</td>
        <td><?php echo $Time; ?></td>
      </tr>
      <tr>
        <td>外送地址</td>
        <td><?php echo $Address; ?></td>
      </tr>
      <tr>
        <td>電子郵件</td>
        <td><?php echo $Mail; ?></td>
      </tr>
      <tr>
        <td>餐點名稱</td>
        <td><?php echo $Meals; ?></td>
      </tr>
      <tr>
        <td>飯量</td>
        <td><?php echo $Size; ?></td>
      </tr>
      <tr>
        <td>滷汁</td>
        <td><?php echo $Marinade; ?></td>
      </tr>
      <tr>
        <td>加料</td>
        <td><?php echo $Ad; ?></td>
      </tr>
      <tr>
        <td>加辣</td>
        <td><?php echo $Spicy; ?></td>
      </tr>
      <tr>
        <td>是否要切</td>
        <td><?php echo $Cut; ?></td>
      </tr>
      <tr>
        <td>數量</td>
        <td><?php echo $Amount; ?></td>
      </tr>
      <tr>
        <td>總金額</td>
        <td><?php echo $Total; ?></td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <input name="cNumber" type="hidden" value="<?php echo $cNumber; ?>">
          <input name="action" type="hidden" value="delete">
          <input type="submit" name="button" id="button" value="確定刪除這筆資料嗎？">
        </td>
      </tr>
    </table>
  </form>
</body>

</html>
<?php
$stmt->close();
$db_link->close();
?>