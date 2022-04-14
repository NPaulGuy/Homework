/**
 * У нас есть объект, в котором хранятся зарплаты нашей команды:
 * let salaries = {
 * 	John: 100,
 * 	Ann: 160,
 * 	Pete: 130
 * }
 * Напишите код для суммирования всех зарплат и сохраните результат в переменной sum. Должно получиться 390.
 * Если объект salaries пуст, то результат должен быть 0.
 */
function getTotalSalary(obj) {
	let result = 0;
	for (let name in obj) {
		result += Number(obj[name]);
	}
	return result;
}
let obj = {
	John: 100,
	Ann: 160,
	Pete: 130,
}
alert(getTotalSalary(obj));