<?php 
echo "Задание ко второй лабораторной работе","<br>";
echo '1)';
$x=rand(3,20);
$arr=array();
for ($i=0;$i<$x;$i++){
	$arr[$i]=rand(10,99);
}
print join(" ",$arr);
echo "<br>";
echo "Задание к первой лабораторной работе","<br>";
$x=rand(1,10);   
$y=rand(1,10); 
print ('$x =' . $x . "<br>"); 
print ('$y =' . $y . "<br>"); 
if  ($x>$y)  echo("Наибольшее =" . $x); 
 elseif  ($x<$y)  echo ("Наибольшее =" . $y); 
 else  print ("Наибольшего нет"); 
?>
