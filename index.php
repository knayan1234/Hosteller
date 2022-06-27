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
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"arialcontrols="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" data-bs-toggle="modal" data-bs-target="#exampleModalca">Create Account</a>




        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" data-bs-toggle="modal" data-bs-target="#exampleModal">Log in</a>
        </li>

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
         TYPES</a>

            <ul class="dropdown-menu" aria-labelledby="HOSTEL">
            <li><a class="dropdown-item" href="#">BOYS HOSTEL</a></li>
            <li><a class="dropdown-item" href="#">GIRLS HOSTEL</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">FLAT</a></li>
            </ul>
            </li>
        <li class="nav-item">
   <a class="nav-link active" href="<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalpo">Post            Hostel Details</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


 <!-- Navbar content -->
</nav>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="h1.jpg" width="1250" height="600">
      <div class="carousel-caption d-none d-md-block">
        <h5>RAJ HOSTEL</h5>
        <p>PLAZA CHOWK RANCHI</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="h2.jpg" width="1250" height="600" >
      <div class="carousel-caption d-none d-md-block">
        <h5>RANI GIRLS HOSTEL</h5>
        <p>NAGRATOLI,NEAR NUCLEUS MALL RANCHI</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="h3.jpg" width="1250" height="600">
      <div class="carousel-caption d-none d-md-block">
        <h5>KUMAR BOYS HOSTEL</h5>
        <p>LALPUR RANCHI</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="h4.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Kumar Girls Hostel</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="h5.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Shipra Girls Hostel</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="h6.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Kanchan Boys Hostel</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">


        <h5 class="modal-title" id="exampleModalLabel">Log in</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>

       <div class="modal-body">
       <form action="login.php">
    
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="e" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
 
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="p" class="form-control" id="exampleInputPassword1">
    </div>
  
    <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
  
<input type="submit"  class="btn btn-primary">
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="exampleModalca" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        
        <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="index.php" method="post">
      <div class="input-group">
       
        <span class="input-group-text">First and last name</span>
        <input type="text" name="fn" aria-label="First name" class="form-control">
        <input type="text"  name="ln" aria-label="Last name" class="form-control">
        </div>
        <br>
       
        <select name="g" class="form-select" aria-label="Default select example">
        <option selected>GENDER</option>
        <option value="MALE">MALE</option>
        <option value="FEMALE">FEMALE</option>
        <option value="OTHER">OTHER</option>
         </select>
      <br>
       
        <div class="mb-3">
        <label for="formFile" class="form-label">UPLOAD ID PROOF</label>
        <input class="form-control" name="id1" type="file" id="formFile">
       
   </div>
    <div class="modal-body">
       
     <div class="mb-3">
     <label for="exampleInputEmail1" class="form-label">Email address</label>
     <input type="email" name="e"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
     <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
     </div>
 
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="p" class="form-control" id="exampleInputPassword1">
    </div>
  
    <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
 
 <input type="submit" name="c" class="btn btn-primary" value="Register">
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="exampleModalpo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Post Hostel Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="index.php">

            <div class="mb-3">
            <label for="recipient-name" class="col-form-label">upload photos</label>
             <input class="form-control" name="id1" type="file" id="formFile">
             </div>

            <div class="mb-3">
            <label for="recipient-name" class="col-form-label">upload photos</label>
            <input class="form-control" name="id2" type="file" id="formFile">
            </div>

            <div class="mb-3">
            <label for="recipient-name" class="col-form-label">upload photos</label>
            <input class="form-control" name="id3" type="file" id="formFile">
            </div>
         
            <div class="mb-3">
            <label for="message-text" class="col-form-label">HOSTEL NAME</label>
            <input type="text" name="hn" aria-label="First name" class="form-control">
            </div>

            <div class="mb-3">
            <label for="message-text" class="col-form-label">MOBILE NO</label>
            <input type="text" name="m" aria-label="First name" class="form-control">
            </div>

            <div class="mb-3">
            <label for="message-text" class="col-form-label">EMAIL ID</label>
            <input type="text" name="e" aria-label="First name" class="form-control">
            </div>
            
            <div class="mb-3">
            <label for="message-text" class="col-form-label">Description About Hostel</label>
            <textarea name="d" rows="8" cols="36" class="form-control" id="message-text"></textarea>
            </div>
      
            <div class="mb-3">
            <label for="message-text" class="col-form-label">TYPES OF HOSTEL</label>
            <input type="text" name="t" aria-label="First name" class="form-control">
            </div>
        
            <div class="mb-3">
            <label for="message-text" class="col-form-label">LOCATION</label>
            <input type="text" name="l" aria-label="First name" class="form-control">
            </div>

       <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>       
       <input type="submit" name="x" class="btn btn-primary" value="Register">
       </div>
    </div>
</form>
  </div>
</div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>



<?php
require "./conn.php";
if(isset($_REQUEST["x"]))
{
$p1=$_REQUEST["id1"];
$p2=$_REQUEST["id2"];
$p3=$_REQUEST["id3"];
$p4=$_REQUEST["hn"];
$p5=$_REQUEST["m"];
$p6=$_REQUEST["e"];
$p7=$_REQUEST["d"];
$p8=$_REQUEST["t"];
$p9=$_REQUEST["l"];


mysqli_query($conn,"insert into hostel values('$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8','$p9')");
?>
<script>alert("Your Hostel Is Registered");</script>
<?php
}

?>



<?php
require "./conn.php";
if(isset($_REQUEST["c"]))
{
$p1=$_REQUEST["fn"];
$p2=$_REQUEST["ln"];
$p3=$_REQUEST["g"];
$p4=$_REQUEST["id1"];
$p5=$_REQUEST["e"];
$p6=$_REQUEST["p"];

$sql="insert into hostel_info values('$p1','$p2','$p3','$p4','$p5','$p6')";
$result=mysqli_query($conn,$sql);
if($result)
{$smstext="Dear ".$name." , \nThank you, user added";
  echo $smstext;
  
  
}
?>
<script>alert("You are registered !!!");</script>
<?php
}
?>






