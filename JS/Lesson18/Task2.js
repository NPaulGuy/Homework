/**
 * Анаграммы – это слова, у которых те же буквы в том же количестве, но они располагаются в другом порядке.
 * Напишите функцию aclean(arr), которая возвращает массив слов, очищенный от анаграмм.
 * Из каждой группы анаграмм должно остаться только одно слово, не важно какое.
 */
function aclean(arr) {
	let outerMap = new Map();
	let elemKey = "";
	for (elem of arr) {
		charArr = Array.from(elem.toLowerCase());
		charArr.sort(
			(a, b) => b.charCodeAt(0) - a.charCodeAt(0)
		);
		elemKey = charArr.join("");
		outerMap.set(elemKey, elem);
	}
	return (Array.from(outerMap.values()));
}
let arr = ["nap", "teachers", "cheaters", "PAN", "ear", "era", "hectares"];
alert(aclean(arr));