<?php

 include("../Config.php");
// echo "<pre>";
// print_r($_POST);
// exit();

 if(isset($_POST['submit'])){
 
    $country_name = $_POST['new_country_name'];
    $state_name = $_POST['new_state_name'];
    $city_name = $_POST['new_city_name'];
    $location_name = $_POST['new_location_name'];
    $department_name = $_POST['new_department_name'];
    $employee_name = $_POST['new_employee_name'];
    $employee_id_name = $_POST['new_employee_name_id'];
    
    $status = $_POST["status"];
    $status1 = $_POST["status1"];
    $status2 = $_POST["status2"];
    $status3 = $_POST["status3"];
    $status4 = $_POST["status4"];
    $status5 = $_POST["status5"];
    $in_temperature = $_POST['new_temperature_name'];


    $ruN = " INSERT INTO `new_employee_data`(`new_country_name`, `new_state_name`, `new_city_name`, `new_location_name`, `new_department_name`, `new_employee_name`, `new_employee_name_id`,`status`,`status1`,`status2`,`status3`,`status4`, `status5`,`new_temperature_name`) VALUES ('$country_name','$state_name','$city_name','$location_name','$department_name','$employee_name','$employee_id_name','$status','$status1','$status2','$status3','$status4', '$status5','$in_temperature')";
   

 $queryRun = mysqli_query($link,$ruN);

 if($queryRun){

 	header("location:New_ReadData.php");
 }
 else{

 	echo "data is not submitting";
 }

 
}




?>


