<html>
<head>
	<title>Online Voting</title>
	<link rel="stylesheet" href="css/bootstrap.css" />
</head>
<body style="background-color:#1c4966">
   <div class="container">
      	<nav class="navbar navbar-default">  
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="welcome.php" class="navbar-brand">Online Voting System</a>
				</div>
				<ul class="nav navbar-nav">
					<li><a href="welcome.php">Home</a></li>
					<li><a href="idgenerate.php">ID Generate</a></li>
					<li><a href="cdtidgenerate.php">Candidate Application</a></li>
					<li><a href="elections.php">Election</a></li>
					<li><a href="results.php">Result</a></li>
					<li><a href="vote.php">Vote</a></li>
					<li><a href="logout.php">Logout</a></li>
					<li class="active"><a href=""><?php echo $_SESSION['user_name'];?></a></li>
				</ul>
		    </div>
    	</nav>
   	</div>