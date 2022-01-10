<html> <body>
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$db=mysqli_connect("localhost", "f0595201_f0595201","1293749568","f0595201_Alisher") or die ("Невозможно
подключиться к серверу");
$lang=mysqli_query($db,"set names 'utf8'");
$zapros="UPDATE deposits SET id_deposits='".$_GET['id_deposits'].
"', deposits_date='".$_GET['deposits_date']."', sum_deposit='"
.$_GET['sum_deposit']."' WHERE id_pod="
.$_GET['id'];
mysqli_query($db,$zapros);
if (mysqli_affected_rows($db)>0) {
echo 'Все сохранено. <a href="index.php"> Вернуться к списку
пользователей </a>'; }
else { echo 'Ошибка сохранения. <a href="index.php">
Вернуться к списку пользователей</a> '; }
?>
</body> </html>
