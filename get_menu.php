<?php
	include 'connect.php';

	$sql = "SELECT menu_nameD, menu_desc, menu_price, menu_nameI, menu_url FROM menu";
	$result = $conn->query($sql);

	$div = "','";



	if ($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			$nameD = $row["menu_nameD"];
			$nameI = $row["menu_nameI"];
			$desc = $row["menu_desc"];
			$price = $row["menu_price"];
			$mURL = $row["menu_url"];

			echo
			"<div class='row menu'>
				<div class='row_inner col-xs-3'><img src='".$mURL."' class='img-responsive'></div>
				<div class='row_inner col-xs-6'>".$nameD."&nbsp &nbsp RM".$price."<br>".$desc."</div>
				<div class='row_inner col-xs-3'>
					<input type='button' value='Add' class='btn btn-success' onclick=AddToList('".$nameI."',".$price.")>
				</div>
			</div>";
		}
	}
	else{
		echo "no result";
	}

	$conn->close();
?>