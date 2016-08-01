<?php
include_once "header.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paw Prints</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet" type="text/css">
	<script src="http://use.edgefonts.net/sofia:n4:default.js" type="text/javascript"></script>

</head>
  <body style="padding-bottom: 70px">
  <!--<header>
  <a href="signin.php">Login</a>
  <a href="signup.php">Sign up</a>
  </header>-->
<nav class="navbar navbar-default">
  <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        <a class="navbar-brand" href="indexnew.php">PawPrints</a></div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="defaultNavbar1">
        <ul class="nav navbar-nav">
          <li class="active"></li>
          <li></li>
          <li class="dropdown">
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>
        
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="indexnew.php">Home</a></li>
          <li><a href="dogcare.php">Dog Care</a></li>
          <li><a href="catcare.php">Cat Care</a></li>
          <li><a href="otherpetcare.php">Other Pet Care</a></li>
          <li><a href="videos.php">Videos</a></li>
          <li><a href="products.php">Products</a></li>
          <li><a href="findyourpet.php">Find your pet</a></li>
          <li class="dropdown">
            <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </li>
        </ul>
      </div>
    <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>

<div class="container-fluid">
  <div id="carousel1" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel1" data-slide-to="0" class="active"></li>
        <li data-target="#carousel1" data-slide-to="1"></li>
        <li data-target="#carousel1" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active"><img src="images/homepage/Collie.jpg" alt="First slide image" class="center-block">
          <div class="carousel-caption">
            <h3>A house is not a home without a pet - Unknown</h3>
            <p>Collie</p>
          </div>
        </div>
        <div class="item"><img src="images/homepage/German-Shepherd.jpg" alt="Second slide image" class="center-block">
          <div class="carousel-caption">
            <h3>We can judge the heart of a man by his treatment of animals - Immanual Kant</h3>
            <p>German Shepherd</p>
          </div>
        </div>
        <div class="item"><img src="images/homepage/Alaskan-Malamute-3-605mk062311.jpg" alt="Third slide image" class="center-block">
          <div class="carousel-caption">
            <h3>Happiness is a warm puppy - Charles. M. Schulz</h3>
            <p>Alaskan Malamute</p>
          </div>
        </div>
      </div>
  <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel1" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a></div>
  
    <div class="row">
      <div class="col-md-4">
        <div class="thumbnail"><img src="images/homepage/thumbnail-1(2).jpg" alt="Thumbnail Image 1" class="image-fill">
          <div class="caption">
            <h3>Dog Adoption</h3>
<p><b><i><a href="http://pawprintsss.blogspot.in/2016/03/dog-adoption-checklist.html">Adoption 101</a></i></b></p>
<p>Adopting a pet is a big step — but we have a feeling your family is ready to grow. Before starting your search, get tips on choosing the right pet for your lifestyle, preparing your home for a furry family member, and even become a training expert before bringing your pet home.
<a href="http://pawprintsss.blogspot.in/2016/03/adoption-101.html">Read More &raquo;</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail"><img src="images/homepage/thumbnail- 2.jpg" alt="Thumbnail Image 1" class="image-fill">
          <div class="caption">
            <h3>Cat Adoption</h3>
            <p><b><i><a href="http://pawprintsss.blogspot.in/2016/03/for-cat-person-in-you.html">For the cat lover in you</a></i></b></p>
            <p>Cats far outnumber dogs in the US, but for too long cats have been seen as second-class pets — with a stigma attached to the people who live with and love them. Help us bring cats and cat parents into the spotlight to show us for what we are… <br>
            <a href="http://pawprintsss.blogspot.in/2016/03/for-cat-person-in-you.html">Read More &raquo;</a></p>
</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail"><img src="images/homepage/thumbnail-3 (2).jpg" alt="Thumbnail Image 1" class="image-fill">
          <div class="caption">
            <h3>Dog Adoption</h3>
            <p><b><i><a href="http://pawprintsss.blogspot.in/2016/03/because-dogs-are-better-than-humans.html">Because dogs are better than humans</a></i></b></p>
            <p>We know what you’re thinking. Isn’t it about time you committed to getting a pet? Before going to your local shelter or rescue group to meet the dog of your dreams, get the resources to become a pet adoption pro. You’ve made it this far — why back out now? <br>
<a href="http://pawprintsss.blogspot.in/2016/03/because-dogs-are-better-than-humans.html">Read More &raquo;</a></p>
</div>
        </div>
      </div>
    </div>
    </div>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
          <a class="navbar-brand" href="index.php">PawPrints</a></div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="defaultNavbar2">
          <ul class="nav navbar-nav">
            <li class="active"></li>
            <li></li>
            <li class="dropdown">
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          
          <ul class="nav navbar-nav navbar-right">
            <li><a href="indexnew.php">Home</a></li>
            <li><a href="dogcare.php">Dog Care</a></li>
            <li><a href="catcare.php">Cat Care</a></li>
            <li><a href="otherpetcare.php">Other Pet Care</a></li>
            <li><a href="videos.php">Videos</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="findyourpet.php">Find your pet</a></li>
            <li class="dropdown">
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  <footer>&copy; Copyright 2016</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.2.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
  </body>
</html>