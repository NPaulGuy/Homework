/**
 * Создайте функцию конструктор Calculator, которая создаёт «расширяемые» объекты калькулятора.
 * Задание состоит из двух частей:
 * 1)Во-первых, реализуйте метод calculate(str), который принимает строку типа "1 + 2" в формате «ЧИСЛО оператор ЧИСЛО» (разделено пробелами) и возвращает результат. Метод должен понимать плюс + и минус -.
 * 2)Затем добавьте метод addMethod(name, func), который добавляет в калькулятор новые операции. Он принимает оператор name и функцию с двумя аргументами func(a,b), которая описывает его.
 * - Для этой задачи не нужны скобки или сложные выражения.
 * - Числа и оператор разделены ровно одним пробелом.
 * - Не лишним будет добавить обработку ошибок.
 */
function Calculator() {
	this.operators = ['+', '-'];
	this.functions = [
		(a, b) => a + b,
		(a, b) => a - b,
	];
	this.calculate = function(str) {
		parts = str.split(" ");
		// Если нет конструкции "ЧИСЛО оператор ЧИСЛО", то возвращаем false(ошибка).
		if (parts.length != 3) {
			return false;
		}
		// Если элементы конструкции не соответствуют, то также возвращаем false.
		if (
			isFinite(parts[0]) 
			&& isFinite(parts[2]) 
			&& this.operators.includes(parts[1])
		) {
			let funcNumber = this.operators.indexOf(parts[1]);
			return (this.functions[funcNumber])(parts[0], parts[2]);
		} else {
			return false;
		}
	}
	this.addMethod = function(name, func) {
		// Если параметр func является функцией, то продолжаем добавление метода.
		if (typeof func === 'function') {
			this.operators.push(name);
			this.functions.push(func);
			return this;
		} else {
			return false;
		}
	};
}
let calc = new Calculator;
calc.addMethod("*", (a, b) => a * b);
calc.addMethod("/", (a, b) => a / b);
calc.addMethod("**", (a, b) => a ** b);
alert(calc.calculate("3 ** 3"));