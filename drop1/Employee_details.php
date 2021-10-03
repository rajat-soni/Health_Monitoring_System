
 <?php
     include("Config.php");

 ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>

<div class="container ">

	<div class="row" class="shadow">
		<div class="col-md-3 col-sm-3 col-lg-3 ">

		</div>

		
		<div class="col-md-6 col-sm-6 col-lg-6 mt-2 mb-3 ">
			
				


			
			<form action="Emp_data.php" method="POST">
				<div class="card  mt-2 shadow">
					<div class="card-header" >
						<h4 class="text-center  "><sapn class="text-dark" style="font-family:Lato;">Employee Health Monitoring Form</h4>

					</div>
					<div class="card-body">
						 <?php  
                   $my =" Select * from country ";

                   $run = mysqli_query($link, $my);

             ?>
			<div class="row">			
			    <div class="col-md-6 mt-4">

                    <div class="form-group">
                        <select name="country_name" class="form-control" class="Readonly" id="country_id">
                            <option value=""></option>
                            <?PHP 
                            if($ro= mysqli_num_rows($run)){
                               while($row= mysqli_fetch_array($run)){

                             echo'<option value="'.$row['country_id'].'">'.$row['country_name'].'
                             </option>';
                                  //print_r($row['department_name']);
                             }
                             } 
                             else{

                              echo'<option value="id">Country Name first</option>';
                              }
                                 
                             ?>
                        </select>

                    </div>
                </div>        
                      
                           




                <div class="col-md-6 mt-4">
                    <div class="form-group">
                      
                       <select name="state_name" class="form-control" class="Readonly" id="state_id">
                             <option value=""></option>';
                     
                        </select>
                   </div>
                </div> 
            </div>      
    
			<div class="row">
                <div class="col-md-6 mt-4">
                   <div class="form-group">
                       <select name="city_name" class="form-control" class="Readonly" id="city_id">
                            <option value="" readonly ></option>
                    

                        </select>
                    </div>
                </div>

              
        <hr>

					   <input type="submit" class="btn btn-primary btn-md" name="submit" value="submit" class="form-control" style="border-radius: 0%;"></button>
					   <input type="Reset" class="btn btn-danger btn-md" name="submit" value="Reset" class="form-control" style="border-radius: 0%;margin-left: 20px;" id ="btn_id"></button>
					</div>
					    <div class="card-footer"class="text-center">
               <p  class="text-center"  style="font-family:Lato;"> All Rights Reserved In Conneqt Business Solution 2020 &reg;</p>
						
					    </div>
				</div>
			</from> 
	    </div>
	   <div class="col-md-3 col-sm-3 col-lg-3" id="response">

		</div>
    </div>
</div>


<script>
    
 $(document).ready(function(){



 
        $("#country_id").on('change' ,function(){

            var country_id = $(this).val();
         
      
                if(country_id){

                    $.ajax ({

                        type: 'GET',
                        url: 'Employee_details_data.php',
                        data: {'id': country_id},
                        datatype: 'html',

                        success: function(data){


                            $("#state_id").html(data);
                           
                            $("#city_id").html('<option>select State Name </option>');
                            $("#location_id").html('<option>select City Name first </option>');
                            $("#department_id").html('<option>select Location Name first </option>');
                        }
                    })

                }else{

                        $("#state_id").html('<option>Select country first </option>');
                        $("#city_id").html('<option>select State Name first </option>');
                        $("#location_id").html('<option>select City Name first </option>');

                    }   
        });

        $("#state_id").on('change',function(){

            var state_id = $(this).val();
   

            if(state_id){

                 $.ajax({

                    type:'GET',
                    url: 'Employee_details_data.php',
                    data:{'Id':state_id},
                    datatype: 'html',

                    success: function(result){


                        $("#city_id").html(result);
                        $("#location_id").html('<option>select city First </option>');
                        $("#department_id").html('<option>select Location Name first </option>');

             
                
                    }
                })

            }else{

            
                    $("#city_id").html('<option>Select State Name First </option>');
                    $("#location_id").html('<option>select city Name </option>');

                }
        });

        $("#city_id").on('change',function(){

            var city_id = $(this).val();
   

            if(city_id){

                $.ajax({

                    type:'GET',
                    url: 'Employee_details_data.php',
                    data:{'location_id': city_id},
                    datatype: 'html',

                    success: function(result){
                        $("#location_id").html(result);
                        console.log(result);
                        $("#department_id").html('<option>select Location First </option>');
                        $("#employee_id").html('<option>select department Name first </option>');

             
               
                    }
                })

            }else{

            
                    $("#location_id").html('<option>Select city Name First </option>');
                    $("#department_id").html('<option>Select location Name First </option>');

                }
        });

});
      
  
</script>

</script>

</body>
</html>



 

  

		
   

