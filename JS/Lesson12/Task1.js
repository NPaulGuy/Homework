/**
 * Создайте объект calculator (калькулятор) с тремя методами:
 * read() (читать) запрашивает два значения и сохраняет их как свойства объекта.
 * sum() (суммировать) возвращает сумму сохранённых значений.
 * mul() (умножить) перемножает сохранённые значения и возвращает результат.
 */
let calculator = {
	num1: NaN,
	num2: NaN,
	read() {
		this.num1 = +prompt("num1 is", 0);
		this.num2 = +prompt("num2 is", 0);
		return "";
	},
	sum() {
		return this.num1 + this.num2;
	},
	mul() {
		return this.num1 * this.num2;
	},
}
calculator.read(3,4);
alert("Sum of numbers is " + calculator.sum());
alert("Mul of numbers is " + calculator.mul());