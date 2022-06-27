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
    <a class="navbar-brand" href="profile.php">Back</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
        <li class="nav-item">


</nav>
</nav>          
<div class="card-group">
<?php
$key=$_REQUEST["id"];
require "./conn.php";

$res1=mysqli_query($conn,"select * from hostel where hname='$key'");
?>
 <?php
if(($rows1=mysqli_fetch_array($res1)))
{
?>
<div class="card">
 <img  id="k1" src="img/<?php echo$rows1[0];?>">
 <img  id="k2" style="display:none" src="img/<?php echo$rows1[1];?>">
 <img  id="k3"style="display:none" src="img/<?php echo$rows1[2];?>">
<input type="radio" ><input type="radio" ><input type="radio" >

    <div  style="border:solid;border-radius:50px" class="card-body">
      <h5 class="card-title"><?php echo$rows1[3];?></h5>
<h5 class="card-title"><?php echo$rows1[4];?></h5>
<h5 class="card-title"><?php echo$rows1[5];?></h5>
<h5 class="card-title"><?php echo$rows1[6];?></h5>
<h5 class="card-title"><?php echo$rows1[7];?></h5><h5 class="card-title"><?php echo$rows1[8];?></h5>
     </div>

</div>
      
<?php    
}
?>

</div>

