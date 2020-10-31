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
                                            echo'<input type="hidden" name="que" value="'.$row['question'].'">';
                                            
                                           
                                            
                                            echo"</tr>";
                                            echo"<tbody>";
                                            echo"<tr>";
                                            echo'<td> <input type="radio" value="0" name='.$row['option1'].'>'.$row['option1'].'</td>';
                                            echo'<input type="hidden" name="option1" value="'.$row['option1'].'">';
                                            echo"</tr>";
                                            echo"<tr>";
                                            echo'<td><input type="radio" value="1" name='.$row['option2'].'>'.$row['option2'].'</td>';
                                            echo'<input type="hidden" name="option2" value="'.$row['option2'].'">';
                                            echo"</tr>";
                                            echo"<tr>";
                                            echo'<td><input type="radio"value="2" name='.$row['option3'].'>'.$row['option3'].'</td>';
                                            echo'<input type="hidden" name="option3" value="'.$row['option3'].'">';
                                            echo"</tr>";
                                            echo"<tr>";
                                            echo'<td><input type="radio" value="3" name='.$row['option4'].'>'.$row['option4'].'</td>';
                                            
                                            echo'<input type="hidden" name="option4" value="'.$row['option4'].'">';echo"</tr>";
											
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
