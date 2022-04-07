<?php
namespace Lesson44;
class File implements iFile
{
	private string $filePath;
	public function __construct(string $filePath)
	{
		fopen($filePath, "w") or die("Unable to create/open file!");
		$this->filePath = $filePath;
	}
	public function __destruct() 
	{
		echo "Файл $filePath удалён!<br>";
	}
	public function getPath() : string
	{
		return $this->filePath;
	}
	public function getDir() : string
	{
		return dirname($this->filePath);
	}
	public function getName() : string
	{
		return basename($this->filePath);
	}
	public function getExt() : string
	{
		return pathinfo($this->filePath, PATHINFO_EXTENSION);
	}
	public function getSize() : int
	{
		return strlen(file_get_contents($this->filePath));
	}
	public function getText() : string
	{
		return file_get_contents($this->filePath);
	}
	public function setText($text) : iFile
	{
		file_put_contents($this->filePath, $text);
		return $this;
	}
	public function appendText($text) : iFile
	{
		file_put_contents($this->filePath, $text, FILE_APPEND);
		return $this;
	}
	public function copy($copyPath) : string
	{
		copy($this->filePath, $copyPath) or die("Cannot copy file!");
		return file_get_contents($copyPath);
	}
	public function delete()
	{
		unlink($this->filePath) or die("Cannot delete file!");
		$this->__destruct();
	}
	public function rename($newName) : iFile
	{
		rename($this->filePath, $newName) or die("Cannot rename file!");
		$this->filePath = $newName;
		return $this;
	}
	public function replace($newPath) : iFile
	{
		rename($this->filePath, $newPath) or die("Cannot rename file!");
		$this->filePath = $newPath;
		return $this;
	}
}