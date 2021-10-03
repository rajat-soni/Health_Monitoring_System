<?php require_once('header.php');
 

?>


	<?PHP
    include 'Config.php';

    $table = 'department';
    
    $query = mysqli_query($link, "SELECT * from `$table`");

	?>



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
                      
                       <select name="state_name" class="form-control"  id="state_id">
                             <option value=""></option>';
                     
                        </select>
                   </div>
                </div> 
            </div>      
    
			<div class="row">
                <div class="col-md-6 mt-4">
                   <div class="form-group">
                       <select name="city_Name" class="form-control"  id="city_id">
                            <option value="" ></option>
                    

                        </select>
                    </div>
                </div>

                <div class="col-md-6 mt-4">
                   <div class="form-group">
                       <select name="location_name" class="form-control"  id="location_id">
                            <option value=""></option>
                    

                        </select>
                    </div>
                </div>
            </div>    


            <div class="row">
                <div class="col-md-6 mt-4">
                    <div class="form-group">

						<select name="department_name"  class="form-control" id = "department_id" >
							<option value=""></option>

                             <?PHP 
                            if($ro= mysqli_num_rows($query)){
                               while($row= mysqli_fetch_array($query)){

                             echo'<option value="'.$row['department_id'].'">'.$row['department_name'].'
                             </option>';
                                  //print_r($row['department_name']);
                             }
                             } 
                             else{

                              echo'<option value="id">Select department Name first</option>';
                              }
                                 
                             ?>
                    
                

							
                        </select>
					</div>
                </div>

                <div class="col-md-6 mt-4">
                    
					<div class="form-group">
					    <select   name="employee_name"  class="form-control" id ="employee_id">
						    <option value=""></option>
					    </select>
                    </div>
                </div>
            </div>    	

            <div  class="row">
                <!-- <div class="col-md-6 mt-4">
					<div class="form">
					    <select id ="employee_name_id" class="form-control" name="employee_name_id">
                          <option value="" name="employee_name_id">Please Select Any</option>
                        </select>
                    </div>
                </div> -->

                <div class="col-md-6">
                    <div class="form-group">
                     <label>In_Tempreature</label>
                      <Input type ="text"  class="form-control" name="in_temperature">
                     
                    </div>
                </div>
            </div>  


	        <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label style="background-color: #E5E4E2;  width: 100%;border-radius:0%; padding: 10px;">Have You Heart Disease&nbsp;&nbsp;</label>
                     
                        <label class="label"><input type ="radio"  required  name ="status" value ="Yes" >&nbsp;Yes
                
                        <input type ="radio"  required   name ="status" value="No" style=" margin-left:40px;" >&nbsp;No&nbsp;</label>
                    </div>	
                </div> 
                

                <div class="col-md-6">
                    <div class="form-group">
                  
        
                        <label style="background-color: #E5E4E2; width: 100%; border-radius:0%; padding: 10px;">Are You Having Covid-19 Symptoms&nbsp;&nbsp;</label>
                    
                        <label><input type ="radio"  required  name ="status1" value ="Yes">&nbsp;Yes
                
                        <input type ="radio"  required   name ="status1" value="No" style=" margin-left:40px;" >&nbsp;No &nbsp;</label>
                    </div> 
                </div>
            </div>


            


        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  
        
                   <label style="background-color: #E5E4E2; width: 100%; border-radius:0%; padding: 10px;">Fever&nbsp;:&nbsp;</label>
                   <label>
                   <input type ="radio"  required  name ="status2" value ="Yes">&nbsp;Yes
                
                    <input type ="radio"  required   name ="status2" value="No" style=" margin-left:40px;" >&nbsp;No &nbsp;</label>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  
        
                   <label style="background-color: #E5E4E2; width: 100%; border-radius:0%; padding: 10px;">Lung Disease&nbsp;:&nbsp;</label>
                   <label>
                   <input type ="radio"  required  name ="status3" value ="Yes" >&nbsp;Yes
                
                   <input type ="radio"  required   name ="status3" value="No" style=" margin-left:40px;" >&nbsp;No &nbsp;</label>
                </div> 
            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  
                   <label style="background-color: #E5E4E2; width: 100%; border-radius:0%; padding: 10px;">Cough&nbsp;:&nbsp;</label>
                   <label>
                   <input type ="radio"  required  name ="status4" value ="Yes" >&nbsp;Yes
                   <input type ="radio"  required   name ="status4" value="No" style=" margin-left:40px;" >&nbsp;No &nbsp;</label>
                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group">

                   <label style="background-color: #E5E4E2; width: 100%; border-radius:0%; padding: 10px;">Heart Disease&nbsp;&nbsp;</label>
                   <label>
                   <label class="radio-inline"><input type ="radio"  required  name ="status5" value ="Yes" >&nbsp;Yes</label>
                
                   <label class="radio-inline"><input type ="radio"  required   name ="status5" value="No" style=" margin-left:40px;" >&nbsp;No &nbsp;</label>
                </div> 
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

            // 
         
      
      	        if(country_id){

                    $.ajax ({

         	            type: 'GET',
         	            url: 'Employee_details_data.php',
         	            data: {'id': country_id},
         	            datatype: 'html',

         	            success: function(data){


         		            $("#state_id").html(data);
                             $('#country_id').selectize({
                             sortField: 'text'
                              });
                            
                          
         		            $("#city_id").html('<option>select State Name </option>');
                         
         	            }
                    })

      	        }else{

      		            // $("#state_id").html('<option>Select country first </option>');
      		     

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

                        
                        $('#state_id').selectize({
                             sortField: 'text'
                              });
                        
         		        $("#city_id").html(result);
                    

                       

                                 
                         $("#employee_id").html('<option>select employee Name </option>');


             
         		
         	        }
                })

      	    }else{

      		
      		    $("#state_id").html('<option>select State Name </option>');   
                    
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
                         $('#city_id').selectize({
                             sortField: 'text'
                              });
                        
                        $("#location_id").html(result);


                       $('#location_id').selectize({
                         sortField: 'text'
                          });
                        //console.log(result);
                       $("#location").html('<option>Select location Name First </option>');

             
               
                    }
                })

            }else{

            
                    $("#location_id").html('<option>Select city Name First </option>');
                    $("#department_id").html('<option>Select location Name First </option>');

                }
        });


        $("#location_id").on('change',function(){

          var location_id = $(this).val();
   

            if(location_id){

                $.ajax({

                    type:'GET',
                    url: 'Employee_details_data.php',
                   data:{'department_id': location_id},
                    datatype: 'html',

                    success: function(result){

                       $('#location_id').selectize({
                             sortField: 'text'
                              });
                       $('#department_id').selectize({
                         sortField: 'text'
                          });

                        $("#department_id").html(result);
                         

                          $("#employee_id").html('<option>Select department Name First </option>');
             
                          
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
                    url: 'Employee_details_data.php',
                    data:{'employee_id': department_id},
                    datatype: 'html',

                    success: function(result){

                       $('#department_id').selectize({
                             sortField: 'text'
                              });
                         //console.log(result);
                         // if(result == 1){
                         //    $("#employee_id").trigger("reset");
                         //    $("#response").fadeIn();
                         //    $("#response").html("Data Is successfully Saved");
                         //    setTimeout(function(){
                         //        $("#response").fadeOut(); 
                         //    },5000);

                            
                         // } 
                         // $("#employee_id").chosen({width: "95%"});
                        $("#employee_id").html(result);
                         $('#employee_id').selectize({
                         sortField: 'text'
                          });

       

                       
                         // $('#employee_id').chosen();


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
                    url: 'Employee_details_data.php',
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

//  $(document).ready(function(){
// $("#country_id").val($("#country_id  option").eq(1).val());
// });
//  $(document).ready(function(){
// $("#state_id").val($("#state_id  option").eq(1).val());
// });


  
  //   $(document).ready(function () {
  //     $('select').selectize({
  //         sortField: 'text'
  //     });
       
  // });

    
</script>

