<?php include ('admin/config.php');?>
<!DOCTYPE html>
<html>
<head>
<title>
profile
</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<table>
							
							
                            <tr>
                                <th>ID</th>
                               <th>Name</th>
                               
                               <th>email</th>
                              
                               </tr>

                               
                               <tbody>


                               <tbody>

                                <?php
                                 $sql = "SELECT * fROM users";
                                 $result = $conn->query($sql);
                                 if($result->num_rows >0) {

                                    while ($row = $result->fetch_assoc()) {
                                        echo"<tr>";
                                        echo'<td>'.$row['id'].'</td>';
                                        echo'<td>'.$row['name'].'</td>';
                                       
                                        echo'<td>'.$row['email'].'</td>';
                                       
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