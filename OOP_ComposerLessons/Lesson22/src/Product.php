<?php
namespace Lesson22;
/**
 * [Description Product]
 */
class Product
{
	private string $name;
	private int $price;
	/**
	 * @param string $name
	 * @param int $price
	 */
	public function __construct(string $name, int $price) {
		$this->name = $name;
		$this->price = $price;
	}
	/**
	 * @return string
	 */
	public function getName() : string
	{
		return $this->name;
	}
	/**
	 * @param string $name
	 * 
	 * @return Product
	 */
	public function setName(string $name) : Product
	{
		$this->name = $name;
		return $this;
	}
	/**
	 * @return string
	 */
	public function getPrice() : string
	{
		return $this->price;
	}
	/**
	 * @param int $price
	 * 
	 * @return Product
	 */
	public function setPrice(int $price) : Product
	{
		$this->price = $price;
		return $this;
	}
}