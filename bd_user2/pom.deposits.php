<?php

$db=mysqli_connect("localhost", "f0595201_f0595201","1293749568","f0595201_Alisher") or die ("Невозможно подключиться к серверу");
mysqli_set_charset($db, "utf8");
$query="SELECT bank_country, bank_name,
bank_reliability_class FROM bank WHERE id_bank=".$_GET['id_bank'];
$result=mysqli_query($db,$query);
while ($st = mysqli_fetch_assoc($result)) {
$id=$_GET['id'];
$bank_country= $st['bank_country'];
$bank_name= $st['bank_name'];
$bank_reliability_class =$st['bank_reliability_class'];
}


$query1="SELECT id_bank,pod_name, pod_pertoyear
FROM programms_of_deposit WHERE id_bank=".$_GET['id_bank'];
$result1=mysqli_query($db,$query1);
while ($st = mysqli_fetch_assoc($result1)) {
$id=$_GET['id_bank'];
$pod_name= $st['pod_name'];
$pod_pertoyear= $st['pod_pertoyear'];
}
$sum_deposit=$_GET['sum_deposit'];

require_once 'save_new3.php';
?>
