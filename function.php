<h1>Enter the number u want to sum</h1>
<form action="function.php" method="post">
    
<input type="number" name="n1" placeholder="Number1"><br><br>
<input type="number" name="n2" placeholder="Number2"><br>
<br>
<input type="submit" value="submit">
</form>

<?php
function sum($a,$b){
$sum=$a+$b;
echo "sum is $sum";}
$n=$_POST['n1'];
$m=$_POST['n2'];
if($n!=='' && $m!==''){
sum($n,$m);}
else{
echo "enter a numbers";}
?>