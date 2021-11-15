<?php 
$treug=array();
$kvd=array();
$rez=array();
$rez1=array();
echo '1)';
for ($n=1;$n<=10;$n++){
	$treug[$n]=$n*($n+1)/2;
	echo $treug[$n]." ";
}
echo "<br>";
echo '2)';
for ($i=1;$i<=10;$i++){
	$kvd[$i]=pow($i,2);
	echo $kvd[$i]." ";
}
echo "<br>";
$a=-1;   $b = "";  
if ($a)  {  echo '$a='."$a - истина<br>";  } 
  else {  echo '$a='."$a - ложь<br>";  }  
if ($b)  {  echo '$b='."$b - истина<br>";  } 
  else {  echo '$b='."$b - ложь<br>";  } 
?> 
