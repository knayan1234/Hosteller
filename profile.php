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
<style>
#kkk:hover
{
opacity:0.5;

}
</style>
  </head>
  <body>
<script>
function a()
{
var obj=new XMLHttpRequest();
obj.onreadystatechange=function()
{
document.getElementById("k").style="display:none";
document.getElementById("k1").innerHTML=obj.responseText;
};
obj.open("GET","search1.php?id="+l.value,true);
obj.send();
}
</script>
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
          <a class="nav-link active" aria-current="page" href="index.php">Log out</a>



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

<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <form class="d-flex">
      <input id="l" class="form-control me-2" type="search" placeholder="Search by location" aria-label="Search" onkeyup="a()">
      
    </form>
  </div>
</nav>
          
        </li>
      </ul>
<strong><font color="blue"><?php echo"Welcome ".$_SESSION["name"];?></font></strong>
    </div>
  </div>



</nav>

<div id="k">


 
<?php
require "./conn.php";
$res1=mysqli_query($conn,"select * from hostel");
?>
 <?php
while(($rows1=mysqli_fetch_array($res1)))
{

?>
<div class="card-group">
<div class="card">

<a href="details.php?id=<?php echo$rows1[3]; ?>">    <img id="kkk" src="img/<?php echo$rows1[0];?>" height="300" width="300"></a>
    <div class="card-body">
      <h5 class="card-title"><?php echo$rows1[3];?></h5>
     </div>
</div>
      
    
<?php
$rows1=mysqli_fetch_array($res1);
?>
<div class="card">

<a href="details.php?id=<?php echo$rows1[3]; ?>">    <img id="kkk" src="img/<?php echo$rows1[0];?>" height="300" width="300"></a>
    <div class="card-body">
      <h5 class="card-title"><?php echo$rows1[3];?></h5>
     </div>
</div>
<?php
$rows1=mysqli_fetch_array($res1);
?>
<div class="card">

<a  href="details.php?id=<?php echo$rows1[3]; ?>">    <img id="kkk" src="img/<?php echo$rows1[0];?>" height="300" width="300"></a>
    <div class="card-body">
      <h5 class="card-title"><?php echo$rows1[3];?></h5>
     </div>
</div>
<?php
echo"</div>";
echo"<br>";
}
?>

</div>


<div id="k1">
</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

