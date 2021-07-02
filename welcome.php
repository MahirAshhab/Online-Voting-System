<title>
Welcome</title>
<?php
session_start();
include("includes/loginheader.php");
if(!$_SESSION['user_id']){
	header("location:login.php");
  }
?>
<br></br>
 	<div class="container">
		<div class="row">
			<div>
		 		<center>
		   			<img src="image/index.png" class="img img-responsive" style="width:640px;height:360px;"> 
		    	</center>
			</div>
		</div>
	</div>

	<br></br>

	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<h4 class="text text-center text-info alert bg-primary">How To Cast Your Vote<b><i>?</i></b></h4>
				<ul>
					<li>
					<font size="3" color="#ffffff">Firstly Select <b>"ID Generate"</b> from navigation bar</font>
					</li>
					<li>
					<font size="3" color="#ffffff">Then send request to <b>"Admin"</b> for Generate Your ID</font>
					</li>
					<li>
					<font size="3" color="#ffffff">Click on the <b>"Election"</b> from navigation bar</font>
					</li>
					<li>
					<font size="3" color="#ffffff">Select available election</font>
					</li>

					<li>
					<font size="3" color="#ffffff">Your vote remains anonymous as out system's architecture strictly seperates your personal data from the electronic ballot</font>
					</li>
				</ul>
			</div>
		</div>
	</div>
	
	<br></br><br></br><br></br><br></br>
		 
	<?php 
		include("includes/footer.php");
	?>
		 
		 
	 
<script type="text/javascript" src="js/bootstrap.js" />
<script type="text/javascript" src="js/jquery.js" />
</body>
</html>


