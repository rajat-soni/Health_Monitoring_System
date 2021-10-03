
<?php
require_once ('header.php');
?>


<?php
if(isset($_SESSION['user_name'])){

	header("location:ReadData.php");

}
?>


<div class="container">
	<div class="row">
		<div class="col-md-3 col-sm-3 col-lg-3">
		</div>

		
		<div class="col-md-6 col-sm-6 col-lg-6 mt-2">
			
			<?PHP
              
                if(isset($_SESSION['helo'])){

                	echo $_SESSION['helo'];
                    unset($_SESSION['helo']);
                }

            ?>
			
			<form action="LoginData.php" method="POST"  class="shadow" onsubmite ="validation();">
				<div class="card  mt-2">
					<div class="card-header" >
						 <img  class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" style="width: 100px; height: 100px; margin: 0 auto ; display: block;-moz-border-radius: 50%; -webkit-border-radius: 50%;border-radius: 50%;">
					<div class="card-body">
						
						<div class="form-group ">
							<lable>User Name</lable>
							<input type="text" class="form-control" placeholder="User Name" name="user_name"  Id ="user_name" required="">
					    </div>
						<div class="form-group">
							<lable>Password</lable>
							<input type="Password" class="form-control" placeholder="password" Id = "Password" name="Password" required>
					    </div>



					    <div class="form-group">
				           <label>Employee Type</label>
				           <select name="Role"  style="width:100%;" class="form-control">
					          <option value="Admin">Admin
					          </option>
					          <option value="New Employee">New Employee
					          </option>
					
				            </select>
			            </div>
						
						
					
					    <input type="submit" class="btn btn-danger btn-md" name="submit" value="submit" class="form-control" style="border-radius: 0%;"></button>
					</div>
					    
				</div>
			</from> 
	    </div>
	<div class="col-md-6 col-sm-6 col-lg-6">
	</div>
     </div>
</div>

		

<?php include("footer.php");?>