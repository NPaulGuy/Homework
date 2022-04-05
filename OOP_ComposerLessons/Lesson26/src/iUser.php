<?php
namespace Lesson26;
interface iUser
{
	public function setName(string $name) : iUser;
	public function getName() : string;
	public function setAge(int $age) : iUser;
	public function getAge() : int;
}