<?php require_once('header.php');?>


	<?PHP
    include '../Config.php';

    $table = 'new_country_name';
    
    $query = mysqli_query($link, "SELECT * from `$table`");

	?>



<div class="container ">

	<div class="row" class="shadow">
		<div class="col-md-3 col-sm-3 col-lg-3">
		</div>

		
		<div class="col-md-6 col-sm-6 col-lg-6 mt-2 " class="shadow">
			<marquee behavior="alternate mt-2"><h4><cite>Welcome to <span class= "text-danger">New Employee Form</span></cite></marquee></h4>
				


			
			<form action="New_Emp_Data.php" method="POST">
				<div class="card  mt-2 shadow">
					<div class="card-header bg-dark" >
						<h5 class="text-center  "><cite><sapn class="text-light">New-Employee-Form</cite></h5>
					</div>
					<div class="card-body">
						
			<div class="row">			
			    <div class="col-md-6 mt-4">
                    <div class="form-group">
                        <select name="new_country_name" class="form-control" class="Readonly" id="country_id">
                            <option value=""> Please Select Country</option>
                      
                            <?PHP 
                            if($ro= mysqli_num_rows($query)){
                               while($row= mysqli_fetch_array($query)){

                             echo'<option value="'.$row['new_country_id'].'">'.$row['new_country_name'].'
                             </option>';
                                  //print_r($row['department_name']);
                             }
                             } 
                             else{

                              echo'<option value="id">select country first</option>';
                              }
                                 
                             ?>
                        </select>
                     </div>
                </div>




                <div class="col-md-6 mt-4">
                    <div class="form-group">
                       <select name="new_state_name" class="form-control" class="Readonly" id="state_id">
                          <option value="" name="state_name">Please Select State</option>
                     
                        </select>
                   </div>
                </div> 
            </div>      
    
			<div class="row">
                <div class="col-md-6 mt-4">
                   <div class="form-group">
                       <select name="new_city_name" class="form-control" class="Readonly" id="city_id">
                            <option value="" >Please Select City</option>
                    

                        </select>
                    </div>
                </div>

                <div class="col-md-6 mt-4">
                     <div class="form-group">
                        <select name="new_location_name" class="form-control" class="Readonly" id="new_location_id">
                            <option value="">Select Location First</option>
                 
                  
                        </select>
                    </div>
                </div>
            </div>    


            <div class="row">
                <div class="col-md-6 mt-4">
                    <div class="form-group">
						<select id = "department_id" class="form-control" name="new_department_name">
							<option value="">Select Department</option>

							
                        </select>
					</div>
                </div>

                <div class="col-md-6 mt-4">
					<div class="form-group">
					    <select id ="employee_id" class="form-control" name ="new_employee_name">
						    <option value="" name="employee_name">Select Employee Name</option>
					    </select>
                    </div>
                </div>
            </div>    	

            <div  class="row">
                <div class="col-md-6 mt-4">
					<div class="form">
					    <select id ="employee_name_id" class="form-control" name="new_employee_name_id">
                          <option value="" name="employee_name_id">Select Employee Id</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                     <label>In_tempreature</label>
                      <Input type ="text"  class="form-control" name="new_temperature_name">
                     
                    </div>
                </div>
            </div>  


	        <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Have You Heart Deasis&nbsp;&nbsp;</label>
                     
                        <label><input type ="radio"  required  name ="status" value ="Yes" >&nbsp;Yes
                
                        <input type ="radio"  required   name ="status" value="No" style=" margin-left:40px;" >&nbsp;No&nbsp;</label>
                    </div>	
                </div> 
                

                <div class="col-md-6">
                    <div class="form-group">
                  
        
                        <label>Are You Having Covid-19 Symptoms&nbsp;&nbsp;</label>
                    
                        <label><input type ="radio"  required  name ="status1" value ="Yes">&nbsp;Yes
                
                        <input type ="radio"  required   name ="status1" value="No" style=" margin-left:40px;" >&nbsp;No &nbsp;</label>
                    </div> 
                </div>
            </div>


            


        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  
        
                   <label>Fever&nbsp;:&nbsp;</label>
                   <label>
                   <input type ="radio"  required  name ="status2" value ="Yes">&nbsp;Yes
                
                    <input type ="radio"  required   name ="status2" value="No" style=" margin-left:40px;" >&nbsp;No &nbsp;</label>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  
        
                   <label>Lung Disease&nbsp;:&nbsp;</label>
                   <label>
                   <input type ="radio"  required  name ="status3" value ="Yes" >&nbsp;Yes
                
                   <input type ="radio"  required   name ="status3" value="No" style=" margin-left:40px;" >&nbsp;No &nbsp;</label>
                </div> 
            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  
                   <label>Coungh&nbsp;:&nbsp;</label>
                   <label>
                   <input type ="radio"  required  name ="status4" value ="Yes" >&nbsp;Yes
                   <input type ="radio"  required   name ="status4" value="No" style=" margin-left:40px;" >&nbsp;No &nbsp;</label>
                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group">

                   <label>Heart Disease&nbsp;&nbsp;</label>
                   <label>
                   <label class="radio-inline"><input type ="radio"  required  name ="status5" value ="Yes" >&nbsp;Yes</label>
                
                   <label class="radio-inline"><input type ="radio"  required   name ="status5" value="No" style=" margin-left:40px;" >&nbsp;No &nbsp;</label>
                </div> 
            </div>
        </div>

					   <input type="submit" class="btn btn-primary btn-md" name="submit" value="submit" class="form-control" style="border-radius: 0%;"></button>
					   <input type="Reset" class="btn btn-danger btn-md" name="submit" value="Reset" class="form-control" style="border-radius: 0%;margin-left: 20px;"></button>
					</div>
					    <div class="card-footer" >
						
					    </div>
				</div>
			</from> 
	    </div>
	   <div class="col-md-3 col-sm-3 col-lg-3">
		</div>
    </div>
