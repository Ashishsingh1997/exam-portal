
<?php include ('config.php');?>

<?php



 if (isset($_POST['submit'])) { 
    $question= isset($_POST['qus'])?$_POST['qus']:'';
    $option1= isset($_POST['op1'])?$_POST['op1']:'';
    $option2= isset($_POST['op2'])?$_POST['op2']:'';
    $option3= isset($_POST['op3'])?$_POST['op3']:'';
    $option4= isset($_POST['op4'])?$_POST['op4']:'';
    $Answer= isset($_POST['ans'])?$_POST['ans']:'';
    $subject= isset($_POST['cat'])?$_POST['cat']:'';
	
	$sql= "INSERT INTO questions (`question`,`option1`,`option2`,`option3`,`option4`,`Answer`,`subject`) VALUES('".$question."','".$option1."','".$option2."','".  $option3."','".$option4."','".$Answer."','".$subject."')";
	if ($conn->query($sql) === true) {
        echo "New record created successfully";
        header("location:viewquiz.php");
    } else {
	        $errors[] = array('input'=>'form','msg'=>$conn->error);
           echo "Failed";
    }
 }
 ?>

 