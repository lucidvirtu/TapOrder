<!DOCTYPE html>

<html>
<head>
     <title>Tap Order</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
</head>

<style type="text/css">
.menu{
	border: solid;
	border-color: black;
	min-height: 2em;
	border-radius: 10px;
}
#submit-btn{
  float: right;
}

#show_total{
  font-size: 14;
  font-weight: bold;
  font-family: Tahoma;
}

thead{
  font-weight: bold;
}
</style>

<body>
<header>
<nav class="navbar navbar-inverse">
	<div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="">Tap Order</a>
    </div>
	</div>
</nav>
</header>

  <?php
    echo "Your Order has been submitted successfully. Tap the tag again to add your order";
  ?>

</body>
</html>