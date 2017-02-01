<!DOCTYPE html>
<html>
  <body>
    
    <form action="Stats.php" method="post">
      Title: <input type="text" name="FirstName" value=""><br>
      Chart Type: <select>
	<option value="Stats">Stats</option>
	<option value="Bar">Bar</option>
	<option value="Line">Line</option>
	<option value="Pie">Pie</option>
      </select><br>
      Sort by: <select>
	<option value="None">None</option>
	<option value="Score">Score</option>
	<option value="Name">Name</option>
	<option value="Last Name">Last</option>
      </select><br>
      Chart Data: <textarea rows="5" cols="50">Bob Bradley, 99 </textarea>
      
      <input type="submit" value="Submit">
    </form>
    
    <HR>
    
    <h1> <!-- This is where the heading is echo back -->
      <br>
      <?php echo $_POST["FirstName"]; ?>
      <br>
    </h1>
    
    <?php 
       $str1="Highest: ";
       $str2="Lowest: ";
       $str3="Average: ";
       
       echo $_POST["str1"];
       echo "<br>";
       echo $_POST["str2"];
       echo "<br>";
       echo $_POST["str3"];
       ?>
    
  </body>
</html>
