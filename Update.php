<?php
include 'dbconfig.php';

$json = file_get_contents('php://input');
$obj = json_decode($json,true);
$S_ID = $obj['id'];
$name = $obj['name'];
$age = $obj['age'];

$sql_update ="Update users set name = '$name', age ='$age' Where id = '$S_ID'";
if($conn->query($sql_update)==TRUE){
echo "sukses ganti";

$MSG = 'Record Successfully Inserted Into MySQL Database.' ;
$json = json_encode($MSG);
echo $json;
}
else {
  echo "Coba lagi";
}
mysqli_close($conn);



 ?>
