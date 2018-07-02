<?php 

    $host = 'localhost';
    $user = 'root'; 
    $password = '';
    $database = 'batch15';
    $connection = mysqli_connect($host, $user, $password, $database);
    if($connection){
        echo "DATABASE CONNECTED";
    }
    print_r($_POST);
    $name = $_POST = ['name'];
    $text = $_POST = ['text'];
    if (isset($_POST['submit'])){
        $query = "INSERT INTO post (name, text) VALUES ('$name', '$text')";
    mysqli_query($connection, $query);
    
    
    }
?>


<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="all" />
		<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	<title></title>
</head>
<body>
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-offset-3">
					<h1>Submit Your Messege Here</h1>
					<form class="form-group" action="" method="post">
						<h2>Your Name</h2>
						<input name="name" class="form-control" type="text" placeholder="Your Name" />
						<h2>Your Messege</h2>
						<textarea name="text" class="form-control" name="" id="" cols="30" rows="10" placeholder="Your Messege"></textarea>
						<input name="submit" class="form-control btn btn-info" type="submit" value="submit"  />
					</form>
			
					
				</div>
			</div>
		</div>
	</section>
	
	
	
	
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>