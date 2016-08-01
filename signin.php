<?php
include_once "connect.php";
session_start();
if(isset($_POST['login']))
{
 //echo "yay inside main if";
 //$db=mysqli_connect('localhost','root','') or die(mysqli_error());
 //mysqli_select_db($conn, 'pawprints') or die(mysqli_error($conn));
 
 $email=mysqli_real_escape_string($conn, $_POST['email']);
 $password=mysqli_real_escape_string($conn, $_POST['password']);
 
 if($_POST['email']!=''&&$_POST['password']!='')
 {
   $query=mysqli_query($conn, "select * from users where email='".$email."' AND password='".$password."'") or die(mysqli_error($conn));
   $res=mysqli_fetch_row($query);
   if($res)
   {
    $_SESSION['email']=$email;
    header('location:indexnew.php');
   }
   else
   {
    echo"<script type='text/javascript'>alert('Incorrect Email or password');</script>";
   }
  }
 else
 {
  echo"<script type='text/javascript'>alert('Enter Email and password');</script>";
 }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign-in</title>
    <!-- Bootstrap -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/dogcare.css" rel="stylesheet" type="text/css">
  
  <script src="http://use.edgefonts.net/salsa:n4:default;lancelot:n4:default;sofia:n4:default;miama:n4:default.js" type="text/javascript"></script>
 <style type="text/css">
 .login-card {
  padding: 40px;
  width: 274px;
  background-color: #ba9077;
  margin: 0 auto 10px;
  border-radius: 2px;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  overflow: hidden;
}

.login-card h1 {
  background-color: #ba9077;
  font-weight: 100;
  text-align: center;
  font-size: 2.3em;
}

.login-card input[type=submit] {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  position: relative;
}

.login-card input[type=text], input[type=password] {
  height: 44px;
  font-size: 16px;
  width: 100%;
  margin-bottom: 10px;
  -webkit-appearance: none;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  /* border-radius: 2px; */
  padding: 0 8px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  color: #000000;
}

.login-card input[type=text]:hover, input[type=password]:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}

.login {
  text-align: center;
  font-size: 14px;
  font-family: 'Arial', sans-serif;
  font-weight: 700;
  height: 36px;
  padding: 0 8px;
/* border-radius: 3px; */
/* -webkit-user-select: none;
  user-select: none; */
}

.login-submit {
  /* border: 1px solid #3079ed; */
  border: 0px;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1); 
  background-color: #4d90fe;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
}

.login-submit:hover {
  /* border: 1px solid #2f5bb7; */
  border: 0px;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #357ae8;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
}

.login-card a {
  text-decoration: none;
  color: #666;
  font-weight: 400;
  text-align: center;
  display: inline-block;
  opacity: 0.6;
  transition: opacity ease 0.5s;
}

.login-card a:hover {
  opacity: 1;
}

.login-help {
  width: 100%;
  text-align: center;
  font-size: 12px;
}
</style>
  </head>
  <body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
       <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>-->
        <a class="navbar-brand" href="indexnew.php">PawPrints</a></div>
<!-- Collect the nav links, forms, and other content for toggling -->
      
      
        <ul class="nav navbar-nav navbar-right">
         <li><a href="indexnew.php">Home</a></li>
          <li><a href="dogcare.php">Dog Care</a></li>
          <li><a href="catcare.php">Cat Care</a></li>
          <li><a href="otherpetcare.php">Other Pet Care</a></li>
          <li><a href="videos.php">Videos</a></li>
          <li><a href="products.php">Products</a></li>
          <li><a href="findyourpet.php">Find your pet</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
    <div class="login-card">
    <h1>Log-in</h1><br>
  <form action="signin.php" method="post">
    <input type="text" name="email" placeholder="Email" >
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="login" class="login login-submit" value="login">
  </form>
    
  <div class="login-help">
    <a href="signup.php">Register</a>
  </div>
</div>
</body>
</html>
