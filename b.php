<?php

require '/home/krig/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

function filew() {

  $inputFileName = 'ЗАЯВКА ВОДОСТОК.xlsx';
  
  $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileName);
  $worksheet = $spreadsheet->getSheet(0);
  $worksheet->getCell('K26')->setValue("1");
  $worksheet->getCell('K27')->setValue("2");
  $worksheet->getCell('K28')->setValue("0");
  $worksheet->getCell('K29')->setValue("0");
  $worksheet->getCell('K30')->setValue("0");
  $worksheet->getCell('K31')->setValue("0");
  $worksheet->getCell('K32')->setValue("0");
  $worksheet->getCell('K33')->setValue("0");
  $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
  $writer->save($inputFileName);
  header("Location: http://example1.com/%D0%97%D0%90%D0%AF%D0%92%D0%9A%D0%90%20%D0%92%D0%9E%D0%94%D0%9E%D0%K1%D0%A2%D0%9E%D0%9A.xlsx");
}

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
      $row = 26;
      break;
    case "150":
      $row = 38;
      break;
    case "100":
      $row = 17;
      break;
    case "75":
      $row = 8;
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
      $row1 = 57;
      break;
    case "110":
      $row1 = 47;
      break;
    case "63":
      $row1 = 66;
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
  echo "<br><br><div align='left'>___служебный___<br>\$row value = ", $row;
  echo "<br>\$col value (цвет желоба) = ", $col;
  echo "<br>\$row1 value = ", $row1;
  echo "<br>\$col1 value (цвет трубы) = ", $col1, "<br>___служебный___<br><br>";
  echo "длина желоба 3 м - ", $dlinazh3, "<br>";
  echo "длина желоба 4 м - ", $dlinazh4, "<br>";
  echo "диамер желоба - ", $diam, "<br>";
  echo "длина трубы 3 м - ", $dlinatr3, "<br>";
  echo "длина трубы 4 м - ", $dlinatr4, "<br>";
  echo "диаметр трубы - ", $diam1, "</div><br>";

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
  // $luk = 0; // Люк для чистки  ( 15 ) 
  // $troinik110 = 0; // Тройник 110/110/110, 67,6 st.( 16 )
  // $troinik63 = 0; // Тройник 110/110/63, 67,6 st.( 16 )

  echo "<div align='left'>муфта желоба - ", $mufta, "<br>";
  echo "сливная воронка - ", $slivvor, "<br>";
  echo "внурений угол - ", $vnutrugol, "<br>";
  echo "внешний угол - ", $vneshrugol, "<br>";
  echo "держатель желоба - ", $derzhzel, "<br>";
  echo "заглушка правая - ", $zaglprav, "<br>";
  echo "заглушка левая - ", $zagllev, "<br>";
  echo "кольцевой ниппель - ", $kolcnip, "<br>";
  echo "колено - ", $koleno, "<br>";
  echo "колено двухраструбное - ", $koleno2, "<br>";
  echo "хомут трубы - ", $khomut, "<br>";
  // echo "luk - ", $luk, "<br>";
  // echo "troinik110 - ", $troinik110, "<br>";
  // echo "troinik63 - ", $troinik63, "<br>";
  echo "</div>";
}