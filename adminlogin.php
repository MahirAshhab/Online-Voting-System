<?php
session_start();
include("includes/adminheader.php");

?>
<?php
	require("includes/db.php");
	$error="";
	$success="";

	if(isset($_POST['login'])){
		$admin_email=$_POST['email'];
		$admin_password=$_POST['password'];
	 
		$select="select * from admin_db where admin_email='$admin_email' and admin_password='$admin_password'";
    	$run=$conn->query($select);
		if($run->num_rows>0){
			while($row=$run->fetch_array()){
			$_SESSION['admin_name']=$user_name=$row['admin_name'];
			$_SESSION['admin_email']=$user_name=$row['admin_email'];
			$_SESSION['admin_id']=$user_id=$row['admin_id'];
			echo"<script>window.location.href='admin.php'</script>";
			}
		}
		else{
			$error="Invalid ID or password! Try Again";
		}
	}
?>
<br></br>
<br></br>
<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2" styele="box-shadow:2px 2px 2px 2px gray;">
   
   			<h3 class="text text-center alert bg-primary">Admin Login Area </h3>
   
   
   			<h5 class="text text-center text-danger"><?php
   			if($error!=""){
	   			echo $error;
      		}
	  
	  		if($success!=""){
		  		echo $success;
	  		}
     		?>
     		</h5>

        	<form method="post">
				<div class="form-group">
        			<label for="exampleInputName"><font size="3" color="#ffffff">Email ID:</font></label>
			        <input type="email"  class="form-control" id="exampleInputName" name="email" placeholder="Enter Email ID"
						required >
				</div>
		
				<div class="form-group">
					<label for="password"><font size="3" color="#ffffff">Password</font></label>
					<input type="password" name="password" class="form-control" placeholder="Enter password"
					required >
				</div>
				<br>
				<div class="form-group">
					<button type="submit" class="btn btn-success btn-block" name="login"><font size="3" color="#ffffff">login</font></button>
				</div>
			</form>
      	</div>
	</div>
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>