<?php

//include("header.php");
include("dbconn.php");

function highlight($text, $words, $color='yellow', $case='1') { 
 $words = trim($words); 
 $wordsArray = explode(' ', $words); 
 
 foreach($wordsArray as $word) { 
  if(strlen(trim($word)) != 0) 
   if ($case) {
    $text = eregi_replace($word, '<font style="background:' . $color . '";>\\0</font>', $text);
     } else {
    $text = ereg_replace($word, '<font style="background:' . $color . '";>\\0</font>', $text); 
   }
  } 
 return $text; 
}
?>



  

  <?php


  //if (!isset($_POST['ign']) || isset($_POST['email'])) {
if(isset($_POST['criteria'] ) ){

	$criteria = $_POST['criteria'];
	
	 	$filter = "";
	 	$filterd="";
	 	//$filterd="";
  	//	echo"$filter"
  		
  	if(isset($_POST['filter'] ) && $_POST['filter']!=""  && $criteria=="Title"){

  		$filter=$_POST['filter'];
  	//	$filterd=$filter;
  		//echo"t1".$filter."d1".$filterd;




  		
  		
  	}

  	if(isset($_POST['filterd'] ) && $_POST['filterd']!="" && $criteria=="Description"){
  		//echo"decription";
  		

  		$filterd=$_POST['filterd'];
  		//$filter=$filterd;
  		//echo"t12".$filter."d12".$filterd;
  		


  		
  	}


	
 

if($criteria=="Title"){

	//echo"inside criteria";
  	$query="select * from artworks where Title like '%".$filter."%'";
  
 

  
}

else if($criteria=="Description"){
	//echo"inside desc";
			$query="select * from artworks where Description like '%".$filterd."%'";
			
  
}

else if($criteria=="none"){
	//echo"inside ";
	$query="select * from artworks";
	$filterd="";
  	$filter="";
	}

  $results = mysql_query($query, $conn);
 // echo $result;
 
   if(!$results){
  //	echo"no result";
  }

 // echo $result;
  while($row = mysql_fetch_assoc($results))

  {
  	//echo $sunita;
  	$id=$row['ArtWorkID'];
	$title=$row['Title'];
	$description=$row['Description'];
	$image=$row['ImageFileName'];
	//$text=$description.$title;

	//echo $title;
	?>

		<div  class="row" id="search">
			<div class="col-md-2">
					<p><img class="responsive" src="../art-images/works/square-medium/<?php echo $image.".jpg"?>" alt="" ></p>
			</div>
		<div class="col-md-10">
			<h4><p><a href='part03_SingleWork.php?id=<?php echo $id; ?>'> <?php echo highlight($title,$filter) ?></a></p></h4>
			<p><?php echo highlight($description, $filterd) ?></p>
		</div>
	</div>
	<?php

	}

}
  ?>






</div>
<?php
//include("footer.php")
?>

