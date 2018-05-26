<?php
$dsn = "mysql:host=localhost;dbname=1";
$db = new PDO($dsn, "root","");
$rs =$db->query("SELECT * FROM users WHERE account = '$_POST[name]' and password = '$_POST[password]'  ");
$result = $rs ->fetch();
if ($result){
echo"正確";print_r($_POST);}
else
	echo"錯誤";
?>