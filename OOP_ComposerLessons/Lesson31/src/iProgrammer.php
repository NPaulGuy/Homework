<?php
namespace Lesson31;
/**
 * [Description iProgrammer]
 */
interface iProgrammer
{
	/**
	 * @return array
	 */
	public function getLangs() : array;
	/**
	 * @param string $lang
	 * 
	 * @return iProgrammer
	 */
	public function addLang(string $lang) : iProgrammer;
}