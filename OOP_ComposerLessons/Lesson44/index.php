<?php
/**
 * Реализуйте описанный класс File в соответствии с описанным интерфейсом iFile. Проверьте его работу.
 */
require __DIR__ . '/../vendor/autoload.php';
use \Lesson44\File;

$file = new File("/home/lega/testFile.txt");
echo $file->getPath() . "<br>" . $file->getDir();
echo $file->getName() . "<br>" . $file->getExt();