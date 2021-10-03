<?php

include("header.php");


echo'<div class="container-fluid pb-3">';

echo'<form action="visitor_search_Data.php" method="POST">';

echo'<div class="form-group " style="width:500px; float:right;">';
echo'<div class="input-group" style="">';
echo'<input id="1" class="form-control" type="text" name="search_data" placeholder="Search..." required/ >';
echo'<span class="input-group-btn">';
echo'<button class="btn btn-dark" type="submit" name="submit">';
echo'<i class="glyphicon glyphicon-search" aria-hidden="true"></i> Search';
echo'</button>';
echo'</span>';
echo'</div>';
echo'</div>';
echo'</form>';


echo'<form action="visitor_delete.php" method="POST" enctype="multipart/form-data">';




echo '<h1 class=" text-muted mt-5 mb-5 display-4" style=""><dd> Visitor Record</dd></h1>';


 echo '<table class="table table-hover shadow bg-dark text-light table-responsive pb-4">';
 echo '<thead>';
 echo   '<tr class="text-center  text-light bg-dark">';
 echo'<button type ="submit" value="delete" name="delete" class="mt-2 mb-2 btn btn-danger btn-md" ">Delete</button> ';
  echo'<a class="btn btn-dark" href="vistor.php" role="button mt-3 mb-3" style="margin-left:30px;">Back To Home</a>';

 echo '<th></th>';
 echo     '<th scope="col text-dark">S.NO</th>';
 echo     '<th scope="col">First Name</th>';
 echo     '<th scope="col">Last Name</th>';
 echo     '<th scope="col">Mobile no</th>';
 echo     '<th scope="col">Temperature</th>';
 echo     '<th scope="col">Remarks</th>';
 echo     '<th scope="col">Visitor Type</th>';
 
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


      
  include("Config.php");

  $my =  "SELECT * from visitor_data";
  $queryRun = mysqli_query($link,$my);
  $no =1;

  while($row=mysqli_fetch_array($queryRun)){

    //$id = $row['id'];
      
      echo '<tbody>'; 
     
    echo  '<tr class="text-light">';

             echo "<td><input type='checkbox' class='checkbox' name ='chk[]' value='".$row['visitor_id']."'</td>";
             echo  '<td>'.$no.'</td>';
	           echo  '<td>'.$row['first_name'].'</td>';
	           echo  '<td>'.$row['last_name'].'</td>';
             echo  '<td>'.$row['mobile'].'</td>';
             echo  '<td>'.$row['in_temperature'].'</td>';
              echo  '<td>'.$row['remarks'].'</td>';
               echo  '<td>'.$row['visitor_type'].'</td>';
            
             
             
             
             
             
             
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