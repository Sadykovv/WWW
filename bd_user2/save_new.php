<?php
// Подключение к базе данных:
$db=mysqli_connect("localhost", "root","","banks") or die ("Невозможно
подключиться к серверу");
$lang=mysqli_query($db,"set names 'utf8'");
$query="SELECT * from bank";
$result=mysqli_query($db,$query); 
$pages=mysqli_fetch_assoc($result);
// Строка запроса на добавление записи в таблицу:
$sql_add = "INSERT INTO bank SET bank_name='" . $_GET['name']
."', bank_inn='".$_GET['inn']."', bank_country='"
.$_GET['country']."', bank_reliability_class='".$_GET['reliability_class'].
"', bank_volume_of_assets='".$_GET['volume_of_assets']. "'";
$result=mysqli_query($db,$sql_add);
if (mysqli_affected_rows($db)>0) // если нет ошибок при выполнении запроса
{ print "<p>Спасибо, вы зарегистрированы в базе данных.";
print "<p><a href=\"index.php\"> Вернуться к списку
пользователей </a>"; }
else { print "Ошибка сохранения. <a href=\"index.php\">
Вернуться к списку книг </a>"; }
?>
