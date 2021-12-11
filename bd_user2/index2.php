<html>
<head> <title> Сведения о прользователях сайта </title> 
<meta http-equiv="content-type" content="text/html; charset=UTF-8" /></head>
<body>
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$db=mysqli_connect("localhost", "root","","banks") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
$lang=mysqli_query($db,"set names 'utf8'");
$query="SELECT * from bank";
$result=mysqli_query($db,$query); 
$pages=mysqli_fetch_assoc($result);
// подключение к базе данных:
?>
</body> </html>
<h2>Зарегистрированные пользователи:</h2>
<table border="1">
<tr> 
<th> Название банка </th> <th> Страна </th>
<th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
$result=mysqli_query($db,$query); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
echo "<tr>";
echo "<td>" . $row['bank_name'] . "</td>";
echo "<td>" . $row['bank_country'] . "</td>";
echo "<td><a href='edit2.php?id=" . $row['id_bank']
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
echo "<td><a href='delete2.php?id=" . $row['id_bank']
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего пользователей: $num_rows </p>");
?>
<p> <a href="new2.php"> Добавить пользователя </a>
