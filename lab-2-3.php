<?php 
echo "<p style ='color:blue'>Задание ко второй лабораторной работе</p>";
echo "Массив:";
$cust=array(
'cnum'=>2001, 
'cname' => 'Hoffman',
'city' => 'London',
'snum' =>1001
);
print_r($cust);
echo "<br>";
echo "Массив с ключом rating:";
$cust['rating']=100;
print_r($cust);
echo "<br>";
echo "Отсортированный массив по значениям:";
asort($cust);
print_r($cust);
echo "<br>";
echo "Отсортированный массив по ключам:";
ksort($cust);
print_r($cust);
echo "<br>";
echo"Сортировка массива:";
sort($cust);
print_r($cust);
echo "<br>";
echo "<p style ='color:blue'>Задание к первой лабораторной работе</p>";
$а = "А";  
switch ($а) {  
 case 'А' : 
   echo 'Переменная имеет значение "А"'; 
 case 'В': 
   echo 'Переменная имеет значение "В"';  break; 
 default: 
   echo 'Ответ не найден ' ; 
} 
?>
