<?php include ('admin/config.php');?>
<!DOCTYPE html>
<html>
<head>
<title>
view quiz
</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<form method="post"  action="answer.php">
 <table>
							
							
								
								   </tr>

								   
								   <tbody>


								   <tbody>

									<?php
									 $sql = "SELECT * fROM questions";
									 $result = $conn->query($sql);
									 if($result->num_rows >0) {

										while ($row = $result->fetch_assoc()) {
											echo"<tr>";
										
                                            echo'<th>'.$row['question'].'</th>';
                                            echo"</tr>";
                                            echo"<tbody>";
                                            echo"<tr>";
                                            echo'<td> <input type="radio">'.$row['option1'].'</td>';
                                            echo"</tr>";
                                            echo"<tr>";
                                            echo'<td><input type="radio">'.$row['option2'].'</td>';
                                            echo"</tr>";
                                            echo"<tr>";
                                            echo'<td><input type="radio">'.$row['option3'].'</td>';
                                            echo"</tr>";
                                            echo"<tr>";
                                            echo'<td><input type="radio">'.$row['option4'].'</td>';
                                            echo"</tr>";
											
                                            echo"<tbody>";
									       
										}
									}

										  
										?>
                                        

                                     </tbody>
							

                                     

								   
								
								
							</table>

                            
                            <input type= "submit"  name="submit" value="Submit">
                            </form>
                            </html>
</body>
