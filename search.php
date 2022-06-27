<?php
$key=$_REQUEST["id"];
$res=mysqli_query($conn,"select * from hostel where location='$key'");
while(($rows=mysqli_fetch_array($res)))
{
?>
<img  height="400" width="230" src='img/<?php echo$rows[0];?>'>
<br>
<?php
echo$rows[3]."<br>";
echo$rows[4]."<br>";
echo$rows[5]."<br>";
echo$rows[6]."<br>";
echo$rows[7]."<br>";
echo$rows[8]."<br>";
echo"<hr>";
}

?>