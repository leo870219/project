<?php
$db_host = "us-cdbr-iron-east-04.cleardb.net";
$db_username = "b188a9e70e9697";
$db_password = "18c15834";
$db_name = "heroku_dedfb3243e930ab";
$db_link = @new mysqli($db_host, $db_username, $db_password, $db_name);
if ($db_link->connect_error != "") {
	echo "資料庫連結失敗！";
} else {
	$db_link->query("SET NAMES 'utf8'");
}
