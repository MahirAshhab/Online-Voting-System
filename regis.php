<?php
	session_start();

	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con, 'votingsystem_db');

        $user_name=$_POST['fullname'];
	    $user_id=$_POST['NID'];
	    $user_email=$_POST['email'];
		$user_gender=$_POST['Gender'];
	 	$user_constituency=$_POST['Constituency'];
	 	$user_password=$_POST['password'];
	 
	 	$s="select * from user_db where user_id = '$user_id'";
	 
	 	$result=mysqli_query($con, $s);
	 	$num = mysqli_num_rows($result);
	 
		 if($num == 1){
			 echo"<script>alert('This ID has been already registered')</script>";
		 }
		 else{
			 $reg= "insert into user_db(user_name,user_id,user_email,user_gender,user_constituency,user_password) values ('$user_name','$user_id','$user_email','$user_gender','$user_constituency','$user_password')";
			mysqli_query($con, $reg);
			echo"<script>alert('Registration done successfully')</script>";
			echo "<script>window.location.href='reg.php'</script>";
		}
	?>
	

