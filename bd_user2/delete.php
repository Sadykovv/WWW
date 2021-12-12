<?php
$db=mysqli_connect("localhost", "root","","banks") or die ("Невозможно
подключиться к серверу");
$lang=mysqli_query($db,"set names 'utf8'");
$query="SELECT * from bank";
$result=mysqli_query($db,$query); 
$zapros="DELETE FROM bank WHERE id_bank=" . $_GET['id'];
mysqli_query($db,$zapros);
header("Location: index.php");
exit;
?>

