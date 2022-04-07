<?php
/**
 * Реализуйте описанный класс File в соответствии с описанным интерфейсом iFile. Проверьте его работу.
 */
require __DIR__ . '/../vendor/autoload.php';
use \Lesson44\File;

$file = new File("/home/lega/TestFiles/testFile.txt");
echo $file->getPath() . "<br>=>" . $file->getDir() . "<=<br>";
echo $file->getName() . "<br>" . $file->getExt() . "<br>";
echo $file->getSize() . "<br>" . $file->getText() . "<br>";
echo $file->setText("First text in that file!")->getText() . "<br>";
echo $file->appendText("\nAnd there is another one!")->getText() . "<br>";
echo $file->copy("/home/lega/TestFiles/copiedFile.txt") . "<br>";
echo file_get_contents("/home/lega/TestFiles/copiedFile.txt") . "<br>";
echo $file->rename("/home/lega/TestFiles/testFile2.txt")->getName() . "<br>";
echo $file->replace("/home/lega/TestFiles/folder/testFile.txt")->getPath() . "<br>";
var_dump(file_exists("/home/lega/TestFiles/folder/testFile.txt"));
$file->delete();
var_dump(file_exists("/home/lega/TestFiles/folder/testFile.txt"));