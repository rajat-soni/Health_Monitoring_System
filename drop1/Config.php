<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'drop1');


$link = mysqli_connect(DB_SERVER, DB_USERNAME , DB_PASSWORD, DB_NAME);

if($link){

	echo"";
}
else{
	echo "Data is not connected";
}
?>