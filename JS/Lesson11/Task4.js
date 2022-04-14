/**
 * Создайте функцию multiplyNumeric(obj), которая умножает все числовые свойства объекта obj на 2.
 * Обратите внимание, что multiplyNumeric не нужно ничего возвращать. Следует напрямую изменять объект.
 * P.S. Используйте typeof для проверки, что значение свойства числовое.
 */
function multiplyNumeric(obj) {
	for (let key in obj) {
		if (typeof obj[key] == "number") {
			obj[key] *= 2;
		}
	}
}
let obj = {
	width: 200,
	height: 300,
	title: "My menu",
}
multiplyNumeric(obj);
alert(obj.width);
alert(obj.height);
alert(obj.title);