
<?php

include("header.php");
include("dbconn.php");
?>

<div class="container">
	 
		<h2>Artist Display</h2>
		
      <hr>


<?php

  //echo $database;
  $query = "select * from artists order by LastName ASC";
  $result = mysql_query($query, $conn);

 
 // echo $result;
  while($row = mysql_fetch_assoc($result))
  {

	$fname=$row['FirstName'];
	$lname=$row['LastName'];
	$bdate=$row['YearOfBirth'];
	$ddate=$row['YearOfDeath'];
	$id=$row['ArtistID'];
	

	$data=$fname." ".$lname. " "."(".$bdate."-".$ddate.")"."<br>";
	
	//echo  "<a href='#>".$data;
	?>

	<a href='part02_SingleArtist.php?id=<?php echo $id; ?>'> <?php echo $data;
		//<a href='singleartist.php?id=<?php echo $id; 
	
	
}


?>

</div>


<?php
include("footer.php")
?>