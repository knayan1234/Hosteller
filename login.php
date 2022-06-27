<?php session_start(); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hostel.Com</title>
  </head>
  <body>
   <h1>Hostel.Com</h1>
<nav class="navbar navbar-expand-lg navbar-light bg-danger">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" data-bs-toggle="modal" data-bs-target="#exampleModalca">Contact Us</a>




        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" data-bs-toggle="modal" data-bs-target="#exampleModal" href="index.php">Log out</a>



        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            TYPES
          </a>
          <ul class="dropdown-menu" aria-labelledby="HOSTEL">
            <li><a class="dropdown-item" href="#">BOYS HOSTEL</a></li>
            <li><a class="dropdown-item" href="#">GIRLS HOSTEL</a></li>
            
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">FLATS</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>

        </li>




      </ul>
      <?php
      require "./conn.php";
$x1=$_REQUEST["e"];
$x2=$_REQUEST["p"];
$res=mysqli_query($conn,"select * from hostel_info where email='$x1' and password='$x2'");
if(($rows=mysqli_fetch_array($res)))
{
$_SESSION["name"]=$rows[0];
header("location:profile.php");

}
else
{
echo"Invalid Login!!";
}

?>

    </div>
  </div>



</nav>
