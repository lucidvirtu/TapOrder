<?php
include 'connect.php';
	$url="http://localhost/taporder/kitchen.php";
	
	$table=(int)$_POST['tbnum'];

	$sql = "UPDATE tb SET tb_ready=0 WHERE tb_num=$table";

	if ($conn->query($sql) === TRUE){
		header('Location: '.$url);
	}
	else{
		echo 'Payment fail'.$conn->error;
	}

	$conn->close();

?>