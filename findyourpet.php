<?php
//include_once "connect.php";
$conn=mysqli_connect("localhost","root","") or die("Could not connect!");
mysqli_select_db($conn, "pawprints");
$output = '';

if(isset($_POST['search'])) 
{

  $searchq = $_POST['search'];
  $searchq = preg_replace("#[^0-9a-z]i#","",$searchq);
  
  $query = mysqli_query($conn, "SELECT * FROM shelter WHERE breeds_available LIKE '%$searchq%' OR area LIKE '%$searchq%'") or die("could not search");
  $count = mysqli_num_rows($query);
          
  if($count == 0)
  {
    $output = 'There were no search results!';
  }
  else
  {
    while($row = mysqli_fetch_array($query))
    {
      $shelter_name = $row['shelter_name'];
      $shelter_add = $row['shelter_add'];
      $breeds_available = $row['breeds_available'];
      $area = $row['area'];
      $phone_number = $row['phone_number'];
      $map_link = $row['map_link'];
      
      $output .='<div><b>'.$shelter_name.'</b></div><div>Address: '.$shelter_add.'</div><div>Breeds: '.$breeds_available.'</div><div>Area: '.$area.'</div><div>Phone Number: '.$phone_number.'</div><div>'.$map_link.'</div>';

    }
  }
}

?>
<?php
include_once "header.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Find your pet</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/findyourpet.css" rel="stylesheet" type="text/css">
    <script src="http://use.edgefonts.net/sofia:n4:default.js" type="text/javascript"></script>
    </head>
  <body style="padding-bottom: 70px">
<nav class="navbar navbar-default">
  <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        
        <a class="navbar-brand" href="index.html">PawPrints</a></div>
      <!-- Collect the nav links, forms, and other content for toggling -->
        
        <ul class="nav navbar-nav navbar-right">
          <li><a href="indexnew.php">Home</a></li>
          <li><a href="dogcare.php">Dog Care</a></li>
          <li><a href="catcare.php">Cat Care</a></li>
          <li><a href="otherpetcare.php">Other Pet Care</a></li>
          <li><a href="videos.php">Videos</a></li>
          <li><a href="products.php">Products</a></li>
          <li class="active"><a href="findyourpet.php">Find your pet</a></li>
        </ul>
      </div>
<!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
    </nav>
<body>
<form action="findyourpet.php" method="post">
            <div class="form-group">
              <input type="text" name="search" placeholder="Enter breed or location" style="width: 500px; margin-left: 300px; color: #000000"/>
             <input type="submit" value="search"></input>
             </div>
             <div class="form">
             
          <?php print("$output")?>
            </div>
          </form>
          &nbsp;
          
  </body>
</html>
 