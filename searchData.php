
<?php
include('header.php');

// error_reporting(0);
echo '<h1 class=" text-muted  mb-5 mt-5 display-4" style=""><dd>Employee Record</dd></h1>';


 echo '<table class="table table-hover shadow bg-dark table-responsive pb-4">';
 echo '<thead>';
 echo   '<tr class="text-center text-light">';
 echo'<button type ="submit" value="Delete" name="delete" class="mt-2 mb-2 btn btn-danger btn-md" style="float:right; ">Delete</button> ';
 echo'<a class="btn btn-dark" href="ReadData.php" role="button" style="margin-right:20px; float:right; margin-top: 10px;">Back To Home</a>';

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
      include( 'Config.php');

      if(isset($_POST['submit'])){

        $search = $_POST['search'];
         //print_r($search); die;

  // $my =  "SELECT * FROM `all_data` WHERE country_name like '%".$_POST['search']."%' OR  state_name like '%".$_POST['search']."%' OR  city_Name like '%".$_POST['search']."%' OR  department_name like '%".$_POST['search']."%' OR  in_temperature like '%".$_POST['search']."%' OR  employee_name like '%".$_POST['search']."%'OR  status like '%".$_POST['search']."%' OR  status1 like '%".$_POST['search']."%' OR  status2 like '%".$_POST['search']."%' OR  status3 like '%".$_POST['search']."%' OR  status4 like '%".$_POST['search']."%' OR  status5 like '%".$_POST['search']."%' OR id like '%".$_POST['search']."%' OR location_name like '%".$_POST['search']."%' ";
 // print_r($my); die;
        $my = "SELECT b.city_Name,c.country_name, d.state_name, h.location_name, e.department_name, f.employee_name, a.status,a.status1, a.status2, a.status3, a.status4, a.status5,a.in_temperature ,a.id from 
         `all_data` as a left Join `city` as b on a.city_Name = b.city_id 
          Left join `country` as c on a.country_name = c.country_id
          left join `state` as d on a.state_name = d.state_id 
          Left join `department` as e on a.department_name = e.department_id 
          Left Join `location` as h on a.location_name = h.location_id 
          Left Join `employee_name` as f on a.employee_name = f.employee_id WHERE c.country_name like '%".$_POST['search']."%' OR  d.state_name like '%".$_POST['search']."%' OR  b.city_Name like '%".$_POST['search']."%' OR  e.department_name like '%".$_POST['search']."%' OR  a.in_temperature like '%".$_POST['search']."%' OR  f.employee_name like '%".$_POST['search']."%'OR  a.status like '%".$_POST['search']."%' OR  a.status1 like '%".$_POST['search']."%' OR  a.status2 like '%".$_POST['search']."%' OR  a.status3 like '%".$_POST['search']."%' OR  a.status4 like '%".$_POST['search']."%' OR  a.status5 like '%".$_POST['search']."%' OR a.id like '%".$_POST['search']."%' OR h.location_name like '%".$_POST['search']."%' ";
  $run = mysqli_query($link,$my);
 
  $no =1;
 if($run == True){
  while($row=mysqli_fetch_array($run)){

    //$id = $row['id'];
      
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
        }else{

          echo '<h5 class ="alert alert-info text-center" style ="align:center;">Record Is Not Available !</h5>';
        }
          
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