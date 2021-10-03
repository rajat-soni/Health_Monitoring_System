 <?php

 include('Config.php');

 // echo'<pre>';
 // print_r($_POST);
 // die;

 if(isset($_POST['submit'])){
 
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $mobile= $_POST['mobile'];
    $in_temperatue = $_POST['in_temperature'];
    $remarks = $_POST['remarks'];
    $visitor_type = $_POST['visitor_type'];

    $queryRun = " INSERT INTO `visitor_data`(`first_name`, `last_name`, `mobile`, `in_temperature`, `remarks`, `visitor_type`) VALUES ('$first_name', '$last_name' ,'$mobile','$in_temperatue', '$remarks', '$visitor_type')";
   

 $queryRun = mysqli_query($link,$queryRun);

 if($queryRun){

 	header("location:visitorReaddata.php");
 }
 else{

 	echo "data is not submitting";
 }

 
}
