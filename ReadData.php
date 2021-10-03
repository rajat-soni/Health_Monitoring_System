<?php

require_once('header.php');

  
echo'<div class="container-fluid pb-3">';

echo'<form action="searchData.php" method="POST">';

echo'<div class="form-group " style="width:500px; float:right;">';
echo'<div class="input-group" style="">';
echo'<input id="1" class="form-control" type="text" name="search" placeholder="Search..." required/ >';
echo'<span class="input-group-btn">';
echo'<button class="btn btn-dark" type="submit" name="submit">';
echo'<i class="glyphicon glyphicon-search" aria-hidden="true"></i> Search';
echo'</button>';
echo'</span>';
echo'</div>';
echo'</div>';
echo'</form>';




 //---------  Delete error showing session --------------//

//   if(isset($_SESSION['error'])){
//    echo $_SESSION['error'];
//    unset($_SESSION['error']);

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


      

            // echo  '<td>'.$row['employee_name_id'].'</td>';

// echo "<h3 class=' pt-3 pb-3 text-center bg-dark text-light mt-2 display-5 font-italic'><dd><span style='color:blue;'>Welcome</span> to <span style='color:yellow;'>Read </span><span style='color:red;'>Part</span></dd></h3><hr>";

echo'<form action="delete.php" method="POST">';



         


 if(isset($_SESSION['delete'])){
   echo $_SESSION['delete'];
   unset($_SESSION['delete']);

  }


echo '<h1 class=" text-muted  mb-5 mt-5 display-4" style=""><dd>Employee Record</dd></h1>';


 echo '<table class="table table-hover shadow bg-dark table-responsive pb-4">';
 echo '<thead>';
 echo   '<tr class="text-center text-light">';
 echo'<button type ="submit" value="Delete" name="delete" class="mt-2 mb-2 btn btn-danger btn-md" style="float:right; ">Delete</button> ';
 echo'<a class="btn btn-dark" href="Employee_details.php" role="button" style="margin-right:20px; float:right; margin-top: 10px;">Back To Home</a>';

 echo '<th></th>';
 echo     '<th scope="col text-dark">S.NO</th>';
 echo     '<th scope="col">Country</th>';
 echo     '<th scope="col">State</th>';
 echo     '<th scope="col">City</th>';
 echo     '<th scope="col">Location</th>';
 echo     '<th scope="col">Department</th>';
 echo     '<th scope="col">Employee Name & Id</th>';
 // echo     '<th scope="col">Emaployee Id</th>';
 echo     '<th scope="col">In temperature</th>';
 echo     '<th scope="col">Is Your Area in Read Zone</th>';
 echo     '<th scope="col">Are You Having Covid-19 Symptoms</th>';
 echo     '<th scope="col">Fever</th>';
 echo     '<th scope="col">Cough</th>';
 echo     '<th scope="col">Lung Disease</th>';
 echo     '<th scope="col">Heart Disease</th>';

 echo     '</tr>';
 echo     '</thead>';


 //---------  Delete error showing session --------------//

//   if(isset($_SESSION['error'])){
//    echo $_SESSION['error'];
//    unset($_SESSION['error']);

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


      
 

//   $my =  "SELECT a.country_name,a.state_name,a.city_name,a.location_name, e.department_name, f.employee_name, g.employee_name_id ,a.in_temperature, a.id, a.status, a.status1, a.status2, a.status3, a.status4, a.status5 from `all_data` as a 

// Left join department as  e on a.department_name = e.department_id
// Left Join location as h on a.location_name = h.location_id
// Left Join employee_name as  f on a.employee_name = f.employee_id
// Left Join employee as g on a.employee_name_id = g.employee_id";
 include("Config.php");

 $my ="SELECT b.city_Name,c.country_name, d.state_name, h.location_name, e.department_name, f.employee_name,      a. status, a.status1, a.status2, a.status3, a.status4, a.status5,a.in_temperature ,a.id from 
         `all_data` as a left Join `city` as b on a.city_Name = b.city_id 
          Left join `country` as c on a.country_name = c.country_id
          left join `state` as d on a.state_name = d.state_id 
          Left join `department` as e on a.department_name = e.department_id 
          Left Join `location` as h on a.location_name = h.location_id 
          Left Join `employee_name` as f on a.employee_name = f.employee_id ";

  $run = mysqli_query($link,$my);
  $no =1;

  while($row=mysqli_fetch_array($run)){

  //    $id = $row['id'];
  // print_r($id);
  //    die;
      
    echo '<tbody>'; 
     
    echo  '<tr class="text-light">';

             echo "<td><input type='checkbox' class='checkbox' name ='chk[]' value='".$row['id']."'</td>";
             echo  '<td>'.$no.'</td>';
	           echo  '<td>'.$row['country_name'].'</td>';
	           echo  '<td>'.$row['state_name'].'</td>';
             echo  '<td>'.$row['city_Name'].'</td>';
             echo  '<td>'.$row['location_name'].'</td>';
             echo  '<td>'.$row['department_name'].'</td>';
             echo  '<td>'.$row['employee_name'].'</td>';
            // echo  '<td>'.$row['employee_name_id'].'</td>';

             echo  '<td>'.$row['in_temperature'].'</td>';
             echo  '<td>'.$row['status'].'</td>';
             echo  '<td>'.$row['status1'].'</td>';
             echo  '<td>'.$row['status2'].'</td>';
             echo  '<td>'.$row['status3'].'</td>';
             echo  '<td>'.$row['status4'].'</td>';
              echo  '<td>'.$row['status5'].'</td>';
             
             
             
             
             
             
             $no++;
             echo'</tr>';
           }
          
        
  
    echo'</tbody>'; 
    echo'</table>'; 
echo'</form>';

?>
</div>
</div>
</div>
</div>
<?php    include 'footer.php';?>