<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

# очистка файла
$inputFileName = 'ЗАЯВКА ВОДОСТОК.xlsx';

$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileName);
$worksheet = $spreadsheet->getSheet(0);

$colArray = array('G', 'I', 'K', 'M', 'O', 'Q', 'S', 'U');

for ($j = 0; $j < 8; $j++) { 
  $y = $colArray[$j];
  for ($i = 8; $i <= 86; $i++) {
    $worksheet->getCell($y.$i)->setValue('');
  }
} 

$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save($inputFileName);

header("Location: http://example1.com/");