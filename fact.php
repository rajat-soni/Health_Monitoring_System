<?php

$p=1;
$r=1;

for($p = 1; $p<=5; $p++){
	
	echo "<br>";



for($r=1; $r<=5; $r++){

	if($r==($p-1)){	

	echo "#";

}else{

	echo "*";
}

}

}


?>