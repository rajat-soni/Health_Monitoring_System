<?php
include("Config.php");

?>
<?php

if(isset($_GET['id'])){
    
    $runQuery = mysqli_query($link, " SELECT * from state where country_id = '".$_GET['id']."'" );

	if($ro = mysqli_num_rows($runQuery)){

		
		while($row = mysqli_fetch_array($runQuery)){
			
         echo '<option value="'.$row['state_id'].'">'.$row['state_name'].'</option>';
         //print_r($row['employee_name']);
			//die;

		}
	
    }


	$run= " SELECT * from city where country_C_id = '".$_GET['Id']."'";

	$query = mysqli_query($link, $run);

	if($ro= mysqli_num_rows($query)){

		

		while($row= mysqli_fetch_array($query)){
			

         echo '<option value="'.$row['city_id'].'">'.$row['city_name'].'</option>';
		}

	}else{

		echo'<option> Select State Name first</option>';
	}

}


?>