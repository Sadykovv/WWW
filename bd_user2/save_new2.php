<?php
// Подключение к базе данных:
$db=mysqli_connect("localhost", "f0595201_f0595201","1293749568","f0595201_Alisher") or die ("Невозможно
подключиться к серверу");
$lang=mysqli_query($db,"set names 'utf8'");
$query="SELECT * from programms_of_deposit";
$result=mysqli_query($db,$query); 
$pages=mysqli_fetch_assoc($result);
// Строка запроса на добавление записи в таблицу:
$sql_add = "INSERT INTO programms_of_deposit SET pod_name='" . $_GET['name']
."', pod_pertoyear='".$_GET['pertoyear']."', id_pod='".$_GET['id']."', id_bank='".$_GET['id_bank']."'";
$result=mysqli_query($db,$sql_add);
if (mysqli_affected_rows($db)>0) // если нет ошибок при выполнении запроса
{ print "<p>Спасибо, вы зарегистрированы в базе данных.";
print "<p><a href=\"index.php\"> Вернуться к списку
пользователей </a>"; }
else { print "Ошибка сохранения. <a href=\"index.php\">
Вернуться к списку книг </a>"; }
?>
