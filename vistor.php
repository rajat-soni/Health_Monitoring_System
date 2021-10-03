<?php

include'header.php';

?>

              

<div class="container">
			<div class="row " >
				<div class="col-md-3">
				</div>
	
			
				<div class="col-md-6" style="border: 1px black dashed; margin-top:4vh; box-shadow: 1px 2px #E3E4FA; ">
			
			
				<form action="visitordata.php" method="post" >
			
			<h4 class="text-center mt-3 mb-3">Visitor Health Monitoring Form</h4>
				<hr>
				<div class="form-group">
					<label>First name</label>
					<input type="text" name="first_name" placeholder="First Name"  class="form-control" style="width:100%; background-color: #E3E4FA;" required >
				</div>

				<div class="form-group">
                     <label> Last Name</label>
				
					<input type="text" name="last_name" placeholder="Last Name" class="form-control" style="width:100%; background-color: #E3E4FA;" required>
				</div>

               <div class="form-group">
				<label>Mobile</label>
					<input type="number" name="mobile" placeholder="Mobile No" class="form-control" style="width:100%; background-color: #E3E4FA;" autofocus="true"  title="type ten digits" required>
				</div>


				<div class="form-group">
				<label>In Temperature</label>
					<input type="text" name="in_temperature"  placeholder="In Temperature"class="form-control" style="width:100%; background-color: #E3E4FA;" autofocus="true" required>
				</div>

				<div class="form-group">
					<label>Remarks</label>
					<textarea name="remarks" placeholder="Type your Remarks.."class="form-control"  row="10" col="5" style="width:100%;background-color: #E3E4FA;"required></textarea>
				</div>
				

				<div class="form-group">
				<label>Visitor Type</label>
				<select name="visitor_type"  style="width:100%; background-color: #E3E4FA;" class="form-control" required>
					<option value="">Select Visitor Type</option>
					<option value="Client">Client</option>
					<option value="Employee">Employee</option>
					<option value="Cafeteria">Cafeteria</option>
					<option value ="New Joinee">New Joinee</option>
					<option name ="Guest">Guset</option>
					<option name="Facility">Facility</option>

				</select>
			</div>
		



			<div class="form-group">
				<input type="submit" class="btn btn-primary btn-md" name="submit" value="submit" class="form-control" style="border-radius: 0%;"></button>&nbsp
				<input type="reset" class="btn btn-danger btn-md" name="reset" value="Reset" class="form-control" style="border-radius: 0%;"></button>&nbsp
				
				
			</div>	

			
				
<hr>


			</form>
		</div>
	</p>
	<div class="col-md-3">
	</div>
	
	</div>


		</div>

		<?php
               include("footer.php");

		?>