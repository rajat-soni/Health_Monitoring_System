<?php

include'../Config.php';

if(isset($_GET['id'])){
    
    $runQuery = mysqli_query($link, " SELECT * from new_state where new_country_id = '".$_GET['id']."'" );

	if($ro = mysqli_num_rows($runQuery)){

		echo'<option value="">Select State Name</option>';

		while($row = mysqli_fetch_array($runQuery)){
			
         echo '<option value="'.$row['new_state_id'].'">'.$row['new_state_name'].'</option>';
         //print_r($row['employee_name']);
			//die;

		}

    }else{

		echo'<option>Select country First</option>';
	}

	
} elseif(isset($_GET['Id'])){


	$run= " SELECT * from new_city where new_state_id = '".$_GET['Id']."'";

	$query = mysqli_query($link, $run);

	if($ro= mysqli_num_rows($query)){

		echo'<option value="">Select City Name</option>';

		while($row= mysqli_fetch_array($query)){

         echo '<option value="'.$row['new_city_id'].'">'.$row['new_city_name'].'</option>';
		}

	}else{

		echo'<option> Select State Name first</option>';
	}




}elseif(isset($_GET['location_id'])){


	$runQuery= " SELECT * from new_location where new_city_id = '".$_GET['location_id']."'";


	$query = mysqli_query($link, $runQuery);

	if($ro= mysqli_num_rows($query)){

		echo'<option value="">Select Location Name</option>';

		while($row= mysqli_fetch_array($query)){

         echo '<option value="'.$row['new_location_id'].'">'.$row['new_location_name'].'</option>';
		}

	}else{

		echo'<option> Select City Name first</option>';
	}



}elseif(isset($_GET['department_id'])){


	$runquery= " SELECT * from new_department where new_location_id = '".$_GET['department_id']."'";


	$depQuery = mysqli_query($link, $runquery);

	if($ro= mysqli_num_rows($depQuery)){

		echo'<option value="">Select Department Name</option>';

		while($row= mysqli_fetch_array($depQuery)){

         echo '<option value="'.$row['new_department_id'].'">'.$row['new_department_name'].'</option>';
		}

	}else{

		echo'<option> Select Location Name first</option>';
	}



}elseif(isset($_GET['employee_id'])){


	$runquery= " SELECT * from new_employee where new_department_id = '".$_GET['employee_id']."'";


	$empQuery = mysqli_query($link, $runquery);

	if($ro= mysqli_num_rows($empQuery)){

		echo'<option value="">Select Employee Name</option>';

		while($row= mysqli_fetch_array($empQuery)){

         echo '<option value="'.$row['new_employee_id'].'">'.$row['new_employee_name'].'</option>';
		}

	}else{

		echo'<option> Select department Name first</option>';
	}


}elseif(isset($_GET['Empid'])){


	$runquery= " SELECT * from new_employee_name where new_employee_id = '".$_GET['Empid']."'";


	$emp_id_Query = mysqli_query($link, $runquery);

	if($ro= mysqli_num_rows($emp_id_Query)){

		echo'<option value="">Select Employee_Name_Id</option>';

		while($row= mysqli_fetch_array($emp_id_Query)){

         echo '<option value="'.$row['new_emp_id'].'">'.$row['new_employee_name_id'].'</option>';
		}

	}else{

		echo'<option> Select Employee Name first</option>';
	}
}

?>