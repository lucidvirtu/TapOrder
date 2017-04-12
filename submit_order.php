<?php
include 'connect.php';

$counter="";

$total=(float)$_POST['total']; //parse total amount to be paid by the table
$tbnum = (int)$_POST['num']; //parse the table number
$itemnum = (int)$_POST['itemnum']; //parse teh number of item ordered
$itemarray = array(); //array for storing name of ordered item
$total2= 0.0;

for ($i=1; $i<=$itemnum; $i++){
	$counter = "item".$i;  //value used to parse through itemname in list
	$itemarray[$i] = $_POST[$counter]; //parse item list values and put in array
}

for($j=1; $j<=($itemnum); $j++){
	$temp = $itemarray[$j];
	$sql = "INSERT INTO orderedmenu (menu_name,table_num) VALUES ('$temp', '$tbnum')";

	if ($conn->query($sql) === TRUE and $j<$itemnum) {
    	echo "";
	}
	else if ($conn->query($sql) === TRUE and $j=$itemnum){
		echo "";
	}
	else {
    echo "Error submitting order. Please try again." . $conn->error;
	}
}


$getamountsql = "SELECT tb_amount FROM tb WHERE tb_num = $tbnum";
$result = $conn->query($getamountsql);
if ($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			$total2 = $total+((float)$row['tb_amount']);
		}

	}

else{
	echo "No result";
}
$sql = "UPDATE tb SET tb_ready = 1, tb_payment = 1, tb_amount = $total2 WHERE tb_num=$tbnum";
//$sql .= "INSERT INTO orderlist (tb_amount, tb_num) VALUES ($total2, $tbnum)";

if ($conn->multi_query($sql) === TRUE) {
    header('Location: http://localhost/taporder/default_header.php');
} else {
   echo "Error submitting order. Please try again." . $conn->error;
}

?>