</div>



<script>
		
    $(document).ready(function(){
      $("#country_id").on('change', function(){

      	var country_id = $(this).val();
         
      
      	if(country_id){

         $.ajax ({

         	type: 'GET',
         	url: 'New_Employee_details_data.php',
         	data: {'id': country_id},
         	datatype: 'html',

         	success: function(data){

         		$("#state_id").html(data);
         		$("#city_id").html('<option>select State Name </option>');
               $("#new_location_id").html('<option>select City Name first </option>');
               $("#department_id").html('<option>select Location Name first </option>');
         	}
         })

      	}else{

      		$("#state_id").html('<option>Select country first </option>');
      		$("#city_id").html('<option>select State Name first </option>');
            $("#new_location_id").html('<option>select City Name first </option>');

      	}



      });

      $("#state_id").on('change',function(){

      var state_id = $(this).val();
   

      	if(state_id){

         $.ajax({

         	type:'GET',
         	url: 'New_Employee_details_data.php',
         	data:{'Id':state_id},
         	datatype: 'html',

         	success: function(result){
         		$("#city_id").html(result);
               $("#new_location_id").html('<option>select city First </option>');
               $("#department_id").html('<option>select Location Name first </option>');

             
         		
         	}
         })

      	}else{

      		
      		$("#city_id").html('<option>Select State Name First </option>');
            $("#new_location_id").html('<option>select city Name </option>');

      	}



      });

      $("#city_id").on('change',function(){

      var city_id = $(this).val();
   

         if(city_id){

         $.ajax({

            type:'GET',
            url: 'New_Employee_details_data.php',
            data:{'location_id': city_id},
            datatype: 'html',

            success: function(result){
               $("#new_location_id").html(result);
                $("#department_id").html('<option>select Location First </option>');
               $("#employee_id").html('<option>select department Name first </option>');

             
               
            }
         })

         }else{

            
            $("#new_location_id").html('<option>Select city Name First </option>');
              $("#department_id").html('<option>Select location Name First </option>');

         }



      });


      $("#new_location_id").on('change',function(){

      var location_id = $(this).val();
   

         if(location_id){

         $.ajax({

            type:'GET',
            url: 'New_Employee_details_data.php',
            data:{'department_id': location_id},
            datatype: 'html',

            success: function(result){
                $("#department_id").html(result);
                $("#employee_id").html('<option>select department First </option>');
                $("#employee_name_id").html('<option>select department name id first </option>');

             
               
            }
         })

         }else{

            
            $("#department_id").html('<option>Select location Name First </option>');
              $("#employee_id").html('<option>Select department Name First </option>');

         }



      });



      $("#department_id").on('change',function(){

      var department_id = $(this).val();
   

         if(department_id){

         $.ajax({

            type:'GET',
            url: 'New_Employee_details_data.php',
            data:{'employee_id': department_id},
            datatype: 'html',

            success: function(result){
                $("#employee_id").html(result);
                $("#employee_name_id").html('<option>select department First </option>');
               

             
               
            }
         })

         }else{

            
            $("#employee_id").html('<option>Select depatment Name First </option>');
              $("#employee_name_id").html('<option>Select Employee Name First </option>');

         }



      });


       
      $("#employee_id").on('change',function(){

      var employee_id = $(this).val();
   

         if(employee_id){

         $.ajax({

            type:'GET',
            url: 'New_Employee_details_data.php',
            data:{'Empid': employee_id},
            datatype: 'html',

            success: function(result){
                $("#employee_name_id").html(result);
              
               

             
               
            }
         })

         }else{

            
            $("#employee_id").html('<option>Select EmployeeName First </option>');

         }



      });






});

	</script>



		

<?php include("footer.php");?>