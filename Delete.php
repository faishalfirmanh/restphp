<?php
include 'dbconfig.php';
$json = file_get_contents('php://input');
 // decoding the received JSON and store into $obj variable.
 $obj = json_decode($json,true);

 // Populate Student ID from JSON $obj array and store into $S_ID.
 $S_ID = $obj['id'];

 // Creating SQL query and Updating the current record into MySQL database table.
 $sql_delet ="Delete from users where id = '$S_ID'";
 if($conn->query($sql_delet)==TRUE){
 echo "sukses hapus";

 $MSG = 'Record Successfully DELETE Into MySQL Database.' ;
 $json = json_encode($MSG);
 echo $json;
 }
 else {
   echo "Coba lagi";
 }
 mysqli_close($conn);

 ?>
