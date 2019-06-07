<?php

require '/home/krig/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

$inputFileName = 'ЗАЯВКА ВОДОСТОК.xlsx';

$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileName);
$worksheet = $spreadsheet->getSheet(0);

if ($_POST) {
  
  $zhelob = htmlspecialchars(print_r($_POST['zhelob'], true));
  $dlina = htmlspecialchars(print_r($_POST['dlina'], true));
  $cvet = htmlspecialchars(print_r($_POST['cvet'], true));
  $diam = htmlspecialchars(print_r($_POST['diam'], true));
  $truba = htmlspecialchars(print_r($_POST['truba'], true));
  $dlina1 = htmlspecialchars(print_r($_POST['dlina1'], true));
  $cvet1 = htmlspecialchars(print_r($_POST['cvet1'], true));
  $diam1 = htmlspecialchars(print_r($_POST['diam1'], true));

  if ($diam == '125') {
    

  } elseif ($diam == '150') {
    $worksheet->getCell('A1')->setValue($zhelob + "150");
    $worksheet->getCell('B1')->setValue($dlina + "150");

  } elseif ($diam == '100') {
    $worksheet->getCell('A1')->setValue($zhelob + "100");
    $worksheet->getCell('B1')->setValue($dlina + "100");

  } else {
    if () {
      $worksheet->getCell('A1')->setValue($dlina);
    }
  }
  
  $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
  $writer->save($inputFileName);

  header("Location: http://example1.com/%D0%97%D0%90%D0%AF%D0%92%D0%9A%D0%90%20%D0%92%D0%9E%D0%94%D0%9E%D0%A1%D0%A2%D0%9E%D0%9A.xlsx");

}

// строка 8 желоб 75: G-Коричневый, I-Белый, K-Графит, M-Серебро, O-Чорный, Q-Медный, S-Кирпичный, U-зеленый
// строка 9 Муфта желоба  ( 2  )
// строка 10 Сливная воронка ( 3 ) 75/Ø63
// строка 11 Внутренний угловой элемент ( 4)
// строка 12 Внешний угловой элемент ( 5 )
// строка 13 Держатель желоба -( 6)
// строка 14 Заглушка правая  ( 7 )
// строка 15 Заглушка  левая  ( 8 )
