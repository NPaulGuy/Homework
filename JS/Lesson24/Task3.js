/**
 * У нас есть массив объектов, который нужно отсортировать.
 * Напишите функцию byField, которая может быть использована для укороченной записи сортировки:
 * users.sort(byField('name')) и т.д.
 */
function byField(fieldName) {
	return ((a, b) => a[fieldName] > b[fieldName] ? 1 : -1);
}
let users = [
	{ name: "John", age: 20, surname: "Johnson" },
	{ name: "Pete", age: 18, surname: "Peterson" },
	{ name: "Ann", age: 19, surname: "Hathaway" }
];
alert(JSON.stringify(users.sort(byField('name'))));
alert(JSON.stringify(users.sort(byField('age'))));
alert(JSON.stringify(users.sort(byField('surname'))));
