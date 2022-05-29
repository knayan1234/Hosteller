<script>
function a()
{
obj=new XMLHttpRequest();
obj.onreadystatechange=function()
{
document.getElementById("k").innerHTML=obj.responseText;
};
obj.open("GET","search.php?id="+r.value,true);
obj.send();
}
</script>
<div id="k">
</div>

<input type="text" id="r" onkeyup="a()" placeholder="Location">

