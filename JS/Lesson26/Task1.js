/**
 * Напишите функцию printNumbers(from, to), которая выводит число каждую секунду, начиная от from и заканчивая to.
 * Сделайте два варианта решения.
 * Используя setInterval.
 * Используя рекурсивный setTimeout.
 */
// SetInterval
/*function printNumbers(from, to) {
	let current = from;
	function outputNumber() {
		alert(current);
		current++;
		if (current > to) {
			clearInterval(timerId);
		}	
	}
	let timerId = setInterval(outputNumber, 1000);
}*/
// рекурсивный setTimeout
function printNumbers(from, to) {
	let current = from;
	let timerId = setTimeout(function tick() {
		alert(current);
		if (current < to) {
			timerId = setTimeout(tick, 1000);
		}
		current++;
	}, 1000);
}
printNumbers(3, 6);