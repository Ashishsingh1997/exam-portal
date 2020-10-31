<?php 
include('config.php'); 
$id=$_REQUEST['id'];

$sql = "DELETE FROM questions WHERE `id`=  '" . $id."'";
if ($conn->query($sql)==true) {
    header("location:viewquiz.php");
} else {
    echo $conn->error;

}
?>