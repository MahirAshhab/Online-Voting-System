<title>
Welcome</title>
<?php
session_start();
include("includes/loginheader.php");
if(!$_SESSION['user_id_generated']){
	header("location:elections.php");
  }
?>
<br></br>

<?php
require("includes/db.php");
$user_id_generated=$_SESSION['user_id_generated'];
$select="select * from user_db where user_id_generated='$user_id_generated'";
$run=$conn->query($select);

	?>
	<?php
	$select="select * from user_db where user_id_generated='$user_id_generated'";
 	$run=$conn->query($select);
	if($run->num_rows>0){

		while($row=$run->fetch_array()){
			$user_constituency=$row['user_constituency'];

		}
	}
	?>

<center>
	<img src="image/vote.png" class="img img-responsive" style="width:400px;height:400px;"> 
</center>

<br></br>
<div class="container">

	<div class="col-md-6 col-md-offset-3">
		<form method="post" action="">
			<div class="form-group">
				<label><font size="3" color="#ffffff">Elections Name:</font></label>

				<select class ="form-control" name="elections_name" required>
					<option value="" selected="selected">Select Election</option>
					<?php
					require("includes/db.php");
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
			<div class="form-group">
			    <label for="exampleInputName"><font size="3" color="#ffffff">Constituency:</font></label>
			    <input type="text"  class="form-control" id="exampleInputName" name="constituency" placeholder="Enter constituency"
				required value="<?php echo $user_constituency; ?> "readonly>
			</div>
			<br>
			<input type="submit" name="search_candidate" class="btn btn-success" value="Search Candidate">
		</form>
	</div> 
</div>

<br></br><br>
<center><font size="3" color="#ffffff">
	<?php 
	date_default_timezone_set("Asia/Dhaka");
	if(isset($_POST['search_candidate'])){
		
		$elections_name=$_POST['elections_name'];

		$select= "select * from elections_tbl where elections_name='$elections_name'";
		$run=$conn->query($select);
		if($run->num_rows>0){
	 		while($row=$run->fetch_array()){
	 			$elections_start_date=$row['elections_start_date'];
	 			$elections_end_date=$row['elections_end_date'];
	 		}
	 	}
		$current_ts=time();
		$elections_start_date_ts=strtotime($elections_start_date);
		$elections_end_date_ts=strtotime($elections_end_date); 
		if($elections_start_date_ts>$current_ts){
			echo "Election did not start please wait...";
		}
		elseif ($current_ts>$elections_end_date_ts) {
			echo "Election has been closed you did not caste your vote";
		}
		else{
			?>
			<center>
				<a href="votecaste.php?elections_name=<?php echo str_replace(' ', '-',$elections_name) ;?>"><font size="4" color="#ffffff">Click here</font></a>
			</center>
			<?php
		}

	}

	?>
</center></font>