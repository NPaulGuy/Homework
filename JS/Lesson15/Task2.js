/**
 * Напишите функцию checkSpam(str), возвращающую true, если str содержит 'viagra' или 'XXX', а иначе false.
 * Функция должна быть нечувствительна к регистру.
 */
function checkSpam(str) {
	if (str) {
		str = str.toLowerCase();
		return (str.includes("viagra") || str.includes("xxx"));
	} else {
		return false;
	}
}
let str1 = "ViAgRA 123";
let str2 = "xXXcheck";
let str3 = "Usual string, no spam!";
alert(checkSpam(str1));
alert(checkSpam(str2));
alert(checkSpam(str3));