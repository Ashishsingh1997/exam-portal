
<?php include ('admin/config.php');?>

<!DOCTYPE html>
<html>
<body>
<form method="post"  action="showquestion.php">
<label for="cat">Choose a Subject</label>
  
  <?php
								 $sql = "SELECT * fROM subject";
								 $result = $conn->query($sql);
								 $row_count=   $result->num_rows;
								 ?>
								 <select name="cat" id="cars">
								 <?php
								 for ($i=1;$i<=$row_count;$i++) {
									$row = $result->fetch_assoc();
									?>
									<option value="<?php echo $row["id"]?>"><?php echo $row["name"]?></option>
									<?php
								 }
					
								 ?>
  <br><br>

<input type= "submit"  name="submit" value="Submit">
</form>
</body>
</html>


                                    
							
