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
    Chart Type: <select name="chartType">
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

	array_multisort($grade, $firstName, $lastName);
	$tempSize = sizeof($grade) - 1;
	$zero = 0;
	echo "Lowest Score: $firstName[$zero] ===>$lastName[$zero] ======> $grade[$zero]" . '<br>';
	echo "Highest Score: $firstName[$tempSize] ===>$lastName[$tempSize] ======> $grade[$tempSize]" . '<br>';

  }


  if($_POST['sortStuff'] == "Score")
	 {
	 	//echo "Working";

	array_multisort($grade, $firstName, $lastName);
	 	//sort($grage[3]);
	 for ($i=0; $i <count($grade) ; $i++)
      {
        echo "$firstName[$i] ===>$lastName[$i] ======> $grade[$i]" . '<br>';
      }
	} elseif($_POST['sortStuff'] == "Name")
	 {
	 	//echo "Working";

	array_multisort($firstName, $grade, $lastName);
	 	//sort($grage[3]);
	 for ($i=0; $i <count($grade) ; $i++)
      {
        echo "$firstName[$i] ===>$lastName[$i] ======> $grade[$i]" . '<br>';
      }
	} elseif($_POST['sortStuff'] == "Last Name")
	 {
	 	//echo "Working";

	array_multisort($lastName, $firstName, $grade);
	 	//sort($grage[3]);
	 for ($i=0; $i <count($grade) ; $i++)
      {
        echo "$firstName[$i] ===>$lastName[$i] ======> $grade[$i]" . '<br>';
      }
	}


	if($_POST['chartType'] == "Bar")
	{
		echo " <table style='width:100%'>
  		<tr>
    		<th>Name</th>
    		<th>Grade</th>
    		<th>Chart</th>
  		</tr>";

  		for ($j=0; $j <count($grade) ; $j++)
  		{
  			echo "<tr>
    			<td>$firstName[$j] $lastName[$j]</td>
    			<td>$grade[$j]</td>
    			<td> <svg width='100' height='20'>
  <rect width='$grade[$j]' height='20' style='fill:rgb(0,0,255);stroke-width:3;stroke:rgb(0,0,0)' />
</svg> </td>
  			</tr>";
  		}
  		
		echo "</table> ";
	}
?>



</div>

 <!--for ($i=0; $i <count($name) ; $i++)
      {
        echo "$firstName[$i] ===>$lastName[$i] ======> $grade[$i]" . '<br>';
      }-->


</html>


