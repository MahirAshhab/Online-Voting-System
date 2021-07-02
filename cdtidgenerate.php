<title>
Welcome
</title>
<?php
	session_start();
	include("includes/loginheader.php");
	if(!$_SESSION['user_id']){
		header("location:login.php");
  	}
?>

<br></br>

<center>
	<img src="image/cdtapplication.png" class="img img-responsive" style="width:200px;height:350px;"> 
</center>

<br></br>

<div class="container">
	<?php
	require("includes/db.php");
	$id=$_SESSION['user_id'];
	$select="select * from cdt_id_request_tbl where id='$id'";
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
		$select="select * from user_db where user_id='$id'";
		$run=$conn->query($select);
		if($run->num_rows>0){
			while($row=$run->fetch_array()){
				$name=$row['user_name'];
				$id=$row['user_id'];
				$email=$row['user_email'];
				$constituency=$row['user_constituency'];
				$id_generated=$row['cdt_id_generated'];
			}
		}

		if($id_generated!=""){
			?>
			<div class= "col-sm-6 col-sm-offset-3 bg-success alert">
				<h4>Congratulations! You Are Selected As A Candidate!</h4>
			</div>
			<?php
		}

		else{
			?>
			<div class="col-sm-8 col-sm-offset-2" styele="box-shadow:2px 2px 2px 2px gray;">
				<form method="post">

					<div class="form-group">
					    <label for="exampleInputName"><font size="3" color="#ffffff">Full Name:</font></label>
						<input type="text"  class="form-control" id="exampleInputName" name="name" placeholder="Enter Full Name"
						required value="<?php echo $name; ?> "readonly>
					</div>

					<div class="form-group">
					    <label for="exampleInputName"><font size="3" color="#ffffff">ID:</font></label>
					    <input type="text"  class="form-control" id="exampleInputName" name="id" placeholder="Enter ID"
						required value="<?php echo $id; ?> "readonly>
					</div>

					<div class="form-group">
						<label for="exampleInputName"><font size="3" color="#ffffff">Email:</font></label>
						<input type="text"  class="form-control" id="exampleInputName" name="email" placeholder="Enter Email"
						required value="<?php echo $email; ?> "readonly>
					</div>

					<div class="form-group">
						<label for="exampleInputName"><font size="3" color="#ffffff">Constituency:</font></label>
						<input type="text"  class="form-control" id="exampleInputName" name="constituency" placeholder="Enter Constituency"
						required value="<?php echo $constituency; ?> "readonly>
					</div>

					<div class="form-group">
						<label for="Party"><font size="3" color="#ffffff">Party:</font></label>
						<select name="party" class="form-control" required>
							<option value="">Select</option>
							<option value="Awami League">Awami League</option>
							<option value="BNP">BNP</option>
							<option value="Jatiyo Party">Jatiyo Party</option>
						</select>
					</div>

					<div class="form-group">
						<label><font size="3" color="#ffffff">Elections Name:</font></label>
						<select class ="form-control" name="elections_name" required>
							<option value="" selected="selected">Select Election</option>
							<?php
							$select="SELECT * from elections_tbl";
							$run=$conn->query($select);
							if($run->num_rows>0){
								while($row=$run->fetch_array()){
									?>
									<option value="<?php echo $row['elections_name'];?>"><?php echo $row['elections_name'];?></option>
									<?php 
								}
							}
							?>
						</select>
					</div>

					<br>

					<div class="form-group">
						<button type="submit" class="btn btn-success btn-block" name="idrequest"><font size="3" color="#ffffff">Send Request</font></button>
					</div>
				</form>
			</div>
</div>
<br></br><br></br><br></br>


	
			<?php
			}
		}
		?>

<?php
if(isset($_POST['idrequest'])){
	$name=$_POST['name'];
	$id=$_POST['id'];
	$email=$_POST['email'];
	$club=$_POST['club'];
	$party=$_POST['party'];
	$elections_name=$_POST['elections_name'];
	require("includes/db.php"); 
		
	$insert="insert into cdt_id_request_tbl (name,id,email,constituency,party,elections_name) values ('$name','$id','$email','$constituency','$party','$elections_name')";
	$run=$conn->query($insert);

	if($run){
		echo "<script>alert('Your Request Has Been Submitted Successfully')</script>";
		header("location:cdtidgenerate.php");
	}

	else{
		echo "Error";
	}
}
?>