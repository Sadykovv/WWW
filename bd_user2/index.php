<html>
<head> <title> Сведения о прользователях сайта </title> 
<meta http-equiv="content-type" content="text/html; charset=UTF-8" /></head>
<body>
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$db=mysqli_connect("localhost", "f0595201_f0595201","1293749568","f0595201_Alisher") or die ("Невозможно
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
echo "<td><a href='edit.php?id=" . $row['id_bank']
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
echo "<td><a href='delete.php?id=" . $row['id_bank']
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего пользователей: $num_rows </p>");
?>
<p> <a href="new.php"> Добавить пользователя </a>

<html>
<head> <title> Сведения о прользователях сайта </title> 
<meta http-equiv="content-type" content="text/html; charset=UTF-8" /></head>
<body>
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$db=mysqli_connect("localhost", "f0595201_f0595201","1293749568","f0595201_Alisher") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
$lang=mysqli_query($db,"set names 'utf8'");
$query="SELECT * from programms_of_deposit";
$result=mysqli_query($db,$query); 
$pages=mysqli_fetch_assoc($result);
// подключение к базе данных:
?>
</body> </html>
<h2>Зарегистрированные программы:</h2>
<table border="1">
<tr> 
<th> Название  </th> <th> % годовых </th>
<th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
$result=mysqli_query($db,$query); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
echo "<tr>";
echo "<td>" . $row['pod_name'] . "</td>";
echo "<td>" . $row['pod_pertoyear'] . "</td>";
echo "<td><a href='edit2.php?id=" . $row['id_bank']
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
echo "<td><a href='delete.php?id=" . $row['id_bank']
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего программ: $num_rows </p>");
?>
<p> <a href="new2.php"> Добавить программу </a>

<html>
<head> <title> Сведения о прользователях сайта </title> 
<meta http-equiv="content-type" content="text/html; charset=UTF-8" /></head>
<body>
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$db=mysqli_connect("localhost", "f0595201_f0595201","1293749568","f0595201_Alisher") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
$lang=mysqli_query($db,"set names 'utf8'");
$query="SELECT * from deposits";
$result=mysqli_query($db,$query); 
$pages=mysqli_fetch_assoc($result);
// подключение к базе данных:
?>
</body> </html>
<h2>Депозиты:</h2>
<table border="1">
<tr> 
<th> Дата создания </th> <th> Стартовая сумма вклада </th>
<th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
$result=mysqli_query($db,$query); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
echo "<tr>";
echo "<td>" . $row['deposits_date'] . "</td>";
echo "<td>" . $row['sum_deposit'] . "</td>";
echo "<td><a href='edit3.php?id=" . $row['id_pod']
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
echo "<td><a href='delete.php?id=" . $row['id_pod']
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего депозитов: $num_rows </p>");
?>
<p> <a href="new3.php"> Добавить депозит </a>

<p> <a href="gen_pdf.php"> Сгенерировать PDF-файл</a>
<p> <a href="gen_xls.php"> Сгенерировать xls-файл</a>

