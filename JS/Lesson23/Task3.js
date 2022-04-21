/**
 * Последовательность чисел Фибоначчи определяется формулой Fn = Fn-1 + Fn-2. То есть, следующее число получается как сумма двух предыдущих.
 * Напишите функцию fib(n) которая возвращает n-е число Фибоначчи.
 * P.S. Все запуски функций из примера выше должны работать быстро. Вызов fib(77) должен занимать не более доли секунды.
 */
/*function fib(n) {
	return n <= 1 ? n : fib(n - 1) + fib(n - 2); 
}*/
function fib(n) {
	let twoPrev = 1;
	let prev = 1;
	for (let i = 3; i <= n; i++) {
		let current = twoPrev + prev;
		twoPrev = prev;
		prev = current;
	}
	return prev;
}
alert(fib(77));