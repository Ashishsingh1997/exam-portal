<?php include ('config.php');?>
<!DOCTYPE html>
<html>
<head>
<title>
view quiz
</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>



<table>
							
							
								<tr>
                                    <th>ID</th>
								   <th>question</th>
								   <th>option1</th>
								   <th>option2</th>
								   <th>option3</th>
								   <th>option4</th>
								   <th>Answer</th>
								   <th>subject</th>
                                   <th>Edit</th>
                                   <th>Delete</th>
								
								   </tr>

								   
								   <tbody>


								   <tbody>

									<?php
									 $sql = "SELECT * fROM questions";
									 $result = $conn->query($sql);
									 if($result->num_rows >0) {

										while ($row = $result->fetch_assoc()) {
											echo"<tr>";
											echo'<td>'.$row['id'].'</td>';
											echo'<td>'.$row['question'].'</td>';
											echo'<td>'.$row['option1'].'</td>';
											echo'<td>'.$row['option2'].'</td>';
                                            echo'<td>'.$row['option3'].'</td>';
                                            echo'<td>'.$row['option4'].'</td>';
											echo'<td>'.$row['Answer'].'</td>';
											
											echo'<td>'.$row['subject'].'</td>';

                                          echo'<td>
											<a href="#" title="Edit">Edit</a></td>
											<td><a href="deletequestion.php?id='.$row['id'].'" title="Delete">Delete</a> 
										    </td>';
										  echo"</tr>";
										}
									}

										  
										?>


                                     </tbody>
							



								   
								
								
							</table>
                            </html>
</body>
