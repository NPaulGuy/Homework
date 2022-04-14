/**
 * Напишите функцию isEmpty(obj), которая возвращает true, если у объекта нет свойств, иначе false.
 */
function isEmpty(obj) {
	for (key in obj) {
		return false;
	}
	return true;
}
let obj = {};
//obj.name = "OLEG";
alert(isEmpty(obj));