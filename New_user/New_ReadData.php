<?php

include("header.php");


echo'<div class="container-fluid pb-3">';

// echo "<h3 class=' pt-3 pb-3 text-center bg-dark text-light mt-2 display-5 font-italic'><dd><span style='color:blue;'>Welcome</span> to <span style='color:yellow;'>Read </span><span style='color:red;'>Part</span></dd></h3><hr>";

echo'<form action="delete.php" method="POST" enctype="multipart/form-data">';




echo '<h1 class=" text-muted mt-3 mb-4 mt-4 display-4" style=""><dd> New Employee Record</dd></h1>';


 echo '<table class="table table-hover shadow bg-dark table-responsive pb-4">';
 echo '<thead>';
 echo   '<tr class="text-center text-light">';
 echo'<button type ="submit" value="delete" name="delete" class="mt-2 mb-2 btn btn-danger btn-md">Delete</button> ';
 echo'<a class="btn btn-dark" href="New_Employee_details.php" role="button mt-3 mb-3" style="margin-left:20px;">Back To Home</a>';

 echo '<th></th>';
 echo     '<th scope="col text-light">S.NO</th>';
 echo     '<th scope="col">Country</th>';
 echo     '<th scope="col">State</th>';
 echo     '<th scope="col">City</th>';
 echo     '<th scope="col">Location</th>';
 echo     '<th scope="col">Department</th>';
 echo     '<th scope="col">Employee Name</th>';
 echo     '<th scope="col">Emaployee Id</th>';
 
 echo     '<th scope="col">Is Your Area in Read Zone</th>';
 echo     '<th scope="col">Are You Having Covid-19 Symptoms</th>';
 echo     '<th scope="col">Fever</th>';
 echo     '<th scope="col">Cough</th>';
 echo     '<th scope="col">Lung Disease</th>';
 echo     '<th scope="col">Heart Disease</th>';
 echo     '<th scope="col">In temperature</th>';

 echo     '</tr>';
 echo     '</thead>';


 //---------  Delete error showing session --------------//

//   if(isset($_SESSION['error'])){
//    echo $_SESSION['error'];
//    unset($_SESSION['error']);

//   }
//   if(isset($_SESSION['delete'])){
//    echo $_SESSION['delete'];
//    unset($_SESSION['delete']);

//   }
  
// //---------End session--------- // 

  
      
//       if(isset($_SESSION['he'])){
//         echo $_SESSION['he'];
//         unset($_SESSION['he']);
//       }
//       if(isset($_SESSION['hel'])){
//         echo $_SESSION['hel'];
//         unset($_SESSION['hel']);
//       }
      
// //--------------  signup session--------- //                     

//        if(isset($_SESSION['signup'])){
//         echo $_SESSION['signup'];
//         unset($_SESSION['signup']);
                       //}


      
  include("../Config.php");

  $my =  " SELECT b.new_city_Name,c.new_country_name, d.new_state_name, h.new_location_name, e.new_department_name, f.new_employee_name, g.new_employee_name_id, a.new_employee_data_id, a.status, a.status1, a.status2, a.status3, a.status4, a.status5,a.new_temperature_name from `new_employee_data` as a left Join `new_city` as b on a.new_city_Name = b.new_city_id Left join `new_country_name` as c on a.new_country_name = c.new_country_id left join `new_state` as d on a.new_state_name = d.new_state_id Left join `new_department` as e on a.new_department_name = e.new_department_id Left Join `new_location` as h on a.new_location_name = h.new_location_id Left Join `new_employee` as f on a.new_employee_name = f.new_employee_id Left Join `new_employee_name` as g on a.new_employee_name_id = g.new_emp_id ";
  
  $run = mysqli_query($link,$my);
  $no =1;

  while($row=mysqli_fetch_array($run)){

    //$id = $row['id'];
      
      echo '<tbody>'; 
     
    echo  '<tr class="text-light">';

             echo "<td><input type='checkbox' class='checkbox' name ='chk[]' value='".$row['new_employee_data_id']."'</td>";
             echo  '<td>'.$no.'</td>';
	           echo  '<td>'.$row['new_country_name'].'</td>';
	           echo  '<td>'.$row['new_state_name'].'</td>';
             echo  '<td>'.$row['new_city_Name'].'</td>';
             echo  '<td>'.$row['new_location_name'].'</td>';
             echo  '<td>'.$row['new_department_name'].'</td>';
             echo  '<td>'.$row['new_employee_name'].'</td>';
             echo  '<td>'.$row['new_employee_name_id'].'</td>';

             
             echo  '<td>'.$row['status'].'</td>';
             echo  '<td>'.$row['status1'].'</td>';
             echo  '<td>'.$row['status2'].'</td>';
             echo  '<td>'.$row['status3'].'</td>';
             echo  '<td>'.$row['status4'].'</td>';
              echo  '<td>'.$row['status5'].'</td>';
              echo  '<td>'.$row['new_temperature_name'].'</td>';
             
             
             
             
             
             
             $no++;
             echo'</tr>';
           }
          

  
 echo'</tbody>'; 
echo'</table
>'; 
echo'</form>';

?>
</div>
</div>
</div>
</div>
<?php    include 'footer.php';?>