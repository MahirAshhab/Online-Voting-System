<?php
session_start();
include("includes/header.php");

?>
<?php
	require("includes/db.php");
	$error="";
	$success="";

	if(isset($_POST['login'])){
		$user_id=$_POST['ID'];
		$user_password=$_POST['password'];
	 
		$select="select * from user_db where user_id='$user_id' and user_password='$user_password'";
    	$run=$conn->query($select);
		if($run->num_rows>0){
			while($row=$run->fetch_array()){
			$_SESSION['user_name']=$user_name=$row['user_name'];
			$_SESSION['user_id']=$user_id=$row['user_id'];
			echo"<script>window.location.href='welcome.php'</script>";
			}
		}
		else{
			$error="Invalid ID or password! Try Again";
		}
	}
?>
<br></br>
<center>
	<img src="image/login.png" class="img img-responsive" style="width:400px;height:400px;"> 
</center>
<br></br>
<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2" styele="box-shadow:2px 2px 2px 2px gray;">
   
   			<h3 class="text text-center alert bg-primary">User Login Area </h3>
   
   
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
        			<label for="exampleInputName"><font size="3" color="#ffffff">NID Number</font></label>
			        <input type="number"  class="form-control" id="exampleInputName" name="ID" placeholder="Enter NID Number"
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
