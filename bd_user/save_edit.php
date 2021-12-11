<html> <body>
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$db=mysqli_connect("localhost", "root","","users") or die ("Невозможно
подключиться к серверу");
$lang=mysqli_query($db,"set names 'utf8'");
$query="SELECT * from user";
$zapros="UPDATE user SET user_name='".$_GET['name'].
"', user_login='".$_GET['login']."', user_password='"
.$_GET['password']."', user_e_mail='".$_GET['e_mail'].
"', user_info='".$_GET['info']."' WHERE id_user="
.$_GET['id'];
mysqli_query($db,$zapros);
if (mysqli_affected_rows($db)>0) {
echo 'Все сохранено. <a href="index.php"> Вернуться к списку
пользователей </a>'; }
else { echo 'Ошибка сохранения. <a href="index.php">
Вернуться к списку пользователей</a> '; }
?>
</body> </html>
