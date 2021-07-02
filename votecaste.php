<title>
Welcome</title>
<?php
session_start();
include("includes/loginheader.php");
if(!$_SESSION['user_id_generated']){
	header("location:elections.php");
	exit();
  }
?>
<?php
require("includes/db.php");
$user_id_generated=$_SESSION['user_id_generated'];
$select="select * from user_db where user_id_generated='$user_id_generated'";
$run=$conn->query($select);
	?>

<br>
<div class="container">
	<div class="col-md-6 col-md-offset-3">
		<form method="post" action="">
			<?php 
			require("includes/db.php");
			
			$elections_name=$_GET['elections_name'];

			$elections_name=str_replace('-',' ',$elections_name);

			?>

			<?php
			require("includes/db.php");
			$user_id_generated=$_SESSION['user_id_generated'];
			$select="select * from user_db where user_id_generated='$user_id_generated'";
			$run=$conn->query($select);
			if($run->num_rows>0){
				while($row=$run->fetch_array()){
					$user_constituency=$row['user_constituency'];

				}
			}
			?>

			<div class="form-group">
				<input type='text' value="<?php echo $elections_name;?>" class='form-control' readonly/>
				<input type='text' value="<?php echo $user_constituency;?>" class='form-control' readonly/>
			</div>
			<br><br>
			<?php

			$select="select * from candidate_db where election_name='$elections_name' and constituency='$user_constituency'";

			$run=$conn->query($select);
			if($run->num_rows>0){
				while ($row=$run->fetch_array()){
					?>
					<div class="form=group">
                		<input type="radio" name="candidates_name" class="list-group" value="<?php echo $row['name'];?>">
						<label><font size="5" color="#ffffff"><?php echo $row['name'];?></font></label>
					</div>
					<br>
				<?php	
				}
			}
			?>
			<center>
				<br>
				<button type="submit" name="vote_caste" class="btn btn-success"><font size="4" color="#ffffff">Now Cast Your Vote</font></button>	
			</center>
		</form>
	</div> 
</div>

<center>
	<font size="3" color="#ffffff">
		<?php
		if (isset($_POST['vote_caste'])){
		 	$candidates_name=$_POST['candidates_name'];
		 	$user_id=$_SESSION['user_id'];
		 	$select="select * from results_tbl where user_id='$user_id' and elections_name='$elections_name'";
		 	$exel=$conn->query($select);
		 	if($exel->num_rows>0){
		 		echo "You have already caste yous vote against election '".$elections_name."'";
		 	}
			else{
			 	$insert="insert into results_tbl (user_id,candidates_name,elections_name) values('$user_id','$candidates_name','$elections_name')";
				$run=$conn->query($insert);
				if($run){
					$update="update candidate_db set total_votes=`total_votes`+'1' where name='$candidates_name' and election_name='$elections_name'";
					$exe=$conn->query($update);
					if($exe){
						echo"you have successfully cast your vote";
					}
					else{
						echo "you did not cast your vote successfully";
					}
				}
				else{
					echo"error";
				}
			}
		}
		?>
	</font>
</center>




