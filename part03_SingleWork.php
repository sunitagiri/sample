<?php

include("header.php");
include("dbconn.php");
$artid = $_GET['id'];

  $querycheck = "select * from artworks where ArtWorkID=".$artid;
  $resultcheck = mysql_query($querycheck, $conn);

  

 if(mysql_fetch_assoc($resultcheck)==0){
 	//echo"not found";
 	include("error.php");
  	exit();
 	
}

	//echo "found";

  $query = "select * from artworks where ArtWorkID=".$artid;
  $result = mysql_query($query, $conn);

    $query1 = "select * from artworks, artists where artists.ArtistID=artworks.ArtistID and ArtWorkID=".$artid;
  $result1 = mysql_query($query1, $conn);


   $querygenre = "select * from artworks as aw, genres as g, artworkgenres as awg where aw.ArtWorkID= awg.ArtWorkID and awg.GenreID=g.GenreID and aw.ArtWorkID=".$artid;
  $resultgenre = mysql_query($querygenre, $conn);


   $querysubject = "select * from artworks as aw, subjects as s, artworksubjects as aws where aw.ArtWorkID= aws.ArtWorkID and aws.SubjectID=s.SubjectID and aw.ArtWorkID=".$artid;
  $resultsubject = mysql_query($querysubject, $conn);
 // echo $result;



  $queryorder = "select DATE_FORMAT(DateCreated, '%d/%m/%Y') as date from artworks as aw, orders as o, orderdetails as od where aw.ArtWorkID= od.ArtWorkID and od.OrderID=o.OrderID and aw.ArtWorkID=".$artid;
  $resultorder = mysql_query($queryorder, $conn);

 


 // echo $result;
  while($row = mysql_fetch_assoc($result))
  {

	$title=$row['Title'];
	$artid=$row['ArtWorkID'];
	$filename=$row['ImageFileName'];
	$description=$row['Description'];
	$artistid=$row['ArtistID'];
	$cost1=$row['MSRP'];
	$cost= number_format($cost1, 2);
	$workyear=$row['YearOfWork'];
	$width=$row['Width'];
	$height=$row['Height'];
	$medium=$row['Medium'];
	$home=$row['OriginalHome'];
	//$home=implode(",", $home1);
	//$home=implode("|",$home1);
	//$home=trim( implode( $home1 ) );
	//echo $title;
  }

  while($row1 = mysql_fetch_assoc($result1))
  {

	
	$artid1=$row1['ArtWorkID'];
	
	$artistid1=$row1['ArtistID'];
	
	$fname1=$row1['FirstName'];
	$lname1=$row1['LastName'];
	
  }

  $subject="";
  $genre="";
    while($rowgenre = mysql_fetch_assoc($resultgenre))
  {

	
	$subject1=$rowgenre['GenreName'];
	if($subject!=""){
		$subject=$subject."<br>".$subject1;

	}
	else if($subject==""){
		$subject=$subject1;
	}
	//echo "sunita".$subject;
	//echo"end";

	
  }

    while($rowsubject = mysql_fetch_assoc($resultsubject))
  {

		$genre1=$rowsubject['SubjectName'];
		if($genre!=""){
			$genre=$genre."<br>".$genre1;

		}
		else if($genre==""){
			$genre=$genre1;
		}
		

	
  }




?>

<div class="container">

	<h3><?php echo $title?></h3>
	<p>By <a href='part02_SingleArtist.php?id=<?php echo $artistid1; ?>'> <?php echo $lname1." ".$fname1 ?></a></p?
	<div class="row">

		<div class="col-md-4">
				<a href="#" data-toggle="modal" data-target="#myModal"><img class="img-responsive" src="../art-images/works/medium/<?php echo $filename.".jpg"?>" alt="" height="" class="img-thumbnail" ></a> 
			 
			 <!-- <a href="#" data-toggle="modal" data-target="#modalRegister"> -->
			 <!-- <img src="../art-images/works/medium/<?php// echo $filename.".jpg"?>" alt="" height="" class="img-thumbnail" >  -->

		</div>
	<div id="myModal" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  	<div class="modal-dialog">
	    	<div class="modal-content">
	    		 <div class="modal-header">
	         		 <button type="button" class="close" data-dismiss="modal">&times;</button>
	         		 <h4 class="modal-title"><?php echo $title."(". $workyear.") by ".$lname1." ".$fname1 ?></h4>
	        	</div>
	        	<div class="modal-body">
	        		 <!--  -->
	            	<img class="img-responsive" src="../art-images/works/medium/<?php echo $filename.".jpg"?>" alt="" height="600 px" width="457 px" class="img-responsive">
	        	</div>
	        	<div class="modal-footer">
	         		 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        	</div>
	    	</div>
  		</div>
	</div>

		<div class="col-md-6">
			<p><?php echo $description ?></p>
			<p ><h3 class="cost"><?php echo "$".$cost ?></h3></p>
			 <p><a class="btn btn-link btn-lg " href="#" role="button"><span class="glyphicon glyphicon-gift"></span> Add To Wish List </a><a class="btn btn-link btn-lg" href="#" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Add To Shopping Cart </a></p>		
				
		<!-- 	<div class="btn-group" role="group" aria-label="...">
				  <button  class="btn btn-link btn-lg "type="button" class="btn btn-default"><span class="glyphicon glyphicon-gift"></span>Left</button>
				  
				  <button class="btn btn-link btn-lg " type="button" class="btn btn-default"><span class="glyphicon glyphicon-shopping-cart"></span>Right</button>
		    </div> -->
		    <div class="panel panel-default">
			<table class="table">
				<thead>
					<tr>
						<td class="active" colspan="2"><h4>Product details<h4></td>
					<tr>
				</thead>
				 	<tr>
						<td class="title">Date:</td>
						<td><?php echo $workyear ?></td>
					</tr>
					<tr>
						<td class="title">Medium:</td>
						<td><?php echo $medium ?></td>
					</tr>

					<tr>
						<td class="title">Dimensions:</td>
						<td><?php echo $width. " cm *  ".$height." cm" ?></td>
					</tr>
					<tr>
						<td class="title">Home:</td>
						<td><?php echo $home ?></td>
					</tr>
					<tr>
						<td class="title">subjects:</td>
						<td><a href='#'><?php echo $subject ?></td>
					</tr>
					<tr>
						<td class="title">Genre:</td>
						<td><a href='#'><?php echo $genre ?></td>
						
					</tr>

				</tbody>
			</table>
		</div>
		</div>

		<div class="col-md-2">
			<div class="panel panel-default"> 
			<table id="time" class="table"   >
				<thead>
					<tr>
						<td class="info" colspan="2"><h4>Sales<h4></td>
					<tr>
				</thead>
				<tbody>



					<?php

					      while($roworder = mysql_fetch_assoc($resultorder))
 						 {

								$order=$roworder['date'];


					?>
					<tr >
						<td><a href='#'><?php echo $order ?></td>
						
					</tr>
				
				<?php
				  }


				?>
					
				</tbody>

			</table>
		</div> 


		</div>



</div>




<?php

include("footer.php")
?>