<!DOCTYPE html>
<!-- 
    Student Name:
-->
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta  name="viewport" content="width=device-width, initial-scale=1">



	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	  <script type="text/javascript" src="model.js"></script>
<!-- Latest compiled and minified JavaScript -->
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<body>

		<nav class="navbar navbar-default navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
    
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="default.php">Assign 1</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="default.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
           
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="part01_Artistlist.php">Artist Datalist (part 1)</a></li>
                <li><a href="part02_SingleArtist.php?id=19">Single Artist (part 2)</a></li>
                <li><a href="part03_SingleWork.php?id=394">Single Work (part 3)</a></li>
                <li><a href="part04_Search.php ">Search (part 4)</a></li>
               
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          		 <li><a href="#">Sunita Giri</a></li>
          		  <li>
              <form  method="post" class="navbar-form navbar-right" role="search" action="part04_Search.php">

                <div class="form-group">
                         <input id="abc" type="text" class="form-control"  type="text" name="filter" >

                      </div>
                  
                   <!-- <div class="input-group"><a href="part04_Search.php" class="btn btn-primary">search</a></div> -->
                      <div class="input-group"> <button type="search" name="criteria" checked="checked" value="Title"  class="btn btn-primary">Search</button></div>
                    <!-- <div class="input-group"><input type="search"  value="Filter" class="btn btn-primary btn-lg"> -->
                </form>
             	</li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
