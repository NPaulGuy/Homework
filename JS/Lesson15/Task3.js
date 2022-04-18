/**
 * Создайте функцию truncate(str, maxlength), которая проверяет длину строки str и, если она превосходит maxlength, заменяет конец str на "…", так, чтобы её длина стала равна maxlength.
 * Результатом функции должна быть та же строка, если усечение не требуется, либо, если необходимо, усечённая строка.
 */
function truncate(str, maxlength) {
	if (str && Number(maxlength) && Number(maxlength) > 0) {
		if (str.length > maxlength) {
			let newStr = str.substr(0, maxlength) + "...";
			return newStr;
		} else {
			return str;
		}
	} else {
		return false;
	}
}
let longStr = "Пользуясь случаем, в этот прекрасный день, я бы хотел сказать вот что!";
let shortStr = "Кратко и ясно!";
let rightStr = "123456789_123456789WBC";
alert(truncate(longStr, "12cew"));
alert(truncate(longStr, 20));
alert(truncate(shortStr, 20));
alert(truncate(rightStr, 20));
