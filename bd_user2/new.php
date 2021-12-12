<html>
<head> <title> Добавление нового пользователя </title> 
<meta http-equiv="content-type" content="text/html; charset=UTF-8" /></head>
<head><meta charset="UTF-8"/></head>
<body>
<H2>Регистрация на сайте:</H2>
<form action="save_new.php" method="get">
Название: <input name="name" size="50" type="text">
<br>ИНН: <input name="inn" size="20" type="text">
<br>Страна: <input name="country" size="20" type="text">
<br>Класс надежности: <input name="reliability_class" size="30" type="text">
<br>объем активов: <textarea name="volume_of_assets" rows="4" cols="40">
</textarea>
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="index.php"> Вернуться к списку пользователей </a>
</body>
</html>
