<?php

require 'lib/Excel_XML.php';
require 'src/lang.php';
$filename = 'lang.xls';
/*
foreach($langArray as $key =>$value){
echo $key." - ".$value."<br>";
}
exit;
*/
$xls = new Excel_XML;
$xls->addWorksheet('Перевод', $langArray);
$xls->writeWorkbook($filename, __DIR__.'/dist/');
echo "file was created".PHP_EOL;