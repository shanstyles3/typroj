<?php
include_once "header.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dog Care</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/dogcare.css" rel="stylesheet" type="text/css">

  <script src="http://use.edgefonts.net/salsa:n4:default;lancelot:n4:default;sofia:n4:default;miama:n4:default.js" type="text/javascript"></script>

  </head>
  <body>
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
          <li><a href="indexnew.php">Home</a></li>
          <li class="active"><a href="dogcare.php">Dog Care</a></li>
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
<h1>Dog Care</h1>
<div id="carousel1" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel1" data-slide-to="0" class="active"></li>
    <li data-target="#carousel1" data-slide-to="1"></li>
    <li data-target="#carousel1" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active"><img src="images/dogcare/carousel1.jpg" alt="First slide image" class="center-block">
      <div class="carousel-caption">
        <a href="http://pawprintsss.blogspot.com/2016/03/sometimes-change-can-be-good.html"><h3>Changing the name of your dog</h3></a>
        <p>If you’ve adopted a dog or puppy with a name you don’t like, these simple tips will show you how to teach your dog a new name within just a few days.</p>
      </div>
    </div>
    <div class="item"><img src="images/dogcare/carousel2.jpg" alt="Second slide image" class="center-block">
      <div class="carousel-caption">
        <a href="http://pawprintsss.blogspot.in/2016/03/canine-adolescence.html"><h3>Pet Adolescence</h3></a>
        <p>From the age of 6-18 months, your dog undergoes adolescence, the gawky stage between puppy-hood and adulthood. Learn how to handle your pup during his adolescent stage here.</p>
      </div>
    </div>
    <div class="item"><img src="images/dogcare/carousel3.jpg" alt="Third slide image" class="center-block">
      <div class="carousel-caption">
        <a href="http://pawprintsss.blogspot.in/2016/03/dog-adoption_29.html"><h3>Why are dogs given up?</h3></a>
        <p>Learn more.</p>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel1" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a></div>
<div class="container-fluid">
  <div class="row">
      <div class="col-md-4">
        <div class="thumbnail"><img src="images/dogcare/thumbnail1.jpg" alt="Thumbnail Image 1">
          <div class="caption">
            <a href="dbreeds.php"><h3>Dog Breeds</h3></a>
            <p>Browse dog breeds and learn about the many dogs available for adoption on PawPrints.</p>
</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail"><img src="images/dogcare/thumbnail2.jpg" alt="Thumbnail Image 1">
          <div class="caption">
            <a href="http://pawprintsss.blogspot.in/2016/03/dog-adoption.html"><h3>Dog Adoption</h3></a>
            <p>All that you need to know about adopting a dog.</p>
</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail"><img src="images/dogcare/thumbnail3.jpg" alt="Thumbnail Image 1">
          <div class="caption">
            <b><a href="http://pawprintsss.blogspot.in/2016/03/adoption-101.html"><h3>Bringing a dog home</h3></a></b>
            <p>Adopting a new dog? Check out these tips for welcoming your new friend.</p>
</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail"><img src="images/dogcare/thumbnail4.jpg" alt="Thumbnail Image 1">
          <div class="caption">
            <a href="http://pawprintsss.blogspot.in/2016/03/dog-problems.html"><h3>Dog Problems</h3></a>
            <p>Having trouble with your dog? Here's some help.</p>
</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail"><img src="images/dogcare/thumbnail5.jpg" alt="Thumbnail Image 1">
          <div class="caption">
            <a href="http://pawprintsss.blogspot.in/2016/03/dog-grooming.html"><h3>Dog Grooming</h3></a>
            <p>Bathing your dog is important for his health. Use these tips to make it as easy as possible.</p>
</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail"><img src="images/dogcare/thumbnail6.jpg" alt="Thumbnail Image 1">
          <div class="caption">
            <a href="http://pawprintsss.blogspot.in/2016/03/living-with-your-dog.html"><h3>Living with your dog</h3></a>
            <p>Check out these earth-friendly steps to help reduce your pet's carbon pawprint!</p>
</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail"><img src="images/dogcare/thumbnail7.jpg" alt="Thumbnail Image 1">
          <div class="caption">
            <a href="http://pawprintsss.blogspot.in/2016/03/caring-for-dogs.html"><h3>Caring for dogs</h3></a>
            <p>Dog Care 101</p>
</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail"><img src="images/dogcare/thumbnail8.jpg" alt="Thumbnail Image 1">
          <div class="caption">
            <a href="http://pawprintsss.blogspot.in/2016/03/dog-health.html"><h3>Dog Health</h3></a>
            <p>A healthy dog is a happy dog. Learn more about their health here.</p>
</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail"><img src="images/dogcare/thumbnail9.jpg" alt="Thumbnail Image 1">
          <div class="caption">
            <a href="http://pawprintsss.blogspot.in/2016/03/dog-nutrition.html"><h3>Dog Nutrition</h3></a>
            <p>The amount you feed your dog will vary greatly depending on his age, size, and activity level....</p>
</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail"><img src="images/dogcare/thumbnail10.jpg" alt="Thumbnail Image 1">
          <div class="caption">
            <a href="http://pawprintsss.blogspot.in/2016/03/lost-and-found-dogs.html"><h3>Lost and found dogs</h3></a>
            <p>Lost your dog? This will help you understand where and why he went and how you can find him.</p>
</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail"><img src="images/dogcare/thumbnail11.jpg" alt="Thumbnail Image 1">
          <div class="caption">
            <a href="http://pawprintsss.blogspot.in/2016/03/grieving-over-your-pet.html"><h3>Grieving over your pet</h3></a>
            <p>Losing a pet is heartbreaking. Learn more so you can remember and honor your pet gracefully.</p>
</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail"><img src="images/dogcare/thumbnail12.jpg" alt="Thumbnail Image 1">
          <div class="caption">
            <a href="http://pawprintsss.blogspot.in/2016/03/giving-up-your-pet-by-pawprints-it-is.html"><h3>Giving away your pet</h3></a>
            <p>Before you relinquish your pet to a shelter, find out if there are other options.</p>
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
        <a class="navbar-brand" href="indexnew.php">PawPrints</a></div>
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