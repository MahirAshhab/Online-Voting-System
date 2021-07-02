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
<center>
	<img src="image/index.png" class="img img-responsive" style="width:640px;height:360px;"> 
</center>
<br></br>
	
<br></br><br></br><br></br><br></br>
		 
<?php 
	include("includes/footer.php");
?>
		 
		 
	 
<script type="text/javascript" src="js/bootstrap.js" />
<script type="text/javascript" src="js/jquery.js" />
</body>
</html>


