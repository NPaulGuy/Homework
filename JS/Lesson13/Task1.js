/**
 * Создайте функцию-конструктор Calculator, который создаёт объекты с тремя методами:
 * read() запрашивает два значения при помощи prompt и сохраняет их значение в свойствах объекта.
 * sum() возвращает сумму введённых свойств.
 * mul() возвращает произведение введённых свойств.
 */

function Calculator() {
	this.num1 = NaN;
	this.num2 = NaN;
	this.read = function() {
		this.num1 = +prompt("num1 is ", 0);
		this.num2 = +prompt("num2 is ", 0);
		return this;
	}
	this.sum = function() {
		return this.num1 + this.num2;
	}
	this.mul = function() {
		return this.num1 * this.num2;
	}
}
let calculator = new Calculator;
calculator.read();
alert("Sum of numbers is " + calculator.sum());
alert("Mul of numbers is " + calculator.mul());