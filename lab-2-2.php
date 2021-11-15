<?php 
echo "<p style ='color:blue'>Задание ко второй лабораторной работе</p>";
$x=rand(3,20);
$arr=array();
echo "Массив из" . " " .$x. "-ми/-ти/-х/-го ". "элементов, заполненный случайными числами: ";
for ($i=0;$i<$x;$i++){
	$arr[$i]=rand(10,99);
}
print join(" ",$arr)."<br>";
echo "Отсортированный массив:";
sort($arr);
print join(" ",$arr)."<br>";
echo "Реверс массива:";
print join(" ",array_reverse($arr))."<br>";
echo "Массив с удаленным последним элементом:";
array_pop($arr);
print join(" ",$arr)."<br>";
echo "Подсчет суммы элементов в массиве и количества элементов:";
echo array_sum($arr).";".count($arr)."<br>";
echo "Вывод среднего арифметического:";
echo array_sum($arr)/count($arr)."<br>";
echo "Определение значения в массиве:";
if(in_array(50,$arr)){
echo "Нашел"."<br>";
} else {
echo "Не нашел"."<br>";
}
echo "Удаление повторяющихся элементов:";
$arr=array_unique($arr);
print join(" ",$arr);
echo "<p style ='color:blue'>Задание к первой лабораторной работе</p>";
$x=rand(1,10);   
$y=rand(1,10); 
print ('$x =' . $x . "<br>"); 
print ('$y =' . $y . "<br>"); 
if  ($x>$y)  echo("Наибольшее =" . $x); 
 elseif  ($x<$y)  echo ("Наибольшее =" . $y); 
 else  print ("Наибольшего нет"); 
?>
