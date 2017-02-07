<!DOCTYPE html>
<html>
<<<<<<< HEAD
<body>
<style>
#text 
   {
   font-size: 100%;
   display: inline;
   font-size: 40%;
   color: black;
   padding: 20px 40px;
   text-decoration: none;
   border-radius: 4px 4px 0 0;
   background-color: white;
   cursor: pointer; 
   border-radius: 50%
   }   
</style>

<div style="float: center; position: relative;  background-color: lightgrey; height: 383px; width: 1155px; border: 20px; padding: 10px; margin: 25px;">

<form action="Stats.php" method="post">

  <div style="font-size: 170%">Title:<input style="font-size: 90%;" type="text" name="FirstName" value=""></div><br><hr>

  <div style="font-size: 150%">
    Chart Type: <select>
    <option value="Stats">Stats</option>
    <option value="Bar">Bar</option>
    <option value="Line">Line</option>
    <option value="Pie">Pie</option>
  </select><br><hr>

Sort by: <select>
  <option value="None">None</option>
  <option value="Score">Score</option>
  <option value="Name">Name</option>
  <option value="Last Name">Last</option>
</select><br><hr>

Chart Data: <textarea action="Stats.php" method="post" name="comment" rows="5" cols="50"></textarea> </div>
<br><hr>
<input id="text"  type="submit" value="Submit">
<br><br><hr>
</form>

<br>
<h1 style="align: centr;"> <!--This is where the heading is echo back -->
  <?php echo $_POST["FirstName"]; ?>
  <br>
</h1>

  <?php   	
	$str = $_POST["comment"]; // Assigning Post to variable str

  if($_POST) // Loop until the post is finish
  {
    foreach (explode("\n", $str) as $key) 
    {
      list($name, $grade) = explode(',', $key);

      for ($i=0; $i <count($name) ; $i++)
      {
        echo "$name ======> $grade";
      }
    }
}
	/*$arr2 = (explode("/n", $str));  	 
	print_r(arr2);
	foreach ($arr2 as $key => $value) {
		$arr2[$key] = explode(',', $value);
		echo "$arr2[$key]";*/
  	?>



</div>


</body>
=======
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
      Chart Data: <textarea name="ChartData" rows="5" cols="50">Bob Bradley, 99 </textarea>
      
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
       echo $_POST["ChartData"];
       ?>
    
  </body>
>>>>>>> origin/master
</html>


