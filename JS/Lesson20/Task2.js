/**
 * У нас есть объект salaries с зарплатами.
 * Создайте функцию topSalary(salaries), которая возвращает имя самого высокооплачиваемого сотрудника.
 * Если объект salaries пустой, то нужно вернуть null.
 * Если несколько высокооплачиваемых сотрудников, можно вернуть любого из них.
 * P.S. Используйте Object.entries и деструктурирование, чтобы перебрать пары ключ/значение.
 */
function topSalary(salaries) {
	let topEmployee = null;
	let topEmployeeSalary = 0;
	for (let [name, salary] of Object.entries(salaries)) {
		if (salary > topEmployeeSalary) {
			topEmployee = name;
			topEmployeeSalary = salary;
		}
	}
	return topEmployee; 
}
let salaries = {
	"John": NaN,
	"Pete": NaN,
	"Mary": NaN
};
alert(topSalary(salaries));