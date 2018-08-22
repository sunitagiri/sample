<?php
include("header.php")

?>
		
		<div class="jumbotron">
			<div class="container" roles="main">
				<h1> Welcome to Assignment #1</h1>
				<p>This is the first assignment for your comp</p>
			</div>
		</div>


	<div class="container">
 
      <div class="row">
        
        <div class="col-md-2">
         <p><h3><span class="glyphicon glyphicon-info-sign"></span>About Us</h3></p>
          <p> What this is all about and other stuff</p>
          <p><a class="btn btn-default" href="about.php" role="button"><span class="glyphicon glyphicon-link"></span> Visit Page </a></p>
         
        </div>

        <div class="col-md-2">
          <p><h3><span class="glyphicon glyphicon-list"></span>Artist List</h3></p>
          <p> Display a name of artist name as links</p>
          <p><a class="btn btn-default" href="part01_Artistlist.php" role="button"><span class="glyphicon glyphicon-link"></span> Visit Page </a></p>
       </div>

        <div class="col-md-2">
          <p><h3><span class="glyphicon glyphicon-user"></span>Single Artist</h3></p>
          <p> Display information for single artist</p>
          <p><a class="btn btn-default" href="part02_SingleArtist.php?id=19" role="button"><span class="glyphicon glyphicon-link"></span> Visit Page </a></p>
        </div>

         <div class="col-md-2">
           <p><h3><span class="glyphicon glyphicon-picture"></span>Single Work</h3></p>
          <p> Display informatin for single work</p>
          <p><a class="btn btn-default" href="part03_SingleWork.php?id=394" role="button"><span class="glyphicon glyphicon-link"></span> Visit Page </a></p>
        </div>

        <div class="col-md-2">
           <p><h3><span class="glyphicon glyphicon-search"></span>Search</h3></p>
          <p> Perform search on art work table</p>
          <p><a class="btn btn-default" href="part04_Search.php" role="button"><span class="glyphicon glyphicon-link"></span> Visit Page </a></p>
        </div>
      </div>

      

   
    </div>

<?php
include("footer.php")
?>