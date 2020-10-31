
<?php
session_start();
include('admin/config.php');
$message = '';
$errors = array();

if (isset($_POST['submit'])) { 
    $username = isset($_POST['username'])?$_POST['username']:'';
    $password = isset($_POST['password'])?$_POST['password']:'';
    
    if (sizeof($errors)==0) {
        $sql = "SELECT * FROM users WHERE 
		`name`='".$username."' AND `password`='".$password."'";
		 $result = $conn->query($sql);

	    if ($result->num_rows > 0) {
		// output data of each row
	    while ($row = $result->fetch_assoc()) {


			$_SESSION['userdata'] = array('username'=>$row['username'],'user_id'=>$row['user_id']);
			header('location:home.php');
			
		  }
	  } else {
		  $errors[] = array('input'=>'form','msg'=>'invalid details');
		  
		}
        $conn->close();
    }

}
?>


<html>
<head>
<title>
Login
</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="wrapper">
    <div id="login-form">
		<table id="b1">
     <h2> Student Login</h2>
     <form action="" method="POST">
                <tr>
                <td> <label for="username">Username:</td> <td> <input type="text" name="username" required></label></td>
            </tr>
				<tr>
					<td><label for="password">Password:</td> <td> <input type="text" name="password" required></label></td>
               </tr>
				<tr>
					<td><input type="submit" id="a1" name="submit" value="Submit"></td>
			   </tr>
         </table>
			</form>
		</div>
	</div>
</body>
</html>