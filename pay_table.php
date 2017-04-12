<?php
include 'connect.php';
	$url="http://localhost/taporder/counter.php";
	
	$table=(int)$_POST['tbnum'];

	$sql = "UPDATE tb SET tb_amount=0 WHERE tb_num=$table";
	$sql2 = "DELETE FROM orderedmenu WHERE table_num = $table";

	if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE){
		header('Location: '.$url);
	}
	else{
		echo 'Payment fail'.$conn->error;
	}

	$conn->close();

?>