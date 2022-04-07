<?php
namespace Lesson44;
interface iFile
{
	public function __construct(string $filePath);
	public function getPath() : string;
	public function getDir() : string;
	public function getName() : string;
	public function getExt() : string;
	public function getSize() : int;
	public function getText() : string;
	public function setText($text) : iFile;
	public function appendText($text) : iFile;
	public function copy($copyPath) : string;
	public function delete();
	public function rename($newName) : iFile;
	public function replace($newPath) : iFile;
}