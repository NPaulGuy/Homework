/**
 * Напишите функцию ucFirst(str), возвращающую строку str с заглавным первым символом.
 */
function ucFirst(str) {
	if (!str) {
		let newStr = str[0].toUpperCase() + str.substring(1);
		return newStr;
	} else {
		return "";
	}
}
let str = "oLEG";
alert(ucFirst(str));