<?php
require_once'header.php';


 //error_reporting(0);
echo '<h1 class=" text-muted  mb-5 mt-5 display-4" style=""><dd>Visitor Record</dd></h1>';


 echo '<table class="table table-hover shadow bg-dark table-responsive pb-4">';
 echo '<thead>';
 echo   '<tr class="text-center text-light">';
 echo'<a class="btn btn-dark" href="visitorReaddata.php" role="button" style="margin-right:20px; float:right;margin-bottom: 10px;">Back To Home</a>';

 echo '<th></th>';
 echo     '<th scope="col text-dark">S.NO</th>';
 echo     '<th scope="col">First Name</th>';
 echo     '<th scope="col">Last Name</th>';
 echo     '<th scope="col">Mobile</th>';
  echo     '<th scope="col">In Temperature</th>';
 echo     '<th scope="col">Remarks</th>';
 echo     '<th scope="col">Employee Type</th>';

 echo     '</tr>';
 echo     '</thead>';

       include('Config.php');

      if(isset($_POST['submit'])){

        // print_r($_POST);
        // die;

        $search = $_POST['search_data'];
         //print_r($search); die;

  $Query = " SELECT * FROM visitor_data WHERE first_name LIKE '%".$_POST['search_data']."%' OR  last_name LIKE '%".$_POST['search_data']."%' OR  mobile LIKE '%".$_POST['search_data']."%' OR in_temperature LIKE '%".$_POST['search_data']."%'  OR remarks LIKE '%".$_POST['search_data']."%' OR  visitor_type LIKE '%".$_POST['search_data']."%' ";

  //print_r($Query); die;

  $runQuery = mysqli_query($link,$Query);
     $no =1;

  if($runQuery == True){
 

  while($row=mysqli_fetch_array($runQuery)){

 // print_r($row);
 // die;
      
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