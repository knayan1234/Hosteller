<?php
$key=$_REQUEST["id"];
$conn=mysql_connect("127.0.0.1","root","");
mysql_select_db("hostel_project",$conn);
$res=mysql_query("select * from hostel where location='$key'");
while(($rows=mysql_fetch_array($res)))
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