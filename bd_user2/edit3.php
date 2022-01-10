<html>
<head
<title> Редактирование данных о пользователе </title>
</head>
<body>
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$db=mysqli_connect("localhost", "f0595201_f0595201","1293749568","f0595201_Alisher") or die ("Невозможно
подключиться к серверу");
$lang=mysqli_query($db,"set names 'utf8'");
$query="SELECT deposits_date, sum_deposit, id_deposits FROM deposits WHERE
id_pod=".$_GET['id'];
$result=mysqli_query($db,$query); 
$pages=mysqli_fetch_assoc($result);
while ($st = mysqli_fetch_assoc($result)) {
$id=$_GET['id'];
$id_deposits=$st['id_deposits'];
$deposits_date = $st['deposits_date'];
$sum_deposit = $st['sum_deposit'];
}
print "<form action='save_edit3.php' metod='get'>";
print "id депозита: <input name='id_deposit' size='50' type='text'
value='".$id_deposit."'>";
print "<br>Дата: <input name='deposits_date' size='20' type='text'
value='".$deposits_date."'>";
print "<br>Сумма депозита: <input name='sum_deposit' size='20' type='text'
value='".$sum_deposit."'>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться к списку
пользователей </a>";
?>
</body>
</html>
