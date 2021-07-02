<?php
session_start();
if(!$_SESSION['admin_email']){
	header("location:adminlogin.php");
  }
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'votingsystem_db');

    $en=$_POST['elections_name'];
    $ec=$_POST['elections_constituency'];
	$esd=$_POST['elections_start_date'];
	$eed=$_POST['elections_end_date'];
	 

	 
	$reg= "insert into elections_tbl(elections_name,elections_constituency,elections_start_date,elections_end_date) values ('$en','$ec','$esd','$eed')";
	mysqli_query($con, $reg);
	echo"<script>alert('Election Successfully Initiated')</script>";
	echo "<script>window.location.href='add_new_elections.php'</script>";

	?>

