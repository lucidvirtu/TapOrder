<?php
	include 'connect.php';

	$sql = "SELECT name, description, price FROM menulist";
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