<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reading Files</title>
    <style>
        .wrap{
            width: 100%;
            max-width: 900px;
            margin: 0 auto;
        }
        table{
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <div class="wrap">
     <!-- Reading CSV File -->
    <h3>Reading csv File</h3>
    <?php
echo '<table border="1">';
$start_row = 1;
if (($csv_file = fopen("myfiles/myfile.csv", "r")) !== false) {
    while (($read_data = fgetcsv($csv_file, 500, ",")) !== false) {
        $column_count = count($read_data);
        echo '<tr>';
        $start_row++;
        for ($c = 0; $c < $column_count; $c++) {
            echo "<td>" . $read_data[$c] . "</td>";
        }
        echo '</tr>';
    }
    fclose($csv_file);
}
echo '</table>';
?>
    <!-- Reading Text File -->
    <h3> Reading Text File</h3>
    <?php
$filename = "myfiles/myfile.txt";
$file = fopen($filename, 'r');
if ($file == false) {
    echo "error in file opening";
}
$filesize = filesize($filename);
$filetext = fread($file, $filesize);
echo $filetext;
?>
<!-- Reading Word File -->
<h3>Reading Word file</h3>
<?php
require_once 'vendor/autoload.php';
$content = '';
$phpWord = \PhpOffice\PhpWord\IOFactory::load('myfiles/myfile.docx');
foreach ($phpWord->getSections() as $section) {
    foreach ($section->getElements() as $element) {
        if (method_exists($element, 'getElements')) {
            foreach ($element->getElements() as $childElement) {
                if (method_exists($childElement, 'getText')) {
                    $content .= $childElement->getText() . ' ';
                } else if (method_exists($childElement, 'getContent')) {
                    $content .= $childElement->getContent() . ' ';
                }
            }
        } else if (method_exists($element, 'getText')) {
            $content .= $element->getText() . ' ';
        }
    }
}

echo $content;
?>
<!-- Reading Excel File -->
<h3>Reading Excel file</h3>
<?php
require_once 'vendor/autoload.php';
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
$reader->setReadDataOnly(true);
$spreadsheet = $reader->load("myfiles/myfile.xlsx");

$worksheet = $spreadsheet->getActiveSheet();
// Get the highest row and column numbers referenced in the worksheet
$highestRow = $worksheet->getHighestRow();
$highestColumn = $worksheet->getHighestColumn();
$highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn); // e.g. 5

echo '<table border=1>' . "\n";
for ($row = 1; $row <= $highestRow; ++$row) {
    echo '<tr>';
    for ($col = 1; $col <= $highestColumnIndex; ++$col) {
        $value = $worksheet->getCellByColumnAndRow($col, $row)->getValue();
        echo '<td>' . $value . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>
</div>
</body>
</html>