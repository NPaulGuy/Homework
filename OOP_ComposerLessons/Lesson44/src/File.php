<?php
namespace Lesson44;
/**
 * [Description File]
 */
class File implements iFile
{
	private string $filePath;
	/**
	 * @param string $filePath
	 */
	public function __construct(string $filePath)
	{
		fopen($filePath, "w") or die("Unable to create/open file!");
		$this->filePath = $filePath;
	}
	/**
	 * @return none
	 */
	public function __destruct() 
	{
		echo "Файл $filePath удалён!<br>";
	}
	/**
	 * @return string
	 */
	public function getPath() : string
	{
		return $this->filePath;
	}
	/**
	 * @return string
	 */
	public function getDir() : string
	{
		return dirname($this->filePath);
	}
	/**
	 * @return string
	 */
	public function getName() : string
	{
		return basename($this->filePath);
	}
	/**
	 * @return string
	 */
	public function getExt() : string
	{
		return pathinfo($this->filePath, PATHINFO_EXTENSION);
	}
	/**
	 * @return int
	 */
	public function getSize() : int
	{
		return strlen(file_get_contents($this->filePath));
	}
	/**
	 * @return string
	 */
	public function getText() : string
	{
		return file_get_contents($this->filePath);
	}
	/**
	 * @param mixed $text
	 * 
	 * @return iFile
	 */
	public function setText($text) : iFile
	{
		file_put_contents($this->filePath, $text);
		return $this;
	}
	/**
	 * @param mixed $text
	 * 
	 * @return iFile
	 */
	public function appendText($text) : iFile
	{
		file_put_contents($this->filePath, $text, FILE_APPEND);
		return $this;
	}
	/**
	 * @param mixed $copyPath
	 * 
	 * @return string
	 */
	public function copy($copyPath) : string
	{
		copy($this->filePath, $copyPath) or die("Cannot copy file!");
		return file_get_contents($copyPath);
	}
	/**
	 * @return none
	 */
	public function delete()
	{
		unlink($this->filePath) or die("Cannot delete file!");
		$this->__destruct();
	}
	/**
	 * @param mixed $newName
	 * 
	 * @return iFile
	 */
	public function rename($newName) : iFile
	{
		rename($this->filePath, $newName) or die("Cannot rename file!");
		$this->filePath = $newName;
		return $this;
	}
	/**
	 * @param mixed $newPath
	 * 
	 * @return iFile
	 */
	public function replace($newPath) : iFile
	{
		rename($this->filePath, $newPath) or die("Cannot rename file!");
		$this->filePath = $newPath;
		return $this;
	}
}