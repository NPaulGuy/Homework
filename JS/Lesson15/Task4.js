/**
 * Есть стоимость в виде строки "$120". То есть сначала идёт знак валюты, а затем – число.
 * Создайте функцию extractCurrencyValue(str), которая будет из такой строки выделять числовое значение и возвращать его.
 */
function extractCurrencyValue(str) { 
	if (String(str)) {
		// Если перед знаком доллара есть минус, то значение изменяется.
		// Если доллара нет вовсе, то возвращаем false.
		let signNumber = 1;
		let value = NaN;
		if (str.substr(0, 1) == "$") {
			value = str.substr(1);
		} 
		if (str.substr(0, 2) == "-$") {
			value = str.substr(2);
			signNumber = -1;
		} 
		// После извлечения числа надо проверить, корректное ли оно.
		// В случае некорректности возвращаем false.
		if (Number(value) !== NaN && Number(value) >= 0) {
			return signNumber * value;
		}
		// Чтобы не повторять return false в блоках if else, данная строка стоит в конце
		// Она сработает, если стоимость($ + число) или само число некорректны.
		return false;
	} else {
		return false;
	}
}
var currency = prompt("Введите сумму в долларах", "$0");
alert(extractCurrencyValue(currency));