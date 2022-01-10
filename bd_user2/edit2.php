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
$query="SELECT pod_name,pod_pertoyear,id_pod FROM programms_of_deposit WHERE
id_bank=".$_GET['id'];
$result=mysqli_query($db,$query); 
$pages=mysqli_fetch_assoc($result);
while ($st = mysqli_fetch_assoc($result)) {
$id=$_GET['id'];
$id_pod=$st['id_pod'];
$pod_name = $st['pod_name'];
$pod_pertoyear = $st['pod_pertoyear'];
}
print "<form action='save_edit2.php' metod='get'>";
print "Название: <input name='pod_name' size='50' type='text'
value='".$pod_name."'>";
print "<br>годовой процент: <input name='pod_pertoyear' size='20' type='text'
value='".$pod_pertoyear."'>";
print "<br>id: <input name='id_pod' size='20' type='text'
value='".$id_pod."'>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться к списку
пользователей </a>";
?>
</body>
</html>
