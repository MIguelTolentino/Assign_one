
<html>
<body>
<form action="exercise_three.php" method="get">
GCD of two numbers <br>
Input first number:<br> 
<input name="n1"><br>
Input second number:<br> 
<input name="n2"><br>
<button type="submit" =">Submit</button> <br><br>

<?php
//find gcd
if(isset($_GET['n1']) || isset($_GET['n2'])) {
    $a=$_GET['n1'];
    $b=$_GET['n2'];
    echo "GCD of $a & $b = ", gcd($a , $b) ;
}
function gcd($a, $b)
{
	
	if($b==0)
		return $a ;
	return gcd( $b , $a % $b ) ;
}
?>

</form>
</body>
</html>