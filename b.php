<?php

require '/home/krig/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

if ($_POST) {
  
  $dlinazh3 = htmlspecialchars(print_r($_POST['dlinazh3'], true));
  $dlinazh4 = htmlspecialchars(print_r($_POST['dlinazh4'], true));
  $cvet = htmlspecialchars(print_r($_POST['cvet'], true));
  $diam = htmlspecialchars(print_r($_POST['diam'], true));
  $dlinatr3 = htmlspecialchars(print_r($_POST['dlinatr3'], true));
  $dlinatr4 = htmlspecialchars(print_r($_POST['dlinatr4'], true));
  $cvet1 = htmlspecialchars(print_r($_POST['cvet1'], true));
  $diam1 = htmlspecialchars(print_r($_POST['diam1'], true));

  // $row it's row value to add to function filew()
  switch ($diam) {
    case "125":
      $rowZH3 = 26;
      $rowZH4 = 27;
      $rowMUF = 28;
      $rowSLV110 = 29;
      $rowSLV90 = 30;
      $rowVNUG = 31;
      $rowVNESHUG = 32;
      $rowDERZH = 33;
      $rowZAGLP = 34;
      $rowZAGLL = 35;
      break;
    case "150":
      $rowZH4 = 38;
      $rowMUF = 39;
      $rowSLV110 = 40;
      $rowVNUG = 41;
      $rowVNESHUG = 42;
      $rowDERZH = 43;
      $rowZAGLP = 44;
      $rowZAGLL = 45;
      break;
    case "100":
      $rowZH3 = 17;
      $rowMUF = 18;
      $rowSLV90 = 19;
      $rowVNUG = 20;
      $rowVNESHUG = 21;
      $rowDERZH = 22;
      $rowZAGLP = 23;
      $rowZAGLL = 24;
      break;
    case "75":
      $rowZH3 = 8;
      $rowMUF = 9;
      $rowSLV90 = 10;
      $rowVNUG = 11;
      $rowVNESHUG = 12;
      $rowDERZH = 13;
      $rowZAGLP = 14;
      $rowZAGLL = 15;
      break;
  }
  // $col column value to be equivalent to cvet
  switch ($cvet) {
    case 1:
      $col = 'G';
      break;
    case 2:
      $col = 'I';
      break;
    case 3:
      $col = 'K';
      break;
    case 4:
      $col = 'M';
      break;
    case 5:
      $col = 'O';
      break;
    case 6:
      $col = 'Q';
      break;
    case 7:
      $col = 'S';
      break;
    case 8:
      $col = 'U';
      break;
  }
  // $row1 it's row value to add to function filew()
  switch ($diam1) {
    case "90":
      $rowTR = 57;
      $rowTR4 = 58;
      $rowKN = 59;
      $rowKOL = 60;
      $rowKOL2 = 61;
      $rowHOM = 62;
      break;
    case "110":
      $rowTR = 47;
      $rowTR4 = 48;
      $rowKN = 49;
      $rowKOL = 50;
      $rowKOL2 = 51;
      $rowHOM = 52;
      break;
    case "63":
      $rowTR = 66;
      $rowKN = 67;
      $rowKOL = 68;
      $rowHOM = 69;
      break;
  }
  // $col column value to be equivalent to cvet
  switch ($cvet1) {
    case "1":
      $col1 = 'G';
      break;
    case "2":
      $col1 = 'I';
      break;
    case "3":
      $col1 = 'K';
      break;
    case "4":
      $col1 = 'M';
      break;
    case "5":
      $col1 = 'O';
      break;
    case "6":
      $col1 = 'Q';
      break;
    case "7":
      $col1 = 'S';
      break;
    case "8":
      $col1 = 'U';
      break;
  }

  echo "<form action='s.php' method='post'><input id='secinput' class='fi forma' type='submit' value='download excel file'></form>";

  echo "<br><br><div align='left'>___служебный___<br>\$col (цвет желоба) = ", $col;
  echo "<br>\$col1 (цвет трубы) = ", $col1, "<br>___служебный___<br><br>";
  echo "\$diam (диамер желоба) - ", $diam, " мм <br>";
  echo "\$dlinazh3 (длина желоба 3 м) - ", $dlinazh3, " м <br>";
  echo "\$dlinazh4 (длина желоба 4 м) - ", $dlinazh4, " м <br><br>";
  echo "\$diam1 (диаметр трубы) - ", $diam1, " мм <br>";
  echo "\$dlinatr3 (длина трубы 3 м) - ", $dlinatr3, " м <br>";
  echo "\$dlinatr4 (длина трубы 4 м) - ", $dlinatr4, " м </div><br>";

  $mufta = (int)($dlinazh3/3 + $dlinazh4/4);
  $slivvor = (int)(($dlinazh3 + $dlinazh4)/3); // Сливная воронка ( 3 ) 75/Ø63
  $vnutrugol = (int)(($dlinazh3 + $dlinazh4)/10); // Внутренний угловой элемент ( 4)
  $vneshrugol = (int)(($dlinazh3 + $dlinazh4)/7); // Внешний угловой элемент ( 5 )
  $derzhzel = (int)(($dlinazh3 + $dlinazh4)/0.5); // Держатель желоба -( 6)
  $zaglprav = (int)(($dlinazh3 + $dlinazh4)/5); // Заглушка правая  ( 7 )
  $zagllev = (int)(($dlinazh3 + $dlinazh4)/5); // Заглушка  левая  ( 8 )
  $kolcnip = (int)(($dlinatr3 + $dlinatr4)/8); // Кольцевой ниппель(соединитель труб) ( 11 ) 
  $koleno = (int)(($dlinazh3 + $dlinazh4)/3); // Колено  67,5 st. ( 12 )
  $koleno2 = (int)($koleno/5); // Колено  67,5 st. ( 13 ) двухраструбное 
  $khomut = (int)($dlinatr3/3 + $dlinatr4/4); // Хомут водосточной трубы ( 14 )

  echo "<div align='left'>\$mufta (муфта желоба) - ", $mufta, " шт.<br>";
  echo "\$slivvor (сливная воронка) - ", $slivvor, " шт.<br>";
  echo "\$vnutrugol (внурений угол) - ", $vnutrugol, " шт.<br>";
  echo "\$vneshrugol (внешний угол) - ", $vneshrugol, " шт.<br>";
  echo "\$derzhzel (держатель желоба) - ", $derzhzel, " шт.<br>";
  echo "\$zaglprav (заглушка правая) - ", $zaglprav, " шт.<br>";
  echo "\$zagllev (заглушка левая) - ", $zagllev, " шт.<br><br>";
  echo "\$kolcnip (кольцевой ниппель) - ", $kolcnip, " шт.<br>";
  echo "\$koleno (колено) - ", $koleno, " шт.<br>";
  echo "\$koleno2 (колено двухраструбное) - ", $koleno2, " шт.<br>";
  echo "\$khomut (хомут трубы) - ", $khomut, " шт.<br>";
  // echo "luk - ", $luk, "<br>";
  // echo "troinik110 - ", $troinik110, "<br>";
  // echo "troinik63 - ", $troinik63, "<br>";
  echo "</div>";
  echo "<br><form action='b1.php' method='post'><input id='secinput' class='fi forma' type='submit' value='очистить исходник'></form>";

  # блок вставки данных в файл
  $inputFileName = 'ЗАЯВКА ВОДОСТОК.xlsx';
  
  $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileName);
  $worksheet = $spreadsheet->getSheet(0);
  
  # вставляет данные в ячейки ЗАЯВКА ВОДОСТОК.xlsx
  if ($rowZH3) {
    $worksheet->getCell($col.$rowZH3)->setValue($dlinazh3); # кол-во 3м желоба
  }
  if ($rowZH4) {
    $worksheet->getCell($col.$rowZH4)->setValue($dlinazh4); # кол-во 4м желоба
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
}