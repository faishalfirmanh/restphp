<?php
include_once "dbconfig.php";
	$data = json_decode(file_get_contents('php://input'), true);
	// $id=$data['id'];;
	$name=$data['name'];
	$age=$data['age'];


	$sql = "insert into users(name, age) values('$name', '$age')";

	$info=array();
	$info['sql']=$sql;
	if (mysqli_query($conn, $sql)) {
		$info['success'] =1;
		$info['detail'] = 'success';
	} else {
		$info['success'] =0;
		$info['detail'] =mysqli_error($conn);
	}

	mysqli_close($conn);
	echo json_encode($info);
 ?>
