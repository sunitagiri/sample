<?php

include("header.php");
include("dbconn.php");
$id = $_GET['id']; 

  $querycheck = "select * from artists where ArtistID=".$id;
  $resultcheck = mysql_query($querycheck, $conn);

 if(mysql_fetch_assoc($resultcheck)==0){
 	//echo"not found";
 	include("error.php");
  	exit();
 	
}



//echo"id".$id;
  $query = "select * from artists where ArtistID=".$id;
  $result = mysql_query($query, $conn);

  if(!$result){
  	echo"no result";
  }
 // echo $result;
  while($row = mysql_fetch_assoc($result))
  {

	$fname=$row['FirstName'];
	$lname=$row['LastName'];
	$bdate=$row['YearOfBirth'];
	$ddate=$row['YearOfDeath'];
	$nationality=$row['Nationality'];
	$details=$row['Details'];
	$links=$row['ArtistLink'];
  }



  $query1="select * from artists, artworks where artists.ArtistID=artworks.ArtistID and artists.ArtistID=".$id;
   $result1 = mysql_query($query1, $conn);

  if(!$result1){
  	echo"no result";
  }
 // echo $result;


?>



<div class="container">
	<h3><?php echo $fname ." ". $lname ?></h3>
	<div class="row">

		<div class="col-md-4">

			<img class="img-responsive" src="../art-images/artists/medium/<?php echo $id.".jpg"?>" alt="" height="" class="img-thumbnail" >

		</div>
		<div class="col-md-5">
			<p><?php echo $details ?></p>
			 <p ><a class="btn btn-link btn-lg " href="#" role="button"><span class="glyphicon glyphicon-heart"></span> Add To Favourite List </a></p>		
		  <div class="panel panel-default">
			<table class="table ">
				<thead>
					<tr>
						<td class="active" colspan="2"><h3>Artist Details<h3></td>
					<tr>
				</thead>
				<tbody>
					<tr>
						<td class="title">Date:</td>
						<td><?php echo $bdate. "-".$ddate ?></td>
					</tr>
					<tr>
						<td class="title">Nationality:</td>
						<td><?php  echo $nationality ?></td>
					</tr>
					<tr>
						<td class="title">More Info:</td>
						<td><a href='<?php echo $links ?>'><?php echo $links ?></td>
					</tr>

				</tbody>
			</table>
		</div>
		</div>
	</div>

		<h3>Art by <?php echo $fname ." ". $lname ?></h3>

	<div class="row ">
		 <div class="row-eq-height">
		<?php 
			  while($row1 = mysql_fetch_assoc($result1))
				  {

				  	$artid=$row1['ArtWorkID'];
					$title=$row1['Title'];
					$workyear=$row1['YearOfWork'];
					$filename=$row1['ImageFileName'];
					//echo $filename
					
					//echo "sunita".$title;
					//echo $workyear;
		?>
				<div class="col-xs-18 col-sm-6 col-md-3">
         			<div class="thumbnail">
          			 	 <img class="img-responsive" src="../art-images/works/square-medium/<?php echo $filename.".jpg"?>" alt="" height="" class="img-thumbnail" >
            	 		 <div class="caption"  id="captionid" >
              	  			<p id="buttontext"><a href='part03_SingleWork.php?id=<?php echo $artid; ?>'>  <?php echo $title.",".$workyear ;?></a></p>
               	  			<p id="textbutton" >  <a class="btn btn-primary btn-sm" href="#" role="button"><span class="glyphicon glyphicon-info-sign"></span> View </a> <a class="btn btn-success btn-sm" href="#" role="button"><span class="glyphicon glyphicon-gift"></span> wish </a> <a class="btn btn-info btn-sm" href="#" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> cart </a></p>
             	 		 </div>
          			</div>
       			 </div>
			<?php
				 }
  			?>


  		</div>
	</div>
</div>


<?php
include("footer.php")
?>