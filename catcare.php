<?php
include_once "header.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cat Care</title>
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
          <li><a href="dogcare.php">Dog Care</a></li>
          <li class="active"><a href="catcare.php">Cat Care</a></li>
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
<h1>Cat Care</h1>
<div id="carousel1" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel1" data-slide-to="0" class="active"></li>
    <li data-target="#carousel1" data-slide-to="1"></li>
    <li data-target="#carousel1" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active"><img src="images/catcare/carousel1.jpg" alt="First slide image" class="center-block">
      <div class="carousel-caption">
        <a href="http://pawprintsss.blogspot.com/2016/03/busted.html"><h3>Very Superstitious</h3></a>
        <p>9 common cat myths debunked!</p>
      </div>
    </div>
    <div class="item"><img src="images/catcare/carousel2.jpg" alt="Second slide image" class="center-block">
      <div class="carousel-caption">
        <a href="http://pawprintsss.blogspot.com/2016/03/cat-adoption.html"><h3>Cat Adoption</h3></a>
        <p>Adopting the perfect cat for you.</p>
      </div>
    </div>
    <div class="item"><img src="images/catcare/carousel3.jpg" alt="Third slide image" class="center-block">
      <div class="carousel-caption">
        <a href="http://pawprintsss.blogspot.com/2016/03/understanding-your-cat.html"><h3>Understanding your cats body language</h3></a>
        <p>Cats use a variety of ways to communicate their feelings, needs and desires.</p>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel1" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a></div>
<div class="container-fluid">
  <div class="row">
      <div class="col-md-4">
        <div class="thumbnail"><img src="images/catcare/thumbnail1.jpg" alt="Thumbnail Image 1">
          <div class="caption">
            <a href="cbreeds.php"><h3>Cat Breeds</h3></a>
            <p>Learn more about your breed here!</p>
</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail"><img src="images/catcare/thumbnail2.jpg" alt="Thumbnail Image 1">
          <div class="caption">
            <a href="http://pawprintsss.blogspot.com/2016/03/cat-adoption_29.html"><h3>Cat Adoption</h3></a>
            <p>All that you need to know about adopting a Cat.</p>
</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail"><img src="images/catcare/thumbnail3.jpg" alt="Thumbnail Image 1">
          <div class="caption">
            <b><a href="http://pawprintsss.blogspot.com/2016/03/bringing-home-cat.html"><h3>Bringing a cat home</h3></a></b>
            <p>Bringing home a new cat is exciting. Here are some tips!</p>
</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail"><img src="images/catcare/thumbnail4.jpg" alt="Thumbnail Image 1">
          <div class="caption">
            <a href="http://pawprintsss.blogspot.com/2016/03/cat-problems.html"><h3>Cat Problems</h3></a>
            <p>Having trouble with your cat? Here's some help.</p>
</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail"><img src="images/catcare/thumbnail5.jpg" alt="Thumbnail Image 1">
          <div class="caption">
            <a href="http://pawprintsss.blogspot.com/2016/03/cat-grooming.html"><h3>Cat Grooming</h3></a>
            <p>Bathing your cat is important for his health. Use these tips to get through it.</p>
</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail"><img src="images/catcare/thumbnail6.jpg" alt="Thumbnail Image 1">
          <div class="caption">
            <a href="http://pawprintsss.blogspot.com/2016/03/living-with-your-cat.html"><h3>Living with your cat</h3></a>
            <p>Coping with an allergy to cats isn’t easy, especially if you have one. Here are some.</p>
</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail"><img src="images/catcare/thumbnail7.jpg" alt="Thumbnail Image 1">
          <div class="caption">
            <a href="http://pawprintsss.blogspot.com/2016/03/cat-care.html"><h3>Caring for cats</h3></a>
            <p>Cat Care 101</p>
</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail"><img src="images/catcare/thumbnail8.jpg" alt="Thumbnail Image 1">
          <div class="caption">
            <a href="http://pawprintsss.blogspot.com/2016/03/cat-health.html"><h3>Cat Health</h3></a>
            <p>Learn to give your cat a massage here!</p>
</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail"><img src="images/catcare/thumbnail9.jpg" alt="Thumbnail Image 1">
          <div class="caption">
            <a href="http://pawprintsss.blogspot.com/2016/03/cat-nutrition.html"><h3>Cat Nutrition</h3></a>
            <p>Find the best food for your cat here.</p>
</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail"><img src="images/catcare/thumbnail10.jpg" alt="Thumbnail Image 1">
          <div class="caption">
            <a href="http://pawprintsss.blogspot.com/2016/03/lost-and-found-cats.html"><h3>Lost and found cats</h3></a>
            <p>If your cat escapes into the wilderness and becomes lost, learn what steps to take.</p>
</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail"><img src="images/catcare/thumbnail11.jpg" alt="Thumbnail Image 1">
          <div class="caption">
            <a href="http://pawprintsss.blogspot.com/2016/03/cat-behaviour-and-training.html"><h3>Cat Behaviour and Training</h3></a>
            <p>Learn how to help your cat be a perfect litter box user.</p>
</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail"><img src="images/catcare/thumbnail12.jpg" alt="Thumbnail Image 1">
          <div class="caption">
            <a href="http://pawprintsss.blogspot.com/2016/03/grieving-your-pet.html"><h3>Grieving over your pet</h3></a>
            <p>Losing a pet is heartbreaking. Learn more so you can remember and honor your pet gracefully.</p>
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