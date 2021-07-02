<title>
	Welcome</title>
	<?php
	session_start();
	include("includes/adminloginheader.php");
	if(!$_SESSION['admin_email']){
		header("location:adminlogin.php");
	  }
	?>
	<br></br>
	<br></br>
	<center>

<div class="container">
<div class="col-sm-12">
<h2><font size="6" color="#ffffff">All Requested Data</font></h2>
<table class="table table-responsive table-hover table-bordered text-center" style="background-color: #FFFFFF;">
<tr>
<th>#</th>
<th>User id</th>
<th>Constituency</th>
<th>Acton</th>
</tr>
<?php

 
$conn=new mysqli("localhost","root","","votingsystem_db");
$select="select * from id_request_tbl";
$run=$conn->query($select);
if($run->num_rows>0){
	$total=0;
	
	while($row=$run->fetch_array()){
		$total=$total+1;
		$id=$row['id'];
		?>
		<tr> 
		<td><?php echo $total;?></td>
		<td><?php echo $row['user_id'];?></td>
	<td><?php echo $row['user_constituency'];?></td>
	<td><a href="updateid.php?id=<?php echo $id;?>">update</a></td>
		
		</tr>
		
		<?php
	}
}
else{
	?>
	<tr>
		<td colspan="4" >Record not Found</td>
	</tr>
	<?php

}
?>

</table>
</div>
</div>
</center>
</body>
</html>


