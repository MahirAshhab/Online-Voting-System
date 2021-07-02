<title>Welcome</title>
<?php
session_start();
include("includes/loginheader.php");
if(!$_SESSION['user_id']){
	header("location:login.php");
  }
?>

<br></br><br></br><br></br><br></br>
<div class="container">
	

<?php
require("includes/db.php");
$user_id=$_SESSION['user_id'];
$select="select * from id_request_tbl where user_id='$user_id'";
$run=$conn->query($select);

if($run->num_rows>0){
	?>
	<div class= "col-sm-6 col-sm-offset-3 bg-success alert">
		<h4>Your Request Already submitted</h4>
	</div>
	<?php
}

else{
	?>
	<?php
	$select="select * from user_db where user_id='$user_id'";
 	$run=$conn->query($select);
	if($run->num_rows>0){

		while($row=$run->fetch_array()){
	 		$user_name=$row['user_name'];
			$user_id=$row['user_id'];
			$user_constituency=$row['user_constituency'];
			$user_id_generated=$row['user_id_generated'];

		}
	}

	if($user_id_generated!=""){
		?>
		<div class= "col-sm-6 col-sm-offset-3 bg-success alert">
			<h4> Your ID is"<span class="text text-danger"><?php echo $user_id_generated; ?></span>"</h4>
			<p><b>Note:</b> Use this ID with your login password to caste your vote.</p>
		</div>

		<?php
	}

	else{
		?>
		<div class="col-sm-8 col-sm-offset-2" styele="box-shadow:2px 2px 2px 2px gray;">
			<form method="post">
				<div class="form-group">
        			<label for="exampleInputName"><font size="3" color="#ffffff">User Name:</font></label>
        			<input type="text"  class="form-control" id="exampleInputName" name="user_name" placeholder="Enter name"
        			required value="<?php echo $user_name; ?> " readonly>
				</div>

				<div class="form-group">
			        <label for="exampleInputName"><font size="3" color="#ffffff">Student ID:</font></label>
			        <input type="text"  class="form-control" id="exampleInputName" name="user_id" placeholder="Enter ID"
					required value="<?php echo $user_id; ?> "readonly>
				</div>

				<div class="form-group">
			        <label for="exampleInputName"><font size="3" color="#ffffff">Constituency:</font></label>
			        <input type="text"  class="form-control" id="exampleInputName" name="user_constituency" placeholder="Enter constituency"
					required value="<?php echo $user_constituency; ?> "readonly>
				</div>

				<br>

				<div class="form-group">
					<button type="submit" class="btn btn-success btn-block" name="idrequest"><font size="3" color="#ffffff">ID Request</font></button>
				</div>
			</form>
		</div>
	</div>
	<?php
	}
}

?>
<?php
if(isset($_POST['idrequest'])){
	$user_id=$_POST['user_id'];
	$user_constituency=$_POST['user_constituency'];
	require("includes/db.php"); 
	
	$insert="insert into id_request_tbl (user_id,user_constituency) values ('$user_id','$user_constituency')";
	$run=$conn->query($insert);
	if($run){
		echo "<script>alert('Your Request Has Been Submitted Successfully')</script>";
		header("location:idgenerate.php");
	}
	else{
		echo "Error";
	}	
}	
?>
</div>