<?php

 include("Config.php");
// echo "<pre>";
// print_r($_POST);
// exit();

 if(isset($_POST['country_name'])){
 
    $country_name = $_POST['country_name'];
    $state_name = $_POST['state_name'];
    $city_name = $_POST['city_Name'];
    $location_name = $_POST['location_name'];
    $department_name = $_POST['department_name'];
    $employee_name = $_POST['employee_name'];
    $employee_id_name = $_POST['employee_name_id'];
    $in_temperature = $_POST['in_temperature'];
    $status = $_POST["status"];
    $status1 = $_POST["status1"];
    $status2 = $_POST["status2"];
    $status3 = $_POST["status3"];
    $status4 = $_POST["status4"];
       $status5 = $_POST["status5"];


    $ruN = " INSERT INTO `all_data`(`country_name`, `state_name`, `city_Name`, `location_name`, `department_name`, `employee_name`, `employee_name_id`,`in_temperature`,`status`,`status1`,`status2`,`status3`,`status4`, `status5`) VALUES ('$country_name','$state_name','$city_name','$location_name','$department_name','$employee_name','$employee_id_name','$in_temperature','$status','$status1','$status2','$status3','$status4', '$status5')";
   

 $queryRun = mysqli_query($link,$ruN);

 if($queryRun){

    echo"<script>Alert(Data is Submitted)</script>";

 	header("location:ReadData.php");
 }
 else{

 	echo "data is not submitting";
 }

 
}




?>


