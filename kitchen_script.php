<?php
	include 'connect.php';

	$sql = "SELECT tb_num, tb_ready, tb_payment, tb_amount, date_time FROM tb";
	
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			$num = $row["tb_num"];
			$ready = $row["tb_ready"];
			$payment = $row["tb_payment"];
			$amount = $row["tb_amount"];
			$date_time = $row["date_time"];

			if ($ready==TRUE){
				echo "
				<form id='pay' method='post' action='order_completion.php'>
				<div class='panel panel-default'>
					<div class='panel-heading'>Table:".$num."</div>
  					<div class='panel-body'>
  					Ordered Items:"
  					?>

  					<?php
  					$sql2 ="SELECT * FROM orderedmenu WHERE table_num=$num";
  					$result2 = $conn->query($sql2);
  					if ($result2->num_rows > 0){
						while($row = $result2->fetch_assoc()){
							$menu = $row["menu_name"];
							echo $menu.", &nbsp";
						}

						echo "<br>";
					}
  					?>

  					<?php
  					echo
  					"Order Date & Time: ".$date_time."
  					<input type='hidden' name='tbnum' value=".$num.">
  					<input type='submit' name='submit' value='Order Completed' class='btn btn-success'>
  					</div>
				</div>
				</form>
				";
			}
			else if ($ready==FALSE)
				echo "
				<div class='panel panel-default'>
					<div class='panel-heading'>Table:".$num."</div>
  					<div class='panel-body'>Table ".$num." has no pending orders</div>
				</div>
			";
					
		}
	}
	else {
			echo "null results";
		}

	$conn->close();
?>
