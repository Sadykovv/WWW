<html>
<head> <title> Добавление новой программы</title> 
<meta http-equiv="content-type" content="text/html; charset=UTF-8" /></head>
<head><meta charset="UTF-8"/></head>
<body>
<H2>Регистрация программы:</H2>
<form action="save_new2.php" method="get">
Название: <input name="name" size="50" type="text">
<br>% годовых: <input name="pertoyear" size="20" type="double">
<br>id: <input name="id" size="20" type="int">
<?php
$db=mysqli_connect("localhost", "f0595201_f0595201","1293749568","f0595201_Alisher") or die ("Невозможно
подключиться к серверу");
$lang=mysqli_query($db,"set names 'utf8'");
$bank=mysqli_query("SELECT id_bank, bank_name FROM bank "); 
echo "id банк:<select name='id_bank'>";
while ($row = mysqli_fetch_array($bank)) {
print "<p> <option value='" . $row['id_bank'] ."'>" . $row['bank_name'] ."</option>";
}
echo "</select>"; 
?>
</textarea>
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="index.php"> Вернуться к списку  </a>
</body>
</html>
