<?php
	include 'connect.php';

	$sql = "SELECT name, description, price FROM menulist";
	$result = $conn->query($sql);

	if ($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
		echo "
		<tr>
			<td><img src='img/burger.jpg'></td>
			<td>".$row["name"]."</br>".$row["description"]."</td>
			<td><button class='btn btn-primary'>Add Item</button></td>
		</tr>

		";
		}
	}
	else{
		echo "no result";
	}

	$conn->close();
?>