<?php
include("header.php");

include'Config.php';

if(isset($_GET['id'])){
    
    $runQuery = mysqli_query($link, " SELECT * from state where country_id = '".$_GET['id']."'" );

	if($ro = mysqli_num_rows($runQuery)){

		echo'<option> Select state Name first</option>';
		while($row = mysqli_fetch_array($runQuery)){
			
         echo '<option value="'.$row['state_id'].'">'.$row['state_name'].'</option>';
         //print_r($row['employee_name']);
			//die;

		}

    }else{

		echo'<option>Select country First</option>';
	}

	
} elseif(isset($_GET['Id'])){


	$run= " SELECT * from city where state_id = '".$_GET['Id']."'";

	$query = mysqli_query($link, $run);

	if($ro= mysqli_num_rows($query)){

		echo'<option> Select City Name first</option>';

		while($row= mysqli_fetch_array($query)){
			

         echo '<option value="'.$row['city_id'].'">'.$row['city_Name'].'</option>';
		}

	}else{

		echo'<option> Select State Name first</option>';
	}




}elseif(isset($_GET['location_id'])){


	$runQuery= " SELECT * from location where city_id = '".$_GET['location_id']."'";


echo'<option> Select location Name first</option>';
	$query = mysqli_query($link, $runQuery);

	if($ro= mysqli_num_rows($query)){

   

		while($row= mysqli_fetch_array($query)){
			
         echo '<option value="'.$row['location_id'].'">'.$row['location_name'].'</option>';
		}

	}else{

		echo'<option> Select City Name first</option>';
	}



}elseif(isset($_GET['department_id'])){


	$runquery= " SELECT * from department where location_id = '".$_GET['department_id']."'";


	$depQuery = mysqli_query($link, $runquery);

	if($ro= mysqli_num_rows($depQuery)){

		echo'<option> Select department Name first</option>';

		while($row= mysqli_fetch_array($depQuery)){

         echo '<option value="'.$row['department_id'].'">'.$row['department_name'].'</option>';
		}

	}else{

		echo'<option> Select Location Name first</option>';
	}



}elseif(isset($_GET['employee_id'])){


	$runquery= " SELECT * from employee_name where department_id = '".$_GET['employee_id']."'";


	$empQuery = mysqli_query($link, $runquery);

	if($ro= mysqli_num_rows($empQuery)){

		echo'<option> Select employee Name first</option>';

		while($row= mysqli_fetch_array($empQuery)){

         echo '<option value="'.$row['employee_id'].'">'.$row['employee_name'].'</option>';
		}

	}else{

		echo'<option> Select department Name first</option>';
	}


}elseif(isset($_GET['Empid'])){


	$runquery= " SELECT * from employee where employee_id = '".$_GET['Empid']."'";


	$emp_id_Query = mysqli_query($link, $runquery);

	if($ro= mysqli_num_rows($emp_id_Query)){

		

		while($row= mysqli_fetch_array($emp_id_Query)){

         echo '<option value="'.$row['emp_id'].'">'.$row['employee_name_id'].'</option>';
		}

	}else{

		echo'<option> Select Employee Name first</option>';
	}
}

?>