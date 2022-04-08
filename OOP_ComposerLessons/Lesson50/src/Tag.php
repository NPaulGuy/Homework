<?php
namespace Lesson50;
/**
 * [Description Tag]
 */
class Tag
{
	private string $name;
	private array $attrs;
	/**
	 * @param string $name
	 * @param array|null $attrs
	 */
	public function __construct(string $name, array $attrs = [])
	{
		$this->name = $name;
		$this->attrs = $attrs;
	}
	/**
	 * @param string $attr
	 * @param string $value
	 * 
	 * @return Tag
	 */
	public function setAttr(string $attr, string $value) : Tag
	{
		$this->attrs[$attr] = $value;
		return $this;
	}
	/**
	 * @param mixed $attrs
	 * 
	 * @return Tag
	 */
	public function setAttrs(array $attrs) : Tag
	{
		foreach ($attrs as $attr => $value) {
			$this->setAttr($attr, $value);
		}
		return $this;
	}
	/**
	 * @param mixed $attr
	 * 
	 * @return Tag
	 */
	public function removeAttr(string $attr) : Tag
	{
		unset($this->attrs[$attr]);
		return $this;
	}
	/**
	 * @return string
	 */
	public function open() : string
	{
		$name = $this->name;
		$attrsStr = $this->getAttrsStr($this->attrs);
		return "<$name$attrsStr>";
	}
	/**
	 * @return string
	 */
	public function close() : string
	{
		$name = $this->name;
		return "</$name>";
	}
	/**
	 * @param string $className
	 * 
	 * @return Tag
	 */
	public function addClass(string $className) : Tag
	{
		if (isset($this->attrs['class'])) {
			$classes = explode(' ', $this->attrs['class']);
			// Если класса нет, то добавляем его в строку с классами. Иначе - ничего не делаем.
			if (!in_array($className, $classes)) {
				$classes[] = $className;
				$this->attrs['class'] = implode(' ', $classes);
			}
		} else {
			$this->attrs['class'] = $className;
		}
		return $this;
	}
	/**
	 * @param string $className
	 * 
	 * @return Tag
	 */
	public function removeClass(string $className) : Tag
	{
		// Если тег "class" присутствует, выполняем удаление. 
		if (isset($this->attrs['class'])) {
			$classes = explode(' ', $this->attrs['class']);
			if (in_array($className, $classes)) {
				$classes = $this->removeElem($className, $classes);
				$this->attrs['class'] = implode(' ', $classes);
			}
		}
		return $this;
	}
	/**
	 * @param array $attrs
	 * 
	 * @return string
	 */
	private function getAttrsStr(array $attrs) : string
	{
		if (!empty($attrs)) {
			$result = "";
			foreach ($attrs as $name => $value) {
				if ($value === true) {
					$result .= " $name";
				} else if ($value !== false) {
					$result .= " $name=\"$value\"";
				}
			}
			return $result;
		} else {
			return "";
		}
	}
	/**
	 * @param string $elem
	 * @param array $arr
	 * 
	 * @return array
	 */
	private function removeElem(string $elem, array $arr) : array
	{
		$key = array_search($elem, $arr);
		array_splice($arr, $key, 1);
		return $arr;
	}
}