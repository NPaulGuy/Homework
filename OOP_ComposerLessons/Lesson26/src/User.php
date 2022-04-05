<?php
namespace Lesson26;
class User implements iUser
{
	private string $name;
	private int $age;
	public function __construct(string $name, int $age)
	{
		$this->name = $name;
		$this->age = $age;
	}
	public function setName(string $name) : iUser
	{
		$this->name = $name;
		return $this;
	}
	public function getName() : string
	{
		return $this->name;
	}
	public function setAge(int $age) : iUser
	{
		$this->age = $age;
		return $this;
	}
	public function getAge() : int
	{
		return $this->age;
	}
}