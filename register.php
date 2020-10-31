<?php

include('admin/config.php');
$message = '';
$errors = array();

if (isset($_POST['submit'])) { 
    $username = isset($_POST['username'])?$_POST['username']:'';
    $password = isset($_POST['password'])?$_POST['password']:'';
    $repassword = isset($_POST['repassword'])?$_POST['repassword']:'';
	$email = isset($_POST['email'])?$_POST['email']:'';

    if ($password != $repassword) {
	    $errors[] = array('input'=>'password','msg'=>'password not match');
	   //echo "Password doesn't Match";
    } 

    $sql = "SELECT `name`,`email` from users";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        if ($row["name"]== $username) {
            $errors[] = array('input'=>'form','msg'=>'username already exists');
        } elseif ($row["email"]== $email) {
            $errors[] = array('input'=>'form','msg'=>'email already exists');
        }
    }




	if (sizeof($errors)==0) {
       $sql = "INSERT INTO users(`name`, `password`, `email`) VALUES('".$username."', '".$password."', '".$email."')";

        if ($conn->query($sql) === true) {
        //echo "New record created successfully";
        } else {
	        $errors[] = array('input'=>'form','msg'=>$conn->error);
           //echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }

}
    

?>


<html>
<head>
<title>
Register
</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="wrapper">
<div id="signup-form">
<div id="message">
<?php echo $message; ?>
</div>
<div id="errors">
<?php if (sizeof($errors)>0) : ?>
<ul>
<?php foreach($errors as $error) : ?>
<li><?php echo $error['msg'];?> </li>
<?php endforeach; ?>
</ul>
<?php endif; ?>
<table id="a4">
<tr><td colspan="2"><h2>Sign Up</h2></td></tr>


<form  action="register.php" method="POST">


<tr>
 <td><label for="username" >Username:</td> <td><input type="text"  name="username" required></label></td>
</tr>
<tr>
   <td><label for="password">Password:</td> <td> <input type="password" name="password" required></label></td>
 </tr>
<tr>
  <td><label for="repassword">Re-Password:</td> <td> <input type="password" name="repassword" required></label></td>
</tr>
<tr>
 <td><label for="email">Email:</td> <td><input type="text" name="email" required></label></td>
</tr>
<tr>
  <td><input type="submit" id="sub" name="submit" value="Submit"></td>
   <td><a href="login.php" id="a2">LOgin</a></td>
</tr>
</table>
</form>

</div>
</div>
</body>
</html>