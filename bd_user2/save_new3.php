<?php
// Подключение к базе данных:
$db=mysqli_connect("localhost", "f0595201_f0595201","1293749568","f0595201_Alisher") or die ("Невозможно
подключиться к серверу");
$lang=mysqli_query($db,"set names 'utf8'");
$query="SELECT * from deposits";
$result=mysqli_query($db,$query); 
$pages=mysqli_fetch_assoc($result);
// Строка запроса на добавление записи в таблицу:
$_GET['date']=date('d-m-Y', strtotime($date_from_sql));
$sql_add = "INSERT INTO deposits SET deposits_date='" . $_GET['date']
."', sum_deposit='".$_GET['sum_deposit']."', id_deposits='".$_GET['id']."', id_pod='".$_GET['id_pod']."'";
$result=mysqli_query($db,$sql_add);
if (mysqli_affected_rows($db)>0) // если нет ошибок при выполнении запроса
{ print "<p>Спасибо, вы зарегистрированы в базе данных.";
print "<p><a href=\"index.php\"> Вернуться к списку
пользователей </a>"; }
else { print "Ошибка сохранения. <a href=\"index.php\">
Вернуться к списку книг </a>"; }

 $sql_add1 = "INSERT INTO depositss SET bank_country = $bank_country, bank_name = $bank_name, sum_deposit=$sum_deposit,bank_reliability_class =$bank_reliability_class, pod_name =$pod_name , pod_pertoyear ='$pod_pertoyear'";
 
 $result1 = mysqli_query($db, $sql_add1); // Выполнение запроса
?>
