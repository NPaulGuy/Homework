<?php
/**
 * 	Удалите куку с именем test. 
 */
setcookie('test', '123', time() - 1);
echo $_COOKIE['test'];

