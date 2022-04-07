<?php
namespace Lesson44;
interface iFile
{
	public function __construct(string $filePath);
	public function getPath() : string; // путь к файлу
	public function getDir() : string;  // папка файла
	public function getName() : string; // имя файла
	public function getExt() : string;  // расширение файла
	public function getSize() : int; // размер файла
	public function getText() : string;          // получает текст файла
	public function setText($text) : iFile;     // устанавливает текст файла
	public function appendText($text) : iFile;  // добавляет текст в конец файла
	public function copy($copyPath) : string;    // копирует файл
	public function delete();           // удаляет файл
	public function rename($newName) : iFile;   // переименовывает файл
	public function replace($newPath) : iFile;  // перемещает файл
}