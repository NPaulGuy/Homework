/**
 * Напишите функцию camelize(str), которая преобразует строки вида «my-short-string» в «myShortString».
 * То есть дефисы удаляются, а все слова после них получают заглавную букву.
 */
function camelize(str) {
	let arr = str.split("-");
	arr = arr.map((item, index) => {
		if (index == 0) {
			return item;
		} else {
			return item[0].toUpperCase() + item.slice(1);
		}
	});
	return arr.join("");
}
let str = "string-check-again";
alert(camelize(str));