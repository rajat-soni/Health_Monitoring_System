<?php
include'../Config.php';
include'header.php';

 //error_reporting();

if(isset($_POST['delete'])){



    if(empty($_REQUEST["chk"]) || $_REQUEST["chk"] == 0){


	           //session_start();
	           $_SESSION['error'] = '<div class="text-center mark mb-2 "> <dd><h4>Please select one first !</h4></dd></div>';
               header("location:ReadData.php");

    }
    else{
                $result = $_REQUEST["chk"];
                $Result= implode(",",$result); 
   
                $table = 'new_employee_data';
              

                $query=" DELETE FROM $table WHERE `new_employee_data_id` IN (".$Result.")";  
              

           
                 $r=mysqli_query($link,$query) or die(mysqli_error());

            if($r)
                   {

	                      //session_start();
	                      $_SESSION['delete'] = '<h3><div class="text-center mark mb-2  "> Data deleted successfully</div></h3';
                          header("location:new_ReadData.php");

                    }

        }
}

?>