
<?php include ('config.php');?>

<!DOCTYPE html>
<html>
<body>

<h2>QUESTIONS</h2>
   <div id="fm">
<form method="post"  action="addquiz.php">
    <div class="form-group">
  <label for="text">Question</label><br>
  <input type="text" id="fname"  size="50" name="qus" placeholder="Enter question"><br><br>

  <div class="form-group">
  <label for="text">option-1</label><br>
  <input type="text" id="fname"  size="50" name="op1" placeholder="Enter option-1"><br><br>

  <div class="form-group">
  <label for="text">option-2</label><br>
  <input type="text" id="fname" size="50"  name="op2" placeholder="Enter option-2"><br><br>

  <div class="form-group">
  <label for="text">option-3</label><br>
  <input type="text" id="fname" size="50" name="op3" placeholder="Enter option-3"><br><br>

  <div class="form-group">
  <label for="text">option-4</label><br>
  <input type="text" id="fname"  size="50" name="op4" placeholder="Enter option-4"><br><br>

  <div class="form-group">
  <label for="text">Answer</label><br>
  <input type="text" id="fname"  size="50" name="ans" placeholder="Enter Answer"><br><br>

  
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

</div>

</body>
</html>




