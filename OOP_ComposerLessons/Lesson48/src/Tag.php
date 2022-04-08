<?php
namespace Lesson48;
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
	 * @param mixed $attr
	 * @param mixed $value
	 * 
	 * @return Tag
	 */
	public function setAttr($attr, $value) : Tag
	{
		$this->attrs[$attr] = $value;
		return $this;
	}
	/**
	 * @param mixed $attrs
	 * 
	 * @return Tag
	 */
	public function setAttrs($attrs) : Tag
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
	public function removeAttr($attr) : Tag
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
	 * @param array $attrs
	 * 
	 * @return string
	 */
	private function getAttrsStr(array $attrs) : string
	{
		if (!empty($attrs)) {
			$result = "";
			foreach ($attrs as $name => $value) {
				$result .= " $name=\"$value\"";
			}
			return $result;
		} else {
			return "";
		}
	}
}