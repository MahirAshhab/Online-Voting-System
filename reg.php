<?php
include("includes/header.php");

?>
<br></br>
<center>
	<img src="image/reg.png" class="img img-responsive" style="width:400px;height:400px;"> 
</center>
<br></br>
<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2" styele="box-shadow:2px 2px 2px 2px gray;">
		   
		   <h3 class="text text-center alert bg-primary">User Registration </h3>
		   <form action="regis.php" method="post">
		  
		   
		  
		    
				<div class="form-group">
			        <label for="exampleInputName"><font size="3" color="#ffffff">Full Name:</font></label>
			        <input type="text"  class="form-control" id="exampleInputName" name="fullname" placeholder="Enter Full Name"
					required >
				</div>
					
				<div class="form-group">
			        <label for="exampleInputName"><font size="3" color="#ffffff">NID Number:</font></label>
			        <input type="number"  class="form-control" id="exampleInputName" name="NID" placeholder="Enter NID"
					required >
				</div>

				<div class="form-group">
			        <label for="exampleInputName"><font size="3" color="#ffffff">Email:</font></label>
			        <input type="email"  class="form-control" id="exampleInputName" name="email" placeholder="Enter Email"
					required >
				</div>
				
				<div class="form-group">
					<label for="Gender"><font size="3" color="#ffffff">Gender:</font></label>
					<select name="Gender" class="form-control" required>
						<option value="">Select</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
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
					<label for="password"><font size="3" color="#ffffff">Password:</font></label>
					<input type="password" name="password" class="form-control" placeholder="Enter password"
				required >
				</div>

				<br>

				<div class="form-group">
					<button type="submit" class="btn btn-success btn-block" name="register"><font size="3" color="#ffffff">Submit</font></button>
				</div>
			</form>
		</div>
	</div>
</div>
<br></br><br></br><br></br>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
