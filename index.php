<?php

require_once("header.php");

if(isset($_SESSION['user_name'])){

	header("location:ReadData.php");
	// Monitoring System //
}
?>



    	
    </style>
</head>
<body id ="body">

<!------ Include the above in your HEAD tag ---------->
   


	<div class="container">
		<?php
   
                if(isset($_SESSION['helo'])){

                	echo $_SESSION['helo'];
                    unset($_SESSION['helo']);
                }

            ?>

		<form action="LoginData.php" method="POST"  class="shadow">
		<div class="row">

			<div class="col-sm-4 col-sm-offset-4 login_bg">
				<img  class="profile-img" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png"/>
			<h2 id ="h">Login Panel</h2>
				<div class="form-group" id ="form-group_bg">

					<input type="text" placeholder="User Name" name="user_name"  id="login_user_name" class="form-control"id="form-control_bg">
				</div>
				<div class="form-group" id ="form-group_bg">
					<input type="Password" placeholder="User Password" name="Password" id="login_user_password" class="form-control" id="form-control_bg">
				</div> 
				<div class="form-group" id ="form-group_bg">
					<select name="Role"  id="login_user_password" class="form-control" id="form-control_bg">
						<option value="Admin"> Admin</option>
						<option value="New Employee">New Employee</option>
					</select>
				</div> 
				<input type="submit"  id="login_btn" class="btn btn-block login_btn" value="Submit" name="submit">
				
			</div>
		</div>
	</form>
	</div>
	

</body>
</body>
</html>