<?php
require_once 'connection.php';

$id= $_GET['delid'];
$sql = "DELETE FROM user WHERE id=$id";
$result= mysqli_query($con,$sql);

if($result){
	echo "record deleted";
	header("refresh:2;url=cls.php");
}
else
{
	echo "can not delete";
}


?>