/**
 * Напишите функцию count(obj), которая возвращает количество свойств объекта:
 * Постарайтесь сделать код как можно короче.
 * P.S. Игнорируйте символьные свойства, подсчитывайте только «обычные».
 */
function count(obj) {
	return Object.values(obj).length;
}
let user = {
	name: 'John',
	age: 30,
	salary : 1200
}
alert(count(user));