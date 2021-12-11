<html> <body>
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$db=mysqli_connect("localhost", "root","","banks") or die ("Невозможно
подключиться к серверу");
$lang=mysqli_query($db,"set names 'utf8'");
$query="SELECT * from bank";
$zapros="UPDATE bank SET bank_name='".$_GET['name'].
"', bank_inn='".$_GET['inn']."', bank_country='"
.$_GET['country']."', bank_reliability_class='".$_GET['reliability_class'].
"', bank_volume_of_assets='".$_GET['info']."' WHERE id_bank="
.$_GET['id'];
mysqli_query($db,$zapros);
if (mysqli_affected_rows($db)>0) {
echo 'Все сохранено. <a href="index2.php"> Вернуться к списку
пользователей </a>'; }
else { echo 'Ошибка сохранения. <a href="index2.php">
Вернуться к списку пользователей</a> '; }
?>
</body> </html>
