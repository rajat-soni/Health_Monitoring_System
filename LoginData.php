<?php

       //  echo'<pre>';
       // print_r($_POST);
       // die;
    session_start();
    include ('Config.php');
    $table = 'login_form';

      if(isset($_POST['submit'])){
  
        $UserName = $_POST['user_name'];
        $Password = $_POST['Password'];
        $role = $_POST['Role'];
        //print_r($role); die;
        

          $run_Query  = " SELECT * FROM `$table` WHERE `user_name` = '$UserName' AND  `Password` = '$Password' AND `Role` = '$role'";
          //print_r($run); die;
        
           
            $ru = mysqli_query($link, $run_Query);
            $run_Row = mysqli_num_rows($ru);
            $FecthQuery=mysqli_fetch_array($ru);
            $user_name = $FecthQuery['user_name'];
            $password  = $FecthQuery['Password'];
            $row=$FecthQuery['Role'];
            $row = $FecthQuery['Role'];
            //echo $role; die;

            if($row == 'Admin'){
               $_SESSION['user_name'] = $FecthQuery['user_name'];
                header("location:Employee_details.php");
                exit;
            }elseif($role == "New Employee"){
              header("location:New_user/New_Employee_details.php");
              exit;
              }else{
                $_SESSION['helo']="<h5  class='text-center text-info'>Your User name And Password Not match !</h5>";
                  header("Location:LoginPage.php");
              
      
              }
  
      }


?>

