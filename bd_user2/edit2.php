<html>
<head
<title> Редактирование данных о пользователе </title>
</head>
<body>
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$db=mysqli_connect("localhost", "root","","banks") or die ("Невозможно
подключиться к серверу");
$lang=mysqli_query($db,"set names 'utf8'");
$query="SELECT * from bank";
$result=mysqli_query($db,$query); 
$pages=mysqli_fetch_assoc($result);
$rows="SELECT bank_name, bank_country,
bank_inn, bank_reliability_class, bank_volume_of_assets FROM bank WHERE
id_user=".$_GET['id'];
while ($st = mysqli_fetch_assoc($result)) {
$id=$_GET['id'];
$name = $st['bank_name'];
$inn = $st['bank_inn'];
$country = $st['bank_country'];
$reliability_class = $st['bank_reliability_class'];
$info = $st['bank_volume_of_assets'];
}
print "<form action='save_edit2.php' metod='get'>";
print "Название: <input name='name' size='50' type='text'
value='".$name."'>";
print "<br>ИНН: <input name='inn' size='20' type='text'
value='".$inn."'>";
print "<br>Страна: <input name='country' size='20' type='text'
value='".$country."'>";
print "<br>Класс надежности: <input name='reliability_class' size='30' type='text'
value='".$reliability_class."'>";
print "<br>Объем активов: <textarea name='info' rows='4'
cols='40'>".$info."</textarea>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"index2.php\"> Вернуться к списку
пользователей </a>";
?>
</body>
</html>
