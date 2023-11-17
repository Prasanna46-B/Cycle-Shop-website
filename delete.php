<?php include 'connect.php';?>
<?php

$delete =$_GET['id'];

$sql ="DELETE FROM reg_form WHERE id='$delete'";

$res = mysqli_query($con,$sql);
if($res){
	header("location:create.php");
}
else
{
	echo "not delete";
}

?>