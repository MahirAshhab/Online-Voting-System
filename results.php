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
<center>
	<img src="image/results.png" class="img img-responsive" style="width:700px;height:200px;"> 
</center>
<br></br>

<div class="container">

	<div class="col-md-6 col-md-offset-3">
		<p class="text text-danger"><font size="3" color="#ffffff"><u>In this section those election results display which are closed or date expire</u></font></p>
		<br><br>
		<form method="post" action="">
			<div class="form-group">
				<label for="exampleInputName"><font size="3" color="#ffffff">Select Election:</font></label>
				<select class="form-control" name="elections_name">
					<option  selected="selected" value="">Select Election</option>
					<?php
					$current_ts=time();
					require("includes/db.php");
					$select="SELECT * from elections_tbl";
					$run=$conn->query($select);
					if($run->num_rows>0){
						while($row=$run->fetch_array()){
						 	$elections_name=$row['elections_name'];
						 	$elections_start_date=$row['elections_start_date'];
							$elections_end_date=$row['elections_end_date'];
							?>
							<?php
							$elections_end_date_ts=strtotime($elections_end_date);
							if($elections_end_date_ts>$current_ts){
								?>
								<option value="<?php echo $elections_name;?>"><?php echo $elections_name;?></option>
								<?php
							}
						}
					}
				
					?>

				</select>
			</div>
			<div class="form-group">
					<label for="Constituency"><font size="3" color="#ffffff">Constituency:</font></label>
					<select name="Constituency" class="form-control" required>
						<option value="">Select</option>
						<option value="Manikganj-1">Manikganj-1</option>
						<option value="Manikganj-2">Manikganj-2</option>
						<option value="Manikganj-3">Manikganj-3</option>
						<option value="Munshiganj-1">Munshiganj-1</option>
						<option value="Munshiganj-2">Munshiganj-2</option>
						<option value="Munshiganj-3">Munshiganj-3</option>
						<option value="Dhaka-1">Dhaka-1</option>
						<option value="Dhaka-2">Dhaka-2</option>
						<option value="Dhaka-3">Dhaka-3</option>
						<option value="Dhaka-4">Dhaka-4</option>
						<option value="Dhaka-5">Dhaka-5</option>
						<option value="Dhaka-6">Dhaka-6</option>
						<option value="Dhaka-7">Dhaka-7</option>
						<option value="Dhaka-8">Dhaka-8</option>
						<option value="Dhaka-9">Dhaka-9</option>
						<option value="Dhaka-10">Dhaka-10</option>
						<option value="Dhaka-11">Dhaka-11</option>
						<option value="Dhaka-12">Dhaka-12</option>
						<option value="Dhaka-13">Dhaka-13</option>
						<option value="Dhaka-14">Dhaka-14</option>
						<option value="Dhaka-15">Dhaka-15</option>
						<option value="Dhaka-16">Dhaka-16</option>
						<option value="Dhaka-17">Dhaka-17</option>
						<option value="Dhaka-18">Dhaka-18</option>
						<option value="Dhaka-19">Dhaka-19</option>
						<option value="Dhaka-20">Dhaka-20</option>
						<option value="Gazipur-1">Gazipur-1</option>
						<option value="Gazipur-2">Gazipur-2</option>
						<option value="Gazipur-3">Gazipur-3</option>
						<option value="Gazipur-4">Gazipur-4</option>
						<option value="Gazipur-5">Gazipur-5</option>
						<option value="Narsingdi-1">Narsingdi-1</option>
						<option value="Narsingdi-2">Narsingdi-2</option>
						<option value="Narsingdi-3">Narsingdi-3</option>
						<option value="Narsingdi-4">Narsingdi-4</option>
						<option value="Narsingdi-5">Narsingdi-5</option>
						<option value="Narayanganj-1">Narayanganj-1</option>
						<option value="Narayanganj-2">Narayanganj-2</option>
						<option value="Narayanganj-3">Narayanganj-3</option>
						<option value="Narayanganj-4">Narayanganj-4</option>
						<option value="Narayanganj-5">Narayanganj-5</option>
					</select>
				</div>
			<div class="form-group">
				<input type="submit" name="search_results" class="btn btn-success" value="Search Result">
			</div>
		</form>
		<?php
		$user_constituency=$_POST['Constituency'];
		?>
		<br><br><br>
		<table class="table table-responsive table-hover table-bordered text-center" style="background-color: #FFFFFF;">
			<tr>
				<td>#</td>
				<td>Candidates Name</td>
				<td>Obtain Votes</td>
				<td>winning status</td>
			</tr>
			<?php
			if(isset($_POST['search_results'])){
				$elections_name=$_POST['elections_name'];
				$select="select * from results_tbl where elections_name='$elections_name'";
				$run=$conn->query($select);
				if($run->num_rows>0){
					$total_elections_votes=0;
					while ($row=$run->fetch_array()) {
						 $total_elections_votes=$total_elections_votes+1;
					}
				}
			
				$select1="select * from candidate_db where election_name='$elections_name' and constituency='$user_constituency'";
				$run1=$conn->query($select1);
	            if($run1->num_rows>0){
	            	$total=0;
					while ($row2=$run1->fetch_array()) {
						$total=$total+1;
						$name=$row2['name'];
						$total_votes=$row2['total_votes'];
						$percentage=(($total_votes/$total_elections_votes)*100);
						?>

						<tr>
							<td><?php echo $total;?></td>
							<td><?php echo $name;?></td>
							<td><?php echo $total_votes;?></td>
							<td>
								<?php
								if ($percentage>50){
									?>
									<div class="progress">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $percentage;?>" aria-valuemin="0" aria-valumx="<?php echo $percentage;?>" style="width: <?php echo $percentage;?>%">
												<font size="2" color="#000000"><b><?php echo $percentage;?>%</b></font>
										</div>
									</div>
									<?php
								}
								elseif ($percentage>40) {	
									?>
									<div class="progress">
										<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?php echo $percentage;?>" aria-valuemin="0" aria-valumx="<?php echo $percentage;?>" style="width: <?php echo $percentage;?>%">
											<font size="2" color="#000000"><b><?php echo $percentage;?>%</b></font>
										</div>
									</div>
									<?php
								}
								else{
									?>
									<div class="progress">
										<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="<?php echo $percentage;?>" aria-valuemin="0" aria-valumx="<?php echo $percentage;?>" style="width: <?php echo $percentage;?>%">
											<font size="2" color="#000000"><b><?php echo $percentage;?>%</b></font>
										</div>
									</div>
									<?php
								}
								?>
							</td>
						</tr>
					<?php
					}
					?>
					<tr>
						<td colspan="2">Total Votes</td>
						<td><?php echo $total_elections_votes;?></td>
						<td></td>
					</tr>
					<?php
				}
				else{
					?>
					<tr>
						<td colspan="4">Record Not Found</td>
					</tr>
					<?php
				}
			}
			?>
		</table>
	</div>
</div>
<br></br>
<br></br>
	
	