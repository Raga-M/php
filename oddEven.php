<h1>Odd Or Even</h1>
<form action="frist.php" method="post">
<label for="number"></label>
<input type="text" name="number" id="number">
<input type="submit" value="submit">
</form>
<?php

$n=$_POST['number'];
if($n%2==0){
echo "$n is even";}
else{
echo "$n is odd ";}

?>