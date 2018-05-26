<?php

$dsn = "mysql:host=192.168.32.90;dbname=dbname01";
$db = new PDO($dsn, "dbname01","dbname@pwd");
$rs =$db->query("SELECT * FROM users WHERE account = '$_POST[name]' and password = '$_POST[password]'  ");
$result = $rs ->fetch();
if ($result){
echo"正確";print_r($_POST);}
else
	echo"錯誤";
?>