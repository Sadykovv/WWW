<?php
$db=mysqli_connect("localhost", "f0595201_f0595201","1293749568","f0595201_Alisher") or die ("Невозможно
подключиться к серверу");
$lang=mysqli_query($db,"set names 'utf8'");
$query="SELECT * from bank";
$result=mysqli_query($db,$query); 
$zapros="DELETE FROM bank WHERE id_bank=" . $_GET['id'];
mysqli_query($db,$zapros);
header("Location: index.php");
exit;
?>

