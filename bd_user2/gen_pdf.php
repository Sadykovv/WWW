<?php
require_once 'tcpdf/tcpdf.php';
 $link = mysqli_connect("localhost", "f0595201_f0595201","1293749568","f0595201_Alisher") or die ("Невозможно подключиться к серверу"); // установление соединения с сервером
$fr = array("Номер", "Наименование банка", "страна", "Класс надежности", "название программы", "% годовых", "сумма всех вкладов такого типа");
$pdf = new TCPDF("L", 'mm', 'A4', true, 'UTF-8');
$pdf->SetAuthor('Садыков');
$pdf->SetTitle('Вклады');
$pdf->SetFont('dejavusans', '', 10  , '', true);
$pdf->AddPage();
$tab = '<h1>Вклады</h1><br>';
$tab .= '<table  border="1">';
$tab .= "<tr>";
for($i = 0; $i < count($fr); $i++){
   $tab .= "<th>$fr[$i]</th>";}
$tab .= "</tr>";
$sql = "SELECT * FROM depositss";

$result = mysqli_query($link, $sql) or die("Невозможно выполнить запрос!");

 while ($row=mysqli_fetch_array($result)) {

    $tab .= "<tr>";
    
//Вывод названия автосалона и адреса
for($i = 0; $i < 7; $i++){
    $text = $row[$i];
$tab .= "<td>$text</td>";}

$tab .= "</tr>";
}

$tab .= "</table>";

$pdf->writeHTMLCell(0, 0, '', '', $tab, 0, 1, 0, true, '', true);
$pdf->Output('Документ.pdf');
?>
