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


</style>

<body>
<header>
<nav class="navbar navbar-inverse">
	<div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="">Tap Order</a>
    </div>
		<ul class="nav navbar-nav">
        <li><a href="#"> <?php echo "Table Number: ".$_GET['table']; ?> </a></li>
    </ul>
	</div>
</nav>
</header>

<content>
<!--Modal starts here -->
<div class="modal_box">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#foodModal">Add Food</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#drinksModal">Add Drinks</button>
<button type="button" class="btn btn-success" id="submit-btn">Submit Order</button>

<!-- Modal -->
<div id="foodModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
    	<div class="modal-header">
    		<button type="button" class="close" data-dismiss="modal">&times;</button>
        	<h4 class="modal-title">Menu List</h4>
      	</div>
    	<div class="modal-body">
        	<?php include "get_menu.php"; ?>
      	</div>
    	<div class="modal-footer">
        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      	</div>
    </div>
  </div>
</div>
<!--Modal ends here -->

<!-- Content for selected food goes here -->
</div>
<hr>
</content>

</body>

<script>
  
</script>
</html>