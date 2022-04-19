/**
 * Напишите функцию getAverageAge(users), которая принимает массив объектов со свойством age и возвращает средний возраст.
 * Формула вычисления среднего арифметического значения: (age1 + age2 + ... + ageN) / N.
 */
function getAverageAge(users) {
	let ageSum = 0;
	users.map(user => {
		ageSum += user.age;
	});
	return ageSum / users.length;
}
let vasya = { name: "Вася", age: 25 };
let petya = { name: "Петя", age: 35 };
let masha = { name: "Маша", age: 29 };
let arr = [vasya, petya, masha];
alert(getAverageAge(arr));