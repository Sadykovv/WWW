<?php
$a=rand(0,10);
$b=rand(0,10);
function c($u, $t) 
{
	if (pow($u,2)>abs(4*$u*$t))
	return log(abs($u+$t));
	elseif (pow($u,2)<abs(4*$u*$t))
	return tan(1/$u*$t);
	elseif (pow($u,2)==abs(4*$u*$t))
	return pow(exp,$u+$t+sqrt(sin($u)));
}
$z=pow(sin(c($a,$b)),2)+c(log(abs($a-$b)),$b);
echo "a=". $a."<br>";
echo "b=".$b."<br>";
echo "z=".$z."<br>";
?>
