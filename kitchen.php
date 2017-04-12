<!DOCTYPE html>

<html>
<head>
     <title>Tap Order</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<style type="text/css">
  		.btn{
  			float: right;
  		}
  	</style>  
</head>

<body>
<header>
	<nav class="navbar navbar-inverse">
	<div class="container">
		<ul class="nav navbar-nav">
      	<li><a href="#">Tap Order - Counter</a></li>
    	</ul>
	</div>
</nav>
</header>
<content>
<div class="container">
	<h2>Kitchen Order Ticket</h2>
	<?php
	include 'kitchen_script.php';
	?>

</div>
</content>
</body>
</html>