<?php
$mysql=mysqli_connect("localhost", "f0595201_f0595201","1293749568","f0595201_Alisher") or die ("Невозможно подключиться к серверу");
    require_once('php_excel/Classes/PHPExcel.php');
    require_once('php_excel/Classes/PHPExcel/Writer/Excel2007.php');
    // Запрос на выборку сведений о пользователях
    $result = mysqli_query($mysql,"SELECT * FROM depositss"
    );

    $xls = new PHPExcel();

    // Устанавливаем индекс активного листа
    $xls->setActiveSheetIndex(0);
    // Получаем активный лист
    $sheet = $xls->getActiveSheet();
    // Подписываем лист
    $sheet->setTitle('Вклады');

    // Вставляем текст в ячейку A1
    $sheet->setCellValue('A1', 'Вклады');
    $sheet->getStyle('A1')->getFill()->setFillType(
        PHPExcel_Style_Fill::FILL_SOLID);
    $sheet->getStyle('A1')->getFill()->getStartColor()->setRGB('EEEEEE');

    // Объединяем ячейки
    $sheet->mergeCells('A1:H1');

    // Выравнивание текста
    $sheet->getStyle('A1')->getAlignment()->setHorizontal(
        PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

    $header = array("Номер", "Наименование банка", "страна", "Класс надежности", "название программы", "% годовых", "сумма всех вкладов такого типа");

    $a = 0;

    foreach ($header as $h){
    $sheet->setCellValueByColumnAndRow(
    $a,2,$h);

        // Применяем выравнивание
        $sheet->getColumnDimensionByColumn($a)->setAutoSize(true);
        $a++;
    }

    if ($result){
        $r = 3;

        // Для каждой строки из запроса
        while ($row = $result->fetch_row()){
        $a = 0;



        foreach ($row as $cell){

        $sheet->setCellValueByColumnAndRow($a,$r,$cell);
        $a++;
            }
        $r++;
        }    
}
    header('Content-Disposition: attachment;filename=Nalichie.xls');


    $objWriter = new PHPExcel_Writer_Excel5($xls);
    $objWriter->save('php://output');
?>
