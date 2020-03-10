<?php
header("Content-type: application/json; charset=ISO-8859-1");
	include_once "dbconfig.php";

	$sql = "select * from users";
	$query = mysqli_query($conn, $sql);

	$arrBuku = array();
	while ($row = mysqli_fetch_array($query)){
		$arrBuku[] = $row;
	}
	echo json_encode($arrBuku );
	mysqli_close($conn);
 ?>
