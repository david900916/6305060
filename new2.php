<?php
$a=$argv;
$b=(explode(' ',$a[1]));
if(is_numeric($b[0])==true && is_numeric($b[2])==true)
	switch($b[1]){
	case "+":
		echo $b[0]+$b[2];
			break;
	case "-":
		echo $b[0]-$b[2];
			break;
	case "*":
		echo $b[0]*$b[2];
			break;
	case "/":
		echo $b[0]/$b[2];
			break;
	default:
	echo "錯誤"; 
}
?>