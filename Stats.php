<!DOCTYPE html>
<html>
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

Sort by: <select name="sortStuff">
  <option value="None">None</option>
  <option value="Score">Score</option>
  <option value="Name">Name</option>
  <option value="Last Name">Last</option>
</select><br><hr>

Chart Data: <textarea action="Stats.php" name="comment" rows="5" cols="50"></textarea> </div>
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

 	$firstName = [];
  	$lastName =[];
  	$grade =[];
	$name = [];
	$counter = 0;

  if($_POST) // Loop until the post is finish
  {
    foreach (explode("\n", $str) as $key) 
    {
      list($tempName, $grades) = explode(',', $key);
      $name[] = $tempName;
      $grade[] = $grades;

      list($first_Name, $last_Name) = explode(" ", $tempName);
      $firstName[] = $first_Name;
      $lastName[] = $last_Name;
      $counter++;
	}
  }


  if($_POST['sortStuff'] == "Score")
	 {
	 	//echo "Working";

	array_multisort($grade[2], $firstName, $lastName);
	 	//sort($grage[3]);
	 for ($i=0; $i <count($grade) ; $i++)
      {
        echo "$firstName[$i] ===>$lastName[$i] ======> $grade[$i]" . '<br>';
      }
}
?>



</div>

 <!--for ($i=0; $i <count($name) ; $i++)
      {
        echo "$firstName[$i] ===>$lastName[$i] ======> $grade[$i]" . '<br>';
      }-->

</body>
</html>


