<html>
<head>
	<title>Online Voting Admin</title>
	<link rel="stylesheet" href="css/bootstrap.css" />
</head>
<body style="background-color:#1c4966">
   <div class="container">
      	<nav class="navbar navbar-default">  
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="admin.php" class="navbar-brand">Admin Panel</a>
				</div>
				<ul class="nav navbar-nav">
					<li><a href="admin.php">Home</a></li>
					<li><a href="idrequest.php">ID Request Handling</a></li>
					<li><a href="cdtidrequest.php">Candidate Request Handling</a></li>
					<li><a href="add_new_elections.php">Election Creation</a></li>
					<li><a href="adminlogout.php">Logout</a></li>
					<li class="active"><a href="#"><?php echo $_SESSION['admin_name'];?></a></li>
				</ul>
		    </div>
    	</nav>
   	</div>