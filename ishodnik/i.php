<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

$rowDERZH = 1;
$rowHOM = 1;
$rowKN = 1;
$rowKOL = 1;
$rowKOL2 = 1;
$rowMUF = 1;
$rowSLV110 = 1;
$rowSLV90 = 1;
$rowTR = 1;
$rowTR4 = 1;
$rowVNESHUG = 1;
$rowVNUG = 1;
$rowZAGLL = 1;
$rowZAGLP = 1;
$rowZH3 = 1;
$rowZH3 = 1;
$rowZH4 = 1;
$col = 'G';
$col1 = 'G';
$khomut = 1;
$kolcnip = 1;
$koleno = 1;
$koleno2 = 1;
$derzhzel = 1;
$dlinatr3 = 1;
$dlinatr4 = 1;
$dlinazh3 = 1;
$dlinazh4 = 1;
$mufta = 1;
$slivvor = 1;
$vneshrugol = 1;
$vnutrugol = 1;
$zagllev = 1;
$zaglprav = 1;

# блок вставки данных в файл
$inputFileName = 'ЗАЯВКА ВОДОСТОК.xlsx';

$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileName);
$worksheet = $spreadsheet->getSheet(0);

# вставляет данные в ячейки ЗАЯВКА ВОДОСТОК.xlsx
if ($rowZH3) {
  $worksheet->getCell($col.$rowZH3)->setValue($dlinazh3); # кол-во 3м желоба
}
if ($rowZH4) {
  $worksheet->getCell($col.$rowZH3)->setValue($dlinazh4); # кол-во 4м желоба
}
$worksheet->getCell($col.$rowMUF)->setValue($mufta); # кол-во муфты
if ($rowSLV90) {
  $worksheet->getCell($col.$rowSLV90)->setValue($slivvor); # кол-во сливной воронки малой
}
if ($rowSLV110) {
  $worksheet->getCell($col.$rowSLV110)->setValue($slivvor); # кол-во сливной воронки большой
}
$worksheet->getCell($col.$rowVNUG)->setValue($vnutrugol); # кол-во внутрений угол
$worksheet->getCell($col.$rowVNESHUG)->setValue($vneshrugol); # кол-во внешний угол
$worksheet->getCell($col.$rowDERZH)->setValue($derzhzel); # кол-во держателей
$worksheet->getCell($col.$rowZAGLP)->setValue($zaglprav); # кол-во заглушек правых
$worksheet->getCell($col.$rowZAGLL)->setValue($zagllev); # кол-во заглушек левых

$worksheet->getCell($col1.$rowTR)->setValue($dlinatr3); # кол-во 3 м трубы
if ($rowTR4) {
  $worksheet->getCell($col1.$rowTR4)->setValue($dlinatr4); # кол-во 4 м трубы
}
$worksheet->getCell($col1.$rowKN)->setValue($kolcnip); # кол-во кольцевого ниппеля
$worksheet->getCell($col1.$rowKOL)->setValue($koleno); # кол-во коленей обычных
if ($rowKOL2) {
  $worksheet->getCell($col1.$rowKOL2)->setValue($koleno2); # кол-во коленей двухраструбных
}
$worksheet->getCell($col1.$rowHOM)->setValue($khomut); # кол-во коленей обычных

$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save($inputFileName);