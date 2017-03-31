<!DOCTYPE html>

<html>
<head>
     <title>Tap Order</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
</head>

<body>
<header>
	<nav class="navbar navbar-inverse">
	<div class="container">
		<ul class="nav navbar-nav">
      	<li><a href="#">Tap Order - Order List</a></li>
    	</ul>
	</div>
</nav>
</header>
<content>
	<?php
	include 'connect.php';

	$sql = "SELECT name, description, price FROM order_list";
	$result = $conn->query($sql);

	if ($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			echo
			"<div class='row menu'>
				<div class='row_inner col-xs-3'><img src='img/burger.jpg' class='img-responsive'></div>
			<div class='row_inner col-xs-6'>".$row["name"].
			"&nbsp &nbsp RM".$row["price"]."<br>".$row["description"]."</div>
			<div class='row_inner col-xs-3'>
			<button class='btn btn-success'>Add</button>
			</div></div>";
		}
	}
	else{
		echo "no result";
	}

	$conn->close();
?>
</content>	
</body>
</html>