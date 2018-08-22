<?php

include("header.php");
include("dbconn.php");

?>

<div class="container">
	<p><h2>Search Results </h2></p>
	<hr>
<div class="panel panel-default">
    	<div class="panel-heading">
    			 <form>
					    <div class="radio">
					    <h4> <label><input type="radio" name="optradio">Filter by Title:</label></h4>
					    </div>

					     <input class="form-control input-lg" id="inputlg" type="text">

					    <div class="radio">
					      <h4><label><input type="radio" name="optradio">Filter by Description:</label></h4>
					    </div>

					    <div class="radio ">
					     <h4> <label><input type="radio" name="optradio" disabled>No Filter(show all art works):</label></h4>
					    </div>

					    <h4><button type="button" class="btn btn-primary btn-lg">Filter</button></h4>
  				</form>
    	</div>
    	
  </div>

</div>



<?php
include("footer.php")
?>