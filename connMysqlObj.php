<?php
$db_host = "us-cdbr-iron-east-04.cleardb.net";
$db_username = "b586927e7e8dad";
$db_password = "624a5963";
$db_name = "heroku_d483171ce082cb3";
$db_link = @new mysqli($db_host, $db_username, $db_password, $db_name);
if ($db_link->connect_error != "") {
	echo "資料庫連結失敗！";
} else {
	$db_link->query("SET NAMES 'utf8'");
}
