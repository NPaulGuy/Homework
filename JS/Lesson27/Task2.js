/**
 * Создайте декоратор delay(f, ms), который задерживает каждый вызов f на ms миллисекунд. 
 * Другими словами, delay(f, ms) возвращает вариант f с «задержкой на ms мс».
 * Ваше решение должно передавать все аргументы и контекст this.
 */
function delay(f, ms) {
	function delayFunc() {
		// Моё решение
		setTimeout(f, ms, ...arguments);
		// Решение в ответе
		//setTimeout(() => f.apply(this, arguments), ms);
	}
	return delayFunc;
}
function f(x, y) {
	alert(x + y);
}
let f1000 = delay(f, 1000);
let f1500 = delay(f, 1500);
f1000("test", 1000);
f1500("test", 1500);