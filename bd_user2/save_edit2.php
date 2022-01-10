<html> <body>
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$db=mysqli_connect("localhost", "f0595201_f0595201","1293749568","f0595201_Alisher") or die ("Невозможно
подключиться к серверу");
$lang=mysqli_query($db,"set names 'utf8'");
$zapros="UPDATE programms_of_deposit SET pod_pertoyear='".$_GET['pod_pertoyear'].
"', id_pod='".$_GET['id_pod']."', pod_name='"
.$_GET['pod_name']."' WHERE id_bank="
.$_GET['id'];
mysqli_query($db,$zapros);
if (mysqli_affected_rows($db)>0) {
echo 'Все сохранено. <a href="index.php"> Вернуться к списку
пользователей </a>'; }
else { echo 'Ошибка сохранения. <a href="index.php">
Вернуться к списку пользователей</a> '; }
?>
</body> </html>
